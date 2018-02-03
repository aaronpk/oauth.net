<?php
$page_title = "OAuth 2.0 Client Credentials";
$page_section = "";
$page_secondary = "";
$page_meta_description = "The OAuth 2.0 client credentials grant type";
require('../../../includes/_header.php');
?>
<div class="container">
  <div id="header" class="column first last span-20">
    <?php require('../../../includes/_site_name.php'); ?>
    <div id="primary" class="column span-13 last">
      <?php require('../../../includes/_nav_primary.php'); ?>
    </div>
    <div id="secondary" class="column span-18 append-1 prepend-1 first last">
      <ul class="breadcrumb">
        <li><a href="/2/">OAuth 2.0</a> <span>&gt;</span> </li>
        <li><a href="/2/grant-types/">Grant Types</a> <span>&gt;</span> </li>
        <li class="current">Client Credentials</li>
      </ul>
    </div>
  </div>

  <div id="main" class="column first last span-18 prepend-1 append-1">

    <h2>OAuth 2.0 Client Credentials Grant</h2>

    <?php require('../../../includes/_carbon.php'); ?>

    <p><a href="https://tools.ietf.org/html/rfc6749#section-1.3.4" class="rfc">RFC 6749 §1.3.4</a></p>

    <p>The Client Credentials grant type is used by clients to obtain an access token outside of the context of a user.</p>
    <p>This is typically used by clients to access resources about themselves rather than to access a user's resources.</p>

    <p>More resources
      <ul>
        <li><a href="https://www.oauth.com/oauth2-servers/access-tokens/client-credentials/">Client Credentials</a> (oauth.com)</li>
        <li><a href="https://aaronparecki.com/oauth-2-simplified/#client-credentials">Application Access</a> (aaronparecki.com)</li>
      </ul>
    </p>

  </div>
</div>

<?php require('../../../includes/_footer.php'); ?>
