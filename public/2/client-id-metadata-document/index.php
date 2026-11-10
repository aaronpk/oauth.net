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

    <h4>Authorization Servers</h4>
    <ul class="implementations">
      <li><a href="https://docs.aembit.io/user-guide/access-policies/client-workloads/identification/cimd-client-id/">Aembit</a></li>
      <li><a href="https://auth0.com/docs/get-started/auth0-overview/create-applications/cimd-overview">Auth0</a></li>
      <li><a href="https://authhero-docs.pages.dev/standards/cimd">AuthHero</a></li>
      <li><a href="https://developers.authlete.com/protocols-and-flows/protocol-extensions/oauth-client-id-metadata-document-cimd">Authlete</a></li>
      <li><a href="https://docs.authplane.ai/reference/rfc-compliance/#draft-ietf-oauth-client-id-metadata-document--cimd">Authplane</a></li>
      <li><a href="https://backstage.io/docs/ai/mcp-actions">Backstage</a></li>
      <li><a href="https://docs.getbifrost.ai/mcp/auth/oauth">Bifrost</a></li>
      <li><a href="https://github.com/casdoor/casdoor/commit/6d4325dbe34babe55c1bbe3a28ce3e3639ab45c9">Casdoor</a></li>
      <li><a href="https://clerk.com/docs/guides/configure/auth-strategies/oauth/client-id-metadata-documents">Clerk</a></li>
      <li><a href="https://curity.io/resources/learn/oauth-client-id-metadata-document/">Curity</a></li>
      <li><a href="https://docs.descope.com/agentic-identity-hub/core-components/mcp-servers/registration-methods">Descope</a></li>
      <li><a href="https://fusionauth.io/docs/concepts/types/cimd-domains">FusionAuth</a></li>
      <li><a href="https://documentation.gravitee.io/am/guides/auth-protocols/oauth-2.0/cimd">Gravitee</a></li>
      <li><a href="https://docs.jans.io/head/janssen-server/auth-server/oauth-features/cimd/">Janssen</a></li>
      <li><a href="https://www.keycloak.org/securing-apps/mcp-authz-server">Keycloak</a></li>
      <li><a href="https://github.com/libregraph/lico#readme">LibreGraph Connect</a></li>
      <li><a href="https://docs.logto.io/integrate-logto/third-party-applications/dynamic-apps">Logto</a></li>
      <li><a href="https://docs.nhost.io/products/auth/oauth2-provider/cimd-clients">Nhost</a></li>
      <li><a href="https://github.com/obot-platform/obot/releases/tag/v0.24.0">Obot</a></li>
      <li><a href="https://developer.okta.com/docs/guides/app-cimd-registration/main/">Okta</a></li>
      <li><a href="https://docs.oracle.com/en-us/iaas/Content/Identity/applications/client-id-metadata-documents.htm">Oracle</a></li>
      <li><a href="https://docs.pingidentity.com/pingfederate/13.1/administrators_reference_guide/pf_cimd.html">PingFederate</a></li>
      <li><a href="https://docs.pingidentity.com/pingoneaic/am-oauth2/oauth2-cimd.html">PingOne Advanced Identity Cloud</a></li>
      <li><a href="https://pocket-id.org/docs/guides/client-id-metadata-documents">Pocket ID</a></li>
      <li><a href="https://www.pomerium.com/docs/capabilities/mcp/reference">Pomerium</a></li>
      <li><a href="https://sebadob.github.io/rauthy/work/ephemeral_clients.html">Rauthy</a></li>
      <li><a href="https://docs.scalekit.com/authenticate/mcp/quickstart/">Scalekit</a></li>
      <li><a href="https://www.servicenow.com/docs/r/platform-security/authentication/cimd-inbound.html">ServiceNow</a></li>
      <li><a href="https://www.speakeasy.com/docs/ai-control-plane/mcp-gateway/access/client-registration">Speakeasy</a></li>
      <li><a href="https://stalw.art/docs/auth/oauth/client-metadata-documents/">Stalwart</a></li>
      <li><a href="https://docs.strata.io/reference/orchestrator/experimental/client-id-metadata-documents">Strata</a></li>
      <li><a href="https://stytch.com/docs/connected-apps/oauth-learn-more/client-types">Stytch</a></li>
      <li><a href="https://github.com/stacklok/toolhive/releases/tag/v0.27.0">ToolHive</a></li>
      <li><a href="https://workos.com/docs/authkit/mcp#enabling-client-id-metadata-document-cimd">WorkOS</a></li>
      <li><a href="https://wso2.com/identity-platform/docs/guides/agentic-ai/mcp/register-mcp-client-app/">WSO2 Asgardeo</a></li>
    </ul>

    <h4>Services</h4>
    <p>APIs and MCP servers that accept clients identified by a Client ID Metadata Document.</p>
    <ul class="implementations">
      <li><a href="https://atproto.com/specs/oauth">Bluesky / atproto</a></li>
      <li><a href="https://www.braze.com/docs/user_guide/brazeai/mcp_server/setup">Braze</a></li>
      <li><a href="https://manual.bubble.io/help-guides/ai/bubble-mcp">Bubble</a></li>
      <li><a href="https://www.canva.dev/blog/developers/canva-mcp-ga/">Canva</a></li>
      <li><a href="https://www.fastmail.com/dev/">Fastmail</a></li>
      <li><a href="https://grafana.com/docs/grafana-cloud/ai-tools/mcp-servers/register-oauth-client/">Grafana Cloud</a></li>
      <li><a href="https://huggingface.co/docs/hub/en/oauth">Hugging Face</a></li>
      <li><a href="https://loops.so/agents/mcp">Loops</a></li>
      <li><a href="https://help.lucid.co/hc/en-us/articles/53780064823188-For-admins-Lucid-MCP-server-security-and-authorization">Lucid</a></li>
      <li><a href="https://docs.mollie.com/docs/mollie-mcp-server">Mollie</a></li>
      <li><a href="https://neon.com/docs/ai/neon-mcp-server">Neon</a></li>
      <li><a href="https://developers.notion.com/guides/mcp/build-mcp-client">Notion</a></li>
      <li><a href="https://posthog.com/docs/api/oauth">PostHog</a></li>
      <li><a href="https://resend.com/docs/guides/building-a-resend-oauth-client">Resend</a></li>
      <li><a href="https://www.sumologic.com/help/docs/api/mcp-server/">Sumo Logic</a></li>
      <li><a href="https://developer.todoist.com/api/v1/#tag/Authorization/OAuth-Client-ID-Metadata-Document">Todoist</a></li>
      <li><a href="https://www.typeform.com/developers/mcp/core-concepts/">Typeform</a></li>
      <li><a href="https://vercel.com/docs/mcp/vercel-mcp">Vercel</a></li>
    </ul>

    <p>These services advertise <code>client_id_metadata_document_supported</code> in their authorization server metadata. Each link goes to the metadata document.</p>
    <ul class="implementations">
      <li><a href="https://mcp.adjust.com/.well-known/oauth-authorization-server">Adjust</a></li>
      <li><a href="https://airtable.com/.well-known/oauth-authorization-server">Airtable</a></li>
      <li><a href="https://mcp.amplitude.com/.well-known/oauth-authorization-server">Amplitude</a></li>
      <li><a href="https://mcp.any.do/.well-known/oauth-authorization-server">Any.do</a></li>
      <li><a href="https://mcp.apaleo.com/.well-known/oauth-authorization-server">Apaleo</a></li>
      <li><a href="https://mcp.apify.com/.well-known/oauth-authorization-server">Apify</a></li>
      <li><a href="https://mcp.apollo.io/.well-known/oauth-authorization-server">Apollo.io</a></li>
      <li><a href="https://mcp.appwrite.io/.well-known/oauth-authorization-server">Appwrite Cloud</a></li>
      <li><a href="https://auth.atlassian.com/.well-known/oauth-authorization-server">Atlassian</a></li>
      <li><a href="https://mcp.axiom.co/.well-known/oauth-authorization-server">Axiom</a></li>
      <li><a href="https://mcp.back4app.com/.well-known/oauth-authorization-server">Back4App</a></li>
      <li><a href="https://mcp.bamboohr.com/.well-known/oauth-authorization-server">BambooHR</a></li>
      <li><a href="https://base44.app/.well-known/oauth-authorization-server">Base44</a></li>
      <li><a href="https://app.basecamp.com/.well-known/oauth-authorization-server">Basecamp</a></li>
      <li><a href="https://api.baserow.io/.well-known/oauth-authorization-server">Baserow</a></li>
      <li><a href="https://bonfire.cafe/.well-known/oauth-authorization-server">Bonfire</a></li>
      <li><a href="https://mcp.bugherd.com/.well-known/oauth-authorization-server">BugHerd</a></li>
      <li><a href="https://mcp.cal.com/.well-known/oauth-authorization-server">Cal.com</a></li>
      <li><a href="https://mcp.canny.io/.well-known/oauth-authorization-server">Canny</a></li>
      <li><a href="https://access.mcp.checkout.com/.well-known/oauth-authorization-server/payment-operations">Checkout.com</a></li>
      <li><a href="https://app.circleback.ai/.well-known/oauth-authorization-server">Circleback</a></li>
      <li><a href="https://api.cleanvoice.ai/.well-known/oauth-authorization-server/oauth/mcp">Cleanvoice</a></li>
      <li><a href="https://mcp.cloudflare.com/.well-known/oauth-authorization-server">Cloudflare</a></li>
      <li><a href="https://mcp.context7.com/.well-known/oauth-authorization-server">Context7</a></li>
      <li><a href="https://app.cookieyes.com/.well-known/oauth-authorization-server">CookieYes</a></li>
      <li><a href="https://mcp.cortex.io/.well-known/oauth-authorization-server">Cortex</a></li>
      <li><a href="https://www.crunchbase.com/.well-known/oauth-authorization-server">Crunchbase</a></li>
      <li><a href="https://oauth.datocms.com/.well-known/oauth-authorization-server">DatoCMS</a></li>
      <li><a href="https://mcp.deliverect.com/.well-known/oauth-authorization-server">Deliverect</a></li>
      <li><a href="https://api.descript.com/.well-known/oauth-authorization-server">Descript</a></li>
      <li><a href="https://api.devin.ai/.well-known/oauth-authorization-server">Devin</a></li>
      <li><a href="https://mcp.dodopayments.com/.well-known/oauth-authorization-server">Dodo Payments</a></li>
      <li><a href="https://api.us.elevenlabs.io/.well-known/oauth-authorization-server">ElevenLabs</a></li>
      <li><a href="https://auth.exa.ai/.well-known/oauth-authorization-server">Exa</a></li>
      <li><a href="https://mcp.expo.dev/.well-known/oauth-authorization-server">Expo</a></li>
      <li><a href="https://id.extend.ai/.well-known/oauth-authorization-server">Extend</a></li>
      <li><a href="https://mcp.fal.ai/.well-known/oauth-authorization-server">fal.ai</a></li>
      <li><a href="https://api.fireflies.ai/.well-known/oauth-authorization-server">Fireflies.ai</a></li>
      <li><a href="https://getimg.ai/.well-known/oauth-authorization-server">getimg.ai</a></li>
      <li><a href="https://glasp.co/.well-known/oauth-authorization-server">Glasp</a></li>
      <li><a href="https://mcp.granola.ai/.well-known/oauth-authorization-server">Granola</a></li>
      <li><a href="https://haveibeenpwned.com/.well-known/oauth-authorization-server">Have I Been Pwned</a></li>
      <li><a href="https://mcp.hey.com/.well-known/oauth-authorization-server">HEY</a></li>
      <li><a href="https://mcp.heygen.com/.well-known/oauth-authorization-server">HeyGen</a></li>
      <li><a href="https://ui.honeycomb.io/.well-known/oauth-authorization-server">Honeycomb</a></li>
      <li><a href="https://mcp.icons8.com/.well-known/oauth-authorization-server">Icons8</a></li>
      <li><a href="https://mcp.idealo.com/.well-known/oauth-authorization-server">idealo</a></li>
      <li><a href="https://imagekit.io/.well-known/oauth-authorization-server">ImageKit</a></li>
      <li><a href="https://mcp.incident.io/.well-known/oauth-authorization-server">incident.io</a></li>
      <li><a href="https://secure.indeed.com/.well-known/oauth-authorization-server">Indeed</a></li>
      <li><a href="https://mcp.invideo.io/.well-known/oauth-authorization-server">InVideo</a></li>
      <li><a href="https://mcp.jumpcloud.com/.well-known/oauth-authorization-server">JumpCloud</a></li>
      <li><a href="https://mcp.jumpseller.com/.well-known/oauth-authorization-server">Jumpseller</a></li>
      <li><a href="https://mcp.klaviyo.com/.well-known/oauth-authorization-server">Klaviyo</a></li>
      <li><a href="https://app.launchdarkly.com/.well-known/oauth-authorization-server">LaunchDarkly</a></li>
      <li><a href="https://mcp.leonardo.ai/.well-known/oauth-authorization-server">Leonardo.ai</a></li>
      <li><a href="https://mcp.linear.app/.well-known/oauth-authorization-server">Linear</a></li>
      <li><a href="https://mcp.listennotes.com/.well-known/oauth-authorization-server">Listen Notes</a></li>
      <li><a href="https://mcp.locize.app/.well-known/oauth-authorization-server">Locize</a></li>
      <li><a href="https://mcp.logrocket.com/.well-known/oauth-authorization-server">LogRocket</a></li>
      <li><a href="https://creator.mcp.lottiefiles.com/.well-known/oauth-authorization-server">LottieFiles</a></li>
      <li><a href="https://mcp.lovable.dev/.well-known/oauth-authorization-server">Lovable</a></li>
      <li><a href="https://micro.blog/.well-known/oauth-authorization-server">micro.blog</a></li>
      <li><a href="https://mcp.midjourney.com/.well-known/oauth-authorization-server">Midjourney</a></li>
      <li><a href="https://auth.momentic.ai/.well-known/oauth-authorization-server">Momentic</a></li>
      <li><a href="https://mcp.monday.com/.well-known/oauth-authorization-server">monday.com</a></li>
      <li><a href="https://authorize.mongodb.com/.well-known/oauth-authorization-server">MongoDB</a></li>
      <li><a href="https://mcp-canvas.mural.co/.well-known/oauth-authorization-server">MURAL</a></li>
      <li><a href="https://idp.nansen.ai/.well-known/oauth-authorization-server">Nansen</a></li>
      <li><a href="https://needle-ai.com/.well-known/oauth-authorization-server">Needle</a></li>
      <li><a href="https://oneuptime.com/.well-known/oauth-authorization-server">OneUptime</a></li>
      <li><a href="https://mcp.openalex.org/.well-known/oauth-authorization-server">OpenAlex</a></li>
      <li><a href="https://my.orq.ai/.well-known/oauth-authorization-server/v2/auth/mcp">orq.ai</a></li>
      <li><a href="https://api.packetstream.io/.well-known/oauth-authorization-server">PacketStream</a></li>
      <li><a href="https://id.paddle.com/.well-known/oauth-authorization-server">Paddle</a></li>
      <li><a href="https://api.peakflo.ai/.well-known/oauth-authorization-server">Peakflo</a></li>
      <li><a href="https://mcp.eu.phrase.com/.well-known/oauth-authorization-server">Phrase</a></li>
      <li><a href="https://signin.auth.plain.com/.well-known/oauth-authorization-server">Plain</a></li>
      <li><a href="https://mcp.port.io/.well-known/oauth-authorization-server">Port</a></li>
      <li><a href="https://logfire-us.pydantic.dev/.well-known/oauth-authorization-server">Pydantic Logfire</a></li>
      <li><a href="https://mcp.usepylon.com/.well-known/oauth-authorization-server">Pylon</a></li>
      <li><a href="https://mcp.quartr.com/.well-known/oauth-authorization-server">Quartr</a></li>
      <li><a href="https://mcp.railway.app/.well-known/oauth-authorization-server">Railway</a></li>
      <li><a href="https://oauth.recurly.com/.well-known/oauth-authorization-server">Recurly</a></li>
      <li><a href="https://mcp.remote.com/.well-known/oauth-authorization-server">Remote.com</a></li>
      <li><a href="https://mcp.roamresearch.com/.well-known/oauth-authorization-server">Roam Research</a></li>
      <li><a href="https://www.searchapi.io/.well-known/oauth-authorization-server">SearchApi</a></li>
      <li><a href="https://login.semgrep.dev/.well-known/oauth-authorization-server">Semgrep</a></li>
      <li><a href="https://mcp.sentry.dev/.well-known/oauth-authorization-server">Sentry</a></li>
      <li><a href="https://mcp.shipstation.com/.well-known/oauth-authorization-server">ShipStation</a></li>
      <li><a href="https://setup.shopify.com/.well-known/oauth-authorization-server/auth">Shopify</a></li>
      <li><a href="https://mcp.shortcut.com/.well-known/oauth-authorization-server">Shortcut</a></li>
      <li><a href="https://studio-api.softr.io/.well-known/oauth-authorization-server">Softr</a></li>
      <li><a href="https://api.statsig.com/.well-known/oauth-authorization-server">Statsig</a></li>
      <li><a href="https://api.supermetrics.com/.well-known/oauth-authorization-server">Supermetrics</a></li>
      <li><a href="https://mcp.surveymonkey.com/.well-known/oauth-authorization-server">SurveyMonkey</a></li>
      <li><a href="https://mcp.synapse.org/.well-known/oauth-authorization-server">Synapse</a></li>
      <li><a href="https://mcp.synthesia.io/.well-known/oauth-authorization-server">Synthesia</a></li>
      <li><a href="https://api-v1.tailwind.ai/.well-known/oauth-authorization-server">Tailwind</a></li>
      <li><a href="https://mcp.tapcart.com/.well-known/oauth-authorization-server">Tapcart</a></li>
      <li><a href="https://mcp.tavily.com/.well-known/oauth-authorization-server">Tavily</a></li>
      <li><a href="https://mcp.tenderly.co/.well-known/oauth-authorization-server">Tenderly</a></li>
      <li><a href="https://keycloak.tldv.io/.well-known/oauth-authorization-server/realms/mcp.tldv.io">tl;dv</a></li>
      <li><a href="https://api2.transloadit.com/.well-known/oauth-authorization-server">Transloadit</a></li>
      <li><a href="https://trmnl.com/.well-known/oauth-authorization-server">TRMNL</a></li>
      <li><a href="https://mcp.twelvedata.com/.well-known/oauth-authorization-server">Twelve Data</a></li>
      <li><a href="https://twist.com/.well-known/oauth-authorization-server">Twist</a></li>
      <li><a href="https://api.typefully.com/.well-known/oauth-authorization-server">Typefully</a></li>
      <li><a href="https://mcp.upwork.com/.well-known/oauth-authorization-server">Upwork</a></li>
      <li><a href="https://mcp.userpilot.io/.well-known/oauth-authorization-server">Userpilot</a></li>
      <li><a href="https://ai.virustotal.com/.well-known/oauth-authorization-server">VirusTotal</a></li>
      <li><a href="https://mcp.windsor.ai/.well-known/oauth-authorization-server">Windsor.ai</a></li>
      <li><a href="https://mcp.wise.com/.well-known/oauth-authorization-server">Wise</a></li>
      <li><a href="https://zenable.us.auth0.com/.well-known/oauth-authorization-server">Zenable</a></li>
    </ul>

    <h4>MCP Clients</h4>
    <p>The ↗ links go to each client's metadata document.</p>
    <ul class="implementations">
      <li><a href="https://ampcode.com/docs/customize/mcp">Amp</a> (<a href="https://ampcode.com/oauth/client-metadata.json">↗</a>)</li>
      <li><a href="https://developers.openai.com/plugins/build/auth">ChatGPT</a> (<a href="https://chatgpt.com/oauth/client.json">↗</a>)</li>
      <li><a href="https://claude.com/docs/connectors/building/authentication">Claude</a> (<a href="https://claude.ai/oauth/mcp-oauth-client-metadata">↗</a>)</li>
      <li><a href="https://code.claude.com/docs/en/mcp">Claude Code</a> (<a href="https://claude.ai/oauth/claude-code-client-metadata">↗</a>)</li>
      <li><a href="https://github.com/openai/codex/blob/main/codex-rs/rmcp-client/src/oauth_client_registration.rs">Codex</a> (<a href="https://chatgpt.com/oauth/codex/client.json">↗</a>)</li>
      <li><a href="https://cursor.com/">Cursor</a> (<a href="https://cursor.com/oauth/mcp-client.json">↗</a>)</li>
      <li><a href="https://dust.tt/">Dust</a> (<a href="https://dust.tt/.well-known/oauth-client.json">↗</a>)</li>
      <li><a href="https://github.com/github/copilot-cli/releases/tag/v1.0.83">GitHub Copilot CLI</a> (<a href="https://github.com/copilot/cli/client-metadata.json">↗</a>)</li>
      <li><a href="https://antigravity.google/docs/mcp">Google Antigravity</a> (<a href="https://antigravity.google/oauth/client-metadata.json">↗</a>)</li>
      <li><a href="https://goose-docs.ai/docs/getting-started/using-extensions/">goose</a> (<a href="https://goose-docs.ai/oauth/client-metadata.json">↗</a>)</li>
      <li><a href="https://grok.com/">Grok</a> (<a href="https://grok.com/oauth/mcp-client.json">↗</a>)</li>
      <li><a href="https://github.com/huggingface/chat-ui/blob/main/src/routes/api/mcp/oauth/client-metadata/+server.ts">HuggingChat</a> (<a href="https://huggingface.co/chat/api/mcp/oauth/client-metadata">↗</a>)</li>
      <li><a href="https://github.com/Kilo-Org/kilocode/pull/14508">Kilo Code</a> (<a href="https://kilo.ai/docs/oauth/kilo/client.json">↗</a>)</li>
      <li><a href="https://kiro.dev/docs/mcp/configuration/">Kiro</a> (<a href="https://kiro.dev/oauth/client-metadata.json">↗</a>)</li>
      <li><a href="https://github.com/lobehub/lobehub/pull/22456">LobeHub</a> (<a href="https://app.lobehub.com/oauth/connector/client-metadata.json">↗</a>)</li>
      <li><a href="https://github.com/mastra-ai/mastra/blob/main/mastracode/sdk/src/mcp/config.ts">Mastra Code</a> (<a href="https://code.mastra.ai/.well-known/oauth-client/mastracode.json">↗</a>)</li>
      <li><a href="https://www.mcpjam.com/">MCPJam</a> (<a href="https://www.mcpjam.com/.well-known/oauth/client-metadata.json">↗</a>)</li>
      <li><a href="https://www.notion.com/help/connect-mcp-servers-to-your-notion-agent">Notion</a> (<a href="https://www.notion.so/oauth/mcp-client-metadata.json">↗</a>)</li>
      <li><a href="https://github.com/onyx-dot-app/onyx/blob/main/backend/onyx/server/features/mcp/client_metadata.py">Onyx</a> (<a href="https://cloud.onyx.app/api/mcp/oauth/client-metadata">↗</a>)</li>
      <li><a href="https://opencode.ai/docs/mcp-servers/">opencode</a> (<a href="https://opencode.ai/oauth/opencode/client.json">↗</a>)</li>
      <li><a href="https://www.postman.com/">Postman</a> (<a href="https://www.postman.com/.well-known/oauth/client-metadata.json">↗</a>)</li>
      <li><a href="https://docs.replit.com/build/connect-via-mcp">Replit</a> (<a href="https://replit.com/oauth/client.json">↗</a>)</li>
      <li><a href="https://github.com/stacklok/toolhive/blob/main/pkg/oauthproto/cimd.go">ToolHive</a> (<a href="https://toolhive.dev/oauth/client-metadata.json">↗</a>)</li>
      <li><a href="https://code.visualstudio.com/updates/v1_106">VS Code</a> (<a href="https://vscode.dev/oauth/client-metadata.json">↗</a>)</li>
      <li><a href="https://github.com/zed-industries/zed/pull/51768">Zed</a> (<a href="https://zed.dev/oauth/client-metadata.json">↗</a>)</li>
    </ul>

    <h4>Other Clients</h4>
    <ul class="implementations">
      <li><a href="https://indiebookclub.biz/">indiebookclub</a> (<a href="https://indiebookclub.biz/id">↗</a>)</li>
      <li><a href="https://indielogin.com/">IndieLogin</a> (<a href="https://indielogin.com/id">↗</a>)</li>
      <li><a href="https://micro.blog/">Micro.blog</a> (<a href="https://micro.blog/client.json">↗</a>)</li>
      <li><a href="https://webmention.io/">Webmention.io</a> (<a href="https://webmention.io/id">↗</a>)</li>
    </ul>

    <h4>MCP SDKs</h4>
    <ul class="implementations">
      <li><a href="https://github.com/modelcontextprotocol/csharp-sdk/releases/tag/v0.5.0-preview.1">C#</a></li>
      <li><a href="https://github.com/modelcontextprotocol/go-sdk/blob/main/docs/protocol.md#client">Go</a></li>
      <li><a href="https://github.com/modelcontextprotocol/python-sdk/blob/main/docs/client/oauth-clients.md#client-id-metadata-documents">Python</a></li>
      <li><a href="https://github.com/modelcontextprotocol/ruby-sdk/blob/main/docs/_client/authorization.md">Ruby</a></li>
      <li><a href="https://github.com/modelcontextprotocol/rust-sdk/blob/main/docs/OAUTH_SUPPORT.md">Rust</a></li>
      <li><a href="https://github.com/modelcontextprotocol/swift-sdk/blob/main/Sources/MCP/Base/Authorization/OAuthClientRegistrar.swift">Swift</a></li>
      <li><a href="https://github.com/modelcontextprotocol/typescript-sdk/releases/tag/1.23.0">TypeScript</a></li>
    </ul>

    <h4>Libraries and Frameworks</h4>
    <ul class="implementations">
      <li><a href="https://github.com/mary-ext/atcute/blob/trunk/packages/oauth/browser-client/README.md">@atcute/oauth-browser-client</a></li>
      <li><a href="https://github.com/mary-ext/atcute/blob/trunk/packages/oauth/node-client/README.md">@atcute/oauth-node-client</a></li>
      <li><a href="https://github.com/bluesky-social/atproto/blob/main/packages/oauth/oauth-client-browser/README.md">@atproto/oauth-client-browser</a></li>
      <li><a href="https://github.com/bluesky-social/atproto/blob/main/packages/oauth/oauth-client-expo/README.md">@atproto/oauth-client-expo</a></li>
      <li><a href="https://github.com/bluesky-social/atproto/blob/main/packages/oauth/oauth-client-node/README.md">@atproto/oauth-client-node</a></li>
      <li><a href="https://github.com/bluesky-social/atproto/blob/main/packages/oauth/oauth-provider/src/metadata/build-metadata.ts">@atproto/oauth-provider</a></li>
      <li><a href="https://attesto-phoenix.hexdocs.pm/AttestoPhoenix.ClientIdMetadata.html">Attesto</a></li>
      <li><a href="https://better-auth.com/docs/plugins/cimd">Better Auth</a></li>
      <li><a href="https://github.com/cboxdk/laravel-id/releases/tag/v1.22.0">Cbox ID</a></li>
      <li><a href="https://github.com/cloudflare/agents/blob/HEAD/packages/agents/CHANGELOG.md">Cloudflare Agents SDK</a></li>
      <li><a href="https://github.com/cloudflare/workers-oauth-provider/blob/main/docs/authorization-server.md">Cloudflare workers-oauth-provider</a></li>
      <li><a href="https://github.com/dignite-projects/abp-modules#readme">Dignite ABP OpenIddict module</a></li>
      <li><a href="https://docs.allauth.org/en/latest/idp/openid-connect/client-id-metadata-document.html">django-allauth</a></li>
      <li><a href="https://django-oauth-toolkit.readthedocs.io/en/latest/cimd.html">django-oauth-toolkit</a></li>
      <li><a href="https://ex-mcp.hexdocs.pm/ExMCP.Authorization.ClientIdMetadata.html">ex_mcp</a></li>
      <li><a href="https://gofastmcp.com/docs/clients/auth/cimd">FastMCP</a></li>
      <li><a href="https://github.com/punkpeye/fastmcp/blob/HEAD/docs/oauth-proxy-guide.md">FastMCP (TypeScript)</a></li>
      <li><a href="https://frontmcp.dev/reference/auth/cimd">FrontMCP</a></li>
      <li><a href="https://github.com/alex-savin/go-auth-x#readme">go-auth-x</a></li>
      <li><a href="https://github.com/blowdart/idunno.Bluesky/blob/main/docs/docs/asp.net.md">idunno.Bluesky</a></li>
      <li><a href="https://github.com/indieweb/wordpress-indieauth/blob/trunk/readme.md">IndieAuth for WordPress</a></li>
      <li><a href="https://github.com/getindiekit/indiekit/releases/tag/v1.0.0-beta.18">Indiekit</a></li>
      <li><a href="https://pkg.go.dev/github.com/bluesky-social/indigo/atproto/auth/oauth">indigo (Go atproto)</a></li>
      <li><a href="https://laravel.com/framework/docs/13.x/mcp">Laravel MCP</a></li>
      <li><a href="https://mastra.ai/reference/tools/mcp-client">Mastra</a></li>
      <li><a href="https://github.com/punkpeye/mcp-remote#client-id-metadata-documents">mcp-remote</a></li>
      <li><a href="https://docs.mcp-use.com/python/client/authentication/oauth">mcp-use</a></li>
      <li><a href="https://github.com/panva/node-oidc-provider/blob/main/docs/README.md#featuresclientidmetadatadocument">node-oidc-provider</a></li>
      <li><a href="https://github.com/Julien-R44/sesame/releases/tag/v0.8.0">Sesame</a></li>
      <li><a href="https://github.com/spring-ai-community/mcp-security#client-id-metadata-document-cimd">Spring AI mcp-security</a></li>
    </ul>

    <h3>Testing Tools</h3>
    <ul class="implementations">
      <li><a href="https://client.dev/">client.dev</a></li>
      <li><a href="https://example-app.com/client">example-app.com/client</a></li>
      <li><a href="https://github.com/tanish111/cimd-local-oauth-server">Local Authorization Server for Testing</a></li>
      <li><a href="https://cimd-reader.akxen.tech/">CIMD Reader</a></li>
      <li><a href="https://github.com/modelcontextprotocol/conformance/blob/main/src/scenarios/client/auth/basic-cimd.ts">MCP Conformance Suite</a></li>
      <li><a href="https://github.com/modelcontextprotocol/inspector/blob/main/docs/test-servers.md">MCP Inspector</a></li>
      <li><a href="https://github.com/MCPJam/inspector#oauth-debugger">MCPJam OAuth Debugger</a></li>
      <li><a href="https://gofastmcp.com/docs/cli/auth">FastMCP CLI</a></li>
      <li><a href="https://cimd-service.fly.dev/">CIMD Service</a></li>
      <li><a href="https://cimd.cerberauth.com">CerberAuth CIMD templates</a></li>
      <li><a href="https://github.com/giantswarm/mcp-debug">mcp-debug</a></li>
      <li><a href="https://github.com/apify/mcpc">mcpc</a></li>
    </ul>

    <h3>More resources</h3>
    <ul>
      <li><a href="https://aaronparecki.com/2026/07/29/19/cimd-over-dcr">From Self-Asserted to Domain-Backed: Why CIMD Beats DCR</a> (Jul 2026, aaronparecki.com)</li>
      <li><a href="https://www.youtube.com/watch?v=DHf_95lNrj8">Identerati Office Hours - Episode 149.5: OAuth Client ID Metadata Document</a> (Oct 2025, youtube.com)</li>
      <li><a href="https://www.descope.com/learn/post/cimd">What is a Client ID Metadata Document (CIMD)?</a> (Oct 2025, descope.com)</li>
      <li><a href="https://blog.modelcontextprotocol.io/posts/client_registration/">Evolving OAuth Client Registration in the Model Context Protocol</a> (Aug 2025, modelcontextprotocol.io)</li>
      <li><a href="https://aaronparecki.com/2018/07/07/7/oauth-for-the-open-web">OAuth for the Open Web</a> (Jul 2018, aaronparecki.com)</li>
    </ul>

  </div>
</div>

<?php require('../../../includes/_footer.php'); ?>
