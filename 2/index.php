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
			<p>Questions, suggestions and protocol changes should be discussed on the <a href="https://www.ietf.org/mailman/listinfo/oauth">mailing list</a>.</p>
			<h3>Reading the spec</h3>
			<p>The final version of the spec can be found at <a href="http://tools.ietf.org/html/rfc6749">http://tools.ietf.org/html/rfc6749</a>.</p>
			<h3>Implementations</h3>
			<h4>Server Libraries</h4>
			<ul>
				<li>Java</a>
				  <ul>
				    <li><a href="http://incubator.apache.org/amber/download.html">Apache Amber (draft 22)</a>
				    <li><a href="http://static.springsource.org/spring-security/oauth/">Spring Security for OAuth</a>
                                    <li><a href="https://github.com/OpenConextApps/apis">Apis Authorization Server (v2-31)</a>
                                    <li><a href="http://www.restlet.org/">Restlet Framework (draft 30)</a>
                                    <li><a href="http://cxf.apache.org/">Apache CXF</a>
			          </ul>
				</li>
				<li>PHP
				  <ul>
				    <li><a href="https://github.com/lncd/OAuth2">PHP OAuth 2.0 Auth and Resource Server</a> and <a href="https://github.com/lncd/oauth2-example-auth-server">Demo</a></li>
				    <li><a href="https://github.com/bshaffer/oauth2-server-php">PHP OAuth2 Server</a> and <a href="https://github.com/bshaffer/oauth2-server-demo">Demo</a></li>
				    <li><a href="https://github.com/fkooman/php-oauth">PHP OAuth 2.0</a> (AS with SAML/BrowserID AuthN, with management REST API, see <a href="https://frko.surfnetlabs.nl/workshop/">DEMO</a>)</li>
				  </ul>
				</li>
				<li><a href="https://github.com/nov/rack-oauth2">Ruby OAuth2 Server (draft 18)</a></li>
				<li><a href="http://www.dotnetopenauth.net/">.NET DotNetOpenAuth</a></li>
			</ul>
			<h4>Client Libraries</h4>
			<ul>
				<li><a href="http://www.phpclasses.org/package/7700-PHP-Authorize-and-access-APIs-using-OAuth.html">PHP</a></li>
				<li><a href="https://github.com/fkooman/php-oauth-client">PHP OAuth 2.0 client</a></li>
				<li><a href="http://github.com/leebyron/cocoa-oauth2">Cocoa</a></li>
				<li><a href="http://github.com/lukeredpath/LROAuth2Client">iPhone and iPad</a></li>
				<li><a href="http://github.com/nxtbgthng/OAuth2Client">iOS and Mac OS X (draft 10)</a></li>
				<li>Java</a>
				  <ul>
				    <li><a href="http://incubator.apache.org/amber/download.html">Apache Amber (draft 22)</a>
				    <li><a href="http://www.springsource.org/spring-social">Spring Social</a>
				    <li><a href="http://static.springsource.org/spring-security/oauth/">Spring Security for OAuth</a>
                                    <li><a href="http://www.restlet.org/">Restlet Framework (draft 30)</a>
			    </ul>
				</li>
                <li>Python
                    <ul>
                        <li><a href="http://github.com/demianbrecht/sanction">sanction</a></li>
                        <li><a href="http://github.com/litl/rauth">rauth</a></li>
                    </ul>
                </li>
				<li><a href="http://github.com/intridea/oauth2">Ruby Gem</a></li>
				<li><a href="http://github.com/aflatter/oauth2-ruby">Ruby</a></li>
				<li><a href="http://github.com/andreassolberg/jso">Javascript</a></li>
				<li>.NET
					<ul>
						<li><a href="http://www.dotnetopenauth.net/">DotNetOpenAuth</a></li>
						<li><a href="http://www.springframework.net/social/">Spring Social for .NET</a></li>
					</ul>
				</li>
			</ul>
			<h4>Services that support OAuth 2</h4>
			<ul>
				<li><a href="http://groups.google.com/group/37signals-api/browse_thread/thread/86b0da52134c1b7e">37signals (draft 5)</a></li>
				<li><a href="http://developers.box.com/oauth/">Box</a></li>
				<li><a href="http://www.campaignmonitor.com/api/getting-started/#authenticating_with_oauth">Campaign Monitor</a></li>
				<li><a href="http://developers.facebook.com/docs/authentication/">Facebook's Graph API</a> (see <a href="http://www.sociallipstick.com/?p=239">sociallipstick.com/?p=239</a>)</li>
				<li><a href="https://developer.foursquare.com/overview/auth">Foursquare</a></li>
				<li><a href="https://developers.geoloqi.com">Geoloqi</a></li>
				<li><a href="http://developer.github.com/v3/oauth/">GitHub</a></li>
				<li><a href="https://developers.google.com/accounts/docs/OAuth2">Google</a></li>
				<li><a href="http://www.meetup.com/meetup_api/auth/#oauth2">Meetup</a></li>
        <li><a href="http://www.salesforce.com/us/developer/docs/api_rest/Content/quickstart_oauth.htm">Salesforce</a></li>
        <li><a href="http://www.sharefile.com/">Citrix ShareFile</a></li>
				<li><a href="http://developers.soundcloud.com/docs/api/reference">SoundCloud</a></li>
				<li><a href="https://do.com">Do.com (draft 22)</a></li>
				<li><a href="http://msdn.microsoft.com/en-us/library/live/hh243647.aspx">Windows Live</a></li>
			</ul>

		<?php include('../includes/_edit_banner.php'); ?>

    </div>
<?php require('../includes/_footer.php'); ?>
