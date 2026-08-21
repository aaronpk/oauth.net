<?php
$page_title = "Implicit Flow — OAuth 2.0 (Deprecated)";
$page_section = "";
$page_meta_description = "The OAuth 2.0 Implicit flow is deprecated. Use Authorization Code + PKCE instead.";
require('../../../../includes/_header.php');
?>
<div class="container">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/2/">OAuth 2.0</a></li>
      <li class="breadcrumb-item"><a href="/2/grant-types/">Grant Types</a></li>
      <li class="breadcrumb-item active">Implicit Flow</li>
    </ol>
  </nav>

  <h2>Implicit Flow</h2>

  <div class="spec-meta">
    <a href="https://www.rfc-editor.org/rfc/rfc6749#section-1.3.2" class="rfc-badge">RFC 6749 §1.3.2</a>
    <span class="spec-status spec-status--deprecated">Deprecated</span>
  </div>

  <p class="spec-lede">The Implicit flow was designed for browser-based apps and returned the access token directly in the URL fragment — skipping the authorization code exchange step. It is now deprecated and should not be used in new applications.</p>

  <div class="banner">
    <strong>Do not use the Implicit flow in new applications.</strong>
    The <a href="/2/oauth-best-practice/">OAuth 2.0 Security Best Current Practice</a> recommends against it, and it is removed from <a href="/2.1/">OAuth 2.1</a>.
    Use <a href="/2/grant-types/authorization-code/">Authorization Code</a> + <a href="/2/pkce/">PKCE</a> instead — it works for SPAs, mobile apps, and any other public client.
  </div>

  <p>The Implicit flow was designed when CORS was not widely available and developers needed a way to get tokens entirely in the browser. By returning the access token directly in the URL hash (<code>#access_token=...</code>), it skipped the server-side token exchange. This introduced several problems: tokens in URL fragments are exposed to the browser history, referrer headers, and any JavaScript on the page. There is also no way to authenticate the client or verify that the token was delivered to the intended recipient.</p>

  <p><a href="/2/pkce/">PKCE</a> solves the original problem the Implicit flow was designed for — protecting public clients — without any of those risks. All modern browsers support the CORS requests needed for the Authorization Code token exchange, making the Implicit flow unnecessary.</p>

  <h3>Migration: what to use instead</h3>
  <ul>
    <li><strong>SPA / browser app:</strong> <a href="/2/grant-types/authorization-code/">Authorization Code</a> + <a href="/2/pkce/">PKCE</a> — see <a href="/2/browser-based-apps/">Browser-Based Apps</a> guidance</li>
    <li><strong>Mobile / native app:</strong> <a href="/2/grant-types/authorization-code/">Authorization Code</a> + <a href="/2/pkce/">PKCE</a> — see <a href="/2/native-apps/">Native Apps</a> guidance</li>
  </ul>

  <h3>More resources</h3>
  <ul>
    <li><a href="https://www.youtube.com/watch?v=CHzERullHe8">What's Going On with the Implicit Flow?</a> — video by Aaron Parecki</li>
    <li><a href="https://developer.okta.com/blog/2019/05/01/is-the-oauth-implicit-flow-dead">Is the OAuth 2.0 Implicit Flow Dead?</a> (developer.okta.com)</li>
    <li><a href="https://medium.com/@torsten_lodderstedt/why-you-should-stop-using-the-oauth-implicit-grant-2436ced1c926">Why you should stop using the OAuth implicit grant</a> (Torsten Lodderstedt)</li>
    <li><a href="https://www.oauth.com/playground/implicit.html">Implicit Grant on the OAuth 2.0 Playground</a></li>
  </ul>

</div>
<?php require('../../../../includes/_footer.php'); ?>
