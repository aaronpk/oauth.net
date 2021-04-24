<?php
$page_title = "Confidential and Public Clients - OAuth 2.0";
$page_section = "";
$page_secondary = "";
$page_meta_description = "OAuth 2.0 client types - confidential and public clients";
require('../../../includes/_header.php');
?>
<div class="container">

  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/2/">OAuth 2.0</a></li>
      <li class="breadcrumb-item active">Client Types</li>
    </ol>
  </nav>

  <div>

    <h2>RFC 6749 Section 2.1: OAuth 2.0 Client Types</h2>

    <p><a href="https://tools.ietf.org/html/rfc6749#section-2.1" class="rfc">tools.ietf.org/html/rfc6749#section-2.1</a></p>

    <p>OAuth defines two types of clients: confidential clients and public clients.</p>
    <p>Confidential clients are applications that are able to securely authenticate with the authorization server, for example being able to keep their registered client secret safe.</p>
    <p>Public clients are unable to use registered client secrets, such as applications running in a browser or on a mobile device.</p>

    <?php if(time() < strtotime('2020-04-20')): ?>
    <div style="margin-top: 10px;">
      <iframe width="100%" height="440" src="https://www.youtube.com/embed/5cQNwifDq1U" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    </div>
    <?php endif ?>

    <p>More resources
      <ul>
        <li><a href="https://www.oauth.com/oauth2-servers/definitions/">Terminology</a> (oauth.com)</li>
        <li><a href="https://auth0.com/docs/applications/concepts/app-types-confidential-public">Confidential and Public Applications</a> (auth0.com)</li>
      </ul>
    </p>

  </div>
</div>

<?php require('../../../includes/_footer.php'); ?>
