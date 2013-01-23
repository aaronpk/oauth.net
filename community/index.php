<?php

$page_title = "Community &mdash; OAuth";
$page_section = "community";
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
      	&nbsp;
      </div>
    </div>

    <div id="main" class="column first last span-18 prepend-1 append-1">
      <h2>Community</h2>

			<p>The OAuth community is dedicated improving the spec and library codebase, spreading awareness of the protocol and documenting and showing, through screencasts, wireframes, mockups and other illustrative designs, how best to put OAuth into use.</p>

			<h3 id="mailing-lists">Mailing Lists</h3>
			
			<p>The <a href="http://groups.google.com/group/oauth/">OAuth Google Group</a> is where you can ask questions, get help, and get to know the rest of the OAuth community. You can <a href="http://groups.google.com/group/oauth/subscribe">subscribe</a> and <a href="http://groups.google.com/group/oauth/topics?hl=en">view the archives</a>.</p>
			
			<p>The <a href="https://www.ietf.org/mailman/listinfo/oauth">IETF OAuth mailing list</a> is for work related to <span class="caps">IETF</span> standardization.</p>

      <p>
        <form action="http://www.google.com/search" method="get">
          Search the Archives: <input type="text" class="search-query" name="q" placeholder="Search ietf.org/oauth">
          <input type="submit" value="Search" />
          <input type="hidden" name="as_sitesearch" value="http://www.ietf.org/mail-archive/web/oauth/">
          <input type="hidden" name="tbs" value="sbd:1,cdr:1,cd_min:1/1/1999">
        </form>
      </p>

			<?php include('../includes/_edit_banner.php'); ?>

    </div>
<?php require('../includes/_footer.php'); ?>
