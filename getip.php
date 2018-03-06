<?php
function GetIP(){
	if(getenv("HTTP_CLIENT_IP")) {
 		$ip = getenv("HTTP_CLIENT_IP");
 	} elseif(getenv("HTTP_X_FORWARDED_FOR")) {
 		$ip = getenv("HTTP_X_FORWARDED_FOR");
 		if (strstr($ip, ',')) {
 			$tmp = explode (',', $ip);
 			$ip = trim($tmp[0]);
 		}
 	} elseif(getenv("REMOTE_ADDR")) {
	$ip = getenv("REMOTE_ADDR");	
	} else {
 	$ip = 'localhost';
 	}
	return $ip;
}

echo $_SERVER['REMOTE_ADDR'];
