<?php
$page_title = "Password Grant — OAuth 2.0 (Deprecated)";
$page_section = "";
$page_meta_description = "The OAuth 2.0 Resource Owner Password Credentials grant is deprecated. Use Authorization Code + PKCE instead.";
require('../../../../includes/_header.php');
?>
<div class="container">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/2/">OAuth 2.0</a></li>
      <li class="breadcrumb-item"><a href="/2/grant-types/">Grant Types</a></li>
      <li class="breadcrumb-item active">Password Grant</li>
    </ol>
  </nav>

  <h2>Password Grant</h2>

  <div class="spec-meta">
    <a href="https://www.rfc-editor.org/rfc/rfc6749#section-1.3.3" class="rfc-badge">RFC 6749 §1.3.3</a>
    <span class="spec-status spec-status--deprecated">Deprecated</span>
  </div>

  <p class="spec-lede">The Password grant (Resource Owner Password Credentials) exchanged a user's username and password directly for an access token. It is deprecated, disallowed by the Security BCP, and removed from OAuth 2.1.</p>

  <div class="banner">
    <strong>Do not use the Password grant in new applications.</strong>
    The <a href="/2/oauth-best-practice/">OAuth 2.0 Security Best Current Practice</a> explicitly disallows it, and it is removed from <a href="/2.1/">OAuth 2.1</a>.
    Use <a href="/2/grant-types/authorization-code/">Authorization Code</a> + <a href="/2/pkce/">PKCE</a> instead — even for first-party login screens.
  </div>

  <p>The Password grant required users to give their credentials directly to the client application, which then sent them to the authorization server. This defeated the purpose of OAuth — the client saw the password it was never supposed to see. It prevented multifactor authentication, phishing-resistant login flows, and passkeys, since the client bypassed the authorization server's login UI entirely.</p>

  <p>A common justification was "it's our own app, so it's fine." But even first-party apps benefit from routing authentication through the authorization server: users get MFA, IT teams get audit logs, and the architecture remains clean if you ever need to add third-party clients or change your authentication mechanism.</p>

  <h3>Migration: what to use instead</h3>
  <ul>
    <li><strong>First-party web or mobile app:</strong> <a href="/2/grant-types/authorization-code/">Authorization Code</a> + <a href="/2/pkce/">PKCE</a> with the system browser. The login UI lives at the authorization server, not in your app.</li>
    <li><strong>First-party native app needing embedded login:</strong> Consider the <a href="https://www.ietf.org/archive/id/draft-ietf-oauth-first-party-apps.txt">First-Party Apps draft</a>, which describes a structured alternative.</li>
    <li><strong>Service-to-service (no user):</strong> <a href="/2/grant-types/client-credentials/">Client Credentials</a></li>
  </ul>

  <h3>More resources</h3>
  <ul>
    <li><a href="https://www.oauth.com/oauth2-servers/access-tokens/password-grant/">Password Grant</a> (oauth.com)</li>
    <li><a href="https://developer.okta.com/blog/2018/06/29/what-is-the-oauth2-password-grant">What is the OAuth 2.0 Password Grant Type?</a> (developer.okta.com)</li>
    <li><a href="https://aaronparecki.com/oauth-2-simplified/#password">Password</a> (aaronparecki.com)</li>
  </ul>

</div>
<?php require('../../../../includes/_footer.php'); ?>
