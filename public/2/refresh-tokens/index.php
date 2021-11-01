<?php
$page_title = "What is a Refresh Token - OAuth 2.0";
$page_section = "";
$page_secondary = "";
$page_meta_description = "What is an OAuth Refresh Token?";
require('../../../includes/_header.php');
?>
<div class="container">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/2/">OAuth 2.0</a></li>
      <li class="breadcrumb-item active">Refresh Tokens</li>
    </ol>
  </nav>
  <div>

    <h2>OAuth Refresh Tokens</h2>

    <p><a href="https://datatracker.ietf.org/doc/html/rfc6749#section-1.5" class="rfc">datatracker.ietf.org/doc/html/rfc6749#section-1.5</a></p>

    <p>An OAuth Refresh Token is a string that the OAuth client can use to get a new access token without the user's interaction.</p>

    <p>A refresh token must not allow the client to gain any access beyond the scope of the original grant. The refresh token exists to enable authorization servers to use short lifetimes for access tokens without needing to involve the user when the token expires.</p>

    <p>
      Related:
      <ul>
        <li><a href="/2/access-tokens/">OAuth 2.0 Access Tokens</a></li>
      </ul>
    </p>

    <p>More resources
      <ul>
        <li><a href="https://www.oauth.com/oauth2-servers/access-tokens/refreshing-access-tokens/">Refreshing Access Tokens</a> (oauth.com)</li>
        <li><a href="https://auth0.com/blog/refresh-tokens-what-are-they-and-when-to-use-them/">Refresh Tokens: What they are and when to use them</a> (auth0.com)</li>
      </ul>
    </p>

  </div>
</div>

<?php require('../../../includes/_footer.php'); ?>
