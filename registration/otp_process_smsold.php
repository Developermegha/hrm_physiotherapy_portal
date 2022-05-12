<?php
session_start();
$mobile = $_POST['mobile'];

if($otp)
	{
	     unset($_SESSION['otp']);
	}
	
	   	$otp = rand(10000,999999);
			$_SESSION['otpsms']  = $otp; 
$timestamp =  $_SERVER["REQUEST_TIME"]; 
		
        $_SESSION['smsotp_time'] = $timestamp;  
 
       
     
 
 $apikey = "NjtxLSp4y0yXpWDCLukERA";
        $apisender = "TRAEDU";
        //$otp = rand(1000, 9999);
        $for = "registration";
        $msg = "Your login otp for $for is $otp.
        
        Thank you for choosing Transworld Educare.";
       
        $num = "91".$mobile; // MULTIPLE NUMBER VARIABLE PUT HERE...!
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
        
        
        if ($data['ErrorMessage'] == "Success") {
            $result['message'] = "Success";
        } else {
            $result['message'] = "Fail";
        }
        echo json_encode($result);
        //die;  
        
      
	
		
       
				
?>