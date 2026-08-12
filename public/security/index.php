<?php
$page_title = "OAuth Security &mdash; OAuth";
$page_section = "security";
$page_secondary = "";
$page_meta_description = "";

require('../../includes/_header.php');
?>

  <div class="container">

    <h2>OAuth Security</h2>

    <div class="grid mb-4">
      <div class="audience-card">
        <h5><a href="/2/oauth-best-practice/">OAuth 2.0 Security Best Current Practice</a></h5>
        <p>RFC 9700. Describes security requirements and recommendations for clients and servers implementing OAuth 2.0. Supersedes earlier guidance and reflects current best practices.</p>
        <p><a href="https://datatracker.ietf.org/doc/html/rfc9700">datatracker.ietf.org &rarr;</a></p>
      </div>
      <div class="audience-card">
        <h5><a href="/2/security-considerations/">Threat Model and Security Considerations</a></h5>
        <p>RFC 6819. Documents known attacks against OAuth 2.0 — both theoretical and demonstrated — along with countermeasures for each.</p>
        <p><a href="https://tools.ietf.org/html/rfc6819">tools.ietf.org &rarr;</a></p>
      </div>
    </div>

    <h3>Security Advisories</h3>

    <p>The OAuth community is committed to identifying and addressing any security issues raised relating to the OAuth protocol and extensions. Due to the nature of many security threats, they cannot be disclosed before sufficient notice is given to vulnerable parties.</p>

    <p>Please report any concerns with specific products to the vendor of that product using their own vulnerability reporting mechanisms. For concerns related to the spec itself, refer to the <a href="https://www.ietf.org/standards/rfcs/vulnerabilities/">IETF Guidance on Reporting Protocol Vulnerabilities</a>.</p>

    <h4>OAuth 2.0</h4>
    <ul>
      <li><a href="/advisories/2014-1-covert-redirect/">2014.1 Covert Redirect</a></li>
    </ul>

    <h4>OAuth Core 1.0</h4>
    <ul>
      <li><a href="/advisories/2009-1/">2009.1 Session Fixation Attack</a></li>
    </ul>

    <h3>Security Workshops</h3>
    <p>The OAuth Security Workshop (OSW) aims to improve the security of OAuth and related Internet protocols through direct exchange between academic researchers, IETF OAuth Working Group members, and industry.</p>
    <p><a href="/workshop/">See upcoming workshops &rarr;</a></p>

    <h3>Additional Resources</h3>
    <ul>
      <li><a href="https://www.oauth.com/oauth2-servers/authorization/security-considerations/">Security Considerations when Building an Authorization Server</a> (oauth.com)</li>
      <li><a href="https://arxiv.org/pdf/1601.01229v3.pdf">A Comprehensive Formal Security Analysis of OAuth 2.0</a> (arxiv.org, PDF)</li>
    </ul>

  </div>

<?php require('../../includes/_footer.php'); ?>
