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

    <p>Historical note: This draft is an evolution of the earlier individual draft "<a href="https://tools.ietf.org/id/draft-cavage-http-signatures-08.html">Signing HTTP Messages</a>" by Cavage. The Cavage draft was never adopted by a working group and expired in 2018. For a brief period of time, some of this work had been picked up by the "<a href="https://github.com/w3c-dvcg">Digital Verification Community Group</a>" and later moved into the "<a href="https://github.com/w3c-ccg">Credentials Community Group</a>" at the W3C. The <a href="https://github.com/w3c-ccg/http-signatures/blob/gh-pages/index.xml">current version</a> of the draft at the CCG is a redirect to the IETF draft in the HTTPBIS working group which is the intended location of where this work will continue.</p>

    <!--
    <p>More resources
      <ul>
        <li><a href="https://fusionauth.io/blog/2021/01/07/gnap-next-gen-oauth/">GNAP, the next generation of OAuth</a> (Dan Moore)</li>
      </ul>
    </p>
    -->

  </div>
</div>

<?php require('../../includes/_footer.php'); ?>
