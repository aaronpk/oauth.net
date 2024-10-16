<?php
$page_title = "IPSIE - Interoperability Profile for Secure Identity in the Enterprise";
$page_section = "";
$page_secondary = "";
$page_meta_description = "IPSIE (Interoperability Profiling for Secure Identity in the Enterprise) is an OpenID working group dedicated to developing interoperability and security profiles of existing specifications that that enable secure identity management within the enterprise";

require('../../includes/_header.php');
?>

<div class="container">
  <div>

    <h2>IPSIE - Interoperability Profile for Secure Identity in the Enterprise</h2>

    <p>The Interoperability Profiling for Secure Identity in the Enterprise (IPSIE) Working Group develops interoperability and security profiles of existing specifications such as OpenID Connect that enable secure identity management within the enterprise.</p>

    <p>The initial problem space the working group is focused on includes single sign-on, lifecycle management, entitlements, risk signal sharing, logout, and token revocation. These correspond with existing standards such as <a href="https://openid.net/wg/connect/">OpenID Connect</a>, <a href="https://scim.cloud">SCIM</a>, <a href="https://openid.net/wg/sharedsignals/">Shared Signals and Events</a>, and OAuth.</p>

    <ul>
      <li><a href="https://openid.net/wg/ipsie/">IPSIE Working Group Home Page</a> (openid.net)</li>
      <?php if(time() > strtotime('2024-10-16T06:00:00-0700')): ?>
        <li><a href="https://openid.net/announcing-ipsie-working-group/">Announcing the IPSIE Working Group</a> (openid.net)</li>
        <li><a href="https://www.okta.com/blog/2024/10/oktas-mission-to-standardize-identity-security/">Okta's mission to standardize Identity Security</a> (okta.com)</li>
        <li><a href="https://www.okta.com/press-room/press-releases/okta-openid-foundation-tech-firms-tackle-todays-biggest-cybersecurity/">Okta and the OpenID Foundation Tackle Today's Biggest Cybersecurity Challenge</a> (okta.com)</li>
      <?php endif ?>
    </ul>

    <!--
    <p>More resources
      <ul>
      </ul>
    </p>
    -->

  </div>
</div>

<?php require('../../includes/_footer.php'); ?>
