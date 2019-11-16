<?php
$page_title = "PKCE for OAuth 2.0";
$page_section = "";
$page_secondary = "";
$page_meta_description = "PKCE - Proof Key for Code Exchange - OAuth 2.0 - RFC7636";
require('../../includes/_header.php');
?>
<div class="container">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/2/">OAuth 2.0</a></li>
      <li class="breadcrumb-item active">PKCE</li>
    </ol>
  </nav>
  <div>

    <h2>RFC 7636: Proof Key for Code Exchange</h2>

    <p><a href="http://tools.ietf.org/html/rfc7636" class="rfc">tools.ietf.org/html/rfc7636</a></p>

    <p>PKCE (<a href="http://tools.ietf.org/html/rfc7636">RFC 7636</a>) is an extension to the <a href="/2/grant-types/authorization-code/">Authorization Code flow</a> to prevent certain attacks and to be able to securely perform the OAuth exchange from public clients.</p>
    <p>It is primarily used by mobile and JavaScript apps, but the technique can be applied to any client as well.</p>

    <p>More resources
      <ul>
        <li><a href="https://www.oauth.com/oauth2-servers/pkce/">PKCE</a> (oauth.com)</li>
        <li><a href="https://aaronparecki.com/oauth-2-simplified/#mobile-apps">Mobile Apps</a> (aaronparecki.com)</li>
        <li><a href="https://developers.google.com/identity/protocols/OAuth2InstalledApp">OAuth 2.0 for Mobile &amp; Desktop Apps</a> (developers.google.com)</li>
        <li><a href="https://www.oauth.com/playground/authorization-code-with-pkce.html">PKCE Example on the OAuth 2.0 Playground</a></li>
        <li><a href="https://developer.okta.com/blog/2018/12/13/oauth-2-for-native-and-mobile-apps">OAuth 2.0 for Native and Mobile Apps</a> (developer.okta.com by Micah Silverman)</li>
      </ul>
    </p>

  </div>
</div>

<?php require('../../includes/_footer.php'); ?>
