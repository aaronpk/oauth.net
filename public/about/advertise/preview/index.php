<?php
$page_title = "Banner Preview &mdash; OAuth";
$page_section = "advertise";
$page_secondary = "";
$page_meta_description = "";

require('../../../../includes/_header.php');
?>

  <div class="container">

    <nav>
      <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="/about/credits/">Credits</a></li>
        <li class="breadcrumb-item"><a href="/about/introduction/">Introduction</a></li>
        <li class="breadcrumb-item"><a href="/about/design-goals/">Design Goals</a></li>
        <li class="breadcrumb-item active"><a href="/about/advertise/">Advertise Here</a></li>
        <li class="breadcrumb-item">Community</li>
      </ul>
    </nav>

    <div>
      <h2>Banner Preview</h2>

      <p>Enter your desired text below to see how it will look in the site banner above. You can also type in the banner area above as well.</p>

      <input type="text" style="width: 100%" id="banner-text">

    </div>

  </div>
<?php
$FOOTERSCRIPTS = <<<FOOTERSCRIPTS

<script>
function html2text(html) {
    var tag = document.createElement('div');
    tag.innerHTML = html;
    return tag.innerText;
}
$(function(){
  $("#site-banner div").html('Featured: <span contenteditable>Your banner text here</span>');
  $("#banner-text").on("keyup", function(){
    $("#site-banner div span").text($("#banner-text").val());
  });
  document.querySelector('[contenteditable]').addEventListener('paste', function (event) {
    event.preventDefault();
    document.execCommand('inserttext', false, event.clipboardData.getData('text/plain'));
  });
  $("#site-banner span").on("input", function(){
    $("#banner-text").val($("#site-banner span").text());
  });
});
</script>

FOOTERSCRIPTS;
?>
<?php require('../../../../includes/_footer.php'); ?>
