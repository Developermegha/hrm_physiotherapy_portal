<?php
session_start();
$email = $_POST['email'];
	if($otp)
	{
	     unset($_SESSION['otp']);
	}
	
	   	$otp = rand(10000,999999);
			$_SESSION['otp']  = $otp;
 $timestamp =  $_SERVER["REQUEST_TIME"]; 
		
        $_SESSION['time'] = $timestamp;          // save the timestamp in session varibale for further use.
      
 
       
        $for = "registration";
        $msg = "Your  OTP for $for is $otp.
        Thank you for choosing DMSF.";
       
     $to=$email;
 $from='info@dmsf.ph';
   $headers = "From:" . $from;
    
    mail($to, "OTP Verification", $msg, $headers);
      
	
		
       
				
?>