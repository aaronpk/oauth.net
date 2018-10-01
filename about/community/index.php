<?php

$page_title = "Community &mdash; OAuth";
$page_section = "community";
$page_secondary = "";
$page_meta_description = "";

require('../../includes/_header.php');
?>

  <div class="container">

    <nav>
      <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="/about/credits/">Credits</a></li>
        <li class="breadcrumb-item"><a href="/about/introduction/">Introduction</a></li>
        <li class="breadcrumb-item"><a href="/about/design-goals/">Design Goals</a></li>
        <li class="breadcrumb-item active">Community</li>
      </ul>
    </nav>

    <div>
      <h2>Community</h2>

      <p>The OAuth community is dedicated to improving the spec and library codebase, spreading awareness of the protocol and documenting and showing, through screencasts, wireframes, mockups and other illustrative designs, how to best put OAuth to use.</p>

      <p>The <a href="https://www.ietf.org/mailman/listinfo/oauth">IETF OAuth mailing list</a> is for work related to <span class="caps">IETF</span> standardization.</p>

      <p>
        <form action="http://www.google.com/search" method="get">
          <div class="form-group">
            <label for="1">Search the Archives:</label>
            <input type="text" class="form-control search-query" name="q" placeholder="Search ietf.org/oauth">
          </div>
          <input type="submit" value="Search" class="btn btn-light" />
          <input type="hidden" name="as_sitesearch" value="http://www.ietf.org/mail-archive/web/oauth/">
          <input type="hidden" name="tbs" value="sbd:1,cdr:1,cd_min:1/1/1999">
        </form>
      </p>

      <a id="mailing-lists"></a>
      <h3 id="support">Support</h3>

      <p>You can <a href="http://stackoverflow.com/search?q=oauth">search StackOverflow</a> for questions relating to provider-specific implementations of OAuth.</p>

    </div>

  </div>
<?php require('../../includes/_footer.php'); ?>
