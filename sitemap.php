<?php

$files = glob(__DIR__.'/public/*/index.php');
$files = array_merge($files, glob(__DIR__.'/public/*/*/index.php'));
$files = array_merge($files, glob(__DIR__.'/public/*/*/*/index.php'));
$files = array_merge($files, glob(__DIR__.'/public/*/*/*/*/index.php'));

$paths = [];

$paths[] = '/';

foreach($files as $file) {
  preg_match('~public(/.+/)index\.php~', $file, $match);
  $paths[] = $match[1];
}

$languages = json_decode(file_get_contents(__DIR__.'/data/code/languages.json'), true);
foreach($languages as $lang) {
  $paths[] = '/code/' . $lang['path'] . '/';
}

$paths = array_map(function($a){
  return 'https://oauth.net' . $a;
}, $paths);

$sitemap = implode("\n", $paths);

file_put_contents(__DIR__.'/public/sitemap.txt', $sitemap);
