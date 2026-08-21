<?php
$page_title = "Authorization Server Metadata — OAuth 2.0";
$page_section = "";
$page_meta_description = "RFC 8414 defines a standard discovery document that lets clients find an OAuth server's endpoints and capabilities automatically.";
require('../../../includes/_header.php');
?>
<div class="container">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/2/">OAuth 2.0</a></li>
      <li class="breadcrumb-item active">Authorization Server Metadata</li>
    </ol>
  </nav>

  <h2>Authorization Server Metadata</h2>

  <div class="spec-meta">
    <a href="https://www.rfc-editor.org/rfc/rfc8414" class="rfc-badge">RFC 8414</a>
    <span class="spec-status spec-status--published">Published</span>
    <a href="https://www.rfc-editor.org/rfc/rfc8414" class="rfc">rfc-editor.org/rfc/rfc8414</a>
  </div>

  <p class="spec-lede">Authorization Server Metadata (also called OAuth Discovery) defines a standard JSON document that clients can fetch to automatically discover an OAuth server's endpoints, supported grant types, scopes, and client authentication methods — without any manual configuration.</p>

  <div class="spec-when">
    <strong>When to use this</strong>
    Publish a metadata document if you operate an authorization server — it lets clients configure themselves automatically instead of requiring hardcoded endpoint URLs. Client libraries that support discovery can be pointed at just the issuer URL and figure out the rest. OpenID Connect servers publish a compatible document at <code>/.well-known/openid-configuration</code>; OAuth-only servers use <code>/.well-known/oauth-authorization-server</code>.
  </div>

  <p>The metadata document is a JSON object at a well-known URL derived from the issuer identifier. It includes the <code>issuer</code>, <code>authorization_endpoint</code>, <code>token_endpoint</code>, supported <code>grant_types_supported</code>, <code>scopes_supported</code>, <code>token_endpoint_auth_methods_supported</code>, and many optional fields. Clients fetch it once and cache it, periodically refreshing to pick up changes.</p>

  <h3>Related specs</h3>
  <ul>
    <li><a href="/2/dynamic-client-registration/">Dynamic Client Registration</a> <a href="https://www.rfc-editor.org/rfc/rfc7591" class="rfc-badge">RFC 7591</a></li>
  </ul>

</div>
<?php require('../../../includes/_footer.php'); ?>
