<?php
$page_title = "OAuth 2.0 for Native Apps — RFC 8252";
$page_section = "";
$page_meta_description = "Best practices and security requirements for OAuth 2.0 in iOS, Android, and desktop applications.";
require('../../../includes/_header.php');
?>
<div class="container">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/2/">OAuth 2.0</a></li>
      <li class="breadcrumb-item active">Native Apps</li>
    </ol>
  </nav>

  <h2>OAuth 2.0 for Native Apps</h2>

  <div class="spec-meta">
    <a href="https://www.rfc-editor.org/rfc/rfc8252" class="rfc-badge">RFC 8252</a>
    <span class="spec-status spec-status--published">Published</span>
    <a href="https://www.rfc-editor.org/rfc/rfc8252" class="rfc">rfc-editor.org/rfc/rfc8252</a>
  </div>

  <p class="spec-lede">This document describes security requirements and best practices for OAuth 2.0 in native and mobile apps — iOS, Android, and desktop applications that can't safely store a client secret.</p>

  <div class="spec-when">
    <strong>When to use this</strong>
    Follow this guidance when building any native app that needs to authorize against an OAuth 2.0 server. The key recommendations: use Authorization Code + PKCE (not client credentials or Implicit), open the authorization URL in the system browser (not an embedded web view), and use platform-specific redirect URI patterns (<code>https</code> redirect URIs on iOS and Android, custom URI schemes on desktop).
  </div>

  <p>Native apps are public clients — secrets embedded in an app binary are not secret, since they can be extracted from the app package. <a href="/2/pkce/">PKCE</a> protects the authorization code exchange without requiring a client secret. Using the system browser (not an embedded <code>WKWebView</code> or <code>WebView</code>) is critical for security: embedded views are vulnerable to phishing since the app controls the UI around the browser and can intercept credentials.</p>

  <h3>More resources</h3>
  <ul>
    <li><a href="https://www.oauth.com/oauth2-servers/oauth2-clients/mobile-and-native-apps/">Mobile and Native Apps</a> (oauth.com)</li>
    <li><a href="https://aaronparecki.com/oauth-2-simplified/#mobile-apps">Mobile Apps</a> (aaronparecki.com)</li>
    <li><a href="https://developers.google.com/identity/protocols/OAuth2InstalledApp">OAuth 2.0 for Mobile &amp; Desktop Apps</a> (developers.google.com)</li>
    <li><a href="https://developer.okta.com/blog/2019/01/22/oauth-api-keys-arent-safe-in-mobile-apps">Why OAuth Secrets Aren't Safe in Mobile Apps</a> (developer.okta.com)</li>
  </ul>

</div>
<?php require('../../../includes/_footer.php'); ?>
