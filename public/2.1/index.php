<?php
$page_title = "OAuth 2.1";
$page_section = "";
$page_secondary = "";
$page_meta_description = "OAuth 2.1 is an in-progress effort to consolidate and simplify OAuth 2.0";

require('../../includes/_header.php');
?>

<div class="container">
  <div>

    <h2 id="oauth-2-1">OAuth 2.1</h2>

    <p><a href="https://tools.ietf.org/html/draft-ietf-oauth-v2-1" class="rfc">tools.ietf.org/html/draft-ietf-oauth-v2-1</a></p>

    <p>OAuth 2.1 is an in-progress effort to consolidate and simplify the most commonly used features of OAuth 2.0.</p>

    <p>Since the original publication of OAuth 2.0 (RFC 6749) in 2012, several new RFCs have been published that either add or remove functionality from the core spec, including <a href="/2/native-apps/">OAuth 2.0 for Native Apps</a> (RFC 8252), <a href="/2/pkce/">Proof Key for Code Exchange</a> (RFC 7636), <a href="/2/browser-based-apps/">OAuth for Browser-Based Apps</a>, and <a href="/2/oauth-best-practice/">OAuth 2.0 Security Best Current Practice</a>.</p>

    <p>OAuth 2.1 consolidates the changes published in later specs to simplify the core document.</p>

    <p>The major differences from OAuth 2.0 are listed below.</p>

    <ul>
      <li>PKCE is required for all OAuth clients using the authorization code flow</li>
      <li>Redirect URIs must be compared using exact string matching</li>
      <li>The Implicit grant (<code>response_type=token</code>) is omitted from this specification</li>
      <li>The Resource Owner Password Credentials grant is omitted from this specification</li>
      <li>Bearer token usage omits the use of bearer tokens in the query string of URIs</li>
      <li>Refresh tokens for public clients must either be sender-constrained or one-time use</li>
    </ul>


    <p>More resources
      <ul>
        <li><a href="https://aaronparecki.com/2019/12/12/21/its-time-for-oauth-2-dot-1">It's Time for OAuth 2.1</a> (by Aaron Parecki)</li>
        <li><a href="https://fusionauth.io/blog/2020/04/15/whats-new-in-oauth-2-1">What's new in OAuth 2.1?</a> (Dan Moore, fusionauth.io)</li>
        <li><a href="https://developer.okta.com/blog/2019/12/13/oauth-2-1-how-many-rfcs">OAuth 2.1: How Many RFCs Does it Take to Change a Lightbulb?</a> (by Lee McGovern)</li>
        <li><a href="https://www.youtube.com/watch?v=g_aVPdwBTfw">What's New with OAuth and OpenID Connect? - Oktane Live</a> (Aaron Parecki)</li>
        <li><a href="https://fusionauth.io/learn/expert-advice/oauth/differences-between-oauth-2-oauth-2-1/">Differences between OAuth 2 and OAuth 2.1</a> (by Dan Moore)</li>
      </ul>
    </p>

  </div>
</div>

<?php require('../../includes/_footer.php'); ?>
