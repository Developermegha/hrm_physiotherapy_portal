<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>APPLICATION FOR MEDICINE (M.D) 2020-2021</title>
<style>
    body{background-color:#f1f1f1;font-family:Helvetica, Arial, sans-serif;}
    .Wrapper{max-width:21cm;margin:0 auto;text-align:center;background-color:#ffffff;padding:0;}
    /* td{page-break-before:always;} 
    table,
    tr{page-break-inside:avoid; page-break-after:auto;}  */
    @media print{
        tbody{display:table-row-group;border:none!important;margin-bottom:0px!important;}
        tbody::after{content:''; display:block;page-break-after:always;page-break-inside:avoid;page-break-before:avoid;}
    }
    
</style>


<?php
        include 'connection.php';
        $link = connection();
        ?>
</head>
<body>
	<?php
                    
                    $fetchQry = mysqli_query($link, "SELECT * FROM `personal_tbl` WHERE id = '".$_REQUEST['id']."'");
                    $data = mysqli_fetch_array($fetchQry);
                    
                    $qry2 = mysqli_query($link,"SELECT * FROM information_tbl where personalID = '".$data['id']."'");
                    $data2 = mysqli_fetch_array($qry2);
                    
                    $qry3 = mysqli_query($link,"SELECT * FROM hostel_tbl WHERE personalId = '".$data['id']."'");
                    $data3 = mysqli_fetch_array($qry3);
                    
                    $qry4 = mysqli_query($link,"SELECT * FROM studied_tbl where personalID = '".$data['id']."'");
                    $data4 = mysqli_fetch_array($qry4);
                    
                    $qry5 = mysqli_query($link,"SELECT * FROM educational_tbl where personalId = '".$data['id']."'");
                    $data5 = mysqli_fetch_array($qry5);
                    
                    $qry6 = mysqli_query($link,"SELECT * FROM mark_tbl where personalId = '".$data['id']."'");
                    $data6 = mysqli_fetch_array($qry6);
                    
                        $qry7 = mysqli_query($link, "SELECT * FROM document_tbl WHERE personalId = '" . $data['id'] . "' AND isActive = '1'");
                        $r3 = mysqli_fetch_array($qry7);
                    ?>
<div class="Wrapper">
    <table style="width:100%;font-family:Helvetica, Arial, sans-serif;padding:5px 0;">
        <tr>
            <td style="padding:0;border-collapse:collapse;">
                <table style="width:100%;font-family:Helvetica, Arial, sans-serif;padding:0;">
                   <tr>
                       <td style="width:65%;text-align:right;padding:0 65px 0 0;">
                           <img src="img/logo.png" style="width:80px;text-align:right;"/>
                       </td>
                       <td style="width:35%;">
                           <table style="width:100%;">
                               <tr>
                                   <td>
                                       <table style="width:100%;">
                                           <tr>
                                               <td style="width:40%;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;">Admission No:</td>
                                               <td  style="border:1px solid #b5b5b5;padding:8px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"><?php echo $data['regId']?></td>
                                           </tr>
                                       </table>
                                   </td>
                               </tr>
                               <tr>
                                    <td>
                                        <table style="width:100%;">
                                            <tr>
                                                <td style="width:38%;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;">Admitted On:</td>
                                                <td>
                                                    <table style="width:100%;">
                                                        <tr>
                                                            <td>
                                                                <table style="border-collapse:collapse;width:100%;">
                                                                    <tr>
                                                                        <td style="border:1px solid #b5b5b5;width:22px;
                                                                        padding:8px 5px;height:13px;"></td>
                                                                        <td style="border:1px solid #b5b5b5;width:22px;
                                                                        padding:8px 5px;height:13px;"></td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                            <td>
                                                                <table style="border-collapse:collapse;width:100%;">
                                                                    <tr>
                                                                        <td style="border:1px solid #b5b5b5;width:22px;
                                                                        padding:8px 5px;height:13px;"></td>
                                                                        <td style="border:1px solid #b5b5b5;width:22px;
                                                                        padding:8px 5px;height:13px;"></td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                            <td>
                                                                <table style="border-collapse:collapse;width:100%;">
                                                                    <tr>
                                                                        <td style="border:1px solid #b5b5b5;width:22px;
                                                                        padding:8px 5px;height:13px;"></td>
                                                                        <td style="border:1px solid #b5b5b5;width:22px;
                                                                        padding:8px 5px;height:13px;"></td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                               </tr>
                           </table>
                       </td>
                   </tr>
                </table> 
            </td>
        </tr>  
        <tr>
            <td style="padding:0;border-collapse:collapse;">
                <table style="width:100%;font-family:Helvetica, Arial, sans-serif;">
                    <tr>
                        <th style="font-family:Helvetica, Arial, sans-serif;font-size:22px;line-height:28px;font-weight:900;color:#0b5385;">DAVAO MEDICAL SCHOOL FOUNDATION INC.</th>
                    </tr>
                    <tr>
                        <td style="font-family:Helvetica, Arial, sans-serif;font-size:16px;line-height:20px;font-weight:600;color:#0b5385;">DAVAO CITY, PHILIPPINES</td>
                    </tr>
                    <tr>
                        <td style="font-family:Helvetica, Arial, sans-serif;font-size:14px;line-height:18px;font-weight:600;color:#000000;">Through</td>
                    </tr>
                </table>  
            </td>
        </tr>
        <tr>
            <td>
                <table style="width:100%;font-family:Helvetica, Arial, sans-serif;padding:5px 0;">
                   <tr>
                       <td style="width:50%;background-color:#aaccec;border-radius:5px;-webkit-print-color-adjust: exact; ">
                           <table style="width:100%;">
                               <tr>
                                   <td><img src="img/Transworld-logo.png" style="width:50px;"/></td>
                                   <td>
                                       <table style="width:100%;">
                                           <tr>
                                               <th style="font-family:Helvetica, Arial, sans-serif;font-size:14px;line-height:28px;color:#000000;text-align:left;">Transworld Educare Pvt. Ltd.</th>
                                           </tr>
                                           <tr>
                                               <td style="font-family:Helvetica, Arial, sans-serif;font-size:11px;line-height:13px;color:#000000;text-align:left;">N. M. Wadia Hospital Campus, 283, Shukrawar Peth</td>
                                           </tr>
                                           <tr>
                                                <td style="font-family:Helvetica, Arial, sans-serif;font-size:11px;line-height:13px;color:#000000;text-align:left;">Pune, Maharashtra - 411 002, INDIA.</td>
                                           </tr>
                                       </table>
                                   </td>
                               </tr>
                           </table>
                       </td>
                       <td style="width:50%;background-color:#aaccec;border-radius:5px;-webkit-print-color-adjust: exact; ">
                        <table style="width:100%;">
                            <tr>
                                <td><img src="img/Kings-Logo.png" style="width:42px;"/></td>
                                <td>
                                    <table style="width:100%;">
                                        <tr>
                                            <th style="font-family:Helvetica, Arial, sans-serif;font-size:14px;line-height:28px;color:#000000;text-align:left;">Kings International Medical Academy Pvt. Ltd.</th>
                                        </tr>
                                        <tr>
                                            <td style="font-family:Helvetica, Arial, sans-serif;font-size:11px;line-height:13px;color:#000000;text-align:left;">122, Near Govt. Hospital, East Coast Road,</td>
                                        </tr>
                                        <tr>
                                             <td style="font-family:Helvetica, Arial, sans-serif;font-size:11px;line-height:13px;color:#000000;text-align:left;">Mamallapuram - 603 104, Tamil Nadu, INDIA</td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                   </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                <table style="width:100%;font-family:Helvetica, Arial, sans-serif;padding:5px 0;">
                    <tr>
                        <th align="center" style="font-family:Helvetica, Arial, sans-serif;font-size:22px;line-height:28px;font-weight:900;color:#0b5385;">APPLICATION FOR MEDICINE (M.D)</th>
                    </tr>
                    <tr>
                        <td align="center" style="font-family:Helvetica, Arial, sans-serif;font-size:16px;line-height:18px;color:#0b5385;font-weight:600;">ACADEMIC YEAR 2021 - 2022</td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                <table style="width:100%;font-family:Helvetica, Arial, sans-serif;padding:5px 0;">
                    <tr>
                        <td style="padding:0;border-collapse:collapse;">
                            <table style="padding:0;border-collapse:collapse;">
                                <tr style="padding:0;border-collapse:collapse;">
                                    <td style="padding:0;border-collapse:collapse;"><img src="img/shape.png" style="width:170px;margin:0 0 -7px;"></td>
                                </tr>
                            </table>
                        </td>
                        <td rowspan="2" style="border:1px solid #b5b5b5;width:140px; padding:8px 5px;font-family:Helvetica, Arial, sans-serif;font-size:16px;line-height:18px;font-weight:900;color:#999999;"><img src="uploads/doc/<?php echo $r3['photo']?>" height="165px" width="140px" ></img></td>
                    </tr>
                    <tr>
                        <td style="padding:0 0 8px;border:1px solid #666666;">
                            <table style="width:100%;">
                                <tr>
                                    <td>
                                        <table style="width:100%;">
                                            <tr>
                                                <td style="width:66%;">
                                                    <table style="width:100%;">
                                                        <tr>
                                                            <td style="width:40%;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;">Commencement Date:</td>
                                                            <td style="width:60%;">
                                                                <table>
                                                                    <tr>
                                                                        <td style="padding:0 5px 0 0;">
                                                                            <table style="border-collapse:collapse;">
                                                                                <tr>
                                                                                    <td style="border:1px solid #b5b5b5;width:22px;
                                                                                    padding:8px 5px;height:13px;"></td>
                                                                                    <td style="border:1px solid #b5b5b5;width:22px;
                                                                                    padding:8px 5px;height:13px;"></td>
                                                                                </tr>
                                                                            </table>
                                                                        </td>
                                                                        <td style="padding:0 5px 0 0;">
                                                                            <table style="border-collapse:collapse;">
                                                                                <tr>
                                                                                    <td style="border:1px solid #b5b5b5;width:22px;
                                                                                    padding:8px 5px;height:13px;"></td>
                                                                                    <td style="border:1px solid #b5b5b5;width:22px;
                                                                                    padding:8px 5px;height:13px;"></td>
                                                                                </tr>
                                                                            </table>
                                                                        </td>
                                                                        <td style="padding:0 5px 0 0;">
                                                                            <table style="border-collapse:collapse;">
                                                                                <tr>
                                                                                    <td style="border:1px solid #b5b5b5;width:22px;
                                                                                    padding:8px 5px;height:13px;"></td>
                                                                                    <td style="border:1px solid #b5b5b5;width:22px;
                                                                                    padding:8px 5px;height:13px;"></td>
                                                                                    <td style="border:1px solid #b5b5b5;width:22px;
                                                                                    padding:8px 5px;height:13px;"></td>
                                                                                    <td style="border:1px solid #b5b5b5;width:22px;
                                                                                    padding:8px 5px;height:13px;"></td>
                                                                                </tr>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                                <td style="width:4%;"></td>
                                                <td style="width:30%;">
                                                    <table style="width:100%;">
                                                        <tr>
                                                            <td style="border:1px solid #b5b5b5;width:22px; padding:8px 5px;height:13px;"><?php if($data4['lateralEntry'] === "" || $data4['lateralEntry'] === "no"){  ?>&#10004<?php } ?></td>
                                                            <td style="font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;padding:0 0 0 10px;text-align:left;"><strong>FRESHER</strong></td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <table style="width:100%;">
                                            <tr>
                                                <td style="width:44%;">
                                                    <table style="width:100%;">
                                                        <tr>
                                                            <td style="font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;padding:0;text-align:left;width:43%;"><strong>NEET Qualified:</strong></td>
                                                            <td>
                                                                <table style="width:100%;">
                                                                    <tr>
                                                                        <td style="font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;padding:0;text-align:left;"><strong>Yes</strong></td>
                                                                        <td style="border:1px solid #b5b5b5;width:22px; padding:8px 5px;height:13px;"><?php if($data5['neetScore'] !== ""){  ?>&#10004<?php } ?></td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                            <td>
                                                                <table style="width:100%;">
                                                                    <tr>
                                                                        <td style="font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;padding:0 0 0 10px;text-align:left;"><strong>No</strong></td>
                                                                        <td style="border:1px solid #b5b5b5;width:22px; padding:8px 5px;height:13px;"><?php if($data5['neetScore'] === ""){  ?>&#10004<?php } ?></td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                                <td style="width:26%;">
                                                    <table style="width:100%;">
                                                        <tr>
                                                            <td style="font-family:Helvetica, Arial, sans-serif;font-size:11px;line-height:18px;padding:0;text-align:left;width:60%;"><strong>If Yes. (Marks)</strong></td>
                                                            <td style="border:1px solid #b5b5b5;width:100px; padding:8px 5px;height:13px;"><?php if($data5['neetScore'] !== ""){  echo $data5['neetScore']; } ?></td>
                                                        </tr>
                                                    </table>
                                                </td>
                                                <td style="width:30%;" align="right">
                                                    <table style="width:100%;" align="right">
                                                        <tr>
                                                            <td style="border:1px solid #b5b5b5;width:22px; padding:8px 5px;height:13px;"><?php if($data4['lateralEntry'] === "yes"){  ?>&#10004<?php } ?></td>
                                                            <td style="font-family:Helvetica, Arial, sans-serif;font-size:11px;line-height:18px;padding:0 0 0 6px;text-align:left;"><strong>LATERAL ENTRANT</strong></td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <table style="width:100%;">
                                            <tr>
                                                <td style="font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;padding:0;text-align:left;width:18%;"><strong>Select Campus:</strong></td>
                                                <td>
                                                    <table style="width:100%;">
                                                        <tr>
                                                            <td style="font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;padding:0;text-align:left;">Transworld Educare (Pune)</td>
                                                            
															<td style="border:1px solid #b5b5b5;width:22px; padding:8px 5px;height:13px;"><?php if($data3['center'] === "Pune"){  ?>&#10004<?php } ?></td>
                                                        </tr>
                                                    </table>
                                                </td>
                                                <td>
                                                    <table style="width:100%;">
                                                        <tr>
                                                            <td style="font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;padding:0;text-align:left;">Kings International Medical Academy (Chennai)</td>
                                                            <td style="border:1px solid #b5b5b5;width:22px; padding:8px 5px;height:13px;"><?php if($data3['center'] === "Chennai"){  ?>&#10004<?php } ?></td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                <table style="width:100%;font-family:Helvetica, Arial, sans-serif;">
                    <tr>
                        <th colspan="2" bgcolor="#0b5385" align="left" style="background:#0b5385;background-color:#0b5385;color:#ffffff;padding:5px 15px;-webkit-print-color-adjust: exact; ">NAME OF APPLICANT IN BLOCK LETTERS (As per school records)</th>
                    </tr>
                    <tr style="height:30px;"></tr>
                    <tr>
                        <td style="width:50%;padding:5px 0;">
                            <table style="width:100%;">
                                <tr>
                                    <td align="left" style="width:25%;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;">First Name</td>
                                    <td align="left" style="border:1px solid #b5b5b5;width:75%;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"><?php echo strtoupper($data['fName']);?></td>
                                </tr>
                            </table>
                        </td>
                        <td style="width:50%;padding:8px 0;">
                            <table style="width:100%;">
                                <tr>
                                    <td align="left" style="width:25%;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;">Middle Name</td>
                                    <td align="left" style="border:1px solid #b5b5b5;width:75%;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"><?php echo strtoupper($data['mName']);?> </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td style="width:50%;padding:8px 0;">
                            <table style="width:100%;">
                                <tr>
                                    <td align="left" style="width:25%;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;">Last Name</td>
                                    <td align="left" style="border:1px solid #b5b5b5;width:75%;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"><?php echo strtoupper($data['lName']);?></td>
                                </tr>
                            </table>
                        </td>
                        <td style="width:50%;padding:8px 0;">
                            <table style="width:100%;">
                                <tr>
                                    <td align="left" style="width:10%;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;">Sex</td>
                                    <td style="width:50%;">
                                        <table style="width:85%;">
                                            <tr>
                                               <td style="width:40%;">
                                                   <table style="width:100%;">
                                                        <tr>
                                                            <td style="font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;">Male</td>
                                                            <td style="border:1px solid #b5b5b5;width:22px;
                                                            padding:4px 5px;height:13px;"><?php if($data['gender'] === "Male"){  ?>&#10004<?php } ?></td>
                                                        </tr>
                                                   </table>
                                               </td>
                                               <td style="width:10%;"></td>
                                               <td style="width:40%;">
                                                   <table style="width:100%;">
                                                        <tr>
                                                            <td style="font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;">Female</td>
                                                            <td style="border:1px solid #b5b5b5;width:22px;
                                                            padding:4px 5px;height:13px;"><?php if($data['gender'] === "Female"){  ?>&#10004<?php } ?></td>
                                                        </tr>
                                                   </table>
                                               </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td style="width:50%;padding:8px 0;">
                            <table style="width:100%;">
                                <tr>
                                    <td align="left" style="width:25%;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;">Date of Birth <br/>
                                        <span style="font-family:Helvetica, Arial, sans-serif;font-size:10px;"><i>(As per records)</i></span>
                                    </td>
                                    <td align="left" style="width:75%;">
                                        <table>
                                            <tr>
                                                <td style="padding:0 5px 0 0;">
                                                    <table style="border-collapse:collapse;">
													<?php
															$orderdate = explode('-', $data['dob']);
																$year = $orderdate[0];
																$month   = $orderdate[1];
																$day  = $orderdate[2];
													?>
                                                        <tr>
                                                            <td style="border:1px solid #b5b5b5;width:22px;
                                                            padding:4px 5px;height:13px;"><?php echo $day[0] ;?></td>
                                                            <td style="border:1px solid #b5b5b5;width:22px;
                                                            padding:4px 5px;height:13px;"><?php echo $day[1] ;?></td>
                                                        </tr>
                                                    </table>
                                                </td>
                                                <td style="padding:0 5px 0 0;">
                                                    <table style="border-collapse:collapse;">
                                                        <tr>
                                                            <td style="border:1px solid #b5b5b5;width:22px;
                                                            padding:4px 5px;height:13px;"><?php echo $month[0] ;?></td>
                                                            <td style="border:1px solid #b5b5b5;width:22px;
                                                            padding:4px 5px;height:13px;"><?php echo $month[1] ;?></td>
                                                        </tr>
                                                    </table>
                                                </td>
                                                <td style="padding:0 5px 0 0;">
                                                    <table style="border-collapse:collapse;">
                                                        <tr>
                                                            <td style="border:1px solid #b5b5b5;width:22px;
                                                            padding:4px 5px;height:13px;"><?php echo $year[0] ;?></td>
                                                            <td style="border:1px solid #b5b5b5;width:22px;
                                                            padding:4px 5px;height:13px;"><?php echo $year[1] ;?></td>
                                                            <td style="border:1px solid #b5b5b5;width:22px;
                                                            padding:4px 5px;height:13px;"><?php echo $year[2] ;?></td>
                                                            <td style="border:1px solid #b5b5b5;width:22px;
                                                            padding:4px 5px;height:13px;"><?php echo $year[3] ;?></td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td style="width:50%;padding:8px 0;">
                            <table style="width:100%;">
                                <tr>
                                    <td align="left" style="width:10%;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;">Nationality</td>
                                    <td align="left" style="border-bottom:1px solid #b5b5b5;width:83%;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"><?php echo strtoupper($data['nationality']);?></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center">
                            <table align="center" style="width:90%">
                                <tr>
                                    <td style="width:40%">
                                        <table style="border-collapse:collapse;"> 
                                            <tr>
                                                <td colspan="10" style="font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;text-align:center;">Passport Number</td>
                                            </tr>
                                            <tr>
                                                <td style="border:1px solid #b5b5b5;padding:4px 5px;width:100%;height:13px;"><?php echo $data2['passportNumber']?></td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td style="width:25%;">
                                        <table style="width:90%;">
                                            <tr>
                                                <td  style="font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;text-align:center;">Place of Issue</td>
                                            </tr>
                                            <tr>
                                                <td style="border:1px solid #b5b5b5;padding:4px 5px;width:100%;height:13px;"><?php echo strtoupper($data2['placeOfIssue'])?></td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td style="width:35%;">
                                        <table>
                                            <tr>
                                                <td colspan="10" style="font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;text-align:center;">Expiry Date</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <table style="border-collapse:collapse;">
													<?php
                                                                                                            if($data2['dateOfExpiry'] !== ""){
															$orderdate1 = explode('-', $data2['dateOfExpiry']);
																$year1 = $orderdate1[0];
																$month1   = $orderdate1[1];
																$day1  = $orderdate1[2];
                                                                                                            }else{
                                                                                                                $year1="";
                                                                                                                $month1="";
                                                                                                                $day1="";
                                                                                                            }
													?>
                                                        <tr>
                                                            <td style="padding:0 5px 0 0;">
                                                                <table style="border-collapse:collapse;">
                                                                    <tr>
                                                                        <td style="border:1px solid #b5b5b5;width:22px;
                                                                        padding:4px 5px;height:13px;"><?php if($day1 !== ""){ echo $day1[0]; }?></td>
                                                                        <td style="border:1px solid #b5b5b5;width:22px;
                                                                        padding:4px 5px;height:13px;"><?php if($day1 !== ""){ echo $day1[1]; }?></td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                            <td style="padding:0 5px 0 0;">
                                                                <table style="border-collapse:collapse;">
                                                                    <tr>
                                                                        <td style="border:1px solid #b5b5b5;width:22px;
                                                                        padding:4px 5px;height:13px;"><?php if($month1 !== ""){ echo $month1[0]; }?></td>
                                                                        <td style="border:1px solid #b5b5b5;width:22px;
                                                                        padding:4px 5px;height:13px;"><?php if($month1 !== ""){ echo $month1[1]; }?></td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                            <td style="padding:0 5px 0 0;">
                                                                <table style="border-collapse:collapse;">
                                                                    <tr>
                                                                        <td style="border:1px solid #b5b5b5;width:22px;
                                                                        padding:4px 5px;height:13px;"><?php if($year1 !== ""){ echo $year1[0] ; }?></td>
                                                                        <td style="border:1px solid #b5b5b5;width:22px;
                                                                        padding:4px 5px;height:13px;"><?php if($year1 !== ""){ echo $year1[1] ; }?></td>
                                                                        <td style="border:1px solid #b5b5b5;width:22px;
                                                                        padding:4px 5px;height:13px;"><?php if($year1 !== ""){ echo $year1[2] ; }?></td>
                                                                        <td style="border:1px solid #b5b5b5;width:22px;
                                                                        padding:4px 5px;height:13px;"><?php if($year1 !== ""){ echo $year1[3] ; }?></td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr style="height:15px;"></tr>
        <tr>
            <td>
                <table style="width:100%;font-family:Helvetica, Arial, sans-serif;">
                    
                    <tr>
                        <th colspan="2" bgcolor="#0b5385" align="left" style="background-color:#0b5385;color:#ffffff;padding:5px 15px;-webkit-print-color-adjust: exact; ">PARENT'S DETAILS & ADDRESS</th>
                    </tr>
                    
                    <tr style="height:30px;"></tr>
                    <tr>
                        <td style="width:50%;padding:5px 0;">
                            <table style="width:100%;">
                                <tr>
                                    <td align="left" style="width:25%;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;">Father’s Name </td>
                                    <td align="left" style="border:1px solid #b5b5b5;width:75%;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"><?php echo strtoupper($data2['fatherName'])?></td>
                                </tr>
                            </table>
                        </td>
                        <td style="width:50%;padding:8px 0;">
                            <table style="width:100%;">
                                <tr>
                                    <td align="left" style="width:25%;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;">Occupation</td>
                                    <td align="left" style="border:1px solid #b5b5b5;width:75%;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"><?php echo strtoupper($data2['fatherOccupation'])?></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td style="width:50%;padding:5px 0;">
                            <table style="width:100%;">
                                <tr>
                                    <td align="left" style="width:25%;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;">Mother’s Name </td>
                                    <td align="left" style="border:1px solid #b5b5b5;width:75%;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"><?php echo strtoupper($data2['motherName'])?></td>
                                </tr>
                            </table>
                        </td>
                        <td style="width:50%;padding:8px 0;">
                            <table style="width:100%;">
                                <tr>
                                    <td align="left" style="width:25%;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;">Occupation</td>
                                    <td align="left" style="border:1px solid #b5b5b5;width:75%;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"><?php echo strtoupper($data2['motherOccupation'])?></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td rowspan="3" style="width:50%;padding:8px 0;">
                            <table style="width:100%;">
                                <tr>
                                    <td align="left" style="width:25%;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;">Permanent
                                        Address</td>
                                    <td align="left" style="overflow: hidden; word-break: break-word; border:1px solid #b5b5b5;width:75%;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;vertical-align:top;height:100px;"><?php echo strtoupper($data2['temporaryAddress'])?></td>
                                </tr>
                            </table>
                        </td>
                        <td style="width:50%;padding:8px 0;">
                            <table style="width:100%;">
                                <tr>
                                    <td align="left" style="width:25%;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;">Mobile No (1):</td>
                                    <td align="left" style="width:75%;">
                                        <table>
                                            <tr>
                                                <td style="padding:0 5px 0 0;">
                                                    <table style="border-collapse:collapse;">
                                                        <tr>
                                                            <td style="border:1px solid #b5b5b5;width:55px;
                                                            padding:8px 5px;height:13px;"></td>
                                                        </tr>
                                                    </table>
                                                </td>
                                                <td style="padding:0;">
                                                    <table style="border-collapse:collapse;">
                                                        <tr>
                                                            <td style="border:1px solid #b5b5b5;width:22px;
                                                            padding:4px 5px;height:13px;"><?php echo substr($data2['fatherMobile'] ,0,1)."<br>";?></td>
                                                            <td style="border:1px solid #b5b5b5;width:22px;
                                                            padding:4px 5px;height:13px;"><?php echo substr($data2['fatherMobile'] ,1,1)."<br>";?></td>
                                                            <td style="border:1px solid #b5b5b5;width:22px;
                                                            padding:4px 5px;height:13px;"><?php echo substr($data2['fatherMobile'] ,2,1)."<br>";?></td>
                                                            <td style="border:1px solid #b5b5b5;width:22px;
                                                            padding:4px 5px;height:13px;"><?php echo substr($data2['fatherMobile'] ,3,1)."<br>";?></td>
                                                            <td style="border:1px solid #b5b5b5;width:22px;
                                                            padding:4px 5px;height:13px;"><?php echo substr($data2['fatherMobile'] ,4,1)."<br>";?></td>
                                                            <td style="border:1px solid #b5b5b5;width:22px;
                                                            padding:4px 5px;height:13px;"><?php echo substr($data2['fatherMobile'] ,5,1)."<br>";?></td>
                                                            <td style="border:1px solid #b5b5b5;width:22px;
                                                            padding:4px 5px;height:13px;"><?php echo substr($data2['fatherMobile'] ,6,1)."<br>";?></td>
                                                            <td style="border:1px solid #b5b5b5;width:22px;
                                                            padding:4px 5px;height:13px;"><?php echo substr($data2['fatherMobile'] ,7,1)."<br>";?></td>
                                                            <td style="border:1px solid #b5b5b5;width:22px;
                                                            padding:4px 5px;height:13px;"><?php echo substr($data2['fatherMobile'] ,8,1)."<br>";?></td>
                                                            <td style="border:1px solid #b5b5b5;width:22px;
                                                            padding:4px 5px;height:13px;"><?php echo substr($data2['fatherMobile'] ,9,1)."<br>";?></td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td style="width:50%;padding:8px 0;">
                            <table style="width:100%;">
                                <tr>
                                    <td align="left" style="width:25%;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;">Mobile No (2):</td>
                                    <td align="left" style="width:75%;">
                                        <table>
                                            <tr>
                                                <td style="padding:0 5px 0 0;">
                                                    <table style="border-collapse:collapse;">
                                                        <tr>
                                                            <td style="border:1px solid #b5b5b5;width:55px;
                                                            padding:4px 5px;height:13px;"></td>
                                                        </tr>
                                                    </table>
                                                </td>
                                                <td style="padding:0;">
                                                    <table style="border-collapse:collapse;">
                                                        <tr>
                                                            <td style="border:1px solid #b5b5b5;width:22px;
                                                            padding:4px 5px;height:13px;"></td>
                                                            <td style="border:1px solid #b5b5b5;width:22px;
                                                            padding:4px 5px;height:13px;"></td>
                                                            <td style="border:1px solid #b5b5b5;width:22px;
                                                            padding:4px 5px;height:13px;"></td>
                                                            <td style="border:1px solid #b5b5b5;width:22px;
                                                            padding:4px 5px;height:13px;"></td>
                                                            <td style="border:1px solid #b5b5b5;width:22px;
                                                            padding:4px 5px;height:13px;"></td>
                                                            <td style="border:1px solid #b5b5b5;width:22px;
                                                            padding:4px 5px;height:13px;"></td>
                                                            <td style="border:1px solid #b5b5b5;width:22px;
                                                            padding:4px 5px;height:13px;"></td>
                                                            <td style="border:1px solid #b5b5b5;width:22px;
                                                            padding:4px 5px;height:13px;"></td>
                                                            <td style="border:1px solid #b5b5b5;width:22px;
                                                            padding:4px 5px;height:13px;"></td>
                                                            <td style="border:1px solid #b5b5b5;width:22px;
                                                            padding:4px 5px;height:13px;"></td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td style="width:50%;padding:8px 0;">
                            <table style="width:100%;">
                                <tr>
                                    <td align="left" style="width:25%;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;">Email ID:</td>
                                    <td align="left" style="border:1px solid #b5b5b5;width:75%;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"><?php echo strtoupper($data2['fatherEmail'])?></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td rowspan="3" style="width:50%;padding:8px 0;">
                            <table style="width:100%;">
                                <tr>
                                    <td align="left" style="width:25%;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;">Address of
                                        Correspondence</td>
                                    <td align="left" style="overflow: hidden; word-break: break-word; border:1px solid #b5b5b5;width:75%;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;vertical-align:top;height:100px;"><?php echo strtoupper($data2['permanentAddress'])?></td>
                                </tr>
                            </table>
                        </td>
                        <td style="width:50%;padding:0px 0;">
                            <table style="width:100%;">
                                <tr>
                                    <td align="left" style="width:25%;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;">Mobile No (1):</td>
                                    <td align="left" style="width:75%;">
                                        <table>
                                            <tr>
                                                <td style="padding:0 5px 0 0;">
                                                    <table style="border-collapse:collapse;">
                                                        <tr>
                                                            <td style="border:1px solid #b5b5b5;width:55px;
                                                            padding:4px 5px;height:13px;"></td>
                                                        </tr>
                                                    </table>
                                                </td>
                                                <td style="padding:0">
                                                    <table style="border-collapse:collapse;">
                                                        <tr>
                                                            <td style="border:1px solid #b5b5b5;width:22px;
                                                            padding:4px 5px;height:13px;"><?php echo substr($data2['motherMobile'] ,0,1)."<br>";?></td>
                                                            <td style="border:1px solid #b5b5b5;width:22px;
                                                            padding:4px 5px;height:13px;"><?php echo substr($data2['motherMobile'] ,1,1)."<br>";?></td>
                                                            <td style="border:1px solid #b5b5b5;width:22px;
                                                            padding:4px 5px;height:13px;"><?php echo substr($data2['motherMobile'] ,2,1)."<br>";?></td>
                                                            <td style="border:1px solid #b5b5b5;width:22px;
                                                            padding:4px 5px;height:13px;"><?php echo substr($data2['motherMobile'] ,3,1)."<br>";?></td>
                                                            <td style="border:1px solid #b5b5b5;width:22px;
                                                            padding:4px 5px;height:13px;"><?php echo substr($data2['motherMobile'] ,4,1)."<br>";?></td>
                                                            <td style="border:1px solid #b5b5b5;width:22px;
                                                            padding:4px 5px;height:13px;"><?php echo substr($data2['motherMobile'] ,5,1)."<br>";?></td>
                                                            <td style="border:1px solid #b5b5b5;width:22px;
                                                            padding:4px 5px;height:13px;"><?php echo substr($data2['motherMobile'] ,6,1)."<br>";?></td>
                                                            <td style="border:1px solid #b5b5b5;width:22px;
                                                            padding:4px 5px;height:13px;"><?php echo substr($data2['motherMobile'] ,7,1)."<br>";?></td>
                                                            <td style="border:1px solid #b5b5b5;width:22px;
                                                            padding:4px 5px;height:13px;"><?php echo substr($data2['motherMobile'] ,8,1)."<br>";?></td>
                                                            <td style="border:1px solid #b5b5b5;width:22px;
                                                            padding:4px 5px;height:13px;"><?php echo substr($data2['motherMobile'] ,9,1)."<br>";?></td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td style="width:50%;padding:0px 0;">
                            <table style="width:100%;">
                                <tr>
                                    <td align="left" style="width:25%;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;">Mobile No (2):</td>
                                    <td align="left" style="width:75%;">
                                        <table>
                                            <tr>
                                                <td style="padding:0 5px 0 0;">
                                                    <table style="border-collapse:collapse;">
                                                        <tr>
                                                            <td style="border:1px solid #b5b5b5;width:55px;
                                                            padding:4px 5px;height:13px;"></td>
                                                        </tr>
                                                    </table>
                                                </td>
                                                <td style="padding:0">
                                                    <table style="border-collapse:collapse;">
                                                        <tr>
                                                            <td style="border:1px solid #b5b5b5;width:22px;
                                                            padding:4px 5px;height:13px;"></td>
                                                            <td style="border:1px solid #b5b5b5;width:22px;
                                                            padding:4px 5px;height:13px;"></td>
                                                            <td style="border:1px solid #b5b5b5;width:22px;
                                                            padding:4px 5px;height:13px;"></td>
                                                            <td style="border:1px solid #b5b5b5;width:22px;
                                                            padding:4px 5px;height:13px;"></td>
                                                            <td style="border:1px solid #b5b5b5;width:22px;
                                                            padding:4px 5px;height:13px;"></td>
                                                            <td style="border:1px solid #b5b5b5;width:22px;
                                                            padding:4px 5px;height:13px;"></td>
                                                            <td style="border:1px solid #b5b5b5;width:22px;
                                                            padding:4px 5px;height:13px;"></td>
                                                            <td style="border:1px solid #b5b5b5;width:22px;
                                                            padding:4px 5px;height:13px;"></td>
                                                            <td style="border:1px solid #b5b5b5;width:22px;
                                                            padding:4px 5px;height:13px;"></td>
                                                            <td style="border:1px solid #b5b5b5;width:22px;
                                                            padding:4px 5px;height:13px;"></td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td style="width:50%;padding:8px 0;">
                            <table style="width:100%;">
                                <tr>
                                    <td align="left" style="width:25%;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;">Email ID:</td>
                                    <td align="left" style="border:1px solid #b5b5b5;width:75%;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"><?php echo strtoupper($data2['motherEmail'])?></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                       <td colspan="2" style="padding:8px 0;">
                           <table style="width:100%;">
                               <tr>
                                    <td style="width:35%;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;">Local guardian’s Name & Address if any:</td>
                                    <td style="border-bottom:1px solid #b5b5b5;width:65%;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"></td>
                               </tr>
                           </table>
                       </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                <table style="width:100%;font-family:Helvetica, Arial, sans-serif;">
                    <tr>
                        <th colspan="2" bgcolor="#0b5385" align="left" style="background-color:#0b5385;color:#ffffff;padding:5px 15px;-webkit-print-color-adjust: exact; ">ACCOMMODATION</th>
                    </tr>
                    <tr>
                        <td align="center" style="padding:0px 0;">
                            <table>
                                <tr>
                                    <td  style="border:1px solid #b5b5b5;width:22px;
                                    padding:4px 5px;height:13px;"><?php if($data3['accommodation'] === "yes"){  ?>&#10004<?php } ?></td>
                                    <td style="font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;padding:0 0 0 5px;">Need Accommodation</td>
                                </tr>
                            </table>
                        </td>
                        <td align="left" style="padding:0px 0;">
                            <table>
                                <tr>
                                    <td  style="border:1px solid #b5b5b5;width:22px;
                                    padding:4px 5px;height:13px;"><?php if($data3['accommodation'] === "no"){  ?>&#10004<?php } ?></td>
                                    <td style="font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;padding:0 0 0 5px;">Do not need Accommodation</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                <table style="width:100%;font-family:Helvetica, Arial, sans-serif;">
                    <tr>
                        <th colspan="2" bgcolor="#0b5385" align="left" style="background-color:#0b5385;color:#ffffff;padding:4px 15px;-webkit-print-color-adjust: exact; ">FEES</th>
                    </tr>
                    <tr>
                        <td colspan="2" style="font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;text-align:left;padding:4px 0;">Name of the person responsible for fee payment</td>
                    </tr>
                    <tr>
                        <td style="width:50%;padding:4px 0;">
                            <table style="width:100%;">
                                <tr>
                                    <td align="left" style="width:15%;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;">Name:</td>
                                    <td align="left" style="border-bottom:1px solid #b5b5b5;width:83%;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"><?php echo strtoupper($data4['responsibleName']) ?></td>
                                </tr>
                            </table>
                        </td>
                        <td style="width:50%;padding:4px 0;">
                            <table style="width:100%;">
                                <tr>
                                    <td align="left" style="width:15%;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;">Occupation:</td>
                                    <td align="left" style="border-bottom:1px solid #b5b5b5;width:83%;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"><?php echo strtoupper($data4['responsibleOccupation']) ?></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td style="width:50%;padding:4px 0;">
                            <table style="width:100%;">
                                <tr>
                                    <td align="left" style="width:15%;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;">Name:</td>
                                    <td align="left" style="border-bottom:1px solid #b5b5b5;width:83%;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"></td>
                                </tr>
                            </table>
                        </td>
                        <td style="width:50%;padding:4px 0;">
                            <table style="width:100%;">
                                <tr>
                                    <td align="left" style="width:15%;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;">Relationship:</td>
                                    <td align="left" style="border-bottom:1px solid #b5b5b5;width:83%;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"><?php echo strtoupper($data4['relationship']) ?></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                       <td colspan="2">
                            <table style="width:100%;">
                                <tr>
                                    <td style="width:50%;padding:4px 0;">
                                        <table style="width:100%;">
                                            <tr>
                                                <td align="left" style="width:20%;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;">Contact No:</td>
                                                <td align="left" style="border-bottom:1px solid #b5b5b5;width:85%;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"><?php echo $data4['responsibleContactNumber'] ?></td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td style="width:50%;padding:4px 0;">
                                        <table style="width:100%;">
                                            <tr>
                                                <td align="left" style="width:20%;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;">Email ID:</td>
                                                <td align="left" style="border-bottom:1px solid #b5b5b5;width:83%;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"><?php echo strtoupper($data4['responsibleEmail']) ?></td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                       </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                <table style="width:100%;font-family:Helvetica, Arial, sans-serif;">
                    <tr>
                        <th colspan="2" bgcolor="#0b5385" align="left" style="background-color:#0b5385;color:#ffffff;padding:5px 15px;-webkit-print-color-adjust: exact; ">ACADEMIC INFORMATION</th>
                    </tr>
                    <tr>
                        <td colspan="2" style="padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;text-align:left;">10th Standard</td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <table style="width:100%;border-collapse:collapse;">
                                <tr>
                                    <th style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"></th>
                                    <th style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;">Subjects</th>
                                    <th style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;">Marks (%)</th>
                                    <th style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;">Year of Passing</th>
                                </tr>
                                <tr>
                                    <td style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;">1</td>
                                    <td style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"><?php echo strtoupper($data6['s1']) ?></td>
                                    <td style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"><?php echo $data6['m1'] ?></td>
                                    <td style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"><?php echo $data5['tenthPassingYear'] ?></td>
                                </tr>
                                <tr>
                                    <td style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;">2</td>
                                    <td style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"><?php echo strtoupper($data6['s2']) ?></td>
                                    <td style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"><?php echo $data6['m2'] ?></td>
                                    <td style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"></td>
                                </tr>
                                <tr>
                                    <td style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;">3</td>
                                    <td style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"><?php echo strtoupper($data6['s3']) ?></td>
                                    <td style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"><?php echo $data6['m3'] ?></td>
                                    <td style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"></td>
                                </tr>
                                <tr>
                                    <td style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;">4</td>
                                    <td style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"><?php echo strtoupper($data6['s4']) ?></td>
                                    <td style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"><?php echo $data6['m4'] ?></td>
                                    <td style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"></td>
                                </tr>
                                <tr>
                                    <td style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;">5</td>
                                    <td style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"><?php echo strtoupper($data6['s5']) ?></td>
                                    <td style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"><?php echo $data6['m5'] ?></td>
                                    <td style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"></td>
                                </tr>
                                <tr>
                                    <td style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;">6</td>
                                    <td style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"><?php echo strtoupper($data6['s6']) ?></td>
                                    <td style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"><?php echo $data6['m6'] ?></td>
                                    <td style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" style="padding:6px 5px 4px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;text-align:left;">12th Standard of Equivalent</td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <table style="width:100%;border-collapse:collapse;">
                                <tr>
                                    <th style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"></th>
                                    <th style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;">Subjects</th>
                                    <th style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;">Marks (%)</th>
                                    <th style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;">Year of Passing</th>
                                </tr>
                                <tr>
                                    <td style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;">1</td>
                                    <td style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"><?php echo strtoupper($data6['ss1']) ?></td>
                                    <td style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"><?php echo $data6['mm1'] ?></td>
                                    <td style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"><?php echo $data5['twelvethPassingYear'] ?></td>
                                </tr>
                                <tr>
                                    <td style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;">2</td>
                                    <td style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"><?php echo strtoupper($data6['ss2']) ?></td>
                                    <td style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"><?php echo $data6['mm2'] ?></td>
                                    <td style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"></td>
                                </tr>
                                <tr>
                                    <td style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;">3</td>
                                    <td style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"><?php echo strtoupper($data6['ss3']) ?></td>
                                    <td style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"><?php echo $data6['mm3'] ?></td>
                                    <td style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"></td>
                                </tr>
                                <tr>
                                    <td style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;">4</td>
                                    <td style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"><?php echo strtoupper($data6['ss4']) ?></td>
                                    <td style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"><?php echo $data6['mm4'] ?></td>
                                    <td style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"></td>
                                </tr>
                                <tr>
                                    <td style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;">5</td>
                                    <td style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"><?php echo strtoupper($data6['ss5']) ?></td>
                                    <td style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"><?php echo $data6['mm5'] ?></td>
                                    <td style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"></td>
                                </tr>
                                <tr>
                                    <td style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;">6</td>
                                    <td style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"><?php echo strtoupper($data6['ss6']) ?></td>
                                    <td style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"><?php echo $data6['mm6'] ?></td>
                                    <td style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                       <tr style="height:20px;"></tr>
                    <tr>
                        <td colspan="2" style="padding:10px 0 4px;">
                            <table style="width:100%;">
                                <tr>
                                    <td style="padding:4px 0;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;width:30%">Name of the Institution last attended:</td>
                                    <td  style="padding:4px 0;border-bottom:1px solid #b5b5b5;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;text-align:left;"></td>
                                </tr>
                                <tr>
                                    <td colspan="2" style="padding:4px 0 8px;border-bottom:1px solid #b5b5b5;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;text-align:left;"></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" style="padding:0 0 8px;">
                            <table style="width:100%;">
                                <tr>
                                    <td style="padding:4px 0;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;width:15%">Board affiliated to:</td>
                                    <td  style="padding:4px 0;border-bottom:1px solid #b5b5b5;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;text-align:left;"></td>
                                </tr>
                                <tr>
                                    <td colspan="2" style="padding:5px 0 8px;border-bottom:1px solid #b5b5b5;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;text-align:left;"></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>   
        <tr>
            <td>
                <table style="width:100%;font-family:Helvetica, Arial, sans-serif;">
                    <tr>
                        <th colspan="2" bgcolor="#0b5385" align="left" style="background-color:#0b5385;color:#ffffff;padding:5px 15px;-webkit-print-color-adjust: exact; ">FOR LATERAL ENTRANTS</th>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <table style="width:100%;">
                                <tr>
                                    <td style="padding:4px 0;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;width:20%">Name of the University:</td>
                                    <td  style="padding:4px 0;border-bottom:1px solid #b5b5b5;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;text-align:left;"><?php echo strtoupper($data4['universityName']) ?></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td style="width:50%;padding:4px 0;">
                            <table style="width:100%;">
                                <tr>
                                    <td align="left" style="width:35%;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;">Name of the College:</td>
                                    <td align="left" style="border-bottom:1px solid #b5b5b5;width:65%;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"><?php echo strtoupper($data4['collegeName']) ?></td>
                                </tr>
                            </table>
                        </td>
                        <td style="width:50%;padding:8px 0;">
                            <table style="width:100%;">
                                <tr>
                                    <td align="left" style="width:35%;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;">Degree Completed:</td>
                                    <td align="left" style="border-bottom:1px solid #b5b5b5;width:65%;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"></td>
                                </tr>
                            </table>
                        </td>						
                    </tr>
					<tr>
                        <td style="width:50%;padding:8px 0;">
                            <table style="width:100%;">
                                <tr>
                                    <td align="left" style="width:35%;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;">Year of Passing:</td>
                                    <td align="left" style="border-bottom:1px solid #b5b5b5;width:65%;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"><?php echo $data4['yearOfPassing'] ?></td>
                                </tr>
                            </table>
                        </td>
                        <td style="width:50%;padding:8px 0;">
                            <table style="width:100%;">
                                <tr>
                                    <td align="left" style="width:35%;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;">Percentage:</td>
                                    <td align="left" style="border-bottom:1px solid #b5b5b5;width:65%;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"><?php echo $data4['percentage'] ?></td>
                                </tr>
                            </table>
                        </td>						
                    </tr>
                    <tr>
                        <td colspan="2" style="padding:8px 0;">
                            <table style="width:100%;border-collapse:collapse;">
                                <tr>
                                    <th rowspan="2" style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"></th>
                                    <th rowspan="2" style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;">Subjects</th>
                                    <th colspan="4" style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;">Marks (%)</th>
                                    <th  rowspan="2" style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;">Year of Passing</th>
                                </tr>
                                <tr>
                                    <th style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;">1<sup>st</sup> Year</th>
                                    <th style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;">2<sup>nd</sup> Year</th>
                                    <th style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;">3<sup>rd</sup> Year</th>
                                    <th style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;">4<sup>th</sup> Year</th>
                                </tr>
                                <tr>
                                    <td style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;">1</td>
                                    <td style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"></td>
                                    <td style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"></td>
                                    <td style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"></td>
                                    <td style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"></td>
                                    <td style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"></td>
                                    <td style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"></td>
                                </tr>
                                <tr>
                                    <td style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;">2</td>
                                    <td style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"></td>
                                    <td style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"></td>
                                    <td style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"></td>
                                    <td style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"></td>
                                    <td style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"></td>
                                    <td style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"></td>
                                </tr>
                                <tr>
                                    <td style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;">3</td>
                                    <td style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"></td>
                                    <td style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"></td>
                                    <td style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"></td>
                                    <td style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"></td>
                                    <td style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"></td>
                                    <td style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"></td>
                                </tr>
                                <tr>
                                    <td style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;">4</td>
                                    <td style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"></td>
                                    <td style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"></td>
                                    <td style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"></td>
                                    <td style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"></td>
                                    <td style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"></td>
                                    <td style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"></td>
                                </tr>
                                <tr>
                                    <td style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;">5</td>
                                    <td style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"></td>
                                    <td style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"></td>
                                    <td style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"></td>
                                    <td style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"></td>
                                    <td style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"></td>
                                    <td style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"></td>
                                </tr>
                                <tr>
                                    <td style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;">6</td>
                                    <td style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"></td>
                                    <td style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"></td>
                                    <td style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"></td>
                                    <td style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"></td>
                                    <td style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"></td>
                                    <td style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <table style="width:100%">
                                <tr>
                                    <td style="padding:4px 0 8px 10px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;width:38%;text-align:left;">Have you earned any academic honors?</td>
                                    <td  style="padding:4px 0;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;text-align:left;">Yes / No</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <table style="width:100%;">
                                <tr>
                                    <td style="padding:4px 0 8px 10px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;width:12%;text-align:left;">If yes</td>
                                    <td style="padding:4px 0;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;width:14%">High School:</td>
                                    <td  style="padding:4px 0;border-bottom:1px solid #b5b5b5;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;text-align:left;"></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <table style="width:100%;">
                                <tr>
                                    <td style="padding:4px 0;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;width:22%">Higher Secondary School:</td>
                                    <td  style="padding:4px 0;border-bottom:1px solid #b5b5b5;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;text-align:left;"></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" style="padding:0 0 8px;">
                            <table style="width:100%;">
                                <tr>
                                    <td style="padding:4px 0;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;width:18%">College Education:</td>
                                    <td  style="padding:4px 0;border-bottom:1px solid #b5b5b5;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;text-align:left;"></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr> 
        <tr>
            <td>
                <table style="width:100%;font-family:Helvetica, Arial, sans-serif;">
                    <tr>
                        <th colspan="2" bgcolor="#0b5385" align="left" style="background-color:#0b5385;color:#ffffff;padding:10px 15px;-webkit-print-color-adjust: exact; ">EXTRA AND CO-CURRICULAR ACTIVITIES</th>
                    </tr>
                    <tr>
                        <td colspan="2" style="padding:4px 0;">
                            <table style="width:100%;">
                                <tr>
                                    <td style="padding:4px 0;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;width:4%">1.</td>
                                    <td  style="padding:4px 0;border-bottom:1px solid #b5b5b5;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;text-align:left;"></td>
                                </tr>
                                <tr>
                                    <td style="padding:4px 0;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;width:4%">2.</td>
                                    <td  style="padding:4px 0;border-bottom:1px solid #b5b5b5;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;text-align:left;"></td>
                                </tr>
                                <tr>
                                    <td style="padding:4px 0;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;width:4%">3.</td>
                                    <td  style="padding:4px 0;border-bottom:1px solid #b5b5b5;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;text-align:left;"></td>
                                </tr>
                                <tr>
                                    <td style="padding:4px 0;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;width:4%">4.</td>
                                    <td  style="padding:4px 0;border-bottom:1px solid #b5b5b5;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;text-align:left;"></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" style="padding:4px 0;">
                            <table style="width:100%;">
                                <tr>
                                    <td style="padding:4px 0;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;width:80%;">Did you represent College / University / National / International Levels in extra curricular activities</td>
                                    <td style="padding:4px 0 8px 20px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;text-align: left;">Yes / No</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" style="padding:4px 0 8px 15px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;text-align: left;">If yes, specify:</td>
                    </tr>
                    <tr>
                        <td colspan="2" style="padding:0px 0 15px;">
                            <table style="width:100%;border-collapse:collapse;">
                                <tr>
                                    <th style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;">Subjects</th>
                                    <th style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;">Year</th>
                                    <th style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;">Level</th>
                                </tr>
                                <tr>
                                    <td style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;">1</td>
                                    <td style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"></td>
                                    <td style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"></td>
                                </tr>
                                <tr>
                                    <td style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;">2</td>
                                    <td style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"></td>
                                    <td style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"></td>
                                </tr>
                                <tr>
                                    <td style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;">3</td>
                                    <td style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"></td>
                                    <td style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"></td>
                                </tr>
                                <tr>
                                    <td style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;">4</td>
                                    <td style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"></td>
                                    <td style="border:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>  
        <tr style="height:50px;"></tr>
        <tr>
            <td>
                <table style="width:100%;font-family:Helvetica, Arial, sans-serif;">
                    <tr>
                        <th colspan="2" bgcolor="#0b5385" align="left" style="background-color:#0b5385;color:#ffffff;padding:10px 15px;-webkit-print-color-adjust: exact; ">CONFIRMATION</th>
                    </tr>
                    <tr>
                        <td colspan="2" style="padding:4px 0;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;text-align:left;">
                            We, the undersigned confirm that to the best of our knowledge, the information furnished in this <strong>APPLICATION FORM</strong> is true and complete. We understand
                            That the B.S. program shall be either in <strong>DMSF</strong> or one of its Partner Institutions.
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <table style="width:100%;">
                                <tr>
                                    <td style="width:33%;padding:4px 0;">
                                        <table style="width:80%;">
                                            <tr>
                                                <td style="border-bottom:1px solid #b5b5b5;padding:4px 0;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"></td>
                                            </tr>
                                            <tr>
                                                <td style="font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;">Applicant’s Signature</td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td style="width:33%;padding:4px 0;" align="center">
                                        <table style="width:70%;">
                                            <tr>
                                                <td style="border-bottom:1px solid #b5b5b5;padding:4px 0;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"></td>
                                            </tr>
                                            <tr>
                                                <td style="font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;text-align:center;">Date</td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td style="width:33%;padding:4px 0;">
                                        <table style="width:80%;">
                                            <tr>
                                                <td style="border-bottom:1px solid #b5b5b5;padding:4px 0;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"></td>
                                            </tr>
                                            <tr>
                                                <td style="font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;">Parent’s / Guardian’s Signature</td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                <table style="width:100%;font-family:Helvetica, Arial, sans-serif;">
                    <tr>
                        <th colspan="2" bgcolor="#0b5385" align="left" style="background-color:#0b5385;color:#ffffff;padding:5px 15px;-webkit-print-color-adjust: exact; ">CHECK LIST OF DOCUMENTS</th>
                    </tr>
                    <tr>
                        <td style="padding:4px 0;width:40%">
                            <table align="center" style="width:100%;">
                                <tr>
                                    <td  style="border:1px solid #b5b5b5;width:22px;
                                    padding:4px 5px;height:13px;"><?php if($r3['sslcMarksheet'] !== ""){  ?>&#10004<?php } ?></td>
                                    <td style="font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;padding:0 0 0 5px;text-align:left;">10th Std. Mark Sheet</td>
                                </tr>
                            </table>
                        </td>
                        <td style="padding:4px 0;width:60%">
                            <table align="center" style="width:100%;">
                                <tr>
                                    <td  style="border:1px solid #b5b5b5;width:22px;
                                    padding:4px 5px;height:13px;"><?php if($r3['migration'] !== ""){  ?>&#10004<?php } ?></td>
                                    <td style="font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;padding:0 0 0 5px;text-align:left;">Migration Certificate</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:4px 0;width:40%">
                            <table align="center" style="width:100%;">
                                <tr>
                                    <td  style="border:1px solid #b5b5b5;width:22px;
                                    padding:4px 5px;height:13px;"><?php if($r3['elevenMarksheet'] !== ""){  ?>&#10004<?php } ?></td>
                                    <td style="font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;padding:0 0 0 5px;text-align:left;">11th Std. Mark Sheet</td>
                                </tr>
                            </table>
                        </td>
                        <td style="padding:4px 0;width:60%">
                            <table align="center" style="width:100%;">
                                <tr>
                                    <td  style="border:1px solid #b5b5b5;width:22px;
                                    padding:4px 5px;height:13px;"><?php if($r3['birth'] !== ""){  ?>&#10004<?php } ?></td>
                                    <td style="font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;padding:0 0 0 5px;text-align:left;">Birth Certificate</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:4px 0;width:40%">
                            <table align="center" style="width:100%;">
                                <tr>
                                    <td  style="border:1px solid #b5b5b5;width:22px;
                                    padding:4px 5px;height:13px;"><?php if($r3['hscMarksheet'] !== ""){  ?>&#10004<?php } ?></td>
                                    <td style="font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;padding:0 0 0 5px;text-align:left;">12th Std. Mark Sheet</td>
                                </tr>
                            </table>
                        </td>
                        <td style="padding:4px 0;width:60%">
                            <table align="center" style="width:100%;">
                                <tr>
                                    <td  style="border:1px solid #b5b5b5;width:22px;
                                    padding:4px 5px;height:13px;"><?php if($r3['communication'] !== ""){  ?>&#10004<?php } ?></td>
                                    <td style="font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;padding:0 0 0 5px;text-align:left;">Community / Caste Certificate</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:4px 0;width:40%">
                            <table align="center" style="width:100%;">
                                <tr>
                                    <td  style="border:1px solid #b5b5b5;width:22px;
                                    padding:4px 5px;height:13px;"><?php if($r3['neetMarksheet'] !== ""){  ?>&#10004<?php } ?></td>
                                    <td style="font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;padding:0 0 0 5px;text-align:left;">NEET Mark Sheet</td>
                                </tr>
                            </table>
                        </td>
                        <td style="padding:4px 0;width:60%">
                            <table align="center" style="width:100%;">
                                <tr>
                                    <td  style="border:1px solid #b5b5b5;width:22px;
                                    padding:4px 5px;height:13px;"><?php if($r3['passport'] !== ""){  ?>&#10004<?php } ?></td>
                                    <td style="font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;padding:0 0 0 5px;text-align:left;">Copy of Passport ( All Pages-including the front and back cover)</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:4px 0;width:40%">
                            <table align="center" style="width:100%;">
                                <tr>
                                    <td  style="border:1px solid #b5b5b5;width:22px;
                                    padding:4px 5px;height:13px;"><?php if($r3['ugMarksheet'] !== ""){  ?>&#10004<?php } ?></td>
                                    <td style="font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;padding:0 0 0 5px;text-align:left;">Undergraduate Mark Sheets / Transcripts</td>
                                </tr>
                            </table>
                        </td>
                        <td style="padding:4px 0;width:60%">
                            <table align="center" style="width:100%;">
                                <tr>
                                    <td  style="border:1px solid #b5b5b5;width:22px;
                                    padding:4px 5px;height:13px;"><?php if($r3['photo'] !== ""){  ?>&#10004<?php } ?></td>
                                    <td style="font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;padding:0 0 0 5px;text-align:left;">10 Copies of Passport size and 3 Copies of Stamp Size PHOTOS</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:4px 0;width:40%">
                            <table align="center" style="width:100%;">
                                <tr>
                                    <td  style="border:1px solid #b5b5b5;width:22px;
                                    padding:4px 5px;height:13px;"><?php if($r3['tc'] !== ""){  ?>&#10004<?php } ?></td>
                                    <td style="font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;padding:0 0 0 5px;text-align:left;">Transfer Certificate</td>
                                </tr>
                            </table>
                        </td>
                        <td style="padding:4px 0;width:60%">
                            <table align="center" style="width:100%;">
                                <tr>
                                    <td  style="border:1px solid #b5b5b5;width:22px;
                                    padding:4px 5px;height:13px;"><?php if($r3['aadharCard'] !== ""){  ?>&#10004<?php } ?></td>
                                    <td style="font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;padding:0 0 0 5px;text-align:left;">Students and Parents Aadhar Card (Copies)</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" style="padding:4px 0;">
                            <table style="width:100%;">
                                <tr>
                                    <td style="padding:4px 0;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;width:40%">Any other documents ( Please specify below):</td>
                                    <td  style="padding:4px 0;border-bottom:1px solid #b5b5b5;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;text-align:left;"></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                <table style="width:100%;font-family:Helvetica, Arial, sans-serif;">
                    <tr>
                        <th colspan="2" bgcolor="#0b5385" align="left" style="background-color:#0b5385;color:#ffffff;padding:5px 15px;-webkit-print-color-adjust: exact; ">FOR OFFICE USE</th>
                    </tr>
                    <tr>
                        <td colspan="2" style="padding:4px 0;">
                            <table style="width:80%;" align="center">
                                <tr>
                                    <td  style="border:1px solid #b5b5b5;width:22px;
                                    padding:4px 5px;height:13px;"></td>
                                    <td style="font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;padding:0 0 0 10px;text-align:left;">All documents have been verified true.</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" style="padding:4px 0;">
                            <table style="width:80%;" align="center">
                                <tr>
                                    <td  style="font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;padding:4px 5px;width:15%;">Remarks:</td>
                                    <td style="border-bottom:1px solid #b5b5b5;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;text-align:left;"></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" style="padding:4px 0;">
                            <table style="width:80%;" align="center">
                                <tr>
                                    <td  style="border:1px solid #b5b5b5;width:22px;
                                    padding:4px 5px;height:13px;"></td>
                                    <td style="font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;padding:0 0 0 10px;text-align:left;">Candidate is eligible to apply for the course.</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" style="padding:4px 0;">
                            <table style="width:80%;" align="center">
                                <tr>
                                    <td  style="font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;padding:4px 5px;width:15%;">Remarks:</td>
                                    <td style="border-bottom:1px solid #b5b5b5;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;text-align:left;"></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                <table style="width:100%;font-family:Helvetica, Arial, sans-serif;">
                    <tr>
                        <th colspan="2" bgcolor="#0b5385" align="left" style="background-color:#0b5385;color:#ffffff;padding:5px 15px;-webkit-print-color-adjust: exact; ">COLLEGE FOR BS (DMSF and Partner Institution)</th>
                    </tr>
                    <tr>
                        <td colspan="2" style="padding:4px 0;">
                            <table style="width:100%;" align="center">
                                <tr>
                                    <td align="center">
                                        <table style="width:90%;">
                                            <tr>
                                                <td style="border:1px solid #b5b5b5;width:22px; padding:4px 5px;height:13px;"></td>
                                                <td style="font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;padding:0 0 0 10px;text-align:left;">DAVAO Medical School Foundation</td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td align="center">
                                        <table style="width:90%;">
                                            <tr>
                                                <td style="border:1px solid #b5b5b5;width:22px; padding:4px 5px;height:13px;"></td>
                                                <td style="font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;padding:0 0 0 10px;text-align:left;">SAN Pedro College</td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td align="center">
                                        <table style="width:90%;">
                                            <tr>
                                                <td style="border:1px solid #b5b5b5;width:22px; padding:4px 5px;height:13px;"></td>
                                                <td style="font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;padding:0 0 0 10px;text-align:left;">Brokenshire College</td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" style="padding:4px 0;">
                            <table align="center" style="width:90%;">
                                <tr>
                                    <td style="width:50%">
                                        <table style="width:90%;">
                                            <tr>
                                                <td style="padding:4px 0;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;width:24%">Verified By:</td>
                                                <td style="padding:4px 0;border-bottom:1px solid #b5b5b5;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;text-align:left;"></td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td style="width:50%">
                                        <table style="width:90%;">
                                            <tr>
                                                <td style="padding:4px 0;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;width:16%">Signature:</td>
                                                <td style="padding:4px 0;border-bottom:1px solid #b5b5b5;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;text-align:left;"></td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                <table style="width:100%;font-family:Helvetica, Arial, sans-serif;">
                    <tr>
                        <th colspan="2" bgcolor="#0b5385" align="left" style="background-color:#0b5385;color:#ffffff;padding:5px 15px;-webkit-print-color-adjust: exact; ">FOR ACCOUNT OFFICE USE</th>
                    </tr>
                    <tr>
                        <td colspan="2" style="padding:4px 0;" align="center">
                            <table style="width:90%;">
                                <tr>
                                    <td style="border:1px solid #b5b5b5;width:22px; padding:4px 5px;height:13px;"></td>
                                    <td style="padding:4px 0 8px 15px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;width:27%;">Any other pending matter:</td>
                                    <td style="padding:4px 0;border-bottom:1px solid #b5b5b5;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;text-align:left;"></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" style="padding:4px 0;" align="center">
                            <table style="width:90%;">
                                <tr>
                                    <td style="width:30%;">
                                        <table style="width:100%;">
                                            <tr>
                                                <td style="border:1px solid #b5b5b5;width:22px; padding:4px 5px;height:13px;"></td>
                                                <td style="padding:4px 0 8px 15px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;">Fee Payment Details:</td>
                                            </tr>   
                                        </table>
                                    </td>
                                    <td style="width:40%;">
                                        <table style="width:100%;">
                                            <tr>
                                                <td style="padding:4px 0 8px 15px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;width:34%;">Receipt No:</td>
                                                <td style="border-bottom:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"></td>
                                            </tr>   
                                        </table>
                                    </td>
                                    <td style="width:33%;">
                                        <table style="width:100%;">
                                            <tr>
                                                <td style="padding:4px 0 8px 15px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;width:25%;">Amount:</td>
                                                <td style="border-bottom:1px solid #b5b5b5;padding:4px 5px;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"></td>
                                            </tr>   
                                        </table>
                                    </td>
                                </tr> 
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <table style="width:80%;" align="center">
                                <tr>
                                    <td style="width:50%;padding:4px 0;">
                                        <table style="width:80%;">
                                            <tr>
                                                <td style="border-bottom:1px solid #b5b5b5;padding:4px 0;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"></td>
                                            </tr>
                                            <tr>
                                                <td style="font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;">Officer in Charge</td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td style="width:50%;padding:4px 0;" align="center">
                                        <table style="width:70%;">
                                            <tr>
                                                <td style="border-bottom:1px solid #b5b5b5;padding:4px 0;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;"></td>
                                            </tr>
                                            <tr>
                                                <td style="font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:18px;text-align:center;">Date</td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
	<div class="row mb-5"> <div class="col-md-12 text-center">  
                                            <div class="ctaWrap">
                                                <button class="btn btn-outline-warning btn-print" id="printBtn" onclick="PrintApplication()">Print this page</button>
                                                <button type="button" class="btn btn-next" id="okBtn" onclick="reload()" >OK</button>
                                            </div>
                                     </div>
							</div>
</div>
</body>

<script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/bootstrap-select.min.js"></script>
        <script src="assets/js/main.js"></script>
        <script src="myjs/reg.js"></script>
        
        <script>
            function PrintApplication(){
               
                document.getElementById("printBtn").style.display = "none";
                document.getElementById("okBtn").style.display = "none";
                 window.print();
            }
            
        </script>
</html>

