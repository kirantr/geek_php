<?php
$ch = curl_init('http://php.su/');
echo curl_setopt  ($ch, CURLOPT_HEADER, true);
?>
