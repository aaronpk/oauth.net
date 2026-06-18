<?php
$page_title = "Cross-App Access - OAuth 2.0";
$page_section = "";
$page_secondary = "";
$page_meta_description = "Cross-App Access - Identity Assertion Authorization Grant";
require('../../includes/_header.php');
?>
<div class="container">
  <div>

    <h2>Cross-App Access</h2>

    <p><a href="https://datatracker.ietf.org/doc/draft-ietf-oauth-identity-assertion-authz-grant/" class="rfc">datatracker.ietf.org/doc/draft-ietf-oauth-identity-assertion-authz-grant</a></p>

    <p>Cross-App Access (XAA), formally known as the "Identity Assertion Authorization Grant", is an extension of OAuth that enables an enterprise identity provider to manage the connection between two applications. It replaces the user's manual approval step with a token exchange to enable an application to request an access token for a resource server without any user interaction.</p>
    <p>Cross-App Access builds on <a href="https://datatracker.ietf.org/doc/draft-ietf-oauth-identity-chaining/">Identity and Authorization Chaining Across Domains</a> to further profile it for interoperable implementations in an enterprise setting. In particular, it defines the claims of the ID-JAG (Identity Assertion JWT Authorization Grant) that moves across domains.</p>

    <img src="xaa-flow-diagram.png" style="width: 100%">

    <h3>Implementations</h3>

    <div class="grid">
      <div class="column">
        <b>IdPs</b>
        <ul>
          <li><a href="https://www.okta.com/solutions/cross-app-access/">Okta</a> (early access)</li>
          <li><a href="https://techblog.lycorp.co.jp/ja/20260401a">Athenz</a> (beta)</li>
          <li><a href="https://github.com/keycloak/keycloak/issues/48818">Keycloak</a> (in progress)</li>
        </ul>
        <b>Clients</b>
        <ul>
          <li><a href="https://claude.com">Claude</a> (beta)</li>
          <li><a href="https://code.claude.com/docs/en/overview">Claude Code</a> (beta)</li>
          <li><a href="https://workos.com">WorkOS</a> (beta)</li>
          <li><a href="https://archestra.ai">Archestra</a></li>
        </ul>
        <b>Authorization Servers</b>
        <ul>
          <li><a href="https://stytch.com/docs/connected-apps/guides/cross-app-access">Stytch</a></li>
          <li><a href="https://auth0.com/docs/secure/call-apis-on-users-behalf/xaa">Auth0</a> (beta)</li>
          <li><a href="https://techblog.lycorp.co.jp/ja/20260401a">Athenz</a> (beta)</li>
          <li><a href="https://github.com/keycloak/keycloak/issues/43971">Keycloak</a> (in progress)</li>
          <li><a href="https://www.scalekit.com/blog/cross-app-access-agentic-auth-flows">Scalekit</a></li>
        </ul>
      </div>
      <div class="column">
        <b>Resource Apps</b>
        <ul>
          <li><a href="https://asana.com/">Asana</a></li>
          <li><a href="https://www.atlassian.com/">Atlassian</a></li>
          <li><a href="https://www.canva.com/">Canva</a></li>
          <li><a href="https://figma.com/">Figma</a></li>
          <li><a href="https://www.granola.ai/">Granola</a></li>
          <li><a href="https://linear.app/">Linear</a></li>
          <li><a href="https://supabase.com/">Supabase</a></li>
        </ul>
        <b>Test Tools</b>
        <ul>
          <li><a href="https://xaa.dev">xaa.dev</a> - a complete demo, and utility to test your Clients and Resource Apps</li>
          <li><a href="https://github.com/athenz-community/id-jag-the-hard-way">ID-JAG The Hard Way</a></li>
          <li><a href="https://motd.xaa.rocks">motd.xaa.rocks</a> - a sample API and MCP server that accepts any ID-JAG</li>
          <li><a href="https://client.xaa.rocks">client.xaa.rocks</a> - a sample XAA client that can be configured to any OIDC or SAML identity provider</li>
        </ul>
      </div>
    </div>

        
    <h3>Related Specs</h3>
    <ul>
      <li><a href="/2/token-exchange/">OAuth 2.0 Token Exchange (RFC 8693)</a> - used as the first step of Cross App Access</li>
      <li><a href="https://datatracker.ietf.org/doc/html/rfc7523">JWT Profile for OAuth 2.0 Client Authentication and Authorization Grants</a> - used as the second step of Cross App Access</li>
      <li><a href="https://datatracker.ietf.org/doc/draft-ietf-oauth-identity-chaining/">OAuth Identity and Authorization Chaining Across Domains</a> - the parent spec that Cross App Access profiles</li>
      <li><a href="https://modelcontextprotocol.io/extensions/auth/enterprise-managed-authorization">MCP Enterprise Managed Authorization</a> - an MCP-specific profile of Cross App Access</li>
    </ul>

    <h3>Videos</h3>
    <ul>
      <li><a href="https://www.youtube.com/watch?v=EmhRyw6xeT0">One Login to Rule Them All: Cross-App Access for MCP</a> — Garrett Galow, WorkOS</li>
      <li><a href="https://www.youtube.com/watch?v=HRrzzORvy84&list=PLjULwdJUtFdhIBhibLEogtK1XYCNaFyFl&index=87&pp=iAQB">Putting the Single Back in Single Sign-On - MCP Dev Summit</a> - Paul Carleton, Anthropic &amp; Max Gerber, Stytch</li>
    </ul>
    
    <h3>Blog Posts</h3>
    <ul>
      <li><a href="https://developer.okta.com/blog/2025/06/23/enterprise-ai">Integrate Your Enterprise AI Tools with Cross-App Access</a> (okta.com)</li>
      <li><a href="https://aaronparecki.com/2025/05/12/27/enterprise-ready-mcp">Enterprise-Ready MCP</a> (aaronparecki.com)</li>
      <li><a href="https://aaronparecki.com/2026/05/27/10/cross-domain-api-access">Cross-Domain API Access: Beyond the "Obvious" Shortcuts</a> (aaronparecki.com)</li>
      <li><a href="https://www.descope.com/learn/post/id-jag-cross-app-access">What is Cross-App Access (XAA) and How It Works</a> (descope.com)</li>
      <li><a href="https://workos.com/blog/id-jag-cross-app-access">Cross App Access (XAA): The enterprise way to govern AI app integrations</a> (workos.com)</li>
    </ul>


  </div>
</div>

<?php require('../../includes/_footer.php'); ?>
