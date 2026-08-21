<?php
$page_title = "Authorization Code Grant — OAuth 2.0";
$page_section = "";
$page_meta_description = "The Authorization Code grant type is the most common OAuth 2.0 flow, used by web, mobile, and native apps to get access tokens on behalf of a user.";
require('../../../../includes/_header.php');
?>
<div class="container">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/2/">OAuth 2.0</a></li>
      <li class="breadcrumb-item"><a href="/2/grant-types/">Grant Types</a></li>
      <li class="breadcrumb-item active">Authorization Code</li>
    </ol>
  </nav>

  <h2>Authorization Code</h2>

  <div class="spec-meta">
    <a href="https://www.rfc-editor.org/rfc/rfc6749#section-1.3.1" class="rfc-badge">RFC 6749 §1.3.1</a>
    <span class="spec-status spec-status--published">Published</span>
    <a href="https://tools.ietf.org/html/rfc6749#section-1.3.1" class="rfc">tools.ietf.org/html/rfc6749</a>
  </div>

  <p class="spec-lede">The Authorization Code flow is the most widely used OAuth 2.0 grant type. The user is redirected to the authorization server to grant permission, and the client receives an authorization code it exchanges for an access token.</p>

  <div class="spec-when">
    <strong>When to use this</strong>
    Use the Authorization Code flow whenever a user needs to grant your app access to their account or data. This covers web apps, single-page apps, and native/mobile apps. Always combine it with <a href="/2/pkce/">PKCE</a> — even for confidential clients.
  </div>

  <p>The flow works in two steps. First, the user is sent to the authorization server where they log in and approve the requested permissions. The authorization server redirects back to your app with a short-lived <em>authorization code</em> in the URL. Second, your app exchanges that code — along with its client credentials — for an access token at the token endpoint. Because the access token never touches the browser, it is not exposed to the user or to JavaScript.</p>

  <p>All clients should use the <a href="/2/pkce/">PKCE extension</a> with this flow to prevent authorization code injection attacks. Public clients (SPAs and mobile apps) use PKCE in place of a client secret; confidential clients use PKCE <em>in addition to</em> their client secret.</p>

  <h3>More resources</h3>
  <ul>
    <li><a href="https://www.oauth.com/oauth2-servers/access-tokens/authorization-code-request/">Authorization Code</a> (oauth.com)</li>
    <li><a href="https://aaronparecki.com/oauth-2-simplified/#web-server-apps">Web Server Apps</a> (aaronparecki.com)</li>
    <li><a href="https://developer.okta.com/blog/2018/04/10/oauth-authorization-code-grant-type">What is the OAuth 2.0 Authorization Code Grant?</a> (developer.okta.com)</li>
    <li><a href="https://www.oauth.com/playground/authorization-code.html">Authorization Code on the OAuth 2.0 Playground</a> (oauth.com)</li>
  </ul>

</div>
<?php require('../../../../includes/_footer.php'); ?>
