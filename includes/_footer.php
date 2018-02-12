
<footer>

  <div class="source">
    Missing something?
    <a href="https://github.com/aaronpk/oauth.net">Send a pull request</a>
  </div>

  <div class="container">
    <div class="follow">
      <a href="https://twitter.com/oauth_2" class="twitter-follow-button">@oauth_2</a>
    </div>

    <div class="supported">
      <? if(time() < strtotime('2017-10-01')): ?>
        <a href="https://auth0.com/" onclick="trackFooterClick('https://auth0.com/'); return false;">Supported by <img src="/images/auth0.svg" style="margin: 0 0.3em;"> Auth0</a>
        <span style="margin-left:4px;">and <a href="https://developer.okta.com" onclick="trackFooterClick('https://developer.okta.com/'); return false;"><img src="/images/okta.jpg" height="20" style="margin-bottom: 2px;"> Okta</a></span>
      <? else: ?>
        <span>Supported by <a href="https://developer.okta.com" onclick="trackFooterClick('https://developer.okta.com/'); return false;"><img src="/images/okta.jpg" height="20" style="margin-bottom: 2px;"> Okta</a></span>
      <? endif; ?>
    </div>
  </div>

</footer>

<script src="/stylesheets/jquery-3.2.1.slim.min.js"></script>
<script src="/stylesheets/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>
