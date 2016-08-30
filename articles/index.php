<?php

$page_title = "Articles &mdash; OAuth";
$page_section = "articles";
$page_secondary = "";
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
      <h2>Articles</h2>
      <?php require('../includes/_carbon.php'); ?>

			<p>The OAuth community is dedicated to helping provide information on the proper use of the OAuth protocols through a series of articles on different topics.</p>

      <h3>End User Authentication with OAuth 2.0</h3>

  	  <p>While OAuth is not an authentication protocol on its own, there are a number of high-profile authentication protocols built with OAuth 2.0. This article seeks to expose common pitfalls and demonstrate <a href="/articles/authentication">how to do end user authentication using OAuth 2.0</a> in a secure and reliable manner.</p>
	  
      <h3>OAuth 2 Simplified</h3>

      <p><i><a href="https://aaronparecki.com/2012/07/29/2/oauth2-simplified">OAuth 2 Simplified</a></i> by <a href="https://aaronparecki.com">Aaron Parecki</a> describes OAuth 2 in a simplified format to help developers and service providers implement the protocol.</p>
      

      <h3>OAuth 2.0 Servers</h3>

      <p><i><a href="https://www.oauth.com">OAuth 2.0 Servers</a></i>, written by <a href="https://aaronparecki.com">Aaron Parecki</a> and published by <a href="https://okta.com">Okta</a>, is a guide to building an OAuth 2.0 server, including many details that are not part of the spec.</p>

    </div>
  </div>

<?php require('../includes/_footer.php'); ?>
