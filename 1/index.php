<?php

$page_title = "OAuth 1 &mdash; OAuth";
$page_section = "";
$page_secondary = "";
$page_meta_description = "Resources and information related to the obsolete OAuth 1 protocol.";

require('../includes/_header.php');
?>
  <div class="container">
    <div>

      <h2>OAuth 1 RFCs</h2>

      <ul>
        <li><a href="http://tools.ietf.org/html/rfc5849">RFC 5849: The OAuth 1.0 Protocol</a> - the final version of the OAuth 1.0 specification.</li>
        <li><a href="/core/1.0">OAuth Core 1.0</a> was released December 4, 2007.</li>
        <li><a href="/core/1.0a">OAuth Core 1.0 Revision A</a> was released June 24, 2009.</li>
      </ul>


      <h2>OAuth 1 Libraries</h2>

      <p>Below is a collection of OAuth 1 libraries. If you would like to make any changes to this page, you can <a href="https://github.com/aaronpk/oauth.net/blob/master/1/index.php">edit this page</a>.</p>


      <h3>C</h3>

      <p><a href="http://liboauth.sourceforge.net/">liboauth</a> a collection of POSIX-c functions implementing the OAuth Core <a href="http://tools.ietf.org/html/rfc5849">RFC 5849</a> standard.</p>

      <h3>DotNET</h3>

      <p><a href="http://dotnetopenauth.net/">DotNetOpenAuth</a> a consumer and service provider implementation for OAuth 1.0 and 1.0a for .NET, written in C#.  It has built-in support for <span class="caps">HMAC</span>-SHA1, <span class="caps">RSA</span>-SHA1, and <span class="caps">PLAINTEXT</span> signature methods with extensibility to add others. It also includes the OpenID+OAuth extension. It works for <span class="caps">ASP</span>.NET as well as non-ASP.NET services, and works in partial trust shared hosting environments. Contributed by <a href="http://blog.nerdbank.net/">Andrew Arnott</a>.</p>

      <p><a href="http://www.madgex.com/">Madgex</a> has <a href="http://siliconbea.ch/technology/dot-net/2008-09-05/bringing-oauth-to-dot-net-developers/">released</a> an open source <a href="http://code.google.com/p/oauth-dot-net/">OAuth library for .NET</a> (released under the <a href="http://www.opensource.org/licenses/mit-license.php"><span class="caps">MIT</span> License</a>). <a href="http://lab.madgex.com/oauth-net/gettingatarted01.aspx/">Documentation</a> and <a href="http://lab.madgex.com/oauth-net/">demos</a> are available.</p>

      <p><a href="http://samondotnet.blogspot.com.au/2012/12/introduction-to-dotnetauth.html">DotNetAuth</a> is a consumer only implementation for both OAuth 1.0a and OAuth 2.0. This library is designed with extensibility in mind. So you developers can easily customize it to add support for any OAuth provider, even if the provider is not strictly following the OAuth rules and guidelines.</p>

      <h4>C#</h4>

      <p><a href="http://eran.sandler.co.il">Eran Sandler</a> has contributed a <a href="http://oauth.googlecode.com/svn/code/csharp/">basic C# class</a> that performs signing.</p>

      <p>Alex Henderson offers <a href="http://code.google.com/p/devdefined-tools/wiki/OAuth">DevDefined OAuth</a>, an OAuth library developed in C#, providing both consumer and provider implementations for OAuth 1.0 and 1.0a which includes support for the Error Reporting Extensions and allows for RSA-SHA1, HMAC-SHA1 and Plaintext signing. DevDefined OAuth is designed to be both test friendly and extensible, allowing the core to be repurposed to your specific projects needs, and is available under an MIT License. Extensions to the framework to support ASP.Net MVC can also be found on <a href="http://github.com/buildmaster/oauth-mvc.net" title="buildmaster's oauth-mvc.net at master - GitHub">this fork</a>.</p>

      <h4>VB.NET</h4>

      <p><a href="http://www.nicolastarzia.com">Nicolas Tarzia</a> has translated Eran Sandler&#8217;s C# library into <a href="http://oauth.googlecode.com/svn/code/vbnet/oAuth.vb">VB.NET</a>.</p>

      <h3>ColdFusion</h3>

      <p>Harry Klein has contributed a <a href="http://oauth.googlecode.com/svn/code/coldfusion">ColdFusion library</a> which is also <a href="http://OAuth.riaforge.org/">listed</a> at <span class="caps">RIA</span> Forge.</p>

      <h3>Common Lisp</h3>

      <p>Leslie P. Polzer contributed cl-oauth, which is available on <a href="http://github.com/skypher/cl-oauth/tree/master">GitHub</a> and <a href="http://gitorious.org/cl-oauth">Gitorious</a>. It currently supports <span class="caps">HMAC</span>-SHA1 authentication and comes with some SP convenience functions. It&#8217;s not polished yet but comes with a basic test suite and all you need to set up both Consumers and Service Providers.</p>

      <h3>Go</h3>

      <p><a href="https://godoc.org/github.com/gomodule/oauth1/oauth">Go-Oauth</a> is an OAuth 1 client package.</p>

      <h3>Java</h3>

      <p>A <a href="http://oauth.googlecode.com/svn/code/java/core/">Java library</a> and <a href="http://oauth.googlecode.com/svn/code/java/example/">examples</a> were contributed by John Kristian, Praveen Alavilli and Dirk Balfanz.</p>

      <p><a href="http://spring-security-oauth.codehaus.org/">OAuth for Spring Security</a> is also available, contributed by Ryan Heaton.</p>

      <p><a href="http://code.google.com/p/oauth-signpost/">OAuth Signpost</a> offers simple OAuth message signing for Java and Apache HttpComponents (Google Android ready!). Contributed by Matthias Kaeppler.</p>

      <p><a href="https://github.com/scribejava/scribejava">ScribeJava</a> is a mature OAuth library for Java by <a href="http://github.com/fernandezpablo85" title="fernandezpablo85's Profile - GitHub">Pablo Fernandez</a> and <a href="https://github.com/kullfar" title="kullfar's Profile - GitHub">Stas Gromov</a> that is intended to work with all APIs. It has been <a href="http://developer.linkedin.com/message/4568" title="LinkedIn Developer Network: How To: LinkedIn OAuth with Java">featured in LinkedIn's developers forums</a>.

      <p><a href="https://github.com/kovacshuni/koauth">KOAauth</a> is a great library for both providers and consumers written by <a href="http://www.hunorkovacs.com">Hunor Kovács</a>. Originally it was intended for Scala but could be fully used in Java as well.</p>

      <h3>Javascript</h3>

      <p><a href="https://github.com/simov">Simeon Velichkov</a> has written a <a href="https://github.com/simov/grant">OAuth middleware for Express, Koa and Hapi</a>. 150+ supported providers for both OAuth and OAuth2 <a href="https://www.npmjs.com/package/grant">npm package</a>.</p>

      <p><a href="http://www.ddo.me">Ddo</a> has contributed a <a href="https://github.com/joeddo/oauth-1.0a">OAuth 1.0a Request Authorizer (Send OAuth request with your favorite HTTP client as request, jQuery.ajax...)</a></p>

      <p>John Kristian has contributed a <a href="http://oauth.googlecode.com/svn/code/javascript/">Javascript Library</a>.</p>

      <p><a href="http://github.com/bettiolo">Marco Bettiolo</a> from <a href="http://www.7digital.com/">7digital</a> has written a <a href="http://github.com/bettiolo/oauth-signature-js">Javascript OAuth Signature Generator</a>. Works in the browser and in NodeJs as a <a href="https://www.npmjs.org/package/oauth-signature">npm package</a>.</p>

      <h3>Jifty</h3>

      <p><a href="http://sartak.org">Shawn M Moore</a> has written an <a href="http://svn.jifty.org/index.cgi/jifty/browse/jifty/trunk/lib/Jifty/Plugin/OAuth">OAuth Plugin</a> for the <a href="http://jifty.org/">Jifty Framework</a>.</p>

      <h3>Objective-C</h3>

      <p><a href="http://www.kaboomerang.com">Jon Crosby</a> has <a href="http://www.kaboomerang.com/blog/2007/11/02/developer-release-oauth-for-mac-apps/">released</a> an OAuthConsumer and OAuthTestSuite for Objective-C for Mac developers. The <a href="http://oauth.googlecode.com/svn/code/obj-c/">OAuthConsumer framework</a> is available in the repository and Jon has also written up <a href="http://code.google.com/p/oauthconsumer/wiki/UsingOAuthConsumer">Using OAuthConsumer</a>, a complete guide to using the OAuthConsumer framework for Mac apps.</p>

      <p>Hongbo Yang released <a href="https://github.com/sprhawk/ytoolkit">YToolkit</a> with OAuth 1.0 and 2.0 support.</p>

      <p><a href="http://matrixpointer.com/karl">Karl Adam</a> released <a href="https://github.com/thekarladam/MPOAuth">MPOAuthConnection</a>, a drop in component for Mac and iPhone apps to talk to OAuth web services.</p>

      <h3>OCaml</h3>

      <p>Jake Donham from <a href="http://skydeck.com">SkyDeck</a> has released <a href="http://code.google.com/p/ooauth/">Ooauth</a>, an implementation of OAuth in OCaml. <a href="http://groups.google.com/group/ooauth-discuss">Discussion group</a>.</p>

      <h3>Perl</h3>

      <p><a href="http://nearlyfree.org/">Keith Grennan</a> has <a href="http://nearlyfree.org/oauth-perl">written</a> a <a href="http://oauth.googlecode.com/svn/code/perl/">Net::OAuth in Perl</a>.</p>

      <ul>
        <li><a href="http://search.cpan.org/~mramberg/">Marcus Ramberg</a> and <a href="http://www.bobtfish.net/">Tomas Doran</a> are working on an <a href="http://dev.catalystframework.org/repos/Catalyst/trunk/Catalyst-Controller-OAuth/">OAuth component</a> for the <a href="http://www.catalystframework.org/">Catalyst framework</a>.</li>
      </ul>

      <h3>PHP</h3>

      <ul>
        <li>There is an <a href="http://php.net/oauth">extension to <span class="caps">PHP</span></a> that supports OAuth. It was written by <a href="http://jawed.name/">John Jawed</a>. An example can be found <a href="http://svn.php.net/viewvc/pecl/oauth/trunk/examples/">here</a> and a <a href="http://toys.lerdorf.com/archives/50-Using-pecloauth-to-post-to-Twitter.html">walkthrough</a> is also available. This <a href="http://pecl.php.net/package/oauth">pecl package</a> is considered the de facto standard by Rasmus Lerdorf.</li>
        <li><a href="http://www.phpclasses.org/browse/author/1.html">Manuel Lemos</a> has written a pure <a href="http://www.phpclasses.org/package/7700-PHP-Authorize-and-access-APIs-using-OAuth.html">PHP OAuth client</a> that abstracts OAuth 1.0a and OAuth 2.0 in the same class. It provides built-in support to several popular OAuth servers, so you do not have to spend time configuring the respective end point URLs. It supports every other OAuth server through specific configuration variables, including some meant to workaround OAuth implementation glitches that some servers have. <a href="http://www.phpclasses.org/browse/file/42013.html">Documentation</a> and practical examples come with the class package.</li>
        <li><a href="http://term.ie">Andy Smith</a> has written a <a href="http://oauth.googlecode.com/svn/code/php/">basic <span class="caps">PHP</span> library</a> for OAuth.</li>
        <li>Cal Henderson has contributed a <a href="https://svn.iamcal.com/public/php/lib_oauth/lib_oauth.php">simple OAuth library</a> that primarily handles signing.</li>
        <li><a href="http://pear.php.net/package/HTTP_OAuth"><span class="caps">HTTP</span>_OAuth</a> is a <span class="caps">PEAR</span> package <a href="http://pear.php.net/pepr/pepr-proposal-show.php?id=607">developed by Jeff Hodsdon and Bill Shupp</a> (Digg). You can try it out using this <a href="http://jeffhodsdon.com/HTTP_OAuth/examples/index.php">tool</a>.</li>
        <li>There is an <a href="http://cakebaker.42dh.com/downloads/oauth-component-for-cakephp/">OAuth component for CakePHP</a>.</li>
        <li>Justin Richer has developed <a href="http://community.elgg.org/pg/plugins/jricher/read/385119/oauth">a plugin</a> for the <a href="http://elgg.org/">Elgg</a> social networking platform, based on the <a href="http://oauth.googlecode.com/svn/code/php/">basic PHP library</a>. This library allows Elgg to act as both an OAuth client (to access other services) and server (allowing OAuth-protected access to the Elgg API). The library supports both version 1.0 and revision 1.0a simultaneously. Documentation can be found <a href="http://docs.elgg.org/wiki/OAuth">on the Elgg wiki</a>.</li>
        <li><a href="http://framework.zend.com/wiki/pages/viewpage.action?pageId=37957">Zend_OAuth</a> was contributed by P&aacute;draic Brady. The source code can be found <a href="http://framework.zend.com/svn/framework/standard/incubator/library/Zend/Oauth/">here</a>.</li>
      </ul>

      <h3>Python</h3>

      <p><a href="https://github.com/maxcountryman">Max Countryman</a> maintains the <a href="https://github.com/litl/rauth">rauth</a>.
      It is considered the most up-to-date and unit-tested implementation of OAuth for Python.</p>
      <ul>
        <li><a href="https://github.com/oauthlib/oauthlib">OAuthlib</a> is a generic OAuth signing library; it is neither a client nor a server, but provides signing facilities for either.</li>
        <li><a href="http://leahculver.com/">Leah Culver</a> has written both a <a href="http://oauth.googlecode.com/svn/code/python/oauth/">library in Python 2.3</a> and offered an <a href="http://oauth.googlecode.com/svn/code/python/oauth/example/">example implementation</a>.</li>
        <li>David Larlet has released an <a href="http://code.larlet.fr/django-oauth-plus/">OAuth Provider and Consumer</a> for Django. </li>
        <li><a href="http://simonwillison.net">Simon Willison</a> <a href="http://simonwillison.net/2008/Mar/22/wikinear/">released</a> the <a href="http://www.djangosnippets.org/snippets/655/">snippet</a> that handles OAuth in Wikinear.</li>
        <li>Steve Marshall wrote a <a href="http://github.com/SteveMarshall/fire-eagle-python-binding/tree/master/fireeagle_api.py">comprehensive binding for Fire Eagle</a> that implements OAuth.</li>
        <li><a href="http://stu.mp/">Joe Stump</a> (SimpleGeo) maintains the <a href="http://github.com/simplegeo/python-oauth2">python-oauth2 library</a> on GitHub.</li>
        <li><a href="https://github.com/lepture/flask-oauthlib">Flask-OAuthlib</a> is an OAuth/OAuth2 Client/Provider for Flask built upon <a href="https://github.com/oauthlib/oauthlib">oauthlib</a></li>
        <li><a href="https://github.com/singingwolfboy/flask-dance">Flask-Dance</a> is another OAuth extension for Flask, built using <a href="http://flask.pocoo.org/docs/latest/blueprints/">blueprints</a>, <a href="http://docs.python-requests.org/en/latest/">requests</a>, and <a href="https://github.com/oauthlib/oauthlib">oauthlib</a>.</li>
        <li><a href="http://www.bango29.com/">Batista Harahap</a> is writing an OAuth 1.0 reverse proxy available at <a href="https://github.com/tistaharahap/oauth1-provider-redis-py">Github here</a>.</li>
        <li><a href="https://pypi.python.org/pypi/oauthlib">oauthlib</a> (sources on <a href="https://github.com/oauthlib/oauthlib">GitHub</a>) A generic, spec-compliant, thorough implementation of the OAuth request-signing logic maintained by community.</li>
        <li><a href="https://authlib.org/">Authlib</a> (sources on <a href="https://github.com/lepture/authlib">GitHub</a>) An ambitious authentication library for OAuth 1, OAuth 2, OpenID clients and servers.</li>
        <li><a href="http://www.tornadoweb.org/en/stable/">Tornado</a> has OAuth 1.0 and OAuth 2.0 Clients available as part of the core code in the <a href="http://www.tornadoweb.org/en/stable/auth.html">Tornado Auth package</a></li>
      </ul>

      <h3>Ruby</h3>

      <p><a href="http://romeda.org/">Blaine Cook</a>, <a href="http://stakeventures.com/">Pelle Braendgaard</a> and others have written a <a href="https://github.com/oauth-xx/oauth-ruby">library in Ruby</a>.</p>

      <h3>Scala</h3>

      <p>There is a great library for Scala named <a href="https://github.com/kovacshuni/koauth">koauth</a> written by <a href="http://www.hunorkovacs.com">Hunor Kovács</a>. It's both for consumer and provider.</p>

      <p>The Play framework provides a <a href="https://playframework.com/documentation/2.0/ScalaOAuth">Scala implementation</a> of OAuth 1</p>

      <h3>Scheme</h3>

      <p>Aleix Conchillo Flaque has contributed <a href="http://github.com/aconchillo/guile-oauth/">guile-oauth</a> an OAuth client module for Guile. It currently supports OAuth 1.0 and HMAC-SHA1 and PLAINTEXT authentication. It comes with a Twitter <a href="http://github.com/aconchillo/guile-oauth/blob/master/examples/oauth1/twitter.scm">example</a>.</p>

      <h3>Erlang</h3>

      <p>Tim Fletcher published a <a href="https://github.com/tim/erlang-oauth/">library</a></p>

      <h3>Swift</h3>

      <p>Dongri Jin released <a href="https://github.com/dongri/OAuthSwift">OAuthSwift</a> an OAuth client module with OAuth 1.0 and 2.0 support.</p>

      <h3>Others</h3>

      <p>Mark Atwood is working on <code>mod_auth_oauth</code>. <a href="http://casgroup.biz/">Michael Mealling</a> is working on support for <a href="http://ca.com/products/product.aspx?ID=5262">SiteMinder</a>. Anthony Webb and Dave Hoff of <a href="http://www.imified.com/">IMified</a> are working on an OAuth ColdFusion library.</p>

      <p>There is an XQuery OAuth Library written by Stephan Merkli and documented <a href="http://sausalito.28msec.com/latest/index.php?id=working_with_oauth">here</a>.</p>

  </div>
</div>

<?php require('../includes/_footer.php'); ?>
