<?php
use Symfony\Component\Yaml\Yaml;

class ArticlesTest extends PHPUnit\Framework\TestCase {

  /**
   * @dataProvider loadArticles
   */
  public function testArticle($article, $label) {

    $this->assertIsArray($article, 'Article must be a mapping: '.$label);

    foreach(['title', 'url', 'author', 'summary'] as $key) {
      $this->assertArrayHasKey($key, $article, 'Missing "'.$key.'" in: '.$label);
    }

    $this->assertIsString($article['title'], '"title" must be a string in: '.$label);
    $this->assertIsString($article['summary'], '"summary" must be a string in: '.$label);
    $this->assertSame(1, preg_match('~^(https?://|/)~', $article['url']),'"url" must be absolute or start with / in: '.$label);

    $this->assertIsArray($article['author'], '"author" must have a name and optional url in: '.$label);
    $this->assertArrayHasKey('name', $article['author'], 'Missing author "name" in: '.$label);
    $this->assertEmpty(array_diff(array_keys($article['author']), ['name', 'url']), 'Author contains extra properties in: '.$label);

    if(isset($article['published'])) {
      $this->assertIsString($article['published'], '"published" must be a quoted string like "2024-01-31" in: '.$label);
      $this->assertSame(1, preg_match('/^\d{4}-\d{2}-\d{2}$/', $article['published']),'"published" must be YYYY-MM-DD in: '.$label);
    }

    if(isset($article['tags'])) {
      $this->assertIsArray($article['tags'], '"tags" must be a list in: '.$label);
      foreach($article['tags'] as $tag) {
        $this->assertIsString($tag, 'Found a tag that is not a string in: '.$label);
      }
    }

    $this->assertEmpty(array_diff(array_keys($article), ['title', 'url', 'author', 'published', 'tags', 'summary']), 'Article contains extra properties: '.$label);
  }

  public function testFileParses() {
    $articles = Yaml::parseFile(__DIR__.'/../data/articles.yml');
    $this->assertIsArray($articles, 'data/articles.yml must be a list of articles');
    $this->assertNotEmpty($articles);
  }

  public function loadArticles() {
    $articles = Yaml::parseFile(__DIR__.'/../data/articles.yml');
    foreach($articles as $i => $article) {
      yield ($article['title'] ?? 'article #'.$i) => [$article, $article['title'] ?? 'article #'.$i];
    }
  }

}
