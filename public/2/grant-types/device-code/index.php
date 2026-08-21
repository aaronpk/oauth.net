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

  <p class="spec-lede">The Device Authorization Grant lets input-constrained devices — TVs, CLIs, game consoles — get access tokens by having the user approve the request on a separate device like their phone.</p>

  <div class="spec-when">
    <strong>When to use this</strong>
    Use the Device Authorization Grant when your app runs on a device that has no browser or makes it difficult to enter a URL — smart TVs, streaming devices, IoT devices, CLIs, and command-line tools. The device displays a short code and URL; the user types the URL on their phone or computer, enters the code, and approves access.
  </div>

  <p>The flow works without any redirect URI. The device polls the token endpoint using the <code>device_code</code> it received until the user completes authorization or the code expires. The grant type value is <code>urn:ietf:params:oauth:grant-type:device_code</code>.</p>

  <h3>More resources</h3>
  <ul>
    <li><a href="https://www.oauth.com/oauth2-servers/device-flow/token-request/">Device Flow Token Request</a> (oauth.com)</li>
    <li><a href="https://www.oauth.com/playground/device-code.html">Device Code Grant on the OAuth 2.0 Playground</a> (oauth.com)</li>
  </ul>

</div>
<?php require('../../../../includes/_footer.php'); ?>
