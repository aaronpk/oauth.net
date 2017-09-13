<?php
@header('X-Pingback: https://webmention.io/aaronpk/xmlrpc');
@header('Link: <https://webmention.io/aaronpk/webmention>; rel="webmention"');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <script type="text/javascript">var _sf_startpt=(new Date()).getTime()</script>
	<title>
<?php if ($page_title)
{ 
	echo $page_title;
}
	else
{
	echo "OAuth &mdash; An open protocol to allow secure API authorization in a simple and standard method from desktop and web applications.";
}

?>
	</title>
	<link href="/stylesheets/style.css" rel="stylesheet" type="text/css" />
  <link href="/stylesheets/carbon.css" rel="stylesheet" type="text/css" />
  <link href="/stylesheets/print.css" rel="stylesheet" type="text/css" media="print" /> 
  <link rel="webmention" href="https://webmention.io/aaronpk/webmention" />
  <link rel="pingback" href="https://webmention.io/aaronpk/xmlrpc" />
</head>
<body>

<?php if(time() > strtotime('2016-08-01') 
         && time() < strtotime('2018-08-01')
         && $_SERVER['SERVER_NAME'] == 'oauth.net'): ?>
<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-MLQ3KK"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MLQ3KK');</script>
<!-- End Google Tag Manager -->
<?php endif; ?>

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
</script>
<?php endif; ?>

