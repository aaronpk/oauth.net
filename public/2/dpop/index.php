<?php
$page_title = "DPoP — OAuth 2.0";
$page_section = "";
$page_meta_description = "DPoP (Demonstrating Proof of Possession) cryptographically binds access tokens to a client's private key, preventing stolen tokens from being used by attackers.";
require('../../../includes/_header.php');
?>
<div class="container">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/2/">OAuth 2.0</a></li>
      <li class="breadcrumb-item active">DPoP</li>
    </ol>
  </nav>

  <h2>DPoP — Demonstrating Proof of Possession</h2>

  <div class="spec-meta">
    <a href="https://www.rfc-editor.org/rfc/rfc9449" class="rfc-badge">RFC 9449</a>
    <span class="spec-status spec-status--published">Published</span>
    <a href="https://www.rfc-editor.org/rfc/rfc9449" class="rfc">rfc-editor.org/rfc/rfc9449</a>
  </div>

  <p class="spec-lede">DPoP cryptographically binds an access token to the client's private key. Even if the token is stolen, an attacker can't use it without the corresponding key.</p>

  <div class="spec-when">
    <strong>When to use this</strong>
    Use DPoP when you need sender-constrained tokens — typically in high-security deployments like financial APIs or when implementing <a href="/fapi/">FAPI 2.0</a>. DPoP is required or recommended by FAPI 2.0 and provides stronger security than plain Bearer Tokens without requiring mutual TLS infrastructure. It works well for both browser-based and native app clients.
  </div>

  <p>DPoP works by having the client generate an asymmetric key pair and send a signed JWT proof with each request. The authorization server binds the issued access token to the public key. The resource server verifies the proof on each request, ensuring only the client with the matching private key can use the token.</p>

  <h3>See also</h3>
  <ul>
    <li><a href="/2/bearer-tokens/">Bearer Tokens</a> — the simpler alternative (no key binding)</li>
    <li><a href="/2/mtls/">Mutual TLS</a> <a href="https://www.rfc-editor.org/rfc/rfc8705" class="rfc-badge">RFC 8705</a> — certificate-based sender-constraining</li>
  </ul>

</div>
<?php require('../../../includes/_footer.php'); ?>
