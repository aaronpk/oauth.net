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

    <h3>Terminology</h3>

    <dl class="terminology">
      <dt>Cross-App Access <span class="term-abbr">(XAA)</span></dt>
      <dd>A pattern in which an application's access to another application's API is mediated by the IdP that both applications already trust for SSO and subject resolution. XAA extends the IdP's role from single sign-on to brokering cross-domain API access, using the same trust relationships that already exist for SSO.</dd>

      <dt>Identity Assertion JWT Authorization Grant <span class="term-abbr">(ID-JAG)</span></dt>
      <dd>The name of both the specification where XAA is defined and the specific JWT defined in Section 3 of that spec. The ID-JAG is the JWT issued by the IdP and presented to the Resource Authorization Server. It carries the IdP's signed assertion that the Client is authorized to access the Resource App on behalf of the user.</dd>

      <dt>Client</dt>
      <dd>The application that wants to access the Resource App's API on behalf of a user. The Client already has the user logged in via SSO at the IdP, and initiates XAA by requesting an ID-JAG from the IdP.</dd>

      <dt>Resource App</dt>
      <dd>The application whose API the Client wants to access. Both the Client and the Resource App trust the same IdP for SSO. The Resource App delegates authorization decisions to its Resource Authorization Server.</dd>

      <dt>Resource Authorization Server</dt>
      <dd>The OAuth authorization server operated by the Resource App. It receives the ID-JAG from the Client, validates it against the IdP's signing keys, and — if authorized — issues an access token the Client can use to call the Resource Server.</dd>

      <dt>Resource Server</dt>
      <dd>The API of the Resource App. It accepts and validates access tokens issued by the Resource Authorization Server.</dd>

      <dt>Token Exchange <span class="term-abbr">(RFC 8693)</span></dt>
      <dd>An OAuth 2.0 extension for exchanging one token for a different token. In XAA, the Client uses Token Exchange to exchange the user's existing SSO session (an OIDC ID token, refresh token, or SAML assertion) with the IdP for an ID-JAG.</dd>

      <dt>Authorization Grant</dt>
      <dd>The abstract concept defined in RFC 6749 representing a user's authorization for a client to access a resource. In XAA, the ID-JAG is the authorization grant — it is what the Client presents to the Resource Authorization Server to obtain an access token.</dd>

      <dt>JWT Authorization Grant <span class="term-abbr">(RFC 7523)</span></dt>
      <dd>An OAuth mechanism for using a signed JWT as an authorization grant at a token endpoint. In XAA, the Client presents the ID-JAG as a JWT Authorization Grant to the Resource Authorization Server's token endpoint to obtain an access token.</dd>
    </dl>

    <br><br>

    <h3>Implementations</h3>

    <div class="grid">
      <div class="column">
        <b>IdPs (ID-JAG issuers)</b>
        <ul>
          <li><a href="https://developer.okta.com/docs/concepts/xaa/">Okta</a></li>
          <li><a href="https://docs.pingidentity.com/pingfederate/13.1/release_notes/pf_release_notes.html#identity-assertion-jwt-authorization-grant-id-jag">Ping</a></li>
          <li><a href="https://techblog.lycorp.co.jp/ja/20260401a">Athenz</a> (beta)</li>
          <li><a href="https://www.descope.com/press-release/cross-app-access-xaa-support">Descope</a></li>
          <li><a href="https://github.com/keycloak/keycloak/issues/48818">Keycloak</a> (in progress)</li>
          <li><a href="https://docs.descope.com/agentic-identity-hub/enterprise-managed-authorization">Descope</a></li>
        </ul>
        <b>Clients</b>
        <ul>
          <li><a href="https://support.claude.com/en/articles/15537633-authorize-mcp-connectors-for-your-entire-organization">Claude</a></li>
          <li><a href="https://code.visualstudio.com/updates/v1_123#_enterprise-managed-mcp-authentication-preview">Visual Studio Code</a></li>
          <li><a href="https://workos.com">WorkOS</a> (beta)</li>
          <li><a href="https://archestra.ai">Archestra</a></li>
        </ul>
        <b>Authorization Servers</b>
        <ul>
          <li><a href="https://auth0.com/docs/secure/call-apis-on-users-behalf/xaa">Auth0</a> (early access)</li>
          <li><a href="https://docs.authplane.ai/guides/xaa/">Authplane</a></li>
          <li><a href="https://techblog.lycorp.co.jp/ja/20260401a">Athenz</a> (beta)</li>
          <li><a href="https://docs.descope.com/agentic-identity-hub/enterprise-managed-authorization">Descope</a></li>
          <li><a href="https://github.com/doorkeeper-gem/doorkeeper-id_jag_grant">Doorkeeper</a> (Ruby OAuth Provider)</li>
          <li><a href="https://github.com/keycloak/keycloak/issues/43971">Keycloak</a> (in progress)</li>
          <li><a href="https://docs.pingidentity.com/pingfederate/13.1/administrators_reference_guide/help_idpconnectionconfigtasklet_oauthsamlgrantattributemappingstate.html">Ping</a></li>
          <li><a href="https://www.scalekit.com/blog/cross-app-access-agentic-auth-flows">Scalekit</a></li>
          <li><a href="https://stytch.com/docs/connected-apps/guides/cross-app-access">Stytch</a></li>
        </ul>
      </div>
      <div class="column">
        <b>Resource Apps</b>
        <ul>
          <li><a href="https://help.asana.com/s/article/cross-app-access">Asana</a></li>
          <li><a href="https://support.atlassian.com/security-and-access-policies/docs/configuring-enterprise-managed-authentication/">Atlassian</a></li>
          <li><a href="https://www.canva.com/help/manage-cross-app-access/">Canva</a></li>
          <li><a href="https://docs.datadoghq.com/account_management/org_settings/cross_app_access/">Datadog</a></li>
          <li><a href="https://help.figma.com/hc/en-us/articles/41992841175959-Set-up-MCP-enterprise-managed-auth-with-Okta-Cross-App-Access-XAA">Figma</a></li>
          <li><a href="https://docs.granola.ai/help-center/sharing/integrations/mcp">Granola</a></li>
          <li><a href="https://linear.app/docs/mcp#enterprise-managed-authorization">Linear</a></li>
          <li><a href="https://www.notion.com/help/set-up-enterprise-managed-connections-for-notion-mcp">Notion</a></li>
          <li><a href="https://slack.com/help/articles/54548358406419-Manage-access-to-the-Slack-MCP-server-through-your-identity-provider">Slack</a></li>
          <li><a href="https://supabase.com/docs/guides/platform/sso/enterprise-mcp-authentication">Supabase</a></li>
        </ul>
        <b>SDKs</b>
        <ul>
          <li><a href="https://github.com/go-oauth2/oauth2/releases/tag/v4.6.0">Go OAuth2</a></li>
        </ul>
        <b>Gateways</b>
        <ul>
          <li><a href="https://docs.litellm.ai/release_notes/v1.95.0/v1-95-0">LiteLLM</a></li>
          <li><a href="https://www.mintmcp.com/docs/cross-app-access">MintMCP</a></li>
        </ul>
        <b>Test Tools</b>
        <ul>
          <li><a href="https://xaa.dev">xaa.dev</a> - a complete demo, and utility to test your Clients and Resource Apps</li>
          <li><a href="https://github.com/athenz-community/id-jag-the-hard-way">ID-JAG The Hard Way</a></li>
          <li><a href="https://motd.xaa.rocks">motd.xaa.rocks</a> - a sample API and MCP server that accepts any ID-JAG</li>
          <li><a href="https://client.xaa.rocks">client.xaa.rocks</a> - a sample XAA client that can be configured to any OIDC or SAML identity provider</li>
          <li><a href="https://www.crossapp.guru/#sign-in">crossapp.guru</a></li>
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
      <li><a href="https://blog.modelcontextprotocol.io/posts/enterprise-managed-auth/">Enterprise-Managed Authorization: Zero-touch OAuth for MCP</a> (modelcontextprotocol.io)</li>
      <li><a href="https://claude.com/blog/enterprise-managed-auth">Centrally manage authorization for MCP connectors</a> (claude.com)</li>
      <li><a href="https://developer.okta.com/blog/2025/06/23/enterprise-ai">Integrate Your Enterprise AI Tools with Cross-App Access</a> (okta.com)</li>
      <li><a href="https://aaronparecki.com/2025/05/12/27/enterprise-ready-mcp">Enterprise-Ready MCP</a> (aaronparecki.com)</li>
      <li><a href="https://aaronparecki.com/2026/05/27/10/cross-domain-api-access">Cross-Domain API Access: Beyond the "Obvious" Shortcuts</a> (aaronparecki.com)</li>
      <li><a href="https://www.descope.com/learn/post/id-jag-cross-app-access">What is Cross-App Access (XAA) and How It Works</a> (descope.com)</li>
      <li><a href="https://workos.com/blog/id-jag-cross-app-access">Cross App Access (XAA): The enterprise way to govern AI app integrations</a> (workos.com)</li>
    </ul>


  </div>
</div>

<?php require('../../includes/_footer.php'); ?>
