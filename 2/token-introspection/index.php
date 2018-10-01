<?php
$page_title = "OAuth 2.0 Token Introspection";
$page_section = "";
$page_secondary = "";
$page_meta_description = "An OAuth 2.0 extension to determine the active state and meta-information of a token";
require('../../includes/_header.php');
?>
<div class="container">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/2/">OAuth 2.0</a></li>
      <li class="breadcrumb-item active">Token Introspection</li>
    </ol>
  </nav>

  <div>

    <h2>RFC 7662: Token Introspection</h2>

    <p><a href="http://tools.ietf.org/html/rfc7662" class="rfc">tools.ietf.org/html/rfc7662</a></p>

    <p>The Token Introspection extension defines a mechanism for resource servers to obtain information about access tokens. With this spec, resource servers can check the validity of access tokens, and find out other information such as which user and which scopes are associated with the token.</p>

    <p>More resources
      <ul>
        <li><a href="https://www.oauth.com/oauth2-servers/token-introspection-endpoint/">Token Introspection Endpoint</a> (oauth.com)</li>
      </ul>
    </p>

  </div>
</div>

<?php require('../../includes/_footer.php'); ?>
