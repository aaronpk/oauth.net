<?php

$page_title = "Documentation &mdash; OAuth";
$page_section = "documentation";
$page_secondary = "";
$page_meta_description = "";

require('../includes/_header.php');
?>

<body class="<?php echo $page_section; ?>">
  <div class="container">
    <div id="header" class="column first last span-20">
      <h1 id="site-name" class="column first span-5 prepend-1 append-1"><a href="/">OAuth</a></h1>
      <div id="primary" class="column span-13 last">

<?php require('../includes/_nav_primary.php'); ?>

      </div>
      <div id="secondary" class="column span-18 append-1 prepend-1 first last">
        <ul class="navigation">
          <li><a href="/documentation/spec">Spec</a></li>
          <li><a href="/documentation/faq">FAQ</a></li>
          <li><a href="/documentation/getting-started">Getting Started</a></li>
        </ul>
      </div>
    </div>

  <div id="main" class="column first last span-18 prepend-1 append-1">
    <h2>OAuth 2.0 Core</h2>
    <ul>
      <li><a href="http://tools.ietf.org/html/rfc6749">OAuth 2.0 Framework</a> - RFC 6749</li>
      <li><a href="http://tools.ietf.org/html/rfc6750">Bearer Token Usage</a> - RFC 6750</li>
      <li><a href="http://tools.ietf.org/html/rfc6819">Threat Model and Security Considerations</a> - RFC 6819</li>
    </ul>

    <h2>Protocols Built on OAuth 2.0</h2>
    <ul>
      <li><a href="http://openid.net/connect/">Open ID Connect</a></li>
      <li><a href="http://blue-button.github.io/blue-button-plus-pull/">Blue Button</a></li>
      <li><a href="http://en.openei.org/wiki/Green_Button_Developer">Green Button</a></li>
      <li><a href="https://kantarainitiative.org/confluence/display/uma/UMA+1.0+Core+Protocol">UMA</a></li>
      <li><a href="http://www.gsma.com/oneapi/">GSMA OneAPI</a></li>
    </ul>

    <h2>OAuth 2.0 Extensions</h2>
    <ul>
      <li><a href="http://tools.ietf.org/html/rfc7519">JSON Web Token</a> - RFC 7519</li>
      <li><a href="http://tools.ietf.org/html/rfc7521">OAuth Assertions Framework</a> - RFC 7521</li>
      <li><a href="http://tools.ietf.org/html/rfc7522">SAML2 Bearer Assertion</a> - RFC 7522, for integrating with existing identity systems</li>
      <li><a href="http://tools.ietf.org/html/rfc7523">JWT Bearer Assertion</a> - RFC 7523, for integrating with existing identity systems</li>
    </ul>

    <h2>Community Resources</h2>
    <ul>
      <li><a href="http://aaronparecki.com/articles/2012/07/29/1/oauth2-simplified">OAuth 2.0 Simplified</a></li>
      <li><a href="http://hueniverse.com/oauth/">OAuth Resource Center</a> from <a href="http://hueniverse.com">Eran Hammer-Lahav</a> the specifications editor, including a beginner's guide and tutorials.</li>
    </ul>


    <h2>Obsolete Versions of OAuth</h2>
    <ul>
      <li><a href="http://tools.ietf.org/html/rfc5849">RFC 5849: The OAuth 1.0 Protocol</a> - the final version of the OAuth 1.0 specification.</li>
      <li><a href="/core/1.0">OAuth Core 1.0</a> was released December 4, 2007.</li>
      <li><a href="/core/1.0a">OAuth Core 1.0 Revision A</a> was released June 24, 2009.</li>
    </ul>

  </div>

	<?php include('../includes/_edit_banner.php'); ?>

<?php require('../includes/_footer.php'); ?>
