<?php
$page_title = "OAuth 2.0 Password Grant";
$page_section = "";
$page_secondary = "";
$page_meta_description = "The OAuth 2.0 password grant type";
require('../../../includes/_header.php');
?>
<div class="container">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/2/">OAuth 2.0</a></li>
      <li class="breadcrumb-item"><a href="/2/grant-types/">Grant Types</a></li>
      <li class="breadcrumb-item active">Password</li>
    </ol>
  </nav>

  <div>

    <h2>OAuth 2.0 Password Grant</h2>

    <?php require('../../../includes/_carbon.php'); ?>

    <p><a href="https://tools.ietf.org/html/rfc6749#section-1.3.3" class="rfc">RFC 6749 §1.3.3</a></p>

    <p>The Password grant type is used by first-party clients to exchange a user's credentials for an access token.</p>
    <p>Since this involves the client asking the user for their password, it should not be used by third party clients. In this flow, the user's username and password are exchanged directly for an access token.</p>

    <p>More resources
      <ul>
        <li><a href="https://www.oauth.com/oauth2-servers/access-tokens/password-grant/">Password Grant</a> (oauth.com)</li>
        <li><a href="https://aaronparecki.com/oauth-2-simplified/#password">Password</a> (aaronparecki.com)</li>
      </ul>
    </p>

  </div>
</div>

<?php require('../../../includes/_footer.php'); ?>
