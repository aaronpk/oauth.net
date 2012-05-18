<?php

$page_title = "FAQ &mdash; OAuth";
$page_section = "documentation";
$page_secondary = "faq";
$page_meta_description = "";

?>
<?php require('../../includes/_header.php'); ?>

<body class="<?php echo $page_section; ?>">
  <div class="container">
    <div id="header" class="column first last span-20">
      <h1 id="site-name" class="column first span-5 prepend-1 append-1"><a href="/">OAuth</a></h1>
      <div id="primary" class="column span-13 last">

<?php require('../../includes/_nav_primary.php'); ?>

      </div>
      <div id="secondary" class="column span-18 append-1 prepend-1 first last">
        <ul class="navigation">
          <li><a href="/documentation/spec">Spec</a></li>
          <li><a class="selected" href="/documentation/faq">FAQ</a></li>
          <li><a href="/documentation/getting-started">Getting Started</a></li>
        </ul>
      </div>
    </div>

    <div id="main" class="column first last span-18 prepend-1 append-1">
			<h2>FAQ</h2>
			
			<style type="text/css" media="all">
				div#gsfn-search-widget img{border:none}
				div#gsfn-search-widget{font-size:12px;width:auto;border:6px solid #DDD;padding:10px;margin-bottom:1em}
				div#gsfn-search-widget a.widget_title{color:#000;display:block;margin-bottom:10px;font-weight:bold}
				div#gsfn-search-widget .powered_by{margin-top:8px;padding-top:8px;border-top:1px solid #DDD}
				div#gsfn-search-widget .powered_by a{color:#333;font-size:90%}
				div#gsfn-search-widget form{margin-bottom:8px}
				div#gsfn-search-widget form label{margin-bottom:5px;display:block}
				div#gsfn-search-widget form #gsfn_search_query{width:60%}
				div#gsfn-search-widget div.gsfn_content li{text-align:left;margin-bottom:6px}
				div#gsfn-search-widget div.gsfn_content a.gsfn_link{line-height:1}
				div#gsfn-search-widget div.gsfn_content span.time{font-size:90%;padding-left:3px}
				div#gsfn-search-widget div.gsfn_content p.gsfn_summary{margin-top:2px}
				div#gsfn-list-widget img{border:none}
				div#gsfn-list-widget{font-size:12px;width:auto;border:6px solid #DDD;padding:10px}
				div#gsfn-list-widget a.widget_title{color:#000;display:block;margin-bottom:10px;font-weight:bold}
				div#gsfn-list-widget .powered_by{margin-top:8px;padding-top:8px;border-top:1px solid #DDD}
				div#gsfn-list-widget .powered_by a{color:#333;font-size:90%}
				div#gsfn-list-widget div#gsfn_content li{text-align:left;margin-bottom:6px}
				div#gsfn-list-widget div#gsfn_content a.gsfn_link{line-height:1}
				div#gsfn-list-widget div#gsfn_content span.time{font-size:90%;padding-left:3px}
				div#gsfn-list-widget div#gsfn_content p.gsfn_summary{margin-top:2px}
			</style>
			
			<div id="gsfn-search-widget">
			  <a href="http://getsatisfaction.com/oauth" class="widget_title">People-Powered Community Support for OAuth</a>
			  <div class="gsfn_content">
			    <form id="gsfn_search_form" action="http://getsatisfaction.com/oauth" method="get" accept-charset="utf-8" onsubmit="gsfn_search(this); return false;">
			      <input type="hidden" name="widget" value="" />
			      <input type="hidden" name="limit" value="5" />
			      <input type="hidden" name="style" value="" />
			      <input type="hidden" name="callback" value="gsfnResultsCallback" />
			      <input type="hidden" name="format" value="json" />
			      <label for="gsfn_search_query" class="gsfn_label">Ask a question, share an idea, report a problem, or just talk&#8230;</label>
			      <input type="text" name="query" value="" id="gsfn_search_query" maxlength="120" />
			      <input type="submit" id="continue" value="Continue" />
			    </form>
			    <div id="gsfn_search_results" style="height: auto;"></div>
			  </div>
			</div>
			
			<script src="http://2.static.getsatisfaction.com/oauth/widgets/javascripts/1944/widgets.js" type="text/javascript"></script>
			
			<div id="gsfn-list-widget">
			  <a href="http://getsatisfaction.com/oauth" class="widget_title">Active community support discussions in OAuth</a>
			  <div id="gsfn_content">Loading&#8230;</div>
			  <div class="powered_by"><a href="http://getsatisfaction.com/"><img alt="Favicon" src="http://www.getsatisfaction.com/favicon.gif" style="vertical-align: middle;" /></a> <a href="http://getsatisfaction.com/">Service and support by Satisfaction</a></div>
			</div>
			
			<script src="http://2.static.getsatisfaction.com/oauth/widgets/javascripts/1944/widgets.js" type="text/javascript"></script><script src="http://getsatisfaction.com/oauth/topics.json?callback=gsfnTopicsCallback&amp;limit=5&amp;sort=last_active_at&amp;style=topics" type="text/javascript"></script>

    </div>
<?php require('../../includes/_footer.php'); ?>