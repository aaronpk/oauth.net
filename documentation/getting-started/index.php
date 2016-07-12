<?php

$page_title = "Getting Started &mdash; OAuth";
$page_section = "documentation";
$page_secondary = "getting-started";
$page_meta_description = "";

require('../../includes/_header.php');
?>

<body class="<?php echo $page_section; ?>">
  <div class="container">
    <div id="header" class="column first last span-20">
      <h1 id="site-name" class="column first span-5 prepend-1 append-1"><a href="/">OAuth</a></h1>
      <div id="primary" class="column span-13 last">

<?php require('../../includes/_nav_primary.php'); ?>

      </div>
      <div id="secondary" class="column span-18 append-1 prepend-1 first last">
        <ul class="navigation">
          <li><a href="/documentation/spec">Spec</a></li>
          <li><a href="/documentation/faq">FAQ</a></li>
          <li><a class="selected" href="/documentation/getting-started">Getting Started</a></li>
        </ul>
      </div>
    </div>

    <div id="main" class="column first last span-18 prepend-1 append-1">
      <h2>Getting Started</h2>
			
			<p><a href="http://aaronparecki.com">Aaron Parecki</a> published a guide to OAuth 2.0 a guide which covers many of the topics needed to understand and implement the protocol and is available in multiple parts.</p>
			
			<p><h3><em><a href="https://aaronparecki.com/2012/07/29/2/oauth2-simplified">OAuth 2.0 Simplified</a></em> includes:</h3></p>
      			
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
    </div>
    
    <?php include('../../includes/_edit_banner.php'); ?>

<?php require('../../includes/_footer.php'); ?>