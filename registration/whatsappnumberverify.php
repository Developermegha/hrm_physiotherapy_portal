<?php
session_start();
        $mobile = $_POST['mobile'];

        $msg = "Dear Student\n
        Welcome to Davao Medical School Foundation. You have successfully completed your registration for the enrolment.\n
        We've mailed your login credentials including username and password. Use the same to log in to the student portal.\n
        (Do not share your credentials with anyone.)";
       
        $number = "91".$mobile; // MULTIPLE NUMBER VARIABLE PUT HERE...!
        $message = rawurlencode($msg); //This for encode your message content
        // $url = 'https://www.smsgatewayhub.com/api/mt/SendSMS?APIKey=' . $apikey . '&senderid=' . $apisender . '&channel=2&DCS=0&flashsms=0&number=' . $num . '&text=' . $ms . '&route=1';
        $url = 'https://console.wa0.in/api/send.php?client_id=864d6b191340ba3e3b0c6d431334341b&instance=35368a422d89049fa13d1f8a25f32a2f&number='.$number.'&message='.$message.'&type=text';
       // echo "<pre>";print_r($url);"</pre>";die;
        
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 2);
        $data = curl_exec($ch);
        
        
        
        /* result of API call*/
        $data = json_decode($data, TRUE);
        // print_r($data);
        // print_r($data['error']);
        
        if ($data['status'] != ' ' ) {
            $result['message'] = "Fail";
        } else {
            $result['message'] = "Success";
        }
        echo json_encode($result);
        //die;  
        
      
	
		
       
				
?>