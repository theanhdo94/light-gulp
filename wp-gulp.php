<?php
if (!defined('DIST_DIR')) {
  // Path to the build directory for front-end assets
  define('DIST_DIR', '/dist/');
}

class JsonManifest {
  private $manifest;

  public function __construct($manifest_path) {
    if (file_exists($manifest_path)) {
      $this->manifest = json_decode(file_get_contents($manifest_path), true);
    } else {
      $this->manifest = [];
    }
  }

  public function get() {
    return $this->manifest;
  }

  public function getPath($key = '', $default = null) {
    $collection = $this->manifest;
    if (is_null($key)) {
      return $collection;
    }
    if (isset($collection[$key])) {
      return $collection[$key];
    }
    foreach (explode('.', $key) as $segment) {
      if (!isset($collection[$segment])) {
        return $default;
      } else {
        $collection = $collection[$segment];
      }
    }
    return $collection;
  }
}

function asset_path($filename) {
  $dist_path = get_stylesheet_directory_uri() . DIST_DIR;
  $directory = dirname($filename) . '/';
  $file = basename($filename);
  static $manifest;

  if (empty($manifest)) {
    $manifest_path = get_stylesheet_directory() . DIST_DIR . 'assets.json';
    $manifest = new JsonManifest($manifest_path);
  }

  if (array_key_exists($file, $manifest->get())) {
    return $dist_path . $directory . $manifest->get()[$file];
  } else {
    return $dist_path . $directory . $file;
  }
}


function assets_enqueue_scripts() { 
  wp_enqueue_style( 'assets-custom-style', asset_path('styles/main.css'), false, null );
  wp_enqueue_script( 'assets-custom-script', asset_path('scripts/main.js'), ['jquery'], null, true );
}
add_action( 'wp_enqueue_scripts', 'assets_enqueue_scripts', 99999);
