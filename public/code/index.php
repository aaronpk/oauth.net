<?php
$page_title = "Code &mdash; OAuth";
$page_section = "code";
$page_secondary = "";
$page_meta_description = "";

$path = $_SERVER['REQUEST_URI'];

// Match a language sub-page (disallows anything past the language key including query strings)
if(preg_match('~/code/([^/]+)/$~', $path, $match)) {
  require(__DIR__.'/render.php');
  die();
}

// Redirect any other sub-path back to the code page
if($path != '/code/') {
  header('Location: /code/');
  die();
}

require('../../includes/_header.php');

$languages = json_decode(file_get_contents(__DIR__.'/../../data/code/languages.json'), true);
?>

<div class="container">
  <div>

    <h2>Code</h2>

    <p>OAuth libraries are available in a variety of languages.</p>

    <ul class="languages">
      <?php foreach($languages as $lang): ?>
        <li>
          <a href="/code/<?= $lang['path'] ?>/"><img src="/images/code/<?= $lang['path'] ?>.png" alt="<?= $lang['name'] ?>"></a>
          <span><a href="/code/<?= $lang['path'] ?>/"><?= $lang['name'] ?></a></span>
        </li>
      <?php endforeach ?>
    </ul>
    <div style="clear: both;"></div>

    <style>
      ul.languages {
        list-style-type: none;
        margin: 0;
        padding: 0;
      }
      ul.languages li {
        min-width: 110px;
        float: left;
        padding: 10px;
        margin-bottom: 10px;
        display: flex;
        flex-direction: column;
        text-align: center;
      }
      ul.languages li img {
        max-height: 60px;
      }
    </style>

    <br><br>

    <h3 id="services">OAuth Providers</h3>
    <span id="proxy-services"></span>

    <h4 id="open-source">Open Source</h4>
    <span id="proxy-services-open-source"></span>
    <ul>
      <li><a href="https://goauthentik.io">Authentik</a></li>
      <li><a href="https://github.com/curveball/a12n-server">a12n-server</a></li>
      <li><a href="https://github.com/casbin/casdoor">Casdoor</a></li>
      <li><a href="https://github.com/babelouest/glewlwyd">Glewlwyd</a></li>
      <li><a href="https://github.com/Fraunhofer-AISEC/omejdn-server">Omejdn</a></li>
      <li><a href="https://www.keycloak.org">Keycloak</a></li>
      <li><a href="https://github.com/oauth-io">OAuth.io</a></li>
      <li><a href="https://www.ory.sh/hydra">ORY Hydra</a></li>
      <li><a href="https://github.com/panva/node-oidc-provider">oidc-provider</a></li>
      <li><a href="https://simplelogin.io/developer">SimpleLogin</a></li>
      <li><a href="https://github.com/spring-projects/spring-authorization-server">Spring Authorization Server</a></li>
      <li><a href="https://github.com/ssqsignon">SSQ signon</a></li>
      <li><a href="https://wso2.com/identity-server/">WSO2 Identity Server</a></li>
      <li><a href="https://github.com/zitadel/zitadel">ZITADEL</a></li>   
      <li><a href="https://github.com/malach-it/boruta-server">boruta</a></li>
      <li><a href="https://github.com/logto-io/logto">Logto</a></li>
    </ul>

    <h4 id="commercial">Commercial</h4>
    <span id="proxy-services-commercial"></span>
    <ul>
      <li><a href="https://wso2.com/asgardeo/">Asgardeo</a></li>
      <li><a href="https://auth0.com">Auth0</a></li>
      <li><a href="https://authress.io?utm_source=oauth.net">Authress</a></li>
      <li><a href="https://www.cidaas.com">cidaas</a></li>
      <li><a href="https://clerk.com?utm_source=oauth.net">Clerk</a></li>
      <li><a href="https://www.corbado.com">Corbado</a></li>
      <li><a href="https://curity.io">Curity Identity Server</a></li>
      <li><a href="https://www.descope.com">Descope</a></li>
      <li><a href="https://www.forgerock.com">ForgeRock</a></li>
      <li><a href="https://fusionauth.io/">FusionAuth</a></li>
      <li><a href="https://kinde.com?utm_source=oauth.net">Kinde</a></li>
      <li><a href="https://www.loginradius.com">LoginRadius</a></li>
      <li><a href="https://developer.okta.com">Okta</a></li>
      <li><a href="https://www.pingidentity.com">PingId</a></li>
      <li><a href="https://access.redhat.com/products/red-hat-single-sign-on">Red Hat Single Sign-On</a></li>
      <li><a href="https://stytch.com/?utm_source=oauth.net">Stytch</a></li>
      <li><a href="https://zitadel.com">ZITADEL Cloud</a></li>
      <li><a href="https://www.ibm.com/cloud/app-id">IBM Cloud App ID</a></li>
      <li><a href="https://logto.io">Logto</a></li>
    </ul>

    <h3 id="related">Related Projects and Services</h3>
    <ul>
      <li><a href="https://github.com/vouch/vouch-proxy">Vouch Proxy</a> - an nginx reverse proxy solution that adds OAuth/OpenID authentication</li>
      <li><a href="https://github.com/enterprise-oss/osso">Osso</a> - SAML to OAuth bridge</li>
    </ul>

    <?php /*
    <h3 id="services-that-support-oauth-2">Services that Support OAuth 2</h3>
    <ul>
      <li><a href="https://github.com/basecamp/bc3-api">Basecamp</a></li>
      <li><a href="http://api.beeminder.com/#client-oauth-oauth">Beeminder</a></li>
      <li><a href="https://confluence.atlassian.com/bitbucket/oauth-on-bitbucket-cloud-238027431.html">BitBucket</a></li>
      <li><a href="https://develop.battle.net/documentation">Blizzard</a></li>
      <li><a href="https://www.bookingsync.com">BookingSync</a></li>
      <li><a href="http://developers.box.com/oauth/">Box</a></li>
      <li><a href="https://buffer.com/developers/api/oauth">Buffer</a></li>
      <li><a href="http://www.campaignmonitor.com/api/getting-started/#authenticating_with_oauth">Campaign Monitor</a></li>
      <li><a href="https://clever.com/">Clever</a></li>
      <li><a href="https://do.com">Do.com</a></li>
      <li><a href="http://developer.dribbble.com/v1/oauth/">Dribbble</a></li>
      <li><a href="https://www.dropbox.com/developers/reference/oauth-guide">Dropbox</a></li>
      <li><a href="http://developer.exist.io/#oauth2-authentication">Exist</a></li>
      <li><a href="http://developers.facebook.com/docs/authentication/">Facebook's Graph API</a></li>
      <li><a href="https://dev.fitbit.com/build/reference/web-api/oauth2/">FitBit</a></li>
      <li><a href="https://developer.foursquare.com/overview/auth">Foursquare</a></li>
      <li><a href="https://developer.github.com/v3/oauth/">GitHub</a></li>
      <li><a href="https://developers.google.com/identity/protocols/OAuth2">Google</a></li>
      <li><a href="https://dev.strato.com/hidrive">HiDrive</a></li>
      <li><a href="http://instagram.com/developer/authentication">Instagram</a></li>
      <li><a href="https://developer.intuit.com/docs/00_quickbooks_online/2_build/10_authentication_and_authorization/10_oauth_2.0">Intuit</a></li>
      <li><a href="https://developer.linkedin.com/docs/oauth2">LinkedIn</a></li>
      <li><a href="http://www.meetup.com/meetup_api/auth/#oauth2">Meetup</a></li>
      <li><a href="http://nationbuilder.com/api_quickstart">NationBuilder</a></li>
      <li><a href="http://www.salesforce.com/us/developer/docs/api_rest/Content/quickstart_oauth.htm">Salesforce</a></li>
      <li><a href="https://api.sharefile.com/rest/oauth2.aspx">ShareFile</a></li>
      <li><a href="https://api.slack.com/docs/oauth">Slack</a></li>
      <li><a href="http://developers.soundcloud.com/docs/api/reference">SoundCloud</a></li>
      <li><a href="https://developer.spotify.com/web-api/authorization-guide/">Spotify</a></li>
      <li><a href="http://www.timecockpit.com/blog/2014/10/31/Welcome-OAuth2-and-OpenID-Connect">time cockpit</a></li>
      <li><a href="http://msdn.microsoft.com/en-us/library/live/hh243647.aspx">Windows Live</a></li>
    </ul>
    */ ?>

    <h3 id="oauth-1">Legacy OAuth 1.0 Support</h3>
    <ul>
      <li>See <a href="/1/">OAuth 1.0</a></li>
    </ul>

  </div>
</div>
<?php require('../../includes/_footer.php'); ?>
