<?php
$page_section = "home";
$page_title = "OAuth — The Open Standard for Authorization";
require('../includes/_header.php');
?>

<div class="container">

  <p class="dt-intro">The open standard for authorization on the web. Find what you need:</p>

  <div class="decision-tree" id="dt"></div>

  <div class="mt-5">
    <p class="flow-heading">Popular Topics</p>
    <div class="topics-grid">
      <a href="/2/pkce/" class="topic-link">PKCE</a>
      <a href="/2/grant-types/authorization-code/" class="topic-link">Authorization Code</a>
      <a href="/2/grant-types/client-credentials/" class="topic-link">Client Credentials</a>
      <a href="/2/oauth-best-practice/" class="topic-link">Security Best Practice</a>
      <a href="/2/bearer-tokens/" class="topic-link">Bearer Tokens</a>
      <a href="/2/dpop/" class="topic-link">DPoP</a>
    </div>
  </div>

  <div style="text-align:center; margin: 40px auto; max-width: 300px;">
    <?php if(file_exists(__DIR__.'/../data/sponsors/home.php')) { include(__DIR__.'/../data/sponsors/home.php'); } ?>
  </div>

  <h4 class="mt-2 mb-3">Learn OAuth 2.0</h4>
  <div style="margin-bottom: 20px;">
    <iframe width="100%" height="400" src="https://www.youtube.com/embed/KT8ybowdyr0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>

</div>

<script>
var tree = {
  start: {
    question: "What are you trying to do?",
    options: [
      { label: "Add login to my app",
        hint: "Let users sign in with their existing accounts",
        next: "login" },
      { label: "Connect to a third-party API on a user’s behalf",
        hint: "Access a user’s data on another service",
        next: "app-type" },
      { label: "Protect my own API",
        hint: "Your service accepts and validates OAuth tokens",
        next: "api" },
      { label: "Service-to-service calls — no user involved",
        hint: "Backend talking to backend, machine-to-machine",
        next: "s2s" },
      { label: "Browse specs and documentation",
        hint: "Look up a specific protocol or extension",
        next: "browse" }
    ]
  },
  "app-type": {
    question: "What type of app are you building?",
    back: "start",
    options: [
      { label: "Server-side web app",
        hint: "Server renders the pages (Rails, Laravel, Django…)",
        next: "web-app" },
      { label: "Single-page app",
        hint: "Runs entirely in the browser (React, Vue, Angular…)",
        next: "spa" },
      { label: "Mobile or native app",
        hint: "iOS, Android, or desktop application",
        next: "native" },
      { label: "Smart TV or CLI tool",
        hint: "Device without a browser or with limited input",
        next: "device" }
    ]
  },
  "login": {
    type: "result",
    href: "/articles/authentication/",
    title: "You want OpenID Connect",
    body: "OAuth 2.0 handles authorization, not authentication. OpenID Connect is a thin identity layer built on top of OAuth 2.0 that adds user identity — it’s what powers “Sign in with Google” and similar flows. If you need to know who the user is, use OpenID Connect.",
    links: [
      { label: "OAuth 2.0 is not an authentication protocol", href: "/articles/authentication/" },
      { label: "OpenID Connect", href: "https://openid.net/connect/" },
      { label: "Getting Started", href: "/getting-started/" }
    ]
  },
  "web-app": {
    type: "result",
    href: "/2/grant-types/authorization-code/",
    title: "Use Authorization Code + PKCE",
    body: "The user is redirected to the authorization server, then back to your app with an authorization code. Your server exchanges the code for an access token — it never touches the browser. All clients should use PKCE.",
    links: [
      { label: "Authorization Code Grant", href: "/2/grant-types/authorization-code/" },
      { label: "PKCE", href: "/2/pkce/" }
    ]
  },
  "spa": {
    type: "result",
    href: "/2/browser-based-apps/",
    title: "Use Authorization Code + PKCE",
    body: "Single-page apps use the Authorization Code flow with PKCE. Never use the Implicit flow in new apps. The Browser-Based Apps guide covers recommended patterns for handling tokens safely in the browser.",
    links: [
      { label: "Authorization Code Grant", href: "/2/grant-types/authorization-code/" },
      { label: "PKCE", href: "/2/pkce/" },
      { label: "Browser-Based Apps", href: "/2/browser-based-apps/" }
    ]
  },
  "native": {
    type: "result",
    href: "/2/native-apps/",
    title: "Use Authorization Code + PKCE",
    body: "Mobile and native apps use the Authorization Code flow with PKCE. Since they can’t safely store a client secret, PKCE replaces it. The Native Apps guide covers iOS, Android, and desktop-specific guidance.",
    links: [
      { label: "Authorization Code Grant", href: "/2/grant-types/authorization-code/" },
      { label: "PKCE", href: "/2/pkce/" },
      { label: "Native Apps", href: "/2/native-apps/" }
    ]
  },
  "device": {
    type: "result",
    href: "/2/grant-types/device-code/",
    title: "Use Device Authorization Grant",
    body: "Smart TVs, CLIs, and devices without a browser use the Device Authorization Grant. The device displays a short code and URL; the user completes authorization on their phone or computer.",
    links: [
      { label: "Device Authorization Grant", href: "/2/grant-types/device-code/" }
    ]
  },
  "api": {
    type: "result",
    href: "/2/bearer-tokens/",
    title: "Start with Bearer Tokens",
    body: "Your API accepts access tokens from OAuth clients. The key concepts: how to validate Bearer Tokens, how to use scopes to control what a token can access, and how to use token introspection if tokens are opaque strings.",
    links: [
      { label: "Bearer Tokens", href: "/2/bearer-tokens/" },
      { label: "Defining Scopes", href: "/2/scope/" },
      { label: "Token Introspection", href: "/2/token-introspection/" }
    ]
  },
  "s2s": {
    type: "result",
    href: "/2/grant-types/client-credentials/",
    title: "Use Client Credentials",
    body: "The Client Credentials grant is used when there’s no user — your service calls another API on its own behalf. The client authenticates directly and receives an access token without any redirect or user interaction.",
    links: [
      { label: "Client Credentials Grant", href: "/2/grant-types/client-credentials/" },
      { label: "Client Authentication", href: "/2/client-authentication/" }
    ]
  },
  "browse": {
    type: "result",
    href: "/2/",
    title: "Start with OAuth 2.0",
    body: "The OAuth 2.0 page lists all core specs, extensions, and related protocols. The Specs page has the full list of IETF working group documents.",
    links: [
      { label: "OAuth 2.0 Overview", href: "/2/" },
      { label: "All IETF Specs", href: "/specs/" },
      { label: "Code & Libraries", href: "/code/" }
    ]
  }
};

var dtHistory = ['start'];
var dt = document.getElementById('dt');

function render(stepId) {
  var step = tree[stepId];
  step.type === 'result' ? renderResult(step) : renderQuestion(step);
}

function renderQuestion(step) {
  var backBtn = dtHistory.length > 1
    ? '<button class="dt-back" onclick="goBack()">← Back</button>'
    : '';
  var options = step.options.map(function(opt) {
    var href = (tree[opt.next] && tree[opt.next].href) ? tree[opt.next].href : '#';
    return '<a href="' + href + '" class="dt-option" onclick="event.preventDefault(); navigate(\'' + opt.next + '\')">'
      + '<span class="dt-option-text">'
      + '<span class="dt-label">' + opt.label + '</span>'
      + '<span class="dt-hint">' + opt.hint + '</span>'
      + '</span>'
      + '<span class="dt-arrow" aria-hidden="true">→</span>'
      + '</a>';
  }).join('');
  dt.innerHTML = '<div class="dt-header">' + backBtn
    + '<h2 class="dt-question">' + step.question + '</h2></div>'
    + '<div class="dt-options">' + options + '</div>';
}

function renderResult(step) {
  var links = step.links.map(function(l) {
    return '<a href="' + l.href + '" class="dt-result-link">' + l.label + ' →</a>';
  }).join('');
  dt.innerHTML = '<div class="dt-header"><button class="dt-back" onclick="goBack()">← Back</button></div>'
    + '<div class="dt-result">'
    + '<div class="dt-result-title">' + step.title + '</div>'
    + '<p class="dt-result-body">' + step.body + '</p>'
    + '<div class="dt-result-links">' + links + '</div>'
    + '</div>'
    + '<div class="dt-restart-row"><button class="dt-restart" onclick="restart()">Start over</button></div>';
}

function navigate(stepId) { dtHistory.push(stepId); render(stepId); }
function goBack() { dtHistory.pop(); render(dtHistory[dtHistory.length - 1]); }
function restart() { dtHistory = ['start']; render('start'); }

document.addEventListener('DOMContentLoaded', function() { render('start'); });
</script>

<?php require('../includes/_footer.php'); ?>
