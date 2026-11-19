// 🫧 Collider Maker: approximate an image's shape by a few disks (for Trick Shot's Body).
// Pure functions (no p5): they work in the browser page and in node.
//
// 1. makeMask: which pixels are inside the shape (alpha, or dark-on-light), with the interior of line art filled in.
// 2. distanceTransform: distance from each inside pixel to the nearest outside pixel (exact Euclidean).
// 3. fitDisks: greedily adds the inscribed disk that covers the most still-uncovered pixels, until the target
//    coverage or the disk budget is reached. Disk centers come from the shape's "ridge" (medial axis) pixels.

/**
 * @param {Uint8ClampedArray} rgba Image pixels (RGBA).
 * @param {number} w, h Size.
 * @param {object} opt { threshold (0-255, luminance below it is "ink"), invert, fillInterior, mode: "auto"|"alpha"|"luminance" }
 * @return {Uint8Array} mask (1 = inside)
 */
function makeMask(rgba, w, h, opt = {}) {
	const threshold = opt.threshold ?? 160, invert = !!opt.invert, fillInterior = opt.fillInterior ?? true;
	let mode = opt.mode ?? "auto";
	if (mode === "auto") { // use alpha if the image has real transparency
		let transparent = 0;
		for (let i = 3; i < rgba.length; i += 4) if (rgba[i] < 200) transparent++;
		mode = (transparent > 0.01 * w * h) ? "alpha" : "luminance";
	}
	const ink = new Uint8Array(w * h);
	for (let i = 0; i < w * h; i++) {
		const r = rgba[4 * i], g = rgba[4 * i + 1], b = rgba[4 * i + 2], a = rgba[4 * i + 3];
		let inside = (mode === "alpha") ? a >= 128 : (a >= 128 && 0.299 * r + 0.587 * g + 0.114 * b < threshold);
		if (invert) inside = !inside;
		ink[i] = inside ? 1 : 0;
	}
	if (!fillInterior) return ink;
	// Fill: everything not reachable from the image border through non-ink pixels is inside (handles outline drawings).
	const outside = new Uint8Array(w * h), stack = [];
	const push = (x, y) => { const i = y * w + x; if (!ink[i] && !outside[i]) { outside[i] = 1; stack.push(i); } };
	for (let x = 0; x < w; x++) { push(x, 0); push(x, h - 1); }
	for (let y = 0; y < h; y++) { push(0, y); push(w - 1, y); }
	while (stack.length) {
		const i = stack.pop(), x = i % w, y = (i / w) | 0;
		if (x > 0) push(x - 1, y);
		if (x < w - 1) push(x + 1, y);
		if (y > 0) push(x, y - 1);
		if (y < h - 1) push(x, y + 1);
	}
	const mask = new Uint8Array(w * h);
	for (let i = 0; i < w * h; i++) mask[i] = outside[i] ? 0 : 1;
	return mask;
}

/** Exact Euclidean distance (pixels) from each pixel to the nearest outside pixel (Felzenszwalb & Huttenlocher). */
function distanceTransform(mask, w, h) {
	const INF = 1e20, n = Math.max(w, h);
	const f = new Float64Array(n), d = new Float64Array(n), v = new Int32Array(n), z = new Float64Array(n + 1);
	const dt1 = (len) => { // 1D squared distance transform of f[0..len) into d
		let k = 0;
		v[0] = 0; z[0] = -INF; z[1] = INF;
		for (let q = 1; q < len; q++) {
			let s = ((f[q] + q * q) - (f[v[k]] + v[k] * v[k])) / (2 * q - 2 * v[k]);
			while (s <= z[k]) { k--; s = ((f[q] + q * q) - (f[v[k]] + v[k] * v[k])) / (2 * q - 2 * v[k]); }
			k++; v[k] = q; z[k] = s; z[k + 1] = INF;
		}
		k = 0;
		for (let q = 0; q < len; q++) {
			while (z[k + 1] < q) k++;
			d[q] = (q - v[k]) * (q - v[k]) + f[v[k]];
		}
	};
	const D = new Float64Array(w * h);
	for (let i = 0; i < w * h; i++) D[i] = mask[i] ? INF : 0;
	for (let x = 0; x < w; x++) { // columns
		for (let y = 0; y < h; y++) f[y] = D[y * w + x];
		dt1(h);
		for (let y = 0; y < h; y++) D[y * w + x] = d[y];
	}
	for (let y = 0; y < h; y++) { // rows
		for (let x = 0; x < w; x++) f[x] = D[y * w + x];
		dt1(w);
		for (let x = 0; x < w; x++) D[y * w + x] = d[x];
	}
	const out = new Float32Array(w * h);
	for (let i = 0; i < w * h; i++) out[i] = Math.sqrt(D[i]);
	return out;
}

/**
 * Greedy disk cover of the mask.
 * @param {object} opt { maxDisks, minRadius (px), coverage (0-1 target) }
 * @return {object} { disks: [[x, y, r], ...] in pixels, coverage }
 */
function fitDisks(mask, w, h, opt = {}) {
	const maxDisks = opt.maxDisks ?? 16, minRadius = opt.minRadius ?? 2, target = opt.coverage ?? 0.98;
	// Distances with a one-pixel outside border all around, so a shape that touches the image's edge still gets
	// disks that fit inside it (the image's edge counts as the shape's boundary).
	const W = w + 2, padded = new Uint8Array(W * (h + 2));
	for (let y = 0; y < h; y++) padded.set(mask.subarray(y * w, (y + 1) * w), (y + 1) * W + 1);
	const P = distanceTransform(padded, W, h + 2), D = new Float32Array(w * h);
	for (let y = 0; y < h; y++) D.set(P.subarray((y + 1) * W + 1, (y + 1) * W + 1 + w), y * w);
	let total = 0;
	for (let i = 0; i < w * h; i++) total += mask[i];
	if (total == 0) return { disks: [], coverage: 0 };
	// Candidate centers: ridge pixels of the distance (the medial axis): at least as far from the outside as both
	// neighbors along some direction. (Strict peaks alone miss bumps like a bottle's base lobes.)
	const cand = [];
	const pairs = [[1, 0], [0, 1], [1, 1], [1, -1]];
	for (let y = 1; y < h - 1; y++)
		for (let x = 1; x < w - 1; x++) {
			const i = y * w + x, r = D[i] - 0.5;
			if (r < minRadius) continue;
			if (pairs.some(([dx, dy]) => D[i] >= D[i + dy * w + dx] && D[i] >= D[i - dy * w - dx])) cand.push([x, y, r]);
		}
	const covered = new Uint8Array(w * h);
	let nCovered = 0;
	const disks = [];
	const gain = ([cx, cy, r], mark) => {
		let g = 0;
		const r2 = r * r;
		for (let y = Math.max(0, Math.floor(cy - r)); y <= Math.min(h - 1, Math.ceil(cy + r)); y++)
			for (let x = Math.max(0, Math.floor(cx - r)); x <= Math.min(w - 1, Math.ceil(cx + r)); x++) {
				const i = y * w + x;
				if ((x - cx) * (x - cx) + (y - cy) * (y - cy) <= r2 && mask[i] && !covered[i]) {
					g++;
					if (mark) covered[i] = 1;
				}
			}
		return g;
	};
	while (disks.length < maxDisks && nCovered < target * total) {
		let best = null, bestGain = 0;
		for (const c of cand) {
			const g = gain(c, false);
			if (g > bestGain) { bestGain = g; best = c; }
		}
		if (!best || bestGain < Math.max(1, 0.002 * total)) break;
		nCovered += gain(best, true);
		disks.push(best.slice());
	}
	return { disks, coverage: nCovered / total };
}

/** Bounding box {x0, y0, x1, y1} of the mask (pixels), or null. */
function maskBounds(mask, w, h) {
	let x0 = w, y0 = h, x1 = -1, y1 = -1;
	for (let y = 0; y < h; y++)
		for (let x = 0; x < w; x++)
			if (mask[y * w + x]) { if (x < x0) x0 = x; if (x > x1) x1 = x; if (y < y0) y0 = y; if (y > y1) y1 = y; }
	return x1 < 0 ? null : { x0, y0, x1: x1 + 1, y1: y1 + 1 };
}

if (typeof module !== "undefined") module.exports = { makeMask, distanceTransform, fitDisks, maskBounds };
