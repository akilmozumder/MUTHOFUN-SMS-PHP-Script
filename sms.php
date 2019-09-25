<?php

$user = "username";
          $pass = "password";
          $mobile = "8801730586226";
          $sms_content = "বাংলাদেশ একটি সুন্দর দেশ";
          $msg=urlencode($sms_content);
        
         
            
          function curl($url) {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
            $data = curl_exec($ch);
            curl_close($ch);

            return $data;
         }

$feed = "http://developer.muthofun.com/sms.php?username=$user&password=$pass&mobiles=$mobile&sms=$msg&uniccode=1";
$tweets = curl($feed);

$xml = simplexml_load_string($tweets);
$json = json_encode($xml);
$array = json_decode($json,TRUE);
print_r($array);


?>