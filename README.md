# Stanford CS248B course website

Source for <https://stanford-cs248b.github.io/> — *Fundamentals of Computer
Graphics: Animation and Simulation*.

This is a plain static site. No build step, no framework, no JavaScript: edit
the HTML and push, and GitHub Pages serves it from `main` at the repository
root.

## Layout

Each annual offering lives in its own directory, so past years stay frozen
rather than being overwritten:

```
index.html            redirect to the current offering
autumn22/             archived notice (site no longer available)
autumn24/             archived notice (site no longer available)
autumn25/             Fall 2025
autumn26/             Fall 2026
assets/               shared stylesheet and favicon
content/              teaser image and staff photos
```

Each year directory holds `index.html` (home page and schedule),
`courseinfo.html` (staff, policies, grading), and `lectures/index.html`
(slide links).

## Starting a new year

1. Copy the most recent year directory, e.g. `cp -r autumn26 autumn27`.
2. Update the year, meeting pattern, staff, and schedule dates. Take the
   quarter start/end, holidays, and recess dates from the official Stanford
   academic calendar rather than assuming they shift by a fixed offset.
3. Strip the previous year's slide links, assignment dates, and Ed/Canvas
   links so nothing points at a stale section.
4. Keep the new directory unlinked while you work on it. The pages carry
   `<meta name="robots" content="noindex, nofollow">` for exactly this; note
   that it keeps the pages out of search results but does **not** make them
   private, since the repository and the published site are both public.
5. To launch, remove the `noindex` tags and repoint the redirect in the root
   `index.html` (three occurrences of the target path).

## Conventions

- Relative links only, so a year directory can be copied without rewriting
  paths. Pages one level down use `../assets/...`; `lectures/` uses
  `../../assets/...`.
- Lecture slides and videos are hosted externally (Drive, Dropbox, Panopto)
  and linked, never committed. GitHub Pages caps a published site at 1 GB,
  and large binaries in git are difficult to remove later.
- Never commit credentials, logs, server configuration, or student data.
  GitHub Pages serves every file in the repository as-is at a public URL,
  including file types it cannot execute.
