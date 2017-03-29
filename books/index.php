<?php

$page_title = "Books &mdash; OAuth";
$page_section = "books";
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
      <h2>Books</h2>
    
      <div class="book-row">
        <div class="left">
          <a href="https://www.manning.com/books/oauth-2-in-action" class="noprintexpand"><img src="oauth_in_action.jpg" alt="OAuth in Action Cover" title="OAuth in Action"></a>
        </div>
        <div class="right">
          <p><a href="https://www.manning.com/books/oauth-2-in-action"><i>OAuth 2 in Action</i></a> by Justin Richer and Antonio Sanso covers the OAuth 2 protocol in depth, providing hands-on exercises for building clients, authorization servers, and protected resources in various configurations. The book covers the structure and components of an OAuth 2 system, common vunlerabilities and mitigations, and several protocols that are built on and around OAuth 2. Exercises are included that walk through building an entire OAuth 2.0 ecosystem.</p>        
          <p>This book is currently available from <a href="https://www.manning.com/books/oauth-2-in-action">the publisher</a>, <a href="https://www.amazon.com/OAuth-2-Action-Justin-Richer/dp/161729327X/">Amazon</a>, and wherever technical books are sold.</p>
        </div>
      </div>
	
      <div>
        <?php require('../includes/_carbon.php'); ?>
      </div>
      <div style="clear:both; margin-bottom: 1em;"></div>

      <div class="book-row">
        <div class="left">
          <a href="https://www.packtpub.com/application-development/mastering-oauth-2/?utm_source=GC-oauth.net&utm_medium=pod&utm_campaign=1784395407" class="noprintexpand"><img src="mastering_oauth_2.jpg" alt="Mastering Oauth 2.0 Cover" title="Mastering OAuth 2.0"></a>
        </div>
        <div class="right">
          <p><a href="https://www.packtpub.com/application-development/mastering-oauth-2/?utm_source=GC-oauth.net&utm_medium=pod&utm_campaign=1784395407"><i>Mastering OAuth 2.0</i></a> by Charles Bihis provides an in-depth view of the OAuth 2.0 protocol from a client perspective.  With a focus on practicality and security, this book explores the various ways in which a client can integrate with an OAuth 2.0 service provider, discussing caveats and best practices along the way.<p>
          <p>This book focuses on the client integration side of the OAuth 2.0 protocol and is ideal for client and application developers looking to integrate with OAuth 2.0 service providers in the most secure and effective way.</p>
        </div>
      </div>
    </div>
  </div>
  
<?php require('../includes/_footer.php'); ?>
