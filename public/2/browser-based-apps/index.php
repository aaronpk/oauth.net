<?php
$page_title = "OAuth 2.0 for Browser-Based Apps";
$page_section = "";
$page_meta_description = "Best practices and security requirements for OAuth 2.0 in single-page apps and browser-based applications.";
require('../../../includes/_header.php');
?>
<div class="container">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/2/">OAuth 2.0</a></li>
      <li class="breadcrumb-item active">Browser-Based Apps</li>
    </ol>
  </nav>

  <h2>OAuth 2.0 for Browser-Based Apps</h2>

  <div class="spec-meta">
    <a href="https://www.ietf.org/archive/id/draft-ietf-oauth-browser-based-apps-21.txt" class="rfc-badge">Active Draft</a>
    <span class="spec-status spec-status--draft">Draft</span>
    <a href="https://tools.ietf.org/html/draft-ietf-oauth-browser-based-apps" class="rfc">tools.ietf.org/html/draft-ietf-oauth-browser-based-apps</a>
  </div>

  <p class="spec-lede">This document describes security requirements and best practices for OAuth 2.0 in SPAs and other browser-based apps — applications where all code runs in the browser and there is no secure backend to hold secrets.</p>

  <div class="spec-when">
    <strong>When to use this</strong>
    Follow this guidance when building any application that runs entirely in a web browser — React, Vue, Angular, or plain JavaScript SPAs. The key recommendations: always use Authorization Code + PKCE, never use the Implicit flow, and consider a Backend-for-Frontend (BFF) pattern to keep tokens out of the browser entirely.
  </div>

  <p>Browser-based apps are public clients — they cannot store a client secret. Code, tokens, and storage are all visible to any JavaScript running on the page, including third-party scripts. The recommended approach is Authorization Code + PKCE with tokens stored in memory only (not <code>localStorage</code>), or better: a BFF that holds tokens server-side and communicates with the browser via <code>HttpOnly</code> cookies.</p>

  <h3>More resources</h3>
  <ul>
    <li><a href="https://www.oauth.com/oauth2-servers/single-page-apps/">Single-Page Apps</a> (oauth.com)</li>
    <li><a href="https://aaronparecki.com/oauth-2-simplified/#single-page-apps">Single-Page Apps</a> (aaronparecki.com)</li>
    <li><a href="https://medium.com/@torsten_lodderstedt/why-you-should-stop-using-the-oauth-implicit-grant-2436ced1c926">Why you should stop using the OAuth implicit grant</a> (Torsten Lodderstedt)</li>
  </ul>

</div>
<?php require('../../../includes/_footer.php'); ?>
