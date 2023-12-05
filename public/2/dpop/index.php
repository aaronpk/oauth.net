<?php
$page_title = "OAuth 2.0 DPoP - Demonstrating Proof of Possession at the Application Layer - RFC9449";
$page_section = "";
$page_secondary = "";
$page_meta_description = "OAuth 2.0 DPoP - Demonstrating Proof of Possession at the Application Layer - RFC9449";
require('../../../includes/_header.php');
?>
<div class="container">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/2/">OAuth 2.0</a></li>
      <li class="breadcrumb-item active">DPoP - Demonstrating Proof of Possession</li>
    </ol>
  </nav>
  <div>

    <h2>RFC 9449: OAuth 2.0 Demonstrating Proof-of-Possession at the Application Layer (DPoP)</h2>

    <p><a href="https://datatracker.ietf.org/doc/html/rfc9449" class="rfc">datatracker.ietf.org/doc/html/rfc9449</a></p>

    <p><a href="https://datatracker.ietf.org/doc/html/rfc9449">DPoP</a>, or Demonstrating Proof of Possession, is an extension that describes a technique to cryptographically bind access tokens to a particular client when they are issued. This is one of many attempts at improving the security of <a href="/2/bearer-tokens/">Bearer Tokens</a> by requiring the application using the token to prove possession of the same private key that was used to obtain the token.</p>

    <p>See Also:</p>
    <ul>
      <li><a href="/2/mtls/">RFC 8705: Mutual TLS</a></li>
      <li><a href="/http-signatures/">Draft: HTTP Signatures</a></li>
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
