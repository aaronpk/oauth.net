<?php
$page_section = "home";
$page_title = "OAuth Community Site";

require('./includes/_header.php');
?>
<body class="home">
  <div class="container">
    <div id="header" class="column first last span-20">
      <h1 id="site-name" class="column first span-5 prepend-1 append-1"><a href="/">OAuth</a></h1>
      <div id="primary" class="column span-13 last">
        
<?php require('./includes/_nav_primary.php'); ?>

      </div>
      
      <div id="site-description" class="column span-18 append-1 prepend-1 first last">
        <h3>An <strong>open protocol</strong> to allow <strong>secure authorization </strong> in a <strong>simple</strong> and <strong>standard</strong> method from web, mobile and desktop applications.</h3>
        <p id="read-more">
          <a href="http://tools.ietf.org/html/rfc6749">Read the OAuth 2 specification &raquo;</a>
        </p>
      </div>
    </div>

    <div class="column first last span-20" style="text-align: center; font-size: 16pt; line-height: 18pt; width: 660px; margin: 20px auto; float: none;">
The OAuth 2.0 authorization framework enables a third-party
   application to obtain limited access to an HTTP service.
    </div>

    <div id="main" class="column first last span-20">

			<div id="client-side" class="column span-9 append-1 first">
        <p class="intro">
          For Consumer developers...
        </p>
        <p>
          If you're building...
        </p>
        <ul>
          <li>web applications</li>
          <li>desktop applications</li>
          <li>mobile applications</li>
          <li>Javascript or browser-based apps</li>
          <li>webpage widgets</li>
        </ul>
        <p>
          OAuth is a simple way to publish and interact with protected data. It's also a safer and more secure way for people to give you access. We've kept it simple to save you time.
        </p>          
      </div>

      <div id="server-side" class="column span-9 last">
        <p class="intro">
          For Service Provider developers...
        </p>
        <p>
          If you're supporting...
        </p>
        <ul>
          <li>web applications</li>
          <li>mobile applications</li>
          <li>server-side APIs</li>
          <li>mashups</li>
        </ul>
        <p>
          If you're storing protected data on your users' behalf, they shouldn't be spreading their passwords around the web to get access to it. Use OAuth to give your users access to their data while protecting their account credentials.
        </p>
      </div>
			
			<div class="clear" />
			
      <div class="get-started column span-20 first last">
        <a href="documentation/getting-started">Get started...</a>
      </div>

  		<div class="note column span-20 first last">
  			Learn more about the emerging <a href="/2/">OAuth 2.0 framework</a>.
  		</div>

			<div class="clear" />

    </div>
<?php require('./includes/_footer.php'); ?>
