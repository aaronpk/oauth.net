<?php
header('Content-type: text/plain');

echo 'REMOTE_ADDR: '.($_SERVER['REMOTE_ADDR'] ?? '')."\n";
echo 'X_FORWARDED_FOR: '.($_SERVER['X_FORWARDED_FOR'] ?? '')."\n";

print_r($_SERVER);
