<?php
require(__DIR__.'/../../vendor/autoload.php');
use Symfony\Component\Yaml\Yaml;

$files = glob(__DIR__.'/*.yml');

$languages = [];

foreach($files as $filename) {
  $data = Yaml::parseFile($filename);

  $languages[] = [
    'filename' => basename($filename),
    'path' => str_replace('.yml', '', basename($filename)),
    'name' => $data['name'],
  ];
}

file_put_contents(__DIR__.'/languages.json', json_encode($languages, JSON_PRETTY_PRINT));

