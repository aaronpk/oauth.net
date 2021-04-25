<?php
require_once(__DIR__.'/../../vendor/autoload.php');

$feedURL = 'https://datatracker.ietf.org/group/oauth/documents/feed/';

$xml = file_get_contents($feedURL);
$json = Laminas\Xml2Json\Xml2Json::fromXml($xml, false);

$updates = json_decode($json, true);

foreach($updates['feed']['entry'] as $entry) {

  // Determine if this is something interesting
  $save = false;

  if(isset($entry['ietf']['type'])) {
    if(in_array($entry['ietf']['type'], ['iesg_approved', 'new_revision'])) {
      $save = true;
    }
  }

  if($save) {
    $filename = __DIR__.'/docstatus/'.$entry['id'].'.json';
    file_put_contents($filename, json_encode($entry, JSON_PRETTY_PRINT+JSON_UNESCAPED_SLASHES));
  }

}



$eventsURL = 'https://xray.p3k.app/parse?url=https%3A%2F%2Fevents.oauth.net%2F&pretty=true';
$feed = json_decode(file_get_contents($eventsURL), true);

foreach($feed['data']['items'] as $event) {

  $url = $event['url'];
  preg_match('/.+-(.+)$/', $event['url'], $match);
  $id = $match[1];

  $eventDetails = json_decode(file_get_contents('https://xray.p3k.app/parse?'.http_build_query(['url'=>$event['url']])));

  $filename = __DIR__.'/events/'.$id.'.json';
  file_put_contents($filename, json_encode($eventDetails, JSON_PRETTY_PRINT+JSON_UNESCAPED_SLASHES));

}

