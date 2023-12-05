<?php
$page_title = "Client Authentication - OAuth 2.0";
$page_section = "";
$page_secondary = "";
$page_meta_description = "The different types of client authentication in OAuth 2.0";
require('../../../includes/_header.php');
?>
<div class="container">

  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/2/">OAuth 2.0</a></li>
      <li class="breadcrumb-item active">Client Authentication</li>
    </ol>
  </nav>

  <div>

    <h2>RFC 6749 Section 2.3: OAuth 2.0 Client Authentication</h2>

    <p><a href="https://www.rfc-editor.org/rfc/rfc6749#section-2.3" class="rfc">rfc-editor.org/rfc/rfc6749#section-2.3</a></p>

    <p>Confidential clients authenticate when making requests to the OAuth authorization server.</p>
    <p>The core OAuth 2.0 specification defines the "client password" (e.g. client secret) client authentication type, which defines the <code>client_secret</code> parameter as well as the method of including the client secret in the HTTP <code>Authorization</code> header.</p>
    <p>These are most common forms of client authentication.</p>
    <ul>
      <li><a href="https://www.rfc-editor.org/rfc/rfc6749#section-2.3.1">Client Secret</a> (RFC 6749 Section 2.3.1)</li>
      <li><a href="/2/mtls/">Mutual TLS</a> (RFC 8705)</li>
      <li><a href="/private-key-jwt/">Private Key JWT</a> (RFC 7521, RFC 7521, OpenID)</li>
    </ul>
    <p>Note: <a href="/2/pkce/">PKCE</a> is not a form of client authentication, and is not an alternative to client authentication. Applications using client authentication should also use PKCE.</p>
    
    <p>More resources
      <ul>
        <li><a href="https://www.oauth.com/oauth2-servers/access-tokens/client-credentials/">Client Credentials</a> (oauth.com)</li>
        <li><a href="https://developer.okta.com/docs/reference/api/oidc/#refresh-token">Client Authentication Methods</a> (developer.okta.com)</li>
      </ul>
    </p>

  </div>
</div>

<?php require('../../../includes/_footer.php'); ?>
