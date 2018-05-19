<?php
$page_title = "OAuth 2.0 Implicit Grant Type";
$page_section = "";
$page_secondary = "";
$page_meta_description = "The OAuth 2.0 implicit grant type";
require('../../../includes/_header.php');
?>
<div class="container">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/2/">OAuth 2.0</a></li>
      <li class="breadcrumb-item"><a href="/2/grant-types/">Grant Types</a></li>
      <li class="breadcrumb-item active">Implicit</li>
    </ol>
  </nav>

  <div>

    <h2>OAuth 2.0 Implicit</h2>

    <?php require('../../../includes/_carbon.php'); ?>

    <p><a href="https://tools.ietf.org/html/rfc6749#section-1.3.2" class="rfc">RFC 6749 §1.3.2</a></p>

    <p>The Implicit grant type is a simplified flow that can be used by public clients, where the access token is returned immediately without an extra authorization code exchange step.</p>
    <p>It is generally not recommended to use the implicit flow (and some servers prohibit this flow entirely). In the time since the spec was originally written, the industry best practice has changed to recommend that public clients should use either the <a href="/2/grant-types/authorization-code/">authorization code</a> flow without the client secret, or use the <a href="/2/pkce/">PKCE</a> extension instead.</p>
    <p>More information can be found on the OAuth mailing list from: <a href="https://www.ietf.org/mail-archive/web/oauth/current/msg16966.html">Redhat</a>, <a href="https://www.ietf.org/mail-archive/web/oauth/current/msg16968.html">Deutsche Telekom</a>, and <a href="https://www.ietf.org/mail-archive/web/oauth/current/msg16967.html">Smart Health IT</a>, as well as <a href="https://www.ietf.org/mail-archive/web/oauth/current/msg18020.html">this thread</a>.</p>

    <p>More resources
      <ul>
        <li><a href="https://aaronparecki.com/oauth-2-simplified/#single-page-apps">Single-Page Apps</a> (aaronparecki.com)</li>
      </ul>
    </p>

  </div>
</div>

<?php require('../../../includes/_footer.php'); ?>
