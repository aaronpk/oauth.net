
<?php
$_show_oauth2_sidebar = preg_match('#^/2/.+#', $_SERVER['REQUEST_URI']);
if($_show_oauth2_sidebar):
?>
  </div><!-- end oauth2-page-content -->
</div><!-- end oauth2-page-layout -->
<?php endif; ?>

<footer>

  <?php
    if(isset($EDIT_THIS_PAGE_LINK))
      $editurl = $EDIT_THIS_PAGE_LINK;
    else
      $editurl = 'https://github.com/aaronpk/oauth.net/blob/main/public' . $_SERVER['REQUEST_URI'] . 'index.php';
  ?>
  <div class="contribution-prompt">
    Found an error or want to add something?
    <a href="<?= $editurl ?>">Edit this page on GitHub &rarr;</a>
    <span class="divider">·</span>
    <a href="https://shop.oauth.net/">Merch</a>
  </div>

  <div class="container">
    <?php if(file_exists(__DIR__.'/.supported.php')): ?>
      <?php include(__DIR__.'/.supported.php'); ?>
    <?php endif ?>
  </div>

</footer>


<script src="/stylesheets/bootstrap-5.2.3/js/bootstrap.bundle.min.js"></script>

<script>
function ea(response) {
  if(response.html) {
    document.getElementById('ea').innerHTML = response.html;
  }
}
document.addEventListener('DOMContentLoaded', function() {
  if(window.fathom) {
    var banner = document.querySelector('.featured-banner');
    if(banner && banner.dataset.viewCode) {
      window.fathom.trackGoal(banner.dataset.viewCode, 0);
    }
  }
});
</script>
<script async src="/thanks.php"></script>
<?php
if(isset($FOOTERSCRIPTS)) {
  echo $FOOTERSCRIPTS;
}
?>

</body>
</html>
