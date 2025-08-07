<?php
$page_title = "GNAP - Grant Negotiation and Authorization Protocol";
$page_section = "";
$page_secondary = "";
$page_meta_description = "GNAP is an in-progress effort to develop a next-generation authorization protocol";

require('../../includes/_header.php');
?>

<div class="container">
  <div>

    <h2>GNAP</h2>

    <p>Grant Negotiation and Authorization Protocol (GNAP) is a next-generation authorization protocol formalized as <a href="https://datatracker.ietf.org/doc/rfc9635/">RFC 9635</a> in October 2024. This work took place in the <a href="https://datatracker.ietf.org/wg/gnap/about/">GNAP working group</a> at the IETF. Questions, suggestions and protocol changes should be discussed on the <a href="https://www.ietf.org/mailman/listinfo/txauth">mailing list</a> or <a href="https://github.com/ietf-wg-gnap/core-protocol">GitHub</a>.</p>

    <p>
      <ul>
        <li><a href="https://datatracker.ietf.org/doc/rfc9635/">RFC 9635</a> - GNAP Core</li>
        <li><a href="https://datatracker.ietf.org/doc/rfc9767/">RFC 9767</a> - GNAP Resource Server Connections</li>
      </ul>
    </p>
    
    <p>Early drafts of the spec were called "XYZ", "TxAuth", and "Transactional Authorization".</p>

    <p>See Also: <b><a href="/2.1/">OAuth 2.1</a></b>, an officially adopted effort to consolidate and simplify the best practices of OAuth 2.0.</p>

    <p>More resources
      <ul>
        <li><a href="https://justinsecurity.medium.com/gnap-a-conversation-of-authorization-5b603d850fe9">RFC announcement</a> and status of <a href="https://datatracker.ietf.org/doc/html/draft-ietf-gnap-resource-servers">GNAP Resource Servers</a></li>
        <li><a href="https://oauth.xyz/">OAuth.xyz</a> (Justin Richer)</li>
        <li><a href="https://medium.com/@justinsecurity/xyz-interaction-a84091d2a8c8">XYZ: Interaction</a> (Justin Richer)</li>
        <li><a href="https://medium.com/@justinsecurity/xyz-compatibility-with-oauth-2-f7b490be536d">XYZ: Compatibility with OAuth 2.0</a> (Justin Richer)</li>
        <li><a href="https://www.youtube.com/watch?v=U9i7YaN8v9c">Transactional Authorization - Identiverse 2019</a> (Justin Richer)</li>
      </ul>
    </p>

  </div>
</div>

<?php require('../../includes/_footer.php'); ?>
