<?php

$page_title = "OAuth 2.0 &mdash; OAuth";
$page_section = "";
$page_secondary = "";
$page_meta_description = "Resources and information related to the OAuth 2.0 protocol.";

require('../includes/_header.php');
?>
<div class="container">
  <div id="header" class="column first last span-20">
    <?php require('../includes/_site_name.php'); ?>
    <div id="primary" class="column span-13 last">
      <?php require('../includes/_nav_primary.php'); ?>
    </div>
    <div id="secondary" class="column span-18 append-1 prepend-1 first last">
    </div>
  </div>

  <div id="main" class="column first last span-18 prepend-1 append-1">

    <h2 id="oauth-2.0">OAuth 2.0</h2>

    <p><img src="/images/oauth-2-sm.png" alt="OAuth 2.0 logo" style="float:right; margin: 0 0 8px 8px;" />OAuth 2.0 is the next evolution of the OAuth protocol which was originally created in late 2006. OAuth 2.0 focuses on client developer simplicity while providing specific authorization flows for web applications, desktop applications, mobile phones, and living room devices. This specification is being developed within the <a href="https://www.ietf.org/mailman/listinfo/oauth">IETF OAuth WG</a>.</p>
    <p>Questions, suggestions and protocol changes should be discussed on the <a href="https://www.ietf.org/mailman/listinfo/oauth">mailing list</a>.</p>

    <?php require('../includes/_carbon.php'); ?>

    <h3 style="clear:none;">OAuth 2.0 Core</h3>
    <ul>
      <li><a href="http://tools.ietf.org/html/rfc6749">OAuth 2.0 Framework</a> - RFC 6749</li>
      <li><a href="http://tools.ietf.org/html/rfc6750">Bearer Token Usage</a> - RFC 6750</li>
      <li><a href="http://tools.ietf.org/html/rfc6819">Threat Model and Security Considerations</a> - RFC 6819</li>
    </ul>

    <h3>OAuth 2.0 Extensions</h3>
    <ul>
      <li><a href="https://tools.ietf.org/html/draft-ietf-oauth-device-flow-03">OAuth 2.0 Device Flow</a></li>
      <li><a href="https://tools.ietf.org/html/rfc7662">OAuth 2.0 Token Introspection</a> - RFC 7662, to determine the active state and meta-information of a token</li>
      <li><a href="https://tools.ietf.org/html/rfc7636">PKCE</a> - Proof Key for Code Exchange, better security for native apps</li>
      <li><a href="https://tools.ietf.org/html/draft-ietf-oauth-native-apps-07">Native Apps</a> - Recommendations for using OAuth 2.0 with native apps</li>
      <li><a href="http://tools.ietf.org/html/rfc7519">JSON Web Token</a> - RFC 7519</li>
      <li><a href="http://tools.ietf.org/html/rfc7521">OAuth Assertions Framework</a> - RFC 7521</li>
      <li><a href="http://tools.ietf.org/html/rfc7522">SAML2 Bearer Assertion</a> - RFC 7522, for integrating with existing identity systems</li>
      <li><a href="http://tools.ietf.org/html/rfc7523">JWT Bearer Assertion</a> - RFC 7523, for integrating with existing identity systems</li>
    </ul>

    <h3>Protocols Built on OAuth 2.0</h3>
    <ul>
      <li><a href="http://openid.net/connect/">Open ID Connect</a></li>
      <li><a href="http://blue-button.github.io/blue-button-plus-pull/">Blue Button</a></li>
      <li><a href="http://en.openei.org/wiki/Green_Button_Developer">Green Button</a></li>
      <li><a href="https://kantarainitiative.org/confluence/display/uma/UMA+1.0+Core+Protocol">UMA</a></li>
      <li><a href="http://www.gsma.com/oneapi/">GSMA OneAPI</a></li>
    </ul>

    <h3>Community Resources</h3>
    <ul>
      <li><a href="https://aaronparecki.com/2012/07/29/2/oauth2-simplified">OAuth 2.0 Simplified</a></li>
      <li><a href="/books/">Books about OAuth</a></li>
      <li><a href="http://oauth.com/">OAuth 2.0 Servers</a> - a guide to building OAuth 2.0 servers by Aaron Parecki</li>
    </ul>

    <h3>Code and Services</h3>
    <ul>
      <li><a href="/code/">OAuth 2.0 Code and Services</a></li>
    </ul>

    <h3>Legacy</h3>
    <p>See more information on <a href="/1/">OAuth 1.0 and 1.0a</a>.</p>

  </div>
</div>

<?php require('../includes/_footer.php'); ?>
