<?php
$page_title = "What is an Access Token - OAuth 2.0";
$page_section = "";
$page_secondary = "";
$page_meta_description = "What is an OAuth Access Token?";
require('../../../includes/_header.php');
?>
<div class="container">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/2/">OAuth 2.0</a></li>
      <li class="breadcrumb-item active">Access Tokens</li>
    </ol>
  </nav>
  <div>

    <h2>OAuth Access Tokens</h2>

    <p><a href="https://datatracker.ietf.org/doc/html/rfc6749#section-1.4" class="rfc">datatracker.ietf.org/doc/html/rfc6749#section-1.4</a></p>

    <p>An OAuth Access Token is a string that the OAuth client uses to make requests to the resource server.</p>

    <p>Access tokens do not have to be in any particular format, and in practice, various OAuth servers have chosen many different formats for their access tokens.</p>

    <p>Access tokens may be either "<a href="/2/bearer-tokens/">bearer tokens</a>" or "sender-constrained" tokens. Sender-constrained tokens require the OAuth client to prove possession of a private key in some way in order to use the access token, such that the access token by itself would not be usable.</p>

    <p>There are a number of properties of access tokens that are fundamental to the security model of OAuth:

      <ul>
        <li>Access tokens must not be read or interpreted by the OAuth client. The OAuth client is not the intended audience of the token.</li>
        <li>Access tokens do not convey user identity or any other information about the user to the OAuth client.</li>
        <li>Access tokens should <i>only</i> be used to make requests to the resource server. Additionally, <a href="/id-tokens-vs-access-tokens/">ID tokens</a> must <i>not</i> be used to make requests to the resource server.</li>
      </ul>

    </p>

    <p>
      Related:
      <ul>
        <li><a href="/2/refresh-tokens/">OAuth 2.0 Refresh Tokens</a></li>
        <li><a href="/id-tokens-vs-access-tokens/">ID Tokens vs Access Tokens</a></li>
        <li><a href="/2/bearer-tokens/">OAuth 2.0 Bearer Token Usage (RFC 6750)</a></li>
        <li><a href="/2/token-introspection/">Token Introspection (RFC 7662)</a></li>
        <li><a href="/2/token-revocation/">Token Revocation (RFC 7009)</a></li>
        <li><a href="/2/jwt/">JSON Web Token (RFC 7519)</a></li>
        <li><a href="/2/jwt-access-tokens/">JWT Profile for Access Tokens</a></li>
      </ul>
    </p>

    <p>More resources
      <ul>
        <li><a href="https://www.oauth.com/oauth2-servers/access-tokens/self-encoded-access-tokens/">Self-Encoded Access Tokens</a> (oauth.com)</li>
        <li><a href="https://www.youtube.com/watch?v=BNEoKexlmA4">OAuth Access Tokens Explained</a> (youtube.com)
      </ul>
    </p>

  </div>
</div>

<?php require('../../../includes/_footer.php'); ?>
