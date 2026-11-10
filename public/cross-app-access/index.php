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

    <b>IdPs (ID-JAG issuers)</b>
    <ul class="implementations">
      <li><a href="https://github.com/AthenZ/athenz/blob/master/docs/zts_token_exchange_requirements.md">Athenz</a></li>
      <li><a href="https://www.c1.ai/docs/product/admin/enterprise-managed-authorization/overview">C1</a> (early access)</li>
      <li><a href="https://github.com/casdoor/casdoor/releases/tag/v4.25.0">Casdoor</a></li>
      <li><a href="https://docs.descope.com/agentic-identity-hub/enterprise-managed-authorization/issue-id-jags">Descope</a></li>
      <li><a href="https://documentation.gravitee.io/am/guides/auth-protocols/oauth-2.0/cross-app-access">Gravitee</a></li>
      <li><a href="https://incountry.com/products/agentcloak-agentic-identity/">InCountry AgentCloak</a></li>
      <li><a href="https://docs.jans.io/stable/janssen-server/auth-server/endpoints/identity-assertion-authz-grant/">Janssen</a></li>
      <li><a href="https://github.com/keycloak/keycloak/issues/48818">Keycloak</a> (in progress)</li>
      <li><a href="https://www.okta.com/solutions/cross-app-access/">Okta</a></li>
      <li><a href="https://docs.oracle.com/en-us/iaas/Content/Identity/api-getstarted/id-jag-support.htm">Oracle OCI IAM</a></li>
      <li><a href="https://docs.pingidentity.com/pingfederate/13.1/release_notes/pf_release_notes_131.html#identity-assertion-jwt-authorization-grant-id-jag">Ping</a></li>
      <li><a href="https://thunderid.dev/docs/use-cases/ai-agents/mcp-authorization/enterprise-managed-authorization/">ThunderID</a></li>
    </ul>

    <b>Authorization Servers</b>
    <ul class="implementations">
      <li><a href="https://github.com/AthenZ/athenz/blob/master/docs/zts_token_exchange_requirements.md">Athenz</a></li>
      <li><a href="https://auth0.com/docs/ai-agents-mcp/cross-app-access">Auth0</a> (early access)</li>
      <li><a href="https://docs.authplane.ai/guides/xaa/">AuthPlane</a></li>
      <li><a href="https://github.com/casdoor/casdoor/releases/tag/v4.26.0">Casdoor</a></li>
      <li><a href="https://github.com/cloudflare/workers-oauth-provider/blob/main/docs/authorization-server.md">Cloudflare workers-oauth-provider</a> (experimental)</li>
      <li><a href="https://descope.com/use-cases/ai">Descope</a></li>
      <li><a href="https://gofastmcp.com/docs/servers/auth/oauth-proxy#identity-assertion-sep-990">FastMCP</a> (beta)</li>
      <li><a href="https://documentation.gravitee.io/am/guides/auth-protocols/oauth-2.0/cross-app-access">Gravitee</a></li>
      <li><a href="https://github.com/highflame-ai/zeroid/blob/main/docs/identity-model.md">Highflame ZeroID</a></li>
      <li><a href="https://docs.jans.io/stable/janssen-server/auth-server/endpoints/identity-assertion-authz-grant/">Janssen</a></li>
      <li><a href="https://www.keycloak.org/securing-apps/identity-assertion-jwt-authorization-grant">Keycloak</a> (experimental)</li>
      <li><a href="https://developer.okta.com/docs/concepts/xaa/">Okta</a></li>
      <li><a href="https://docs.oracle.com/en-us/iaas/Content/Identity/api-getstarted/id-jag-support.htm">Oracle OCI IAM</a></li>
      <li><a href="https://docs.pingidentity.com/pingfederate/13.1/release_notes/pf_release_notes_131.html#identity-assertion-jwt-authorization-grant-id-jag">Ping</a></li>
      <li><a href="https://www.scalekit.com/mcp-auth">Scalekit</a> (early access)</li>
      <li><a href="https://stytch.com/docs/connected-apps/guides/cross-app-access">Stytch</a></li>
      <li><a href="https://thunderid.dev/docs/use-cases/ai-agents/mcp-authorization/enterprise-managed-authorization/">ThunderID</a></li>
      <li><a href="https://workos.com/docs/authkit/mcp">WorkOS AuthKit</a> (early access)</li>
    </ul>

    <b>Clients</b>
    <ul class="implementations">
      <li><a href="https://github.com/apify/mcpc/blob/main/README.md">Apify mcpc</a></li>
      <li><a href="https://archestra.ai/docs/mcp/authentication/gateway#id-jag">Archestra</a></li>
      <li><a href="https://auth0.com/blog/enabling-enterprise-managed-authorization-for-client-apps">Auth0</a> (early access)</li>
      <li><a href="https://claude.com/docs/connectors/building/enterprise-managed-auth">Claude</a></li>
      <li><a href="https://docs.glean.com/administration/oauth/enterprise-managed-auth">Glean</a></li>
      <li><a href="https://learn.chatgpt.com/docs/changelog">OpenAI Codex CLI</a></li>
      <li><a href="https://www.okta.com/integrations/tungsten/">Tungsten</a></li>
      <li><a href="https://vercel.com/docs/connect/ema">Vercel Connect</a> (beta)</li>
      <li><a href="https://code.visualstudio.com/updates/v1_123#_enterprise-managed-mcp-authentication-preview">Visual Studio Code</a> (preview)</li>
      <li><a href="https://workos.com">WorkOS</a> (beta)</li>
      <li><a href="https://developers.zoom.us/docs/integrations/crossapp-access/">Zoom</a></li>
    </ul>

    <b>Resource Apps</b>
    <ul class="implementations">
      <li><a href="https://amplitude.com/docs/amplitude-ai/amplitude-mcp/enterprise-managed-auth">Amplitude</a></li>
      <li><a href="https://knowledge.apollo.io/hc/en-us/articles/43827318678541-Integrate-Apollo-with-Claude#tabs-2">Apollo.io</a> (beta)</li>
      <li><a href="https://help.asana.com/s/article/cross-app-access">Asana</a></li>
      <li><a href="https://support.atlassian.com/security-and-access-policies/docs/configuring-enterprise-managed-authentication/">Atlassian</a></li>
      <li><a href="https://www.okta.com/integrations/atomicwork/">Atomicwork</a></li>
      <li><a href="https://browserbase.com/blog/browser-agent-identity-okta">Browserbase</a></li>
      <li><a href="https://www.canva.com/help/manage-cross-app-access/">Canva</a> (beta)</li>
      <li><a href="https://help.crossbeam.com/en/articles/17758536-set-up-enterprise-managed-authentication-with-claude-and-crossbeam">Crossbeam</a></li>
      <li><a href="https://docs.datadoghq.com/account_management/org_settings/cross_app_access/">Datadog</a></li>
      <li><a href="https://help.dropbox.com/integrations/connect-dropbox-to-claude">Dropbox</a> (beta)</li>
      <li><a href="https://exa.ai/docs/admin/mcp-enterprise-managed-auth">Exa</a></li>
      <li><a href="https://help.figma.com/hc/en-us/articles/41992841175959-Set-up-MCP-enterprise-managed-auth-with-Okta-Cross-App-Access-XAA">Figma</a></li>
      <li><a href="https://docs.glean.com/administration/platform/mcp/security">Glean</a> (beta)</li>
      <li><a href="https://docs.granola.ai/help-center/sharing/integrations/mcp#enterprise-managed-authorization">Granola</a></li>
      <li><a href="https://knowledge.hubspot.com/integrations/set-up-enterprise-managed-authentication-in-claude">HubSpot</a> (beta)</li>
      <li><a href="https://docs.kindo.ai/admin/cross-app-access/">Kindo</a> (beta)</li>
      <li><a href="https://linear.app/docs/mcp#enterprise-managed-authorization">Linear</a></li>
      <li><a href="https://docs.lovable.dev/features/enterprise-managed-auth">Lovable</a></li>
      <li><a href="https://www.okta.com/integrations/mate-security/">Mate Security</a></li>
      <li><a href="https://www.okta.com/integrations/miro-formerly-realtimeboard/">Miro</a></li>
      <li><a href="https://docs.mixpanel.com/docs/mcp/claude-enterprise-managed-auth">Mixpanel</a></li>
      <li><a href="https://developer.monday.com/api-reference/docs/mcp-enterprise-managed-auth">monday.com</a></li>
      <li><a href="https://www.notion.com/help/set-up-enterprise-managed-connections-for-notion-mcp">Notion</a></li>
      <li><a href="https://www.okta.com/integrations/opal-security/">Opal</a></li>
      <li><a href="https://docs.pagerduty.com/ai-automation/advance/pagerduty-mcp-server/claude-auto-connect">PagerDuty</a> (beta)</li>
      <li><a href="https://posthog.com/docs/settings/id-jag">PostHog</a></li>
      <li><a href="https://developer.semrush.com/api/v4/introduction/semrush-mcp/#set-up-enterprise-managed-authorization-for-the-semrush-mcp-connector-in-claude">Semrush</a></li>
      <li><a href="https://docs.serval.com/sections/api-reference/cross-app-access">Serval</a></li>
      <li><a href="https://docs.slack.dev/authentication/enterprise-managed-authorization/">Slack</a></li>
      <li><a href="https://www.okta.com/integrations/stitchops/">StitchOps</a></li>
      <li><a href="https://supabase.com/docs/guides/platform/sso/enterprise-mcp-authentication">Supabase</a></li>
      <li><a href="https://docs.getunblocked.com/unblocked-mcp/enterprise-managed-authorization/claude-okta">Unblocked</a></li>
      <li><a href="https://www.okta.com/integrations/willow/">Willow</a></li>
      <li><a href="https://developers.zoom.us/docs/integrations/crossapp-access/">Zoom</a></li>
    </ul>

    <b>Gateways</b>
    <ul class="implementations">
      <li><a href="https://docs.aembit.io/user-guide/access-policies/credential-providers/about-mcp-enterprise-managed-access-token/">Aembit</a></li>
      <li><a href="https://docs.affinidi.com/products/affinidi-trust-fabric/agent-gateway/concepts/token-exchange/">Affinidi</a></li>
      <li><a href="https://agentgateway.dev/docs/kubernetes/latest/documentation/security/backend-authn/token-exchange/cross-app-access/">agentgateway</a></li>
      <li><a href="https://www.arcade.dev/blog/arcade-supports-ema/">Arcade.dev</a> (early access)</li>
      <li><a href="https://archestra.ai/docs/mcp/authentication/servers">Archestra</a></li>
      <li><a href="https://docs.gumloop.com/previews/enterprise-features/idp-guides/cross-app-access-with-okta">Gumloop</a></li>
      <li><a href="https://www.keycard.ai/blog/announcing-keycard-support-for-id-jag-cross-app-access-okta/">Keycard</a> (early access)</li>
      <li><a href="https://konghq.com/blog/product-releases/enterprise-grade-mcp-access-control">Kong</a></li>
      <li><a href="https://docs.litellm.ai/docs/proxy/id_jag/overview">LiteLLM</a></li>
      <li><a href="https://docs.getbifrost.ai/mcp/auth/cross-app-access">Maxim Bifrost</a></li>
      <li><a href="https://www.mintive.com/docs/cross-app-access">Mintive</a> (formerly MintMCP)</li>
      <li><a href="https://www.speakeasy.com/docs/ai-control-plane/identity/identities/enterprise-managed-auth">Speakeasy</a> (preview)</li>
      <li><a href="https://docs.stacklok.com/toolhive/guides-vmcp/embedded-auth-server-vmcp/">Stacklok ToolHive</a> (experimental)</li>
      <li><a href="https://www.truefoundry.com/docs/agent-platform/agent-governance/scenarios/okta">TrueFoundry</a></li>
      <li><a href="https://docs.unified.to/guides/enterprise_managed_authorization_ema_with_microsoft_entra_id.md">Unified.to</a></li>
      <li><a href="https://wardengateway.com/provider-backends/mcp/">Warden</a></li>
      <li><a href="https://zuplo.com/docs/mcp-gateway/cross-app-access/overview">Zuplo</a></li>
    </ul>

    <b>SDKs and Libraries</b>
    <ul class="implementations">
      <li><a href="https://docs.authlib.org/en/latest/oauth2/specs/id-jag.html">Authlib</a> (Python)</li>
      <li><a href="https://github.com/doorkeeper-gem/doorkeeper-id_jag_grant">Doorkeeper</a> (Ruby, unreleased)</li>
      <li><a href="https://github.com/go-oauth2/oauth2/releases/tag/v4.6.0">Go OAuth2</a></li>
      <li><a href="https://github.com/http4k/http4k/blob/master/CHANGELOG.md">http4k</a> (Kotlin)</li>
      <li><a href="https://csharp.sdk.modelcontextprotocol.io/v1/concepts/transports/transports.html">MCP C# SDK</a></li>
      <li><a href="https://pkg.go.dev/github.com/modelcontextprotocol/go-sdk/auth/extauth">MCP Go SDK</a></li>
      <li><a href="https://py.sdk.modelcontextprotocol.io/client/identity-assertion/">MCP Python SDK</a></li>
      <li><a href="https://ruby.sdk.modelcontextprotocol.io/client/authorization/">MCP Ruby SDK</a></li>
      <li><a href="https://docs.rs/rmcp/latest/rmcp/">MCP Rust SDK</a></li>
      <li><a href="https://github.com/modelcontextprotocol/typescript-sdk/blob/main/docs/clients/machine-auth.md">MCP TypeScript SDK</a></li>
      <li><a href="https://github.com/logiscape/mcp-sdk-php/blob/main/docs/client-dev.md">mcp-sdk-php</a></li>
      <li><a href="https://github.com/SecureAuthCorp/oauth2c/pull/159">oauth2c</a></li>
      <li><a href="https://github.com/okta/okta-mobile-kotlin/blob/master/CHANGELOG.md">okta-mobile-kotlin</a></li>
      <li><a href="https://rubyllm.com/mcp/">RubyLLM</a></li>
      <li><a href="https://github.com/zntrio/solid/blob/main/README.md">SolID</a> (in development)</li>
    </ul>

    <b>Test Tools</b>
    <ul>
      <li><a href="https://www.crossapp.guru/#sign-in">crossapp.guru</a> - walk through the flow against your own IdP and MCP server</li>
      <li><a href="https://github.com/athenz-community/id-jag-the-hard-way">ID-JAG The Hard Way</a> - a hands-on local tutorial</li>
      <li><a href="https://github.com/modelcontextprotocol/conformance/pull/110">MCP conformance tests</a> - conformance tests for MCP clients</li>
      <li><a href="https://github.com/modelcontextprotocol/inspector/pull/1512">MCP Inspector v2</a> - a test client for MCP servers</li>
      <li><a href="https://www.mcpjam.com/features/oauth-debugger">MCPJam Inspector</a> - debug the flow request by request, with a mock IdP</li>
      <li><a href="https://xaa.dev">xaa.dev</a> - a complete demo, and utility to test your Clients and Resource Apps</li>
      <li><a href="https://xaa.rocks">xaa.rocks</a> - A suite of test tools providing sample clients, resource apps, and an IdP</li>
      <li><a href="https://client.xaa.rocks">client.xaa.rocks</a> - a sample XAA client that can be configured to any OIDC or SAML identity provider</li>
    </ul>

    <br>

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
