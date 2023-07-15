<?php
$page_title = "HTTP Signatures";
$page_section = "";
$page_secondary = "";
$page_meta_description = "HTTP Signatures describes a method of creating, encoding and verifying a signature within an HTTP request";

require('../../includes/_header.php');
?>

<div class="container">
  <div>

    <h2>HTTP Signatures</h2>

    <p>HTTP Signatures describes a method of creating, encoding and verifying a signature within an HTTP request. This spec can be used for a variety of applications, both involving OAuth as well as outside of OAuth. This work is taking place in the <a href="https://datatracker.ietf.org/doc/charter-ietf-httpbis/">HTTPBIS working group</a> at the IETF.</p>

    <p>The latest version of the in-progress specification can be found at:</p>
    <ul>
      <li><a href="https://tools.ietf.org/html/draft-ietf-httpbis-message-signatures">HTTP Message Signatures</a></li>
    </ul>

    <p>In OAuth, HTTP Signatures can be used as a proof of possession mechanism to add additional protection to <a href="/2/bearer-tokens/">Bearer tokens</a>. Other forms of proof of possession in OAuth include:</p>
    <ul>
      <li><a href="/2/mtls/">RFC 8705: Mutual TLS</a></li>
      <li><a href="/2/dpop/">Draft: DPoP</a></li>
    </ul>

    <p>HTTP Signatures is referenced by <a href="/fapi/">FAPI</a> as one method of signing HTTP messages.</p>

    <p>Historical note: This draft is an evolution of the earlier individual draft "<a href="https://tools.ietf.org/id/draft-cavage-http-signatures-08.html">Signing HTTP Messages</a>" by Cavage. 
      The Cavage draft was never adopted by a working group and expired in 2018. 
      For a brief period of time, some of this work had been picked up by the "<a href="https://github.com/w3c-dvcg">Digital Verification Community Group</a>" 
      and later moved into the "<a href="https://github.com/w3c-ccg">Credentials Community Group</a>" at the W3C. 
      The <a href="https://github.com/w3c-ccg/http-signatures/blob/gh-pages/index.xml">CCG version</a> of the draft was redirected to the IETF draft 
      in the [HTTPBIS working group](https://datatracker.ietf.org/doc/draft-ietf-httpbis-message-signatures/) where development of the draft
      has continued.</p>

    <p>More resources
      <ul>
        <li><a href="https://httpsig.org/">httpsig.org</a> - a live demonstration of HTTP Signatures</li>
        <li><a href="/2/client-authentication/">Client Authentication</a></li>
      </ul>
    </p>

  </div>
</div>

<?php require('../../includes/_footer.php'); ?>
