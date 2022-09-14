<?php
$page_title = "OAuth 2.0 MTLS - Mutual TLS Client Authentication";
$page_section = "";
$page_secondary = "";
$page_meta_description = "OAuth 2.0 MTLS - Mutual TLS Client Authentication and Certificate-Bound Access Tokens";
require('../../../includes/_header.php');
?>
<div class="container">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/2/">OAuth 2.0</a></li>
      <li class="breadcrumb-item active">MTLS - Mutual TLS Client Authentication</li>
    </ol>
  </nav>
  <div>

    <h2>RFC 8705: Mutual TLS Client Authentication and Certificate-Bound Access Tokens (MTLS)</h2>

    <p><a href="https://tools.ietf.org/html/rfc8705" class="rfc">tools.ietf.org/html/rfc8705</a></p>

    <p><a href="https://tools.ietf.org/html/rfc8705">MTLS</a> is a form of <a href="/2/client-authentication">client authentication</a> and an extension of OAuth 2.0 that provides a mechanism of binding access tokens to a client certificate. It is one of many attempts at improving the security of <a href="/2/bearer-tokens/">Bearer Tokens</a> by requiring the application using the token to authenticate itself.</p>

    <p>See Also:</p>
    <ul>
      <li><a href="/2/client-authentication/">Client Authentication</a></li>
      <li><a href="/2/dpop/">Draft: DPoP</a></li>
      <li><a href="/http-signatures/">Draft: HTTP Signatures</a></li>
      <li><a href="/private-key-jwt/">Private Key JWT</a></li>
    </ul>

    <!--
    <p>More resources
      <ul>
      </ul>
    </p>
    -->

  </div>
</div>

<?php require('../../../includes/_footer.php'); ?>
