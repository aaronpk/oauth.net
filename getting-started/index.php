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
      
      <h3><a href="https://aaronparecki.com/2012/07/29/2/oauth2-simplified">OAuth 2.0 Simplified</a></h3>
      <p><i>OAuth 2.0 Simplified</i>, written by <a href="https://aaronparecki.com">Aaron Parecki</a>, is a guide to OAuth 2.0 focused on writing clients that gives a clear overview of the spec at an introductory level.</p>
      <ul>
        <li><a href="https://aaronparecki.com/2012/07/29/2/oauth2-simplified#roles">Roles</a>: Applications, APIs and Users</li>
        <li><a href="https://aaronparecki.com/2012/07/29/2/oauth2-simplified#creating-an-app">Creating an App</a></li>
        <li><a href="https://aaronparecki.com/2012/07/29/2/oauth2-simplified#authorization">Authorization</a>: Obtaining an access token
          <ul>
            <li><a href="https://aaronparecki.com/2012/07/29/2/oauth2-simplified#web-server-apps">Web Server Apps</a></li>
            <li><a href="https://aaronparecki.com/2012/07/29/2/oauth2-simplified#browser-based-apps">Browser-Based Apps</a></li>
            <li><a href="https://aaronparecki.com/2012/07/29/2/oauth2-simplified#mobile-apps">Mobile Apps</a></li>
            <li><a href="https://aaronparecki.com/2012/07/29/2/oauth2-simplified#others">Others</a></li>
          </ul>
        </li>
        <li><a href="https://aaronparecki.com/2012/07/29/2/oauth2-simplified#making-authenticated-requests">Making Authenticated Requests</a></li>
        <li><a href="https://aaronparecki.com/2012/07/29/2/oauth2-simplified#differences">Differences from OAuth 1.0</a>
          <ul>
            <li><a href="https://aaronparecki.com/2012/07/29/2/oauth2-simplified#authentication-and-signatures">Authentication and Signatures</a></li>
            <li><a href="https://aaronparecki.com/2012/07/29/2/oauth2-simplified#user-experience-and-alternative-authorization-flows">User Experience and Alternative Authorization Flows</a></li>
            <li><a href="https://aaronparecki.com/2012/07/29/2/oauth2-simplified#performance-at-scale">Performance at Scale</a></li>
          </ul>
        </li>
        <li><a href="https://aaronparecki.com/2012/07/29/2/oauth2-simplified#resources">Resources</a></li>
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
        <li><a href="https://oauth.com/oauth2-servers/additional-resources/">Differences Between OAuth 1 and 2</a></li>
      </ul>

<!-- 
      <ul>
        <li><a href="https://oauth.com/oauth2-servers/background/">Background</a></li>
        <li><a href="https://oauth.com/oauth2-servers/definitions/">Definitions</a></li>
        <li><a href="https://oauth.com/oauth2-servers/oauth2-clients/">OAuth 2.0 Clients</a>
            <ul>
              <li><a href="https://oauth.com/oauth2-servers/oauth2-clients/server-side-apps/">Server-Side Apps</a></li>
              <li><a href="https://oauth.com/oauth2-servers/oauth2-clients/browser-based-apps/">Browser-Based Apps</a></li>
              <li><a href="https://oauth.com/oauth2-servers/oauth2-clients/mobile-and-native-apps/">Mobile and Native Apps</a></li>
              <li><a href="https://oauth.com/oauth2-servers/oauth2-clients/making-authenticated-requests/">Making Authenticated Requests</a></li>
            </ul>
        </li>
        <li><a href="https://oauth.com/oauth2-servers/client-registration/">Client Registration</a>
            <ul>
              <li><a href="https://oauth.com/oauth2-servers/client-registration/registering-new-application/">Registering a New Application</a></li>
              <li><a href="https://oauth.com/oauth2-servers/client-registration/client-id-secret/">The Client ID and Secret</a></li>
            </ul>
        </li>
        <li><a href="https://oauth.com/oauth2-servers/authorization/">Authorization</a>
            <ul>
              <li><a href="https://oauth.com/oauth2-servers/authorization/the-authorization-request/">The Authorization Request</a></li>
              <li><a href="https://oauth.com/oauth2-servers/authorization/requiring-user-login/">Requiring User Login</a></li>
              <li><a href="https://oauth.com/oauth2-servers/authorization/the-authorization-interface/">The Authorization Interface</a></li>
              <li><a href="https://oauth.com/oauth2-servers/authorization/the-authorization-response/">The Authorization Response</a></li>
              <li><a href="https://oauth.com/oauth2-servers/authorization/security-considerations/">Security Considerations</a></li>
            </ul>
        </li>
        <li><a href="https://oauth.com/oauth2-servers/scope/">Scope</a>
            <ul>
              <li><a href="https://oauth.com/oauth2-servers/scope/defining-scopes/">Defining Scopes</a></li>
              <li><a href="https://oauth.com/oauth2-servers/scope/user-interface/">User Interface</a></li>
              <li><a href="https://oauth.com/oauth2-servers/scope/checkboxes-bitches/">"Checkboxes, Bitches"</a></li>
            </ul>
        </li>
        <li><a href="https://oauth.com/oauth2-servers/redirect-uris/">Redirect URIs</a>
            <ul>
              <li><a href="https://oauth.com/oauth2-servers/redirect-uris/redirect-uri-registration/">Redirect URI Registration</a></li>
              <li><a href="https://oauth.com/oauth2-servers/redirect-uris/redirect-uris-native-apps/">Redirect URIs for Native Apps</a></li>
              <li><a href="https://oauth.com/oauth2-servers/redirect-uris/redirect-uri-validation/">Redirect URI Validation</a></li>
              <li><a href="https://oauth.com/oauth2-servers/redirect-uris/invalid-redirect-uri/">Invalid Redirect URI</a></li>
            </ul>
        </li>
        <li><a href="https://oauth.com/oauth2-servers/access-tokens/">Access Tokens</a>
            <ul>
              <li><a href="https://oauth.com/oauth2-servers/access-tokens/authorization-code-request/">Authorization Code Request</a></li>
              <li><a href="https://oauth.com/oauth2-servers/access-tokens/password-grant/">Password Grant</a></li>
              <li><a href="https://oauth.com/oauth2-servers/access-tokens/client-credentials/">Client Credentials</a></li>
              <li><a href="https://oauth.com/oauth2-servers/access-tokens/access-token-response/">Access Token Response</a></li>
              <li><a href="https://oauth.com/oauth2-servers/access-tokens/self-encoded-access-tokens/">Self-Encoded Access Tokens</a></li>
              <li><a href="https://oauth.com/oauth2-servers/access-tokens/access-token-lifetime/">Access Token Lifetime</a></li>
              <li><a href="https://oauth.com/oauth2-servers/access-tokens/refreshing-access-tokens/">Refreshing Access Tokens</a></li>
            </ul>
        </li>
        <li><a href="https://oauth.com/oauth2-servers/listing-authorizations/">Listing Authorizations</a>
            <ul>
              <li><a href="https://oauth.com/oauth2-servers/listing-authorizations/revoking-access/">Revoking Access</a></li>
            </ul>
        </li>
        <li>
          <a href="https://oauth.com/oauth2-servers/token-introspection-endpoint/">Token Introspection Endpoint</a>
        </li>
        <li><a href="https://oauth.com/oauth2-servers/the-resource-server/">The Resource Server</a>
            <ul>
              <li><a href="https://oauth.com/oauth2-servers/the-resource-server/verifying-scope/">Verifying Scope</a></li>
            </ul>
        </li>
        <li><a href="https://oauth.com/oauth2-servers/creating-documentation/">Creating Documentation</a></li>
        <li><a href="https://oauth.com/oauth2-servers/dynamic-client-registration/">Dynamic Client Registration</a></li>
        <li><a href="https://oauth.com/oauth2-servers/additional-resources/">Differences Between OAuth 1 and 2</a>
            <ul>
              <li><a href="https://oauth.com/oauth2-servers/additional-resources/authentication-and-signatures/">Authentication and Signatures</a></li>
              <li><a href="https://oauth.com/oauth2-servers/additional-resources/user-experience-alternative-token-issuance-options/">User Experience and Alternative Token Issuance Options</a></li>
              <li><a href="https://oauth.com/oauth2-servers/additional-resources/performance-at-scale/">Performance at Scale</a></li>
              <li><a href="https://oauth.com/oauth2-servers/additional-resources/bearer-tokens/">Bearer Tokens</a></li>
              <li><a href="https://oauth.com/oauth2-servers/additional-resources/short-lived-tokens-long-lived-authorizations/">Short-lived tokens with Long-lived authorizations</a></li>
              <li><a href="https://oauth.com/oauth2-servers/additional-resources/separation-of-roles/">Separation of Roles</a></li>
            </ul>
        </li>
      </ul>
 -->
      <h3>Code and Libraries</h3>

      <p>There are many <a href="/code/#client-libraries">client</a> and <a href="/code/#server-libraries">server</a> libraries in multiple languages to get you started quickly.</p>

      <h3>Books</h3>

      <p>You can find some excellent <a href="/books/">books</a> on OAuth 2.0.</p>

    </div>
    
  </div>

<?php require('../includes/_footer.php'); ?>