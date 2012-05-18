<?php

$page_title = "Extensions &mdash; OAuth";
$page_section = "code";
$page_secondary = "extensions";
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
				  <li><a class="selected" href="/code/extensions">Extensions</a></li>
				</ul>
      </div>
    </div>

    <div id="main" class="column first last span-18 prepend-1 append-1">
			
			<h2>Extensions</h2>
			
			<p><a href="/documentation/spec">OAuth Core</a> sets out a basic framework for doing delegated authentication, but it is not intended to cover all possible implementation cases. Instead, OAuth can be extended to support technologies like <span class="caps">XML</span>-RPC, <span class="caps">SOAP</span> and stronger forms of encryption and signing.</p>

			<p>If you are interested in extending OAuth, please visit the <a href="http://wiki.oauth.net/Extensions">Extensions wiki page</a> or join the <a href="http://groups.google.com/group/oauth-extensions/">OAuth Extensions mailing list</a>.</p>
    </div>
<?php require('../../includes/_footer.php'); ?>