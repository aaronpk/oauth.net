<?php
$start = microtime(true);
$fp = fopen('redirects.txt','r');

function not_found() {
  header('HTTP/1.1 404 Not Found');
  header('X-ShortURL: ' . $_SERVER['REQUEST_URI']);
  echo 'Not Found'."\n";
}

function redirect($url) {
  global $start, $fp;
  header("HTTP/1.1 301 Moved Permanently");
  header('Location: ' . $url);
  $time = round((microtime(true)-$start) * 1000000);
  header('Response-Time: ' . $time);
  fclose($fp);
  die();
}

function begins_with_slash($url) {
  return substr($url,0,1) == '/';
}

$request_uri = str_replace('/r', '', $_SERVER['REQUEST_URI']);

while($redirect = fgets($fp)) {
  $parts = preg_split('/\s+/', trim($redirect));
  if(count($parts) == 2) {
    if(begins_with_slash($parts[0])) {
      // the redirect is a regex
      if(preg_match($parts[0], $request_uri, $match)) {
        $redirect = preg_replace($parts[0], $parts[1], $request_uri);
        redirect($redirect);
      }
    } else {
      // the redirect is an exact match
      if($request_uri == '/'.$parts[0]) {
        if(begins_with_slash($parts[1])) {
          redirect('https://' . $_SERVER['SERVER_NAME'] . $parts[1]);
        } else {
          redirect($parts[1]);
        }
      }
    }
  }
}

not_found();
