<?php

$page_title = "Community &mdash; OAuth";
$page_section = "community";
$page_secondary = "";
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
          <li><a href="/about/credits/">Credits</a></li>
          <li><a href="/about/introduction/">Introduction</a></li>
          <li><a href="/about/design-goals/">Design Goals</a></li>
          <li><a class="selected" href="/about/community/">Community</a></li>
        </ul>
      </div>
    </div>

    <div id="main" class="column first last span-18 prepend-1 append-1">
      <h2>Community</h2>

      <?php require('../../includes/_carbon.php'); ?>
      
      <p>The OAuth community is dedicated to improving the spec and library codebase, spreading awareness of the protocol and documenting and showing, through screencasts, wireframes, mockups and other illustrative designs, how to best put OAuth to use.</p>

      <p>The <a href="https://www.ietf.org/mailman/listinfo/oauth">IETF OAuth mailing list</a> is for work related to <span class="caps">IETF</span> standardization.</p>

      <p>
        <form action="http://www.google.com/search" method="get">
          Search the Archives: <input type="text" class="search-query" name="q" placeholder="Search ietf.org/oauth">
          <input type="submit" value="Search" />
          <input type="hidden" name="as_sitesearch" value="http://www.ietf.org/mail-archive/web/oauth/">
          <input type="hidden" name="tbs" value="sbd:1,cdr:1,cd_min:1/1/1999">
        </form>
      </p>

      <a id="mailing-lists"></a>
      <h3 id="support">Support</h3>
      
      <p>You can <a href="http://stackoverflow.com/search?q=oauth">search StackOverflow</a> for questions relating to provider-specific implementations of OAuth.</p>
      
    </div>

    <?php include('../../includes/_edit_banner.php'); ?>
  </div>
<?php require('../../includes/_footer.php'); ?>
