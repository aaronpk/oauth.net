<?php
$page_title = "Token Introspection — OAuth 2.0";
$page_section = "";
$page_meta_description = "OAuth 2.0 Token Introspection lets resource servers query the authorization server to validate an opaque access token and retrieve its metadata.";
require('../../../includes/_header.php');
?>
<div class="container">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/2/">OAuth 2.0</a></li>
      <li class="breadcrumb-item active">Token Introspection</li>
    </ol>
  </nav>

  <h2>Token Introspection</h2>

  <div class="spec-meta">
    <a href="https://www.rfc-editor.org/rfc/rfc7662" class="rfc-badge">RFC 7662</a>
    <span class="spec-status spec-status--published">Published</span>
    <a href="https://www.rfc-editor.org/rfc/rfc7662" class="rfc">rfc-editor.org/rfc/rfc7662</a>
  </div>

  <p class="spec-lede">Token Introspection lets a resource server query the authorization server to check whether an access token is active and to retrieve metadata about it — who it was issued to, what scopes it has, and when it expires.</p>

  <div class="spec-when">
    <strong>When to use this</strong>
    Use Token Introspection when your resource server receives opaque access tokens that it can't validate locally. If you use <a href="/2/jwt-access-tokens/">JWT access tokens</a>, you can often validate them locally without a network call. Introspection adds a network round-trip per request but enables immediate revocation — a revoked token will show as inactive on the next introspection call.
  </div>

  <p>The resource server POSTs the token to the introspection endpoint and receives a JSON response. The most important field is <code>active</code>: if <code>false</code>, the token should be rejected regardless of other fields. Active tokens also include <code>scope</code>, <code>sub</code>, <code>exp</code>, and other standard claims.</p>

  <h3>Related specs</h3>
  <ul>
    <li><a href="/2/bearer-tokens/">Bearer Tokens</a> <a href="https://www.rfc-editor.org/rfc/rfc6750" class="rfc-badge">RFC 6750</a></li>
    <li><a href="/2/jwt-access-tokens/">JWT Profile for Access Tokens</a> <a href="https://www.rfc-editor.org/rfc/rfc9068" class="rfc-badge">RFC 9068</a> — local validation alternative</li>
    <li><a href="/2/token-revocation/">Token Revocation</a> <a href="https://www.rfc-editor.org/rfc/rfc7009" class="rfc-badge">RFC 7009</a></li>
  </ul>

  <h3>More resources</h3>
  <ul>
    <li><a href="https://www.oauth.com/oauth2-servers/token-introspection-endpoint/">Token Introspection Endpoint</a> (oauth.com)</li>
  </ul>

</div>
<?php require('../../../includes/_footer.php'); ?>
