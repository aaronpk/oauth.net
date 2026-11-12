<?php
// Atom feed of the articles listed on /articles/
require_once(__DIR__.'/../../../includes/articles.php');

$feed_url = 'https://oauth.net/articles/feed/';

// Only dated articles can go in the feed, since Atom requires a date for every entry
$articles = array_values(array_filter(load_articles(), function($a){
  return !empty($a['published']);
}));
usort($articles, function($a, $b){
  return strcmp($b['published'], $a['published']);
});

function atom_date($date) {
  return gmdate('Y-m-d\T00:00:00\Z', strtotime($date.' UTC'));
}

function x($t) {
  return htmlspecialchars($t, ENT_XML1 | ENT_QUOTES, 'UTF-8');
}

header('Content-Type: application/atom+xml; charset=utf-8');
echo '<?xml version="1.0" encoding="utf-8"?>'."\n";
?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:base="https://oauth.net/">
  <title>OAuth Articles</title>
  <subtitle>Articles about OAuth from the community, as listed on oauth.net</subtitle>
  <id><?= x($feed_url) ?></id>
  <link rel="self" type="application/atom+xml" href="<?= x($feed_url) ?>"/>
  <link rel="alternate" type="text/html" href="https://oauth.net/articles/"/>
  <updated><?= count($articles) ? atom_date($articles[0]['published']) : atom_date('1970-01-01') ?></updated>
<?php foreach($articles as $article): ?>
  <entry>
    <title><?= x($article['title']) ?></title>
    <id><?= x(article_absolute_url($article['url'])) ?></id>
    <link rel="alternate" type="text/html" href="<?= x(article_absolute_url($article['url'])) ?>"/>
    <published><?= atom_date($article['published']) ?></published>
    <updated><?= atom_date($article['published']) ?></updated>
    <author>
      <name><?= x($article['author']['name']) ?></name>
<?php if(!empty($article['author']['url'])): ?>
      <uri><?= x($article['author']['url']) ?></uri>
<?php endif; ?>
    </author>
<?php foreach($article['tags'] ?? [] as $tag): ?>
    <category term="<?= x($tag) ?>"/>
<?php endforeach; ?>
    <summary type="html"><?= x($article['summary']) ?></summary>
  </entry>
<?php endforeach; ?>
</feed>
