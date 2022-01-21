<?php
$page_title = "OAuth 2.0 Token Exchange";
$page_section = "";
$page_secondary = "";
$page_meta_description = "An OAuth 2.0 extension for a client to exchange one token for another, for example to accomplish single-sign-on between two separate apps";
require('../../../includes/_header.php');
?>
<div class="container">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/2/">OAuth 2.0</a></li>
      <li class="breadcrumb-item active">Token Exchange</li>
    </ol>
  </nav>
  <div>

    <h2>RFC 8693: Token Exchange</h2>

    <p><a href="https://datatracker.ietf.org/doc/html/rfc8693" class="rfc">datatracker.ietf.org/doc/html/rfc8693</a></p>

    <p>The Token Exchange extension defines a mechanism for a client to obtain its own tokens given a separate set of tokens. This has several different applications including:</p>
    <ul>
      <li>Single-sign-on between multiple mobile apps without launching a web browser</li>
      <li>A resource server exchanging a client's tokens for its own tokens</li>
    </ul>

    <p>
      Related Specs:
      <ul>
        <li><a href="/2/bearer-tokens/">OAuth 2.0 Bearer Token Usage (RFC 6750)</a></li>
        <li><a href="/2/jwt-access-tokens/">JWT Profile for Access Tokens</a></li>
      </ul>
    </p>

    <p>More resources
      <ul>
        <li><a href="https://developer.okta.com/blog/2021/11/12/native-sso">Native SSO: Desktop and Mobile Apps Single-Sign-On</a> (developer.okta.com)</li>
        <li><a href="https://developer.okta.com/blog/2022/01/13/mobile-sso">How to Create a Seamless Mobile SSO (Single Sign-On) Experience in iOS</a> (developer.okta.com)</li>
      </ul>
    </p>

  </div>
</div>

<?php require('../../../includes/_footer.php'); ?>
