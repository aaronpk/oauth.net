<?php

$page_title = "Articles &mdash; OAuth";
$page_section = "articles";
$page_secondary = "";
$page_meta_description = "";
$page_feed = ['url' => '/articles/feed/', 'title' => 'OAuth Articles'];

require_once('../../includes/articles.php');
$articles = load_articles();

require('../../includes/_header.php');
?>

  <div class="container">
    <div>
      <h2>Articles</h2>

      <p>The OAuth community is dedicated to helping provide information on the proper use of the OAuth protocols through a series of articles on different topics.</p>

      <p>Follow new articles with the <a href="/articles/feed/">Atom feed</a>.</p>

<?php foreach($articles as $article): ?>
      <div class="article h-entry">
        <h4 class="p-name"><a href="<?= e($article['url']) ?>" class="u-url"><?= e($article['title']) ?></a></h4>
        <div class="meta">
          <?php if(!empty($article['author']['url'])): ?><a href="<?= e($article['author']['url']) ?>" class="u-author h-card"><?= e($article['author']['name']) ?></a><?php else: ?><span class="p-author h-card"><?= e($article['author']['name']) ?></span><?php endif; ?>
<?php if(!empty($article['published'])): ?>
          ・ <time class="dt-published" datetime="<?= e($article['published']) ?>"><?= date('M j, Y', strtotime($article['published'])) ?></time>
<?php endif; ?>
        </div>
<?php if(!empty($article['tags'])): ?>
        <div class="tags">
          <?= e(implode(' ', array_map(function($t){ return '#'.$t; }, $article['tags']))) ?>

        </div>
<?php endif; ?>
        <p class="e-summary"><?= $article['summary'] ?></p>
      </div>

<?php endforeach; ?>
    </div>
  </div>

<?php require('../../includes/_footer.php'); ?>
