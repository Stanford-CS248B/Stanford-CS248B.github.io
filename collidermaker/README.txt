Collider Maker (CS248B, Project 4: Trick Shot)
==============================================

A single static web page: it runs entirely in the visitor's browser. There is no server code,
no build step, and nothing to install. It loads no outside libraries.

To post it
----------
1. Copy this "collidermaker" folder, as it is, into the course site's GitHub Pages repository,
   e.g. as  p4/collidermaker/  (any path works).
2. Commit and push.
3. Open  https://<course site>/p4/collidermaker/  (index.html is the page). Check that a cute
   green critter appears with red disks over it, and that the small picture buttons under
   "Or try:" each load a different picture.
4. Send the final URL to Doug James, who will put it in the project handout.

What's in it
------------
  index.html           the page (its styles and script are inside it)
  colliderFit.js       the shape-fitting code the page uses
  examples/samples.js  the sample pictures, built into a script (needed by the "Or try" buttons)
  examples/*.png       the same sample pictures as files (for links like  index.html?img=examples/top_hat.png)

Keep the folder's structure: index.html loads colliderFit.js and examples/samples.js by relative paths.

Pictures
--------
The cute critter, little robot, Easter egg and sports bottle come from Openclipart and are public
domain (CC0); the page's footer credits them. The top hat was made for the course.
