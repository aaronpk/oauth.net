<?php
$page_title = "OAuth 2.0 Threat Model and Security Considerations";
$page_section = "";
$page_secondary = "";
$page_meta_description = "OAuth 2.0 Threat Model and Security Considerations - RFC 6819";
require('../../includes/_header.php');
?>
<div class="container">
  <div id="header" class="column first last span-20">
    <?php require('../../includes/_site_name.php'); ?>
    <div id="primary" class="column span-13 last">
      <?php require('../../includes/_nav_primary.php'); ?>
    </div>
    <div id="secondary" class="column span-18 append-1 prepend-1 first last">
      <ul class="breadcrumb">
        <li><a href="/2/">OAuth 2.0</a> <span>&gt;</span> </li>
        <li class="current">Security Considerations</li>
      </ul>
    </div>
  </div>

  <div id="main" class="column first last span-18 prepend-1 append-1">

    <h2>RFC 6819: OAuth 2.0 Threat Model and Security Considerations</h2>

    <?php require('../../includes/_carbon.php'); ?>

    <p><a href="http://tools.ietf.org/html/rfc6819" class="rfc">RFC 6819</a></p>

    <p>The <a href="http://tools.ietf.org/html/rfc6819">Threat Model and Security Considerations</a> document was written to provide additional guidance beyond what is described in the core document. Much of this document was added after major providers had real implementation experience. The document describes many known attacks, either theoretical attacks or ones that have been demonstrated in the wild. It describes countermeasures for each.</p>
    <p>More resources
      <ul>
        <li><a href="https://www.oauth.com/oauth2-servers/authorization/security-considerations/">Security Considerations when Building an Authorization Server</a> (oauth.com)</li>
      </ul>
    </p>

  </div>
</div>

<?php require('../../includes/_footer.php'); ?>
