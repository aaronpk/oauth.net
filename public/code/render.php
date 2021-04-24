<?php
require(__DIR__.'/../../vendor/autoload.php');
chdir(__DIR__);

use Symfony\Component\Yaml\Yaml;


$path = $_SERVER['REQUEST_URI'];
if(!preg_match('~/code/([a-z]+)/~', $path, $match))
  die();

$lang = $match[1];

$filename = __DIR__.'/../../data/code/'.$lang.'.yml';

if(!file_exists($filename)) {
  header('HTTP/1.1 404 Not Found');
  echo 'Not Found';
  die();
}

$data = Yaml::parseFile($filename);
$EDIT_THIS_PAGE_LINK = 'https://github.com/aaronpk/oauth.net/blob/main/data/code/' . basename($filename);

$page_title = "OAuth Libraries for ".$data['name'];
$page_section = "";
$page_secondary = "";
$page_meta_description = "Find OAuth code and libraries for ".$data['name'];
require('../../includes/_header.php');
?>
<div class="container">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/code/">Code</a></li>
      <li class="breadcrumb-item active"><?= $data['name'] ?></li>
    </ol>
  </nav>
  <div>

    <img src="/images/code/<?= $lang ?>.png" style="float: right; height: 120px;">

    <h2>OAuth Libraries for <?= $data['name'] ?></h2>

    <p>Here you'll find the best <?= $data['name'] ?> libraries for building OAuth clients and servers.</p>

    <?php if(isset($data['client_libraries'])): ?>
      <h4>Client Libraries</h4>

      <ul>
        <?php foreach($data['client_libraries'] as $lib): ?>
          <li><?= $lib ?></li>
        <?php endforeach ?>
      </ul>
    <?php endif ?>

    <?php if(isset($data['server_libraries'])): ?>
      <h4>Server Libraries</h4>

      <ul>
        <?php foreach($data['server_libraries'] as $lib): ?>
          <li><?= $lib ?></li>
        <?php endforeach ?>
      </ul>
    <?php endif ?>

    <p>If you would like to add a library, you can <a href="<?= $EDIT_THIS_PAGE_LINK ?>">edit this page</a>.</p>

  </div>
</div>

<?php require('../../includes/_footer.php'); ?>
