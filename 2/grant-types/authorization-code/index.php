<?php
$page_title = "OAuth 2.0 Authorization Code Grant Type";
$page_section = "";
$page_secondary = "";
$page_meta_description = "The OAuth 2.0 authorization code grant type";
require('../../../includes/_header.php');
?>
<div class="container">

  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/2/">OAuth 2.0</a></li>
      <li class="breadcrumb-item"><a href="/2/grant-types/">Grant Types</a></li>
      <li class="breadcrumb-item active">Authorization Code</li>
    </ol>
  </nav>

  <div>

    <h2>OAuth 2.0 Authorization Code Grant</h2>

    <?php require('../../../includes/_carbon.php'); ?>

    <p><a href="https://tools.ietf.org/html/rfc6749#section-1.3.1" class="rfc">RFC 6749 §1.3.1</a></p>

    <p>The Authorization Code grant type is used by confidential and public clients to exchange an authorization code for an access token.</p>
    <p>After the user returns to the client via the redirect URL, the application will get the authorization code from the URL and use it to request an access token.</p>

    <p>More resources
      <ul>
        <li><a href="https://developer.okta.com/blog/2018/04/10/oauth-authorization-code-grant-type">What is the OAuth 2.0 Authorization Code Grant?</a> (developer.okta.com)</li>
        <li><a href="https://www.oauth.com/oauth2-servers/access-tokens/authorization-code-request/">Authorization Code</a> (oauth.com)</li>
        <li><a href="https://aaronparecki.com/oauth-2-simplified/#web-server-apps">Web Server Apps</a> (aaronparecki.com)</li>
      </ul>
    </p>

  </div>
</div>

<?php require('../../../includes/_footer.php'); ?>
