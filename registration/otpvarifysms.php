<?php
session_start();

$user_otp = $_POST['varify_otp_sms'];
				$verify_otp = $_SESSION['otpsms'];

				 $timestamp =  $_SERVER["REQUEST_TIME"];  // record the current time stamp  
			
			if(($timestamp - $_SESSION['smsotp_time']) > 900)  // 300 refers to 300 seconds
    {
        echo json_encode("SMS OTP expired. Pls. try again.");
    }
   
    else{
        
      
         if($verify_otp == $user_otp ) {
			     $varifiedsmstimestamp =  $_SERVER["REQUEST_TIME"]; 
          $_SESSION['otpsmssuccessfull_verification']  = $user_otp; 
            $ressms = 'Successfully Verify SMS OTP';   
 
            echo json_encode($ressms);

        }
        
        
        else{
          
           $resssms ='SMS OTP Not Matched';
 
            echo json_encode($resssms);  
        }
        
        
    }
			
			    
			  
        
		
				
       
				
?>