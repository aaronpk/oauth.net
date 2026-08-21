<?php
$page_title = "OAuth 2.0 Threat Model and Security Considerations — RFC 6819";
$page_section = "";
$page_meta_description = "RFC 6819 catalogues known attack vectors against OAuth 2.0 and describes countermeasures for each.";
require('../../../includes/_header.php');
?>
<div class="container">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/2/">OAuth 2.0</a></li>
      <li class="breadcrumb-item"><a href="/security/">Security</a></li>
      <li class="breadcrumb-item active">Threat Model &amp; Security Considerations</li>
    </ol>
  </nav>

  <h2>Threat Model and Security Considerations</h2>

  <div class="spec-meta">
    <a href="https://www.rfc-editor.org/rfc/rfc6819" class="rfc-badge">RFC 6819</a>
    <span class="spec-status spec-status--published">Published</span>
    <a href="https://www.rfc-editor.org/rfc/rfc6819" class="rfc">rfc-editor.org/rfc/rfc6819</a>
  </div>

  <p class="spec-lede">RFC 6819 catalogues known attacks against OAuth 2.0 — both theoretical and demonstrated in the wild — and describes countermeasures for each, drawing on real implementation experience from major providers.</p>

  <div class="spec-when">
    <strong>When to read this</strong>
    Read RFC 6819 when you want a deep understanding of the attack surface of an OAuth 2.0 deployment. For a more current and actionable set of requirements, the <a href="/2/oauth-best-practice/">Security Best Current Practice (RFC 9700)</a> supersedes and extends this document — start there for new implementations, then refer back to RFC 6819 for the underlying threat analysis.
  </div>

  <p>The document covers threats against every part of the OAuth flow: authorization endpoint attacks (CSRF, open redirect, clickjacking), token endpoint attacks (credential theft, brute force), token leakage via browser history and referrer headers, and attacks specific to particular grant types. Each threat includes a description, its impact, and specific countermeasures implementors should apply.</p>

  <h3>Related specs</h3>
  <ul>
    <li><a href="/2/oauth-best-practice/">Security Best Current Practice</a> <a href="https://www.rfc-editor.org/rfc/rfc9700" class="rfc-badge">RFC 9700</a> — supersedes this document</li>
  </ul>

  <h3>More resources</h3>
  <ul>
    <li><a href="https://www.oauth.com/oauth2-servers/authorization/security-considerations/">Security Considerations when Building an Authorization Server</a> (oauth.com)</li>
  </ul>

</div>
<?php require('../../../includes/_footer.php'); ?>
