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
    <p>OAuth 2.0 handles authorization — granting scoped access to APIs and resources. OpenID Connect (OIDC) is built on top of OAuth 2.0 and adds user authentication: it defines how an application can find out who the user is and returns a signed ID Token alongside the access token. When you "Log in with Google," that is OpenID Connect, not raw OAuth.</p>
    <p><a href="/id-tokens-vs-access-tokens/">Read more: ID Tokens vs Access Tokens &rarr;</a></p>

    <h4 id="oauth-21">What is OAuth 2.1?</h4>
    <p>OAuth 2.1 is a consolidation of OAuth 2.0 and its security best practice extensions into a single document. It removes deprecated flows (Implicit, Password grant), mandates PKCE for all Authorization Code flows, and tightens redirect URI matching rules. Compliant OAuth 2.0 implementations require only minor changes to meet OAuth 2.1.</p>
    <p><a href="/2.1/">Read more: OAuth 2.1 &rarr;</a></p>

    <h4 id="oauth-1-vs-2">What is the difference between OAuth 1.0 and OAuth 2.0?</h4>
    <p>OAuth 2.0 is not backward-compatible with OAuth 1.0. OAuth 1.0 required cryptographic signing of every request using a shared secret; OAuth 2.0 relies on TLS for transport security and uses bearer tokens, making it simpler to implement. OAuth 1.0 is considered legacy — new implementations should use OAuth 2.0.</p>
    <p><a href="/1/">Read more: OAuth 1.0 &rarr;</a></p>

    <h3>Choosing the Right Approach</h3>

    <h4 id="which-grant-type">How do I choose which grant type to use?</h4>
    <p>[Placeholder: short decision guide. If a user is present and the app runs in a browser or native app, use Authorization Code + PKCE. Server-to-server with no user: Client Credentials. Device with no browser: Device Authorization Grant. Implicit and Password grants are deprecated and should not be used in new apps.]</p>
    <p><a href="/2/grant-types/">Read more: OAuth Grant Types &rarr;</a></p>

    <h4 id="do-i-need-oauth">Do I need OAuth if I own both the client and the API?</h4>
    <p>[Placeholder: answer explaining that OAuth becomes most valuable when delegating access to third parties or supporting multiple independent clients. For purely first-party, single-client scenarios, session cookies or API keys may be simpler. But even first-party apps benefit from OAuth's short-lived scoped tokens and standardized revocation.]</p>

    <h4 id="password-grant-deprecated">Why is the Password grant deprecated?</h4>
    <p>The Password grant (Resource Owner Password Credentials) requires users to give their credentials directly to the client application, bypassing the authorization server entirely. This prevents phishing-resistant flows, breaks multi-factor authentication, and means the client handles credentials it should never see. Authorization Code + PKCE is the correct replacement, even for first-party login UIs.</p>
    <p><a href="/2/grant-types/password/">Read more: Password Grant &rarr;</a> &bull; <a href="/2/pkce/">PKCE &rarr;</a></p>

    <h3>Security and Token Handling</h3>

    <h4 id="client-secret-in-mobile-app">Can I use a client secret in a mobile or single-page app?</h4>
    <p>No. Mobile apps and SPAs are <em>public clients</em> — they cannot keep a secret confidential because their code and storage are accessible to users and attackers. A client secret embedded in an app binary or JavaScript bundle is not a secret. Public clients must use PKCE instead to secure the authorization code exchange.</p>
    <p><a href="/2/client-types/">Read more: Client Types &rarr;</a> &bull; <a href="/2/pkce/">PKCE &rarr;</a></p>

    <h4 id="token-storage-browser">Where should I store tokens in a browser-based app?</h4>
    <p>[Placeholder: tokens in localStorage/sessionStorage are accessible to JavaScript and vulnerable to XSS. Recommended pattern is a backend-for-frontend (BFF) that holds tokens server-side and communicates with the SPA via HttpOnly session cookies. Links to browser-based apps guidance.]</p>
    <p><a href="/2/browser-based-apps/">Read more: Browser-Based Apps &rarr;</a></p>

    <h4 id="jwt-vs-opaque">Should access tokens be JWTs or opaque strings?</h4>
    <p>[Placeholder: both are valid with different tradeoffs. JWTs allow resource servers to validate locally without a network call (better performance) but cannot be truly revoked before expiry. Opaque tokens require calling the introspection endpoint to validate but can be revoked immediately. The right choice depends on your revocation and scalability requirements.]</p>
    <p><a href="/2/jwt-access-tokens/">JWT Access Tokens &rarr;</a> &bull; <a href="/2/token-introspection/">Token Introspection &rarr;</a> &bull; <a href="/2/token-revocation/">Token Revocation &rarr;</a></p>

    <h4 id="state-parameter">What is the <code>state</code> parameter and is it required?</h4>
    <p>[Placeholder: the state parameter is a random unguessable value generated by the client before the redirect and verified on return. Its primary purpose is CSRF protection — without it an attacker can initiate an authorization flow and trick a user into completing it. PKCE addresses some of the same concerns but state is still recommended for session binding. In practice: always use it.]</p>
    <p><a href="/2/pkce/">Read more: PKCE &rarr;</a></p>

    <h3>Implementation</h3>

    <h4 id="expires-in-vs-expires-at">Why does OAuth use <code>expires_in</code> instead of <code>expires_at</code>?</h4>
    <p>Client clocks are often wrong, so a relative offset in seconds is more reliable than an absolute timestamp that depends on accurate local time. Clients should record the current time when they receive a token and compute the expiry from <code>expires_in</code> rather than relying on the server's clock. You can read the previous discussion in <a href="https://mailarchive.ietf.org/arch/msg/oauth/FDKZDeAza5zsnzTMCeBeXbQAlm4/">the mailing list archives</a>.</p>

    <h4 id="redirect-uri-matching">Why does the redirect URI need to match exactly?</h4>
    <p>[Placeholder: the redirect URI is where the authorization server sends the authorization code after user consent. Exact matching is a critical security control — if an attacker can register or predict a slightly different URI, they can intercept authorization codes. Wildcards and partial matches are dangerous. OAuth 2.1 requires exact matching.]</p>
    <p><a href="/2/oauth-best-practice/">Read more: Security Best Current Practice &rarr;</a></p>

  </div>
</div>

<?php require('../../includes/_footer.php'); ?>
