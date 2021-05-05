
<footer>

  <div class="source">
    Follow <a href="https://twitter.com/oauth_2" class="twitter-follow-button">@oauth_2</a> on Twitter.
    Missing something?
    <?php
      if(isset($EDIT_THIS_PAGE_LINK))
        $editurl = $EDIT_THIS_PAGE_LINK;
      else
        $editurl = 'https://github.com/aaronpk/oauth.net/blob/main/public' . $_SERVER['REQUEST_URI'] . 'index.php';
    ?>
    <a href="<?= $editurl ?>">Edit this page</a>.
  </div>

  <div class="container">
    <?php if(file_exists(__DIR__.'/.supported.php')): ?>
      <?php include(__DIR__.'/.supported.php'); ?>
    <?php endif ?>
  </div>

</footer>


<script src="/stylesheets/jquery-3.2.1.slim.min.js"></script>
<script src="/stylesheets/bootstrap/js/bootstrap.min.js"></script>

<script>
function ea(response) {
  if(response.html) {
    $("#ea").html(response.html);
  }
};
$(function(){
  if(window.fathom) {
    window.fathom.trackGoal($(".featured-banner").data("view-code"), 0);
  }
});
</script>
<script async src="/thanks.php"></script>

</body>
</html>
