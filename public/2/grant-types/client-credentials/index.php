<?php
$page_title = "Client Credentials Grant — OAuth 2.0";
$page_section = "";
$page_meta_description = "The Client Credentials grant type is used for server-to-server API calls where there is no user involved.";
require('../../../../includes/_header.php');
?>
<div class="container">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/2/">OAuth 2.0</a></li>
      <li class="breadcrumb-item"><a href="/2/grant-types/">Grant Types</a></li>
      <li class="breadcrumb-item active">Client Credentials</li>
    </ol>
  </nav>

  <h2>Client Credentials</h2>

  <div class="spec-meta">
    <a href="https://www.rfc-editor.org/rfc/rfc6749#section-4.4" class="rfc-badge">RFC 6749 §4.4</a>
    <span class="spec-status spec-status--published">Published</span>
    <a href="https://tools.ietf.org/html/rfc6749#section-4.4" class="rfc">tools.ietf.org/html/rfc6749</a>
  </div>

  <p class="spec-lede">The Client Credentials grant is used for machine-to-machine communication where no user is involved. The client authenticates directly with the authorization server using its own credentials and receives an access token.</p>

  <div class="spec-when">
    <strong>When to use this</strong>
    Use Client Credentials when your backend service needs to call another API on its own behalf — not on behalf of a specific user. Common examples: a cron job that syncs data, a microservice calling another internal service, or a server-side process accessing a shared resource.
  </div>

  <p>The request is straightforward: the client sends its <code>client_id</code> and <code>client_secret</code> (or another form of <a href="/2/client-authentication/">client authentication</a>) to the token endpoint with <code>grant_type=client_credentials</code>. There is no redirect, no user login, and no refresh token — just a direct exchange of credentials for an access token.</p>

  <p>Because access tokens are short-lived, clients should request a new one when the current one expires rather than storing it permanently. Many client libraries handle this automatically.</p>

  <h3>More resources</h3>
  <ul>
    <li><a href="https://www.oauth.com/oauth2-servers/access-tokens/client-credentials/">Client Credentials</a> (oauth.com)</li>
    <li><a href="https://aaronparecki.com/oauth-2-simplified/#client-credentials">Application Access</a> (aaronparecki.com)</li>
    <li><a href="https://developer.okta.com/blog/2018/06/06/node-api-oauth-client-credentials">Secure a Node API with OAuth 2.0 Client Credentials</a> (developer.okta.com)</li>
  </ul>

</div>
<?php require('../../../../includes/_footer.php'); ?>
