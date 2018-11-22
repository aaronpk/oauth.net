<?php
@header('X-Pingback: https://webmention.io/aaronpk/xmlrpc');
@header('Link: <https://webmention.io/aaronpk/webmention>; rel="webmention"');
function e($t) { return htmlspecialchars($t); }
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo !empty($page_title) ? $page_title : "OAuth &mdash; An open protocol to allow secure API authorization in a simple and standard method from web, mobile, and desktop applications." ?></title>
  <link href="/stylesheets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="/stylesheets/styles.css" rel="stylesheet" type="text/css" />
  <link href="/stylesheets/carbon.css" rel="stylesheet" type="text/css" />
  <link href="/stylesheets/print.css" rel="stylesheet" type="text/css" media="print" />
  <link rel="webmention" href="https://webmention.io/aaronpk/webmention" />
  <link rel="pingback" href="https://webmention.io/aaronpk/xmlrpc" />
</head>
<body>

<?php if($_SERVER['SERVER_NAME'] == 'oauth.net'): ?>
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-4617305-25', 'auto');
ga('send', 'pageview');
</script>
<script>
var trackFooterClick = function(url) {
   ga('send', 'event', 'footer', 'click', url, {
     'transport': 'beacon',
     'hitCallback': function(){document.location = url;}
   });
}
var trackOutboundClick = function(url) {
   ga('send', 'event', 'outbound', 'click', url, {
     'transport': 'beacon',
     'hitCallback': function(){document.location = url;}
   });
}
</script>
<?php endif; ?>

<?php require(__DIR__.'/_nav_primary.php'); ?>
<?php require(__DIR__.'/_new_banner.php'); ?>

