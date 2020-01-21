<?php
$page_title = "OAuth 2.0 Device Authorization Grant";
$page_section = "";
$page_secondary = "";
$page_meta_description = "OAuth 2.0 for browserless and input-constrained devices";
require('../../includes/_header.php');
?>
<div class="container">

  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/2/">OAuth 2.0</a></li>
      <li class="breadcrumb-item active">Device Grant</li>
    </ol>
  </nav>

  <div>

    <h2>RFC 8628: OAuth 2.0 Device Authorization Grant</h2>

    <p><a href="https://tools.ietf.org/html/rfc8628" class="rfc">tools.ietf.org/html/rfc8628</a></p>
    <p>The OAuth 2.0 Device Authorization Grant (formerly known as the Device Flow) is an OAuth 2.0 extension that enables devices with no browser or limited input capability to obtain an access token. This is commonly seen on Apple TV apps, or devices like hardware encoders that can stream video to a YouTube channel.</p>

    <p>More resources
      <ul>
        <li><a href="https://www.oauth.com/oauth2-servers/device-flow/">Device Flow</a> (oauth.com)</li>
        <li><a href="https://developer.okta.com/blog/2019/02/19/add-oauth-device-flow-to-any-server">Add the OAuth 2.0 Device Flow to any OAuth Server</a> (by Aaron Parecki)</li>
        <li><a href="https://alexbilbie.com/2016/04/oauth-2-device-flow-grant/">OAuth 2.0 Device Flow Grant</a> (alexbilbie.com)</li>
        <li><a href="https://github.com/aaronpk/Device-Flow-Proxy-Server">A proxy server that implements the Device Flow to an existing OAuth server</a> (github.com)</li>
      </ul>
    </p>

  </div>
</div>

<?php require('../../includes/_footer.php'); ?>
