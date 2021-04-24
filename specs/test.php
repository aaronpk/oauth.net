<?php


$rfc = file_get_contents('ftp://ftp.rfc-editor.org/rfcs-json-only/rfc6749.json');
echo $rfc;
echo "\n";
