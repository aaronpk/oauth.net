<?php
$page_title = "JWT Profile for OAuth 2.0 Access Tokens — RFC 9068";
$page_section = "";
$page_meta_description = "RFC 9068 defines a standard set of JWT claims for OAuth 2.0 access tokens, enabling interoperable local validation at resource servers.";
require('../../../includes/_header.php');
?>
<div class="container">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/2/">OAuth 2.0</a></li>
      <li class="breadcrumb-item active">JWT Access Tokens</li>
    </ol>
  </nav>

  <h2>JWT Profile for OAuth 2.0 Access Tokens</h2>

  <div class="spec-meta">
    <a href="https://www.rfc-editor.org/rfc/rfc9068" class="rfc-badge">RFC 9068</a>
    <span class="spec-status spec-status--published">Published</span>
    <a href="https://www.rfc-editor.org/rfc/rfc9068" class="rfc">rfc-editor.org/rfc/rfc9068</a>
  </div>

  <p class="spec-lede">This profile defines a standard set of JWT claims for OAuth 2.0 access tokens, so resource servers from different vendors can validate tokens issued by any compliant authorization server without calling an introspection endpoint.</p>

  <div class="spec-when">
    <strong>When to use this</strong>
    Use JWT access tokens when resource servers need to validate tokens locally without a network round-trip — important for performance at scale. The tradeoff: JWTs can't be revoked before they expire without adding back state. Keep access token lifetimes short (minutes, not hours) to limit the exposure window if a token is compromised.
  </div>

  <p>RFC 9068 defines required claims — <code>iss</code>, <code>exp</code>, <code>aud</code>, <code>sub</code>, <code>client_id</code>, <code>iat</code>, <code>jti</code> — and a standard <code>scope</code> claim. The resource server validates the signature using the authorization server's public key (discoverable via <a href="/2/authorization-server-metadata/">server metadata</a>), then checks <code>aud</code> to confirm the token was issued for this specific resource server.</p>

  <h3>Related specs</h3>
  <ul>
    <li><a href="/2/jwt/">JSON Web Token</a> <a href="https://www.rfc-editor.org/rfc/rfc7519" class="rfc-badge">RFC 7519</a></li>
    <li><a href="/2/bearer-tokens/">Bearer Tokens</a> <a href="https://www.rfc-editor.org/rfc/rfc6750" class="rfc-badge">RFC 6750</a></li>
    <li><a href="/2/token-introspection/">Token Introspection</a> <a href="https://www.rfc-editor.org/rfc/rfc7662" class="rfc-badge">RFC 7662</a> — alternative for opaque tokens</li>
    <li><a href="/2/token-revocation/">Token Revocation</a> <a href="https://www.rfc-editor.org/rfc/rfc7009" class="rfc-badge">RFC 7009</a></li>
  </ul>

  <h3>More resources</h3>
  <ul>
    <li><a href="https://www.oauth.com/oauth2-servers/access-tokens/self-encoded-access-tokens/">Self-Encoded Access Tokens</a> (oauth.com)</li>
    <li><a href="https://auth0.com/blog/how-the-jwt-profile-for-oauth-20-access-tokens-became-rfc9068/">How the JWT Profile for OAuth 2.0 Access Tokens Became RFC 9068</a> (Vittorio Bertocci)</li>
  </ul>

</div>
<?php require('../../../includes/_footer.php'); ?>
