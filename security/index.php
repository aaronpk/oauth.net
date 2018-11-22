<?php
$page_title = "OAuth Security &mdash; OAuth";
$page_section = "security";
$page_secondary = "";
$page_meta_description = "";

require('../includes/_header.php');
?>

  <div class="container">

    <div>
      <h2>OAuth Security</h2>

      <ul>
        <li><a href="https://tools.ietf.org/html/rfc6819">OAuth 2.0 Threat Model and Security Considerations</a> (ietf.org)</li>
        <li><a href="https://tools.ietf.org/html/draft-ietf-oauth-security-topics">OAuth 2.0 Security Best Current Practice</a> (ietf.org)</li>
        <li><a href="https://www.oauth.com/oauth2-servers/authorization/security-considerations/">Security Considerations when Building an Authorization Server</a> (oauth.com)</li>
        <li><a href="http://ldapwiki.com/wiki/OAuth%202.0%20Security%20Considerations">OAuth 2.0 Security Considerations</a> (ldapwiki.com)</li>
        <li><a href="https://arxiv.org/pdf/1601.01229v3.pdf">A Comprehensive Formal Security Analysis of OAuth 2.0</a> (arxiv.org, PDF)</li>
      </ul>
    </div>

    <div>
      <h3>Security Workshops</h3>
      <p>The OAuth Security Workshop (OSW) aim is to improve the security of OAuth and related Internet protocols by a direct exchange of views between academic researchers, IETF OAuth Working Group members and industry.</p>
      <p><a href="/workshop/">See upcoming workshops</a></p>
    </div>

    <div>
      <h3>Security Advisories</h3>
      <p>The OAuth community is committed to identifying and addressing any security issues raised relating to the OAuth protocol and extensions. Any identified threat will be published on this page as soon as it is safe to do so. Due to the nature of many security threats, they cannot be disclosed before sufficient notice is given to vulnerable parties.</p>

      <p>The following are known security threats and the protocol version they affect:</p>

      <h4>OAuth 2.0</h4>
      <ul>
        <li><a href="/advisories/2014-1-covert-redirect/">2014.1 Covert Redirect </a></li>
      </ul>

      <h4>OAuth Core 1.0</h4>
      <ul>
        <li><a href="/advisories/2009-1/">2009.1 Session Fixation Attack</a></li>
      </ul>

      <h3>How to Report Security Threats</h3>
      <p>Please report any concerns to the <a href="https://www.ietf.org/mailman/listinfo/oauth">OAuth mailing list</a>. Please <span class="caps">DO NOT</span> discuss unknown security threats in public as they are likely to be used by attacker before a solution can be applied.</p>
    </div>

  </div>

<?php require('../includes/_footer.php'); ?>
