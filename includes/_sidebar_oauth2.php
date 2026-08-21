<?php
function sidebar_active($path) {
  $uri = $_SERVER['REQUEST_URI'];
  // Exact match (with or without trailing slash)
  return rtrim($uri, '/') === rtrim($path, '/') ? ' active' : '';
}
?>
<nav class="oauth2-sidebar-nav">

  <a href="/2/" class="sidebar-home">&larr; OAuth 2.0</a>

  <div class="sidebar-section">
    <div class="sidebar-heading">Core</div>
    <ul>
      <li><a href="/2/grant-types/"<?= sidebar_active('/2/grant-types/') ?>>Grant Types</a></li>
      <li><a href="/2/access-tokens/"<?= sidebar_active('/2/access-tokens/') ?>>Access Tokens</a></li>
      <li><a href="/2/refresh-tokens/"<?= sidebar_active('/2/refresh-tokens/') ?>>Refresh Tokens</a></li>
      <li><a href="/2/scope/"<?= sidebar_active('/2/scope/') ?>>Scope</a></li>
      <li><a href="/2/client-types/"<?= sidebar_active('/2/client-types/') ?>>Client Types</a></li>
      <li><a href="/2/client-authentication/"<?= sidebar_active('/2/client-authentication/') ?>>Client Authentication</a></li>
      <li><a href="/2/bearer-tokens/"<?= sidebar_active('/2/bearer-tokens/') ?>>Bearer Tokens</a></li>
    </ul>
  </div>

  <div class="sidebar-section">
    <div class="sidebar-heading">Grant Types</div>
    <ul>
      <li><a href="/2/grant-types/authorization-code/"<?= sidebar_active('/2/grant-types/authorization-code/') ?>>Authorization Code</a></li>
      <li><a href="/2/pkce/"<?= sidebar_active('/2/pkce/') ?>>PKCE</a></li>
      <li><a href="/2/grant-types/client-credentials/"<?= sidebar_active('/2/grant-types/client-credentials/') ?>>Client Credentials</a></li>
      <li><a href="/2/grant-types/device-code/"<?= sidebar_active('/2/grant-types/device-code/') ?>>Device Code</a></li>
      <li><a href="/2/grant-types/refresh-token/"<?= sidebar_active('/2/grant-types/refresh-token/') ?>>Refresh Token</a></li>
    </ul>
  </div>

  <div class="sidebar-section">
    <div class="sidebar-heading">Tokens</div>
    <ul>
      <li><a href="/2/jwt-access-tokens/"<?= sidebar_active('/2/jwt-access-tokens/') ?>>JWT Access Tokens</a></li>
      <li><a href="/2/token-introspection/"<?= sidebar_active('/2/token-introspection/') ?>>Token Introspection</a></li>
      <li><a href="/2/token-revocation/"<?= sidebar_active('/2/token-revocation/') ?>>Token Revocation</a></li>
      <li><a href="/2/token-exchange/"<?= sidebar_active('/2/token-exchange/') ?>>Token Exchange</a></li>
      <li><a href="/2/jwt/"<?= sidebar_active('/2/jwt/') ?>>JSON Web Token</a></li>
    </ul>
  </div>

  <div class="sidebar-section">
    <div class="sidebar-heading">Security</div>
    <ul>
      <li><a href="/2/oauth-best-practice/"<?= sidebar_active('/2/oauth-best-practice/') ?>>Security BCP</a></li>
      <li><a href="/2/security-considerations/"<?= sidebar_active('/2/security-considerations/') ?>>Threat Model</a></li>
      <li><a href="/2/dpop/"<?= sidebar_active('/2/dpop/') ?>>DPoP</a></li>
      <li><a href="/2/mtls/"<?= sidebar_active('/2/mtls/') ?>>Mutual TLS</a></li>
      <li><a href="/2/pushed-authorization-requests/"<?= sidebar_active('/2/pushed-authorization-requests/') ?>>PAR</a></li>
    </ul>
  </div>

  <div class="sidebar-section">
    <div class="sidebar-heading">App Types</div>
    <ul>
      <li><a href="/2/browser-based-apps/"<?= sidebar_active('/2/browser-based-apps/') ?>>Browser-Based Apps</a></li>
      <li><a href="/2/native-apps/"<?= sidebar_active('/2/native-apps/') ?>>Native Apps</a></li>
      <li><a href="/2/device-flow/"<?= sidebar_active('/2/device-flow/') ?>>Device Flow</a></li>
    </ul>
  </div>

  <div class="sidebar-section">
    <div class="sidebar-heading">Discovery</div>
    <ul>
      <li><a href="/2/authorization-server-metadata/"<?= sidebar_active('/2/authorization-server-metadata/') ?>>Server Metadata</a></li>
      <li><a href="/2/dynamic-client-registration/"<?= sidebar_active('/2/dynamic-client-registration/') ?>>Dynamic Registration</a></li>
    </ul>
  </div>

</nav>
