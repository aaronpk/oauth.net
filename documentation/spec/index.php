<?php

$page_title = "Getting Started &mdash; OAuth";
$page_section = "documentation";
$page_secondary = "getting-started";
$page_meta_description = "";

?>
<?php require('../../includes/_header.php'); ?>

<body class="<?php echo $page_section; ?>">
  <div class="container">
    <div id="header" class="column first last span-20">
      <h1 id="site-name" class="column first span-5 prepend-1 append-1"><a href="/">OAuth</a></h1>
      <div id="primary" class="column span-13 last">

<?php require('../../includes/_nav_primary.php'); ?>

      </div>
      <div id="secondary" class="column span-18 append-1 prepend-1 first last">
        <ul class="navigation">
          <li><a class="selected" href="/documentation/spec">Spec</a></li>
          <li><a href="/documentation/faq">FAQ</a></li>
          <li><a href="/documentation/getting-started">Getting Started</a></li>
        </ul>
      </div>
    </div>

    <div id="main" class="column first last span-18 prepend-1 append-1">
			<h2>Specifications</h2>
			
			<p><a href="http://tools.ietf.org/html/rfc5849">RFC 5849: The OAuth 1.0 Protocol</a> - the final version of the OAuth 1.0 specification.</p>
			<p><a href="http://tools.ietf.org/html/draft-ietf-oauth-v2">OAuth 2.0 Working Draft</a> - the latest IETF proposal.</p>
			<h2>Obsolete Specifications</h2>
			<p><a href="/core/1.0">OAuth Core 1.0</a> was released December 4, 2007.
			<br/><a href="/core/1.0a">OAuth Core 1.0 Revision A</a> was released June 24, 2009.</p>
			
			<p>You can send your comments to the <a href="http://groups.google.com/group/oauth/">mailing list</a> at spec@oauth.net or <a href="http://getsatisfaction.com/oauth">join us in the forums</a> to post questions, share ideas, or report problems.</p>
    </div>
<?php require('../../includes/_footer.php'); ?>
