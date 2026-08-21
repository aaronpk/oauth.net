<?php
$page_title = "Pushed Authorization Requests (PAR) — OAuth 2.0";
$page_section = "";
$page_meta_description = "Pushed Authorization Requests lets clients send authorization parameters directly to the authorization server before redirecting the user, improving security and enabling large requests.";
require('../../../includes/_header.php');
?>
<div class="container">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/2/">OAuth 2.0</a></li>
      <li class="breadcrumb-item active">Pushed Authorization Requests</li>
    </ol>
  </nav>

  <h2>Pushed Authorization Requests (PAR)</h2>

  <div class="spec-meta">
    <a href="https://www.rfc-editor.org/rfc/rfc9126" class="rfc-badge">RFC 9126</a>
    <span class="spec-status spec-status--published">Published</span>
    <a href="https://www.rfc-editor.org/rfc/rfc9126" class="rfc">rfc-editor.org/rfc/rfc9126</a>
  </div>

  <p class="spec-lede">PAR lets clients POST their authorization request directly to the authorization server before redirecting the user, returning a short opaque URI that's used in the redirect instead of exposing all parameters in the URL.</p>

  <div class="spec-when">
    <strong>When to use this</strong>
    Use PAR when you need to keep authorization request parameters off the URL — either for security (parameters aren't logged or leaked via referrer headers) or because the request is too large for a URL (as with <a href="/2/rich-authorization-requests/">Rich Authorization Requests</a>). PAR is required by <a href="/fapi/">FAPI 2.0</a> and recommended by the <a href="/2/oauth-best-practice/">Security BCP</a> for high-security deployments.
  </div>

  <p>Instead of building a long authorization URL with all parameters in the query string, the client first POSTs the authorization request to the PAR endpoint and receives a <code>request_uri</code>. The redirect to the authorization server then uses only that short URI. This moves parameter validation server-side and ensures parameters can't be tampered with in transit.</p>

  <h3>More resources</h3>
  <ul>
    <li><a href="https://medium.com/@darutk/illustrated-par-oauth-2-0-pushed-authorization-requests-652d71ed5cfb">Illustrated PAR: OAuth 2.0 Pushed Authorization Requests</a> (Takahiko Kawasaki)</li>
  </ul>

</div>
<?php require('../../../includes/_footer.php'); ?>
