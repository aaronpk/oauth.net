<?php
$page_title = "OAuth 2.0 Device Code Grant Type";
$page_section = "";
$page_secondary = "";
$page_meta_description = "The OAuth 2.0 device code grant type";
require('../../../includes/_header.php');
?>
<div class="container">

  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/2/">OAuth 2.0</a></li>
      <li class="breadcrumb-item"><a href="/2/grant-types/">Grant Types</a></li>
      <li class="breadcrumb-item active">Device Code</li>
    </ol>
  </nav>

  <div>

    <h2>OAuth 2.0 Device Code</h2>

    <p><a href="https://tools.ietf.org/html/rfc8628#section-3.4" class="rfc">tools.ietf.org/html/rfc8628#section-3.4</a></p>

    <p>The Device Code grant type is used by browserless or input-constrained devices in the <a href="/2/device-flow/">device flow</a> to exchange a previously obtained device code for an access token.</p>
    <p>The Device Code grant type value is <code>urn:ietf:params:oauth:grant-type:device_code</code>.</p>

    <p>More resources
      <ul>
        <li><a href="https://www.oauth.com/oauth2-servers/device-flow/token-request/">Device Flow Token Request</a> (oauth.com)</li>
        <li><a href="https://alexbilbie.com/2016/04/oauth-2-device-flow-grant/">Device Flow</a> (alexbilbie.com)</li>
        <li><a href="https://www.oauth.com/playground/device-code.html">Device Code Grant on the OAuth 2.0 Playground</a></li>
      </ul>
    </p>

  </div>
</div>

<?php require('../../../includes/_footer.php'); ?>
