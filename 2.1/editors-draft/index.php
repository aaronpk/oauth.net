<!DOCTYPE html>
<html lang="en" class="Internet-Draft">
<head>
<meta charset="utf-8">
<meta content="Common,Latin" name="scripts">
<meta content="initial-scale=1.0" name="viewport">
<title>The OAuth 2.1 Authorization Framework</title>
<meta content="Dick Hardt" name="author">
<meta content="Aaron Parecki" name="author">
<meta content="Torsten Lodderstedt" name="author">
<meta content="
       The OAuth 2.1 authorization framework enables a third-party
application to obtain limited access to an HTTP service, either on
behalf of a resource owner by orchestrating an approval interaction
between the resource owner and the HTTP service, or by allowing the
third-party application to obtain access on its own behalf.  This
specification replaces and obsoletes the OAuth 2.0 Authorization
Framework described in RFC 6749. 
    " name="description">
<meta content="xml2rfc 2.40.1" name="generator">
<meta content="Internet-Draft" name="keyword">
<meta content="draft-parecki-oauth-v2-1-03" name="ietf.draft">
<link href="build/draft-parecki-oauth-v2-1.xml" rel="alternate" type="application/rfc+xml">
<link href="#copyright" rel="license">
<style type="text/css">/*

  NOTE: Changes at the bottom of this file overrides some earlier settings.

  Once the style has stabilized and has been adopted as an official RFC style,
  this can be consolidated so that style settings occur only in one place, but
  for now the contents of this file consists first of the initial CSS work as
  provided to the RFC Formatter (xml2rfc) work, followed by itemized and
  commented changes found necssary during the development of the v3
  formatters.

*/

/* fonts */
@import url('https://fonts.googleapis.com/css?family=Noto+Sans'); /* Sans-serif */
@import url('https://fonts.googleapis.com/css?family=Noto+Serif'); /* Serif (print) */
@import url('https://fonts.googleapis.com/css?family=Roboto+Mono'); /* Monospace */

@viewport {
  zoom: 1.0;
  width: extend-to-zoom;
}
@-ms-viewport {
  width: extend-to-zoom;
  zoom: 1.0;
}
/* general and mobile first */
html {
}
body {
  max-width: 90%;
  margin: 1.5em auto;
  color: #222;
  background-color: #fff;
  font-size: 14px;
  font-family: 'Noto Sans', Arial, Helvetica, sans-serif;
  line-height: 1.6;
  scroll-behavior: smooth;
}
.ears {
  display: none;
}

/* headings */
#title, h1, h2, h3, h4, h5, h6 {
  margin: 1em 0 0.5em;
  font-weight: bold;
  line-height: 1.3;
}
#title {
  clear: both;
  border-bottom: 1px solid #ddd;
  margin: 0 0 0.5em 0;
  padding: 1em 0 0.5em;
}
.author {
  padding-bottom: 4px;
}
h1 {
  font-size: 26px;
  margin: 1em 0;
}
h2 {
  font-size: 22px;
  margin-top: -20px;  /* provide offset for in-page anchors */
  padding-top: 33px;
}
h3 {
  font-size: 18px;
  margin-top: -36px;  /* provide offset for in-page anchors */
  padding-top: 42px;
}
h4 {
  font-size: 16px;
  margin-top: -36px;  /* provide offset for in-page anchors */
  padding-top: 42px;
}
h5, h6 {
  font-size: 14px;
}
#n-copyright-notice {
  border-bottom: 1px solid #ddd;
  padding-bottom: 1em;
  margin-bottom: 1em;
}
/* general structure */
p {
  padding: 0;
  margin: 0 0 1em 0;
  text-align: left;
}
div, span {
  position: relative;
}
div {
  margin: 0;
}
.alignRight.art-text {
  background-color: #f9f9f9;
  border: 1px solid #eee;
  border-radius: 3px;
  padding: 1em 1em 0;
  margin-bottom: 1.5em;
}
.alignRight.art-text pre {
  padding: 0;
}
.alignRight {
  margin: 1em 0;
}
.alignRight > *:first-child {
  border: none;
  margin: 0;
  float: right;
  clear: both;
}
.alignRight > *:nth-child(2) {
  clear: both;
  display: block;
  border: none;
}
svg {
  display: block;
}
.alignCenter.art-text {
  background-color: #f9f9f9;
  border: 1px solid #eee;
  border-radius: 3px;
  padding: 1em 1em 0;
  margin-bottom: 1.5em;
}
.alignCenter.art-text pre {
  padding: 0;
}
.alignCenter {
  margin: 1em 0;
}
.alignCenter > *:first-child {
  border: none;
  /* this isn't optimal, but it's an existence proof.  PrinceXML doesn't
     support flexbox yet.
  */
  display: table;
  margin: 0 auto;
}

/* lists */
ol, ul {
  padding: 0;
  margin: 0 0 1em 2em;
}
ol ol, ul ul, ol ul, ul ol {
  margin-left: 1em;
}
li {
  margin: 0 0 0.25em 0;
}
.ulCompact li {
  margin: 0;
}
ul.empty, .ulEmpty {
  list-style-type: none;
}
ul.empty li, .ulEmpty li {
  margin-top: 0.5em;
}
ul.compact, .ulCompact,
ol.compact, .olCompact {
  line-height: 100%;
  margin: 0 0 0 2em;
}

/* definition lists */
dl {
}
dl > dt {
  float: left;
  margin-right: 1em;
}
/* 
dl.nohang > dt {
  float: none;
}
*/
dl > dd {
  margin-bottom: .8em;
  min-height: 1.3em;
}
dl.compact > dd, .dlCompact > dd {
  margin-bottom: 0em;
}
dl > dd > dl {
  margin-top: 0.5em;
  margin-bottom: 0em;
}

/* links */
a {
  text-decoration: none;
}
a[href] {
  color: #22e; /* Arlen: WCAG 2019 */
}
a[href]:hover {
  background-color: #f2f2f2;
}
figcaption a[href],
a[href].selfRef {
  color: #222;
}
/* XXX probably not this:
a.selfRef:hover {
  background-color: transparent;
  cursor: default;
} */

/* Figures */
tt, code, pre, code {
  background-color: #f9f9f9;
  font-family: 'Roboto Mono', monospace;
}
pre {
  border: 1px solid #eee;
  margin: 0;
  padding: 1em;
}
img {
  max-width: 100%;
}
figure {
  margin: 0;
}
figure blockquote {
  margin: 0.8em 0.4em 0.4em;
}
figcaption {
  font-style: italic;
  margin: 0 0 1em 0;
}
@media screen {
  pre {
    overflow-x: auto;
    max-width: 100%;
    max-width: calc(100% - 22px);
  }
}

/* aside, blockquote */
aside, blockquote {
  margin-left: 0;
  padding: 1.2em 2em;
}
blockquote {
  background-color: #f9f9f9;
  color: #111; /* Arlen: WCAG 2019 */
  border: 1px solid #ddd;
  border-radius: 3px;
  margin: 1em 0;
}
cite {
  display: block;
  text-align: right;
  font-style: italic;
}

/* tables */
table {
  width: 100%;
  margin: 0 0 1em;
  border-collapse: collapse;
  border: 1px solid #eee;
}
th, td {
  text-align: left;
  vertical-align: top;
  padding: 0.5em 0.75em;
}
th {
  text-align: left;
  background-color: #e9e9e9;
}
tr:nth-child(2n+1) > td {
  background-color: #f5f5f5;
}
table caption {
  font-style: italic;
  margin: 0;
  padding: 0;
  text-align: left;
}
table p {
  /* XXX to avoid bottom margin on table row signifiers. If paragraphs should
     be allowed within tables more generally, it would be far better to select on a class. */
  margin: 0;
}

/* pilcrow */
a.pilcrow {
  color: #666; /* Arlen: AHDJ 2019 */
  text-decoration: none;
  visibility: hidden;
  user-select: none;
  -ms-user-select: none;
  -o-user-select:none;
  -moz-user-select: none;
  -khtml-user-select: none;
  -webkit-user-select: none;
  -webkit-touch-callout: none;
}
@media screen {
  aside:hover > a.pilcrow,
  p:hover > a.pilcrow,
  blockquote:hover > a.pilcrow,
  div:hover > a.pilcrow,
  li:hover > a.pilcrow,
  pre:hover > a.pilcrow {
    visibility: visible;
  }
  a.pilcrow:hover {
    background-color: transparent;
  }
}

/* misc */
hr {
  border: 0;
  border-top: 1px solid #eee;
}
.bcp14 {
  font-variant: small-caps;
}

.role {
  font-variant: all-small-caps;
}

/* info block */
#identifiers {
  margin: 0;
  font-size: 0.9em;
}
#identifiers dt {
  width: 3em;
  clear: left;
}
#identifiers dd {
  float: left;
  margin-bottom: 0;
}
#identifiers .authors .author {
  display: inline-block;
  margin-right: 1.5em;
}
#identifiers .authors .org {
  font-style: italic;
}

/* The prepared/rendered info at the very bottom of the page */
.docInfo {
  color: #666; /* Arlen: WCAG 2019 */
  font-size: 0.9em;
  font-style: italic;
  margin-top: 2em;
}
.docInfo .prepared {
  float: left;
}
.docInfo .prepared {
  float: right;
}

/* table of contents */
#toc  {
  padding: 0.75em 0 2em 0;
  margin-bottom: 1em;
}
nav.toc ul {
  margin: 0 0.5em 0 0;
  padding: 0;
  list-style: none;
}
nav.toc li {
  line-height: 1.3em;
  margin: 0.75em 0;
  padding-left: 1.2em;
  text-indent: -1.2em;
}
/* references */
.references dt {
  text-align: right;
  font-weight: bold;
  min-width: 7em;
}
.references dd {
  margin-left: 8em;
  overflow: auto;
}

.refInstance {
  margin-bottom: 1.25em;
}

.references .ascii {
  margin-bottom: 0.25em;
}

/* index */
.index ul {
  margin: 0 0 0 1em;
  padding: 0;
  list-style: none;
}
.index ul ul {
  margin: 0;
}
.index li {
  margin: 0;
  text-indent: -2em;
  padding-left: 2em;
  padding-bottom: 5px;
}
.indexIndex {
  margin: 0.5em 0 1em;
}
.index a {
  font-weight: 700;
}
/* make the index two-column on all but the smallest screens */
@media (min-width: 600px) {
  .index ul {
    -moz-column-count: 2;
    -moz-column-gap: 20px;
  }
  .index ul ul {
    -moz-column-count: 1;
    -moz-column-gap: 0;
  }
}

/* authors */
address.vcard {
  font-style: normal;
  margin: 1em 0;
}

address.vcard .nameRole {
  font-weight: 700;
  margin-left: 0;
}
address.vcard .label {
  font-family: "Noto Sans",Arial,Helvetica,sans-serif;
  margin: 0.5em 0;
}
address.vcard .type {
  display: none;
}
.alternative-contact {
  margin: 1.5em 0 1em;
}
hr.addr {
  border-top: 1px dashed;
  margin: 0;
  color: #ddd;
  max-width: calc(100% - 16px);
}

/* temporary notes */
.rfcEditorRemove::before {
  position: absolute;
  top: 0.2em;
  right: 0.2em;
  padding: 0.2em;
  content: "The RFC Editor will remove this note";
  color: #9e2a00; /* Arlen: WCAG 2019 */
  background-color: #ffd; /* Arlen: WCAG 2019 */
}
.rfcEditorRemove {
  position: relative;
  padding-top: 1.8em;
  background-color: #ffd; /* Arlen: WCAG 2019 */
  border-radius: 3px;
}
.cref {
  background-color: #ffd; /* Arlen: WCAG 2019 */
  padding: 2px 4px;
}
.crefSource {
  font-style: italic;
}
/* alternative layout for smaller screens */
@media screen and (max-width: 1023px) {
  body {
    padding-top: 2em;
  }
  #title {
    padding: 1em 0;
  }
  h1 {
    font-size: 24px;
  }
  h2 {
    font-size: 20px;
    margin-top: -18px;  /* provide offset for in-page anchors */
    padding-top: 38px;
  }
  #identifiers dd {
    max-width: 60%;
  }
  #toc {
    position: fixed;
    z-index: 2;
    top: 0;
    right: 0;
    padding: 0;
    margin: 0;
    background-color: inherit;
    border-bottom: 1px solid #ccc;
  }
  #toc h2 {
    margin: -1px 0 0 0;
    padding: 4px 0 4px 6px;
    padding-right: 1em;
    min-width: 190px;
    font-size: 1.1em;
    text-align: right;
    background-color: #444;
    color: white;
    cursor: pointer;
  }
  #toc h2::before { /* css hamburger */
    float: right;
    position: relative;
    width: 1em;
    height: 1px;
    left: -164px;
    margin: 6px 0 0 0;
    background: white none repeat scroll 0 0;
    box-shadow: 0 4px 0 0 white, 0 8px 0 0 white;
    content: "";
  }
  #toc nav {
    display: none;
    padding: 0.5em 1em 1em;
    overflow: auto;
    height: calc(100vh - 48px);
    border-left: 1px solid #ddd;
  }
}

/* alternative layout for wide screens */
@media screen and (min-width: 1024px) {
  body {
    max-width: 724px;
    margin: 42px auto;
    padding-left: 1.5em;
    padding-right: 29em;
  }
  #toc {
    position: fixed;
    top: 42px;
    right: 42px;
    width: 25%;
    margin: 0;
    padding: 0 1em;
    z-index: 1;
  }
  #toc h2 {
    border-top: none;
    border-bottom: 1px solid #ddd;
    font-size: 1em;
    font-weight: normal;
    margin: 0;
    padding: 0.25em 1em 1em 0;
  }
  #toc nav {
    display: block;
    height: calc(90vh - 84px);
    bottom: 0;
    padding: 0.5em 0 0;
    overflow: auto;
  }
  img { /* future proofing */
    max-width: 100%;
    height: auto;
  }
}

/* pagination */
@media print {
  body {

    width: 100%;
  }
  p {
    orphans: 3;
    widows: 3;
  }
  #n-copyright-notice {
    border-bottom: none;
  }
  #toc, #n-introduction {
    page-break-before: always;
  }
  #toc {
    border-top: none;
    padding-top: 0;
  }
  figure, pre {
    page-break-inside: avoid;
  }
  figure {
    overflow: scroll;
  }
  h1, h2, h3, h4, h5, h6 {
    page-break-after: avoid;
  }
  h2+*, h3+*, h4+*, h5+*, h6+* {
    page-break-before: avoid;
  }
  pre {
    white-space: pre-wrap;
    word-wrap: break-word;
    font-size: 10pt;
  }
  table {
    border: 1px solid #ddd;
  }
  td {
    border-top: 1px solid #ddd;
  }
}

/* This is commented out here, as the string-set: doesn't
   pass W3C validation currently */
/*
.ears thead .left {
  string-set: ears-top-left content();
}

.ears thead .center {
  string-set: ears-top-center content();
}

.ears thead .right {
  string-set: ears-top-right content();
}

.ears tfoot .left {
  string-set: ears-bottom-left content();
}

.ears tfoot .center {
  string-set: ears-bottom-center content();
}

.ears tfoot .right {
  string-set: ears-bottom-right content();
}
*/

@page :first {
  padding-top: 0;
  @top-left {
    content: normal;
    border: none;
  }
  @top-center {
    content: normal;
    border: none;
  }
  @top-right {
    content: normal;
    border: none;
  }
}

@page {
  size: A4;
  margin-bottom: 45mm;
  padding-top: 20px;
  /* The follwing is commented out here, but set appropriately by in code, as
     the content depends on the document */
  /*
  @top-left {
    content: 'Internet-Draft';
    vertical-align: bottom;
    border-bottom: solid 1px #ccc;
  }
  @top-left {
    content: string(ears-top-left);
    vertical-align: bottom;
    border-bottom: solid 1px #ccc;
  }
  @top-center {
    content: string(ears-top-center);
    vertical-align: bottom;
    border-bottom: solid 1px #ccc;
  }
  @top-right {
    content: string(ears-top-right);
    vertical-align: bottom;
    border-bottom: solid 1px #ccc;
  }
  @bottom-left {
    content: string(ears-bottom-left);
    vertical-align: top;
    border-top: solid 1px #ccc;
  }
  @bottom-center {
    content: string(ears-bottom-center);
    vertical-align: top;
    border-top: solid 1px #ccc;
  }
  @bottom-right {
      content: '[Page ' counter(page) ']';
      vertical-align: top;
      border-top: solid 1px #ccc;
  }
  */

}

/* Changes introduced to fix issues found during implementation */
/* Make sure links are clickable even if overlapped by following H* */
a {
  z-index: 2;
}
/* Separate body from document info even without intervening H1 */
section {
  clear: both;
}


/* Top align author divs, to avoid names without organization dropping level with org names */
.author {
  vertical-align: top;
}

/* Leave room in document info to show Internet-Draft on one line */
#identifiers dt {
  width: 8em;
}

/* Don't waste quite as much whitespace between label and value in doc info */
#identifiers dd {
  margin-left: 1em;
}

/* Give floating toc a background color (needed when it's a div inside section */
#toc {
  background-color: white;
}

/* Make the collapsed ToC header render white on gray also when it's a link */
@media screen and (max-width: 1023px) {
  #toc h2 a,
  #toc h2 a:link,
  #toc h2 a:focus,
  #toc h2 a:hover,
  #toc a.toplink,
  #toc a.toplink:hover {
    color: white;
    background-color: #444;
    text-decoration: none;
  }
}

/* Give the bottom of the ToC some whitespace */
@media screen and (min-width: 1024px) {
  #toc {
    padding: 0 0 1em 1em;
  }
}

/* Style section numbers with more space between number and title */
.section-number {
  padding-right: 0.5em;
}

/* prevent monospace from becoming overly large */
tt, code, pre, code {
  font-size: 95%;
}

/* Fix the height/width aspect for ascii art*/
pre.sourcecode,
.art-text pre {
  line-height: 1.12;
}


/* Add styling for a link in the ToC that points to the top of the document */
a.toplink {
  float: right;
  margin-right: 0.5em;
}

/* Fix the dl styling to match the RFC 7992 attributes */
dl > dt,
dl.dlParallel > dt {
  float: left;
  margin-right: 1em;
}
dl.dlNewline > dt {
  float: none;
}

/* Provide styling for table cell text alignment */
table td.text-left,
table th.text-left {
  text-align: left;
}
table td.text-center,
table th.text-center {
  text-align: center;
}
table td.text-right,
table th.text-right {
  text-align: right;
}

/* Make the alternative author contact informatio look less like just another
   author, and group it closer with the primary author contact information */
.alternative-contact {
  margin: 0.5em 0 0.25em 0;
}
address .non-ascii {
  margin: 0 0 0 2em;
}

/* With it being possible to set tables with alignment
  left, center, and right, { width: 100%; } does not make sense */
table {
  width: auto;
}

/* Avoid reference text that sits in a block with very wide left margin,
   because of a long floating dt label.*/
.references dd {
  overflow: visible;
}

/* Control caption placement */
caption {
  caption-side: bottom;
}

/* Limit the width of the author address vcard, so names in right-to-left
   script don't end up on the other side of the page. */

address.vcard {
  max-width: 30em;
  margin-right: auto;
}

/* For address alignment dependent on LTR or RTL scripts */
address div.left {
  text-align: left;
}
address div.right {
  text-align: right;
}

/* Provide table alignment support.  We can't use the alignX classes above
   since they do unwanted things with caption and other styling. */
table.right {
 margin-left: auto;
 margin-right: 0;
}
table.center {
 margin-left: auto;
 margin-right: auto;
}
table.left {
 margin-left: 0;
 margin-right: auto;
}

/* Give the table caption label the same styling as the figcaption */
caption a[href] {
  color: #222;
}

@media print {
  .toplink {
    display: none;
  }

  /* avoid overwriting the top border line with the ToC header */
  #toc {
    padding-top: 1px;
  }

  /* Avoid page breaks inside dl and author address entries */
  .vcard {
    page-break-inside: avoid;
  }

}
/* Avoid wrapping of URLs in references */
@media screen {
  .references a {
    white-space: nowrap;
  }
}
/* Tweak the bcp14 keyword presentation */
.bcp14 {
  font-variant: small-caps;
  font-weight: bold;
  font-size: 0.9em;
}
/* Tweak the invisible space above H* in order not to overlay links in text above */
 h2 {
  margin-top: -18px;  /* provide offset for in-page anchors */
  padding-top: 31px;
 }
 h3 {
  margin-top: -18px;  /* provide offset for in-page anchors */
  padding-top: 24px;
 }
 h4 {
  margin-top: -18px;  /* provide offset for in-page anchors */
  padding-top: 24px;
 }
/* Float artwork pilcrow to the right */
@media screen {
  .artwork a.pilcrow {
    display: block;
    line-height: 0.7;
    margin-top: 0.15em;
  }
}
/* Make pilcrows on dd visible */
@media screen {
  dd:hover > a.pilcrow {
    visibility: visible;
  }
}
/* Make the placement of figcaption match that of a table's caption
   by removing the figure's added bottom margin */
.alignLeft.art-text,
.alignCenter.art-text,
.alignRight.art-text {
   margin-bottom: 0;
}
.alignLeft,
.alignCenter,
.alignRight {
  margin: 1em 0 0 0;
}
/* In print, the pilcrow won't show on hover, so prevent it from taking up space,
   possibly even requiring a new line */
@media print {
  a.pilcrow {
    display: none;
  }
}
/* Styling for the external metadata */
div#external-metadata {
  background-color: #eee;
  padding: 0.5em;
  margin-bottom: 0.5em;
  display: none;
}
div#internal-metadata {
  padding: 0.5em;                       /* to match the external-metadata padding */
}
/* Styling for title RFC Number */
h1#rfcnum {
  clear: both;
  margin: 0 0 -1em;
  padding: 1em 0 0 0;
}
/* Make .olPercent look the same as <ol><li> */
dl.olPercent > dd {
  margin: 0 0 0.25em 0;
  min-height: initial;
}
/* Give aside some styling to set it apart */
aside {
  border-left: 1px solid #ddd;
  margin: 1em 0 1em 2em;
  padding: 0.2em 2em;
}
aside > dl,
aside > ol,
aside > ul,
aside > table,
aside > p {
  margin-bottom: 0.5em;
}
/* Additional page break settings */
@media print {
  figcaption, table caption {
    page-break-before: avoid;
  }
}
/* Font size adjustments for print */
@media print {
  body  { font-size: 10pt;      line-height: normal; max-width: 96%; }
  h1    { font-size: 1.72em;    padding-top: 1.5em; } /* 1*1.2*1.2*1.2 */
  h2    { font-size: 1.44em;    padding-top: 1.5em; } /* 1*1.2*1.2 */
  h3    { font-size: 1.2em;     padding-top: 1.5em; } /* 1*1.2 */
  h4    { font-size: 1em;       padding-top: 1.5em; }
  h5, h6 { font-size: 1em;      margin: initial; padding: 0.5em 0 0.3em; }
}
/* Sourcecode margin in print, when there's no pilcrow */
@media print {
  .artwork,
  .sourcecode {
    margin-bottom: 1em;
  }
}
/*
  The margin-left: 0 on <dd> removes all distinction
  between levels from nested <dl>s.  Undo that.
*/
dl.olPercent > dd,
dd {
  margin-left: revert;
}
/* Avoid narrow tables forcing too narrow table captions, which may render badly */
table {
  min-width: 20em;
}
/* ol type a */
ol.type-a { list-style-type: lower-alpha; }
ol.type-A { list-style-type: upper-alpha; }
ol.type-i { list-style-type: lower-roman; }
ol.type-I { list-style-type: lower-roman; }
/* Apply the print table and row borders in general, on request from the RPC,
and increase the contrast between border and odd row background sligthtly */
table {
  border: 1px solid #ddd;
}
td {
  border-top: 1px solid #ddd;
}
tr:nth-child(2n+1) > td {
  background-color: #f8f8f8;
}
/* Use style rules to govern display of the TOC. */
@media screen and (max-width: 1023px) {
  #toc nav { display: none; }
  #toc.active nav { display: block; }
}
</style>
<link href="rfc-local.css" rel="stylesheet" type="text/css">
</head>
<body>
<script src="metadata.min.js"></script>
<table class="ears">
<thead><tr>
<td class="left">Internet-Draft</td>
<td class="center">The OAuth 2.1 Authorization Framework</td>
<td class="right">May 2020</td>
</tr></thead>
<tfoot><tr>
<td class="left">Hardt, et al.</td>
<td class="center">Expires 14 November 2020</td>
<td class="right">[Page]</td>
</tr></tfoot>
</table>
<div id="external-metadata" class="document-information"></div>
<div id="internal-metadata" class="document-information">
<dl id="identifiers">
<dt class="label-workgroup">Workgroup:</dt>
<dd class="workgroup">OAuth Working Group</dd>
<dt class="label-internet-draft">Internet-Draft:</dt>
<dd class="internet-draft">draft-parecki-oauth-v2-1-03</dd>
<dt class="label-published">Published:</dt>
<dd class="published">
<time datetime="2020-05-13" class="published">13 May 2020</time>
    </dd>
<dt class="label-intended-status">Intended Status:</dt>
<dd class="intended-status">Standards Track</dd>
<dt class="label-expires">Expires:</dt>
<dd class="expires"><time datetime="2020-11-14">14 November 2020</time></dd>
<dt class="label-authors">Authors:</dt>
<dd class="authors">
<div class="author">
      <div class="author-name">D. Hardt</div>
<div class="org">SignIn.Org</div>
</div>
<div class="author">
      <div class="author-name">A. Parecki</div>
<div class="org">Okta</div>
</div>
<div class="author">
      <div class="author-name">T. Lodderstedt</div>
<div class="org">yes.com</div>
</div>
</dd>
</dl>
</div>
<h1 id="title">The OAuth 2.1 Authorization Framework</h1>
<section id="section-abstract">
      <h2 id="abstract"><a href="#abstract" class="selfRef">Abstract</a></h2>
<p id="section-abstract-1">The OAuth 2.1 authorization framework enables a third-party
application to obtain limited access to an HTTP service, either on
behalf of a resource owner by orchestrating an approval interaction
between the resource owner and the HTTP service, or by allowing the
third-party application to obtain access on its own behalf.  This
specification replaces and obsoletes the OAuth 2.0 Authorization
Framework described in RFC 6749.<a href="#section-abstract-1" class="pilcrow">¶</a></p>
</section>
<div id="status-of-memo">
<section id="section-boilerplate.1">
        <h2 id="name-status-of-this-memo">
<a href="#name-status-of-this-memo" class="section-name selfRef">Status of This Memo</a>
        </h2>
<p id="section-boilerplate.1-1">
        This Internet-Draft is submitted in full conformance with the
        provisions of BCP 78 and BCP 79.<a href="#section-boilerplate.1-1" class="pilcrow">¶</a></p>
<p id="section-boilerplate.1-2">
        Internet-Drafts are working documents of the Internet Engineering Task
        Force (IETF). Note that other groups may also distribute working
        documents as Internet-Drafts. The list of current Internet-Drafts is
        at <span><a href="https://datatracker.ietf.org/drafts/current/">https://datatracker.ietf.org/drafts/current/</a></span>.<a href="#section-boilerplate.1-2" class="pilcrow">¶</a></p>
<p id="section-boilerplate.1-3">
        Internet-Drafts are draft documents valid for a maximum of six months
        and may be updated, replaced, or obsoleted by other documents at any
        time. It is inappropriate to use Internet-Drafts as reference
        material or to cite them other than as "work in progress."<a href="#section-boilerplate.1-3" class="pilcrow">¶</a></p>
<p id="section-boilerplate.1-4">
        This Internet-Draft will expire on 14 November 2020.<a href="#section-boilerplate.1-4" class="pilcrow">¶</a></p>
</section>
</div>
<div id="copyright">
<section id="section-boilerplate.2">
        <h2 id="name-copyright-notice">
<a href="#name-copyright-notice" class="section-name selfRef">Copyright Notice</a>
        </h2>
<p id="section-boilerplate.2-1">
            Copyright (c) 2020 IETF Trust and the persons identified as the
            document authors. All rights reserved.<a href="#section-boilerplate.2-1" class="pilcrow">¶</a></p>
<p id="section-boilerplate.2-2">
            This document is subject to BCP 78 and the IETF Trust's Legal
            Provisions Relating to IETF Documents
            (<span><a href="https://trustee.ietf.org/license-info">https://trustee.ietf.org/license-info</a></span>) in effect on the date of
            publication of this document. Please review these documents
            carefully, as they describe your rights and restrictions with
            respect to this document. Code Components extracted from this
            document must include Simplified BSD License text as described in
            Section 4.e of the Trust Legal Provisions and are provided without
            warranty as described in the Simplified BSD License.<a href="#section-boilerplate.2-2" class="pilcrow">¶</a></p>
</section>
</div>
<div id="toc">
<section id="section-toc.1">
        <a href="#" onclick="scroll(0,0)" class="toplink">▲</a><h2 id="name-table-of-contents">
<a href="#name-table-of-contents" class="section-name selfRef">Table of Contents</a>
        </h2>
<nav class="toc"><ul class="toc ulEmpty">
<li class="toc ulEmpty" id="section-toc.1-1.1">
            <p id="section-toc.1-1.1.1"><a href="#section-1" class="xref">1</a>.  <a href="#name-introduction" class="xref">Introduction</a><a href="#section-toc.1-1.1.1" class="pilcrow">¶</a></p>
<ul class="toc ulEmpty">
<li class="toc ulEmpty" id="section-toc.1-1.1.2.1">
                <p id="section-toc.1-1.1.2.1.1"><a href="#section-1.1" class="xref">1.1</a>.  <a href="#name-roles" class="xref">Roles</a><a href="#section-toc.1-1.1.2.1.1" class="pilcrow">¶</a></p>
</li>
<li class="toc ulEmpty" id="section-toc.1-1.1.2.2">
                <p id="section-toc.1-1.1.2.2.1"><a href="#section-1.2" class="xref">1.2</a>.  <a href="#name-protocol-flow" class="xref">Protocol Flow</a><a href="#section-toc.1-1.1.2.2.1" class="pilcrow">¶</a></p>
</li>
<li class="toc ulEmpty" id="section-toc.1-1.1.2.3">
                <p id="section-toc.1-1.1.2.3.1"><a href="#section-1.3" class="xref">1.3</a>.  <a href="#name-authorization-grant" class="xref">Authorization Grant</a><a href="#section-toc.1-1.1.2.3.1" class="pilcrow">¶</a></p>
<ul class="toc ulEmpty">
<li class="toc ulEmpty" id="section-toc.1-1.1.2.3.2.1">
                    <p id="section-toc.1-1.1.2.3.2.1.1"><a href="#section-1.3.1" class="xref">1.3.1</a>.  <a href="#name-authorization-code" class="xref">Authorization Code</a><a href="#section-toc.1-1.1.2.3.2.1.1" class="pilcrow">¶</a></p>
</li>
<li class="toc ulEmpty" id="section-toc.1-1.1.2.3.2.2">
                    <p id="section-toc.1-1.1.2.3.2.2.1"><a href="#section-1.3.2" class="xref">1.3.2</a>.  <a href="#name-client-credentials" class="xref">Client Credentials</a><a href="#section-toc.1-1.1.2.3.2.2.1" class="pilcrow">¶</a></p>
</li>
</ul>
</li>
<li class="toc ulEmpty" id="section-toc.1-1.1.2.4">
                <p id="section-toc.1-1.1.2.4.1"><a href="#section-1.4" class="xref">1.4</a>.  <a href="#name-access-token" class="xref">Access Token</a><a href="#section-toc.1-1.1.2.4.1" class="pilcrow">¶</a></p>
</li>
<li class="toc ulEmpty" id="section-toc.1-1.1.2.5">
                <p id="section-toc.1-1.1.2.5.1"><a href="#section-1.5" class="xref">1.5</a>.  <a href="#name-refresh-token" class="xref">Refresh Token</a><a href="#section-toc.1-1.1.2.5.1" class="pilcrow">¶</a></p>
</li>
<li class="toc ulEmpty" id="section-toc.1-1.1.2.6">
                <p id="section-toc.1-1.1.2.6.1"><a href="#section-1.6" class="xref">1.6</a>.  <a href="#name-tls-version" class="xref">TLS Version</a><a href="#section-toc.1-1.1.2.6.1" class="pilcrow">¶</a></p>
</li>
<li class="toc ulEmpty" id="section-toc.1-1.1.2.7">
                <p id="section-toc.1-1.1.2.7.1"><a href="#section-1.7" class="xref">1.7</a>.  <a href="#name-http-redirections" class="xref">HTTP Redirections</a><a href="#section-toc.1-1.1.2.7.1" class="pilcrow">¶</a></p>
</li>
<li class="toc ulEmpty" id="section-toc.1-1.1.2.8">
                <p id="section-toc.1-1.1.2.8.1"><a href="#section-1.8" class="xref">1.8</a>.  <a href="#name-interoperability" class="xref">Interoperability</a><a href="#section-toc.1-1.1.2.8.1" class="pilcrow">¶</a></p>
</li>
<li class="toc ulEmpty" id="section-toc.1-1.1.2.9">
                <p id="section-toc.1-1.1.2.9.1"><a href="#section-1.9" class="xref">1.9</a>.  <a href="#name-notational-conventions" class="xref">Notational Conventions</a><a href="#section-toc.1-1.1.2.9.1" class="pilcrow">¶</a></p>
</li>
</ul>
</li>
<li class="toc ulEmpty" id="section-toc.1-1.2">
            <p id="section-toc.1-1.2.1"><a href="#section-2" class="xref">2</a>.  <a href="#name-client-registration" class="xref">Client Registration</a><a href="#section-toc.1-1.2.1" class="pilcrow">¶</a></p>
<ul class="toc ulEmpty">
<li class="toc ulEmpty" id="section-toc.1-1.2.2.1">
                <p id="section-toc.1-1.2.2.1.1"><a href="#section-2.1" class="xref">2.1</a>.  <a href="#name-client-types" class="xref">Client Types</a><a href="#section-toc.1-1.2.2.1.1" class="pilcrow">¶</a></p>
</li>
<li class="toc ulEmpty" id="section-toc.1-1.2.2.2">
                <p id="section-toc.1-1.2.2.2.1"><a href="#section-2.2" class="xref">2.2</a>.  <a href="#name-client-identifier" class="xref">Client Identifier</a><a href="#section-toc.1-1.2.2.2.1" class="pilcrow">¶</a></p>
</li>
<li class="toc ulEmpty" id="section-toc.1-1.2.2.3">
                <p id="section-toc.1-1.2.2.3.1"><a href="#section-2.3" class="xref">2.3</a>.  <a href="#name-client-authentication" class="xref">Client Authentication</a><a href="#section-toc.1-1.2.2.3.1" class="pilcrow">¶</a></p>
<ul class="toc ulEmpty">
<li class="toc ulEmpty" id="section-toc.1-1.2.2.3.2.1">
                    <p id="section-toc.1-1.2.2.3.2.1.1"><a href="#section-2.3.1" class="xref">2.3.1</a>.  <a href="#name-client-password" class="xref">Client Password</a><a href="#section-toc.1-1.2.2.3.2.1.1" class="pilcrow">¶</a></p>
</li>
<li class="toc ulEmpty" id="section-toc.1-1.2.2.3.2.2">
                    <p id="section-toc.1-1.2.2.3.2.2.1"><a href="#section-2.3.2" class="xref">2.3.2</a>.  <a href="#name-other-authentication-method" class="xref">Other Authentication Methods</a><a href="#section-toc.1-1.2.2.3.2.2.1" class="pilcrow">¶</a></p>
</li>
</ul>
</li>
<li class="toc ulEmpty" id="section-toc.1-1.2.2.4">
                <p id="section-toc.1-1.2.2.4.1"><a href="#section-2.4" class="xref">2.4</a>.  <a href="#name-unregistered-clients" class="xref">Unregistered Clients</a><a href="#section-toc.1-1.2.2.4.1" class="pilcrow">¶</a></p>
</li>
</ul>
</li>
<li class="toc ulEmpty" id="section-toc.1-1.3">
            <p id="section-toc.1-1.3.1"><a href="#section-3" class="xref">3</a>.  <a href="#name-protocol-endpoints" class="xref">Protocol Endpoints</a><a href="#section-toc.1-1.3.1" class="pilcrow">¶</a></p>
<ul class="toc ulEmpty">
<li class="toc ulEmpty" id="section-toc.1-1.3.2.1">
                <p id="section-toc.1-1.3.2.1.1"><a href="#section-3.1" class="xref">3.1</a>.  <a href="#name-authorization-endpoint" class="xref">Authorization Endpoint</a><a href="#section-toc.1-1.3.2.1.1" class="pilcrow">¶</a></p>
<ul class="toc ulEmpty">
<li class="toc ulEmpty" id="section-toc.1-1.3.2.1.2.1">
                    <p id="section-toc.1-1.3.2.1.2.1.1"><a href="#section-3.1.1" class="xref">3.1.1</a>.  <a href="#name-response-type" class="xref">Response Type</a><a href="#section-toc.1-1.3.2.1.2.1.1" class="pilcrow">¶</a></p>
</li>
<li class="toc ulEmpty" id="section-toc.1-1.3.2.1.2.2">
                    <p id="section-toc.1-1.3.2.1.2.2.1"><a href="#section-3.1.2" class="xref">3.1.2</a>.  <a href="#name-redirection-endpoint" class="xref">Redirection Endpoint</a><a href="#section-toc.1-1.3.2.1.2.2.1" class="pilcrow">¶</a></p>
</li>
</ul>
</li>
<li class="toc ulEmpty" id="section-toc.1-1.3.2.2">
                <p id="section-toc.1-1.3.2.2.1"><a href="#section-3.2" class="xref">3.2</a>.  <a href="#name-token-endpoint" class="xref">Token Endpoint</a><a href="#section-toc.1-1.3.2.2.1" class="pilcrow">¶</a></p>
<ul class="toc ulEmpty">
<li class="toc ulEmpty" id="section-toc.1-1.3.2.2.2.1">
                    <p id="section-toc.1-1.3.2.2.2.1.1"><a href="#section-3.2.1" class="xref">3.2.1</a>.  <a href="#name-client-authentication-2" class="xref">Client Authentication</a><a href="#section-toc.1-1.3.2.2.2.1.1" class="pilcrow">¶</a></p>
</li>
</ul>
</li>
<li class="toc ulEmpty" id="section-toc.1-1.3.2.3">
                <p id="section-toc.1-1.3.2.3.1"><a href="#section-3.3" class="xref">3.3</a>.  <a href="#name-access-token-scope" class="xref">Access Token Scope</a><a href="#section-toc.1-1.3.2.3.1" class="pilcrow">¶</a></p>
</li>
</ul>
</li>
<li class="toc ulEmpty" id="section-toc.1-1.4">
            <p id="section-toc.1-1.4.1"><a href="#section-4" class="xref">4</a>.  <a href="#name-obtaining-authorization" class="xref">Obtaining Authorization</a><a href="#section-toc.1-1.4.1" class="pilcrow">¶</a></p>
<ul class="toc ulEmpty">
<li class="toc ulEmpty" id="section-toc.1-1.4.2.1">
                <p id="section-toc.1-1.4.2.1.1"><a href="#section-4.1" class="xref">4.1</a>.  <a href="#name-authorization-code-grant" class="xref">Authorization Code Grant</a><a href="#section-toc.1-1.4.2.1.1" class="pilcrow">¶</a></p>
<ul class="toc ulEmpty">
<li class="toc ulEmpty" id="section-toc.1-1.4.2.1.2.1">
                    <p id="section-toc.1-1.4.2.1.2.1.1"><a href="#section-4.1.1" class="xref">4.1.1</a>.  <a href="#name-authorization-request" class="xref">Authorization Request</a><a href="#section-toc.1-1.4.2.1.2.1.1" class="pilcrow">¶</a></p>
</li>
<li class="toc ulEmpty" id="section-toc.1-1.4.2.1.2.2">
                    <p id="section-toc.1-1.4.2.1.2.2.1"><a href="#section-4.1.2" class="xref">4.1.2</a>.  <a href="#name-authorization-response" class="xref">Authorization Response</a><a href="#section-toc.1-1.4.2.1.2.2.1" class="pilcrow">¶</a></p>
</li>
<li class="toc ulEmpty" id="section-toc.1-1.4.2.1.2.3">
                    <p id="section-toc.1-1.4.2.1.2.3.1"><a href="#section-4.1.3" class="xref">4.1.3</a>.  <a href="#name-access-token-request" class="xref">Access Token Request</a><a href="#section-toc.1-1.4.2.1.2.3.1" class="pilcrow">¶</a></p>
</li>
<li class="toc ulEmpty" id="section-toc.1-1.4.2.1.2.4">
                    <p id="section-toc.1-1.4.2.1.2.4.1"><a href="#section-4.1.4" class="xref">4.1.4</a>.  <a href="#name-access-token-response" class="xref">Access Token Response</a><a href="#section-toc.1-1.4.2.1.2.4.1" class="pilcrow">¶</a></p>
</li>
</ul>
</li>
<li class="toc ulEmpty" id="section-toc.1-1.4.2.2">
                <p id="section-toc.1-1.4.2.2.1"><a href="#section-4.2" class="xref">4.2</a>.  <a href="#name-client-credentials-grant" class="xref">Client Credentials Grant</a><a href="#section-toc.1-1.4.2.2.1" class="pilcrow">¶</a></p>
<ul class="toc ulEmpty">
<li class="toc ulEmpty" id="section-toc.1-1.4.2.2.2.1">
                    <p id="section-toc.1-1.4.2.2.2.1.1"><a href="#section-4.2.1" class="xref">4.2.1</a>.  <a href="#name-authorization-request-and-r" class="xref">Authorization Request and Response</a><a href="#section-toc.1-1.4.2.2.2.1.1" class="pilcrow">¶</a></p>
</li>
<li class="toc ulEmpty" id="section-toc.1-1.4.2.2.2.2">
                    <p id="section-toc.1-1.4.2.2.2.2.1"><a href="#section-4.2.2" class="xref">4.2.2</a>.  <a href="#name-access-token-request-2" class="xref">Access Token Request</a><a href="#section-toc.1-1.4.2.2.2.2.1" class="pilcrow">¶</a></p>
</li>
<li class="toc ulEmpty" id="section-toc.1-1.4.2.2.2.3">
                    <p id="section-toc.1-1.4.2.2.2.3.1"><a href="#section-4.2.3" class="xref">4.2.3</a>.  <a href="#name-access-token-response-2" class="xref">Access Token Response</a><a href="#section-toc.1-1.4.2.2.2.3.1" class="pilcrow">¶</a></p>
</li>
</ul>
</li>
<li class="toc ulEmpty" id="section-toc.1-1.4.2.3">
                <p id="section-toc.1-1.4.2.3.1"><a href="#section-4.3" class="xref">4.3</a>.  <a href="#name-extension-grants" class="xref">Extension Grants</a><a href="#section-toc.1-1.4.2.3.1" class="pilcrow">¶</a></p>
</li>
</ul>
</li>
<li class="toc ulEmpty" id="section-toc.1-1.5">
            <p id="section-toc.1-1.5.1"><a href="#section-5" class="xref">5</a>.  <a href="#name-issuing-an-access-token" class="xref">Issuing an Access Token</a><a href="#section-toc.1-1.5.1" class="pilcrow">¶</a></p>
<ul class="toc ulEmpty">
<li class="toc ulEmpty" id="section-toc.1-1.5.2.1">
                <p id="section-toc.1-1.5.2.1.1"><a href="#section-5.1" class="xref">5.1</a>.  <a href="#name-successful-response" class="xref">Successful Response</a><a href="#section-toc.1-1.5.2.1.1" class="pilcrow">¶</a></p>
</li>
<li class="toc ulEmpty" id="section-toc.1-1.5.2.2">
                <p id="section-toc.1-1.5.2.2.1"><a href="#section-5.2" class="xref">5.2</a>.  <a href="#name-error-response-2" class="xref">Error Response</a><a href="#section-toc.1-1.5.2.2.1" class="pilcrow">¶</a></p>
</li>
</ul>
</li>
<li class="toc ulEmpty" id="section-toc.1-1.6">
            <p id="section-toc.1-1.6.1"><a href="#section-6" class="xref">6</a>.  <a href="#name-refreshing-an-access-token" class="xref">Refreshing an Access Token</a><a href="#section-toc.1-1.6.1" class="pilcrow">¶</a></p>
</li>
<li class="toc ulEmpty" id="section-toc.1-1.7">
            <p id="section-toc.1-1.7.1"><a href="#section-7" class="xref">7</a>.  <a href="#name-accessing-protected-resourc" class="xref">Accessing Protected Resources</a><a href="#section-toc.1-1.7.1" class="pilcrow">¶</a></p>
<ul class="toc ulEmpty">
<li class="toc ulEmpty" id="section-toc.1-1.7.2.1">
                <p id="section-toc.1-1.7.2.1.1"><a href="#section-7.1" class="xref">7.1</a>.  <a href="#name-access-token-types" class="xref">Access Token Types</a><a href="#section-toc.1-1.7.2.1.1" class="pilcrow">¶</a></p>
</li>
<li class="toc ulEmpty" id="section-toc.1-1.7.2.2">
                <p id="section-toc.1-1.7.2.2.1"><a href="#section-7.2" class="xref">7.2</a>.  <a href="#name-bearer-tokens" class="xref">Bearer Tokens</a><a href="#section-toc.1-1.7.2.2.1" class="pilcrow">¶</a></p>
<ul class="toc ulEmpty">
<li class="toc ulEmpty" id="section-toc.1-1.7.2.2.2.1">
                    <p id="section-toc.1-1.7.2.2.2.1.1"><a href="#section-7.2.1" class="xref">7.2.1</a>.  <a href="#name-authenticated-requests" class="xref">Authenticated Requests</a><a href="#section-toc.1-1.7.2.2.2.1.1" class="pilcrow">¶</a></p>
</li>
<li class="toc ulEmpty" id="section-toc.1-1.7.2.2.2.2">
                    <p id="section-toc.1-1.7.2.2.2.2.1"><a href="#section-7.2.2" class="xref">7.2.2</a>.  <a href="#name-the-www-authenticate-respon" class="xref">The WWW-Authenticate Response Header Field</a><a href="#section-toc.1-1.7.2.2.2.2.1" class="pilcrow">¶</a></p>
</li>
<li class="toc ulEmpty" id="section-toc.1-1.7.2.2.2.3">
                    <p id="section-toc.1-1.7.2.2.2.3.1"><a href="#section-7.2.3" class="xref">7.2.3</a>.  <a href="#name-error-codes" class="xref">Error Codes</a><a href="#section-toc.1-1.7.2.2.2.3.1" class="pilcrow">¶</a></p>
</li>
</ul>
</li>
<li class="toc ulEmpty" id="section-toc.1-1.7.2.3">
                <p id="section-toc.1-1.7.2.3.1"><a href="#section-7.3" class="xref">7.3</a>.  <a href="#name-error-response-3" class="xref">Error Response</a><a href="#section-toc.1-1.7.2.3.1" class="pilcrow">¶</a></p>
<ul class="toc ulEmpty">
<li class="toc ulEmpty" id="section-toc.1-1.7.2.3.2.1">
                    <p id="section-toc.1-1.7.2.3.2.1.1"><a href="#section-7.3.1" class="xref">7.3.1</a>.  <a href="#name-extension-token-types" class="xref">Extension Token Types</a><a href="#section-toc.1-1.7.2.3.2.1.1" class="pilcrow">¶</a></p>
</li>
</ul>
</li>
<li class="toc ulEmpty" id="section-toc.1-1.7.2.4">
                <p id="section-toc.1-1.7.2.4.1"><a href="#section-7.4" class="xref">7.4</a>.  <a href="#name-access-token-security-consi" class="xref">Access Token Security Considerations</a><a href="#section-toc.1-1.7.2.4.1" class="pilcrow">¶</a></p>
<ul class="toc ulEmpty">
<li class="toc ulEmpty" id="section-toc.1-1.7.2.4.2.1">
                    <p id="section-toc.1-1.7.2.4.2.1.1"><a href="#section-7.4.1" class="xref">7.4.1</a>.  <a href="#name-security-threats" class="xref">Security Threats</a><a href="#section-toc.1-1.7.2.4.2.1.1" class="pilcrow">¶</a></p>
</li>
<li class="toc ulEmpty" id="section-toc.1-1.7.2.4.2.2">
                    <p id="section-toc.1-1.7.2.4.2.2.1"><a href="#section-7.4.2" class="xref">7.4.2</a>.  <a href="#name-threat-mitigation" class="xref">Threat Mitigation</a><a href="#section-toc.1-1.7.2.4.2.2.1" class="pilcrow">¶</a></p>
</li>
<li class="toc ulEmpty" id="section-toc.1-1.7.2.4.2.3">
                    <p id="section-toc.1-1.7.2.4.2.3.1"><a href="#section-7.4.3" class="xref">7.4.3</a>.  <a href="#name-summary-of-recommendations" class="xref">Summary of Recommendations</a><a href="#section-toc.1-1.7.2.4.2.3.1" class="pilcrow">¶</a></p>
</li>
<li class="toc ulEmpty" id="section-toc.1-1.7.2.4.2.4">
                    <p id="section-toc.1-1.7.2.4.2.4.1"><a href="#section-7.4.4" class="xref">7.4.4</a>.  <a href="#name-token-replay-prevention" class="xref">Token Replay Prevention</a><a href="#section-toc.1-1.7.2.4.2.4.1" class="pilcrow">¶</a></p>
</li>
<li class="toc ulEmpty" id="section-toc.1-1.7.2.4.2.5">
                    <p id="section-toc.1-1.7.2.4.2.5.1"><a href="#section-7.4.5" class="xref">7.4.5</a>.  <a href="#name-access-token-privilege-rest" class="xref">Access Token Privilege Restriction</a><a href="#section-toc.1-1.7.2.4.2.5.1" class="pilcrow">¶</a></p>
</li>
</ul>
</li>
</ul>
</li>
<li class="toc ulEmpty" id="section-toc.1-1.8">
            <p id="section-toc.1-1.8.1"><a href="#section-8" class="xref">8</a>.  <a href="#name-extensibility" class="xref">Extensibility</a><a href="#section-toc.1-1.8.1" class="pilcrow">¶</a></p>
<ul class="toc ulEmpty">
<li class="toc ulEmpty" id="section-toc.1-1.8.2.1">
                <p id="section-toc.1-1.8.2.1.1"><a href="#section-8.1" class="xref">8.1</a>.  <a href="#name-defining-access-token-types" class="xref">Defining Access Token Types</a><a href="#section-toc.1-1.8.2.1.1" class="pilcrow">¶</a></p>
</li>
<li class="toc ulEmpty" id="section-toc.1-1.8.2.2">
                <p id="section-toc.1-1.8.2.2.1"><a href="#section-8.2" class="xref">8.2</a>.  <a href="#name-defining-new-endpoint-param" class="xref">Defining New Endpoint Parameters</a><a href="#section-toc.1-1.8.2.2.1" class="pilcrow">¶</a></p>
</li>
<li class="toc ulEmpty" id="section-toc.1-1.8.2.3">
                <p id="section-toc.1-1.8.2.3.1"><a href="#section-8.3" class="xref">8.3</a>.  <a href="#name-defining-new-authorization-" class="xref">Defining New Authorization Grant Types</a><a href="#section-toc.1-1.8.2.3.1" class="pilcrow">¶</a></p>
</li>
<li class="toc ulEmpty" id="section-toc.1-1.8.2.4">
                <p id="section-toc.1-1.8.2.4.1"><a href="#section-8.4" class="xref">8.4</a>.  <a href="#name-defining-new-authorization-e" class="xref">Defining New Authorization Endpoint Response Types</a><a href="#section-toc.1-1.8.2.4.1" class="pilcrow">¶</a></p>
</li>
<li class="toc ulEmpty" id="section-toc.1-1.8.2.5">
                <p id="section-toc.1-1.8.2.5.1"><a href="#section-8.5" class="xref">8.5</a>.  <a href="#name-defining-additional-error-c" class="xref">Defining Additional Error Codes</a><a href="#section-toc.1-1.8.2.5.1" class="pilcrow">¶</a></p>
</li>
</ul>
</li>
<li class="toc ulEmpty" id="section-toc.1-1.9">
            <p id="section-toc.1-1.9.1"><a href="#section-9" class="xref">9</a>.  <a href="#name-security-considerations" class="xref">Security Considerations</a><a href="#section-toc.1-1.9.1" class="pilcrow">¶</a></p>
<ul class="toc ulEmpty">
<li class="toc ulEmpty" id="section-toc.1-1.9.2.1">
                <p id="section-toc.1-1.9.2.1.1"><a href="#section-9.1" class="xref">9.1</a>.  <a href="#name-client-authentication-3" class="xref">Client Authentication</a><a href="#section-toc.1-1.9.2.1.1" class="pilcrow">¶</a></p>
<ul class="toc ulEmpty">
<li class="toc ulEmpty" id="section-toc.1-1.9.2.1.2.1">
                    <p id="section-toc.1-1.9.2.1.2.1.1"><a href="#section-9.1.1" class="xref">9.1.1</a>.  <a href="#name-client-authentication-of-na" class="xref">Client Authentication of Native Apps</a><a href="#section-toc.1-1.9.2.1.2.1.1" class="pilcrow">¶</a></p>
</li>
</ul>
</li>
<li class="toc ulEmpty" id="section-toc.1-1.9.2.2">
                <p id="section-toc.1-1.9.2.2.1"><a href="#section-9.2" class="xref">9.2</a>.  <a href="#name-registration-of-native-app-" class="xref">Registration of Native App Clients</a><a href="#section-toc.1-1.9.2.2.1" class="pilcrow">¶</a></p>
</li>
<li class="toc ulEmpty" id="section-toc.1-1.9.2.3">
                <p id="section-toc.1-1.9.2.3.1"><a href="#section-9.3" class="xref">9.3</a>.  <a href="#name-client-impersonation" class="xref">Client Impersonation</a><a href="#section-toc.1-1.9.2.3.1" class="pilcrow">¶</a></p>
<ul class="toc ulEmpty">
<li class="toc ulEmpty" id="section-toc.1-1.9.2.3.2.1">
                    <p id="section-toc.1-1.9.2.3.2.1.1"><a href="#section-9.3.1" class="xref">9.3.1</a>.  <a href="#name-impersonation-of-native-app" class="xref">Impersonation of Native Apps</a><a href="#section-toc.1-1.9.2.3.2.1.1" class="pilcrow">¶</a></p>
</li>
</ul>
</li>
<li class="toc ulEmpty" id="section-toc.1-1.9.2.4">
                <p id="section-toc.1-1.9.2.4.1"><a href="#section-9.4" class="xref">9.4</a>.  <a href="#name-access-tokens" class="xref">Access Tokens</a><a href="#section-toc.1-1.9.2.4.1" class="pilcrow">¶</a></p>
<ul class="toc ulEmpty">
<li class="toc ulEmpty" id="section-toc.1-1.9.2.4.2.1">
                    <p id="section-toc.1-1.9.2.4.2.1.1"><a href="#section-9.4.1" class="xref">9.4.1</a>.  <a href="#name-access-token-privilege-restr" class="xref">Access Token Privilege Restriction</a><a href="#section-toc.1-1.9.2.4.2.1.1" class="pilcrow">¶</a></p>
</li>
<li class="toc ulEmpty" id="section-toc.1-1.9.2.4.2.2">
                    <p id="section-toc.1-1.9.2.4.2.2.1"><a href="#section-9.4.2" class="xref">9.4.2</a>.  <a href="#name-access-token-replay-prevent" class="xref">Access Token Replay Prevention</a><a href="#section-toc.1-1.9.2.4.2.2.1" class="pilcrow">¶</a></p>
</li>
</ul>
</li>
<li class="toc ulEmpty" id="section-toc.1-1.9.2.5">
                <p id="section-toc.1-1.9.2.5.1"><a href="#section-9.5" class="xref">9.5</a>.  <a href="#name-refresh-tokens" class="xref">Refresh Tokens</a><a href="#section-toc.1-1.9.2.5.1" class="pilcrow">¶</a></p>
</li>
<li class="toc ulEmpty" id="section-toc.1-1.9.2.6">
                <p id="section-toc.1-1.9.2.6.1"><a href="#section-9.6" class="xref">9.6</a>.  <a href="#name-protecting-redirect-based-f" class="xref">Protecting Redirect-Based Flows</a><a href="#section-toc.1-1.9.2.6.1" class="pilcrow">¶</a></p>
<ul class="toc ulEmpty">
<li class="toc ulEmpty" id="section-toc.1-1.9.2.6.2.1">
                    <p id="section-toc.1-1.9.2.6.2.1.1"><a href="#section-9.6.1" class="xref">9.6.1</a>.  <a href="#name-loopback-redirect-considera" class="xref">Loopback Redirect Considerations in Native Apps</a><a href="#section-toc.1-1.9.2.6.2.1.1" class="pilcrow">¶</a></p>
</li>
<li class="toc ulEmpty" id="section-toc.1-1.9.2.6.2.2">
                    <p id="section-toc.1-1.9.2.6.2.2.1"><a href="#section-9.6.2" class="xref">9.6.2</a>.  <a href="#name-http-307-redirect" class="xref">HTTP 307 Redirect</a><a href="#section-toc.1-1.9.2.6.2.2.1" class="pilcrow">¶</a></p>
</li>
</ul>
</li>
<li class="toc ulEmpty" id="section-toc.1-1.9.2.7">
                <p id="section-toc.1-1.9.2.7.1"><a href="#section-9.7" class="xref">9.7</a>.  <a href="#name-authorization-codes" class="xref">Authorization Codes</a><a href="#section-toc.1-1.9.2.7.1" class="pilcrow">¶</a></p>
</li>
<li class="toc ulEmpty" id="section-toc.1-1.9.2.8">
                <p id="section-toc.1-1.9.2.8.1"><a href="#section-9.8" class="xref">9.8</a>.  <a href="#name-request-confidentiality" class="xref">Request Confidentiality</a><a href="#section-toc.1-1.9.2.8.1" class="pilcrow">¶</a></p>
</li>
<li class="toc ulEmpty" id="section-toc.1-1.9.2.9">
                <p id="section-toc.1-1.9.2.9.1"><a href="#section-9.9" class="xref">9.9</a>.  <a href="#name-ensuring-endpoint-authentic" class="xref">Ensuring Endpoint Authenticity</a><a href="#section-toc.1-1.9.2.9.1" class="pilcrow">¶</a></p>
</li>
<li class="toc ulEmpty" id="section-toc.1-1.9.2.10">
                <p id="section-toc.1-1.9.2.10.1"><a href="#section-9.10" class="xref">9.10</a>. <a href="#name-credentials-guessing-attack" class="xref">Credentials-Guessing Attacks</a><a href="#section-toc.1-1.9.2.10.1" class="pilcrow">¶</a></p>
</li>
<li class="toc ulEmpty" id="section-toc.1-1.9.2.11">
                <p id="section-toc.1-1.9.2.11.1"><a href="#section-9.11" class="xref">9.11</a>. <a href="#name-phishing-attacks" class="xref">Phishing Attacks</a><a href="#section-toc.1-1.9.2.11.1" class="pilcrow">¶</a></p>
</li>
<li class="toc ulEmpty" id="section-toc.1-1.9.2.12">
                <p id="section-toc.1-1.9.2.12.1"><a href="#section-9.12" class="xref">9.12</a>. <a href="#name-fake-external-user-agents-i" class="xref">Fake External User-Agents in Native Apps</a><a href="#section-toc.1-1.9.2.12.1" class="pilcrow">¶</a></p>
</li>
<li class="toc ulEmpty" id="section-toc.1-1.9.2.13">
                <p id="section-toc.1-1.9.2.13.1"><a href="#section-9.13" class="xref">9.13</a>. <a href="#name-malicious-external-user-age" class="xref">Malicious External User-Agents in Native Apps</a><a href="#section-toc.1-1.9.2.13.1" class="pilcrow">¶</a></p>
</li>
<li class="toc ulEmpty" id="section-toc.1-1.9.2.14">
                <p id="section-toc.1-1.9.2.14.1"><a href="#section-9.14" class="xref">9.14</a>. <a href="#name-cross-site-request-forgery" class="xref">Cross-Site Request Forgery</a><a href="#section-toc.1-1.9.2.14.1" class="pilcrow">¶</a></p>
</li>
<li class="toc ulEmpty" id="section-toc.1-1.9.2.15">
                <p id="section-toc.1-1.9.2.15.1"><a href="#section-9.15" class="xref">9.15</a>. <a href="#name-clickjacking" class="xref">Clickjacking</a><a href="#section-toc.1-1.9.2.15.1" class="pilcrow">¶</a></p>
</li>
<li class="toc ulEmpty" id="section-toc.1-1.9.2.16">
                <p id="section-toc.1-1.9.2.16.1"><a href="#section-9.16" class="xref">9.16</a>. <a href="#name-code-injection-and-input-va" class="xref">Code Injection and Input Validation</a><a href="#section-toc.1-1.9.2.16.1" class="pilcrow">¶</a></p>
</li>
<li class="toc ulEmpty" id="section-toc.1-1.9.2.17">
                <p id="section-toc.1-1.9.2.17.1"><a href="#section-9.17" class="xref">9.17</a>. <a href="#name-open-redirectors" class="xref">Open Redirectors</a><a href="#section-toc.1-1.9.2.17.1" class="pilcrow">¶</a></p>
<ul class="toc ulEmpty">
<li class="toc ulEmpty" id="section-toc.1-1.9.2.17.2.1">
                    <p id="section-toc.1-1.9.2.17.2.1.1"><a href="#section-9.17.1" class="xref">9.17.1</a>.  <a href="#name-client-as-open-redirector" class="xref">Client as Open Redirector</a><a href="#section-toc.1-1.9.2.17.2.1.1" class="pilcrow">¶</a></p>
</li>
<li class="toc ulEmpty" id="section-toc.1-1.9.2.17.2.2">
                    <p id="section-toc.1-1.9.2.17.2.2.1"><a href="#section-9.17.2" class="xref">9.17.2</a>.  <a href="#name-authorization-server-as-ope" class="xref">Authorization Server as Open Redirector</a><a href="#section-toc.1-1.9.2.17.2.2.1" class="pilcrow">¶</a></p>
</li>
</ul>
</li>
<li class="toc ulEmpty" id="section-toc.1-1.9.2.18">
                <p id="section-toc.1-1.9.2.18.1"><a href="#section-9.18" class="xref">9.18</a>. <a href="#name-authorization-server-mix-up" class="xref">Authorization Server Mix-Up Mitigation in Native Apps</a><a href="#section-toc.1-1.9.2.18.1" class="pilcrow">¶</a></p>
</li>
<li class="toc ulEmpty" id="section-toc.1-1.9.2.19">
                <p id="section-toc.1-1.9.2.19.1"><a href="#section-9.19" class="xref">9.19</a>. <a href="#name-embedded-user-agents-in-nat" class="xref">Embedded User Agents in Native Apps</a><a href="#section-toc.1-1.9.2.19.1" class="pilcrow">¶</a></p>
</li>
<li class="toc ulEmpty" id="section-toc.1-1.9.2.20">
                <p id="section-toc.1-1.9.2.20.1"><a href="#section-9.20" class="xref">9.20</a>. <a href="#name-other-recommendations" class="xref">Other Recommendations</a><a href="#section-toc.1-1.9.2.20.1" class="pilcrow">¶</a></p>
</li>
</ul>
</li>
<li class="toc ulEmpty" id="section-toc.1-1.10">
            <p id="section-toc.1-1.10.1"><a href="#section-10" class="xref">10</a>. <a href="#name-native-applications" class="xref">Native Applications</a><a href="#section-toc.1-1.10.1" class="pilcrow">¶</a></p>
<ul class="toc ulEmpty">
<li class="toc ulEmpty" id="section-toc.1-1.10.2.1">
                <p id="section-toc.1-1.10.2.1.1"><a href="#section-10.1" class="xref">10.1</a>.  <a href="#name-using-inter-app-uri-communi" class="xref">Using Inter-App URI Communication for OAuth in Native Apps</a><a href="#section-toc.1-1.10.2.1.1" class="pilcrow">¶</a></p>
</li>
<li class="toc ulEmpty" id="section-toc.1-1.10.2.2">
                <p id="section-toc.1-1.10.2.2.1"><a href="#section-10.2" class="xref">10.2</a>.  <a href="#name-initiating-the-authorizatio" class="xref">Initiating the Authorization Request from a Native App</a><a href="#section-toc.1-1.10.2.2.1" class="pilcrow">¶</a></p>
</li>
<li class="toc ulEmpty" id="section-toc.1-1.10.2.3">
                <p id="section-toc.1-1.10.2.3.1"><a href="#section-10.3" class="xref">10.3</a>.  <a href="#name-receiving-the-authorization" class="xref">Receiving the Authorization Response in a Native App</a><a href="#section-toc.1-1.10.2.3.1" class="pilcrow">¶</a></p>
<ul class="toc ulEmpty">
<li class="toc ulEmpty" id="section-toc.1-1.10.2.3.2.1">
                    <p id="section-toc.1-1.10.2.3.2.1.1"><a href="#section-10.3.1" class="xref">10.3.1</a>.  <a href="#name-private-use-uri-scheme-redi" class="xref">Private-Use URI Scheme Redirection</a><a href="#section-toc.1-1.10.2.3.2.1.1" class="pilcrow">¶</a></p>
</li>
<li class="toc ulEmpty" id="section-toc.1-1.10.2.3.2.2">
                    <p id="section-toc.1-1.10.2.3.2.2.1"><a href="#section-10.3.2" class="xref">10.3.2</a>.  <a href="#name-claimed-https-scheme-uri-re" class="xref">Claimed "https" Scheme URI Redirection</a><a href="#section-toc.1-1.10.2.3.2.2.1" class="pilcrow">¶</a></p>
</li>
<li class="toc ulEmpty" id="section-toc.1-1.10.2.3.2.3">
                    <p id="section-toc.1-1.10.2.3.2.3.1"><a href="#section-10.3.3" class="xref">10.3.3</a>.  <a href="#name-loopback-interface-redirect" class="xref">Loopback Interface Redirection</a><a href="#section-toc.1-1.10.2.3.2.3.1" class="pilcrow">¶</a></p>
</li>
</ul>
</li>
</ul>
</li>
<li class="toc ulEmpty" id="section-toc.1-1.11">
            <p id="section-toc.1-1.11.1"><a href="#section-11" class="xref">11</a>. <a href="#name-browser-based-apps" class="xref">Browser-Based Apps</a><a href="#section-toc.1-1.11.1" class="pilcrow">¶</a></p>
</li>
<li class="toc ulEmpty" id="section-toc.1-1.12">
            <p id="section-toc.1-1.12.1"><a href="#section-12" class="xref">12</a>. <a href="#name-differences-from-oauth-20" class="xref">Differences from OAuth 2.0</a><a href="#section-toc.1-1.12.1" class="pilcrow">¶</a></p>
</li>
<li class="toc ulEmpty" id="section-toc.1-1.13">
            <p id="section-toc.1-1.13.1"><a href="#section-13" class="xref">13</a>. <a href="#name-iana-considerations" class="xref">IANA Considerations</a><a href="#section-toc.1-1.13.1" class="pilcrow">¶</a></p>
</li>
<li class="toc ulEmpty" id="section-toc.1-1.14">
            <p id="section-toc.1-1.14.1"><a href="#section-14" class="xref">14</a>. <a href="#name-references" class="xref">References</a><a href="#section-toc.1-1.14.1" class="pilcrow">¶</a></p>
<ul class="toc ulEmpty">
<li class="toc ulEmpty" id="section-toc.1-1.14.2.1">
                <p id="section-toc.1-1.14.2.1.1"><a href="#section-14.1" class="xref">14.1</a>.  <a href="#name-normative-references" class="xref">Normative References</a><a href="#section-toc.1-1.14.2.1.1" class="pilcrow">¶</a></p>
</li>
<li class="toc ulEmpty" id="section-toc.1-1.14.2.2">
                <p id="section-toc.1-1.14.2.2.1"><a href="#section-14.2" class="xref">14.2</a>.  <a href="#name-informative-references" class="xref">Informative References</a><a href="#section-toc.1-1.14.2.2.1" class="pilcrow">¶</a></p>
</li>
</ul>
</li>
<li class="toc ulEmpty" id="section-toc.1-1.15">
            <p id="section-toc.1-1.15.1"><a href="#section-appendix.a" class="xref">Appendix A</a>.  <a href="#name-augmented-backus-naur-form-" class="xref">Augmented Backus-Naur Form (ABNF) Syntax</a><a href="#section-toc.1-1.15.1" class="pilcrow">¶</a></p>
<ul class="toc ulEmpty">
<li class="toc ulEmpty" id="section-toc.1-1.15.2.1">
                <p id="section-toc.1-1.15.2.1.1"><a href="#section-a.1" class="xref">A.1</a>.  <a href="#name-client_id-syntax" class="xref">"client_id" Syntax</a><a href="#section-toc.1-1.15.2.1.1" class="pilcrow">¶</a></p>
</li>
<li class="toc ulEmpty" id="section-toc.1-1.15.2.2">
                <p id="section-toc.1-1.15.2.2.1"><a href="#section-a.2" class="xref">A.2</a>.  <a href="#name-client_secret-syntax" class="xref">"client_secret" Syntax</a><a href="#section-toc.1-1.15.2.2.1" class="pilcrow">¶</a></p>
</li>
<li class="toc ulEmpty" id="section-toc.1-1.15.2.3">
                <p id="section-toc.1-1.15.2.3.1"><a href="#section-a.3" class="xref">A.3</a>.  <a href="#name-response_type-syntax" class="xref">"response_type" Syntax</a><a href="#section-toc.1-1.15.2.3.1" class="pilcrow">¶</a></p>
</li>
<li class="toc ulEmpty" id="section-toc.1-1.15.2.4">
                <p id="section-toc.1-1.15.2.4.1"><a href="#section-a.4" class="xref">A.4</a>.  <a href="#name-scope-syntax" class="xref">"scope" Syntax</a><a href="#section-toc.1-1.15.2.4.1" class="pilcrow">¶</a></p>
</li>
<li class="toc ulEmpty" id="section-toc.1-1.15.2.5">
                <p id="section-toc.1-1.15.2.5.1"><a href="#section-a.5" class="xref">A.5</a>.  <a href="#name-state-syntax" class="xref">"state" Syntax</a><a href="#section-toc.1-1.15.2.5.1" class="pilcrow">¶</a></p>
</li>
<li class="toc ulEmpty" id="section-toc.1-1.15.2.6">
                <p id="section-toc.1-1.15.2.6.1"><a href="#section-a.6" class="xref">A.6</a>.  <a href="#name-redirect_uri-syntax" class="xref">"redirect_uri" Syntax</a><a href="#section-toc.1-1.15.2.6.1" class="pilcrow">¶</a></p>
</li>
<li class="toc ulEmpty" id="section-toc.1-1.15.2.7">
                <p id="section-toc.1-1.15.2.7.1"><a href="#section-a.7" class="xref">A.7</a>.  <a href="#name-error-syntax" class="xref">"error" Syntax</a><a href="#section-toc.1-1.15.2.7.1" class="pilcrow">¶</a></p>
</li>
<li class="toc ulEmpty" id="section-toc.1-1.15.2.8">
                <p id="section-toc.1-1.15.2.8.1"><a href="#section-a.8" class="xref">A.8</a>.  <a href="#name-error_description-syntax" class="xref">"error_description" Syntax</a><a href="#section-toc.1-1.15.2.8.1" class="pilcrow">¶</a></p>
</li>
<li class="toc ulEmpty" id="section-toc.1-1.15.2.9">
                <p id="section-toc.1-1.15.2.9.1"><a href="#section-a.9" class="xref">A.9</a>.  <a href="#name-error_uri-syntax" class="xref">"error_uri" Syntax</a><a href="#section-toc.1-1.15.2.9.1" class="pilcrow">¶</a></p>
</li>
<li class="toc ulEmpty" id="section-toc.1-1.15.2.10">
                <p id="section-toc.1-1.15.2.10.1"><a href="#section-a.10" class="xref">A.10</a>. <a href="#name-grant_type-syntax" class="xref">"grant_type" Syntax</a><a href="#section-toc.1-1.15.2.10.1" class="pilcrow">¶</a></p>
</li>
<li class="toc ulEmpty" id="section-toc.1-1.15.2.11">
                <p id="section-toc.1-1.15.2.11.1"><a href="#section-a.11" class="xref">A.11</a>. <a href="#name-code-syntax" class="xref">"code" Syntax</a><a href="#section-toc.1-1.15.2.11.1" class="pilcrow">¶</a></p>
</li>
<li class="toc ulEmpty" id="section-toc.1-1.15.2.12">
                <p id="section-toc.1-1.15.2.12.1"><a href="#section-a.12" class="xref">A.12</a>. <a href="#name-access_token-syntax" class="xref">"access_token" Syntax</a><a href="#section-toc.1-1.15.2.12.1" class="pilcrow">¶</a></p>
</li>
<li class="toc ulEmpty" id="section-toc.1-1.15.2.13">
                <p id="section-toc.1-1.15.2.13.1"><a href="#section-a.13" class="xref">A.13</a>. <a href="#name-token_type-syntax" class="xref">"token_type" Syntax</a><a href="#section-toc.1-1.15.2.13.1" class="pilcrow">¶</a></p>
</li>
<li class="toc ulEmpty" id="section-toc.1-1.15.2.14">
                <p id="section-toc.1-1.15.2.14.1"><a href="#section-a.14" class="xref">A.14</a>. <a href="#name-expires_in-syntax" class="xref">"expires_in" Syntax</a><a href="#section-toc.1-1.15.2.14.1" class="pilcrow">¶</a></p>
</li>
<li class="toc ulEmpty" id="section-toc.1-1.15.2.15">
                <p id="section-toc.1-1.15.2.15.1"><a href="#section-a.15" class="xref">A.15</a>. <a href="#name-refresh_token-syntax" class="xref">"refresh_token" Syntax</a><a href="#section-toc.1-1.15.2.15.1" class="pilcrow">¶</a></p>
</li>
<li class="toc ulEmpty" id="section-toc.1-1.15.2.16">
                <p id="section-toc.1-1.15.2.16.1"><a href="#section-a.16" class="xref">A.16</a>. <a href="#name-endpoint-parameter-syntax" class="xref">Endpoint Parameter Syntax</a><a href="#section-toc.1-1.15.2.16.1" class="pilcrow">¶</a></p>
</li>
<li class="toc ulEmpty" id="section-toc.1-1.15.2.17">
                <p id="section-toc.1-1.15.2.17.1"><a href="#section-a.17" class="xref">A.17</a>. <a href="#name-code_verifier-syntax" class="xref">"code_verifier" Syntax</a><a href="#section-toc.1-1.15.2.17.1" class="pilcrow">¶</a></p>
</li>
<li class="toc ulEmpty" id="section-toc.1-1.15.2.18">
                <p id="section-toc.1-1.15.2.18.1"><a href="#section-a.18" class="xref">A.18</a>. <a href="#name-code_challenge-syntax" class="xref">"code_challenge" Syntax</a><a href="#section-toc.1-1.15.2.18.1" class="pilcrow">¶</a></p>
</li>
</ul>
</li>
<li class="toc ulEmpty" id="section-toc.1-1.16">
            <p id="section-toc.1-1.16.1"><a href="#section-appendix.b" class="xref">Appendix B</a>.  <a href="#name-use-of-application-x-www-fo" class="xref">Use of application/x-www-form-urlencoded Media Type</a><a href="#section-toc.1-1.16.1" class="pilcrow">¶</a></p>
</li>
<li class="toc ulEmpty" id="section-toc.1-1.17">
            <p id="section-toc.1-1.17.1"><a href="#section-appendix.c" class="xref">Appendix C</a>.  <a href="#name-extensions" class="xref">Extensions</a><a href="#section-toc.1-1.17.1" class="pilcrow">¶</a></p>
</li>
<li class="toc ulEmpty" id="section-toc.1-1.18">
            <p id="section-toc.1-1.18.1"><a href="#section-appendix.d" class="xref">Appendix D</a>.  <a href="#name-acknowledgements" class="xref">Acknowledgements</a><a href="#section-toc.1-1.18.1" class="pilcrow">¶</a></p>
</li>
<li class="toc ulEmpty" id="section-toc.1-1.19">
            <p id="section-toc.1-1.19.1"><a href="#section-appendix.e" class="xref"></a><a href="#name-authors-addresses" class="xref">Authors' Addresses</a><a href="#section-toc.1-1.19.1" class="pilcrow">¶</a></p>
</li>
</ul>
</nav>
</section>
</div>
<div id="introduction">
<section id="section-1">
      <h2 id="name-introduction">
<a href="#section-1" class="section-number selfRef">1. </a><a href="#name-introduction" class="section-name selfRef">Introduction</a>
      </h2>
<p id="section-1-1">In the traditional client-server authentication model, the client
requests an access-restricted resource (protected resource) on the
server by authenticating with the server using the resource owner's
credentials.  In order to provide third-party applications access to
restricted resources, the resource owner shares its credentials with
the third party.  This creates several problems and limitations:<a href="#section-1-1" class="pilcrow">¶</a></p>
<ul>
<li id="section-1-2.1">Third-party applications are required to store the resource
owner's credentials for future use, typically a password in
clear-text.<a href="#section-1-2.1" class="pilcrow">¶</a>
</li>
<li id="section-1-2.2">Servers are required to support password authentication, despite
the security weaknesses inherent in passwords.<a href="#section-1-2.2" class="pilcrow">¶</a>
</li>
<li id="section-1-2.3">Third-party applications gain overly broad access to the resource
owner's protected resources, leaving resource owners without any
ability to restrict duration or access to a limited subset of
resources.<a href="#section-1-2.3" class="pilcrow">¶</a>
</li>
<li id="section-1-2.4">Resource owners cannot revoke access to an individual third party
without revoking access to all third parties, and must do so by
changing the third party's password.<a href="#section-1-2.4" class="pilcrow">¶</a>
</li>
<li id="section-1-2.5">Compromise of any third-party application results in compromise of
the end-user's password and all of the data protected by that
password.<a href="#section-1-2.5" class="pilcrow">¶</a>
</li>
</ul>
<p id="section-1-3">OAuth addresses these issues by introducing an authorization layer
and separating the role of the client from that of the resource
owner.  In OAuth, the client requests access to resources controlled
by the resource owner and hosted by the resource server, and is
issued a different set of credentials than those of the resource
owner.<a href="#section-1-3" class="pilcrow">¶</a></p>
<p id="section-1-4">Instead of using the resource owner's credentials to access protected
resources, the client obtains an access token - a string denoting a
specific scope, lifetime, and other access attributes.  Access tokens
are issued to third-party clients by an authorization server with the
approval of the resource owner.  The client uses the access token to
access the protected resources hosted by the resource server.<a href="#section-1-4" class="pilcrow">¶</a></p>
<p id="section-1-5">For example, an end-user (resource owner) can grant a printing
service (client) access to her protected photos stored at a photo-
sharing service (resource server), without sharing her username and
password with the printing service.  Instead, she authenticates
directly with a server trusted by the photo-sharing service
(authorization server), which issues the printing service delegation-
specific credentials (access token).<a href="#section-1-5" class="pilcrow">¶</a></p>
<p id="section-1-6">This specification is designed for use with HTTP (<span>[<a href="#RFC7230" class="xref">RFC7230</a>]</span>).  The
use of OAuth over any protocol other than HTTP is out of scope.<a href="#section-1-6" class="pilcrow">¶</a></p>
<p id="section-1-7">Since the publication of the OAuth 2.0 Authorization Framework (<span>[<a href="#RFC6749" class="xref">RFC6749</a>]</span>)
in October 2012, it has been updated by OAuth 2.0 for Native Apps (<span>[<a href="#RFC8252" class="xref">RFC8252</a>]</span>),
OAuth Security Best Current Practice (<span>[<a href="#I-D.ietf-oauth-security-topics" class="xref">I-D.ietf-oauth-security-topics</a>]</span>),
and OAuth 2.0 for Browser-Based Apps (<span>[<a href="#I-D.ietf-oauth-browser-based-apps" class="xref">I-D.ietf-oauth-browser-based-apps</a>]</span>).
The OAuth 2.0 Authorization Framework: Bearer Token Usage (<span>[<a href="#RFC6750" class="xref">RFC6750</a>]</span>)
has also been updated with (<span>[<a href="#I-D.ietf-oauth-security-topics" class="xref">I-D.ietf-oauth-security-topics</a>]</span>). This
Standards Track specification consolidates the information in all of these
documents and removes features that have been found to be insecure
in <span>[<a href="#I-D.ietf-oauth-security-topics" class="xref">I-D.ietf-oauth-security-topics</a>]</span>.<a href="#section-1-7" class="pilcrow">¶</a></p>
<div id="roles">
<section id="section-1.1">
        <h3 id="name-roles">
<a href="#section-1.1" class="section-number selfRef">1.1. </a><a href="#name-roles" class="section-name selfRef">Roles</a>
        </h3>
<p id="section-1.1-1">OAuth defines four roles:<a href="#section-1.1-1" class="pilcrow">¶</a></p>
<dl class="dlParallel" id="section-1.1-2">
          <dt id="section-1.1-2.1">"resource owner":</dt>
<dd id="section-1.1-2.2">
  An entity capable of granting access to a protected resource.
When the resource owner is a person, it is referred to as an
end-user. This is sometimes abbreviated as "RO".<a href="#section-1.1-2.2" class="pilcrow">¶</a>
</dd>
<dt id="section-1.1-2.3">"resource server":</dt>
<dd id="section-1.1-2.4">
  The server hosting the protected resources, capable of accepting
and responding to protected resource requests using access tokens.
This is sometimes abbreviated as "RS".<a href="#section-1.1-2.4" class="pilcrow">¶</a>
</dd>
<dt id="section-1.1-2.5">"client":</dt>
<dd id="section-1.1-2.6">
  An application making protected resource requests on behalf of the
resource owner and with its authorization.  The term "client" does
not imply any particular implementation characteristics (e.g.,
whether the application executes on a server, a desktop, or other
devices).<a href="#section-1.1-2.6" class="pilcrow">¶</a>
</dd>
<dt id="section-1.1-2.7">"authorization server":</dt>
<dd id="section-1.1-2.8">
  The server issuing access tokens to the client after successfully
authenticating the resource owner and obtaining authorization.
This is sometimes abbreviated as "AS".<a href="#section-1.1-2.8" class="pilcrow">¶</a>
</dd>
</dl>
<p id="section-1.1-3">The interaction between the authorization server and resource server
is beyond the scope of this specification, however several extension have
been defined to provide an option for interoperability between resource
servers and authorization servers.  The authorization server
may be the same server as the resource server or a separate entity.
A single authorization server may issue access tokens accepted by
multiple resource servers.<a href="#section-1.1-3" class="pilcrow">¶</a></p>
</section>
</div>
<div id="protocol-flow">
<section id="section-1.2">
        <h3 id="name-protocol-flow">
<a href="#section-1.2" class="section-number selfRef">1.2. </a><a href="#name-protocol-flow" class="section-name selfRef">Protocol Flow</a>
        </h3>
<span id="name-abstract-protocol-flow"></span><div id="fig-protocol-flow">
<figure id="figure-1">
          <div class="artwork art-text alignLeft" id="section-1.2-1.1">
<pre>
     +--------+                               +---------------+
     |        |--(1)- Authorization Request -&gt;|   Resource    |
     |        |                               |     Owner     |
     |        |&lt;-(2)-- Authorization Grant ---|               |
     |        |                               +---------------+
     |        |
     |        |                               +---------------+
     |        |--(3)-- Authorization Grant --&gt;| Authorization |
     | Client |                               |     Server    |
     |        |&lt;-(4)----- Access Token -------|               |
     |        |                               +---------------+
     |        |
     |        |                               +---------------+
     |        |--(5)----- Access Token ------&gt;|    Resource   |
     |        |                               |     Server    |
     |        |&lt;-(6)--- Protected Resource ---|               |
     +--------+                               +---------------+
</pre>
</div>
<figcaption><a href="#figure-1" class="selfRef">Figure 1</a>:
<a href="#name-abstract-protocol-flow" class="selfRef">Abstract Protocol Flow</a>
          </figcaption></figure>
</div>
<p id="section-1.2-2">The abstract OAuth 2.1 flow illustrated in <a href="#fig-protocol-flow" class="xref">Figure 1</a> describes the
interaction between the four roles and includes the following steps:<a href="#section-1.2-2" class="pilcrow">¶</a></p>
<ol start="1" type="1" class="normal type-1" id="section-1.2-3">
          <li id="section-1.2-3.1">The client requests authorization from the resource owner.  The
authorization request can be made directly to the resource owner
(as shown), or preferably indirectly via the authorization
server as an intermediary.<a href="#section-1.2-3.1" class="pilcrow">¶</a>
</li>
<li id="section-1.2-3.2">The client receives an authorization grant, which is a
credential representing the resource owner's authorization,
expressed using one of two grant types defined in this
specification or using an extension grant type.  The
authorization grant type depends on the method used by the
client to request authorization and the types supported by the
authorization server.<a href="#section-1.2-3.2" class="pilcrow">¶</a>
</li>
<li id="section-1.2-3.3">The client requests an access token by authenticating with the
authorization server and presenting the authorization grant.<a href="#section-1.2-3.3" class="pilcrow">¶</a>
</li>
<li id="section-1.2-3.4">The authorization server authenticates the client and validates
the authorization grant, and if valid, issues an access token.<a href="#section-1.2-3.4" class="pilcrow">¶</a>
</li>
<li id="section-1.2-3.5">The client requests the protected resource from the resource
server and authenticates by presenting the access token.<a href="#section-1.2-3.5" class="pilcrow">¶</a>
</li>
<li id="section-1.2-3.6">The resource server validates the access token, and if valid,
serves the request.<a href="#section-1.2-3.6" class="pilcrow">¶</a>
</li>
</ol>
<p id="section-1.2-4">The preferred method for the client to obtain an authorization grant
from the resource owner (depicted in steps (1) and (2)) is to use the
authorization server as an intermediary, which is illustrated in
<a href="#fig-authorization-code-flow" class="xref">Figure 3</a> in <a href="#authorization-code-grant" class="xref">Section 4.1</a>.<a href="#section-1.2-4" class="pilcrow">¶</a></p>
</section>
</div>
<div id="authorization-grant">
<section id="section-1.3">
        <h3 id="name-authorization-grant">
<a href="#section-1.3" class="section-number selfRef">1.3. </a><a href="#name-authorization-grant" class="section-name selfRef">Authorization Grant</a>
        </h3>
<p id="section-1.3-1">An authorization grant is a credential representing the resource
owner's authorization (to access its protected resources) used by the
client to obtain an access token.  This specification defines two
grant types - authorization code
and client credentials - as well as an extensibility
mechanism for defining additional types.<a href="#section-1.3-1" class="pilcrow">¶</a></p>
<div id="authorization-code">
<section id="section-1.3.1">
          <h4 id="name-authorization-code">
<a href="#section-1.3.1" class="section-number selfRef">1.3.1. </a><a href="#name-authorization-code" class="section-name selfRef">Authorization Code</a>
          </h4>
<p id="section-1.3.1-1">The authorization code is obtained by using an authorization server
as an intermediary between the client and resource owner.  Instead of
requesting authorization directly from the resource owner, the client
directs the resource owner to an authorization server (via its
user-agent as defined in <span>[<a href="#RFC7231" class="xref">RFC7231</a>]</span>), which in turn directs the
resource owner back to the client with the authorization code.<a href="#section-1.3.1-1" class="pilcrow">¶</a></p>
<p id="section-1.3.1-2">Before directing the resource owner back to the client with the
authorization code, the authorization server authenticates the
resource owner and obtains authorization.  Because the resource owner
only authenticates with the authorization server, the resource
owner's credentials are never shared with the client.<a href="#section-1.3.1-2" class="pilcrow">¶</a></p>
<p id="section-1.3.1-3">The authorization code provides a few important security benefits,
such as the ability to authenticate the client, as well as the
transmission of the access token directly to the client without
passing it through the resource owner's user-agent and potentially
exposing it to others, including the resource owner.<a href="#section-1.3.1-3" class="pilcrow">¶</a></p>
</section>
</div>
<div id="client-credentials">
<section id="section-1.3.2">
          <h4 id="name-client-credentials">
<a href="#section-1.3.2" class="section-number selfRef">1.3.2. </a><a href="#name-client-credentials" class="section-name selfRef">Client Credentials</a>
          </h4>
<p id="section-1.3.2-1">The client credentials (or other forms of client authentication) can
be used as an authorization grant when the authorization scope is
limited to the protected resources under the control of the client,
or to protected resources previously arranged with the authorization
server.  Client credentials are used as an authorization grant
typically when the client is acting on its own behalf (the client is
also the resource owner) or is requesting access to protected
resources based on an authorization previously arranged with the
authorization server.<a href="#section-1.3.2-1" class="pilcrow">¶</a></p>
</section>
</div>
</section>
</div>
<div id="access-token">
<section id="section-1.4">
        <h3 id="name-access-token">
<a href="#section-1.4" class="section-number selfRef">1.4. </a><a href="#name-access-token" class="section-name selfRef">Access Token</a>
        </h3>
<p id="section-1.4-1">Access tokens are credentials used to access protected resources.  An
access token is a string representing an authorization issued to the
client.  The string is opaque to the client, but depending on the 
authorization server, may be parseable by the resource server.<a href="#section-1.4-1" class="pilcrow">¶</a></p>
<p id="section-1.4-2">Tokens represent specific scopes and durations of access, granted by the
resource owner, and enforced by the resource server and authorization server.<a href="#section-1.4-2" class="pilcrow">¶</a></p>
<p id="section-1.4-3">The token may denote an identifier used to retrieve the authorization
information or may self-contain the authorization information in a
verifiable manner (i.e., a token string consisting of some data and a
signature).  One example of a structured token format is <span>[<a href="#I-D.ietf-oauth-access-token-jwt" class="xref">I-D.ietf-oauth-access-token-jwt</a>]</span>, 
a method of encoding access token data as a JSON Web Token <span>[<a href="#RFC7519" class="xref">RFC7519</a>]</span>.<a href="#section-1.4-3" class="pilcrow">¶</a></p>
<p id="section-1.4-4">Additional authentication credentials, which are beyond
the scope of this specification, may be required in order for the
client to use a token. This is typically referred to as a sender-constrained
access token, such as Mutual TLS Access Tokens <span>[<a href="#RFC8705" class="xref">RFC8705</a>]</span>.<a href="#section-1.4-4" class="pilcrow">¶</a></p>
<p id="section-1.4-5">The access token provides an abstraction layer, replacing different
authorization constructs (e.g., username and password) with a single
token understood by the resource server.  This abstraction enables
issuing access tokens more restrictive than the authorization grant
used to obtain them, as well as removing the resource server's need
to understand a wide range of authentication methods.<a href="#section-1.4-5" class="pilcrow">¶</a></p>
<p id="section-1.4-6">Access tokens can have different formats, structures, and methods of
utilization (e.g., cryptographic properties) based on the resource
server security requirements.  Access token attributes and the
methods used to access protected resources may be extended beyond
what is described in this specification.<a href="#section-1.4-6" class="pilcrow">¶</a></p>
</section>
</div>
<div id="refresh-token">
<section id="section-1.5">
        <h3 id="name-refresh-token">
<a href="#section-1.5" class="section-number selfRef">1.5. </a><a href="#name-refresh-token" class="section-name selfRef">Refresh Token</a>
        </h3>
<p id="section-1.5-1">Refresh tokens are credentials used to obtain access tokens.  Refresh
tokens are issued to the client by the authorization server and are
used to obtain a new access token when the current access token
becomes invalid or expires, or to obtain additional access tokens
with identical or narrower scope (access tokens may have a shorter
lifetime and fewer permissions than authorized by the resource
owner).  Issuing a refresh token is optional at the discretion of the
authorization server.  If the authorization server issues a refresh
token, it is included when issuing an access token (i.e., step (4) in
<a href="#fig-refresh-token-flow" class="xref">Figure 2</a>).<a href="#section-1.5-1" class="pilcrow">¶</a></p>
<p id="section-1.5-2">A refresh token is a string representing the authorization granted to
the client by the resource owner.  The string is usually opaque to
the client.  The token denotes an identifier used to retrieve the
authorization information.  Unlike access tokens, refresh tokens are
intended for use only with authorization servers and are never sent
to resource servers.<a href="#section-1.5-2" class="pilcrow">¶</a></p>
<span id="name-refreshing-an-expired-acces"></span><div id="fig-refresh-token-flow">
<figure id="figure-2">
          <div class="artwork art-text alignLeft" id="section-1.5-3.1">
<pre>
+--------+                                           +---------------+
|        |--(1)------- Authorization Grant ---------&gt;|               |
|        |                                           |               |
|        |&lt;-(2)----------- Access Token -------------|               |
|        |               &amp; Refresh Token             |               |
|        |                                           |               |
|        |                            +----------+   |               |
|        |--(3)---- Access Token ----&gt;|          |   |               |
|        |                            |          |   |               |
|        |&lt;-(4)- Protected Resource --| Resource |   | Authorization |
| Client |                            |  Server  |   |     Server    |
|        |--(5)---- Access Token ----&gt;|          |   |               |
|        |                            |          |   |               |
|        |&lt;-(6)- Invalid Token Error -|          |   |               |
|        |                            +----------+   |               |
|        |                                           |               |
|        |--(7)----------- Refresh Token -----------&gt;|               |
|        |                                           |               |
|        |&lt;-(8)----------- Access Token -------------|               |
+--------+           &amp; Optional Refresh Token        +---------------+
</pre>
</div>
<figcaption><a href="#figure-2" class="selfRef">Figure 2</a>:
<a href="#name-refreshing-an-expired-acces" class="selfRef">Refreshing an Expired Access Token</a>
          </figcaption></figure>
</div>
<p id="section-1.5-4">The flow illustrated in <a href="#fig-refresh-token-flow" class="xref">Figure 2</a> includes the following steps:<a href="#section-1.5-4" class="pilcrow">¶</a></p>
<ol start="1" type="1" class="normal type-1" id="section-1.5-5">
          <li id="section-1.5-5.1">The client requests an access token by authenticating with the
authorization server and presenting an authorization grant.<a href="#section-1.5-5.1" class="pilcrow">¶</a>
</li>
<li id="section-1.5-5.2">The authorization server authenticates the client and validates
the authorization grant, and if valid, issues an access token
and optionally a refresh token.<a href="#section-1.5-5.2" class="pilcrow">¶</a>
</li>
<li id="section-1.5-5.3">The client makes a protected resource request to the resource
server by presenting the access token.<a href="#section-1.5-5.3" class="pilcrow">¶</a>
</li>
<li id="section-1.5-5.4">The resource server validates the access token, and if valid,
serves the request.<a href="#section-1.5-5.4" class="pilcrow">¶</a>
</li>
<li id="section-1.5-5.5">Steps (3) and (4) repeat until the access token expires.  If the
client knows the access token expired, it skips to step (7);
otherwise, it makes another protected resource request.<a href="#section-1.5-5.5" class="pilcrow">¶</a>
</li>
<li id="section-1.5-5.6">Since the access token is invalid, the resource server returns
an invalid token error.<a href="#section-1.5-5.6" class="pilcrow">¶</a>
</li>
<li id="section-1.5-5.7">The client requests a new access token by presenting the refresh token
and providing client authentication if it has been issued credentials. The
client authentication requirements are based on the client type
and on the authorization server policies.<a href="#section-1.5-5.7" class="pilcrow">¶</a>
</li>
<li id="section-1.5-5.8">The authorization server authenticates the client and validates
the refresh token, and if valid, issues a new access token (and,
optionally, a new refresh token).<a href="#section-1.5-5.8" class="pilcrow">¶</a>
</li>
</ol>
</section>
</div>
<div id="tls-version">
<section id="section-1.6">
        <h3 id="name-tls-version">
<a href="#section-1.6" class="section-number selfRef">1.6. </a><a href="#name-tls-version" class="section-name selfRef">TLS Version</a>
        </h3>
<p id="section-1.6-1">Whenever Transport Layer Security (TLS) is used by this
specification, the appropriate version (or versions) of TLS will vary
over time, based on the widespread deployment and known security
vulnerabilities.  At the time of this writing,
TLS version 1.3 <span>[<a href="#RFC8446" class="xref">RFC8446</a>]</span> is the most recent version.<a href="#section-1.6-1" class="pilcrow">¶</a></p>
<p id="section-1.6-2">Implementations MAY also support additional transport-layer security
mechanisms that meet their security requirements.<a href="#section-1.6-2" class="pilcrow">¶</a></p>
</section>
</div>
<div id="http-redirections">
<section id="section-1.7">
        <h3 id="name-http-redirections">
<a href="#section-1.7" class="section-number selfRef">1.7. </a><a href="#name-http-redirections" class="section-name selfRef">HTTP Redirections</a>
        </h3>
<p id="section-1.7-1">This specification makes extensive use of HTTP redirections, in which
the client or the authorization server directs the resource owner's
user-agent to another destination.  While the examples in this
specification show the use of the HTTP 302 status code, any other
method available via the user-agent to accomplish this redirection, 
with the exception of HTTP 307, is allowed and is considered to be an 
implementation detail. See <a href="#redirect_307" class="xref">Section 9.6.2</a> for details.<a href="#section-1.7-1" class="pilcrow">¶</a></p>
</section>
</div>
<div id="interoperability">
<section id="section-1.8">
        <h3 id="name-interoperability">
<a href="#section-1.8" class="section-number selfRef">1.8. </a><a href="#name-interoperability" class="section-name selfRef">Interoperability</a>
        </h3>
<p id="section-1.8-1">OAuth 2.1 provides a rich authorization framework with well-defined
security properties.<a href="#section-1.8-1" class="pilcrow">¶</a></p>
<p id="section-1.8-2">This specification leaves a few required components partially or fully 
undefined (e.g., client registration, authorization server capabilities, 
endpoint discovery).  Some of these behaviors are defined in optional 
extensions which implementations can choose to use.<a href="#section-1.8-2" class="pilcrow">¶</a></p>
<p id="section-1.8-3">Please refer to <a href="#extensions" class="xref">Appendix C</a> for a list of current known extensions at 
the time of this publication.<a href="#section-1.8-3" class="pilcrow">¶</a></p>
</section>
</div>
<div id="notational-conventions">
<section id="section-1.9">
        <h3 id="name-notational-conventions">
<a href="#section-1.9" class="section-number selfRef">1.9. </a><a href="#name-notational-conventions" class="section-name selfRef">Notational Conventions</a>
        </h3>
<p id="section-1.9-1">The key words "MUST", "MUST NOT", "REQUIRED", "SHALL", "SHALL NOT",
"SHOULD", "SHOULD NOT", "RECOMMENDED", "NOT RECOMMENDED", "MAY", and
"OPTIONAL" in this document are to be interpreted as described in
BCP 14 <span>[<a href="#RFC2119" class="xref">RFC2119</a>]</span> <span>[<a href="#RFC8174" class="xref">RFC8174</a>]</span> when, and only when, they appear in all
capitals, as shown here.<a href="#section-1.9-1" class="pilcrow">¶</a></p>
<p id="section-1.9-2">This specification uses the Augmented Backus-Naur Form (ABNF)
notation of <span>[<a href="#RFC5234" class="xref">RFC5234</a>]</span>.  Additionally, the rule URI-reference is
included from "Uniform Resource Identifier (URI): Generic Syntax"
<span>[<a href="#RFC3986" class="xref">RFC3986</a>]</span>.<a href="#section-1.9-2" class="pilcrow">¶</a></p>
<p id="section-1.9-3">Certain security-related terms are to be understood in the sense
defined in <span>[<a href="#RFC4949" class="xref">RFC4949</a>]</span>.  These terms include, but are not limited to,
"attack", "authentication", "authorization", "certificate",
"confidentiality", "credential", "encryption", "identity", "sign",
"signature", "trust", "validate", and "verify".<a href="#section-1.9-3" class="pilcrow">¶</a></p>
<p id="section-1.9-4">Unless otherwise noted, all the protocol parameter names and values
are case sensitive.<a href="#section-1.9-4" class="pilcrow">¶</a></p>
</section>
</div>
</section>
</div>
<div id="client-registration">
<section id="section-2">
      <h2 id="name-client-registration">
<a href="#section-2" class="section-number selfRef">2. </a><a href="#name-client-registration" class="section-name selfRef">Client Registration</a>
      </h2>
<p id="section-2-1">Before initiating the protocol, the client registers with the
authorization server.  The means through which the client registers
with the authorization server are beyond the scope of this
specification but typically involve end-user interaction with an HTML
registration form, or by using Dynamic Client Registration (<span>[<a href="#RFC7591" class="xref">RFC7591</a>]</span>).<a href="#section-2-1" class="pilcrow">¶</a></p>
<p id="section-2-2">Client registration does not require a direct interaction between the
client and the authorization server.  When supported by the
authorization server, registration can rely on other means for
establishing trust and obtaining the required client properties
(e.g., redirection URI, client type).  For example, registration can
be accomplished using a self-issued or third-party-issued assertion,
or by the authorization server performing client discovery using a
trusted channel.<a href="#section-2-2" class="pilcrow">¶</a></p>
<p id="section-2-3">When registering a client, the client developer SHALL:<a href="#section-2-3" class="pilcrow">¶</a></p>
<ul>
<li id="section-2-4.1">specify the client type as described in <a href="#client-types" class="xref">Section 2.1</a>,<a href="#section-2-4.1" class="pilcrow">¶</a>
</li>
<li id="section-2-4.2">provide its client redirection URIs as described in <a href="#redirection-endpoint" class="xref">Section 3.1.2</a>,
and<a href="#section-2-4.2" class="pilcrow">¶</a>
</li>
<li id="section-2-4.3">include any other information required by the authorization server
(e.g., application name, website, description, logo image, the
acceptance of legal terms).<a href="#section-2-4.3" class="pilcrow">¶</a>
</li>
</ul>
<p id="section-2-5">Dynamic Client Registration (<span>[<a href="#RFC7591" class="xref">RFC7591</a>]</span>) defines a common general data model
for clients that may be used even with manual client registration.<a href="#section-2-5" class="pilcrow">¶</a></p>
<div id="client-types">
<section id="section-2.1">
        <h3 id="name-client-types">
<a href="#section-2.1" class="section-number selfRef">2.1. </a><a href="#name-client-types" class="section-name selfRef">Client Types</a>
        </h3>
<p id="section-2.1-1">Clients are identified at the authorization server by a <code>client_id</code>.
It is, for example, used by the authorization server to determine the set of
redirect URIs this client can use.<a href="#section-2.1-1" class="pilcrow">¶</a></p>
<p id="section-2.1-2">Clients requiring a higher level of confidence in their identity by the
authorization server use credentials to authenticate with the authorization server.
Such credentials are either issued by the authorization server or registered
by the developer of the client with the authorization server.<a href="#section-2.1-2" class="pilcrow">¶</a></p>
<p id="section-2.1-3">OAuth 2.1 defines two client types:<a href="#section-2.1-3" class="pilcrow">¶</a></p>
<dl class="dlParallel" id="section-2.1-4">
          <dt id="section-2.1-4.1">"confidential":</dt>
<dd id="section-2.1-4.2">
  Clients that have credentials are designated as "confidential clients"<a href="#section-2.1-4.2" class="pilcrow">¶</a>
</dd>
<dt id="section-2.1-4.3">"public":</dt>
<dd id="section-2.1-4.4">
  Clients without credentials are called "public clients"<a href="#section-2.1-4.4" class="pilcrow">¶</a>
</dd>
</dl>
<p id="section-2.1-5">Confidential clients MUST take precautions to prevent leakage and abuse of their credentials.<a href="#section-2.1-5" class="pilcrow">¶</a></p>
<p id="section-2.1-6">Authorization servers SHOULD consider the level of confidence in a client's identity
when deciding whether they allow such a client access to more critical functions,
such as the client credentials grant type.<a href="#section-2.1-6" class="pilcrow">¶</a></p>
<p id="section-2.1-7">A client may be implemented as a distributed set of components, each
with a different client type and security context (e.g., a
distributed client with both a confidential server-based component
and a public browser-based component).  If the authorization server
does not provide support for such clients or does not provide
guidance with regard to their registration, the client SHOULD
register each component as a separate client.<a href="#section-2.1-7" class="pilcrow">¶</a></p>
<p id="section-2.1-8">This specification has been designed around the following client
profiles:<a href="#section-2.1-8" class="pilcrow">¶</a></p>
<dl class="dlParallel" id="section-2.1-9">
          <dt id="section-2.1-9.1">"web application":</dt>
<dd id="section-2.1-9.2">
  A web application is a confidential client running on a web
server.  Resource owners access the client via an HTML user
interface rendered in a user-agent on the device used by the
resource owner.  The client credentials as well as any access
token issued to the client are stored on the web server and are
not exposed to or accessible by the resource owner.<a href="#section-2.1-9.2" class="pilcrow">¶</a>
</dd>
<dt id="section-2.1-9.3">"browser-based application":</dt>
<dd id="section-2.1-9.4">
  A browser-based application is a public client in which the
client code is downloaded from a web server and executes within a
user-agent (e.g., web browser) on the device used by the resource
owner.  Protocol data and credentials are easily accessible (and
often visible) to the resource owner.  Since such applications
reside within the user-agent, they can make seamless use of the
user-agent capabilities when requesting authorization.<a href="#section-2.1-9.4" class="pilcrow">¶</a>
</dd>
<dt id="section-2.1-9.5">"native application":</dt>
<dd id="section-2.1-9.6">
  A native application is a public client installed and executed on
the device used by the resource owner.  Protocol data and
credentials are accessible to the resource owner.  It is assumed
that any client authentication credentials included in the
application can be extracted.  On the other hand, dynamically
issued credentials such as access tokens or refresh tokens can
receive an acceptable level of protection.  At a minimum, these
credentials are protected from hostile servers with which the
application may interact.  On some platforms, these credentials
might be protected from other applications residing on the same
device.<a href="#section-2.1-9.6" class="pilcrow">¶</a>
</dd>
</dl>
</section>
</div>
<div id="client-identifier">
<section id="section-2.2">
        <h3 id="name-client-identifier">
<a href="#section-2.2" class="section-number selfRef">2.2. </a><a href="#name-client-identifier" class="section-name selfRef">Client Identifier</a>
        </h3>
<p id="section-2.2-1">The authorization server issues the registered client a client
identifier - a unique string representing the registration
information provided by the client.  The client identifier is not a
secret; it is exposed to the resource owner and MUST NOT be used
alone for client authentication.  The client identifier is unique to
the authorization server.<a href="#section-2.2-1" class="pilcrow">¶</a></p>
<p id="section-2.2-2">The client identifier string size is left undefined by this
specification.  The client should avoid making assumptions about the
identifier size.  The authorization server SHOULD document the size
of any identifier it issues.<a href="#section-2.2-2" class="pilcrow">¶</a></p>
<p id="section-2.2-3">Authorization servers SHOULD NOT allow clients to influence their
<code>client_id</code> value in such a way that it may be confused with the 
identifier of a genuine resource owner during subsequent protocol 
interactions.<a href="#section-2.2-3" class="pilcrow">¶</a></p>
</section>
</div>
<div id="client-authentication">
<section id="section-2.3">
        <h3 id="name-client-authentication">
<a href="#section-2.3" class="section-number selfRef">2.3. </a><a href="#name-client-authentication" class="section-name selfRef">Client Authentication</a>
        </h3>
<p id="section-2.3-1">If the client type is confidential, the client and authorization
server establish a client authentication method suitable for the
security requirements of the authorization server.  The authorization
server MAY accept any form of client authentication meeting its
security requirements.<a href="#section-2.3-1" class="pilcrow">¶</a></p>
<p id="section-2.3-2">Confidential clients are typically issued (or establish) a set of
client credentials used for authenticating with the authorization
server (e.g., password, public/private key pair).<a href="#section-2.3-2" class="pilcrow">¶</a></p>
<p id="section-2.3-3">Authorization servers SHOULD use client authentication if possible.<a href="#section-2.3-3" class="pilcrow">¶</a></p>
<p id="section-2.3-4">It is RECOMMENDED to use asymmetric (public-key based) methods for
client authentication such as mTLS <span>[<a href="#RFC8705" class="xref">RFC8705</a>]</span> or "private_key_jwt"
<span>[<a href="#OpenID" class="xref">OpenID</a>]</span>.  When asymmetric methods for client authentication are
used, authorization servers do not need to store sensitive symmetric
keys, making these methods more robust against a number of attacks.<a href="#section-2.3-4" class="pilcrow">¶</a></p>
<p id="section-2.3-5">The authorization server MAY establish a client authentication method
with public clients.  However, the authorization server MUST NOT rely
on public client authentication for the purpose of identifying the
client.<a href="#section-2.3-5" class="pilcrow">¶</a></p>
<p id="section-2.3-6">The client MUST NOT use more than one authentication method in each
request.<a href="#section-2.3-6" class="pilcrow">¶</a></p>
<div id="client-password">
<section id="section-2.3.1">
          <h4 id="name-client-password">
<a href="#section-2.3.1" class="section-number selfRef">2.3.1. </a><a href="#name-client-password" class="section-name selfRef">Client Password</a>
          </h4>
<p id="section-2.3.1-1">Clients in possession of a client password, also known as a client secret,
MAY use the HTTP Basic
authentication scheme as defined in <span>[<a href="#RFC2617" class="xref">RFC2617</a>]</span> to authenticate with
the authorization server.  The client identifier is encoded using the
<code>application/x-www-form-urlencoded</code> encoding algorithm per
Appendix B, and the encoded value is used as the username; the client
secret is encoded using the same algorithm and used as the
password.  The authorization server MUST support the HTTP Basic
authentication scheme for authenticating clients that were issued a
client secret.<a href="#section-2.3.1-1" class="pilcrow">¶</a></p>
<p id="section-2.3.1-2">For example (with extra line breaks for display purposes only):<a href="#section-2.3.1-2" class="pilcrow">¶</a></p>
<div class="artwork art-text alignLeft" id="section-2.3.1-3">
<pre>
Authorization: Basic czZCaGRSa3F0Mzo3RmpmcDBaQnIxS3REUmJuZlZkbUl3
</pre><a href="#section-2.3.1-3" class="pilcrow">¶</a>
</div>
<p id="section-2.3.1-4">Alternatively, the authorization server MAY support including the
client credentials in the request-body using the following
parameters:<a href="#section-2.3.1-4" class="pilcrow">¶</a></p>
<dl class="dlParallel" id="section-2.3.1-5">
            <dt id="section-2.3.1-5.1">"client_id":</dt>
<dd id="section-2.3.1-5.2">
  REQUIRED.  The client identifier issued to the client during
the registration process described by <a href="#client-identifier" class="xref">Section 2.2</a>.<a href="#section-2.3.1-5.2" class="pilcrow">¶</a>
</dd>
<dt id="section-2.3.1-5.3">"client_secret":</dt>
<dd id="section-2.3.1-5.4">
  REQUIRED.  The client secret.<a href="#section-2.3.1-5.4" class="pilcrow">¶</a>
</dd>
</dl>
<p id="section-2.3.1-6">Including the client credentials in the request-body using the two
parameters is NOT RECOMMENDED and SHOULD be limited to clients unable
to directly utilize the HTTP Basic authentication scheme (or other
password-based HTTP authentication schemes).  The parameters can only
be transmitted in the request-body and MUST NOT be included in the
request URI.<a href="#section-2.3.1-6" class="pilcrow">¶</a></p>
<p id="section-2.3.1-7">For example, a request to refresh an access token (<a href="#refreshing-an-access-token" class="xref">Section 6</a>) using
the body parameters (with extra line breaks for display purposes
only):<a href="#section-2.3.1-7" class="pilcrow">¶</a></p>
<div class="artwork art-text alignLeft" id="section-2.3.1-8">
<pre>
POST /token HTTP/1.1
Host: server.example.com
Content-Type: application/x-www-form-urlencoded

grant_type=refresh_token&amp;refresh_token=tGzv3JOkF0XG5Qx2TlKWIA
&amp;client_id=s6BhdRkqt3&amp;client_secret=7Fjfp0ZBr1KtDRbnfVdmIw
</pre><a href="#section-2.3.1-8" class="pilcrow">¶</a>
</div>
<p id="section-2.3.1-9">The authorization server MUST require the use of TLS as described in
<a href="#tls-version" class="xref">Section 1.6</a> when sending requests using password authentication.<a href="#section-2.3.1-9" class="pilcrow">¶</a></p>
<p id="section-2.3.1-10">Since this client authentication method involves a password, the
authorization server MUST protect any endpoint utilizing it against
brute force attacks.<a href="#section-2.3.1-10" class="pilcrow">¶</a></p>
</section>
</div>
<div id="other-authentication-methods">
<section id="section-2.3.2">
          <h4 id="name-other-authentication-method">
<a href="#section-2.3.2" class="section-number selfRef">2.3.2. </a><a href="#name-other-authentication-method" class="section-name selfRef">Other Authentication Methods</a>
          </h4>
<p id="section-2.3.2-1">The authorization server MAY support any suitable authentication
scheme matching its security requirements.  When using other
authentication methods, the authorization server MUST define a
mapping between the client identifier (registration record) and
authentication scheme.<a href="#section-2.3.2-1" class="pilcrow">¶</a></p>
<p id="section-2.3.2-2">Some additional authentication methods are defined in the 
"<a href="https://www.iana.org/assignments/oauth-parameters/oauth-parameters.xhtml#token-endpoint-auth-method">OAuth Token Endpoint Authentication Methods</a>" registry,
and may be useful as generic client authentication methods beyond 
the specific use of protecting the token endpoint.<a href="#section-2.3.2-2" class="pilcrow">¶</a></p>
</section>
</div>
</section>
</div>
<div id="unregistered-clients">
<section id="section-2.4">
        <h3 id="name-unregistered-clients">
<a href="#section-2.4" class="section-number selfRef">2.4. </a><a href="#name-unregistered-clients" class="section-name selfRef">Unregistered Clients</a>
        </h3>
<p id="section-2.4-1">This specification does not exclude the use of unregistered clients.
However, the use of such clients is beyond the scope of this
specification and requires additional security analysis and review of
its interoperability impact.<a href="#section-2.4-1" class="pilcrow">¶</a></p>
</section>
</div>
</section>
</div>
<div id="protocol-endpoints">
<section id="section-3">
      <h2 id="name-protocol-endpoints">
<a href="#section-3" class="section-number selfRef">3. </a><a href="#name-protocol-endpoints" class="section-name selfRef">Protocol Endpoints</a>
      </h2>
<p id="section-3-1">The authorization process utilizes two authorization server endpoints
(HTTP resources):<a href="#section-3-1" class="pilcrow">¶</a></p>
<ul>
<li id="section-3-2.1">Authorization endpoint - used by the client to obtain
authorization from the resource owner via user-agent redirection.<a href="#section-3-2.1" class="pilcrow">¶</a>
</li>
<li id="section-3-2.2">Token endpoint - used by the client to exchange an authorization
grant for an access token, typically with client authentication.<a href="#section-3-2.2" class="pilcrow">¶</a>
</li>
</ul>
<p id="section-3-3">As well as one client endpoint:<a href="#section-3-3" class="pilcrow">¶</a></p>
<ul>
<li id="section-3-4.1">Redirection endpoint - used by the authorization server to return
responses containing authorization credentials to the client via
the resource owner user-agent.<a href="#section-3-4.1" class="pilcrow">¶</a>
</li>
</ul>
<p id="section-3-5">Not every authorization grant type utilizes both endpoints.
Extension grant types MAY define additional endpoints as needed.<a href="#section-3-5" class="pilcrow">¶</a></p>
<div id="authorization-endpoint">
<section id="section-3.1">
        <h3 id="name-authorization-endpoint">
<a href="#section-3.1" class="section-number selfRef">3.1. </a><a href="#name-authorization-endpoint" class="section-name selfRef">Authorization Endpoint</a>
        </h3>
<p id="section-3.1-1">The authorization endpoint is used to interact with the resource
owner and obtain an authorization grant.  The authorization server
MUST first verify the identity of the resource owner.  The way in
which the authorization server authenticates the resource owner
(e.g., username and password login, session cookies) is beyond the
scope of this specification.<a href="#section-3.1-1" class="pilcrow">¶</a></p>
<p id="section-3.1-2">The means through which the client obtains the location of the
authorization endpoint are beyond the scope of this specification,
but the location is typically provided in the service documentation,
or in the authorization server's metadata document (<span>[<a href="#RFC8414" class="xref">RFC8414</a>]</span>).<a href="#section-3.1-2" class="pilcrow">¶</a></p>
<p id="section-3.1-3">The endpoint URI MAY include an "application/x-www-form-urlencoded"
formatted (per Appendix B) query component (<span>[<a href="#RFC3986" class="xref">RFC3986</a>]</span> Section 3.4),
which MUST be retained when adding additional query parameters.  The
endpoint URI MUST NOT include a fragment component.<a href="#section-3.1-3" class="pilcrow">¶</a></p>
<p id="section-3.1-4">Since requests to the authorization endpoint result in user
authentication and the transmission of clear-text credentials (in the
HTTP response), the authorization server MUST require the use of TLS
as described in <a href="#tls-version" class="xref">Section 1.6</a> when sending requests to the
authorization endpoint.<a href="#section-3.1-4" class="pilcrow">¶</a></p>
<p id="section-3.1-5">The authorization server MUST support the use of the HTTP <code>GET</code>
method <span>[<a href="#RFC7231" class="xref">RFC7231</a>]</span> for the authorization endpoint and MAY support the
use of the <code>POST</code> method as well.<a href="#section-3.1-5" class="pilcrow">¶</a></p>
<p id="section-3.1-6">Parameters sent without a value MUST be treated as if they were
omitted from the request.  The authorization server MUST ignore
unrecognized request parameters.  Request and response parameters
defined by this specification MUST NOT be included more than once.<a href="#section-3.1-6" class="pilcrow">¶</a></p>
<div id="response-type">
<section id="section-3.1.1">
          <h4 id="name-response-type">
<a href="#section-3.1.1" class="section-number selfRef">3.1.1. </a><a href="#name-response-type" class="section-name selfRef">Response Type</a>
          </h4>
<p id="section-3.1.1-1">The authorization endpoint is used by the authorization code flow.
The client informs the authorization server of the desired response type
using the following parameter:<a href="#section-3.1.1-1" class="pilcrow">¶</a></p>
<dl class="dlParallel" id="section-3.1.1-2">
            <dt id="section-3.1.1-2.1">"response_type":</dt>
<dd id="section-3.1.1-2.2">
  REQUIRED.  The value MUST be <code>code</code> for requesting an authorization
code as described by <a href="#authorization-request" class="xref">Section 4.1.1</a>, or a registered extension
value as described by <a href="#new-response-types" class="xref">Section 8.4</a>.<a href="#section-3.1.1-2.2" class="pilcrow">¶</a>
</dd>
</dl>
<p id="section-3.1.1-3">Extension response types MAY contain a space-delimited (%x20) list of
values, where the order of values does not matter (e.g., response
type <code>a b</code> is the same as <code>b a</code>).  The meaning of such composite
response types is defined by their respective specifications.<a href="#section-3.1.1-3" class="pilcrow">¶</a></p>
<p id="section-3.1.1-4">If an authorization request is missing the <code>response_type</code> parameter,
or if the response type is not understood, the authorization server
MUST return an error response as described in <a href="#authorization-code-error-response" class="xref">Section 4.1.2.1</a>.<a href="#section-3.1.1-4" class="pilcrow">¶</a></p>
</section>
</div>
<div id="redirection-endpoint">
<section id="section-3.1.2">
          <h4 id="name-redirection-endpoint">
<a href="#section-3.1.2" class="section-number selfRef">3.1.2. </a><a href="#name-redirection-endpoint" class="section-name selfRef">Redirection Endpoint</a>
          </h4>
<p id="section-3.1.2-1">After completing its interaction with the resource owner, the
authorization server directs the resource owner's user-agent back to
the client.  The authorization server redirects the user-agent to the
client's redirection endpoint previously established with the
authorization server during the client registration process.<a href="#section-3.1.2-1" class="pilcrow">¶</a></p>
<p id="section-3.1.2-2">The authorization server MUST compare the two URIs using simple string
comparison as defined in <span>[<a href="#RFC3986" class="xref">RFC3986</a>]</span>, Section 6.2.1.<a href="#section-3.1.2-2" class="pilcrow">¶</a></p>
<p id="section-3.1.2-3">The redirection endpoint URI MUST be an absolute URI as defined by
<span>[<a href="#RFC3986" class="xref">RFC3986</a>]</span> Section 4.3.  The endpoint URI MAY include an
"application/x-www-form-urlencoded" formatted (per Appendix B) query
component (<span>[<a href="#RFC3986" class="xref">RFC3986</a>]</span> Section 3.4), which MUST be retained when adding
additional query parameters.  The endpoint URI MUST NOT include a
fragment component.<a href="#section-3.1.2-3" class="pilcrow">¶</a></p>
<div id="endpoint-request-confidentiality">
<section id="section-3.1.2.1">
            <h5 id="name-endpoint-request-confidenti">
<a href="#section-3.1.2.1" class="section-number selfRef">3.1.2.1. </a><a href="#name-endpoint-request-confidenti" class="section-name selfRef">Endpoint Request Confidentiality</a>
            </h5>
<p id="section-3.1.2.1-1">The redirection endpoint SHOULD require the use of TLS as described
in <a href="#tls-version" class="xref">Section 1.6</a> when the requested response type is <code>code</code>,
or when the redirection request will result in the transmission of
sensitive credentials over an open network.
If TLS is not available, the authorization server
SHOULD warn the resource owner about the insecure endpoint prior to
redirection (e.g., display a message during the authorization
request).<a href="#section-3.1.2.1-1" class="pilcrow">¶</a></p>
<p id="section-3.1.2.1-2">Lack of transport-layer security can have a severe impact on the
security of the client and the protected resources it is authorized
to access.  The use of transport-layer security is particularly
critical when the authorization process is used as a form of
delegated end-user authentication by the client (e.g., third-party
sign-in service).<a href="#section-3.1.2.1-2" class="pilcrow">¶</a></p>
</section>
</div>
<div id="registration-requirements">
<section id="section-3.1.2.2">
            <h5 id="name-registration-requirements">
<a href="#section-3.1.2.2" class="section-number selfRef">3.1.2.2. </a><a href="#name-registration-requirements" class="section-name selfRef">Registration Requirements</a>
            </h5>
<p id="section-3.1.2.2-1">The authorization server MUST require all clients to register their
redirection endpoint prior to utilizing the authorization endpoint.<a href="#section-3.1.2.2-1" class="pilcrow">¶</a></p>
<p id="section-3.1.2.2-2">The authorization server MUST require the client to provide one or more
complete redirection URIs. The client MAY use the <code>state</code> request
parameter to achieve per-request customization if needed.<a href="#section-3.1.2.2-2" class="pilcrow">¶</a></p>
<p id="section-3.1.2.2-3">The authorization server MAY allow the client to register multiple
redirection endpoints.<a href="#section-3.1.2.2-3" class="pilcrow">¶</a></p>
<p id="section-3.1.2.2-4">Lack of a redirection URI registration requirement can enable an
attacker to use the authorization endpoint as an open redirector as
described in <a href="#open-redirectors" class="xref">Section 9.17</a>.<a href="#section-3.1.2.2-4" class="pilcrow">¶</a></p>
</section>
</div>
<div id="dynamic-configuration">
<section id="section-3.1.2.3">
            <h5 id="name-dynamic-configuration">
<a href="#section-3.1.2.3" class="section-number selfRef">3.1.2.3. </a><a href="#name-dynamic-configuration" class="section-name selfRef">Dynamic Configuration</a>
            </h5>
<p id="section-3.1.2.3-1">If multiple redirection URIs have been registered the client MUST
include a redirection URI with the authorization request using the
<code>redirect_uri</code> request parameter.<a href="#section-3.1.2.3-1" class="pilcrow">¶</a></p>
</section>
</div>
<div id="invalid-endpoint">
<section id="section-3.1.2.4">
            <h5 id="name-invalid-endpoint">
<a href="#section-3.1.2.4" class="section-number selfRef">3.1.2.4. </a><a href="#name-invalid-endpoint" class="section-name selfRef">Invalid Endpoint</a>
            </h5>
<p id="section-3.1.2.4-1">If an authorization request fails validation due to a missing,
invalid, or mismatching redirection URI, the authorization server
SHOULD inform the resource owner of the error and MUST NOT
automatically redirect the user-agent to the invalid redirection URI.<a href="#section-3.1.2.4-1" class="pilcrow">¶</a></p>
</section>
</div>
<div id="endpoint-content">
<section id="section-3.1.2.5">
            <h5 id="name-endpoint-content">
<a href="#section-3.1.2.5" class="section-number selfRef">3.1.2.5. </a><a href="#name-endpoint-content" class="section-name selfRef">Endpoint Content</a>
            </h5>
<p id="section-3.1.2.5-1">The redirection request to the client's endpoint typically results in
an HTML document response, processed by the user-agent.  If the HTML
response is served directly as the result of the redirection request,
any script included in the HTML document will execute with full
access to the redirection URI and the credentials it contains.<a href="#section-3.1.2.5-1" class="pilcrow">¶</a></p>
<p id="section-3.1.2.5-2">The client SHOULD NOT include any third-party scripts (e.g., third-
party analytics, social plug-ins, ad networks) in the redirection
endpoint response.  Instead, it SHOULD extract the credentials from
the URI and redirect the user-agent again to another endpoint without
exposing the credentials (in the URI or elsewhere).  If third-party
scripts are included, the client MUST ensure that its own scripts
(used to extract and remove the credentials from the URI) will
execute first.<a href="#section-3.1.2.5-2" class="pilcrow">¶</a></p>
</section>
</div>
</section>
</div>
</section>
</div>
<div id="token-endpoint">
<section id="section-3.2">
        <h3 id="name-token-endpoint">
<a href="#section-3.2" class="section-number selfRef">3.2. </a><a href="#name-token-endpoint" class="section-name selfRef">Token Endpoint</a>
        </h3>
<p id="section-3.2-1">The token endpoint is used by the client to obtain an access token by
presenting its authorization grant or refresh token.<a href="#section-3.2-1" class="pilcrow">¶</a></p>
<p id="section-3.2-2">The means through which the client obtains the location of the token
endpoint are beyond the scope of this specification, but the location
is typically provided in the service documentation, 
or in the authorization server's metadata document (<span>[<a href="#RFC8414" class="xref">RFC8414</a>]</span>).<a href="#section-3.2-2" class="pilcrow">¶</a></p>
<p id="section-3.2-3">The endpoint URI MAY include an <code>application/x-www-form-urlencoded</code>
formatted (per Appendix B) query component (<span>[<a href="#RFC3986" class="xref">RFC3986</a>]</span> Section 3.4),
which MUST be retained when adding additional query parameters.  The
endpoint URI MUST NOT include a fragment component.<a href="#section-3.2-3" class="pilcrow">¶</a></p>
<p id="section-3.2-4">Since requests to the token endpoint result in the transmission of
clear-text credentials (in the HTTP request and response), the
authorization server MUST require the use of TLS as described in
<a href="#tls-version" class="xref">Section 1.6</a> when sending requests to the token endpoint.<a href="#section-3.2-4" class="pilcrow">¶</a></p>
<p id="section-3.2-5">The client MUST use the HTTP <code>POST</code> method when making access token
requests.<a href="#section-3.2-5" class="pilcrow">¶</a></p>
<p id="section-3.2-6">Parameters sent without a value MUST be treated as if they were
omitted from the request.  The authorization server MUST ignore
unrecognized request parameters.  Request and response parameters
defined by this specification MUST NOT be included more than once.<a href="#section-3.2-6" class="pilcrow">¶</a></p>
<div id="token-endpoint-client-authentication">
<section id="section-3.2.1">
          <h4 id="name-client-authentication-2">
<a href="#section-3.2.1" class="section-number selfRef">3.2.1. </a><a href="#name-client-authentication-2" class="section-name selfRef">Client Authentication</a>
          </h4>
<p id="section-3.2.1-1">Confidential clients or other clients issued client credentials MUST
authenticate with the authorization server as described in
<a href="#client-authentication" class="xref">Section 2.3</a> when making requests to the token endpoint.  Client
authentication is used for:<a href="#section-3.2.1-1" class="pilcrow">¶</a></p>
<ul>
<li id="section-3.2.1-2.1">Enforcing the binding of refresh tokens and authorization codes to
the client they were issued to.  Client authentication is critical
when an authorization code is transmitted to the redirection
endpoint over an insecure channel.<a href="#section-3.2.1-2.1" class="pilcrow">¶</a>
</li>
<li id="section-3.2.1-2.2">Recovering from a compromised client by disabling the client or
changing its credentials, thus preventing an attacker from abusing
stolen refresh tokens.  Changing a single set of client
credentials is significantly faster than revoking an entire set of
refresh tokens.<a href="#section-3.2.1-2.2" class="pilcrow">¶</a>
</li>
<li id="section-3.2.1-2.3">Implementing authentication management best practices, which
require periodic credential rotation.  Rotation of an entire set
of refresh tokens can be challenging, while rotation of a single
set of client credentials is significantly easier.<a href="#section-3.2.1-2.3" class="pilcrow">¶</a>
</li>
</ul>
</section>
</div>
</section>
</div>
<div id="access-token-scope">
<section id="section-3.3">
        <h3 id="name-access-token-scope">
<a href="#section-3.3" class="section-number selfRef">3.3. </a><a href="#name-access-token-scope" class="section-name selfRef">Access Token Scope</a>
        </h3>
<p id="section-3.3-1">The authorization and token endpoints allow the client to specify the
scope of the access request using the <code>scope</code> request parameter.  In
turn, the authorization server uses the <code>scope</code> response parameter to
inform the client of the scope of the access token issued.<a href="#section-3.3-1" class="pilcrow">¶</a></p>
<p id="section-3.3-2">The value of the scope parameter is expressed as a list of space-
delimited, case-sensitive strings.  The strings are defined by the
authorization server.  If the value contains multiple space-delimited
strings, their order does not matter, and each string adds an
additional access range to the requested scope.<a href="#section-3.3-2" class="pilcrow">¶</a></p>
<div class="artwork art-text alignLeft art-abnf" id="section-3.3-3">
<pre>
    scope       = scope-token *( SP scope-token )
    scope-token = 1*( %x21 / %x23-5B / %x5D-7E )
</pre><a href="#section-3.3-3" class="pilcrow">¶</a>
</div>
<p id="section-3.3-4">The authorization server MAY fully or partially ignore the scope
requested by the client, based on the authorization server policy or
the resource owner's instructions.  If the issued access token scope
is different from the one requested by the client, the authorization
server MUST include the <code>scope</code> response parameter to inform the
client of the actual scope granted.<a href="#section-3.3-4" class="pilcrow">¶</a></p>
<p id="section-3.3-5">If the client omits the scope parameter when requesting
authorization, the authorization server MUST either process the
request using a pre-defined default value or fail the request
indicating an invalid scope.  The authorization server SHOULD
document its scope requirements and default value (if defined).<a href="#section-3.3-5" class="pilcrow">¶</a></p>
</section>
</div>
</section>
</div>
<div id="obtaining-authorization">
<section id="section-4">
      <h2 id="name-obtaining-authorization">
<a href="#section-4" class="section-number selfRef">4. </a><a href="#name-obtaining-authorization" class="section-name selfRef">Obtaining Authorization</a>
      </h2>
<p id="section-4-1">To request an access token, the client obtains authorization from the
resource owner.  The authorization is expressed in the form of an
authorization grant, which the client uses to request the access
token.  OAuth defines two grant types: authorization code
and client credentials.  It also
provides an extension mechanism for defining additional grant types.<a href="#section-4-1" class="pilcrow">¶</a></p>
<div id="authorization-code-grant">
<section id="section-4.1">
        <h3 id="name-authorization-code-grant">
<a href="#section-4.1" class="section-number selfRef">4.1. </a><a href="#name-authorization-code-grant" class="section-name selfRef">Authorization Code Grant</a>
        </h3>
<p id="section-4.1-1">The authorization code grant type is used to obtain both access
tokens and refresh tokens.<a href="#section-4.1-1" class="pilcrow">¶</a></p>
<p id="section-4.1-2">Since this is a redirection-based flow, the client must be capable of
interacting with the resource owner's user-agent (typically a web
browser) and capable of receiving incoming requests (via redirection)
from the authorization server.<a href="#section-4.1-2" class="pilcrow">¶</a></p>
<span id="name-authorization-code-flow"></span><div id="fig-authorization-code-flow">
<figure id="figure-3">
          <div class="artwork art-text alignLeft" id="section-4.1-3.1">
<pre>
+----------+
| Resource |
|   Owner  |
|          |
+----------+
     ^
     |
    (2)
+----|-----+          Client Identifier      +---------------+
|         -+----(1)-- &amp; Redirection URI ----&gt;|               |
|  User-   |                                 | Authorization |
|  Agent  -+----(2)-- User authenticates ---&gt;|     Server    |
|          |                                 |               |
|         -+----(3)-- Authorization Code ---&lt;|               |
+-|----|---+                                 +---------------+
  |    |                                         ^      v
 (1)  (3)                                        |      |
  |    |                                         |      |
  ^    v                                         |      |
+---------+                                      |      |
|         |&gt;---(4)-- Authorization Code ---------'      |
|  Client |          &amp; Redirection URI                  |
|         |                                             |
|         |&lt;---(5)----- Access Token -------------------'
+---------+       (w/ Optional Refresh Token)

Note: The lines illustrating steps (1), (2), and (3) are broken into
two parts as they pass through the user-agent.
</pre>
</div>
<figcaption><a href="#figure-3" class="selfRef">Figure 3</a>:
<a href="#name-authorization-code-flow" class="selfRef">Authorization Code Flow</a>
          </figcaption></figure>
</div>
<p id="section-4.1-4">The flow illustrated in <a href="#fig-authorization-code-flow" class="xref">Figure 3</a> includes the following steps:<a href="#section-4.1-4" class="pilcrow">¶</a></p>
<p id="section-4.1-5">(1)  The client initiates the flow by directing the resource owner's
     user-agent to the authorization endpoint.  The client includes
     its client identifier, code challenge (derived from a generated code verifier), 
     optional requested scope, optional local state, and a
     redirection URI to which the authorization server will send the
     user-agent back once access is granted (or denied).<a href="#section-4.1-5" class="pilcrow">¶</a></p>
<p id="section-4.1-6">(2)  The authorization server authenticates the resource owner (via
     the user-agent) and establishes whether the resource owner
     grants or denies the client's access request.<a href="#section-4.1-6" class="pilcrow">¶</a></p>
<p id="section-4.1-7">(3)  Assuming the resource owner grants access, the authorization
     server redirects the user-agent back to the client using the
     redirection URI provided earlier (in the request or during
     client registration).  The redirection URI includes an
     authorization code and any local state provided by the client
     earlier.<a href="#section-4.1-7" class="pilcrow">¶</a></p>
<p id="section-4.1-8">(4)  The client requests an access token from the authorization
     server's token endpoint by including the authorization code
     received in the previous step, and including its code verifier.
     When making the request, the
     client authenticates with the authorization server if it can.  The client
     includes the redirection URI used to obtain the authorization
     code for verification.<a href="#section-4.1-8" class="pilcrow">¶</a></p>
<p id="section-4.1-9">(5)  The authorization server authenticates the client when possible, validates the
     authorization code, validates the code verifier, and ensures that the redirection URI
     received matches the URI used to redirect the client in
     step (3).  If valid, the authorization server responds back with
     an access token and, optionally, a refresh token.<a href="#section-4.1-9" class="pilcrow">¶</a></p>
<div id="authorization-request">
<section id="section-4.1.1">
          <h4 id="name-authorization-request">
<a href="#section-4.1.1" class="section-number selfRef">4.1.1. </a><a href="#name-authorization-request" class="section-name selfRef">Authorization Request</a>
          </h4>
<p id="section-4.1.1-1">To begin the authorization request, the client builds the authorization
request URI by adding parameters to the authorization server's
authorization endpoint URI.<a href="#section-4.1.1-1" class="pilcrow">¶</a></p>
<p id="section-4.1.1-2">Clients use a unique secret per authorization request to protect against code
injection and CSRF attacks. The client first generates this secret, which it can
later use along with the authorization code to prove that the application using the
authorization code is the same application that requested it. The properties 
<code>code_challenge</code> and <code>code_verifier</code> are adopted from the OAuth 2.0 extension
known as "Proof-Key for Code Exchange", or PKCE (<span>[<a href="#RFC7636" class="xref">RFC7636</a>]</span>) where this technique
was originally developed.<a href="#section-4.1.1-2" class="pilcrow">¶</a></p>
<div id="client-creates-a-code-verifier">
<section id="section-4.1.1.1">
            <h5 id="name-client-creates-a-code-verif">
<a href="#section-4.1.1.1" class="section-number selfRef">4.1.1.1. </a><a href="#name-client-creates-a-code-verif" class="section-name selfRef">Client Creates a Code Verifier</a>
            </h5>
<p id="section-4.1.1.1-1">The client first creates a code verifier, <code>code_verifier</code>, for each
Authorization Request, in the following manner:<a href="#section-4.1.1.1-1" class="pilcrow">¶</a></p>
<div class="artwork art-text alignLeft" id="section-4.1.1.1-2">
<pre>
code_verifier = high-entropy cryptographic random STRING using the
unreserved characters `[A-Z] / [a-z] / [0-9] / "-" / "." / "_" / "~"`
from Section 2.3 of {{RFC3986}}, with a minimum length of 43 characters
and a maximum length of 128 characters.
</pre><a href="#section-4.1.1.1-2" class="pilcrow">¶</a>
</div>
<p id="section-4.1.1.1-3">ABNF for <code>code_verifier</code> is as follows.<a href="#section-4.1.1.1-3" class="pilcrow">¶</a></p>
<div class="artwork art-text alignLeft" id="section-4.1.1.1-4">
<pre>
code-verifier = 43*128unreserved
unreserved = ALPHA / DIGIT / "-" / "." / "_" / "~"
ALPHA = %x41-5A / %x61-7A
DIGIT = %x30-39
</pre><a href="#section-4.1.1.1-4" class="pilcrow">¶</a>
</div>
<p id="section-4.1.1.1-5">NOTE: The code verifier SHOULD have enough entropy to make it
impractical to guess the value.  It is RECOMMENDED that the output of
a suitable random number generator be used to create a 32-octet
sequence.  The octet sequence is then base64url-encoded to produce a
43-octet URL-safe string to use as the code verifier.<a href="#section-4.1.1.1-5" class="pilcrow">¶</a></p>
</section>
</div>
<div id="client-creates-the-code-challenge">
<section id="section-4.1.1.2">
            <h5 id="name-client-creates-the-code-cha">
<a href="#section-4.1.1.2" class="section-number selfRef">4.1.1.2. </a><a href="#name-client-creates-the-code-cha" class="section-name selfRef">Client Creates the Code Challenge</a>
            </h5>
<p id="section-4.1.1.2-1">The client then creates a code challenge derived from the code
verifier by using one of the following transformations on the code
verifier:<a href="#section-4.1.1.2-1" class="pilcrow">¶</a></p>
<div class="artwork art-text alignLeft" id="section-4.1.1.2-2">
<pre>
plain
  code_challenge = code_verifier

S256
  code_challenge = BASE64URL-ENCODE(SHA256(ASCII(code_verifier)))
</pre><a href="#section-4.1.1.2-2" class="pilcrow">¶</a>
</div>
<p id="section-4.1.1.2-3">If the client is capable of using <code>S256</code>, it MUST use <code>S256</code>, as
<code>S256</code> is Mandatory To Implement (MTI) on the server.  Clients are
permitted to use <code>plain</code> only if they cannot support <code>S256</code> for some
technical reason and know via out-of-band configuration or via 
Authorization Server Metadata (<span>[<a href="#RFC8414" class="xref">RFC8414</a>]</span>) that the server supports <code>plain</code>.<a href="#section-4.1.1.2-3" class="pilcrow">¶</a></p>
<p id="section-4.1.1.2-4">The plain transformation is for compatibility with existing
deployments and for constrained environments that can't use the S256
transformation.<a href="#section-4.1.1.2-4" class="pilcrow">¶</a></p>
<p id="section-4.1.1.2-5">ABNF for <code>code_challenge</code> is as follows.<a href="#section-4.1.1.2-5" class="pilcrow">¶</a></p>
<div class="artwork art-text alignLeft" id="section-4.1.1.2-6">
<pre>
code-challenge = 43*128unreserved
unreserved = ALPHA / DIGIT / "-" / "." / "_" / "~"
ALPHA = %x41-5A / %x61-7A
DIGIT = %x30-39
</pre><a href="#section-4.1.1.2-6" class="pilcrow">¶</a>
</div>
</section>
</div>
<div id="initiate-authorization-request">
<section id="section-4.1.1.3">
            <h5 id="name-client-initiates-the-author">
<a href="#section-4.1.1.3" class="section-number selfRef">4.1.1.3. </a><a href="#name-client-initiates-the-author" class="section-name selfRef">Client Initiates the Authorization Request</a>
            </h5>
<p id="section-4.1.1.3-1">The client constructs the request URI by adding the following
parameters to the query component of the authorization endpoint URI
using the <code>application/x-www-form-urlencoded</code> format, per Appendix B:<a href="#section-4.1.1.3-1" class="pilcrow">¶</a></p>
<dl class="dlParallel" id="section-4.1.1.3-2">
              <dt id="section-4.1.1.3-2.1">"response_type":</dt>
<dd id="section-4.1.1.3-2.2">
  REQUIRED.  Value MUST be set to <code>code</code>.<a href="#section-4.1.1.3-2.2" class="pilcrow">¶</a>
</dd>
<dt id="section-4.1.1.3-2.3">"client_id":</dt>
<dd id="section-4.1.1.3-2.4">
  REQUIRED.  The client identifier as described in <a href="#client-identifier" class="xref">Section 2.2</a>.<a href="#section-4.1.1.3-2.4" class="pilcrow">¶</a>
</dd>
<dt id="section-4.1.1.3-2.5">"code_challenge":</dt>
<dd id="section-4.1.1.3-2.6">
  REQUIRED.  Code challenge.<a href="#section-4.1.1.3-2.6" class="pilcrow">¶</a>
</dd>
<dt id="section-4.1.1.3-2.7">"code_challenge_method":</dt>
<dd id="section-4.1.1.3-2.8">
  OPTIONAL, defaults to <code>plain</code> if not present in the request.  Code
verifier transformation method is <code>S256</code> or <code>plain</code>.<a href="#section-4.1.1.3-2.8" class="pilcrow">¶</a>
</dd>
<dt id="section-4.1.1.3-2.9">"redirect_uri":</dt>
<dd id="section-4.1.1.3-2.10">
  OPTIONAL.  As described in <a href="#redirection-endpoint" class="xref">Section 3.1.2</a>.<a href="#section-4.1.1.3-2.10" class="pilcrow">¶</a>
</dd>
<dt id="section-4.1.1.3-2.11">"scope":</dt>
<dd id="section-4.1.1.3-2.12">
  OPTIONAL.  The scope of the access request as described by
<a href="#access-token-scope" class="xref">Section 3.3</a>.<a href="#section-4.1.1.3-2.12" class="pilcrow">¶</a>
</dd>
<dt id="section-4.1.1.3-2.13">"state":</dt>
<dd id="section-4.1.1.3-2.14">
  OPTIONAL.  An opaque value used by the client to maintain
state between the request and callback.  The authorization
server includes this value when redirecting the user-agent back
to the client.<a href="#section-4.1.1.3-2.14" class="pilcrow">¶</a>
</dd>
</dl>
<p id="section-4.1.1.3-3">The client directs the resource owner to the constructed URI using an
HTTP redirection response, or by other means available to it via the
user-agent.<a href="#section-4.1.1.3-3" class="pilcrow">¶</a></p>
<p id="section-4.1.1.3-4">For example, the client directs the user-agent to make the following
HTTP request using TLS (with extra line breaks for display purposes
only):<a href="#section-4.1.1.3-4" class="pilcrow">¶</a></p>
<div class="artwork art-text alignLeft" id="section-4.1.1.3-5">
<pre>
GET /authorize?response_type=code&amp;client_id=s6BhdRkqt3&amp;state=xyz
    &amp;redirect_uri=https%3A%2F%2Fclient%2Eexample%2Ecom%2Fcb
    &amp;code_challenge=6fdkQaPm51l13DSukcAH3Mdx7_ntecHYd1vi3n0hMZY
    &amp;code_challenge_method=S256 HTTP/1.1
Host: server.example.com
</pre><a href="#section-4.1.1.3-5" class="pilcrow">¶</a>
</div>
<p id="section-4.1.1.3-6">The authorization server validates the request to ensure that all
required parameters are present and valid.  If the request is valid,
the authorization server authenticates the resource owner and obtains
an authorization decision (by asking the resource owner or by
establishing approval via other means).<a href="#section-4.1.1.3-6" class="pilcrow">¶</a></p>
<p id="section-4.1.1.3-7">When a decision is established, the authorization server directs the
user-agent to the provided client redirection URI using an HTTP
redirection response, or by other means available to it via the
user-agent.<a href="#section-4.1.1.3-7" class="pilcrow">¶</a></p>
</section>
</div>
</section>
</div>
<div id="authorization-response">
<section id="section-4.1.2">
          <h4 id="name-authorization-response">
<a href="#section-4.1.2" class="section-number selfRef">4.1.2. </a><a href="#name-authorization-response" class="section-name selfRef">Authorization Response</a>
          </h4>
<p id="section-4.1.2-1">If the resource owner grants the access request, the authorization
server issues an authorization code and delivers it to the client by
adding the following parameters to the query component of the
redirection URI using the <code>application/x-www-form-urlencoded</code> format,
per Appendix B:<a href="#section-4.1.2-1" class="pilcrow">¶</a></p>
<dl class="dlParallel" id="section-4.1.2-2">
            <dt id="section-4.1.2-2.1">"code":</dt>
<dd id="section-4.1.2-2.2">
  REQUIRED.  The authorization code generated by the
authorization server.  The authorization code MUST expire
shortly after it is issued to mitigate the risk of leaks.  A
maximum authorization code lifetime of 10 minutes is
RECOMMENDED.  The client MUST NOT use the authorization code
more than once.  If an authorization code is used more than
once, the authorization server MUST deny the request and SHOULD
revoke (when possible) all tokens previously issued based on
that authorization code.  The authorization code is bound to
the client identifier and redirection URI.<a href="#section-4.1.2-2.2" class="pilcrow">¶</a>
</dd>
<dt id="section-4.1.2-2.3">"state":</dt>
<dd id="section-4.1.2-2.4">
  REQUIRED if the <code>state</code> parameter was present in the client
authorization request.  The exact value received from the
client.<a href="#section-4.1.2-2.4" class="pilcrow">¶</a>
</dd>
</dl>
<p id="section-4.1.2-3">For example, the authorization server redirects the user-agent by
sending the following HTTP response:<a href="#section-4.1.2-3" class="pilcrow">¶</a></p>
<div class="artwork art-text alignLeft" id="section-4.1.2-4">
<pre>
HTTP/1.1 302 Found
Location: https://client.example.com/cb?code=SplxlOBeZQQYbYS6WxSbIA
          &amp;state=xyz
</pre><a href="#section-4.1.2-4" class="pilcrow">¶</a>
</div>
<p id="section-4.1.2-5">The client MUST ignore unrecognized response parameters.  The
authorization code string size is left undefined by this
specification.  The client should avoid making assumptions about code
value sizes.  The authorization server SHOULD document the size of
any value it issues.<a href="#section-4.1.2-5" class="pilcrow">¶</a></p>
<p id="section-4.1.2-6">When the server issues the authorization code in the authorization
response, it MUST associate the <code>code_challenge</code> and
<code>code_challenge_method</code> values with the authorization code so it can
be verified later.<a href="#section-4.1.2-6" class="pilcrow">¶</a></p>
<p id="section-4.1.2-7">The <code>code_challenge</code> and <code>code_challenge_method</code> values
may be stored in encrypted form in the <code>code</code> itself, but could
alternatively be stored on the server associated with the code.  The
server MUST NOT include the <code>code_challenge</code> value in client requests
in a form that other entities can extract.<a href="#section-4.1.2-7" class="pilcrow">¶</a></p>
<p id="section-4.1.2-8">The exact method that the server uses to associate the
<code>code_challenge</code> with the issued <code>code</code> is out of scope for this
specification.<a href="#section-4.1.2-8" class="pilcrow">¶</a></p>
<div id="authorization-code-error-response">
<section id="section-4.1.2.1">
            <h5 id="name-error-response">
<a href="#section-4.1.2.1" class="section-number selfRef">4.1.2.1. </a><a href="#name-error-response" class="section-name selfRef">Error Response</a>
            </h5>
<p id="section-4.1.2.1-1">If the request fails due to a missing, invalid, or mismatching
redirection URI, or if the client identifier is missing or invalid,
the authorization server SHOULD inform the resource owner of the
error and MUST NOT automatically redirect the user-agent to the
invalid redirection URI.<a href="#section-4.1.2.1-1" class="pilcrow">¶</a></p>
<p id="section-4.1.2.1-2">An AS MUST reject requests without a <code>code_challenge</code> from public clients, 
and MUST reject such requests from other clients unless there is 
reasonable assurance that the client mitigates authorization code injection 
in other ways. See <a href="#authorization_codes" class="xref">Section 9.7</a> for details.<a href="#section-4.1.2.1-2" class="pilcrow">¶</a></p>
<p id="section-4.1.2.1-3">If the server does not support the requested <code>code_challenge_method</code> transformation, 
the authorization endpoint MUST return the
authorization error response with <code>error</code> value set to
<code>invalid_request</code>.  The <code>error_description</code> or the response of
<code>error_uri</code> SHOULD explain the nature of error, e.g., transform
algorithm not supported.<a href="#section-4.1.2.1-3" class="pilcrow">¶</a></p>
<p id="section-4.1.2.1-4">If the resource owner denies the access request or if the request
fails for reasons other than a missing or invalid redirection URI,
the authorization server informs the client by adding the following
parameters to the query component of the redirection URI using the
<code>application/x-www-form-urlencoded</code> format, per Appendix B:<a href="#section-4.1.2.1-4" class="pilcrow">¶</a></p>
<dl class="dlParallel" id="section-4.1.2.1-5">
              <dt id="section-4.1.2.1-5.1">"error":</dt>
<dd id="section-4.1.2.1-5.2">
                <p id="section-4.1.2.1-5.2.1">
  REQUIRED.  A single ASCII <span>[<a href="#USASCII" class="xref">USASCII</a>]</span> error code from the
following:<a href="#section-4.1.2.1-5.2.1" class="pilcrow">¶</a></p>
<dl class="dlParallel" id="section-4.1.2.1-5.2.2">
                  <dt id="section-4.1.2.1-5.2.2.1">"invalid_request":</dt>
<dd id="section-4.1.2.1-5.2.2.2">
        The request is missing a required parameter, includes an
invalid parameter value, includes a parameter more than
once, or is otherwise malformed.<a href="#section-4.1.2.1-5.2.2.2" class="pilcrow">¶</a>
</dd>
<dt id="section-4.1.2.1-5.2.2.3">"unauthorized_client":</dt>
<dd id="section-4.1.2.1-5.2.2.4">
        The client is not authorized to request an authorization
code using this method.<a href="#section-4.1.2.1-5.2.2.4" class="pilcrow">¶</a>
</dd>
<dt id="section-4.1.2.1-5.2.2.5">"access_denied":</dt>
<dd id="section-4.1.2.1-5.2.2.6">
        The resource owner or authorization server denied the
request.<a href="#section-4.1.2.1-5.2.2.6" class="pilcrow">¶</a>
</dd>
<dt id="section-4.1.2.1-5.2.2.7">"unsupported_response_type":</dt>
<dd id="section-4.1.2.1-5.2.2.8">
        The authorization server does not support obtaining an
authorization code using this method.<a href="#section-4.1.2.1-5.2.2.8" class="pilcrow">¶</a>
</dd>
<dt id="section-4.1.2.1-5.2.2.9">"invalid_scope":</dt>
<dd id="section-4.1.2.1-5.2.2.10">
        The requested scope is invalid, unknown, or malformed.<a href="#section-4.1.2.1-5.2.2.10" class="pilcrow">¶</a>
</dd>
<dt id="section-4.1.2.1-5.2.2.11">"server_error":</dt>
<dd id="section-4.1.2.1-5.2.2.12">
        The authorization server encountered an unexpected
condition that prevented it from fulfilling the request.
(This error code is needed because a 500 Internal Server
Error HTTP status code cannot be returned to the client
via an HTTP redirect.)<a href="#section-4.1.2.1-5.2.2.12" class="pilcrow">¶</a>
</dd>
<dt id="section-4.1.2.1-5.2.2.13">"temporarily_unavailable":</dt>
<dd id="section-4.1.2.1-5.2.2.14">
        The authorization server is currently unable to handle
the request due to a temporary overloading or maintenance
of the server.  (This error code is needed because a 503
Service Unavailable HTTP status code cannot be returned
to the client via an HTTP redirect.)<a href="#section-4.1.2.1-5.2.2.14" class="pilcrow">¶</a>
</dd>
</dl>
<p id="section-4.1.2.1-5.2.3">

Values for the <code>error</code> parameter MUST NOT include characters
outside the set %x20-21 / %x23-5B / %x5D-7E.<a href="#section-4.1.2.1-5.2.3" class="pilcrow">¶</a></p>
</dd>
<dt id="section-4.1.2.1-5.3">"error_description":</dt>
<dd id="section-4.1.2.1-5.4">
  OPTIONAL.  Human-readable ASCII <span>[<a href="#USASCII" class="xref">USASCII</a>]</span> text providing
additional information, used to assist the client developer in
understanding the error that occurred.
Values for the <code>error_description</code> parameter MUST NOT include
characters outside the set %x20-21 / %x23-5B / %x5D-7E.<a href="#section-4.1.2.1-5.4" class="pilcrow">¶</a>
</dd>
<dt id="section-4.1.2.1-5.5">"error_uri":</dt>
<dd id="section-4.1.2.1-5.6">
  OPTIONAL.  A URI identifying a human-readable web page with
information about the error, used to provide the client
developer with additional information about the error.
Values for the <code>error_uri</code> parameter MUST conform to the
URI-reference syntax and thus MUST NOT include characters
outside the set %x21 / %x23-5B / %x5D-7E.<a href="#section-4.1.2.1-5.6" class="pilcrow">¶</a>
</dd>
<dt id="section-4.1.2.1-5.7">"state":</dt>
<dd id="section-4.1.2.1-5.8">
  REQUIRED if a <code>state</code> parameter was present in the client
authorization request.  The exact value received from the
client.<a href="#section-4.1.2.1-5.8" class="pilcrow">¶</a>
</dd>
</dl>
<p id="section-4.1.2.1-6">For example, the authorization server redirects the user-agent by
sending the following HTTP response:<a href="#section-4.1.2.1-6" class="pilcrow">¶</a></p>
<div class="artwork art-text alignLeft" id="section-4.1.2.1-7">
<pre>
HTTP/1.1 302 Found
Location: https://client.example.com/cb?error=access_denied&amp;state=xyz
</pre><a href="#section-4.1.2.1-7" class="pilcrow">¶</a>
</div>
</section>
</div>
</section>
</div>
<div id="access-token-request">
<section id="section-4.1.3">
          <h4 id="name-access-token-request">
<a href="#section-4.1.3" class="section-number selfRef">4.1.3. </a><a href="#name-access-token-request" class="section-name selfRef">Access Token Request</a>
          </h4>
<p id="section-4.1.3-1">The client makes a request to the token endpoint by sending the
following parameters using the <code>application/x-www-form-urlencoded</code>
format per Appendix B with a character encoding of UTF-8 in the HTTP
request entity-body:<a href="#section-4.1.3-1" class="pilcrow">¶</a></p>
<dl class="dlParallel" id="section-4.1.3-2">
            <dt id="section-4.1.3-2.1">"grant_type":</dt>
<dd id="section-4.1.3-2.2">
  REQUIRED.  Value MUST be set to <code>authorization_code</code>.<a href="#section-4.1.3-2.2" class="pilcrow">¶</a>
</dd>
<dt id="section-4.1.3-2.3">"code":</dt>
<dd id="section-4.1.3-2.4">
  REQUIRED.  The authorization code received from the
authorization server.<a href="#section-4.1.3-2.4" class="pilcrow">¶</a>
</dd>
<dt id="section-4.1.3-2.5">"redirect_uri":</dt>
<dd id="section-4.1.3-2.6">
  REQUIRED, if the <code>redirect_uri</code> parameter was included in the
authorization request as described in <a href="#authorization-request" class="xref">Section 4.1.1</a>, and their
values MUST be identical.<a href="#section-4.1.3-2.6" class="pilcrow">¶</a>
</dd>
<dt id="section-4.1.3-2.7">"client_id":</dt>
<dd id="section-4.1.3-2.8">
  REQUIRED, if the client is not authenticating with the
authorization server as described in <a href="#token-endpoint-client-authentication" class="xref">Section 3.2.1</a>.<a href="#section-4.1.3-2.8" class="pilcrow">¶</a>
</dd>
<dt id="section-4.1.3-2.9">"code_verifier":</dt>
<dd id="section-4.1.3-2.10">
  REQUIRED.  Code verifier<a href="#section-4.1.3-2.10" class="pilcrow">¶</a>
</dd>
</dl>
<p id="section-4.1.3-3">If the client type is confidential or the client was issued client
credentials (or assigned other authentication requirements), the
client MUST authenticate with the authorization server as described
in <a href="#token-endpoint-client-authentication" class="xref">Section 3.2.1</a>.<a href="#section-4.1.3-3" class="pilcrow">¶</a></p>
<p id="section-4.1.3-4">For example, the client makes the following HTTP request using TLS
(with extra line breaks for display purposes only):<a href="#section-4.1.3-4" class="pilcrow">¶</a></p>
<div class="artwork art-text alignLeft" id="section-4.1.3-5">
<pre>
POST /token HTTP/1.1
Host: server.example.com
Authorization: Basic czZCaGRSa3F0MzpnWDFmQmF0M2JW
Content-Type: application/x-www-form-urlencoded

grant_type=authorization_code&amp;code=SplxlOBeZQQYbYS6WxSbIA
&amp;redirect_uri=https%3A%2F%2Fclient%2Eexample%2Ecom%2Fcb
&amp;code_verifier=3641a2d12d66101249cdf7a79c000c1f8c05d2aafcf14bf146497bed
</pre><a href="#section-4.1.3-5" class="pilcrow">¶</a>
</div>
<p id="section-4.1.3-6">The authorization server MUST:<a href="#section-4.1.3-6" class="pilcrow">¶</a></p>
<ul>
<li id="section-4.1.3-7.1">require client authentication for confidential clients or for any
client that was issued client credentials (or with other
authentication requirements),<a href="#section-4.1.3-7.1" class="pilcrow">¶</a>
</li>
<li id="section-4.1.3-7.2">authenticate the client if client authentication is included,<a href="#section-4.1.3-7.2" class="pilcrow">¶</a>
</li>
<li id="section-4.1.3-7.3">ensure that the authorization code was issued to the authenticated
confidential client, or if the client is public, ensure that the
code was issued to <code>client_id</code> in the request,<a href="#section-4.1.3-7.3" class="pilcrow">¶</a>
</li>
<li id="section-4.1.3-7.4">verify that the authorization code is valid,<a href="#section-4.1.3-7.4" class="pilcrow">¶</a>
</li>
<li id="section-4.1.3-7.5">verify the <code>code_verifier</code> by calculating the code challenge from the received
<code>code_verifier</code> and comparing it with the previously associated
<code>code_challenge</code>, after first transforming it according to the
<code>code_challenge_method</code> method specified by the client, and<a href="#section-4.1.3-7.5" class="pilcrow">¶</a>
</li>
<li id="section-4.1.3-7.6">ensure that the <code>redirect_uri</code> parameter is present if the
<code>redirect_uri</code> parameter was included in the initial authorization
request as described in <a href="#initiate-authorization-request" class="xref">Section 4.1.1.3</a>, and if included ensure that
their values are identical.<a href="#section-4.1.3-7.6" class="pilcrow">¶</a>
</li>
</ul>
</section>
</div>
<div id="authorization-code-access-token-response">
<section id="section-4.1.4">
          <h4 id="name-access-token-response">
<a href="#section-4.1.4" class="section-number selfRef">4.1.4. </a><a href="#name-access-token-response" class="section-name selfRef">Access Token Response</a>
          </h4>
<p id="section-4.1.4-1">If the access token request is valid and authorized, the
authorization server issues an access token and optional refresh
token as described in <a href="#access-token-successful-response" class="xref">Section 5.1</a>.  If the request client
authentication failed or is invalid, the authorization server returns
an error response as described in <a href="#access-token-error-response" class="xref">Section 5.2</a>.<a href="#section-4.1.4-1" class="pilcrow">¶</a></p>
<p id="section-4.1.4-2">An example successful response:<a href="#section-4.1.4-2" class="pilcrow">¶</a></p>
<div class="artwork art-text alignLeft" id="section-4.1.4-3">
<pre>
HTTP/1.1 200 OK
Content-Type: application/json
Cache-Control: no-store
Pragma: no-cache

{
  "access_token": "2YotnFZFEjr1zCsicMWpAA",
  "token_type": "Bearer",
  "expires_in": 3600,
  "refresh_token": "tGzv3JOkF0XG5Qx2TlKWIA",
  "example_parameter": "example_value"
}
</pre><a href="#section-4.1.4-3" class="pilcrow">¶</a>
</div>
</section>
</div>
</section>
</div>
<div id="client-credentials-grant">
<section id="section-4.2">
        <h3 id="name-client-credentials-grant">
<a href="#section-4.2" class="section-number selfRef">4.2. </a><a href="#name-client-credentials-grant" class="section-name selfRef">Client Credentials Grant</a>
        </h3>
<p id="section-4.2-1">The client can request an access token using only its client
credentials (or other supported means of authentication) when the
client is requesting access to the protected resources under its
control, or those of another resource owner that have been previously
arranged with the authorization server (the method of which is beyond
the scope of this specification).<a href="#section-4.2-1" class="pilcrow">¶</a></p>
<p id="section-4.2-2">The client credentials grant type MUST only be used by confidential
clients.<a href="#section-4.2-2" class="pilcrow">¶</a></p>
<span id="name-client-credentials-flow"></span><div id="fig-client-credentials-flow">
<figure id="figure-4">
          <div class="artwork art-text alignLeft" id="section-4.2-3.1">
<pre>
     +---------+                                  +---------------+
     |         |                                  |               |
     |         |&gt;--(1)- Client Authentication ---&gt;| Authorization |
     | Client  |                                  |     Server    |
     |         |&lt;--(2)---- Access Token ---------&lt;|               |
     |         |                                  |               |
     +---------+                                  +---------------+
</pre>
</div>
<figcaption><a href="#figure-4" class="selfRef">Figure 4</a>:
<a href="#name-client-credentials-flow" class="selfRef">Client Credentials Flow</a>
          </figcaption></figure>
</div>
<p id="section-4.2-4">The flow illustrated in <a href="#fig-client-credentials-flow" class="xref">Figure 4</a> includes the following steps:<a href="#section-4.2-4" class="pilcrow">¶</a></p>
<p id="section-4.2-5">(1)  The client authenticates with the authorization server and
     requests an access token from the token endpoint.<a href="#section-4.2-5" class="pilcrow">¶</a></p>
<p id="section-4.2-6">(2)  The authorization server authenticates the client, and if valid,
     issues an access token.<a href="#section-4.2-6" class="pilcrow">¶</a></p>
<div id="authorization-request-and-response">
<section id="section-4.2.1">
          <h4 id="name-authorization-request-and-r">
<a href="#section-4.2.1" class="section-number selfRef">4.2.1. </a><a href="#name-authorization-request-and-r" class="section-name selfRef">Authorization Request and Response</a>
          </h4>
<p id="section-4.2.1-1">Since the client authentication is used as the authorization grant,
no additional authorization request is needed.<a href="#section-4.2.1-1" class="pilcrow">¶</a></p>
</section>
</div>
<div id="client-credentials-access-token-request">
<section id="section-4.2.2">
          <h4 id="name-access-token-request-2">
<a href="#section-4.2.2" class="section-number selfRef">4.2.2. </a><a href="#name-access-token-request-2" class="section-name selfRef">Access Token Request</a>
          </h4>
<p id="section-4.2.2-1">The client makes a request to the token endpoint by adding the
following parameters using the <code>application/x-www-form-urlencoded</code>
format per Appendix B with a character encoding of UTF-8 in the HTTP
request entity-body:<a href="#section-4.2.2-1" class="pilcrow">¶</a></p>
<dl class="dlParallel" id="section-4.2.2-2">
            <dt id="section-4.2.2-2.1">"grant_type":</dt>
<dd id="section-4.2.2-2.2">
  REQUIRED.  Value MUST be set to <code>client_credentials</code>.<a href="#section-4.2.2-2.2" class="pilcrow">¶</a>
</dd>
<dt id="section-4.2.2-2.3">"scope":</dt>
<dd id="section-4.2.2-2.4">
  OPTIONAL.  The scope of the access request as described by
<a href="#access-token-scope" class="xref">Section 3.3</a>.<a href="#section-4.2.2-2.4" class="pilcrow">¶</a>
</dd>
</dl>
<p id="section-4.2.2-3">The client MUST authenticate with the authorization server as
described in <a href="#token-endpoint-client-authentication" class="xref">Section 3.2.1</a>.<a href="#section-4.2.2-3" class="pilcrow">¶</a></p>
<p id="section-4.2.2-4">For example, the client makes the following HTTP request using
transport-layer security (with extra line breaks for display purposes
only):<a href="#section-4.2.2-4" class="pilcrow">¶</a></p>
<div class="artwork art-text alignLeft" id="section-4.2.2-5">
<pre>
POST /token HTTP/1.1
Host: server.example.com
Authorization: Basic czZCaGRSa3F0MzpnWDFmQmF0M2JW
Content-Type: application/x-www-form-urlencoded

grant_type=client_credentials
</pre><a href="#section-4.2.2-5" class="pilcrow">¶</a>
</div>
<p id="section-4.2.2-6">The authorization server MUST authenticate the client.<a href="#section-4.2.2-6" class="pilcrow">¶</a></p>
</section>
</div>
<div id="access-token-response">
<section id="section-4.2.3">
          <h4 id="name-access-token-response-2">
<a href="#section-4.2.3" class="section-number selfRef">4.2.3. </a><a href="#name-access-token-response-2" class="section-name selfRef">Access Token Response</a>
          </h4>
<p id="section-4.2.3-1">If the access token request is valid and authorized, the
authorization server issues an access token as described in
<a href="#access-token-successful-response" class="xref">Section 5.1</a>.  A refresh token SHOULD NOT be included.  If the request
failed client authentication or is invalid, the authorization server
returns an error response as described in <a href="#access-token-error-response" class="xref">Section 5.2</a>.<a href="#section-4.2.3-1" class="pilcrow">¶</a></p>
<p id="section-4.2.3-2">An example successful response:<a href="#section-4.2.3-2" class="pilcrow">¶</a></p>
<div class="artwork art-text alignLeft" id="section-4.2.3-3">
<pre>
HTTP/1.1 200 OK
Content-Type: application/json
Cache-Control: no-store
Pragma: no-cache

{
  "access_token": "2YotnFZFEjr1zCsicMWpAA",
  "token_type": "Bearer",
  "expires_in": 3600,
  "example_parameter": "example_value"
}
</pre><a href="#section-4.2.3-3" class="pilcrow">¶</a>
</div>
</section>
</div>
</section>
</div>
<div id="extension-grants">
<section id="section-4.3">
        <h3 id="name-extension-grants">
<a href="#section-4.3" class="section-number selfRef">4.3. </a><a href="#name-extension-grants" class="section-name selfRef">Extension Grants</a>
        </h3>
<p id="section-4.3-1">The client uses an extension grant type by specifying the grant type
using an absolute URI (defined by the authorization server) as the
value of the <code>grant_type</code> parameter of the token endpoint, and by
adding any additional parameters necessary.<a href="#section-4.3-1" class="pilcrow">¶</a></p>
<p id="section-4.3-2">For example, to request an access token using the Device Authorization Grant
as defined by <span>[<a href="#RFC8628" class="xref">RFC8628</a>]</span> after the user has authorized the client on a separate device,
the client makes the following HTTP request using
TLS (with extra line breaks for display purposes only):<a href="#section-4.3-2" class="pilcrow">¶</a></p>
<div class="artwork art-text alignLeft" id="section-4.3-3">
<pre>
  POST /token HTTP/1.1
  Host: server.example.com
  Content-Type: application/x-www-form-urlencoded

  grant_type=urn%3Aietf%3Aparams%3Aoauth%3Agrant-type%3Adevice_code
  &amp;device_code=GmRhmhcxhwEzkoEqiMEg_DnyEysNkuNhszIySk9eS
  &amp;client_id=C409020731
</pre><a href="#section-4.3-3" class="pilcrow">¶</a>
</div>
<p id="section-4.3-4">If the access token request is valid and authorized, the
authorization server issues an access token and optional refresh
token as described in <a href="#access-token-successful-response" class="xref">Section 5.1</a>.  If the request failed client
authentication or is invalid, the authorization server returns an
error response as described in <a href="#access-token-error-response" class="xref">Section 5.2</a>.<a href="#section-4.3-4" class="pilcrow">¶</a></p>
</section>
</div>
</section>
</div>
<div id="issuing-an-access-token">
<section id="section-5">
      <h2 id="name-issuing-an-access-token">
<a href="#section-5" class="section-number selfRef">5. </a><a href="#name-issuing-an-access-token" class="section-name selfRef">Issuing an Access Token</a>
      </h2>
<p id="section-5-1">If the access token request is valid and authorized, the
authorization server issues an access token and optional refresh
token as described in <a href="#access-token-successful-response" class="xref">Section 5.1</a>.  If the request failed client
authentication or is invalid, the authorization server returns an
error response as described in <a href="#access-token-error-response" class="xref">Section 5.2</a>.<a href="#section-5-1" class="pilcrow">¶</a></p>
<div id="access-token-successful-response">
<section id="section-5.1">
        <h3 id="name-successful-response">
<a href="#section-5.1" class="section-number selfRef">5.1. </a><a href="#name-successful-response" class="section-name selfRef">Successful Response</a>
        </h3>
<p id="section-5.1-1">The authorization server issues an access token and optional refresh
token, and constructs the response by adding the following parameters
to the entity-body of the HTTP response with a 200 (OK) status code:<a href="#section-5.1-1" class="pilcrow">¶</a></p>
<dl class="dlParallel" id="section-5.1-2">
          <dt id="section-5.1-2.1">"access_token":</dt>
<dd id="section-5.1-2.2">
  REQUIRED.  The access token issued by the authorization server.<a href="#section-5.1-2.2" class="pilcrow">¶</a>
</dd>
<dt id="section-5.1-2.3">"token_type":</dt>
<dd id="section-5.1-2.4">
  REQUIRED.  The type of the token issued as described in
<a href="#access-token-types" class="xref">Section 7.1</a>.  Value is case insensitive.<a href="#section-5.1-2.4" class="pilcrow">¶</a>
</dd>
<dt id="section-5.1-2.5">"expires_in":</dt>
<dd id="section-5.1-2.6">
  RECOMMENDED.  The lifetime in seconds of the access token.  For
example, the value <code>3600</code> denotes that the access token will
expire in one hour from the time the response was generated.
If omitted, the authorization server SHOULD provide the
expiration time via other means or document the default value.<a href="#section-5.1-2.6" class="pilcrow">¶</a>
</dd>
<dt id="section-5.1-2.7">"refresh_token":</dt>
<dd id="section-5.1-2.8">
  OPTIONAL.  The refresh token, which can be used to obtain new
access tokens using the same authorization grant as described
in <a href="#refreshing-an-access-token" class="xref">Section 6</a>.<a href="#section-5.1-2.8" class="pilcrow">¶</a>
</dd>
<dt id="section-5.1-2.9">"scope":</dt>
<dd id="section-5.1-2.10">
  OPTIONAL, if identical to the scope requested by the client;
otherwise, REQUIRED.  The scope of the access token as
described by <a href="#access-token-scope" class="xref">Section 3.3</a>.<a href="#section-5.1-2.10" class="pilcrow">¶</a>
</dd>
</dl>
<p id="section-5.1-3">The parameters are included in the entity-body of the HTTP response
using the <code>application/json</code> media type as defined by <span>[<a href="#RFC7159" class="xref">RFC7159</a>]</span>.  The
parameters are serialized into a JavaScript Object Notation (JSON)
structure by adding each parameter at the highest structure level.
Parameter names and string values are included as JSON strings.
Numerical values are included as JSON numbers.  The order of
parameters does not matter and can vary.<a href="#section-5.1-3" class="pilcrow">¶</a></p>
<p id="section-5.1-4">The authorization server MUST include the HTTP <code>Cache-Control</code>
response header field <span>[<a href="#RFC7234" class="xref">RFC7234</a>]</span> with a value of <code>no-store</code> in any
response containing tokens, credentials, or other sensitive
information, as well as the <code>Pragma</code> response header field <span>[<a href="#RFC7234" class="xref">RFC7234</a>]</span>
with a value of <code>no-cache</code>.<a href="#section-5.1-4" class="pilcrow">¶</a></p>
<p id="section-5.1-5">For example:<a href="#section-5.1-5" class="pilcrow">¶</a></p>
<div class="artwork art-text alignLeft" id="section-5.1-6">
<pre>
HTTP/1.1 200 OK
Content-Type: application/json
Cache-Control: no-store
Pragma: no-cache

{
  "access_token":"2YotnFZFEjr1zCsicMWpAA",
  "token_type":"Bearer",
  "expires_in":3600,
  "refresh_token":"tGzv3JOkF0XG5Qx2TlKWIA",
  "example_parameter":"example_value"
}
</pre><a href="#section-5.1-6" class="pilcrow">¶</a>
</div>
<p id="section-5.1-7">The client MUST ignore unrecognized value names in the response.  The
sizes of tokens and other values received from the authorization
server are left undefined.  The client should avoid making
assumptions about value sizes.  The authorization server SHOULD
document the size of any value it issues.<a href="#section-5.1-7" class="pilcrow">¶</a></p>
</section>
</div>
<div id="access-token-error-response">
<section id="section-5.2">
        <h3 id="name-error-response-2">
<a href="#section-5.2" class="section-number selfRef">5.2. </a><a href="#name-error-response-2" class="section-name selfRef">Error Response</a>
        </h3>
<p id="section-5.2-1">The authorization server responds with an HTTP 400 (Bad Request)
status code (unless specified otherwise) and includes the following
parameters with the response:<a href="#section-5.2-1" class="pilcrow">¶</a></p>
<dl class="dlParallel" id="section-5.2-2">
          <dt id="section-5.2-2.1">"error":</dt>
<dd id="section-5.2-2.2">
            <p id="section-5.2-2.2.1">
  REQUIRED.  A single ASCII <span>[<a href="#USASCII" class="xref">USASCII</a>]</span> error code from the following:<a href="#section-5.2-2.2.1" class="pilcrow">¶</a></p>
<dl class="dlParallel" id="section-5.2-2.2.2">
              <dt id="section-5.2-2.2.2.1">"invalid_request":</dt>
<dd id="section-5.2-2.2.2.2">
        The request is missing a required parameter, includes an
unsupported parameter value (other than grant type),
repeats a parameter, includes multiple credentials,
utilizes more than one mechanism for authenticating the
client, or is otherwise malformed.<a href="#section-5.2-2.2.2.2" class="pilcrow">¶</a>
</dd>
<dt id="section-5.2-2.2.2.3">"invalid_client":</dt>
<dd id="section-5.2-2.2.2.4">
        Client authentication failed (e.g., unknown client, no
client authentication included, or unsupported
authentication method).  The authorization server MAY
return an HTTP 401 (Unauthorized) status code to indicate
which HTTP authentication schemes are supported.  If the
client attempted to authenticate via the <code>Authorization</code>
request header field, the authorization server MUST
respond with an HTTP 401 (Unauthorized) status code and
include the <code>WWW-Authenticate</code> response header field
matching the authentication scheme used by the client.<a href="#section-5.2-2.2.2.4" class="pilcrow">¶</a>
</dd>
<dt id="section-5.2-2.2.2.5">"invalid_grant":</dt>
<dd id="section-5.2-2.2.2.6">
        The provided authorization grant (e.g., authorization
code, resource owner credentials) or refresh token is
invalid, expired, revoked, does not match the redirection
URI used in the authorization request, or was issued to
another client.<a href="#section-5.2-2.2.2.6" class="pilcrow">¶</a>
</dd>
<dt id="section-5.2-2.2.2.7">"unauthorized_client":</dt>
<dd id="section-5.2-2.2.2.8">
        The authenticated client is not authorized to use this
authorization grant type.<a href="#section-5.2-2.2.2.8" class="pilcrow">¶</a>
</dd>
<dt id="section-5.2-2.2.2.9">"unsupported_grant_type":</dt>
<dd id="section-5.2-2.2.2.10">
        The authorization grant type is not supported by the
authorization server.<a href="#section-5.2-2.2.2.10" class="pilcrow">¶</a>
</dd>
<dt id="section-5.2-2.2.2.11">"invalid_scope":</dt>
<dd id="section-5.2-2.2.2.12">
        The requested scope is invalid, unknown, malformed, or
exceeds the scope granted by the resource owner.<a href="#section-5.2-2.2.2.12" class="pilcrow">¶</a>
</dd>
</dl>
<p id="section-5.2-2.2.3">

Values for the <code>error</code> parameter MUST NOT include characters
outside the set %x20-21 / %x23-5B / %x5D-7E.<a href="#section-5.2-2.2.3" class="pilcrow">¶</a></p>
</dd>
<dt id="section-5.2-2.3">"error_description":</dt>
<dd id="section-5.2-2.4">
  OPTIONAL.  Human-readable ASCII <span>[<a href="#USASCII" class="xref">USASCII</a>]</span> text providing
additional information, used to assist the client developer in
understanding the error that occurred.
Values for the <code>error_description</code> parameter MUST NOT include
characters outside the set %x20-21 / %x23-5B / %x5D-7E.<a href="#section-5.2-2.4" class="pilcrow">¶</a>
</dd>
<dt id="section-5.2-2.5">"error_uri":</dt>
<dd id="section-5.2-2.6">
  OPTIONAL.  A URI identifying a human-readable web page with
information about the error, used to provide the client
developer with additional information about the error.
Values for the <code>error_uri</code> parameter MUST conform to the
URI-reference syntax and thus MUST NOT include characters
outside the set %x21 / %x23-5B / %x5D-7E.<a href="#section-5.2-2.6" class="pilcrow">¶</a>
</dd>
</dl>
<p id="section-5.2-3">The parameters are included in the entity-body of the HTTP response
using the <code>application/json</code> media type as defined by <span>[<a href="#RFC7159" class="xref">RFC7159</a>]</span>.  The
parameters are serialized into a JSON structure by adding each
parameter at the highest structure level.  Parameter names and string
values are included as JSON strings.  Numerical values are included
as JSON numbers.  The order of parameters does not matter and can
vary.<a href="#section-5.2-3" class="pilcrow">¶</a></p>
<p id="section-5.2-4">For example:<a href="#section-5.2-4" class="pilcrow">¶</a></p>
<div class="artwork art-text alignLeft" id="section-5.2-5">
<pre>
HTTP/1.1 400 Bad Request
Content-Type: application/json
Cache-Control: no-store
Pragma: no-cache

{
 "error":"invalid_request"
}
</pre><a href="#section-5.2-5" class="pilcrow">¶</a>
</div>
</section>
</div>
</section>
</div>
<div id="refreshing-an-access-token">
<section id="section-6">
      <h2 id="name-refreshing-an-access-token">
<a href="#section-6" class="section-number selfRef">6. </a><a href="#name-refreshing-an-access-token" class="section-name selfRef">Refreshing an Access Token</a>
      </h2>
<p id="section-6-1">Authorization servers SHOULD determine, based on a risk assessment,
whether to issue refresh tokens to a certain client.  If the
authorization server decides not to issue refresh tokens, the client
MAY refresh access tokens by utilizing other grant types, such as the
authorization code grant type.  In such a case, the authorization
server may utilize cookies and persistent grants to optimize the user
experience.<a href="#section-6-1" class="pilcrow">¶</a></p>
<p id="section-6-2">If refresh tokens are issued, those refresh tokens MUST be bound to
the scope and resource servers as consented by the resource owner.
This is to prevent privilege escalation by the legitimate client and
reduce the impact of refresh token leakage.<a href="#section-6-2" class="pilcrow">¶</a></p>
<p id="section-6-3">If the authorization server issued a refresh token to the client, the
client makes a refresh request to the token endpoint by adding the
following parameters using the <code>application/x-www-form-urlencoded</code>
format per Appendix B with a character encoding of UTF-8 in the HTTP
request entity-body:<a href="#section-6-3" class="pilcrow">¶</a></p>
<dl class="dlParallel" id="section-6-4">
        <dt id="section-6-4.1">"grant_type":</dt>
<dd id="section-6-4.2">
  REQUIRED.  Value MUST be set to <code>refresh_token</code>.<a href="#section-6-4.2" class="pilcrow">¶</a>
</dd>
<dt id="section-6-4.3">"refresh_token":</dt>
<dd id="section-6-4.4">
  REQUIRED.  The refresh token issued to the client.<a href="#section-6-4.4" class="pilcrow">¶</a>
</dd>
<dt id="section-6-4.5">"scope":</dt>
<dd id="section-6-4.6">
  OPTIONAL.  The scope of the access request as described by
<a href="#access-token-scope" class="xref">Section 3.3</a>.  The requested scope MUST NOT include any scope
not originally granted by the resource owner, and if omitted is
treated as equal to the scope originally granted by the
resource owner.<a href="#section-6-4.6" class="pilcrow">¶</a>
</dd>
</dl>
<p id="section-6-5">Because refresh tokens are typically long-lasting credentials used to
request additional access tokens, the refresh token is bound to the
client to which it was issued.  If the client type is confidential or
the client was issued client credentials (or assigned other
authentication requirements), the client MUST authenticate with the
authorization server as described in <a href="#token-endpoint-client-authentication" class="xref">Section 3.2.1</a>.<a href="#section-6-5" class="pilcrow">¶</a></p>
<p id="section-6-6">For example, the client makes the following HTTP request using
transport-layer security (with extra line breaks for display purposes
only):<a href="#section-6-6" class="pilcrow">¶</a></p>
<div class="artwork art-text alignLeft" id="section-6-7">
<pre>
POST /token HTTP/1.1
Host: server.example.com
Authorization: Basic czZCaGRSa3F0MzpnWDFmQmF0M2JW
Content-Type: application/x-www-form-urlencoded

grant_type=refresh_token&amp;refresh_token=tGzv3JOkF0XG5Qx2TlKWIA
</pre><a href="#section-6-7" class="pilcrow">¶</a>
</div>
<p id="section-6-8">The authorization server MUST:<a href="#section-6-8" class="pilcrow">¶</a></p>
<ul>
<li id="section-6-9.1">require client authentication for confidential clients or for any
client that was issued client credentials (or with other
authentication requirements),<a href="#section-6-9.1" class="pilcrow">¶</a>
</li>
<li id="section-6-9.2">authenticate the client if client authentication is included and
ensure that the refresh token was issued to the authenticated
client, and<a href="#section-6-9.2" class="pilcrow">¶</a>
</li>
<li id="section-6-9.3">validate the refresh token.<a href="#section-6-9.3" class="pilcrow">¶</a>
</li>
</ul>
<p id="section-6-10">Authorization server MUST utilize one of these methods to detect
refresh token replay by malicious actors for public clients:<a href="#section-6-10" class="pilcrow">¶</a></p>
<ul>
<li id="section-6-11.1">
          <em>Sender-constrained refresh tokens:</em> the authorization server
cryptographically binds the refresh token to a certain client
instance by utilizing <span>[<a href="#I-D.ietf-oauth-token-binding" class="xref">I-D.ietf-oauth-token-binding</a>]</span> or <span>[<a href="#RFC8705" class="xref">RFC8705</a>]</span>.<a href="#section-6-11.1" class="pilcrow">¶</a>
</li>
<li id="section-6-11.2">
          <p id="section-6-11.2.1"><em>Refresh token rotation:</em> the authorization server issues a new
refresh token with every access token refresh response.  The
previous refresh token is invalidated but information about the
relationship is retained by the authorization server.  If a
refresh token is compromised and subsequently used by both the
attacker and the legitimate client, one of them will present an
invalidated refresh token, which will inform the authorization
server of the breach.  The authorization server cannot determine
which party submitted the invalid refresh token, but it will
revoke the active refresh token.  This stops the attack at the
cost of forcing the legitimate client to obtain a fresh
authorization grant.<a href="#section-6-11.2.1" class="pilcrow">¶</a></p>
<p id="section-6-11.2.2">
Implementation note: the grant to which a refresh token belongs
may be encoded into the refresh token itself.  This can enable an
authorization server to efficiently determine the grant to which a
refresh token belongs, and by extension, all refresh tokens that
need to be revoked.  Authorization servers MUST ensure the
integrity of the refresh token value in this case, for example,
using signatures.<a href="#section-6-11.2.2" class="pilcrow">¶</a></p>
</li>
</ul>
<p id="section-6-12">If valid and authorized, the authorization server issues an access
token as described in <a href="#access-token-successful-response" class="xref">Section 5.1</a>.  If the request failed
verification or is invalid, the authorization server returns an error
response as described in <a href="#access-token-error-response" class="xref">Section 5.2</a>.<a href="#section-6-12" class="pilcrow">¶</a></p>
<p id="section-6-13">The authorization server MAY issue a new refresh token, in which case
the client MUST discard the old refresh token and replace it with the
new refresh token.  The authorization server MAY revoke the old
refresh token after issuing a new refresh token to the client.  If a
new refresh token is issued, the refresh token scope MUST be
identical to that of the refresh token included by the client in the
request.<a href="#section-6-13" class="pilcrow">¶</a></p>
<p id="section-6-14">Authorization servers MAY revoke refresh tokens automatically in case
of a security event, such as:<a href="#section-6-14" class="pilcrow">¶</a></p>
<ul>
<li id="section-6-15.1">password change<a href="#section-6-15.1" class="pilcrow">¶</a>
</li>
<li id="section-6-15.2">logout at the authorization server<a href="#section-6-15.2" class="pilcrow">¶</a>
</li>
</ul>
<p id="section-6-16">Refresh tokens SHOULD expire if the client has been inactive for some
time, i.e., the refresh token has not been used to obtain fresh
access tokens for some time.  The expiration time is at the
discretion of the authorization server.  It might be a global value
or determined based on the client policy or the grant associated with
the refresh token (and its sensitivity).<a href="#section-6-16" class="pilcrow">¶</a></p>
</section>
</div>
<div id="accessing-protected-resources">
<section id="section-7">
      <h2 id="name-accessing-protected-resourc">
<a href="#section-7" class="section-number selfRef">7. </a><a href="#name-accessing-protected-resourc" class="section-name selfRef">Accessing Protected Resources</a>
      </h2>
<p id="section-7-1">The client accesses protected resources by presenting the access
token to the resource server.  The resource server MUST validate the
access token and ensure that it has not expired and that its scope
covers the requested resource.  The methods used by the resource
server to validate the access token (as well as any error responses)
are beyond the scope of this specification, but generally involve an
interaction or coordination between the resource server and the
authorization server, such as using Token Introspection <span>[<a href="#RFC7662" class="xref">RFC7662</a>]</span>
or a structured access token format such as a JWT <span>[<a href="#I-D.ietf-oauth-access-token-jwt" class="xref">I-D.ietf-oauth-access-token-jwt</a>]</span>.<a href="#section-7-1" class="pilcrow">¶</a></p>
<p id="section-7-2">The method in which the client utilizes the access token to
authenticate with the resource server depends on the type of access
token issued by the authorization server.  Typically, it involves
using the HTTP <code>Authorization</code> request header field <span>[<a href="#RFC2617" class="xref">RFC2617</a>]</span> with an
authentication scheme defined by the specification of the access
token type used, such as <code>Bearer</code>, defined below.<a href="#section-7-2" class="pilcrow">¶</a></p>
<div id="access-token-types">
<section id="section-7.1">
        <h3 id="name-access-token-types">
<a href="#section-7.1" class="section-number selfRef">7.1. </a><a href="#name-access-token-types" class="section-name selfRef">Access Token Types</a>
        </h3>
<p id="section-7.1-1">The access token type provides the client with the information
required to successfully utilize the access token to make a protected
resource request (along with type-specific attributes).  The client
MUST NOT use an access token if it does not understand the token
type.<a href="#section-7.1-1" class="pilcrow">¶</a></p>
<p id="section-7.1-2">For example, the <code>Bearer</code> token type defined in this specification is utilized
by simply including the access token string in the request:<a href="#section-7.1-2" class="pilcrow">¶</a></p>
<div class="artwork art-text alignLeft" id="section-7.1-3">
<pre>
GET /resource/1 HTTP/1.1
Host: example.com
Authorization: Bearer mF_9.B5f-4.1JqM
</pre><a href="#section-7.1-3" class="pilcrow">¶</a>
</div>
<p id="section-7.1-4">The above example is provided for illustration purposes only.<a href="#section-7.1-4" class="pilcrow">¶</a></p>
<p id="section-7.1-5">Each access token type definition specifies the additional attributes
(if any) sent to the client together with the <code>access_token</code> response
parameter.  It also defines the HTTP authentication method used to
include the access token when making a protected resource request.<a href="#section-7.1-5" class="pilcrow">¶</a></p>
</section>
</div>
<div id="bearer-tokens">
<section id="section-7.2">
        <h3 id="name-bearer-tokens">
<a href="#section-7.2" class="section-number selfRef">7.2. </a><a href="#name-bearer-tokens" class="section-name selfRef">Bearer Tokens</a>
        </h3>
<p id="section-7.2-1">A Bearer Token is a security token with the property that any party
in possession of the token (a "bearer") can use the token in any way
that any other party in possession of it can.  Using a bearer token
does not require a bearer to prove possession of cryptographic key material
(proof-of-possession).<a href="#section-7.2-1" class="pilcrow">¶</a></p>
<p id="section-7.2-2">Bearer tokens may be extended to include proof-of-possession techniques
by other specifications.<a href="#section-7.2-2" class="pilcrow">¶</a></p>
<div id="authenticated-requests">
<section id="section-7.2.1">
          <h4 id="name-authenticated-requests">
<a href="#section-7.2.1" class="section-number selfRef">7.2.1. </a><a href="#name-authenticated-requests" class="section-name selfRef">Authenticated Requests</a>
          </h4>
<p id="section-7.2.1-1">This section defines two methods of sending Bearer tokens in resource
requests to resource servers. Clients MUST NOT use more than one method
to transmit the token in each request.<a href="#section-7.2.1-1" class="pilcrow">¶</a></p>
<div id="authorization-request-header-field">
<section id="section-7.2.1.1">
            <h5 id="name-authorization-request-heade">
<a href="#section-7.2.1.1" class="section-number selfRef">7.2.1.1. </a><a href="#name-authorization-request-heade" class="section-name selfRef">Authorization Request Header Field</a>
            </h5>
<p id="section-7.2.1.1-1">When sending the access token in the <code>Authorization</code> request header
field defined by HTTP/1.1 <span>[<a href="#RFC2617" class="xref">RFC2617</a>]</span>, the client uses the <code>Bearer</code>
authentication scheme to transmit the access token.<a href="#section-7.2.1.1-1" class="pilcrow">¶</a></p>
<p id="section-7.2.1.1-2">For example:<a href="#section-7.2.1.1-2" class="pilcrow">¶</a></p>
<div class="artwork art-text alignLeft" id="section-7.2.1.1-3">
<pre>
 GET /resource HTTP/1.1
 Host: server.example.com
 Authorization: Bearer mF_9.B5f-4.1JqM
</pre><a href="#section-7.2.1.1-3" class="pilcrow">¶</a>
</div>
<p id="section-7.2.1.1-4">The syntax of the <code>Authorization</code> header field for this scheme
follows the usage of the Basic scheme defined in Section 2 of
<span>[<a href="#RFC2617" class="xref">RFC2617</a>]</span>.  Note that, as with Basic, it does not conform to the
generic syntax defined in Section 1.2 of <span>[<a href="#RFC2617" class="xref">RFC2617</a>]</span> but is compatible
with the general authentication framework in HTTP 1.1 Authentication
<span>[<a href="#RFC7235" class="xref">RFC7235</a>]</span>, although it does not follow the preferred
practice outlined therein in order to reflect existing deployments.
The syntax for Bearer credentials is as follows:<a href="#section-7.2.1.1-4" class="pilcrow">¶</a></p>
<div class="artwork art-text alignLeft" id="section-7.2.1.1-5">
<pre>
b64token    = 1*( ALPHA / DIGIT /
                 "-" / "." / "_" / "~" / "+" / "/" ) *"="
credentials = "Bearer" 1*SP b64token
</pre><a href="#section-7.2.1.1-5" class="pilcrow">¶</a>
</div>
<p id="section-7.2.1.1-6">Clients SHOULD make authenticated requests with a bearer token using
the <code>Authorization</code> request header field with the <code>Bearer</code> HTTP
authorization scheme.  Resource servers MUST support this method.<a href="#section-7.2.1.1-6" class="pilcrow">¶</a></p>
</section>
</div>
<div id="form-encoded-body-parameter">
<section id="section-7.2.1.2">
            <h5 id="name-form-encoded-body-parameter">
<a href="#section-7.2.1.2" class="section-number selfRef">7.2.1.2. </a><a href="#name-form-encoded-body-parameter" class="section-name selfRef">Form-Encoded Body Parameter</a>
            </h5>
<p id="section-7.2.1.2-1">When sending the access token in the HTTP request entity-body, the
client adds the access token to the request-body using the
<code>access_token</code> parameter.  The client MUST NOT use this method unless
all of the following conditions are met:<a href="#section-7.2.1.2-1" class="pilcrow">¶</a></p>
<ul>
<li id="section-7.2.1.2-2.1">The HTTP request entity-header includes the <code>Content-Type</code> header
field set to <code>application/x-www-form-urlencoded</code>.<a href="#section-7.2.1.2-2.1" class="pilcrow">¶</a>
</li>
<li id="section-7.2.1.2-2.2">The entity-body follows the encoding requirements of the
<code>application/x-www-form-urlencoded</code> content-type as defined by
HTML 4.01 <span>[<a href="#W3C.REC-html401-19991224" class="xref">W3C.REC-html401-19991224</a>]</span>.<a href="#section-7.2.1.2-2.2" class="pilcrow">¶</a>
</li>
<li id="section-7.2.1.2-2.3">The HTTP request entity-body is single-part.<a href="#section-7.2.1.2-2.3" class="pilcrow">¶</a>
</li>
<li id="section-7.2.1.2-2.4">The content to be encoded in the entity-body MUST consist entirely
of ASCII <span>[<a href="#USASCII" class="xref">USASCII</a>]</span> characters.<a href="#section-7.2.1.2-2.4" class="pilcrow">¶</a>
</li>
<li id="section-7.2.1.2-2.5">The HTTP request method is one for which the request-body has
defined semantics.  In particular, this means that the <code>GET</code>
method MUST NOT be used.<a href="#section-7.2.1.2-2.5" class="pilcrow">¶</a>
</li>
</ul>
<p id="section-7.2.1.2-3">The entity-body MAY include other request-specific parameters, in
which case the <code>access_token</code> parameter MUST be properly separated
from the request-specific parameters using <code>&amp;</code> character(s) (ASCII
code 38).<a href="#section-7.2.1.2-3" class="pilcrow">¶</a></p>
<p id="section-7.2.1.2-4">For example, the client makes the following HTTP request using
transport-layer security:<a href="#section-7.2.1.2-4" class="pilcrow">¶</a></p>
<div class="artwork art-text alignLeft" id="section-7.2.1.2-5">
<pre>
POST /resource HTTP/1.1
Host: server.example.com
Content-Type: application/x-www-form-urlencoded

access_token=mF_9.B5f-4.1JqM
</pre><a href="#section-7.2.1.2-5" class="pilcrow">¶</a>
</div>
<p id="section-7.2.1.2-6">The <code>application/x-www-form-urlencoded</code> method SHOULD NOT be used
except in application contexts where participating clients do not
have access to the <code>Authorization</code> request header field.  Resource
servers MAY support this method.<a href="#section-7.2.1.2-6" class="pilcrow">¶</a></p>
</section>
</div>
</section>
</div>
<div id="the-www-authenticate-response-header-field">
<section id="section-7.2.2">
          <h4 id="name-the-www-authenticate-respon">
<a href="#section-7.2.2" class="section-number selfRef">7.2.2. </a><a href="#name-the-www-authenticate-respon" class="section-name selfRef">The WWW-Authenticate Response Header Field</a>
          </h4>
<p id="section-7.2.2-1">If the protected resource request does not include authentication
credentials or does not contain an access token that enables access
to the protected resource, the resource server MUST include the HTTP
<code>WWW-Authenticate</code> response header field; it MAY include it in
response to other conditions as well.  The <code>WWW-Authenticate</code> header
field uses the framework defined by HTTP/1.1 <span>[<a href="#RFC2617" class="xref">RFC2617</a>]</span>.<a href="#section-7.2.2-1" class="pilcrow">¶</a></p>
<p id="section-7.2.2-2">All challenges defined by this specification MUST use the auth-scheme
value <code>Bearer</code>.  This scheme MUST be followed by one or more
auth-param values.  The auth-param attributes used or defined by this
specification are as follows.  Other auth-param attributes MAY be
used as well.<a href="#section-7.2.2-2" class="pilcrow">¶</a></p>
<p id="section-7.2.2-3">A <code>realm</code> attribute MAY be included to indicate the scope of
protection in the manner described in HTTP/1.1 <span>[<a href="#RFC2617" class="xref">RFC2617</a>]</span>.  The
<code>realm</code> attribute MUST NOT appear more than once.<a href="#section-7.2.2-3" class="pilcrow">¶</a></p>
<p id="section-7.2.2-4">The <code>scope</code> attribute is defined in <a href="#access-token-scope" class="xref">Section 3.3</a>.  The
<code>scope</code> attribute is a space-delimited list of case-sensitive scope
values indicating the required scope of the access token for
accessing the requested resource. <code>scope</code> values are implementation
defined; there is no centralized registry for them; allowed values
are defined by the authorization server.  The order of <code>scope</code> values
is not significant.  In some cases, the <code>scope</code> value will be used
when requesting a new access token with sufficient scope of access to
utilize the protected resource.  Use of the <code>scope</code> attribute is
OPTIONAL.  The <code>scope</code> attribute MUST NOT appear more than once.  The
<code>scope</code> value is intended for programmatic use and is not meant to be
displayed to end-users.<a href="#section-7.2.2-4" class="pilcrow">¶</a></p>
<p id="section-7.2.2-5">Two example scope values follow; these are taken from the OpenID
Connect <span>[<a href="#OpenID.Messages" class="xref">OpenID.Messages</a>]</span> and the Open Authentication Technology
Committee (OATC) Online Multimedia Authorization Protocol <span>[<a href="#OMAP" class="xref">OMAP</a>]</span>
OAuth 2.0 use cases, respectively:<a href="#section-7.2.2-5" class="pilcrow">¶</a></p>
<div class="artwork art-text alignLeft" id="section-7.2.2-6">
<pre>
scope="openid profile email"
scope="urn:example:channel=HBO&amp;urn:example:rating=G,PG-13"
</pre><a href="#section-7.2.2-6" class="pilcrow">¶</a>
</div>
<p id="section-7.2.2-7">If the protected resource request included an access token and failed
authentication, the resource server SHOULD include the <code>error</code>
attribute to provide the client with the reason why the access
request was declined.  The parameter value is described in
<a href="#bearer-token-error-codes" class="xref">Section 7.2.3</a>.  In addition, the resource server MAY include the
<code>error_description</code> attribute to provide developers a human-readable
explanation that is not meant to be displayed to end-users.  It also
MAY include the <code>error_uri</code> attribute with an absolute URI
identifying a human-readable web page explaining the error.  The
<code>error</code>, <code>error_description</code>, and <code>error_uri</code> attributes MUST NOT
appear more than once.<a href="#section-7.2.2-7" class="pilcrow">¶</a></p>
<p id="section-7.2.2-8">Values for the <code>scope</code> attribute (specified in Appendix A.4)
MUST NOT include characters outside the set %x21 / %x23-5B
/ %x5D-7E for representing scope values and %x20 for delimiters
between scope values.  Values for the <code>error</code> and <code>error_description</code>
attributes (specified in Appendixes A.7 and A.8) MUST
NOT include characters outside the set %x20-21 / %x23-5B / %x5D-7E.
Values for the <code>error_uri</code> attribute (specified in Appendix A.9 of)
MUST conform to the URI-reference syntax and thus MUST NOT
include characters outside the set %x21 / %x23-5B / %x5D-7E.<a href="#section-7.2.2-8" class="pilcrow">¶</a></p>
<p id="section-7.2.2-9">For example, in response to a protected resource request without
authentication:<a href="#section-7.2.2-9" class="pilcrow">¶</a></p>
<div class="artwork art-text alignLeft" id="section-7.2.2-10">
<pre>
HTTP/1.1 401 Unauthorized
WWW-Authenticate: Bearer realm="example"
</pre><a href="#section-7.2.2-10" class="pilcrow">¶</a>
</div>
<p id="section-7.2.2-11">And in response to a protected resource request with an
authentication attempt using an expired access token:<a href="#section-7.2.2-11" class="pilcrow">¶</a></p>
<div class="artwork art-text alignLeft" id="section-7.2.2-12">
<pre>
HTTP/1.1 401 Unauthorized
WWW-Authenticate: Bearer realm="example",
                  error="invalid_token",
                  error_description="The access token expired"
</pre><a href="#section-7.2.2-12" class="pilcrow">¶</a>
</div>
</section>
</div>
<div id="bearer-token-error-codes">
<section id="section-7.2.3">
          <h4 id="name-error-codes">
<a href="#section-7.2.3" class="section-number selfRef">7.2.3. </a><a href="#name-error-codes" class="section-name selfRef">Error Codes</a>
          </h4>
<p id="section-7.2.3-1">When a request fails, the resource server responds using the
appropriate HTTP status code (typically, 400, 401, 403, or 405) and
includes one of the following error codes in the response:<a href="#section-7.2.3-1" class="pilcrow">¶</a></p>
<dl class="dlParallel" id="section-7.2.3-2">
            <dt id="section-7.2.3-2.1">"invalid_request":</dt>
<dd id="section-7.2.3-2.2">
  The request is missing a required parameter, includes an
unsupported parameter or parameter value, repeats the same
parameter, uses more than one method for including an access
token, or is otherwise malformed.  The resource server SHOULD
respond with the HTTP 400 (Bad Request) status code.<a href="#section-7.2.3-2.2" class="pilcrow">¶</a>
</dd>
<dt id="section-7.2.3-2.3">"invalid_token":</dt>
<dd id="section-7.2.3-2.4">
  The access token provided is expired, revoked, malformed, or
invalid for other reasons.  The resource SHOULD respond with
the HTTP 401 (Unauthorized) status code.  The client MAY
request a new access token and retry the protected resource
request.<a href="#section-7.2.3-2.4" class="pilcrow">¶</a>
</dd>
<dt id="section-7.2.3-2.5">"insufficient_scope":</dt>
<dd id="section-7.2.3-2.6">
  The request requires higher privileges than provided by the
access token.  The resource server SHOULD respond with the HTTP
403 (Forbidden) status code and MAY include the <code>scope</code>
attribute with the scope necessary to access the protected
resource.<a href="#section-7.2.3-2.6" class="pilcrow">¶</a>
</dd>
</dl>
<p id="section-7.2.3-3">If the request lacks any authentication information (e.g., the client
was unaware that authentication is necessary or attempted using an
unsupported authentication method), the resource server SHOULD NOT
include an error code or other error information.<a href="#section-7.2.3-3" class="pilcrow">¶</a></p>
<p id="section-7.2.3-4">For example:<a href="#section-7.2.3-4" class="pilcrow">¶</a></p>
<div class="artwork art-text alignLeft" id="section-7.2.3-5">
<pre>
HTTP/1.1 401 Unauthorized
WWW-Authenticate: Bearer realm="example"
</pre><a href="#section-7.2.3-5" class="pilcrow">¶</a>
</div>
</section>
</div>
</section>
</div>
<div id="error-response">
<section id="section-7.3">
        <h3 id="name-error-response-3">
<a href="#section-7.3" class="section-number selfRef">7.3. </a><a href="#name-error-response-3" class="section-name selfRef">Error Response</a>
        </h3>
<p id="section-7.3-1">If a resource access request fails, the resource server SHOULD inform
the client of the error. The method by which the resource server
does this is determined by the particular token type, such as the 
description of Bearer tokens in <a href="#bearer-token-error-codes" class="xref">Section 7.2.3</a>.<a href="#section-7.3-1" class="pilcrow">¶</a></p>
<div id="extension-token-types">
<section id="section-7.3.1">
          <h4 id="name-extension-token-types">
<a href="#section-7.3.1" class="section-number selfRef">7.3.1. </a><a href="#name-extension-token-types" class="section-name selfRef">Extension Token Types</a>
          </h4>
<p id="section-7.3.1-1"><span>[<a href="#RFC6750" class="xref">RFC6750</a>]</span> establishes a common registry in <a href="https://tools.ietf.org/html/rfc6749#section-11.4">Section 11.4</a> 
for error values to be shared among OAuth token authentication schemes.<a href="#section-7.3.1-1" class="pilcrow">¶</a></p>
<p id="section-7.3.1-2">New authentication schemes designed primarily for OAuth token
authentication SHOULD define a mechanism for providing an error
status code to the client, in which the error values allowed are
registered in the error registry established by this specification.<a href="#section-7.3.1-2" class="pilcrow">¶</a></p>
<p id="section-7.3.1-3">Such schemes MAY limit the set of valid error codes to a subset of
the registered values.  If the error code is returned using a named
parameter, the parameter name SHOULD be <code>error</code>.<a href="#section-7.3.1-3" class="pilcrow">¶</a></p>
<p id="section-7.3.1-4">Other schemes capable of being used for OAuth token authentication,
but not primarily designed for that purpose, MAY bind their error
values to the registry in the same manner.<a href="#section-7.3.1-4" class="pilcrow">¶</a></p>
<p id="section-7.3.1-5">New authentication schemes MAY choose to also specify the use of the
<code>error_description</code> and <code>error_uri</code> parameters to return error
information in a manner parallel to their usage in this
specification.<a href="#section-7.3.1-5" class="pilcrow">¶</a></p>
</section>
</div>
</section>
</div>
<div id="access-token-security-considerations">
<section id="section-7.4">
        <h3 id="name-access-token-security-consi">
<a href="#section-7.4" class="section-number selfRef">7.4. </a><a href="#name-access-token-security-consi" class="section-name selfRef">Access Token Security Considerations</a>
        </h3>
<div id="security-threats">
<section id="section-7.4.1">
          <h4 id="name-security-threats">
<a href="#section-7.4.1" class="section-number selfRef">7.4.1. </a><a href="#name-security-threats" class="section-name selfRef">Security Threats</a>
          </h4>
<p id="section-7.4.1-1">The following list presents several common threats against protocols
utilizing some form of tokens.  This list of threats is based on NIST
Special Publication 800-63 <span>[<a href="#NIST800-63" class="xref">NIST800-63</a>]</span>.<a href="#section-7.4.1-1" class="pilcrow">¶</a></p>
<div id="token-manufacturemodification">
<section id="section-7.4.1.1">
            <h5 id="name-token-manufacture-modificat">
<a href="#section-7.4.1.1" class="section-number selfRef">7.4.1.1. </a><a href="#name-token-manufacture-modificat" class="section-name selfRef">Token manufacture/modification</a>
            </h5>
<p id="section-7.4.1.1-1">An attacker may generate a bogus
token or modify the token contents (such as the authentication or
attribute statements) of an existing token, causing the resource
server to grant inappropriate access to the client.  For example,
an attacker may modify the token to extend the validity period; a
malicious client may modify the assertion to gain access to
information that they should not be able to view.<a href="#section-7.4.1.1-1" class="pilcrow">¶</a></p>
</section>
</div>
<div id="token-disclosure">
<section id="section-7.4.1.2">
            <h5 id="name-token-disclosure">
<a href="#section-7.4.1.2" class="section-number selfRef">7.4.1.2. </a><a href="#name-token-disclosure" class="section-name selfRef">Token disclosure</a>
            </h5>
<p id="section-7.4.1.2-1">Tokens may contain authentication and attribute
statements that include sensitive information.<a href="#section-7.4.1.2-1" class="pilcrow">¶</a></p>
</section>
</div>
<div id="token-redirect">
<section id="section-7.4.1.3">
            <h5 id="name-token-redirect">
<a href="#section-7.4.1.3" class="section-number selfRef">7.4.1.3. </a><a href="#name-token-redirect" class="section-name selfRef">Token redirect</a>
            </h5>
<p id="section-7.4.1.3-1">An attacker uses a token generated for consumption
by one resource server to gain access to a different resource
server that mistakenly believes the token to be for it.<a href="#section-7.4.1.3-1" class="pilcrow">¶</a></p>
</section>
</div>
<div id="token-replay">
<section id="section-7.4.1.4">
            <h5 id="name-token-replay">
<a href="#section-7.4.1.4" class="section-number selfRef">7.4.1.4. </a><a href="#name-token-replay" class="section-name selfRef">Token replay</a>
            </h5>
<p id="section-7.4.1.4-1">An attacker attempts to use a token that has already
been used with that resource server in the past.<a href="#section-7.4.1.4-1" class="pilcrow">¶</a></p>
</section>
</div>
</section>
</div>
<div id="threat-mitigation">
<section id="section-7.4.2">
          <h4 id="name-threat-mitigation">
<a href="#section-7.4.2" class="section-number selfRef">7.4.2. </a><a href="#name-threat-mitigation" class="section-name selfRef">Threat Mitigation</a>
          </h4>
<p id="section-7.4.2-1">A large range of threats can be mitigated by protecting the contents
of the token by using a digital signature.
Alternatively, a bearer token can contain a reference to
authorization information, rather than encoding the information
directly.  Such references MUST be infeasible for an attacker to
guess; using a reference may require an extra interaction between a
server and the token issuer to resolve the reference to the
authorization information.  The mechanics of such an interaction are
not defined by this specification.<a href="#section-7.4.2-1" class="pilcrow">¶</a></p>
<p id="section-7.4.2-2">This document does not specify the encoding or the contents of the
token; hence, detailed recommendations about the means of
guaranteeing token integrity protection are outside the scope of this
document.  The token integrity protection MUST be sufficient to
prevent the token from being modified.<a href="#section-7.4.2-2" class="pilcrow">¶</a></p>
<p id="section-7.4.2-3">To deal with token redirect, it is important for the authorization
server to include the identity of the intended recipients (the
audience), typically a single resource server (or a list of resource
servers), in the token.  Restricting the use of the token to a
specific scope is also RECOMMENDED.<a href="#section-7.4.2-3" class="pilcrow">¶</a></p>
<p id="section-7.4.2-4">The authorization server MUST implement TLS.  Which version(s) ought
to be implemented will vary over time and will depend on the
widespread deployment and known security vulnerabilities at the time
of implementation.<a href="#section-7.4.2-4" class="pilcrow">¶</a></p>
<p id="section-7.4.2-5">To protect against token disclosure, confidentiality protection MUST
be applied using TLS with a ciphersuite that provides
confidentiality and integrity protection.  This requires that the
communication interaction between the client and the authorization
server, as well as the interaction between the client and the
resource server, utilize confidentiality and integrity protection.
Since TLS is mandatory to implement and to use with this
specification, it is the preferred approach for preventing token
disclosure via the communication channel.  For those cases where the
client is prevented from observing the contents of the token, token
encryption MUST be applied in addition to the usage of TLS
protection.  As a further defense against token disclosure, the
client MUST validate the TLS certificate chain when making requests
to protected resources, including checking the Certificate Revocation
List (CRL) <span>[<a href="#RFC5280" class="xref">RFC5280</a>]</span>.<a href="#section-7.4.2-5" class="pilcrow">¶</a></p>
<p id="section-7.4.2-6">Cookies are typically transmitted in the clear.  Thus, any
information contained in them is at risk of disclosure.  Therefore,
Bearer tokens MUST NOT be stored in cookies that can be sent in the
clear, as any information in them is at risk of disclosure.
See "HTTP State Management Mechanism" <span>[<a href="#RFC6265" class="xref">RFC6265</a>]</span> for security
considerations about cookies.<a href="#section-7.4.2-6" class="pilcrow">¶</a></p>
<p id="section-7.4.2-7">In some deployments, including those utilizing load balancers, the
TLS connection to the resource server terminates prior to the actual
server that provides the resource.  This could leave the token
unprotected between the front-end server where the TLS connection
terminates and the back-end server that provides the resource.  In
such deployments, sufficient measures MUST be employed to ensure
confidentiality of the token between the front-end and back-end
servers; encryption of the token is one such possible measure.<a href="#section-7.4.2-7" class="pilcrow">¶</a></p>
<p id="section-7.4.2-8">To deal with token capture and replay, the following recommendations
are made: First, the lifetime of the token MUST be limited; one means
of achieving this is by putting a validity time field inside the
protected part of the token.  Note that using short-lived (one hour
or less) tokens reduces the impact of them being leaked.  Second,
confidentiality protection of the exchanges between the client and
the authorization server and between the client and the resource
server MUST be applied.  As a consequence, no eavesdropper along the
communication path is able to observe the token exchange.
Consequently, such an on-path adversary cannot replay the token.
Furthermore, when presenting the token to a resource server, the
client MUST verify the identity of that resource server, as per
Section 3.1 of "HTTP Over TLS" <span>[<a href="#RFC2818" class="xref">RFC2818</a>]</span>.  Note that the client MUST
validate the TLS certificate chain when making these requests to
protected resources.  Presenting the token to an unauthenticated and
unauthorized resource server or failing to validate the certificate
chain will allow adversaries to steal the token and gain unauthorized
access to protected resources.<a href="#section-7.4.2-8" class="pilcrow">¶</a></p>
</section>
</div>
<div id="summary-of-recommendations">
<section id="section-7.4.3">
          <h4 id="name-summary-of-recommendations">
<a href="#section-7.4.3" class="section-number selfRef">7.4.3. </a><a href="#name-summary-of-recommendations" class="section-name selfRef">Summary of Recommendations</a>
          </h4>
<div id="safeguard-bearer-tokens">
<section id="section-7.4.3.1">
            <h5 id="name-safeguard-bearer-tokens">
<a href="#section-7.4.3.1" class="section-number selfRef">7.4.3.1. </a><a href="#name-safeguard-bearer-tokens" class="section-name selfRef">Safeguard bearer tokens</a>
            </h5>
<p id="section-7.4.3.1-1">Client implementations MUST ensure that
bearer tokens are not leaked to unintended parties, as they will
be able to use them to gain access to protected resources.  This
is the primary security consideration when using bearer tokens and
underlies all the more specific recommendations that follow.<a href="#section-7.4.3.1-1" class="pilcrow">¶</a></p>
</section>
</div>
<div id="validate-tls-certificate-chains">
<section id="section-7.4.3.2">
            <h5 id="name-validate-tls-certificate-ch">
<a href="#section-7.4.3.2" class="section-number selfRef">7.4.3.2. </a><a href="#name-validate-tls-certificate-ch" class="section-name selfRef">Validate TLS certificate chains</a>
            </h5>
<p id="section-7.4.3.2-1">The client MUST validate the TLS
certificate chain when making requests to protected resources.
Failing to do so may enable DNS hijacking attacks to steal the
token and gain unintended access.<a href="#section-7.4.3.2-1" class="pilcrow">¶</a></p>
</section>
</div>
<div id="always-use-tls-https">
<section id="section-7.4.3.3">
            <h5 id="name-always-use-tls-https">
<a href="#section-7.4.3.3" class="section-number selfRef">7.4.3.3. </a><a href="#name-always-use-tls-https" class="section-name selfRef">Always use TLS (https)</a>
            </h5>
<p id="section-7.4.3.3-1">Clients MUST always use TLS
(https) or equivalent transport security when making requests with
bearer tokens.  Failing to do so exposes the token to numerous
attacks that could give attackers unintended access.<a href="#section-7.4.3.3-1" class="pilcrow">¶</a></p>
</section>
</div>
<div id="dont-store-bearer-tokens-in-http-cookies">
<section id="section-7.4.3.4">
            <h5 id="name-dont-store-bearer-tokens-in">
<a href="#section-7.4.3.4" class="section-number selfRef">7.4.3.4. </a><a href="#name-dont-store-bearer-tokens-in" class="section-name selfRef">Don't store bearer tokens in HTTP cookies</a>
            </h5>
<p id="section-7.4.3.4-1">Implementations MUST NOT store
bearer tokens within cookies that can be sent in the clear (which
is the default transmission mode for cookies).  Implementations
that do store bearer tokens in cookies MUST take precautions
against cross-site request forgery.<a href="#section-7.4.3.4-1" class="pilcrow">¶</a></p>
</section>
</div>
<div id="issue-short-lived-bearer-tokens">
<section id="section-7.4.3.5">
            <h5 id="name-issue-short-lived-bearer-to">
<a href="#section-7.4.3.5" class="section-number selfRef">7.4.3.5. </a><a href="#name-issue-short-lived-bearer-to" class="section-name selfRef">Issue short-lived bearer tokens</a>
            </h5>
<p id="section-7.4.3.5-1">Token servers SHOULD issue
short-lived (one hour or less) bearer tokens, particularly when
issuing tokens to clients that run within a web browser or other
environments where information leakage may occur.  Using
short-lived bearer tokens can reduce the impact of them being
leaked.<a href="#section-7.4.3.5-1" class="pilcrow">¶</a></p>
</section>
</div>
<div id="issue-scoped-bearer-tokens">
<section id="section-7.4.3.6">
            <h5 id="name-issue-scoped-bearer-tokens">
<a href="#section-7.4.3.6" class="section-number selfRef">7.4.3.6. </a><a href="#name-issue-scoped-bearer-tokens" class="section-name selfRef">Issue scoped bearer tokens</a>
            </h5>
<p id="section-7.4.3.6-1">Token servers SHOULD issue bearer tokens
that contain an audience restriction, scoping their use to the
intended relying party or set of relying parties.<a href="#section-7.4.3.6-1" class="pilcrow">¶</a></p>
</section>
</div>
<div id="dont-pass-bearer-tokens-in-page-urls">
<section id="section-7.4.3.7">
            <h5 id="name-dont-pass-bearer-tokens-in-">
<a href="#section-7.4.3.7" class="section-number selfRef">7.4.3.7. </a><a href="#name-dont-pass-bearer-tokens-in-" class="section-name selfRef">Don't pass bearer tokens in page URLs</a>
            </h5>
<p id="section-7.4.3.7-1">Bearer tokens MUST NOT be
passed in page URLs (for example, as query string parameters).
Instead, bearer tokens SHOULD be passed in HTTP message headers or
message bodies for which confidentiality measures are taken.
Browsers, web servers, and other software may not adequately
secure URLs in the browser history, web server logs, and other
data structures.  If bearer tokens are passed in page URLs,
attackers might be able to steal them from the history data, logs,
or other unsecured locations.<a href="#section-7.4.3.7-1" class="pilcrow">¶</a></p>
</section>
</div>
</section>
</div>
<div id="token-replay-prevention">
<section id="section-7.4.4">
          <h4 id="name-token-replay-prevention">
<a href="#section-7.4.4" class="section-number selfRef">7.4.4. </a><a href="#name-token-replay-prevention" class="section-name selfRef">Token Replay Prevention</a>
          </h4>
<p id="section-7.4.4-1">A sender-constrained access token scopes the applicability of an
access token to a certain sender.  This sender is obliged to
demonstrate knowledge of a certain secret as prerequisite for the
acceptance of that token at the recipient (e.g., a resource server).<a href="#section-7.4.4-1" class="pilcrow">¶</a></p>
<p id="section-7.4.4-2">Authorization and resource servers SHOULD use mechanisms for sender-
constrained access tokens to prevent token replay as described in
Section 4.8.1.1.2 of <span>[<a href="#I-D.ietf-oauth-security-topics" class="xref">I-D.ietf-oauth-security-topics</a>]</span>.
The use of Mutual TLS for OAuth 2.0 <span>[<a href="#RFC8705" class="xref">RFC8705</a>]</span> is RECOMMENDED.<a href="#section-7.4.4-2" class="pilcrow">¶</a></p>
<p id="section-7.4.4-3">It is RECOMMENDED to use end-to-end TLS.  If TLS traffic needs to be
terminated at an intermediary, refer to Section 4.11 of <span>[<a href="#I-D.ietf-oauth-security-topics" class="xref">I-D.ietf-oauth-security-topics</a>]</span>
for further security advice.<a href="#section-7.4.4-3" class="pilcrow">¶</a></p>
</section>
</div>
<div id="access-token-privilege-restriction">
<section id="section-7.4.5">
          <h4 id="name-access-token-privilege-rest">
<a href="#section-7.4.5" class="section-number selfRef">7.4.5. </a><a href="#name-access-token-privilege-rest" class="section-name selfRef">Access Token Privilege Restriction</a>
          </h4>
<p id="section-7.4.5-1">The privileges associated with an access token SHOULD be restricted
to the minimum required for the particular application or use case.
This prevents clients from exceeding the privileges authorized by the
resource owner.  It also prevents users from exceeding their
privileges authorized by the respective security policy.  Privilege
restrictions also help to reduce the impact of access token leakage.<a href="#section-7.4.5-1" class="pilcrow">¶</a></p>
<p id="section-7.4.5-2">In particular, access tokens SHOULD be restricted to certain resource
servers (audience restriction), preferably to a single resource
server.  To put this into effect, the authorization server associates
the access token with certain resource servers and every resource
server is obliged to verify, for every request, whether the access
token sent with that request was meant to be used for that particular
resource server.  If not, the resource server MUST refuse to serve
the respective request.  Clients and authorization servers MAY
utilize the parameters <code>scope</code> or <code>resource</code> as specified in
this document and <span>[<a href="#RFC8707" class="xref">RFC8707</a>]</span>, respectively, to
determine the resource server they want to access.<a href="#section-7.4.5-2" class="pilcrow">¶</a></p>
<p id="section-7.4.5-3">Additionally, access tokens SHOULD be restricted to certain resources
and actions on resource servers or resources.  To put this into
effect, the authorization server associates the access token with the
respective resource and actions and every resource server is obliged
to verify, for every request, whether the access token sent with that
request was meant to be used for that particular action on the
particular resource.  If not, the resource server must refuse to
serve the respective request.  Clients and authorization servers MAY
utilize the parameter <code>scope</code> and
<code>authorization_details</code> as specified in <span>[<a href="#I-D.ietf-oauth-rar" class="xref">I-D.ietf-oauth-rar</a>]</span> to
determine those resources and/or actions.<a href="#section-7.4.5-3" class="pilcrow">¶</a></p>
</section>
</div>
</section>
</div>
</section>
</div>
<div id="extensibility">
<section id="section-8">
      <h2 id="name-extensibility">
<a href="#section-8" class="section-number selfRef">8. </a><a href="#name-extensibility" class="section-name selfRef">Extensibility</a>
      </h2>
<div id="defining-access-token-types">
<section id="section-8.1">
        <h3 id="name-defining-access-token-types">
<a href="#section-8.1" class="section-number selfRef">8.1. </a><a href="#name-defining-access-token-types" class="section-name selfRef">Defining Access Token Types</a>
        </h3>
<p id="section-8.1-1">Access token types can be defined in one of two ways: registered in
the Access Token Types registry (following the procedures in
Section 11.1 of <span>[<a href="#RFC6749" class="xref">RFC6749</a>]</span>), or by using a unique absolute URI as its name.<a href="#section-8.1-1" class="pilcrow">¶</a></p>
<p id="section-8.1-2">Types utilizing a URI name SHOULD be limited to vendor-specific
implementations that are not commonly applicable, and are specific to
the implementation details of the resource server where they are
used.<a href="#section-8.1-2" class="pilcrow">¶</a></p>
<p id="section-8.1-3">All other types MUST be registered.  Type names MUST conform to the
type-name ABNF.  If the type definition includes a new HTTP
authentication scheme, the type name SHOULD be identical to the HTTP
authentication scheme name (as defined by <span>[<a href="#RFC2617" class="xref">RFC2617</a>]</span>).  The token type
<code>example</code> is reserved for use in examples.<a href="#section-8.1-3" class="pilcrow">¶</a></p>
<div class="artwork art-text alignLeft" id="section-8.1-4">
<pre>
type-name  = 1*name-char
name-char  = "-" / "." / "_" / DIGIT / ALPHA
</pre><a href="#section-8.1-4" class="pilcrow">¶</a>
</div>
</section>
</div>
<div id="defining-new-endpoint-parameters">
<section id="section-8.2">
        <h3 id="name-defining-new-endpoint-param">
<a href="#section-8.2" class="section-number selfRef">8.2. </a><a href="#name-defining-new-endpoint-param" class="section-name selfRef">Defining New Endpoint Parameters</a>
        </h3>
<p id="section-8.2-1">New request or response parameters for use with the authorization
endpoint or the token endpoint are defined and registered in the
OAuth Parameters registry following the procedure in Section 11.2 of <span>[<a href="#RFC6749" class="xref">RFC6749</a>]</span>.<a href="#section-8.2-1" class="pilcrow">¶</a></p>
<p id="section-8.2-2">Parameter names MUST conform to the param-name ABNF, and parameter
values syntax MUST be well-defined (e.g., using ABNF, or a reference
to the syntax of an existing parameter).<a href="#section-8.2-2" class="pilcrow">¶</a></p>
<div class="artwork art-text alignLeft" id="section-8.2-3">
<pre>
param-name  = 1*name-char
name-char   = "-" / "." / "_" / DIGIT / ALPHA
</pre><a href="#section-8.2-3" class="pilcrow">¶</a>
</div>
<p id="section-8.2-4">Unregistered vendor-specific parameter extensions that are not
commonly applicable and that are specific to the implementation
details of the authorization server where they are used SHOULD
utilize a vendor-specific prefix that is not likely to conflict with
other registered values (e.g., begin with 'companyname_').<a href="#section-8.2-4" class="pilcrow">¶</a></p>
</section>
</div>
<div id="defining-new-authorization-grant-types">
<section id="section-8.3">
        <h3 id="name-defining-new-authorization-">
<a href="#section-8.3" class="section-number selfRef">8.3. </a><a href="#name-defining-new-authorization-" class="section-name selfRef">Defining New Authorization Grant Types</a>
        </h3>
<p id="section-8.3-1">New authorization grant types can be defined by assigning them a
unique absolute URI for use with the <code>grant_type</code> parameter.  If the
extension grant type requires additional token endpoint parameters,
they MUST be registered in the OAuth Parameters registry as described
by Section 11.2 of <span>[<a href="#RFC6749" class="xref">RFC6749</a>]</span>.<a href="#section-8.3-1" class="pilcrow">¶</a></p>
</section>
</div>
<div id="new-response-types">
<section id="section-8.4">
        <h3 id="name-defining-new-authorization-e">
<a href="#section-8.4" class="section-number selfRef">8.4. </a><a href="#name-defining-new-authorization-e" class="section-name selfRef">Defining New Authorization Endpoint Response Types</a>
        </h3>
<p id="section-8.4-1">New response types for use with the authorization endpoint are
defined and registered in the Authorization Endpoint Response Types
registry following the procedure in Section 11.3 of <span>[<a href="#RFC6749" class="xref">RFC6749</a>]</span>.  Response type
names MUST conform to the response-type ABNF.<a href="#section-8.4-1" class="pilcrow">¶</a></p>
<div class="artwork art-text alignLeft" id="section-8.4-2">
<pre>
response-type  = response-name *( SP response-name )
response-name  = 1*response-char
response-char  = "_" / DIGIT / ALPHA
</pre><a href="#section-8.4-2" class="pilcrow">¶</a>
</div>
<p id="section-8.4-3">If a response type contains one or more space characters (%x20), it
is compared as a space-delimited list of values in which the order of
values does not matter.  Only one order of values can be registered,
which covers all other arrangements of the same set of values.<a href="#section-8.4-3" class="pilcrow">¶</a></p>
<p id="section-8.4-4">For example, an extension can define and register the <code>code other_token</code>
response type.  Once registered, the same combination cannot be registered
as <code>other_token code</code>, but both values can be used to
denote the same response type.<a href="#section-8.4-4" class="pilcrow">¶</a></p>
</section>
</div>
<div id="defining-additional-error-codes">
<section id="section-8.5">
        <h3 id="name-defining-additional-error-c">
<a href="#section-8.5" class="section-number selfRef">8.5. </a><a href="#name-defining-additional-error-c" class="section-name selfRef">Defining Additional Error Codes</a>
        </h3>
<p id="section-8.5-1">In cases where protocol extensions (i.e., access token types,
extension parameters, or extension grant types) require additional
error codes to be used with the authorization code grant error
response (<a href="#authorization-code-error-response" class="xref">Section 4.1.2.1</a>), the token error response (<a href="#access-token-error-response" class="xref">Section 5.2</a>), or the
resource access error response (<a href="#error-response" class="xref">Section 7.3</a>), such error codes MAY be
defined.<a href="#section-8.5-1" class="pilcrow">¶</a></p>
<p id="section-8.5-2">Extension error codes MUST be registered (following the procedures in
Section 11.4 of <span>[<a href="#RFC6749" class="xref">RFC6749</a>]</span>) if the extension they are used in conjunction with is a
registered access token type, a registered endpoint parameter, or an
extension grant type.  Error codes used with unregistered extensions
MAY be registered.<a href="#section-8.5-2" class="pilcrow">¶</a></p>
<p id="section-8.5-3">Error codes MUST conform to the error ABNF and SHOULD be prefixed by
an identifying name when possible.  For example, an error identifying
an invalid value set to the extension parameter <code>example</code> SHOULD be
named <code>example_invalid</code>.<a href="#section-8.5-3" class="pilcrow">¶</a></p>
<div class="artwork art-text alignLeft" id="section-8.5-4">
<pre>
error      = 1*error-char
error-char = %x20-21 / %x23-5B / %x5D-7E
</pre><a href="#section-8.5-4" class="pilcrow">¶</a>
</div>
</section>
</div>
</section>
</div>
<div id="security-considerations">
<section id="section-9">
      <h2 id="name-security-considerations">
<a href="#section-9" class="section-number selfRef">9. </a><a href="#name-security-considerations" class="section-name selfRef">Security Considerations</a>
      </h2>
<p id="section-9-1">As a flexible and extensible framework, OAuth's security
considerations depend on many factors.  The following sections
provide implementers with security guidelines focused on the three
client profiles described in <a href="#client-types" class="xref">Section 2.1</a>: web application,
browser-based application, and native application.<a href="#section-9-1" class="pilcrow">¶</a></p>
<p id="section-9-2">A comprehensive OAuth security model and analysis, as well as
background for the protocol design, is provided by
<span>[<a href="#RFC6819" class="xref">RFC6819</a>]</span> and <span>[<a href="#I-D.ietf-oauth-security-topics" class="xref">I-D.ietf-oauth-security-topics</a>]</span>.<a href="#section-9-2" class="pilcrow">¶</a></p>
<div id="security-client-authentication">
<section id="section-9.1">
        <h3 id="name-client-authentication-3">
<a href="#section-9.1" class="section-number selfRef">9.1. </a><a href="#name-client-authentication-3" class="section-name selfRef">Client Authentication</a>
        </h3>
<p id="section-9.1-1">Authorization servers SHOULD use client authentication if possible.<a href="#section-9.1-1" class="pilcrow">¶</a></p>
<p id="section-9.1-2">It is RECOMMENDED to use asymmetric (public-key based) methods for
client authentication such as mTLS <span>[<a href="#RFC8705" class="xref">RFC8705</a>]</span> or
<code>private_key_jwt</code> <span>[<a href="#OpenID" class="xref">OpenID</a>]</span>. When asymmetric methods for client
authentication are used, authorization servers do not need to store
sensitive symmetric keys, making these methods more robust against a
number of attacks.<a href="#section-9.1-2" class="pilcrow">¶</a></p>
<p id="section-9.1-3">Authorization server MUST only rely on client authentication if the
process of issuance/registration and distribution of the underlying
credentials ensures their confidentiality.<a href="#section-9.1-3" class="pilcrow">¶</a></p>
<p id="section-9.1-4">When client authentication is not possible, the authorization server
SHOULD employ other means to validate the client's identity - for
example, by requiring the registration of the client redirection URI
or enlisting the resource owner to confirm identity.  A valid
redirection URI is not sufficient to verify the client's identity
when asking for resource owner authorization but can be used to
prevent delivering credentials to a counterfeit client after
obtaining resource owner authorization.<a href="#section-9.1-4" class="pilcrow">¶</a></p>
<p id="section-9.1-5">The authorization server must consider the security implications of
interacting with unauthenticated clients and take measures to limit
the potential exposure of other credentials (e.g., refresh tokens)
issued to such clients.<a href="#section-9.1-5" class="pilcrow">¶</a></p>
<p id="section-9.1-6">The privileges an authorization server associates with a certain
client identity MUST depend on the assessment of the overall process
for client identification and client credential lifecycle management.
For example, authentication of a dynamically registered client just
ensures the authorization server it is talking to the same client again.
In contrast, if there is a web application whose developer's identity
was verified, who signed a contract and is issued a client secret
that is only used in a secure backend service, the authorization
server might allow this client to access more sensible services
or to use the client credential grant type.<a href="#section-9.1-6" class="pilcrow">¶</a></p>
<div id="client-authentication-of-native-apps">
<section id="section-9.1.1">
          <h4 id="name-client-authentication-of-na">
<a href="#section-9.1.1" class="section-number selfRef">9.1.1. </a><a href="#name-client-authentication-of-na" class="section-name selfRef">Client Authentication of Native Apps</a>
          </h4>
<p id="section-9.1.1-1">Secrets that are statically included as part of an app distributed to
multiple users should not be treated as confidential secrets, as one
user may inspect their copy and learn the shared secret.  For this
reason, it is NOT
RECOMMENDED for authorization servers to require client
authentication of public native apps clients using a shared secret,
as this serves little value beyond client identification which is
already provided by the <code>client_id</code> request parameter.<a href="#section-9.1.1-1" class="pilcrow">¶</a></p>
<p id="section-9.1.1-2">Authorization servers that still require a statically included shared
secret for native app clients MUST treat the client as a public
client (as defined in <a href="#client-types" class="xref">Section 2.1</a>), and not
accept the secret as proof of the client's identity.  Without
additional measures, such clients are subject to client impersonation
(see <a href="#native-app-client-impersonation" class="xref">Section 9.3.1</a>).<a href="#section-9.1.1-2" class="pilcrow">¶</a></p>
</section>
</div>
</section>
</div>
<div id="native-app-registration">
<section id="section-9.2">
        <h3 id="name-registration-of-native-app-">
<a href="#section-9.2" class="section-number selfRef">9.2. </a><a href="#name-registration-of-native-app-" class="section-name selfRef">Registration of Native App Clients</a>
        </h3>
<p id="section-9.2-1">Except when using a mechanism like Dynamic Client Registration
<span>[<a href="#RFC7591" class="xref">RFC7591</a>]</span> to provision per-instance secrets, native apps are
classified as public clients, as defined in <a href="#client-types" class="xref">Section 2.1</a>;
they MUST be registered with the authorization server as
such.  Authorization servers MUST record the client type in the
client registration details in order to identify and process requests
accordingly.<a href="#section-9.2-1" class="pilcrow">¶</a></p>
<p id="section-9.2-2">Authorization servers MUST require clients to register their complete
redirect URI (including the path component) and reject authorization
requests that specify a redirect URI that doesn't exactly match the
one that was registered; the exception is loopback redirects, where
an exact match is required except for the port URI component.<a href="#section-9.2-2" class="pilcrow">¶</a></p>
<p id="section-9.2-3">For private-use URI scheme-based redirects, authorization servers
SHOULD enforce the requirement in <a href="#private-use-uri-scheme" class="xref">Section 10.3.1</a> that clients use
schemes that are reverse domain name based.  At a minimum, any
private-use URI scheme that doesn't contain a period character (<code>.</code>)
SHOULD be rejected.<a href="#section-9.2-3" class="pilcrow">¶</a></p>
<p id="section-9.2-4">In addition to the collision-resistant properties, requiring a URI
scheme based on a domain name that is under the control of the app
can help to prove ownership in the event of a dispute where two apps
claim the same private-use URI scheme (where one app is acting
maliciously).  For example, if two apps claimed <code>com.example.app</code>,
the owner of <code>example.com</code> could petition the app store operator to
remove the counterfeit app.  Such a petition is harder to prove if a
generic URI scheme was used.<a href="#section-9.2-4" class="pilcrow">¶</a></p>
<p id="section-9.2-5">Authorization servers MAY request the inclusion of other platform-
specific information, such as the app package or bundle name, or
other information that may be useful for verifying the calling app's
identity on operating systems that support such functions.<a href="#section-9.2-5" class="pilcrow">¶</a></p>
</section>
</div>
<div id="client-impersonation">
<section id="section-9.3">
        <h3 id="name-client-impersonation">
<a href="#section-9.3" class="section-number selfRef">9.3. </a><a href="#name-client-impersonation" class="section-name selfRef">Client Impersonation</a>
        </h3>
<p id="section-9.3-1">A malicious client can impersonate another client and obtain access
to protected resources if the impersonated client fails to, or is
unable to, keep its client credentials confidential.<a href="#section-9.3-1" class="pilcrow">¶</a></p>
<p id="section-9.3-2">The authorization server MUST authenticate the client whenever
possible.  If the authorization server cannot authenticate the client
due to the client's nature, the authorization server MUST require the
registration of any redirection URI used for receiving authorization
responses and SHOULD utilize other means to protect resource owners
from such potentially malicious clients.  For example, the
authorization server can engage the resource owner to assist in
identifying the client and its origin.<a href="#section-9.3-2" class="pilcrow">¶</a></p>
<p id="section-9.3-3">The authorization server SHOULD enforce explicit resource owner
authentication and provide the resource owner with information about
the client and the requested authorization scope and lifetime.  It is
up to the resource owner to review the information in the context of
the current client and to authorize or deny the request.<a href="#section-9.3-3" class="pilcrow">¶</a></p>
<p id="section-9.3-4">The authorization server SHOULD NOT process repeated authorization
requests automatically (without active resource owner interaction)
without authenticating the client or relying on other measures to
ensure that the repeated request comes from the original client and
not an impersonator.<a href="#section-9.3-4" class="pilcrow">¶</a></p>
<div id="native-app-client-impersonation">
<section id="section-9.3.1">
          <h4 id="name-impersonation-of-native-app">
<a href="#section-9.3.1" class="section-number selfRef">9.3.1. </a><a href="#name-impersonation-of-native-app" class="section-name selfRef">Impersonation of Native Apps</a>
          </h4>
<p id="section-9.3.1-1">As stated above, the authorization
server SHOULD NOT process authorization requests automatically
without user consent or interaction, except when the identity of the
client can be assured.  This includes the case where the user has
previously approved an authorization request for a given client id -
unless the identity of the client can be proven, the request SHOULD
be processed as if no previous request had been approved.<a href="#section-9.3.1-1" class="pilcrow">¶</a></p>
<p id="section-9.3.1-2">Measures such as claimed <code>https</code> scheme redirects MAY be accepted by
authorization servers as identity proof.  Some operating systems may
offer alternative platform-specific identity features that MAY be
accepted, as appropriate.<a href="#section-9.3.1-2" class="pilcrow">¶</a></p>
</section>
</div>
</section>
</div>
<div id="access-tokens">
<section id="section-9.4">
        <h3 id="name-access-tokens">
<a href="#section-9.4" class="section-number selfRef">9.4. </a><a href="#name-access-tokens" class="section-name selfRef">Access Tokens</a>
        </h3>
<p id="section-9.4-1">Access token credentials (as well as any confidential access token
attributes) MUST be kept confidential in transit and storage, and
only shared among the authorization server, the resource servers the
access token is valid for, and the client to whom the access token is
issued.  Access token credentials MUST only be transmitted using TLS
as described in <a href="#tls-version" class="xref">Section 1.6</a> with server authentication as defined by
<span>[<a href="#RFC2818" class="xref">RFC2818</a>]</span>.<a href="#section-9.4-1" class="pilcrow">¶</a></p>
<p id="section-9.4-2">The authorization server MUST ensure that access tokens cannot be
generated, modified, or guessed to produce valid access tokens by
unauthorized parties.<a href="#section-9.4-2" class="pilcrow">¶</a></p>
<div id="access-token-privilege-restriction-1">
<section id="section-9.4.1">
          <h4 id="name-access-token-privilege-restr">
<a href="#section-9.4.1" class="section-number selfRef">9.4.1. </a><a href="#name-access-token-privilege-restr" class="section-name selfRef">Access Token Privilege Restriction</a>
          </h4>
<p id="section-9.4.1-1">The client SHOULD request access tokens with the minimal scope
necessary.  The authorization server SHOULD take the client identity
into account when choosing how to honor the requested scope and MAY
issue an access token with less rights than requested.<a href="#section-9.4.1-1" class="pilcrow">¶</a></p>
<p id="section-9.4.1-2">The privileges associated with an access token SHOULD be restricted to
the minimum required for the particular application or use case. This
prevents clients from exceeding the privileges authorized by the
resource owner. It also prevents users from exceeding their privileges
authorized by the respective security policy. Privilege restrictions
also help to reduce the impact of access token leakage.<a href="#section-9.4.1-2" class="pilcrow">¶</a></p>
<p id="section-9.4.1-3">In particular, access tokens SHOULD be restricted to certain resource
servers (audience restriction), preferably to a single resource
server. To put this into effect, the authorization server associates
the access token with certain resource servers and every resource
server is obliged to verify, for every request, whether the access
token sent with that request was meant to be used for that particular
resource server. If not, the resource server MUST refuse to serve the
respective request. Clients and authorization servers MAY utilize the
parameters <code>scope</code> or <code>resource</code> as specified in
<span>[<a href="#RFC8707" class="xref">RFC8707</a>]</span>, respectively, to determine the
resource server they want to access.<a href="#section-9.4.1-3" class="pilcrow">¶</a></p>
</section>
</div>
<div id="access-token-replay-prevention">
<section id="section-9.4.2">
          <h4 id="name-access-token-replay-prevent">
<a href="#section-9.4.2" class="section-number selfRef">9.4.2. </a><a href="#name-access-token-replay-prevent" class="section-name selfRef">Access Token Replay Prevention</a>
          </h4>
<p id="section-9.4.2-1">Additionally, access tokens SHOULD be restricted to certain resources
and actions on resource servers or resources. To put this into effect,
the authorization server associates the access token with the
respective resource and actions and every resource server is obliged
to verify, for every request, whether the access token sent with that
request was meant to be used for that particular action on the
particular resource. If not, the resource server must refuse to serve
the respective request. Clients and authorization servers MAY utilize
the parameter <code>scope</code> and <code>authorization_details</code> as specified in
<span>[<a href="#I-D.ietf-oauth-rar" class="xref">I-D.ietf-oauth-rar</a>]</span> to determine those resources and/or actions.<a href="#section-9.4.2-1" class="pilcrow">¶</a></p>
<p id="section-9.4.2-2">Authorization and resource servers SHOULD use mechanisms for
sender-constrained access tokens to prevent token replay as described
in (#pop_tokens). A sender-constrained access token scopes the applicability
of an access
token to a certain sender. This sender is obliged to demonstrate knowledge
of a certain secret as prerequisite for the acceptance of that token at
the recipient (e.g., a resource server). The use of Mutual TLS for OAuth 2.0
<span>[<a href="#RFC8705" class="xref">RFC8705</a>]</span> is RECOMMENDED.<a href="#section-9.4.2-2" class="pilcrow">¶</a></p>
</section>
</div>
</section>
</div>
<div id="refresh-tokens">
<section id="section-9.5">
        <h3 id="name-refresh-tokens">
<a href="#section-9.5" class="section-number selfRef">9.5. </a><a href="#name-refresh-tokens" class="section-name selfRef">Refresh Tokens</a>
        </h3>
<p id="section-9.5-1">Authorization servers MAY issue refresh tokens to clients.<a href="#section-9.5-1" class="pilcrow">¶</a></p>
<p id="section-9.5-2">Refresh tokens MUST be kept confidential in transit and storage, and
shared only among the authorization server and the client to whom the
refresh tokens were issued.  The authorization server MUST maintain
the binding between a refresh token and the client to whom it was
issued.  Refresh tokens MUST only be transmitted using TLS as
described in <a href="#tls-version" class="xref">Section 1.6</a> with server authentication as defined by
<span>[<a href="#RFC2818" class="xref">RFC2818</a>]</span>.<a href="#section-9.5-2" class="pilcrow">¶</a></p>
<p id="section-9.5-3">The authorization server MUST verify the binding between the refresh
token and client identity whenever the client identity can be
authenticated.  When client authentication is not possible, the
authorization server MUST issue sender-constrained refresh tokens
or use refresh token rotation as described in (#refresh_token_protection).<a href="#section-9.5-3" class="pilcrow">¶</a></p>
<p id="section-9.5-4">The authorization server MUST ensure that refresh tokens cannot be
generated, modified, or guessed to produce valid refresh tokens by
unauthorized parties.<a href="#section-9.5-4" class="pilcrow">¶</a></p>
</section>
</div>
<div id="protecting-redirect-based-flows">
<section id="section-9.6">
        <h3 id="name-protecting-redirect-based-f">
<a href="#section-9.6" class="section-number selfRef">9.6. </a><a href="#name-protecting-redirect-based-f" class="section-name selfRef">Protecting Redirect-Based Flows</a>
        </h3>
<p id="section-9.6-1">When comparing client redirect URIs against pre-registered URIs,
authorization servers MUST utilize exact string matching. This measure
contributes to the prevention of leakage of authorization codes and
access tokens (see (#insufficient_uri_validation)). It can also help to
detect mix-up attacks (see (#mix_up)).<a href="#section-9.6-1" class="pilcrow">¶</a></p>
<p id="section-9.6-2">Clients MUST NOT expose URLs that forward the user's browser to
arbitrary URIs obtained from a query parameter ("open redirector").
Open redirectors can enable exfiltration of authorization codes and
access tokens, see (#open_redirector_on_client).<a href="#section-9.6-2" class="pilcrow">¶</a></p>
<p id="section-9.6-3">Clients MUST prevent Cross-Site Request Forgery (CSRF). In this
context, CSRF refers to requests to the redirection endpoint that do
not originate at the authorization server, but a malicious third party
(see Section 4.4.1.8. of <span>[<a href="#RFC6819" class="xref">RFC6819</a>]</span> for details). Clients that have
ensured that the authorization server supports the <code>code_challenge</code> parameter MAY
rely the CSRF protection provided by that mechanism. In OpenID Connect flows,
the <code>nonce</code> parameter provides CSRF protection. Otherwise, one-time
use CSRF tokens carried in the <code>state</code> parameter that are securely
bound to the user agent MUST be used for CSRF protection (see
(#csrf_countermeasures)).<a href="#section-9.6-3" class="pilcrow">¶</a></p>
<p id="section-9.6-4">In order to prevent mix-up attacks (see (#mix_up)), clients MUST only process redirect
responses of the authorization server they sent the respective request
to and from the same user agent this authorization request was
initiated with. Clients MUST store the authorization server they sent
an authorization request to and bind this information to the user
agent and check that the authorization request was received from the
correct authorization server. Clients MUST ensure that the subsequent
token request, if applicable, is sent to the same authorization
server. Clients SHOULD use distinct redirect URIs for each
authorization server as a means to identify the authorization server a
particular response came from.<a href="#section-9.6-4" class="pilcrow">¶</a></p>
<p id="section-9.6-5">An AS that redirects a request potentially containing user credentials
MUST avoid forwarding these user credentials accidentally (see
<a href="#redirect_307" class="xref">Section 9.6.2</a> for details).<a href="#section-9.6-5" class="pilcrow">¶</a></p>
<div id="loopback-redirect-considerations-in-native-apps">
<section id="section-9.6.1">
          <h4 id="name-loopback-redirect-considera">
<a href="#section-9.6.1" class="section-number selfRef">9.6.1. </a><a href="#name-loopback-redirect-considera" class="section-name selfRef">Loopback Redirect Considerations in Native Apps</a>
          </h4>
<p id="section-9.6.1-1">Loopback interface redirect URIs use the <code>http</code> scheme (i.e., without
Transport Layer Security (TLS)).  This is acceptable for loopback
interface redirect URIs as the HTTP request never leaves the device.<a href="#section-9.6.1-1" class="pilcrow">¶</a></p>
<p id="section-9.6.1-2">Clients should open the network port only when starting the
authorization request and close it once the response is returned.<a href="#section-9.6.1-2" class="pilcrow">¶</a></p>
<p id="section-9.6.1-3">Clients should listen on the loopback network interface only, in
order to avoid interference by other network actors.<a href="#section-9.6.1-3" class="pilcrow">¶</a></p>
<p id="section-9.6.1-4">While redirect URIs using localhost (i.e.,
<code>http://localhost:{port}/{path}</code>) function similarly to loopback IP
redirects described in <a href="#loopback-interface-redirection" class="xref">Section 10.3.3</a>, the use of <code>localhost</code> is NOT
RECOMMENDED.  Specifying a redirect URI with the loopback IP literal
rather than <code>localhost</code> avoids inadvertently listening on network
interfaces other than the loopback interface.  It is also less
susceptible to client-side firewalls and misconfigured host name
resolution on the user's device.<a href="#section-9.6.1-4" class="pilcrow">¶</a></p>
</section>
</div>
<div id="redirect_307">
<section id="section-9.6.2">
          <h4 id="name-http-307-redirect">
<a href="#section-9.6.2" class="section-number selfRef">9.6.2. </a><a href="#name-http-307-redirect" class="section-name selfRef">HTTP 307 Redirect</a>
          </h4>
<p id="section-9.6.2-1">An AS which redirects a request that potentially contains user
credentials MUST NOT use the HTTP 307 status code for
redirection.  If an HTTP redirection (and not, for example,
JavaScript) is used for such a request, AS SHOULD use HTTP status
code 303 "See Other".<a href="#section-9.6.2-1" class="pilcrow">¶</a></p>
<p id="section-9.6.2-2">At the authorization endpoint, a typical protocol flow is that the AS
prompts the user to enter her credentials in a form that is then
submitted (using the HTTP POST method) back to the authorization
server.  The AS checks the credentials and, if successful, redirects
the user agent to the client's redirection endpoint.<a href="#section-9.6.2-2" class="pilcrow">¶</a></p>
<p id="section-9.6.2-3">If the status code 307 were used for redirection, the user agent 
would send the user credentials via HTTP POST to the client.<a href="#section-9.6.2-3" class="pilcrow">¶</a></p>
<p id="section-9.6.2-4">This discloses the sensitive credentials to the client.  If the
relying party is malicious, it can use the credentials to impersonate
the user at the AS.<a href="#section-9.6.2-4" class="pilcrow">¶</a></p>
<p id="section-9.6.2-5">The behavior might be unexpected for developers, but is defined in
<span>[<a href="#RFC7231" class="xref">RFC7231</a>]</span>, Section 6.4.7.  This status code does not require the user
agent to rewrite the POST request to a GET request and thereby drop
the form data in the POST request body.<a href="#section-9.6.2-5" class="pilcrow">¶</a></p>
<p id="section-9.6.2-6">In the HTTP standard <span>[<a href="#RFC7231" class="xref">RFC7231</a>]</span>, only the status code 303
unambigiously enforces rewriting the HTTP POST request to an HTTP GET
request.  For all other status codes, including the popular 302, user
agents can opt not to rewrite POST to GET requests and therefore to
reveal the user credentials to the client.  (In practice, however,
most user agents will only show this behaviour for 307 redirects.)<a href="#section-9.6.2-6" class="pilcrow">¶</a></p>
<p id="section-9.6.2-7">Therefore, the RECOMMENDED status code for HTTP redirects is 303.<a href="#section-9.6.2-7" class="pilcrow">¶</a></p>
</section>
</div>
</section>
</div>
<div id="authorization_codes">
<section id="section-9.7">
        <h3 id="name-authorization-codes">
<a href="#section-9.7" class="section-number selfRef">9.7. </a><a href="#name-authorization-codes" class="section-name selfRef">Authorization Codes</a>
        </h3>
<p id="section-9.7-1">The transmission of authorization codes MUST be made over a secure
channel, and the client MUST require the use of TLS with its
redirection URI if the URI identifies a network resource.  Since
authorization codes are transmitted via user-agent redirections, they
could potentially be disclosed through user-agent history and HTTP
referrer headers.<a href="#section-9.7-1" class="pilcrow">¶</a></p>
<p id="section-9.7-2">Authorization codes MUST be short lived and single-use.  If the
authorization server observes multiple attempts to exchange an
authorization code for an access token, the authorization server
SHOULD attempt to revoke all refresh and access tokens already granted
based on the compromised authorization code.<a href="#section-9.7-2" class="pilcrow">¶</a></p>
<p id="section-9.7-3">If the client can be authenticated, the authorization servers MUST
authenticate the client and ensure that the authorization code was
issued to the same client.<a href="#section-9.7-3" class="pilcrow">¶</a></p>
<p id="section-9.7-4">Clients MUST prevent injection (replay) of authorization codes into the 
authorization response by attackers. The use of the <code>code_challenge</code>
parameter is RECOMMENDED to this end. For confidential clients, the 
OpenID Connect <code>nonce</code> parameter and ID Token Claim <span>[<a href="#OpenID" class="xref">OpenID</a>]</span> MAY be used 
instead of or in addition to the <code>code_challenge</code> parameter for this 
purpose. The <code>code_challenge</code> or OpenID Connect <code>nonce</code> value MUST be
transaction-specific and securely bound to the client and the user agent 
in which the transaction was started.<a href="#section-9.7-4" class="pilcrow">¶</a></p>
<p id="section-9.7-5">Historic note: although PKCE <span>[<a href="#RFC7636" class="xref">RFC7636</a>]</span> was originally designed as a mechanism to protect
native apps, this advice applies to all kinds of OAuth clients,
including web applications and other confidential clients.<a href="#section-9.7-5" class="pilcrow">¶</a></p>
<p id="section-9.7-6">Clients SHOULD use code challenge methods that
do not expose the <code>code_verifier</code> in the authorization request.
Otherwise, attackers that can read the authorization request (cf.
Attacker A4 in (#secmodel)) can break the security provided
by this mechanism. Currently, <code>S256</code> is the only such method.<a href="#section-9.7-6" class="pilcrow">¶</a></p>
<p id="section-9.7-7">Authorization servers MUST support the <code>code_challenge</code> and <code>code_verifier</code> parameters.<a href="#section-9.7-7" class="pilcrow">¶</a></p>
<p id="section-9.7-8">Authorization servers MUST provide a way to detect their support for
the <code>code_challenge</code> mechanism. To this end, they MUST either (a) publish the element
<code>code_challenge_methods_supported</code> in their AS metadata (<span>[<a href="#RFC8414" class="xref">RFC8414</a>]</span>)
containing the supported <code>code_challenge_method</code>s (which can be used by
the client to detect support) or (b) provide a
deployment-specific way to ensure or determine support by the AS.<a href="#section-9.7-8" class="pilcrow">¶</a></p>
</section>
</div>
<div id="request-confidentiality">
<section id="section-9.8">
        <h3 id="name-request-confidentiality">
<a href="#section-9.8" class="section-number selfRef">9.8. </a><a href="#name-request-confidentiality" class="section-name selfRef">Request Confidentiality</a>
        </h3>
<p id="section-9.8-1">Access tokens, refresh tokens, authorization codes, and client
credentials MUST NOT be transmitted in the clear.<a href="#section-9.8-1" class="pilcrow">¶</a></p>
<p id="section-9.8-2">The <code>state</code> and <code>scope</code> parameters SHOULD NOT include sensitive
client or resource owner information in plain text, as they can be
transmitted over insecure channels or stored insecurely.<a href="#section-9.8-2" class="pilcrow">¶</a></p>
</section>
</div>
<div id="ensuring-endpoint-authenticity">
<section id="section-9.9">
        <h3 id="name-ensuring-endpoint-authentic">
<a href="#section-9.9" class="section-number selfRef">9.9. </a><a href="#name-ensuring-endpoint-authentic" class="section-name selfRef">Ensuring Endpoint Authenticity</a>
        </h3>
<p id="section-9.9-1">In order to prevent man-in-the-middle attacks, the authorization
server MUST require the use of TLS with server authentication as
defined by <span>[<a href="#RFC2818" class="xref">RFC2818</a>]</span> for any request sent to the authorization and
token endpoints.  The client MUST validate the authorization server's
TLS certificate as defined by <span>[<a href="#RFC6125" class="xref">RFC6125</a>]</span> and in accordance with its
requirements for server identity authentication.<a href="#section-9.9-1" class="pilcrow">¶</a></p>
</section>
</div>
<div id="credentials-guessing-attacks">
<section id="section-9.10">
        <h3 id="name-credentials-guessing-attack">
<a href="#section-9.10" class="section-number selfRef">9.10. </a><a href="#name-credentials-guessing-attack" class="section-name selfRef">Credentials-Guessing Attacks</a>
        </h3>
<p id="section-9.10-1">The authorization server MUST prevent attackers from guessing access
tokens, authorization codes, refresh tokens, resource owner
passwords, and client credentials.<a href="#section-9.10-1" class="pilcrow">¶</a></p>
<p id="section-9.10-2">The probability of an attacker guessing generated tokens (and other
credentials not intended for handling by end-users) MUST be less than
or equal to 2^(-128) and SHOULD be less than or equal to 2^(-160).<a href="#section-9.10-2" class="pilcrow">¶</a></p>
<p id="section-9.10-3">The authorization server MUST utilize other means to protect
credentials intended for end-user usage.<a href="#section-9.10-3" class="pilcrow">¶</a></p>
</section>
</div>
<div id="phishing-attacks">
<section id="section-9.11">
        <h3 id="name-phishing-attacks">
<a href="#section-9.11" class="section-number selfRef">9.11. </a><a href="#name-phishing-attacks" class="section-name selfRef">Phishing Attacks</a>
        </h3>
<p id="section-9.11-1">Wide deployment of this and similar protocols may cause end-users to
become inured to the practice of being redirected to websites where
they are asked to enter their passwords.  If end-users are not
careful to verify the authenticity of these websites before entering
their credentials, it will be possible for attackers to exploit this
practice to steal resource owners' passwords.<a href="#section-9.11-1" class="pilcrow">¶</a></p>
<p id="section-9.11-2">Service providers should attempt to educate end-users about the risks
phishing attacks pose and should provide mechanisms that make it easy
for end-users to confirm the authenticity of their sites.  Client
developers should consider the security implications of how they
interact with the user-agent (e.g., external, embedded), and the
ability of the end-user to verify the authenticity of the
authorization server.<a href="#section-9.11-2" class="pilcrow">¶</a></p>
<p id="section-9.11-3">To reduce the risk of phishing attacks, the authorization servers
MUST require the use of TLS on every endpoint used for end-user
interaction.<a href="#section-9.11-3" class="pilcrow">¶</a></p>
</section>
</div>
<div id="fake-external-user-agents-in-native-apps">
<section id="section-9.12">
        <h3 id="name-fake-external-user-agents-i">
<a href="#section-9.12" class="section-number selfRef">9.12. </a><a href="#name-fake-external-user-agents-i" class="section-name selfRef">Fake External User-Agents in Native Apps</a>
        </h3>
<p id="section-9.12-1">The native app that is initiating the authorization request has a
large degree of control over the user interface and can potentially
present a fake external user-agent, that is, an embedded user-agent
made to appear as an external user-agent.<a href="#section-9.12-1" class="pilcrow">¶</a></p>
<p id="section-9.12-2">When all good actors are using external user-agents, the advantage is
that it is possible for security experts to detect bad actors, as
anyone faking an external user-agent is provably bad.  On the other
hand, if good and bad actors alike are using embedded user-agents,
bad actors don't need to fake anything, making them harder to detect.
Once a malicious app is detected, it may be possible to use this
knowledge to blacklist the app's signature in malware scanning
software, take removal action (in the case of apps distributed by app
stores) and other steps to reduce the impact and spread of the
malicious app.<a href="#section-9.12-2" class="pilcrow">¶</a></p>
<p id="section-9.12-3">Authorization servers can also directly protect against fake external
user-agents by requiring an authentication factor only available to
true external user-agents.<a href="#section-9.12-3" class="pilcrow">¶</a></p>
<p id="section-9.12-4">Users who are particularly concerned about their security when using
in-app browser tabs may also take the additional step of opening the
request in the full browser from the in-app browser tab and complete
the authorization there, as most implementations of the in-app
browser tab pattern offer such functionality.<a href="#section-9.12-4" class="pilcrow">¶</a></p>
</section>
</div>
<div id="malicious-external-user-agents-in-native-apps">
<section id="section-9.13">
        <h3 id="name-malicious-external-user-age">
<a href="#section-9.13" class="section-number selfRef">9.13. </a><a href="#name-malicious-external-user-age" class="section-name selfRef">Malicious External User-Agents in Native Apps</a>
        </h3>
<p id="section-9.13-1">If a malicious app is able to configure itself as the default handler
for <code>https</code> scheme URIs in the operating system, it will be able to
intercept authorization requests that use the default browser and
abuse this position of trust for malicious ends such as phishing the
user.<a href="#section-9.13-1" class="pilcrow">¶</a></p>
<p id="section-9.13-2">This attack is not confined to OAuth; a malicious app configured in
this way would present a general and ongoing risk to the user beyond
OAuth usage by native apps.  Many operating systems mitigate this
issue by requiring an explicit user action to change the default
handler for <code>http</code> and <code>https</code> scheme URIs.<a href="#section-9.13-2" class="pilcrow">¶</a></p>
</section>
</div>
<div id="csrf_countermeasures">
<section id="section-9.14">
        <h3 id="name-cross-site-request-forgery">
<a href="#section-9.14" class="section-number selfRef">9.14. </a><a href="#name-cross-site-request-forgery" class="section-name selfRef">Cross-Site Request Forgery</a>
        </h3>
<p id="section-9.14-1">An attacker might attempt to inject a request to the redirect URI of
the legitimate client on the victim's device, e.g., to cause the
client to access resources under the attacker's control. This is a
variant of an attack known as Cross-Site Request Forgery (CSRF).<a href="#section-9.14-1" class="pilcrow">¶</a></p>
<p id="section-9.14-2">The traditional countermeasure are CSRF tokens that are bound to the
user agent and passed in the <code>state</code> parameter to the authorization
server as described in <span>[<a href="#RFC6819" class="xref">RFC6819</a>]</span>. The same protection is provided by
the <code>code_verifier</code> parameter or the OpenID Connect <code>nonce</code> value.<a href="#section-9.14-2" class="pilcrow">¶</a></p>
<p id="section-9.14-3">When using <code>code_verifier</code> instead of <code>state</code> or <code>nonce</code> for CSRF protection, it is
important to note that:<a href="#section-9.14-3" class="pilcrow">¶</a></p>
<ul>
<li id="section-9.14-4.1">Clients MUST ensure that the AS supports the <code>code_challenge_method</code> 
intended to be used by the client. If an authorization server does not support the requested method,
<code>state</code> or <code>nonce</code> MUST be used for CSRF protection instead.<a href="#section-9.14-4.1" class="pilcrow">¶</a>
</li>
<li id="section-9.14-4.2">If <code>state</code> is used for carrying application state, and integrity of
its contents is a concern, clients MUST protect <code>state</code> against
tampering and swapping. This can be achieved by binding the
contents of state to the browser session and/or signed/encrypted
state values <span>[<a href="#I-D.bradley-oauth-jwt-encoded-state" class="xref">I-D.bradley-oauth-jwt-encoded-state</a>]</span>.<a href="#section-9.14-4.2" class="pilcrow">¶</a>
</li>
</ul>
<p id="section-9.14-5">AS therefore MUST provide a way to detect their supported code challenge methods
either via AS metadata according to <span>[<a href="#RFC8414" class="xref">RFC8414</a>]</span> or provide a
deployment-specific way to ensure or determine support.<a href="#section-9.14-5" class="pilcrow">¶</a></p>
</section>
</div>
<div id="clickjacking">
<section id="section-9.15">
        <h3 id="name-clickjacking">
<a href="#section-9.15" class="section-number selfRef">9.15. </a><a href="#name-clickjacking" class="section-name selfRef">Clickjacking</a>
        </h3>
<p id="section-9.15-1">As described in Section 4.4.1.9 of <span>[<a href="#RFC6819" class="xref">RFC6819</a>]</span>, the authorization
request is susceptible to clickjacking. An attacker can use this
vector to obtain the user's authentication credentials, change the
scope of access granted to the client, and potentially access the
user's resources.<a href="#section-9.15-1" class="pilcrow">¶</a></p>
<p id="section-9.15-2">Authorization servers MUST prevent clickjacking attacks. Multiple
countermeasures are described in <span>[<a href="#RFC6819" class="xref">RFC6819</a>]</span>, including the use of the
X-Frame-Options HTTP response header field and frame-busting
JavaScript. In addition to those, authorization servers SHOULD also
use Content Security Policy (CSP) level 2 <span>[<a href="#CSP-2" class="xref">CSP-2</a>]</span> or greater.<a href="#section-9.15-2" class="pilcrow">¶</a></p>
<p id="section-9.15-3">To be effective, CSP must be used on the authorization endpoint and,
if applicable, other endpoints used to authenticate the user and
authorize the client (e.g., the device authorization endpoint, login
pages, error pages, etc.). This prevents framing by unauthorized
origins in user agents that support CSP. The client MAY permit being
framed by some other origin than the one used in its redirection
endpoint. For this reason, authorization servers SHOULD allow
administrators to configure allowed origins for particular clients
and/or for clients to register these dynamically.<a href="#section-9.15-3" class="pilcrow">¶</a></p>
<p id="section-9.15-4">Using CSP allows authorization servers to specify multiple origins in
a single response header field and to constrain these using flexible
patterns (see <span>[<a href="#CSP-2" class="xref">CSP-2</a>]</span> for details). Level 2 of this standard provides
a robust mechanism for protecting against clickjacking by using
policies that restrict the origin of frames (using <code>frame-ancestors</code>)
together with those that restrict the sources of scripts allowed to
execute on an HTML page (by using <code>script-src</code>). A non-normative
example of such a policy is shown in the following listing:<a href="#section-9.15-4" class="pilcrow">¶</a></p>
<p id="section-9.15-5"><code>
HTTP/1.1 200 OK
Content-Security-Policy: frame-ancestors https://ext.example.org:8000
Content-Security-Policy: script-src 'self'
X-Frame-Options: ALLOW-FROM https://ext.example.org:8000
...
</code><a href="#section-9.15-5" class="pilcrow">¶</a></p>
<p id="section-9.15-6">Because some user agents do not support <span>[<a href="#CSP-2" class="xref">CSP-2</a>]</span>, this technique
SHOULD be combined with others, including those described in
<span>[<a href="#RFC6819" class="xref">RFC6819</a>]</span>, unless such legacy user agents are explicitly unsupported
by the authorization server. Even in such cases, additional
countermeasures SHOULD still be employed.<a href="#section-9.15-6" class="pilcrow">¶</a></p>
</section>
</div>
<div id="code-injection-and-input-validation">
<section id="section-9.16">
        <h3 id="name-code-injection-and-input-va">
<a href="#section-9.16" class="section-number selfRef">9.16. </a><a href="#name-code-injection-and-input-va" class="section-name selfRef">Code Injection and Input Validation</a>
        </h3>
<p id="section-9.16-1">A code injection attack occurs when an input or otherwise external
variable is used by an application unsanitized and causes
modification to the application logic.  This may allow an attacker to
gain access to the application device or its data, cause denial of
service, or introduce a wide range of malicious side-effects.<a href="#section-9.16-1" class="pilcrow">¶</a></p>
<p id="section-9.16-2">The authorization server and client MUST sanitize (and validate when
possible) any value received - in particular, the value of the
<code>state</code> and <code>redirect_uri</code> parameters.<a href="#section-9.16-2" class="pilcrow">¶</a></p>
</section>
</div>
<div id="open-redirectors">
<section id="section-9.17">
        <h3 id="name-open-redirectors">
<a href="#section-9.17" class="section-number selfRef">9.17. </a><a href="#name-open-redirectors" class="section-name selfRef">Open Redirectors</a>
        </h3>
<p id="section-9.17-1">The following attacks can occur when an AS or client has an open
redirector. An open redirector is an endpoint that forwards a user's
browser to an arbitrary URI obtained from a query parameter.<a href="#section-9.17-1" class="pilcrow">¶</a></p>
<div id="open_redirector_on_client">
<section id="section-9.17.1">
          <h4 id="name-client-as-open-redirector">
<a href="#section-9.17.1" class="section-number selfRef">9.17.1. </a><a href="#name-client-as-open-redirector" class="section-name selfRef">Client as Open Redirector</a>
          </h4>
<p id="section-9.17.1-1">Clients MUST NOT expose open redirectors. Attackers may use open
redirectors to produce URLs pointing to the client and utilize them to
exfiltrate authorization codes and access tokens, as described in
(#redir_uri_open_redir). Another abuse case is to produce URLs that
appear to point to the client. This might trick users into trusting the URL
and follow it in their browser. This can be abused for phishing.<a href="#section-9.17.1-1" class="pilcrow">¶</a></p>
<p id="section-9.17.1-2">In order to prevent open redirection, clients should only redirect if
the target URLs are whitelisted or if the origin and integrity of a
request can be authenticated. Countermeasures against open redirection
are described by OWASP <span>[<a href="#owasp_redir" class="xref">owasp_redir</a>]</span>.<a href="#section-9.17.1-2" class="pilcrow">¶</a></p>
</section>
</div>
<div id="authorization-server-as-open-redirector">
<section id="section-9.17.2">
          <h4 id="name-authorization-server-as-ope">
<a href="#section-9.17.2" class="section-number selfRef">9.17.2. </a><a href="#name-authorization-server-as-ope" class="section-name selfRef">Authorization Server as Open Redirector</a>
          </h4>
<p id="section-9.17.2-1">Just as with clients, attackers could try to utilize a user's trust in
the authorization server (and its URL in particular) for performing
phishing attacks. OAuth authorization servers regularly redirect users
to other web sites (the clients), but must do so in a safe way.<a href="#section-9.17.2-1" class="pilcrow">¶</a></p>
<p id="section-9.17.2-2"><a href="#authorization-code-error-response" class="xref">Section 4.1.2.1</a> already prevents open redirects by
stating that the AS MUST NOT automatically redirect the user agent in case
of an invalid combination of <code>client_id</code> and <code>redirect_uri</code>.<a href="#section-9.17.2-2" class="pilcrow">¶</a></p>
<p id="section-9.17.2-3">However, an attacker could also utilize a correctly registered
redirect URI to perform phishing attacks. The attacker could, for
example, register a client via dynamic client registration <span>[<a href="#RFC7591" class="xref">RFC7591</a>]</span>
and intentionally send an erroneous authorization request, e.g., by
using an invalid scope value, thus instructing the AS to redirect the
user agent to its phishing site.<a href="#section-9.17.2-3" class="pilcrow">¶</a></p>
<p id="section-9.17.2-4">The AS MUST take precautions to prevent this threat. Based on its risk
assessment, the AS needs to decide whether it can trust the redirect
URI and SHOULD only automatically redirect the user agent if it trusts
the redirect URI. If the URI is not trusted, the AS MAY inform the
user and rely on the user to make the correct decision.<a href="#section-9.17.2-4" class="pilcrow">¶</a></p>
</section>
</div>
</section>
</div>
<div id="authorization-server-mix-up-mitigation-in-native-apps">
<section id="section-9.18">
        <h3 id="name-authorization-server-mix-up">
<a href="#section-9.18" class="section-number selfRef">9.18. </a><a href="#name-authorization-server-mix-up" class="section-name selfRef">Authorization Server Mix-Up Mitigation in Native Apps</a>
        </h3>
<p id="section-9.18-1">(TODO: merge this with the regular mix-up section when it is brought in)<a href="#section-9.18-1" class="pilcrow">¶</a></p>
<p id="section-9.18-2">To protect against a compromised or malicious authorization server
attacking another authorization server used by the same app, it is
REQUIRED that a unique redirect URI is used for each authorization
server used by the app (for example, by varying the path component),
and that authorization responses are rejected if the redirect URI
they were received on doesn't match the redirect URI in an outgoing
authorization request.<a href="#section-9.18-2" class="pilcrow">¶</a></p>
<p id="section-9.18-3">The native app MUST store the redirect URI used in the authorization
request with the authorization session data (i.e., along with <code>state</code>
and other related data) and MUST verify that the URI on which the
authorization response was received exactly matches it.<a href="#section-9.18-3" class="pilcrow">¶</a></p>
<p id="section-9.18-4">The requirement of <a href="#native-app-registration" class="xref">Section 9.2</a>, specifically that authorization
servers reject requests with URIs that don't match what was
registered, is also required to prevent such attacks.<a href="#section-9.18-4" class="pilcrow">¶</a></p>
</section>
</div>
<div id="native-apps-embedded-user-agents">
<section id="section-9.19">
        <h3 id="name-embedded-user-agents-in-nat">
<a href="#section-9.19" class="section-number selfRef">9.19. </a><a href="#name-embedded-user-agents-in-nat" class="section-name selfRef">Embedded User Agents in Native Apps</a>
        </h3>
<p id="section-9.19-1">Embedded user-agents are a technically possible method for authorizing native
apps.  These embedded user-agents are unsafe for use by third parties
to the authorization server by definition, as the app that hosts the
embedded user-agent can access the user's full authentication
credential, not just the OAuth authorization grant that was intended
for the app.<a href="#section-9.19-1" class="pilcrow">¶</a></p>
<p id="section-9.19-2">In typical web-view-based implementations of embedded user-agents,
the host application can record every keystroke entered in the login
form to capture usernames and passwords, automatically submit forms
to bypass user consent, and copy session cookies and use them to
perform authenticated actions as the user.<a href="#section-9.19-2" class="pilcrow">¶</a></p>
<p id="section-9.19-3">Even when used by trusted apps belonging to the same party as the
authorization server, embedded user-agents violate the principle of
least privilege by having access to more powerful credentials than
they need, potentially increasing the attack surface.<a href="#section-9.19-3" class="pilcrow">¶</a></p>
<p id="section-9.19-4">Encouraging users to enter credentials in an embedded user-agent
without the usual address bar and visible certificate validation
features that browsers have makes it impossible for the user to know
if they are signing in to the legitimate site; even when they are, it
trains them that it's OK to enter credentials without validating the
site first.<a href="#section-9.19-4" class="pilcrow">¶</a></p>
<p id="section-9.19-5">Aside from the security concerns, embedded user-agents do not share
the authentication state with other apps or the browser, requiring
the user to log in for every authorization request, which is often
considered an inferior user experience.<a href="#section-9.19-5" class="pilcrow">¶</a></p>
</section>
</div>
<div id="other-recommendations">
<section id="section-9.20">
        <h3 id="name-other-recommendations">
<a href="#section-9.20" class="section-number selfRef">9.20. </a><a href="#name-other-recommendations" class="section-name selfRef">Other Recommendations</a>
        </h3>
<p id="section-9.20-1">Authorization servers SHOULD NOT allow clients to influence their
<code>client_id</code> or <code>sub</code> value or any other claim if that can cause
confusion with a genuine resource owner (see (#client_impersonating)).<a href="#section-9.20-1" class="pilcrow">¶</a></p>
</section>
</div>
</section>
</div>
<div id="native-applications">
<section id="section-10">
      <h2 id="name-native-applications">
<a href="#section-10" class="section-number selfRef">10. </a><a href="#name-native-applications" class="section-name selfRef">Native Applications</a>
      </h2>
<p id="section-10-1">Native applications are clients installed and executed on the device
used by the resource owner (i.e., desktop application, native mobile
application).  Native applications require special consideration
related to security, platform capabilities, and overall end-user
experience.<a href="#section-10-1" class="pilcrow">¶</a></p>
<p id="section-10-2">The authorization endpoint requires interaction between the client
and the resource owner's user-agent. The best current practice is to
perform the OAuth authorization request in an external user-agent
(typically the browser) rather than an embedded user-agent (such as
one implemented with web-views).<a href="#section-10-2" class="pilcrow">¶</a></p>
<p id="section-10-3">The native application can capture the
response from the authorization server using a redirection URI
with a scheme registered with the operating system to invoke the
client as the handler, manual copy-and-paste of the credentials,
running a local web server, installing a user-agent extension, or
by providing a redirection URI identifying a server-hosted
resource under the client's control, which in turn makes the
response available to the native application.<a href="#section-10-3" class="pilcrow">¶</a></p>
<p id="section-10-4">Previously, it was common for native apps to use embedded user-agents
(commonly implemented with web-views) for OAuth authorization
requests.  That approach has many drawbacks, including the host app
being able to copy user credentials and cookies as well as the user
needing to authenticate from scratch in each app.  See <a href="#native-apps-embedded-user-agents" class="xref">Section 9.19</a>
for a deeper analysis of the drawbacks of using embedded user-agents
for OAuth.<a href="#section-10-4" class="pilcrow">¶</a></p>
<p id="section-10-5">Native app authorization requests that use the browser are more
secure and can take advantage of the user's authentication state.
Being able to use the existing authentication session in the browser
enables single sign-on, as users don't need to authenticate to the
authorization server each time they use a new app (unless required by
the authorization server policy).<a href="#section-10-5" class="pilcrow">¶</a></p>
<p id="section-10-6">Supporting authorization flows between a native app and the browser
is possible without changing the OAuth protocol itself, as the OAuth
authorization request and response are already defined in terms of
URIs.  This encompasses URIs that can be used for inter-app
communication.  Some OAuth server implementations that assume all
clients are confidential web clients will need to add an
understanding of public native app clients and the types of redirect
URIs they use to support this best practice.<a href="#section-10-6" class="pilcrow">¶</a></p>
<div id="using-inter-app-uri-communication-for-oauth-in-native-apps">
<section id="section-10.1">
        <h3 id="name-using-inter-app-uri-communi">
<a href="#section-10.1" class="section-number selfRef">10.1. </a><a href="#name-using-inter-app-uri-communi" class="section-name selfRef">Using Inter-App URI Communication for OAuth in Native Apps</a>
        </h3>
<p id="section-10.1-1">Just as URIs are used for OAuth on the web to initiate
the authorization request and return the authorization response to
the requesting website, URIs can be used by native apps to initiate
the authorization request in the device's browser and return the
response to the requesting native app.<a href="#section-10.1-1" class="pilcrow">¶</a></p>
<p id="section-10.1-2">By adopting the same methods used on the web for OAuth, benefits seen
in the web context like the usability of a single sign-on session and
the security of a separate authentication context are likewise gained
in the native app context.  Reusing the same approach also reduces
the implementation complexity and increases interoperability by
relying on standards-based web flows that are not specific to a
particular platform.<a href="#section-10.1-2" class="pilcrow">¶</a></p>
<p id="section-10.1-3">Native apps MUST use an external
user-agent to perform OAuth authorization requests.  This is achieved
by opening the authorization request in the browser (detailed in
<a href="#authorization-request-native-app" class="xref">Section 10.2</a>) and using a redirect URI that will return the
authorization response back to the native app (defined in <a href="#authorization-response-native-app" class="xref">Section 10.3</a>).<a href="#section-10.1-3" class="pilcrow">¶</a></p>
</section>
</div>
<div id="authorization-request-native-app">
<section id="section-10.2">
        <h3 id="name-initiating-the-authorizatio">
<a href="#section-10.2" class="section-number selfRef">10.2. </a><a href="#name-initiating-the-authorizatio" class="section-name selfRef">Initiating the Authorization Request from a Native App</a>
        </h3>
<p id="section-10.2-1">Native apps needing user authorization create an authorization
request URI with the authorization code grant type per <a href="#authorization-code-grant" class="xref">Section 4.1</a>
using a redirect URI capable of being received by the native app.<a href="#section-10.2-1" class="pilcrow">¶</a></p>
<p id="section-10.2-2">The function of the redirect URI for a native app authorization
request is similar to that of a web-based authorization request.
Rather than returning the authorization response to the OAuth
client's server, the redirect URI used by a native app returns the
response to the app.  Several options for a redirect URI that will
return the authorization response to the native app in different
platforms are documented in <a href="#authorization-response-native-app" class="xref">Section 10.3</a>.  Any redirect URI that allows
the app to receive the URI and inspect its parameters is viable.<a href="#section-10.2-2" class="pilcrow">¶</a></p>
<p id="section-10.2-3">After constructing the authorization request URI, the app uses
platform-specific APIs to open the URI in an external user-agent.
Typically, the external user-agent used is the default browser, that
is, the application configured for handling <code>http</code> and <code>https</code> scheme
URIs on the system; however, different browser selection criteria and
other categories of external user-agents MAY be used.<a href="#section-10.2-3" class="pilcrow">¶</a></p>
<p id="section-10.2-4">This best practice focuses on the browser as the RECOMMENDED external
user-agent for native apps.  An external user-agent designed
specifically for user authorization and capable of processing
authorization requests and responses like a browser MAY also be used.
Other external user-agents, such as a native app provided by the
authorization server may meet the criteria set out in this best
practice, including using the same redirection URI properties, but
their use is out of scope for this specification.<a href="#section-10.2-4" class="pilcrow">¶</a></p>
<p id="section-10.2-5">Some platforms support a browser feature known as "in-app browser
tabs", where an app can present a tab of the browser within the app
context without switching apps, but still retain key benefits of the
browser such as a shared authentication state and security context.
On platforms where they are supported, it is RECOMMENDED, for
usability reasons, that apps use in-app browser tabs for the
authorization request.<a href="#section-10.2-5" class="pilcrow">¶</a></p>
</section>
</div>
<div id="authorization-response-native-app">
<section id="section-10.3">
        <h3 id="name-receiving-the-authorization">
<a href="#section-10.3" class="section-number selfRef">10.3. </a><a href="#name-receiving-the-authorization" class="section-name selfRef">Receiving the Authorization Response in a Native App</a>
        </h3>
<p id="section-10.3-1">There are several redirect URI options available to native apps for
receiving the authorization response from the browser, the
availability and user experience of which varies by platform.<a href="#section-10.3-1" class="pilcrow">¶</a></p>
<p id="section-10.3-2">To fully support native apps, authorization servers MUST offer
at least the three redirect URI options described in the following
subsections to native apps.  Native apps MAY use whichever redirect
option suits their needs best, taking into account platform-specific
implementation details.<a href="#section-10.3-2" class="pilcrow">¶</a></p>
<div id="private-use-uri-scheme">
<section id="section-10.3.1">
          <h4 id="name-private-use-uri-scheme-redi">
<a href="#section-10.3.1" class="section-number selfRef">10.3.1. </a><a href="#name-private-use-uri-scheme-redi" class="section-name selfRef">Private-Use URI Scheme Redirection</a>
          </h4>
<p id="section-10.3.1-1">Many mobile and desktop computing platforms support inter-app
communication via URIs by allowing apps to register private-use URI
schemes (sometimes colloquially referred to as "custom URL schemes")
like <code>com.example.app</code>.  When the browser or another app attempts to
load a URI with a private-use URI scheme, the app that registered it
is launched to handle the request.<a href="#section-10.3.1-1" class="pilcrow">¶</a></p>
<p id="section-10.3.1-2">To perform an authorization request with a private-use URI
scheme redirect, the native app launches the browser with a standard
authorization request, but one where the redirection URI utilizes a
private-use URI scheme it registered with the operating system.<a href="#section-10.3.1-2" class="pilcrow">¶</a></p>
<p id="section-10.3.1-3">When choosing a URI scheme to associate with the app, apps MUST use a
URI scheme based on a domain name under their control, expressed in
reverse order, as recommended by Section 3.8 of <span>[<a href="#RFC7595" class="xref">RFC7595</a>]</span> for
private-use URI schemes.<a href="#section-10.3.1-3" class="pilcrow">¶</a></p>
<p id="section-10.3.1-4">For example, an app that controls the domain name <code>app.example.com</code>
can use <code>com.example.app</code> as their scheme.  Some authorization
servers assign client identifiers based on domain names, for example,
<code>client1234.usercontent.example.net</code>, which can also be used as the
domain name for the scheme when reversed in the same manner.  A
scheme such as <code>myapp</code>, however, would not meet this requirement, as
it is not based on a domain name.<a href="#section-10.3.1-4" class="pilcrow">¶</a></p>
<p id="section-10.3.1-5">When there are multiple apps by the same publisher, care must be
taken so that each scheme is unique within that group.  On platforms
that use app identifiers based on reverse-order domain names, those
identifiers can be reused as the private-use URI scheme for the OAuth
redirect to help avoid this problem.<a href="#section-10.3.1-5" class="pilcrow">¶</a></p>
<p id="section-10.3.1-6">Following the requirements of Section 3.2 of <span>[<a href="#RFC3986" class="xref">RFC3986</a>]</span>, as there is
no naming authority for private-use URI scheme redirects, only a
single slash (<code>/</code>) appears after the scheme component.  A complete
example of a redirect URI utilizing a private-use URI scheme is:<a href="#section-10.3.1-6" class="pilcrow">¶</a></p>
<div class="artwork art-text alignLeft" id="section-10.3.1-7">
<pre>
com.example.app:/oauth2redirect/example-provider
</pre><a href="#section-10.3.1-7" class="pilcrow">¶</a>
</div>
<p id="section-10.3.1-8">When the authorization server completes the request, it redirects to
the client's redirection URI as it would normally.  As the
redirection URI uses a private-use URI scheme, it results in the
operating system launching the native app, passing in the URI as a
launch parameter.  Then, the native app uses normal processing for
the authorization response.<a href="#section-10.3.1-8" class="pilcrow">¶</a></p>
</section>
</div>
<div id="claimed-https-scheme-uri-redirection">
<section id="section-10.3.2">
          <h4 id="name-claimed-https-scheme-uri-re">
<a href="#section-10.3.2" class="section-number selfRef">10.3.2. </a><a href="#name-claimed-https-scheme-uri-re" class="section-name selfRef">Claimed "https" Scheme URI Redirection</a>
          </h4>
<p id="section-10.3.2-1">Some operating systems allow apps to claim <code>https</code> scheme <span>[<a href="#RFC7230" class="xref">RFC7230</a>]</span>
URIs in the domains they control.  When the browser encounters a
claimed URI, instead of the page being loaded in the browser, the
native app is launched with the URI supplied as a launch parameter.<a href="#section-10.3.2-1" class="pilcrow">¶</a></p>
<p id="section-10.3.2-2">Such URIs can be used as redirect URIs by native apps.  They are
indistinguishable to the authorization server from a regular web-
based client redirect URI.  An example is:<a href="#section-10.3.2-2" class="pilcrow">¶</a></p>
<div class="artwork art-text alignLeft" id="section-10.3.2-3">
<pre>
https://app.example.com/oauth2redirect/example-provider
</pre><a href="#section-10.3.2-3" class="pilcrow">¶</a>
</div>
<p id="section-10.3.2-4">As the redirect URI alone is not enough to distinguish public native
app clients from confidential web clients, it is REQUIRED in
<a href="#native-app-registration" class="xref">Section 9.2</a> that the client type be recorded during client
registration to enable the server to determine the client type and
act accordingly.<a href="#section-10.3.2-4" class="pilcrow">¶</a></p>
<p id="section-10.3.2-5">App-claimed <code>https</code> scheme redirect URIs have some advantages
compared to other native app redirect options in that the identity of
the destination app is guaranteed to the authorization server by the
operating system.  For this reason, native apps SHOULD use them over
the other options where possible.<a href="#section-10.3.2-5" class="pilcrow">¶</a></p>
</section>
</div>
<div id="loopback-interface-redirection">
<section id="section-10.3.3">
          <h4 id="name-loopback-interface-redirect">
<a href="#section-10.3.3" class="section-number selfRef">10.3.3. </a><a href="#name-loopback-interface-redirect" class="section-name selfRef">Loopback Interface Redirection</a>
          </h4>
<p id="section-10.3.3-1">Native apps that are able to open a port on the loopback network
interface without needing special permissions (typically, those on
desktop operating systems) can use the loopback interface to receive
the OAuth redirect.<a href="#section-10.3.3-1" class="pilcrow">¶</a></p>
<p id="section-10.3.3-2">Loopback redirect URIs use the <code>http</code> scheme and are constructed with
the loopback IP literal and whatever port the client is listening on.<a href="#section-10.3.3-2" class="pilcrow">¶</a></p>
<p id="section-10.3.3-3">That is, <code>http://127.0.0.1:{port}/{path}</code> for IPv4, and
<code>http://[::1]:{port}/{path}</code> for IPv6.  An example redirect using the
IPv4 loopback interface with a randomly assigned port:<a href="#section-10.3.3-3" class="pilcrow">¶</a></p>
<div class="artwork art-text alignLeft" id="section-10.3.3-4">
<pre>
http://127.0.0.1:51004/oauth2redirect/example-provider
</pre><a href="#section-10.3.3-4" class="pilcrow">¶</a>
</div>
<p id="section-10.3.3-5">An example redirect using the IPv6 loopback interface with a randomly
assigned port:<a href="#section-10.3.3-5" class="pilcrow">¶</a></p>
<div class="artwork art-text alignLeft" id="section-10.3.3-6">
<pre>
http://[::1]:61023/oauth2redirect/example-provider
</pre><a href="#section-10.3.3-6" class="pilcrow">¶</a>
</div>
<p id="section-10.3.3-7">The authorization server MUST allow any port to be specified at the
time of the request for loopback IP redirect URIs, to accommodate
clients that obtain an available ephemeral port from the operating
system at the time of the request.<a href="#section-10.3.3-7" class="pilcrow">¶</a></p>
<p id="section-10.3.3-8">Clients SHOULD NOT assume that the device supports a particular
version of the Internet Protocol.  It is RECOMMENDED that clients
attempt to bind to the loopback interface using both IPv4 and IPv6
and use whichever is available.<a href="#section-10.3.3-8" class="pilcrow">¶</a></p>
</section>
</div>
</section>
</div>
</section>
</div>
<div id="browser-based-apps">
<section id="section-11">
      <h2 id="name-browser-based-apps">
<a href="#section-11" class="section-number selfRef">11. </a><a href="#name-browser-based-apps" class="section-name selfRef">Browser-Based Apps</a>
      </h2>
<p id="section-11-1">Browser-based apps are are clients that run in a web browser, typically
written in JavaScript, also known as "single-page apps". These types of apps
have particular security considerations similar to native apps.<a href="#section-11-1" class="pilcrow">¶</a></p>
<p id="section-11-2">TODO: Bring in the normative text of the browser-based apps BCP when it is finalized.<a href="#section-11-2" class="pilcrow">¶</a></p>
</section>
</div>
<div id="differences-from-oauth-20">
<section id="section-12">
      <h2 id="name-differences-from-oauth-20">
<a href="#section-12" class="section-number selfRef">12. </a><a href="#name-differences-from-oauth-20" class="section-name selfRef">Differences from OAuth 2.0</a>
      </h2>
<p id="section-12-1">This draft consolidates the functionality in OAuth 2.0 <span>[<a href="#RFC6749" class="xref">RFC6749</a>]</span>,
OAuth 2.0 for Native Apps (<span>[<a href="#RFC8252" class="xref">RFC8252</a>]</span>),
Proof Key for Code Exchange (<span>[<a href="#RFC7636" class="xref">RFC7636</a>]</span>),
OAuth 2.0 for Browser-Based Apps (<span>[<a href="#I-D.ietf-oauth-browser-based-apps" class="xref">I-D.ietf-oauth-browser-based-apps</a>]</span>),
OAuth Security Best Current Practice (<span>[<a href="#I-D.ietf-oauth-security-topics" class="xref">I-D.ietf-oauth-security-topics</a>]</span>),
and Bearer Token Usage (<span>[<a href="#RFC6750" class="xref">RFC6750</a>]</span>).<a href="#section-12-1" class="pilcrow">¶</a></p>
<p id="section-12-2">Where a later draft updates or obsoletes functionality found in the original
<span>[<a href="#RFC6749" class="xref">RFC6749</a>]</span>, that functionality in this draft is updated with the normative
changes described in a later draft, or removed entirely.<a href="#section-12-2" class="pilcrow">¶</a></p>
<p id="section-12-3">A non-normative list of changes from OAuth 2.0 is listed below:<a href="#section-12-3" class="pilcrow">¶</a></p>
<ul>
<li id="section-12-4.1">The authorization code grant is extended with the functionality from PKCE (<span>[<a href="#RFC7636" class="xref">RFC7636</a>]</span>)
such that the only method of using the authorization code grant according
to this specification requires the addition of the PKCE parameters<a href="#section-12-4.1" class="pilcrow">¶</a>
</li>
<li id="section-12-4.2">Redirect URIs must be compared using exact string matching
as per Section 4.1.3 of <span>[<a href="#I-D.ietf-oauth-security-topics" class="xref">I-D.ietf-oauth-security-topics</a>]</span><a href="#section-12-4.2" class="pilcrow">¶</a>
</li>
<li id="section-12-4.3">The Implicit grant (<code>response_type=token</code>) is omitted from this specification
as per Section 2.1.2 of <span>[<a href="#I-D.ietf-oauth-security-topics" class="xref">I-D.ietf-oauth-security-topics</a>]</span><a href="#section-12-4.3" class="pilcrow">¶</a>
</li>
<li id="section-12-4.4">The Resource Owner Password Credentials grant is omitted from this specification
as per Section 2.4 of <span>[<a href="#I-D.ietf-oauth-security-topics" class="xref">I-D.ietf-oauth-security-topics</a>]</span><a href="#section-12-4.4" class="pilcrow">¶</a>
</li>
<li id="section-12-4.5">Bearer token usage omits the use of bearer tokens in the query string of URIs
as per Section 4.3.2 of <span>[<a href="#I-D.ietf-oauth-security-topics" class="xref">I-D.ietf-oauth-security-topics</a>]</span><a href="#section-12-4.5" class="pilcrow">¶</a>
</li>
<li id="section-12-4.6">Refresh tokens must either be sender-constrained or one-time use
as per Section 4.12.2 of <span>[<a href="#I-D.ietf-oauth-security-topics" class="xref">I-D.ietf-oauth-security-topics</a>]</span><a href="#section-12-4.6" class="pilcrow">¶</a>
</li>
</ul>
</section>
</div>
<div id="iana-considerations">
<section id="section-13">
      <h2 id="name-iana-considerations">
<a href="#section-13" class="section-number selfRef">13. </a><a href="#name-iana-considerations" class="section-name selfRef">IANA Considerations</a>
      </h2>
<p id="section-13-1">This document does not require any IANA actions.<a href="#section-13-1" class="pilcrow">¶</a></p>
<p id="section-13-2">All referenced registries are defined by RFC6749 and related documents that this 
work is based upon. No changes to those registries are required by this specification.<a href="#section-13-2" class="pilcrow">¶</a></p>
</section>
</div>
<section id="section-14">
      <h2 id="name-references">
<a href="#section-14" class="section-number selfRef">14. </a><a href="#name-references" class="section-name selfRef">References</a>
      </h2>
<section id="section-14.1">
        <h3 id="name-normative-references">
<a href="#section-14.1" class="section-number selfRef">14.1. </a><a href="#name-normative-references" class="section-name selfRef">Normative References</a>
        </h3>
<dl class="references">
<dt id="I-D.ietf-oauth-security-topics">[I-D.ietf-oauth-security-topics]</dt>
<dd>
<span class="refAuthor">Lodderstedt, T.</span><span class="refAuthor">, Bradley, J.</span><span class="refAuthor">, Labunets, A.</span><span class="refAuthor">, and D. Fett</span>, <span class="refTitle">"OAuth 2.0 Security Best Current Practice"</span>, <span class="refContent">Work in Progress</span>, <span class="seriesInfo">Internet-Draft, draft-ietf-oauth-security-topics-15</span>, <time datetime="2020-04-05">5 April 2020</time>, <span>&lt;<a href="http://www.ietf.org/internet-drafts/draft-ietf-oauth-security-topics-15.txt">http://www.ietf.org/internet-drafts/draft-ietf-oauth-security-topics-15.txt</a>&gt;</span>. </dd>
<dt id="RFC2119">[RFC2119]</dt>
<dd>
<span class="refAuthor">Bradner, S.</span>, <span class="refTitle">"Key words for use in RFCs to Indicate Requirement Levels"</span>, <span class="seriesInfo">BCP 14</span>, <span class="seriesInfo">RFC 2119</span>, <span class="seriesInfo">DOI 10.17487/RFC2119</span>, <time datetime="1997-03">March 1997</time>, <span>&lt;<a href="https://www.rfc-editor.org/info/rfc2119">https://www.rfc-editor.org/info/rfc2119</a>&gt;</span>. </dd>
<dt id="RFC2617">[RFC2617]</dt>
<dd>
<span class="refAuthor">Franks, J.</span><span class="refAuthor">, Hallam-Baker, P.</span><span class="refAuthor">, Hostetler, J.</span><span class="refAuthor">, Lawrence, S.</span><span class="refAuthor">, Leach, P.</span><span class="refAuthor">, Luotonen, A.</span><span class="refAuthor">, and L. Stewart</span>, <span class="refTitle">"HTTP Authentication: Basic and Digest Access Authentication"</span>, <span class="seriesInfo">RFC 2617</span>, <span class="seriesInfo">DOI 10.17487/RFC2617</span>, <time datetime="1999-06">June 1999</time>, <span>&lt;<a href="https://www.rfc-editor.org/info/rfc2617">https://www.rfc-editor.org/info/rfc2617</a>&gt;</span>. </dd>
<dt id="RFC2818">[RFC2818]</dt>
<dd>
<span class="refAuthor">Rescorla, E.</span>, <span class="refTitle">"HTTP Over TLS"</span>, <span class="seriesInfo">RFC 2818</span>, <span class="seriesInfo">DOI 10.17487/RFC2818</span>, <time datetime="2000-05">May 2000</time>, <span>&lt;<a href="https://www.rfc-editor.org/info/rfc2818">https://www.rfc-editor.org/info/rfc2818</a>&gt;</span>. </dd>
<dt id="RFC3629">[RFC3629]</dt>
<dd>
<span class="refAuthor">Yergeau, F.</span>, <span class="refTitle">"UTF-8, a transformation format of ISO 10646"</span>, <span class="seriesInfo">STD 63</span>, <span class="seriesInfo">RFC 3629</span>, <span class="seriesInfo">DOI 10.17487/RFC3629</span>, <time datetime="2003-11">November 2003</time>, <span>&lt;<a href="https://www.rfc-editor.org/info/rfc3629">https://www.rfc-editor.org/info/rfc3629</a>&gt;</span>. </dd>
<dt id="RFC3986">[RFC3986]</dt>
<dd>
<span class="refAuthor">Berners-Lee, T.</span><span class="refAuthor">, Fielding, R.</span><span class="refAuthor">, and L. Masinter</span>, <span class="refTitle">"Uniform Resource Identifier (URI): Generic Syntax"</span>, <span class="seriesInfo">STD 66</span>, <span class="seriesInfo">RFC 3986</span>, <span class="seriesInfo">DOI 10.17487/RFC3986</span>, <time datetime="2005-01">January 2005</time>, <span>&lt;<a href="https://www.rfc-editor.org/info/rfc3986">https://www.rfc-editor.org/info/rfc3986</a>&gt;</span>. </dd>
<dt id="RFC4949">[RFC4949]</dt>
<dd>
<span class="refAuthor">Shirey, R.</span>, <span class="refTitle">"Internet Security Glossary, Version 2"</span>, <span class="seriesInfo">FYI 36</span>, <span class="seriesInfo">RFC 4949</span>, <span class="seriesInfo">DOI 10.17487/RFC4949</span>, <time datetime="2007-08">August 2007</time>, <span>&lt;<a href="https://www.rfc-editor.org/info/rfc4949">https://www.rfc-editor.org/info/rfc4949</a>&gt;</span>. </dd>
<dt id="RFC5234">[RFC5234]</dt>
<dd>
<span class="refAuthor">Crocker, D., Ed.</span><span class="refAuthor"> and P. Overell</span>, <span class="refTitle">"Augmented BNF for Syntax Specifications: ABNF"</span>, <span class="seriesInfo">STD 68</span>, <span class="seriesInfo">RFC 5234</span>, <span class="seriesInfo">DOI 10.17487/RFC5234</span>, <time datetime="2008-01">January 2008</time>, <span>&lt;<a href="https://www.rfc-editor.org/info/rfc5234">https://www.rfc-editor.org/info/rfc5234</a>&gt;</span>. </dd>
<dt id="RFC5280">[RFC5280]</dt>
<dd>
<span class="refAuthor">Cooper, D.</span><span class="refAuthor">, Santesson, S.</span><span class="refAuthor">, Farrell, S.</span><span class="refAuthor">, Boeyen, S.</span><span class="refAuthor">, Housley, R.</span><span class="refAuthor">, and W. Polk</span>, <span class="refTitle">"Internet X.509 Public Key Infrastructure Certificate and Certificate Revocation List (CRL) Profile"</span>, <span class="seriesInfo">RFC 5280</span>, <span class="seriesInfo">DOI 10.17487/RFC5280</span>, <time datetime="2008-05">May 2008</time>, <span>&lt;<a href="https://www.rfc-editor.org/info/rfc5280">https://www.rfc-editor.org/info/rfc5280</a>&gt;</span>. </dd>
<dt id="RFC6125">[RFC6125]</dt>
<dd>
<span class="refAuthor">Saint-Andre, P.</span><span class="refAuthor"> and J. Hodges</span>, <span class="refTitle">"Representation and Verification of Domain-Based Application Service Identity within Internet Public Key Infrastructure Using X.509 (PKIX) Certificates in the Context of Transport Layer Security (TLS)"</span>, <span class="seriesInfo">RFC 6125</span>, <span class="seriesInfo">DOI 10.17487/RFC6125</span>, <time datetime="2011-03">March 2011</time>, <span>&lt;<a href="https://www.rfc-editor.org/info/rfc6125">https://www.rfc-editor.org/info/rfc6125</a>&gt;</span>. </dd>
<dt id="RFC6749">[RFC6749]</dt>
<dd>
<span class="refAuthor">Hardt, D., Ed.</span>, <span class="refTitle">"The OAuth 2.0 Authorization Framework"</span>, <span class="seriesInfo">RFC 6749</span>, <span class="seriesInfo">DOI 10.17487/RFC6749</span>, <time datetime="2012-10">October 2012</time>, <span>&lt;<a href="https://www.rfc-editor.org/info/rfc6749">https://www.rfc-editor.org/info/rfc6749</a>&gt;</span>. </dd>
<dt id="RFC6750">[RFC6750]</dt>
<dd>
<span class="refAuthor">Jones, M.</span><span class="refAuthor"> and D. Hardt</span>, <span class="refTitle">"The OAuth 2.0 Authorization Framework: Bearer Token Usage"</span>, <span class="seriesInfo">RFC 6750</span>, <span class="seriesInfo">DOI 10.17487/RFC6750</span>, <time datetime="2012-10">October 2012</time>, <span>&lt;<a href="https://www.rfc-editor.org/info/rfc6750">https://www.rfc-editor.org/info/rfc6750</a>&gt;</span>. </dd>
<dt id="RFC7159">[RFC7159]</dt>
<dd>
<span class="refAuthor">Bray, T., Ed.</span>, <span class="refTitle">"The JavaScript Object Notation (JSON) Data Interchange Format"</span>, <span class="seriesInfo">RFC 7159</span>, <span class="seriesInfo">DOI 10.17487/RFC7159</span>, <time datetime="2014-03">March 2014</time>, <span>&lt;<a href="https://www.rfc-editor.org/info/rfc7159">https://www.rfc-editor.org/info/rfc7159</a>&gt;</span>. </dd>
<dt id="RFC7231">[RFC7231]</dt>
<dd>
<span class="refAuthor">Fielding, R., Ed.</span><span class="refAuthor"> and J. Reschke, Ed.</span>, <span class="refTitle">"Hypertext Transfer Protocol (HTTP/1.1): Semantics and Content"</span>, <span class="seriesInfo">RFC 7231</span>, <span class="seriesInfo">DOI 10.17487/RFC7231</span>, <time datetime="2014-06">June 2014</time>, <span>&lt;<a href="https://www.rfc-editor.org/info/rfc7231">https://www.rfc-editor.org/info/rfc7231</a>&gt;</span>. </dd>
<dt id="RFC7234">[RFC7234]</dt>
<dd>
<span class="refAuthor">Fielding, R., Ed.</span><span class="refAuthor">, Nottingham, M., Ed.</span><span class="refAuthor">, and J. Reschke, Ed.</span>, <span class="refTitle">"Hypertext Transfer Protocol (HTTP/1.1): Caching"</span>, <span class="seriesInfo">RFC 7234</span>, <span class="seriesInfo">DOI 10.17487/RFC7234</span>, <time datetime="2014-06">June 2014</time>, <span>&lt;<a href="https://www.rfc-editor.org/info/rfc7234">https://www.rfc-editor.org/info/rfc7234</a>&gt;</span>. </dd>
<dt id="RFC7595">[RFC7595]</dt>
<dd>
<span class="refAuthor">Thaler, D., Ed.</span><span class="refAuthor">, Hansen, T.</span><span class="refAuthor">, and T. Hardie</span>, <span class="refTitle">"Guidelines and Registration Procedures for URI Schemes"</span>, <span class="seriesInfo">BCP 35</span>, <span class="seriesInfo">RFC 7595</span>, <span class="seriesInfo">DOI 10.17487/RFC7595</span>, <time datetime="2015-06">June 2015</time>, <span>&lt;<a href="https://www.rfc-editor.org/info/rfc7595">https://www.rfc-editor.org/info/rfc7595</a>&gt;</span>. </dd>
<dt id="RFC8174">[RFC8174]</dt>
<dd>
<span class="refAuthor">Leiba, B.</span>, <span class="refTitle">"Ambiguity of Uppercase vs Lowercase in RFC 2119 Key Words"</span>, <span class="seriesInfo">BCP 14</span>, <span class="seriesInfo">RFC 8174</span>, <span class="seriesInfo">DOI 10.17487/RFC8174</span>, <time datetime="2017-05">May 2017</time>, <span>&lt;<a href="https://www.rfc-editor.org/info/rfc8174">https://www.rfc-editor.org/info/rfc8174</a>&gt;</span>. </dd>
<dt id="RFC8252">[RFC8252]</dt>
<dd>
<span class="refAuthor">Denniss, W.</span><span class="refAuthor"> and J. Bradley</span>, <span class="refTitle">"OAuth 2.0 for Native Apps"</span>, <span class="seriesInfo">BCP 212</span>, <span class="seriesInfo">RFC 8252</span>, <span class="seriesInfo">DOI 10.17487/RFC8252</span>, <time datetime="2017-10">October 2017</time>, <span>&lt;<a href="https://www.rfc-editor.org/info/rfc8252">https://www.rfc-editor.org/info/rfc8252</a>&gt;</span>. </dd>
<dt id="RFC8446">[RFC8446]</dt>
<dd>
<span class="refAuthor">Rescorla, E.</span>, <span class="refTitle">"The Transport Layer Security (TLS) Protocol Version 1.3"</span>, <span class="seriesInfo">RFC 8446</span>, <span class="seriesInfo">DOI 10.17487/RFC8446</span>, <time datetime="2018-08">August 2018</time>, <span>&lt;<a href="https://www.rfc-editor.org/info/rfc8446">https://www.rfc-editor.org/info/rfc8446</a>&gt;</span>. </dd>
<dt id="USASCII">[USASCII]</dt>
<dd>
<span class="refAuthor">Institute, A.N.S.</span>, <span class="refTitle">"Coded Character Set -- 7-bit American Standard Code for Information Interchange, ANSI X3.4"</span>, <time datetime="1986">1986</time>. </dd>
<dt id="W3C.REC-html401-19991224">[W3C.REC-html401-19991224]</dt>
<dd>
<span class="refAuthor">Raggett, D.</span><span class="refAuthor">, Hors, A.</span><span class="refAuthor">, and I. Jacobs</span>, <span class="refTitle">"HTML 4.01 Specification"</span>, <span class="seriesInfo">World Wide Web Consortium Recommendation REC-html401-19991224</span>, <time datetime="1999-12-24">24 December 1999</time>, <span>&lt;<a href="http://www.w3.org/TR/1999/REC-html401-19991224">http://www.w3.org/TR/1999/REC-html401-19991224</a>&gt;</span>. </dd>
<dt id="W3C.REC-xml-20081126">[W3C.REC-xml-20081126]</dt>
<dd>
<span class="refAuthor">Bray, T.</span><span class="refAuthor">, Paoli, J.</span><span class="refAuthor">, Sperberg-McQueen, M.</span><span class="refAuthor">, Maler, E.</span><span class="refAuthor">, and F. Yergeau</span>, <span class="refTitle">"Extensible Markup Language (XML) 1.0 (Fifth Edition)"</span>, <span class="seriesInfo">World Wide Web Consortium Recommendation REC-xml-20081126</span>, <time datetime="2008-11-26">26 November 2008</time>, <span>&lt;<a href="http://www.w3.org/TR/2008/REC-xml-20081126">http://www.w3.org/TR/2008/REC-xml-20081126</a>&gt;</span>. </dd>
</dl>
</section>
<section id="section-14.2">
        <h3 id="name-informative-references">
<a href="#section-14.2" class="section-number selfRef">14.2. </a><a href="#name-informative-references" class="section-name selfRef">Informative References</a>
        </h3>
<dl class="references">
<dt id="CSP-2">[CSP-2]</dt>
<dd>
<span class="refTitle">"Content Security Policy Level 2"</span>, <time datetime="2016-12">December 2016</time>, <span>&lt;<a href="https://www.w3.org/TR/CSP2">https://www.w3.org/TR/CSP2</a>&gt;</span>. </dd>
<dt id="I-D.bradley-oauth-jwt-encoded-state">[I-D.bradley-oauth-jwt-encoded-state]</dt>
<dd>
<span class="refAuthor">Bradley, J.</span><span class="refAuthor">, Lodderstedt, T.</span><span class="refAuthor">, and H. Zandbelt</span>, <span class="refTitle">"Encoding claims in the OAuth 2 state parameter using a JWT"</span>, <span class="refContent">Work in Progress</span>, <span class="seriesInfo">Internet-Draft, draft-bradley-oauth-jwt-encoded-state-09</span>, <time datetime="2018-11-04">4 November 2018</time>, <span>&lt;<a href="http://www.ietf.org/internet-drafts/draft-bradley-oauth-jwt-encoded-state-09.txt">http://www.ietf.org/internet-drafts/draft-bradley-oauth-jwt-encoded-state-09.txt</a>&gt;</span>. </dd>
<dt id="I-D.ietf-oauth-access-token-jwt">[I-D.ietf-oauth-access-token-jwt]</dt>
<dd>
<span class="refAuthor">Bertocci, V.</span>, <span class="refTitle">"JSON Web Token (JWT) Profile for OAuth 2.0 Access Tokens"</span>, <span class="refContent">Work in Progress</span>, <span class="seriesInfo">Internet-Draft, draft-ietf-oauth-access-token-jwt-07</span>, <time datetime="2020-04-27">27 April 2020</time>, <span>&lt;<a href="http://www.ietf.org/internet-drafts/draft-ietf-oauth-access-token-jwt-07.txt">http://www.ietf.org/internet-drafts/draft-ietf-oauth-access-token-jwt-07.txt</a>&gt;</span>. </dd>
<dt id="I-D.ietf-oauth-browser-based-apps">[I-D.ietf-oauth-browser-based-apps]</dt>
<dd>
<span class="refAuthor">Parecki, A.</span><span class="refAuthor"> and D. Waite</span>, <span class="refTitle">"OAuth 2.0 for Browser-Based Apps"</span>, <span class="refContent">Work in Progress</span>, <span class="seriesInfo">Internet-Draft, draft-ietf-oauth-browser-based-apps-06</span>, <time datetime="2020-04-05">5 April 2020</time>, <span>&lt;<a href="http://www.ietf.org/internet-drafts/draft-ietf-oauth-browser-based-apps-06.txt">http://www.ietf.org/internet-drafts/draft-ietf-oauth-browser-based-apps-06.txt</a>&gt;</span>. </dd>
<dt id="I-D.ietf-oauth-par">[I-D.ietf-oauth-par]</dt>
<dd>
<span class="refAuthor">Lodderstedt, T.</span><span class="refAuthor">, Campbell, B.</span><span class="refAuthor">, Sakimura, N.</span><span class="refAuthor">, Tonge, D.</span><span class="refAuthor">, and F. Skokan</span>, <span class="refTitle">"OAuth 2.0 Pushed Authorization Requests"</span>, <span class="refContent">Work in Progress</span>, <span class="seriesInfo">Internet-Draft, draft-ietf-oauth-par-01</span>, <time datetime="2020-02-18">18 February 2020</time>, <span>&lt;<a href="http://www.ietf.org/internet-drafts/draft-ietf-oauth-par-01.txt">http://www.ietf.org/internet-drafts/draft-ietf-oauth-par-01.txt</a>&gt;</span>. </dd>
<dt id="I-D.ietf-oauth-rar">[I-D.ietf-oauth-rar]</dt>
<dd>
<span class="refAuthor">Lodderstedt, T.</span><span class="refAuthor">, Richer, J.</span><span class="refAuthor">, and B. Campbell</span>, <span class="refTitle">"OAuth 2.0 Rich Authorization Requests"</span>, <span class="refContent">Work in Progress</span>, <span class="seriesInfo">Internet-Draft, draft-ietf-oauth-rar-01</span>, <time datetime="2020-02-19">19 February 2020</time>, <span>&lt;<a href="http://www.ietf.org/internet-drafts/draft-ietf-oauth-rar-01.txt">http://www.ietf.org/internet-drafts/draft-ietf-oauth-rar-01.txt</a>&gt;</span>. </dd>
<dt id="I-D.ietf-oauth-token-binding">[I-D.ietf-oauth-token-binding]</dt>
<dd>
<span class="refAuthor">Jones, M.</span><span class="refAuthor">, Campbell, B.</span><span class="refAuthor">, Bradley, J.</span><span class="refAuthor">, and W. Denniss</span>, <span class="refTitle">"OAuth 2.0 Token Binding"</span>, <span class="refContent">Work in Progress</span>, <span class="seriesInfo">Internet-Draft, draft-ietf-oauth-token-binding-08</span>, <time datetime="2018-10-19">19 October 2018</time>, <span>&lt;<a href="http://www.ietf.org/internet-drafts/draft-ietf-oauth-token-binding-08.txt">http://www.ietf.org/internet-drafts/draft-ietf-oauth-token-binding-08.txt</a>&gt;</span>. </dd>
<dt id="NIST800-63">[NIST800-63]</dt>
<dd>
<span class="refAuthor">Burr, W.</span><span class="refAuthor">, Dodson, D.</span><span class="refAuthor">, Newton, E.</span><span class="refAuthor">, Perlner, R.</span><span class="refAuthor">, Polk, T.</span><span class="refAuthor">, Gupta, S.</span><span class="refAuthor">, and E. Nabbus</span>, <span class="refTitle">"NIST Special Publication 800-63-1, INFORMATION SECURITY"</span>, <time datetime="2011-12">December 2011</time>, <span>&lt;<a href="http://csrc.nist.gov/publications/">http://csrc.nist.gov/publications/</a>&gt;</span>. </dd>
<dt id="OMAP">[OMAP]</dt>
<dd>
<span class="refAuthor">Huff, J.</span><span class="refAuthor">, Schlacht, D.</span><span class="refAuthor">, Nadalin, A.</span><span class="refAuthor">, Simmons, J.</span><span class="refAuthor">, Rosenberg, P.</span><span class="refAuthor">, Madsen, P.</span><span class="refAuthor">, Ace, T.</span><span class="refAuthor">, Rickelton-Abdi, C.</span><span class="refAuthor">, and B. Boyer</span>, <span class="refTitle">"Online Multimedia Authorization Protocol: An Industry Standard for Authorized Access to Internet Multimedia Resources"</span>, <time datetime="2012-04">April 2012</time>, <span>&lt;<a href="https://www.oatc.us/Standards/Download-Standards">https://www.oatc.us/Standards/Download-Standards</a>&gt;</span>. </dd>
<dt id="OpenID">[OpenID]</dt>
<dd>
<span class="refAuthor">Sakimora, N.</span><span class="refAuthor">, Bradley, J.</span><span class="refAuthor">, Jones, M.</span><span class="refAuthor">, de Medeiros, B.</span><span class="refAuthor">, and C. Mortimore</span>, <span class="refTitle">"OpenID Connect Core 1.0"</span>, <time datetime="2014-11">November 2014</time>, <span>&lt;<a href="https://openiD.net/specs/openiD-connect-core-1_0.html">https://openiD.net/specs/openiD-connect-core-1_0.html</a>&gt;</span>. </dd>
<dt id="OpenID.Messages">[OpenID.Messages]</dt>
<dd>
<span class="refAuthor">Sakimura, N.</span><span class="refAuthor">, Bradley, J.</span><span class="refAuthor">, Jones, M.</span><span class="refAuthor">, de Medeiros, B.</span><span class="refAuthor">, Mortimore, C.</span><span class="refAuthor">, and E. Jay</span>, <span class="refTitle">"OpenID Connect Messages 1.0"</span>, <time datetime="2012-06">June 2012</time>, <span>&lt;<a href="http://openid.net/specs/openid-connect-messages-1_0.html">http://openid.net/specs/openid-connect-messages-1_0.html</a>&gt;</span>. </dd>
<dt id="owasp_redir">[owasp_redir]</dt>
<dd>
<span class="refTitle">"OWASP Cheat Sheet Series - Unvalidated Redirects and Forwards"</span>, <time datetime="2020">2020</time>, <span>&lt;<a href="https://cheatsheetseries.owasp.org/cheatsheets/Unvalidated_Redirects_and_Forwards_Cheat_Sheet.html">https://cheatsheetseries.owasp.org/cheatsheets/Unvalidated_Redirects_and_Forwards_Cheat_Sheet.html</a>&gt;</span>. </dd>
<dt id="RFC6265">[RFC6265]</dt>
<dd>
<span class="refAuthor">Barth, A.</span>, <span class="refTitle">"HTTP State Management Mechanism"</span>, <span class="seriesInfo">RFC 6265</span>, <span class="seriesInfo">DOI 10.17487/RFC6265</span>, <time datetime="2011-04">April 2011</time>, <span>&lt;<a href="https://www.rfc-editor.org/info/rfc6265">https://www.rfc-editor.org/info/rfc6265</a>&gt;</span>. </dd>
<dt id="RFC6819">[RFC6819]</dt>
<dd>
<span class="refAuthor">Lodderstedt, T., Ed.</span><span class="refAuthor">, McGloin, M.</span><span class="refAuthor">, and P. Hunt</span>, <span class="refTitle">"OAuth 2.0 Threat Model and Security Considerations"</span>, <span class="seriesInfo">RFC 6819</span>, <span class="seriesInfo">DOI 10.17487/RFC6819</span>, <time datetime="2013-01">January 2013</time>, <span>&lt;<a href="https://www.rfc-editor.org/info/rfc6819">https://www.rfc-editor.org/info/rfc6819</a>&gt;</span>. </dd>
<dt id="RFC7009">[RFC7009]</dt>
<dd>
<span class="refAuthor">Lodderstedt, T., Ed.</span><span class="refAuthor">, Dronia, S.</span><span class="refAuthor">, and M. Scurtescu</span>, <span class="refTitle">"OAuth 2.0 Token Revocation"</span>, <span class="seriesInfo">RFC 7009</span>, <span class="seriesInfo">DOI 10.17487/RFC7009</span>, <time datetime="2013-08">August 2013</time>, <span>&lt;<a href="https://www.rfc-editor.org/info/rfc7009">https://www.rfc-editor.org/info/rfc7009</a>&gt;</span>. </dd>
<dt id="RFC7230">[RFC7230]</dt>
<dd>
<span class="refAuthor">Fielding, R., Ed.</span><span class="refAuthor"> and J. Reschke, Ed.</span>, <span class="refTitle">"Hypertext Transfer Protocol (HTTP/1.1): Message Syntax and Routing"</span>, <span class="seriesInfo">RFC 7230</span>, <span class="seriesInfo">DOI 10.17487/RFC7230</span>, <time datetime="2014-06">June 2014</time>, <span>&lt;<a href="https://www.rfc-editor.org/info/rfc7230">https://www.rfc-editor.org/info/rfc7230</a>&gt;</span>. </dd>
<dt id="RFC7235">[RFC7235]</dt>
<dd>
<span class="refAuthor">Fielding, R., Ed.</span><span class="refAuthor"> and J. Reschke, Ed.</span>, <span class="refTitle">"Hypertext Transfer Protocol (HTTP/1.1): Authentication"</span>, <span class="seriesInfo">RFC 7235</span>, <span class="seriesInfo">DOI 10.17487/RFC7235</span>, <time datetime="2014-06">June 2014</time>, <span>&lt;<a href="https://www.rfc-editor.org/info/rfc7235">https://www.rfc-editor.org/info/rfc7235</a>&gt;</span>. </dd>
<dt id="RFC7519">[RFC7519]</dt>
<dd>
<span class="refAuthor">Jones, M.</span><span class="refAuthor">, Bradley, J.</span><span class="refAuthor">, and N. Sakimura</span>, <span class="refTitle">"JSON Web Token (JWT)"</span>, <span class="seriesInfo">RFC 7519</span>, <span class="seriesInfo">DOI 10.17487/RFC7519</span>, <time datetime="2015-05">May 2015</time>, <span>&lt;<a href="https://www.rfc-editor.org/info/rfc7519">https://www.rfc-editor.org/info/rfc7519</a>&gt;</span>. </dd>
<dt id="RFC7591">[RFC7591]</dt>
<dd>
<span class="refAuthor">Richer, J., Ed.</span><span class="refAuthor">, Jones, M.</span><span class="refAuthor">, Bradley, J.</span><span class="refAuthor">, Machulak, M.</span><span class="refAuthor">, and P. Hunt</span>, <span class="refTitle">"OAuth 2.0 Dynamic Client Registration Protocol"</span>, <span class="seriesInfo">RFC 7591</span>, <span class="seriesInfo">DOI 10.17487/RFC7591</span>, <time datetime="2015-07">July 2015</time>, <span>&lt;<a href="https://www.rfc-editor.org/info/rfc7591">https://www.rfc-editor.org/info/rfc7591</a>&gt;</span>. </dd>
<dt id="RFC7592">[RFC7592]</dt>
<dd>
<span class="refAuthor">Richer, J., Ed.</span><span class="refAuthor">, Jones, M.</span><span class="refAuthor">, Bradley, J.</span><span class="refAuthor">, and M. Machulak</span>, <span class="refTitle">"OAuth 2.0 Dynamic Client Registration Management Protocol"</span>, <span class="seriesInfo">RFC 7592</span>, <span class="seriesInfo">DOI 10.17487/RFC7592</span>, <time datetime="2015-07">July 2015</time>, <span>&lt;<a href="https://www.rfc-editor.org/info/rfc7592">https://www.rfc-editor.org/info/rfc7592</a>&gt;</span>. </dd>
<dt id="RFC7636">[RFC7636]</dt>
<dd>
<span class="refAuthor">Sakimura, N., Ed.</span><span class="refAuthor">, Bradley, J.</span><span class="refAuthor">, and N. Agarwal</span>, <span class="refTitle">"Proof Key for Code Exchange by OAuth Public Clients"</span>, <span class="seriesInfo">RFC 7636</span>, <span class="seriesInfo">DOI 10.17487/RFC7636</span>, <time datetime="2015-09">September 2015</time>, <span>&lt;<a href="https://www.rfc-editor.org/info/rfc7636">https://www.rfc-editor.org/info/rfc7636</a>&gt;</span>. </dd>
<dt id="RFC7662">[RFC7662]</dt>
<dd>
<span class="refAuthor">Richer, J., Ed.</span>, <span class="refTitle">"OAuth 2.0 Token Introspection"</span>, <span class="seriesInfo">RFC 7662</span>, <span class="seriesInfo">DOI 10.17487/RFC7662</span>, <time datetime="2015-10">October 2015</time>, <span>&lt;<a href="https://www.rfc-editor.org/info/rfc7662">https://www.rfc-editor.org/info/rfc7662</a>&gt;</span>. </dd>
<dt id="RFC8414">[RFC8414]</dt>
<dd>
<span class="refAuthor">Jones, M.</span><span class="refAuthor">, Sakimura, N.</span><span class="refAuthor">, and J. Bradley</span>, <span class="refTitle">"OAuth 2.0 Authorization Server Metadata"</span>, <span class="seriesInfo">RFC 8414</span>, <span class="seriesInfo">DOI 10.17487/RFC8414</span>, <time datetime="2018-06">June 2018</time>, <span>&lt;<a href="https://www.rfc-editor.org/info/rfc8414">https://www.rfc-editor.org/info/rfc8414</a>&gt;</span>. </dd>
<dt id="RFC8628">[RFC8628]</dt>
<dd>
<span class="refAuthor">Denniss, W.</span><span class="refAuthor">, Bradley, J.</span><span class="refAuthor">, Jones, M.</span><span class="refAuthor">, and H. Tschofenig</span>, <span class="refTitle">"OAuth 2.0 Device Authorization Grant"</span>, <span class="seriesInfo">RFC 8628</span>, <span class="seriesInfo">DOI 10.17487/RFC8628</span>, <time datetime="2019-08">August 2019</time>, <span>&lt;<a href="https://www.rfc-editor.org/info/rfc8628">https://www.rfc-editor.org/info/rfc8628</a>&gt;</span>. </dd>
<dt id="RFC8705">[RFC8705]</dt>
<dd>
<span class="refAuthor">Campbell, B.</span><span class="refAuthor">, Bradley, J.</span><span class="refAuthor">, Sakimura, N.</span><span class="refAuthor">, and T. Lodderstedt</span>, <span class="refTitle">"OAuth 2.0 Mutual-TLS Client Authentication and Certificate-Bound Access Tokens"</span>, <span class="seriesInfo">RFC 8705</span>, <span class="seriesInfo">DOI 10.17487/RFC8705</span>, <time datetime="2020-02">February 2020</time>, <span>&lt;<a href="https://www.rfc-editor.org/info/rfc8705">https://www.rfc-editor.org/info/rfc8705</a>&gt;</span>. </dd>
<dt id="RFC8707">[RFC8707]</dt>
<dd>
<span class="refAuthor">Campbell, B.</span><span class="refAuthor">, Bradley, J.</span><span class="refAuthor">, and H. Tschofenig</span>, <span class="refTitle">"Resource Indicators for OAuth 2.0"</span>, <span class="seriesInfo">RFC 8707</span>, <span class="seriesInfo">DOI 10.17487/RFC8707</span>, <time datetime="2020-02">February 2020</time>, <span>&lt;<a href="https://www.rfc-editor.org/info/rfc8707">https://www.rfc-editor.org/info/rfc8707</a>&gt;</span>. </dd>
</dl>
</section>
</section>
<div id="augmented-backus-naur-form-abnf-syntax">
<section id="section-appendix.a">
      <h2 id="name-augmented-backus-naur-form-">
<a href="#section-appendix.a" class="section-number selfRef">Appendix A. </a><a href="#name-augmented-backus-naur-form-" class="section-name selfRef">Augmented Backus-Naur Form (ABNF) Syntax</a>
      </h2>
<p id="section-appendix.a-1">This section provides Augmented Backus-Naur Form (ABNF) syntax
descriptions for the elements defined in this specification using the
notation of <span>[<a href="#RFC5234" class="xref">RFC5234</a>]</span>.  The ABNF below is defined in terms of Unicode
code points <span>[<a href="#W3C.REC-xml-20081126" class="xref">W3C.REC-xml-20081126</a>]</span>; these characters are typically
encoded in UTF-8.  Elements are presented in the order first defined.<a href="#section-appendix.a-1" class="pilcrow">¶</a></p>
<p id="section-appendix.a-2">Some of the definitions that follow use the "URI-reference"
definition from <span>[<a href="#RFC3986" class="xref">RFC3986</a>]</span>.<a href="#section-appendix.a-2" class="pilcrow">¶</a></p>
<p id="section-appendix.a-3">Some of the definitions that follow use these common definitions:<a href="#section-appendix.a-3" class="pilcrow">¶</a></p>
<div class="artwork art-text alignLeft" id="section-appendix.a-4">
<pre>
VSCHAR     = %x20-7E
NQCHAR     = %x21 / %x23-5B / %x5D-7E
NQSCHAR    = %x20-21 / %x23-5B / %x5D-7E
UNICODECHARNOCRLF = %x09 /%x20-7E / %x80-D7FF /
                    %xE000-FFFD / %x10000-10FFFF
</pre><a href="#section-appendix.a-4" class="pilcrow">¶</a>
</div>
<p id="section-appendix.a-5">(The UNICODECHARNOCRLF definition is based upon the Char definition
in Section 2.2 of <span>[<a href="#W3C.REC-xml-20081126" class="xref">W3C.REC-xml-20081126</a>]</span>, but omitting the Carriage
Return and Linefeed characters.)<a href="#section-appendix.a-5" class="pilcrow">¶</a></p>
<div id="clientid-syntax">
<section id="section-a.1">
        <h2 id="name-client_id-syntax">
<a href="#section-a.1" class="section-number selfRef">A.1. </a><a href="#name-client_id-syntax" class="section-name selfRef">"client_id" Syntax</a>
        </h2>
<p id="section-a.1-1">The <code>client_id</code> element is defined in <a href="#client-password" class="xref">Section 2.3.1</a>:<a href="#section-a.1-1" class="pilcrow">¶</a></p>
<div class="artwork art-text alignLeft" id="section-a.1-2">
<pre>
client-id     = *VSCHAR
</pre><a href="#section-a.1-2" class="pilcrow">¶</a>
</div>
</section>
</div>
<div id="clientsecret-syntax">
<section id="section-a.2">
        <h2 id="name-client_secret-syntax">
<a href="#section-a.2" class="section-number selfRef">A.2. </a><a href="#name-client_secret-syntax" class="section-name selfRef">"client_secret" Syntax</a>
        </h2>
<p id="section-a.2-1">The <code>client_secret</code> element is defined in <a href="#client-password" class="xref">Section 2.3.1</a>:<a href="#section-a.2-1" class="pilcrow">¶</a></p>
<div class="artwork art-text alignLeft" id="section-a.2-2">
<pre>
client-secret = *VSCHAR
</pre><a href="#section-a.2-2" class="pilcrow">¶</a>
</div>
</section>
</div>
<div id="responsetype-syntax">
<section id="section-a.3">
        <h2 id="name-response_type-syntax">
<a href="#section-a.3" class="section-number selfRef">A.3. </a><a href="#name-response_type-syntax" class="section-name selfRef">"response_type" Syntax</a>
        </h2>
<p id="section-a.3-1">The <code>response_type</code> element is defined in <a href="#response-type" class="xref">Section 3.1.1</a> and <a href="#new-response-types" class="xref">Section 8.4</a>:<a href="#section-a.3-1" class="pilcrow">¶</a></p>
<div class="artwork art-text alignLeft" id="section-a.3-2">
<pre>
response-type = response-name *( SP response-name )
response-name = 1*response-char
response-char = "_" / DIGIT / ALPHA
</pre><a href="#section-a.3-2" class="pilcrow">¶</a>
</div>
</section>
</div>
<div id="scope-syntax">
<section id="section-a.4">
        <h2 id="name-scope-syntax">
<a href="#section-a.4" class="section-number selfRef">A.4. </a><a href="#name-scope-syntax" class="section-name selfRef">"scope" Syntax</a>
        </h2>
<p id="section-a.4-1">The <code>scope</code> element is defined in <a href="#access-token-scope" class="xref">Section 3.3</a>:<a href="#section-a.4-1" class="pilcrow">¶</a></p>
<div class="artwork art-text alignLeft" id="section-a.4-2">
<pre>
 scope       = scope-token *( SP scope-token )
 scope-token = 1*NQCHAR
</pre><a href="#section-a.4-2" class="pilcrow">¶</a>
</div>
</section>
</div>
<div id="state-syntax">
<section id="section-a.5">
        <h2 id="name-state-syntax">
<a href="#section-a.5" class="section-number selfRef">A.5. </a><a href="#name-state-syntax" class="section-name selfRef">"state" Syntax</a>
        </h2>
<p id="section-a.5-1">The <code>state</code> element is defined in <a href="#authorization-request" class="xref">Section 4.1.1</a>, <a href="#authorization-response" class="xref">Section 4.1.2</a>, and <a href="#authorization-code-error-response" class="xref">Section 4.1.2.1</a>:<a href="#section-a.5-1" class="pilcrow">¶</a></p>
<div class="artwork art-text alignLeft" id="section-a.5-2">
<pre>
 state      = 1*VSCHAR
</pre><a href="#section-a.5-2" class="pilcrow">¶</a>
</div>
</section>
</div>
<div id="redirecturi-syntax">
<section id="section-a.6">
        <h2 id="name-redirect_uri-syntax">
<a href="#section-a.6" class="section-number selfRef">A.6. </a><a href="#name-redirect_uri-syntax" class="section-name selfRef">"redirect_uri" Syntax</a>
        </h2>
<p id="section-a.6-1">The <code>redirect_uri</code> element is defined in <a href="#authorization-request" class="xref">Section 4.1.1</a>, and <a href="#access-token-request" class="xref">Section 4.1.3</a>:<a href="#section-a.6-1" class="pilcrow">¶</a></p>
<div class="artwork art-text alignLeft" id="section-a.6-2">
<pre>
 redirect-uri      = URI-reference
</pre><a href="#section-a.6-2" class="pilcrow">¶</a>
</div>
</section>
</div>
<div id="error-syntax">
<section id="section-a.7">
        <h2 id="name-error-syntax">
<a href="#section-a.7" class="section-number selfRef">A.7. </a><a href="#name-error-syntax" class="section-name selfRef">"error" Syntax</a>
        </h2>
<p id="section-a.7-1">The <code>error</code> element is defined in Sections <a href="#authorization-code-error-response" class="xref">Section 4.1.2.1</a>, <a href="#access-token-error-response" class="xref">Section 5.2</a>,
7.2, and 8.5:<a href="#section-a.7-1" class="pilcrow">¶</a></p>
<div class="artwork art-text alignLeft" id="section-a.7-2">
<pre>
 error             = 1*NQSCHAR
</pre><a href="#section-a.7-2" class="pilcrow">¶</a>
</div>
</section>
</div>
<div id="errordescription-syntax">
<section id="section-a.8">
        <h2 id="name-error_description-syntax">
<a href="#section-a.8" class="section-number selfRef">A.8. </a><a href="#name-error_description-syntax" class="section-name selfRef">"error_description" Syntax</a>
        </h2>
<p id="section-a.8-1">The <code>error_description</code> element is defined in Sections <a href="#authorization-code-error-response" class="xref">Section 4.1.2.1</a>,
<a href="#access-token-error-response" class="xref">Section 5.2</a>, and <a href="#error-response" class="xref">Section 7.3</a>:<a href="#section-a.8-1" class="pilcrow">¶</a></p>
<div class="artwork art-text alignLeft" id="section-a.8-2">
<pre>
 error-description = 1*NQSCHAR
</pre><a href="#section-a.8-2" class="pilcrow">¶</a>
</div>
</section>
</div>
<div id="erroruri-syntax">
<section id="section-a.9">
        <h2 id="name-error_uri-syntax">
<a href="#section-a.9" class="section-number selfRef">A.9. </a><a href="#name-error_uri-syntax" class="section-name selfRef">"error_uri" Syntax</a>
        </h2>
<p id="section-a.9-1">The <code>error_uri</code> element is defined in Sections <a href="#authorization-code-error-response" class="xref">Section 4.1.2.1</a>, <a href="#access-token-error-response" class="xref">Section 5.2</a>,
and 7.2:<a href="#section-a.9-1" class="pilcrow">¶</a></p>
<div class="artwork art-text alignLeft" id="section-a.9-2">
<pre>
 error-uri         = URI-reference
</pre><a href="#section-a.9-2" class="pilcrow">¶</a>
</div>
</section>
</div>
<div id="granttype-syntax">
<section id="section-a.10">
        <h2 id="name-grant_type-syntax">
<a href="#section-a.10" class="section-number selfRef">A.10. </a><a href="#name-grant_type-syntax" class="section-name selfRef">"grant_type" Syntax</a>
        </h2>
<p id="section-a.10-1">The <code>grant_type</code> element is defined in Sections <a href="#access-token-request" class="xref">Section 4.1.3</a>, <a href="#access-token-response" class="xref">Section 4.2.3</a>, <a href="#client-credentials-access-token-request" class="xref">Section 4.2.2</a>,
<a href="#extension-grants" class="xref">Section 4.3</a>, and <a href="#refreshing-an-access-token" class="xref">Section 6</a>:<a href="#section-a.10-1" class="pilcrow">¶</a></p>
<div class="artwork art-text alignLeft" id="section-a.10-2">
<pre>
 grant-type = grant-name / URI-reference
 grant-name = 1*name-char
 name-char  = "-" / "." / "_" / DIGIT / ALPHA
</pre><a href="#section-a.10-2" class="pilcrow">¶</a>
</div>
</section>
</div>
<div id="code-syntax">
<section id="section-a.11">
        <h2 id="name-code-syntax">
<a href="#section-a.11" class="section-number selfRef">A.11. </a><a href="#name-code-syntax" class="section-name selfRef">"code" Syntax</a>
        </h2>
<p id="section-a.11-1">The <code>code</code> element is defined in <a href="#access-token-request" class="xref">Section 4.1.3</a>:<a href="#section-a.11-1" class="pilcrow">¶</a></p>
<div class="artwork art-text alignLeft" id="section-a.11-2">
<pre>
 code       = 1*VSCHAR
</pre><a href="#section-a.11-2" class="pilcrow">¶</a>
</div>
</section>
</div>
<div id="accesstoken-syntax">
<section id="section-a.12">
        <h2 id="name-access_token-syntax">
<a href="#section-a.12" class="section-number selfRef">A.12. </a><a href="#name-access_token-syntax" class="section-name selfRef">"access_token" Syntax</a>
        </h2>
<p id="section-a.12-1">The <code>access_token</code> element is defined in <a href="#access-token-response" class="xref">Section 4.2.3</a> and <a href="#access-token-successful-response" class="xref">Section 5.1</a>:<a href="#section-a.12-1" class="pilcrow">¶</a></p>
<div class="artwork art-text alignLeft" id="section-a.12-2">
<pre>
 access-token = 1*VSCHAR
</pre><a href="#section-a.12-2" class="pilcrow">¶</a>
</div>
</section>
</div>
<div id="tokentype-syntax">
<section id="section-a.13">
        <h2 id="name-token_type-syntax">
<a href="#section-a.13" class="section-number selfRef">A.13. </a><a href="#name-token_type-syntax" class="section-name selfRef">"token_type" Syntax</a>
        </h2>
<p id="section-a.13-1">The <code>token_type</code> element is defined in <a href="#access-token-successful-response" class="xref">Section 5.1</a>, and <a href="#defining-access-token-types" class="xref">Section 8.1</a>:<a href="#section-a.13-1" class="pilcrow">¶</a></p>
<div class="artwork art-text alignLeft" id="section-a.13-2">
<pre>
 token-type = type-name / URI-reference
 type-name  = 1*name-char
 name-char  = "-" / "." / "_" / DIGIT / ALPHA
</pre><a href="#section-a.13-2" class="pilcrow">¶</a>
</div>
</section>
</div>
<div id="expiresin-syntax">
<section id="section-a.14">
        <h2 id="name-expires_in-syntax">
<a href="#section-a.14" class="section-number selfRef">A.14. </a><a href="#name-expires_in-syntax" class="section-name selfRef">"expires_in" Syntax</a>
        </h2>
<p id="section-a.14-1">The <code>expires_in</code> element is defined in <a href="#access-token-successful-response" class="xref">Section 5.1</a>:<a href="#section-a.14-1" class="pilcrow">¶</a></p>
<div class="artwork art-text alignLeft" id="section-a.14-2">
<pre>
 expires-in = 1*DIGIT
</pre><a href="#section-a.14-2" class="pilcrow">¶</a>
</div>
</section>
</div>
<div id="refreshtoken-syntax">
<section id="section-a.15">
        <h2 id="name-refresh_token-syntax">
<a href="#section-a.15" class="section-number selfRef">A.15. </a><a href="#name-refresh_token-syntax" class="section-name selfRef">"refresh_token" Syntax</a>
        </h2>
<p id="section-a.15-1">The <code>refresh_token</code> element is defined in <a href="#access-token-successful-response" class="xref">Section 5.1</a> and <a href="#refreshing-an-access-token" class="xref">Section 6</a>:<a href="#section-a.15-1" class="pilcrow">¶</a></p>
<div class="artwork art-text alignLeft" id="section-a.15-2">
<pre>
 refresh-token = 1*VSCHAR
</pre><a href="#section-a.15-2" class="pilcrow">¶</a>
</div>
</section>
</div>
<div id="endpoint-parameter-syntax">
<section id="section-a.16">
        <h2 id="name-endpoint-parameter-syntax">
<a href="#section-a.16" class="section-number selfRef">A.16. </a><a href="#name-endpoint-parameter-syntax" class="section-name selfRef">Endpoint Parameter Syntax</a>
        </h2>
<p id="section-a.16-1">The syntax for new endpoint parameters is defined in <a href="#defining-new-endpoint-parameters" class="xref">Section 8.2</a>:<a href="#section-a.16-1" class="pilcrow">¶</a></p>
<div class="artwork art-text alignLeft" id="section-a.16-2">
<pre>
 param-name = 1*name-char
 name-char  = "-" / "." / "_" / DIGIT / ALPHA
</pre><a href="#section-a.16-2" class="pilcrow">¶</a>
</div>
</section>
</div>
<div id="codeverifier-syntax">
<section id="section-a.17">
        <h2 id="name-code_verifier-syntax">
<a href="#section-a.17" class="section-number selfRef">A.17. </a><a href="#name-code_verifier-syntax" class="section-name selfRef">"code_verifier" Syntax</a>
        </h2>
<p id="section-a.17-1">ABNF for <code>code_verifier</code> is as follows.<a href="#section-a.17-1" class="pilcrow">¶</a></p>
<div class="artwork art-text alignLeft" id="section-a.17-2">
<pre>
code-verifier = 43*128unreserved
unreserved = ALPHA / DIGIT / "-" / "." / "_" / "~"
ALPHA = %x41-5A / %x61-7A
DIGIT = %x30-39
</pre><a href="#section-a.17-2" class="pilcrow">¶</a>
</div>
</section>
</div>
<div id="codechallenge-syntax">
<section id="section-a.18">
        <h2 id="name-code_challenge-syntax">
<a href="#section-a.18" class="section-number selfRef">A.18. </a><a href="#name-code_challenge-syntax" class="section-name selfRef">"code_challenge" Syntax</a>
        </h2>
<p id="section-a.18-1">ABNF for <code>code_challenge</code> is as follows.<a href="#section-a.18-1" class="pilcrow">¶</a></p>
<div class="artwork art-text alignLeft" id="section-a.18-2">
<pre>
code-challenge = 43*128unreserved
unreserved = ALPHA / DIGIT / "-" / "." / "_" / "~"
ALPHA = %x41-5A / %x61-7A
DIGIT = %x30-39
</pre><a href="#section-a.18-2" class="pilcrow">¶</a>
</div>
</section>
</div>
</section>
</div>
<div id="use-of-applicationx-www-form-urlencoded-media-type">
<section id="section-appendix.b">
      <h2 id="name-use-of-application-x-www-fo">
<a href="#section-appendix.b" class="section-number selfRef">Appendix B. </a><a href="#name-use-of-application-x-www-fo" class="section-name selfRef">Use of application/x-www-form-urlencoded Media Type</a>
      </h2>
<p id="section-appendix.b-1">At the time of publication of this specification, the
<code>application/x-www-form-urlencoded</code> media type was defined in
Section 17.13.4 of <span>[<a href="#W3C.REC-html401-19991224" class="xref">W3C.REC-html401-19991224</a>]</span> but not registered in
the IANA MIME Media Types registry
(<a href="http://www.iana.org/assignments/media-types">http://www.iana.org/assignments/media-types</a>).  Furthermore, that
definition is incomplete, as it does not consider non-US-ASCII
characters.<a href="#section-appendix.b-1" class="pilcrow">¶</a></p>
<p id="section-appendix.b-2">To address this shortcoming when generating payloads using this media
type, names and values MUST be encoded using the UTF-8 character
encoding scheme <span>[<a href="#RFC3629" class="xref">RFC3629</a>]</span> first; the resulting octet sequence then
needs to be further encoded using the escaping rules defined in
<span>[<a href="#W3C.REC-html401-19991224" class="xref">W3C.REC-html401-19991224</a>]</span>.<a href="#section-appendix.b-2" class="pilcrow">¶</a></p>
<p id="section-appendix.b-3">When parsing data from a payload using this media type, the names and
values resulting from reversing the name/value encoding consequently
need to be treated as octet sequences, to be decoded using the UTF-8
character encoding scheme.<a href="#section-appendix.b-3" class="pilcrow">¶</a></p>
<p id="section-appendix.b-4">For example, the value consisting of the six Unicode code points
(1) U+0020 (SPACE), (2) U+0025 (PERCENT SIGN),
(3) U+0026 (AMPERSAND), (4) U+002B (PLUS SIGN),
(5) U+00A3 (POUND SIGN), and (6) U+20AC (EURO SIGN) would be encoded
into the octet sequence below (using hexadecimal notation):<a href="#section-appendix.b-4" class="pilcrow">¶</a></p>
<div class="artwork art-text alignLeft" id="section-appendix.b-5">
<pre>
20 25 26 2B C2 A3 E2 82 AC
</pre><a href="#section-appendix.b-5" class="pilcrow">¶</a>
</div>
<p id="section-appendix.b-6">and then represented in the payload as:<a href="#section-appendix.b-6" class="pilcrow">¶</a></p>
<div class="artwork art-text alignLeft" id="section-appendix.b-7">
<pre>
+%25%26%2B%C2%A3%E2%82%AC
</pre><a href="#section-appendix.b-7" class="pilcrow">¶</a>
</div>
</section>
</div>
<div id="extensions">
<section id="section-appendix.c">
      <h2 id="name-extensions">
<a href="#section-appendix.c" class="section-number selfRef">Appendix C. </a><a href="#name-extensions" class="section-name selfRef">Extensions</a>
      </h2>
<p id="section-appendix.c-1">Below is a list of well-established extensions at the time of publication:<a href="#section-appendix.c-1" class="pilcrow">¶</a></p>
<ul>
<li id="section-appendix.c-2.1">
          <p id="section-appendix.c-2.1.1"><span>[<a href="#RFC8628" class="xref">RFC8628</a>]</span>: OAuth 2.0 Device Authorization Grant<a href="#section-appendix.c-2.1.1" class="pilcrow">¶</a></p>
<ul>
<li id="section-appendix.c-2.1.2.1">The Device Authorization Grant (formerly known as the Device Flow) is an extension that enables devices with no browser or limited input capability to obtain an access token. This is commonly used by smart TV apps, or devices like hardware video encoders that can stream video to a streaming video service.<a href="#section-appendix.c-2.1.2.1" class="pilcrow">¶</a>
</li>
</ul>
</li>
<li id="section-appendix.c-2.2">
          <p id="section-appendix.c-2.2.1"><span>[<a href="#RFC8414" class="xref">RFC8414</a>]</span>: Authorization Server Metadata<a href="#section-appendix.c-2.2.1" class="pilcrow">¶</a></p>
<ul>
<li id="section-appendix.c-2.2.2.1">Authorization Server Metadata (also known as OAuth Discovery) defines an endpoint clients can use to look up the information needed to interact with a particular OAuth server, such as the location of the authorization and token endpoints and the supported grant types.<a href="#section-appendix.c-2.2.2.1" class="pilcrow">¶</a>
</li>
</ul>
</li>
<li id="section-appendix.c-2.3">
          <p id="section-appendix.c-2.3.1"><span>[<a href="#RFC8707" class="xref">RFC8707</a>]</span>: Resource Indicators<a href="#section-appendix.c-2.3.1" class="pilcrow">¶</a></p>
<ul>
<li id="section-appendix.c-2.3.2.1">Provides a way for the client to explicitly signal to the authorization server where it intends to use the access token it is requesting.<a href="#section-appendix.c-2.3.2.1" class="pilcrow">¶</a>
</li>
</ul>
</li>
<li id="section-appendix.c-2.4">
          <p id="section-appendix.c-2.4.1"><span>[<a href="#RFC7591" class="xref">RFC7591</a>]</span>: Dynamic Client Registration<a href="#section-appendix.c-2.4.1" class="pilcrow">¶</a></p>
<ul>
<li id="section-appendix.c-2.4.2.1">Dynamic Client Registration provides a mechanism for programmatically registering clients with an authorization server.<a href="#section-appendix.c-2.4.2.1" class="pilcrow">¶</a>
</li>
</ul>
</li>
<li id="section-appendix.c-2.5">
          <p id="section-appendix.c-2.5.1"><span>[<a href="#RFC7592" class="xref">RFC7592</a>]</span>: Dynamic Client Management<a href="#section-appendix.c-2.5.1" class="pilcrow">¶</a></p>
<ul>
<li id="section-appendix.c-2.5.2.1">Dynamic Client Management provides a mechanism for updating dynamically registered client information.<a href="#section-appendix.c-2.5.2.1" class="pilcrow">¶</a>
</li>
</ul>
</li>
<li id="section-appendix.c-2.6">
          <p id="section-appendix.c-2.6.1"><span>[<a href="#I-D.ietf-oauth-access-token-jwt" class="xref">I-D.ietf-oauth-access-token-jwt</a>]</span>: JSON Web Token (JWT) Profile for OAuth 2.0 Access Tokens<a href="#section-appendix.c-2.6.1" class="pilcrow">¶</a></p>
<ul>
<li id="section-appendix.c-2.6.2.1">This specification defines a profile for issuing OAuth access tokens in JSON web token (JWT) format.<a href="#section-appendix.c-2.6.2.1" class="pilcrow">¶</a>
</li>
</ul>
</li>
<li id="section-appendix.c-2.7">
          <p id="section-appendix.c-2.7.1"><span>[<a href="#RFC8705" class="xref">RFC8705</a>]</span>: Mutual TLS<a href="#section-appendix.c-2.7.1" class="pilcrow">¶</a></p>
<ul>
<li id="section-appendix.c-2.7.2.1">Mutual TLS describes a mechanism of binding access tokens and refresh tokens to the clients they were issued to, as well as a client authentication mechanism, via TLS certificate authentication.<a href="#section-appendix.c-2.7.2.1" class="pilcrow">¶</a>
</li>
</ul>
</li>
<li id="section-appendix.c-2.8">
          <p id="section-appendix.c-2.8.1"><span>[<a href="#RFC7662" class="xref">RFC7662</a>]</span>: Token Introspection<a href="#section-appendix.c-2.8.1" class="pilcrow">¶</a></p>
<ul>
<li id="section-appendix.c-2.8.2.1">The Token Introspection extension defines a mechanism for resource servers to obtain information about access tokens.<a href="#section-appendix.c-2.8.2.1" class="pilcrow">¶</a>
</li>
</ul>
</li>
<li id="section-appendix.c-2.9">
          <p id="section-appendix.c-2.9.1"><span>[<a href="#RFC7009" class="xref">RFC7009</a>]</span>: Token Revocation<a href="#section-appendix.c-2.9.1" class="pilcrow">¶</a></p>
<ul>
<li id="section-appendix.c-2.9.2.1">The Token Revocation extension defines a mechanism for clients to indicate to the authorization server that an access token is no longer needed.<a href="#section-appendix.c-2.9.2.1" class="pilcrow">¶</a>
</li>
</ul>
</li>
<li id="section-appendix.c-2.10">
          <p id="section-appendix.c-2.10.1"><span>[<a href="#I-D.ietf-oauth-par" class="xref">I-D.ietf-oauth-par</a>]</span>: Pushed Authorization Requests<a href="#section-appendix.c-2.10.1" class="pilcrow">¶</a></p>
<ul>
<li id="section-appendix.c-2.10.2.1">The Pushed Authorization Requsts extension describes a technique of initiating an OAuth flow from the back channel, providing better security and more flexibility for building complex authorization requests.<a href="#section-appendix.c-2.10.2.1" class="pilcrow">¶</a>
</li>
</ul>
</li>
<li id="section-appendix.c-2.11">
          <p id="section-appendix.c-2.11.1"><span>[<a href="#I-D.ietf-oauth-rar" class="xref">I-D.ietf-oauth-rar</a>]</span>: Rich Authorization Requests<a href="#section-appendix.c-2.11.1" class="pilcrow">¶</a></p>
<ul>
<li id="section-appendix.c-2.11.2.1">Rich Authorization Requests specifies a new parameter <code>authorization_details</code> that is used to carry fine-grained authorization data in the OAuth authorization request.<a href="#section-appendix.c-2.11.2.1" class="pilcrow">¶</a>
</li>
</ul>
</li>
</ul>
</section>
</div>
<div id="acknowledgements">
<section id="section-appendix.d">
      <h2 id="name-acknowledgements">
<a href="#section-appendix.d" class="section-number selfRef">Appendix D. </a><a href="#name-acknowledgements" class="section-name selfRef">Acknowledgements</a>
      </h2>
<p id="section-appendix.d-1">TBD<a href="#section-appendix.d-1" class="pilcrow">¶</a></p>
</section>
</div>
<div id="authors-addresses">
<section id="section-appendix.e">
      <h2 id="name-authors-addresses">
<a href="#name-authors-addresses" class="section-name selfRef">Authors' Addresses</a>
      </h2>
<address class="vcard">
        <div dir="auto" class="left"><span class="fn nameRole">Dick Hardt</span></div>
<div dir="auto" class="left"><span class="org">SignIn.Org</span></div>
<div class="email">
<span>Email:</span>
<a href="mailto:dick.hardt@gmail.com" class="email">dick.hardt@gmail.com</a>
</div>
</address>
<address class="vcard">
        <div dir="auto" class="left"><span class="fn nameRole">Aaron Parecki</span></div>
<div dir="auto" class="left"><span class="org">Okta</span></div>
<div class="email">
<span>Email:</span>
<a href="mailto:aaron@parecki.com" class="email">aaron@parecki.com</a>
</div>
<div class="url">
<span>URI:</span>
<a href="https://aaronparecki.com" class="url">https://aaronparecki.com</a>
</div>
</address>
<address class="vcard">
        <div dir="auto" class="left"><span class="fn nameRole">Torsten Lodderstedt</span></div>
<div dir="auto" class="left"><span class="org">yes.com</span></div>
<div class="email">
<span>Email:</span>
<a href="mailto:torsten@lodderstedt.net" class="email">torsten@lodderstedt.net</a>
</div>
</address>
</section>
</div>
<script>const toc = document.getElementById("toc");
toc.querySelector("h2").addEventListener("click", e => {
  toc.classList.toggle("active");
});
toc.querySelector("nav").addEventListener("click", e => {
  toc.classList.remove("active");
});
</script>
</body>
</html>
