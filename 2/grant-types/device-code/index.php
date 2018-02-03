<?php
$page_title = "OAuth 2.0 Device Code";
$page_section = "";
$page_secondary = "";
$page_meta_description = "The OAuth 2.0 device code grant type";
require('../../../includes/_header.php');
?>
<div class="container">
  <div id="header" class="column first last span-20">
    <?php require('../../../includes/_site_name.php'); ?>
    <div id="primary" class="column span-13 last">
      <?php require('../../../includes/_nav_primary.php'); ?>
    </div>
    <div id="secondary" class="column span-18 append-1 prepend-1 first last">
      <ul class="breadcrumb">
        <li><a href="/2/">OAuth 2.0</a> <span>&gt;</span> </li>
        <li><a href="/2/grant-types/">Grant Types</a> <span>&gt;</span> </li>
        <li class="current">Device Code</li>
      </ul>
    </div>
  </div>

  <div id="main" class="column first last span-18 prepend-1 append-1">

    <h2>OAuth 2.0 Device Code</h2>

    <?php require('../../../includes/_carbon.php'); ?>

    <p><a href="https://tools.ietf.org/html/draft-ietf-oauth-device-flow-07#section-3.4" class="rfc">Device Flow §3.4</a></p>

    <p>The Device Code grant type is used by browserless or input-constrained devices in the <a href="/2/device-flow/">device flow</a> to exchange a previously obtained device code for an access token.</p>
    <p>The Device Code grant type value is <code>urn:ietf:params:oauth:grant-type:device_code</code>.</p>

    <p>More resources
      <ul>
        <li><a href="https://www.oauth.com/oauth2-servers/device-flow/token-request/">Device Flow Token Request</a> (oauth.com)</li>
        <li><a href="https://alexbilbie.com/2016/04/oauth-2-device-flow-grant/">Device Flow</a> (alexbilbie.com)</li>
      </ul>
    </p>

  </div>
</div>

<?php require('../../../includes/_footer.php'); ?>
