<?php
$page_title = "PKCE for OAuth 2.0";
$page_section = "";
$page_secondary = "";
$page_meta_description = "PKCE - Proof Key for Code Exchange - OAuth 2.0 - RFC7636";
require('../../includes/_header.php');
?>
<div class="container">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/2/">OAuth 2.0</a></li>
      <li class="breadcrumb-item active">PKCE</li>
    </ol>
  </nav>
  <div>

    <h2>RFC 7636: Proof Key for Code Exchange</h2>

    <?php require('../../includes/_carbon.php'); ?>

    <p><a href="http://tools.ietf.org/html/rfc7636" class="rfc">RFC 7636</a></p>

    <p>PKCE (<a href="http://tools.ietf.org/html/rfc7636">RFC 7636</a>) is a technique to secure public clients that don't use a client secret.</p>
    <p>It is primarily used by native and mobile apps, but the technique can be applied to any public client as well. It requires additional support by the authorization server, so it is only supported on certain providers.</p>

    <p>More resources
      <ul>
        <li><a href="https://www.oauth.com/oauth2-servers/pkce/">PKCE</a> (oauth.com)</li>
        <li><a href="https://aaronparecki.com/oauth-2-simplified/#mobile-apps">Mobile Apps</a> (aaronparecki.com)</li>
        <li><a href="https://developers.google.com/identity/protocols/OAuth2InstalledApp">OAuth 2.0 for Mobile &amp; Desktop Apps</a> (google.com)</li>
      </ul>
    </p>

  </div>
</div>

<?php require('../../includes/_footer.php'); ?>
