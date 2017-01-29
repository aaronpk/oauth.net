<?php

$page_title = "Credits &mdash; OAuth";
$page_section = "about";
$page_secondary = "credits";
$page_meta_description = "";

require('../../includes/_header.php');
?>
  <div class="container">
    <div id="header" class="column first last span-20">
      <?php require('../../includes/_site_name.php'); ?>
      <div id="primary" class="column span-13 last">
        <?php require('../../includes/_nav_primary.php'); ?>
      </div>
      <div id="secondary" class="column span-18 append-1 prepend-1 first last">
        <ul class="navigation">
          <li><a class="selected" href="/about/credits/">Credits</a></li>
          <li><a href="/about/introduction/">Introduction</a></li>
          <li><a href="/about/design-goals/">Design Goals</a></li>
          <li><a href="/about/community/">Community</a></li>
        </ul>
      </div>
    </div>

    <div id="main" class="column first last span-18 prepend-1 append-1">
      <h2>Credits</h2>

      <p>This website is maintained by <a href="https://aaronparecki.com/">Aaron Parecki</a>, and was designed by <a href="http://factoryjoe.com">Chris Messina</a>.</p>
      <p>
        Many other people have contributed to the website by adding links to libraries and other resources. See <a href="https://github.com/aaronpk/oauth.net/network/members">more contributors on GitHub</a>.
      </p>
			<?php require('../../includes/_edit_banner.php'); ?>
    </div>
  </div>

<?php require('../../includes/_footer.php'); ?>