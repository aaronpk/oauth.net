<?php

$page_title = "Design Goals &mdash; OAuth";
$page_section = "about";
$page_secondary = "design-goals";
$page_meta_description = "";

require('../../includes/_header.php');
?>

  <div class="container">
    <nav>
      <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="/about/credits/">Credits</a></li>
        <li class="breadcrumb-item"><a href="/about/introduction/">Introduction</a></li>
        <li class="breadcrumb-item active">Design Goals</li>
        <li class="breadcrumb-item"><a href="/about/community/">Community</a></li>
      </ul>
    </nav>

    <div>
      <h2>Design Goals</h2>

      <p>In developing OAuth, we sought to invent as little as possible, following the Microformats approach to <a href="http://microformats.org/wiki/process#Document_Current_Behavior">pave existing cowpaths</a> and relying on conventions already established in protocols like Google&#8217;s <a href="http://code.google.com/apis/gdata/authsub.html">AuthSub</a>, <span class="caps">AOL</span>&#8217;s <a href="http://dev.aol.com/openauth">OpenAuth</a>, Yahoo&#8217;s <a href="http://developer.yahoo.com/auth/">BBAuth</a> and <a href="http://www.flickr.com/services/api/auth.howto.web.html">FlickrAuth</a> and Facebook&#8217;s <a href="http://developers.facebook.com/documentation.php?doc=auth">FacebookAuth</a>.</p>

    	<p>While we wanted the best protocol we could design, we also wanted one that people would use and that would be compatible with existing authentication methods, inherit from existing RFCs and reuse web standards wherever possible. In this way, we ended up leaving a lot out of the spec that seemed interesting but ultimately didn&#8217;t belong.</p>

    	<p>The protocol is flexible in that it is adjustable to the actual security needs of different sites, and extensible through different signing algorithms and security features. It is also designed to work on mobile devices and explicitly supports desktop applications.</p>

    	<p>Finally, we worked hard to keep our focus on real-world scenarios and to be conscious of straying towards the impractical or utterly theoretical. Our discipline resulted in a taut protocol that can be easily read and implemented without a great deal of effort. To support this end, we hope to offer a <a href="/code">number of libraries</a> that will greatly reduce the amount of work necessary to <em>Do the Right Thing &trade;</em> or to migrate from existing <span class="caps">API</span> protocols.</p>
    </div>
  </div>

<?php require('../../includes/_footer.php'); ?>