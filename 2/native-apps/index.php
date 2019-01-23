<?php
$page_title = "OAuth 2.0 for Mobile and Native Apps";
$page_section = "";
$page_secondary = "";
$page_meta_description = "OAuth 2.0 for Mobile and Native Apps - RFC 8252";
require('../../includes/_header.php');
?>
<div class="container">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/2/">OAuth 2.0</a></li>
      <li class="breadcrumb-item active">Native Apps</li>
    </ol>
  </nav>
  <div>

    <h2>RFC 8252: OAuth 2.0 for Mobile and Native Apps</h2>

    <p><a href="http://tools.ietf.org/html/rfc8252" class="rfc">tools.ietf.org/html/rfc8252</a></p>

    <p>OAuth 2.0 for Native Apps (<a href="http://tools.ietf.org/html/rfc8252">RFC 8252</a>) describes security requirements and other recommendations for native and mobile applications using OAuth 2.0.</p>
    <p>It describes things like not allowing the third-party application to open an embedded web view which is more susceptible to phishing attacks, as well as platform-specific recommendations on how to do so.</p>
    <p>It also recommends using the <a href="/2/pkce/">PKCE extension</a> to further protect users.</p>

    <p>More resources
      <ul>
        <li><a href="https://www.oauth.com/oauth2-servers/oauth2-clients/mobile-and-native-apps/">Mobile and Native Apps</a> (oauth.com)</li>
        <li><a href="https://aaronparecki.com/oauth-2-simplified/#mobile-apps">Mobile Apps</a> (aaronparecki.com)</li>
        <li><a href="https://developers.google.com/identity/protocols/OAuth2InstalledApp">OAuth 2.0 for Mobile &amp; Desktop Apps</a> (developers.google.com)</li>
        <li><a href="https://developer.okta.com/blog/2018/12/13/oauth-2-for-native-and-mobile-apps">OAuth 2.0 for Native and Mobile Apps</a> (developer.okta.com by Micah Silverman)</li>
        <li><a href="https://developer.okta.com/blog/2019/01/22/oauth-api-keys-arent-safe-in-mobile-apps">Why OAuth Secrets Aren't Safe in Mobile Apps</a> (developer.okta.com by Aaron Parecki)</li>
      </ul>
    </p>

  </div>
</div>

<?php require('../../includes/_footer.php'); ?>
