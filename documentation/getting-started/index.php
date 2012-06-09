<?php

$page_title = "Getting Started &mdash; OAuth";
$page_section = "documentation";
$page_secondary = "getting-started";
$page_meta_description = "";

require('../../includes/_header.php');
?>

<body class="<?php echo $page_section; ?>">
  <div class="container">
    <div id="header" class="column first last span-20">
      <h1 id="site-name" class="column first span-5 prepend-1 append-1"><a href="/">OAuth</a></h1>
      <div id="primary" class="column span-13 last">

<?php require('../../includes/_nav_primary.php'); ?>

      </div>
      <div id="secondary" class="column span-18 append-1 prepend-1 first last">
        <ul class="navigation">
          <li><a href="/documentation/spec">Spec</a></li>
          <li><a href="/documentation/faq">FAQ</a></li>
          <li><a class="selected" href="/documentation/getting-started">Getting Started</a></li>
        </ul>
      </div>
    </div>

    <div id="main" class="column first last span-18 prepend-1 append-1">
      <h2>Getting Started</h2>
			
			<p><a href="http://hueniverse.com">Hueniverse</a> publishes a guide which covers many of the topics needed to understand and implement the protocol and is available in multiple parts.</p>
			
			<p><h3>The <em><a href="http://hueniverse.com/oauth/">Beginner&#8217;s Guide to OAuth</a></em> includes:</h3></p>
			
			<h3>Part I: Overview</h3>
			<ul>
				<li>Introduction</li>
				<li>End-user Benefits</li>
				<li>Scope</li>
				<li>Specification Structure</li>
				<li>Definitions</li>
			</ul>
			
			<h3>Part II: Protocol Workflow</h3>
			<ul>
				<li>End-use experience</li>
				<li>Protocol requests</li>
			</ul>
			
			<h3>Part III: Security Architecture</h3>
			<ul>
				<li>Beyond HTTP Basic Auth</li>
				<li>Direct &amp; Delegated Access</li>
				<li>Credentials</li>
				<li>Signature and Hash</li>
				<li>Secrets Limitations</li>
				<li>Timestamp and Nonce</li>
				<li>Signature Methods</li>
				<li>Signature Base String</li>
			</ul>

			<h3>Part IV: Signing Requests</h3>
			<ul>
				<li>Complete interactive walkthrough on how to sign OAuth requests</li>
			</ul>

    </div>
<?php require('../../includes/_footer.php'); ?>