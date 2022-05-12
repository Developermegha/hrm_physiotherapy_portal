<?php
session_start();
 define('DB_SERVER','localhost');
define('DB_USER','dmsfplsm_dmsf_us');
define('DB_PASS' ,'v5J=8%.^H,J3');
define('DB_NAME', 'dmsfplsm_dmsf_db');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);

define('DB_SERVER1','localhost');
define('DB_USER1','dmsfplsm_dmsf2');
define('DB_PASS1' ,'dmsf2@123');
define('DB_NAME1', 'dmsfplsm_dmsf2');
$link = mysqli_connect(DB_SERVER1,DB_USER1,DB_PASS1,DB_NAME1);


if (isset($_POST['submit'])) {
    
     $regno=$_POST['regnoo'];
     
     // $qryupdate = "UPDATE `student` SET `status`= '1' WHERE regNo = '" . $regno . "'";
            $Result = mysqli_query($con, "UPDATE `student` SET `status`= '1' WHERE regNo = '" . $regno . "'");
  
 if($Result)
 {
     
      $reQry = mysqli_query($con, "SELECT * FROM student WHERE regNo = '" . $regno . "'");
                    $data = mysqli_fetch_array($reQry);
                   if($data['email'])
                   {
                       
                  
     
  
   $to = "admin@kingsinternational.academy";
                    $from = "info@dmsf.ph";
                    $to_email=$data['email'];
                    $subject='Updated Login Credentials for Confirmation of Admission';
                 //  $headers = 'From:info@dmsf.ph';
                    $headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
  $headers .= 'From: Confirmation of Admission <info@dmsf.ph>' . "\r\n";
  
    $message = '<html lang="en">
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
        <img style="width:100%;height:350px" src="https://www.kingsinternational.academy/account-portal/assets/emailer-banner_7sep_DMSF.jpg">
      </a>
    </td>
  </tr>
  <tr>
    <td class="content-wrapper" style="padding-left:24px;padding-right:24px;text-align: left;">
        <br />
        <p>Dear '.$data['firstname'].'<br /><br />
           
         We are pleased to inform you that your admission has been confirmed. Hence, we will be assigning your permanent login credentials.
            You can now access our student portal to join online classes, refer to classroom notes, 
            check your timetable and more.<br /><br/>
            You can use the credentials given below to login into our student portal.
            <br /><br />
            Login Credentials:<br />
            Username : '.$data['regNo'].'<br />
            Password : '.$data['password'].' <br />
            <br /><br />
            Kindly use the updated credentials for all future references. If you face any login difficulty, mail us at info@dmsf.ph<br />
            Link To Student Login Portal: <a href="https://dmsf.ph/student-portal/student/login" target="_blank" >https://dmsf.ph/student-portal/student/login</a><br /></p>
            
      
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

 }
   
               
 mail($to_email,$subject,$message,$headers); 
 if(mail)
 {
     
  header("Location: https://www.kingsinternational.academy/pre-registration/AdminPanel/CorrectionIndex.php");
  exit;

 }
 
 }
 else{
     echo"mail blank"
; }
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Davao Medical School Foundation Inc</title>
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="../assets/css/bootstrap-select.css" />
        <link rel="stylesheet" href="../assets/css/bootstrap.css">
        <link rel="stylesheet" href="../assets/css/device.css">
        <style>
            .text_style{
                text-align: left;
                /* padding-left: 44px; */
                width: 100%;
            }


            .select2-container .select2-selection--single {
                height:40px!important; 

            }
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
             .studentDtl .leftpanelData .imgWrap img {
    border: 1px solid #088dcd;
    border-radius: 100%;
    padding: 3px;
    width: 100px;
    height: 100px;
}
        </style>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
        <?php
       // include '../connection.php';
       // $link = connection();
        ?>
    </head>

    <body id="page-top">
        <div id="wrapper">
            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="CorrectionIndex.php">
                    <div class="sidebar-brand-text mx-3">DMSF</div>
                </a>
                <hr class="sidebar-divider my-0">
                <li class="nav-item active">
                    <a class="nav-link" href="CorrectionIndex.php">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Dashboard</span></a>
                </li>
                <hr class="sidebar-divider">
                <!--<li class="nav-item">-->
                <!--    <a class="nav-link" href="student-list.php">-->
                <!--        <i class="fas fa-fw fa-table"></i>-->
                <!--        <span>Students Table</span></a>-->
                <!--</li>-->
                <!--<div class="text-center d-none d-md-inline">-->
                <!--    <button class="rounded-circle border-0" id="sidebarToggle"></button>-->
                <!--</div>-->
            </ul>
            <div id="content-wrapper" class="d-flex flex-column">
                <div id="content">
                    <?php
                    include './top_header.php';
                    ?>
                    <?php
                    $id = $_REQUEST['id'];
                    // $fetchQry = mysqli_query($link, "SELECT * FROM personal_tbl p, studied_tbl s,information_tbl i,hostel_tbl h,educational_tbl e,mark_tbl m WHERE m.personalId='" . $_REQUEST['id'] . "' AND p.id = '" . $_REQUEST['id'] . "' AND s.personalID='" . $_REQUEST['id'] . "' AND i.personalId = '" . $_REQUEST['id'] . "' AND h.personalId='" . $_REQUEST['id'] . "' AND e.personalId='" . $_REQUEST['id'] . "' AND p.isActive = '1' AND s.isActive='1' AND i.isActive = '1' AND h.isActive = '1' AND e.isActive='1' AND m.isActive='1'");
                    $fetchQry = mysqli_query($link, "SELECT * FROM `personal_tbl` WHERE id ='" . $_REQUEST['id'] . "' AND isActive='1' ");
                    $reQry = mysqli_query($link, "SELECT * FROM remark_tbl WHERE personalId = '" . $_REQUEST['id'] . "' AND isActive = '1'");
                    $data = mysqli_fetch_array($fetchQry);
                    $rema = mysqli_fetch_array($reQry);
                    
                    
                   $registerno=$data['studentIdNumber'] ;
                   $conQry = mysqli_query($con, "SELECT * FROM student WHERE regNo = '" . $registerno . "'");
                    $datacon = mysqli_fetch_array($conQry); 
                   

                    $queryContact = mysqli_query($link, "SELECT * FROM `information_tbl` WHERE personalID ='" . $_REQUEST['id'] . "' AND isActive='1'");
                    $data1 = mysqli_fetch_array($queryContact);

                    $queryHostel = mysqli_query($link, "SELECT * FROM `hostel_tbl` WHERE personalId='" . $_REQUEST['id'] . "' AND isActive='1'");
                    $data2 = mysqli_fetch_array($queryHostel);



                    $queryCourse1 = mysqli_query($link, "SELECT * FROM `studied_tbl` WHERE personalID='" . $_REQUEST['id'] . "' AND isActive='1'");
                    $data5 = mysqli_fetch_array($queryCourse1);



                    $querymarks = mysqli_query($link, "SELECT * FROM `mark_tbl` WHERE personalId='" . $_REQUEST['id'] . "' AND isActive='1'");
                    $data4 = mysqli_fetch_array($querymarks);


                    $queryCourse = mysqli_query($link, "SELECT * FROM `educational_tbl` WHERE personalId='" . $_REQUEST['id'] . "' AND isActive='1'");
                    $data3 = mysqli_fetch_array($queryCourse);
                    
                //     $reQry3 = mysqli_query($link, "SELECT * FROM document_tbl WHERE personalId = '" . $_REQUEST['id'] . "' AND isActive = '1'");
                //   $r3 = mysqli_fetch_array($reQry3)
                    ?>
                    <div class="container-fluid">
                        <div class="card shadow mb-4">
                            <div class="card-body studentDtl">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="leftpanelData">
                                            <div class="bgimg bg-gradient-primary"></div>
                                            <div class="imgWrap">
                                                <img src="../uploads/doc/<?php echo $r3['photo']; ?>" class="img-fluid">
                                            </div>
                                            <div class="dataWrap">
                                                <h2><?php echo $data['fName'] . " " . $data['mName'] . " " . $data['lName']; ?></h2>
                                                <div class="divider"></div>
                                                <p><span>Registration ID : </span> <?php echo $data['regId']; ?></p>
                                                <p><span>Contact No : </span> <?php echo $data['philippinesPhone']; ?></p>
                                                <p><span>EMail Id : </span> <?php echo $data['email']; ?></p>
                                                <div class="divider"></div>
                                                <p><span>Batch : </span> <?php echo $data5['currentBatch']; ?></p>
                                                <div class="divider"></div>
                                                <!-- <p><span>Admin : <?php  echo $_SESSION['id'];  ?></span> </p>-->
                                                <p><span>Counseling : Approved</span> </p>
                                                <p><span>Verification : Correction</span> </p>
                                                <p><span>Correction : In Correction Section</span> </p>
                                                <p><span>Finance : </span> </p>
                                                <p><span>Submission : </span> </p>
 <!--/*<p><span>Remark : </span> <?php echo $rema['remark']; ?></p> */-->
                                                <a href="#" title="Delete" data-toggle="modal" data-target="#glassAnimals" class="btn btn-primary round" ><i class="fa fa-trash" aria-hidden="true"></i> Delete Application  </a>

                                                <div class="modal fade" id="glassAnimals" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Delete Application</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <ul class="remark-detail">
                                                                    <li>
                                                                        <input type="hidden" id="Did" value="<?php echo $_REQUEST['id']; ?>">
                                                                        <div class="form-group">
                                                                            <label> Registration Number</label>
                                                                            <input type="text" class="form-control" id="regId"
                                                                                   value="<?php echo $data['regId']; ?>" readonly="">
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="form-group">
                                                                            <label> Student Name</label>
                                                                            <input type="text" class="form-control" id="consultantName"
                                                                                   value="<?php echo $data['fName'] . " " . $data['mName'] . " " . $data['lName']; ?>"  readonly="">
                                                                        </div>
                                                                    </li>


                                                                </ul>

                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                <button type="button" onclick="DeleteApplication()" class="btn btn-success">Delete</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="divider"></div>
                                                <a href="#" title="Reject" data-toggle="modal" data-target="#rejectModal" class="btn btn-sm btn-danger shadow-sm float-left font_class margin-right-10" ><i class="fa fa-trash" aria-hidden="true"></i> Reject </a>
                                                <div class="modal fade" id="rejectModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Are you sure want to reject this document?</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <ul class="remark-detail">
                                                                    <li>
                                                                        <input type="hidden" id="id" value="<?php echo $_REQUEST['id']; ?>">
                                                                        <div class="form-group">
                                                                            <label> Student Name</label>
                                                                            <input type="text" class="form-control"
                                                                                   value="<?php echo $data['fName'] . " " . $data['mName'] . " " . $data['lName']; ?>"  readonly="">
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="form-group">
                                                                            <label>Remark</label>
                                                                            <textarea type="text" class="form-control" id="rmk10"
                                                                                      placeholder="Remark Here..."></textarea>
                                                                        </div>
                                                                    </li>
                                                                </ul>

                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                <button type="button" onclick="approveFunction('-3', '10')" class="btn btn-danger">Submit</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="#" title="Hold" data-toggle="modal" data-target="#holdModal" class="btn btn-sm btn-warning shadow-sm float-left font_class margin-right-10" ><i class="fa fa-box-open" aria-hidden="true"></i> Hold </a>
                                                <div class="modal fade" id="holdModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Are you sure want to hold this document?</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <ul class="remark-detail">
                                                                    <li>
                                                                        <input type="hidden" id="id" value="<?php echo $_REQUEST['id']; ?>">
                                                                        <div class="form-group">
                                                                            <label> Student Name</label>
                                                                            <input type="text" class="form-control"
                                                                                   value="<?php echo $data['fName'] . " " . $data['mName'] . " " . $data['lName']; ?>"  readonly="">
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="form-group">
                                                                            <label>Remark</label>
                                                                            <textarea type="text" class="form-control" id="rmk9"
                                                                                      placeholder="Remark Here..."></textarea>
                                                                        </div>
                                                                    </li>
                                                                </ul>

                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                <button type="button" onclick="approveFunction('-7', '9')" class="btn btn-warning">Submit</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="#" title="Approved" data-toggle="modal" data-target="#approveModal" class="btn btn-sm btn-success shadow-sm float-left font_class margin-right-10" ><i class="fa fa-check-circle" aria-hidden="true"></i> Approved </a>
                                                <div class="modal fade" id="approveModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Are you sure want to approve this document?</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <ul class="remark-detail">
                                                                    <li>
                                                                        <input type="hidden" id="sid" value="<?php echo $_REQUEST['id']; ?>">
                                                                        <div class="form-group">
                                                                            <label> Student Name</label>
                                                                            <input type="text" class="form-control"
                                                                                   value="<?php echo $data['fName'] . " " . $data['mName'] . " " . $data['lName']; ?>"  readonly="">
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="form-group">
                                                                            <label>Remark</label>
                                                                            <textarea type="text" class="form-control" id="rmk8"
                                                                                      placeholder="Remark Here..."></textarea>
                                                                        </div>
                                                                    </li>
                                                                     <li>
                                                                        <div class="form-group">
                                                                            <label>Reg No</label>
                                                                            <input type="text" class="form-control" id="regno"
                                                                                      value="<?php echo $data['studentIdNumber']?>" >
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                <button type="button" onclick="approveFunction('3', '8')" class="btn btn-success">Submit</button>
                                                                 <?php if($_SESSION['id'] == 20) { ?>
                                                                <form method="post" action="">
                                                             
                                                         <input type="hidden" class="form-control" id="regnoo" name="regnoo" value="<?php echo $data['studentIdNumber']?>" >
                                                         <button type="submit" name="submit" class="btn btn-success">Approve </button>    
                                                        
                                                         </form>
                                                          <?php  }  ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-8">
                                        <div class="tile" id="tile-1">
                                            <div class="mobileTbasvar">
                                                <ul class="nav nav-tabs nav-justified" role="tablist">
                                                    <div class="slider"></div>
                                                    <li class="nav-item">
                                                        <a class="nav-link active" id="personal-tab" data-toggle="tab"
                                                           href="#personal" role="tab" aria-controls="personal"
                                                           aria-selected="true">Personal Details</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="contact-tab" data-toggle="tab"
                                                           href="#contact" role="tab" aria-controls="contact"
                                                           aria-selected="false">Contact Details</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="hostel-tab" data-toggle="tab" href="#hostel"
                                                           role="tab" aria-controls="hostel" aria-selected="false">Hostel
                                                            Details</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="course-tab" data-toggle="tab" href="#course"
                                                           role="tab" aria-controls="course"
                                                           aria-selected="false"></i>Course Details</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="education-tab" data-toggle="tab" href="#education"
                                                           role="tab" aria-controls="education"
                                                           aria-selected="false"></i>Educational</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="document-tab" data-toggle="tab" href="#document"
                                                           role="tab" aria-controls="document"
                                                           aria-selected="false"></i>Document</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="remark-tab" data-toggle="tab" href="#remark"
                                                           role="tab" aria-controls="remark"
                                                           aria-selected="false"></i>Remark History</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="tab-content">
                                                <div class="tab-pane fade show active" id="personal" role="tabpanel"
                                                     aria-labelledby="personal-tab">
                                                    <div class="dataWrap">
                                                        <ul>
                                                            <li>
                                                                <div class="dataLabel">
                                                                    <label>Student Id Number</label>
                                                                </div>
                                                                <div class="dataInfo">
                                                                    <input type="hidden" id="mainId" value="<?php echo $_REQUEST['id']; ?>">
                                                                    <input type="text" id="studentIdNumber" value="<?php echo $data['studentIdNumber']; ?>" class="form-control">
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="dataLabel">
                                                                    <label>Student First Name</label>
                                                                </div>
                                                                <div class="dataInfo">
                                                                    <input type="text" id="fName" value="<?php echo $data['fName']; ?>" class="form-control">
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="dataLabel">
                                                                    <label>Middle Name</label>
                                                                </div>
                                                                <div class="dataInfo">
                                                                    <input type="text" id="mName" value="<?php echo $data['mName']; ?>" class="form-control">
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="dataLabel">
                                                                    <label>Last Name</label>
                                                                </div>
                                                                <div class="dataInfo">
                                                                    <input type="text" id="lName" value="<?php echo $data['lName']; ?>" class="form-control">
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="dataLabel">
                                                                    <label>Gender</label>
                                                                </div>
                                                                <div class="dataInfo">
                                                                    <select id="gender1" class="select2" style="width:100%;">
                                                                        <option value="">-- select one --</option>
                                                                        <option <?= $data['gender'] == 'Male' ? ' selected="selected"' : ''; ?>>Male</option>
                                                                        <option <?= $data['gender'] == 'Female' ? ' selected="selected"' : ''; ?>>Female</option>
                                                                        <option <?= $data['gender'] == 'Other' ? ' selected="selected"' : ''; ?>>Other</option>
                                                                    </select>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="dataLabel">
                                                                    <label>Date of Birth</label>
                                                                </div>
                                                                <div class="dataInfo">
                                                                    <input type="date" id="dob" value="<?php echo $data['dob']; ?>" class="form-control">
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="dataLabel">
                                                                    <label>Phone Number</label>
                                                                </div>
                                                                <div class="dataInfo">
                                                                    <input type="text" id="philippinesPhone" value="<?php echo $data['philippinesPhone']; ?>" class="form-control">
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="dataLabel">
                                                                    <label>Telegram Number</label>
                                                                </div>
                                                                <div class="dataInfo">
                                                                    <input type="text" id="telegramNumber" value="<?php echo $data['telegramNumber']; ?>" class="form-control">
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="dataLabel">
                                                                    <label>Whatsapp Number</label>
                                                                </div>
                                                                <div class="dataInfo">
                                                                    <input type="text" id="whatsappNumber" value="<?php echo $data['whatsappNumber']; ?>" class="form-control">
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="dataLabel">
                                                                    <label>Email</label>
                                                                </div>
                                                                <div class="dataInfo">
                                                                    <input type="text" id="email" value="<?php echo $data['email']; ?>" class="form-control">
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="dataLabel">
                                                                    <label>Blood Group</label>
                                                                </div>
                                                                <div class="dataInfo">
                                                                    <select id="bloodGroup1" class="select2" style="width:100%;">
                                                                        <option value="">-- select one --</option>
                                                                        <option <?= $data['bloodGroup'] == 'A+' ? ' selected="selected"' : ''; ?>>A+</option>
                                                                        <option <?= $data['bloodGroup'] == 'A-' ? ' selected="selected"' : ''; ?>>A-</option>
                                                                        <option <?= $data['bloodGroup'] == 'B+' ? ' selected="selected"' : ''; ?>>B+</option>
                                                                        <option <?= $data['bloodGroup'] == 'B-' ? ' selected="selected"' : ''; ?>>B-</option>
                                                                        <option <?= $data['bloodGroup'] == 'AB+' ? ' selected="selected"' : ''; ?>>AB+</option>
                                                                        <option <?= $data['bloodGroup'] == 'AB-' ? ' selected="selected"' : ''; ?>>AB-</option>
                                                                        <option <?= $data['bloodGroup'] == 'O+' ? ' selected="selected"' : ''; ?>>O+</option>
                                                                        <option <?= $data['bloodGroup'] == 'O-' ? ' selected="selected"' : ''; ?>>O-</option>
                                                                    </select>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="dataLabel">
                                                                    <label>Nationality </label>
                                                                </div>
                                                                <div class="dataInfo">

                                                                   <select id="nationality1" name="" class="select2" style="width:100%;">
                                                                        <option value="">-- select one --</option>
                                                                        <option value="afghan" <?= $data['nationality'] == 'afghan' ? ' selected="selected"' : ''; ?>>Afghan</option>
                                                                        <option value="albanian" <?= $data['nationality'] == 'albanian' ? ' selected="selected"' : ''; ?>>Albanian</option>
                                                                        <option value="algerian" <?= $data['nationality'] == 'algerian' ? ' selected="selected"' : ''; ?>>Algerian</option>
                                                                        <option value="american" <?= $data['nationality'] == 'american' ? ' selected="selected"' : ''; ?>>American</option>
                                                                        <option value="andorran"<?= $data['nationality'] == 'andorran' ? ' selected="selected"' : ''; ?>>Andorran</option>
                                                                        <option value="angolan" <?= $data['nationality'] == 'angolan' ? ' selected="selected"' : ''; ?>>Angolan</option>
                                                                        <option value="antiguans" <?= $data['nationality'] == 'antiguans' ? ' selected="selected"' : ''; ?>>Antiguans</option>
                                                                        <option value="argentinean" <?= $data['nationality'] == 'argentinean' ? ' selected="selected"' : ''; ?>>Argentinean</option>
                                                                        <option value="armenian" <?= $data['nationality'] == 'armenian' ? ' selected="selected"' : ''; ?>>Armenian</option>
                                                                        <option value="australian" <?= $data['nationality'] == 'australian' ? ' selected="selected"' : ''; ?>>Australian</option>
                                                                        <option value="austrian" <?= $data['nationality'] == 'austrian' ? ' selected="selected"' : ''; ?>>Austrian</option>
                                                                        <option value="azerbaijani" <?= $data['nationality'] == 'azerbaijani' ? ' selected="selected"' : ''; ?>>Azerbaijani</option>
                                                                        <option value="bahamian" <?= $data['nationality'] == 'bahamian' ? ' selected="selected"' : ''; ?>>Bahamian</option>
                                                                        <option value="bahraini" <?= $data['nationality'] == 'bahraini' ? ' selected="selected"' : ''; ?>>Bahraini</option>
                                                                        <option value="bangladeshi" <?= $data['nationality'] == 'bangladeshi' ? ' selected="selected"' : ''; ?>>Bangladeshi</option>
                                                                        <option value="barbadian" <?= $data['nationality'] == 'barbadian' ? ' selected="selected"' : ''; ?>>Barbadian</option>
                                                                        <option value="barbudans" <?= $data['nationality'] == 'barbudans' ? ' selected="selected"' : ''; ?>>Barbudans</option>
                                                                        <option value="batswana" <?= $data['nationality'] == 'batswana' ? ' selected="selected"' : ''; ?>>Batswana</option>
                                                                        <option value="belarusian" <?= $data['nationality'] == 'belarusian' ? ' selected="selected"' : ''; ?>>Belarusian</option>
                                                                        <option value="belgian" <?= $data['nationality'] == 'belgian' ? ' selected="selected"' : ''; ?>>Belgian</option>
                                                                        <option value="belizean" <?= $data['nationality'] == 'belizean' ? ' selected="selected"' : ''; ?>>Belizean</option>
                                                                        <option value="beninese" <?= $data['nationality'] == 'beninese' ? ' selected="selected"' : ''; ?>>Beninese</option>
                                                                        <option value="bhutanese" <?= $data['nationality'] == 'bhutanese' ? ' selected="selected"' : ''; ?>>Bhutanese</option>
                                                                        <option value="bolivian" <?= $data['nationality'] == 'bolivian' ? ' selected="selected"' : ''; ?>>Bolivian</option>
                                                                        <option value="bosnian" <?= $data['nationality'] == 'bosnian' ? ' selected="selected"' : ''; ?>>Bosnian</option>
                                                                        <option value="brazilian" <?= $data['nationality'] == 'brazilian' ? ' selected="selected"' : ''; ?>>Brazilian</option>
                                                                        <option value="british" <?= $data['nationality'] == 'british' ? ' selected="selected"' : ''; ?>>British</option>
                                                                        <option value="bruneian" <?= $data['nationality'] == 'bruneian' ? ' selected="selected"' : ''; ?>>Bruneian</option>
                                                                        <option value="bulgarian" <?= $data['nationality'] == 'bulgarian' ? ' selected="selected"' : ''; ?>>Bulgarian</option>
                                                                        <option value="burkinabe" <?= $data['nationality'] == 'burkinabe' ? ' selected="selected"' : ''; ?>>Burkinabe</option>
                                                                        <option value="burmese" <?= $data['nationality'] == 'burmese' ? ' selected="selected"' : ''; ?>>Burmese</option>
                                                                        <option value="burundian" <?= $data['nationality'] == 'burundian' ? ' selected="selected"' : ''; ?>>Burundian</option>
                                                                        <option value="cambodian" <?= $data['nationality'] == 'cambodian' ? ' selected="selected"' : ''; ?>>Cambodian</option>
                                                                        <option value="cameroonian" <?= $data['nationality'] == 'cameroonian' ? ' selected="selected"' : ''; ?>>Cameroonian</option>
                                                                        <option value="canadian" <?= $data['nationality'] == 'canadian' ? ' selected="selected"' : ''; ?>>Canadian</option>
                                                                        <option value="cape verdean" <?= $data['nationality'] == 'cape verdean' ? ' selected="selected"' : ''; ?>>Cape Verdean</option>
                                                                        <option value="central african" <?= $data['nationality'] == 'central african' ? ' selected="selected"' : ''; ?>>Central African</option>
                                                                        <option value="chadian" <?= $data['nationality'] == 'chadian' ? ' selected="selected"' : ''; ?>>Chadian</option>
                                                                        <option value="chilean" <?= $data['nationality'] == 'chilean' ? ' selected="selected"' : ''; ?>>Chilean</option>
                                                                        <option value="chinese" <?= $data['nationality'] == 'chinese' ? ' selected="selected"' : ''; ?>>Chinese</option>
                                                                        <option value="colombian" <?= $data['nationality'] == 'colombian' ? ' selected="selected"' : ''; ?>>Colombian</option>
                                                                        <option value="comoran" <?= $data['nationality'] == 'comoran' ? ' selected="selected"' : ''; ?>>Comoran</option>
                                                                        <option value="congolese" <?= $data['nationality'] == 'congolese' ? ' selected="selected"' : ''; ?>>Congolese</option>
                                                                        <option value="costa rican" <?= $data['nationality'] == 'costa rican' ? ' selected="selected"' : ''; ?>>Costa Rican</option>
                                                                        <option value="croatian" <?= $data['nationality'] == 'croatian' ? ' selected="selected"' : ''; ?>>Croatian</option>
                                                                        <option value="cuban" <?= $data['nationality'] == 'cuban' ? ' selected="selected"' : ''; ?>>Cuban</option>
                                                                        <option value="cypriot" <?= $data['nationality'] == 'cypriot' ? ' selected="selected"' : ''; ?>>Cypriot</option>
                                                                        <option value="czech" <?= $data['nationality'] == 'czech' ? ' selected="selected"' : ''; ?>>Czech</option>
                                                                        <option value="danish" <?= $data['nationality'] == 'danish' ? ' selected="selected"' : ''; ?>>Danish</option>
                                                                        <option value="djibouti" <?= $data['nationality'] == 'djibouti' ? ' selected="selected"' : ''; ?>>Djibouti</option>
                                                                        <option value="dominican" <?= $data['nationality'] == 'dominican' ? ' selected="selected"' : ''; ?>>Dominican</option>
                                                                        <option value="dutch" <?= $data['nationality'] == 'dutch' ? ' selected="selected"' : ''; ?>>Dutch</option>
                                                                        <option value="east timorese" <?= $data['nationality'] == 'east timorese' ? ' selected="selected"' : ''; ?>>East Timorese</option>
                                                                        <option value="ecuadorean" <?= $data['nationality'] == 'ecuadorean' ? ' selected="selected"' : ''; ?>>Ecuadorean</option>
                                                                        <option value="egyptian" <?= $data['nationality'] == 'egyptian' ? ' selected="selected"' : ''; ?>>Egyptian</option>
                                                                        <option value="emirian" <?= $data['nationality'] == 'emirian' ? ' selected="selected"' : ''; ?>>Emirian</option>
                                                                        <option value="equatorial guinean" <?= $data['nationality'] == 'equatorial guinean' ? ' selected="selected"' : ''; ?>>Equatorial Guinean</option>
                                                                        <option value="eritrean" <?= $data['nationality'] == 'eritrean' ? ' selected="selected"' : ''; ?>>Eritrean</option>
                                                                        <option value="estonian" <?= $data['nationality'] == 'estonian' ? ' selected="selected"' : ''; ?>>Estonian</option>
                                                                        <option value="ethiopian" <?= $data['nationality'] == 'ethiopian' ? ' selected="selected"' : ''; ?>>Ethiopian</option>
                                                                        <option value="fijian" <?= $data['nationality'] == 'fijian' ? ' selected="selected"' : ''; ?>>Fijian</option>
                                                                        <option value="filipino" <?= $data['nationality'] == 'filipino' ? ' selected="selected"' : ''; ?>>Filipino</option>
                                                                        <option value="finnish" <?= $data['nationality'] == 'finnish' ? ' selected="selected"' : ''; ?>>Finnish</option>
                                                                        <option value="french" <?= $data['nationality'] == 'french' ? ' selected="selected"' : ''; ?>>French</option>
                                                                        <option value="gabonese" <?= $data['nationality'] == 'gabonese' ? ' selected="selected"' : ''; ?>>Gabonese</option>
                                                                        <option value="gambian" <?= $data['nationality'] == 'gambian' ? ' selected="selected"' : ''; ?>>Gambian</option>
                                                                        <option value="georgian" <?= $data['nationality'] == 'georgian' ? ' selected="selected"' : ''; ?>>Georgian</option>
                                                                        <option value="german" <?= $data['nationality'] == 'german' ? ' selected="selected"' : ''; ?>>German</option>
                                                                        <option value="ghanaian" <?= $data['nationality'] == 'ghanaian' ? ' selected="selected"' : ''; ?>>Ghanaian</option>
                                                                        <option value="greek" <?= $data['nationality'] == 'greek' ? ' selected="selected"' : ''; ?>>Greek</option>
                                                                        <option value="grenadian" <?= $data['nationality'] == 'grenadian' ? ' selected="selected"' : ''; ?>>Grenadian</option>
                                                                        <option value="guatemalan" <?= $data['nationality'] == 'guatemalan' ? ' selected="selected"' : ''; ?>>Guatemalan</option>
                                                                        <option value="guinea-bissauan" <?= $data['nationality'] == 'guinea-bissauan' ? ' selected="selected"' : ''; ?>>Guinea-Bissauan</option>
                                                                        <option value="guinean" <?= $data['nationality'] == 'guinean' ? ' selected="selected"' : ''; ?>>Guinean</option>
                                                                        <option value="guyanese" <?= $data['nationality'] == 'guyanese' ? ' selected="selected"' : ''; ?>>Guyanese</option>
                                                                        <option value="haitian" <?= $data['nationality'] == 'haitian' ? ' selected="selected"' : ''; ?>>Haitian</option>
                                                                        <option value="herzegovinian" <?= $data['nationality'] == 'herzegovinian' ? ' selected="selected"' : ''; ?>>Herzegovinian</option>
                                                                        <option value="honduran" <?= $data['nationality'] == 'honduran' ? ' selected="selected"' : ''; ?>>Honduran</option>
                                                                        <option value="hungarian" <?= $data['nationality'] == 'hungarian' ? ' selected="selected"' : ''; ?>>Hungarian</option>
                                                                        <option value="icelander" <?= $data['nationality'] == 'icelander' ? ' selected="selected"' : ''; ?>>Icelander</option>
                                                                        <option value="indian" <?= $data['nationality'] == 'indian' ? ' selected="selected"' : ''; ?>>Indian</option>
                                                                        <option value="indonesian" <?= $data['nationality'] == 'indonesian' ? ' selected="selected"' : ''; ?>>Indonesian</option>
                                                                        <option value="iranian" <?= $data['nationality'] == 'iranian' ? ' selected="selected"' : ''; ?>>Iranian</option>
                                                                        <option value="iraqi" <?= $data['nationality'] == 'iraqi' ? ' selected="selected"' : ''; ?>>Iraqi</option>
                                                                        <option value="irish" <?= $data['nationality'] == 'irish' ? ' selected="selected"' : ''; ?>>Irish</option>
                                                                        <option value="israeli" <?= $data['nationality'] == 'israeli' ? ' selected="selected"' : ''; ?>>Israeli</option>
                                                                        <option value="italian" <?= $data['nationality'] == 'italian' ? ' selected="selected"' : ''; ?>>Italian</option>
                                                                        <option value="ivorian" <?= $data['nationality'] == 'ivorian' ? ' selected="selected"' : ''; ?>>Ivorian</option>
                                                                        <option value="jamaican" <?= $data['nationality'] == 'jamaican' ? ' selected="selected"' : ''; ?>>Jamaican</option>
                                                                        <option value="japanese" <?= $data['nationality'] == 'japanese' ? ' selected="selected"' : ''; ?>>Japanese</option>
                                                                        <option value="jordanian" <?= $data['nationality'] == 'jordanian' ? ' selected="selected"' : ''; ?>>Jordanian</option>
                                                                        <option value="kazakhstani" <?= $data['nationality'] == 'kazakhstani' ? ' selected="selected"' : ''; ?>>Kazakhstani</option>
                                                                        <option value="kenyan" <?= $data['nationality'] == 'kenyan' ? ' selected="selected"' : ''; ?>>Kenyan</option>
                                                                        <option value="kittian and nevisian" <?= $data['nationality'] == 'kittian and nevisian' ? ' selected="selected"' : ''; ?>>Kittian and Nevisian</option>
                                                                        <option value="kuwaiti" <?= $data['nationality'] == 'kuwaiti' ? ' selected="selected"' : ''; ?>>Kuwaiti</option>
                                                                        <option value="kyrgyz" <?= $data['nationality'] == 'kyrgyz' ? ' selected="selected"' : ''; ?>>Kyrgyz</option>
                                                                        <option value="laotian" <?= $data['nationality'] == 'laotian' ? ' selected="selected"' : ''; ?>>Laotian</option>
                                                                        <option value="latvian"<?= $data['nationality'] == 'latvian' ? ' selected="selected"' : ''; ?>>Latvian</option>
                                                                        <option value="lebanese" <?= $data['nationality'] == 'lebanese' ? ' selected="selected"' : ''; ?>>Lebanese</option>
                                                                        <option value="liberian" <?= $data['nationality'] == 'liberian' ? ' selected="selected"' : ''; ?>>Liberian</option>
                                                                        <option value="libyan" <?= $data['nationality'] == 'libyan' ? ' selected="selected"' : ''; ?>>Libyan</option>
                                                                        <option value="liechtensteiner" <?= $data['nationality'] == 'liechtensteiner' ? ' selected="selected"' : ''; ?>>Liechtensteiner</option>
                                                                        <option value="lithuanian" <?= $data['nationality'] == 'lithuanian' ? ' selected="selected"' : ''; ?>>Lithuanian</option>
                                                                        <option value="luxembourger" <?= $data['nationality'] == 'luxembourger' ? ' selected="selected"' : ''; ?>>Luxembourger</option>
                                                                        <option value="macedonian" <?= $data['nationality'] == 'macedonian' ? ' selected="selected"' : ''; ?>>Macedonian</option>
                                                                        <option value="malagasy" <?= $data['nationality'] == 'malagasy' ? ' selected="selected"' : ''; ?>>Malagasy</option>
                                                                        <option value="malawian" <?= $data['nationality'] == 'malawian' ? ' selected="selected"' : ''; ?>>Malawian</option>
                                                                        <option value="malaysian" <?= $data['nationality'] == 'malaysian' ? ' selected="selected"' : ''; ?>>Malaysian</option>
                                                                        <option value="maldivan" <?= $data['nationality'] == 'maldivan' ? ' selected="selected"' : ''; ?>>Maldivan</option>
                                                                        <option value="malian" <?= $data['nationality'] == 'malian' ? ' selected="selected"' : ''; ?>>Malian</option>
                                                                        <option value="maltese" <?= $data['nationality'] == 'maltese' ? ' selected="selected"' : ''; ?>>Maltese</option>
                                                                        <option value="marshallese" <?= $data['nationality'] == 'marshallese' ? ' selected="selected"' : ''; ?>>Marshallese</option>
                                                                        <option value="mauritanian" <?= $data['nationality'] == 'mauritanian' ? ' selected="selected"' : ''; ?>>Mauritanian</option>
                                                                        <option value="mauritian" <?= $data['nationality'] == 'mauritian' ? ' selected="selected"' : ''; ?>>Mauritian</option>
                                                                        <option value="mexican" <?= $data['nationality'] == 'mexican' ? ' selected="selected"' : ''; ?>>Mexican</option>
                                                                        <option value="micronesian" <?= $data['nationality'] == 'micronesian' ? ' selected="selected"' : ''; ?>>Micronesian</option>
                                                                        <option value="moldovan" <?= $data['nationality'] == 'moldovan' ? ' selected="selected"' : ''; ?>>Moldovan</option>
                                                                        <option value="monacan" <?= $data['nationality'] == 'monacan' ? ' selected="selected"' : ''; ?>>Monacan</option>
                                                                        <option value="mongolian" <?= $data['nationality'] == 'mongolian' ? ' selected="selected"' : ''; ?>>Mongolian</option>
                                                                        <option value="moroccan" <?= $data['nationality'] == 'moroccan' ? ' selected="selected"' : ''; ?>>Moroccan</option>
                                                                        <option value="mosotho" <?= $data['nationality'] == 'mosotho' ? ' selected="selected"' : ''; ?>>Mosotho</option>
                                                                        <option value="motswana" <?= $data['nationality'] == 'motswana' ? ' selected="selected"' : ''; ?>>Motswana</option>
                                                                        <option value="mozambican" <?= $data['nationality'] == 'mozambican' ? ' selected="selected"' : ''; ?>>Mozambican</option>
                                                                        <option value="namibian" <?= $data['nationality'] == 'namibian' ? ' selected="selected"' : ''; ?>>Namibian</option>
                                                                        <option value="nauruan" <?= $data['nationality'] == 'nauruan' ? ' selected="selected"' : ''; ?>>Nauruan</option>
                                                                        <option value="nepalese" <?= $data['nationality'] == 'nepalese' ? ' selected="selected"' : ''; ?>>Nepalese</option>
                                                                        <option value="new zealander" <?= $data['nationality'] == 'new zealander' ? ' selected="selected"' : ''; ?>>New Zealander</option>
                                                                        <option value="ni-vanuatu" <?= $data['nationality'] == 'ni-vanuatu' ? ' selected="selected"' : ''; ?>>Ni-Vanuatu</option>
                                                                        <option value="nicaraguan" <?= $data['nationality'] == 'nicaraguan' ? ' selected="selected"' : ''; ?>>Nicaraguan</option>
                                                                        <option value="nigerien" <?= $data['nationality'] == 'nigerien' ? ' selected="selected"' : ''; ?>>Nigerien</option>
                                                                        <option value="north korean" <?= $data['nationality'] == 'north korean' ? ' selected="selected"' : ''; ?>>North Korean</option>
                                                                        <option value="northern irish" <?= $data['nationality'] == 'northern irish' ? ' selected="selected"' : ''; ?>>Northern Irish</option>
                                                                        <option value="norwegian" <?= $data['nationality'] == 'norwegian' ? ' selected="selected"' : ''; ?>>Norwegian</option>
                                                                        <option value="omani" <?= $data['nationality'] == 'omani' ? ' selected="selected"' : ''; ?>>Omani</option>
                                                                        <option value="pakistani" <?= $data['nationality'] == 'pakistani' ? ' selected="selected"' : ''; ?>>Pakistani</option>
                                                                        <option value="palauan" <?= $data['nationality'] == 'palauan' ? ' selected="selected"' : ''; ?>>Palauan</option>
                                                                        <option value="panamanian" <?= $data['nationality'] == 'panamanian' ? ' selected="selected"' : ''; ?>>Panamanian</option>
                                                                        <option value="papua new guinean" <?= $data['nationality'] == 'papua new guinean' ? ' selected="selected"' : ''; ?>>Papua New Guinean</option>
                                                                        <option value="paraguayan" <?= $data['nationality'] == 'paraguayan' ? ' selected="selected"' : ''; ?>>Paraguayan</option>
                                                                        <option value="peruvian" <?= $data['nationality'] == 'peruvian' ? ' selected="selected"' : ''; ?>>Peruvian</option>
                                                                        <option value="polish" <?= $data['nationality'] == 'polish' ? ' selected="selected"' : ''; ?>>Polish</option>
                                                                        <option value="portuguese" <?= $data['nationality'] == 'portuguese' ? ' selected="selected"' : ''; ?>>Portuguese</option>
                                                                        <option value="qatari" <?= $data['nationality'] == 'qatari' ? ' selected="selected"' : ''; ?>>Qatari</option>
                                                                        <option value="romanian" <?= $data['nationality'] == 'romanian' ? ' selected="selected"' : ''; ?>>Romanian</option>
                                                                        <option value="russian" <?= $data['nationality'] == 'russian' ? ' selected="selected"' : ''; ?>>Russian</option>
                                                                        <option value="rwandan" <?= $data['nationality'] == 'rwandan' ? ' selected="selected"' : ''; ?>>Rwandan</option>
                                                                        <option value="saint lucian" <?= $data['nationality'] == 'saint lucian' ? ' selected="selected"' : ''; ?>>Saint Lucian</option>
                                                                        <option value="salvadoran" <?= $data['nationality'] == 'salvadoran' ? ' selected="selected"' : ''; ?>>Salvadoran</option>
                                                                        <option value="samoan" <?= $data['nationality'] == 'samoan' ? ' selected="selected"' : ''; ?>>Samoan</option>
                                                                        <option value="san marinese" <?= $data['nationality'] == 'san marinese' ? ' selected="selected"' : ''; ?>>San Marinese</option>
                                                                        <option value="sao tomean" <?= $data['nationality'] == 'sao tomean' ? ' selected="selected"' : ''; ?>>Sao Tomean</option>
                                                                        <option value="saudi" <?= $data['nationality'] == 'saudi' ? ' selected="selected"' : ''; ?>>Saudi</option>
                                                                        <option value="scottish" <?= $data['nationality'] == 'scottish' ? ' selected="selected"' : ''; ?>>Scottish</option>
                                                                        <option value="senegalese" <?= $data['nationality'] == 'senegalese' ? ' selected="selected"' : ''; ?>>Senegalese</option>
                                                                        <option value="serbian" <?= $data['nationality'] == 'serbian' ? ' selected="selected"' : ''; ?>>Serbian</option>
                                                                        <option value="seychellois" <?= $data['nationality'] == 'seychellois' ? ' selected="selected"' : ''; ?>>Seychellois</option>
                                                                        <option value="sierra leonean" <?= $data['nationality'] == 'sierra leonean' ? ' selected="selected"' : ''; ?>>Sierra Leonean</option>
                                                                        <option value="singaporean" <?= $data['nationality'] == 'singaporean' ? ' selected="selected"' : ''; ?>>Singaporean</option>
                                                                        <option value="slovakian" <?= $data['nationality'] == 'slovakian' ? ' selected="selected"' : ''; ?>>Slovakian</option>
                                                                        <option value="slovenian" <?= $data['nationality'] == 'slovenian' ? ' selected="selected"' : ''; ?>>Slovenian</option>
                                                                        <option value="solomon islander" <?= $data['nationality'] == 'solomon islander' ? ' selected="selected"' : ''; ?>>Solomon Islander</option>
                                                                        <option value="somali" <?= $data['nationality'] == 'somali' ? ' selected="selected"' : ''; ?>>Somali</option>
                                                                        <option value="south african" <?= $data['nationality'] == 'south african' ? ' selected="selected"' : ''; ?>>South African</option>
                                                                        <option value="south korean" <?= $data['nationality'] == 'south korean' ? ' selected="selected"' : ''; ?>>South Korean</option>
                                                                        <option value="spanish" <?= $data['nationality'] == 'spanish' ? ' selected="selected"' : ''; ?>>Spanish</option>
                                                                        <option value="sri lankan" <?= $data['nationality'] == 'sri lankan' ? ' selected="selected"' : ''; ?>>Sri Lankan</option>
                                                                        <option value="sudanese" <?= $data['nationality'] == 'sudanese' ? ' selected="selected"' : ''; ?>>Sudanese</option>
                                                                        <option value="surinamer" <?= $data['nationality'] == 'surinamer' ? ' selected="selected"' : ''; ?>>Surinamer</option>
                                                                        <option value="swazi" <?= $data['nationality'] == 'swazi' ? ' selected="selected"' : ''; ?>>Swazi</option>
                                                                        <option value="swedish" <?= $data['nationality'] == 'swedish' ? ' selected="selected"' : ''; ?>>Swedish</option>
                                                                        <option value="swiss" <?= $data['nationality'] == 'swiss' ? ' selected="selected"' : ''; ?>>Swiss</option>
                                                                        <option value="syrian" <?= $data['nationality'] == 'syrian' ? ' selected="selected"' : ''; ?>>Syrian</option>
                                                                        <option value="taiwanese" <?= $data['nationality'] == 'taiwanese' ? ' selected="selected"' : ''; ?>>Taiwanese</option>
                                                                        <option value="tajik" <?= $data['nationality'] == 'tajik' ? ' selected="selected"' : ''; ?>>Tajik</option>
                                                                        <option value="tanzanian" <?= $data['nationality'] == 'tanzanian' ? ' selected="selected"' : ''; ?>>Tanzanian</option>
                                                                        <option value="thai" <?= $data['nationality'] == 'thai' ? ' selected="selected"' : ''; ?>>Thai</option>
                                                                        <option value="togolese" <?= $data['nationality'] == 'togolese' ? ' selected="selected"' : ''; ?>>Togolese</option>
                                                                        <option value="tongan" <?= $data['nationality'] == 'tongan' ? ' selected="selected"' : ''; ?>>Tongan</option>
                                                                        <option value="trinidadian or tobagonian" <?= $data['nationality'] == 'trinidadian or tobagonian' ? ' selected="selected"' : ''; ?>>Trinidadian or Tobagonian</option>
                                                                        <option value="tunisian" <?= $data['nationality'] == 'tunisian' ? ' selected="selected"' : ''; ?>>Tunisian</option>
                                                                        <option value="turkish" <?= $data['nationality'] == 'turkish' ? ' selected="selected"' : ''; ?>>Turkish</option>
                                                                        <option value="tuvaluan" <?= $data['nationality'] == 'tuvaluan' ? ' selected="selected"' : ''; ?>>Tuvaluan</option>
                                                                        <option value="ugandan" <?= $data['nationality'] == 'ugandan' ? ' selected="selected"' : ''; ?>>Ugandan</option>
                                                                        <option value="ukrainian" <?= $data['nationality'] == 'ukrainian' ? ' selected="selected"' : ''; ?>>Ukrainian</option>
                                                                        <option value="uruguayan" <?= $data['nationality'] == 'uruguayan' ? ' selected="selected"' : ''; ?>>Uruguayan</option>
                                                                        <option value="uzbekistani" <?= $data['nationality'] == 'uzbekistani' ? ' selected="selected"' : ''; ?>>Uzbekistani</option>
                                                                        <option value="venezuelan" <?= $data['nationality'] == 'venezuelan' ? ' selected="selected"' : ''; ?>>Venezuelan</option>
                                                                        <option value="vietnamese" <?= $data['nationality'] == 'vietnamese' ? ' selected="selected"' : ''; ?>>Vietnamese</option>
                                                                        <option value="welsh" <?= $data['nationality'] == 'welsh' ? ' selected="selected"' : ''; ?>>Welsh</option>
                                                                        <option value="yemenite" <?= $data['nationality'] == 'yemenite' ? ' selected="selected"' : ''; ?>>Yemenite</option>
                                                                        <option value="zambian" <?= $data['nationality'] == 'zambian' ? ' selected="selected"' : ''; ?>>Zambian</option>
                                                                        <option value="zimbabwean" <?= $data['nationality'] == 'zimbabwean' ? ' selected="selected"' : ''; ?>>Zimbabwean</option>
                                                                    </select>
                                                                </div>
                                                            </li>
                                                             <?php   ?>
                                                             <li>
                                                                <div class="dataLabel">
                                                                    <label>Consultant</label>
                                                                </div>
                                                                <div class="dataInfo">
                                                                    <input type="text" id="consultant" value="<?php echo $datacon['consultant'] ?>" class="form-control">
                                                                </div>
                                                            </li>
                                                            
                                                            <li></li>
                                                            <button type="button" onclick="personalEdit()" class="btn btn-success" style="float-right">Submit</button>
                                                        </ul>
                                                    </div>

                                                </div>

                                                <div class="tab-pane fade" id="contact" role="tabpanel"
                                                     aria-labelledby="contact-tab">
                                                    <div class="dataWrap">
                                                        <ul>
                                                            <li>
                                                                <div class="dataLabel">
                                                                    <label>Temporary Address in home country</label>
                                                                </div>
                                                                <div class="dataInfo">
                                                                    <input type="text" id="temporaryAddress" value="<?php echo $data1['temporaryAddress']; ?>" class="form-control">
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="dataLabel">
                                                                    <label>Country</label>
                                                                </div>
                                                                <div class="dataInfo">
                                                                    <!--<select id="tCountry1"  class="select2" style="width:100%;">-->
                                                                    <!--    <option value="">-- select one --</option>-->
                                                                    <!--    <option value="Afghanistan"<?= $data11['tCountry'] == 'Afghanistan' ? ' selected="selected"' : ''; ?>>Afghanistan</option>-->
                                                                    <!--    <option value="Åland Islands"<?= $data11['tCountry'] == 'Åland Islands' ? ' selected="selected"' : ''; ?>>Åland Islands</option>-->
                                                                    <!--    <option value="Albania"<?= $data11['tCountry'] == 'Albania' ? ' selected="selected"' : ''; ?>>Albania</option>-->
                                                                    <!--    <option value="Algeria"<?= $data11['tCountry'] == 'Algeria' ? ' selected="selected"' : ''; ?>>Algeria</option>-->
                                                                    <!--    <option value="American Samoa"<?= $data11['tCountry'] == 'American Samoa' ? ' selected="selected"' : ''; ?>>American Samoa</option>-->
                                                                    <!--    <option value="Andorra"<?= $data11['tCountry'] == 'Andorra' ? ' selected="selected"' : ''; ?>>Andorra</option>-->
                                                                    <!--    <option value="Angola"<?= $data11['tCountry'] == 'Angola' ? ' selected="selected"' : ''; ?>>Angola</option>-->
                                                                    <!--    <option value="Anguilla"<?= $data11['tCountry'] == 'Anguilla' ? ' selected="selected"' : ''; ?>>Anguilla</option>-->
                                                                    <!--    <option value="Antarctica"<?= $data11['tCountry'] == 'Antarctica' ? ' selected="selected"' : ''; ?>>Antarctica</option>-->
                                                                    <!--    <option value="Antigua and Barbuda"<?= $data11['tCountry'] == 'Antigua and Barbuda' ? ' selected="selected"' : ''; ?>>Antigua and Barbuda</option>-->
                                                                    <!--    <option value="Argentina"<?= $data11['tCountry'] == 'Argentina' ? ' selected="selected"' : ''; ?>>Argentina</option>-->
                                                                    <!--    <option value="Armenia"<?= $data11['tCountry'] == 'Armenia' ? ' selected="selected"' : ''; ?>>Armenia</option>-->
                                                                    <!--    <option value="Aruba"<?= $data11['tCountry'] == 'Aruba' ? ' selected="selected"' : ''; ?>>Aruba</option>-->
                                                                    <!--    <option value="Australia"<?= $data11['tCountry'] == 'Australia' ? ' selected="selected"' : ''; ?>>Australia</option>-->
                                                                    <!--    <option value="Austria"<?= $data11['tCountry'] == 'Austria' ? ' selected="selected"' : ''; ?>>Austria</option>-->
                                                                    <!--    <option value="Azerbaijan"<?= $data11['tCountry'] == 'Azerbaijan' ? ' selected="selected"' : ''; ?>>Azerbaijan</option>-->
                                                                    <!--    <option value="Bahamas"<?= $data11['tCountry'] == 'Bahamas' ? ' selected="selected"' : ''; ?>>Bahamas</option>-->
                                                                    <!--    <option value="Bahrain"<?= $data11['tCountry'] == 'Bahrain' ? ' selected="selected"' : ''; ?>>Bahrain</option>-->
                                                                    <!--    <option value="Bangladesh"<?= $data11['tCountry'] == 'Bangladesh' ? ' selected="selected"' : ''; ?>>Bangladesh</option>-->
                                                                    <!--    <option value="Barbados"<?= $data11['tCountry'] == 'Barbados' ? ' selected="selected"' : ''; ?>>Barbados</option>-->
                                                                    <!--    <option value="Belarus"<?= $data11['tCountry'] == 'Belarus' ? ' selected="selected"' : ''; ?>>Belarus</option>-->
                                                                    <!--    <option value="Belgium"<?= $data11['tCountry'] == 'Belgium' ? ' selected="selected"' : ''; ?>>Belgium</option>-->
                                                                    <!--    <option value="Belize"<?= $data11['tCountry'] == 'Belize' ? ' selected="selected"' : ''; ?>>Belize</option>-->
                                                                    <!--    <option value="Benin"<?= $data11['tCountry'] == 'Benin' ? ' selected="selected"' : ''; ?>>Benin</option>-->
                                                                    <!--    <option value="Bermuda"<?= $data11['tCountry'] == 'Bermuda' ? ' selected="selected"' : ''; ?>>Bermuda</option>-->
                                                                    <!--    <option value="Bhutan"<?= $data11['tCountry'] == 'Bhutan' ? ' selected="selected"' : ''; ?>>Bhutan</option>-->
                                                                    <!--    <option value="Bolivia"<?= $data11['tCountry'] == 'Bolivia' ? ' selected="selected"' : ''; ?>>Bolivia</option>-->
                                                                    <!--    <option value="Bosnia and Herzegovina"<?= $data11['tCountry'] == 'Bosnia and Herzegovina' ? ' selected="selected"' : ''; ?>>Bosnia and Herzegovina</option>-->
                                                                    <!--    <option value="Botswana"<?= $data11['tCountry'] == 'Botswana' ? ' selected="selected"' : ''; ?>>Botswana</option>-->
                                                                    <!--    <option value="Bouvet Island"<?= $data11['tCountry'] == 'Bouvet Island' ? ' selected="selected"' : ''; ?>>Bouvet Island</option>-->
                                                                    <!--    <option value="Brazil"<?= $data11['tCountry'] == 'Brazil' ? ' selected="selected"' : ''; ?>>Brazil</option>-->
                                                                    <!--    <option value="British Indian Ocean Territory"<?= $data11['tCountry'] == 'British Indian Ocean Territory' ? ' selected="selected"' : ''; ?>>British Indian Ocean Territory</option>-->
                                                                    <!--    <option value="Brunei Darussalam"<?= $data11['tCountry'] == 'Brunei Darussalam' ? ' selected="selected"' : ''; ?>>Brunei Darussalam</option>-->
                                                                    <!--    <option value="Bulgaria"<?= $data11['tCountry'] == 'Bulgaria' ? ' selected="selected"' : ''; ?>>Bulgaria</option>-->
                                                                    <!--    <option value="Burkina Faso"<?= $data11['tCountry'] == 'Burkina Faso' ? ' selected="selected"' : ''; ?>>Burkina Faso</option>-->
                                                                    <!--    <option value="Burundi"<?= $data11['tCountry'] == 'Burundi' ? ' selected="selected"' : ''; ?>>Burundi</option>-->
                                                                    <!--    <option value="Cambodia"<?= $data11['tCountry'] == 'Cambodia' ? ' selected="selected"' : ''; ?>>Cambodia</option>-->
                                                                    <!--    <option value="Cameroon"<?= $data11['tCountry'] == 'Cameroon' ? ' selected="selected"' : ''; ?>>Cameroon</option>-->
                                                                    <!--    <option value="Canada"<?= $data11['tCountry'] == 'Canada' ? ' selected="selected"' : ''; ?>>Canada</option>-->
                                                                    <!--    <option value="Cape Verde"<?= $data11['tCountry'] == 'Cape Verde' ? ' selected="selected"' : ''; ?>>Cape Verde</option>-->
                                                                    <!--    <option value="Cayman Islands"<?= $data11['tCountry'] == 'Cayman Islands' ? ' selected="selected"' : ''; ?>>Cayman Islands</option>-->
                                                                    <!--    <option value="Central African Republic"<?= $data11['tCountry'] == 'Central African Republic' ? ' selected="selected"' : ''; ?>>Central African Republic</option>-->
                                                                    <!--    <option value="Chad"<?= $data11['tCountry'] == 'Chad' ? ' selected="selected"' : ''; ?>>Chad</option>-->
                                                                    <!--    <option value="Chile"<?= $data11['tCountry'] == 'Chile' ? ' selected="selected"' : ''; ?>>Chile</option>-->
                                                                    <!--    <option value="China"<?= $data11['tCountry'] == 'China' ? ' selected="selected"' : ''; ?>>China</option>-->
                                                                    <!--    <option value="Christmas Island"<?= $data11['tCountry'] == 'Christmas Island' ? ' selected="selected"' : ''; ?>>Christmas Island</option>-->
                                                                    <!--    <option value="Cocos (Keeling) Islands"<?= $data11['tCountry'] == 'Cocos (Keeling) Islands' ? ' selected="selected"' : ''; ?>>Cocos (Keeling) Islands</option>-->
                                                                    <!--    <option value="Colombia"<?= $data11['tCountry'] == 'Colombia' ? ' selected="selected"' : ''; ?>>Colombia</option>-->
                                                                    <!--    <option value="Comoros"<?= $data11['tCountry'] == 'Comoros' ? ' selected="selected"' : ''; ?>>Comoros</option>-->
                                                                    <!--    <option value="Congo"<?= $data11['tCountry'] == 'Congo' ? ' selected="selected"' : ''; ?>>Congo</option>-->
                                                                    <!--    <option value="Congo, The Democratic Republic of The"<?= $data11['tCountry'] == 'Congo, The Democratic Republic of The' ? ' selected="selected"' : ''; ?>>Congo, The Democratic Republic of The</option>-->
                                                                    <!--    <option value="Cook Islands"<?= $data11['tCountry'] == 'Cook Islands' ? ' selected="selected"' : ''; ?>>Cook Islands</option>-->
                                                                    <!--    <option value="Costa Rica"<?= $data11['tCountry'] == 'Costa Rica' ? ' selected="selected"' : ''; ?>>Costa Rica</option>-->
                                                                    <!--    <option value="Cote Divoire"<?= $data11['tCountry'] == 'Cote Divoire' ? ' selected="selected"' : ''; ?>>Cote D'ivoire</option>-->
                                                                    <!--    <option value="Croatia"<?= $data11['tCountry'] == 'Croatia' ? ' selected="selected"' : ''; ?>>Croatia</option>-->
                                                                    <!--    <option value="Cuba"<?= $data11['tCountry'] == 'Cuba' ? ' selected="selected"' : ''; ?>>Cuba</option>-->
                                                                    <!--    <option value="Cyprus"<?= $data11['tCountry'] == 'Cyprus' ? ' selected="selected"' : ''; ?>>Cyprus</option>-->
                                                                    <!--    <option value="Czech Republic"<?= $data11['tCountry'] == 'Czech Republic' ? ' selected="selected"' : ''; ?>>Czech Republic</option>-->
                                                                    <!--    <option value="Denmark"<?= $data11['tCountry'] == 'Denmark' ? ' selected="selected"' : ''; ?>>Denmark</option>-->
                                                                    <!--    <option value="Djibouti"<?= $data11['tCountry'] == 'Djibouti' ? ' selected="selected"' : ''; ?>>Djibouti</option>-->
                                                                    <!--    <option value="Dominica"<?= $data11['tCountry'] == 'Dominica' ? ' selected="selected"' : ''; ?>>Dominica</option>-->
                                                                    <!--    <option value="Dominican Republic"<?= $data11['tCountry'] == 'Dominican Republic' ? ' selected="selected"' : ''; ?>>Dominican Republic</option>-->
                                                                    <!--    <option value="Ecuador"<?= $data11['tCountry'] == 'Ecuador' ? ' selected="selected"' : ''; ?>>Ecuador</option>-->
                                                                    <!--    <option value="Egypt"<?= $data11['tCountry'] == 'Egypt' ? ' selected="selected"' : ''; ?>>Egypt</option>-->
                                                                    <!--    <option value="El Salvador"<?= $data11['tCountry'] == 'El Salvador' ? ' selected="selected"' : ''; ?>>El Salvador</option>-->
                                                                    <!--    <option value="Equatorial Guinea"<?= $data11['tCountry'] == 'Equatorial Guinea' ? ' selected="selected"' : ''; ?>>Equatorial Guinea</option>-->
                                                                    <!--    <option value="Eritrea"<?= $data11['tCountry'] == 'Eritrea' ? ' selected="selected"' : ''; ?>>Eritrea</option>-->
                                                                    <!--    <option value="Estonia"<?= $data11['tCountry'] == 'Estonia' ? ' selected="selected"' : ''; ?>>Estonia</option>-->
                                                                    <!--    <option value="Ethiopia"<?= $data11['tCountry'] == 'Ethiopia' ? ' selected="selected"' : ''; ?>>Ethiopia</option>-->
                                                                    <!--    <option value="Falkland Islands (Malvinas)"<?= $data11['tCountry'] == 'Falkland Islands (Malvinas)' ? ' selected="selected"' : ''; ?>>Falkland Islands (Malvinas)</option>-->
                                                                    <!--    <option value="Faroe Islands"<?= $data11['tCountry'] == 'Faroe Islands' ? ' selected="selected"' : ''; ?>>Faroe Islands</option>-->
                                                                    <!--    <option value="Fiji"<?= $data11['tCountry'] == 'Fiji' ? ' selected="selected"' : ''; ?>>Fiji</option>-->
                                                                    <!--    <option value="Finland"<?= $data11['tCountry'] == 'Finland' ? ' selected="selected"' : ''; ?>>Finland</option>-->
                                                                    <!--    <option value="France"<?= $data11['tCountry'] == 'France' ? ' selected="selected"' : ''; ?>>France</option>-->
                                                                    <!--    <option value="French Guiana"<?= $data11['tCountry'] == 'French Guiana' ? ' selected="selected"' : ''; ?>>French Guiana</option>-->
                                                                    <!--    <option value="French Polynesia"<?= $data11['tCountry'] == 'French Polynesia' ? ' selected="selected"' : ''; ?>>French Polynesia</option>-->
                                                                    <!--    <option value="French Southern Territories"<?= $data11['tCountry'] == 'French Southern Territories' ? ' selected="selected"' : ''; ?>>French Southern Territories</option>-->
                                                                    <!--    <option value="Gabon"<?= $data11['tCountry'] == 'Gabon' ? ' selected="selected"' : ''; ?>>Gabon</option>-->
                                                                    <!--    <option value="Gambia"<?= $data11['tCountry'] == 'Gambia' ? ' selected="selected"' : ''; ?>>Gambia</option>-->
                                                                    <!--    <option value="Georgia"<?= $data11['tCountry'] == 'Georgia' ? ' selected="selected"' : ''; ?>>Georgia</option>-->
                                                                    <!--    <option value="Germany"<?= $data11['tCountry'] == 'Germany' ? ' selected="selected"' : ''; ?>>Germany</option>-->
                                                                    <!--    <option value="Ghana"<?= $data11['tCountry'] == 'Ghana' ? ' selected="selected"' : ''; ?>>Ghana</option>-->
                                                                    <!--    <option value="Gibraltar"<?= $data11['tCountry'] == 'Gibraltar' ? ' selected="selected"' : ''; ?>>Gibraltar</option>-->
                                                                    <!--    <option value="Greece"<?= $data11['tCountry'] == 'Greece' ? ' selected="selected"' : ''; ?>>Greece</option>-->
                                                                    <!--    <option value="Greenland"<?= $data11['tCountry'] == 'Greenland' ? ' selected="selected"' : ''; ?>>Greenland</option>-->
                                                                    <!--    <option value="Grenada"<?= $data11['tCountry'] == 'Grenada' ? ' selected="selected"' : ''; ?>>Grenada</option>-->
                                                                    <!--    <option value="Guadeloupe"<?= $data11['tCountry'] == 'Guadeloupe' ? ' selected="selected"' : ''; ?>>Guadeloupe</option>-->
                                                                    <!--    <option value="Guam"<?= $data11['tCountry'] == 'Guam' ? ' selected="selected"' : ''; ?>>Guam</option>-->
                                                                    <!--    <option value="Guatemala"<?= $data11['tCountry'] == 'Guatemala' ? ' selected="selected"' : ''; ?>>Guatemala</option>-->
                                                                    <!--    <option value="Guernsey"<?= $data11['tCountry'] == 'Guernsey' ? ' selected="selected"' : ''; ?>>Guernsey</option>-->
                                                                    <!--    <option value="Guinea"<?= $data11['tCountry'] == 'Guinea' ? ' selected="selected"' : ''; ?>>Guinea</option>-->
                                                                    <!--    <option value="Guinea-bissau"<?= $data11['tCountry'] == 'Guinea-bissau' ? ' selected="selected"' : ''; ?>>Guinea-bissau</option>-->
                                                                    <!--    <option value="Guyana"<?= $data11['tCountry'] == 'Guyana' ? ' selected="selected"' : ''; ?>>Guyana</option>-->
                                                                    <!--    <option value="Haiti"<?= $data11['tCountry'] == 'Haiti' ? ' selected="selected"' : ''; ?>>Haiti</option>-->
                                                                    <!--    <option value="Heard Island and Mcdonald Islands"<?= $data11['tCountry'] == 'Heard Island and Mcdonald Islands' ? ' selected="selected"' : ''; ?>>Heard Island and Mcdonald Islands</option>-->
                                                                    <!--    <option value="Holy See (Vatican City State)"<?= $data11['tCountry'] == 'Holy See (Vatican City State)' ? ' selected="selected"' : ''; ?>>Holy See (Vatican City State)</option>-->
                                                                    <!--    <option value="Honduras"<?= $data11['tCountry'] == 'Honduras' ? ' selected="selected"' : ''; ?>>Honduras</option>-->
                                                                    <!--    <option value="Hong Kong"<?= $data11['tCountry'] == 'Hong Kong' ? ' selected="selected"' : ''; ?>>Hong Kong</option>-->
                                                                    <!--    <option value="Hungary"<?= $data11['tCountry'] == 'Hungary' ? ' selected="selected"' : ''; ?>>Hungary</option>-->
                                                                    <!--    <option value="Iceland"<?= $data11['tCountry'] == 'Iceland' ? ' selected="selected"' : ''; ?>>Iceland</option>-->
                                                                    <!--    <option value="India"<?= $data11['tCountry'] == 'India' ? ' selected="selected"' : ''; ?>>India</option>-->
                                                                    <!--    <option value="Indonesia"<?= $data11['tCountry'] == 'Indonesia' ? ' selected="selected"' : ''; ?>>Indonesia</option>-->
                                                                    <!--    <option value="Iran, Islamic Republic of"<?= $data11['tCountry'] == 'Iran, Islamic Republic of' ? ' selected="selected"' : ''; ?>>Iran, Islamic Republic of</option>-->
                                                                    <!--    <option value="Iraq"<?= $data11['tCountry'] == 'Iraq' ? ' selected="selected"' : ''; ?>>Iraq</option>-->
                                                                    <!--    <option value="Ireland"<?= $data11['tCountry'] == 'Ireland' ? ' selected="selected"' : ''; ?>>Ireland</option>-->
                                                                    <!--    <option value="Isle of Man"<?= $data11['tCountry'] == 'Isle of Man' ? ' selected="selected"' : ''; ?>>Isle of Man</option>-->
                                                                    <!--    <option value="Israel"<?= $data11['tCountry'] == 'Israel' ? ' selected="selected"' : ''; ?>>Israel</option>-->
                                                                    <!--    <option value="Italy"<?= $data11['tCountry'] == 'Italy' ? ' selected="selected"' : ''; ?>>Italy</option>-->
                                                                    <!--    <option value="Jamaica"<?= $data11['tCountry'] == 'Jamaica' ? ' selected="selected"' : ''; ?>>Jamaica</option>-->
                                                                    <!--    <option value="Japan"<?= $data11['tCountry'] == 'Japan' ? ' selected="selected"' : ''; ?>>Japan</option>-->
                                                                    <!--    <option value="Jersey"<?= $data11['tCountry'] == 'Jersey' ? ' selected="selected"' : ''; ?>>Jersey</option>-->
                                                                    <!--    <option value="Jordan"<?= $data11['tCountry'] == 'Jordan' ? ' selected="selected"' : ''; ?>>Jordan</option>-->
                                                                    <!--    <option value="Kazakhstan"<?= $data11['tCountry'] == 'Kazakhstan' ? ' selected="selected"' : ''; ?>>Kazakhstan</option>-->
                                                                    <!--    <option value="Kenya"<?= $data11['tCountry'] == 'Kenya' ? ' selected="selected"' : ''; ?>>Kenya</option>-->
                                                                    <!--    <option value="Kiribati"<?= $data11['tCountry'] == 'Kiribati' ? ' selected="selected"' : ''; ?>>Kiribati</option>-->
                                                                    <!--    <option value="Korea, Democratic Peoples Republic of"<?= $data11['tCountry'] == 'Korea, Democratic Peoples Republic of' ? ' selected="selected"' : ''; ?>>Korea, Democratic People's Republic of</option>-->
                                                                    <!--    <option value="Korea, Republic of"<?= $data11['tCountry'] == 'Korea, Republic of' ? ' selected="selected"' : ''; ?>>Korea, Republic of</option>-->
                                                                    <!--    <option value="Kuwait"<?= $data11['tCountry'] == 'Kuwait' ? ' selected="selected"' : ''; ?>>Kuwait</option>-->
                                                                    <!--    <option value="Kyrgyzstan"<?= $data11['tCountry'] == 'Kyrgyzstan' ? ' selected="selected"' : ''; ?>>Kyrgyzstan</option>-->
                                                                    <!--    <option value="Lao Peoples Democratic Republic"<?= $data11['tCountry'] == 'Lao Peoples Democratic Republic' ? ' selected="selected"' : ''; ?>>Lao People's Democratic Republic</option>-->
                                                                    <!--    <option value="Latvia"<?= $data11['tCountry'] == 'Latvia' ? ' selected="selected"' : ''; ?>>Latvia</option>-->
                                                                    <!--    <option value="Lebanon"<?= $data11['tCountry'] == 'Lebanon' ? ' selected="selected"' : ''; ?>>Lebanon</option>-->
                                                                    <!--    <option value="Lesotho"<?= $data11['tCountry'] == 'Lesotho' ? ' selected="selected"' : ''; ?>>Lesotho</option>-->
                                                                    <!--    <option value="Liberia"<?= $data11['tCountry'] == 'Liberia' ? ' selected="selected"' : ''; ?>>Liberia</option>-->
                                                                    <!--    <option value="Libyan Arab Jamahiriya"<?= $data11['tCountry'] == 'Libyan Arab Jamahiriya' ? ' selected="selected"' : ''; ?>>Libyan Arab Jamahiriya</option>-->
                                                                    <!--    <option value="Liechtenstein"<?= $data11['tCountry'] == 'Liechtenstein' ? ' selected="selected"' : ''; ?>>Liechtenstein</option>-->
                                                                    <!--    <option value="Lithuania"<?= $data11['tCountry'] == 'Lithuania' ? ' selected="selected"' : ''; ?>>Lithuania</option>-->
                                                                    <!--    <option value="Luxembourg"<?= $data11['tCountry'] == 'Luxembourg' ? ' selected="selected"' : ''; ?>>Luxembourg</option>-->
                                                                    <!--    <option value="Macao"<?= $data11['tCountry'] == 'Macao' ? ' selected="selected"' : ''; ?>>Macao</option>-->
                                                                    <!--    <option value="Macedonia, The Former Yugoslav Republic of"<?= $data11['tCountry'] == 'Macedonia, The Former Yugoslav Republic of' ? ' selected="selected"' : ''; ?>>Macedonia, The Former Yugoslav Republic of</option>-->
                                                                    <!--    <option value="Madagascar"<?= $data11['tCountry'] == 'Madagascar' ? ' selected="selected"' : ''; ?>>Madagascar</option>-->
                                                                    <!--    <option value="Malawi"<?= $data11['tCountry'] == 'Malawi' ? ' selected="selected"' : ''; ?>>Malawi</option>-->
                                                                    <!--    <option value="Malaysia"<?= $data11['tCountry'] == 'Malaysia' ? ' selected="selected"' : ''; ?>>Malaysia</option>-->
                                                                    <!--    <option value="Maldives"<?= $data11['tCountry'] == 'Maldives' ? ' selected="selected"' : ''; ?>>Maldives</option>-->
                                                                    <!--    <option value="Mali"<?= $data11['tCountry'] == 'Mali' ? ' selected="selected"' : ''; ?>>Mali</option>-->
                                                                    <!--    <option value="Malta"<?= $data11['tCountry'] == 'Malta' ? ' selected="selected"' : ''; ?>>Malta</option>-->
                                                                    <!--    <option value="Marshall Islands"<?= $data11['tCountry'] == 'Marshall Islands' ? ' selected="selected"' : ''; ?>>Marshall Islands</option>-->
                                                                    <!--    <option value="Martinique"<?= $data11['tCountry'] == 'Martinique' ? ' selected="selected"' : ''; ?>>Martinique</option>-->
                                                                    <!--    <option value="Mauritania"<?= $data11['tCountry'] == 'Mauritania' ? ' selected="selected"' : ''; ?>>Mauritania</option>-->
                                                                    <!--    <option value="Mauritius"<?= $data11['tCountry'] == 'Mauritius' ? ' selected="selected"' : ''; ?>>Mauritius</option>-->
                                                                    <!--    <option value="Mayotte"<?= $data11['tCountry'] == 'Mayotte' ? ' selected="selected"' : ''; ?>>Mayotte</option>-->
                                                                    <!--    <option value="Mexico"<?= $data11['tCountry'] == 'Mexico' ? ' selected="selected"' : ''; ?>>Mexico</option>-->
                                                                    <!--    <option value="Micronesia, Federated States of"<?= $data11['tCountry'] == 'Micronesia, Federated States of' ? ' selected="selected"' : ''; ?>>Micronesia, Federated States of</option>-->
                                                                    <!--    <option value="Moldova, Republic of"<?= $data11['tCountry'] == 'Moldova, Republic of' ? ' selected="selected"' : ''; ?>>Moldova, Republic of</option>-->
                                                                    <!--    <option value="Monaco"<?= $data11['tCountry'] == 'Monaco' ? ' selected="selected"' : ''; ?>>Monaco</option>-->
                                                                    <!--    <option value="Mongolia"<?= $data11['tCountry'] == 'Mongolia' ? ' selected="selected"' : ''; ?>>Mongolia</option>-->
                                                                    <!--    <option value="Montenegro"<?= $data11['tCountry'] == 'Montenegro' ? ' selected="selected"' : ''; ?>>Montenegro</option>-->
                                                                    <!--    <option value="Montserrat"<?= $data11['tCountry'] == 'Montserrat' ? ' selected="selected"' : ''; ?>>Montserrat</option>-->
                                                                    <!--    <option value="Morocco"<?= $data11['tCountry'] == 'Morocco' ? ' selected="selected"' : ''; ?>>Morocco</option>-->
                                                                    <!--    <option value="Mozambique"<?= $data11['tCountry'] == 'Mozambique' ? ' selected="selected"' : ''; ?>>Mozambique</option>-->
                                                                    <!--    <option value="Myanmar"<?= $data11['tCountry'] == 'Myanmar' ? ' selected="selected"' : ''; ?>>Myanmar</option>-->
                                                                    <!--    <option value="Namibia"<?= $data11['tCountry'] == 'Namibia' ? ' selected="selected"' : ''; ?>>Namibia</option>-->
                                                                    <!--    <option value="Nauru"<?= $data11['tCountry'] == 'Nauru' ? ' selected="selected"' : ''; ?>>Nauru</option>-->
                                                                    <!--    <option value="Nepal"<?= $data11['tCountry'] == 'Nepal' ? ' selected="selected"' : ''; ?>>Nepal</option>-->
                                                                    <!--    <option value="Netherlands"<?= $data11['tCountry'] == 'Netherlands' ? ' selected="selected"' : ''; ?>>Netherlands</option>-->
                                                                    <!--    <option value="Netherlands Antilles"<?= $data11['tCountry'] == 'Netherlands Antilles' ? ' selected="selected"' : ''; ?>>Netherlands Antilles</option>-->
                                                                    <!--    <option value="New Caledonia"<?= $data11['tCountry'] == 'New Caledonia' ? ' selected="selected"' : ''; ?>>New Caledonia</option>-->
                                                                    <!--    <option value="New Zealand"<?= $data11['tCountry'] == 'New Zealand' ? ' selected="selected"' : ''; ?>>New Zealand</option>-->
                                                                    <!--    <option value="Nicaragua"<?= $data11['tCountry'] == 'Nicaragua' ? ' selected="selected"' : ''; ?>>Nicaragua</option>-->
                                                                    <!--    <option value="Niger"<?= $data11['tCountry'] == 'Niger' ? ' selected="selected"' : ''; ?>>Niger</option>-->
                                                                    <!--    <option value="Nigeria"<?= $data11['tCountry'] == 'Nigeria' ? ' selected="selected"' : ''; ?>>Nigeria</option>-->
                                                                    <!--    <option value="Niue"<?= $data11['tCountry'] == 'Niue' ? ' selected="selected"' : ''; ?>>Niue</option>-->
                                                                    <!--    <option value="Norfolk Island"<?= $data11['tCountry'] == 'Norfolk Island' ? ' selected="selected"' : ''; ?>>Norfolk Island</option>-->
                                                                    <!--    <option value="Northern Mariana Islands"<?= $data11['tCountry'] == 'Northern Mariana Islands' ? ' selected="selected"' : ''; ?>>Northern Mariana Islands</option>-->
                                                                    <!--    <option value="Norway"<?= $data11['tCountry'] == 'Norway' ? ' selected="selected"' : ''; ?>>Norway</option>-->
                                                                    <!--    <option value="Oman"<?= $data11['tCountry'] == 'Oman' ? ' selected="selected"' : ''; ?>>Oman</option>-->
                                                                    <!--    <option value="Pakistan"<?= $data11['tCountry'] == 'Pakistan' ? ' selected="selected"' : ''; ?>>Pakistan</option>-->
                                                                    <!--    <option value="Palau"<?= $data11['tCountry'] == 'Palau' ? ' selected="selected"' : ''; ?>>Palau</option>-->
                                                                    <!--    <option value="Palestinian Territory, Occupied"<?= $data11['tCountry'] == 'Palestinian Territory, Occupied' ? ' selected="selected"' : ''; ?>>Palestinian Territory, Occupied</option>-->
                                                                    <!--    <option value="Panama"<?= $data11['tCountry'] == 'Panama' ? ' selected="selected"' : ''; ?>>Panama</option>-->
                                                                    <!--    <option value="Papua New Guinea"<?= $data11['tCountry'] == 'Papua New Guinea' ? ' selected="selected"' : ''; ?>>Papua New Guinea</option>-->
                                                                    <!--    <option value="Paraguay"<?= $data11 == 'Paraguay' ? ' selected="selected"' : ''; ?>>Paraguay</option>-->
                                                                    <!--    <option value="Peru"<?= $data11['tCountry'] == 'Peru' ? ' selected="selected"' : ''; ?>>Peru</option>-->
                                                                    <!--    <option value="Philippines"<?= $data11['tCountry'] == 'Philippines' ? ' selected="selected"' : ''; ?>>Philippines</option>-->
                                                                    <!--    <option value="Pitcairn"<?= $data11['tCountry'] == 'Pitcairn' ? ' selected="selected"' : ''; ?>>Pitcairn</option>-->
                                                                    <!--    <option value="Poland"<?= $data11['tCountry'] == 'Poland' ? ' selected="selected"' : ''; ?>>Poland</option>-->
                                                                    <!--    <option value="Portugal"<?= $data11['tCountry'] == 'Portugal' ? ' selected="selected"' : ''; ?>>Portugal</option>-->
                                                                    <!--    <option value="Puerto Rico"<?= $data11['tCountry'] == 'Puerto Rico' ? ' selected="selected"' : ''; ?>>Puerto Rico</option>-->
                                                                    <!--    <option value="Qatar"<?= $data11['tCountry'] == 'Qatar' ? ' selected="selected"' : ''; ?>>Qatar</option>-->
                                                                    <!--    <option value="Reunion"<?= $data11['tCountry'] == 'Reunion' ? ' selected="selected"' : ''; ?>>Reunion</option>-->
                                                                    <!--    <option value="Romania"<?= $data11['tCountry'] == 'Romania' ? ' selected="selected"' : ''; ?>>Romania</option>-->
                                                                    <!--    <option value="Russian Federation"<?= $data11['tCountry'] == 'Russian Federation' ? ' selected="selected"' : ''; ?>>Russian Federation</option>-->
                                                                    <!--    <option value="Rwanda"<?= $data11['tCountry'] == 'Rwanda' ? ' selected="selected"' : ''; ?>>Rwanda</option>-->
                                                                    <!--    <option value="Saint Helena"<?= $data11['tCountry'] == 'Saint Helena' ? ' selected="selected"' : ''; ?>>Saint Helena</option>-->
                                                                    <!--    <option value="Saint Kitts and Nevis"<?= $data11['tCountry'] == 'Saint Kitts and Nevis' ? ' selected="selected"' : ''; ?>>Saint Kitts and Nevis</option>-->
                                                                    <!--    <option value="Saint Lucia"<?= $data11['tCountry'] == 'Saint Lucia' ? ' selected="selected"' : ''; ?>>Saint Lucia</option>-->
                                                                    <!--    <option value="Saint Pierre and Miquelon"<?= $data11['tCountry'] == 'Saint Pierre and Miquelon' ? ' selected="selected"' : ''; ?>>Saint Pierre and Miquelon</option>-->
                                                                    <!--    <option value="Saint Vincent and The Grenadines"<?= $data11['tCountry'] == 'Saint Vincent and The Grenadines' ? ' selected="selected"' : ''; ?>>Saint Vincent and The Grenadines</option>-->
                                                                    <!--    <option value="Samoa"<?= $data11['tCountry'] == 'Samoa' ? ' selected="selected"' : ''; ?>>Samoa</option>-->
                                                                    <!--    <option value="San Marino"<?= $data11['tCountry'] == 'San Marino' ? ' selected="selected"' : ''; ?>>San Marino</option>-->
                                                                    <!--    <option value="Sao Tome and Principe"<?= $data11['tCountry'] == 'Sao Tome and Principe' ? ' selected="selected"' : ''; ?>>Sao Tome and Principe</option>-->
                                                                    <!--    <option value="Saudi Arabia"<?= $data11['tCountry'] == 'Saudi Arabia' ? ' selected="selected"' : ''; ?>>Saudi Arabia</option>-->
                                                                    <!--    <option value="Senegal"<?= $data11['tCountry'] == 'Senegal' ? ' selected="selected"' : ''; ?>>Senegal</option>-->
                                                                    <!--    <option value="Serbia"<?= $data11['tCountry'] == 'Serbia' ? ' selected="selected"' : ''; ?>>Serbia</option>-->
                                                                    <!--    <option value="Seychelles"<?= $data11['tCountry'] == 'Seychelles' ? ' selected="selected"' : ''; ?>>Seychelles</option>-->
                                                                    <!--    <option value="Sierra Leone"<?= $data11['tCountry'] == 'Sierra Leone' ? ' selected="selected"' : ''; ?>>Sierra Leone</option>-->
                                                                    <!--    <option value="Singapore"<?= $data11['tCountry'] == 'Singapore' ? ' selected="selected"' : ''; ?>>Singapore</option>-->
                                                                    <!--    <option value="Slovakia"<?= $data11['tCountry'] == 'Slovakia' ? ' selected="selected"' : ''; ?>>Slovakia</option>-->
                                                                    <!--    <option value="Slovenia"<?= $data11['tCountry'] == 'Slovenia' ? ' selected="selected"' : ''; ?>>Slovenia</option>-->
                                                                    <!--    <option value="Solomon Islands"<?= $data11['tCountry'] == 'Solomon Islands' ? ' selected="selected"' : ''; ?>>Solomon Islands</option>-->
                                                                    <!--    <option value="Somalia"<?= $data11['tCountry'] == 'Somalia' ? ' selected="selected"' : ''; ?>>Somalia</option>-->
                                                                    <!--    <option value="South Africa"<?= $data11['tCountry'] == 'South Africa' ? ' selected="selected"' : ''; ?>>South Africa</option>-->
                                                                    <!--    <option value="South Georgia and The South Sandwich Islands"<?= $data11['tCountry'] == 'South Georgia and The South Sandwich Islands' ? ' selected="selected"' : ''; ?>>South Georgia and The South Sandwich Islands</option>-->
                                                                    <!--    <option value="Spain"<?= $data11['tCountry'] == 'Spain' ? ' selected="selected"' : ''; ?>>Spain</option>-->
                                                                    <!--    <option value="Sri Lanka"<?= $data11['tCountry'] == 'Sri Lanka' ? ' selected="selected"' : ''; ?>>Sri Lanka</option>-->
                                                                    <!--    <option value="Sudan"<?= $data11['tCountry'] == 'Sudan' ? ' selected="selected"' : ''; ?>>Sudan</option>-->
                                                                    <!--    <option value="Suriname<?= $data11['tCountry'] == 'Suriname' ? ' selected="selected"' : ''; ?>">Suriname</option>-->
                                                                    <!--    <option value="Svalbard and Jan Mayen"<?= $data11['tCountry'] == 'Svalbard and Jan Mayen' ? ' selected="selected"' : ''; ?>>Svalbard and Jan Mayen</option>-->
                                                                    <!--    <option value="Swaziland"<?= $data11['tCountry'] == 'Swaziland' ? ' selected="selected"' : ''; ?>>Swaziland</option>-->
                                                                    <!--    <option value="Sweden"<?= $data11['tCountry'] == 'Sweden' ? ' selected="selected"' : ''; ?>>Sweden</option>-->
                                                                    <!--    <option value="Switzerland"<?= $data11['tCountry'] == 'Switzerland' ? ' selected="selected"' : ''; ?>>Switzerland</option>-->
                                                                    <!--    <option value="Syrian Arab Republic"<?= $data11['tCountry'] == 'Syrian Arab Republic' ? ' selected="selected"' : ''; ?>>Syrian Arab Republic</option>-->
                                                                    <!--    <option value="Taiwan, Province of China"<?= $data11['tCountry'] == 'Taiwan, Province of China' ? ' selected="selected"' : ''; ?>>Taiwan, Province of China</option>-->
                                                                    <!--    <option value="Tajikistan"<?= $data11['tCountry'] == '' ? ' selected="selected"' : ''; ?>>Tajikistan</option>-->
                                                                    <!--    <option value="Tanzania, United Republic of"<?= $data11['tCountry'] == 'Tanzania, United Republic of' ? ' selected="selected"' : ''; ?>>Tanzania, United Republic of</option>-->
                                                                    <!--    <option value="Thailand"<?= $data11['tCountry'] == 'Thailand' ? ' selected="selected"' : ''; ?>>Thailand</option>-->
                                                                    <!--    <option value="Timor-leste"<?= $data11['tCountry'] == 'Timor-leste' ? ' selected="selected"' : ''; ?>>Timor-leste</option>-->
                                                                    <!--    <option value="Togo"<?= $data11['tCountry'] == 'Togo' ? ' selected="selected"' : ''; ?>>Togo</option>-->
                                                                    <!--    <option value="Tokelau"<?= $data11['tCountry'] == 'Tokelau' ? ' selected="selected"' : ''; ?>>Tokelau</option>-->
                                                                    <!--    <option value="Tonga"<?= $data11['tCountry'] == 'Tonga' ? ' selected="selected"' : ''; ?>>Tonga</option>-->
                                                                    <!--    <option value="Trinidad and Tobago"<?= $data11['tCountry'] == 'Trinidad and Tobago' ? ' selected="selected"' : ''; ?>>Trinidad and Tobago</option>-->
                                                                    <!--    <option value="Tunisia"<?= $data11['tCountry'] == 'Tunisia' ? ' selected="selected"' : ''; ?>>Tunisia</option>-->
                                                                    <!--    <option value="Turkey"<?= $data11['tCountry'] == 'Turkey' ? ' selected="selected"' : ''; ?>>Turkey</option>-->
                                                                    <!--    <option value="Turkmenistan"<?= $data11['tCountry'] == 'Turkmenistan' ? ' selected="selected"' : ''; ?>>Turkmenistan</option>-->
                                                                    <!--    <option value="Turks and Caicos Islands"<?= $data11['tCountry'] == 'Turks and Caicos Islands' ? ' selected="selected"' : ''; ?>>Turks and Caicos Islands</option>-->
                                                                    <!--    <option value="Tuvalu"<?= $data11['tCountry'] == 'Tuvalu' ? ' selected="selected"' : ''; ?>>Tuvalu</option>-->
                                                                    <!--    <option value="Uganda"<?= $data11['tCountry'] == 'Uganda' ? ' selected="selected"' : ''; ?>>Uganda</option>-->
                                                                    <!--    <option value="Ukraine"<?= $data11['tCountry'] == 'Ukraine' ? ' selected="selected"' : ''; ?>>Ukraine</option>-->
                                                                    <!--    <option value="United Arab Emirates"<?= $data11['tCountry'] == 'United Arab Emirates' ? ' selected="selected"' : ''; ?>>United Arab Emirates</option>-->
                                                                    <!--    <option value="United Kingdom"<?= $data11['tCountry'] == 'United Kingdom' ? ' selected="selected"' : ''; ?>>United Kingdom</option>-->
                                                                    <!--    <option value="United States"<?= $data11['tCountry'] == 'United States' ? ' selected="selected"' : ''; ?>>United States</option>-->
                                                                    <!--    <option value="United States Minor Outlying Islands"<?= $data11['tCountry'] == 'United States Minor Outlying Islands' ? ' selected="selected"' : ''; ?>>United States Minor Outlying Islands</option>-->
                                                                    <!--    <option value="Uruguay"<?= $data11['tCountry'] == 'Uruguay' ? ' selected="selected"' : ''; ?>>Uruguay</option>-->
                                                                    <!--    <option value="Uzbekistan"<?= $data11['tCountry'] == 'Uzbekistan' ? ' selected="selected"' : ''; ?>>Uzbekistan</option>-->
                                                                    <!--    <option value="Vanuatu"<?= $data11['tCountry'] == 'Vanuatu' ? ' selected="selected"' : ''; ?>>Vanuatu</option>-->
                                                                    <!--    <option value="Venezuela"<?= $data11['tCountry'] == 'Venezuela' ? ' selected="selected"' : ''; ?>>Venezuela</option>-->
                                                                    <!--    <option value="Viet Nam"<?= $data11['tCountry'] == 'Viet Nam' ? ' selected="selected"' : ''; ?>>Viet Nam</option>-->
                                                                    <!--    <option value="Virgin Islands, British"<?= $data11['tCountry'] == 'Virgin Islands, British' ? ' selected="selected"' : ''; ?>>Virgin Islands, British</option>-->
                                                                    <!--    <option value="Virgin Islands, U.S."<?= $data11['tCountry'] == 'Virgin Islands, U.S.' ? ' selected="selected"' : ''; ?>>Virgin Islands, U.S.</option>-->
                                                                    <!--    <option value="Wallis and Futuna"<?= $data11['tCountry'] == 'Wallis and Futuna' ? ' selected="selected"' : ''; ?>>Wallis and Futuna</option>-->
                                                                    <!--    <option value="Western Sahara"<?= $data11['tCountry'] == 'Western Sahara' ? ' selected="selected"' : ''; ?>>Western Sahara</option>-->
                                                                    <!--    <option value="Yemen"<?= $data11['tCountry'] == 'Yemen' ? ' selected="selected"' : ''; ?>>Yemen</option>-->
                                                                    <!--    <option value="Zambia"<?= $data11['tCountry'] == 'Zambia' ? ' selected="selected"' : ''; ?>>Zambia</option>-->
                                                                    <!--    <option value="Zimbabwe"<?= $data11['tCountry'] == 'Zimbabwe' ? ' selected="selected"' : ''; ?>>Zimbabwe</option>-->
                                                                    <!--</select>		-->
                                                                    
                                                                    <select id="tCountry1"  class="select2" style="width:100%;">
                                                                        <option value="">-- select one --</option>
                                                                        <option value="Afghanistan"<?= $data1['tCountry'] == 'Afghanistan' ? ' selected="selected"' : ''; ?>>Afghanistan</option>
                                                                        <option value="Åland Islands"<?= $data1['tCountry'] == 'Åland Islands' ? ' selected="selected"' : ''; ?>>Åland Islands</option>
                                                                        <option value="Albania"<?= $data1['tCountry'] == 'Albania' ? ' selected="selected"' : ''; ?>>Albania</option>
                                                                        <option value="Algeria"<?= $data1['tCountry'] == 'Algeria' ? ' selected="selected"' : ''; ?>>Algeria</option>
                                                                        <option value="American Samoa"<?= $data1['tCountry'] == 'American Samoa' ? ' selected="selected"' : ''; ?>>American Samoa</option>
                                                                        <option value="Andorra"<?= $data1['tCountry'] == 'Andorra' ? ' selected="selected"' : ''; ?>>Andorra</option>
                                                                        <option value="Angola"<?= $data1['tCountry'] == 'Angola' ? ' selected="selected"' : ''; ?>>Angola</option>
                                                                        <option value="Anguilla"<?= $data1['tCountry'] == 'Anguilla' ? ' selected="selected"' : ''; ?>>Anguilla</option>
                                                                        <option value="Antarctica"<?= $data1['tCountry'] == 'Antarctica' ? ' selected="selected"' : ''; ?>>Antarctica</option>
                                                                        <option value="Antigua and Barbuda"<?= $data1['tCountry'] == 'Antigua and Barbuda' ? ' selected="selected"' : ''; ?>>Antigua and Barbuda</option>
                                                                        <option value="Argentina"<?= $data1['tCountry'] == 'Argentina' ? ' selected="selected"' : ''; ?>>Argentina</option>
                                                                        <option value="Armenia"<?= $data1['tCountry'] == 'Armenia' ? ' selected="selected"' : ''; ?>>Armenia</option>
                                                                        <option value="Aruba"<?= $data1['tCountry'] == 'Aruba' ? ' selected="selected"' : ''; ?>>Aruba</option>
                                                                        <option value="Australia"<?= $data1['tCountry'] == 'Australia' ? ' selected="selected"' : ''; ?>>Australia</option>
                                                                        <option value="Austria"<?= $data1['tCountry'] == 'Austria' ? ' selected="selected"' : ''; ?>>Austria</option>
                                                                        <option value="Azerbaijan"<?= $data1['tCountry'] == 'Azerbaijan' ? ' selected="selected"' : ''; ?>>Azerbaijan</option>
                                                                        <option value="Bahamas"<?= $data1['tCountry'] == 'Bahamas' ? ' selected="selected"' : ''; ?>>Bahamas</option>
                                                                        <option value="Bahrain"<?= $data1['tCountry'] == 'Bahrain' ? ' selected="selected"' : ''; ?>>Bahrain</option>
                                                                        <option value="Bangladesh"<?= $data1['tCountry'] == 'Bangladesh' ? ' selected="selected"' : ''; ?>>Bangladesh</option>
                                                                        <option value="Barbados"<?= $data1['tCountry'] == 'Barbados' ? ' selected="selected"' : ''; ?>>Barbados</option>
                                                                        <option value="Belarus"<?= $data1['tCountry'] == 'Belarus' ? ' selected="selected"' : ''; ?>>Belarus</option>
                                                                        <option value="Belgium"<?= $data1['tCountry'] == 'Belgium' ? ' selected="selected"' : ''; ?>>Belgium</option>
                                                                        <option value="Belize"<?= $data1['tCountry'] == 'Belize' ? ' selected="selected"' : ''; ?>>Belize</option>
                                                                        <option value="Benin"<?= $data1['tCountry'] == 'Benin' ? ' selected="selected"' : ''; ?>>Benin</option>
                                                                        <option value="Bermuda"<?= $data1['tCountry'] == 'Bermuda' ? ' selected="selected"' : ''; ?>>Bermuda</option>
                                                                        <option value="Bhutan"<?= $data1['tCountry'] == 'Bhutan' ? ' selected="selected"' : ''; ?>>Bhutan</option>
                                                                        <option value="Bolivia"<?= $data1['tCountry'] == 'Bolivia' ? ' selected="selected"' : ''; ?>>Bolivia</option>
                                                                        <option value="Bosnia and Herzegovina"<?= $data1['tCountry'] == 'Bosnia and Herzegovina' ? ' selected="selected"' : ''; ?>>Bosnia and Herzegovina</option>
                                                                        <option value="Botswana"<?= $data1['tCountry'] == 'Botswana' ? ' selected="selected"' : ''; ?>>Botswana</option>
                                                                        <option value="Bouvet Island"<?= $data1['tCountry'] == 'Bouvet Island' ? ' selected="selected"' : ''; ?>>Bouvet Island</option>
                                                                        <option value="Brazil"<?= $data1['tCountry'] == 'Brazil' ? ' selected="selected"' : ''; ?>>Brazil</option>
                                                                        <option value="British Indian Ocean Territory"<?= $data1['tCountry'] == 'British Indian Ocean Territory' ? ' selected="selected"' : ''; ?>>British Indian Ocean Territory</option>
                                                                        <option value="Brunei Darussalam"<?= $data1['tCountry'] == 'Brunei Darussalam' ? ' selected="selected"' : ''; ?>>Brunei Darussalam</option>
                                                                        <option value="Bulgaria"<?= $data1['tCountry'] == 'Bulgaria' ? ' selected="selected"' : ''; ?>>Bulgaria</option>
                                                                        <option value="Burkina Faso"<?= $data1['tCountry'] == 'Burkina Faso' ? ' selected="selected"' : ''; ?>>Burkina Faso</option>
                                                                        <option value="Burundi"<?= $data1['tCountry'] == 'Burundi' ? ' selected="selected"' : ''; ?>>Burundi</option>
                                                                        <option value="Cambodia"<?= $data1['tCountry'] == 'Cambodia' ? ' selected="selected"' : ''; ?>>Cambodia</option>
                                                                        <option value="Cameroon"<?= $data1['tCountry'] == 'Cameroon' ? ' selected="selected"' : ''; ?>>Cameroon</option>
                                                                        <option value="Canada"<?= $data1['tCountry'] == 'Canada' ? ' selected="selected"' : ''; ?>>Canada</option>
                                                                        <option value="Cape Verde"<?= $data1['tCountry'] == 'Cape Verde' ? ' selected="selected"' : ''; ?>>Cape Verde</option>
                                                                        <option value="Cayman Islands"<?= $data1['tCountry'] == 'Cayman Islands' ? ' selected="selected"' : ''; ?>>Cayman Islands</option>
                                                                        <option value="Central African Republic"<?= $data1['tCountry'] == 'Central African Republic' ? ' selected="selected"' : ''; ?>>Central African Republic</option>
                                                                        <option value="Chad"<?= $data1['tCountry'] == 'Chad' ? ' selected="selected"' : ''; ?>>Chad</option>
                                                                        <option value="Chile"<?= $data1['tCountry'] == 'Chile' ? ' selected="selected"' : ''; ?>>Chile</option>
                                                                        <option value="China"<?= $data1['tCountry'] == 'China' ? ' selected="selected"' : ''; ?>>China</option>
                                                                        <option value="Christmas Island"<?= $data1['tCountry'] == 'Christmas Island' ? ' selected="selected"' : ''; ?>>Christmas Island</option>
                                                                        <option value="Cocos (Keeling) Islands"<?= $data1['tCountry'] == 'Cocos (Keeling) Islands' ? ' selected="selected"' : ''; ?>>Cocos (Keeling) Islands</option>
                                                                        <option value="Colombia"<?= $data1['tCountry'] == 'Colombia' ? ' selected="selected"' : ''; ?>>Colombia</option>
                                                                        <option value="Comoros"<?= $data1['tCountry'] == 'Comoros' ? ' selected="selected"' : ''; ?>>Comoros</option>
                                                                        <option value="Congo"<?= $data1['tCountry'] == 'Congo' ? ' selected="selected"' : ''; ?>>Congo</option>
                                                                        <option value="Congo, The Democratic Republic of The"<?= $data1['tCountry'] == 'Congo, The Democratic Republic of The' ? ' selected="selected"' : ''; ?>>Congo, The Democratic Republic of The</option>
                                                                        <option value="Cook Islands"<?= $data1['tCountry'] == 'Cook Islands' ? ' selected="selected"' : ''; ?>>Cook Islands</option>
                                                                        <option value="Costa Rica"<?= $data1['tCountry'] == 'Costa Rica' ? ' selected="selected"' : ''; ?>>Costa Rica</option>
                                                                        <option value="Cote Divoire"<?= $data1['tCountry'] == 'Cote Divoire' ? ' selected="selected"' : ''; ?>>Cote D'ivoire</option>
                                                                        <option value="Croatia"<?= $data1['tCountry'] == 'Croatia' ? ' selected="selected"' : ''; ?>>Croatia</option>
                                                                        <option value="Cuba"<?= $data1['tCountry'] == 'Cuba' ? ' selected="selected"' : ''; ?>>Cuba</option>
                                                                        <option value="Cyprus"<?= $data1['tCountry'] == 'Cyprus' ? ' selected="selected"' : ''; ?>>Cyprus</option>
                                                                        <option value="Czech Republic"<?= $data1['tCountry'] == 'Czech Republic' ? ' selected="selected"' : ''; ?>>Czech Republic</option>
                                                                        <option value="Denmark"<?= $data1['tCountry'] == 'Denmark' ? ' selected="selected"' : ''; ?>>Denmark</option>
                                                                        <option value="Djibouti"<?= $data1['tCountry'] == 'Djibouti' ? ' selected="selected"' : ''; ?>>Djibouti</option>
                                                                        <option value="Dominica"<?= $data1['tCountry'] == 'Dominica' ? ' selected="selected"' : ''; ?>>Dominica</option>
                                                                        <option value="Dominican Republic"<?= $data1['tCountry'] == 'Dominican Republic' ? ' selected="selected"' : ''; ?>>Dominican Republic</option>
                                                                        <option value="Ecuador"<?= $data1['tCountry'] == 'Ecuador' ? ' selected="selected"' : ''; ?>>Ecuador</option>
                                                                        <option value="Egypt"<?= $data1['tCountry'] == 'Egypt' ? ' selected="selected"' : ''; ?>>Egypt</option>
                                                                        <option value="El Salvador"<?= $data1['tCountry'] == 'El Salvador' ? ' selected="selected"' : ''; ?>>El Salvador</option>
                                                                        <option value="Equatorial Guinea"<?= $data1['tCountry'] == 'Equatorial Guinea' ? ' selected="selected"' : ''; ?>>Equatorial Guinea</option>
                                                                        <option value="Eritrea"<?= $data1['tCountry'] == 'Eritrea' ? ' selected="selected"' : ''; ?>>Eritrea</option>
                                                                        <option value="Estonia"<?= $data1['tCountry'] == 'Estonia' ? ' selected="selected"' : ''; ?>>Estonia</option>
                                                                        <option value="Ethiopia"<?= $data1['tCountry'] == 'Ethiopia' ? ' selected="selected"' : ''; ?>>Ethiopia</option>
                                                                        <option value="Falkland Islands (Malvinas)"<?= $data1['tCountry'] == 'Falkland Islands (Malvinas)' ? ' selected="selected"' : ''; ?>>Falkland Islands (Malvinas)</option>
                                                                        <option value="Faroe Islands"<?= $data1['tCountry'] == 'Faroe Islands' ? ' selected="selected"' : ''; ?>>Faroe Islands</option>
                                                                        <option value="Fiji"<?= $data1['tCountry'] == 'Fiji' ? ' selected="selected"' : ''; ?>>Fiji</option>
                                                                        <option value="Finland"<?= $data1['tCountry'] == 'Finland' ? ' selected="selected"' : ''; ?>>Finland</option>
                                                                        <option value="France"<?= $data1['tCountry'] == 'France' ? ' selected="selected"' : ''; ?>>France</option>
                                                                        <option value="French Guiana"<?= $data1['tCountry'] == 'French Guiana' ? ' selected="selected"' : ''; ?>>French Guiana</option>
                                                                        <option value="French Polynesia"<?= $data1['tCountry'] == 'French Polynesia' ? ' selected="selected"' : ''; ?>>French Polynesia</option>
                                                                        <option value="French Southern Territories"<?= $data1['tCountry'] == 'French Southern Territories' ? ' selected="selected"' : ''; ?>>French Southern Territories</option>
                                                                        <option value="Gabon"<?= $data1['tCountry'] == 'Gabon' ? ' selected="selected"' : ''; ?>>Gabon</option>
                                                                        <option value="Gambia"<?= $data1['tCountry'] == 'Gambia' ? ' selected="selected"' : ''; ?>>Gambia</option>
                                                                        <option value="Georgia"<?= $data1['tCountry'] == 'Georgia' ? ' selected="selected"' : ''; ?>>Georgia</option>
                                                                        <option value="Germany"<?= $data1['tCountry'] == 'Germany' ? ' selected="selected"' : ''; ?>>Germany</option>
                                                                        <option value="Ghana"<?= $data1['tCountry'] == 'Ghana' ? ' selected="selected"' : ''; ?>>Ghana</option>
                                                                        <option value="Gibraltar"<?= $data1['tCountry'] == 'Gibraltar' ? ' selected="selected"' : ''; ?>>Gibraltar</option>
                                                                        <option value="Greece"<?= $data1['tCountry'] == 'Greece' ? ' selected="selected"' : ''; ?>>Greece</option>
                                                                        <option value="Greenland"<?= $data1['tCountry'] == 'Greenland' ? ' selected="selected"' : ''; ?>>Greenland</option>
                                                                        <option value="Grenada"<?= $data1['tCountry'] == 'Grenada' ? ' selected="selected"' : ''; ?>>Grenada</option>
                                                                        <option value="Guadeloupe"<?= $data1['tCountry'] == 'Guadeloupe' ? ' selected="selected"' : ''; ?>>Guadeloupe</option>
                                                                        <option value="Guam"<?= $data1['tCountry'] == 'Guam' ? ' selected="selected"' : ''; ?>>Guam</option>
                                                                        <option value="Guatemala"<?= $data1['tCountry'] == 'Guatemala' ? ' selected="selected"' : ''; ?>>Guatemala</option>
                                                                        <option value="Guernsey"<?= $data1['tCountry'] == 'Guernsey' ? ' selected="selected"' : ''; ?>>Guernsey</option>
                                                                        <option value="Guinea"<?= $data1['tCountry'] == 'Guinea' ? ' selected="selected"' : ''; ?>>Guinea</option>
                                                                        <option value="Guinea-bissau"<?= $data1['tCountry'] == 'Guinea-bissau' ? ' selected="selected"' : ''; ?>>Guinea-bissau</option>
                                                                        <option value="Guyana"<?= $data1['tCountry'] == 'Guyana' ? ' selected="selected"' : ''; ?>>Guyana</option>
                                                                        <option value="Haiti"<?= $data1['tCountry'] == 'Haiti' ? ' selected="selected"' : ''; ?>>Haiti</option>
                                                                        <option value="Heard Island and Mcdonald Islands"<?= $data1['tCountry'] == 'Heard Island and Mcdonald Islands' ? ' selected="selected"' : ''; ?>>Heard Island and Mcdonald Islands</option>
                                                                        <option value="Holy See (Vatican City State)"<?= $data1['tCountry'] == 'Holy See (Vatican City State)' ? ' selected="selected"' : ''; ?>>Holy See (Vatican City State)</option>
                                                                        <option value="Honduras"<?= $data1['tCountry'] == 'Honduras' ? ' selected="selected"' : ''; ?>>Honduras</option>
                                                                        <option value="Hong Kong"<?= $data1['tCountry'] == 'Hong Kong' ? ' selected="selected"' : ''; ?>>Hong Kong</option>
                                                                        <option value="Hungary"<?= $data1['tCountry'] == 'Hungary' ? ' selected="selected"' : ''; ?>>Hungary</option>
                                                                        <option value="Iceland"<?= $data1['tCountry'] == 'Iceland' ? ' selected="selected"' : ''; ?>>Iceland</option>
                                                                        <option value="India"<?= $data1['tCountry'] == 'India' ? ' selected="selected"' : ''; ?>>India</option>
                                                                        <option value="Indonesia"<?= $data1['tCountry'] == 'Indonesia' ? ' selected="selected"' : ''; ?>>Indonesia</option>
                                                                        <option value="Iran, Islamic Republic of"<?= $data1['tCountry'] == 'Iran, Islamic Republic of' ? ' selected="selected"' : ''; ?>>Iran, Islamic Republic of</option>
                                                                        <option value="Iraq"<?= $data1['tCountry'] == 'Iraq' ? ' selected="selected"' : ''; ?>>Iraq</option>
                                                                        <option value="Ireland"<?= $data1['tCountry'] == 'Ireland' ? ' selected="selected"' : ''; ?>>Ireland</option>
                                                                        <option value="Isle of Man"<?= $data1['tCountry'] == 'Isle of Man' ? ' selected="selected"' : ''; ?>>Isle of Man</option>
                                                                        <option value="Israel"<?= $data1['tCountry'] == 'Israel' ? ' selected="selected"' : ''; ?>>Israel</option>
                                                                        <option value="Italy"<?= $data1['tCountry'] == 'Italy' ? ' selected="selected"' : ''; ?>>Italy</option>
                                                                        <option value="Jamaica"<?= $data1['tCountry'] == 'Jamaica' ? ' selected="selected"' : ''; ?>>Jamaica</option>
                                                                        <option value="Japan"<?= $data1['tCountry'] == 'Japan' ? ' selected="selected"' : ''; ?>>Japan</option>
                                                                        <option value="Jersey"<?= $data1['tCountry'] == 'Jersey' ? ' selected="selected"' : ''; ?>>Jersey</option>
                                                                        <option value="Jordan"<?= $data1['tCountry'] == 'Jordan' ? ' selected="selected"' : ''; ?>>Jordan</option>
                                                                        <option value="Kazakhstan"<?= $data1['tCountry'] == 'Kazakhstan' ? ' selected="selected"' : ''; ?>>Kazakhstan</option>
                                                                        <option value="Kenya"<?= $data1['tCountry'] == 'Kenya' ? ' selected="selected"' : ''; ?>>Kenya</option>
                                                                        <option value="Kiribati"<?= $data1['tCountry'] == 'Kiribati' ? ' selected="selected"' : ''; ?>>Kiribati</option>
                                                                        <option value="Korea, Democratic Peoples Republic of"<?= $data1['tCountry'] == 'Korea, Democratic Peoples Republic of' ? ' selected="selected"' : ''; ?>>Korea, Democratic People's Republic of</option>
                                                                        <option value="Korea, Republic of"<?= $data1['tCountry'] == 'Korea, Republic of' ? ' selected="selected"' : ''; ?>>Korea, Republic of</option>
                                                                        <option value="Kuwait"<?= $data1['tCountry'] == 'Kuwait' ? ' selected="selected"' : ''; ?>>Kuwait</option>
                                                                        <option value="Kyrgyzstan"<?= $data1['tCountry'] == 'Kyrgyzstan' ? ' selected="selected"' : ''; ?>>Kyrgyzstan</option>
                                                                        <option value="Lao Peoples Democratic Republic"<?= $data1['tCountry'] == 'Lao Peoples Democratic Republic' ? ' selected="selected"' : ''; ?>>Lao People's Democratic Republic</option>
                                                                        <option value="Latvia"<?= $data1['tCountry'] == 'Latvia' ? ' selected="selected"' : ''; ?>>Latvia</option>
                                                                        <option value="Lebanon"<?= $data1['tCountry'] == 'Lebanon' ? ' selected="selected"' : ''; ?>>Lebanon</option>
                                                                        <option value="Lesotho"<?= $data1['tCountry'] == 'Lesotho' ? ' selected="selected"' : ''; ?>>Lesotho</option>
                                                                        <option value="Liberia"<?= $data1['tCountry'] == 'Liberia' ? ' selected="selected"' : ''; ?>>Liberia</option>
                                                                        <option value="Libyan Arab Jamahiriya"<?= $data1['tCountry'] == 'Libyan Arab Jamahiriya' ? ' selected="selected"' : ''; ?>>Libyan Arab Jamahiriya</option>
                                                                        <option value="Liechtenstein"<?= $data1['tCountry'] == 'Liechtenstein' ? ' selected="selected"' : ''; ?>>Liechtenstein</option>
                                                                        <option value="Lithuania"<?= $data1['tCountry'] == 'Lithuania' ? ' selected="selected"' : ''; ?>>Lithuania</option>
                                                                        <option value="Luxembourg"<?= $data1['tCountry'] == 'Luxembourg' ? ' selected="selected"' : ''; ?>>Luxembourg</option>
                                                                        <option value="Macao"<?= $data1['tCountry'] == 'Macao' ? ' selected="selected"' : ''; ?>>Macao</option>
                                                                        <option value="Macedonia, The Former Yugoslav Republic of"<?= $data1['tCountry'] == 'Macedonia, The Former Yugoslav Republic of' ? ' selected="selected"' : ''; ?>>Macedonia, The Former Yugoslav Republic of</option>
                                                                        <option value="Madagascar"<?= $data1['tCountry'] == 'Madagascar' ? ' selected="selected"' : ''; ?>>Madagascar</option>
                                                                        <option value="Malawi"<?= $data1['tCountry'] == 'Malawi' ? ' selected="selected"' : ''; ?>>Malawi</option>
                                                                        <option value="Malaysia"<?= $data1['tCountry'] == 'Malaysia' ? ' selected="selected"' : ''; ?>>Malaysia</option>
                                                                        <option value="Maldives"<?= $data1['tCountry'] == 'Maldives' ? ' selected="selected"' : ''; ?>>Maldives</option>
                                                                        <option value="Mali"<?= $data1['tCountry'] == 'Mali' ? ' selected="selected"' : ''; ?>>Mali</option>
                                                                        <option value="Malta"<?= $data1['tCountry'] == 'Malta' ? ' selected="selected"' : ''; ?>>Malta</option>
                                                                        <option value="Marshall Islands"<?= $data1['tCountry'] == 'Marshall Islands' ? ' selected="selected"' : ''; ?>>Marshall Islands</option>
                                                                        <option value="Martinique"<?= $data1['tCountry'] == 'Martinique' ? ' selected="selected"' : ''; ?>>Martinique</option>
                                                                        <option value="Mauritania"<?= $data1['tCountry'] == 'Mauritania' ? ' selected="selected"' : ''; ?>>Mauritania</option>
                                                                        <option value="Mauritius"<?= $data1['tCountry'] == 'Mauritius' ? ' selected="selected"' : ''; ?>>Mauritius</option>
                                                                        <option value="Mayotte"<?= $data1['tCountry'] == 'Mayotte' ? ' selected="selected"' : ''; ?>>Mayotte</option>
                                                                        <option value="Mexico"<?= $data1['tCountry'] == 'Mexico' ? ' selected="selected"' : ''; ?>>Mexico</option>
                                                                        <option value="Micronesia, Federated States of"<?= $data1['tCountry'] == 'Micronesia, Federated States of' ? ' selected="selected"' : ''; ?>>Micronesia, Federated States of</option>
                                                                        <option value="Moldova, Republic of"<?= $data1['tCountry'] == 'Moldova, Republic of' ? ' selected="selected"' : ''; ?>>Moldova, Republic of</option>
                                                                        <option value="Monaco"<?= $data1['tCountry'] == 'Monaco' ? ' selected="selected"' : ''; ?>>Monaco</option>
                                                                        <option value="Mongolia"<?= $data1['tCountry'] == 'Mongolia' ? ' selected="selected"' : ''; ?>>Mongolia</option>
                                                                        <option value="Montenegro"<?= $data1['tCountry'] == 'Montenegro' ? ' selected="selected"' : ''; ?>>Montenegro</option>
                                                                        <option value="Montserrat"<?= $data1['tCountry'] == 'Montserrat' ? ' selected="selected"' : ''; ?>>Montserrat</option>
                                                                        <option value="Morocco"<?= $data1['tCountry'] == 'Morocco' ? ' selected="selected"' : ''; ?>>Morocco</option>
                                                                        <option value="Mozambique"<?= $data1['tCountry'] == 'Mozambique' ? ' selected="selected"' : ''; ?>>Mozambique</option>
                                                                        <option value="Myanmar"<?= $data1['tCountry'] == 'Myanmar' ? ' selected="selected"' : ''; ?>>Myanmar</option>
                                                                        <option value="Namibia"<?= $data1['tCountry'] == 'Namibia' ? ' selected="selected"' : ''; ?>>Namibia</option>
                                                                        <option value="Nauru"<?= $data1['tCountry'] == 'Nauru' ? ' selected="selected"' : ''; ?>>Nauru</option>
                                                                        <option value="Nepal"<?= $data1['tCountry'] == 'Nepal' ? ' selected="selected"' : ''; ?>>Nepal</option>
                                                                        <option value="Netherlands"<?= $data1['tCountry'] == 'Netherlands' ? ' selected="selected"' : ''; ?>>Netherlands</option>
                                                                        <option value="Netherlands Antilles"<?= $data1['tCountry'] == 'Netherlands Antilles' ? ' selected="selected"' : ''; ?>>Netherlands Antilles</option>
                                                                        <option value="New Caledonia"<?= $data1['tCountry'] == 'New Caledonia' ? ' selected="selected"' : ''; ?>>New Caledonia</option>
                                                                        <option value="New Zealand"<?= $data1['tCountry'] == 'New Zealand' ? ' selected="selected"' : ''; ?>>New Zealand</option>
                                                                        <option value="Nicaragua"<?= $data1['tCountry'] == 'Nicaragua' ? ' selected="selected"' : ''; ?>>Nicaragua</option>
                                                                        <option value="Niger"<?= $data1['tCountry'] == 'Niger' ? ' selected="selected"' : ''; ?>>Niger</option>
                                                                        <option value="Nigeria"<?= $data1['tCountry'] == 'Nigeria' ? ' selected="selected"' : ''; ?>>Nigeria</option>
                                                                        <option value="Niue"<?= $data1['tCountry'] == 'Niue' ? ' selected="selected"' : ''; ?>>Niue</option>
                                                                        <option value="Norfolk Island"<?= $data1['tCountry'] == 'Norfolk Island' ? ' selected="selected"' : ''; ?>>Norfolk Island</option>
                                                                        <option value="Northern Mariana Islands"<?= $data1['tCountry'] == 'Northern Mariana Islands' ? ' selected="selected"' : ''; ?>>Northern Mariana Islands</option>
                                                                        <option value="Norway"<?= $data1['tCountry'] == 'Norway' ? ' selected="selected"' : ''; ?>>Norway</option>
                                                                        <option value="Oman"<?= $data1['tCountry'] == 'Oman' ? ' selected="selected"' : ''; ?>>Oman</option>
                                                                        <option value="Pakistan"<?= $data1['tCountry'] == 'Pakistan' ? ' selected="selected"' : ''; ?>>Pakistan</option>
                                                                        <option value="Palau"<?= $data1['tCountry'] == 'Palau' ? ' selected="selected"' : ''; ?>>Palau</option>
                                                                        <option value="Palestinian Territory, Occupied"<?= $data1['tCountry'] == 'Palestinian Territory, Occupied' ? ' selected="selected"' : ''; ?>>Palestinian Territory, Occupied</option>
                                                                        <option value="Panama"<?= $data1['tCountry'] == 'Panama' ? ' selected="selected"' : ''; ?>>Panama</option>
                                                                        <option value="Papua New Guinea"<?= $data1['tCountry'] == 'Papua New Guinea' ? ' selected="selected"' : ''; ?>>Papua New Guinea</option>
                                                                        <option value="Paraguay"<?= $data1 == 'Paraguay' ? ' selected="selected"' : ''; ?>>Paraguay</option>
                                                                        <option value="Peru"<?= $data1['tCountry'] == 'Peru' ? ' selected="selected"' : ''; ?>>Peru</option>
                                                                        <option value="Philippines"<?= $data1['tCountry'] == 'Philippines' ? ' selected="selected"' : ''; ?>>Philippines</option>
                                                                        <option value="Pitcairn"<?= $data1['tCountry'] == 'Pitcairn' ? ' selected="selected"' : ''; ?>>Pitcairn</option>
                                                                        <option value="Poland"<?= $data1['tCountry'] == 'Poland' ? ' selected="selected"' : ''; ?>>Poland</option>
                                                                        <option value="Portugal"<?= $data1['tCountry'] == 'Portugal' ? ' selected="selected"' : ''; ?>>Portugal</option>
                                                                        <option value="Puerto Rico"<?= $data1['tCountry'] == 'Puerto Rico' ? ' selected="selected"' : ''; ?>>Puerto Rico</option>
                                                                        <option value="Qatar"<?= $data1['tCountry'] == 'Qatar' ? ' selected="selected"' : ''; ?>>Qatar</option>
                                                                        <option value="Reunion"<?= $data1['tCountry'] == 'Reunion' ? ' selected="selected"' : ''; ?>>Reunion</option>
                                                                        <option value="Romania"<?= $data1['tCountry'] == 'Romania' ? ' selected="selected"' : ''; ?>>Romania</option>
                                                                        <option value="Russian Federation"<?= $data1['tCountry'] == 'Russian Federation' ? ' selected="selected"' : ''; ?>>Russian Federation</option>
                                                                        <option value="Rwanda"<?= $data1['tCountry'] == 'Rwanda' ? ' selected="selected"' : ''; ?>>Rwanda</option>
                                                                        <option value="Saint Helena"<?= $data1['tCountry'] == 'Saint Helena' ? ' selected="selected"' : ''; ?>>Saint Helena</option>
                                                                        <option value="Saint Kitts and Nevis"<?= $data1['tCountry'] == 'Saint Kitts and Nevis' ? ' selected="selected"' : ''; ?>>Saint Kitts and Nevis</option>
                                                                        <option value="Saint Lucia"<?= $data1['tCountry'] == 'Saint Lucia' ? ' selected="selected"' : ''; ?>>Saint Lucia</option>
                                                                        <option value="Saint Pierre and Miquelon"<?= $data1['tCountry'] == 'Saint Pierre and Miquelon' ? ' selected="selected"' : ''; ?>>Saint Pierre and Miquelon</option>
                                                                        <option value="Saint Vincent and The Grenadines"<?= $data1['tCountry'] == 'Saint Vincent and The Grenadines' ? ' selected="selected"' : ''; ?>>Saint Vincent and The Grenadines</option>
                                                                        <option value="Samoa"<?= $data1['tCountry'] == 'Samoa' ? ' selected="selected"' : ''; ?>>Samoa</option>
                                                                        <option value="San Marino"<?= $data1['tCountry'] == 'San Marino' ? ' selected="selected"' : ''; ?>>San Marino</option>
                                                                        <option value="Sao Tome and Principe"<?= $data1['tCountry'] == 'Sao Tome and Principe' ? ' selected="selected"' : ''; ?>>Sao Tome and Principe</option>
                                                                        <option value="Saudi Arabia"<?= $data1['tCountry'] == 'Saudi Arabia' ? ' selected="selected"' : ''; ?>>Saudi Arabia</option>
                                                                        <option value="Senegal"<?= $data1['tCountry'] == 'Senegal' ? ' selected="selected"' : ''; ?>>Senegal</option>
                                                                        <option value="Serbia"<?= $data1['tCountry'] == 'Serbia' ? ' selected="selected"' : ''; ?>>Serbia</option>
                                                                        <option value="Seychelles"<?= $data1['tCountry'] == 'Seychelles' ? ' selected="selected"' : ''; ?>>Seychelles</option>
                                                                        <option value="Sierra Leone"<?= $data1['tCountry'] == 'Sierra Leone' ? ' selected="selected"' : ''; ?>>Sierra Leone</option>
                                                                        <option value="Singapore"<?= $data1['tCountry'] == 'Singapore' ? ' selected="selected"' : ''; ?>>Singapore</option>
                                                                        <option value="Slovakia"<?= $data1['tCountry'] == 'Slovakia' ? ' selected="selected"' : ''; ?>>Slovakia</option>
                                                                        <option value="Slovenia"<?= $data1['tCountry'] == 'Slovenia' ? ' selected="selected"' : ''; ?>>Slovenia</option>
                                                                        <option value="Solomon Islands"<?= $data1['tCountry'] == 'Solomon Islands' ? ' selected="selected"' : ''; ?>>Solomon Islands</option>
                                                                        <option value="Somalia"<?= $data1['tCountry'] == 'Somalia' ? ' selected="selected"' : ''; ?>>Somalia</option>
                                                                        <option value="South Africa"<?= $data1['tCountry'] == 'South Africa' ? ' selected="selected"' : ''; ?>>South Africa</option>
                                                                        <option value="South Georgia and The South Sandwich Islands"<?= $data1['tCountry'] == 'South Georgia and The South Sandwich Islands' ? ' selected="selected"' : ''; ?>>South Georgia and The South Sandwich Islands</option>
                                                                        <option value="Spain"<?= $data1['tCountry'] == 'Spain' ? ' selected="selected"' : ''; ?>>Spain</option>
                                                                        <option value="Sri Lanka"<?= $data1['tCountry'] == 'Sri Lanka' ? ' selected="selected"' : ''; ?>>Sri Lanka</option>
                                                                        <option value="Sudan"<?= $data1['tCountry'] == 'Sudan' ? ' selected="selected"' : ''; ?>>Sudan</option>
                                                                        <option value="Suriname<?= $data1['tCountry'] == 'Suriname' ? ' selected="selected"' : ''; ?>">Suriname</option>
                                                                        <option value="Svalbard and Jan Mayen"<?= $data1['tCountry'] == 'Svalbard and Jan Mayen' ? ' selected="selected"' : ''; ?>>Svalbard and Jan Mayen</option>
                                                                        <option value="Swaziland"<?= $data1['tCountry'] == 'Swaziland' ? ' selected="selected"' : ''; ?>>Swaziland</option>
                                                                        <option value="Sweden"<?= $data1['tCountry'] == 'Sweden' ? ' selected="selected"' : ''; ?>>Sweden</option>
                                                                        <option value="Switzerland"<?= $data1['tCountry'] == 'Switzerland' ? ' selected="selected"' : ''; ?>>Switzerland</option>
                                                                        <option value="Syrian Arab Republic"<?= $data1['tCountry'] == 'Syrian Arab Republic' ? ' selected="selected"' : ''; ?>>Syrian Arab Republic</option>
                                                                        <option value="Taiwan, Province of China"<?= $data1['tCountry'] == 'Taiwan, Province of China' ? ' selected="selected"' : ''; ?>>Taiwan, Province of China</option>
                                                                        <option value="Tajikistan"<?= $data1['tCountry'] == '' ? ' selected="selected"' : ''; ?>>Tajikistan</option>
                                                                        <option value="Tanzania, United Republic of"<?= $data1['tCountry'] == 'Tanzania, United Republic of' ? ' selected="selected"' : ''; ?>>Tanzania, United Republic of</option>
                                                                        <option value="Thailand"<?= $data1['tCountry'] == 'Thailand' ? ' selected="selected"' : ''; ?>>Thailand</option>
                                                                        <option value="Timor-leste"<?= $data1['tCountry'] == 'Timor-leste' ? ' selected="selected"' : ''; ?>>Timor-leste</option>
                                                                        <option value="Togo"<?= $data1['tCountry'] == 'Togo' ? ' selected="selected"' : ''; ?>>Togo</option>
                                                                        <option value="Tokelau"<?= $data1['tCountry'] == 'Tokelau' ? ' selected="selected"' : ''; ?>>Tokelau</option>
                                                                        <option value="Tonga"<?= $data1['tCountry'] == 'Tonga' ? ' selected="selected"' : ''; ?>>Tonga</option>
                                                                        <option value="Trinidad and Tobago"<?= $data1['tCountry'] == 'Trinidad and Tobago' ? ' selected="selected"' : ''; ?>>Trinidad and Tobago</option>
                                                                        <option value="Tunisia"<?= $data1['tCountry'] == 'Tunisia' ? ' selected="selected"' : ''; ?>>Tunisia</option>
                                                                        <option value="Turkey"<?= $data1['tCountry'] == 'Turkey' ? ' selected="selected"' : ''; ?>>Turkey</option>
                                                                        <option value="Turkmenistan"<?= $data1['tCountry'] == 'Turkmenistan' ? ' selected="selected"' : ''; ?>>Turkmenistan</option>
                                                                        <option value="Turks and Caicos Islands"<?= $data1['tCountry'] == 'Turks and Caicos Islands' ? ' selected="selected"' : ''; ?>>Turks and Caicos Islands</option>
                                                                        <option value="Tuvalu"<?= $data1['tCountry'] == 'Tuvalu' ? ' selected="selected"' : ''; ?>>Tuvalu</option>
                                                                        <option value="Uganda"<?= $data1['tCountry'] == 'Uganda' ? ' selected="selected"' : ''; ?>>Uganda</option>
                                                                        <option value="Ukraine"<?= $data1['tCountry'] == 'Ukraine' ? ' selected="selected"' : ''; ?>>Ukraine</option>
                                                                        <option value="United Arab Emirates"<?= $data1['tCountry'] == 'United Arab Emirates' ? ' selected="selected"' : ''; ?>>United Arab Emirates</option>
                                                                        <option value="United Kingdom"<?= $data1['tCountry'] == 'United Kingdom' ? ' selected="selected"' : ''; ?>>United Kingdom</option>
                                                                        <option value="United States"<?= $data1['tCountry'] == 'United States' ? ' selected="selected"' : ''; ?>>United States</option>
                                                                        <option value="United States Minor Outlying Islands"<?= $data1['tCountry'] == 'United States Minor Outlying Islands' ? ' selected="selected"' : ''; ?>>United States Minor Outlying Islands</option>
                                                                        <option value="Uruguay"<?= $data1['tCountry'] == 'Uruguay' ? ' selected="selected"' : ''; ?>>Uruguay</option>
                                                                        <option value="Uzbekistan"<?= $data1['tCountry'] == 'Uzbekistan' ? ' selected="selected"' : ''; ?>>Uzbekistan</option>
                                                                        <option value="Vanuatu"<?= $data1['tCountry'] == 'Vanuatu' ? ' selected="selected"' : ''; ?>>Vanuatu</option>
                                                                        <option value="Venezuela"<?= $data1['tCountry'] == 'Venezuela' ? ' selected="selected"' : ''; ?>>Venezuela</option>
                                                                        <option value="Viet Nam"<?= $data1['tCountry'] == 'Viet Nam' ? ' selected="selected"' : ''; ?>>Viet Nam</option>
                                                                        <option value="Virgin Islands, British"<?= $data1['tCountry'] == 'Virgin Islands, British' ? ' selected="selected"' : ''; ?>>Virgin Islands, British</option>
                                                                        <option value="Virgin Islands, U.S."<?= $data1['tCountry'] == 'Virgin Islands, U.S.' ? ' selected="selected"' : ''; ?>>Virgin Islands, U.S.</option>
                                                                        <option value="Wallis and Futuna"<?= $data1['tCountry'] == 'Wallis and Futuna' ? ' selected="selected"' : ''; ?>>Wallis and Futuna</option>
                                                                        <option value="Western Sahara"<?= $data1['tCountry'] == 'Western Sahara' ? ' selected="selected"' : ''; ?>>Western Sahara</option>
                                                                        <option value="Yemen"<?= $data1['tCountry'] == 'Yemen' ? ' selected="selected"' : ''; ?>>Yemen</option>
                                                                        <option value="Zambia"<?= $data1['tCountry'] == 'Zambia' ? ' selected="selected"' : ''; ?>>Zambia</option>
                                                                        <option value="Zimbabwe"<?= $data1['tCountry'] == 'Zimbabwe' ? ' selected="selected"' : ''; ?>>Zimbabwe</option>
                                                                    </select>		
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="dataLabel">
                                                                    <label>State</label>
                                                                </div>
                                                                <div class="dataInfo">
                                                                    <input type="text" id="tState" value="<?php echo $data1['tState']; ?>" class="form-control">
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="dataLabel">
                                                                    <label>District</label>
                                                                </div>
                                                                <div class="dataInfo">
                                                                    <input type="text" id="tDistrict" value="<?php echo $data1['tDistrict']; ?>" class="form-control">
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="dataLabel">
                                                                    <label>City</label>
                                                                </div>
                                                                <div class="dataInfo">
                                                                    <input type="text" id="tCity" value="<?php echo $data1['tCity']; ?>" class="form-control">
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="dataLabel">
                                                                    <label>Pincode</label>
                                                                </div>
                                                                <div class="dataInfo">
                                                                    <input type="text" id="tPincode" value="<?php echo $data1['tPincode']; ?>" class="form-control">
                                                                </div>
                                                            </li>
                                                            
                                                                <div class="dataLabel">
                                                                    <label>Permanent Address in Home Country</label>
                                                                </div>
                                                                <div class="dataInfo">
                                                                    <input type="text" id="permanentAddress" value="<?php echo $data1['permanentAddress']; ?>" class="form-control">
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="dataLabel">
                                                                    <label>Country</label>
                                                                </div>
                                                                <div class="dataInfo">
                                                                    <!--<select id="pCountry1"  class="select2" style="width:100%;">-->
                                                                    <!--    <option value="">-- select one --</option>-->
                                                                    <!--    <option value="Afghanistan"<?= $data1['pCountry'] == 'Afghanistan' ? ' selected="selected"' : ''; ?>>Afghanistan</option>-->
                                                                    <!--    <option value="Åland Islands"<?= $data1['pCountry'] == 'Åland Islands' ? ' selected="selected"' : ''; ?>>Åland Islands</option>-->
                                                                    <!--    <option value="Albania"<?= $data1['pCountry'] == 'Albania' ? ' selected="selected"' : ''; ?>>Albania</option>-->
                                                                    <!--    <option value="Algeria"<?= $data1['pCountry'] == 'Algeria' ? ' selected="selected"' : ''; ?>>Algeria</option>-->
                                                                    <!--    <option value="American Samoa"<?= $data1['pCountry'] == 'American Samoa' ? ' selected="selected"' : ''; ?>>American Samoa</option>-->
                                                                    <!--    <option value="Andorra"<?= $data1['pCountry'] == 'Andorra' ? ' selected="selected"' : ''; ?>>Andorra</option>-->
                                                                    <!--    <option value="Angola"<?= $data1['pCountry'] == 'Angola' ? ' selected="selected"' : ''; ?>>Angola</option>-->
                                                                    <!--    <option value="Anguilla"<?= $data1['pCountry'] == 'Anguilla' ? ' selected="selected"' : ''; ?>>Anguilla</option>-->
                                                                    <!--    <option value="Antarctica"<?= $data1['pCountry'] == 'Antarctica' ? ' selected="selected"' : ''; ?>>Antarctica</option>-->
                                                                    <!--    <option value="Antigua and Barbuda"<?= $data1['pCountry'] == 'Antigua and Barbuda' ? ' selected="selected"' : ''; ?>>Antigua and Barbuda</option>-->
                                                                    <!--    <option value="Argentina"<?= $data1['pCountry'] == 'Argentina' ? ' selected="selected"' : ''; ?>>Argentina</option>-->
                                                                    <!--    <option value="Armenia"<?= $data1['pCountry'] == 'Armenia' ? ' selected="selected"' : ''; ?>>Armenia</option>-->
                                                                    <!--    <option value="Aruba"<?= $data1['pCountry'] == 'Aruba' ? ' selected="selected"' : ''; ?>>Aruba</option>-->
                                                                    <!--    <option value="Australia"<?= $data1['pCountry'] == 'Australia' ? ' selected="selected"' : ''; ?>>Australia</option>-->
                                                                    <!--    <option value="Austria"<?= $data1['pCountry'] == 'Austria' ? ' selected="selected"' : ''; ?>>Austria</option>-->
                                                                    <!--    <option value="Azerbaijan"<?= $data1['pCountry'] == 'Azerbaijan' ? ' selected="selected"' : ''; ?>>Azerbaijan</option>-->
                                                                    <!--    <option value="Bahamas"<?= $data1['pCountry'] == 'Bahamas' ? ' selected="selected"' : ''; ?>>Bahamas</option>-->
                                                                    <!--    <option value="Bahrain"<?= $data1['pCountry'] == 'Bahrain' ? ' selected="selected"' : ''; ?>>Bahrain</option>-->
                                                                    <!--    <option value="Bangladesh"<?= $data1['pCountry'] == 'Bangladesh' ? ' selected="selected"' : ''; ?>>Bangladesh</option>-->
                                                                    <!--    <option value="Barbados"<?= $data1['pCountry'] == 'Barbados' ? ' selected="selected"' : ''; ?>>Barbados</option>-->
                                                                    <!--    <option value="Belarus"<?= $data1['pCountry'] == 'Belarus' ? ' selected="selected"' : ''; ?>>Belarus</option>-->
                                                                    <!--    <option value="Belgium"<?= $data1['pCountry'] == 'Belgium' ? ' selected="selected"' : ''; ?>>Belgium</option>-->
                                                                    <!--    <option value="Belize"<?= $data1['pCountry'] == 'Belize' ? ' selected="selected"' : ''; ?>>Belize</option>-->
                                                                    <!--    <option value="Benin"<?= $data1['pCountry'] == 'Benin' ? ' selected="selected"' : ''; ?>>Benin</option>-->
                                                                    <!--    <option value="Bermuda"<?= $data1['pCountry'] == 'Bermuda' ? ' selected="selected"' : ''; ?>>Bermuda</option>-->
                                                                    <!--    <option value="Bhutan"<?= $data1['pCountry'] == 'Bhutan' ? ' selected="selected"' : ''; ?>>Bhutan</option>-->
                                                                    <!--    <option value="Bolivia"<?= $data1['pCountry'] == 'Bolivia' ? ' selected="selected"' : ''; ?>>Bolivia</option>-->
                                                                    <!--    <option value="Bosnia and Herzegovina"<?= $data1['pCountry'] == 'Bosnia and Herzegovina' ? ' selected="selected"' : ''; ?>>Bosnia and Herzegovina</option>-->
                                                                    <!--    <option value="Botswana"<?= $data1['pCountry'] == 'Botswana' ? ' selected="selected"' : ''; ?>>Botswana</option>-->
                                                                    <!--    <option value="Bouvet Island"<?= $data1['pCountry'] == 'Bouvet Island' ? ' selected="selected"' : ''; ?>>Bouvet Island</option>-->
                                                                    <!--    <option value="Brazil"<?= $data1['pCountry'] == 'Brazil' ? ' selected="selected"' : ''; ?>>Brazil</option>-->
                                                                    <!--    <option value="British Indian Ocean Territory"<?= $data1['pCountry'] == 'British Indian Ocean Territory' ? ' selected="selected"' : ''; ?>>British Indian Ocean Territory</option>-->
                                                                    <!--    <option value="Brunei Darussalam"<?= $data1['pCountry'] == 'Brunei Darussalam' ? ' selected="selected"' : ''; ?>>Brunei Darussalam</option>-->
                                                                    <!--    <option value="Bulgaria"<?= $data1['pCountry'] == 'Bulgaria' ? ' selected="selected"' : ''; ?>>Bulgaria</option>-->
                                                                    <!--    <option value="Burkina Faso"<?= $data1['pCountry'] == 'Burkina Faso' ? ' selected="selected"' : ''; ?>>Burkina Faso</option>-->
                                                                    <!--    <option value="Burundi"<?= $data1['pCountry'] == 'Burundi' ? ' selected="selected"' : ''; ?>>Burundi</option>-->
                                                                    <!--    <option value="Cambodia"<?= $data1['pCountry'] == 'Cambodia' ? ' selected="selected"' : ''; ?>>Cambodia</option>-->
                                                                    <!--    <option value="Cameroon"<?= $data1['pCountry'] == 'Cameroon' ? ' selected="selected"' : ''; ?>>Cameroon</option>-->
                                                                    <!--    <option value="Canada"<?= $data1['pCountry'] == 'Canada' ? ' selected="selected"' : ''; ?>>Canada</option>-->
                                                                    <!--    <option value="Cape Verde"<?= $data1['pCountry'] == 'Cape Verde' ? ' selected="selected"' : ''; ?>>Cape Verde</option>-->
                                                                    <!--    <option value="Cayman Islands"<?= $data1['pCountry'] == 'Cayman Islands' ? ' selected="selected"' : ''; ?>>Cayman Islands</option>-->
                                                                    <!--    <option value="Central African Republic"<?= $data1['pCountry'] == 'Central African Republic' ? ' selected="selected"' : ''; ?>>Central African Republic</option>-->
                                                                    <!--    <option value="Chad"<?= $data1['pCountry'] == 'Chad' ? ' selected="selected"' : ''; ?>>Chad</option>-->
                                                                    <!--    <option value="Chile"<?= $data1['pCountry'] == 'Chile' ? ' selected="selected"' : ''; ?>>Chile</option>-->
                                                                    <!--    <option value="China"<?= $data1['pCountry'] == 'China' ? ' selected="selected"' : ''; ?>>China</option>-->
                                                                    <!--    <option value="Christmas Island"<?= $data1['pCountry'] == 'Christmas Island' ? ' selected="selected"' : ''; ?>>Christmas Island</option>-->
                                                                    <!--    <option value="Cocos (Keeling) Islands"<?= $data1['pCountry'] == 'Cocos (Keeling) Islands' ? ' selected="selected"' : ''; ?>>Cocos (Keeling) Islands</option>-->
                                                                    <!--    <option value="Colombia"<?= $data1['pCountry'] == 'Colombia' ? ' selected="selected"' : ''; ?>>Colombia</option>-->
                                                                    <!--    <option value="Comoros"<?= $data1['pCountry'] == 'Comoros' ? ' selected="selected"' : ''; ?>>Comoros</option>-->
                                                                    <!--    <option value="Congo"<?= $data1['pCountry'] == 'Congo' ? ' selected="selected"' : ''; ?>>Congo</option>-->
                                                                    <!--    <option value="Congo, The Democratic Republic of The"<?= $data1['pCountry'] == 'Congo, The Democratic Republic of The' ? ' selected="selected"' : ''; ?>>Congo, The Democratic Republic of The</option>-->
                                                                    <!--    <option value="Cook Islands"<?= $data1['pCountry'] == 'Cook Islands' ? ' selected="selected"' : ''; ?>>Cook Islands</option>-->
                                                                    <!--    <option value="Costa Rica"<?= $data1['pCountry'] == 'Costa Rica' ? ' selected="selected"' : ''; ?>>Costa Rica</option>-->
                                                                    <!--    <option value="Cote Divoire"<?= $data1['pCountry'] == 'Cote Divoire' ? ' selected="selected"' : ''; ?>>Cote D'ivoire</option>-->
                                                                    <!--    <option value="Croatia"<?= $data1['pCountry'] == 'Croatia' ? ' selected="selected"' : ''; ?>>Croatia</option>-->
                                                                    <!--    <option value="Cuba"<?= $data1['pCountry'] == 'Cuba' ? ' selected="selected"' : ''; ?>>Cuba</option>-->
                                                                    <!--    <option value="Cyprus"<?= $data1['pCountry'] == 'Cyprus' ? ' selected="selected"' : ''; ?>>Cyprus</option>-->
                                                                    <!--    <option value="Czech Republic"<?= $data1['pCountry'] == 'Czech Republic' ? ' selected="selected"' : ''; ?>>Czech Republic</option>-->
                                                                    <!--    <option value="Denmark"<?= $data1['pCountry'] == 'Denmark' ? ' selected="selected"' : ''; ?>>Denmark</option>-->
                                                                    <!--    <option value="Djibouti"<?= $data1['pCountry'] == 'Djibouti' ? ' selected="selected"' : ''; ?>>Djibouti</option>-->
                                                                    <!--    <option value="Dominica"<?= $data1['pCountry'] == 'Dominica' ? ' selected="selected"' : ''; ?>>Dominica</option>-->
                                                                    <!--    <option value="Dominican Republic"<?= $data1['pCountry'] == 'Dominican Republic' ? ' selected="selected"' : ''; ?>>Dominican Republic</option>-->
                                                                    <!--    <option value="Ecuador"<?= $data1['pCountry'] == 'Ecuador' ? ' selected="selected"' : ''; ?>>Ecuador</option>-->
                                                                    <!--    <option value="Egypt"<?= $data1['pCountry'] == 'Egypt' ? ' selected="selected"' : ''; ?>>Egypt</option>-->
                                                                    <!--    <option value="El Salvador"<?= $data1['pCountry'] == 'El Salvador' ? ' selected="selected"' : ''; ?>>El Salvador</option>-->
                                                                    <!--    <option value="Equatorial Guinea"<?= $data1['pCountry'] == 'Equatorial Guinea' ? ' selected="selected"' : ''; ?>>Equatorial Guinea</option>-->
                                                                    <!--    <option value="Eritrea"<?= $data1['pCountry'] == 'Eritrea' ? ' selected="selected"' : ''; ?>>Eritrea</option>-->
                                                                    <!--    <option value="Estonia"<?= $data1['pCountry'] == 'Estonia' ? ' selected="selected"' : ''; ?>>Estonia</option>-->
                                                                    <!--    <option value="Ethiopia"<?= $data1['pCountry'] == 'Ethiopia' ? ' selected="selected"' : ''; ?>>Ethiopia</option>-->
                                                                    <!--    <option value="Falkland Islands (Malvinas)"<?= $data1['pCountry'] == 'Falkland Islands (Malvinas)' ? ' selected="selected"' : ''; ?>>Falkland Islands (Malvinas)</option>-->
                                                                    <!--    <option value="Faroe Islands"<?= $data1['pCountry'] == 'Faroe Islands' ? ' selected="selected"' : ''; ?>>Faroe Islands</option>-->
                                                                    <!--    <option value="Fiji"<?= $data1['pCountry'] == 'Fiji' ? ' selected="selected"' : ''; ?>>Fiji</option>-->
                                                                    <!--    <option value="Finland"<?= $data1['pCountry'] == 'Finland' ? ' selected="selected"' : ''; ?>>Finland</option>-->
                                                                    <!--    <option value="France"<?= $data1['pCountry'] == 'France' ? ' selected="selected"' : ''; ?>>France</option>-->
                                                                    <!--    <option value="French Guiana"<?= $data1['pCountry'] == 'French Guiana' ? ' selected="selected"' : ''; ?>>French Guiana</option>-->
                                                                    <!--    <option value="French Polynesia"<?= $data1['pCountry'] == 'French Polynesia' ? ' selected="selected"' : ''; ?>>French Polynesia</option>-->
                                                                    <!--    <option value="French Southern Territories"<?= $data1['pCountry'] == 'French Southern Territories' ? ' selected="selected"' : ''; ?>>French Southern Territories</option>-->
                                                                    <!--    <option value="Gabon"<?= $data1['pCountry'] == 'Gabon' ? ' selected="selected"' : ''; ?>>Gabon</option>-->
                                                                    <!--    <option value="Gambia"<?= $data1['pCountry'] == 'Gambia' ? ' selected="selected"' : ''; ?>>Gambia</option>-->
                                                                    <!--    <option value="Georgia"<?= $data1['pCountry'] == 'Georgia' ? ' selected="selected"' : ''; ?>>Georgia</option>-->
                                                                    <!--    <option value="Germany"<?= $data1['pCountry'] == 'Germany' ? ' selected="selected"' : ''; ?>>Germany</option>-->
                                                                    <!--    <option value="Ghana"<?= $data1['pCountry'] == 'Ghana' ? ' selected="selected"' : ''; ?>>Ghana</option>-->
                                                                    <!--    <option value="Gibraltar"<?= $data1['pCountry'] == 'Gibraltar' ? ' selected="selected"' : ''; ?>>Gibraltar</option>-->
                                                                    <!--    <option value="Greece"<?= $data1['pCountry'] == 'Greece' ? ' selected="selected"' : ''; ?>>Greece</option>-->
                                                                    <!--    <option value="Greenland"<?= $data1['pCountry'] == 'Greenland' ? ' selected="selected"' : ''; ?>>Greenland</option>-->
                                                                    <!--    <option value="Grenada"<?= $data1['pCountry'] == 'Grenada' ? ' selected="selected"' : ''; ?>>Grenada</option>-->
                                                                    <!--    <option value="Guadeloupe"<?= $data1['pCountry'] == 'Guadeloupe' ? ' selected="selected"' : ''; ?>>Guadeloupe</option>-->
                                                                    <!--    <option value="Guam"<?= $data1['pCountry'] == 'Guam' ? ' selected="selected"' : ''; ?>>Guam</option>-->
                                                                    <!--    <option value="Guatemala"<?= $data1['pCountry'] == 'Guatemala' ? ' selected="selected"' : ''; ?>>Guatemala</option>-->
                                                                    <!--    <option value="Guernsey"<?= $data1['pCountry'] == 'Guernsey' ? ' selected="selected"' : ''; ?>>Guernsey</option>-->
                                                                    <!--    <option value="Guinea"<?= $data1['pCountry'] == 'Guinea' ? ' selected="selected"' : ''; ?>>Guinea</option>-->
                                                                    <!--    <option value="Guinea-bissau"<?= $data1['pCountry'] == 'Guinea-bissau' ? ' selected="selected"' : ''; ?>>Guinea-bissau</option>-->
                                                                    <!--    <option value="Guyana"<?= $data1['pCountry'] == 'Guyana' ? ' selected="selected"' : ''; ?>>Guyana</option>-->
                                                                    <!--    <option value="Haiti"<?= $data1['pCountry'] == 'Haiti' ? ' selected="selected"' : ''; ?>>Haiti</option>-->
                                                                    <!--    <option value="Heard Island and Mcdonald Islands"<?= $data1['pCountry'] == 'Heard Island and Mcdonald Islands' ? ' selected="selected"' : ''; ?>>Heard Island and Mcdonald Islands</option>-->
                                                                    <!--    <option value="Holy See (Vatican City State)"<?= $data1['pCountry'] == 'Holy See (Vatican City State)' ? ' selected="selected"' : ''; ?>>Holy See (Vatican City State)</option>-->
                                                                    <!--    <option value="Honduras"<?= $data1['pCountry'] == 'Honduras' ? ' selected="selected"' : ''; ?>>Honduras</option>-->
                                                                    <!--    <option value="Hong Kong"<?= $data1['pCountry'] == 'Hong Kong' ? ' selected="selected"' : ''; ?>>Hong Kong</option>-->
                                                                    <!--    <option value="Hungary"<?= $data1['pCountry'] == 'Hungary' ? ' selected="selected"' : ''; ?>>Hungary</option>-->
                                                                    <!--    <option value="Iceland"<?= $data1['pCountry'] == 'Iceland' ? ' selected="selected"' : ''; ?>>Iceland</option>-->
                                                                    <!--    <option value="India"<?= $data1['pCountry'] == 'India' ? ' selected="selected"' : ''; ?>>India</option>-->
                                                                    <!--    <option value="Indonesia"<?= $data1['pCountry'] == 'Indonesia' ? ' selected="selected"' : ''; ?>>Indonesia</option>-->
                                                                    <!--    <option value="Iran, Islamic Republic of"<?= $data1['pCountry'] == 'Iran, Islamic Republic of' ? ' selected="selected"' : ''; ?>>Iran, Islamic Republic of</option>-->
                                                                    <!--    <option value="Iraq"<?= $data1['pCountry'] == 'Iraq' ? ' selected="selected"' : ''; ?>>Iraq</option>-->
                                                                    <!--    <option value="Ireland"<?= $data1['pCountry'] == 'Ireland' ? ' selected="selected"' : ''; ?>>Ireland</option>-->
                                                                    <!--    <option value="Isle of Man"<?= $data1['pCountry'] == 'Isle of Man' ? ' selected="selected"' : ''; ?>>Isle of Man</option>-->
                                                                    <!--    <option value="Israel"<?= $data1['pCountry'] == 'Israel' ? ' selected="selected"' : ''; ?>>Israel</option>-->
                                                                    <!--    <option value="Italy"<?= $data1['pCountry'] == 'Italy' ? ' selected="selected"' : ''; ?>>Italy</option>-->
                                                                    <!--    <option value="Jamaica"<?= $data1['pCountry'] == 'Jamaica' ? ' selected="selected"' : ''; ?>>Jamaica</option>-->
                                                                    <!--    <option value="Japan"<?= $data1['pCountry'] == 'Japan' ? ' selected="selected"' : ''; ?>>Japan</option>-->
                                                                    <!--    <option value="Jersey"<?= $data1['pCountry'] == 'Jersey' ? ' selected="selected"' : ''; ?>>Jersey</option>-->
                                                                    <!--    <option value="Jordan"<?= $data1['pCountry'] == 'Jordan' ? ' selected="selected"' : ''; ?>>Jordan</option>-->
                                                                    <!--    <option value="Kazakhstan"<?= $data1['pCountry'] == 'Kazakhstan' ? ' selected="selected"' : ''; ?>>Kazakhstan</option>-->
                                                                    <!--    <option value="Kenya"<?= $data1['pCountry'] == 'Kenya' ? ' selected="selected"' : ''; ?>>Kenya</option>-->
                                                                    <!--    <option value="Kiribati"<?= $data1['pCountry'] == 'Kiribati' ? ' selected="selected"' : ''; ?>>Kiribati</option>-->
                                                                    <!--    <option value="Korea, Democratic Peoples Republic of"<?= $data1['pCountry'] == 'Korea, Democratic Peoples Republic of' ? ' selected="selected"' : ''; ?>>Korea, Democratic People's Republic of</option>-->
                                                                    <!--    <option value="Korea, Republic of"<?= $data1['pCountry'] == 'Korea, Republic of' ? ' selected="selected"' : ''; ?>>Korea, Republic of</option>-->
                                                                    <!--    <option value="Kuwait"<?= $data1['pCountry'] == 'Kuwait' ? ' selected="selected"' : ''; ?>>Kuwait</option>-->
                                                                    <!--    <option value="Kyrgyzstan"<?= $data1['pCountry'] == 'Kyrgyzstan' ? ' selected="selected"' : ''; ?>>Kyrgyzstan</option>-->
                                                                    <!--    <option value="Lao Peoples Democratic Republic"<?= $data1['pCountry'] == 'Lao Peoples Democratic Republic' ? ' selected="selected"' : ''; ?>>Lao People's Democratic Republic</option>-->
                                                                    <!--    <option value="Latvia"<?= $data1['pCountry'] == 'Latvia' ? ' selected="selected"' : ''; ?>>Latvia</option>-->
                                                                    <!--    <option value="Lebanon"<?= $data1['pCountry'] == 'Lebanon' ? ' selected="selected"' : ''; ?>>Lebanon</option>-->
                                                                    <!--    <option value="Lesotho"<?= $data1['pCountry'] == 'Lesotho' ? ' selected="selected"' : ''; ?>>Lesotho</option>-->
                                                                    <!--    <option value="Liberia"<?= $data1['pCountry'] == 'Liberia' ? ' selected="selected"' : ''; ?>>Liberia</option>-->
                                                                    <!--    <option value="Libyan Arab Jamahiriya"<?= $data1['pCountry'] == 'Libyan Arab Jamahiriya' ? ' selected="selected"' : ''; ?>>Libyan Arab Jamahiriya</option>-->
                                                                    <!--    <option value="Liechtenstein"<?= $data1['pCountry'] == 'Liechtenstein' ? ' selected="selected"' : ''; ?>>Liechtenstein</option>-->
                                                                    <!--    <option value="Lithuania"<?= $data1['pCountry'] == 'Lithuania' ? ' selected="selected"' : ''; ?>>Lithuania</option>-->
                                                                    <!--    <option value="Luxembourg"<?= $data1['pCountry'] == 'Luxembourg' ? ' selected="selected"' : ''; ?>>Luxembourg</option>-->
                                                                    <!--    <option value="Macao"<?= $data1['pCountry'] == 'Macao' ? ' selected="selected"' : ''; ?>>Macao</option>-->
                                                                    <!--    <option value="Macedonia, The Former Yugoslav Republic of"<?= $data1['pCountry'] == 'Macedonia, The Former Yugoslav Republic of' ? ' selected="selected"' : ''; ?>>Macedonia, The Former Yugoslav Republic of</option>-->
                                                                    <!--    <option value="Madagascar"<?= $data1['pCountry'] == 'Madagascar' ? ' selected="selected"' : ''; ?>>Madagascar</option>-->
                                                                    <!--    <option value="Malawi"<?= $data1['pCountry'] == 'Malawi' ? ' selected="selected"' : ''; ?>>Malawi</option>-->
                                                                    <!--    <option value="Malaysia"<?= $data1['pCountry'] == 'Malaysia' ? ' selected="selected"' : ''; ?>>Malaysia</option>-->
                                                                    <!--    <option value="Maldives"<?= $data1['pCountry'] == 'Maldives' ? ' selected="selected"' : ''; ?>>Maldives</option>-->
                                                                    <!--    <option value="Mali"<?= $data1['pCountry'] == 'Mali' ? ' selected="selected"' : ''; ?>>Mali</option>-->
                                                                    <!--    <option value="Malta"<?= $data1['pCountry'] == 'Malta' ? ' selected="selected"' : ''; ?>>Malta</option>-->
                                                                    <!--    <option value="Marshall Islands"<?= $data1['pCountry'] == 'Marshall Islands' ? ' selected="selected"' : ''; ?>>Marshall Islands</option>-->
                                                                    <!--    <option value="Martinique"<?= $data1['pCountry'] == 'Martinique' ? ' selected="selected"' : ''; ?>>Martinique</option>-->
                                                                    <!--    <option value="Mauritania"<?= $data1['pCountry'] == 'Mauritania' ? ' selected="selected"' : ''; ?>>Mauritania</option>-->
                                                                    <!--    <option value="Mauritius"<?= $data1['pCountry'] == 'Mauritius' ? ' selected="selected"' : ''; ?>>Mauritius</option>-->
                                                                    <!--    <option value="Mayotte"<?= $data1['pCountry'] == 'Mayotte' ? ' selected="selected"' : ''; ?>>Mayotte</option>-->
                                                                    <!--    <option value="Mexico"<?= $data1['pCountry'] == 'Mexico' ? ' selected="selected"' : ''; ?>>Mexico</option>-->
                                                                    <!--    <option value="Micronesia, Federated States of"<?= $data1['pCountry'] == 'Micronesia, Federated States of' ? ' selected="selected"' : ''; ?>>Micronesia, Federated States of</option>-->
                                                                    <!--    <option value="Moldova, Republic of"<?= $data1['pCountry'] == 'Moldova, Republic of' ? ' selected="selected"' : ''; ?>>Moldova, Republic of</option>-->
                                                                    <!--    <option value="Monaco"<?= $data1['pCountry'] == 'Monaco' ? ' selected="selected"' : ''; ?>>Monaco</option>-->
                                                                    <!--    <option value="Mongolia"<?= $data1['pCountry'] == 'Mongolia' ? ' selected="selected"' : ''; ?>>Mongolia</option>-->
                                                                    <!--    <option value="Montenegro"<?= $data1['pCountry'] == 'Montenegro' ? ' selected="selected"' : ''; ?>>Montenegro</option>-->
                                                                    <!--    <option value="Montserrat"<?= $data1['pCountry'] == 'Montserrat' ? ' selected="selected"' : ''; ?>>Montserrat</option>-->
                                                                    <!--    <option value="Morocco"<?= $data1['pCountry'] == 'Morocco' ? ' selected="selected"' : ''; ?>>Morocco</option>-->
                                                                    <!--    <option value="Mozambique"<?= $data1['pCountry'] == 'Mozambique' ? ' selected="selected"' : ''; ?>>Mozambique</option>-->
                                                                    <!--    <option value="Myanmar"<?= $data1['pCountry'] == 'Myanmar' ? ' selected="selected"' : ''; ?>>Myanmar</option>-->
                                                                    <!--    <option value="Namibia"<?= $data1['pCountry'] == 'Namibia' ? ' selected="selected"' : ''; ?>>Namibia</option>-->
                                                                    <!--    <option value="Nauru"<?= $data1['pCountry'] == 'Nauru' ? ' selected="selected"' : ''; ?>>Nauru</option>-->
                                                                    <!--    <option value="Nepal"<?= $data1['pCountry'] == 'Nepal' ? ' selected="selected"' : ''; ?>>Nepal</option>-->
                                                                    <!--    <option value="Netherlands"<?= $data1['pCountry'] == 'Netherlands' ? ' selected="selected"' : ''; ?>>Netherlands</option>-->
                                                                    <!--    <option value="Netherlands Antilles"<?= $data1['pCountry'] == 'Netherlands Antilles' ? ' selected="selected"' : ''; ?>>Netherlands Antilles</option>-->
                                                                    <!--    <option value="New Caledonia"<?= $data1['pCountry'] == 'New Caledonia' ? ' selected="selected"' : ''; ?>>New Caledonia</option>-->
                                                                    <!--    <option value="New Zealand"<?= $data1['pCountry'] == 'New Zealand' ? ' selected="selected"' : ''; ?>>New Zealand</option>-->
                                                                    <!--    <option value="Nicaragua"<?= $data1['pCountry'] == 'Nicaragua' ? ' selected="selected"' : ''; ?>>Nicaragua</option>-->
                                                                    <!--    <option value="Niger"<?= $data1['pCountry'] == 'Niger' ? ' selected="selected"' : ''; ?>>Niger</option>-->
                                                                    <!--    <option value="Nigeria"<?= $data1['pCountry'] == 'Nigeria' ? ' selected="selected"' : ''; ?>>Nigeria</option>-->
                                                                    <!--    <option value="Niue"<?= $data1['pCountry'] == 'Niue' ? ' selected="selected"' : ''; ?>>Niue</option>-->
                                                                    <!--    <option value="Norfolk Island"<?= $data1['pCountry'] == 'Norfolk Island' ? ' selected="selected"' : ''; ?>>Norfolk Island</option>-->
                                                                    <!--    <option value="Northern Mariana Islands"<?= $data1['pCountry'] == 'Northern Mariana Islands' ? ' selected="selected"' : ''; ?>>Northern Mariana Islands</option>-->
                                                                    <!--    <option value="Norway"<?= $data1['pCountry'] == 'Norway' ? ' selected="selected"' : ''; ?>>Norway</option>-->
                                                                    <!--    <option value="Oman"<?= $data1['pCountry'] == 'Oman' ? ' selected="selected"' : ''; ?>>Oman</option>-->
                                                                    <!--    <option value="Pakistan"<?= $data1['pCountry'] == 'Pakistan' ? ' selected="selected"' : ''; ?>>Pakistan</option>-->
                                                                    <!--    <option value="Palau"<?= $data1['pCountry'] == 'Palau' ? ' selected="selected"' : ''; ?>>Palau</option>-->
                                                                    <!--    <option value="Palestinian Territory, Occupied"<?= $data1['pCountry'] == 'Palestinian Territory, Occupied' ? ' selected="selected"' : ''; ?>>Palestinian Territory, Occupied</option>-->
                                                                    <!--    <option value="Panama"<?= $data1['pCountry'] == 'Panama' ? ' selected="selected"' : ''; ?>>Panama</option>-->
                                                                    <!--    <option value="Papua New Guinea"<?= $data1['pCountry'] == 'Papua New Guinea' ? ' selected="selected"' : ''; ?>>Papua New Guinea</option>-->
                                                                    <!--    <option value="Paraguay"<?= $data1['pCountry'] == 'Paraguay' ? ' selected="selected"' : ''; ?>>Paraguay</option>-->
                                                                    <!--    <option value="Peru"<?= $data1['pCountry'] == 'Peru' ? ' selected="selected"' : ''; ?>>Peru</option>-->
                                                                    <!--    <option value="Philippines"<?= $data1['pCountry'] == 'Philippines' ? ' selected="selected"' : ''; ?>>Philippines</option>-->
                                                                    <!--    <option value="Pitcairn"<?= $data1['pCountry'] == 'Pitcairn' ? ' selected="selected"' : ''; ?>>Pitcairn</option>-->
                                                                    <!--    <option value="Poland"<?= $data1['pCountry'] == 'Poland' ? ' selected="selected"' : ''; ?>>Poland</option>-->
                                                                    <!--    <option value="Portugal"<?= $data1['pCountry'] == 'Portugal' ? ' selected="selected"' : ''; ?>>Portugal</option>-->
                                                                    <!--    <option value="Puerto Rico"<?= $data1['pCountry'] == 'Puerto Rico' ? ' selected="selected"' : ''; ?>>Puerto Rico</option>-->
                                                                    <!--    <option value="Qatar"<?= $data1['pCountry'] == 'Qatar' ? ' selected="selected"' : ''; ?>>Qatar</option>-->
                                                                    <!--    <option value="Reunion"<?= $data1['pCountry'] == 'Reunion' ? ' selected="selected"' : ''; ?>>Reunion</option>-->
                                                                    <!--    <option value="Romania"<?= $data1['pCountry'] == 'Romania' ? ' selected="selected"' : ''; ?>>Romania</option>-->
                                                                    <!--    <option value="Russian Federation"<?= $data1['pCountry'] == 'Russian Federation' ? ' selected="selected"' : ''; ?>>Russian Federation</option>-->
                                                                    <!--    <option value="Rwanda"<?= $data1['pCountry'] == 'Rwanda' ? ' selected="selected"' : ''; ?>>Rwanda</option>-->
                                                                    <!--    <option value="Saint Helena"<?= $data1['pCountry'] == 'Saint Helena' ? ' selected="selected"' : ''; ?>>Saint Helena</option>-->
                                                                    <!--    <option value="Saint Kitts and Nevis"<?= $data1['pCountry'] == 'Saint Kitts and Nevis' ? ' selected="selected"' : ''; ?>>Saint Kitts and Nevis</option>-->
                                                                    <!--    <option value="Saint Lucia"<?= $data1['pCountry'] == 'Saint Lucia' ? ' selected="selected"' : ''; ?>>Saint Lucia</option>-->
                                                                    <!--    <option value="Saint Pierre and Miquelon"<?= $data1['pCountry'] == 'Saint Pierre and Miquelon' ? ' selected="selected"' : ''; ?>>Saint Pierre and Miquelon</option>-->
                                                                    <!--    <option value="Saint Vincent and The Grenadines"<?= $data1['pCountry'] == 'Saint Vincent and The Grenadines' ? ' selected="selected"' : ''; ?>>Saint Vincent and The Grenadines</option>-->
                                                                    <!--    <option value="Samoa"<?= $data1['pCountry'] == 'Samoa' ? ' selected="selected"' : ''; ?>>Samoa</option>-->
                                                                    <!--    <option value="San Marino"<?= $data1['pCountry'] == 'San Marino' ? ' selected="selected"' : ''; ?>>San Marino</option>-->
                                                                    <!--    <option value="Sao Tome and Principe"<?= $data1['pCountry'] == 'Sao Tome and Principe' ? ' selected="selected"' : ''; ?>>Sao Tome and Principe</option>-->
                                                                    <!--    <option value="Saudi Arabia"<?= $data1['pCountry'] == 'Saudi Arabia' ? ' selected="selected"' : ''; ?>>Saudi Arabia</option>-->
                                                                    <!--    <option value="Senegal"<?= $data1['pCountry'] == 'Senegal' ? ' selected="selected"' : ''; ?>>Senegal</option>-->
                                                                    <!--    <option value="Serbia"<?= $data1['pCountry'] == 'Serbia' ? ' selected="selected"' : ''; ?>>Serbia</option>-->
                                                                    <!--    <option value="Seychelles"<?= $data1['pCountry'] == 'Seychelles' ? ' selected="selected"' : ''; ?>>Seychelles</option>-->
                                                                    <!--    <option value="Sierra Leone"<?= $data1['pCountry'] == 'Sierra Leone' ? ' selected="selected"' : ''; ?>>Sierra Leone</option>-->
                                                                    <!--    <option value="Singapore"<?= $data1['pCountry'] == 'Singapore' ? ' selected="selected"' : ''; ?>>Singapore</option>-->
                                                                    <!--    <option value="Slovakia"<?= $data1['pCountry'] == 'Slovakia' ? ' selected="selected"' : ''; ?>>Slovakia</option>-->
                                                                    <!--    <option value="Slovenia"<?= $data1['pCountry'] == 'Slovenia' ? ' selected="selected"' : ''; ?>>Slovenia</option>-->
                                                                    <!--    <option value="Solomon Islands"<?= $data1['pCountry'] == 'Solomon Islands' ? ' selected="selected"' : ''; ?>>Solomon Islands</option>-->
                                                                    <!--    <option value="Somalia"<?= $data1['pCountry'] == 'Somalia' ? ' selected="selected"' : ''; ?>>Somalia</option>-->
                                                                    <!--    <option value="South Africa"<?= $data1['pCountry'] == 'South Africa' ? ' selected="selected"' : ''; ?>>South Africa</option>-->
                                                                    <!--    <option value="South Georgia and The South Sandwich Islands"<?= $data1['pCountry'] == 'South Georgia and The South Sandwich Islands' ? ' selected="selected"' : ''; ?>>South Georgia and The South Sandwich Islands</option>-->
                                                                    <!--    <option value="Spain"<?= $data1['pCountry'] == 'Spain' ? ' selected="selected"' : ''; ?>>Spain</option>-->
                                                                    <!--    <option value="Sri Lanka"<?= $data1['pCountry'] == 'Sri Lanka' ? ' selected="selected"' : ''; ?>>Sri Lanka</option>-->
                                                                    <!--    <option value="Sudan"<?= $data1['pCountry'] == 'Sudan' ? ' selected="selected"' : ''; ?>>Sudan</option>-->
                                                                    <!--    <option value="Suriname<?= $data1['pCountry'] == 'Suriname' ? ' selected="selected"' : ''; ?>">Suriname</option>-->
                                                                    <!--    <option value="Svalbard and Jan Mayen"<?= $data1['pCountry'] == 'Svalbard and Jan Mayen' ? ' selected="selected"' : ''; ?>>Svalbard and Jan Mayen</option>-->
                                                                    <!--    <option value="Swaziland"<?= $data1['pCountry'] == 'Swaziland' ? ' selected="selected"' : ''; ?>>Swaziland</option>-->
                                                                    <!--    <option value="Sweden"<?= $data1['pCountry'] == 'Sweden' ? ' selected="selected"' : ''; ?>>Sweden</option>-->
                                                                    <!--    <option value="Switzerland"<?= $data1['pCountry'] == 'Switzerland' ? ' selected="selected"' : ''; ?>>Switzerland</option>-->
                                                                    <!--    <option value="Syrian Arab Republic"<?= $data1['pCountry'] == 'Syrian Arab Republic' ? ' selected="selected"' : ''; ?>>Syrian Arab Republic</option>-->
                                                                    <!--    <option value="Taiwan, Province of China"<?= $data1['pCountry'] == 'Taiwan, Province of China' ? ' selected="selected"' : ''; ?>>Taiwan, Province of China</option>-->
                                                                    <!--    <option value="Tajikistan"<?= $data1['pCountry'] == '' ? ' selected="selected"' : ''; ?>>Tajikistan</option>-->
                                                                    <!--    <option value="Tanzania, United Republic of"<?= $data1['pCountry'] == 'Tanzania, United Republic of' ? ' selected="selected"' : ''; ?>>Tanzania, United Republic of</option>-->
                                                                    <!--    <option value="Thailand"<?= $data1['pCountry'] == 'Thailand' ? ' selected="selected"' : ''; ?>>Thailand</option>-->
                                                                    <!--    <option value="Timor-leste"<?= $data1['pCountry'] == 'Timor-leste' ? ' selected="selected"' : ''; ?>>Timor-leste</option>-->
                                                                    <!--    <option value="Togo"<?= $data1['pCountry'] == 'Togo' ? ' selected="selected"' : ''; ?>>Togo</option>-->
                                                                    <!--    <option value="Tokelau"<?= $data1['pCountry'] == 'Tokelau' ? ' selected="selected"' : ''; ?>>Tokelau</option>-->
                                                                    <!--    <option value="Tonga"<?= $data1['pCountry'] == 'Tonga' ? ' selected="selected"' : ''; ?>>Tonga</option>-->
                                                                    <!--    <option value="Trinidad and Tobago"<?= $data1['pCountry'] == 'Trinidad and Tobago' ? ' selected="selected"' : ''; ?>>Trinidad and Tobago</option>-->
                                                                    <!--    <option value="Tunisia"<?= $data1['pCountry'] == 'Tunisia' ? ' selected="selected"' : ''; ?>>Tunisia</option>-->
                                                                    <!--    <option value="Turkey"<?= $data1['pCountry'] == 'Turkey' ? ' selected="selected"' : ''; ?>>Turkey</option>-->
                                                                    <!--    <option value="Turkmenistan"<?= $data1['pCountry'] == 'Turkmenistan' ? ' selected="selected"' : ''; ?>>Turkmenistan</option>-->
                                                                    <!--    <option value="Turks and Caicos Islands"<?= $data1['pCountry'] == 'Turks and Caicos Islands' ? ' selected="selected"' : ''; ?>>Turks and Caicos Islands</option>-->
                                                                    <!--    <option value="Tuvalu"<?= $data1['pCountry'] == 'Tuvalu' ? ' selected="selected"' : ''; ?>>Tuvalu</option>-->
                                                                    <!--    <option value="Uganda"<?= $data1['pCountry'] == 'Uganda' ? ' selected="selected"' : ''; ?>>Uganda</option>-->
                                                                    <!--    <option value="Ukraine"<?= $data1['pCountry'] == 'Ukraine' ? ' selected="selected"' : ''; ?>>Ukraine</option>-->
                                                                    <!--    <option value="United Arab Emirates"<?= $data1['pCountry'] == 'United Arab Emirates' ? ' selected="selected"' : ''; ?>>United Arab Emirates</option>-->
                                                                    <!--    <option value="United Kingdom"<?= $data1['pCountry'] == 'United Kingdom' ? ' selected="selected"' : ''; ?>>United Kingdom</option>-->
                                                                    <!--    <option value="United States"<?= $data1['pCountry'] == 'United States' ? ' selected="selected"' : ''; ?>>United States</option>-->
                                                                    <!--    <option value="United States Minor Outlying Islands"<?= $data1['pCountry'] == 'United States Minor Outlying Islands' ? ' selected="selected"' : ''; ?>>United States Minor Outlying Islands</option>-->
                                                                    <!--    <option value="Uruguay"<?= $data1['pCountry'] == 'Uruguay' ? ' selected="selected"' : ''; ?>>Uruguay</option>-->
                                                                    <!--    <option value="Uzbekistan"<?= $data1['pCountry'] == 'Uzbekistan' ? ' selected="selected"' : ''; ?>>Uzbekistan</option>-->
                                                                    <!--    <option value="Vanuatu"<?= $data1['pCountry'] == 'Vanuatu' ? ' selected="selected"' : ''; ?>>Vanuatu</option>-->
                                                                    <!--    <option value="Venezuela"<?= $data1['pCountry'] == 'Venezuela' ? ' selected="selected"' : ''; ?>>Venezuela</option>-->
                                                                    <!--    <option value="Viet Nam"<?= $data1['pCountry'] == 'Viet Nam' ? ' selected="selected"' : ''; ?>>Viet Nam</option>-->
                                                                    <!--    <option value="Virgin Islands, British"<?= $data1['pCountry'] == 'Virgin Islands, British' ? ' selected="selected"' : ''; ?>>Virgin Islands, British</option>-->
                                                                    <!--    <option value="Virgin Islands, U.S."<?= $data1['pCountry'] == 'Virgin Islands, U.S.' ? ' selected="selected"' : ''; ?>>Virgin Islands, U.S.</option>-->
                                                                    <!--    <option value="Wallis and Futuna"<?= $data1['pCountry'] == 'Wallis and Futuna' ? ' selected="selected"' : ''; ?>>Wallis and Futuna</option>-->
                                                                    <!--    <option value="Western Sahara"<?= $data1['pCountry'] == 'Western Sahara' ? ' selected="selected"' : ''; ?>>Western Sahara</option>-->
                                                                    <!--    <option value="Yemen"<?= $data1['pCountry'] == 'Yemen' ? ' selected="selected"' : ''; ?>>Yemen</option>-->
                                                                    <!--    <option value="Zambia"<?= $data1['pCountry'] == 'Zambia' ? ' selected="selected"' : ''; ?>>Zambia</option>-->
                                                                    <!--    <option value="Zimbabwe"<?= $data1['pCountry'] == 'Zimbabwe' ? ' selected="selected"' : ''; ?>>Zimbabwe</option>-->
                                                                    <!--</select>--> 
                                                                     <select id="pCountry1"  class="select2" style="width:100%;">
                                                                        <option value="">-- select one --</option>
                                                                        <option value="Afghanistan"<?= $data1['pCountry'] == 'Afghanistan' ? ' selected="selected"' : ''; ?>>Afghanistan</option>
                                                                        <option value="Åland Islands"<?= $data1['pCountry'] == 'Åland Islands' ? ' selected="selected"' : ''; ?>>Åland Islands</option>
                                                                        <option value="Albania"<?= $data1['pCountry'] == 'Albania' ? ' selected="selected"' : ''; ?>>Albania</option>
                                                                        <option value="Algeria"<?= $data1['pCountry'] == 'Algeria' ? ' selected="selected"' : ''; ?>>Algeria</option>
                                                                        <option value="American Samoa"<?= $data1['pCountry'] == 'American Samoa' ? ' selected="selected"' : ''; ?>>American Samoa</option>
                                                                        <option value="Andorra"<?= $data1['pCountry'] == 'Andorra' ? ' selected="selected"' : ''; ?>>Andorra</option>
                                                                        <option value="Angola"<?= $data1['pCountry'] == 'Angola' ? ' selected="selected"' : ''; ?>>Angola</option>
                                                                        <option value="Anguilla"<?= $data1['pCountry'] == 'Anguilla' ? ' selected="selected"' : ''; ?>>Anguilla</option>
                                                                        <option value="Antarctica"<?= $data1['pCountry'] == 'Antarctica' ? ' selected="selected"' : ''; ?>>Antarctica</option>
                                                                        <option value="Antigua and Barbuda"<?= $data1['pCountry'] == 'Antigua and Barbuda' ? ' selected="selected"' : ''; ?>>Antigua and Barbuda</option>
                                                                        <option value="Argentina"<?= $data1['pCountry'] == 'Argentina' ? ' selected="selected"' : ''; ?>>Argentina</option>
                                                                        <option value="Armenia"<?= $data1['pCountry'] == 'Armenia' ? ' selected="selected"' : ''; ?>>Armenia</option>
                                                                        <option value="Aruba"<?= $data1['pCountry'] == 'Aruba' ? ' selected="selected"' : ''; ?>>Aruba</option>
                                                                        <option value="Australia"<?= $data1['pCountry'] == 'Australia' ? ' selected="selected"' : ''; ?>>Australia</option>
                                                                        <option value="Austria"<?= $data1['pCountry'] == 'Austria' ? ' selected="selected"' : ''; ?>>Austria</option>
                                                                        <option value="Azerbaijan"<?= $data1['pCountry'] == 'Azerbaijan' ? ' selected="selected"' : ''; ?>>Azerbaijan</option>
                                                                        <option value="Bahamas"<?= $data1['pCountry'] == 'Bahamas' ? ' selected="selected"' : ''; ?>>Bahamas</option>
                                                                        <option value="Bahrain"<?= $data1['pCountry'] == 'Bahrain' ? ' selected="selected"' : ''; ?>>Bahrain</option>
                                                                        <option value="Bangladesh"<?= $data1['pCountry'] == 'Bangladesh' ? ' selected="selected"' : ''; ?>>Bangladesh</option>
                                                                        <option value="Barbados"<?= $data1['pCountry'] == 'Barbados' ? ' selected="selected"' : ''; ?>>Barbados</option>
                                                                        <option value="Belarus"<?= $data1['pCountry'] == 'Belarus' ? ' selected="selected"' : ''; ?>>Belarus</option>
                                                                        <option value="Belgium"<?= $data1['pCountry'] == 'Belgium' ? ' selected="selected"' : ''; ?>>Belgium</option>
                                                                        <option value="Belize"<?= $data1['pCountry'] == 'Belize' ? ' selected="selected"' : ''; ?>>Belize</option>
                                                                        <option value="Benin"<?= $data1['pCountry'] == 'Benin' ? ' selected="selected"' : ''; ?>>Benin</option>
                                                                        <option value="Bermuda"<?= $data1['pCountry'] == 'Bermuda' ? ' selected="selected"' : ''; ?>>Bermuda</option>
                                                                        <option value="Bhutan"<?= $data1['pCountry'] == 'Bhutan' ? ' selected="selected"' : ''; ?>>Bhutan</option>
                                                                        <option value="Bolivia"<?= $data1['pCountry'] == 'Bolivia' ? ' selected="selected"' : ''; ?>>Bolivia</option>
                                                                        <option value="Bosnia and Herzegovina"<?= $data1['pCountry'] == 'Bosnia and Herzegovina' ? ' selected="selected"' : ''; ?>>Bosnia and Herzegovina</option>
                                                                        <option value="Botswana"<?= $data1['pCountry'] == 'Botswana' ? ' selected="selected"' : ''; ?>>Botswana</option>
                                                                        <option value="Bouvet Island"<?= $data1['pCountry'] == 'Bouvet Island' ? ' selected="selected"' : ''; ?>>Bouvet Island</option>
                                                                        <option value="Brazil"<?= $data1['pCountry'] == 'Brazil' ? ' selected="selected"' : ''; ?>>Brazil</option>
                                                                        <option value="British Indian Ocean Territory"<?= $data1['pCountry'] == 'British Indian Ocean Territory' ? ' selected="selected"' : ''; ?>>British Indian Ocean Territory</option>
                                                                        <option value="Brunei Darussalam"<?= $data1['pCountry'] == 'Brunei Darussalam' ? ' selected="selected"' : ''; ?>>Brunei Darussalam</option>
                                                                        <option value="Bulgaria"<?= $data1['pCountry'] == 'Bulgaria' ? ' selected="selected"' : ''; ?>>Bulgaria</option>
                                                                        <option value="Burkina Faso"<?= $data1['pCountry'] == 'Burkina Faso' ? ' selected="selected"' : ''; ?>>Burkina Faso</option>
                                                                        <option value="Burundi"<?= $data1['pCountry'] == 'Burundi' ? ' selected="selected"' : ''; ?>>Burundi</option>
                                                                        <option value="Cambodia"<?= $data1['pCountry'] == 'Cambodia' ? ' selected="selected"' : ''; ?>>Cambodia</option>
                                                                        <option value="Cameroon"<?= $data1['pCountry'] == 'Cameroon' ? ' selected="selected"' : ''; ?>>Cameroon</option>
                                                                        <option value="Canada"<?= $data1['pCountry'] == 'Canada' ? ' selected="selected"' : ''; ?>>Canada</option>
                                                                        <option value="Cape Verde"<?= $data1['pCountry'] == 'Cape Verde' ? ' selected="selected"' : ''; ?>>Cape Verde</option>
                                                                        <option value="Cayman Islands"<?= $data1['pCountry'] == 'Cayman Islands' ? ' selected="selected"' : ''; ?>>Cayman Islands</option>
                                                                        <option value="Central African Republic"<?= $data1['pCountry'] == 'Central African Republic' ? ' selected="selected"' : ''; ?>>Central African Republic</option>
                                                                        <option value="Chad"<?= $data1['pCountry'] == 'Chad' ? ' selected="selected"' : ''; ?>>Chad</option>
                                                                        <option value="Chile"<?= $data1['pCountry'] == 'Chile' ? ' selected="selected"' : ''; ?>>Chile</option>
                                                                        <option value="China"<?= $data1['pCountry'] == 'China' ? ' selected="selected"' : ''; ?>>China</option>
                                                                        <option value="Christmas Island"<?= $data1['pCountry'] == 'Christmas Island' ? ' selected="selected"' : ''; ?>>Christmas Island</option>
                                                                        <option value="Cocos (Keeling) Islands"<?= $data1['pCountry'] == 'Cocos (Keeling) Islands' ? ' selected="selected"' : ''; ?>>Cocos (Keeling) Islands</option>
                                                                        <option value="Colombia"<?= $data1['pCountry'] == 'Colombia' ? ' selected="selected"' : ''; ?>>Colombia</option>
                                                                        <option value="Comoros"<?= $data1['pCountry'] == 'Comoros' ? ' selected="selected"' : ''; ?>>Comoros</option>
                                                                        <option value="Congo"<?= $data1['pCountry'] == 'Congo' ? ' selected="selected"' : ''; ?>>Congo</option>
                                                                        <option value="Congo, The Democratic Republic of The"<?= $data1['pCountry'] == 'Congo, The Democratic Republic of The' ? ' selected="selected"' : ''; ?>>Congo, The Democratic Republic of The</option>
                                                                        <option value="Cook Islands"<?= $data1['pCountry'] == 'Cook Islands' ? ' selected="selected"' : ''; ?>>Cook Islands</option>
                                                                        <option value="Costa Rica"<?= $data1['pCountry'] == 'Costa Rica' ? ' selected="selected"' : ''; ?>>Costa Rica</option>
                                                                        <option value="Cote Divoire"<?= $data1['pCountry'] == 'Cote Divoire' ? ' selected="selected"' : ''; ?>>Cote D'ivoire</option>
                                                                        <option value="Croatia"<?= $data1['pCountry'] == 'Croatia' ? ' selected="selected"' : ''; ?>>Croatia</option>
                                                                        <option value="Cuba"<?= $data1['pCountry'] == 'Cuba' ? ' selected="selected"' : ''; ?>>Cuba</option>
                                                                        <option value="Cyprus"<?= $data1['pCountry'] == 'Cyprus' ? ' selected="selected"' : ''; ?>>Cyprus</option>
                                                                        <option value="Czech Republic"<?= $data1['pCountry'] == 'Czech Republic' ? ' selected="selected"' : ''; ?>>Czech Republic</option>
                                                                        <option value="Denmark"<?= $data1['pCountry'] == 'Denmark' ? ' selected="selected"' : ''; ?>>Denmark</option>
                                                                        <option value="Djibouti"<?= $data1['pCountry'] == 'Djibouti' ? ' selected="selected"' : ''; ?>>Djibouti</option>
                                                                        <option value="Dominica"<?= $data1['pCountry'] == 'Dominica' ? ' selected="selected"' : ''; ?>>Dominica</option>
                                                                        <option value="Dominican Republic"<?= $data1['pCountry'] == 'Dominican Republic' ? ' selected="selected"' : ''; ?>>Dominican Republic</option>
                                                                        <option value="Ecuador"<?= $data1['pCountry'] == 'Ecuador' ? ' selected="selected"' : ''; ?>>Ecuador</option>
                                                                        <option value="Egypt"<?= $data1['pCountry'] == 'Egypt' ? ' selected="selected"' : ''; ?>>Egypt</option>
                                                                        <option value="El Salvador"<?= $data1['pCountry'] == 'El Salvador' ? ' selected="selected"' : ''; ?>>El Salvador</option>
                                                                        <option value="Equatorial Guinea"<?= $data1['pCountry'] == 'Equatorial Guinea' ? ' selected="selected"' : ''; ?>>Equatorial Guinea</option>
                                                                        <option value="Eritrea"<?= $data1['pCountry'] == 'Eritrea' ? ' selected="selected"' : ''; ?>>Eritrea</option>
                                                                        <option value="Estonia"<?= $data1['pCountry'] == 'Estonia' ? ' selected="selected"' : ''; ?>>Estonia</option>
                                                                        <option value="Ethiopia"<?= $data1['pCountry'] == 'Ethiopia' ? ' selected="selected"' : ''; ?>>Ethiopia</option>
                                                                        <option value="Falkland Islands (Malvinas)"<?= $data1['pCountry'] == 'Falkland Islands (Malvinas)' ? ' selected="selected"' : ''; ?>>Falkland Islands (Malvinas)</option>
                                                                        <option value="Faroe Islands"<?= $data1['pCountry'] == 'Faroe Islands' ? ' selected="selected"' : ''; ?>>Faroe Islands</option>
                                                                        <option value="Fiji"<?= $data1['pCountry'] == 'Fiji' ? ' selected="selected"' : ''; ?>>Fiji</option>
                                                                        <option value="Finland"<?= $data1['pCountry'] == 'Finland' ? ' selected="selected"' : ''; ?>>Finland</option>
                                                                        <option value="France"<?= $data1['pCountry'] == 'France' ? ' selected="selected"' : ''; ?>>France</option>
                                                                        <option value="French Guiana"<?= $data1['pCountry'] == 'French Guiana' ? ' selected="selected"' : ''; ?>>French Guiana</option>
                                                                        <option value="French Polynesia"<?= $data1['pCountry'] == 'French Polynesia' ? ' selected="selected"' : ''; ?>>French Polynesia</option>
                                                                        <option value="French Southern Territories"<?= $data1['pCountry'] == 'French Southern Territories' ? ' selected="selected"' : ''; ?>>French Southern Territories</option>
                                                                        <option value="Gabon"<?= $data1['pCountry'] == 'Gabon' ? ' selected="selected"' : ''; ?>>Gabon</option>
                                                                        <option value="Gambia"<?= $data1['pCountry'] == 'Gambia' ? ' selected="selected"' : ''; ?>>Gambia</option>
                                                                        <option value="Georgia"<?= $data1['pCountry'] == 'Georgia' ? ' selected="selected"' : ''; ?>>Georgia</option>
                                                                        <option value="Germany"<?= $data1['pCountry'] == 'Germany' ? ' selected="selected"' : ''; ?>>Germany</option>
                                                                        <option value="Ghana"<?= $data1['pCountry'] == 'Ghana' ? ' selected="selected"' : ''; ?>>Ghana</option>
                                                                        <option value="Gibraltar"<?= $data1['pCountry'] == 'Gibraltar' ? ' selected="selected"' : ''; ?>>Gibraltar</option>
                                                                        <option value="Greece"<?= $data1['pCountry'] == 'Greece' ? ' selected="selected"' : ''; ?>>Greece</option>
                                                                        <option value="Greenland"<?= $data1['pCountry'] == 'Greenland' ? ' selected="selected"' : ''; ?>>Greenland</option>
                                                                        <option value="Grenada"<?= $data1['pCountry'] == 'Grenada' ? ' selected="selected"' : ''; ?>>Grenada</option>
                                                                        <option value="Guadeloupe"<?= $data1['pCountry'] == 'Guadeloupe' ? ' selected="selected"' : ''; ?>>Guadeloupe</option>
                                                                        <option value="Guam"<?= $data1['pCountry'] == 'Guam' ? ' selected="selected"' : ''; ?>>Guam</option>
                                                                        <option value="Guatemala"<?= $data1['pCountry'] == 'Guatemala' ? ' selected="selected"' : ''; ?>>Guatemala</option>
                                                                        <option value="Guernsey"<?= $data1['pCountry'] == 'Guernsey' ? ' selected="selected"' : ''; ?>>Guernsey</option>
                                                                        <option value="Guinea"<?= $data1['pCountry'] == 'Guinea' ? ' selected="selected"' : ''; ?>>Guinea</option>
                                                                        <option value="Guinea-bissau"<?= $data1['pCountry'] == 'Guinea-bissau' ? ' selected="selected"' : ''; ?>>Guinea-bissau</option>
                                                                        <option value="Guyana"<?= $data1['pCountry'] == 'Guyana' ? ' selected="selected"' : ''; ?>>Guyana</option>
                                                                        <option value="Haiti"<?= $data1['pCountry'] == 'Haiti' ? ' selected="selected"' : ''; ?>>Haiti</option>
                                                                        <option value="Heard Island and Mcdonald Islands"<?= $data1['pCountry'] == 'Heard Island and Mcdonald Islands' ? ' selected="selected"' : ''; ?>>Heard Island and Mcdonald Islands</option>
                                                                        <option value="Holy See (Vatican City State)"<?= $data1['pCountry'] == 'Holy See (Vatican City State)' ? ' selected="selected"' : ''; ?>>Holy See (Vatican City State)</option>
                                                                        <option value="Honduras"<?= $data1['pCountry'] == 'Honduras' ? ' selected="selected"' : ''; ?>>Honduras</option>
                                                                        <option value="Hong Kong"<?= $data1['pCountry'] == 'Hong Kong' ? ' selected="selected"' : ''; ?>>Hong Kong</option>
                                                                        <option value="Hungary"<?= $data1['pCountry'] == 'Hungary' ? ' selected="selected"' : ''; ?>>Hungary</option>
                                                                        <option value="Iceland"<?= $data1['pCountry'] == 'Iceland' ? ' selected="selected"' : ''; ?>>Iceland</option>
                                                                        <option value="India"<?= $data1['pCountry'] == 'India' ? ' selected="selected"' : ''; ?>>India</option>
                                                                        <option value="Indonesia"<?= $data1['pCountry'] == 'Indonesia' ? ' selected="selected"' : ''; ?>>Indonesia</option>
                                                                        <option value="Iran, Islamic Republic of"<?= $data1['pCountry'] == 'Iran, Islamic Republic of' ? ' selected="selected"' : ''; ?>>Iran, Islamic Republic of</option>
                                                                        <option value="Iraq"<?= $data1['pCountry'] == 'Iraq' ? ' selected="selected"' : ''; ?>>Iraq</option>
                                                                        <option value="Ireland"<?= $data1['pCountry'] == 'Ireland' ? ' selected="selected"' : ''; ?>>Ireland</option>
                                                                        <option value="Isle of Man"<?= $data1['pCountry'] == 'Isle of Man' ? ' selected="selected"' : ''; ?>>Isle of Man</option>
                                                                        <option value="Israel"<?= $data1['pCountry'] == 'Israel' ? ' selected="selected"' : ''; ?>>Israel</option>
                                                                        <option value="Italy"<?= $data1['pCountry'] == 'Italy' ? ' selected="selected"' : ''; ?>>Italy</option>
                                                                        <option value="Jamaica"<?= $data1['pCountry'] == 'Jamaica' ? ' selected="selected"' : ''; ?>>Jamaica</option>
                                                                        <option value="Japan"<?= $data1['pCountry'] == 'Japan' ? ' selected="selected"' : ''; ?>>Japan</option>
                                                                        <option value="Jersey"<?= $data1['pCountry'] == 'Jersey' ? ' selected="selected"' : ''; ?>>Jersey</option>
                                                                        <option value="Jordan"<?= $data1['pCountry'] == 'Jordan' ? ' selected="selected"' : ''; ?>>Jordan</option>
                                                                        <option value="Kazakhstan"<?= $data1['pCountry'] == 'Kazakhstan' ? ' selected="selected"' : ''; ?>>Kazakhstan</option>
                                                                        <option value="Kenya"<?= $data1['pCountry'] == 'Kenya' ? ' selected="selected"' : ''; ?>>Kenya</option>
                                                                        <option value="Kiribati"<?= $data1['pCountry'] == 'Kiribati' ? ' selected="selected"' : ''; ?>>Kiribati</option>
                                                                        <option value="Korea, Democratic Peoples Republic of"<?= $data1['pCountry'] == 'Korea, Democratic Peoples Republic of' ? ' selected="selected"' : ''; ?>>Korea, Democratic People's Republic of</option>
                                                                        <option value="Korea, Republic of"<?= $data1['pCountry'] == 'Korea, Republic of' ? ' selected="selected"' : ''; ?>>Korea, Republic of</option>
                                                                        <option value="Kuwait"<?= $data1['pCountry'] == 'Kuwait' ? ' selected="selected"' : ''; ?>>Kuwait</option>
                                                                        <option value="Kyrgyzstan"<?= $data1['pCountry'] == 'Kyrgyzstan' ? ' selected="selected"' : ''; ?>>Kyrgyzstan</option>
                                                                        <option value="Lao Peoples Democratic Republic"<?= $data1['pCountry'] == 'Lao Peoples Democratic Republic' ? ' selected="selected"' : ''; ?>>Lao People's Democratic Republic</option>
                                                                        <option value="Latvia"<?= $data1['pCountry'] == 'Latvia' ? ' selected="selected"' : ''; ?>>Latvia</option>
                                                                        <option value="Lebanon"<?= $data1['pCountry'] == 'Lebanon' ? ' selected="selected"' : ''; ?>>Lebanon</option>
                                                                        <option value="Lesotho"<?= $data1['pCountry'] == 'Lesotho' ? ' selected="selected"' : ''; ?>>Lesotho</option>
                                                                        <option value="Liberia"<?= $data1['pCountry'] == 'Liberia' ? ' selected="selected"' : ''; ?>>Liberia</option>
                                                                        <option value="Libyan Arab Jamahiriya"<?= $data1['pCountry'] == 'Libyan Arab Jamahiriya' ? ' selected="selected"' : ''; ?>>Libyan Arab Jamahiriya</option>
                                                                        <option value="Liechtenstein"<?= $data1['pCountry'] == 'Liechtenstein' ? ' selected="selected"' : ''; ?>>Liechtenstein</option>
                                                                        <option value="Lithuania"<?= $data1['pCountry'] == 'Lithuania' ? ' selected="selected"' : ''; ?>>Lithuania</option>
                                                                        <option value="Luxembourg"<?= $data1['pCountry'] == 'Luxembourg' ? ' selected="selected"' : ''; ?>>Luxembourg</option>
                                                                        <option value="Macao"<?= $data1['pCountry'] == 'Macao' ? ' selected="selected"' : ''; ?>>Macao</option>
                                                                        <option value="Macedonia, The Former Yugoslav Republic of"<?= $data1['pCountry'] == 'Macedonia, The Former Yugoslav Republic of' ? ' selected="selected"' : ''; ?>>Macedonia, The Former Yugoslav Republic of</option>
                                                                        <option value="Madagascar"<?= $data1['pCountry'] == 'Madagascar' ? ' selected="selected"' : ''; ?>>Madagascar</option>
                                                                        <option value="Malawi"<?= $data1['pCountry'] == 'Malawi' ? ' selected="selected"' : ''; ?>>Malawi</option>
                                                                        <option value="Malaysia"<?= $data1['pCountry'] == 'Malaysia' ? ' selected="selected"' : ''; ?>>Malaysia</option>
                                                                        <option value="Maldives"<?= $data1['pCountry'] == 'Maldives' ? ' selected="selected"' : ''; ?>>Maldives</option>
                                                                        <option value="Mali"<?= $data1['pCountry'] == 'Mali' ? ' selected="selected"' : ''; ?>>Mali</option>
                                                                        <option value="Malta"<?= $data1['pCountry'] == 'Malta' ? ' selected="selected"' : ''; ?>>Malta</option>
                                                                        <option value="Marshall Islands"<?= $data1['pCountry'] == 'Marshall Islands' ? ' selected="selected"' : ''; ?>>Marshall Islands</option>
                                                                        <option value="Martinique"<?= $data1['pCountry'] == 'Martinique' ? ' selected="selected"' : ''; ?>>Martinique</option>
                                                                        <option value="Mauritania"<?= $data1['pCountry'] == 'Mauritania' ? ' selected="selected"' : ''; ?>>Mauritania</option>
                                                                        <option value="Mauritius"<?= $data1['pCountry'] == 'Mauritius' ? ' selected="selected"' : ''; ?>>Mauritius</option>
                                                                        <option value="Mayotte"<?= $data1['pCountry'] == 'Mayotte' ? ' selected="selected"' : ''; ?>>Mayotte</option>
                                                                        <option value="Mexico"<?= $data1['pCountry'] == 'Mexico' ? ' selected="selected"' : ''; ?>>Mexico</option>
                                                                        <option value="Micronesia, Federated States of"<?= $data1['pCountry'] == 'Micronesia, Federated States of' ? ' selected="selected"' : ''; ?>>Micronesia, Federated States of</option>
                                                                        <option value="Moldova, Republic of"<?= $data1['pCountry'] == 'Moldova, Republic of' ? ' selected="selected"' : ''; ?>>Moldova, Republic of</option>
                                                                        <option value="Monaco"<?= $data1['pCountry'] == 'Monaco' ? ' selected="selected"' : ''; ?>>Monaco</option>
                                                                        <option value="Mongolia"<?= $data1['pCountry'] == 'Mongolia' ? ' selected="selected"' : ''; ?>>Mongolia</option>
                                                                        <option value="Montenegro"<?= $data1['pCountry'] == 'Montenegro' ? ' selected="selected"' : ''; ?>>Montenegro</option>
                                                                        <option value="Montserrat"<?= $data1['pCountry'] == 'Montserrat' ? ' selected="selected"' : ''; ?>>Montserrat</option>
                                                                        <option value="Morocco"<?= $data1['pCountry'] == 'Morocco' ? ' selected="selected"' : ''; ?>>Morocco</option>
                                                                        <option value="Mozambique"<?= $data1['pCountry'] == 'Mozambique' ? ' selected="selected"' : ''; ?>>Mozambique</option>
                                                                        <option value="Myanmar"<?= $data1['pCountry'] == 'Myanmar' ? ' selected="selected"' : ''; ?>>Myanmar</option>
                                                                        <option value="Namibia"<?= $data1['pCountry'] == 'Namibia' ? ' selected="selected"' : ''; ?>>Namibia</option>
                                                                        <option value="Nauru"<?= $data1['pCountry'] == 'Nauru' ? ' selected="selected"' : ''; ?>>Nauru</option>
                                                                        <option value="Nepal"<?= $data1['pCountry'] == 'Nepal' ? ' selected="selected"' : ''; ?>>Nepal</option>
                                                                        <option value="Netherlands"<?= $data1['pCountry'] == 'Netherlands' ? ' selected="selected"' : ''; ?>>Netherlands</option>
                                                                        <option value="Netherlands Antilles"<?= $data1['pCountry'] == 'Netherlands Antilles' ? ' selected="selected"' : ''; ?>>Netherlands Antilles</option>
                                                                        <option value="New Caledonia"<?= $data1['pCountry'] == 'New Caledonia' ? ' selected="selected"' : ''; ?>>New Caledonia</option>
                                                                        <option value="New Zealand"<?= $data1['pCountry'] == 'New Zealand' ? ' selected="selected"' : ''; ?>>New Zealand</option>
                                                                        <option value="Nicaragua"<?= $data1['pCountry'] == 'Nicaragua' ? ' selected="selected"' : ''; ?>>Nicaragua</option>
                                                                        <option value="Niger"<?= $data1['pCountry'] == 'Niger' ? ' selected="selected"' : ''; ?>>Niger</option>
                                                                        <option value="Nigeria"<?= $data1['pCountry'] == 'Nigeria' ? ' selected="selected"' : ''; ?>>Nigeria</option>
                                                                        <option value="Niue"<?= $data1['pCountry'] == 'Niue' ? ' selected="selected"' : ''; ?>>Niue</option>
                                                                        <option value="Norfolk Island"<?= $data1['pCountry'] == 'Norfolk Island' ? ' selected="selected"' : ''; ?>>Norfolk Island</option>
                                                                        <option value="Northern Mariana Islands"<?= $data1['pCountry'] == 'Northern Mariana Islands' ? ' selected="selected"' : ''; ?>>Northern Mariana Islands</option>
                                                                        <option value="Norway"<?= $data1['pCountry'] == 'Norway' ? ' selected="selected"' : ''; ?>>Norway</option>
                                                                        <option value="Oman"<?= $data1['pCountry'] == 'Oman' ? ' selected="selected"' : ''; ?>>Oman</option>
                                                                        <option value="Pakistan"<?= $data1['pCountry'] == 'Pakistan' ? ' selected="selected"' : ''; ?>>Pakistan</option>
                                                                        <option value="Palau"<?= $data1['pCountry'] == 'Palau' ? ' selected="selected"' : ''; ?>>Palau</option>
                                                                        <option value="Palestinian Territory, Occupied"<?= $data1['pCountry'] == 'Palestinian Territory, Occupied' ? ' selected="selected"' : ''; ?>>Palestinian Territory, Occupied</option>
                                                                        <option value="Panama"<?= $data1['pCountry'] == 'Panama' ? ' selected="selected"' : ''; ?>>Panama</option>
                                                                        <option value="Papua New Guinea"<?= $data1['pCountry'] == 'Papua New Guinea' ? ' selected="selected"' : ''; ?>>Papua New Guinea</option>
                                                                        <option value="Paraguay"<?= $data1['pCountry'] == 'Paraguay' ? ' selected="selected"' : ''; ?>>Paraguay</option>
                                                                        <option value="Peru"<?= $data1['pCountry'] == 'Peru' ? ' selected="selected"' : ''; ?>>Peru</option>
                                                                        <option value="Philippines"<?= $data1['pCountry'] == 'Philippines' ? ' selected="selected"' : ''; ?>>Philippines</option>
                                                                        <option value="Pitcairn"<?= $data1['pCountry'] == 'Pitcairn' ? ' selected="selected"' : ''; ?>>Pitcairn</option>
                                                                        <option value="Poland"<?= $data1['pCountry'] == 'Poland' ? ' selected="selected"' : ''; ?>>Poland</option>
                                                                        <option value="Portugal"<?= $data1['pCountry'] == 'Portugal' ? ' selected="selected"' : ''; ?>>Portugal</option>
                                                                        <option value="Puerto Rico"<?= $data1['pCountry'] == 'Puerto Rico' ? ' selected="selected"' : ''; ?>>Puerto Rico</option>
                                                                        <option value="Qatar"<?= $data1['pCountry'] == 'Qatar' ? ' selected="selected"' : ''; ?>>Qatar</option>
                                                                        <option value="Reunion"<?= $data1['pCountry'] == 'Reunion' ? ' selected="selected"' : ''; ?>>Reunion</option>
                                                                        <option value="Romania"<?= $data1['pCountry'] == 'Romania' ? ' selected="selected"' : ''; ?>>Romania</option>
                                                                        <option value="Russian Federation"<?= $data1['pCountry'] == 'Russian Federation' ? ' selected="selected"' : ''; ?>>Russian Federation</option>
                                                                        <option value="Rwanda"<?= $data1['pCountry'] == 'Rwanda' ? ' selected="selected"' : ''; ?>>Rwanda</option>
                                                                        <option value="Saint Helena"<?= $data1['pCountry'] == 'Saint Helena' ? ' selected="selected"' : ''; ?>>Saint Helena</option>
                                                                        <option value="Saint Kitts and Nevis"<?= $data1['pCountry'] == 'Saint Kitts and Nevis' ? ' selected="selected"' : ''; ?>>Saint Kitts and Nevis</option>
                                                                        <option value="Saint Lucia"<?= $data1['pCountry'] == 'Saint Lucia' ? ' selected="selected"' : ''; ?>>Saint Lucia</option>
                                                                        <option value="Saint Pierre and Miquelon"<?= $data1['pCountry'] == 'Saint Pierre and Miquelon' ? ' selected="selected"' : ''; ?>>Saint Pierre and Miquelon</option>
                                                                        <option value="Saint Vincent and The Grenadines"<?= $data1['pCountry'] == 'Saint Vincent and The Grenadines' ? ' selected="selected"' : ''; ?>>Saint Vincent and The Grenadines</option>
                                                                        <option value="Samoa"<?= $data1['pCountry'] == 'Samoa' ? ' selected="selected"' : ''; ?>>Samoa</option>
                                                                        <option value="San Marino"<?= $data1['pCountry'] == 'San Marino' ? ' selected="selected"' : ''; ?>>San Marino</option>
                                                                        <option value="Sao Tome and Principe"<?= $data1['pCountry'] == 'Sao Tome and Principe' ? ' selected="selected"' : ''; ?>>Sao Tome and Principe</option>
                                                                        <option value="Saudi Arabia"<?= $data1['pCountry'] == 'Saudi Arabia' ? ' selected="selected"' : ''; ?>>Saudi Arabia</option>
                                                                        <option value="Senegal"<?= $data1['pCountry'] == 'Senegal' ? ' selected="selected"' : ''; ?>>Senegal</option>
                                                                        <option value="Serbia"<?= $data1['pCountry'] == 'Serbia' ? ' selected="selected"' : ''; ?>>Serbia</option>
                                                                        <option value="Seychelles"<?= $data1['pCountry'] == 'Seychelles' ? ' selected="selected"' : ''; ?>>Seychelles</option>
                                                                        <option value="Sierra Leone"<?= $data1['pCountry'] == 'Sierra Leone' ? ' selected="selected"' : ''; ?>>Sierra Leone</option>
                                                                        <option value="Singapore"<?= $data1['pCountry'] == 'Singapore' ? ' selected="selected"' : ''; ?>>Singapore</option>
                                                                        <option value="Slovakia"<?= $data1['pCountry'] == 'Slovakia' ? ' selected="selected"' : ''; ?>>Slovakia</option>
                                                                        <option value="Slovenia"<?= $data1['pCountry'] == 'Slovenia' ? ' selected="selected"' : ''; ?>>Slovenia</option>
                                                                        <option value="Solomon Islands"<?= $data1['pCountry'] == 'Solomon Islands' ? ' selected="selected"' : ''; ?>>Solomon Islands</option>
                                                                        <option value="Somalia"<?= $data1['pCountry'] == 'Somalia' ? ' selected="selected"' : ''; ?>>Somalia</option>
                                                                        <option value="South Africa"<?= $data1['pCountry'] == 'South Africa' ? ' selected="selected"' : ''; ?>>South Africa</option>
                                                                        <option value="South Georgia and The South Sandwich Islands"<?= $data1['pCountry'] == 'South Georgia and The South Sandwich Islands' ? ' selected="selected"' : ''; ?>>South Georgia and The South Sandwich Islands</option>
                                                                        <option value="Spain"<?= $data1['pCountry'] == 'Spain' ? ' selected="selected"' : ''; ?>>Spain</option>
                                                                        <option value="Sri Lanka"<?= $data1['pCountry'] == 'Sri Lanka' ? ' selected="selected"' : ''; ?>>Sri Lanka</option>
                                                                        <option value="Sudan"<?= $data1['pCountry'] == 'Sudan' ? ' selected="selected"' : ''; ?>>Sudan</option>
                                                                        <option value="Suriname<?= $data1['pCountry'] == 'Suriname' ? ' selected="selected"' : ''; ?>">Suriname</option>
                                                                        <option value="Svalbard and Jan Mayen"<?= $data1['pCountry'] == 'Svalbard and Jan Mayen' ? ' selected="selected"' : ''; ?>>Svalbard and Jan Mayen</option>
                                                                        <option value="Swaziland"<?= $data1['pCountry'] == 'Swaziland' ? ' selected="selected"' : ''; ?>>Swaziland</option>
                                                                        <option value="Sweden"<?= $data1['pCountry'] == 'Sweden' ? ' selected="selected"' : ''; ?>>Sweden</option>
                                                                        <option value="Switzerland"<?= $data1['pCountry'] == 'Switzerland' ? ' selected="selected"' : ''; ?>>Switzerland</option>
                                                                        <option value="Syrian Arab Republic"<?= $data1['pCountry'] == 'Syrian Arab Republic' ? ' selected="selected"' : ''; ?>>Syrian Arab Republic</option>
                                                                        <option value="Taiwan, Province of China"<?= $data1['pCountry'] == 'Taiwan, Province of China' ? ' selected="selected"' : ''; ?>>Taiwan, Province of China</option>
                                                                        <option value="Tajikistan"<?= $data1['pCountry'] == '' ? ' selected="selected"' : ''; ?>>Tajikistan</option>
                                                                        <option value="Tanzania, United Republic of"<?= $data1['pCountry'] == 'Tanzania, United Republic of' ? ' selected="selected"' : ''; ?>>Tanzania, United Republic of</option>
                                                                        <option value="Thailand"<?= $data1['pCountry'] == 'Thailand' ? ' selected="selected"' : ''; ?>>Thailand</option>
                                                                        <option value="Timor-leste"<?= $data1['pCountry'] == 'Timor-leste' ? ' selected="selected"' : ''; ?>>Timor-leste</option>
                                                                        <option value="Togo"<?= $data1['pCountry'] == 'Togo' ? ' selected="selected"' : ''; ?>>Togo</option>
                                                                        <option value="Tokelau"<?= $data1['pCountry'] == 'Tokelau' ? ' selected="selected"' : ''; ?>>Tokelau</option>
                                                                        <option value="Tonga"<?= $data1['pCountry'] == 'Tonga' ? ' selected="selected"' : ''; ?>>Tonga</option>
                                                                        <option value="Trinidad and Tobago"<?= $data1['pCountry'] == 'Trinidad and Tobago' ? ' selected="selected"' : ''; ?>>Trinidad and Tobago</option>
                                                                        <option value="Tunisia"<?= $data1['pCountry'] == 'Tunisia' ? ' selected="selected"' : ''; ?>>Tunisia</option>
                                                                        <option value="Turkey"<?= $data1['pCountry'] == 'Turkey' ? ' selected="selected"' : ''; ?>>Turkey</option>
                                                                        <option value="Turkmenistan"<?= $data1['pCountry'] == 'Turkmenistan' ? ' selected="selected"' : ''; ?>>Turkmenistan</option>
                                                                        <option value="Turks and Caicos Islands"<?= $data1['pCountry'] == 'Turks and Caicos Islands' ? ' selected="selected"' : ''; ?>>Turks and Caicos Islands</option>
                                                                        <option value="Tuvalu"<?= $data1['pCountry'] == 'Tuvalu' ? ' selected="selected"' : ''; ?>>Tuvalu</option>
                                                                        <option value="Uganda"<?= $data1['pCountry'] == 'Uganda' ? ' selected="selected"' : ''; ?>>Uganda</option>
                                                                        <option value="Ukraine"<?= $data1['pCountry'] == 'Ukraine' ? ' selected="selected"' : ''; ?>>Ukraine</option>
                                                                        <option value="United Arab Emirates"<?= $data1['pCountry'] == 'United Arab Emirates' ? ' selected="selected"' : ''; ?>>United Arab Emirates</option>
                                                                        <option value="United Kingdom"<?= $data1['pCountry'] == 'United Kingdom' ? ' selected="selected"' : ''; ?>>United Kingdom</option>
                                                                        <option value="United States"<?= $data1['pCountry'] == 'United States' ? ' selected="selected"' : ''; ?>>United States</option>
                                                                        <option value="United States Minor Outlying Islands"<?= $data1['pCountry'] == 'United States Minor Outlying Islands' ? ' selected="selected"' : ''; ?>>United States Minor Outlying Islands</option>
                                                                        <option value="Uruguay"<?= $data1['pCountry'] == 'Uruguay' ? ' selected="selected"' : ''; ?>>Uruguay</option>
                                                                        <option value="Uzbekistan"<?= $data1['pCountry'] == 'Uzbekistan' ? ' selected="selected"' : ''; ?>>Uzbekistan</option>
                                                                        <option value="Vanuatu"<?= $data1['pCountry'] == 'Vanuatu' ? ' selected="selected"' : ''; ?>>Vanuatu</option>
                                                                        <option value="Venezuela"<?= $data1['pCountry'] == 'Venezuela' ? ' selected="selected"' : ''; ?>>Venezuela</option>
                                                                        <option value="Viet Nam"<?= $data1['pCountry'] == 'Viet Nam' ? ' selected="selected"' : ''; ?>>Viet Nam</option>
                                                                        <option value="Virgin Islands, British"<?= $data1['pCountry'] == 'Virgin Islands, British' ? ' selected="selected"' : ''; ?>>Virgin Islands, British</option>
                                                                        <option value="Virgin Islands, U.S."<?= $data1['pCountry'] == 'Virgin Islands, U.S.' ? ' selected="selected"' : ''; ?>>Virgin Islands, U.S.</option>
                                                                        <option value="Wallis and Futuna"<?= $data1['pCountry'] == 'Wallis and Futuna' ? ' selected="selected"' : ''; ?>>Wallis and Futuna</option>
                                                                        <option value="Western Sahara"<?= $data1['pCountry'] == 'Western Sahara' ? ' selected="selected"' : ''; ?>>Western Sahara</option>
                                                                        <option value="Yemen"<?= $data1['pCountry'] == 'Yemen' ? ' selected="selected"' : ''; ?>>Yemen</option>
                                                                        <option value="Zambia"<?= $data1['pCountry'] == 'Zambia' ? ' selected="selected"' : ''; ?>>Zambia</option>
                                                                        <option value="Zimbabwe"<?= $data1['pCountry'] == 'Zimbabwe' ? ' selected="selected"' : ''; ?>>Zimbabwe</option>
                                                                    </select>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="dataLabel">
                                                                    <label>State</label>
                                                                </div>
                                                                <div class="dataInfo">
                                                                    <input type="text" id="pState" value="<?php echo $data1['pState']; ?>" class="form-control">
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="dataLabel">
                                                                    <label>District</label>
                                                                </div>
                                                                <div class="dataInfo">
                                                                    <input type="text" id="pDistrict" value="<?php echo $data1['pDistrict']; ?>" class="form-control">
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="dataLabel">
                                                                    <label>City</label>
                                                                </div>
                                                                <div class="dataInfo">
                                                                    <input type="text" id="pCity" value="<?php echo $data1['pCity']; ?>" class="form-control">
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="dataLabel">
                                                                    <label>Pincode</label>
                                                                </div>
                                                                <div class="dataInfo">
                                                                    <input type="text" id="pPincode" value="<?php echo $data1['pPincode']; ?>" class="form-control">
                                                                </div>
                                                            </li>
                                                   
                                                                <li>
                                                                    <div class="dataLabel">
                                                                        <label>Passport Number</label>
                                                                    </div>
                                                                    <div class="dataInfo">
                                                                        <input type="text" id="passportNumber" value="<?php echo $data1['passportNumber']; ?>" class="form-control">
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="dataLabel">
                                                                        <label>Date of Issue</label>
                                                                    </div>
                                                                    <div class="dataInfo">
                                                                        <input type="date" id="dateOfIssue" value="<?php echo $data1['dateOfIssue']; ?>" class="form-control">
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="dataLabel">
                                                                        <label>Place of issue</label>
                                                                    </div>
                                                                    <div class="dataInfo">
                                                                        <input type="text" id="placeOfIssue" value="<?php echo $data1['placeOfIssue']; ?>" class="form-control">
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="dataLabel">
                                                                        <label>Date of expiry</label>
                                                                    </div>
                                                                    <div class="dataInfo">
                                                                        <input type="date" id="dateOfExpiry" value="<?php echo $data1['dateOfExpiry']; ?>" class="form-control">
                                                                    </div>
                                                                </li>



                                                        </ul>
                                                        <div class="table-responsive contacttable">
                                                            <table width="100%">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Details</th>
                                                                        <th>Father</th>
                                                                        <th>Mother</th>
                                                                        <!--<th>Guardian</th>-->
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <th>Name</th>
                                                                        <td><input type="text" id="fatherName" value="<?php echo $data1['fatherName']; ?>" class="form-control"></td>
                                                                        <td><input type="text" id="motherName" value="<?php echo $data1['motherName']; ?>" class="form-control"></td>
                                                                        <!--<td>-</td>-->
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Email</th>
                                                                        <td><input type="text" id="fatherEmail" value="<?php echo $data1['fatherEmail']; ?>" class="form-control"></td>
                                                                        <td><input type="text" id="motherEmail" value="<?php echo $data1['motherEmail']; ?>" class="form-control"></td>
                                                                        <!--<td>-</td>-->
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Phone No</th>
                                                                        <td><input type="text" id="fatherMobile" value="<?php echo $data1['fatherMobile']; ?>" class="form-control"></td>
                                                                        <td><input type="text" id="motherMobile" value="<?php echo $data1['motherMobile']; ?>" class="form-control"></td>
                                                                        <!--<td>-</td>-->
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Occupation</th>
                                                                        <td><input type="text" id="fatherOccupation" value="<?php echo $data1['fatherOccupation']; ?>" class="form-control"></td>
                                                                        <td><input type="text" id="motherOccupation" value="<?php echo $data1['motherOccupation']; ?>" class="form-control"></td>
                                                                        <!--<td>-</td>-->
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <li></li>
                                                        <button type="button" onclick="informationEdit()" class="btn btn-success" style="float-right">Submit</button>
                                                    </div>
                                                </div>

                                                <div class="tab-pane fade" id="hostel" role="tabpanel"
                                                     aria-labelledby="hostel-tab">
                                                    <div class="dataWrap">
                                                        <ul>


                                                            <li>
                                                                <div class="dataLabel">
                                                                    <label>Accommodation</label>
                                                                </div>
                                                                <div class="dataInfo">
                                                                    <select id="accommodation1" class="select2" style="width:100%;">
                                                                        <option value="">-- select one --</option>
                                                                        <option value="yes"<?= $data2['accommodation'] == 'yes' ? ' selected="selected"' : ''; ?>>Yes</option>
                                                                        <option value="no"<?= $data2['accommodation'] == 'no' ? ' selected="selected"' : ''; ?>>No</option>

                                                                    </select>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="dataLabel">
                                                                    <label>Center</label>
                                                                </div>
                                                                <div class="dataInfo">
                                                                    <select id="center1" class="select2" style="width:100%;">
                                                                        <option value="">-- select one --</option>
                                                                        <option <?= $data2['center'] == 'Pune' ? ' selected="selected"' : ''; ?>>Pune</option>
                                                                        <option <?= $data2['center'] == 'Chennai' ? ' selected="selected"' : ''; ?>>Chennai</option>

                                                                    </select>
                                                                </div>
                                                            </li>   
                                                             <li>
                                                                <div class="dataLabel">
                                                                    <label>Student Id Number</label>
                                                                </div>
                                                                <div class="dataInfo">
                                                                   
                                                                    <input type="text" id="studentIdNumber" value="<?php echo $data['studentIdNumber']; ?>" class="form-control" readonly>
                                                                </div>
                                                            </li>
                                                        </ul> 
                                                                 
                                                        <button type="button" onclick="hostelEdit()" class="btn btn-success" style="float-right">Submit</button>
                                                    </div>
                                                </div>

                                                <div class="tab-pane fade" id="course" role="tabpanel"
                                                     aria-labelledby="course-tab">
                                                    <div class="dataWrap">
                                                        <ul>
                                                            <li>
                                                                <div class="dataLabel">
                                                                    <label>CURRENT BATCH</label>
                                                                </div>
                                                                <div class="dataInfo">
                                                                    <select id="currentBatch1" class="select2" style="width:100%;">
                                                                        <!--<option value="">-- select one --</option>
                                                                        <option value="BS - 20"<?= $data5['currentBatch'] == 'BS - 20' ? ' selected="selected"' : ''; ?>>BS - 2020</option>
                                                                        <option value="BS - 19"<?= $data5['currentBatch'] == 'BS - 19' ? ' selected="selected"' : ''; ?>>BS - 2019</option>-->

                                                                 <option value="BS - 15" <?= $data5['currentBatch'] == 'BS - 15' ? ' selected="selected"' : ''; ?>>BS - 15</option>
                                                        <option value="BS - 16" <?= $data5['currentBatch'] == 'BS - 16' ? ' selected="selected"' : ''; ?>>BS - 16</option>
                                                        <option value="BS - 17" <?= $data5['currentBatch'] == 'BS - 17' ? ' selected="selected"' : ''; ?>>BS - 17</option>
                                                        <option value="BS - 18" <?= $data5['currentBatch'] == 'BS - 18' ? ' selected="selected"' : ''; ?>>BS - 18</option>
                                                        <option value="BS - 19" <?= $data5['currentBatch'] == 'BS - 19' ? ' selected="selected"' : ''; ?>>BS - 19</option>
                                                        <option value="BS - 20" <?= $data5['currentBatch'] == 'BS - 20' ? ' selected="selected"' : ''; ?>>BS - 20</option>
                                                        <option value="BS - 21" <?= $data5['currentBatch'] == 'BS - 21' ? ' selected="selected"' : ''; ?>>BS - 21</option>
                                                        <option value="BS - 22" <?= $data5['currentBatch'] == 'BS - 22' ? ' selected="selected"' : ''; ?>>BS - 22</option>
                                                        <option value="BS - 23" <?= $data5['currentBatch'] == 'BS - 23' ? ' selected="selected"' : ''; ?>>BS - 23</option>
                                                        <option value="BS - 24" <?= $data5['currentBatch'] == 'BS - 24' ? ' selected="selected"' : ''; ?>>BS - 24</option>
                                                        <option value="BS - 10" <?= $data5['currentBatch'] == 'BS - 10' ? ' selected="selected"' : ''; ?>>BS - 10</option>
                                                        <option value="BS - 11" <?= $data5['currentBatch'] == 'BS - 11' ? ' selected="selected"' : ''; ?>>BS - 11</option>
                                                                        
                                                                   



                                                                    </select>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="dataLabel">
                                                                    <label>DIRECT TO PHILIPPINES OR STUDIED B.S IN
                                                                        INDIA</label>
                                                                </div>
                                                                <div class="dataInfo">
                                                                    <select id="studied1" class="select2" style="width:100%;">
                                                                        <option value="">-- select one --</option>
                                                                        <option value="BS-MD (BS only Davao)"<?= $data5['studied'] == 'BS-MD (BS only Davao)' ? ' selected="selected"' : ''; ?>>BS-MD (BS only Davao)</option>
                                                                        <option value="BS-MD (BS Pune + Davao)"<?= $data5['studied'] == 'BS-MD (BS Pune + Davao)' ? ' selected="selected"' : ''; ?>>BS-MD (BS Pune + Davao)</option>
                                                                        <option value="Direct to Philippines without BS"<?= $data5['studied'] == 'Direct to Philippines without BS' ? ' selected="selected"' : ''; ?>>Direct to Philippines without BS</option>
                                                                        <option value="BS-MD(BS Chennai + Davao)"<?= $data5['studied'] == 'BS-MD(BS Chennai + Davao)' ? ' selected="selected"' : ''; ?>>BS-MD(BS Chennai + Davao)</option>
                                                                    </select>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="dataLabel">
                                                                    <label>YEAR START OF B.S COURSE</label>
                                                                </div>
                                                                <div class="dataInfo">
                                                                    <select id="yearOfStartBS1" class="select2" style="width:100%;">
                                                                        <option>Year</option>
                                                                        <option value="2021"<?= $data5['yearOfStartBS'] == '2021' ? ' selected="selected"' : ''; ?>>2021</option>
                                                                        <option value="2020"<?= $data5['yearOfStartBS'] == '2020' ? ' selected="selected"' : ''; ?>>2020</option>
                                                                        <option value="2019"<?= $data5['yearOfStartBS'] == '2019' ? ' selected="selected"' : ''; ?>>2019</option>
                                                                        <option value="2018"<?= $data5['yearOfStartBS'] == '2018' ? ' selected="selected"' : ''; ?>>2018</option>
                                                                        <option value="2017"<?= $data5['yearOfStartBS'] == '2017' ? ' selected="selected"' : ''; ?>>2017</option>
                                                                        <option value="2016"<?= $data5['yearOfStartBS'] == '2016' ? ' selected="selected"' : ''; ?>>2016</option>
                                                                        <option value="2015"<?= $data5['yearOfStartBS'] == '2015' ? ' selected="selected"' : ''; ?>>2015</option>
                                                                        <option value="2014"<?= $data5['yearOfStartBS'] == '2014' ? ' selected="selected"' : ''; ?>>2014</option>
                                                                        <option value="2013"<?= $data5['yearOfStartBS'] == '2013' ? ' selected="selected"' : ''; ?>>2013</option>
                                                                        <option value="2012"<?= $data5['yearOfStartBS'] == '2012' ? ' selected="selected"' : ''; ?>>2012</option>
                                                                    </select>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="dataLabel">
                                                                    <label>MONTH</label>
                                                                </div>
                                                                <div class="dataInfo">
                                                                    <select id="monthBS1" class="select2" style="width:100%;">
                                                                        <option value="">Month</option>
                                                                        <option value="Jan"<?= $data5['monthBS'] == 'Jan' ? ' selected="selected"' : ''; ?>>Jan</option>
                                                                        <option value="Feb"<?= $data5['monthBS'] == 'Feb' ? ' selected="selected"' : ''; ?>>Feb</option>
                                                                        <option value="March"<?= $data5['monthBS'] == 'March' ? ' selected="selected"' : ''; ?>>March</option>
                                                                        <option value="Apr"<?= $data5['monthBS'] == 'Apr' ? ' selected="selected"' : ''; ?>>Apr</option>
                                                                        <option value="May"<?= $data5['monthBS'] == 'May' ? ' selected="selected"' : ''; ?>>May</option>
                                                                        <option value="June"<?= $data5['monthBS'] == 'June' ? ' selected="selected"' : ''; ?>>June</option>
                                                                        <option value="July"<?= $data5['monthBS'] == 'July' ? ' selected="selected"' : ''; ?>>July</option>
                                                                        <option value="Aug"<?= $data5['monthBS'] == 'Aug' ? ' selected="selected"' : ''; ?>>Aug</option>
                                                                        <option value="Sep"<?= $data5['monthBS'] == 'Sep' ? ' selected="selected"' : ''; ?>>Sep</option>
                                                                        <option value="Oct"<?= $data5['monthBS'] == 'Oct' ? ' selected="selected"' : ''; ?>>Oct</option>
                                                                        <option value="Nov"<?= $data5['monthBS'] == 'Nov' ? ' selected="selected"' : ''; ?>>Nov</option>
                                                                        <option value="Dec"<?= $data5['monthBS'] == 'Dec' ? ' selected="selected"' : ''; ?>>Dec</option>
                                                                    </select>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="dataLabel">
                                                                    <label>Responsible Person for Fee</label>
                                                                </div>
                                                                <div class="dataInfo">
                                                                    <input type="text" id="responsibleName" value="<?php echo $data5['responsibleName']; ?>" class="form-control">
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="dataLabel">
                                                                    <label>Occupation</label>
                                                                </div>
                                                                <div class="dataInfo">
                                                                    <input type="text" id="responsibleOccupation" value="<?php echo $data5['responsibleOccupation']; ?>" class="form-control">
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="dataLabel">
                                                                    <label>Relationship</label>
                                                                </div>
                                                                <div class="dataInfo">
                                                                    <input type="text" id="relationship" value="<?php echo $data5['relationship']; ?>" class="form-control">
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="dataLabel">
                                                                    <label>Contact Number</label>
                                                                </div>
                                                                <div class="dataInfo">
                                                                    <input type="text" id="responsibleContactNumber" value="<?php echo $data5['responsibleContactNumber']; ?>" class="form-control">
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="dataLabel">
                                                                    <label>Responsible Email</label>
                                                                </div>
                                                                <div class="dataInfo">
                                                                    <input type="text" id="responsibleEmail" value="<?php echo $data5['responsibleEmail']; ?>" class="form-control">
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="dataLabel">
                                                                    <label>LateralEntry</label>
                                                                </div>
                                                                <div class="dataInfo">
                                                                    <select id="lateralEntry1" class="select2" style="width:100%;">
                                                                        <option value="">-- select one --</option>
                                                                        <option value="yes"<?= $data5['lateralEntry'] == 'yes' ? ' selected="selected"' : ''; ?>>Yes</option>
                                                                        <option value="no"<?= $data5['lateralEntry'] == 'no' ? ' selected="selected"' : ''; ?>>No</option>

                                                                    </select>
                                                                </div>
                                                            </li>

                                                            <li>
                                                                <div class="dataLabel">
                                                                    <label>University Name</label>
                                                                </div>
                                                                <div class="dataInfo">
                                                                    <input type="text" id="universityName" value="<?php echo $data5['universityName']; ?>" class="form-control">
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="dataLabel">
                                                                    <label>College Name</label>
                                                                </div>
                                                                <div class="dataInfo">
                                                                    <input type="text" id="collegeName" value="<?php echo $data5['collegeName']; ?>" class="form-control">
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="dataLabel">
                                                                    <label>year Of Passing</label>
                                                                </div>
                                                                <div class="dataInfo">
                                                                    <input type="text" id="yearOfPassing" value="<?php echo $data5['yearOfPassing']; ?>" class="form-control">
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="dataLabel">
                                                                    <label>Percentage</label>
                                                                </div>
                                                                <div class="dataInfo">
                                                                    <input type="text" id="percentage" value="<?php echo $data5['percentage']; ?>" class="form-control">
                                                                </div>
                                                            </li>                                                      
                                                        </ul>
                                                        <button type="button" onclick="studiedEdit()" class="btn btn-success" style="float-right">Submit</button>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="education" role="tabpanel"
                                                     aria-labelledby="education-tab">
                                                    <div class="dataWrap remarkHistoryWrap">
                                                        <div class="table-responsive">
                                                            <table>
                                                                <tr>
                                                                    <th>Name</th>
                                                                    <th>SSLC</th>
                                                                    <th>HSC</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>Percentage</td>
                                                                    <td><input type="text" id="tenthPercentage" value="<?php echo $data3['tenthPercentage']; ?>" class="form-control"></td>
                                                                    <td><input type="text" id="twelvethPercentage" value="<?php echo $data3['twelvethPercentage']; ?>" class="form-control"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>School Name</td>
                                                                    <td><input type="text" id="tenthSchoolName" value="<?php echo $data3['tenthSchoolName']; ?>" class="form-control"></td>
                                                                    <td><input type="text" id="twelvethSchoolName" value="<?php echo $data3['twelvethSchoolName']; ?>" class="form-control"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Board</td>
                                                                    <td><input type="text" id="tenthBoard" value="<?php echo $data3['tenthBoard']; ?>" class="form-control"></td>
                                                                    <td><input type="text" id="twelvethBoard" value="<?php echo $data3['twelvethBoard']; ?>" class="form-control"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>School Address</td>
                                                                    <td><input type="text" id="tenthSchoolAddress" value="<?php echo $data3['tenthSchoolAddress']; ?>" class="form-control"></td>
                                                                    <td><input type="text" id="twelvethSchoolAddress" value="<?php echo $data3['twelvethSchoolAddress']; ?>" class="form-control"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>District</td>
                                                                    <td><input type="text" id="tenthDistrict" value="<?php echo $data3['tenthDistrict']; ?>" class="form-control"></td>
                                                                    <td><input type="text" id="twelvethDistrict" value="<?php echo $data3['twelvethDistrict']; ?>" class="form-control"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>State</td>
                                                                    <td><input type="text" id="tenthState" value="<?php echo $data3['tenthState']; ?>" class="form-control"></td>
                                                                    <td><input type="text" id="twelvethState" value="<?php echo $data3['twelvethState']; ?>" class="form-control"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Country</td>
                                                                    <td><input type="text" id="tenthCountry" value="<?php echo $data3['tenthCountry']; ?>" class="form-control"></td>
                                                                    <td><input type="text" id="twelvethCountry" value="<?php echo $data3['twelvethCountry']; ?>" class="form-control"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Passing Year</td>
                                                                    <td><input type="text" id="tenthPassingYear" value="<?php echo $data3['tenthPassingYear']; ?>" class="form-control"></td>
                                                                    <td><input type="text" id="twelvethPassingYear" value="<?php echo $data3['twelvethPassingYear']; ?>" class="form-control"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Neet Score</td>
                                                                    <td><div class="dataInfo">  
                                                                    <select id="neet_applicable" class="select2" style="width:100%;">
                                                                        <!--<option value="">Select</option>-->
                                                                        <option value="Yes"<?= $data3['neet_applicable'] == 'Yes' ? ' selected="selected"' : ''; ?>>Yes</option>
                                                                        <option value="No"<?= $data3['neet_applicable'] == 'No' ? ' selected="selected"' : ''; ?>>No</option>
                                                                        
                                                                    </select>
                                                                </div></td>
                                                                    <td><input type="text" id="neetScore" value="<?php echo $data3['neetScore']; ?>" class="form-control"></td> 
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td><button type="button" onclick="educationEdit()" class="btn btn-success">Submit</button></td>
                                                                    <td></td>
                                                                </tr>
                                                            </table>
                                                            <table>
                                                                <thead>
                                                                <th>Tenth Subject</th>
                                                                <th>Tenth Mark</th>
                                                                <th>Twelveth Subject</th>
                                                                <th>Twelveth Mark</th>
                                                                </thead>
                                                                <tr>

                                                                    <td><input type="text" id="s1" value="<?php echo $data4['s1']; ?>" class="form-control"></td>
                                                                    <td><input type="text" id="m1" value="<?php echo $data4['m1']; ?>" class="form-control"></td>
                                                                    <td><input type="text" id="ss1" value="<?php echo $data4['ss1']; ?>" class="form-control"></td>
                                                                    <td><input type="text" id="mm1" value="<?php echo $data4['mm1']; ?>" class="form-control"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><input type="text" id="s2" value="<?php echo $data4['s2']; ?>" class="form-control"></td>  
                                                                    <td><input type="text" id="m2" value="<?php echo $data4['m2']; ?>" class="form-control"></td>
                                                                    <td><input type="text" id="ss2" value="<?php echo $data4['ss2']; ?>" class="form-control"></td>

                                                                    <td><input type="text" id="mm2" value="<?php echo $data4['mm2']; ?>" class="form-control"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><input type="text" id="s3" value="<?php echo $data4['s3']; ?>" class="form-control"></td>
                                                                    <td><input type="text" id="m3" value="<?php echo $data4['m3']; ?>" class="form-control"></td>
                                                                    <td><input type="text" id="ss3" value="<?php echo $data4['ss3']; ?>" class="form-control"></td>

                                                                    <td><input type="text" id="mm3" value="<?php echo $data4['mm3']; ?>" class="form-control"></td>
                                                                </tr>

                                                                <tr>
                                                                    <td><input type="text" id="s4" value="<?php echo $data4['s4']; ?>" class="form-control"></td>
                                                                    <td><input type="text" id="m4" value="<?php echo $data4['m4']; ?>" class="form-control"></td>
                                                                    <td><input type="text" id="ss4" value="<?php echo $data4['ss4']; ?>" class="form-control"></td>

                                                                    <td><input type="text" id="mm4" value="<?php echo $data4['mm4']; ?>" class="form-control"></td>
                                                                </tr>

                                                                <tr>
                                                                    <td><input type="text" id="s5" value="<?php echo $data4['s5']; ?>" class="form-control"></td>
                                                                    <td><input type="text" id="m5" value="<?php echo $data4['m5']; ?>" class="form-control"></td>
                                                                    <td><input type="text" id="ss5" value="<?php echo $data4['ss5']; ?>" class="form-control"></td>

                                                                    <td><input type="text" id="mm5" value="<?php echo $data4['mm5']; ?>" class="form-control"></td>
                                                                </tr>

                                                                <tr>
                                                                    <td><input type="text" id="s6" value="<?php echo $data4['s6']; ?>" class="form-control"></td>
                                                                    <td><input type="text" id="m6" value="<?php echo $data4['m6']; ?>" class="form-control"></td>
                                                                    <td><input type="text" id="ss6" value="<?php echo $data4['ss6']; ?>" class="form-control"></td>

                                                                    <td><input type="text" id="mm6" value="<?php echo $data4['mm6']; ?>" class="form-control"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td><button type="button" onclick="markEdit()" class="btn btn-success" style="float-right">Submit</button></td>
                                                                    <td></td></tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="document" role="tabpanel"
                                                     aria-labelledby="document-tab">
                                                    <div class="dataWrap remarkHistoryWrap">
                                                        <ul>
                                                            <?php
                                                            $reQry3 = mysqli_query($link, "SELECT * FROM document_tbl WHERE personalId = '" . $_REQUEST['id'] . "' AND isActive = '1'");
                                                            $r3 = mysqli_fetch_array($reQry3);
                                                            
                                                            $path = "../uploads/doc/".$r3['sslcMarksheet'];
                                                            $extension1 = pathinfo($path, PATHINFO_EXTENSION);
                                                            $pathelev = "../uploads/doc/".$r3['elevenMarksheet'];
                                                            $extension2 = pathinfo($pathelev, PATHINFO_EXTENSION);
                                                            $pathhsc = "../uploads/doc/".$r3['hscMarksheet'];
                                                            $extension3 = pathinfo($pathhsc, PATHINFO_EXTENSION);
                                                            $pathaad = "../uploads/doc/".$r3['aadharCard'];
                                                            $extension4 = pathinfo($pathaad, PATHINFO_EXTENSION);
                                                            $pathaadback = "../uploads/doc/".$r3['aadharCardBack'];
                                                            $extension5 = pathinfo($pathaadback, PATHINFO_EXTENSION);
                                                            $pathneet = "../uploads/doc/".$r3['neetMarksheet'];
                                                            $extension6 = pathinfo($pathneet, PATHINFO_EXTENSION);
                                                            $pathugMark = "../uploads/doc/".$r3['ugMarksheet'];
                                                            $extension7 = pathinfo($pathugMark, PATHINFO_EXTENSION);
                                                            $pathtc = "../uploads/doc/".$r3['tc'];
                                                            $extension8 = pathinfo($pathtc, PATHINFO_EXTENSION);
                                                            $pathmigration = "../uploads/doc/".$r3['migration'];
                                                            $extension9 = pathinfo($pathmigration, PATHINFO_EXTENSION);
                                                            $pathbirth = "../uploads/doc/".$r3['birth'];
                                                            $extension10 = pathinfo($pathbirth, PATHINFO_EXTENSION);
                                                            $pathcomm = "../uploads/doc/".$r3['communication'];
                                                            $extension11 = pathinfo($pathcomm, PATHINFO_EXTENSION);
                                                            $pathpass = "../uploads/doc/".$r3['passport'];
                                                            $extension12 = pathinfo($pathpass, PATHINFO_EXTENSION);
                                                            $pathpoth = "../uploads/doc/".$r3['photo'];
                                                            $extension13 = pathinfo($pathpoth, PATHINFO_EXTENSION);
                                                            
                                                            
                                                                ?>
                                                            <li>
                                                                <div class="dataInfo1">
                                                                    <label>SSLC Mark Sheet</label>
                                                                </div>
                                                                <div class="dataInfo1">
                                                                    <!--<a href="#" title="view" data-toggle="modal" data-target="#img1"  ><img src="../uploads/doc/<?php echo $r3['sslcMarksheet'];; ?>" height="70" width="60" /></a>-->
                                                                      <?php 
                                                                         if($extension1 == 'pdf'){
                                                                                $image = "../uploads/doc/Adobe1.png";
                                                                        ?>      <a href="../uploads/doc/<?php echo $r3['sslcMarksheet']; ?>" target="_blank" title="view" ><img src="<?php echo $image; ?>" height="70" w../uploads/doc/<?php echo $r3['sslcMarksheet']; ?>idth="60" /></a>
                                                                        <?php  }else{
                                                                            $image ="../uploads/doc/".$r3['sslcMarksheet'];
                                                                        ?>       <a href="" target="_blank" title="view" data-toggle="modal" data-target="#img1"  ><img src="<?php echo $image; ?>" height="70" width="60" /></a>
                                                                        <?php } ?>
                                                           
                                                                 
                                                                    <div class="modal fade" id="img1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog modal-lg" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title" id="exampleModalLabel">SSLC Marksheet</h5>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <img src="../uploads/doc/<?php echo $r3['sslcMarksheet']; ?>" width="100%"/>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="dataInfo1">
                                                                    <a href="#" data-toggle="modal" data-target="#editImg1" class="btn btn-sm btn-success shadow-sm" > Change </a>
                                                                    <div class="modal fade" id="editImg1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog modal-lg" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title" id="exampleModalLabel">Change SSLC Marksheet</h5>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <input type="file" id="sslcMarksheet" class="form-control">
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                    <button type="button" onclick="img1()" class="btn btn-primary" data-dismiss="modal">Upload</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </li>

                                                            <li>
                                                                <div class="dataInfo1">
                                                                    <label>11th Std.Mark Sheet</label>
                                                                </div>
                                                                <div class="dataInfo1">
                                                                    <?php 
                                                                         if($extension2 == 'pdf'){
                                                                                $image = "../uploads/doc/Adobe1.png";
                                                                        ?>      <a href="../uploads/doc/<?php echo $r3['elevenMarksheet']; ?>" target="_blank" title="view" ><img src="<?php echo $image; ?>" height="70" w../uploads/doc/<?php echo $r3['sslcMarksheet']; ?>idth="60" /></a>
                                                                        <?php  }else{
                                                                            $image ="../uploads/doc/".$r3['elevenMarksheet'];
                                                                        ?>       <a href="" target="_blank" title="view" data-toggle="modal" data-target="#img1"  ><img src="<?php echo $image; ?>" height="70" width="60" /></a>
                                                                        <?php } ?>
                                                           
                                                                 
                                                                    <div class="modal fade" id="img2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog modal-lg" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title" id="exampleModalLabel">11th STD Marksheet</h5>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <img src="../uploads/doc/<?php echo $r3['elevenMarksheet']; ?>" width="100%"/>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="dataInfo1">
                                                                    <a href="#" data-toggle="modal" data-target="#editImg2" class="btn btn-sm btn-success shadow-sm" > Change </a>
                                                                    <div class="modal fade" id="editImg2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog modal-lg" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title" id="exampleModalLabel">Change 11th Marksheet</h5>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <input type="file" id="elevenMarksheet" class="form-control">
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                    <button type="button" onclick="img2()" class="btn btn-primary" data-dismiss="modal">Upload</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </li>
                                                            <li>
                                                                <div class="dataInfo1">
                                                                    <label>Hsc Mark Sheet</label>
                                                                </div>
                                                                <div class="dataInfo1">
                                                                    <?php 
                                                                         if($extension3 == 'pdf'){
                                                                                $image = "../uploads/doc/Adobe1.png";
                                                                        ?>      <a href="../uploads/doc/<?php echo $r3['hscMarksheet']; ?>" target="_blank" title="view" ><img src="<?php echo $image; ?>" height="70" w../uploads/doc/<?php echo $r3['sslcMarksheet']; ?>idth="60" /></a>
                                                                        <?php  }else{
                                                                            $image ="../uploads/doc/".$r3['hscMarksheet'];
                                                                        ?>       <a href="" target="_blank" title="view" data-toggle="modal" data-target="#img1"  ><img src="<?php echo $image; ?>" height="70" width="60" /></a>
                                                                        <?php } ?>
                                                           
                                                                    <div class="modal fade" id="img3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog modal-lg" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title" id="exampleModalLabel">HSC Marksheet</h5>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <img src="../uploads/doc/<?php echo $r3['hscMarksheet']; ?>" width="100%"/>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="dataInfo1">
                                                                    <a href="#" data-toggle="modal" data-target="#editImg3" class="btn btn-sm btn-success shadow-sm" > Change </a>
                                                                    <div class="modal fade" id="editImg3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog modal-lg" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title" id="exampleModalLabel">Change HSC Marksheet</h5>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <input type="file" id="hscMarksheet" class="form-control">
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                    <button type="button" onclick="img3()" class="btn btn-primary" data-dismiss="modal">Upload</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="dataInfo1">
                                                                    <label>Neet Mark Sheet</label>
                                                                </div>
                                                                <div class="dataInfo1">
                                                                    <?php 
                                                                         if($extension6 == 'pdf'){
                                                                                $image = "../uploads/doc/Adobe1.png";
                                                                        ?>      <a href="../uploads/doc/<?php echo $r3['neetMarksheet']; ?>" target="_blank" title="view" ><img src="<?php echo $image; ?>" height="70" w../uploads/doc/<?php echo $r3['sslcMarksheet']; ?>idth="60" /></a>
                                                                        <?php  }else{
                                                                            $image ="../uploads/doc/".$r3['neetMarksheet'];
                                                                        ?>       <a href="" target="_blank" title="view" data-toggle="modal" data-target="#img1"  ><img src="<?php echo $image; ?>" height="70" width="60" /></a>
                                                                        <?php } ?>
                                                           
                                                                    <div class="modal fade" id="img4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog modal-lg" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title" id="exampleModalLabel">Neet Marksheet</h5>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <img src="../uploads/doc/<?php echo $r3['neetMarksheet']; ?>" width="100%"/>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="dataInfo1">
                                                                    <a href="#" data-toggle="modal" data-target="#editImg4" class="btn btn-sm btn-success shadow-sm" > Change </a>
                                                                    <div class="modal fade" id="editImg4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog modal-lg" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title" id="exampleModalLabel">Change Neet Marksheet</h5>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <input type="file" id="neetMarksheet" class="form-control">
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                    <button type="button" onclick="img4()" class="btn btn-primary" data-dismiss="modal">Upload</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="dataInfo1">
                                                                    <label>UG Mark Sheet</label>
                                                                </div>
                                                                <div class="dataInfo1">
                                                                     <?php 
                                                                         if($extension7 == 'pdf'){
                                                                                $image = "../uploads/doc/Adobe1.png";
                                                                        ?>      <a href="../uploads/doc/<?php echo $r3['ugMarksheet']; ?>" target="_blank" title="view" ><img src="<?php echo $image; ?>" height="70" w../uploads/doc/<?php echo $r3['sslcMarksheet']; ?>idth="60" /></a>
                                                                        <?php  }else{
                                                                            $image ="../uploads/doc/".$r3['ugMarksheet'];
                                                                        ?>       <a href="" target="_blank" title="view" data-toggle="modal" data-target="#img1"  ><img src="<?php echo $image; ?>" height="70" width="60" /></a>
                                                                        <?php } ?>
                                                           
                                                                   
                                                                    <div class="modal fade" id="img5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog modal-lg" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title" id="exampleModalLabel">UG Marksheet</h5>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <img src="../uploads/doc/<?php echo $r3['ugMarksheet']; ?>" width="100%"/>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="dataInfo1">
                                                                    <a href="#" data-toggle="modal" data-target="#editImg5" class="btn btn-sm btn-success shadow-sm" > Change </a>
                                                                    <div class="modal fade" id="editImg5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog modal-lg" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title" id="exampleModalLabel">Change UG Marksheet</h5>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <input type="file" id="ugMarksheet" class="form-control">
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                    <button type="button" onclick="img5()" class="btn btn-primary" data-dismiss="modal">Upload</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="dataInfo1">
                                                                    <label>TC</label>
                                                                </div>
                                                                <div class="dataInfo1">
                                                                     <?php 
                                                                         if($extension8 == 'pdf'){
                                                                                $image = "../uploads/doc/Adobe1.png";
                                                                        ?>      <a href="../uploads/doc/<?php echo $r3['tc']; ?>" target="_blank" title="view" ><img src="<?php echo $image; ?>" height="70" w../uploads/doc/<?php echo $r3['sslcMarksheet']; ?>idth="60" /></a>
                                                                        <?php  }else{
                                                                            $image ="../uploads/doc/".$r3['tc'];
                                                                        ?>       <a href="" target="_blank" title="view" data-toggle="modal" data-target="#img1"  ><img src="<?php echo $image; ?>" height="70" width="60" /></a>
                                                                        <?php } ?>
                                                           
                                                                    <div class="modal fade" id="img6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog modal-lg" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title" id="exampleModalLabel">TC</h5>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <img src="../uploads/doc/<?php echo $r3['tc']; ?>" width="100%"/>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="dataInfo1">
                                                                    <a href="#" data-toggle="modal" data-target="#editImg6" class="btn btn-sm btn-success shadow-sm" > Change </a>
                                                                    <div class="modal fade" id="editImg6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog modal-lg" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title" id="exampleModalLabel">Change TC</h5>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <input type="file" id="tc" class="form-control">
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                    <button type="button" onclick="img6()" class="btn btn-primary" data-dismiss="modal">Upload</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="dataInfo1">
                                                                    <label>Migration</label>
                                                                </div>
                                                                <div class="dataInfo1">
                                                                      <?php 
                                                                         if($extension9 == 'pdf'){
                                                                                $image = "../uploads/doc/Adobe1.png";
                                                                        ?>      <a href="../uploads/doc/<?php echo $r3['migration']; ?>" target="_blank" title="view" ><img src="<?php echo $image; ?>" height="70" w../uploads/doc/<?php echo $r3['sslcMarksheet']; ?>idth="60" /></a>
                                                                        <?php  }else{
                                                                            $image ="../uploads/doc/".$r3['migration'];
                                                                        ?>       <a href="" target="_blank" title="view" data-toggle="modal" data-target="#img1"  ><img src="<?php echo $image; ?>" height="70" width="60" /></a>
                                                                        <?php } ?>
                                                           
                                                                    <div class="modal fade" id="img7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog modal-lg" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title" id="exampleModalLabel">Migration</h5>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <img src="../uploads/doc/<?php echo $r3['migration']; ?>" width="100%"/>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="dataInfo1">
                                                                    <a href="#" data-toggle="modal" data-target="#editImg7" class="btn btn-sm btn-success shadow-sm" > Change </a>
                                                                    <div class="modal fade" id="editImg7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog modal-lg" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title" id="exampleModalLabel">Change Migration Certificate</h5>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <input type="file" id="migration" class="form-control">
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                    <button type="button" onclick="img7()" class="btn btn-primary" data-dismiss="modal">Upload</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="dataInfo1">
                                                                    <label>Birth Certificate</label>
                                                                </div>
                                                                <div class="dataInfo1">
                                                                    <?php 
                                                                         if($extension10 == 'pdf'){
                                                                                $image = "../uploads/doc/Adobe1.png";
                                                                        ?>      <a href="../uploads/doc/<?php echo $r3['birth']; ?>" target="_blank" title="view" ><img src="<?php echo $image; ?>" height="70" w../uploads/doc/<?php echo $r3['sslcMarksheet']; ?>idth="60" /></a>
                                                                        <?php  }else{
                                                                            $image ="../uploads/doc/".$r3['birth'];
                                                                        ?>       <a href="" target="_blank" title="view" data-toggle="modal" data-target="#img1"  ><img src="<?php echo $image; ?>" height="70" width="60" /></a>
                                                                        <?php } ?>
                                                           
                                                                    <div class="modal fade" id="img8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog modal-lg" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title" id="exampleModalLabel">Birth Certificate</h5>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <img src="../uploads/doc/<?php echo $r3['birth']; ?>" width="100%"/>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="dataInfo1">
                                                                    <a href="#" data-toggle="modal" data-target="#editImg8" class="btn btn-sm btn-success shadow-sm" > Change </a>
                                                                    <div class="modal fade" id="editImg8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog modal-lg" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title" id="exampleModalLabel">Change Birth Certificate</h5>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <input type="file" id="birth" class="form-control">
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                    <button type="button" onclick="img8()" class="btn btn-primary" data-dismiss="modal">Upload</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="dataInfo1">
                                                                    <label>Communication Certificate</label>
                                                                </div>
                                                                <div class="dataInfo1">
                                                                    <?php 
                                                                         if($extension11 == 'pdf'){
                                                                                $image = "../uploads/doc/Adobe1.png";
                                                                        ?>      <a href="../uploads/doc/<?php echo $r3['communication']; ?>" target="_blank" title="view" ><img src="<?php echo $image; ?>" height="70" w../uploads/doc/<?php echo $r3['sslcMarksheet']; ?>idth="60" /></a>
                                                                        <?php  }else{
                                                                            $image ="../uploads/doc/".$r3['communication'];
                                                                        ?>       <a href="" target="_blank" title="view" data-toggle="modal" data-target="#img1"  ><img src="<?php echo $image; ?>" height="70" width="60" /></a>
                                                                        <?php } ?>
                                                           
                                                                    <div class="modal fade" id="img9" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog modal-lg" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title" id="exampleModalLabel">Communication Certificate</h5>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <img src="../uploads/doc/<?php echo $r3['communication']; ?>" width="100%"/>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="dataInfo1">
                                                                    <a href="#" data-toggle="modal" data-target="#editImg9" class="btn btn-sm btn-success shadow-sm" > Change </a>
                                                                    <div class="modal fade" id="editImg9" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog modal-lg" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title" id="exampleModalLabel">Change Communication</h5>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <input type="file" id="communication" class="form-control">
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                    <button type="button" onclick="img9()" class="btn btn-primary" data-dismiss="modal">Upload</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="dataInfo1">
                                                                    <label>Passport</label>
                                                                </div>
                                                                <div class="dataInfo1">
                                                                     <?php 
                                                                         if($extension12 == 'pdf'){
                                                                                $image = "../uploads/doc/Adobe1.png";
                                                                        ?>      <a href="../uploads/doc/<?php echo $r3['passport']; ?>" target="_blank" title="view" ><img src="<?php echo $image; ?>" height="70" w../uploads/doc/<?php echo $r3['sslcMarksheet']; ?>idth="60" /></a>
                                                                        <?php  }else{
                                                                            $image ="../uploads/doc/".$r3['passport'];
                                                                        ?>       <a href="" target="_blank" title="view" data-toggle="modal" data-target="#img1"  ><img src="<?php echo $image; ?>" height="70" width="60" /></a>
                                                                        <?php } ?>
                                                           
                                                                   
                                                                    <div class="modal fade" id="img10" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog modal-lg" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title" id="exampleModalLabel">Passport</h5>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <img src="../uploads/doc/<?php echo $r3['passport']; ?>" width="100%"/>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="dataInfo1">
                                                                    <a href="#" data-toggle="modal" data-target="#editImg10" class="btn btn-sm btn-success shadow-sm" > Change </a>
                                                                    <div class="modal fade" id="editImg10" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog modal-lg" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title" id="exampleModalLabel">Change Passport</h5>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <input type="file" id="passport" class="form-control">
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                    <button type="button" onclick="img10()" class="btn btn-primary" data-dismiss="modal">Upload</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="dataInfo1">
                                                                    <label>Photo</label>
                                                                </div>
                                                                <div class="dataInfo1">
                                                                    <?php 
                                                                         if($extension13 == 'pdf'){
                                                                                $image = "../uploads/doc/Adobe1.png";
                                                                        ?>      <a href="../uploads/doc/<?php echo $r3['photo']; ?>" target="_blank" title="view" ><img src="<?php echo $image; ?>" height="70" w../uploads/doc/<?php echo $r3['sslcMarksheet']; ?>idth="60" /></a>
                                                                        <?php  }else{
                                                                            $image ="../uploads/doc/".$r3['photo'];
                                                                        ?>       <a href="" target="_blank" title="view" data-toggle="modal" data-target="#img1"  ><img src="<?php echo $image; ?>" height="70" width="60" /></a>
                                                                        <?php } ?>
                                                           
                                                                    <div class="modal fade" id="img11" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog modal-lg" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title" id="exampleModalLabel">Photo</h5>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <img src="../uploads/doc/<?php echo $r3['photo']; ?>" width="100%"/>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="dataInfo1">
                                                                    <a href="#" data-toggle="modal" data-target="#editImg11" class="btn btn-sm btn-success shadow-sm" > Change </a>
                                                                    <div class="modal fade" id="editImg11" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog modal-lg" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title" id="exampleModalLabel">Change Photo</h5>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <input type="file" id="photo" class="form-control">
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                    <button type="button" onclick="img11()" class="btn btn-primary" data-dismiss="modal">Upload</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="dataInfo1">
                                                                    <label>Aadhar Card</label>
                                                                </div>
                                                                <div class="dataInfo1">
                                                                    <a href="#" title="view" data-toggle="modal" data-target="#img12"  ><img src="../uploads/doc/<?php echo $r3['aadharCard']; ?>" height="70" width="60" /></a>
                                                                    <div class="modal fade" id="img12" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog modal-lg" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title" id="exampleModalLabel">Aadhar Card</h5>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <img src="../uploads/doc/<?php echo $r3['aadharCard']; ?>" width="100%"/>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="dataInfo1">
                                                                    <a href="#" data-toggle="modal" data-target="#editImg12" class="btn btn-sm btn-success shadow-sm" > Change </a>
                                                                    <div class="modal fade" id="editImg12" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog modal-lg" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title" id="exampleModalLabel">Change Aadharcard</h5>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <input type="file" id="aadharCard" class="form-control">
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                    <button type="button" onclick="img12()" class="btn btn-primary" data-dismiss="modal">Upload</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>

                                                            <li>
                                                                <div class="dataInfo1">
                                                                    <label>Aadhar Card Backside</label>
                                                                </div>
                                                                <div class="dataInfo1">
                                                                    <a href="#" title="view" data-toggle="modal" data-target="#img13"  ><img src="../uploads/doc/<?php echo $r3['aadharCardBack']; ?>" height="70" width="60" /></a>
                                                                    <div class="modal fade" id="img13" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog modal-lg" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title" id="exampleModalLabel">Aadhar Card Backside</h5>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <img src="../uploads/doc/<?php echo $r3['aadharCardBack']; ?>" width="100%"/>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="dataInfo1">
                                                                    <a href="#" data-toggle="modal" data-target="#editImg13" class="btn btn-sm btn-success shadow-sm" > Change </a>
                                                                    <div class="modal fade" id="editImg13" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog modal-lg" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title" id="exampleModalLabel">Change Aadharcard Backside</h5>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <input type="file" id="aadharCardBack" class="form-control">
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                    <button type="button" onclick="img13()" class="btn btn-primary" data-dismiss="modal">Upload</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="remark" role="tabpanel"
                                                     aria-labelledby="remark-tab">
                                                    <div class="dataWrap remarkHistoryWrap">
                                                        <div class="table-responsive">
                                                            <table>
                                                                <thead>
                                                                    <tr>
                                                                        <th>Date</th>
                                                                        <th>Remark</th>
                                                                        <th>Staff</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
<?php
$reQry1 = mysqli_query($link, "SELECT * FROM remark_tbl WHERE personalId = '" . $_REQUEST['id'] . "' AND isActive = '1'");
while ($r = mysqli_fetch_array($reQry1)) {
    ?>
                                                                        <tr>
                                                                            <td><?php echo $r['datee']; ?></td>
                                                                            <td><?php echo $r['remark']; ?></td>
                                                                            <td><?php echo $r['staff']; ?></td>
                                                                        </tr>
<?php } ?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
<?php
include './footer.php';
?>
            </div>
        </div>
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>


        <script src="../assets/js/bootstrap-select.min.js"></script>
        <script src="../assets/js/main.js"></script>

<!--<script src="vendor/jquery/jquery.min.js"></script>-->
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
        <script src="myjs/studentListJs.js"></script>
        <script src="myjs/editFunctions.js"></script>
        <script src="js/main.js"></script>
        <script>
                                                                                                                                                                            $("#tile-1 .nav-tabs a").click(function () {
                                                                                                                                                                                var position = $(this).parent().position();
                                                                                                                                                                                var width = $(this).parent().width();
                                                                                                                                                                                $("#tile-1 .slider").css({"left": +position.left, "width": width});
                                                                                                                                                                            });
                                                                                                                                                                            var actWidth = $("#tile-1 .nav-tabs").find(".active").parent("li").width();
                                                                                                                                                                            var actPosition = $("#tile-1 .nav-tabs .active").position();
                                                                                                                                                                            $("#tile-1 .slider").css({"left": +actPosition.left, "width": actWidth});
        </script>
        <script>
            $('.select2').select2();
        </script>
    </body>

</html>