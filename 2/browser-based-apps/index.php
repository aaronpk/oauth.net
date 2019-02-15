<?php
$page_title = "OAuth 2.0 for Browser-Based Apps";
$page_section = "";
$page_secondary = "";
$page_meta_description = "OAuth 2.0 for Browser-Based Apps";
require('../../includes/_header.php');
?>
<div class="container">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/2/">OAuth 2.0</a></li>
      <li class="breadcrumb-item active">Browser-Based Apps</li>
    </ol>
  </nav>
  <div>

    <h2>OAuth 2.0 for Browser-Based Apps</h2>

    <p><a href="https://tools.ietf.org/html/draft-ietf-oauth-browser-based-apps" class="rfc">tools.ietf.org/html/draft-parecki-oauth-browser-based-apps</a></p>

    <p><a href="https://tools.ietf.org/html/draft-ietf-oauth-browser-based-apps">OAuth 2.0 for Browser-Based Apps</a> describes security requirements and other recommendations for SPAs and browser-based applications using OAuth 2.0.</p>
    <p>Among other things, it recommends using the Authorization Code flow with the <a href="/2/pkce/">PKCE extension</a> instead of using the Implicit flow.</p>

    <p>More resources
      <ul>
        <li><a href="https://medium.com/@torsten_lodderstedt/why-you-should-stop-using-the-oauth-implicit-grant-2436ced1c926">Why you should stop using the OAuth implicit grant</a> (Torsten Lodderstedt)</li>
        <li><a href="https://tools.ietf.org/html/draft-ietf-oauth-security-topics-09#section-2.1.2">Section 2.1.2 of OAuth 2.0 Security Best Current Practice</a></li>
        <li><a href="https://www.oauth.com/oauth2-servers/single-page-apps/">Single-Page Apps</a> (oauth.com)</li>
        <li><a href="https://aaronparecki.com/oauth-2-simplified/#single-page-apps">Single-Page Apps</a> (aaronparecki.com)</li>
      </ul>
    </p>

  </div>
</div>

<?php require('../../includes/_footer.php'); ?>
