<?php
// Loads the list of articles shown on /articles/ and in the feed at /articles/feed/
require_once(__DIR__.'/../vendor/autoload.php');

use Symfony\Component\Yaml\Yaml;

function load_articles() {
  return Yaml::parseFile(__DIR__.'/../data/articles.yml');
}

// Turns a relative link to a page on oauth.net into an absolute URL
function article_absolute_url($url) {
  if(strpos($url, '/') === 0) {
    return 'https://oauth.net'.$url;
  }
  return $url;
}
