<?php
$page_title = "OAuth Grant Types";
$page_section = "";
$page_secondary = "";
$page_meta_description = "A list of common OAuth grant types";
require('../../includes/_header.php');
?>
<div class="container">

  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/2/">OAuth 2.0</a></li>
      <li class="breadcrumb-item active">Grant Types</li>
    </ol>
  </nav>

  <div>

    <h2>OAuth Grant Types</h2>

    <p>The OAuth framework specifies several grant types for different use cases, as well as a framework for creating new grant types.</p>
    <p>The most common OAuth grant types are listed below.</p>

    <ul>
      <li><a href="/2/grant-types/authorization-code/">Authorization Code</a></li>
      <li><a href="/2/grant-types/client-credentials/">Client Credentials</a></li>
      <li><a href="/2/grant-types/device-code/">Device Code</a></li>
      <li><a href="/2/grant-types/refresh-token/">Refresh Token</a></li>
    </ul>

    <p>More resources
      <ul>
        <li><a href="https://aaronparecki.com/oauth-2-simplified/#authorization">Grant Types</a> (aaronparecki.com)</li>
        <li><a href="https://alexbilbie.com/guide-to-oauth-2-grants/">A Guide to OAuth 2.0 Grants</a> (alexbilbie.com)</li>
      </ul>
    </p>

    <h4>Legacy</h4>
    <ul>
      <li><a href="/2/grant-types/implicit/">Implicit Flow</a></li>
      <li><a href="/2/grant-types/password/">Password Grant</a></li>
    </ul>

  </div>
</div>

<?php require('../../includes/_footer.php'); ?>
