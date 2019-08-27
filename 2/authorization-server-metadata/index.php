<?php
$page_title = "OAuth 2.0 Authorization Server Metadata";
$page_section = "";
$page_secondary = "";
$page_meta_description = "An OAuth 2.0 extension for clients to discover OAuth endpoints and authorization server capabilities";
require('../../includes/_header.php');
?>
<div class="container">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/2/">OAuth 2.0</a></li>
      <li class="breadcrumb-item active">Authorization Server Metadata</li>
    </ol>
  </nav>

  <div>

    <h2>RFC 8414: Authorization Server Metadata</h2>

    <p><a href="http://tools.ietf.org/html/rfc8414" class="rfc">tools.ietf.org/html/rfc8414</a></p>

    <p>The Authorization Server Metadata spec (also known as OAuth Discovery) defines a format for clients to use to look up the information needed to interact with a particular OAuth server. This includes things like finding the authorization endpoint, and listing the supported scopes and client authentication mechanisms.</p>

    <p>More resources
      <ul>
        <li>none yet... <a href="https://github.com/aaronpk/oauth.net/tree/master/2/authorization-server-metadata">add yours</a>!</li>
      </ul>
    </p>

  </div>
</div>

<?php require('../../includes/_footer.php'); ?>
