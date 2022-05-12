<?php
session_start();
$user_otp = $_POST['varify_otp_email'];
				$verify_otp = $_SESSION['otp'];

			 $timestamp =  $_SERVER["REQUEST_TIME"];  // record the current time stamp 
			
			if(($timestamp - $_SESSION['time']) > 900)  // 300 refers to 300 seconds
    {
        echo json_encode("Email OTP expired. Pls. try again.");
    }
		else{
		     
		     if($verify_otp == $user_otp) {

$_SESSION['timestamp'] = time(); //set new timestamp
            $_SESSION['otpemailsuccessfull_verification']  = $user_otp;
            $varifiedemailtimestamp =  $_SERVER["REQUEST_TIME"]; 
            $res = 'Successfully Verify OTP';   
 
            echo json_encode($res);

        }
        
        else{
          
           $ress ='Otp Not Matched';
 
            echo json_encode($ress);  
        }
         
		}	    
			 
        
		
				
       
				
?>