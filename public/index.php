<?php
$page_section = "home";
$page_title = "OAuth Community Site";

require('../includes/_header.php');
?>

<div class="container">

  <div id="site-description">
    <h2>An open standard for secure authorization</h2>
    <p class="hero-subtitle">OAuth 2.0 lets users grant apps access to their data without sharing passwords — used by millions of apps and APIs worldwide.</p>
    <div class="hero-ctas">
      <a href="/getting-started/" class="btn btn-light btn-lg me-2">Get Started</a>
      <a href="/2/" class="btn btn-outline-light btn-lg">Learn OAuth 2.0</a>
    </div>
  </div>

  <div class="row mt-4">

    <div class="col-md-6 mb-3">
      <div class="audience-card">
        <h5>Building an app?</h5>
        <p>Add secure login and API access to your web, mobile, or desktop app.</p>
        <ul>
          <li><a href="/2/grant-types/authorization-code/">Authorization Code + PKCE</a></li>
          <li><a href="/2/grant-types/client-credentials/">Client Credentials</a></li>
          <li><a href="/2/grant-types/device-code/">Device Code Flow</a></li>
        </ul>
      </div>
    </div>

    <div class="col-md-6 mb-3">
      <div class="audience-card">
        <h5>Building an API?</h5>
        <p>Protect your endpoints and let third-party apps access your users' data safely.</p>
        <ul>
          <li><a href="/2/bearer-tokens/">Bearer Tokens</a></li>
          <li><a href="/2/token-introspection/">Token Introspection</a></li>
          <li><a href="/2/scope/">Defining Scopes</a></li>
        </ul>
      </div>
    </div>

  </div>

  <div class="column first last span-20" style="clear: both; text-align: center; margin: 20px auto; float: none; max-width: 300px;">
    <div style="padding: 20px 0; display: flex; flex-direction: row;">
      <?php if(file_exists(__DIR__.'/../data/sponsors/home.php')) { include(__DIR__.'/../data/sponsors/home.php'); } ?>
    </div>
  </div>

  <h4 class="mt-2 mb-3">Learn OAuth 2.0</h4>
  <div style="margin-bottom: 20px;">
    <iframe width="100%" height="400" src="https://www.youtube.com/embed/KT8ybowdyr0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>

</div>

<?php require('../includes/_footer.php'); ?>
