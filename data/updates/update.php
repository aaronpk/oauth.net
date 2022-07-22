<?php
require_once(__DIR__.'/../../vendor/autoload.php');
require_once(__DIR__.'/../../config/config.php');

use Symfony\Component\Yaml\Yaml;

$authorFile = __DIR__.'/../specs/data/authors.yml';

$authors = Yaml::parseFile($authorFile);



// Find new updates on disk that haven't yet been tweeted out

$processed = array_map('trim', file(__DIR__.'/tweets/processed.txt'));


$docs = glob(__DIR__.'/docstatus/*.json');
foreach($docs as $docfile) {

  $filename = basename($docfile);

  if(!in_array($filename, $processed)) {
    tweet_doc_update($docfile);
    $processed[] = $filename;
  }

}

file_put_contents(__DIR__.'/tweets/processed.txt', implode("\n", $processed));


$events = glob(__DIR__.'/events/*.json');
foreach($events as $eventfile) {

  $filename = basename($eventfile);

  if(!in_array($filename, $processed)) {
    tweet_event_update($eventfile);
    $processed[] = $filename;
  }

}


file_put_contents(__DIR__.'/tweets/processed.txt', implode("\n", $processed));






function tweet_event_update($eventfile) {
  echo "Tweeting about $eventfile\n";

  $data = json_decode(file_get_contents($eventfile), true);
  #print_r($data);

  $tweetText = "Coming up: ".$data['data']['name']."\n\n";

  $date = new DateTime($data['data']['start']);
  $date->setTimeZone(new DateTimeZone('UTC'));

  if(strlen($data['data']['start']) == 10) {
    $tweetText .= "🗓 " . $date->format('Y-m-d') . "\n\n";
  } else {
    $tweetText .= "🗓 " . $date->format('Y-m-d') . ' at ' . $date->format('H:i') . ' UTC' . "\n\n";
  }

  if(isset($data['data']['category'])) {
    $hashtags = array_map(function($s) { return '#'.$s; }, $data['data']['category']);
    $tweetText .= implode(" ", $hashtags) . "\n\n";
  }

  if(isset($data['data']['rels']['canonical'])) {
    $tweetText .= $data['data']['rels']['canonical'];
  } else {
    $tweetText .= $data['data']['url'];
  }

  echo $tweetText . "\n\n";

  $tweetURL = tweet_now($tweetText);

  $filename = __DIR__.'/tweets/'.date('Ymd_His').'.json';
  file_put_contents($filename, json_encode([
    'content' => $tweetText,
    'date' => date('c'),
    'url' => $tweetURL,
  ], JSON_PRETTY_PRINT+JSON_UNESCAPED_SLASHES));
}




function tweet_doc_update($docfile) {
  echo "Tweeting about $docfile\n";
  $data = json_decode(file_get_contents($docfile), true);

  preg_match('~/(draft-.+)/~', $data['link']['@attributes']['href'], $match);
  $docslug = $match[1];

  $draftFile = __DIR__.'/../specs/drafts/'.$docslug.'/status.json';
  if(!file_exists($draftFile)) {
    echo "Error: File not found: $docslug\n";
    return;
  }

  $draft = json_decode(file_get_contents($draftFile), true);

  $authors = [];
  if(isset($draft['authors'])) {
    foreach($draft['authors'] as $authorName) {
      $author = find_author_by_name($authorName);
      if($author) {
        $authors[] = $author[1]['twitter'] ?? $author[1]['name'];
      } else {
        $authors[] = $authorName;
      }
    }
  }

  $docURL = 'https://datatracker.ietf.org/'.$docslug.'/';

  $tweetText = '';

  switch($data['ietf']['type']) {
    case 'iesg_approved':
      $tweetText .= 'The IESG approved the document "' . $draft['title'] . '"';      
      break;
    case 'new_revision':
      preg_match('~(draft-.+([0-9]{2}))\.txt~', $data['content']['@text'], $match);
      $versionslug = $match[1];
      $version = $match[2];

      $docURL = 'https://www.ietf.org/archive/id/' . $versionslug . '.html';
      
      $tweetText .= 'New version available! "' . $draft['title'] . '"';
      break;
  }

  $tweetText .= ' ' . $docURL;
  if(count($authors))
    $tweetText .= " by " . implode(' ', $authors);
  $tweetText .= ' #oauth #oauth2 #ietf';

  $tweetURL = tweet_now($tweetText);

  $filename = __DIR__.'/tweets/'.date('Ymd_His').'.json';
  file_put_contents($filename, json_encode([
    'content' => $tweetText,
    'date' => date('c'),
    'url' => $tweetURL,
  ], JSON_PRETTY_PRINT+JSON_UNESCAPED_SLASHES));
  
  // Also update the status file while we're here
  if(isset($version))
    $draft['version'] = $version;
  file_put_contents($draftFile, json_encode($draft, JSON_PRETTY_PRINT+JSON_UNESCAPED_SLASHES));
}



function tweet_now($text) {
  $ch = curl_init(Config::$SILOPUB_ENDPOINT);
  curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query([
    'content' => $text,
  ]));
  curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Authorization: Bearer '.Config::$SILOPUB_TOKEN,
  ]);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $response = curl_exec($ch);
  $tweet = json_decode($response, true);
  $url = 'https://twitter.com/'.$tweet['user']['screen_name'].'/status/'.$tweet['id_str'];
  echo $url."\n";
  return $url;
}



function find_author_by_name($name) {
  global $authors;

  foreach($authors['authors'] as $i=>$author) {
    if($author['name'] == $name) {
      return [$i, $author];
    }

    if(isset($author['alias'])) {
      foreach($author['alias'] as $alias) {
        if($alias == $name) {
          return [$i, $author];
        }
      }
    }
  }

  return null;
}

