<?php
$page_title = "GNAP - Grant Negotiation and Authorization Protocol";
$page_section = "";
$page_secondary = "";
$page_meta_description = "GNAP is an in-progress effort to develop a next-generation protocol based on years of knowledge and experience with OAuth 2";

require('../../includes/_header.php');
?>

<div class="container">
  <div>

    <h2>GNAP</h2>

    <p>GNAP (Grant Negotiation and Authorization Protocol) is an in-progress effort to develop a next-generation protocol based on years of knowledge and experience with OAuth 2. This work is taking place in the <a href="https://datatracker.ietf.org/doc/charter-ietf-gnap/">GNAP working group</a> at the IETF. Questions, suggestions and protocol changes should be discussed on the <a href="https://www.ietf.org/mailman/listinfo/txauth">mailing list</a> or <a href="https://github.com/ietf-wg-gnap/core-protocol">GitHub</a>.</p>

    <p>The latest version of the in-progress specification can be found at:</p>
    <ul>
      <li><a href="https://tools.ietf.org/html/draft-ietf-gnap-core-protocol">GNAP Core Protocol</a></li>
      <li><a href="https://tools.ietf.org/html/draft-ietf-gnap-resource-servers">GNAP Resource Servers</a></li>
    </ul>

    <p>Read the design details and examples that motivated the original design at <a href="https://oauth.xyz">oauth.xyz</a>. Early drafts of the spec were called "XYZ", "TxAuth", and "Transactional Authorization".</p>

    <p>This specification is very much in progress, and interested readers are encouraged to participate in its development by joining the IETF Working Group or attending <a href="https://events.oauth.net/">OAuth events</a>.</p>

    <p>See Also: <b><a href="/2.1/">OAuth 2.1</a></b>, an officially adopted effort to consolidate and simplify the best practices of OAuth 2.0.</p>

    <p>More resources
      <ul>
        <li><a href="https://medium.com/@justinsecurity/xyz-interaction-a84091d2a8c8">XYZ: Interaction</a> (Justin Richer)</li>
        <li><a href="https://medium.com/@justinsecurity/xyz-compatibility-with-oauth-2-f7b490be536d">XYZ: Compatibility with OAuth 2.0</a> (Justin Richer)</li>
        <li><a href="https://aaronparecki.com/2019/07/18/17/adding-identity-to-xyz">Adding Identity to XYZ</a> (Aaron Parecki)</li>
        <li><a href="https://www.youtube.com/watch?v=U9i7YaN8v9c">Transactional Authorization - Identiverse 2019</a> (Justin Richer)</li>
        <li><a href="https://fusionauth.io/blog/2021/01/07/gnap-next-gen-oauth/">GNAP, the next generation of OAuth</a> (Dan Moore)</li>
      </ul>
    </p>

  </div>
</div>

<?php require('../../includes/_footer.php'); ?>
