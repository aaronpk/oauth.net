<?php
$page_title = "OAuth 2.0 Device Flow";
$page_section = "";
$page_secondary = "";
$page_meta_description = "OAuth 2.0 for browserless and input-constrained devices";
require('../../includes/_header.php');
?>
<div class="container">
  <div id="header" class="column first last span-20">
    <?php require('../../includes/_site_name.php'); ?>
    <div id="primary" class="column span-13 last">
      <?php require('../../includes/_nav_primary.php'); ?>
    </div>
    <div id="secondary" class="column span-18 append-1 prepend-1 first last">
      <ul class="breadcrumb">
        <li><a href="/2/">OAuth 2.0</a> <span>&gt;</span> </li>
        <li class="current">Device Flow</li>
      </ul>
    </div>
  </div>

  <div id="main" class="column first last span-18 prepend-1 append-1">

    <h2>OAuth 2.0 Device Flow</h2>

    <?php require('../../includes/_carbon.php'); ?>

    <p><a href="https://tools.ietf.org/html/draft-ietf-oauth-device-flow" class="rfc">Device Flow</a></p>

    <p>The Device Flow is an OAuth 2.0 extension that enables devices with no browser or limited input capability to obtain an access token. This is commonly seen on Apple TV apps, or devices like hardware encoders that can stream video to a YouTube channel.</p>

    <p>More resources
      <ul>
        <li><a href="https://www.oauth.com/oauth2-servers/device-flow/">Device Flow</a> (oauth.com)</li>
        <li><a href="https://alexbilbie.com/2016/04/oauth-2-device-flow-grant/">OAuth 2.0 Device Flow Grant</a> (alexbilbie.com)</li>
      </ul>
    </p>

  </div>
</div>

<?php require('../../includes/_footer.php'); ?>
