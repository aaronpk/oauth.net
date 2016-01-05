<?php

$page_title = "Books &mdash; OAuth";
$page_section = "books";
$page_secondary = "";
$page_meta_description = "";

require('../includes/_header.php');
?>

<body class="<?php echo $page_section; ?>">
  <div class="container">
    <div id="header" class="column first last span-20">
      <h1 id="site-name" class="column first span-5 prepend-1 append-1"><a href="/">OAuth</a></h1>
      <div id="primary" class="column span-13 last">

<?php require('../includes/_nav_primary.php'); ?>

      </div>
      <div id="secondary" class="column span-18 append-1 prepend-1 first last">
        <ul class="navigation">
          <li><a class="selected" href="/books">Books</a></li>
        </ul>
      </div>
    </div>

    <div id="main" class="column first last span-18 prepend-1 append-1">
      <h2>Books</h2>
    
      <div>
        <a href="https://www.manning.com/books/oauth-2-in-action"><img src="oauth_in_action.jpg" alt="OAuth in Action Cover" title="OAuth in Action" style="float:left; max-width: 25%; margin: 10px; border: 1px #ccc solid;"></a>
        <p><a href="https://www.manning.com/books/oauth-2-in-action"><i>OAuth 2 in Action</i></a> by Justin Richer and Antonio Sanso covers the OAuth 2 protocol in depth, providing hands-on exercises for building clients, authorization servers, and protected resources in various configurations. The book covers the structure and components of an OAuth 2 system, common vunlerabilities and mitigations, and several protocols that are built on and around OAuth 2.</p>        
        <p>This book is currently available for <a href="https://www.manning.com/books/oauth-2-in-action">early-access pre-order from the publisher</a>. Pre-ordering the book gives you access to portions of the book in electronic format as it's being completed by the authors. You'll also be able to provide feedback during the production process.</p>
      </div>
	
      <div>
        <a href="https://www.packtpub.com/application-development/mastering-oauth-2/?utm_source=GC-oauth.net&utm_medium=pod&utm_campaign=1784395407"><img src="mastering_oauth_2.jpg" alt="Mastering Oauth 2.0 Cover" title="Mastering OAuth 2.0" style="float:left; max-width: 25%; margin: 10px; border: 1px #ccc solid;"></a>
        <p><a href="https://www.packtpub.com/application-development/mastering-oauth-2/?utm_source=GC-oauth.net&utm_medium=pod&utm_campaign=1784395407"><i>Mastering OAuth 2.0</i></a> by Charles Bihis provides an in-depth view of the OAuth 2.0 protocol from a client perspective.  With a focus on practicality and security, this book explores the various ways in which a client can integrate with an OAuth 2.0 service provider, discussing caveats and best practices along the way.  This book focuses on the client integration side of the OAuth 2.0 protocol, and is ideal for client and application developers looking to integrate with OAuth 2.0 service providers in the most secure and effective way.</p>
      </div>
    </div>

<?php require('../includes/_footer.php'); ?>
