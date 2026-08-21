<?php
function section_open(array $prefixes): string {
  $uri = $_SERVER['REQUEST_URI'];
  foreach ($prefixes as $prefix) {
    if (strpos($uri, $prefix) === 0) return ' open';
  }
  return '';
}
function sidebar_active(string $path): string {
  $uri = rtrim($_SERVER['REQUEST_URI'], '/');
  return $uri === rtrim($path, '/') ? ' active' : '';
}
$uri = $_SERVER['REQUEST_URI'];
?>
<nav class="site-sidebar-nav" aria-label="Site navigation">

  <a href="/" class="sidebar-link<?= $uri === '/' ? ' active' : '' ?>">Home</a>
  <a href="/getting-started/" class="sidebar-link<?= nav_active('/getting-started') ?>">Getting Started</a>

  <span class="sidebar-divider">OAuth 2.0</span>

  <a href="/2/" class="sidebar-link<?= sidebar_active('/2/') ?>">OAuth 2.0 Overview</a>

  <details<?= section_open(['/2/access-tokens', '/2/refresh-tokens', '/2/scope', '/2/client-types', '/2/client-authentication', '/2/bearer-tokens']) ?>>
    <summary class="sidebar-summary">Core Concepts</summary>
    <ul class="sidebar-sub">
      <li><a href="/2/access-tokens/" class="sidebar-sublink<?= sidebar_active('/2/access-tokens/') ?>">Access Tokens</a></li>
      <li><a href="/2/refresh-tokens/" class="sidebar-sublink<?= sidebar_active('/2/refresh-tokens/') ?>">Refresh Tokens</a></li>
      <li><a href="/2/scope/" class="sidebar-sublink<?= sidebar_active('/2/scope/') ?>">Scope</a></li>
      <li><a href="/2/client-types/" class="sidebar-sublink<?= sidebar_active('/2/client-types/') ?>">Client Types</a></li>
      <li><a href="/2/client-authentication/" class="sidebar-sublink<?= sidebar_active('/2/client-authentication/') ?>">Client Authentication</a></li>
      <li><a href="/2/bearer-tokens/" class="sidebar-sublink<?= sidebar_active('/2/bearer-tokens/') ?>">Bearer Tokens</a></li>
    </ul>
  </details>

  <details<?= section_open(['/2/grant-types', '/2/pkce']) ?>>
    <summary class="sidebar-summary">Grant Types</summary>
    <ul class="sidebar-sub">
      <li><a href="/2/grant-types/" class="sidebar-sublink<?= sidebar_active('/2/grant-types/') ?>">Overview</a></li>
      <li><a href="/2/grant-types/authorization-code/" class="sidebar-sublink<?= sidebar_active('/2/grant-types/authorization-code/') ?>">Authorization Code</a></li>
      <li><a href="/2/pkce/" class="sidebar-sublink<?= sidebar_active('/2/pkce/') ?>">PKCE</a></li>
      <li><a href="/2/grant-types/client-credentials/" class="sidebar-sublink<?= sidebar_active('/2/grant-types/client-credentials/') ?>">Client Credentials</a></li>
      <li><a href="/2/grant-types/device-code/" class="sidebar-sublink<?= sidebar_active('/2/grant-types/device-code/') ?>">Device Code</a></li>
      <li><a href="/2/grant-types/refresh-token/" class="sidebar-sublink<?= sidebar_active('/2/grant-types/refresh-token/') ?>">Refresh Token</a></li>
      <li><a href="/2/grant-types/implicit/" class="sidebar-sublink<?= sidebar_active('/2/grant-types/implicit/') ?>"><span class="sidebar-deprecated">Legacy</span>Implicit</a></li>
      <li><a href="/2/grant-types/password/" class="sidebar-sublink<?= sidebar_active('/2/grant-types/password/') ?>"><span class="sidebar-deprecated">Legacy</span>Password</a></li>
    </ul>
  </details>

  <details<?= section_open(['/2/jwt', '/2/token-']) ?>>
    <summary class="sidebar-summary">Tokens &amp; Keys</summary>
    <ul class="sidebar-sub">
      <li><a href="/2/jwt-access-tokens/" class="sidebar-sublink<?= sidebar_active('/2/jwt-access-tokens/') ?>">JWT Access Tokens</a></li>
      <li><a href="/2/token-introspection/" class="sidebar-sublink<?= sidebar_active('/2/token-introspection/') ?>">Token Introspection</a></li>
      <li><a href="/2/token-revocation/" class="sidebar-sublink<?= sidebar_active('/2/token-revocation/') ?>">Token Revocation</a></li>
      <li><a href="/2/token-exchange/" class="sidebar-sublink<?= sidebar_active('/2/token-exchange/') ?>">Token Exchange</a></li>
      <li><a href="/2/jwt/" class="sidebar-sublink<?= sidebar_active('/2/jwt/') ?>">JSON Web Token</a></li>
    </ul>
  </details>

  <details<?= section_open(['/2/oauth-best-practice', '/2/security-considerations', '/2/dpop', '/2/mtls', '/2/pushed-authorization-requests']) ?>>
    <summary class="sidebar-summary">Security</summary>
    <ul class="sidebar-sub">
      <li><a href="/2/oauth-best-practice/" class="sidebar-sublink<?= sidebar_active('/2/oauth-best-practice/') ?>">Security BCP</a></li>
      <li><a href="/2/security-considerations/" class="sidebar-sublink<?= sidebar_active('/2/security-considerations/') ?>">Threat Model</a></li>
      <li><a href="/2/dpop/" class="sidebar-sublink<?= sidebar_active('/2/dpop/') ?>">DPoP</a></li>
      <li><a href="/2/mtls/" class="sidebar-sublink<?= sidebar_active('/2/mtls/') ?>">Mutual TLS</a></li>
      <li><a href="/2/pushed-authorization-requests/" class="sidebar-sublink<?= sidebar_active('/2/pushed-authorization-requests/') ?>">PAR</a></li>
    </ul>
  </details>

  <details<?= section_open(['/2/browser-based-apps', '/2/native-apps', '/2/device-flow']) ?>>
    <summary class="sidebar-summary">App Types</summary>
    <ul class="sidebar-sub">
      <li><a href="/2/browser-based-apps/" class="sidebar-sublink<?= sidebar_active('/2/browser-based-apps/') ?>">Browser-Based Apps</a></li>
      <li><a href="/2/native-apps/" class="sidebar-sublink<?= sidebar_active('/2/native-apps/') ?>">Native Apps</a></li>
      <li><a href="/2/device-flow/" class="sidebar-sublink<?= sidebar_active('/2/device-flow/') ?>">Device Flow</a></li>
    </ul>
  </details>

  <details<?= section_open(['/2/authorization-server-metadata', '/2/dynamic-client-registration', '/2/dynamic-client-management', '/2/client-id-metadata-document']) ?>>
    <summary class="sidebar-summary">Discovery</summary>
    <ul class="sidebar-sub">
      <li><a href="/2/authorization-server-metadata/" class="sidebar-sublink<?= sidebar_active('/2/authorization-server-metadata/') ?>">Server Metadata</a></li>
      <li><a href="/2/dynamic-client-registration/" class="sidebar-sublink<?= sidebar_active('/2/dynamic-client-registration/') ?>">Dynamic Registration</a></li>
      <li><a href="/2/dynamic-client-management/" class="sidebar-sublink<?= sidebar_active('/2/dynamic-client-management/') ?>">Registration Management</a></li>
    </ul>
  </details>

  <a href="/2.1/" class="sidebar-link<?= nav_active('/2.1') ?>">OAuth 2.1</a>

  <span class="sidebar-divider">Reference</span>

  <a href="/specs/" class="sidebar-link<?= nav_active('/specs') ?>">All Specs</a>
  <a href="/code/" class="sidebar-link<?= nav_active('/code') ?>">Code &amp; Libraries</a>
  <a href="/security/" class="sidebar-link<?= nav_active('/security') ?>">Security</a>

  <span class="sidebar-divider">Learn</span>

  <a href="/articles/" class="sidebar-link<?= nav_active('/articles') ?>">Articles</a>
  <a href="/videos/" class="sidebar-link<?= nav_active('/videos') ?>">Videos</a>
  <a href="/books/" class="sidebar-link<?= nav_active('/books') ?>">Books</a>
  <a href="https://events.oauth.net/" class="sidebar-link">Events</a>

  <span class="sidebar-divider">About</span>

  <a href="/faq/" class="sidebar-link<?= nav_active('/faq') ?>">FAQ</a>
  <a href="/consulting/" class="sidebar-link<?= nav_active('/consulting') ?>">Consulting</a>
  <a href="/about/credits/" class="sidebar-link<?= nav_active('/about/credits/') ?>">Credits</a>
  <a href="/about/community/" class="sidebar-link<?= sidebar_active('/about/community/') ?>">Community</a>
  <?php /* 
  <a href="/map/" class="sidebar-link<?= nav_active('/map') ?>">Map</a>
  */ ?>

</nav>
