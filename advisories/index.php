<?php

$page_title = "Security Advisories &mdash; OAuth";
$page_section = "advisories";
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
      <h2>Security Advisories</h2>
      <p>The OAuth community is committed to identifying and addressing any security issues raised relating to the OAuth protocol and extensions. Any identified threat will be published on this page as soon as it is safe to do so. Due to the nature of many security threats, they cannot be disclosed before sufficient notice is given to vulnerable parties.</p>

      <p>The following are known security threats and the protocol version they affect:</p>

      <h3>OAuth 2.0</h3>
      <ul>
        <li><a href="/advisories/2014-1-covert-redirect/">2014.1 Covert Redirect </a></li>
      </ul>

      <h3>OAuth Core 1.0</h3>
      <ul>
        <li><a href="/advisories/2009-1/">2009.1 Session Fixation Attack</a></li>
      </ul>

      <h3>How to Report Security Threats</h3>
      <p>Please report any concerns to the <a href="https://www.ietf.org/mailman/listinfo/oauth">OAuth mailing list</a>. Please <span class="caps">DO NOT</span> discuss unknown security threats in public as they are likely to be used by attacker before a solution can be applied.</p>
    </div>

    <?php include('../includes/_edit_banner.php'); ?>
  </div>

<?php require('../includes/_footer.php'); ?>
