<?php
$page_title = "OAuth 2.0 Bearer Token Usage";
$page_section = "";
$page_secondary = "";
$page_meta_description = "OAuth 2.0 Bearer Token Usage - RFC 6750";
require('../../includes/_header.php');
?>
<div class="container">

  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/2/">OAuth 2.0</a></li>
      <li class="breadcrumb-item active">Bearer Tokens</li>
    </ol>
  </nav>

  <div>

    <h2>RFC 6750: OAuth 2.0 Bearer Token Usage</h2>

    <p><a href="http://tools.ietf.org/html/rfc6750" class="rfc">tools.ietf.org/html/rfc6750</a></p>

    <p>Bearer Tokens are the predominant type of access token used with OAuth 2.0.</p>
    <p>A Bearer Token is an opaque string, not intended to have any meaning to clients using it. Some servers will issue tokens that are a short string of hexadecimal characters, while others may use structured tokens such as <a href="/2/jwt/">JSON Web Tokens</a>.</p>
    <p>More resources
      <ul>
        <li><a href="https://www.oauth.com/oauth2-servers/access-tokens/">Access Tokens</a> (oauth.com)</li>
        <li><a href="https://auth0.com/blog/ten-things-you-should-know-about-tokens-and-cookies/">10 Things You Should Know about Tokens</a> (auth0.com)</li>
      </ul>
    </p>

  </div>
</div>

<?php require('../../includes/_footer.php'); ?>
