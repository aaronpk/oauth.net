<?php
$page_title = "JWT Access Tokens for OAuth 2.0";
$page_section = "";
$page_secondary = "";
$page_meta_description = "JWT Profile for OAuth 2.0 Access Tokens";
require('../../includes/_header.php');
?>
<div class="container">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/2/">OAuth 2.0</a></li>
      <li class="breadcrumb-item active">JWT Access Tokens</li>
    </ol>
  </nav>
  <div>

    <h2>Draft: JWT Access Tokens for OAuth 2.0</h2>

    <p><a href="https://tools.ietf.org/html/draft-ietf-oauth-access-token-jwt" class="rfc">tools.ietf.org/html/draft-ietf-oauth-access-token-jwt</a></p>

    <p>The JWT Access Token profile describes a way to encode access tokens as a JSON Web Token, including a set of standard claims that are useful in an access token.</p>
    <p>JWTs can be used as OAuth 2.0 <a href="/2/bearer-tokens/">Bearer Tokens</a> to encode all relevant parts of an access token into the access token itself instead of having to store them in a database.</p>

    <p>More resources
      <ul>
        <li><a href="https://www.oauth.com/oauth2-servers/access-tokens/self-encoded-access-tokens/">Self-Encoded Access Tokens</a> (oauth.com)</li>
        <li><a href="https://www.jsonwebtoken.io/">jsonwebtoken.io</a></li>
        <li><a href="https://auth0.com/docs/jwt">JSON Web Tokens (JWT) in Auth0</a> (auth0.com)</li>
        <li><a href="https://developer.okta.com/blog/2019/02/04/create-and-verify-jwts-in-php">Create and Verify JWTs in PHP</a> (developer.okta.com)</li>
      </ul>
    </p>

  </div>
</div>

<?php require('../../includes/_footer.php'); ?>
