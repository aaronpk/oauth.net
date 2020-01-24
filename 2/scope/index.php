<?php
$page_title = "OAuth 2.0 Scopes";
$page_section = "";
$page_secondary = "";
$page_meta_description = "Scope is a way to limit an appliation's access to a user's account";
require('../../includes/_header.php');
?>
<div class="container">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/2/">OAuth 2.0</a></li>
      <li class="breadcrumb-item active">Scope</li>
    </ol>
  </nav>
  <div>

    <h2>OAuth Scopes</h2>

    <p><a href="https://tools.ietf.org/html/rfc6749#section-3.3" class="rfc">tools.ietf.org/html/rfc6749#section-3.3</a></p>

    <p>Scope is a mechanism in OAuth 2.0 to limit an application's access to a user's account. An application can request one or more scopes, this information is then presented to the user in the consent screen, and the access token issued to the application will be limited to the scopes granted.</p>

    <p>The OAuth spec allows the authorization server or user to modify the scopes granted to the application compared to what is requested, although there are not many examples of services doing this in practice.</p>

    <p>OAuth does not define any particular values for scopes, since it is highly dependent on the service's internal architecture and needs.</p>

    <p><b>Examples of Scopes in Popular Services</b>
      <ul>
        <li><a href="https://api.slack.com/docs/oauth-scopes">Slack</a></li>
        <li><a href="https://developer.github.com/apps/building-oauth-apps/understanding-scopes-for-oauth-apps/">GitHub</a></li>
        <li><a href="https://developers.google.com/identity/protocols/googlescopes">Google</a></li>
        <li><a href="https://dev.fitbit.com/build/reference/web-api/oauth2/#scope">FitBit</a></li>
      </ul>
    </p>

    <p><b>More resources</b>
      <ul>
        <li><a href="https://www.oauth.com/oauth2-servers/scope/defining-scopes/">Defining Scopes</a> (oauth.com)</li>
        <li><a href="https://openid.net/specs/openid-connect-core-1_0.html#ScopeClaims">OpenID Connect Scopes</a> (openid.net)</li>
      </ul>
    </p>

  </div>
</div>

<?php require('../../includes/_footer.php'); ?>
