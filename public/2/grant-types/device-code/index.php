<?php
$page_title = "Device Code Grant — OAuth 2.0";
$page_section = "";
$page_meta_description = "The Device Authorization Grant lets browserless or input-constrained devices obtain access tokens by having the user authorize on a secondary device.";
require('../../../../includes/_header.php');
?>
<div class="container">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/2/">OAuth 2.0</a></li>
      <li class="breadcrumb-item"><a href="/2/grant-types/">Grant Types</a></li>
      <li class="breadcrumb-item active">Device Code</li>
    </ol>
  </nav>

  <h2>Device Authorization Grant</h2>

  <div class="spec-meta">
    <a href="https://www.rfc-editor.org/rfc/rfc8628" class="rfc-badge">RFC 8628</a>
    <span class="spec-status spec-status--published">Published</span>
    <a href="https://www.rfc-editor.org/rfc/rfc8628" class="rfc">rfc-editor.org/rfc/rfc8628</a>
  </div>

  <p class="spec-lede">The Device Authorization Grant, also known as the Device Flow, lets devices with no browser or limited input — smart TVs, CLIs, game consoles, streaming sticks, hardware encoders — get access tokens by having the user approve the request on a separate device like their phone.</p>

  <div class="spec-when">
    <strong>When to use this</strong>
    Use the Device Authorization Grant when your app runs on a device that has no browser or makes it difficult to enter a URL — smart TVs, streaming devices, IoT devices, CLIs, and command-line tools. The device displays a short code and URL; the user visits the URL on their phone or computer, enters the code, and approves access. The device polls until authorization is complete or the code expires.
  </div>

  <p>The flow has no redirect URI. The device POSTs to the device authorization endpoint and receives a <code>device_code</code>, a <code>user_code</code>, and a <code>verification_uri</code>. It displays the user code and URL, then polls the token endpoint with <code>grant_type=urn:ietf:params:oauth:grant-type:device_code</code> at the specified interval. Once the user completes authorization on their secondary device, the next poll returns an access token.</p>

  <h3>Related specs</h3>
  <ul>
    <li><a href="/2/cross-device-security/">Security of Cross-Device Flows</a> <a href="https://www.rfc-editor.org/rfc/rfc10027" class="rfc-badge">RFC 10027</a> — the phishing risks of this flow and how to mitigate them</li>
  </ul>

  <h3>More resources</h3>
  <ul>
    <li><a href="https://www.oauth.com/oauth2-servers/device-flow/">Device Flow</a> (oauth.com)</li>
    <li><a href="https://developer.okta.com/blog/2019/02/19/add-oauth-device-flow-to-any-server">Add the OAuth 2.0 Device Flow to any OAuth Server</a> (Aaron Parecki)</li>
    <li><a href="https://www.oauth.com/oauth2-servers/device-flow/token-request/">Device Flow Token Request</a> (oauth.com)</li>
    <li><a href="https://www.oauth.com/playground/device-code.html">Device Code Grant on the OAuth 2.0 Playground</a> (oauth.com)</li>
  </ul>

</div>
<?php require('../../../../includes/_footer.php'); ?>
