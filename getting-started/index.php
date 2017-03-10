<?php

$page_title = "Getting Started &mdash; OAuth";
$page_section = "documentation";
$page_secondary = "getting-started";
$page_meta_description = "";

require('../includes/_header.php');
?>

  <div class="container">
    <div id="header" class="column first last span-20">
      <?php require('../includes/_site_name.php'); ?>
      <div id="primary" class="column span-13 last">
        <?php require('../includes/_nav_primary.php'); ?>
      </div>
      <div id="secondary" class="column span-18 append-1 prepend-1 first last">
      </div>
    </div>

    <div id="main" class="column first last span-18 prepend-1 append-1">
      <h2>Getting Started</h2>
      
      <?php require('../includes/_carbon.php'); ?>

      <p>Below are some guides to OAuth 2.0 which cover many of the topics needed to understand and implement clients and servers.</p>
      
      <h3><a href="https://aaronparecki.com/oauth-2-simplified/">OAuth 2.0 Simplified</a></h3>
      <p><i>OAuth 2.0 Simplified</i>, written by <a href="https://aaronparecki.com">Aaron Parecki</a>, is a guide to OAuth 2.0 focused on writing clients that gives a clear overview of the spec at an introductory level.</p>
      <ul>
        <li><a href="https://aaronparecki.com/oauth-2-simplified/#roles">Roles</a>: Applications, APIs and Users</li>
        <li><a href="https://aaronparecki.com/oauth-2-simplified/#creating-an-app">Creating an App</a></li>
        <li><a href="https://aaronparecki.com/oauth-2-simplified/#authorization">Authorization</a>: Obtaining an access token
          <ul>
            <li><a href="https://aaronparecki.com/oauth-2-simplified/#web-server-apps">Web Server Apps</a></li>
            <li><a href="https://aaronparecki.com/2012/07/29/2/oauth2-simplified#single-page-apps">Single-Page Apps</a></li>
            <li><a href="https://aaronparecki.com/oauth-2-simplified/#mobile-apps">Mobile Apps</a></li>
            <li><a href="https://aaronparecki.com/oauth-2-simplified/#others">Others</a></li>
          </ul>
        </li>
        <li><a href="https://aaronparecki.com/oauth-2-simplified/#making-authenticated-requests">Making Authenticated Requests</a></li>
        <li><a href="https://aaronparecki.com/oauth-2-simplified/#differences">Differences from OAuth 1.0</a>
          <ul>
            <li><a href="https://aaronparecki.com/oauth-2-simplified/#authentication-and-signatures">Authentication and Signatures</a></li>
            <li><a href="https://aaronparecki.com/oauth-2-simplified/#user-experience-and-alternative-authorization-flows">User Experience and Alternative Authorization Flows</a></li>
            <li><a href="https://aaronparecki.com/oauth-2-simplified/#performance-at-scale">Performance at Scale</a></li>
          </ul>
        </li>
        <li><a href="https://aaronparecki.com/oauth-2-simplified/#resources">Resources</a></li>
      </ul>

      <h3><a href="https://oauth.com">OAuth 2.0 Servers</a></h3>
      <p><i>OAuth 2.0 Servers</i>, written by <a href="https://aaronparecki.com">Aaron Parecki</a> and published by <a href="https://okta.com">Okta</a>, is a guide to building an OAuth 2.0 server, including many details that are not part of the spec. The chapter outline is below.</p>
      <ul>
        <li><a href="https://oauth.com/oauth2-servers/background/">Background</a></li>
        <li><a href="https://oauth.com/oauth2-servers/definitions/">Definitions</a></li>
        <li><a href="https://oauth.com/oauth2-servers/oauth2-clients/">OAuth 2.0 Clients</a></li>
        <li><a href="https://oauth.com/oauth2-servers/client-registration/">Client Registration</a></li>
        <li><a href="https://oauth.com/oauth2-servers/authorization/">Authorization</a></li>
        <li><a href="https://oauth.com/oauth2-servers/scope/">Scope</a></li>
        <li><a href="https://oauth.com/oauth2-servers/redirect-uris/">Redirect URIs</a></li>
        <li><a href="https://oauth.com/oauth2-servers/access-tokens/">Access Tokens</a></li>
        <li><a href="https://oauth.com/oauth2-servers/listing-authorizations/">Listing Authorizations</a></li>
        <li><a href="https://oauth.com/oauth2-servers/token-introspection-endpoint/">Token Introspection Endpoint</a></li>
        <li><a href="https://oauth.com/oauth2-servers/the-resource-server/">The Resource Server</a></li>
        <li><a href="https://oauth.com/oauth2-servers/creating-documentation/">Creating Documentation</a></li>
        <li><a href="https://oauth.com/oauth2-servers/differences-between-oauth-1-2/">Differences Between OAuth 1 and 2</a></li>
      </ul>

      <h3>Code and Libraries</h3>

      <p>There are many <a href="/code/#client-libraries">client</a> and <a href="/code/#server-libraries">server</a> libraries in multiple languages to get you started quickly.</p>

      <h3>Books</h3>

      <p>You can find some excellent <a href="/books/">books</a> on OAuth 2.0.</p>

      <h3>Consulting</h3>

      <p>Find an <a href="/consulting/">OAuth consultant</a> to help your organization.</p>

    </div>
    
  </div>

<?php require('../includes/_footer.php'); ?>
