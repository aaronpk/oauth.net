<?php
require_once(__DIR__.'/../../vendor/autoload.php');

use Symfony\Component\Yaml\Yaml;

$authorFile = __DIR__.'/data/authors.yml';

$authors = Yaml::parseFile($authorFile);

$files = glob(__DIR__.'/drafts/*/status.json');
foreach($files as $file) {
  $status = json_decode(file_get_contents($file), true);
  if(isset($status['authors'])) {
    foreach($status['authors'] as $author) {
      if(!find_author_by_name($author)) {
        $authors['authors'][] = ['name' => $author];
      }
    }
  }
}

print_r($authors);

$yaml = Yaml::dump($authors, 3);
file_put_contents($authorFile, $yaml);



function find_author_by_name($name) {
  global $authors;

  foreach($authors['authors'] as $i=>$author) {
    if($author['name'] == $name) {
      return [$i, $author];
    }

    if(isset($author['alias'])) {
      foreach($author['alias'] as $alias) {
        if($alias == $name) {
          return [$i, $author];
        }
      }
    }
  }

  return null;
}
