<?php
$page_title = "OAuth 3.0";
$page_section = "";
$page_secondary = "";
$page_meta_description = "OAuth 3.0 does not yet exist. You might be looking for OAuth 2.1";

require('../../includes/_header.php');
?>

<div class="container">
  <div>

    <h2 id="oauth-3">OAuth 3</h2>

    <img src="/images/oauth-3-logo.png" alt="OAuth logo" width="140" style="float:right; margin: 0 0 8px 8px;">

    <p>OAuth 3.0 does not exist. Over the years, even as early as 2012 when OAuth 2.0 was published, several efforts have attempted to evolve and build upon OAuth 2.0. However, as of <?= date('F Y') ?>, there is no spec officially called OAuth 3.</p>

    <p>The OAuth Working Group at the IETF has not decided to pursue an effort to develop OAuth 3. Instead, <b><a href="/2.1/">OAuth 2.1</a></b> is an officially adopted draft by the OAuth Working Group to consolidate and simplify the best practices of OAuth 2.0.</p>

  </div>
</div>

<?php require('../../includes/_footer.php'); ?>
