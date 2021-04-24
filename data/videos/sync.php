<?php
chdir(__DIR__);
require(__DIR__.'/../../config/config.php');

$url = 'https://www.googleapis.com/youtube/v3/playlistItems?'.http_build_query([
  'part' => 'contentDetails,snippet',
  'playlistId' => 'PLRyLn6THA5wPI1Vs3FvTiNaPj48hJep3m',
  'maxResults' => 50,
  'key' => Config::$YOUTUBE_API_KEY,
]);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$data = json_decode(curl_exec($ch), true);

if(curl_errno($ch) == 0) {
  if(isset($data['kind']) && $data['kind'] == 'youtube#playlistItemListResponse') {
    file_put_contents(__DIR__.'/videos.json', json_encode($data, JSON_PRETTY_PRINT+JSON_UNESCAPED_SLASHES));
  }
}
