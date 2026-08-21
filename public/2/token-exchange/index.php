<?php
$page_title = "Token Exchange — OAuth 2.0";
$page_section = "";
$page_meta_description = "OAuth 2.0 Token Exchange lets clients exchange one token for another, enabling service-to-service delegation and native app SSO.";
require('../../../includes/_header.php');
?>
<div class="container">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/2/">OAuth 2.0</a></li>
      <li class="breadcrumb-item active">Token Exchange</li>
    </ol>
  </nav>

  <h2>Token Exchange</h2>

  <div class="spec-meta">
    <a href="https://www.rfc-editor.org/rfc/rfc8693" class="rfc-badge">RFC 8693</a>
    <span class="spec-status spec-status--published">Published</span>
    <a href="https://www.rfc-editor.org/rfc/rfc8693" class="rfc">rfc-editor.org/rfc/rfc8693</a>
  </div>

  <p class="spec-lede">Token Exchange defines how a client can present one token and receive a different token — either of the same type with different scopes, or a different token type entirely — enabling delegation chains and cross-service authorization.</p>

  <div class="spec-when">
    <strong>When to use this</strong>
    Use Token Exchange for service-to-service delegation in microservice architectures (a backend service acting on behalf of the original user when calling downstream services), for native app SSO (sharing tokens between multiple apps without re-prompting the user), or when a resource server needs to obtain its own tokens to call another service.
  </div>

  <p>The client POSTs to the token endpoint with <code>grant_type=urn:ietf:params:oauth:grant-type:token-exchange</code>, providing the subject token and specifying what kind of token it wants back. The authorization server may issue a token that impersonates the subject or delegates on their behalf, depending on policy.</p>

  <h3>Use cases</h3>
  <ul>
    <li>Service-to-service delegation: microservice A calls microservice B on behalf of a user</li>
    <li>Native SSO: multiple mobile apps on the same device share an access token without re-prompting</li>
    <li>Token format conversion: exchange an opaque token for a JWT, or a JWT for a different audience</li>
  </ul>

  <h3>More resources</h3>
  <ul>
    <li><a href="https://developer.okta.com/blog/2021/11/12/native-sso">Native SSO: Desktop and Mobile Apps Single-Sign-On</a> (developer.okta.com)</li>
    <li><a href="https://developer.okta.com/blog/2022/01/13/mobile-sso">How to Create a Seamless Mobile SSO Experience in iOS</a> (developer.okta.com)</li>
  </ul>

</div>
<?php require('../../../includes/_footer.php'); ?>
