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

    <h3>Implementations</h3>
    <ul>
      <li><a href="https://stytch.com/blog/oauth-client-id-metadata-mcp/">Stytch</a></li>
      <li><a href="https://github.com/tanish111/cimd-local-oauth-server">Local Authorization Server for Testing</a></li>
      <li><a href="https://workos.com/changelog/client-id-metadata-support-for-mcp-auth">WorkOS</a></li>
      <li><a href="https://docs.scalekit.com/authenticate/mcp/quickstart/">Scalekit</a></li>
      <li><a href="https://auth0.com/ai/docs/mcp/guides/registering-your-mcp-client-application">Auth0</a> (coming soon)</li>
    </ul>

    <h3>Testing Tools</h3>
    <ul>
      <li><a href="https://client.dev/">client.dev</a></li>
      <li><a href="https://example-app.com/client">example-app.com/client</a></li>
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
