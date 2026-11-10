<?php
$page_title = "Security of Cross-Device Flows — OAuth 2.0";
$page_section = "";
$page_meta_description = "RFC 10027 describes the threats against cross-device flows such as the Device Authorization Grant, with mitigations and protocol selection guidance.";
require('../../../includes/_header.php');
?>
<div class="container">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/2/">OAuth 2.0</a></li>
      <li class="breadcrumb-item active">Security of Cross-Device Flows</li>
    </ol>
  </nav>

  <h2>Best Current Practice for Security of Cross-Device Flows</h2>

  <div class="spec-meta">
    <a href="https://www.rfc-editor.org/rfc/rfc10027" class="rfc-badge">RFC 10027</a>
    <span class="spec-status spec-status--published">Published</span>
    <a href="https://www.rfc-editor.org/rfc/rfc10027" class="rfc">rfc-editor.org/rfc/rfc10027</a>
  </div>

  <p class="spec-lede">Cross-device flows let a user start on one device and approve on another, for example by scanning a QR code on a TV with their phone, typing in a short code, or accepting a push notification. This Best Current Practice describes how attackers exploit these flows and what implementers can do about it.</p>

  <div class="spec-when">
    <strong>When to use this</strong>
    Read this if you implement or deploy the <a href="/2/grant-types/device-code/">Device Authorization Grant</a>, CIBA, or any other flow where the user carries a code or approval between two devices. It requires a risk assessment before deploying a cross-device flow, and says to avoid these flows when the risks can't be mitigated well enough.
  </div>

  <p>In a cross-device flow, the two devices have no way to authenticate each other. The QR code, user code or push notification travels over an unauthenticated channel, and it is left to the user to judge whether the request in front of them is the one they started. Attackers exploit this with phishing techniques: they start a flow themselves, then persuade the user to scan the code or approve the request. The document calls this Cross-Device Consent Phishing. Because the attacker never needs the user's credentials, these attacks work even when multi-factor authentication is in use.</p>

  <p>The same weakness applies to flows that move an existing session to a second device, such as onboarding a mobile app from a logged-in browser. There the attacker tricks the user into handing over the session transfer code, which the document calls Cross-Device Session Phishing.</p>

  <h3>Best practices</h3>
  <ul>
    <li>Perform a risk assessment before implementing a cross-device flow, weighing the phishing risk against the benefit to users.</li>
    <li>Avoid cross-device flows if the risks cannot be sufficiently mitigated.</li>
    <li>Follow the protocol selection guidance. The Device Authorization Grant is the most exposed and should be used only when device constraints rule out the alternatives, and not for sensitive or high-value resources. CIBA is less susceptible, and FIDO2/WebAuthn cross-device authentication proves proximity between the devices.</li>
    <li>Select mitigations that address the risks identified, such as short-lived and one-time codes, limited scopes, short-lived or sender-constrained tokens, rate limits, trusted devices and networks, and clear user experience.</li>
    <li>Include proximity between the two devices as one of the mitigations where possible.</li>
  </ul>

  <p>The guidance applies to the Device Authorization Grant as well as CIBA, Self-Issued OpenID Provider v2, OpenID for Verifiable Presentations, the Pre-Authorized Code Flow in OpenID for Verifiable Credential Issuance, and other protocols that rely on the user to authenticate the channel between devices. The document also summarizes the results of formal analysis of these protocols.</p>

  <h3>Related specs</h3>
  <ul>
    <li><a href="/2/grant-types/device-code/">Device Authorization Grant</a> <a href="https://www.rfc-editor.org/rfc/rfc8628" class="rfc-badge">RFC 8628</a> — the most widely used cross-device flow</li>
    <li><a href="/2/oauth-best-practice/">OAuth 2.0 Security Best Current Practice</a> <a href="https://www.rfc-editor.org/rfc/rfc9700" class="rfc-badge">RFC 9700</a> — general security guidance for OAuth 2.0</li>
    <li><a href="/2/dpop/">DPoP</a> <a href="https://www.rfc-editor.org/rfc/rfc9449" class="rfc-badge">RFC 9449</a> and <a href="/2/mtls/">Mutual TLS</a> <a href="https://www.rfc-editor.org/rfc/rfc8705" class="rfc-badge">RFC 8705</a> — sender-constrained tokens, one of the listed mitigations</li>
    <li><a href="https://openid.net/specs/openid-client-initiated-backchannel-authentication-core-1_0.html">OpenID Connect Client-Initiated Backchannel Authentication (CIBA)</a></li>
  </ul>

</div>
<?php require('../../../includes/_footer.php'); ?>
