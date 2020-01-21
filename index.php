<?php
$page_section = "home";
$page_title = "OAuth Community Site";

require('./includes/_header.php');
?>

<div class="container">
  <div id="header" class="column first last span-20">
    <div id="site-description" class="column span-18 append-1 prepend-1 first last">
      <h3>An <strong>open protocol</strong> to allow <strong>secure authorization </strong> in a <strong>simple</strong> and <strong>standard</strong> method from web, mobile and desktop applications.</h3>
      <p id="read-more">
        <a href="/2/">Learn more about OAuth 2.0 &raquo;</a>
      </p>
    </div>
  </div>
  
  <div style="margin-top: 10px;">
    <iframe width="100%" height="400" src="https://www.youtube.com/embed/KT8ybowdyr0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>

  <div class="column first last span-20" style="clear: both; text-align: center; margin: 20px auto; float: none; max-width: 300px;">
    <div style="padding: 20px 0; display: flex; flex-direction: row;">
      <?php if(file_exists(__DIR__.'/.supporter.php')) { include(__DIR__.'/.supporter.php'); } ?>
    </div>
  </div>

  <div class="row">

    <div id="client-side" class="col-md-6">
      <h5>For app developers...</h5>
      <p>
        If you're building...
      </p>
      <ul>
        <li>web applications</li>
        <li>desktop applications</li>
        <li>mobile applications</li>
        <li>JavaScript or browser-based apps</li>
      </ul>
      <p>
        OAuth is a way to get access to protected data from an application. It's safer and more secure than asking users to log in with passwords.
      </p>
    </div>

    <div id="server-side" class="col-md-6">
      <h5>For API developers...</h5>
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
        Use OAuth to let application developers securely get access to your users' data without sharing their passwords.
      </p>
    </div>

    <div class="clear"></div>

    <a href="/getting-started/">Get started...</a>

    <div class="clear"></div>

  </div>
</div>

<?php require('./includes/_footer.php'); ?>
