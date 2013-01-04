slightly_routed
===============

Slightly Routed is a small web framework which let's you create php websites which have routing à la Rails' views

## Why should i use this?

You want to build a template driven website with url routing (so that the Google loves you), but all other frameworks are just too big and do waaaaay more than you need. 
Also, you would prefer if you could just make the pages in plain html/js with some php peppered around. You don't want to learn a new templating language just for that


## What do i need?

Apache webserver with PHP5

## How to use this?

+ download and unpack
+ enable mod_rewrite on Apache (if it isn't allready that is) 
+ to edit the default layout change the 'site/layout.php' file. All other pages will be rendered from inisde the main layout
+ to add more pages to the site, do it like they do it in Rails :) Detailed explanation follows:

## How to add more pages to my site?

slightly_routed will map urls to the pages within your sites' root. For example:

```www.mysite.com/foo => "/foo.php"```

You can use folders as well

```www.mysite.com/foo/bar =>"/foo/bar.php"```

What if you want a page "foo" and a folder "foo"? Make a "foo" folder, and add index.php within it. Than it'll work like this:

```www.mysite.com/foo => "/foo/index.php"```

What if you have both "foo.php" page in the sites' root and the "foo" folder? Then folders index will be rendered, and page ignored

IMPORTANT! use only ".php" extension for your pages. For now, it's the only way

## Does it have caching/security/feature_x?

Nope, but i'm open to suggestions. Fork and make a pull request.

## Thank-you's and acknowledgements

Shout-out to my friend [Milan Levnajić](https://www.odesk.com/o/profiles/users/Graphic-engineer-and-designer_~013d98f3cf8cdc9131/) who needed such small but versatile framework and for whom i built this in the first place.

Many thanks to [FlorianH](https://github.com/FlorianH) who build the very cool routing library [Router](https://github.com/FlorianH/Router) which was used as a starting point for slightly_routed.

In the end, thanks Rails team since the i nicked the folder routnig thingie mechanich from the way Rails renders views. I just threw out the controller parts
