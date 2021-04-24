<?php
$glob = glob(__DIR__.'/drafts/*/status.json');

foreach($glob as $filename) {
  if(preg_match('/(draft-.+)\/status/', $filename, $match)) {
    echo "php fetch-spec-info.php ".$match[1]."\n";
  }
}
