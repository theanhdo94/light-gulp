# light-gulp
Speedy front-end workflow. This nodejs application (gulp) will help us speed up our front-end workflow.
Version: 1.1

## Installation
Go to theme directory or anywhere you place your assets. And run these commands:

```
#!/bin/bash

$ git init .
$ git remote add origin git@github.com:Viet-Artisans/light-gulp.git
$ git pull origin master
$ mkdir bower_components
$ gulp

```

### Wordpress

- Edit functions.php file, insert this line to the end of file `include "wp-gulp.php";`

### Static PHP

- In your index.php (or main.php whatever your application using) add this line `include "html-gulp.php"` to import asset_path function to the application.


###HTML

- Use <link> and <javascript> tag to include `dist/styles/main.css` and `dist/scripts/main.js` to your file/web.


## Usage
With php application, you can use asset_path function to call the resources.
```
<?php
echo asset_path('styles/main.css');
echo asset_path('scripts/main.js');
echo asset_path('images/image.png');
?>
```

## Change logs
=== 1.1 ===
* Update Readme.md
* Update scss structure

=== 1.0 ===
* First release
