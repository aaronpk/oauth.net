<?php
$page_title = "OAuth 2.0 Refresh Token";
$page_section = "";
$page_secondary = "";
$page_meta_description = "The OAuth 2.0 refresh token grant type";
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
        <li class="current">Refresh Token</li>
      </ul>
    </div>
  </div>

  <div id="main" class="column first last span-18 prepend-1 append-1">

    <h2>OAuth 2.0 Refresh Token</h2>

    <?php require('../../../includes/_carbon.php'); ?>

    <p><a href="https://tools.ietf.org/html/rfc6749#section-1.5" class="rfc">RFC 6749 §1.5</a></p>

    <p>The Refresh Token grant type is used by clients to exchange a refresh token for an access token when the access token has expired.</p>
    <p>This allows clients to continue to have a valid access token without further interaction with the user.</p>

    <p>More resources
      <ul>
        <li><a href="https://www.oauth.com/oauth2-servers/access-tokens/refreshing-access-tokens/">Refreshing Access Tokens</a> (oauth.com)</li>
      </ul>
    </p>

  </div>
</div>

<?php require('../../../includes/_footer.php'); ?>
