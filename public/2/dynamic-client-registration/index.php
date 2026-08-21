<?php
$page_title = "Dynamic Client Registration — OAuth 2.0";
$page_section = "";
$page_meta_description = "RFC 7591 defines a protocol for OAuth clients to register themselves programmatically with an authorization server.";
require('../../../includes/_header.php');
?>
<div class="container">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/2/">OAuth 2.0</a></li>
      <li class="breadcrumb-item active">Dynamic Client Registration</li>
    </ol>
  </nav>

  <h2>Dynamic Client Registration</h2>

  <div class="spec-meta">
    <a href="https://www.rfc-editor.org/rfc/rfc7591" class="rfc-badge">RFC 7591</a>
    <span class="spec-status spec-status--published">Published</span>
    <a href="https://www.rfc-editor.org/rfc/rfc7591" class="rfc">rfc-editor.org/rfc/rfc7591</a>
  </div>

  <p class="spec-lede">Dynamic Client Registration lets OAuth clients register themselves programmatically — submitting their metadata and receiving a <code>client_id</code> (and optionally a <code>client_secret</code>) without any manual setup by the authorization server operator.</p>

  <div class="spec-when">
    <strong>When to use this</strong>
    Use Dynamic Client Registration when clients need to register at runtime — for example, in open ecosystems where any developer can build a client against your API, in federated identity deployments where clients are registered automatically during federation, or in multi-tenant platforms where each tenant gets its own client credentials. Not all authorization servers support or allow open dynamic registration; many require an initial access token to authorize the registration request.
  </div>

  <p>The client POSTs its metadata (redirect URIs, application name, logo URL, token endpoint auth method, etc.) to the registration endpoint and receives a client registration response including a <code>client_id</code>, and for confidential clients a <code>client_secret</code>. This spec was derived from the OpenID Connect Dynamic Client Registration spec and is compatible with OpenID Connect servers.</p>

  <h3>Related specs</h3>
  <ul>
    <li><a href="/2/dynamic-client-management/">Dynamic Client Management</a> <a href="https://www.rfc-editor.org/rfc/rfc7592" class="rfc-badge">RFC 7592</a> — updating registered clients</li>
    <li><a href="/2/authorization-server-metadata/">Authorization Server Metadata</a> <a href="https://www.rfc-editor.org/rfc/rfc8414" class="rfc-badge">RFC 8414</a> — discovering the registration endpoint</li>
  </ul>

</div>
<?php require('../../../includes/_footer.php'); ?>
