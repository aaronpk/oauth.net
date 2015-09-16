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
	  
	  <a href="https://www.manning.com/books/oauth-2-in-action"><img src="oauth_in_action.jpg" alt="OAuth in Action Cover" title="OAuth in Action" style="float:left;"></a>
			<p><a href="https://www.manning.com/books/oauth-2-in-action"><i>OAuth 2 in Action</i></a> by Justin Richer and Antonio Sanso covers the OAuth 2 protocol in depth, providing hands-on exercises for building clients, authorization servers, and protected resources in various configurations. The book covers the structure and components of an OAuth 2 system as well as several protocols that are built on and around OAuth 2.</p>
			
			<p>This book is currently available for <a href="https://www.manning.com/books/oauth-2-in-action">early-access pre-order from the publisher</a>. Pre-ordering the book gives you access to portions of the book in electronic format as it's being completed by the authors. You'll also be able to provide feadback during the production process.</p>
    </div>

<?php require('../includes/_footer.php'); ?>