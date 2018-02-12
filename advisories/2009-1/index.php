<?php
$page_title = "OAuth Security Advisory 2009.1 &mdash; OAuth";
$page_section = "advisories";
$page_secondary = "2009.1";
$page_meta_description = "";
require('../../includes/_header.php');
?>
  <div class="container">

    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/advisories/">Security Advisories</a></li>
        <li class="breadcrumb-item active">2009.1</li>
      </ol>
    </nav>

    <div>
			<h2>OAuth Security Advisory: 2009.1</h2>
			<p>23-April-2009</p>

			<h4>A session fixation attack against the OAuth Request Token approval flow (OAuth Core 1.0 Section 6) has been discovered.</h4>
		
			<h3>Impact</h3>
		
			<p>All standards-compliant implementations of the OAuth Core 1.0 protocol that use the OAuth authorization flow (also known as &#8216;3-legged OAuth&#8217;) are affected.</p>
		
			<h3>Details</h3>
		
			<p>The attack starts with the attacker visiting the (honest) Consumer site, optionally logging into an account he owns at that site. The attacker initiates the OAuth authorization process but rather than follow the redirect from the Consumer to obtain authorization, the attacker instead saves the authorization request <span class="caps">URI</span> (which includes the Request Token). Later, the attacker convinces a victim to click on a link consisting of the authorization request <span class="caps">URI</span> to approve access to the victim&#8217;s Protected Resources to the (honest) Consumer.</p>
		
			<p>By clicking on the link, the victim continues the request that the attacker initiated, including the Request Token that the (honest) Consumer issued to the attacker. Note that the victim is redirected to the legitimate approval page at the Service Provider and prompted by the Service Provider to approve the (honest) Consumer. It is not possible for the victim to detect that there is an ongoing attack.</p>
		
			<p>After the victim grants approval, the attacker can use the saved Request Token to complete the authorization flow, and access whatever Protected Resources are exposed by the (honest) Consumer site as part of its service. If the attacker has an account with the (honest) Consumer site, the access may persist in future visits.</p>
		
			<p><span class="caps">XSRF</span> protections at the Consumer site do not mitigate against this attack.</p>
		
			<h3>Advice</h3>
		
			<p>It is recommended that Service Providers immediately implement appropriate monitoring to detect exploit attempts.</p>
		
			<p>The <a href="http://oauth.net/core/1.0a">OAuth Core 1.0 Revision A</a> specification has been published to address this issue. It is strongly recommended that all implementations are updated to the new revision.</p>
		
			<p>It is recommended that Service Providers offer adequate messaging to their users about the risks of starting an authorization flow from an untrusted location (see below for suggested wording). This warning should be displayed in the authorization interface for Consumer sites that have not upgraded to a version of the spec that fixes this issue. This warning can be suppressed if the Service Provider and the Consumer have agreed on other mitigation procedures.</p>
		
			<p>Suggested wording on authorization pages:</p>
		
			<p>“This website is registered with <span class="caps">SERVICE</span>_PROVIDER_DOMAIN_NAME to make authorization requests, but has not been configured to send requests securely.  If you grant access but you did not initiate this request at <span class="caps">CONSUMER</span>_DOMAIN_NAME, it may be possible for other users of <span class="caps">CONSUMER</span>_DOMAIN_NAME to access your data.  We recommend you deny access unless you are certain that you initiated this request directly with <span class="caps">CONSUMER</span>_DOMAIN_NAME.”</p>
		
			<h3>Reported Attacks</h3>
		
			<p>There are no reported exploits of this attack.</p>
		
    </div>
  </div>

<?php require('../../includes/_footer.php'); ?>