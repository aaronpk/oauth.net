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

    <p><img src="/images/oauth-2-sm.png" alt="OAuth 2.0 logo" style="float:right; margin: 0 0 8px 8px;" />OAuth 2.0 is the industry-standard protocol for authorization. OAuth 2.0 focuses on client developer simplicity while providing specific authorization flows for web applications, desktop applications, mobile phones, and living room devices. This specification and its extensions are being developed within the <a href="https://datatracker.ietf.org/wg/oauth/about/">IETF OAuth Working Group</a>.</p>
    <p><a href="/2.1/">OAuth 2.1</a> is an in-progress effort to consolidate OAuth 2.0 and many common extensions under a new name.</p>
    <p>Questions, suggestions and protocol changes should be discussed on the <a href="https://www.ietf.org/mailman/listinfo/oauth">mailing list</a>.</p>

    <div style="margin-top: 10px; margin-bottom: 20px; padding: 40px; border: 1px #ddd solid;">
      <div style="">Video Course: The Nuts and Bolts of OAuth 2.0</div>
      <div class="course-image"><a href="https://oauth2simplified.com/course" onclick="trackOutboundClick('https://oauth2simplified.com/course', '7VBGSQN1');"><img src="https://oauth2simplified.com/images/nuts-and-bolts-of-oauth.png" style="width: 100%"></a></div>
      <div style="text-align: right;">by Aaron Parecki</div>
    </div>

    <h3 style="clear:none;">OAuth 2.0</h3>


    <ul>
      <li><a href="https://tools.ietf.org/html/rfc6749">OAuth 2.0 Framework</a> <a href="https://www.rfc-editor.org/rfc/rfc6749" class="rfc-badge">RFC 6749</a>
        <ul>
          <li><a href="/2/access-tokens/">Access Tokens</a></li>
          <li><a href="/2/refresh-tokens/">Refresh Tokens</a></li>
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
      <li><a href="/2/client-authentication/">Client Authentication</a></li>
      <li><a href="/2/bearer-tokens/">Bearer Tokens</a> <a href="https://www.rfc-editor.org/rfc/rfc6750" class="rfc-badge">RFC 6750</a></li>
      <li><a href="/2/security-considerations/">Threat Model and Security Considerations</a> <a href="https://www.rfc-editor.org/rfc/rfc6819" class="rfc-badge">RFC 6819</a></li>
      <li><a href="/2/oauth-best-practice/">OAuth Security Best Current Practice</a> <a href="https://www.rfc-editor.org/rfc/rfc9700" class="rfc-badge">RFC 9700</a></li>
      <li><a href="/id-tokens-vs-access-tokens/">ID Tokens vs Access Tokens</a></li>
    </ul>

    <h4>Mobile and Other Devices</h4>
    <ul>
      <li><a href="/2/native-apps/">Native Apps</a> <a href="https://www.rfc-editor.org/rfc/rfc8252" class="rfc-badge">RFC 8252</a> — Recommendations for using OAuth with native apps</li>
      <li><a href="/2/browser-based-apps/">Browser-Based Apps</a> — Recommendations for using OAuth with browser-based apps (e.g. an SPA)</li>
      <li><a href="/2/device-flow/">Device Authorization Grant</a> <a href="https://www.rfc-editor.org/rfc/rfc8628" class="rfc-badge">RFC 8628</a> — OAuth for devices with no browser or no keyboard</li>
    </ul>

    <h4>Token and Token Management</h4>
    <ul>
      <li><a href="/2/jwt-access-tokens/">JWT Profile for Access Tokens</a> <a href="https://www.rfc-editor.org/rfc/rfc9068" class="rfc-badge">RFC 9068</a> — a standard for structured access tokens</li>
      <li><a href="/2/token-introspection/">Token Introspection</a> <a href="https://www.rfc-editor.org/rfc/rfc7662" class="rfc-badge">RFC 7662</a> — determine the active state and meta-information of a token</li>
      <li><a href="/2/token-revocation/">Token Revocation</a> <a href="https://www.rfc-editor.org/rfc/rfc7009" class="rfc-badge">RFC 7009</a> — signal that a previously obtained token is no longer needed</li>
      <li><a href="/2/jwt/">JSON Web Token</a> <a href="https://www.rfc-editor.org/rfc/rfc7519" class="rfc-badge">RFC 7519</a></li>
      <li><a href="/2/token-exchange/">Token Exchange</a> <a href="https://www.rfc-editor.org/rfc/rfc8693" class="rfc-badge">RFC 8693</a></li>
    </ul>

    <h4>Discovery and Registration</h4>
    <ul>
      <li><a href="/2/authorization-server-metadata/">Authorization Server Metadata</a> <a href="https://www.rfc-editor.org/rfc/rfc8414" class="rfc-badge">RFC 8414</a> — for clients to discover OAuth endpoints and authorization server capabilities</li>
      <li><a href="/2/dynamic-client-registration/">Dynamic Client Registration</a> <a href="https://www.rfc-editor.org/rfc/rfc7591" class="rfc-badge">RFC 7591</a> — to programmatically register OAuth clients</li>
      <li><a href="/2/dynamic-client-management/">Dynamic Client Registration Management</a> <a href="https://www.rfc-editor.org/rfc/rfc7592" class="rfc-badge">RFC 7592</a> — experimental, for updating and managing dynamically registered OAuth clients</li>
    </ul>

    <h4>High Security OAuth</h4>
    <p>These specs are used to add additional security properties on top of OAuth 2.0.</p>
    <ul>
      <li><a href="/2/pushed-authorization-requests/">Pushed Authorization Requests (PAR)</a> <a href="https://www.rfc-editor.org/rfc/rfc9126" class="rfc-badge">RFC 9126</a></li>
      <li><a href="/2/dpop/">Demonstration of Proof of Possession (DPoP)</a> <a href="https://www.rfc-editor.org/rfc/rfc9449" class="rfc-badge">RFC 9449</a></li>
      <li><a href="/2/mtls/">Mutual TLS</a> <a href="https://www.rfc-editor.org/rfc/rfc8705" class="rfc-badge">RFC 8705</a></li>
      <li><a href="/private-key-jwt/">Private Key JWT</a> <a href="https://www.rfc-editor.org/rfc/rfc7521" class="rfc-badge">RFC 7521</a> <a href="https://www.rfc-editor.org/rfc/rfc7523" class="rfc-badge">RFC 7523</a></li>
    </ul>

    <h3>Draft Specs</h3>
    <p>The specs below are in draft status and are still active working group items. They will likely change before they are finalized as RFCs or BCPs.</p>
    <ul>
      <li><a href="/cross-app-access/">Cross-App Access (XAA)</a></li>
      <li><a href="/2/client-id-metadata-document/">Client ID Metadata Document</a></li>
      <li><a href="/specs/">All OAuth Working Group Documents</a></li>
    </ul>

    <h3>Additional Extensions</h3>
    <ul>
      <li><a href="https://www.iana.org/assignments/oauth-parameters/oauth-parameters.xhtml">OAuth Extension Parameter Registry</a></li>
      <li><a href="https://www.rfc-editor.org/rfc/rfc7521">OAuth Assertions Framework</a> <a href="https://www.rfc-editor.org/rfc/rfc7521" class="rfc-badge">RFC 7521</a></li>
      <li><a href="https://www.rfc-editor.org/rfc/rfc7522">SAML2 Bearer Assertion</a> <a href="https://www.rfc-editor.org/rfc/rfc7522" class="rfc-badge">RFC 7522</a> — for integrating with existing identity systems</li>
      <li><a href="https://www.rfc-editor.org/rfc/rfc7523">JWT Bearer Assertion</a> <a href="https://www.rfc-editor.org/rfc/rfc7523" class="rfc-badge">RFC 7523</a></li>
      <li><a href="https://www.rfc-editor.org/rfc/rfc9207">Authorization Server Issuer Identification</a> <a href="https://www.rfc-editor.org/rfc/rfc9207" class="rfc-badge">RFC 9207</a> — indicates the authorization server identifier in the authorization response</li>
      <li><a href="/2/rich-authorization-requests/">Rich Authorization Requests (RAR)</a> <a href="https://www.rfc-editor.org/rfc/rfc9396" class="rfc-badge">RFC 9396</a></li>
      <li><a href="https://www.rfc-editor.org/rfc/rfc9470">Step-up Authentication Challenge</a> <a href="https://www.rfc-editor.org/rfc/rfc9470" class="rfc-badge">RFC 9470</a></li>
    </ul>

    <h3>Related Work from Other Communities</h3>
    <ul>
      <li><a href="/gnap/">GNAP</a> <a href="https://www.rfc-editor.org/rfc/rfc9635" class="rfc-badge">RFC 9635</a> — Grant Negotiation and Authorization Protocol</li>
      <li><a href="/fapi/">FAPI</a> (OpenID Foundation)</li>
      <li><a href="/webauthn/">WebAuthn - Web Authentication</a></li>
      <li><a href="/passkeys/">passkeys</a> are a new way to sign in to services without a password</li>
      <li><a href="/http-signatures/">HTTP Message Signatures</a> - A generic HTTP message signing spec</li>
      <li><a href="/openid-for-verifiable-credentials/">OpenID for Verifiable Credentials</a></li>
      <li><a href="/ipsie/">IPSIE</a> - Interoperability Profile for Secure Identity in the Enterprise</li>
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
      <li><a href="https://oauth2simplified.com/course">The Nuts and Bolts of OAuth</a> - video course by Aaron Parecki</li>
    </ul>

    <h3>Protocols Built on OAuth 2.0</h3>
    <ul>
      <li><a href="https://openid.net/connect/">OpenID Connect</a> (OpenID Foundation)</li>
      <li><a href="https://docs.kantarainitiative.org/uma/wg/rec-oauth-uma-grant-2.0.html">UMA 2.0</a> (Kantara)</li>
      <li><a href="https://indieauth.spec.indieweb.org/">IndieAuth</a> (W3C)</li>
    </ul>

    <h3>Code and Services</h3>
    <ul>
      <li><a href="/code/">OAuth 2.0 Code and Services</a></li>
    </ul>

    <h3>OAuth 2.1</h3>

    <ul>
      <li><a href="/2.1/">OAuth 2.1</a> - An in-progress update to consolidate and simplify OAuth 2.0</li>
      <li><a href="https://aaronparecki.com/2019/12/12/21/its-time-for-oauth-2-dot-1">It's Time for OAuth 2.1</a> (by Aaron Parecki)</li>
    </ul>

    <h3>Legacy</h3>

    <ul>
      <li><a href="/1/">OAuth 1.0 and 1.0a</a></li>
    </ul>

  </div>
</div>

<?php require('../../includes/_footer.php'); ?>
