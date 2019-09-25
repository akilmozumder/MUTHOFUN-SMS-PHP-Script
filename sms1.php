<?php
 

	   $username = "username";
	   $password = "password";
	   $mobiles = '8801826323538';
	   $sms = 'বাংলাদেশ একটি সুন্দর দেশ';
	   $originator = 'SurpremeSeed';
	
	$data=sendSMS($username, $password, $mobiles, $sms, $originator);
	

print_r (explode(" ",$data));

	
	function sendSMS($username, $password, $phone, $message, $originator)
	{	
		// make sure passed string is url encoded
		$message = rawurlencode($message);
		
		$url = "http://clients.muthofun.com:8901/esmsgw/sendsms.jsp?user=$username&password=$password&mobiles=$phone&sms=$message&unicode=1";			

		$c = curl_init(); 
		curl_setopt($c, CURLOPT_RETURNTRANSFER, 1); 
		curl_setopt($c, CURLOPT_URL, $url); 
		$response = curl_exec($c); 
		return $response;
	}


?>
