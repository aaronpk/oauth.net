<?php
$page_title = "PKCE for OAuth 2.0";
$page_section = "";
$page_secondary = "";
$page_meta_description = "PKCE - Proof Key for Code Exchange - OAuth 2.0 - RFC7636";
require('../../../includes/_header.php');
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

    <p>PKCE (<a href="http://tools.ietf.org/html/rfc7636">RFC 7636</a>) is an extension to the <a href="/2/grant-types/authorization-code/">Authorization Code flow</a> to prevent several attacks and to be able to securely perform the OAuth exchange from public clients.</p>
    <p>It was originally designed to protect mobile apps, but its ability to prevent authorization code injection makes it useful for every OAuth client, even web apps that use a client secret.</p>

    <p>Videos
      <ul>
        <li><a href="https://www.youtube.com/watch?v=g_aVPdwBTfw&t=500s">What's New With OAuth and OIDC? (8:22)</a></li>
        <li><a href="https://www.youtube.com/watch?v=5cQNwifDq1U">What's the Difference between Confidential and Public Clients?</a></li>
        <li><a href="https://www.youtube.com/watch?v=CHzERullHe8">What's Going On with the Implicit Flow?</a></li>
      </ul>
    </p>

    <p>More resources
      <ul>
        <li><a href="https://www.oauth.com/oauth2-servers/pkce/">PKCE</a> (oauth.com)</li>
        <li><a href="https://aaronparecki.com/oauth-2-simplified/#mobile-apps">Mobile Apps</a> (aaronparecki.com)</li>
        <li><a href="https://developers.google.com/identity/protocols/OAuth2InstalledApp">OAuth 2.0 for Mobile &amp; Desktop Apps</a> (developers.google.com)</li>
        <li><a href="https://www.oauth.com/playground/authorization-code-with-pkce.html">PKCE Example on the OAuth 2.0 Playground</a></li>
        <li><a href="https://developer.okta.com/blog/2018/12/13/oauth-2-for-native-and-mobile-apps">OAuth 2.0 for Native and Mobile Apps</a> (developer.okta.com by Micah Silverman)</li>
         <li><a href="https://www.loginradius.com/engineering/blog/pkce/">All about PKCE in OAuth 2.0</a> (https://www.loginradius.com/engineering by Narendra Pareek)</li>
      </ul>
    </p>

  </div>
</div>

<?php require('../../../includes/_footer.php'); ?>
