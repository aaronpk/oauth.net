<?php
$page_title = "FAPI 2.0";
$page_section = "";
$page_secondary = "";
$page_meta_description = "FAPI 2.0 is an API security profile based on the OAuth 2.0 framework suitable for protecting APIs in high-value scenarios.";

require('../../includes/_header.php');
?>

<div class="container">
  <div>

    <h2>FAPI 2.0</h2>

    <p>FAPI 2.0 is an API security profile based on the OAuth 2.0 framework suitable for protecting APIs in high-value scenarios.</p>

    <p>The core FAPI functionality is split into two documents, with a third that describes the attacker model</p>
    <ul>
      <li><a href="https://openid.net/specs/fapi-security-profile-2_0-final.html">FAPI 2.0 Security Profile</a> (Final)</li>
      <li><a href="https://openid.net/specs/fapi-attacker-model-2_0-final.html">FAPI 2.0 Attacker Model</a> (Final)</li>
      <li><a href="https://openid.bitbucket.io/fapi/fapi-2_0-message-signing.html">FAPI 2.0 Message Signing</a> (Draft)</li>
    </ul>

    <p>Specifications Referenced by FAPI</p>
    <ul>
      <li><a href="https://datatracker.ietf.org/doc/html/rfc6749">RFC 6749</a> - OAuth 2.0 Framework</li>
      <li><a href="https://datatracker.ietf.org/doc/html/rfc6750">RFC 6750</a> - OAuth 2.0 Bearer Token Usage</li>
      <li><a href="https://datatracker.ietf.org/doc/html/rfc7521">RFC 7521</a> - Assertion Framework for OAuth 2.0 Client Authentication and Authorization Grants</li>
      <li><a href="https://datatracker.ietf.org/doc/html/rfc7523">RFC 7523</a> - JWT Profile for OAuth 2.0 Client Authentication and Authorization Grants</li>
      <li><a href="https://datatracker.ietf.org/doc/html/rfc7636">RFC 7636</a> - Proof Key for Code Exchange</li>
      <li><a href="https://datatracker.ietf.org/doc/html/rfc7662">RFC 7662</a> - OAuth 2.0 Token Introspection</li>
      <li><a href="https://datatracker.ietf.org/doc/html/rfc8252">RFC 8252</a> - OAuth 2.0 for Native Apps BCP</li>
      <li><a href="https://datatracker.ietf.org/doc/html/rfc8414">RFC 8414</a> - OAuth 2.0 Authorization Server Metadata</li>
      <li><a href="https://datatracker.ietf.org/doc/html/rfc8705">RFC 8705</a> - Mutual TLS Client Authentication and Certificate-Bound Access Tokens</li>
      <li><a href="https://datatracker.ietf.org/doc/html/rfc8725">RFC 8725</a> - JSON Web Token Best Practices</li>
      <li><a href="https://datatracker.ietf.org/doc/html/rfc9101">RFC 9101</a> - JWT Secured Authorization Request (JAR)</li>
      <li><a href="https://datatracker.ietf.org/doc/html/rfc9126">RFC 9126</a> - Pushed Authorization Requests (PAR)</li>
      <li><a href="https://datatracker.ietf.org/doc/html/rfc9207">RFC 9207</a> - OAuth 2.0 Authorization Server Issuer Identification</li>
      <li><a href="https://datatracker.ietf.org/doc/html/rfc9449">RFC 9449</a> - DPoP: Demonstrating Proof-of-Possession at the Application Layer</li>
      <li><a href="https://datatracker.ietf.org/doc/html/rfc9421">RFC 9421</a> - HTTP Message Signatures</li>
      <li><a href="https://datatracker.ietf.org/doc/html/rfc9530">RFC 9530</a> - HTTP Digest Headers</li>
      <li><a href="https://datatracker.ietf.org/doc/html/rfc9700">RFC 9700</a> - Best Current Practice for OAuth 2.0 Security</li>
      <li><a href="https://datatracker.ietf.org/doc/html/rfc9701">RFC 9701</a> - JWT Response for OAuth Token Introspection</li>
      <li><a href="https://openid.net/specs/oauth-v2-jarm.html">JWT Secured Authorization Response Mode for OAuth 2.0 (JARM)</a></li>
    </ul>

    <p>More resources
      <ul>
        <li><a href="https://identityunlocked.auth0.com/public/49/Identity%2C-Unlocked.--bed7fada/d847cfb7">Exploring Financial-Grade API (FAPI) with Torsten</a> (Identity Unlocked Podcast)</li>
        <li><a href="https://www.linkedin.com/pulse/fapi-20-security-profile-simpler-yes-wait-compulsory-standardised-">FAPI 2.0: Security Profile (Simpler Security, Yes!)</a> (Raidiam)</li>
        <li><a href="https://openid.net/wg/fapi/specifications/">All OpenID FAPI Working Group Drafts</a></li>
      </ul>
    </p>

  </div>
</div>

<?php require('../../includes/_footer.php'); ?>
