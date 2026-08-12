<?php
// Router script for PHP built-in server.
// Needed because the built-in server misroutes directory names containing dots
// (e.g. /2.1/) — it treats the dot as a file extension instead of finding index.php.
//
// Usage: php -S 127.0.0.1:8080 -t public router.php

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$file = __DIR__ . '/public' . $uri;

// Static file (CSS, JS, images, etc.) — let the built-in server handle it.
if (is_file($file)) {
    return false;
}

// Directory — find and execute its index.php.
$index = rtrim($file, '/') . '/index.php';
if (file_exists($index)) {
    chdir(dirname($index));
    require $index;
    return true;
}

// Nothing matched; fall back to built-in 404.
return false;
