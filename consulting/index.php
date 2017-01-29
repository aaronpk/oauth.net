<?php

$page_title = "OAuth Consulting";
$page_section = "consulting";
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
      <h2>OAuth Consulting</h2>
    
      
      <h3><a href="https://aaronparecki.com/oauth/">Aaron Parecki</a></h3>

      <div style="display: flex; flex-direction: row;">
        <img src="aaronpk.jpg" style="width: 120px; height: 120px; border-radius: 60px; flex: 0 0;">
        <div style="flex: 1 0; margin-left: 10px;">
          <p><a href="https://aaronparecki.com/oauth/">Aaron Parecki</a> is available to provide OAuth training and consultation for you and your team. A typical consultation will involve a half-day or full-day session, starting with an introduction to OAuth 2.0 tailored to your needs, followed by spending time addressing the specific questions of your team relating to your product.</p>
          <p>Email <a href="mailto:aaron@parecki.com?subject=OAuth Consulting">aaron@parecki.com</a> for availability.</p>
        </div>
      </div>


      <h3><a href="https://glyndelabs.com/">Glynde Labs</a></h3>

      <div style="display: flex; flex-direction: row;">
        <div style="background-color:#2D70DF; padding: 1em; flex: 1 0;">
          <img src="glynde-labs.svg" width="100%" style="margin: 0;">
        </div>
        <div style="flex: 2 0; margin-left: 10px;">
          <a href="https://glyndelabs.com/">Glynde Labs</a> is a software design and development consultancy based in the United Kingdom that offers evidence-driven software development and devops consultancy.
        </div>
      </div>

    </div>
  </div>
  
<?php require('../includes/_footer.php'); ?>
