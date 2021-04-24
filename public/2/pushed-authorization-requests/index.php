<?php
$page_title = "OAuth 2.0 Pushed Authorization Requests";
$page_section = "";
$page_secondary = "";
$page_meta_description = "OAuth 2.0 Pushed Authorization Requests";
require('../../../includes/_header.php');
?>
<div class="container">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/2/">OAuth 2.0</a></li>
      <li class="breadcrumb-item active">Pushed Authorization Requests</li>
    </ol>
  </nav>
  <div>

    <h2>Draft: OAuth 2.0 Pushed Authorization Requests</h2>

    <p><a href="https://tools.ietf.org/html/draft-ietf-oauth-par" class="rfc">tools.ietf.org/html/draft-ietf-oauth-par</a></p>

    <p>The <a href="https://tools.ietf.org/html/draft-ietf-oauth-par">Pushed Authorization Requsts</a> extension describes a technique of initiating an OAuth flow from the backchannel instead of by building a URL, providing better security and more flexibility for building complex authorization requests.</p>
    <p>This draft is still in progress, and is open to feedback from people who are interested in using it!</p>

    <p>More resources
      <ul>
        <li><a href="https://medium.com/@darutk/illustrated-par-oauth-2-0-pushed-authorization-requests-652d71ed5cfb">Illustrated PAR: OAuth 2.0 Pushed Authorization Requests</a> (Takahiko Kawasaki)</li>
      </ul>
    </p>

  </div>
</div>

<?php require('../../../includes/_footer.php'); ?>
