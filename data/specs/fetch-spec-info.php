<?php
require_once(__DIR__.'/../../vendor/autoload.php');

// $ietfFolder = '/Users/aaronpk/Code/ietf';

if(!isset($argv[1])) {
  echo "Usage: php fetch-spec-status.php draft-ietf-name\n";
  die();
}

$draft = $argv[1];

// Look up status to see if it has an RFC number
$statusFile = __DIR__.'/drafts/'.$draft.'/status.json';

if(!file_exists($statusFile)) {
  echo "Could not find file: $statusFile\n";
  die();
}

$status = json_decode(file_get_contents($statusFile), true);


if(isset($status['rfc'])) {


  $url = 'https://www.rfc-editor.org/refs/bibxml/reference.RFC.'.$status['rfc'].'.xml';

  $xml = file_get_contents($url);
  $json = Laminas\Xml2Json\Xml2Json::fromXml($xml, false);
  $data = json_decode($json, true);

  $authors = [];
  if(isset($data['reference']['front']['author']['@attributes'])) {
    $data['reference']['front']['author'] = [$data['reference']['front']['author']];
  }
  foreach($data['reference']['front']['author'] as $author) {
    $authors[] = $author['@attributes']['initials'].' '.$author['@attributes']['surname'];
  }

  // $filename = $ietfFolder.'/rfcs-json-only/rfc'.$status['rfc'].'.json';
  // if(!file_exists($filename)) {
  //   echo "Could not find file: $filename\n";
  //   die();
  // }

  // $data = json_decode(file_get_contents($filename), true);
  // $authors = $data['authors'];

} else {

  /*
  $glob = glob($ietfFolder.'/internet-drafts/'.$status['name'].'*.xml');

  if(count($glob) == 0) {
    echo "Could not find file for ".$status['name']."\n";
  }

  $filename = $glob[0];

  if(!file_exists($filename)) {
    echo "Could not find file: $filename\n";
    die();
  }

  preg_match('/-([0-9]+)\.xml/', $filename, $match);
  $version = $match[1];

  $xml = file_get_contents($filename);
  $json = Laminas\Xml2Json\Xml2Json::fromXml($xml, false);
  $data = json_decode($json, true);
  */

  // Find the latest version
  $url = 'https://tools.ietf.org/html/'.$status['name'];
  $ch = curl_init($url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
  curl_setopt($ch, CURLOPT_NOBODY, true);
  curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla');
  curl_exec($ch);
  $url = curl_getinfo($ch, CURLINFO_EFFECTIVE_URL);

  if(preg_match('/-([0-9]+)$/', $url, $match)) {
    $version = $match[1];
    $status['version'] = $version;

    $xmlurl = 'https://tools.ietf.org/id/'.$status['name'].'-'.$status['version'].'.xml';

    $ch = curl_init($xmlurl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla');
    $xml = curl_exec($ch);

    $xml = preg_replace('/<!ENTITY .+>/', '', $xml);

    $json = Laminas\Xml2Json\Xml2Json::fromXml($xml, false);
    $data = json_decode($json, true);

    $authors = [];
    if(isset($data['rfc']['front']['author']['@attributes'])) {
      $data['rfc']['front']['author'] = [$data['rfc']['front']['author']];
    }
    foreach($data['rfc']['front']['author'] as $author) {
      $authors[] = $author['@attributes']['initials'].' '.$author['@attributes']['surname'];
    }

  } else {
    echo "Could not fetch URL to find version\n";
  }



  /*
  $authors = [];
  foreach($data['rfc']['front']['author'] as $author) {
    $authors[] = $author['@attributes']['initials'].' '.$author['@attributes']['surname'];
  }

  // Save the version number into the status file
  $status['version'] = $version;
  */

}

if(!empty($authors)) {
  $status['authors'] = $authors;
}

print_r($status);

// Update the file
file_put_contents($statusFile, json_encode($status, JSON_PRETTY_PRINT+JSON_UNESCAPED_SLASHES));


