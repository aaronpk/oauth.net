<?php
$url = 'https://datatracker.ietf.org/group/oauth/documents/csv/';
$csv = file_get_contents($url);
file_put_contents(__DIR__.'/data/status.csv', $csv);

// $csv = file_get_contents('status.csv');





$lines = explode("\n", $csv);

// Remove header line
array_shift($lines);

$data = [];

foreach($lines as $line) {
  $row = str_getcsv($line);
  $row = array_map('remove_b_wrapper', $row);
  if(count($row) == 7) {
    $data[] = [
      'name' => $row[0],
      'title' => $row[1],
      'last_revised_date' => $row[2],
      'status' => $row[3],
      'group' => $row[4],
      'ad' => $row[5],
      'last_changed_date' => $row[6],
    ];

    $dir = __DIR__.'/drafts/'.$row[0];
    if(!file_exists($dir)) {
      mkdir($dir);
    }
  }
}

// Split out RFCs, I-Ds, and individual drafts
$rfcs = [];
$drafts = [];
$individuals = [];
foreach($data as $draft) {
  if(preg_match('/^RFC ([0-9]+)/', $draft['status'], $match)) {
    $draft['rfc'] = $match[1];
    $rfcs[] = $draft;
  } else {
    if(preg_match('/draft-ietf-oauth-/', $draft['name']))
      $drafts[] = $draft;
    else
      $individuals[] = $draft;
  }

  $statusFile = __DIR__.'/drafts/'.$draft['name'].'/status.json';
  if(file_exists($statusFile)) {
    $currentStatus = json_decode(file_get_contents($statusFile), true);
    foreach($draft as $k=>$v) {
      $currentStatus[$k] = $v;
    }
    $draft = $currentStatus;
  }
  file_put_contents($statusFile, json_encode($draft, JSON_PRETTY_PRINT+JSON_UNESCAPED_SLASHES));
}

// Sort RFCs numerically
usort($rfcs, function($a, $b) {
  if($a['rfc'] == $b['rfc'])
    return 0;
  return ((int)$a['rfc'] > (int)$b['rfc']) ? -1 : 1;
});

// Sort I-Ds and individuals by published date
usort($drafts, function($a, $b) {
  if($a['last_revised_date'] == $b['last_revised_date'])
    return 0;
  return strtotime($a['last_revised_date']) > strtotime($b['last_revised_date']) ? -1 : 1;
});
usort($individuals, function($a, $b) {
  if($a['last_revised_date'] == $b['last_revised_date'])
    return 0;
  return strtotime($a['last_revised_date']) > strtotime($b['last_revised_date']) ? -1 : 1;
});

$specs = [
  'rfcs' => array_map(function($d){ return $d['name']; }, $rfcs),
  'drafts' => array_map(function($d){ return $d['name']; }, $drafts),
  'individuals' => array_map(function($d){ return $d['name']; }, $individuals),
];

file_put_contents(__DIR__.'/data/specs.json', json_encode($specs, JSON_PRETTY_PRINT+JSON_UNESCAPED_SLASHES));





function remove_b_wrapper($str) {
  if(!is_string($str))
    return $str;
  if(preg_match("/b'(.*)'/", $str, $match))
    return $match[1];
  return $str;
}
