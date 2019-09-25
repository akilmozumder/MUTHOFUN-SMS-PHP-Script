<?php
 

	   $username = "username";
	   $password = "password";
	   $mobiles = '8801738851110';
	   $sms = 'Thank you for your kind purchase. For any query, please contact our hotline number: 01826323538.';
	   $originator = '01844016400';
	
	echo sendSMS($username, $password, $mobiles, $sms, $originator);
	
	function sendSMS($username, $password, $phone, $message, $originator)
	{	
		// make sure passed string is url encoded
		$message = rawurlencode($message);
		
		$url = "http://clients.muthofun.com:8901/esmsgw/sendsms.jsp?user=$username&password=$password&mobiles=$phone&sms=$message&unicode=0";			

		$c = curl_init(); 
		curl_setopt($c, CURLOPT_RETURNTRANSFER, 1); 
		curl_setopt($c, CURLOPT_URL, $url); 
		$response = curl_exec($c); 
		return $response;
	}

?>
