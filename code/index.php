<?php

$page_title = "Code &mdash; OAuth";
$page_section = "code";
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

    <h2>Code</h2>

    <?php require('../includes/_carbon.php'); ?>

    <p>Below is a collection of libraries and services that support OAuth 2.0. If you would like to make any changes to this page, you can <a href="https://github.com/aaronpk/oauth.net/blob/master/code/index.php">edit this page</a>.</p>

    <h3 id="server-libraries">Server Libraries</h3>
    <ul>
      <li>Java
        <ul>
          <li><a href="https://github.com/mitreid-connect/OpenID-Connect-Java-Spring-Server">MitreID (with OpenID Connect)</a></li>
          <li><a href="http://oltu.apache.org/">Apache Oltu</a></li>
          <li><a href="https://projects.spring.io/spring-security-oauth/">Spring Security OAuth</a></li>
          <li><a href="https://github.com/OpenConextApps/apis">Apis Authorization Server (v2-31)</a></li>
          <li><a href="http://www.restlet.org/">Restlet Framework (draft 30)</a></li>
          <li><a href="http://cxf.apache.org/">Apache CXF</a></li>
          <li><a href="https://github.com/zalando/tokens">Tokens</a>: Java library for conveniently verifying and storing OAuth 2.0 service access tokens.</li>
          <li><a href="https://github.com/networknt/light-oauth2">Light OAuth2 - The fastest, lightest and cloud native OAuth 2.0 microservices</a></li>
        </ul>
      </li>
      <li>PHP
        <ul>
          <li><a href="https://github.com/bshaffer/oauth2-server-php">PHP OAuth2 Server</a> and <a href="https://github.com/bshaffer/oauth2-demo-php">Demo</a></li>
          <li><a href="https://github.com/thephpleague/oauth2-server">PHP OAuth 2.0 Auth and Resource Server</a> and <a href="https://github.com/lncd/oauth2-example-auth-server">Demo</a></li>
          <li><a href="https://github.com/fkooman/php-oauth">PHP OAuth 2.0</a> (AS with SAML/BrowserID AuthN, with management REST API)</li>
          <li><a href="https://github.com/authbucket/oauth2">PHP OAuth2.0</a> for <a href="http://silex.sensiolabs.org/">Silex</a> and <a href="http://oauth2.authbucket.com/demo">Demo</a></li>
          <li><a href="https://github.com/authbucket/oauth2-bundle">PHP OAuth2.0</a> for <a href="http://symfony.com/">Symfony</a> and <a href="http://oauth2-bundle.authbucket.com/demo">Demo</a></li>
          <li><a href="https://github.com/drahak/OAuth2">Nette OAuth2 provider</a> for <a href="https://nette.org">Nette framework</a> and <a href="https://github.com/drahak/Restful">Nette REST API bundle</a></li>
        </ul>
      </li>
      <li>Python
        <ul>
          <li><a href="https://github.com/TransparentHealth/hhs_oauth_server">HHS OAuth2 Server (Healthcare Focused)</a></li>
          <li><a href="https://github.com/NateFerrero/oauth2lib"> Python OAuth 2.0 Client + Server Library</a></li>
          <li><a href="http://python-social-auth-docs.readthedocs.io/en/latest/"> Python Social Auth</a> is an OAuth and OAuth2 client for a multitude of services.</li>
          <li><a href="https://github.com/evonove/django-oauth-toolkit">Django OAuth Toolkit (DOT)</a> is an OAuth2 Provider for Django built upon <a href="https://github.com/idan/oauthlib">oauthlib</a></li>
          <li><a href="https://github.com/evonove/django-oauth-toolkit">HHS OAuth2 Server</a> a health-centric Django project based on <a href="https://github.com/evonove/django-oauth-toolkit">DOT</a></li>
          <li><a href="https://github.com/lepture/flask-oauthlib">Flask-OAuthlib</a> is an OAuth2 Client/Provider for Flask built upon <a href="https://github.com/idan/oauthlib">oauthlib</a></li>
        </ul>
      </li>
      <li>NodeJS
        <ul>
          <li><a href="https://github.com/t1msh/node-oauth20-provider">NodeJS OAuth 2.0 Provider</a></li>
          <li><a href="https://github.com/mozilla/?query=fxa">Mozilla Firefox Accounts</a>. A full stack Identity Provider system developed to support Firefox Marketplace and other services</li>
          <li><a href="https://github.com/jaredhanson/oauth2orize">OAuth2orize: toolkit to implement OAuth2 Authorization Servers</a></li>
        </ul>
      </li>
      <li>Ruby
        <ul>
          <li><a href="https://github.com/nov/rack-oauth2">Rack::OAuth2 - OAuth 2.0 Server & Client Library in Ruby.</a></li>
        </ul>
      </li>
      <li>.NET
        <ul>
          <li><a href="http://www.dotnetopenauth.net/">.NET DotNetOpenAuth</a></li>
          <li><a href="https://oauthserver.codeplex.com/">OAuthServer</a> a simple OAuth server 2.0 developed in C# to provide OAuth authentication for Active Directory Users.</li>
          <li><a href="https://github.com/thinktecture/Thinktecture.IdentityServer.v3">Thinktecture IdentityServer</a></li>
        </ul>
      </li>
      <li>Erlang
        <ul>
          <li><a href="https://github.com/kivra/oauth2">Erlang OAuth 2 Server framework</a></li>
        </ul>
      </li>
      <li>Go
        <ul>
          <li><a href="https://github.com/ory/fosite">Fosite</a>: Extensible security first OAuth 2.0 and OpenID Connect SDK for Go.</li>
          <li><a href="https://github.com/RangelReale/osin">osin</a>: Golang OAuth2 server library </li>
          <li><a href="https://github.com/go-oauth2/oauth2">Golang OAuth 2 Server framework</a></li>
          <li><a href="https://github.com/zalando/gin-oauth2">gin-oauth2</a>: middleware for Gin Framework users who also want to use OAuth2</li>
        </ul>
      </li>
      <li>C
        <ul>
          <li><a href="https://github.com/babelouest/glewlwyd">Glewlwyd</a> a lightweight OAuth2 server providing <a href="https://jwt.io/">JSON Web Tokens</a> and supports authentication with database or LDAP backend for users and clients.</li>
        </ul>
      </li>
    </ul>

    <h3 id="client-libraries">Client Libraries</h3>
    <ul>
      <li>PHP
        <ul>
          <li><a href="https://github.com/thephpleague/oauth2-client">league/oauth2-client</a>: OAuth 2.0 Client from <a href="https://thephpleague.com/">the League of Extraordinary Packages</a></li>
          <li><a href="http://www.phpclasses.org/package/7700-PHP-Authorize-and-access-APIs-using-OAuth.html">oauth-api</a> from <a href="http://www.phpclasses.org/">PHP Classes</a></li>
          <li><a href="https://github.com/fkooman/php-oauth-client">PHP OAuth 2.0 Authorization Code Grant Client</a></li>
          <li><a href="https://github.com/ivan-novakov/php-openid-connect-client">OAuth2/OpenID Connect Client Library for PHP/Zend Framework 2</a></li>
        </ul>
      </li>
      <li>Objective C
        <ul>
          <li><a href="http://github.com/leebyron/cocoa-oauth2">Cocoa</a></li>
          <li><a href="http://github.com/lukeredpath/LROAuth2Client">iPhone and iPad</a></li>
          <li><a href="http://github.com/nxtbgthng/OAuth2Client">iOS and Mac OS X (draft 10)</a></li>
          <li><a href="https://github.com/sprhawk/ytoolkit">YToolkit</a></li>
        </ul>
      </li>
      <li>Swift
        <ul>
          <li><a href="https://github.com/dongri/OAuthSwift">OAuthSwift</a></li>
          <li><a href="https://github.com/p2/OAuth2">p2 OAuth2</a></li>
        </ul>
      </li>
      <li>Java
        <ul>
          <li><a href="http://oltu.apache.org/">Apache Oltu</a></li>
          <li><a href="https://projects.spring.io/spring-social/">Spring Social</a></li>
          <li><a href="https://projects.spring.io/spring-security-oauth/">Spring Security OAuth</a></li>
          <li><a href="http://www.restlet.org/">Restlet Framework (draft 30)</a></li>
          <li><a href="https://github.com/scribejava/scribejava">ScribeJava</a></li>
          <li><a href="https://github.com/dmfs/oauth2-essentials">oauth2-essentials</a></li>
          <li><a href="https://github.com/networknt/light-java/tree/master/client">Light Java Client</a></li>
        </ul>
      </li>
      <li>Scala
        <ul>
          <li><a href="http://silhouette.mohiva.com/">Silhouette</a></li>
        </ul>
      </li>
      <li>Python
        <ul>
          <li><a href="http://github.com/demianbrecht/sanction">sanction</a></li>
          <li><a href="http://github.com/litl/rauth">rauth</a></li>
          <li><a href="http://peterhudec.github.io/authomatic/">Authomatic</a></li>
          <li><a href="https://github.com/lepture/flask-oauthlib">Flask-OAuthlib</a> is an OAuth2 Client/Provider for Flask built upon <a href="https://github.com/idan/oauthlib">oauthlib</a></li>
        </ul>
      </li>
      <li>Ruby
        <ul>
          <li><a href="http://github.com/intridea/oauth2">Ruby Gem</a></li>
          <li><a href="http://github.com/aflatter/oauth2-ruby">Ruby</a></li>
          <li><a href="https://github.com/nov/rack-oauth2">Rack::OAuth2 - OAuth 2.0 Server & Client Library in Ruby.</a></li>
        </ul>
      </li>
      <li>Javascript
        <ul>
          <li><a href="http://github.com/andreassolberg/jso">Javascript</a></li>
          <li><a href="https://github.com/zalando/oauth2-client-js">OAuth2-client-js</a></li>
        </ul>
      </li>
      <li>Node.js
        <ul>
          <li><a href="https://github.com/simov/grant">Grant</a></li>
          <li><a href="http://passportjs.org/">PassportJS</a></li>
          <li><a href="https://github.com/zalando/oauth2-client-js">OAuth2-client-js</a></li>
        </ul>
      </li>
      <li>Perl
          <ul>
              <li><a href="https://github.com/Humanstate/mojolicious-plugin-oauth2-server">Perl OAuth2 Server on Mojolicious</a></li>
          </ul>
      </li>
      <li>.NET
        <ul>
          <li><a href="http://www.nuget.org/packages/Microsoft.Owin.Security.OAuth">OWIN Middleware</a></li>
          <li><a href="http://www.dotnetopenauth.net/">DotNetOpenAuth</a></li>
          <li><a href="http://samondotnet.blogspot.com.au/2012/12/introduction-to-dotnetauth.html">DotNetAuth</a></li>
          <li><a href="http://www.springframework.net/social/">Spring Social for .NET</a></li>
        </ul>
      </li>
      <li>Qt/C++
        <ul>
          <li><a href="https://github.com/pipacs/o2">O2 (supports OAuth 1.0a and 2.0)</a></li>
          <li><a href="https://wiki.qt.io/New_Features_in_Qt_5.8">Qt Network Authentication (since 5.8, supports OAuth 1 and 2)</a></li>
        </ul>
      </li>
      <li>Lua/Corona SDK
        <ul>
          <li><a href="http://selz.co/1kxjJVl">Corona/Lua OAuth 2.0 API</a></li>
        </ul>
      </li>
      <li>Dart
        <ul>
          <li><a href="https://pub.dartlang.org/packages/oauth2">Dart OAuth 2.0 Client</a></li>
        </ul>
      </li>
      <li>Go
        <ul>
          <li><a href="http://godoc.org/golang.org/x/oauth2">Go OAuth 2.0 Client</a></li>
        </ul>
      </li>
      <li>ActionScript
        <ul>
          <li><a href="http://charlesbihis.github.io/actionscript-oauth2/">ActionScript OAuth 2</a></li>
        </ul>
      </li>
      <li>PowerShell
        <ul>
          <li><a href="https://github.com/GlobalSign/OAuth-2.0-client-examples/blob/master/PowerShell/Powershell-example.ps1">PowerShell client</a></li>
        </ul>
      </li>
    </ul>

    <h3 id="proxy-services">Proxy services</h3>
    <ul>
       <li><a href="https://github.com/ory/hydra">Hydra</a> an open source OAuth2 and OpenID Connect server for new and existing infrastructures</li>
      <li><a href="https://github.com/oauth-io">OAuth.io</a> (self hosted), and also you can use as <a href="https://oauth.io/">an external service</a></li>
      <li><a href="https://github.com/ssqsignon">SSQ signon</a> (self hosted), and also you can use as <a href="https://ssqsignon.com/">an external service</a></li>
      <li><a href="https://auth0.com">Auth0</a>: Authorization Server as a service (or self hosted)</li>
    </ul>


    <h3 id="services-that-support-oauth-2">Services that support OAuth 2</h3>
    <ul>
      <li><a href="http://groups.google.com/group/37signals-api/browse_thread/thread/86b0da52134c1b7e">37signals (draft 5)</a></li>
      <li><a href="https://auth0.com">Auth0</a></li>
      <li><a href="https://www.bookingsync.com">BookingSync</a></li>
      <li><a href="http://developers.box.com/oauth/">Box</a></li>
      <li><a href="http://beeminder.com/api">Beeminder</a></li>
      <li><a href="http://www.campaignmonitor.com/api/getting-started/#authenticating_with_oauth">Campaign Monitor</a></li>
      <li><a href="https://clever.com/">Clever</a></li>
      <li><a href="https://www.dropbox.com/developers/core/docs#oa2-authorize">Dropbox</a></li>
      <li><a href="http://developers.facebook.com/docs/authentication/">Facebook's Graph API</a></li>
      <li><a href="https://developer.foursquare.com/overview/auth">Foursquare</a></li>
      <li><a href="http://developer.github.com/v3/oauth/">GitHub</a></li>
      <li><a href="https://developers.google.com/accounts/docs/OAuth2">Google</a></li>
      <li><a href="https://dev.strato.com/hidrive">HiDrive</a></li>
      <li><a href="http://www.meetup.com/meetup_api/auth/#oauth2">Meetup</a></li>
      <li><a href="http://nationbuilder.com/api_quickstart">NationBuilder</a></li>
      <li><a href="http://www.salesforce.com/us/developer/docs/api_rest/Content/quickstart_oauth.htm">Salesforce</a></li>
      <li><a href="http://www.sharefile.com/">Citrix ShareFile</a></li>
      <li><a href="https://api.slack.com/docs/oauth">Slack</a></li>
      <li><a href="http://developers.soundcloud.com/docs/api/reference">SoundCloud</a></li>
      <li><a href="https://do.com">Do.com (draft 22)</a></li>
      <li><a href="http://msdn.microsoft.com/en-us/library/live/hh243647.aspx">Windows Live</a></li>
      <li><a href="http://www.timecockpit.com/blog/2014/10/31/Welcome-OAuth2-and-OpenID-Connect">time cockpit</a></li>
      <li><a href="https://github.com/zalando-techmonkeys/baboon-proxy">Zalando's baboon-proxy</a></li>
    </ul>

    <h3 id="oauth-1">Legacy OAuth 1.0 Support</h3>
    <ul>
      <li>See <a href="/1/">OAuth 1.0</a></li>
    </ul>

  </div>
</div>
<?php require('../includes/_footer.php'); ?>
