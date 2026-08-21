<?php
$page_title = "Refresh Token Grant — OAuth 2.0";
$page_section = "";
$page_meta_description = "The OAuth 2.0 Refresh Token grant lets clients get a new access token when the current one expires, without requiring the user to re-authorize.";
require('../../../../includes/_header.php');
?>
<div class="container">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/2/">OAuth 2.0</a></li>
      <li class="breadcrumb-item"><a href="/2/grant-types/">Grant Types</a></li>
      <li class="breadcrumb-item active">Refresh Token</li>
    </ol>
  </nav>

  <h2>Refresh Token</h2>

  <div class="spec-meta">
    <a href="https://www.rfc-editor.org/rfc/rfc6749#section-1.5" class="rfc-badge">RFC 6749 §1.5</a>
    <span class="spec-status spec-status--published">Published</span>
    <a href="https://www.rfc-editor.org/rfc/rfc6749#section-6" class="rfc">rfc-editor.org/rfc/rfc6749</a>
  </div>

  <p class="spec-lede">A refresh token is a long-lived credential that clients use to obtain new access tokens when the current one expires — without requiring the user to re-authorize.</p>

  <div class="spec-when">
    <strong>When to use this</strong>
    Refresh tokens are issued alongside access tokens in the Authorization Code flow. Use them to silently renew access tokens in the background so users stay logged in across sessions. Not all authorization servers issue refresh tokens to every client type — public clients (SPAs, mobile apps) may receive rotating refresh tokens, and some deployments restrict refresh tokens to confidential clients only.
  </div>

  <p>Access tokens are intentionally short-lived. When one expires, the client presents the refresh token to the token endpoint with <code>grant_type=refresh_token</code> and receives a new access token — and often a new refresh token — without any user interaction. The original refresh token should be discarded after use if a new one is returned.</p>

  <p>Refresh tokens represent long-term delegated access and should be stored securely. If a refresh token is compromised, an attacker can maintain access until it's <a href="/2/token-revocation/">revoked</a>. Authorization servers may implement refresh token rotation (issuing a new refresh token on every use and invalidating the previous one) to detect token theft.</p>

  <h3>More resources</h3>
  <ul>
    <li><a href="/2/refresh-tokens/">Refresh Tokens overview</a></li>
    <li><a href="https://www.oauth.com/oauth2-servers/access-tokens/refreshing-access-tokens/">Refreshing Access Tokens</a> (oauth.com)</li>
    <li><a href="https://auth0.com/blog/refresh-tokens-what-are-they-and-when-to-use-them/">Refresh Tokens: What they are and when to use them</a> (auth0.com)</li>
  </ul>

</div>
<?php require('../../../../includes/_footer.php'); ?>
