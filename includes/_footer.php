
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
        <a href="http://auth0.com/">Supported by <img src="/images/auth0.svg"></a>
      </div>

      <?php if($_SERVER['SERVER_NAME'] == 'oauth.net'): ?>
        <!-- Google Tag Manager -->
        <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-MLQ3KK"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-MLQ3KK');</script>
        <!-- End Google Tag Manager -->
      <?php endif; ?>
    <?php endif; ?>
  </div>

</footer>


</body>
</html>
