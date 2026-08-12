<?php
$page_title = "Frequently Asked Questions about OAuth 2.0 &mdash; OAuth";
$page_section = "about";
$page_secondary = "";
$page_meta_description = "Common questions and answers about OAuth 2.0";

require('../../includes/_header.php');
?>

<div class="container">
  <div class="faq">

    <h2 id="oauth-faq">Frequently Asked Questions about OAuth</h2>

    <h3>Concepts</h3>

    <h4 id="authentication-vs-authorization">Is OAuth for authentication or authorization?</h4>
    <p>OAuth is an <em>authorization</em> protocol — it grants an application access to resources on a user's behalf. It says nothing about who the user is. Using OAuth alone as a login mechanism is a common mistake that creates security vulnerabilities. If you need to know who the user is, use <a href="https://openid.net/connect/">OpenID Connect</a>, which is a thin identity layer built on top of OAuth 2.0.</p>
    <p><a href="/articles/authentication/">Read more: OAuth 2.0 is not an authentication protocol &rarr;</a></p>

    <h4 id="oauth-vs-openid-connect">What is the difference between OAuth 2.0 and OpenID Connect?</h4>
    <p>OAuth 2.0 handles authorization — granting scoped access to APIs and resources. OpenID Connect (OIDC) is built on top of OAuth 2.0 and adds user authentication: it defines how an application can find out who the user is and returns a signed ID Token alongside the access token. When you "Sign in with Google," that is OpenID Connect, not raw OAuth.</p>
    <p><a href="/id-tokens-vs-access-tokens/">Read more: ID Tokens vs Access Tokens &rarr;</a></p>

    <h4 id="oauth-21">What is OAuth 2.1?</h4>
    <p>OAuth 2.1 is a consolidation of OAuth 2.0 and its security best practice extensions into a single document. It removes deprecated flows (Implicit, Password grant), mandates PKCE for all Authorization Code flows, and tightens redirect URI matching rules. Implementations compliant with OAuth 2.0 and modern security best practices will likely require only minor changes to meet OAuth 2.1.</p>
    <p><a href="/2.1/">Read more: OAuth 2.1 &rarr;</a></p>

    <h4 id="oauth-1-vs-2">What is the difference between OAuth 1.0 and OAuth 2.0?</h4>
    <p>OAuth 2.0 is not backward-compatible with OAuth 1.0. OAuth 1.0 required cryptographic signing of every request using a shared secret; OAuth 2.0 relies on TLS for transport security and uses bearer tokens, making it simpler to implement. OAuth 1.0 is considered legacy — new implementations should use OAuth 2.0.</p>
    <p><a href="/1/">Read more: OAuth 1.0 &rarr;</a></p>

    <h3>Choosing the Right Approach</h3>

    <h4 id="which-grant-type">How do I choose which grant type to use?</h4>
    <p>For apps that act on behalf of a user — whether a server-side web app, single-page app, or mobile app — use the Authorization Code flow with PKCE. For server-to-server communication where there is no user involved, use the Client Credentials grant. If you're building for a device without a browser, such as a TV or CLI tool, use the Device Authorization flow. The Implicit flow and the Password grant have been deprecated and should not be used in new applications.</p>
    <p><a href="/2/grant-types/">Read more: OAuth Grant Types &rarr;</a></p>

    <h4 id="do-i-need-oauth">Do I need OAuth if I own both the client and the API?</h4>
    <p>If you control both the client and the API and there is only ever one client, you may not need OAuth at all — a simpler API key approach can work fine, although comes with the downsides and security risks of shared secrets and static configuration. OAuth becomes valuable when you need to support delegated access, when multiple clients need to talk to the same API, or when third-party developers need to build on top of your platform. For a simple architecture like a client talking to a single API, you can also use the "Private Key JWT" client authentication mechanism defined in OAuth to avoid shared secrets.</p>
    <p><a href="/private-key-jwt/">Read more: Private Key JWT &rarr;</a></p>

    <h4 id="password-grant-deprecated">Why is the Password grant deprecated?</h4>
    <p>The Password grant (Resource Owner Password Credentials) requires users to give their credentials directly to the client application, risking the client leaking or misusing the password. This prevents using phishing-resistant flows, breaks multi-factor authentication, and means the client handles credentials it should never see. Authorization Code + PKCE is the correct replacement, even for first-party login UIs.</p>
    <p><a href="/2/grant-types/password/">Read more: Password Grant &rarr;</a> &bull; <a href="/2/pkce/">PKCE &rarr;</a></p>

    <h3>Security and Token Handling</h3>

    <h4 id="client-secret-in-mobile-app">Can I use a client secret in a mobile or single-page app?</h4>
    <p>No. Mobile apps and SPAs are typically <em>public clients</em>. A mobile app in an app store or a SPA on a static website can't be deployed with credentials. A client secret embedded in an app binary or JavaScript bundle is not a secret. Public clients like these still use the Authorization Code flow with PKCE, they just omit client authentication.</p>
    <p><a href="/2/client-types/">Read more: Client Types &rarr;</a> &bull; <a href="/2/pkce/">PKCE &rarr;</a></p>

    <h4 id="token-storage-browser">Where should I store tokens in a browser-based app?</h4>
    <p>Avoid storing tokens in <code>localStorage</code> or <code>sessionStorage</code>, since any JavaScript running on the page — including third-party scripts — can read them. The safest option for browser-based apps is to keep tokens in memory only, or to use a backend-for-frontend (BFF) pattern where the server holds the token and communicates with the browser via <code>HttpOnly</code> cookies that JavaScript cannot access.</p>
    <p><a href="/2/browser-based-apps/">Read more: Browser-Based Apps &rarr;</a></p>

    <h4 id="jwt-vs-opaque">Should access tokens be JWTs or opaque strings?</h4>
    <p>JWTs allow the resource server to validate a token locally without making a network request, which is useful at scale. The tradeoff is that a JWT cannot truly be revoked before it expires without adding back state management. Once issued, it remains valid until the expiration time passes. Opaque tokens require calling the token introspection endpoint on each request, but they can be revoked instantly. Which you choose depends on whether you prioritize performance or the ability to immediately invalidate tokens.</p>
    <p><a href="/2/jwt-access-tokens/">JWT Access Tokens &rarr;</a> &bull; <a href="/2/token-introspection/">Token Introspection &rarr;</a> &bull; <a href="/2/token-revocation/">Token Revocation &rarr;</a></p>

    <h4 id="state-parameter">What is the <code>state</code> parameter and is it required?</h4>
    <p>The <code>state</code> parameter is a random, unguessable value that the client generates before sending the user to the authorization server, and then verifies when the user returns. Its primary purpose is CSRF protection. PKCE also provides CSRF protection, and can be used instead of the <code>state</code> parameter for this purpose.</p>
    <p><a href="/2/pkce/">Read more: PKCE &rarr;</a></p>

    <h3>Implementation</h3>

    <h4 id="expires-in-vs-expires-at">Why does OAuth use <code>expires_in</code> instead of <code>expires_at</code>?</h4>
    <p>Client clocks are often wrong, so a relative offset in seconds is more reliable than an absolute timestamp that depends on accurate local time. Clients should record the current time when they receive a token and compute the expiry from <code>expires_in</code> rather than relying on the server's clock. You can read the previous discussion about this in <a href="https://mailarchive.ietf.org/arch/msg/oauth/FDKZDeAza5zsnzTMCeBeXbQAlm4/">the mailing list archives</a>.</p>

    <h4 id="redirect-uri-matching">Why does the redirect URI need to match exactly?</h4>
    <p>The redirect URI must match exactly because it is one of the primary security controls in the authorization code flow. If an attacker can register a URI that is similar to yours — a different subdomain, an added path segment, or a URL parameter — they can intercept the authorization code and exchange it for a token themselves. Wildcards and partial matching make this trivial to exploit, which is why OAuth 2.1 requires exact string matching with only an exception for localhost redirect URIs for native apps.</p>
    <p><a href="/2/oauth-best-practice/">Read more: Security Best Current Practice &rarr;</a></p>

  </div>
</div>

<?php require('../../includes/_footer.php'); ?>
