<?php
$page_title = "Dynamic Client Registration Management — OAuth 2.0";
$page_section = "";
$page_meta_description = "RFC 7592 extends Dynamic Client Registration with endpoints to read, update, and delete a client's registration.";
require('../../../includes/_header.php');
?>
<div class="container">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/2/">OAuth 2.0</a></li>
      <li class="breadcrumb-item active">Dynamic Client Management</li>
    </ol>
  </nav>

  <h2>Dynamic Client Registration Management</h2>

  <div class="spec-meta">
    <a href="https://www.rfc-editor.org/rfc/rfc7592" class="rfc-badge">RFC 7592</a>
    <span class="spec-status spec-status--published">Published</span>
    <a href="https://www.rfc-editor.org/rfc/rfc7592" class="rfc">rfc-editor.org/rfc/rfc7592</a>
  </div>

  <p class="spec-lede">RFC 7592 extends Dynamic Client Registration (RFC 7591) with a client configuration endpoint — letting clients read, update, and delete their own registration using a registration access token.</p>

  <div class="spec-when">
    <strong>When to use this</strong>
    Use Dynamic Client Management alongside Dynamic Client Registration in deployments where clients need to update their own metadata over time — for example, to rotate redirect URIs, update a logo, or change the token endpoint authentication method. The authorization server issues a <code>registration_access_token</code> at registration time that the client uses to authenticate subsequent management requests.
  </div>

  <p>After initial registration, the client receives a <code>registration_client_uri</code> and a <code>registration_access_token</code>. The client can then GET the current registration, PUT an updated registration, or DELETE the registration entirely — all authenticated with the registration access token as a Bearer token.</p>

  <h3>Related specs</h3>
  <ul>
    <li><a href="/2/dynamic-client-registration/">Dynamic Client Registration</a> <a href="https://www.rfc-editor.org/rfc/rfc7591" class="rfc-badge">RFC 7591</a> — required prerequisite</li>
  </ul>

</div>
<?php require('../../../includes/_footer.php'); ?>
