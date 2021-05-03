<?php
$page_title = "Introduction &mdash; OAuth";
$page_section = "about";
$page_secondary = "introduction";

require('../../../includes/_header.php');
?>
  <div class="container">
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/about/credits/">Credits</a></li>
        <li class="breadcrumb-item active">Introduction</li>
        <li class="breadcrumb-item"><a href="/about/design-goals/">Design Goals</a></li>
        <li class="breadcrumb-item"><a href="/about/community/">Community</a></li>
      </ol>
    </nav>

    <div>
      <h2>Introduction</h2>

      <p><small style="font-size:0.8em;">Adapted from <a href="https://hueniversedotcom.wordpress.com/2007/09/05/explaining-oauth/">Explaining OAuth</a>, published on September 05, 2007 by Eran Hammer-Lahav</small></p>

      <hr />

      <h3>A Little Bit of History</h3>

      <p>OAuth started around November 2006, while Blaine Cook was working on the Twitter OpenID implementation. He got in touch with Chris Messina looking for a way to use OpenID together with the Twitter <span class="caps">API</span> to delegate authentication. They met with David Recordon, Larry Halff, and others at a CitizenSpace OpenID meeting to discuss existing solutions. Larry was looking into integrating OpenID for Ma.gnolia Dashboard Widgets. After reviewing existing OpenID functionality, as well as other industry practices, they came to the conclusion that there was no open standard for <span class="caps">API</span> access delegation. The conversation continued online and off for a few months.</p>

      <p>In April 2007, a Google group was created with a small group of implementers to write a proposal for an open protocol. It turned out that this problem wasn&#8217;t unique to OpenID and when DeWitt Clinton from Google caught wind of the project, he  expressed his interest in supporting the effort, if only as a stakeholder. In July 2007 the team drafted an initial specification and the group was opened to anyone interested in contributing. On October 3rd, 2007 the OAuth Core 1.0 final draft was released.</p>

      <h3 id="what-is-it-for">What is it For?</h3>

      <p>Many luxury cars today come with a valet key. It is a special key you give the parking attendant and unlike your regular key, will not allow the car to drive more than a mile or two. Some valet keys will not open the trunk, while others will block access to your onboard cell phone address book. Regardless of what restrictions the valet key imposes, the idea is very clever. You give someone limited access to your car with a special key, while using your regular key to unlock everything.</p>

      <p>Every day new websites launch offering services which tie together functionality from other sites. A photo lab printing your online photos, a social network using your address book to look for friends, and APIs to build your own desktop application version of a popular site. These are all great services – what is not so great about some of the implementations is their request for your username and password to the other site. When you agree to share your secret credentials, not only do you expose your password to someone else (yes, that same password you also use for online banking), you also give them full access to do as they wish. They can do anything they wanted – even change your password and lock you out.</p>

      <p>This is the problem OAuth solves. It allows you, the User, to grant access to your private resources on one site (which is called the Service Provider), to another site (called Consumer, not to be confused with you, the User). While OpenID is all about using a single identity to sign into many sites, OAuth is about giving access to your stuff without sharing your identity at all (or its secret parts).</p>

      <h3>OAuth and OpenID</h3>

      <p>OAuth is not an OpenID extension and at the specification level, shares only few things with OpenID – some common authors and the fact both are open specification in the realm of authentication and access control. ‘Why OAuth is not an OpenID extension?’ is probably the most frequently asked question in the group. The answer is simple, OAuth attempts to provide a standard way for developers to offer their services via an <span class="caps">API</span> without forcing their users to expose their passwords (and other credentials). If OAuth depended on OpenID, only OpenID services would be able to use it, and while OpenID is great, there are many applications where it is not suitable or desired. Which doesn’t mean to say you cannot use the two together. OAuth talks about getting users to grant access while OpenID talks about making sure the users are really who they say they are. They should work great together.</p>

      <h3>Who is Going to Use it?</h3>

      <p>Everyone. If you are a web developer – you, we hope.</p>

      <h3>Is OAuth a New Concept?</h3>

      <p>No. OAuth is the standardization and combined wisdom of many well established industry protocols. It is similar to other protocols currently in use (Google AuthSub, <span class="caps">AOL</span> OpenAuth, Yahoo BBAuth, Upcoming <span class="caps">API</span>, Flickr <span class="caps">API</span>, Amazon Web Services <span class="caps">API</span>, etc). Each protocol provides a proprietary method for exchanging user credentials for an access token or ticker. OAuth was created by carefully studying each of these protocols and extracting the best practices and commonality that will allow new implementations as well as a smooth transition for existing services to support OAuth.</p>

      <p>An area where OAuth is more evolved than some of the other protocols and services is its direct handling of non-website services. OAuth has built in support for desktop applications, mobile devices, set-top boxes, and of course websites. Many of the protocols today use a shared secret hardcoded into your software to communicate, something which pose an issue when the service trying to access your private data is open source.</p>

      <!--
      <h3>Is It Ready?</h3>

      <p><a href="http://oauth.net/core/1.0">OAuth Core 1.0</a>, the main protocol, was finalized in December. It is stable and ready to be implemented. <a href="http://oauth.net/code">Libraries</a> are already available for many popular platforms such as <span class="caps">PHP</span>, Rails, Python, .NET, C, and Perl. We expect most upcoming work to focus on implementations and the development of extensions to the protocol.</p>
      -->

    </div>
  </div>

<?php require('../../../includes/_footer.php'); ?>
