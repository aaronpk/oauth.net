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

      <!--
      <h3><a href="https://oauth.com">OAuth 2.0 Servers</a></h3>
      <ul>
        <li><a href=""></a></li>
        <li><a href=""></a>
            <ul>
              <li><a href=""></a></li>
              <li><a href=""></a></li>
              <li><a href=""></a></li>
            </ul>
        </li>
        <li><a href=""></a>
            <ul>
              <li><a href=""></a></li>
              <li><a href=""></a></li>
              <li><a href=""></a></li>
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