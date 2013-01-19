<?php

$page_title = "Documentation &mdash; OAuth";
$page_section = "documentation";
$page_secondary = "";
$page_meta_description = "";

require('../includes/_header.php');
?>

<body class="<?php echo $page_section; ?>">
  <div class="container">
    <div id="header" class="column first last span-20">
      <h1 id="site-name" class="column first span-5 prepend-1 append-1"><a href="/">OAuth</a></h1>
      <div id="primary" class="column span-13 last">

<?php require('../includes/_nav_primary.php'); ?>

      </div>
      <div id="secondary" class="column span-18 append-1 prepend-1 first last">
        <ul class="navigation">
          <li><a href="/documentation/spec">Spec</a></li>
          <li><a href="/documentation/faq">FAQ</a></li>
          <li><a href="/documentation/getting-started">Getting Started</a></li>
        </ul>
      </div>
    </div>

  <div id="main" class="column first last span-18 prepend-1 append-1">
    <h2>Documentation</h2>
    <ul>
      <li><a href="http://tools.ietf.org/html/rfc6749">OAuth 2.0 Specification</a> - RFC 6749.</li>
      <li><a href="http://tools.ietf.org/html/rfc5849">RFC 5849: The OAuth 1.0 Protocol</a> - the final version of the OAuth 1.0 specification.</li>
      <li><a href="http://hueniverse.com/oauth/">OAuth Resource Center</a> from <a href="http://hueniverse.com">Eran Hammer-Lahav</a> the specifications editor, including a beginner's guide and tutorials.</li>
      <li>Community-driven support <strong><a href="/documentation/faq">FAQ</a></strong>.</li>
      <li>Obsoleted <a href="/documentation/spec">editions</a> of the OAuth 1.0 community specification.</li>
    </ul>
  </div>

	<?php include('../includes/_edit_banner.php'); ?>

<?php require('../includes/_footer.php'); ?>
