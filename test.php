<?php

$login =base64_encode('admin').':'.base64_encode('admin');
$url = 'http://localhost/basicAuth/';

function curlPHP($url,$login) {
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL,$url);
	// Should cURL return or print out the data? (true = return, false = print)
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_TIMEOUT, 10);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
	curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
	curl_setopt($ch, CURLOPT_USERPWD, $login);
	$result = curl_exec($ch);
	curl_close($ch);  

	return $hasil=json_decode($result);
	//echo($result);
}

date_default_timezone_set('Asia/Jakarta');

$tahun=date('Y');
$bln=date('m');
$tgl=date('d');
$jam=date('H');
$menit=date('i');
$second=date('s');

echo curlPHP($url,$login)->success."<br>";
echo curlPHP($url,$login)->message."<br>";




?>