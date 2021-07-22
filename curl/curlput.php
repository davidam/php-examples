<?php
$ch = curl_init();
$fields = array('key'=>'value');
$postvars = '';
foreach($fields as $key=>$value) {
    $postvars .= $key . "=" . $value . "&";
}
print($postvars);
$url = "https://httpbin.org/put";

$path = "./lala.txt";
curl_setopt($ch,CURLOPT_URL, $url);
curl_setopt($ch,CURLOPT_PUT, 1);                //0 for a get request
curl_setopt($ch,CURLOPT_INFILE, $path);
$data = "PUT request data";
//curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch,CURLOPT_CONNECTTIMEOUT ,3);
curl_setopt($ch,CURLOPT_TIMEOUT, 20);
$response = curl_exec($ch);
print "curl response is:" . $response;
curl_close ($ch);
?>
