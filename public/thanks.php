<?php
require(__DIR__.'/../config/config.php');
$publisher = 'oauth';

// https://ethical-ad-server.readthedocs.io/en/latest/user-guide/api.html#ad-decision

function remote_ip() {
  return $_SERVER['HTTP_X_FORWARDED_FOR'] ?? $_SERVER['REMOTE_ADDR'];
}

$post = json_encode([
  'publisher' => 'oauth',
  'placements' => [['div_id'=>'a', 'ad_type'=>'text-v1']],
  'user_ip' => remote_ip(),
  'user_ua' => $_SERVER['HTTP_USER_AGENT'] ?? '',
]);

$ch = curl_init('https://server.ethicalads.io/api/v1/decision/');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
  'Authorization: Token '.Config::$EA_TOKEN,
  'Content-type: application/json',
]);
$response = json_decode(curl_exec($ch), true);

header('Content-type: application/json');

if($response) {
  if(isset($response['html'])) {
    echo 'ea('.json_encode(['html' => $response['html']]).')';
  }
}
