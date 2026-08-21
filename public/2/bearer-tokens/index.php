<?php
$page_title = "Bearer Tokens — OAuth 2.0";
$page_section = "";
$page_meta_description = "OAuth 2.0 Bearer Token Usage - RFC 6750";
require('../../../includes/_header.php');
?>
<div class="container">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/2/">OAuth 2.0</a></li>
      <li class="breadcrumb-item active">Bearer Tokens</li>
    </ol>
  </nav>

  <h2>Bearer Tokens</h2>

  <div class="spec-meta">
    <a href="https://www.rfc-editor.org/rfc/rfc6750" class="rfc-badge">RFC 6750</a>
    <span class="spec-status spec-status--published">Published</span>
    <a href="https://www.rfc-editor.org/rfc/rfc6750" class="rfc">rfc-editor.org/rfc/rfc6750</a>
  </div>

  <p class="spec-lede">A Bearer Token is an opaque string that any party in possession of it can use to access protected resources — no proof of identity is required beyond presenting the token itself.</p>

  <div class="spec-when">
    <strong>When to use this</strong>
    Bearer Tokens are the default access token type in OAuth 2.0. Your resource server should accept them in the <code>Authorization: Bearer</code> HTTP header. If you need stronger security guarantees — preventing stolen tokens from being used by an attacker — consider <a href="/2/dpop/">DPoP</a> or <a href="/2/mtls/">Mutual TLS</a>, which bind the token to a specific client.
  </div>

  <p>A Bearer Token may be an opaque string (validated via <a href="/2/token-introspection/">token introspection</a>) or a structured token like a <a href="/2/jwt-access-tokens/">JWT access token</a> (validated locally). The format is an implementation choice — the token spec itself does not mandate a structure.</p>

  <h3>Related specs</h3>
  <ul>
    <li><a href="/2/token-introspection/">Token Introspection</a> <a href="https://www.rfc-editor.org/rfc/rfc7662" class="rfc-badge">RFC 7662</a></li>
    <li><a href="/2/token-revocation/">Token Revocation</a> <a href="https://www.rfc-editor.org/rfc/rfc7009" class="rfc-badge">RFC 7009</a></li>
    <li><a href="/2/jwt-access-tokens/">JWT Profile for Access Tokens</a> <a href="https://www.rfc-editor.org/rfc/rfc9068" class="rfc-badge">RFC 9068</a></li>
    <li><a href="/2/dpop/">DPoP</a> — sender-constrained alternative <a href="https://www.rfc-editor.org/rfc/rfc9449" class="rfc-badge">RFC 9449</a></li>
    <li><a href="/2/mtls/">Mutual TLS</a> — sender-constrained alternative <a href="https://www.rfc-editor.org/rfc/rfc8705" class="rfc-badge">RFC 8705</a></li>
  </ul>

  <h3>More resources</h3>
  <ul>
    <li><a href="/2/access-tokens/">OAuth 2.0 Access Tokens</a></li>
    <li><a href="https://www.oauth.com/oauth2-servers/access-tokens/">Access Tokens</a> (oauth.com)</li>
  </ul>

</div>
<?php require('../../../includes/_footer.php'); ?>
