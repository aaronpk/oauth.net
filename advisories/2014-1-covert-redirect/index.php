<?php
$page_title = "OAuth Security Advisory 2014.1 &mdash; Covert Redirect";
$page_section = "advisories";
$page_secondary = "2014.1";
$page_meta_description = "";
require('../../includes/_header.php');
?>
  <div class="container">

    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/advisories/">Security Advisories</a></li>
        <li class="breadcrumb-item active">2014.1</li>
      </ol>
    </nav>

    <div>
      <h2>OAuth Security Advisory: 2014.1 "Covert Redirect"</h2>
      <p>04-May-2014</p>
   
      <h3>What is it?</h3>
      <p>Covert Redirect is a name given to an open redirector attack by security researcher Wang Jing
in the Spring of 2014.</p>
      <p>It describes a process where a malicious attacker intercepts a request 
from an OAuth Client to an OAuth 2.0 Authorization Server and alters a query parameter in 
the request called "redirect_uri" with the intention of causing the OAuth Authorization Server 
to direct the resulting OAuth Response to a malicious location rather than to the originally 
requesting client, thus exposing any returned secrets to the attacker.</p>

      <h3>Is Covert Redirect a New Threat?</h3>
      <p><b>No.</b> <a href="http://tools.ietf.org/html/rfc6819#section-4.1.5">Section 4.1.5</a>
and <a href="http://tools.ietf.org/html/rfc6819#section-4.2.4">Section 4.2.4</a>
        of the official OAuth 2.0 Threat Model (RFC 6819) details this threat, and
<a href="http://tools.ietf.org/html/rfc6819#section-5.2.3.5">section 5.2.3.5 of the RFC</a> 
documents the recommended 
mitigations. This threat is more commonly known as "Open Redirector". The threat model 
was ratified as an RFC in January of 2013, and has been used effectively by many OAuth 
implementations and deployments to secure their services against Open Redirector attacks.</p>

      <!--
      <h3>How does the alleged vulnerability work?</h3>
      <p>There are two sections in the document below that explain Covert Redirect, a High Level
Summary that attempts to explain the vulnerability in broad strokes, and a Technical Deep Dive 
that gives you as much protocol level detail as possible. If you are already a deep knowledge 
expert in this area and you are impatient, we suggest you jump straight to the TL;DR.</p>
      -->

      <h3>Who Should be Concerned?</h3>
      <p>Anyone who deploys OAuth 2.0, either as a client or as an Authorization Service, should be 
concerned. However this concern should not be new; anyone who deploys OAuth 2.0 should 
be aware of and understand the mitigations for all of the threats in <a href="http://tools.ietf.org/html/rfc6819">RFC 6819</a>, not just this one. 
<!-- If you do not care to read <a href="http://tools.ietf.org/html/rfc6819">RFC 6819</a>, and you 
just want to know about this one particular threat, 
you can read a detailed analysis here, and also see detailed mitigation information below. --></p>

    
      <h3>Recommendations</h3>
      <p>Require clients to register full redirect URI as described in <a href="http://tools.ietf.org/html/rfc6819#section-5.2.3.5">RFC 6819 Section 5.2.3.5</a></p>
      <p>Use the state parameter to add custom information to the request so that you don't have to add it to the redirect URI. (Note: Don't include a URL in the state parameter otherwise you may set yourself up for an open redirect vulnerability again.)</p>
    

      <h3>More Information</h3>
      <ul>
        <li><a href="http://www.symantec.com/connect/blogs/covert-redirect-flaw-oauth-not-next-heartbleed">Covert Redirect Flaw in OAuth is Not the Next Heartbleed</a> (symantec.com)</li>
        <li><a href="http://mashable.com/2014/05/02/oauth-openid-not-new-heartbleed/">Another Security Flaw Gets the Heartbleed Treatment, But Don't Believe the Hype</a> (mashable.com)</li>
        <li><a href="http://www.zdnet.com/covert-redirect-mostly-hype-and-certainly-no-heartbleed-7000029039/">Covert Redirect mostly hype and certainly no Heartbleed</a> (zdnet.com)</li>
      </ul>

      <ul>
        <li><a href="http://www.thread-safe.com/2014/05/covert-redirect-and-its-real-impact-on.html">Covert Redirect and its real impact on OAuth and OpenID Connect</a> (John Bradley)</li>
        <li><a href="http://dannythorpe.com/2014/05/02/tech-analysis-of-serious-security-flaw-in-oauth-openid-discovered/">Tech Analysis of "Serious security flaw in OAuth, OpenID Discovered"</a> (Danny Thorpe)</li>
        <li><a href="https://www.tbray.org/ongoing/When/201x/2014/05/03/Security-Farce">Security Farce</a> (Tim Bray)</li>
        <li><a href="http://nat.sakimura.org/2014/05/08/covert-redirect-is-not-new/">Covert Redirect is not new but...</a> (Nat Sakimura)</li>
      </ul>
    </div>
  </div>

<?php require('../../includes/_footer.php'); ?>
