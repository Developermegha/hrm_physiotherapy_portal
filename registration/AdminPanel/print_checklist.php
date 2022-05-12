<?php
include '../connection.php';
$link = connection();
?>
<html>
    <head>
        <style>
            body {
                color: #666;
                font: 14px/24px "Open Sans", "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", Sans-Serif;
            }
            table {
                border-collapse: separate;
                border-spacing: 0;
                width: 100%;
            }
            th,
            td {
                padding: 6px 15px;
            }
            th {
                background: #000000;
                color: #fff;
                text-align: left;
            }
        
        
            td {
                border-right: 1px solid #c6c9cc;
                border-bottom: 1px solid #c6c9cc;    color: #000;
              
              
               
            }
            input[type="checkbox" ] {
                color:#000;
                    float: left;
    margin-right: 5px;
            }

           
   
   
        </style>
    </head>
    <title>CheckList</title>
    <body onload="checkedCertificateList(<?php echo $_REQUEST['id']; ?>); checkedXeroxCertificateList(<?php echo $_REQUEST['id']; ?>);" style="    text-align: center;
    display: block;">
        
         <div role="article" aria-roledescription="email" lang="en" style="text-size-adjust:100%;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;background-color:#fff;">
    <table role="presentation" style="width:100%;border:none;border-spacing:0; border:0px;">
      <tr>
        <td align="center" style="padding:0; border:0px;">
          <!--[if mso]>
          <table role="presentation" align="center" style="width:600px;">
          <tr>
          <td>
          <![endif]-->
          <table role="presentation" style="width:94%;max-width:600px;border:none;border-spacing:0;text-align:left;font-family:Arial,sans-serif;font-size:16px;line-height:22px;color:#363636;">
            <tr>
              <td style="padding:0px;text-align:center;font-size:24px;font-weight:bold; border:none;">
                           <table border="0" style="width: 760px;    display: inline-table; ">

                <tr>
                    <td rowspan="3" style="width:30%;text-align:center; border:0px;"><img src="../img/logo.png" width="150px" height="150px"></td>
                    <td style="width:70%; font-size:23px;border:0px;letter-spacing: 3px;">Davao Medical School Foundation,Inc<sub style=" font-size:19px;"></sub></td>

                </tr>
                <tr>
                    <td style="width:70%;font-size:19px;border:0px;">DMSF Drive, Bajada,Davao City, Philippines.</td>


                </tr>
                <tr>
                    <td style="width:70%; text-align:center;font-size:30px; font-weight:bold;border:0px;">CHECKLIST</td>


                </tr>
            </table>

              </td>
            </tr>
            <tr>
              <td style="padding:0px;background-color:#ffffff; border:none;">
                
            <table class="table" style="margin-top:10px; width: 100%;    display: inline-table;border-left: 1px solid #929292;border-top: 1px solid #929292;">
                <?php
                $getPersonal = mysqli_query($link, "SELECT * FROM `personal_tbl` WHERE id ='" . $_REQUEST['id'] . "' AND isActive='1'");
                $dataPersonal = mysqli_fetch_array($getPersonal);
                ?>
                <tbody>

                    <tr >
                        <td style="width:30%;">Name of Student :</td>
                        <td style="width:70%;"><?php echo $dataPersonal['fName'] . "  " . $dataPersonal['mName'] . "  " . $dataPersonal['lName']; ?></td>

                    </tr>
                    <tr>
                        <td>Roll No :</td>
                        <td><?php echo $dataPersonal['RollNo']; ?></td>

                    </tr>
                    <tr>
                        <td>Admission Date :</td>
                        <td>&nbsp;</td>
                    </tr>

                </tbody>
            </table>
              </td>
            </tr>
            <tr>
              <td style="padding:0;font-size:24px;line-height:28px;font-weight:bold;  border:none;">
                     <table class="table" style="margin-top:10px; width: 100%;    display: inline-table; border-left: 1px solid #929292;">
                <thead>
                    <tr>
                        <th>SR.No</th>
                        <th>Particulars</th>
                        <th>Original Certificate</th>
                        <th>XEROX Copy</th>
                        <th>Student Sign</th>
                        
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td>1</td>
                        <td>Admission Form</td>
                        <td><input type="checkbox" class="orgCertificate" name="org[]" value="1/Admission Form" >
                         <?php
                            $getOriginal = mysqli_query($link, "SELECT * FROM `certificate_tbl` WHERE personalId ='" . $_REQUEST['id'] . "' AND original='1' AND particular='Admission Form'");
                            $dataOriginal = mysqli_fetch_array($getOriginal);
                            if($dataOriginal['dateTime']!=''){
                                echo $dataOriginal['dateTime'];
                            }
                            ?></td>
                        <td><input type="checkbox" class="copyCertificate" name="copy[]" value="1/Admission Form">
                         <?php
                            $getOriginal = mysqli_query($link, "SELECT * FROM `xerox_tbl` WHERE personalId ='" . $_REQUEST['id'] . "' AND copy='1' AND particular='Admission Form'");
                            $dataOriginal = mysqli_fetch_array($getOriginal);
                            if($dataOriginal['dateTime']!=''){
                                echo $dataOriginal['dateTime'];
                            }
                            ?>
                        </td>
                        <td>&nbsp;</td>
                        
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Passport(ORI)</td>
                        <td><input type="checkbox" class="orgCertificate" name="org[]" value="1/Passport" readonly>
                        <?php
                            $getOriginalpa = mysqli_query($link, "SELECT * FROM `certificate_tbl` WHERE personalId ='" . $_REQUEST['id'] . "' AND original='1' AND particular='Passport'");
                            $dataOriginalpa = mysqli_fetch_array($getOriginalpa);
                            if($dataOriginalpa['dateTime']!=''){
                                echo $dataOriginalpa['dateTime'];
                            }
                            ?>
                        </td>
                        <td><input type="checkbox" class="copyCertificate" name="copy[]" value="1/Passport">
                         <?php
                            $getOriginal = mysqli_query($link, "SELECT * FROM `xerox_tbl` WHERE personalId ='" . $_REQUEST['id'] . "' AND copy='1' AND particular='Passport'");
                            $dataOriginal = mysqli_fetch_array($getOriginal);
                            if($dataOriginal['dateTime']!=''){
                                echo $dataOriginal['dateTime'];
                            }
                            ?></td>
                        <td>&nbsp;</td>
                       
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>10th Mark theet</td>
                        <td><input type="checkbox" class="orgCertificate" name="org[]" value="1/10th Mark theet">
                         <?php
                            $getOriginal10m = mysqli_query($link, "SELECT * FROM `certificate_tbl` WHERE personalId ='" . $_REQUEST['id'] . "' AND original='1' AND particular='10th Mark theet'");
                            $dataOriginal10m = mysqli_fetch_array($getOriginal10m);
                            if($dataOriginal10m['dateTime']!=''){
                                echo $dataOriginal10m['dateTime'];
                            }
                            ?></td>
                        <td><input type="checkbox" class="copyCertificate" name="copy[]" value="1/10th Mark theet">
                         <?php
                            $getOriginal = mysqli_query($link, "SELECT * FROM `xerox_tbl` WHERE personalId ='" . $_REQUEST['id'] . "' AND copy='1' AND particular='10th Mark theet'");
                            $dataOriginal = mysqli_fetch_array($getOriginal);
                            if($dataOriginal['dateTime']!=''){
                                echo $dataOriginal['dateTime'];
                            }
                            ?></td>
                        <td>&nbsp;</td>
                       
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>11th Mark Sheet</td>
                        <td><input type="checkbox" class="orgCertificate" name="org[]" value="1/11th Mark Sheet">
                         <?php
                            $getOriginal11m = mysqli_query($link, "SELECT * FROM `certificate_tbl` WHERE personalId ='" . $_REQUEST['id'] . "' AND original='1' AND particular='11th Mark Sheet'");
                            $dataOriginal11m = mysqli_fetch_array($getOriginal11m);
                            if($dataOriginal11m['dateTime']!=''){
                                echo $dataOriginal11m['dateTime'];
                            }
                            ?></td>
                        <td><input type="checkbox" class="copyCertificate" name="copy[]" value="1/11th Mark Sheet">
                         <?php
                            $getOriginal = mysqli_query($link, "SELECT * FROM `xerox_tbl` WHERE personalId ='" . $_REQUEST['id'] . "' AND copy='1' AND particular='10th Mark theet'");
                            $dataOriginal = mysqli_fetch_array($getOriginal);
                            if($dataOriginal['dateTime']!=''){
                                echo $dataOriginal['dateTime'];
                            }
                            ?></td>
                        <td>&nbsp;</td>
                        
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>12th Mark Sheet</td>
                        <td><input type="checkbox" class="orgCertificate" name="org[]" value="1/12th Mark Sheet">
                        <?php
                            $getOriginal2m = mysqli_query($link, "SELECT * FROM `certificate_tbl` WHERE personalId ='" . $_REQUEST['id'] . "' AND original='1' AND particular='12th Mark Sheet'");
                            $dataOriginal2m = mysqli_fetch_array($getOriginal2m);
                            if($dataOriginal2m['dateTime']!=''){
                                echo $dataOriginal2m['dateTime'];
                            }
                            ?></td>
                        <td><input type="checkbox" class="copyCertificate" name="copy[]" value="1/12th Mark Sheet">
                         <?php
                            $getOriginal = mysqli_query($link, "SELECT * FROM `xerox_tbl` WHERE personalId ='" . $_REQUEST['id'] . "' AND copy='1' AND particular='12th Mark Sheet'");
                            $dataOriginal = mysqli_fetch_array($getOriginal);
                            if($dataOriginal['dateTime']!=''){
                                echo $dataOriginal['dateTime'];
                            }
                            ?></td>
                        <td>&nbsp;</td>
                        
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>10th Passing Certificate</td>
                        <td><input type="checkbox" class="orgCertificate" name="org[]" value="1/10th Passing Certificate">
                         <?php
                            $getOriginal10 = mysqli_query($link, "SELECT * FROM `certificate_tbl` WHERE personalId ='" . $_REQUEST['id'] . "' AND original='1' AND particular='10th Passing Certificate'");
                            $dataOriginal10 = mysqli_fetch_array($getOriginal10);
                            if($dataOriginal10['dateTime']!=''){
                                echo $dataOriginal10['dateTime'];
                            }
                            ?></td>
                        <td><input type="checkbox" class="copyCertificate" name="copy[]" value="1/10th Passing Certificate">
                         <?php
                            $getOriginal = mysqli_query($link, "SELECT * FROM `xerox_tbl` WHERE personalId ='" . $_REQUEST['id'] . "' AND copy='1' AND particular='10th Passing Certificate'");
                            $dataOriginal = mysqli_fetch_array($getOriginal);
                            if($dataOriginal['dateTime']!=''){
                                echo $dataOriginal['dateTime'];
                            }
                            ?></td>
                        <td>&nbsp;</td>
                        
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>12th Passing Certificate</td>
                        <td><input type="checkbox" class="orgCertificate" name="org[]" value="1/12th Passing Certificate">
                          <?php
                            $getOriginal12 = mysqli_query($link, "SELECT * FROM `certificate_tbl` WHERE personalId ='" . $_REQUEST['id'] . "' AND original='1' AND particular='12th Passing Certificate'");
                            $dataOriginal12 = mysqli_fetch_array($getOriginal12);
                            if($dataOriginal12['dateTime']!=''){
                                echo $dataOriginal12['dateTime'];
                            }
                            ?></td>
                        <td><input type="checkbox" class="copyCertificate" name="copy[]" value="1/12th Passing Certificate">
                         <?php
                            $getOriginal = mysqli_query($link, "SELECT * FROM `xerox_tbl` WHERE personalId ='" . $_REQUEST['id'] . "' AND copy='1' AND particular='12th Passing Certificate'");
                            $dataOriginal = mysqli_fetch_array($getOriginal);
                            if($dataOriginal['dateTime']!=''){
                                echo $dataOriginal['dateTime'];
                            }
                            ?></td>
                        <td>&nbsp;</td>
                        
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>Transfer Certificate or L.C</td>
                        <td><input type="checkbox" class="orgCertificate" name="org[]" value="1/Transfer Certificate or L.C">
                         <?php
                            $getOriginalt = mysqli_query($link, "SELECT * FROM `certificate_tbl` WHERE personalId ='" . $_REQUEST['id'] . "' AND original='1' AND particular='Transfer Certificate or L.C'");
                            $dataOriginalt = mysqli_fetch_array($getOriginalt);
                            if($dataOriginalt['dateTime']!=''){
                                echo $dataOriginalt['dateTime'];
                            }
                            ?></td>
                        <td><input type="checkbox" class="copyCertificate" name="copy[]" value="1/Transfer Certificate or L.C">
                         <?php
                            $getOriginal = mysqli_query($link, "SELECT * FROM `xerox_tbl` WHERE personalId ='" . $_REQUEST['id'] . "' AND copy='1' AND particular='Transfer Certificate or L.C'");
                            $dataOriginal = mysqli_fetch_array($getOriginal);
                            if($dataOriginal['dateTime']!=''){
                                echo $dataOriginal['dateTime'];
                            }
                            ?></td>
                        <td>&nbsp;</td>
                      
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>Community Certificate</td>
                        <td><input type="checkbox" class="orgCertificate" name="org[]" value="1/Community Certificate">
                        <?php
                            $getOriginalc = mysqli_query($link, "SELECT * FROM `certificate_tbl` WHERE personalId ='" . $_REQUEST['id'] . "' AND original='1' AND particular='Community Certificate'");
                            $dataOriginalc = mysqli_fetch_array($getOriginalc);
                            if($dataOriginalc['dateTime']!=''){
                                echo $dataOriginalc['dateTime'];
                            }
                            ?></td>
                        <td><input type="checkbox" class="copyCertificate" name="copy[]" value="1/Community Certificate">
                        <?php
                            $getOriginal = mysqli_query($link, "SELECT * FROM `xerox_tbl` WHERE personalId ='" . $_REQUEST['id'] . "' AND copy='1' AND particular='Community Certificate'");
                            $dataOriginal = mysqli_fetch_array($getOriginal);
                            if($dataOriginal['dateTime']!=''){
                                echo $dataOriginal['dateTime'];
                            }
                            ?></td>
                        <td>&nbsp;</td>
                        
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>Birth Certificate</td>
                        <td><input type="checkbox" class="orgCertificate" name="org[]" value="1/Birth Certificate">
                         <?php
                            $getOriginalb = mysqli_query($link, "SELECT * FROM `certificate_tbl` WHERE personalId ='" . $_REQUEST['id'] . "' AND original='1' AND particular='Birth Certificate'");
                            $dataOriginalb = mysqli_fetch_array($getOriginalb);
                            if($dataOriginalb['dateTime']!=''){
                                echo $dataOriginalb['dateTime'];
                            }
                            ?></td>
                        <td><input type="checkbox" class="copyCertificate" name="copy[]" value="1/Birth Certificate">
                        <?php
                            $getOriginal = mysqli_query($link, "SELECT * FROM `xerox_tbl` WHERE personalId ='" . $_REQUEST['id'] . "' AND copy='1' AND particular='Birth Certificate'");
                            $dataOriginal = mysqli_fetch_array($getOriginal);
                            if($dataOriginal['dateTime']!=''){
                                echo $dataOriginal['dateTime'];
                            }
                            ?></td>
                        <td>&nbsp;</td>
                       
                    </tr>
                    <tr>
                        <td>11</td>
                        <td>Migration Certificate</td>
                        <td><input type="checkbox" class="orgCertificate" name="org[]" value="1/Migration Certificate">
                        <?php
                            $getOriginalm = mysqli_query($link, "SELECT * FROM `certificate_tbl` WHERE personalId ='" . $_REQUEST['id'] . "' AND original='1' AND particular='Migration Certificate'");
                            $dataOriginalm = mysqli_fetch_array($getOriginalm);
                            if($dataOriginalm['dateTime']!=''){
                                echo $dataOriginalm['dateTime'];
                            }
                            ?></td>
                        <td><input type="checkbox" class="copyCertificate" name="copy[]" value="1/Migration Certificate">
                        <?php
                            $getOriginal = mysqli_query($link, "SELECT * FROM `xerox_tbl` WHERE personalId ='" . $_REQUEST['id'] . "' AND copy='1' AND particular='Migration Certificate'");
                            $dataOriginal = mysqli_fetch_array($getOriginal);
                            if($dataOriginal['dateTime']!=''){
                                echo $dataOriginal['dateTime'];
                            }
                            ?></td>
                        <td>&nbsp;</td>
                        
                    </tr>
                    <tr>
                        <td>12</td>
                        <td>Recent Photograph(10 Copies)</td>
                        <td><input type="checkbox" class="orgCertificate" name="org[]" value="1/Recent Photograph(10 Copies)">
                        <?php
                            $getOriginalr = mysqli_query($link, "SELECT * FROM `certificate_tbl` WHERE personalId ='" . $_REQUEST['id'] . "' AND original='1' AND particular='Recent Photograph(10 Copies)'");
                            $dataOriginalr = mysqli_fetch_array($getOriginalr);
                            if($dataOriginalr['dateTime']!=''){
                                echo $dataOriginalr['dateTime'];
                            }
                            ?></td>
                        <td><input type="checkbox" class="copyCertificate" name="copy[]" value="1/Recent Photograph(10 Copies)">
                        <?php
                            $getOriginal = mysqli_query($link, "SELECT * FROM `xerox_tbl` WHERE personalId ='" . $_REQUEST['id'] . "' AND copy='1' AND particular='Recent Photograph(10 Copies)'");
                            $dataOriginal = mysqli_fetch_array($getOriginal);
                            if($dataOriginal['dateTime']!=''){
                                echo $dataOriginal['dateTime'];
                            }
                            ?></td>
                        <td>&nbsp;</td>
                       
                    </tr>
                    <tr>
                        <td>13</td>
                        <td>NEET Admit Card</td>
                        <td><input type="checkbox" class="orgCertificate" name="org[]" value="1/NEET Admit Card">
                         <?php
                            $getOriginalne = mysqli_query($link, "SELECT * FROM `certificate_tbl` WHERE personalId ='" . $_REQUEST['id'] . "' AND original='1' AND particular='NEET Admit Card'");
                            $dataOriginalne = mysqli_fetch_array($getOriginalne);
                            if($dataOriginalne['dateTime']!=''){
                                echo $dataOriginalne['dateTime'];
                            }
                            ?></td>
                        <td><input type="checkbox" class="copyCertificate" name="copy[]" value="1/NEET Admit Card">
                        <?php
                            $getOriginal = mysqli_query($link, "SELECT * FROM `xerox_tbl` WHERE personalId ='" . $_REQUEST['id'] . "' AND copy='1' AND particular='NEET Admit Card'");
                            $dataOriginal = mysqli_fetch_array($getOriginal);
                            if($dataOriginal['dateTime']!=''){
                                echo $dataOriginal['dateTime'];
                            }
                            ?></td>
                        <td>&nbsp;</td>
                        
                    </tr>
                    <tr>
                        <td>14</td>
                        <td>NEET Score Card</td>
                        <td><input type="checkbox" class="orgCertificate" name="org[]" value="1/NEET Score Card">
                         <?php
                            $getOriginaln = mysqli_query($link, "SELECT * FROM `certificate_tbl` WHERE personalId ='" . $_REQUEST['id'] . "' AND original='1' AND particular='NEET Score Card'");
                            $dataOriginaln = mysqli_fetch_array($getOriginaln);
                            if($dataOriginaln['dateTime']!=''){
                                echo $dataOriginaln['dateTime'];
                            }
                            ?></td>
                        <td><input type="checkbox" class="copyCertificate" name="copy[]" value="1/NEET Score Card">
                        <?php
                            $getOriginal = mysqli_query($link, "SELECT * FROM `xerox_tbl` WHERE personalId ='" . $_REQUEST['id'] . "' AND copy='1' AND particular='NEET Score Card'");
                            $dataOriginal = mysqli_fetch_array($getOriginal);
                            if($dataOriginal['dateTime']!=''){
                                echo $dataOriginal['dateTime'];
                            }
                            ?></td>
                        <td>&nbsp;</td>
                        
                    </tr>
                    <tr>
                        <td>15</td>
                        <td>Aadhar Card</td>
                        <td><input type="checkbox" class="orgCertificate" name="org[]" value="1/Aadhar Card">
                         <?php
                            $getOriginala = mysqli_query($link, "SELECT * FROM `certificate_tbl` WHERE personalId ='" . $_REQUEST['id'] . "' AND original='1' AND particular='Aadhar Card'");
                            $dataOriginala = mysqli_fetch_array($getOriginala);
                            if($dataOriginala['dateTime']!=''){
                                echo $dataOriginala['dateTime'];
                            }
                            ?></td>
                        <td><input type="checkbox" class="copyCertificate" name="copy[]" value="1/Aadhar Card">
                        <?php
                            $getOriginal = mysqli_query($link, "SELECT * FROM `xerox_tbl` WHERE personalId ='" . $_REQUEST['id'] . "' AND copy='1' AND particular='Aadhar Card'");
                            $dataOriginal = mysqli_fetch_array($getOriginal);
                            if($dataOriginal['dateTime']!=''){
                                echo $dataOriginal['dateTime'];
                            }
                            ?></td>
                        <td>&nbsp;</td>
                        
                    </tr>
                    <tr>
                        <td>16</td>
                        <td>PAN Card(For Student)</td>
                        <td><input type="checkbox" class="orgCertificate" name="org[]" value="1/PAN Card(For Student)">
                         <?php
                            $getOriginalpa = mysqli_query($link, "SELECT * FROM `certificate_tbl` WHERE personalId ='" . $_REQUEST['id'] . "' AND original='1' AND particular='PAN Card(For Student)'");
                            $dataOriginalpa = mysqli_fetch_array($getOriginalpa);
                            if($dataOriginal['dateTime']!=''){
                                echo $dataOriginalpa['dateTime'];
                            }
                            ?></td>
                        <td><input type="checkbox" class="copyCertificate" name="copy[]" value="1/PAN Card(For Student)">
                        <?php
                            $getOriginal = mysqli_query($link, "SELECT * FROM `xerox_tbl` WHERE personalId ='" . $_REQUEST['id'] . "' AND copy='1' AND particular='PAN Card(For Student)'");
                            $dataOriginal = mysqli_fetch_array($getOriginal);
                            if($dataOriginal['dateTime']!=''){
                                echo $dataOriginal['dateTime'];
                            }
                            ?></td>
                        <td>&nbsp;</td>
                       
                    </tr>

                </tbody>
            </table>
              </td>
            </tr>
            <tr>
              <td style="padding:0px;border:0px;font-size:0;background-color:#ffffff;border-bottom:1px solid #f0f0f5;border-color:rgba(201,201,207,.35);">
                    <table class="table" style="margin-top:10px; width: 100%;    display: inline-table;border-left: 1px solid #929292;">
                <thead>
                    <tr>
                        <th style="text-align:center;">Counter No:01 </br>Documents Verification</th>
                        <th style="text-align:center;">Counter No:02 </br>Finance</th>
                        <th style="text-align:center;">Counter No:03 </br>Doc &amp; Agreements</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>NAME : </td>
                        <td>NAME : </td>
                        <td>NAME : </td>
                    </tr>
                    <tr>
                        <td>SIGN : </td>
                        <td>SIGN : </td>
                        <td>SIGN : </td>

                    </tr>
                    <tr>
                        <td>PARENTS'S NAME &amp; SIGN : </td>
                        <td>DATE : </td>
                        <td>STUDENT'S SIGN</td>

                    </tr>



                </tbody>
            </table>
              </td>
            </tr>

          </table>
          <!--[if mso]>
          </td>
          </tr>
          </table>
          <![endif]-->
        </td>
      </tr>
    </table>
  </div>




     

           

            


</body>
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="myjs/studentListJs.js"></script>
<script src="js/main.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
        $(window).load(function () {
            $('.orgCertificate').attr('disabled', true);
            $('.copyCertificate').attr('disabled', true);
        });
</script>
</html>