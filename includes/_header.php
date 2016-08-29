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
         && time() < strtotime('2017-08-01')
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
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-4617305-25']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<?php endif; ?>

