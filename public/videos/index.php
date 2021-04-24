<?php
$page_title = "OAuth Videos";
$page_section = "videos";
$page_secondary = "";
$page_meta_description = "";

require('../../includes/_header.php');
?>

  <div class="container">
    <div>
      <h2>Videos</h2>

      <div style="margin-bottom: 1em">
        <iframe width="100%" height="420" src="https://www.youtube.com/embed/8aCyojTIW6U" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
      </div>

      <div class="videos">
      <?php
      $playlist = json_decode(file_get_contents(__DIR__.'/../../data/videos/videos.json'), true);
      foreach($playlist['items'] as $video) {
        echo '<div class="video">';
          echo '<a href="https://www.youtube.com/watch?v='.$video['contentDetails']['videoId'].'"><img src="'.$video['snippet']['thumbnails']['medium']['url'].'"></a>';
          echo '<div class="title"><a href="https://www.youtube.com/watch?v='.$video['contentDetails']['videoId'].'">'
            .htmlspecialchars($video['snippet']['title'])
            .'</a></div>';
          echo '<div class="date">'
            .date('F j, Y', strtotime($video['contentDetails']['videoPublishedAt']))
            .'</div>';
        echo '</div>';
      }
      ?>
      </div>

      <h3>Video Courses</h3>
      <ul>
        <li><a href="https://www.udemy.com/course/oauth-2-simplified/?referralCode=B04F59AED67B8DA74FA7">The Nuts and Bolts of OAuth</a> - Aaron Parecki</li>
        <li><a href="https://classpert.com/oauth">Free and paid OAuth courses from popular e-learning providers (Classpert)</a></li>
      </ul>

      <div style="clear:both;"></div>

    </div>
  </div>

<?php require('../../includes/_footer.php'); ?>
