<?php

$apikey = "NjtxLSp4y0yXpWDCLukERA";
        $apisender = "TRAEDU";
        //$otp = rand(1000, 9999);
       // $for = "registration";
        $msg = "Dear Applicant
We've have received your registration form and it is currently being processed. Your registration ID will be mailed to you.
Thank you..
        
        Thank you for choosing Transworld Educare.";
       $whatsappNumber=9823218677;
        $num = "91".$whatsappNumber; // MULTIPLE NUMBER VARIABLE PUT HERE...!
        $ms = rawurlencode($msg); //This for encode your message content
        $url = 'https://www.smsgatewayhub.com/api/mt/SendSMS?APIKey=' . $apikey . '&senderid=' . $apisender . '&channel=2&DCS=0&flashsms=0&number=' . $num . '&text=' . $ms . '&route=1';
        
       // echo "<pre>";print_r($url);"</pre>";die;
        
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 2);
        $data = curl_exec($ch);
        
        
        
        /* result of API call*/
        $data = json_decode($data, TRUE);

?>