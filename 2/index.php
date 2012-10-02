<?php

$page_title = "OAuth 2.0 &mdash; OAuth";
$page_section = "";
$page_secondary = "";
$page_meta_description = "Resources and information related to the OAuth 2.0 protocol.";

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
      	 
      </div>
    </div>

    <div id="main" class="column first last span-18 prepend-1 append-1">
      <h2>OAuth 2.0</h2>

			<p><img src="/images/oauth-2-sm.png" alt="OAuth 2.0 logo" style="float:right; margin: 0 0 8px 8px;" />OAuth 2.0 is the next evolution of the OAuth protocol which was originally created in late 2006. OAuth 2.0 focuses on client developer simplicity while providing specific authorization flows for web applications, desktop applications, mobile phones, and living room devices. This specification is being developed within the <a href="https://www.ietf.org/mailman/listinfo/oauth">IETF OAuth WG</a> and is based on the <a href="http://wiki.oauth.net/OAuth-WRAP">OAuth WRAP</a> proposal.</p>
			<p>hueniverse.com's <a href="http://hueniverse.com/2010/05/introducing-oauth-2-0/" title="Introducing OAuth 2.0 &laquo;  hueniverse">Introduction to OAuth 2.0</a> provides a great deal of background and information about the design decisions in OAuth 2.0.
			<p>Questions, suggestions and protocol changes should be discussed on the <a href="https://www.ietf.org/mailman/listinfo/oauth">mailing list</a>.</p>
			<h3>Reading the spec</h3>
			<p>The latest version of the spec can be found at <a href="http://tools.ietf.org/html/draft-ietf-oauth-v2">http://tools.ietf.org/html/draft-ietf-oauth-v2</a>.</p>
			<h3>Implementations</h3>
			<h4>Server Libraries</h4>
			<ul>
				<li>Java</a>
				  <ul>
				    <li><a href="http://incubator.apache.org/amber/download.html">Apache Amber (draft 22)</a>
				    <li><a href="http://static.springsource.org/spring-security/oauth/">Spring Security for OAuth</a>
                                    <li><a href="https://github.com/OpenConextApps/apis">Apis Authorization Server (v2-31)</a>
			    </ul>
				</li>
				<li><a href="https://github.com/quizlet/oauth2-php">PHP OAuth 2 Server (draft 20)</a></li>
				<li><a href="https://github.com/nov/rack-oauth2">Ruby OAuth2 Server (draft 18)</a></li>
			</ul>
			<h4>Client Libraries</h4>
			<ul>
				<li><a href="http://www.phpclasses.org/package/7700-PHP-Authorize-and-access-APIs-using-OAuth.html">PHP</a></li>
				<li><a href="http://github.com/leebyron/cocoa-oauth2">Cocoa</a></li>
				<li><a href="http://github.com/lukeredpath/LROAuth2Client">iPhone and iPad</a></li>
				<li><a href="http://github.com/nxtbgthng/OAuth2Client">iOS and Mac OS X (draft 10)</a></li>
				<li>Java</a>
				  <ul>
				    <li><a href="http://incubator.apache.org/amber/download.html">Apache Amber (draft 22)</a>
				    <li><a href="http://www.springsource.org/spring-social">Spring Social</a>
				    <li><a href="http://static.springsource.org/spring-security/oauth/">Spring Security for OAuth</a>
			    </ul>
				</li>
				<li><a href="http://github.com/litl/rauth">Python</a></li>
				<li><a href="http://github.com/intridea/oauth2">Ruby Gem</a></li>
				<li><a href="http://github.com/aflatter/oauth2-ruby">Ruby</a></li>
			</ul>
			<h4>Services that support OAuth 2</h4>
			<ul>
				<li><a href="http://groups.google.com/group/37signals-api/browse_thread/thread/86b0da52134c1b7e">37signals (draft 5)</a></li>
				<li><a href="http://developers.facebook.com/docs/authentication/">Facebook's Graph API</a> (see <a href="http://www.sociallipstick.com/?p=239">sociallipstick.com/?p=239</a>)</li>
				<li><a href="https://developer.foursquare.com/overview/auth">Foursquare</a></li>
				<li><a href="https://developers.geoloqi.com">Geoloqi</a></li>
				<li><a href="http://developer.github.com/v3/oauth/">GitHub</a></li>
				<li><a href="https://developers.google.com/accounts/docs/OAuth2">Google</a></li>
				<li><a href="http://www.meetup.com/meetup_api/auth/#oauth2">Meetup</a></li>
				<li><a href="http://www.salesforce.com/us/developer/docs/api_rest/Content/quickstart_oauth.htm">Salesforce</a></li>
				<li><a href="https://do.com">Do.com (draft 22)</a></li>
				<li><a href="http://msdn.microsoft.com/en-us/library/live/hh243647.aspx">Windows Live</a></li>
			</ul>

		<?php include('../includes/_edit_banner.php'); ?>

    </div>
<?php require('../includes/_footer.php'); ?>
