<?php
$useragent = "Opera/9.80 (J2ME/MIDP; Opera Mini/4.2.14912/870; U; id) Presto/2.4.15";
$ch = curl_init ("");
$url = "https://httpbin.org/get";

curl_setopt($ch, CURLOPT_HEADER, TRUE);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt ($ch, CURLOPT_USERAGENT, $useragent); // set user agent
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
echo $output = curl_exec ($ch);
curl_close($ch);;
?>
