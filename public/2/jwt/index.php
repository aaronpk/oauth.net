<?php
$page_title = "JSON Web Token (JWT) — OAuth 2.0";
$page_section = "";
$page_meta_description = "JSON Web Token (JWT) is a compact, signed format for encoding claims. Widely used as OAuth 2.0 access tokens and in OpenID Connect ID tokens.";
require('../../../includes/_header.php');
?>
<div class="container">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/2/">OAuth 2.0</a></li>
      <li class="breadcrumb-item active">JSON Web Token</li>
    </ol>
  </nav>

  <h2>JSON Web Token (JWT)</h2>

  <div class="spec-meta">
    <a href="https://www.rfc-editor.org/rfc/rfc7519" class="rfc-badge">RFC 7519</a>
    <span class="spec-status spec-status--published">Published</span>
    <a href="https://www.rfc-editor.org/rfc/rfc7519" class="rfc">rfc-editor.org/rfc/rfc7519</a>
  </div>

  <p class="spec-lede">A JSON Web Token is a compact, URL-safe way to encode a set of claims as a JSON object that is then cryptographically signed — allowing any party to verify the claims without contacting the issuer.</p>

  <div class="spec-when">
    <strong>When to use this</strong>
    JWTs are used throughout the OAuth and OpenID Connect ecosystem: as <a href="/2/jwt-access-tokens/">access tokens</a>, as OpenID Connect ID tokens, and in <a href="/private-key-jwt/">Private Key JWT client authentication</a>. Use JWTs when you want resource servers to validate tokens locally without a network call. Use opaque tokens + <a href="/2/token-introspection/">introspection</a> when you need immediate revocability.
  </div>

  <p>A JWT has three dot-separated parts: a base64url-encoded header specifying the algorithm, a base64url-encoded payload containing the claims, and a signature computed over both. Any recipient with the public key can verify the token hasn't been tampered with. JWTs are not encrypted by default — the payload is readable by anyone — so do not put sensitive data in a JWT unless it is also encrypted (JWE).</p>

  <h3>More resources</h3>
  <ul>
    <li><a href="/2/jwt-access-tokens/">JWT Profile for OAuth 2.0 Access Tokens</a> <a href="https://www.rfc-editor.org/rfc/rfc9068" class="rfc-badge">RFC 9068</a></li>
    <li><a href="https://www.oauth.com/oauth2-servers/access-tokens/self-encoded-access-tokens/">Self-Encoded Access Tokens</a> (oauth.com)</li>
    <li><a href="https://www.jsonwebtoken.io/">jsonwebtoken.io</a> — JWT debugger and encoder</li>
  </ul>

</div>
<?php require('../../../includes/_footer.php'); ?>
