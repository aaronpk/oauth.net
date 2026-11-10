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

  <div class="spec-when spec-when--warning">
    <strong>Warning</strong>
    Open Dynamic Client Registration has inherent problems. When anyone can register, the authorization server has no way to verify the metadata a client submits, so a client can claim any name or logo. Every installation of an app gets a different <code>client_id</code>, so the server can't identify, set policy for, or revoke a piece of software as a whole, and it accumulates registrations it can never safely clean up. Dynamic Client Registration is only practical when the registration endpoint is protected by an initial access token, so that only approved parties can register clients. For clients that need to work without prior registration, consider <a href="/2/client-id-metadata-document/">Client ID Metadata Documents</a> instead.
  </div>

  <p>The client POSTs its metadata (redirect URIs, application name, logo URL, token endpoint auth method, etc.) to the registration endpoint and receives a client registration response including a <code>client_id</code>, and for confidential clients a <code>client_secret</code>. This spec was derived from the OpenID Connect Dynamic Client Registration spec and is compatible with OpenID Connect servers.</p>

  <h3>Related specs</h3>
  <ul>
    <li><a href="/2/dynamic-client-management/">Dynamic Client Management</a> <a href="https://www.rfc-editor.org/rfc/rfc7592" class="rfc-badge">RFC 7592</a> — updating registered clients</li>
    <li><a href="/2/authorization-server-metadata/">Authorization Server Metadata</a> <a href="https://www.rfc-editor.org/rfc/rfc8414" class="rfc-badge">RFC 8414</a> — discovering the registration endpoint</li>
    <li><a href="/2/client-id-metadata-document/">Client ID Metadata Document</a> — an alternative where the client identifies itself with a URL and needs no registration step</li>
  </ul>

  <h3>More resources</h3>
  <ul>
    <li><a href="https://aaronparecki.com/2026/07/29/19/cimd-over-dcr">From Self-Asserted to Domain-Backed: Why CIMD Beats DCR</a> (Jul 2026, aaronparecki.com)</li>
  </ul>

</div>
<?php require('../../../includes/_footer.php'); ?>
