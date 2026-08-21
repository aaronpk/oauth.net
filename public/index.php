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

  <div class="mt-4 mb-2">
    <p class="flow-heading">What are you building?</p>
    <div class="row g-3">

      <div class="col-md-4">
        <a href="/2/grant-types/authorization-code/" class="flow-card">
          <div class="flow-title">Web or mobile app</div>
          <div class="flow-grant">Authorization Code + PKCE</div>
          <p class="flow-desc">Users log in and grant your app access to their data or account.</p>
        </a>
      </div>

      <div class="col-md-4">
        <a href="/2/grant-types/client-credentials/" class="flow-card">
          <div class="flow-title">Server-to-server</div>
          <div class="flow-grant">Client Credentials</div>
          <p class="flow-desc">Your backend service calls another API directly, with no user involved.</p>
        </a>
      </div>

      <div class="col-md-4">
        <a href="/2/grant-types/device-code/" class="flow-card">
          <div class="flow-title">Device or CLI</div>
          <div class="flow-grant">Device Authorization</div>
          <p class="flow-desc">A device without a browser needs to get authorization from a user.</p>
        </a>
      </div>

    </div>
  </div>

  <div class="mt-4 mb-4">
    <p class="flow-heading">Popular Topics</p>
    <div class="topics-grid">
      <a href="/2/pkce/" class="topic-link">PKCE</a>
      <a href="/2/grant-types/authorization-code/" class="topic-link">Authorization Code</a>
      <a href="/2/grant-types/client-credentials/" class="topic-link">Client Credentials</a>
      <a href="/2/oauth-best-practice/" class="topic-link">Security Best Practice</a>
      <a href="/2/bearer-tokens/" class="topic-link">Bearer Tokens</a>
      <a href="/2/dpop/" class="topic-link">DPoP</a>
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
