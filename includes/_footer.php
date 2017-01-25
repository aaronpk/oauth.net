
<footer>

  <div class="source">
    Missing something?
    <a href="https://github.com/aaronpk/oauth.net">Send a pull request</a>
  </div>

  <div class="container">
    <div class="follow">
      <a href="https://twitter.com/oauth_2" class="twitter-follow-button" data-show-count="false">Follow @oauth_2</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
    </div>

    <?php if(time() > strtotime('2016-08-01') && time() < strtotime('2017-08-01')): ?>
      <div class="supported">
        <a href="http://auth0.com/">Supported by <img src="/images/auth0.svg" style="margin: 0 0.3em;"> Auth0</a>
        <?php if(time() > strtotime('2016-10-01')): ?>
          <span style="margin-left:4px;">and <a href="http://okta.com"><img src="/images/okta.jpg" height="20" style="margin-bottom: 2px;"> Okta</a></span>
        <?php endif; ?>
      </div>
    <?php else: ?>
      <?php if(time() > strtotime('2016-10-01') && time() < strtotime('2017-09-30')): ?>
        <div class="supported">
          <a href="http://okta.com/">Supported by <img src="/images/okta.jpg" height="20" style="margin: 0 0.3em;"> Okta</a>
        </div>
      <?php endif; ?>      
    <?php endif; ?>
  </div>

</footer>

</body>
</html>
