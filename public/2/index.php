<?php
$page_title = "OAuth 2.0 &mdash; OAuth";
$page_section = "";
$page_secondary = "";
$page_meta_description = "Resources and information related to the OAuth 2.0 protocol.";

require('../../includes/_header.php');
?>

<div class="container">
  <div>


    <h2 id="oauth-2.0">OAuth 2.0</h2>

    <p><img src="/images/oauth-2-sm.png" alt="OAuth 2.0 logo" style="float:right; margin: 0 0 8px 8px;" />OAuth 2.0 is the industry-standard protocol for authorization. OAuth 2.0 focuses on client developer simplicity while providing specific authorization flows for web applications, desktop applications, mobile phones, and living room devices. This specification and its extensions are being developed within the <a href="https://www.ietf.org/mailman/listinfo/oauth">IETF OAuth Working Group</a>.</p>
    <!-- <p>OAuth 2.1 consolidates OAuth 2.0 and many common extensions under a new name.</p> -->
    <p>Questions, suggestions and protocol changes should be discussed on the <a href="https://www.ietf.org/mailman/listinfo/oauth">mailing list</a>.</p>

    <?php if(time() > strtotime('2021-04-15T10:40:00-0700') && time() < strtotime('2021-04-15T11:55:00-0700')): ?>

    <div style="margin-top: 10px; margin-bottom: 20px; padding: 40px; border: 1px #ddd solid;">
      <div style="font-weight:bold; color:#f00;">Live Now!</div>
      <iframe width="100%" height="400" src="https://www.youtube.com/embed/Na_1Pchl9Hg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    <?php else: ?>

    <div style="margin-top: 10px; margin-bottom: 20px; padding: 40px; border: 1px #ddd solid;">
      <div style="">New Video Course!</div>
      <div class="course-image"><a href="https://www.udemy.com/course/oauth-2-simplified/?referralCode=B04F59AED67B8DA74FA7" onclick="trackOutboundClick('https://www.udemy.com/course/oauth-2-simplified/?referralCode=B04F59AED67B8DA74FA7', '7VBGSQN1'); return false;"><img src="https://oauth2simplified.com/images/nuts-and-bolts-of-oauth.png" style="width: 100%"></a></div>
      <div style="text-align: right;">by Aaron Parecki</div>
    </div>

    <?php endif ?>

    <h3 style="clear:none;">OAuth 2.0</h3>


    <?php if(time() < strtotime('2019-08-01')): ?>
    <div style="float: right; border: 1px #ccc solid; padding: 10px; border-radius: 8px; max-width: 320px; background: #fafafa;">

      <p>🍎 <a href="https://developer.okta.com/blog/2019/06/04/what-the-heck-is-sign-in-with-apple">What the Heck is Sign In with Apple?</a> 🍎</p>
      <p>Sign In with Apple is based on OAuth 2.0 and OpenID Connect, and provides a privacy-friendly way for users to sign in to websites and apps.</p>
      <div><a href="https://developer.okta.com/blog/2019/06/04/what-the-heck-is-sign-in-with-apple">Read More &gt;&gt;</a></div>

    </div>
    <?php endif ?>

    <ul>
      <li><a href="https://tools.ietf.org/html/rfc6749">OAuth 2.0 Framework</a> - RFC 6749
        <ul>
          <li><a href="/2/scope/">OAuth Scope</a></li>
        </ul>
      </li>
      <li><a href="/2/grant-types/">OAuth Grant Types</a>
        <ul>
          <li><a href="/2/grant-types/authorization-code/">Authorization Code</a></li>
          <li><a href="/2/pkce/">PKCE</a></li>
          <li><a href="/2/grant-types/client-credentials/">Client Credentials</a></li>
          <li><a href="/2/grant-types/device-code/">Device Code</a></li>
          <li><a href="/2/grant-types/refresh-token/">Refresh Token</a></li>
          <li>Legacy: <a href="/2/grant-types/implicit/">Implicit Flow</a></li>
          <li>Legacy: <a href="/2/grant-types/password/">Password Grant</a></li>
        </ul>
      </li>
      <li><a href="/2/client-types/">Client Types - Confidential and Public Applications</a></li>
      <li><a href="/2/bearer-tokens/">Bearer Tokens</a> - RFC 6750</li>
      <li><a href="/2/security-considerations/">Threat Model and Security Considerations</a> - RFC 6819</li>
      <li><a href="/2/oauth-best-practice/">OAuth Security Best Current Practice</a>
    </ul>

    <h4>Mobile and Other Devices</h4>
    <ul>
      <li><a href="/2/native-apps/">Native Apps</a> - Recommendations for using OAuth with native apps</li>
      <li><a href="/2/browser-based-apps/">Browser-Based Apps</a> - Recommendations for using OAuth with browser-based apps (e.g. an SPA)</li>
      <li><a href="/2/device-flow/">Device Authorization Grant</a> - OAuth for devices with no browser or no keyboard</li>
    </ul>

    <h4>Token and Token Management</h4>
    <ul>
      <li><a href="/2/token-introspection/">Token Introspection</a> - RFC 7662, to determine the active state and meta-information of a token</li>
      <li><a href="/2/token-revocation/">Token Revocation</a> - RFC 7009, to signal that a previously obtained token is no longer needed</li>
      <li><a href="/2/jwt/">JSON Web Token</a> - RFC 7519</li>
    </ul>

    <h4>Discovery and Registration</h4>
    <ul>
      <li><a href="/2/authorization-server-metadata/">Authorization Server Metadata</a> - RFC 8414, for clients to discover OAuth endpoints and authorization server capabilities</li>
      <li><a href="/2/dynamic-client-registration/">Dynamic Client Registration</a> - RFC 7591, to programmatically register OAuth clients</li>
      <li><a href="/2/dynamic-client-management/">Dynamic Client Registration Management</a> - Experimental RFC 7592, for updating and managing dynamically registered OAuth clients</li>
    </ul>

    <h3>Experimental and Draft Specs</h3>
    <p>The specs below are either experimental or in draft status and are still active working group items. They will likely change before they are finalized as RFCs or BCPs.</p>
    <ul>
      <li><a href="/2/jwt-access-tokens/">JWT Profile for Access Tokens</a></li>
      <li><a href="/2/rich-authorization-requests/">Rich Authorization Requests (RAR)</a></li>
      <li><a href="/2/pushed-authorization-requests/">Pushed Authorization Requests (PAR)</a></li>
      <li><a href="/2/dpop/">Demonstration of Proof of Possession (DPoP)</a></li>
      <li><a href="https://tools.ietf.org/html/draft-ietf-oauth-incremental-authz">Incremental Authorization</a></li>
      <li><a href="https://datatracker.ietf.org/wg/oauth/documents/">OAuth Working Group Documents</a></li>
    </ul>


    <h3>Related Specs and Extensions</h3>
    <ul>
      <li><a href="https://www.iana.org/assignments/oauth-parameters/oauth-parameters.xhtml">OAuth Extension Parameter Registry</a></li>
      <li><a href="http://tools.ietf.org/html/rfc7521">OAuth Assertions Framework</a> - RFC 7521</li>
      <li><a href="http://tools.ietf.org/html/rfc7522">SAML2 Bearer Assertion</a> - RFC 7522, for integrating with existing identity systems</li>
      <li><a href="http://tools.ietf.org/html/rfc7523">JWT Bearer Assertion</a> - RFC 7523, for integrating with existing identity systems</li>
      <li><a href="/webauthn/">WebAuthn - Web Authentication</a></li>
      <li><a href="https://tools.ietf.org/html/draft-ietf-httpbis-message-signatures">Signing HTTP Messages</a> - A generic HTTP message signing spec</li>
    </ul>

    <h3>Community Resources</h3>
    <ul>
      <li><a href="https://aaronparecki.com/oauth-2-simplified/">OAuth 2.0 Simplified</a></li>
      <li>
        <a href="/books/">Books about OAuth</a>
        <ul>
          <li><a href="https://oauth2simplified.com">OAuth 2.0 Simplified</a> by Aaron Parecki</li>
          <li><a href="https://www.amazon.com/OAuth-2-Action-Justin-Richer/dp/161729327X/?tag=oauthnet-20">OAuth 2 in Action</a> by Justin Richer and Antonio Sanso</li>
          <li><a href="https://www.amazon.com/Mastering-OAuth-2-0-Charles-Bihis/dp/1784395404?tag=oauthnet-20">Mastering OAuth 2.0</a> by Charles Bihis</li>
          <li><a href="https://www.amazon.com/dp/178829596X?tag=oauthnet-20">OAuth 2.0 Cookbook</a> by Adolfo Eloy Nascimento</li>
        </ul>
      </li>
      <li><a href="https://alexbilbie.com/tag/oauth/">OAuth articles by Alex Bilbie</a></li>
    </ul>

    <h3>Protocols Built on OAuth 2.0</h3>
    <ul>
      <li><a href="http://openid.net/connect/">OpenID Connect</a> (OpenID Foundation)</li>
      <li><a href="https://docs.kantarainitiative.org/uma/wg/rec-oauth-uma-grant-2.0.html">UMA 2.0</a> (Kantara)</li>
      <li><a href="https://indieauth.spec.indieweb.org/">IndieAuth</a> (W3C)</li>
    </ul>

    <h3>Code and Services</h3>
    <ul>
      <li><a href="/code/">OAuth 2.0 Code and Services</a></li>
    </ul>

    <h3>OAuth 2.1</h3>

    <ul>
      <li><a href="/2.1/">OAuth 2.1</a> - An in-progress update to simplify OAuth 2.0</li>
      <li><a href="https://aaronparecki.com/2019/12/12/21/its-time-for-oauth-2-dot-1">It's Time for OAuth 2.1</a> (by Aaron Parecki)</li>
    </ul>

    <h3>Legacy</h3>

    <ul>
      <li><a href="/1/">OAuth 1.0 and 1.0a</a></li>
    </ul>

  </div>
</div>

<?php require('../../includes/_footer.php'); ?>
