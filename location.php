
<?php
session_start();
$address =$_SESSION['add'];
$address=str_replace(' ','+',$address);

$url = "http://maps.google.com/maps/api/geocode/json?address=$address&sensor=false&region=India";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_PROXYPORT, 3128);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$response = curl_exec($ch);
curl_close($ch);
$response_a = json_decode($response);
$_SESSION['ulat']=$lat = $response_a->results[0]->geometry->location->lat;
echo "<br />";
$_SESSION['ulong']=$long = $response_a->results[0]->geometry->location->lng;?>