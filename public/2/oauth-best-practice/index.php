<?php
$page_title = "OAuth 2.0 Security Best Current Practice — RFC 9700";
$page_section = "";
$page_meta_description = "RFC 9700 describes security requirements and recommendations for clients and servers implementing OAuth 2.0, superseding RFC 6819.";
require('../../../includes/_header.php');
?>
<div class="container">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/2/">OAuth 2.0</a></li>
      <li class="breadcrumb-item"><a href="/security/">Security</a></li>
      <li class="breadcrumb-item active">Security Best Current Practice</li>
    </ol>
  </nav>

  <h2>OAuth 2.0 Security Best Current Practice</h2>

  <div class="spec-meta">
    <a href="https://www.rfc-editor.org/rfc/rfc9700" class="rfc-badge">RFC 9700</a>
    <span class="spec-status spec-status--published">Published</span>
    <a href="https://www.rfc-editor.org/rfc/rfc9700" class="rfc">rfc-editor.org/rfc/rfc9700</a>
  </div>

  <p class="spec-lede">The Security BCP updates and extends the original threat model (RFC 6819) with current best practices — reflecting years of real-world implementation experience and newly discovered attack vectors.</p>

  <div class="spec-when">
    <strong>When to use this</strong>
    This document applies to anyone implementing OAuth 2.0 — clients, authorization servers, and resource servers. Its key recommendations include: always use PKCE, use exact redirect URI matching, do not use the Implicit or Password grants, prefer <a href="/2/pushed-authorization-requests/">PAR</a> for high-security deployments, and use sender-constrained tokens (<a href="/2/dpop/">DPoP</a> or <a href="/2/mtls/">mTLS</a>) where possible.
  </div>

  <p>RFC 9700 supersedes RFC 6819 and consolidates guidance that was previously spread across multiple documents. It formally deprecates the Implicit flow and Password grant, mandates PKCE for all authorization code flows, and introduces requirements for mix-up attack prevention. The recommendations in this document are incorporated into <a href="/2.1/">OAuth 2.1</a>.</p>

  <h3>More resources</h3>
  <ul>
    <li><a href="https://medium.com/@torsten_lodderstedt/why-you-should-stop-using-the-oauth-implicit-grant-2436ced1c926">Why you should stop using the OAuth implicit grant</a> (Torsten Lodderstedt)</li>
    <li><a href="https://www.youtube.com/watch?v=g_aVPdwBTfw">What's New with OAuth and OpenID Connect</a> — video by Aaron Parecki</li>
  </ul>

</div>
<?php require('../../../includes/_footer.php'); ?>
