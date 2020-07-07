<?php
header('Content-type: text/plain');

echo ($_SERVER['REMOTE_ADDR'] ?? '')."\n";
echo ($_SERVER['X_FORWARDED_FOR'] ?? '')."\n";
