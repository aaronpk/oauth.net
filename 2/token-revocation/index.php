<?php
$page_title = "OAuth 2.0 Token Revocation";
$page_section = "";
$page_secondary = "";
$page_meta_description = "An OAuth 2.0 extension for a client to signal that a previously obtained token is no longer needed";
require('../../includes/_header.php');
?>
<div class="container">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/2/">OAuth 2.0</a></li>
      <li class="breadcrumb-item active">Token Revocation</li>
    </ol>
  </nav>
  <div>

    <h2>RFC 7009: Token Revocation</h2>

    <p><a href="http://tools.ietf.org/html/rfc7009" class="rfc">tools.ietf.org/html/rfc7009</a></p>

    <p>The Token Revocation extension defines a mechanism for clients to indicate to the authorization server that an access token is no longer needed. This is used to enable a "log out" feature in clients, allowing the authorization server to clean up any security credentials associated with the authorization.</p>

    <p>More resources
      <ul>
        <li><a href="https://www.oauth.com/oauth2-servers/listing-authorizations/revoking-access/">Revoking Access</a> (oauth.com)</li>
      </ul>
    </p>

  </div>
</div>

<?php require('../../includes/_footer.php'); ?>
