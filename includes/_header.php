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
  <script>
    (function() {
      var saved = localStorage.getItem('theme');
      var prefDark = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;
      var theme = saved || (prefDark ? 'dark' : 'light');
      document.documentElement.setAttribute('data-theme', theme);
    })();
  </script>
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
  <div class="topbar-actions">
    <button class="theme-toggle" id="theme-toggle" aria-label="Toggle dark/light theme" title="Toggle theme">
      <svg class="icon-sun" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
        <circle cx="12" cy="12" r="5"></circle>
        <line x1="12" y1="1" x2="12" y2="3"></line>
        <line x1="12" y1="21" x2="12" y2="23"></line>
        <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
        <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
        <line x1="1" y1="12" x2="3" y2="12"></line>
        <line x1="21" y1="12" x2="23" y2="12"></line>
        <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
        <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
      </svg>
      <svg class="icon-moon" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
        <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
      </svg>
    </button>
    <button class="sidebar-toggle" id="sidebar-toggle" aria-label="Toggle navigation" aria-expanded="false">
      <span></span><span></span><span></span>
    </button>
  </div>
</div>

<?php require(__DIR__.'/_new_banner.php'); ?>

<div class="site-layout">
  <aside class="site-sidebar" id="site-sidebar">
    <?php require(__DIR__.'/_sidebar_global.php'); ?>
  </aside>
  <div class="site-overlay" id="site-overlay"></div>
  <main class="site-main">
