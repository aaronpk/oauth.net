<?php
$page_title = "OAuth 2.0 Rich Authorization Requests";
$page_section = "";
$page_secondary = "";
$page_meta_description = "OAuth 2.0 Rich Authorization Requests";
require('../../includes/_header.php');
?>
<div class="container">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/2/">OAuth 2.0</a></li>
      <li class="breadcrumb-item active">Rich Authorization Requests</li>
    </ol>
  </nav>
  <div>

    <h2>Draft: OAuth 2.0 Rich Authorization Requests</h2>

    <p><a href="https://tools.ietf.org/html/draft-lodderstedt-oauth-rar" class="rfc">tools.ietf.org/html/draft-lodderstedt-oauth-rar</a></p>

    <p>The <a href="https://tools.ietf.org/html/draft-lodderstedt-oauth-rar">Rich Authorization Requsts</a> extension provides a way for OAuth clients to request fine-grained permissions during an authorization request. For example, an app may specify a request such as "let me make a payment of 45 Euros" or "please give me read access to folder X and write access to folder Y".</p>
    <p>This draft is still in progress, and is open to feedback from people who are interested in using it!

    <p>More resources
      <ul>
        <li><a href="https://medium.com/oauth-2/rich-oauth-2-0-authorization-requests-87870e263ecb">Rich OAuth 2.0 Authorization Requests</a> (Torsten Lodderstedt)</li>
      </ul>
    </p>

  </div>
</div>

<?php require('../../includes/_footer.php'); ?>
