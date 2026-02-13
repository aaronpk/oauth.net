<?php
$page_title = "OAuth Client ID Metadata Document";
$page_section = "";
$page_secondary = "";
$page_meta_description = "OAuth Client ID Metadata Document";
require('../../../includes/_header.php');
?>
<div class="container">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/2/">OAuth 2.0</a></li>
      <li class="breadcrumb-item active">Client ID Metadata Document</li>
    </ol>
  </nav>
  <div>

    <h2>OAuth Client ID Metadata Document</h2>

    <p><a href="https://datatracker.ietf.org/doc/draft-ietf-oauth-client-id-metadata-document/" class="rfc">datatracker.ietf.org/doc/draft-ietf-oauth-client-id-metadata-document</a></p>

    <p>The <a href="https://datatracker.ietf.org/doc/draft-ietf-oauth-client-id-metadata-document/">Client ID Metadata Document</a> extension defines a mechanism for an OAuth client to host its metadata at a URL to be able to work with authorization servers without prior registration.</p>

    <style>
      .grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
      }

    </style>

    <h3>Implementations</h3>
    <div class="grid">
      <div class="column">
        <h4>OAuth Servers</h4>
        <ul>
          <li><a href="https://auth0.com/ai/docs/mcp/guides/registering-your-mcp-client-application">Auth0</a> (coming soon)</li>
          <li><a href="https://www.authlete.com/developers/cimd/">Authlete</a></li>
          <li><a href="https://www.descope.com/blog/post/cimd-support">Descope</a></li>
          <li><a href="https://docs.scalekit.com/authenticate/mcp/quickstart/">Scalekit</a></li>
          <li><a href="https://stytch.com/blog/oauth-client-id-metadata-mcp/">Stytch</a></li>
          <li><a href="https://workos.com/changelog/client-id-metadata-support-for-mcp-auth">WorkOS</a></li>
        </ul>
      </div>
      <div class="column">
        <h4>Clients</h4>
        <ul>
          <li><a href="https://code.visualstudio.com/">VSCode</a> (<a href="https://vscode.dev/oauth/client-metadata.json">↗</a>)</li>
          <li><a href="https://www.mcpjam.com/">MCPJam</a> (<a href="https://www.mcpjam.com/.well-known/oauth/client-metadata.json">↗</a>)</li>
          <li><a href="https://claude.ai/">Claude.ai</a> (<a href="https://claude.ai/">↗</a>)</li>
          <li><a href="https://indielogin.com/">IndieLogin</a> (<a href="https://indielogin.com/id">↗</a>)</li>
          <li><a href="https://webmention.io/">Webmention.io</a> (<a href="https://webmention.io/id">↗</a>)</li>
        </ul>

        <h4>Services</h4>
        <ul>
          <li><a href="https://docs.bsky.app/docs/advanced-guides/oauth-client">BlueSky</a></li>
        </ul>
      </div>
    </div>

    <h3>Testing Tools</h3>
    <ul>
      <li><a href="https://client.dev/">client.dev</a></li>
      <li><a href="https://example-app.com/client">example-app.com/client</a></li>
      <li><a href="https://github.com/tanish111/cimd-local-oauth-server">Local Authorization Server for Testing</a></li>
    </ul>
    
    <h3>More resources</h3>
    <ul>
      <li><a href="https://www.youtube.com/watch?v=DHf_95lNrj8">Identerati Office Hours - Episode 149.5: OAuth Client ID Metadata Document</a> (Oct 2025, youtube.com)</li>
      <li><a href="https://www.descope.com/learn/post/cimd">What is a Client ID Metadata Document (CIMD)?</a> (Oct 2025, descope.com)</li>
      <li><a href="https://blog.modelcontextprotocol.io/posts/client_registration/">Evolving OAuth Client Registration in the Model Context Protocol</a> (Aug 2025, modelcontextprotocol.io)</li>
      <li><a href="https://aaronparecki.com/2018/07/07/7/oauth-for-the-open-web">OAuth for the Open Web</a> (Jul 2018, aaronparecki.com)</li>
    </ul>

  </div>
</div>

<?php require('../../../includes/_footer.php'); ?>
