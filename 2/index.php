<?php

$page_title = "OAuth 2.0 &mdash; OAuth";
$page_section = "";
$page_secondary = "";
$page_meta_description = "Resources and information related to the OAuth 2.0 protocol.";

?>
<?php require('../includes/_header.php'); ?>

<body class="<?php echo $page_section; ?>">
  <div class="container">
    <div id="header" class="column first last span-20">
      <h1 id="site-name" class="column first span-5 prepend-1 append-1"><a href="/">OAuth</a></h1>
      <div id="primary" class="column span-13 last">

<?php require('../includes/_nav_primary.php'); ?>

      </div>
      <div id="secondary" class="column span-18 append-1 prepend-1 first last">
      	 
      </div>
    </div>

    <div id="main" class="column first last span-18 prepend-1 append-1">
      <h2>OAuth 2.0</h2>

			<p><img src="/images/oauth-2-sm.png" alt="OAuth 2.0 logo" style="float:right; margin: 0 0 8px 8px;" />OAuth 2.0 is the next evolution of the OAuth protocol which was originally created in late 2006. OAuth 2.0 focuses on client developer simplicity while providing specific authorization flows for web applications, desktop applications, mobile phones, and living room devices. This specification is being developed within the <a href="https://www.ietf.org/mailman/listinfo/oauth">IETF OAuth WG</a> and is based on the <a href="http://wiki.oauth.net/OAuth-WRAP">OAuth WRAP</a> proposal.</p>
			<p>hueniverse.com's <a href="http://hueniverse.com/2010/05/introducing-oauth-2-0/" title="Introducing OAuth 2.0 &laquo;  hueniverse">Introduction to OAuth 2.0</a> provides a great deal of background and information about the design decisions in OAuth 2.0.
			<p>Questions, suggestions and protocol changes should be discussed on the <a href="https://www.ietf.org/mailman/listinfo/oauth">mailing list</a>.</p>
			<h3>Reading the spec</h3>
			<p>The latest version of the spec can be found at <a href="http://tools.ietf.org/html/draft-ietf-oauth-v2">http://tools.ietf.org/html/draft-ietf-oauth-v2</a>.</p>
			<h3>Implementations</h3>
			<h4>Servers</h4>
			<ul>
				<li><a href="http://groups.google.com/group/37signals-api/browse_thread/thread/86b0da52134c1b7e">37Signals (draft 5)</a></li>
				<li><a href="http://developers.facebook.com/docs/authentication/">Facebook's Graph API (draft 0)</a> (see <a href="http://www.sociallipstick.com/?p=239">http://www.sociallipstick.com/?p=239</a>)</li>
				<li><a href="http://github.com/aflatter/oauth2-ruby">Ruby oauth2-server (draft 0)</a></li>
			</ul>
			<h4>Clients</h4>
			<ul>
				<li><a href="http://github.com/leebyron/cocoa-oauth2">Cocoa</a></li>
				<li><a href="http://github.com/lukeredpath/LROAuth2Client">iPhone and iPad</a></li>
				<li><a href="http://github.com/intridea/oauth2">Ruby Gem</a></li>
				<li><a href="http://github.com/aflatter/oauth2-ruby">Ruby</a></li>
				<li><a href="http://github.com/litl/rauth">Python</a></li>
			</ul>

    </div>
<?php require('../includes/_footer.php'); ?>
