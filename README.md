# light-gulp
Speedy front-end workflow. This nodejs application (gulp) will help us speed up our front-end workflow.

#Installation
##Setup files
Go to theme directory or anywhere you place your assets. And run these commands:

```
#!/bin/bash

$ git init .
$ git remote add origin git@github.com:Viet-Artisans/light-gulp.git
$ mkdir bower_components
$ gulp

```

##Usage
###Wordpress

- Edit functions.php file, insert this line to the end of file `include "wp-gulp.php";`

###Static PHP

- Similar to Wordpress, `include "html-gulp.php"`

**Note**: With 2 methods above, you can use `echo asset_path('styles/main.css')` or `asset_path('scripts/main.js')` or `asset_path('images/image.png')`

###HTML

- Use <link> and <javascript> tag to include `dist/styles/main.css` and `dist/scripts/main.js` to your file/web.
