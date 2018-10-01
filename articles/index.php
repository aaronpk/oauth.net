<?php

$page_title = "Articles &mdash; OAuth";
$page_section = "articles";
$page_secondary = "";
$page_meta_description = "";

require('../includes/_header.php');
?>

  <div class="container">
    <div>
      <h2>Articles</h2>

			<p>The OAuth community is dedicated to helping provide information on the proper use of the OAuth protocols through a series of articles on different topics.</p>

      <div class="article card h-entry">
        <h4 class="p-name"><a href="https://developer.okta.com/blog/2018/05/24/what-is-the-oauth2-implicit-grant-type" class="u-url">What is the OAuth 2.0 Implicit Grant Type?</a></h4>
        <div class="meta">
          <a href="https://aaronparecki.com" class="u-author h-card">Aaron Parecki</a> ・ <time class="dt-published" datetime="2018-05-24">May 24, 2018</time>
        </div>
        <div class="tags">
          #implicit #grant-types
        </div>
        <p class="e-summary"><i><a href="https://developer.okta.com/blog/2018/05/24/what-is-the-oauth2-implicit-grant-type">What is the OAuth 2.0 Implicit Grant Type?</a></i> describes the implicit flow and its most common use cases.</p>
      </div>


      <div class="article card h-entry">
        <h4 class="p-name"><a href="https://developer.okta.com/blog/2018/04/10/oauth-authorization-code-grant-type" class="u-url">What is the OAuth 2.0 Authorization Code Grant Type?</a></h4>
        <div class="meta">
          <a href="https://aaronparecki.com" class="u-author h-card">Aaron Parecki</a> ・ <time class="dt-published" datetime="2018-04-10">April 10, 2018</time>
        </div>
        <div class="tags">
          #authorization-code #grant-types
        </div>
        <p class="e-summary"><i><a href="https://developer.okta.com/blog/2018/04/10/oauth-authorization-code-grant-type">What is the OAuth 2.0 Authorization Code Grant Type?</a></i> describes the authorization code flow and its most common use cases.</p>
      </div>

      <div class="article card h-entry">
        <h4 class="p-name"><a href="https://aaronparecki.com/oauth-2-simplified/" class="u-url">OAuth 2 Simplified</a></h4>
        <div class="meta">
          <a href="https://aaronparecki.com" class="u-author h-card">Aaron Parecki</a>
        </div>
        <div class="tags">
          #oauth #guide
        </div>
        <p class="e-summary"><i><a href="https://aaronparecki.com/oauth-2-simplified/">OAuth 2 Simplified</a></i> describes OAuth 2.0 in a simplified format to help developers and service providers implement the protocol. An expanded version of this article is also available <a href="https://oauth2simplified.com/">as a book</a>.</p>
      </div>

      <div class="article card h-entry">
        <h4 class="p-name"><a href="https://alexbilbie.com/guide-to-oauth-2-grants/" class="u-url">A Guide to OAuth 2.0 Grants</a></h4>
        <div class="meta">
          <a href="https://alexbilbie.com/" class="u-author h-card">Alex Bilbie</a>
        </div>
        <div class="tags">
          #grant-types #guide
        </div>
        <p class="e-summary"><i><a href="https://alexbilbie.com/guide-to-oauth-2-grants/">A Guide to OAuth 2.0 Grants</a></i> describes each of the OAuth grants and use cases for each.</p>
      </div>

      <div class="article card h-entry">
        <h4 class="p-name"><a href="/articles/authentication" class="u-url">End User Authentication with OAuth 2.0</a></h4>
        <div class="meta">
          <a href="https://twitter.com/justin__richer" class="u-author h-card">Justin Richer</a>
        </div>
        <div class="tags">
          #authentication
        </div>
        <p class="e-summary">While OAuth is not an authentication protocol on its own, there are a number of high-profile authentication protocols built with OAuth 2.0. This article seeks to expose common pitfalls and demonstrate <a href="/articles/authentication">how to do end user authentication using OAuth 2.0</a> in a secure and reliable manner.</p>
      </div>

    </div>
  </div>

<?php require('../includes/_footer.php'); ?>
