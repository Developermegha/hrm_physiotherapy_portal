<?php   
session_start();
session_start();
define('DB_SERVER1','localhost');
define('DB_USER1','m3xukpi5o84k');
define('DB_PASS1' ,'Admin@2021');
define('DB_NAME1', 'dmsfplsm_dmsf2');    
$link = mysqli_connect(DB_SERVER1,DB_USER1,DB_PASS1,DB_NAME1); 


 define('DB_SERVER2','localhost');
define('DB_USER2','m3xukpi5o84k'); 
define('DB_PASS2' ,'Admin@2021');
define('DB_NAME2', 'dmsfplsm_dmsf_db');    
$linkk = mysqli_connect(DB_SERVER2,DB_USER2,DB_PASS2,DB_NAME2); 

$records = mysqli_query($linkk, "SELECT id,consultant_name From consultant");



define('DB_SERVER','localhost');
define('DB_USER','m3xukpi5o84k');
define('DB_PASS' ,'Admin@2021');
define('DB_NAME', 'dmsfplsm_account-portal'); 
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME); 




  



$records1 = mysqli_query($con, "SELECT id,name From tw_consultants");




if (isset($_POST['submit'])) {
    
   

// if(time() - $_SESSION['timestamp'] > 300) { //subtract new timestamp from the old one
//   $_SESSION['timestamp']; 
//     unset($_SESSION['otpsmssuccessfull_verification'], $_SESSION['otpemailsuccessfull_verification'], $_SESSION['timestamp'],$_POST['varify_otp_sms'],$_SESSION['otp']);
//   echo"<script>alert('Somthing Went Wrong!');</script>"; 
// }
  $timestamp =  $_SERVER["REQUEST_TIME"]; 

//if( $_SESSION['otpsmssuccessfull_verification'] !='' && $_SESSION['otpemailsuccessfull_verification'] != '')

// if(($timestamp - $_SESSION['time']) > 900 && ($timestamp - $_SESSION['smsotp_time']) > 900)   
// {
//  // echo"<script>alert('OTP Expired ! Please Generate Again');</script>";   

// }

// else{
    
//echo "yes iam here alright working";die; 

 if(isset($_GET['consultant']))
{    
$consultant = explode("-", $_GET['consultant']);
$name=$consultant[0]; // piece1
$code=$consultant[1]; // piece2
}

//     $email = $_REQUEST['email'];

//     $recordss = mysqli_query($linkk, "SELECT email From student where email = '$email' ");         
    
//   if($recordss->num_rows !=0)
//   {
      
       
//   }
//     else
//     {
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
            
            $consultant_id=$_REQUEST['consultant_id'];
            
           
   if(isset($_GET['consultant']))
{    
$consultant = explode("-", $_GET['consultant']);
$name=$consultant[0]; // piece1
$code=$consultant[1]; // piece2
}

$st=0;


//   test code//


  
    $resultQuery = mysqli_query($linkk, "SELECT regNo,id  FROM student where reg_status =0 Order by id desc limit 1");         
    $lastDegitArray = array();
    while ($rowCode = mysqli_fetch_array($resultQuery)) {
        $lastDegitArray['regNo'] = (int) substr($rowCode['regNo'], 4);
    }
        $newid =++$lastDegitArray['regNo'];
     $first = 'AD21';
   if(strlen($newid) == '1'){
       //DMSFMD0001
        $regNo = $first.'000'.$newid;
   }elseif(strlen($newid) == '2'){
     $regNo = $first.'00'.$newid;
   }else if(strlen($newid) == '3'){
     $regNo = $first.'0'.$newid;
   }elseif(strlen($newid) == '4'){
    $regNo = $first.$newid;die;
   }
    
 


// end test code//
 
    $password=AD.mt_rand();
   // die;
    
    
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
     
     function getRandomString($length = 6) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $string = '';

    for ($i = 0; $i < $length; $i++) {
        $string .= $characters[mt_rand(0, strlen($characters) - 1)];
    }

    return  $string;
}
     $consultantcode= 'CO_'.getRandomString();  
    
    
 // $l_con_no = 'Online' . $MemberID . ($lastDegit + 1); 
 //die;   
  $regstatus=0;   
  
    $status=0;   
                

  $sql = "INSERT INTO student(regNo, password, firstname,lastname,consultant,section,status,mobile,email,reg_status,batch)  
    VALUES('$regNo','$password','$fName','$lName','$consultantcode','$st',$status,$whatsappNumber,'$email',$regstatus,'2021')"; 

if(mysqli_query($linkk, $sql))
{
    
    $loginlink='https://dmsf.ph/student-portal/login';
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
        <img style="width:100%;height: 300px;" src="https://www.kingsinternational.academy/account-portal/assets/emailer-banner_7sep_DMSF.jpg">
      </a>
    </td>
  </tr>
  <tr>
    <td class="content-wrapper" style="padding-left:24px;padding-right:24px;text-align: center;">
        <br />
      <p><b>Dear  '.$firstname.'  Congratulations.</b><br /><br />Welcome to Davao Medical School Foundation Online Registration for MBBS Admission 2021-2022. We are delighted to inform you that your registration process is complete and we have received your application. Your application is under process and we will get in touch with you at the earliest to guide your further for the completion of your enrollment.<br />Login credentials:<br /><b>Username:'.$username.'<br />Password:'.$password.'<br />You can use the credentials given below to login into our student portal. <br/>Link To Student Login Portal: https://dmsf.ph/student-portal/student/login<br />This is your consultant code-<b>' .$consultantcode .'</b>.<br />Please share this code your consultant <br /></b></p>
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
    
    
    if(!empty($_FILES['tenthMarkSheet']['name']))
            { 
                
               $tenthMarkSheet =$regNo."_".$_FILES['tenthMarkSheet']['name'];
               $foto_tmp1 = $_FILES['tenthMarkSheet']['tmp_name'];
               move_uploaded_file($foto_tmp1, "uploads/doc/" . $tenthMarkSheet);
               $ssc=$regNo."_".$_FILES['tenthMarkSheet']['name'];
            }
            
            
            if(!empty($_FILES['twelveMarkSheet']['name']))
            { 
                $twelveMarkSheet =$regNo."_".$_FILES['twelveMarkSheet']['name'];
                $foto_tmp1 = $_FILES['tenthMarkSheet']['tmp_name'];
                move_uploaded_file($foto_tmp1, "uploads/doc/" . $twelveMarkSheet);
                $hsc=$regNo."_".$_FILES['twelveMarkSheet']['name'];  
              
            }
            
            if(!empty($_FILES['aadharCardFront']['name']))
            { 
                $aadharCardFront =$regNo."_".$_FILES["aadharCardFront"]["name"];
                //$aadharCardFront = $_FILES['twelveMarkSheet']['name'];
                $foto_tmp1 = $_FILES['aadharCardFront']['tmp_name'];
                move_uploaded_file($foto_tmp1, "uploads/doc/" . $aadharCardFront);
                $aadharfront=$regNo."_".$_FILES['aadharCardFront']['name'];   
              
            }
            
            if(!empty($_FILES['aadharCardBack']['name']))
            { 
                $aadharCardBack =$regNo."_".$_FILES["aadharCardBack"]["name"];
                
                $foto_tmp1 = $_FILES['aadharCardBack']['tmp_name'];
                move_uploaded_file($foto_tmp1, "uploads/doc/" . $aadharCardBack);
                $aadharback =$regNo."_".$_FILES["aadharCardBack"]["name"];
                   
              
            }
            else
            {
                $aadharback='';   
            }
            
            if(!empty($_FILES['passportFront']['name']))
            { 
                $passportFront =$regNo."_".$_FILES["passportFront"]["name"];
                
                $foto_tmp1 = $_FILES['passportFront']['tmp_name'];
                move_uploaded_file($foto_tmp1, "uploads/doc/" . $passportFront);
                $passfront =$regNo."_".$_FILES["passportFront"]["name"];
                   
              
            }
            else
            {
                $passfront='';   
            }
            if(!empty($_FILES['passportBack']['name']))
            { 
                $passportBack =$regNo."_".$_FILES["passportBack"]["name"];
                
                $foto_tmp1 = $_FILES['passportBack']['tmp_name'];
                move_uploaded_file($foto_tmp1, "uploads/doc/" . $passportBack);
                $passback =$regNo."_".$_FILES["passportBack"]["name"];
                   
              
            }
            else
            {
                $passback='';   
            } 
    
                
                 
    
    
 
 $insertQuery1 = "INSERT INTO `personal_tbl`(`regId`, `studentIdNumber`, `philippinesPhone`, `fName`, `mName`, `lName`, `telegramNumber`, `whatsappNumber`, `email`,`gender`,`dob`, `foto`, `bloodGroup`, `nationality`, `approval`, `isActive`) "
                    . "VALUES('" . '' . "','" .$regNo. '' . "','" . '' . "','" . $fName . "','" . $mName . "','" . $lName . "','" . '' . "','" . $whatsappNumber . "','" . $email . "','" . $gender . "','" . $dob . "','" . '' . "','" . '' . "','" . $nationality . "','0','1')";
         
            $result1 = mysqli_query($link, $insertQuery1);


 

if($result1)
{
$personalId = mysqli_insert_id($link);
    $insertQuery9 = "INSERT INTO `document_tbl`(`sslcMarksheet`, `hscMarksheet`, `aadharCard`, `aadharCardBack`,`personalId`,`passport`,`passportBack`)" 
                        . "VALUES('" . $ssc . "','" . $hsc . "','" . $aadharfront . "','" . $aadharback ."','" . $personalId . "','" . $passfront . "','" . $passback . "')"; 
                
    $result9 = mysqli_query($link, $insertQuery9);

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
                $amount=0;  
                
              

              $insertQuery9 = "INSERT INTO `tw_payments`(`fee_type`, `student`, `course`, `batch`, `amount`, `balance`, `method`, `method_details`, `created`, `usd_amount`, `usd_rate`, `inr_value`, `payment_date`, `scan_copy`, `bank_statement_id`, `b_statement`, `hongkong_statement_id`, `hongkong_hostel_statement_id`, `hongkong_hostel_statement`, `hongkong_statement`, `receipt_no`, `discount`, `discount_remarks`, `consultant`, `flg`, `dd_cheque_no`, `dd_cheque_bank`, `is_multi`, `transfer_from`, `is_transfer`, `transfer_amount`, `narration`, `journal_id`, `c_student`, `user`, `svc_statement_id`, `svc_statement`, `hdfc_statement_id`, `hdfc_statement`, `hdfc_ch_statement_id`, `hdfc_statements_chennai`, `startdate`, `enddate`,`transaction_status`) VALUES ('8','".$student."','1','8','".$amount."','','Admission Confirmation-Online','','".$createdate."','','','','".$createdate."','','','','','','','','".$l_con_no."','','','','1','','','','','','','','','','','','','','','','','','','')" ;  
            
                $result9 = mysqli_query($con, $insertQuery9); 
                 
                    
                   header("Location: https://www.dmsf.ph/pre-registration/thank_you.php");
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

    


            

/*else{
    
echo"<script>alert('Somthing Went Wrong !');</script>";   

}*/




?>




<!doctype html>

<html lang="en">

    <head>

        <meta charset="utf-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>St. Andrews college of NURSING, Pune.</title>

        <link rel="stylesheet" href="assets/css/bootstrap.css">

        <link rel="stylesheet" href="assets/css/bootstrap-select.css" />

        <link rel="stylesheet" href="assets/css/style.css">

        <link rel="stylesheet" href="assets/css/device.css">



        <style>



/*ul.formListing li.thirds { */

/*    width: 24%;*/

/*}*/
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

    </head>
    <style>
        .error_form{
            color:red;
        }
    </style>

    <body>

        <div class="Wrapper">

            <div class="container-lg">

                <div class="row justify-content-center m-0">

                    <div class="col-lg-10 col-sm-12">

                        <div class="formWrap">

                            <div class="col-md-12 TitleWrap ">

                                <div class="row">

                                    <div class="col-md-3">

                                        <!--<img src="uploads/logo.png" width="100%" />-->

                                    </div>

                                    <div class="col-md-9">

                                        <div class="">

                                            <h2> Online Registration</h2>

                                            <h2></h2>

                                        </div>

                                    </div>

                                </div>

                            </div>   

                            <!--<ul class="progressWrap">

                                <li class="active">Step 1 : Personal Details</li>

                                <li>Step 2 : Contact Details</li>

                                <li>Step 3 : Hostel Details</li>

                                <li>Step 4 : Course Details</li>

                                <li>Step 5 : Documents Upload</li>

                                <li>Step 6 : Education Details</li>

                            </ul>-->

                            <form  action="" method="post" id="registration_form" name="myForm" class="registration-form" enctype="multipart/form-data">
                                <fieldset>
                                     <li class="full mrBtm-0"> 
                                            <h2 class="text_style" style=" margin-left: 30px;">PERSONAL PROFILE:		</h2>
                                        </li>
                                        
                                    <ul class="formListing">
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>Name of Staff <span></span></label>
                                                <input type="text" id="fName" name="fName" placeholder="First Name" pattern="[A-Za-z]*" onKeyUp="numericFilterr(this);">
                                            </div>
                                        </li>
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>Middle Name <span></span></label>
                                                <input type="text" id="mName" name="mName" placeholder="Last Name">
                                            </div>
                                        </li>
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>Last Name <span></span></label>
                                                <input type="text" id="lName" name="lName" placeholder="Last Name" pattern="[A-Za-z]*" onKeyUp="numericFilterr(this);">
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
                                                <label>Date Of Birth</label>
                                                <div class="selectWrap">
                                                    <input type="date" id="dob" onfocusout="validationDOB()" name="dob" min="1950-01-01" max="2021-01-01">
                                                     <span  style="color:red;font-size:18px" id="invalid_dob1" ></span> 
                                                </div>
                                            </div>
                                        </li>  
                                        
                                        <li class="thirds">
                                            <div class="formField"> 
                                                <label>Maritial status</label>
                                                <div class="selectWrap">
                                                    <select id="gender" class="select2" style="width:100%;" name="gender">
                                                        <option value="">-- select one --</option>
                                                        <option>Single</option>
                                                        <option>married</option>
                                                        <option>Other</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </li>
                                        
                                    <li class="thirds">
                                            <div class="formField">
                                                <label>No Of Dependants		</label>
                                                <input type="text"  id="sPassportNumber" placeholder="">
                                            </div>
                                        </li> 
                                        
                                        
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
                                        
                                         
                                         <li class="full mrBtm-0">
                                            <h2 class="text_style">Contact Details  </h2><p>Wait for your OTP. Due to network congestion, there might be a delay in receiving the OTP. Kindly wait and avoid generating multiple OTPs.Please check your inbox/promotions/spam mails for the OTP.)</p>
                                        </li>
                                        
                                         <li class="thirds">
                                            <div class="formField">
                                                <label>Email</label> 
                                                <input type="email" name="email" id="email" placeholder="Email" required> 
                                               <span class="error_form" id="email_error_message" style="color:black;display:none;"></span>  
                                            </div>
                                        </li>
                                       
                                        
                                        
                                          <li class="thirds">
                                         <lable></lable>
                                        <div class="input-group mb-4" style=" margin-top: 20px; height: 30px;">
      <div class="input-group-prepend">
       <button type="button" class="btn btn-primary" id="btnonOtp" class="btn btn-primary" onclick="btnonOtp()">Send OTP</button>
      </div>
      <input type="text" name="varify_otp_email" id="varify_otp_email" placeholder="Enter Email OTP" style="width: 75%;height: 36px;" >
    
    </div> 
    
   

                                             
                                             
                                           
                                        </li>
                                        
                                         <li class="thirds">
                                           
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
                                                <label>Mobile Number</label>
                                                <input type="text" name="whatsappNumber" id="mobile_number" pattern="[1-9]{1}[0-9]{9}"  onKeyUp="numericFilter(this);" maxlength="10" pattern="\d{10}" title="Please enter exactly 10 digits" placeholder="Whatsapp Number(ex: XXXXX  XXXXX)" required>
                                            <span class="error_form" id="password_error_message" style="display:none;" ></span>
                                            </div>
                                        </li>
                                  <li class="thirds">
                                         <lable></lable>
                                        <div class="input-group mb-4" style=" margin-top: 20px; height: 30px;">
      <div class="input-group-prepend">
       <button type="button" class="btn btn-primary" id="btnonOtpsms" name="smsotp" class="btn btn-primary" onclick="btnonOtpsms()">Send OTP</button>
      </div>
      <input type="text" name="varify_otp_sms" id="varify_otp_sms" placeholder="Enter SMS OTP" style="width: 75%;height: 36px;">
    
    </div> 
    
   
 <!--<div class="formField">-->
 <!--                                                <button type="button" id="btnonOtpsms" name="smsotp" class="btn btn-primary" onclick="btnonOtpsms()">Send SMS OTP</button>-->
 <!--                                                 <input type="text" name="varify_otp_sms" id="varify_otp_sms" placeholder="Validate OTP">-->
 <!--                                           </div>-->
                                             
                                             
                                           
                                        </li>
                                        
                                         <li class="thirds">
                                           
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
                                            <h2 class="text_style">ACADEMIC QUALIFICATION QUALIFICATION </h2>
                                        </li>
                                        
                                         <li class="thirds">
                                            <div class="formField">
                                                <label>SECONDARY SCHOOL</label>
                                                <input type="text"  id="sPassportNumber" placeholder="">
                                            </div>
                                        </li>
                                         <li class="thirds">
                                            <div class="formField">
                                                <label>BOARD</label>
                                                <input type="text"  id="sPassportNumber" placeholder="">
                                            </div>
                                        </li>
                                        
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>STATE </label>
                                                <input type="text"  id="sPassportNumber" placeholder="">
                                            </div>
                                        </li>
                                        
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>PLACE</label>
                                                <input type="text"  id="sPassportNumber" placeholder="">
                                            </div>
                                        </li>
                                        
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>MARKS OBTAINED	</label>
                                                <input type="text"  id="sPassportNumber" placeholder="">
                                            </div>
                                        </li>
                                        
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>PERCENTAGE/GRADE		</label>
                                                <input type="text"  id="sPassportNumber" placeholder="">
                                            </div>
                                        </li>
                                        
                                        
                                         <li class="thirds">
                                            <div class="formField">
                                                <label>HIGHER SECONDARY SCHOOL</label>
                                                <input type="text"  id="sPassportNumber" placeholder="">
                                            </div>
                                        </li>
                                         <li class="thirds">
                                            <div class="formField">
                                                <label>BOARD</label>
                                                <input type="text"  id="sPassportNumber" placeholder="">
                                            </div>
                                        </li>
                                        
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>STATE </label>
                                                <input type="text"  id="sPassportNumber" placeholder="">
                                            </div>
                                        </li>
                                        
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>PLACE</label>
                                                <input type="text"  id="sPassportNumber" placeholder="">
                                            </div>
                                        </li>
                                        
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>MARKS OBTAINED	</label>
                                                <input type="text"  id="sPassportNumber" placeholder="">
                                            </div>
                                        </li>
                                        
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>PERCENTAGE/GRADE		</label>
                                                <input type="text"  id="sPassportNumber" placeholder="">
                                            </div>
                                        </li>
                                        
                                        
                                         <li class="thirds">
                                            <div class="formField">
                                                <label>Other	</label>
                                                <input type="text"  id="sPassportNumber" placeholder="">
                                            </div>
                                        </li>
                                        
                                        
                                        
                                        <li class="full mrBtm-0">
                    <h2 class="text_style">PROFESSIONAL QUALIFICATION</h2>
                                        </li>
                                        
                                        <li class="thirds" > 
                                            <div class="formField">
                                                <label>B.SC. NURSING </label>
                                                <input type="text" id="twelvethBoard" placeholder="" name="title[]">
                                            </div>
                                        </li>
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>COLLEGE</label>
                                                <input type="text" id="twelvethState" placeholder="" name="role[]">
                                            </div>
                                        </li>
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>UNIVERSITY	</label>
                                                <input type="date" id="twelvethCountry" placeholder="" name="date[]">
                                            </div>
                                        </li>
                                        
                                        
                                         <li class="thirds">
                                            <div class="formField">
                                                <label>STATE	</label>
                                                <input type="text" id="twelvethPassingYear" name="place[]">
                                                 
                                            </div>
                                        </li>
                                        
                                          <li class="thirds">
                                            <div class="formField">
                                                <label>YEAR OF PASSING	</label>
                                                <input type="text" id="twelvethPassingYear" name="place[]">
                                                 
                                            </div>
                                        </li>
                                        
                                          <li class="thirds">
                                            <div class="formField">
                                                <label>MARKS OBTAINED		</label>
                                                <input type="text" id="twelvethPassingYear" name="place[]">
                                                 
                                            </div>
                                        </li>
                                        
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>PERCENTAGE</label>
                                                <input type="text" id="twelvethPassingYear" name="place[]">
                                                 
                                            </div>
                                        </li>
                                         <li class="thirds">
                                            <div class="formField">
                                                <label></label>
                                                
                                                 
                                            </div>
                                        </li>
                                         <li class="thirds">
                                            <div class="formField">
                                                <label></label>
                                                 
                                            </div>
                                        </li>
                                        
                                        
                                        <li class="thirds" > 
                                            <div class="formField">
                                                <label>M.SC. NURSING</label>
                                                <input type="text" id="twelvethBoard" placeholder="" name="title[]">
                                            </div>
                                        </li>
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>COLLEGE</label>
                                                <input type="text" id="twelvethState" placeholder="" name="role[]">
                                            </div>
                                        </li>
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>UNIVERSITY	</label>
                                                <input type="date" id="twelvethCountry" placeholder="" name="date[]">
                                            </div>
                                        </li>
                                        
                                        
                                         <li class="thirds">
                                            <div class="formField">
                                                <label>STATE	</label>
                                                <input type="text" id="twelvethPassingYear" name="place[]">
                                                 
                                            </div>
                                        </li>
                                        
                                          <li class="thirds">
                                            <div class="formField">
                                                <label>YEAR OF PASSING	</label>
                                                <input type="text" id="twelvethPassingYear" name="place[]">
                                                 
                                            </div>
                                        </li>
                                        
                                          <li class="thirds">
                                            <div class="formField">
                                                <label>MARKS OBTAINED		</label>
                                                <input type="text" id="twelvethPassingYear" name="place[]">
                                                 
                                            </div>
                                        </li>
                                        
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>PERCENTAGE</label>
                                                <input type="text" id="twelvethPassingYear" name="place[]">
                                                 
                                            </div>
                                        </li>
                                         <li class="thirds">
                                            <div class="formField">
                                                <label></label>
                                                
                                                 
                                            </div>
                                        </li>
                                         <li class="thirds">
                                            <div class="formField">
                                                <label></label>
                                                 
                                            </div>
                                        </li>
                                        
                                        
                                         <li class="thirds" > 
                                            <div class="formField">
                                                <label>P.H.D</label>
                                                <input type="text" id="twelvethBoard" placeholder="" name="title[]">
                                            </div>
                                        </li>
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>COLLEGE</label>
                                                <input type="text" id="twelvethState" placeholder="" name="role[]">
                                            </div>
                                        </li>
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>UNIVERSITY	</label>
                                                <input type="text" id="twelvethCountry" placeholder="" name="date[]">
                                            </div>
                                        </li>
                                        
                                        
                                         <li class="thirds">
                                            <div class="formField">
                                                <label>STATE	</label>
                                                <input type="text" id="twelvethPassingYear" name="place[]">
                                                 
                                            </div>
                                        </li>
                                        
                                          <li class="thirds">
                                            <div class="formField">
                                                <label>YEAR OF PASSING	</label>
                                                <input type="text" id="twelvethPassingYear" name="place[]">
                                                 
                                            </div>
                                        </li>
                                        
                                          <li class="thirds">
                                            <div class="formField">
                                                <label>MARKS OBTAINED		</label>
                                                <input type="text" id="twelvethPassingYear" name="place[]">
                                                 
                                            </div>
                                        </li>
                                        
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>PERCENTAGE</label>
                                                <input type="text" id="twelvethPassingYear" name="place[]">
                                                 
                                            </div>
                                        </li>
                                         <li class="thirds">
                                            <div class="formField">
                                                <label></label>
                                                
                                                 
                                            </div>
                                        </li>
                                         <li class="thirds">
                                            <div class="formField">
                                                <label></label>
                                                 
                                            </div>
                                        </li>
                                        
                                         <li class="thirds">
                                            <div class="formField">
                                                <label>other</label>
                                                  <input type="text" id="twelvethCountry" placeholder="" name="date[]">
                                            </div>
                                        </li>
                                        
                                        
                                        
                                        <li class="full mrBtm-0">
                                            <h2 class="text_style">REGISTRATION AT PROFESSIONAL COUNCILS:</h2>
                                        </li>
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>TYPE OF REGISTRATION	</label>
                                                <input type="text" id="ss1" placeholder="" name="ss1" value="" readonly>
                                            </div>
                                        </li>
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>STATE COUNCIL	</label>
                                                <input required type="text" id="mm1" placeholder="" name="mm1">
                                            </div>
                                        </li>
                                         <li class="thirds">
                                            <div class="formField">
                                                <label>NO. </label> 
                                                <input type="text" id="neetScore" placeholder="" name="neetScore"> 
                                               
                                            </div>
                                        </li>
                                        
                                         <li class="thirds">
                                            <div class="formField">
                                                <label>RENWED UPTO DATE	 </label> 
                                                <input type="text" id="neetScore" placeholder="" name="neetScore"> 
                                               
                                            </div>
                                        </li>
                                       
                                        <li class="full mrBtm-0">
                                            <h2 class="text_style">DETAILS OF LAST EMPLOYMENT:   &nbsp; &nbsp;&nbsp; &nbsp;</h2>
                                        </li>
                                        
                                         <li class="thirds">
                                            <div class="formField">
                                                <label>NAME OF THE COLLEGE/HOSPITAL/COMPANY/INSTITUTE/NURSING HOME</label>
                                                <input type="text" id="ss1" placeholder="" name="ss1" value="" >
                                            </div>
                                        </li>
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>PRIVATE/ CENTRAL GOVT/STATE GOVT./OTHERS</label>
                                                <input required type="text" id="mm1" placeholder="" name="mm1">
                                            </div>
                                        </li>
                                         <li class="thirds">
                                            <div class="formField">
                                                <label>DURATION OF EMPLOYMENT </label> 
                                                <input type="text" id="neetScore" placeholder="" name="neetScore"> 
                                               
                                            </div>
                                        </li>
                                        
                                         <li class="thirds">
                                            <div class="formField">
                                                <label>DESIGNATION </label> 
                                                <input type="text" id="neetScore" placeholder="" name="neetScore"> 
                                               
                                            </div>
                                        </li>
                                        
                                         <li class="thirds">
                                            <div class="formField">
                                                <label>REASON FOR LEAVING THE PREVIOUS ORGANIZATION </label> 
                                                <input type="text" id="neetScore" placeholder="" name="neetScore"> 
                                               
                                            </div>
                                        </li>
                                      
                                      
                                         <li class="full mrBtm-0">
                                            <h2 class="text_style">PRESENT EMPLOYMENT DETAILS:   &nbsp; &nbsp;&nbsp; &nbsp;</h2>
                                        </li>
                                        
                                         <li class="thirds">
                                            <div class="formField">
                                                <label>DATE OF JOINING</label>
                                                <input type="text" id="ss1" placeholder="" name="ss1" value="" >
                                            </div>
                                        </li>
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>DESIGNATION</label>
                                                <input required type="text" id="mm1" placeholder="" name="mm1">
                                            </div>
                                        </li>
                                         <li class="thirds">
                                            <div class="formField">
                                                <label>TEMPORARY/PERMANENT</label> 
                                                <input type="text" id="neetScore" placeholder="" name="neetScore"> 
                                               
                                            </div>
                                        </li>
                                        
                                         <li class="thirds">
                                            <div class="formField">
                                                <label>APPOIN TMENT LETTER NO. </label> 
                                                <input type="text" id="neetScore" placeholder="" name="neetScore"> 
                                               
                                            </div>
                                        </li>
                                        
                                         <li class="thirds">
                                            <div class="formField">
                                                <label>MUHS APPROVAL LETTER NO. </label> 
                                                <input type="text" id="neetScore" placeholder="" name="neetScore"> 
                                               
                                            </div>
                                        </li>
                                     
                                      
                                      <li class="full mrBtm-0">
                                            <h2 class="text_style">PROFESSION GROWTH:   &nbsp; &nbsp;&nbsp; &nbsp;</h2>
                                        </li>
                                        
                                         <li class="thirds">
                                            <div class="formField">
                                                <label>NAME OF THE COLLEGE/HOSPITAL/COMPANY/INSTITUTE/NURSING HOME</label>
                                                <input type="text" id="ss1" placeholder="" name="ss1" value="" >
                                            </div>
                                        </li>
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>PRIVATE/ CENTRAL GOVT/STATE GOVT./OTHERS</label>
                                                <input required type="text" id="mm1" placeholder="" name="mm1">
                                            </div>
                                        </li>
                                         <li class="thirds">
                                            <div class="formField">
                                                <label>DURATION OF EMPLOYMENT </label> 
                                                <input type="text" id="neetScore" placeholder="" name="neetScore"> 
                                               
                                            </div>
                                        </li>
                                        
                                         <li class="thirds">
                                            <div class="formField">
                                                <label>DESIGNATION </label> 
                                                <input type="text" id="neetScore" placeholder="" name="neetScore"> 
                                               
                                            </div>
                                        </li>
                                        
                                         <li class="thirds">
                                            <div class="formField">
                                                <label>REASON FOR LEAVING THE PREVIOUS ORGANIZATION </label> 
                                                <input type="text" id="neetScore" placeholder="" name="neetScore"> 
                                               
                                            </div>
                                        </li>
                                      
                                      
                                         <li class="full mrBtm-0">
                                            <h2 class="text_style">PRESENT EMPLOYMENT DETAILS:   &nbsp; &nbsp;&nbsp; &nbsp;</h2>
                                        </li>
                                        
                                         <li class="thirds">
                                            <div class="formField">
                                                <label>DATE OF JOINING</label>
                                                <input type="text" id="ss1" placeholder="" name="ss1" value="" >
                                            </div>
                                        </li>
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>DESIGNATION</label>
                                                <input required type="text" id="mm1" placeholder="" name="mm1">
                                            </div>
                                        </li>
                                         <li class="thirds">
                                            <div class="formField">
                                                <label>TEMPORARY/PERMANENT</label> 
                                                <input type="text" id="neetScore" placeholder="" name="neetScore"> 
                                               
                                            </div>
                                        </li>
                                        
                                         <li class="thirds">
                                            <div class="formField">
                                                <label>APPOIN TMENT LETTER NO. </label> 
                                                <input type="text" id="neetScore" placeholder="" name="neetScore"> 
                                               
                                            </div>
                                        </li>
                                        
                                         <li class="thirds">
                                            <div class="formField">
                                                <label>MUHS APPROVAL LETTER NO. </label> 
                                                <input type="text" id="neetScore" placeholder="" name="neetScore"> 
                                               
                                            </div>
                                        </li>
                                      
                                      
                                      
                                         <!--xi-->
                                         
                                         
                                         <li class="full mrBtm-0">
                                            <h2 class="text_style">PROFESSION GROWTH:</h2>
                                        </li>
                                        
                                         <li class="thirds">
                                            <div class="formField">
                                                <label>DMEMBERSHIP OF PROFESSIONAL ORGANISATIONS</label>
                                                <input type="text" id="ss1" placeholder="" name="ss1" value="" >
                                            </div>
                                        </li>
                                        
                                         <li class="full mrBtm-0">
                                            <h2 class="text_style">CONFERENCES ATTENDED:</h2>
                                        </li>
                                        
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>STATE LEVEL</label>
                                                <input required type="text" id="mm1" placeholder="" name="mm1">
                                            </div>
                                        </li>
                                         <li class="thirds">
                                            <div class="formField">
                                                <label>NATIONAL LEVEL</label> 
                                                <input type="text" id="neetScore" placeholder="" name="neetScore"> 
                                               
                                            </div>
                                        </li>
                                        
                                         <li class="thirds">
                                            <div class="formField">
                                                <label>INTERNATIONAL </label> 
                                                <input type="text" id="neetScore" placeholder="" name="neetScore"> 
                                               
                                            </div>
                                        </li>
                                        
                                        
                                      
                                         <li class="full mrBtm-0">
                                            <h2 class="text_style">CONFERENCES CONDUCTED:</h2>
                                        </li>
                                        
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>STATE LEVEL</label>
                                                <input required type="text" id="mm1" placeholder="" name="mm1">
                                            </div>
                                        </li>
                                         <li class="thirds">
                                            <div class="formField">
                                                <label>NATIONAL LEVEL</label> 
                                                <input type="text" id="neetScore" placeholder="" name="neetScore"> 
                                               
                                            </div>
                                        </li>
                                        
                                         <li class="thirds">
                                            <div class="formField">
                                                <label>INTERNATIONAL </label> 
                                                <input type="text" id="neetScore" placeholder="" name="neetScore"> 
                                               
                                            </div>
                                        </li>
                                        
                                         <li class="full mrBtm-0">
                                            <h2 class="text_style">WORKSHOPS ATTENDED:</h2>
                                        </li>
                                        
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>STATE LEVEL</label>
                                                <input required type="text" id="mm1" placeholder="" name="mm1">
                                            </div>
                                        </li>
                                         <li class="thirds">
                                            <div class="formField">
                                                <label>NATIONAL LEVEL</label> 
                                                <input type="text" id="neetScore" placeholder="" name="neetScore"> 
                                               
                                            </div>
                                        </li>
                                        
                                         <li class="thirds">
                                            <div class="formField">
                                                <label>INTERNATIONAL </label> 
                                                <input type="text" id="neetScore" placeholder="" name="neetScore"> 
                                               
                                            </div>
                                        </li>
                                        
                                         <li class="full mrBtm-0">
                                            <h2 class="text_style">WORKSHOP  CONDUCTED:</h2>
                                        </li>
                                        
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>STATE LEVEL</label>
                                                <input required type="text" id="mm1" placeholder="" name="mm1">
                                            </div>
                                        </li>
                                         <li class="thirds">
                                            <div class="formField">
                                                <label>NATIONAL LEVEL</label> 
                                                <input type="text" id="neetScore" placeholder="" name="neetScore"> 
                                               
                                            </div>
                                        </li>
                                        
                                         <li class="thirds">
                                            <div class="formField">
                                                <label>INTERNATIONAL </label> 
                                                <input type="text" id="neetScore" placeholder="" name="neetScore"> 
                                               
                                            </div>
                                        </li>
                                        
                                         <li class="full mrBtm-0">
                                            <h2 class="text_style">RESEARCHES CONDUCTEED AS -</h2>
                                        </li>
                                        
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>FIRST AUTHOR</label>
                                                <input required type="text" id="mm1" placeholder="" name="mm1">
                                            </div>
                                        </li>
                                         <li class="thirds">
                                            <div class="formField">
                                                <label>SECOND AUTHOR</label> 
                                                <input type="text" id="neetScore" placeholder="" name="neetScore"> 
                                               
                                            </div>
                                        </li>
                                        
                                         <li class="thirds">
                                            <div class="formField">
                                                <label>THIRD AUTHOR </label> 
                                                <input type="text" id="neetScore" placeholder="" name="neetScore"> 
                                               
                                            </div>
                                        </li>
                                        
                                        
                                        
                                        <li class="full mrBtm-0">
                                            <h2 class="text_style">GUIDED STUDENTS IN RESEARCH AT COLLEGE/ OF OTHER INSTITUTES:</h2>
                                        </li>
                                        
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>UNDERGRADUATES</label>
                                                <input required type="text" id="mm1" placeholder="" name="mm1">
                                            </div>
                                        </li>
                                         <li class="thirds">
                                            <div class="formField">
                                                <label>POSTGRADUATE</label> 
                                                <input type="text" id="neetScore" placeholder="" name="neetScore"> 
                                               
                                            </div>
                                        </li>
                                        
                                         <li class="thirds">
                                            <div class="formField">
                                                <label>PH.D </label> 
                                                <input type="text" id="neetScore" placeholder="" name="neetScore"> 
                                               
                                            </div>
                                        </li>
                                        
                                        
                                         <li class="full mrBtm-0">
                                            <h2 class="text_style">CHAPTERS CONTRIBUTED IN BOOKS</h2>
                                        </li>
                                        
                                         <li class="full mrBtm-0">
                                            <h2 class="text_style">BOOKS PUBLISHED</h2>
                                        </li>
                                        
                                         <li class="full mrBtm-0">
                                            <h2 class="text_style">CONTRIBUTION IN JOURNALS AS :</h2>
                                        </li>
                                         <li class="thirds">
                                            <div class="formField">
                                                <label>EDITOR</label> 
                                                <input type="text" id="neetScore" placeholder="" name="neetScore"> 
                                               
                                            </div>
                                        </li> <li class="thirds">
                                            <div class="formField">
                                                <label>BOARD OF MEMBER</label> 
                                                <input type="text" id="neetScore" placeholder="" name="neetScore"> 
                                               
                                            </div>
                                        </li>
                                        
                                         <li class="full mrBtm-0">
                                            <h2 class="text_style">IQAC MEMBER:</h2>
                                        </li>
                                         <li class="full mrBtm-0">
                                            <h2 class="text_style">INC/MNC/MUHS INSPECTOR:</h2>
                                        </li>
                                         <li class="full mrBtm-0">
                                            <h2 class="text_style">CONSULTANCY OBTAINED FOR COLLEGE:</h2>
                                        </li>
                                         <li class="full mrBtm-0">
                                            <h2 class="text_style">PATENT MADE:</h2>
                                        </li>
                                         <li class="full mrBtm-0">
                                            <h2 class="text_style">COMMITTEE MEMBER AT UNIVERSITY:</h2>
                                        </li>
                                        
                                        
                                        </li>
                                         <li class="full mrBtm-0">
                                            <h2 class="text_style">COMMITTEE MEMBER AT COLLEGE:</h2>
                                        </li>
                                         <li class="full mrBtm-0">
                                            <h2 class="text_style">SUBJECTS TAUGHT AT COLLEGE : I YEAR, II YEAR, III YEAR,IV YEAR B.BSC.; I YEAR, II YEAR PBBSC., I YEAR , II YEAR M.SC. NURSING:</h2>
                                        </li>
                                         <li class="full mrBtm-0">
                                            <h2 class="text_style">HELD THE POST OF CLASS COORDINATOR (BATCH):</h2>
                                        </li>
                                        
                                        
                                         <li class="full mrBtm-0">
                                            <h2 class="text_style">CONTRIBUTIONS MADE AT COLLEGE IN THE ACADEMICS					</h2>
                                        </li>
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>TEACHING METHODOLOGY </label>
                                                <input type="text" id="temporaryAddress" placeholder="" name="temporaryAddress">
                                            </div>
                                        </li>
                                        
                                         <li class="thirds">
                                            <div class="formField">
                                                <label>STUDENTS' PERFORMANCE</label>
                                                <input type="text" id="temporaryAddress" placeholder="" name="temporaryAddress">
                                            </div>
                                        </li>
                                        
                                         <li class="thirds">
                                            <div class="formField">
                                                <label>LEARNING OUTCOME IMPROVEMENTS</label>
                                                <input type="text" id="temporaryAddress" placeholder="" name="temporaryAddress">
                                            </div>
                                        </li>
                                        
                                          <li class="thirds">
                                            <div class="formField">
                                                <label>ACADEMIC RESULTS</label>
                                                <input type="text" id="temporaryAddress" placeholder="" name="temporaryAddress">
                                            </div>
                                        </li>
                                        
                                        
                                         <li class="full mrBtm-0">
                                            <h2 class="text_style">CONTRIBUTIONS MADE AT COLLEGE IN THE ADMINISTRATION</h2>
                                        </li>
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>COLLEGE DISCIPLINE</label>
                                                <input type="text" id="temporaryAddress" placeholder="" name="temporaryAddress">
                                            </div>
                                        </li>
                                        
                                         <li class="thirds">
                                            <div class="formField">
                                                <label>STUDENT ACTIVITIES</label>
                                                <input type="text" id="temporaryAddress" placeholder="" name="temporaryAddress">
                                            </div>
                                        </li>
                                        
                                         <li class="thirds">
                                            <div class="formField">
                                                <label>STUDENT WELFARE</label>
                                                <input type="text" id="temporaryAddress" placeholder="" name="temporaryAddress">
                                            </div>
                                        </li>
                                        
                                          <li class="thirds">
                                            <div class="formField">
                                                <label>DOCUMENTATION</label>
                                                <input type="text" id="temporaryAddress" placeholder="" name="temporaryAddress">
                                            </div>
                                        </li>
                                        
                                         <li class="thirds">
                                            <div class="formField">
                                                <label>COLLEGE ACTIVITIES</label>
                                                <input type="text" id="temporaryAddress" placeholder="" name="temporaryAddress">
                                            </div>
                                        </li>
                                        
                                         <li class="thirds">
                                            <div class="formField">
                                                <label>MUHS RESPONSIBILITIES</label>
                                                <input type="text" id="temporaryAddress" placeholder="" name="temporaryAddress">
                                            </div>
                                        </li>
                                        
                                        
                                         <li class="thirds">
                                            <div class="formField">
                                                <label>MNC/INC/MUHS DOCUMENTATION</label>
                                                <input type="text" id="temporaryAddress" placeholder="" name="temporaryAddress">
                                            </div>
                                        </li>
                                        
                                         <li class="thirds">
                                            <div class="formField">
                                                <label>INTERNATIONALIZATION</label>
                                                <input type="text" id="temporaryAddress" placeholder="" name="temporaryAddress">
                                            </div>
                                        </li>
                                        
                                        
                                         <li class="full mrBtm-0">
                                            <h2 class="text_style">ANY OTHER</h2>
                                        </li>
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                           
                                        <li class="full ctaList">
                                            <button type="submit" class="btn btn-info" name="submit" id="submit">Submit</button>
                                        </li>--> 
                                    </ul>
                                </fieldset>
                            </form>



        <!--<script src="assets/js/jquery.min.js"></script>-->

        <script src="assets/js/bootstrap.bundle.min.js"></script>

        <script src="assets/js/bootstrap-select.min.js"></script>

        <script src="assets/js/main.js"></script>

       <!-- <script src="myjs/reg.js"></script>-->

<!--        <script>

            $('select').selectpicker();

        </script>-->

        <script>

            $('.error').hide();
            
           

           $(document).ready(function () {
                $('#submit').click(function()
            { 
                // alert('called submit btn click');
                var x = document.forms["myForm"]["mobile_number"].value;
                // alert(x);
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
                        mobile: $('#mobile_number').val()
                    },
                    success: function(msg)
                    {
                        // alert('Whatsapp number is verified!');
                        
                    }   
                    
                });
                
            });

           

                $('.showBox1').hide();

                $(':radio[id=customRadiop]').change(function () {
                    
                    if($(this).is(':checked')) {
                        $("#passportyes").removeClass("none");
                        $('#passportFront').attr('required',true);
                       
                        $('#passportBack').attr('required',true);
                        
                        $('.showBox1').show();
                    }
                    
                    

                });

                $(':radio[id=customRadiop1]').change(function () {

                    $("#passportyes").addClass("none");
                    $('#passportFront').removeAttr('required');
                    $('#passportBack').removeAttr('required');

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
    
     var x = document.forms["myForm"]["mobile_number"].value;

    
    
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
            mobile: $('#mobile_number').val()
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
		
		<script type="text/javascript">
            $(function() {
                $("#email_error_message").hide();
                $("#password_error_message").hide();
                $("#password_error_messagee").hide();
                $("#consultant_error_message").hide();
                
                $("#ssc_error_message").hide();
                $("#hsc_error_message").hide();
                $("#aadharfront_error_message").hide();
                $("#aadharback_error_message").hide();
                
                var error_consultant=false;
                var error_email = false;
                var error_password = false;
                var error_email_email_f = false;
                
                var error_ssc = false;
                var error_hsc = false;
                var error_aadharfront=false;
                var error_aadharback=false;
                
                 $("#tenthMarkSheet").focusout(function(){
                    var filename=document.getElementById('tenthMarkSheet').value;
                    var extension=filename.substr(filename.lastIndexOf('.')+1).toLowerCase();
                    //alert(extension);
                    if(extension=='pdf' || extension=='jpg') 
                    {
                        
                        $("#ssc_error_message").hide();
                        $("#tenthMarkSheet").css("border-bottom","2px solid #34F458");
                        
                    } 
                    else 
                    {
                        $("#ssc_error_message").html("2 MB PDF Or JPG Files are allowed");
                        $("#ssc_error_message").show();
                        $("#tenthMarkSheet").css("border-bottom","2px solid #F90A0A");
                        error_ssc = true;
                    }
                });
                
                $("#twelveMarkSheet").focusout(function(){
                    var filename=document.getElementById('twelveMarkSheet').value;
                    var extension=filename.substr(filename.lastIndexOf('.')+1).toLowerCase();
                    //alert(extension);
                    if(extension=='pdf' || extension=='jpg') 
                    {
                        
                        $("#hsc_error_message").hide();
                        $("#twelveMarkSheet").css("border-bottom","2px solid #34F458");
                        
                    } 
                    else 
                    {
                        $("#hsc_error_message").html("2 MB PDF Or JPG Files are allowed");
                        $("#hsc_error_message").show();
                        $("#twelveMarkSheet").css("border-bottom","2px solid #F90A0A");
                        error_hsc = true;
                    }
                });
                $("#aadharCardFront").focusout(function(){
                    var filename=document.getElementById('aadharCardFront').value;
                    var extension=filename.substr(filename.lastIndexOf('.')+1).toLowerCase();
                    //alert(extension);
                    if(extension=='pdf' || extension=='jpg') 
                    {
                        
                        $("#aadharfront_error_message").hide();
                        $("#aadharCardFront").css("border-bottom","2px solid #34F458");
                        
                    } 
                    else 
                    {
                        $("#aadharfront_error_message").html("2 MB PDF Or JPG Files are allowed");
                        $("#aadharfront_error_message").show();
                        $("#aadharCardFront").css("border-bottom","2px solid #F90A0A");
                        error_aadharfront = true;
                    }
                });
                
                $("#aadharCardBack").focusout(function(){
                    var filename=document.getElementById('aadharCardBack').value;
                    var extension=filename.substr(filename.lastIndexOf('.')+1).toLowerCase();
                    //alert(extension);
                    if(extension=='pdf' || extension=='jpg') 
                    {
                        
                        $("#aadharback_error_message").hide();
                        $("#aadharCardBack").css("border-bottom","2px solid #34F458");
                        
                    } 
                    else 
                    {
                        $("#aadharback_error_message").html("2 MB PDF Or JPG Files are allowed");
                        $("#aadharback_error_message").show();
                        $("#aadharCardBack").css("border-bottom","2px solid #F90A0A");
                        error_aadharback = true;
                    }
                });
                $("#email").focusout(function() {
                    check_email();
                });
                 $("#mother_email").focusout(function() {
                    check_email_mother();
                });
                $("#father_email").focusout(function() {
                    check_email_father();
                });
                $("#mobile_number").focusout(function() {
                    check_password();
                });
                $("#mother_mobile_number").focusout(function() {
                    check_password_mother_mobile_number();
                });
                 $("#father_mobile_number").focusout(function() {
                    check_password_father_mobile_number();
                });
                
                
                
                function check_password() {
                    var password_length = $("#mobile_number").val().length;
                    if (password_length < 10) {
                    $("#password_error_message").html("Atleast 10 Characters");
                    $("#password_error_message").show();
                    $("#mobile_number").css("border-bottom","2px solid #F90A0A");
                    error_password = true;
                    } else {
                    $("#password_error_message").hide();
                    $("#mobile_number").css("border-bottom","2px solid #34F458");
                    }
                }
                function check_password_mother_mobile_number() {
                    var password_length = $("#mother_mobile_number").val().length;
                    if (password_length < 10) {
                    $("#password_error_messagee").html("Atleast 10 Characters");
                    $("#password_error_messagee").show();
                    $("#mother_mobile_number").css("border-bottom","2px solid #F90A0A");
                    error_password = true;
                    } else {
                    $("#password_error_messagee").hide();
                    $("#mother_mobile_number").css("border-bottom","2px solid #34F458");
                    }
                }
                
                 function check_password_father_mobile_number() {
                    var password_length = $("#father_mobile_number").val().length;
                    if (password_length < 10) {
                    $("#password_error_messageee").html("Atleast 10 Characters");
                    $("#password_error_messageee").show();
                    $("#father_mobile_number").css("border-bottom","2px solid #F90A0A");
                    error_password = true;
                    } else {
                    $("#password_error_messageee").hide();
                    $("#father_mobile_number").css("border-bottom","2px solid #34F458");
                    }
                }
                function check_email() {
                    var pattern = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{3,4}$/;
                    var email = $("#email").val();
                    if (pattern.test(email) && email !== '') {
                        
                    $("#email_error_message").hide();
                    $("#email").css("border-bottom","2px solid #34F458");
                    
                    $.ajax({
                        type: "POST",              
                        url: 'validation_page.php',       
                        data: {email:email},

					    success: function (res) {
					        var data=$.parseJSON(res);
					        
					        console.log(data);
					        if(data.msg=='Exist')
					        {
					            console.log('if'); 
					            $("#email_error_message").html("Email Already Exist");
                                $("#email_error_message").show();
                                $("#email").css("border-bottom","2px solid #F90A0A");
                                error_email = true;
					        }
					        else
					        {
					            console.log('else');
					            $("#email_error_message").hide();
                                $("#email").css("border-bottom","2px solid #34F458");
                                error_email = false;
                            }
                        },
                        
                    });
                    } else {
                    $("#email_error_message").html("Invalid Email");
                    $("#email_error_message").show();
                    $("#email").css("border-bottom","2px solid #F90A0A");
                    error_email = true;
                    }
                }
                function check_email_mother() {
                    var pattern = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{3,4}$/;
                    var mother_email = $("#mother_email").val();
                    if (pattern.test(mother_email) && mother_email !== '') {
                    $("#email_error_message_mother").hide();
                    $("#mother_email").css("border-bottom","2px solid #34F458");
                    } else {
                    $("#email_error_message_mother").html("Invalid Email");
                    $("#email_error_message_mother").show();
                    $("#mother_email").css("border-bottom","2px solid #F90A0A");
                    error_email = true;
                    }
                }
                function check_email_father() { 
                    var pattern = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{3,4}$/;
                    var father_email = $("#father_email").val();
                    if (pattern.test(father_email) && father_email !== '') {
                    $("#father_email_error_message").hide();
                    $("#father_email").css("border-bottom","2px solid #34F458");
                    } else {
                    $("#father_email_error_message").html("Invalid Email");
                    $("#father_email_error_message").show();
                    $("#father_email").css("border-bottom","2px solid #F90A0A");
                    error_email_email_f = true;
                    }
                }
                $("#registration_form").submit(function() {  
                    // error_email = false;
                    error_email_email_f = false;
                    error_password = false;
                    error_ssc=false;
                    error_aadharback=false;
                    error_aadharfront=false;
                    error_hsc=false;
                    
                    /*check_email= false;;
                    check_password_father_mobile_number= false;; 
                    check_email_father= false;;
                    check_password_mother_mobile_number= false;; 
                    check_email_mother= false;;*/
                   
                    if (error_email === false && error_password === false && error_email_email_f === false && error_ssc===false && error_hsc===false && error_aadharback===false && error_aadharfront===false) {
                    // alert("Registration Successfull");
                    return true;
                    } else {
                    alert("Please Fill the form Correctly");
                    return false;
                    }
                });
            });
            function numericFilter(txb) {
                txb.value = txb.value.replace(/[^\0-9]/ig, "");
            }
            
            function numericFilterr(txb) {
                txb.value = txb.value.replace(/[^\a-z\s]/ig, "");
            }
            
            $('.numberbox').keyup(function(){
  if ($(this).val() > 100){
    alert("No numbers above 100");
    $(this).val('99');
  }
});

         $('#twelvethPassingYear').keyup(function(){
  if ($(this).val() < 1991){
     $("#twelvethPassingYear_error_messageee").html("Year should be in 1991 to 2021");
                    $("#twelvethPassingYear_error_messageee").show();
    
  }else if($(this).val() > 2021){
       $("#twelvethPassingYear_error_messageee").html("Year should be in 1991 to 2021");
                    $("#twelvethPassingYear_error_messageee").show();
    
  }else{
      $("#twelvethPassingYear_error_messageee").html("");
                    $("#twelvethPassingYear_error_messageee").hide();
  }
});

$('#tenthPassingYear').keyup(function(){
  if ($(this).val() < 1991){
     $("#tenthPassingYear_error_messageee").html("Year should be in 1991 to 2021");
                    $("#tenthPassingYear_error_messageee").show();
    
  }else if($(this).val() > 2021){
       $("#tenthPassingYear_error_messageee").html("Year should be in 1991 to 2021");
                    $("#tenthPassingYear_error_messageee").show();
    
  }else{
      $("#tenthPassingYear_error_messageee").html("");
                    $("#tenthPassingYear_error_messageee").hide();
  }
});

$('#neetScore').keyup(function(){
    if ($(this).val() > 180){
    alert("neet score should be less then 180");
    $(this).val('180');
  }
});
   
   var validate = function(e) {
  var t = e.value;
  e.value = (t.indexOf(".") >= 0) ? (t.substr(0, t.indexOf(".")) + t.substr(t.indexOf("."), 3)) : t;
}
           
    </script>
    
    
    <script>$('.datepicker').pickadate({
format: 'dd/mm/yyyy',
selectMonths: true,
selectYears: 100,
max: true
});</script>

 

<script>
$(document).ready(function(){
var i=1;
$('#add').click(function(){
i++;
$('#dynamic_field').append('<tr id="row'+i+'"><td><label>Title</label>&nbsp;&nbsp;&nbsp;<input type="text" name="title[]" placeholder="Title" ></td><td><label>Role</label>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="role[]" placeholder="Role" ></td><td><label>Date</label>&nbsp;&nbsp;&nbsp;&nbsp;<input type="date" name="date[]" placeholder="" ></td><td><label>Place</label>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="place[]" placeholder="Place" ></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
});
	
$(document).on('click', '.btn_remove', function(){
var button_id = $(this).attr("id"); 
$('#row'+button_id+'').remove();
});
});
</script>

    </body>

</html>



