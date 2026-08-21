<?php
$page_title = "PKCE — OAuth 2.0";
$page_section = "";
$page_meta_description = "PKCE (Proof Key for Code Exchange) is an extension to the Authorization Code flow that prevents authorization code injection attacks.";
require('../../../includes/_header.php');
?>
<div class="container">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/2/">OAuth 2.0</a></li>
      <li class="breadcrumb-item active">PKCE</li>
    </ol>
  </nav>

  <h2>Proof Key for Code Exchange (PKCE)</h2>

  <div class="spec-meta">
    <a href="https://www.rfc-editor.org/rfc/rfc7636" class="rfc-badge">RFC 7636</a>
    <span class="spec-status spec-status--published">Published</span>
    <a href="https://www.rfc-editor.org/rfc/rfc7636" class="rfc">rfc-editor.org/rfc/rfc7636</a>
  </div>

  <p class="spec-lede">PKCE prevents authorization code injection and CSRF attacks in the Authorization Code flow. It is recommended for all OAuth clients — not just public clients.</p>

  <p>PKCE works by having the client generate a random secret called a <em>code verifier</em>, then derive a <em>code challenge</em> from it. The code challenge is sent with the authorization request, and the original verifier is sent when exchanging the code for a token. This ensures only the client that started the flow can complete it.</p>

  <p>PKCE is <em>not</em> a form of client authentication and does <em>not</em> replace a client secret. Use it alongside whatever client authentication method you're already using — it adds a separate layer of protection against code injection.</p>

  <div class="spec-when">
    <strong>When to use this</strong>
    Use PKCE on every Authorization Code flow. It was originally designed for mobile and native apps (which can't safely store a client secret), but its protection against authorization code injection makes it valuable for all client types, including confidential web apps.
  </div>

  <h3>Videos</h3>
  <ul>
    <li><a href="https://www.youtube.com/watch?v=g_aVPdwBTfw&t=500s">What's New With OAuth and OIDC? (8:22)</a></li>
    <li><a href="https://www.youtube.com/watch?v=5cQNwifDq1U">What's the Difference between Confidential and Public Clients?</a></li>
    <li><a href="https://www.youtube.com/watch?v=CHzERullHe8">What's Going On with the Implicit Flow?</a></li>
  </ul>

  <h3>Tools</h3>
  <ul>
    <li><a href="https://www.oauth.com/playground/authorization-code-with-pkce.html">PKCE on the OAuth 2.0 Playground</a> (oauth.com)</li>
    <li><a href="https://example-app.com/pkce">PKCE Code Challenge Generator</a> (example-app.com)</li>
  </ul>

  <h3>More resources</h3>
  <ul>
    <li><a href="https://www.oauth.com/oauth2-servers/pkce/">PKCE</a> (oauth.com)</li>
    <li><a href="https://aaronparecki.com/oauth-2-simplified/#mobile-apps">Mobile Apps</a> (aaronparecki.com)</li>
    <li><a href="https://developers.google.com/identity/protocols/OAuth2InstalledApp">OAuth 2.0 for Mobile &amp; Desktop Apps</a> (developers.google.com)</li>
    <li><a href="https://developer.okta.com/blog/2018/12/13/oauth-2-for-native-and-mobile-apps">OAuth 2.0 for Native and Mobile Apps</a> (developer.okta.com)</li>
  </ul>

</div>
<?php require('../../../includes/_footer.php'); ?>
