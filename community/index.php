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

			<p>Please visit the <a href="http://wiki.oauth.net">community wiki</a> for information on <a href="http://wiki.oauth.net/TestCases ">test cases</a>, <a href="http://wiki.oauth.net/ContributingToOAuth">contributing</a> and more.</p>

			<h3 id="mailing-lists">Mailing Lists</h3>
			
			<p>The <a href="http://groups.google.com/group/oauth/">OAuth Core Mailing List</a> is where you can ask questions, get help, and get to know the rest of the OAuth community.</p>
			
			<p>Membership on the list is currently <strong>open</strong> and you can <a href="http://groups.google.com/group/oauth/subscribe">subscribe</a>. The <a href="http://groups.google.com/group/oauth/topics?hl=en">archives</a> are also open and are available for review.</p>
			
			<p><a href="http://wiki.oauth.net/MailingLists">Additional OAuth Mailing Lists</a> can be found on the wiki (for example, language-specific lists).</p>
			
			<p>There is also an <a href="https://www.ietf.org/mailman/listinfo/oauth">OAuth mailing list</a> setup for work related to <span class="caps">IETF</span> standardization.</p>

			<?php include('../includes/_edit_banner.php'); ?>

    </div>
<?php require('../includes/_footer.php'); ?>
