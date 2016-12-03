# light-gulp

Speedy front-end workflow. This nodejs application (gulp) will help us to speed up our front-end workflow.
Version: 2.0

## Requirements

| Prerequisite    | How to check | How to install
| --------------- | ------------ | ------------- |
| PHP >= 5.4.x    | `php -v`     | [php.net](http://php.net/manual/en/install.php) |
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
$ gulp

```

## Usage

### PHP Application

You will need to use composer to install PHP library in order to use assets link efficiency. In terminal, use this command:

```
composer require vietartisans/light-gulp
```
Well done, then include autoload.php as usual by `require_once "vendor/autoload.php"`
And now you can use the assets like this:

```
<?php
echo asset_path('styles/main.css'); // Output http://domain.com/path-to-theme/dist/styles/main.css
echo asset_path('scripts/main.js'); // Output http://domain.com/path-to-theme/dist/scripts/main.js
echo asset_path('images/image.png'); // Output: http://domain.com/path-to-theme/dist/images/image.png
?>
```

### HTML

No magic in HTML, so just simply adding assets link like this: `/dist/styles/main.css`

## Change Logs
=== 2.0 ===
* Split it into seperate branches
* Use composer

=== 1.1 ===
* Update Readme.md
* Update scss structure

=== 1.0 ===
* First release
