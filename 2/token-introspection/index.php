<?php
$page_title = "OAuth 2.0 Token Introspection";
$page_section = "";
$page_secondary = "";
$page_meta_description = "An OAuth 2.0 extension to determine the active state and meta-information of a token";
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
        <li class="current">Token Introspection</li>
      </ul>
    </div>
  </div>

  <div id="main" class="column first last span-18 prepend-1 append-1">

    <h2>RFC 7662: Token Introspection</h2>

    <?php require('../../includes/_carbon.php'); ?>

    <p><a href="http://tools.ietf.org/html/rfc7662" class="rfc">RFC 7662</a></p>

    <p>The Token Introspection extension defines a mechanism for resource servers to obtain information about access tokens. With this spec, resource servers can check the validity of access tokens, and find out other information such as which user and which scopes are associated with the token.</p>

    <p>More resources
      <ul>
        <li><a href="https://www.oauth.com/oauth2-servers/token-introspection-endpoint/">Token Introspection Endpoint</a> (oauth.com)</li>
      </ul>
    </p>

  </div>
</div>

<?php require('../../includes/_footer.php'); ?>
