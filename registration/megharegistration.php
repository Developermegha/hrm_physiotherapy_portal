<?php   
session_start();
define('DB_SERVER1','localhost');
define('DB_USER1','dmsfplsm_dmsf2');
define('DB_PASS1' ,'dmsf2@123');
define('DB_NAME1', 'dmsfplsm_dmsf2');    
$link = mysqli_connect(DB_SERVER1,DB_USER1,DB_PASS1,DB_NAME1); 

 define('DB_SERVER2','localhost');
define('DB_USER2','dmsfplsm_dmsf_us'); 
define('DB_PASS2' ,'v5J=8%.^H,J3');
define('DB_NAME2', 'dmsfplsm_dmsf_db');    
$linkk = mysqli_connect(DB_SERVER2,DB_USER2,DB_PASS2,DB_NAME2); 

 



define('DB_SERVER','localhost');
define('DB_USER','dmsfplsm_account');
define('DB_PASS' ,'x0d$mc*7vC39');
define('DB_NAME', 'dmsfplsm_account-portal'); 
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME); 




if (isset($_POST['submit'])) {
    
    

// if(time() - $_SESSION['timestamp'] > 300) { //subtract new timestamp from the old one
//   $_SESSION['timestamp']; 
//     unset($_SESSION['otpsmssuccessfull_verification'], $_SESSION['otpemailsuccessfull_verification'], $_SESSION['timestamp'],$_POST['varify_otp_sms'],$_SESSION['otp']);
//   echo"<script>alert('Somthing Went Wrong!');</script>"; 
// }
  $timestamp =  $_SERVER["REQUEST_TIME"]; 

//if( $_SESSION['otpsmssuccessfull_verification'] !='' && $_SESSION['otpemailsuccessfull_verification'] != '')

if(($timestamp - $_SESSION['time']) > 900 && ($timestamp - $_SESSION['smsotp_time']) > 900)   
{
  echo"<script>alert('OTP Expired ! Please Generate Again');</script>";   

}

else{
    
    // print_r($_REQUEST);
// echo "yes iam here alright working";die; 

 if(isset($_GET['consultant']))
{    
$consultant = explode("-", $_GET['consultant']);
$name=$consultant[0]; // piece1
$code=$consultant[1]; // piece2
}




            $fName = $_REQUEST['fName'];
            $mName = $_REQUEST['mName'];
            $lName = $_REQUEST['lName'];
             $whatsappNumber = $_REQUEST['whatsappNumber'];
            $email = $_REQUEST['email'];
            $gender = $_REQUEST['gender'];
            $dob = $_REQUEST['dob'];
            $nationality = $_REQUEST['nationality'];
             $fatherName = $_REQUEST['fatherName'];
            $fatherMobile = $_REQUEST['fatherMobile'];
            $fatherEmail = $_REQUEST['fatherEmail'];
             $motherName =  $_REQUEST['motherName'];
             $motherMobile = $_REQUEST['motherMobile'];
            $motherEmail = $_REQUEST['motherEmail'];
            $temporaryAddress = $_REQUEST['temporaryAddress'];
            $tCountry = $_REQUEST['tCountry'];
            $tState = $_REQUEST['tState'];
            $tDistrict = $_REQUEST['tDistrict'];
            $tCity = $_REQUEST['tCity'];
            $tPincode = $_REQUEST['tPincode'];
            // $permanentAddress = $_REQUEST['permanentAddress'];
           // $pCountry = $_REQUEST['pCountry'];
           // $pState = $_REQUEST['pState'];
           // $pDistrict = $_REQUEST['pDistrict'];
           // $pCity = $_REQUEST['pCity'];
           // $pPincode = $_REQUEST['pPincode'];
             $permanentAddress = 0;
            $pCountry = 0;
            $pState = 0;
            $pDistrict = 0;
            $pCity = 0;
            $pPincode = 0;
            $passportapplied =$_REQUEST['radiopassport'];
            $passportNumber = 0;
            $dateOfIssue = 0;
            $placeOfIssue = 0;
            $dateOfExpiry = 0;
            $tenthPercentage = $_REQUEST['tenthPercentage'];
            $tenthSchoolName = $_REQUEST['tenthSchoolName'];
            $tenthBoard = $_REQUEST['tenthBoard'];
            $tenthSchoolAddress = $_REQUEST['tenthSchoolAddress'];
            $tenthDistrict = $_REQUEST['tenthDistrict'];
            $tenthState = $_REQUEST['tenthState'];
            $tenthCountry = $_REQUEST['tenthCountry'];
            $tenthPassingYear = $_REQUEST['tenthPassingYear'];
            $twelvethPercentage = $_REQUEST['twelvethPercentage'];
            $twelvethSchoolName = $_REQUEST['twelvethSchoolName'];
            $twelvethBoard = $_REQUEST['twelvethBoard'];
            $twelvethSchoolAddress = $_REQUEST['twelvethSchoolAddress'];
            $twelvethDistrict = $_REQUEST['twelvethDistrict'];
            $twelvethState = $_REQUEST['twelvethState'];
            $twelvethCountry = $_REQUEST['twelvethCountry'];
            $twelvethPassingYear = $_REQUEST['twelvethPassingYear'];
            $neetScore = $_REQUEST['neetScore'];
            $neet_applicable = $_REQUEST['neet_applicable'];
            $neet_passing = $_REQUEST['neet_passing'];
            $student_type = $_REQUEST['student_type'];
             $ss1 = $_REQUEST['ss1']; 
            $mm1 = $_REQUEST['mm1'];
            $ss2 = $_REQUEST['ss2'];
            $mm2 = $_REQUEST['mm2'];
            $ss3 = $_REQUEST['ss3'];
            $mm3 = $_REQUEST['mm3'];
            
   if(isset($_GET['consultant']))
{    
$consultant = explode("-", $_GET['consultant']);
$name=$consultant[0]; // piece1
$code=$consultant[1]; // piece2
}

$st=0;


//   test code//


  
    $resultQuery = mysqli_query($linkk, "SELECT regNo FROM student where reg_status !=''"); 
    $lastDegitArray = array();
    while ($rowCode = mysqli_fetch_array($resultQuery)) {
        $lastDegitArray[] = (int) substr($rowCode['regNo'], 4);
    }
    $lastDegit = 0;
    for ($i = 0; $i < sizeof($lastDegitArray); $i++) {
        if ($lastDegit < $lastDegitArray[$i]) {
            $lastDegit = $lastDegitArray[$i];
        }
    }
    $MemberID = '';
    if (strlen($lastDegit) === 1) {
        if ($lastDegit === 9) {
            $MemberID .= '00';
        } else {
            $MemberID .= '000';
        }
    } else if (strlen($lastDegit) === 2) {
        if ($lastDegit === 99) {
            $MemberID .= '0';
        } else {
            $MemberID .= '00';
        }
    } else if (strlen($lastDegit) === 3) {
        if ($lastDegit === 999) {
            $MemberID .= '';
        } else {
            $MemberID .= '0';
        }
    }
     $regNo = 'AD'.date('y') . $MemberID . ($lastDegit + 1);
   
    
 


// end test code//
 
    $password=AD.mt_rand();
    
    
    
    // code for reciept
    
    
  
    $resultQuery = mysqli_query($con, "SELECT * FROM tw_payments WHERE method='Online' "); 
    $lastDegitArray = array();
    while ($rowCode = mysqli_fetch_array($resultQuery)) {
        $lastDegitArray[] = (int) substr($rowCode['receipt_no'], 4);
    }
    $lastDegit = 0;
    for ($i = 0; $i < sizeof($lastDegitArray); $i++) {
        if ($lastDegit < $lastDegitArray[$i]) {
            $lastDegit = $lastDegitArray[$i];
        }
    }
    $MemberID = '';
    if (strlen($lastDegit) === 1) {
        if ($lastDegit === 9) {
            $MemberID .= '00';
        } else {
            $MemberID .= '000';
        }
    } else if (strlen($lastDegit) === 2) {
        if ($lastDegit === 99) {
            $MemberID .= '0';
        } else {
            $MemberID .= '00';
        }
    } else if (strlen($lastDegit) === 3) {
        if ($lastDegit === 999) {
            $MemberID .= '';
        } else {
            $MemberID .= '0';
        }
    }
    $l_con_no = 'Online_'.mt_rand(1000, 9999);
    
    
 // $l_con_no = 'Online' . $MemberID . ($lastDegit + 1); 
 //die;   
  $regstatus=0;   
  
       
                

  $sql = "INSERT INTO student(regNo, password, firstname,lastname,consultant,section,mobile,email,reg_status) 
    VALUES('$regNo','$password','$fName','$lName','$name','$st',$whatsappNumber,'$email',$regstatus)"; 

if(mysqli_query($linkk, $sql))
{
    
    $loginlink='https://kingsinternational.academy/student-portal/login';
    $firstname=$fName;
    $username=$regNo;
    $password=$password;;
    $to=$email;
 $from='info@dmsf.ph';
 // $message="Dear $firstname Your registration is complete. User ID:$username Password:$password Login to student portal:'".$loginlink."' Thanks Transworld Educare";
 
   $message='<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- So that mobile will display zoomed in -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- enable media queries for windows phone 8 -->
  <meta name="format-detection" content="telephone=no"> <!-- disable auto telephone linking in iOS -->
  <title>Dmsf</title>

  <style type="text/css">
body {
  margin: 0;
  padding: 0;
  -ms-text-size-adjust: 100%;
  -webkit-text-size-adjust: 100%;
}

table {
  border-spacing: 0;
}

table td {
  border-collapse: collapse;
}

.ExternalClass {
  width: 100%;
}

.ExternalClass,
.ExternalClass p,
.ExternalClass span,
.ExternalClass font,
.ExternalClass td,
.ExternalClass div {
  line-height: 100%;
}

.ReadMsgBody {
  width: 100%;
  background-color: #ebebeb;
}

table {
  mso-table-lspace: 0pt;
  mso-table-rspace: 0pt;
}

img {
  -ms-interpolation-mode: bicubic;
}

.yshortcuts a {
  border-bottom: none !important;
}

@media only screen and (max-width: 600px) {
  *[class="gmail-fix"] {
    display: none !important;
  }
}
@media screen and (max-width: 599px) {
  table[class="force-row"],
  table[class="container"] {
    width: 100% !important;
    max-width: 100% !important;
  }
  
  table[class="force-row two"] {
    width: 50% !important;
    max-width: 50% !important;
  }
}
@media screen and (max-width: 400px) {
  td[class*="container-padding"] {
    padding-left: 12px !important;
    padding-right: 12px !important;
  }
}
.ios-footer a {
  color: #aaaaaa !important;
  text-decoration: underline;
}

@media screen and (max-width: 599px) {
  td[class="col"] {
    width: 50% !important;
    text-align: center;
  }

  td[class="cols-wrapper"] {
    padding-top: 18px;
  }
  
  img[class="image"] {
    padding-bottom: 10px;
  }

  /*
img[class="image"] {
    float: right;
    max-width: 40% !important;
    height: auto !important;
    margin-left: 12px;
  }
*/

  div[class="subtitle"] {
    margin-top: 0 !important;
  }
}
@media screen and (max-width: 400px) {
  td[class="cols-wrapper"] {
    padding-left: 0 !important;
    padding-right: 0 !important;
  }

  td[class="content-wrapper"] {
    padding-left: 12px !important;
    padding-right: 12px !important;
  }
}
</style>

</head>
<body style="margin:0; padding:0;" bgcolor="#e1e1e1" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<!-- 100% background wrapper (grey background) -->
<table border="0" width="100%" height="100%" cellpadding="0" cellspacing="0" bgcolor="#e1e1e1">
  <tr>
    <td align="center" valign="top" bgcolor="#e1e1e1" style="background-color: #e1e1e1;">

      <br>

      <!-- 600px container (white background) -->
      <table border="0" width="600" cellpadding="0" cellspacing="0" class="container" style="width:600px;max-width:600px">
        <tr class="gmail-fix">
          <td>
            <table cellpadding="0" cellspacing="0" border="0" align="center" width="600">
              <tr> 
                <td cellpadding="0" cellspacing="0" border="0" height="1"; style="line-height: 1px; min-width: 600px;">
                   </td>
                </tr>
            </table>
          </td>
        </tr>
       
        <tr>
          <td class="content" align="left" style="background-color:#ffffff">

<table width="800" border="0" cellpadding="0" cellspacing="0" class="force-row" style="width: 800px;">
  <tr> 
    <td>
      <a href="http://dmsf.ph" title="dmsf">
        <img style="width:100%;" src="https://www.kingsinternational.academy/account-portal/assets/emailer-banner_7sep_DMSF.jpg">
      </a>
    </td>
  </tr>
  <tr>
    <td class="content-wrapper" style="padding-left:24px;padding-right:24px;text-align: center;">
        <br />
      <p>Dear  '.$firstname.'  Congratulations.<br /><br /> We are pleased to inform you that your registration for the MBBS (MD) has been successfully completed. You can now access our student portal to join online classes, refer to classroom notes, check your timetable and more.<br />You can use the credentials given below to login into our student portal.<br />Username:'.$username.'<br />Password:'.$password.'<br />Link To Student Login Portal: https://dmsf.ph/student-portal/student/login<br /></p>
                   </td> 
  </tr>
 
  <tr>
    <td class="content-wrapper" style="padding-left:24px;padding-right:24px;text-align: center;" align="center">
      <hr style="border-bottom: solid 1px #000; border-top: 0;">
      <br>
      <p style="text-transform:uppercase;font-family:sans-serif;font-size: 14px !important;margin-top:0; margin-bottom: 15px;text-align: center;">(Do not share your login credentials with anyone.)<br />For any queries and login related issues, mail us at info@dmsf.ph or call us at 1800 547 3220 and we will get in touch with you soon.</p>
      <div>
        <!--[if mso]>
          <v:rect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="mailto:info@dmsf.ph" style="height:47px;v-text-anchor:middle;width:124px;" stroke="f" fillcolor="#f4791f">
            <w:anchorlock/>
            <center>
          <![endif]-->
              <a href="mailto:info@dmsf.ph"
        style="background-color:#f4791f;color:#ffffff;display:inline-block;font-family:sans-serif;font-size:13px;font-weight:bold;line-height:47px;text-align:center;text-decoration:none;width:124px;-webkit-text-size-adjust:none;"></a>
          <!--[if mso]>
            </center>
          </v:rect>
        <![endif]-->
      </div>
    </td>
  </tr>
  <tr>
    <td style="background:#fff;text-align:center;width:100%;height:25px;"></td>  
  </tr>
  <!--
<tr>
    <td bgcolor="#282727">
      <div style="font-family:Helvetica, Arial, sans-serif;font-size:14px !important;color:#ffffff;margin-top:18px;margin-bottom:18px;text-align: center;text-transform: uppercase">Questions? <a href="mailto:marketing@coloredge.com" style="color:#f0782d;text-decoration: none;">Contact us</a>
      </div>
    </td>
  </tr>
-->
  <tr>
    <td style="background:#e1e1e1;text-align:center;width:100%;height:15px;"></td>  
  </tr>
  <tr>
    <td style="background:#e1e1e1;text-align: center;">
      <a href="https://www.facebook.com/coloredge" target="_blank" title="Facebook"><img src="http://coloredge.com/newsletters/2015/06/images/Facebook.jpg" width="50" height="46" alt="Facebook"></a>
      <a href="https://twitter.com/coloredge" target="_blank" title="Twitter"><img src="http://coloredge.com/newsletters/2015/06/images/Twitter.jpg" width="50" height="46" alt="Twitter"></a>
      <a href="https://www.linkedin.com/company/coloredge" target="_blank" title="LinkedIn"><img src="http://coloredge.com/newsletters/2015/06/images/LinkedIn.jpg" width="50" height="46" alt="LinkedIn"></a>
      <a href="https://vimeo.com/user16169088" target="_blank" title="Vimeo"><img src="http://coloredge.com/newsletters/2015/06/images/Vimeo.jpg" width="50" height="46" alt="Vimeo"></a>
      
    </td>
  </tr>
  <tr>
    <td style="background:#e1e1e1;text-align:center;width:100%;height:5px;"></td>  
  </tr>
  <tr>
    <td style="background:#e1e1e1;text-align:center;">
      <div style="font-family:Helvetica, Arial, sans-serif;font-size:10px !important;color:#000000;text-align: center;line-height:1.4;">This email was sent by info@dmsf.ph<br>
        2021 All rights reserved dmsf<br>
       <br>
      
      </div>  
    </td>  
  </tr>
  <tr>
    <td style="background:#e1e1e1;text-align:center;width:100%;height:30px;"></td>  
  </tr>
  
</table>

          </td>
        </tr>
        
        
      </table><br><br><br><br>
<!--/600px container -->


    </td>
  </tr>
</table>
<!--/100% background wrapper-->

</body>
</html>

';
 

  $headers = "From:" . $from;
  $headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
   // $mail->isHTML(true);   
    mail($to, "Login Credentials", $message, $headers);
    
    
 
 $insertQuery1 = "INSERT INTO `personal_tbl`(`regId`, `studentIdNumber`, `philippinesPhone`, `fName`, `mName`, `lName`, `telegramNumber`, `whatsappNumber`, `email`,`gender`,`dob`, `foto`, `bloodGroup`, `nationality`, `approval`, `isActive`) "
                    . "VALUES('" . '' . "','" .$regNo. '' . "','" . '' . "','" . $fName . "','" . $mName . "','" . $lName . "','" . '' . "','" . $whatsappNumber . "','" . $email . "','" . $gender . "','" . $dob . "','" . '' . "','" . '' . "','" . $nationality . "','0','1')";
         
            $result1 = mysqli_query($link, $insertQuery1);


 

if($result1)
{
$personalId = mysqli_insert_id($link);

 $insertQuery2 = "INSERT INTO `information_tbl`(`fatherName`, `fatherMobile`, `fatherEmail`, `motherName`, `motherMobile`, `motherEmail`, `fatherOccupation`, `motherOccupation`, `temporaryAddress`, `tCountry`, `tState`, `tDistrict`, `tCity`, `tPincode`, `permanentAddress`, `pCountry`, `pState`, `pDistrict`, `pCity`, `pPincode`, `passportNumber`, `dateOfIssue`, `placeOfIssue`, `dateOfExpiry`,`personalID`, `isActive`, `applied_passport`) "
                        . "VALUES('" . $fatherName . "','" . $fatherMobile . "','" . $fatherEmail . "','" . $motherName . "','" . $motherMobile . "','" . $motherEmail . "','" . '' . "','" . '' . "','" . $temporaryAddress . "','" . $tCountry . "','" . $tState . "','" . $tDistrict . "','" . $tCity . "','" . $tPincode . "','" . $permanentAddress . "','" . $pCountry . "','" . $pState . "','" . $pDistrict . "','" . $pCity . "','" . $pPincode . "','" . $passportNumber . "','" . $dateOfIssue . "','" . $placeOfIssue . "','" . $dateOfExpiry . "','" . $personalId . "','1','".$passportapplied."') ";
           $result2 = mysqli_query($link, $insertQuery2);
           
           if($result2)
           {
                 $insertQuery5 = "INSERT INTO `educational_tbl`(`tenthPercentage`, `tenthSchoolName`, `tenthBoard`, `tenthSchoolAddress`, `tenthDistrict`, `tenthState`, `tenthCountry`, tenthPassingYear,`twelvethPercentage`, `twelvethSchoolName`, `twelvethBoard`, `twelvethSchoolAddress`, `twelvethDistrict`, `twelvethState`, `twelvethCountry`,twelvethPassingYear, `neetScore`, `personalId`, `isActive`, `neet_applicable`, `neet_passing_year`)" 
                        . "VALUES('" . $tenthPercentage . "','" . $tenthSchoolName . "','" . $tenthBoard . "','" . $tenthSchoolAddress . "','" . $tenthDistrict . "','" . $tenthState . "','" . $tenthCountry . "','" . $tenthPassingYear . "','" . $twelvethPercentage . "','" . $twelvethSchoolName . "','" . $twelvethBoard . "','" . $twelvethSchoolAddress . "','" . $twelvethDistrict . "','" . $twelvethState . "','" . $twelvethCountry . "','" . $twelvethPassingYear . "','" . $neetScore . "','" . $personalId . "','1','" . $neet_applicable . "','".$neet_passing."')"; 
                
                $result3 = mysqli_query($link, $insertQuery5);
                if($result3) 
                {
                   
                   $insertQuery6 = "INSERT INTO `mark_tbl`(`s1`, `m1`, `s2`, `m2`, `s3`, `m3`, `s4`, `m4`, `s5`, `m5`, `s6`, `m6`, `ss1`, `mm1`, `ss2`, `mm2`, `ss3`, `mm3`, `ss4`, `mm4`, `ss5`, `mm5`, `ss6`, `mm6`, `personalId`, `isActive`) "
                        . "VALUES('" . $ss1 . "','" . $mm1 . "','" . $ss2 . "','" . $mm2 . "','" . $ss3 . "','" . $mm3 . "','" . '' . "','" . '' . "','" . '' . "','" . '' . "','" . '' . "','" . '' . "','" . '' . "','" . '' . "','" . '' . "','" . '' . "','" . '' . "','" . '' . "','" . '' . "','" . '' . "','" . '' . "','" . '' . "','" . '' . "','" . '' . "','" . $personalId . "','1')";
                $result4 = mysqli_query($link, $insertQuery6); 
                
                if($result4)
                {
                 
                    date_default_timezone_set("Asia/Calcutta");   //India time (GMT+5:30)  
                $createdate=date("Y-m-d H:i:s"); $studentIdNumber=0;
             $insertQuery8 = "INSERT INTO `tw_students`(`app_id`, `first_name`, `last_name`, `middle_name`, `gender`, `email`, `password`, `confirm`, `active`, `blocked`, `welcome`, `mobile`, `father_name`, `home_mobile`, `dob`, `address`, `city`, `state`, `zip`, `class_id`, `course`, `batch`, `rollno`, `college`, `counselled_by`, `profile_picture`, `blood_group`, `created`, `updated`, `flg`, `receipt_no`, `learn_type`, `consultant`, `mother_name`, `mother_mobile`, `school_name`, `chemistry_mark`, `physics_mark`, `biology_mark`, `neet_mark`, `neet_eligible`, `admission_date`, `_10th`, `_12th`, `id_proof`, `photo_proof`, `_11th`, `other_copies`, `community`, `tc`, `passport`, `bankstatement`, `stud_type_hostel`, `visa`, `visa_date`, `visa_valid_till`, `visa_remarks`, `travel_date`, `travel_remarks`, `passport_no`, `passport_issued`, `passport_expiry`, `interview_date`, `interview_place`, `interview_status`, `received_docs`, `is_custom_rollno`, `user`, `registered`, `registered_date`, `registered_phone`, `otp`, `whatsapp_no`, `paid`, `paid_date`, `old_rollno`, `prev_rollno`, `profile`, `visa_no`, `visa_category`, `visa_expiry_date`, `fee_list`, `center`, `section`) VALUES ('','" . $fName . "','" . $lName . "','" . $mName . "','','".$email."','','','','','','".$whatsappNumber."','".$fatherName."','".$fatherMobile."','','','','','','',1,8,'".$regNo."','','','','','".$createdate."','".$createdate."',1,'','".$student_type."','".$name."','".$motherName."','".$motherMobile."','','','','','".$neetScore."','".$neet_applicable."','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')" ;
               
                $result8 = mysqli_query($con, $insertQuery8); 
                
                 $student = mysqli_insert_id($con);
                
                if($student)
                {
                    
                   
                    
                     date_default_timezone_set("Asia/Calcutta");   //India time (GMT+5:30)  
                $createdate=date("Y-m-d H:i:s"); 
                $studentIdNumber=0;
                $amount=10000; 
                
              

             $insertQuery9 = "INSERT INTO `tw_payments`(`fee_type`, `student`, `course`, `batch`, `amount`, `balance`, `method`, `method_details`, `created`, `usd_amount`, `usd_rate`, `inr_value`, `payment_date`, `scan_copy`, `bank_statement_id`, `b_statement`, `hongkong_statement_id`, `hongkong_hostel_statement_id`, `hongkong_hostel_statement`, `hongkong_statement`, `receipt_no`, `discount`, `discount_remarks`, `consultant`, `flg`, `dd_cheque_no`, `dd_cheque_bank`, `is_multi`, `transfer_from`, `is_transfer`, `transfer_amount`, `narration`, `journal_id`, `c_student`, `user`, `svc_statement_id`, `svc_statement`, `hdfc_statement_id`, `hdfc_statement`, `hdfc_ch_statement_id`, `hdfc_statements_chennai`, `startdate`, `enddate`,`transaction_status`) VALUES ('8','".$student."','1','2021','".$amount."','','Online','','".$createdate."','','','','".$createdate."','','','','','','','','".$l_con_no."','','','','1','','','','','','','','','','','','','','','','','','','')" ; 
            
                $result9 = mysqli_query($con, $insertQuery9); 
                
                  
                   header("Location: https://www.kingsinternational.academy/pre-registration/thank_you.php");
exit();        
                    
                }
               
                }
                
                }
           }
                
} 
} 
else
{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}          
              
}

}
else{
    
// echo"<script>alert('Somthing Went Wrong !');</script>";   

}




?>




<!doctype html>

<html lang="en">

    <head>

        <meta charset="utf-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Davao Medical School Foundation-DMSF</title>

        <link rel="stylesheet" href="assets/css/bootstrap.css">

        <link rel="stylesheet" href="assets/css/bootstrap-select.css" />

        <link rel="stylesheet" href="assets/css/style.css">

        <link rel="stylesheet" href="assets/css/device.css">



        <style>



ul.formListing li.thirds { 

    width: 24%;

}
            /* .select2-container .select2-selection--single {

                height:40px!important; 



            } */

            .select2-container--default .select2-selection--single .select2-selection__arrow{height:40px!important; }

            .select2-container--default .select2-selection--single .select2-selection__rendered{color: #8e8b8b!important;

                                                                                                line-height: 35px!important;

                                                                                                font-size: 14px!important;}

            .select2-results__option{

                font-size: 14px!important;

            }   

            .select2-search--dropdown .select2-search__field{

                font-size: 14px!important; 

            }

        </style>

        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <!------ Include the above in your HEAD tag ---------->



        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />

        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>

    </head>

    <body>

        <div class="Wrapper">

            <div class="container-lg">

                <div class="row justify-content-center m-0">

                    <div class="col-lg-10 col-sm-12">

                        <div class="formWrap">

                            <div class="col-md-12 TitleWrap ">

                                <div class="row">

                                    <div class="col-md-3">

                                        <img src="uploads/logo.png" width="100%" />

                                    </div>

                                    <div class="col-md-9">

                                        <div class="">

                                            <h2> Online Registration</h2>

                                            <h2></h2>

                                        </div>

                                    </div>

                                </div>

                            </div>   

                            
                            <form  action="" method="post" name="myForm" class="registration-form" id="registration-form">
                                <fieldset>
                                    <ul class="formListing">
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>First Name <span>(as per passport)</span></label>
                                                <input type="text" id="fName" name="fName" placeholder="First Name">
                                            </div>
                                        </li>
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>Middle Name <span>(Optional)</span></label>
                                                <input type="text" id="mName" name="mName" placeholder="Last Name" value=" ">
                                            </div>
                                        </li>
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>Last Name <span>(as per passport)</span></label>
                                                <input type="text" id="lName" name="lName" placeholder="Last Name">
                                            </div>
                                        </li>
                                        <!-- <li class="thirds">
                                            <div class="formField">
                                                <label>Valid Phone Number (+91)</label>
                                                <input type="number" onfocusout="validateMobile(this.value,1)"  id="philippinesPhone"  placeholder="Phone Number">
                                                <span class="error" style="color:red" id="invalid_mobile1">Invalid Mobile Number(10 Digits)</span> 
                                            </div>
                                        </li>-->
                                       
                                        <li class="thirds">
                                            <div class="formField"> 
                                                <label>Gender</label>
                                                <div class="selectWrap">
                                                    <select id="gender" class="select2" style="width:100%;" name="gender">
                                                        <option value="">-- select one --</option>
                                                        <option>Male</option>
                                                        <option>Female</option>
                                                        <option>Other</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </li>
                                        <!--<li class="thirds">
                                            <div class="formField">
                                                <label>Student Passport Number</label>
                                                <input type="text"  id="sPassportNumber" placeholder="Student Passport Number">
                                            </div>
                                        </li>-->                                   
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>Nationality <span>(as per passport)</span></label>
                                                <div class="selectWrap">
                                                    <select id="nationality" name="nationality" class="select2" style="width:100%;">
                                                        <option value="">-- select one --</option>
                                                        <option value="afghan">Afghan</option>
                                                        <option value="albanian">Albanian</option>
                                                        <option value="algerian">Algerian</option>
                                                        <option value="american">American</option>
                                                        <option value="andorran">Andorran</option>
                                                        <option value="angolan">Angolan</option>
                                                        <option value="antiguans">Antiguans</option>
                                                        <option value="argentinean">Argentinean</option>
                                                        <option value="armenian">Armenian</option>
                                                        <option value="australian">Australian</option>
                                                        <option value="austrian">Austrian</option>
                                                        <option value="azerbaijani">Azerbaijani</option>
                                                        <option value="bahamian">Bahamian</option>
                                                        <option value="bahraini">Bahraini</option>
                                                        <option value="bangladeshi">Bangladeshi</option>
                                                        <option value="barbadian">Barbadian</option>
                                                        <option value="barbudans">Barbudans</option>
                                                        <option value="batswana">Batswana</option>
                                                        <option value="belarusian">Belarusian</option>
                                                        <option value="belgian">Belgian</option>
                                                        <option value="belizean">Belizean</option>
                                                        <option value="beninese">Beninese</option>
                                                        <option value="bhutanese">Bhutanese</option>
                                                        <option value="bolivian">Bolivian</option>
                                                        <option value="bosnian">Bosnian</option>
                                                        <option value="brazilian">Brazilian</option>
                                                        <option value="british">British</option>
                                                        <option value="bruneian">Bruneian</option>
                                                        <option value="bulgarian">Bulgarian</option>
                                                        <option value="burkinabe">Burkinabe</option>
                                                        <option value="burmese">Burmese</option>
                                                        <option value="burundian">Burundian</option>
                                                        <option value="cambodian">Cambodian</option>
                                                        <option value="cameroonian">Cameroonian</option>
                                                        <option value="canadian">Canadian</option>
                                                        <option value="cape verdean">Cape Verdean</option>
                                                        <option value="central african">Central African</option>
                                                        <option value="chadian">Chadian</option>
                                                        <option value="chilean">Chilean</option>
                                                        <option value="chinese">Chinese</option>
                                                        <option value="colombian">Colombian</option>
                                                        <option value="comoran">Comoran</option>
                                                        <option value="congolese">Congolese</option>
                                                        <option value="costa rican">Costa Rican</option>
                                                        <option value="croatian">Croatian</option>
                                                        <option value="cuban">Cuban</option>
                                                        <option value="cypriot">Cypriot</option>
                                                        <option value="czech">Czech</option>
                                                        <option value="danish">Danish</option>
                                                        <option value="djibouti">Djibouti</option>
                                                        <option value="dominican">Dominican</option>
                                                        <option value="dutch">Dutch</option>
                                                        <option value="east timorese">East Timorese</option>
                                                        <option value="ecuadorean">Ecuadorean</option>
                                                        <option value="egyptian">Egyptian</option>
                                                        <option value="emirian">Emirian</option>
                                                        <option value="equatorial guinean">Equatorial Guinean</option>
                                                        <option value="eritrean">Eritrean</option>
                                                        <option value="estonian">Estonian</option>
                                                        <option value="ethiopian">Ethiopian</option>
                                                        <option value="fijian">Fijian</option>
                                                        <option value="filipino">Filipino</option>
                                                        <option value="finnish">Finnish</option>
                                                        <option value="french">French</option>
                                                        <option value="gabonese">Gabonese</option>
                                                        <option value="gambian">Gambian</option>
                                                        <option value="georgian">Georgian</option>
                                                        <option value="german">German</option>
                                                        <option value="ghanaian">Ghanaian</option>
                                                        <option value="greek">Greek</option>
                                                        <option value="grenadian">Grenadian</option>
                                                        <option value="guatemalan">Guatemalan</option>
                                                        <option value="guinea-bissauan">Guinea-Bissauan</option>
                                                        <option value="guinean">Guinean</option>
                                                        <option value="guyanese">Guyanese</option>
                                                        <option value="haitian">Haitian</option>
                                                        <option value="herzegovinian">Herzegovinian</option>
                                                        <option value="honduran">Honduran</option>
                                                        <option value="hungarian">Hungarian</option>
                                                        <option value="icelander">Icelander</option>
                                                        <option value="indian">Indian</option>
                                                        <option value="indonesian">Indonesian</option>
                                                        <option value="iranian">Iranian</option>
                                                        <option value="iraqi">Iraqi</option>
                                                        <option value="irish">Irish</option>
                                                        <option value="israeli">Israeli</option>
                                                        <option value="italian">Italian</option>
                                                        <option value="ivorian">Ivorian</option>
                                                        <option value="jamaican">Jamaican</option>
                                                        <option value="japanese">Japanese</option>
                                                        <option value="jordanian">Jordanian</option>
                                                        <option value="kazakhstani">Kazakhstani</option>
                                                        <option value="kenyan">Kenyan</option>
                                                        <option value="kittian and nevisian">Kittian and Nevisian</option>
                                                        <option value="kuwaiti">Kuwaiti</option>
                                                        <option value="kyrgyz">Kyrgyz</option>
                                                        <option value="laotian">Laotian</option>
                                                        <option value="latvian">Latvian</option>
                                                        <option value="lebanese">Lebanese</option>
                                                        <option value="liberian">Liberian</option>
                                                        <option value="libyan">Libyan</option>
                                                        <option value="liechtensteiner">Liechtensteiner</option>
                                                        <option value="lithuanian">Lithuanian</option>
                                                        <option value="luxembourger">Luxembourger</option>
                                                        <option value="macedonian">Macedonian</option>
                                                        <option value="malagasy">Malagasy</option>
                                                        <option value="malawian">Malawian</option>
                                                        <option value="malaysian">Malaysian</option>
                                                        <option value="maldivan">Maldivan</option>
                                                        <option value="malian">Malian</option>
                                                        <option value="maltese">Maltese</option>
                                                        <option value="marshallese">Marshallese</option>
                                                        <option value="mauritanian">Mauritanian</option>
                                                        <option value="mauritian">Mauritian</option>
                                                        <option value="mexican">Mexican</option>
                                                        <option value="micronesian">Micronesian</option>
                                                        <option value="moldovan">Moldovan</option>
                                                        <option value="monacan">Monacan</option>
                                                        <option value="mongolian">Mongolian</option>
                                                        <option value="moroccan">Moroccan</option>
                                                        <option value="mosotho">Mosotho</option>
                                                        <option value="motswana">Motswana</option>
                                                        <option value="mozambican">Mozambican</option>
                                                        <option value="namibian">Namibian</option>
                                                        <option value="nauruan">Nauruan</option>
                                                        <option value="nepalese">Nepalese</option>
                                                        <option value="new zealander">New Zealander</option>
                                                        <option value="ni-vanuatu">Ni-Vanuatu</option>
                                                        <option value="nicaraguan">Nicaraguan</option>
                                                        <option value="nigerien">Nigerien</option>
                                                        <option value="north korean">North Korean</option>
                                                        <option value="northern irish">Northern Irish</option>
                                                        <option value="norwegian">Norwegian</option>
                                                        <option value="omani">Omani</option>
                                                        <option value="pakistani">Pakistani</option>
                                                        <option value="palauan">Palauan</option>
                                                        <option value="panamanian">Panamanian</option>
                                                        <option value="papua new guinean">Papua New Guinean</option>
                                                        <option value="paraguayan">Paraguayan</option>
                                                        <option value="peruvian">Peruvian</option>
                                                        <option value="polish">Polish</option>
                                                        <option value="portuguese">Portuguese</option>
                                                        <option value="qatari">Qatari</option>
                                                        <option value="romanian">Romanian</option>
                                                        <option value="russian">Russian</option>
                                                        <option value="rwandan">Rwandan</option>
                                                        <option value="saint lucian">Saint Lucian</option>
                                                        <option value="salvadoran">Salvadoran</option>
                                                        <option value="samoan">Samoan</option>
                                                        <option value="san marinese">San Marinese</option>
                                                        <option value="sao tomean">Sao Tomean</option>
                                                        <option value="saudi">Saudi</option>
                                                        <option value="scottish">Scottish</option>
                                                        <option value="senegalese">Senegalese</option>
                                                        <option value="serbian">Serbian</option>
                                                        <option value="seychellois">Seychellois</option>
                                                        <option value="sierra leonean">Sierra Leonean</option>
                                                        <option value="singaporean">Singaporean</option>
                                                        <option value="slovakian">Slovakian</option>
                                                        <option value="slovenian">Slovenian</option>
                                                        <option value="solomon islander">Solomon Islander</option>
                                                        <option value="somali">Somali</option>
                                                        <option value="south african">South African</option>
                                                        <option value="south korean">South Korean</option>
                                                        <option value="spanish">Spanish</option>
                                                        <option value="sri lankan">Sri Lankan</option>
                                                        <option value="sudanese">Sudanese</option>
                                                        <option value="surinamer">Surinamer</option>
                                                        <option value="swazi">Swazi</option>
                                                        <option value="swedish">Swedish</option>
                                                        <option value="swiss">Swiss</option>
                                                        <option value="syrian">Syrian</option>
                                                        <option value="taiwanese">Taiwanese</option>
                                                        <option value="tajik">Tajik</option>
                                                        <option value="tanzanian">Tanzanian</option>
                                                        <option value="thai">Thai</option>
                                                        <option value="togolese">Togolese</option>
                                                        <option value="tongan">Tongan</option>
                                                        <option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
                                                        <option value="tunisian">Tunisian</option>
                                                        <option value="turkish">Turkish</option>
                                                        <option value="tuvaluan">Tuvaluan</option>
                                                        <option value="ugandan">Ugandan</option>
                                                        <option value="ukrainian">Ukrainian</option>
                                                        <option value="uruguayan">Uruguayan</option>
                                                        <option value="uzbekistani">Uzbekistani</option>
                                                        <option value="venezuelan">Venezuelan</option>
                                                        <option value="vietnamese">Vietnamese</option>
                                                        <option value="welsh">Welsh</option>
                                                        <option value="yemenite">Yemenite</option>
                                                        <option value="zambian">Zambian</option>
                                                        <option value="zimbabwean">Zimbabwean</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </li>    
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>Date Of Birth</label>
                                                <div class="selectWrap">
                                                    <input type="date" id="dob" onfocusout="validationDOB()" name="dob">
                                                     <span  style="color:red;font-size:18px" id="invalid_dob1" ></span> 
                                                </div>
                                            </div>
                                        </li>  
                                        
                                         
                                         <li class="full mrBtm-0">
                                            <h2 class="text_style">Contact Details</h2>
                                        </li>
                                        
                                         <li class="thirds">
                                            <div class="formField">
                                                <label>Email</label> 
                                                <input type="email" name="email" id="email" onfocusout="validateEmail(this.value,1);" placeholder="Email" >
                                                <!--<span class="error" style="color:red" id="invalid_email1">Email-id is invalid</span>  -->
                                            </div>
                                        </li>
                                       
                                        
                                        
                                          <li class="thirds">
                                         <lable></lable>
                                        <div class="input-group mb-4" style=" margin-top: 20px; height: 30px;">
      <div class="input-group-prepend">
       <button type="button" class="btn btn-primary" id="btnonOtp" class="btn btn-primary" onclick="btnonOtp()">Send OTP</button>
      </div>
      <input type="text" name="varify_otp_email" id="varify_otp_email" placeholder="Enter Email OTP" style="width: 75%;height: 36px;" required>
    
    </div> 
    
   

                                             
                                             
                                           
                                        </li>
                                        
                                         <li class="half">
                                           
                                           <div class="input-group mb-3" style="margin-top: 21px;height: 35px;">
  <div class="input-group-prepend">
    <div class="input-group-text">
   <button class="btn btn-primary" type="button" id="btnonOtpVarify" class="btn btn-primary" onclick="btnonOtpVarify()">Validate OTP</button>
    <h4 class="view-coment" style="color: green;margin-left: 25px;"></h4>
    </div>
  </div>
 
 
</div>

                                           
                                        </li>
                                        
                                        
                                        
                                        
                                        
                                         <li class="thirds">
                                            <div class="formField">
                                                <label>Mobile Number(with country code)</label>
                                                <input type="text" name="whatsappNumber" id="mobile" placeholder="Whatsapp Number(ex:+91 XXXX  XXXX)" required>
                                            </div>
                                        </li>
                                  <li class="thirds">
                                         <lable></lable>
                                        <div class="input-group mb-4" style=" margin-top: 20px; height: 30px;">
      <div class="input-group-prepend">
       <button type="button" class="btn btn-primary" id="btnonOtpsms" name="smsotp" class="btn btn-primary" onclick="btnonOtpsms()">Send OTP</button>
      </div>
      <input type="text" name="varify_otp_sms" id="varify_otp_sms" placeholder="Enter Sms OTP" style="width: 75%;height: 36px;" required>
    
    </div> 
    
   
 <!--<div class="formField">-->
 <!--                                                <button type="button" id="btnonOtpsms" name="smsotp" class="btn btn-primary" onclick="btnonOtpsms()">Send SMS OTP</button>-->
 <!--                                                 <input type="text" name="varify_otp_sms" id="varify_otp_sms" placeholder="Validate OTP">-->
 <!--                                           </div>-->
                                             
                                             
                                           
                                        </li>
                                        
                                         <li class="half">
                                           
                                           <div class="input-group mb-3" style="margin-top: 21px;height: 35px;">
  <div class="input-group-prepend">
    <div class="input-group-text">
   <button class="btn btn-primary" type="button" id="btnonOtpVarifysms" class="btn btn-primary" onclick="btnonOtpVarifysms()">Validate OTP</button>
    <h4 class="view-coment-sms" style="color: green;margin-left: 25px;"></h4>
    </div>
  </div>
 
 
</div>

                                            <!--<div class="formField" style="width: max-content;">  -->
                                            <!--    <button type="button" id="btnonOtpVarifysms" class="btn btn-primary" onclick="btnonOtpVarifysms()">Varify SMS OTP</button>-->
                                            <!--    <h1 class="view-coment-sms" style="color: green;margin-left: 65px;"></h1>-->
                                               
                                            <!--</div>-->
                                        </li>
                                        
                                            <li class="full mrBtm-0">
                                            <h2 class="text_style">10<sup>th</sup> Details</h2>
                                        </li>
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>Board</label>
                                                <input type="text" id="tenthBoard" placeholder="Board" name="tenthBoard">
                                            </div>
                                        </li>
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>State</label>
                                                <input type="text" id="tenthState" placeholder="State" name="tenthState">
                                            </div>
                                        </li>
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>Country</label>
                                                <input type="text" id="tenthCountry" placeholder="Country" name="tenthCountry">
                                            </div>
                                        </li>
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>Year of Passing</label>
                                                <input type="text" id="tenthPassingYear" name="tenthPassingYear">
                                            </div>
                                        </li>
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>10<sup>th</sup> Percentage</label>
                                                <input type="text" id="tenthPercentage" placeholder="10th Standard Percentage" value=" " name="tenthPercentage">
                                            </div>
                                        </li>
                                        <li class="full mrBtm-0">
                                            <h2 class="text_style">12<sup>th</sup> Details</h2>
                                        </li>
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>Board</label>
                                                <input type="text" id="twelvethBoard" placeholder="Board" name="twelvethBoard">
                                            </div>
                                        </li>
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>State</label>
                                                <input type="text" id="twelvethState" placeholder="State" name="twelvethState">
                                            </div>
                                        </li>
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>Country</label>
                                                <input type="text" id="twelvethCountry" placeholder="Country" name="twelvethCountry">
                                            </div>
                                        </li>
                                        
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>12<sup>th</sup> Percentage</label>
                                                <input type="text" id="twelvethPercentage" value=" " name="twelvethPercentage">
                                            </div>
                                        </li>
                                         <li class="thirds">
                                            <div class="formField">
                                                <label>year of passing</label>
                                                <input type="text" id="twelvethPassingYear" name="twelvethPassingYear">
                                            </div>
                                        </li>
                                        <li class="full mrBtm-0">
                                            <h2 class="text_style">12<sup>th</sup> Mark Details<span class="subTxt">(Physics,Chemistry,Biology Mark is compulsory.)</span></h2>
                                        </li>
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>Subject</label>
                                                <input type="text" id="ss1" placeholder="physics" name="ss1" value="physics" readonly>
                                            </div>
                                        </li>
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>Mark</label>
                                                <input type="text" id="mm1" placeholder="Mark 1" name="mm1">
                                            </div>
                                        </li>
                                         <li class="thirds">
                                            <div class="formField">
                                                <label>NEET Score </label> 
                                                <input type="text" id="neetScore" placeholder="NEET Score" onfocusout="validationNeet()" name="neetScore"> 
                                                <span style="color:red;font-size:18px" id="invalid_neet"></span>
                                            </div>
                                        </li> 
                                         <li class="thirds">
                                            <div class="formField">
                                               
                                            </div>
                                        </li> 
                                        <li class="thirds">
                                            <div class="formField">
                                                <label></label>
                                                <input type="text" id="ss2" placeholder="chemisrty" name="ss2" value="chemistry" readonly>
                                            </div>
                                        </li>
                                        <li class="thirds">
                                            <div class="formField">
                                                <label></label>
                                                <input type="text" id="mm2" placeholder="Mark 2" name="mm2">
                                            </div>
                                        </li>
                                         <li class="thirds">
                                            <div class="formField">
                                                <label>NEET Applicable</label> 
                                                <div class="selectWrap"> 
                                                    <select id="neet_applicable" class="select2" style="width:100%;" name="neet_applicable">
                                                        <option value="">-- select one --</option> 
                                                        <option value="Yes">Yes</option>
                                                        <option value="No">No</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </li>
                                         <li class="thirds">
                                            <div class="formField">
                                               
                                            </div>
                                        </li>
                                        <li class="thirds">
                                            <div class="formField">
                                                <label></label>
                                                <input type="text" id="ss3" placeholder="biology" name="ss3" value="biology" readonly>
                                            </div>
                                        </li>
                                        <li class="thirds">
                                            <div class="formField">
                                                <label></label>
                                                <input type="text" id="mm3" placeholder="Mark 3" name="mm3">
                                            </div>
                                        </li>
                                        
                                         <li class="thirds">
                                            <div class="formField">
                                                <label>NEET - year of passing/appearing</label>
                                                <div class="selectWrap"> 
                                                    <select id="neet_passing" class="select2" style="width:100%;" name="neet_passing"> 
                                                        <option value="">-- select one --</option> 
                                                        <option value="2017">2017</option>
                                                        <option value="2018">2018</option>
                                                        <option value="2019">2019</option>
                                                        <option value="2020">2020</option>
                                                        <option value="2021">2021</option>
                                                        <option value="2022">2022</option>
                                                        <option value="2023">2023</option>
                                                        <option value="2024">2024</option>
                                                        <option value="2025">2025</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </li>
                                        
                                        <li class="full mrBtm-0">
                                            <h2 class="text_style">Family Details</h2>
                                        </li>
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>Name of Father/Guardian</label>
                                                <input type="text" id="fatherName" placeholder="Name of Father/Guardian" name="fatherName">
                                            </div>
                                        </li>
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>Phone Number <span>(should be verifiable)</span></label>
                                                <input type="text" id="fatherMobile" onfocusout="validateMobile(this.value,2)" placeholder="Phone Number" name="fatherMobile">
                                                <span class="error" style="color:red" id="invalid_mobile2">Invalid Mobile Number(10 Digits)</span> 
                                            </div>
                                        </li>
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>Email</label>
                                                <input type="email" id="fatherEmail" onfocusout="validateEmail(this.value,2);" placeholder="Email" name="fatherEmail">
                                                <span class="error" style="color:red" id="invalid_email2">Email-id is invalid</span>
                                            </div>
                                        </li>
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>Name of Mother/Guardian</label>
                                                <input type="text" id="motherName" placeholder="Name of Mother/Guardian" name="motherName">
                                            </div>
                                        </li>
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>Phone Number <span>(should be verifiable)</span></label>
                                                <input type="text" id="motherMobile" onfocusout="validateMobile(this.value,3)" placeholder="Phone Number" name="motherMobile">
                                                <span class="error" style="color:red" id="invalid_mobile3">Invalid Mobile Number(10 Digits)</span> 
                                            </div>
                                        </li>
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>Email</label>
                                                <input type="email" id="motherEmail" onfocusout="validateEmail(this.value,3);" placeholder="Email" name="motherEmail">
                                                <span class="error" style="color:red" id="invalid_email3">Email-id is invalid</span>
                                            </div>
                                        </li>
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>Student Type</label>
                                                <div class="selectWrap">
                                                    <select id="student_type"  class="select2" style="width:100%;" name="student_type">
                                                        <option value="">-- select one --</option>
                                                        <option value="Pune BS">Pune BS </option>
                                                        <option value="Chennai BS">Chennai BS </option>
                                                       <option value="Direct MD"> Direct MD</option>
                                                       <option value="Direct Philippines">Direct Philippines</option>
                                                       <option value="Pune Neet Not Qulified">Pune Neet Not Qulified</option>
                                                       <option value="Chennai Neet Not Qulified">Chennai Neet Not Qulified</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </li>
                                        
                                        
                                        
                                        <li class="full mrBtm-0">
                                            <h2 class="text_style">Address Details</h2>
                                        </li>
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>Communication Address</label>
                                                <input type="text" id="temporaryAddress" placeholder="Communication Address" name="temporaryAddress">
                                            </div>
                                        </li>
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>Country</label>
                                                <div class="selectWrap">
                                                    <select id="tCountry"  class="select2" style="width:100%;" name="tCountry">
                                                        <option value="">-- select one --</option>
                                                        <option value="Afghanistan">Afghanistan</option>
                                                        <option value="Åland Islands">Åland Islands</option>
                                                        <option value="Albania">Albania</option>
                                                        <option value="Algeria">Algeria</option>
                                                        <option value="American Samoa">American Samoa</option>
                                                        <option value="Andorra">Andorra</option>
                                                        <option value="Angola">Angola</option>
                                                        <option value="Anguilla">Anguilla</option>
                                                        <option value="Antarctica">Antarctica</option>
                                                        <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                        <option value="Argentina">Argentina</option>
                                                        <option value="Armenia">Armenia</option>
                                                        <option value="Aruba">Aruba</option>
                                                        <option value="Australia">Australia</option>
                                                        <option value="Austria">Austria</option>
                                                        <option value="Azerbaijan">Azerbaijan</option>
                                                        <option value="Bahamas">Bahamas</option>
                                                        <option value="Bahrain">Bahrain</option>
                                                        <option value="Bangladesh">Bangladesh</option>
                                                        <option value="Barbados">Barbados</option>
                                                        <option value="Belarus">Belarus</option>
                                                        <option value="Belgium">Belgium</option>
                                                        <option value="Belize">Belize</option>
                                                        <option value="Benin">Benin</option>
                                                        <option value="Bermuda">Bermuda</option>
                                                        <option value="Bhutan">Bhutan</option>
                                                        <option value="Bolivia">Bolivia</option>
                                                        <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                                        <option value="Botswana">Botswana</option>
                                                        <option value="Bouvet Island">Bouvet Island</option>
                                                        <option value="Brazil">Brazil</option>
                                                        <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                                        <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                        <option value="Bulgaria">Bulgaria</option>
                                                        <option value="Burkina Faso">Burkina Faso</option>
                                                        <option value="Burundi">Burundi</option>
                                                        <option value="Cambodia">Cambodia</option>
                                                        <option value="Cameroon">Cameroon</option>
                                                        <option value="Canada">Canada</option>
                                                        <option value="Cape Verde">Cape Verde</option>
                                                        <option value="Cayman Islands">Cayman Islands</option>
                                                        <option value="Central African Republic">Central African Republic</option>
                                                        <option value="Chad">Chad</option>
                                                        <option value="Chile">Chile</option>
                                                        <option value="China">China</option>
                                                        <option value="Christmas Island">Christmas Island</option>
                                                        <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                                        <option value="Colombia">Colombia</option>
                                                        <option value="Comoros">Comoros</option>
                                                        <option value="Congo">Congo</option>
                                                        <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                                                        <option value="Cook Islands">Cook Islands</option>
                                                        <option value="Costa Rica">Costa Rica</option>
                                                        <option value="Cote D'ivoire">Cote D'ivoire</option>
                                                        <option value="Croatia">Croatia</option>
                                                        <option value="Cuba">Cuba</option>
                                                        <option value="Cyprus">Cyprus</option>
                                                        <option value="Czech Republic">Czech Republic</option>
                                                        <option value="Denmark">Denmark</option>
                                                        <option value="Djibouti">Djibouti</option>
                                                        <option value="Dominica">Dominica</option>
                                                        <option value="Dominican Republic">Dominican Republic</option>
                                                        <option value="Ecuador">Ecuador</option>
                                                        <option value="Egypt">Egypt</option>
                                                        <option value="El Salvador">El Salvador</option>
                                                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                        <option value="Eritrea">Eritrea</option>
                                                        <option value="Estonia">Estonia</option>
                                                        <option value="Ethiopia">Ethiopia</option>
                                                        <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                                        <option value="Faroe Islands">Faroe Islands</option>
                                                        <option value="Fiji">Fiji</option>
                                                        <option value="Finland">Finland</option>
                                                        <option value="France">France</option>
                                                        <option value="French Guiana">French Guiana</option>
                                                        <option value="French Polynesia">French Polynesia</option>
                                                        <option value="French Southern Territories">French Southern Territories</option>
                                                        <option value="Gabon">Gabon</option>
                                                        <option value="Gambia">Gambia</option>
                                                        <option value="Georgia">Georgia</option>
                                                        <option value="Germany">Germany</option>
                                                        <option value="Ghana">Ghana</option>
                                                        <option value="Gibraltar">Gibraltar</option>
                                                        <option value="Greece">Greece</option>
                                                        <option value="Greenland">Greenland</option>
                                                        <option value="Grenada">Grenada</option>
                                                        <option value="Guadeloupe">Guadeloupe</option>
                                                        <option value="Guam">Guam</option>
                                                        <option value="Guatemala">Guatemala</option>
                                                        <option value="Guernsey">Guernsey</option>
                                                        <option value="Guinea">Guinea</option>
                                                        <option value="Guinea-bissau">Guinea-bissau</option>
                                                        <option value="Guyana">Guyana</option>
                                                        <option value="Haiti">Haiti</option>
                                                        <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                                        <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                                        <option value="Honduras">Honduras</option>
                                                        <option value="Hong Kong">Hong Kong</option>
                                                        <option value="Hungary">Hungary</option>
                                                        <option value="Iceland">Iceland</option>
                                                        <option value="India">India</option>
                                                        <option value="Indonesia">Indonesia</option>
                                                        <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                                        <option value="Iraq">Iraq</option>
                                                        <option value="Ireland">Ireland</option>
                                                        <option value="Isle of Man">Isle of Man</option>
                                                        <option value="Israel">Israel</option>
                                                        <option value="Italy">Italy</option>
                                                        <option value="Jamaica">Jamaica</option>
                                                        <option value="Japan">Japan</option>
                                                        <option value="Jersey">Jersey</option>
                                                        <option value="Jordan">Jordan</option>
                                                        <option value="Kazakhstan">Kazakhstan</option>
                                                        <option value="Kenya">Kenya</option>
                                                        <option value="Kiribati">Kiribati</option>
                                                        <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                                        <option value="Korea, Republic of">Korea, Republic of</option>
                                                        <option value="Kuwait">Kuwait</option>
                                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                        <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                                        <option value="Latvia">Latvia</option>
                                                        <option value="Lebanon">Lebanon</option>
                                                        <option value="Lesotho">Lesotho</option>
                                                        <option value="Liberia">Liberia</option>
                                                        <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                                        <option value="Liechtenstein">Liechtenstein</option>
                                                        <option value="Lithuania">Lithuania</option>
                                                        <option value="Luxembourg">Luxembourg</option>
                                                        <option value="Macao">Macao</option>
                                                        <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                                        <option value="Madagascar">Madagascar</option>
                                                        <option value="Malawi">Malawi</option>
                                                        <option value="Malaysia">Malaysia</option>
                                                        <option value="Maldives">Maldives</option>
                                                        <option value="Mali">Mali</option>
                                                        <option value="Malta">Malta</option>
                                                        <option value="Marshall Islands">Marshall Islands</option>
                                                        <option value="Martinique">Martinique</option>
                                                        <option value="Mauritania">Mauritania</option>
                                                        <option value="Mauritius">Mauritius</option>
                                                        <option value="Mayotte">Mayotte</option>
                                                        <option value="Mexico">Mexico</option>
                                                        <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                                        <option value="Moldova, Republic of">Moldova, Republic of</option>
                                                        <option value="Monaco">Monaco</option>
                                                        <option value="Mongolia">Mongolia</option>
                                                        <option value="Montenegro">Montenegro</option>
                                                        <option value="Montserrat">Montserrat</option>
                                                        <option value="Morocco">Morocco</option>
                                                        <option value="Mozambique">Mozambique</option>
                                                        <option value="Myanmar">Myanmar</option>
                                                        <option value="Namibia">Namibia</option>
                                                        <option value="Nauru">Nauru</option>
                                                        <option value="Nepal">Nepal</option>
                                                        <option value="Netherlands">Netherlands</option>
                                                        <option value="Netherlands Antilles">Netherlands Antilles</option>
                                                        <option value="New Caledonia">New Caledonia</option>
                                                        <option value="New Zealand">New Zealand</option>
                                                        <option value="Nicaragua">Nicaragua</option>
                                                        <option value="Niger">Niger</option>
                                                        <option value="Nigeria">Nigeria</option>
                                                        <option value="Niue">Niue</option>
                                                        <option value="Norfolk Island">Norfolk Island</option>
                                                        <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                                        <option value="Norway">Norway</option>
                                                        <option value="Oman">Oman</option>
                                                        <option value="Pakistan">Pakistan</option>
                                                        <option value="Palau">Palau</option>
                                                        <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                                        <option value="Panama">Panama</option>
                                                        <option value="Papua New Guinea">Papua New Guinea</option>
                                                        <option value="Paraguay">Paraguay</option>
                                                        <option value="Peru">Peru</option>
                                                        <option value="Philippines">Philippines</option>
                                                        <option value="Pitcairn">Pitcairn</option>
                                                        <option value="Poland">Poland</option>
                                                        <option value="Portugal">Portugal</option>
                                                        <option value="Puerto Rico">Puerto Rico</option>
                                                        <option value="Qatar">Qatar</option>
                                                        <option value="Reunion">Reunion</option>
                                                        <option value="Romania">Romania</option>
                                                        <option value="Russian Federation">Russian Federation</option>
                                                        <option value="Rwanda">Rwanda</option>
                                                        <option value="Saint Helena">Saint Helena</option>
                                                        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                        <option value="Saint Lucia">Saint Lucia</option>
                                                        <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                                        <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                                                        <option value="Samoa">Samoa</option>
                                                        <option value="San Marino">San Marino</option>
                                                        <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                                        <option value="Senegal">Senegal</option>
                                                        <option value="Serbia">Serbia</option>
                                                        <option value="Seychelles">Seychelles</option>
                                                        <option value="Sierra Leone">Sierra Leone</option>
                                                        <option value="Singapore">Singapore</option>
                                                        <option value="Slovakia">Slovakia</option>
                                                        <option value="Slovenia">Slovenia</option>
                                                        <option value="Solomon Islands">Solomon Islands</option>
                                                        <option value="Somalia">Somalia</option>
                                                        <option value="South Africa">South Africa</option>
                                                        <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                                                        <option value="Spain">Spain</option>
                                                        <option value="Sri Lanka">Sri Lanka</option>
                                                        <option value="Sudan">Sudan</option>
                                                        <option value="Suriname">Suriname</option>
                                                        <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                                        <option value="Swaziland">Swaziland</option>
                                                        <option value="Sweden">Sweden</option>
                                                        <option value="Switzerland">Switzerland</option>
                                                        <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                                        <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                                                        <option value="Tajikistan">Tajikistan</option>
                                                        <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                                        <option value="Thailand">Thailand</option>
                                                        <option value="Timor-leste">Timor-leste</option>
                                                        <option value="Togo">Togo</option>
                                                        <option value="Tokelau">Tokelau</option>
                                                        <option value="Tonga">Tonga</option>
                                                        <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                        <option value="Tunisia">Tunisia</option>
                                                        <option value="Turkey">Turkey</option>
                                                        <option value="Turkmenistan">Turkmenistan</option>
                                                        <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                                        <option value="Tuvalu">Tuvalu</option>
                                                        <option value="Uganda">Uganda</option>
                                                        <option value="Ukraine">Ukraine</option>
                                                        <option value="United Arab Emirates">United Arab Emirates</option>
                                                        <option value="United Kingdom">United Kingdom</option>
                                                        <option value="United States">United States</option>
                                                        <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                                        <option value="Uruguay">Uruguay</option>
                                                        <option value="Uzbekistan">Uzbekistan</option>
                                                        <option value="Vanuatu">Vanuatu</option>
                                                        <option value="Venezuela">Venezuela</option>
                                                        <option value="Viet Nam">Viet Nam</option>
                                                        <option value="Virgin Islands, British">Virgin Islands, British</option>
                                                        <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                                        <option value="Wallis and Futuna">Wallis and Futuna</option>
                                                        <option value="Western Sahara">Western Sahara</option>
                                                        <option value="Yemen">Yemen</option>
                                                        <option value="Zambia">Zambia</option>
                                                        <option value="Zimbabwe">Zimbabwe</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>State</label>
                                                <input type="text" id="tState" placeholder="state" name="tState">
                                            </div>
                                        </li>
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>District</label>
                                                <input type="text" id="tDistrict" placeholder="District" name="tDistrict">
                                            </div>
                                        </li>
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>City</label>
                                                <input type="text" id="tCity" placeholder="City" name="tCity">
                                            </div>
                                        </li>
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>Pincode</label>
                                                <input type="text" id="tPincode" placeholder="Pincode" name="tPincode">
                                            </div>                                           
                                        </li>
                                    
                                        <li class="full mrBtm-0">
                                            <h2 class="text_style">Do you have a passport?</h2>
                                        </li>
                                        <li class="full">
                                            <!--<label><b>Do you have a passport?</b></label>-->
                                            <div class="radioWrap">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="customRadiop" name="radiopassport" value="yes" class="custom-control-input">
                                                    <label class="custom-control-label" for="customRadiop">Yes</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="customRadiop1" name="radiopassport" value="no" class="custom-control-input">
                                                    <label class="custom-control-label" for="customRadiop1">No</label>
                                                </div>
                                            </div>
                                          
                                        </li><?php $messagewhatspp = "Thank you!"?>
                                        <li class="full ctaList">
                                            <button type="submit" class="btn btn-info" name="submit" id="submit">Submit</button>
                                            
                                        </li> 
                                    </ul>
                                </fieldset>
                            </form>



        <!--<script src="assets/js/jquery.min.js"></script>-->

        <script src="assets/js/bootstrap.bundle.min.js"></script>

        <script src="assets/js/bootstrap-select.min.js"></script>

        <!--<script src="assets/js/main.js"></script>-->

       <!-- <script src="myjs/reg.js"></script>-->

<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>


        <script>

            $('.error').hide();
            
$('#submit').click(function()
{ 
    $('.registration-form').validate({
        rules:{
            email:{
                required:true
            },
            mobile:{
                required:true,
            }
        }
    });
    alert('called submit btn click');
    
     var x = document.forms["myForm"]["mobile"].value;

    
    
    if (x == "") {
    alert("Mobile must be filled out");
    return false;
  }
      
      
    $.ajax({
        url: "whatsappnumberverify.php",
        type:'POST',
        data:
        {
            // The key is 'mobile'. This will be the same key in $_POST[] that holds the mobile number value.
            mobile: $('#mobile').val()
        },
        success: function(msg)
        {
            alert('Whatsapp number is verified!');
        }               
    });
    
    // if($('.view-coment').text() =='' || $('.view-coment').text() != 'Successfully Varify SMS OTP')
    // {
    //     alert('Please validate the email otp correct.');
    //     return false;
    // }
    
    // if($('.view-coment-sms').text() =='' || $('.view-coment-sms').text() != 'Successfully Varify OTP'){
    //       alert('Please validate the sms otp correct.');
    //       return false;
    // }
});
           

           $(document).ready(function () {
        
            
               $('.registration-form fieldset:first-child').fadeIn('slow');
               
               
                $('.showBox1').hide();

                $(':radio[id=customRadiop]').change(function () {

                    $("#passportyes").removeClass("none");

                    $('.showBox1').show();

                });

                $(':radio[id=customRadiop1]').change(function () {

                    $("#passportyes").addClass("none");

                    $('.showBox1').hide();

                });

            });





            $(document).ready(function () {

                $('.showBox').hide();

                $(':radio[id=customRadio3]').change(function () {

                    $("#yes").removeClass("none");

                    $('.showBox').show();

                });

                $(':radio[id=customRadio4]').change(function () {

                    $("#ifyes").addClass("none");

                    $('.showBox').hide();

                });

            });



//            $(".btn-act").click(function () {

//                var $selected = $(".progressWrap");

//                $next = $selected.find('li.active');

//                $next.addClass("active");

//

//                //target next sibling of active

//                $next.next('li').addClass('active');

//            });



            $(".btn-prev").click(function () {

                var $selected = $(".progressWrap");

                $next = $selected.find('li.active');

                $next.removeClass("active");



                //target previous sibling of active

                $next.prev('li').addClass('active');

            });

        </script>

        <script>

            $('.select2').select2();

        </script>


<script type="text/javascript">
			
		


$('#btnonOtp').click(function()
{ 
  var x = document.forms["myForm"]["email"].value;

    
    
    if (x == "") {
    alert("Email must be filled out");
    return false;
  }
        
    
   
    $.ajax({
        url: "otp_process.php",
        type:'POST',
        data:
        {
            // The key is 'mobile'. This will be the same key in $_POST[] that holds the mobile number value.
            email: $('#email').val()
        },
        success: function(msg)
        {
            alert('OTP Sent Successfully On Your Email Id');
        }               
    });
});





$('#btnonOtpVarify').click(function() 
{ 
    
     var x = document.forms["myForm"]["varify_otp_email"].value;

    
    
    if (x == "") {
    alert("Please Enter Email OTP");
    return false;
  }
  
    $.ajax({
        url: "otpvarify.php",
        type:'POST',
        data:
        {
            // The key is 'mobile'. This will be the same key in $_POST[] that holds the mobile number value. 
            varify_otp_email: $('#varify_otp_email').val()
        },
        success: function(res)
        {
            
            if (res) {
            alert(res);
           $('.view-coment').html(res);
        } 
        else{
            
            alert('otp not valideted');
        }
        
        } 
        
    });
});

			//end of verify otp function


//start sms otp process



$('#btnonOtpsms').click(function()
{ 
    
     var x = document.forms["myForm"]["mobile"].value;

    
    
    if (x == "") {
    alert("Mobile must be filled out");
    return false;
  }
      
      
    $.ajax({
        url: "otp_process_sms.php",
        type:'POST',
        data:
        {
            // The key is 'mobile'. This will be the same key in $_POST[] that holds the mobile number value.
            mobile: $('#mobile').val()
        },
        success: function(msg)
        {
            alert('OTP Sent Successfully On Your Contact Number');
        }               
    });
});



$('#btnonOtpVarifysms').click(function() 
{ 
    
    var x = document.forms["myForm"]["varify_otp_sms"].value;

    
    
    if (x == "") {
    alert("Please Enter Sms OTP");
    return false;
  }
  
    $.ajax({
        url: "otpvarifysms.php",
        type:'POST',
        data:
        {
            // The key is 'mobile'. This will be the same key in $_POST[] that holds the mobile number value. 
            varify_otp_sms: $('#varify_otp_sms').val()
        },
        success: function(ressms)
        {
            
            if (ressms) {
            alert(ressms);
           $('.view-coment-sms').html(ressms);
        } 
        else{
            
            alert('SMS OTP not validated');
        }
        
        } 
        
    });
});


//end sms otp process

			//start of timer function

			function timer(){

					var timer2 = "00:31";
					var interval = setInterval(function() {


					  var timer = timer2.split(':');
					  //by parsing integer, I avoid all extra string processing
					  var minutes = parseInt(timer[0], 10);
					  var seconds = parseInt(timer[1], 10);
					  --seconds;
					  minutes = (seconds < 0) ? --minutes : minutes;
					  
					  seconds = (seconds < 0) ? 59 : seconds;
					  seconds = (seconds < 10) ? '0' + seconds : seconds;
					  //minutes = (minutes < 10) ?  minutes : minutes;
					  $('.countdown').html("Resend otp in:  <b class='text-primary'>"+ minutes + ':' + seconds + " seconds </b>");
					  //if (minutes < 0) clearInterval(interval);
					  if ((seconds <= 0) && (minutes <= 0)){
					  	clearInterval(interval);
					  	$('.countdown').html('');
					  	$('#resend_otp').css("display","block");
					  } 
					  timer2 = minutes + ':' + seconds;
					}, 1000);

				}

				//end of timer


		
		</script>
    </body>

</html>

