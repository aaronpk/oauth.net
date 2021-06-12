<?php
$page_title = "Frequently Asked Questions about OAuth 2.0 &mdash; OAuth";
$page_section = "";
$page_secondary = "";
$page_meta_description = "Common questions and answers about OAuth";

require('../../includes/_header.php');
?>

<div class="container">
  <div>
    
    <h2 id="oauth-faq">Frequently Asked Questions about OAuth</h2>

    <h3 id="expires-in-vs-expires-at">expires_in vs expires_at</h3>
    <p>Q: Why does OAuth use <code>expires_in</code> to communicate the access token expiration to the client?</p>
    <p>A: The general consensus was that it's likely that an OAuth client has the wrong local time on the device, so a relative offset is more reliable. You can read the previous discussion of this in <a href="https://mailarchive.ietf.org/arch/msg/oauth/FDKZDeAza5zsnzTMCeBeXbQAlm4/">the mailing list archives</a>.</p>
    
   </div>
</div>

<?php require('../../includes/_footer.php'); ?>
