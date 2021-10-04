<?php
$page_title = "ID Tokens vs Access Tokens";
$page_section = "";
$page_secondary = "";
$page_meta_description = "What is the difference between an OpenID Connect ID Token and an OAuth Access Token?";

require('../../includes/_header.php');
?>

<div class="container">
  <div>

    <h2>ID Tokens vs Access Tokens</h2>

    <p>What's the difference between an ID Token and an Access Token? Access tokens are defined in OAuth, ID tokens are defined in OpenID Connect.</p>
    <p><a href="/2/access-tokens/">Access tokens</a> are what the OAuth client uses to make requests to an API. The access token is meant to be read and validated by the API. An ID token contains information about what happened when a user authenticated, and is intended to be read by the OAuth client. The ID token may also contain information about the user such as their name or email address, although that is not a requirement of an ID token.</p>
    <p>Here are some further differences between ID tokens and access tokens:
      <ul>
        <li>ID tokens are meant to be read by the OAuth client. Access tokens are meant to be read by the resource server.</li>
        <li>ID tokens are <a href="/2/jwt/">JWTs</a>. Access tokens <a href="/2/jwt-access-tokens/">can be JWTs</a> but may also be a random string.</li>
        <li>ID tokens should <i>never</i> be sent to an API. Access tokens should <i>never</i> be read by the client.</li>
      </ul>
    </p>

    <p>
      Related:
      <ul>
        <li><a href="/2/access-tokens/">Access Tokens</a></li>
        <li><a href="/2/refresh-tokens/">Refresh Tokens</a></li>
      </ul>
    </p>    

    <p>More resources
      <ul>
        <li><a href="https://www.oauth.com/oauth2-servers/openid-connect/id-tokens/">ID Tokens</a> (oauth.com)</li>
        <li><a href="https://auth0.com/blog/id-token-access-token-what-is-the-difference/">ID Token and Access Token: What Is the Difference?</a> (auth0.com)</li>
        <li><a href="https://leastprivilege.com/2020/06/17/i-dont-like-identity-tokens/">I don’t like Identity Tokens</a> (leastprivilege.com)</li>
      </ul>
    </p>

  </div>
</div>

<?php require('../../includes/_footer.php'); ?>
