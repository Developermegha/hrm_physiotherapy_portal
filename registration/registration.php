<?php   
session_start();
define('DB_SERVER2','localhost');
define('DB_USER2','root'); 
define('DB_PASS2' ,'');
define('DB_NAME2', 'hrm_physiotherapy_portal');
define('DB_PORT', '3308');    
$linkk = mysqli_connect(DB_SERVER2,DB_USER2,DB_PASS2,DB_NAME2,DB_PORT); 


//$records1 = mysqli_query($con, "SELECT id,name From tw_consultants");




if (isset($_POST['submit'])) {
    
   
  $timestamp =  $_SERVER["REQUEST_TIME"]; 

 
         $fName = $_REQUEST['fName'];
           // $mName = $_REQUEST['mName'];
            $lName = $_REQUEST['lName'];
            $whatsappNumber = $_REQUEST['whatsappNumber'];
            $email = $_REQUEST['email'];
            $gender = $_REQUEST['gender'];
            $dob = $_POST['dob'];
            $age = $_REQUEST['age'];
            $raddress = $_REQUEST['raddress'];
            $econtactno = $_REQUEST['econtactno'];
            
         
    
   
   
  
     $password = 'SACOP'.rand(10000,100000);
      $regno = 'SACOP'.rand(10000,100000);
       $status=1;
    
   
  $sql = "INSERT INTO staff_user(regno, password, firstname, lastname, email, mobile, dob, age, gender, residential_address, emergency_contactno, status)  
    VALUES('$regno','$password','$fName','$lName','$email','$whatsappNumber','$dob',$age,'$gender','$raddress',$econtactno,$status)"; 

if(mysqli_query($linkk, $sql))
{
    
   // echo "hi";die; 
    
    $loginlink='https://kingsinternational.academy/hrm_physiotherapy_portal/staff/login';
    $firstname=$fName;
    $username=$regno;
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
    <td class="content-wrapper" style="padding-left:24px;padding-right:24px;text-align: center;">
        <br />
      <p><b>Dear  '.$firstname.'  Congratulations.</b><br /><br />Welcome to ST. ANDREEWS COLLEGE OF Physiotherapy, PUNE Online Registration for Hrm Physiotherapy Portal. We are delighted to inform you that your registration process is complete and we have received your application. Your application is under process and we will get in touch with you at the earliest to guide your further for the completion of your Information.<br />Login credentials:<br /><b>Username:'.$username.'<br />Password:'.$password.'<br />You can use the credentials given below to login into our Hrm Physiotherapy Portal. <br/>link to Hrm Physiotherapy Login Portal: https://kingsinternational.academy/hrm_physiotherapy_portal/staff/login<br /></p>
                   </td> 
  </tr>
 
  <tr>
    <td class="content-wrapper" style="padding-left:24px;padding-right:24px;text-align: center;" align="center">
      <hr style="border-bottom: solid 1px #000; border-top: 0;">
      <br>
      <p style="text-transform:uppercase;font-family:sans-serif;font-size: 14px !important;margin-top:0; margin-bottom: 15px;text-align: center;">(Do not share your login credentials with anyone.)<br /></p>
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
     
    </td>
  </tr>
  <tr>
    <td style="background:#e1e1e1;text-align:center;width:100%;height:5px;"></td>  
  </tr>
  <tr>
    <td style="background:#e1e1e1;text-align:center;">
      <div style="font-family:Helvetica, Arial, sans-serif;font-size:10px !important;color:#000000;text-align: center;line-height:1.4;"><br>
        2022 All rights reserved<br>
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
   $mail= mail($to, "Login Credentials", $message, $headers);
    
    
    
       
               header("Location: https://kingsinternational.academy/hrm_physiotherapy_portal/registration/thank_you.php");
exit();     
                

                    
                
                    
                
}
else
{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}  

              
}

    


            






?>




<!doctype html>

<html lang="en">

    <head>

        <meta charset="utf-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>St. Andrews college of Physiotherapy, Pune.</title>

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

                                        <!--<img src="https://kingsinternational.academy/hrm_physiotherapy_portal/assets/img/phy_logo.jpeg" width="50%" />-->

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
                                            <h2 class="text_style" style=" margin-left: 30px;">Personal Profile  </h2>
                                        </li>
                                        
                                    <ul class="formListing">
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>Name of Staff <span></span></label>
                                                <input type="text" id="fName" name="fName" placeholder="First Name" pattern="[A-Za-z]*" onKeyUp="numericFilterr(this);">
                                            </div>
                                        </li>
                                       <!-- <li class="thirds">
                                            <div class="formField">
                                                <label>Middle Name <span></span></label>
                                                <input type="text" id="mName" name="mName" placeholder="Last Name">
                                            </div>
                                        </li>-->
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
                                        
                                        
                                         <li class="thirds">
                                            <div class="formField">
                                                <label>Date Of Birth</label>
                                                <div class="selectWrap">
                                                    <input type="date" name="dob"> 
                                                      
                                                </div>
                                            </div>
                                        </li>  
                                        
                                   <!-- <li class="thirds">
                                            <div class="formField">
                                                <label>Place Of Birth</label>
                                                <input type="text"  id="sPassportNumber" name="pob" placeholder="">
                                            </div>
                                        </li> -->
                                        
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>Age </label>
                                                <input type="text"  id="sPassportNumber" name="age" placeholder="">
                                            </div>
                                        </li>
                                        
                                        <!--<li class="thirds">-->
                                        <!--    <div class="formField"> -->
                                        <!--        <label>Gender</label>-->
                                        <!--        <div class="selectWrap">-->
                                        <!--            <select id="gender" class="select2" style="width:100%;" name="maritial_status">-->
                                        <!--                <option value="">-- select one --</option>-->
                                        <!--                <option>male</option>-->
                                        <!--                <option>female</option>-->
                                        <!--                <option>Other</option>-->
                                        <!--            </select>-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--</li>-->
                                        
                                        
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>Residential Address</label>
                                                <input type="text"  id="sPassportNumber" name="raddress" placeholder="">
                                            </div>
                                        </li>
                                        
                                         <li class="thirds">
                                            <div class="formField">
                                                <label>Emergency Contact No</label>
                                                <input type="text"  id="sPassportNumber" name="econtactno" placeholder="">
                                            </div>
                                        </li>
                                        
                                        
                                        <!-- <li class="thirds">
                                            <div class="formField">
                                                <label>Academic Qualification </label>
                                                <input type="text"  id="sPassportNumber" placeholder="">
                                            </div>
                                        </li>
                                        
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>Additional Qualifications </label>
                                                <input type="text"  id="sPassportNumber" placeholder="">
                                            </div>
                                        </li>-->
                                        
                                       
                                         
                                         
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
    
    </body>

</html>



