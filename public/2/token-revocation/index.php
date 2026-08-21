<?php
$page_title = "Token Revocation — OAuth 2.0";
$page_section = "";
$page_meta_description = "OAuth 2.0 Token Revocation lets clients notify the authorization server that a token is no longer needed, enabling immediate invalidation.";
require('../../../includes/_header.php');
?>
<div class="container">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/2/">OAuth 2.0</a></li>
      <li class="breadcrumb-item active">Token Revocation</li>
    </ol>
  </nav>

  <h2>Token Revocation</h2>

  <div class="spec-meta">
    <a href="https://www.rfc-editor.org/rfc/rfc7009" class="rfc-badge">RFC 7009</a>
    <span class="spec-status spec-status--published">Published</span>
    <a href="https://www.rfc-editor.org/rfc/rfc7009" class="rfc">rfc-editor.org/rfc/rfc7009</a>
  </div>

  <p class="spec-lede">Token Revocation gives clients a way to tell the authorization server that a token is no longer needed so it can be immediately invalidated, enabling clean logout and limiting the window of exposure for a compromised token.</p>

  <div class="spec-when">
    <strong>When to use this</strong>
    Call the revocation endpoint when a user logs out, when a client no longer needs access, or when you detect a token may be compromised. Revoke both the access token and refresh token if you have both. Note that revocation only guarantees the authorization server won't issue new tokens from the revoked refresh token — resource servers using <a href="/2/jwt-access-tokens/">JWT access tokens</a> won't know about the revocation until the JWT expires.
  </div>

  <p>Revocation is a simple POST to the revocation endpoint with the token value and optionally a <code>token_type_hint</code> (<code>access_token</code> or <code>refresh_token</code>). The server responds with 200 regardless of whether the token was valid — this prevents token fishing.</p>

  <h3>Related specs</h3>
  <ul>
    <li><a href="/2/token-introspection/">Token Introspection</a> <a href="https://www.rfc-editor.org/rfc/rfc7662" class="rfc-badge">RFC 7662</a></li>
    <li><a href="/2/bearer-tokens/">Bearer Tokens</a> <a href="https://www.rfc-editor.org/rfc/rfc6750" class="rfc-badge">RFC 6750</a></li>
  </ul>

  <h3>More resources</h3>
  <ul>
    <li><a href="https://www.oauth.com/oauth2-servers/listing-authorizations/revoking-access/">Revoking Access</a> (oauth.com)</li>
  </ul>

</div>
<?php require('../../../includes/_footer.php'); ?>
