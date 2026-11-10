<?php
$page_title = "Protected Resource Metadata — OAuth 2.0";
$page_section = "";
$page_meta_description = "RFC 9728 defines a metadata document that lets clients discover which authorization servers a protected resource trusts and how to access it.";
require('../../../includes/_header.php');
?>
<div class="container">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/2/">OAuth 2.0</a></li>
      <li class="breadcrumb-item active">Protected Resource Metadata</li>
    </ol>
  </nav>

  <h2>Protected Resource Metadata</h2>

  <div class="spec-meta">
    <a href="https://www.rfc-editor.org/rfc/rfc9728" class="rfc-badge">RFC 9728</a>
    <span class="spec-status spec-status--published">Published</span>
    <a href="https://www.rfc-editor.org/rfc/rfc9728" class="rfc">rfc-editor.org/rfc/rfc9728</a>
  </div>

  <p class="spec-lede">Protected Resource Metadata defines a standard JSON document that an API publishes to describe itself to OAuth clients: which authorization servers it accepts tokens from, which scopes it uses, and how tokens should be presented. It lets a client start from nothing but the URL of an API and discover everything it needs to get an access token.</p>

  <div class="spec-when">
    <strong>When to use this</strong>
    Publish a metadata document if you operate an API that clients can't be configured for in advance, for example when the same client software has to work with many independently deployed resource servers, or when your API can be paired with different authorization servers. The <a href="https://modelcontextprotocol.io/specification/latest/basic/authorization">Model Context Protocol</a> requires it, so an MCP client can find the right authorization server for any MCP server it's given.
  </div>

  <p>The metadata document is a JSON object at a well-known URL derived from the resource identifier, <code>/.well-known/oauth-protected-resource</code>. For a resource with a path, the well-known string goes between the host and the path. The only required field is <code>resource</code>, which must match the resource identifier the client used to build the URL. The <code>authorization_servers</code> field lists the issuers the resource trusts, and the client then fetches each issuer's <a href="/2/authorization-server-metadata/">Authorization Server Metadata</a> to find its endpoints. Other fields include <code>scopes_supported</code>, <code>bearer_methods_supported</code>, <code>jwks_uri</code>, and flags for <a href="/2/dpop/">DPoP</a> and <a href="/2/mtls/">Mutual TLS</a> bound tokens.</p>

  <p>The spec also defines a <code>resource_metadata</code> parameter for the <code>WWW-Authenticate</code> response header. When a client makes a request without a valid token, the resource server's <code>401</code> response can point to its metadata document, so the client doesn't have to guess the URL:</p>

  <pre><code>HTTP/1.1 401 Unauthorized
WWW-Authenticate: Bearer resource_metadata=
  "https://resource.example.com/.well-known/oauth-protected-resource"</code></pre>

  <p>The client fetches that URL and gets back a document such as:</p>

  <pre><code>{
  "resource": "https://resource.example.com",
  "authorization_servers": ["https://as.example.com"],
  "scopes_supported": ["profile", "email"],
  "bearer_methods_supported": ["header"]
}</code></pre>

  <h3>Related specs</h3>
  <ul>
    <li><a href="/2/authorization-server-metadata/">Authorization Server Metadata</a> <a href="https://www.rfc-editor.org/rfc/rfc8414" class="rfc-badge">RFC 8414</a> — the next step, discovering the authorization server's endpoints</li>
    <li><a href="https://www.rfc-editor.org/rfc/rfc8707">Resource Indicators</a> <a href="https://www.rfc-editor.org/rfc/rfc8707" class="rfc-badge">RFC 8707</a> — the <code>resource</code> parameter a client sends so the token is issued for this resource</li>
    <li><a href="/2/client-id-metadata-document/">Client ID Metadata Document</a> — lets the client identify itself to an authorization server it has just discovered, with no registration step</li>
    <li><a href="/2/bearer-tokens/">Bearer Tokens</a> <a href="https://www.rfc-editor.org/rfc/rfc6750" class="rfc-badge">RFC 6750</a> — defines the <code>WWW-Authenticate</code> challenge this spec extends</li>
  </ul>

</div>
<?php require('../../../includes/_footer.php'); ?>
