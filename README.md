# light-gulp

Speedy front-end workflow. This nodejs application (gulp) will help us to speed up our front-end workflow.

Version: 2.1

## Requirements

| Prerequisite    | How to check | How to install
| --------------- | ------------ | ------------- |
| Node.js >= 4.5  | `node -v`    | [nodejs.org](http://nodejs.org/) |
| gulp >= 3.8.10  | `gulp -v`    | `npm install -g gulp` |
| Bower >= 1.3.12 | `bower -v`   | `npm install -g bower` |

## Branches

Here are the list of branches that I will develop (plan):
* wp-theme: For wordpress theme development
* wp-plugin: For wordpress plugin development
* bootstrap: For HTML or pure PHP boilerplate. It contains jquery, bootstrap libraries as default.
* master: For HTML or PHP, no extra libraries.

## Installation

Go to theme directory or anywhere you place your assets. And run these commands:

```
#!/bin/bash

$ git init .
$ git remote add origin git@github.com:Viet-Artisans/light-gulp.git
$ git pull origin master
$ npm install
$ bower install
$ gulp

```

## Usage

### Assets URL

Assets URL is what we show to visitors on the website. For example: http://domain.com/dist/styles/main.css. They have combined and minified files that we developed in `assets` folder.
Those files in `dist` folder were created by `gulp` (see Gulp section).

There are 2 ways we often include our assets URL: PHP Application and pure HTML.

#### PHP Application

You will need to use composer to install PHP library in order to use assets link efficiency. 
I have created another repository to do this one. See it here [light-gulp-composer](https://github.com/Viet-Artisans/light-gulp-composer/)

#### Pure HTML

No magic in HTML, so just simply adding assets link like this: `/dist/styles/main.css`

### Gulp

This is the main part of this application. Gulp is an awesome tool that help us improve our front-end works by combining and minifying all of our files (css, js, images, fonts).
This repository was forked from Roots Sage Theme, I found that their gulp file was slow so I decided to create this one to improve the speed. And that's why it named `light-gulp`

And here are the list of gulp tasks that I have created or changed from the original Roots Sage gulpfile.js

```
gulp
```
This command only combine and and minify our main.css and main.js which we want to see changes on our developing website immediately.

```
gulp build
```
This command will process all files in assets folder: images, fonts, scss, js.

### Manifest.json

Manifest.json is a file that help us manage our assets. We can import js, css libraries here by adding some lines to this file. E.g.

```
#! manifest.json

...
    "vendor.js": {
      "files": [
        "scripts/jquery.mousewheel-3.0.6.pack.js",
        "scripts/jquery.fancybox.js",
        "scripts/owl.carousel.js",
        "scripts/slick.min.js",
        "scripts/jquery-ui.js",
        "scripts/jquery.sticky.js",
        "scripts/jquery.flexslider.js",
        "scripts/readmore.js",
        "scripts/masonry.pkgd.min.js"
      ],
      "main": true
    },
...

```

The code snippet above mean you will have to copy your library files into `/assets/scripts/` folder and edit manifest.json, put those files path to vendors.js section
Then all the source code of those files would be combined to a file in `/dist/scripts/vendor.js`

It would work the same with CSS. Playing around with manifest.json file and have fun :-)

Read more about this in [issue](https://github.com/Viet-Artisans/light-gulp/issues/25) to understand file structure.

## Change Logs
=== 2.1 ===
* Remove wiredep

=== 2.0 ===
* Split it into seperate branches
* Use composer
* Update readme
* Update gulp main

=== 1.1 ===
* Update Readme.md
* Update scss structure

=== 1.0 ===
* First release
