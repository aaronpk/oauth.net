<?php
$page_title = "OAuth 2.0 DPoP - Demonstration of Proof of Possession";
$page_section = "";
$page_secondary = "";
$page_meta_description = "OAuth 2.0 DPoP - Demonstration of Proof of Possession at the Application Layer";
require('../../../includes/_header.php');
?>
<div class="container">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/2/">OAuth 2.0</a></li>
      <li class="breadcrumb-item active">DPoP - Demonstration of Proof of Possession</li>
    </ol>
  </nav>
  <div>

    <h2>Draft: OAuth 2.0 Demonstration of Proof-of-Possession at the Application Layer (DPoP)</h2>

    <p><a href="https://tools.ietf.org/html/draft-ietf-oauth-dpop" class="rfc">tools.ietf.org/html/draft-ietf-oauth-dpop</a></p>

    <p><a href="https://tools.ietf.org/html/draft-ietf-oauth-dpop">DPoP</a>, or Demonstration of Proof of Possession, is an extension that describes a technique to cryptographically bind access tokens to a particular client when they are issued. This is one of many attempts at improving the security of <a href="/2/bearer-tokens/">Bearer Tokens</a> by requiring the application using the token to authenticate itself.</p>
    <p>This draft is still in progress, and is open to feedback from people who are interested in using it!</p>

    <!--
    <p>More resources
      <ul>
      </ul>
    </p>
    -->

  </div>
</div>

<?php require('../../../includes/_footer.php'); ?>
