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
    <p>Cross-App Access builds on <a href="https://datatracker.ietf.org/doc/draft-ietf-oauth-identity-chaining/">Identity and Authorization Chaining Across Domains</a> to further profile it for interoperable implementations in an enterprise setting. In particular, it defines the claims of the ID-JAG (Identity JWT Authorization Grant) that moves across domains.</p>

    <img src="xaa-flow-diagram.png" style="width: 100%">

    <p>
      Related Specs:
      <ul>
        <li><a href="/2/token-exchange/">OAuth 2.0 Token Exchange (RFC 8693)</a></li>
        <li><a href="https://datatracker.ietf.org/doc/html/rfc7523">JWT Profile for OAuth 2.0 Client Authentication and Authorization Grants</a></li>
        <li><a href="https://datatracker.ietf.org/doc/draft-ietf-oauth-identity-chaining/">OAuth Identity and Authorization Chaining Across Domains</a></li>
      </ul>
    </p>

    <p>More resources
      <ul>
        <li><a href="https://developer.okta.com/blog/2025/06/23/enterprise-ai">Integrate Your Enterprise AI Tools with Cross-App Access</a> (okta.com)</li>
        <li><a href="https://aaronparecki.com/2025/05/12/27/enterprise-ready-mcp">Enterprise-Ready MCP</a> (aaronparecki.com)</li>
        <li><a href="https://www.descope.com/learn/post/id-jag-cross-app-access">What is Cross-App Access (XAA) and How It Works</a> (descope.com)</li>
      </ul>
    </p>

  </div>
</div>

<?php require('../../includes/_footer.php'); ?>
