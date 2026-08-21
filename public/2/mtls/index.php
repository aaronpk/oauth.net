<?php
$page_title = "Mutual TLS — OAuth 2.0";
$page_section = "";
$page_meta_description = "OAuth 2.0 Mutual TLS Client Authentication and Certificate-Bound Access Tokens - RFC 8705";
require('../../../includes/_header.php');
?>
<div class="container">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/2/">OAuth 2.0</a></li>
      <li class="breadcrumb-item active">Mutual TLS</li>
    </ol>
  </nav>

  <h2>Mutual TLS Client Authentication and Certificate-Bound Access Tokens</h2>

  <div class="spec-meta">
    <a href="https://www.rfc-editor.org/rfc/rfc8705" class="rfc-badge">RFC 8705</a>
    <span class="spec-status spec-status--published">Published</span>
    <a href="https://www.rfc-editor.org/rfc/rfc8705" class="rfc">rfc-editor.org/rfc/rfc8705</a>
  </div>

  <p class="spec-lede">Mutual TLS provides two things: a way for OAuth clients to authenticate using TLS client certificates, and a way to bind access tokens to a client certificate so stolen tokens can't be used without it.</p>

  <div class="spec-when">
    <strong>When to use this</strong>
    Use Mutual TLS when your deployment already has TLS certificate infrastructure — common in enterprise and financial environments. It's required or recommended by <a href="/fapi/">FAPI 2.0</a>. If you don't have certificate infrastructure, <a href="/2/dpop/">DPoP</a> provides similar sender-constraining using asymmetric keys without requiring TLS-level certificates.
  </div>

  <p>mTLS covers two complementary mechanisms. First, <em>client authentication</em>: the client presents its X.509 certificate during the TLS handshake, which the authorization server validates. Second, <em>certificate-bound access tokens</em>: the authorization server embeds a fingerprint of the client's certificate in the access token, and the resource server verifies that the presenting client's certificate matches on each request.</p>

  <h3>See also</h3>
  <ul>
    <li><a href="/2/client-authentication/">Client Authentication</a></li>
    <li><a href="/2/dpop/">DPoP</a> <a href="https://www.rfc-editor.org/rfc/rfc9449" class="rfc-badge">RFC 9449</a> — key-based sender-constraining alternative</li>
    <li><a href="/private-key-jwt/">Private Key JWT</a></li>
  </ul>

</div>
<?php require('../../../includes/_footer.php'); ?>
