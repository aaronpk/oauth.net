<?php
$page_title = "Private Key JWT";
$page_section = "";
$page_secondary = "";
$page_meta_description = "Private Key JWT is a method of client authentication where the client signs a JWT with its private key";

require('../../includes/_header.php');
?>

<div class="container">
  <div>

    <h2>Private Key JWT</h2>

    <p>Private Key JWT is a method of <a href="/2/client-authentication/">client authentication</a> where the client creates and signs a JWT using its own private key. This method is described in a combination of <a href="https://www.rfc-editor.org/rfc/rfc7521.html">RFC 7521 (Assertion Framework)</a> and <a href="https://www.rfc-editor.org/rfc/rfc7523.html">RFC 7523 (JWT Profile for Client Authentication</a>, and referenced by <a href="https://openid.net/specs/openid-connect-core-1_0.html#ClientAuthentication">OpenID Connect</a> and <a href="https://openid.bitbucket.io/fapi/fapi-2_0-security.html">FAPI 2.0 Security Profile</a>.</p>

    <p>In OAuth, Private Key JWT can be used as a form of client authentication. Even though this is sometimes referred to a <code>private_key_jwt</code>, the JWT itself is actually sent in a parameter called <code>client_assertion</code>. Other forms of client authentication in OAuth include:</p>
    <ul>
      <li><a href="/2/mtls/">Mutual TLS</a> (RFC 8705)</li>
      <li><a href="/2/client-authentication/">Client Secret</a> (RFC 6749)</li>
    </ul>


    <p>More resources
      <ul>
        <li><a href="https://developer.okta.com/docs/guides/build-self-signed-jwt/java/main/">Build a JWT for Client Authentication</a> (developer.okta.com)</li>
        <li><a href="https://developers.login.gov/oidc/">OpenID Connect docs on Login.gov</a></li>
        <li><a href="https://cloudentity.com/developers/basics/oauth-client-authentication/private-key-jwt-client-authentication/">Private Key JWT Client Authentication</a> (cloudentity.com)</li>
        <li><a href="https://kb.authlete.com/en/s/oauth-and-openid-connect/a/client-auth-private-key-jwt">Client Authentication using private_key_jwt</a> (authlete.com)</li>
      </ul>
    </p>

  </div>
</div>

<?php require('../../includes/_footer.php'); ?>
