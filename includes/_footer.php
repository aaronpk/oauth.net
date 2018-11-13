
<footer>

  <div class="source">
    Follow <a href="https://twitter.com/oauth_2" class="twitter-follow-button">@oauth_2</a> on Twitter.
    Missing something?
    <a href="https://github.com/aaronpk/oauth.net">Send a pull request</a>.
  </div>

  <div class="container">
    <?php if(file_exists(__DIR__.'/.supported.php')): ?>
      <?php include(__DIR__.'/.supported.php'); ?>
    <?php endif ?>
  </div>

</footer>

<script src="/stylesheets/jquery-3.2.1.slim.min.js"></script>
<script src="/stylesheets/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>
