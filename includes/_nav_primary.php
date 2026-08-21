<?php
function nav_active($prefix) {
  $uri = $_SERVER['REQUEST_URI'];
  return strpos($uri, $prefix) === 0 ? ' active' : '';
}
function nav_active_any(...$prefixes) {
  foreach($prefixes as $p) {
    if(strpos($_SERVER['REQUEST_URI'], $p) === 0) return ' active';
  }
  return '';
}
?>
<nav class="navbar navbar-expand-md navbar-dark sticky-top">
  <div class="container">
    <a class="navbar-brand" href="/"><img src="/images/oauth-logo-square.png" width="45" alt="OAuth"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav me-auto">
        <li class="nav-item"><a class="nav-link<?= nav_active('/getting-started') ?>" href="/getting-started/">Getting Started</a></li>
        <li class="nav-item"><a class="nav-link<?= nav_active('/2') ?>" href="/2/">OAuth 2.0</a></li>
        <li class="nav-item"><a class="nav-link<?= nav_active('/specs') ?>" href="/specs/">Specs</a></li>
        <li class="nav-item"><a class="nav-link<?= nav_active('/code') ?>" href="/code/">Code</a></li>
        <li class="nav-item"><a class="nav-link<?= nav_active('/security') ?>" href="/security/">Security</a></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle<?= nav_active_any('/articles', '/videos', '/books') ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Learn</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item<?= nav_active('/articles') ?>" href="/articles/">Articles</a></li>
            <li><a class="dropdown-item<?= nav_active('/videos') ?>" href="/videos/">Videos</a></li>
            <li><a class="dropdown-item<?= nav_active('/books') ?>" href="/books/">Books</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="https://events.oauth.net/">Events</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle<?= nav_active_any('/about', '/faq', '/consulting') ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">About</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item<?= nav_active('/about') ?>" href="/about/credits/">Credits</a></li>
            <li><a class="dropdown-item<?= nav_active('/about/community') ?>" href="/about/community/">Community</a></li>
            <li><a class="dropdown-item<?= nav_active('/faq') ?>" href="/faq/">FAQ</a></li>
            <li><a class="dropdown-item<?= nav_active('/consulting') ?>" href="/consulting/">Consulting</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="print-header">
  <span class="item"><img src="/images/oauth-logo-square.png" width="45" alt=""></span>
  <span class="item">oauth.net<?= $_SERVER['REQUEST_URI'] ?></span>
</div>
