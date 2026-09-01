<?php
@header('X-Pingback: https://webmention.io/oauth/xmlrpc');
@header('Link: <https://webmention.io/oauth/webmention>; rel="webmention"');
function e($t) { return htmlspecialchars($t); }
function nav_active($prefix) {
  $uri = $_SERVER['REQUEST_URI'];
  return strpos($uri, $prefix) === 0 ? ' active' : '';
}
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo !empty($page_title) ? $page_title : "OAuth — The Open Standard for Authorization" ?></title>
  <link href="/stylesheets/bootstrap-5.2.3/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="/stylesheets/style.css?8" rel="stylesheet" type="text/css" />
  <link href="/stylesheets/print.css" rel="stylesheet" type="text/css" media="print" />
  <link rel="webmention" href="https://webmention.io/oauth/webmention" />
</head>
<body>

<div id="ea">
  <div class="ea-placement"><div class="ea-content"></div></div>
</div>

<?php if($_SERVER['SERVER_NAME'] == 'oauth.net'): ?>
<script src="https://cdn.usefathom.com/script.js" site="KKZQTOOD" defer></script>
<script>
var trackOutboundClick = function(url, code) {
  if(window.fathom) window.fathom.trackGoal(code, 0);
}
</script>
<?php endif; ?>

<div class="site-topbar">
  <a href="/" class="topbar-brand">
    <img src="/images/oauth-logo-square.png" width="30" alt="OAuth">
    oauth.net
  </a>
  <button class="sidebar-toggle" id="sidebar-toggle" aria-label="Toggle navigation" aria-expanded="false">
    <span></span><span></span><span></span>
  </button>
</div>

<?php require(__DIR__.'/_new_banner.php'); ?>

<div class="site-layout">
  <aside class="site-sidebar" id="site-sidebar">
    <?php require(__DIR__.'/_sidebar_global.php'); ?>
  </aside>
  <div class="site-overlay" id="site-overlay"></div>
  <main class="site-main">
