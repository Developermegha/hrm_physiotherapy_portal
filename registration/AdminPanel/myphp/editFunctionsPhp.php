<?php

session_start();
//include '../../connection.php';

//$conn = connection();

define('DB_SERVER2','localhost');
define('DB_USER2','dmsfplsm_dmsf_us');
define('DB_PASS2' ,'v5J=8%.^H,J3');
define('DB_NAME2', 'dmsfplsm_dmsf_db'); 
$connn = mysqli_connect(DB_SERVER2,DB_USER2,DB_PASS2,DB_NAME2);

define('DB_SERVER','localhost');
define('DB_USER','dmsfplsm_account');
define('DB_PASS' ,'x0d$mc*7vC39');
define('DB_NAME', 'dmsfplsm_account-portal');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);

 define('DB_SERVER1','localhost');
define('DB_USER1','dmsfplsm_dmsf2');
define('DB_PASS1' ,'dmsf2@123');
define('DB_NAME1', 'dmsfplsm_dmsf2');
$conn = mysqli_connect(DB_SERVER1,DB_USER1,DB_PASS1,DB_NAME1);




error_reporting(E_PARSE);

if (isset($_REQUEST['option'])) { 
    $option = $_REQUEST['option'];

    switch ($option) { 

        case 'editPersonal':
            
            $q1 = "UPDATE `personal_tbl` SET `studentIdNumber`='".$_REQUEST['studentIdNumber']."',`philippinesPhone`='".$_REQUEST['philippinesPhone']."',`fName`='".$_REQUEST['fName']."',`mName`='".$_REQUEST['mName']."',`lName`='".$_REQUEST['lName']."',`telegramNumber`='".$_REQUEST['telegramNumber']."',`whatsappNumber`='".$_REQUEST['whatsappNumber']."',`email`='".$_REQUEST['email']."',`gender`='".$_REQUEST['gender']."',`dob`='".$_REQUEST['dob']."',`bloodGroup`='".$_REQUEST['bloodGroup']."',`nationality`='".$_REQUEST['nationality']."' WHERE `id`='".$_REQUEST['id']."' and `isActive`= 1";
            $result = mysqli_query($conn, $q1);
            
            $q2 = "UPDATE `tw_students` SET `rollno`='".$_REQUEST['studentIdNumber']."',`first_name`='".$_REQUEST['fName']."',`middle_name`='".$_REQUEST['mName']."',`last_name`='".$_REQUEST['lName']."',`whatsapp_no`='".$_REQUEST['whatsappNumber']."',`email`='".$_REQUEST['email']."',`gender`='".$_REQUEST['gender']."',`dob`='".$_REQUEST['dob']."',`blood_group`='".$_REQUEST['bloodGroup']."'  WHERE `rollno`='".$_REQUEST['studentIdNumber']."' ";
            $result1 = mysqli_query($con, $q2);
            
             $q3 = "UPDATE `student` SET `consultant`='".$_REQUEST['consultant']."' WHERE `regNo`='".$_REQUEST['studentIdNumber']."' ";
           $result2 = mysqli_query($connn, $q3); 
            
            
            if ($result2 > 0) {
                $Msg['message'] = "success";
            } else {
                $Msg['message'] = "failed";
            }
            echo json_encode($Msg);
            break;
			
		case 'editInformation':
		    $fatherName = mysqli_real_escape_string($_REQUEST['fatherName']);
            $fatherMobile = $_REQUEST['fatherMobile'];
            $fatherEmail = $_REQUEST['fatherEmail'];
            $motherName = $_REQUEST['motherName'];
            $motherMobile = $_REQUEST['motherMobile'];
            $motherEmail = $_REQUEST['motherEmail'];
            $fatherOccupation = $_REQUEST['fatherOccupation'];
            $motherOccupation = $_REQUEST['motherOccupation'];
            $temporaryAddress = $_REQUEST['temporaryAddress'];
            $tCountry = $_REQUEST['tCountry'];
            $tState = $_REQUEST['tState'];
            $tDistrict = $_REQUEST['tDistrict'];
            $tCity = $_REQUEST['tCity'];
            $tPincode = $_REQUEST['tPincode'];
            $permanentAddress = $_REQUEST['permanentAddress'];
            $pCountry = $_REQUEST['pCountry'];
            $pState = $_REQUEST['pState'];
            $pDistrict = $_REQUEST['pDistrict'];
            $pCity = $_REQUEST['pCity'];
            $pPincode = $_REQUEST['pPincode'];
            $passportNumber = $_REQUEST['passportNumber'];
            $dateOfIssue = $_REQUEST['dateOfIssue'];
            $placeOfIssue = $_REQUEST['placeOfIssue'];
            $dateOfExpiry = $_REQUEST['dateOfExpiry'];
            
		    $getinfo  =  mysqli_query($conn,"SELECT * FROM `information_tbl` WHERE  personalID='".$_REQUEST['id']."' AND isActive='1'");
		    if(mysqli_num_rows($getinfo) > 0){
            $q2 = "UPDATE `information_tbl` SET `fatherName`='".$_REQUEST['fatherName']."',`fatherMobile`='".$_REQUEST['fatherMobile']."',`fatherEmail`='".$_REQUEST['fatherEmail']."',`motherName`='".$_REQUEST['motherName']."',`motherMobile`='".$_REQUEST['motherMobile']."',`motherEmail`='".$_REQUEST['motherEmail']."',`fatherOccupation`='".$_REQUEST['fatherOccupation']."',`motherOccupation`='".$_REQUEST['motherOccupation']."',`temporaryAddress`='".$_REQUEST['temporaryAddress']."',`tCountry`='".$_REQUEST['tCountry1']."',`tState`='".$_REQUEST['tState']."',`tDistrict`='".$_REQUEST['tDistrict']."',`tCity`='".$_REQUEST['tCity']."',`tPincode`='".$_REQUEST['tPincode']."',`permanentAddress`='".$_REQUEST['permanentAddress']."',`pCountry`='".$_REQUEST['pCountry1']."',`pState`='".$_REQUEST['pState']."',`pDistrict`='".$_REQUEST['pDistrict']."',`pCity`='".$_REQUEST['pCity']."',`pPincode`='".$_REQUEST['pPincode']."',`passportNumber`='".$_REQUEST['passportNumber']."',`dateOfIssue`='".$_REQUEST['dateOfIssue']."',`placeOfIssue`='".$_REQUEST['placeOfIssue']."',`dateOfExpiry`='".$_REQUEST['dateOfExpiry']."' WHERE `personalID`='".$_REQUEST['id']."' and `isActive`= 1";
            $result2 = mysqli_query($conn, $q2);
		    }else{
		         $q2 = "INSERT INTO `information_tbl`(`fatherName`, `fatherMobile`, `fatherEmail`, `motherName`, `motherMobile`, `motherEmail`, `fatherOccupation`, `motherOccupation`, `temporaryAddress`, `tCountry`, `tState`, `tDistrict`, `tCity`, `tPincode`, `permanentAddress`, `pCountry`, `pState`, `pDistrict`, `pCity`, `pPincode`, `passportNumber`, `dateOfIssue`, `placeOfIssue`, `dateOfExpiry`,`personalID`, `isActive`) "
                        . "VALUES('" . $fatherName . "','" . $fatherMobile . "','" . $fatherEmail . "','" . $motherName . "','" . $motherMobile . "','" . $motherEmail . "','" . $fatherOccupation . "','" . $motherOccupation . "','" . $temporaryAddress . "','" . $tCountry . "','" . $tState . "','" . $tDistrict . "','" . $tCity . "','" . $tPincode . "','" . $permanentAddress . "','" . $pCountry . "','" . $pState . "','" . $pDistrict . "','" . $pCity . "','" . $pPincode . "','" . $passportNumber . "','" . $dateOfIssue . "','" . $placeOfIssue . "','" . $dateOfExpiry . "','" . $_REQUEST['id'] . "','1') ";
                $result2 = mysqli_query($conn, $q2);
		    }
            if ($result2 > 0) {
                $msg['message'] = "success";
            } else {
                $msg['message'] = "failed";
            }
            echo json_encode($msg);
            break;
		
		case 'editHostel':
		     $hostelOrHome = $_REQUEST['hostelOrHome'];
            $center = $_REQUEST['center'];
		    $getHostel =  mysqli_query($conn,"SELECT * FROM `hostel_tbl` WHERE  personalId='".$_REQUEST['id']."' AND isActive='1'");
		    if(mysqli_num_rows($getHostel) > 0){
            $q2 = "UPDATE `hostel_tbl` SET `accommodation`='".$_REQUEST['accommodation']."',`center`='".$_REQUEST['center']."' WHERE `personalId`='".$_REQUEST['id']."' and `isActive`= 1";
            $result3 = mysqli_query($conn, $q2);
		    }else{
		        $q2 = "INSERT INTO `hostel_tbl`(`accommodation`, `center`,`personalId`, `isActive`) "
                        . "VALUES('" . $hostelOrHome . "','" . $center . "','" . $_REQUEST['id'] . "','1')";
                $result3 = mysqli_query($conn, $q2);
		    }
		    
		     $q3 = "UPDATE `tw_students` SET `center`='".$_REQUEST['center']."'  WHERE `rollno`='".$_REQUEST['studentIdNumber']."' ";   
            $resulttw = mysqli_query($con, $q3);
		    
		    
            if ($resulttw > 0) { 
                $Msg1['message'] = "success";
            } else {
                $Msg1['message'] = "failed";
            }
            echo json_encode($Msg1);
            break;
            
		case 'editStudied':
		     $currentBatch = $_REQUEST['currentBatch'];
            $studied = $_REQUEST['studied'];
            $yearOfStartBS = $_REQUEST['yearOfStartBS'];
            $monthBS = $_REQUEST['monthBS'];
            $responsibleName = $_REQUEST['responsibleName'];
            $responsibleOccupation = $_REQUEST['responsibleOccupation'];
            $relationship = $_REQUEST['relationship'];
            $responsibleContactNumber = $_REQUEST['responsibleContactNumber'];
            $responsibleEmail = $_REQUEST['responsibleEmail'];
            $lateral = $_REQUEST['lateral'];
            $universityName = $_REQUEST['universityName'];
            $collegeName = $_REQUEST['collegeName'];
            $yearOfPassing = $_REQUEST['yearOfPassing'];
            $percentage = $_REQUEST['percentage'];
		     $getStudy =  mysqli_query($conn,"SELECT * FROM `studied_tbl` WHERE  personalID='".$_REQUEST['id']."' AND isActive='1'");
		     if(mysqli_num_rows($getStudy) > 0){
            $q4 = "UPDATE `studied_tbl` SET `currentBatch`='".$_REQUEST['currentBatch']."',`studied`='".$_REQUEST['studied']."',`yearOfStartBS`='".$_REQUEST['yearOfStartBS']."',`monthBS`='".$_REQUEST['monthBS']."',`responsibleName`='".$_REQUEST['responsibleName']."',`responsibleOccupation`='".$_REQUEST['responsibleOccupation']."',`relationship`='".$_REQUEST['relationship']."',`responsibleContactNumber`='".$_REQUEST['responsibleContactNumber']."',`responsibleEmail`='".$_REQUEST['responsibleEmail']."',`lateralEntry`='".$_REQUEST['lateralEntry']."',`universityName`='".$_REQUEST['universityName']."',`collegeName`='".$_REQUEST['collegeName']."',`yearOfPassing`='".$_REQUEST['yearOfPassing']."',`percentage`='".$_REQUEST['percentage']."' WHERE `personalID`='".$_REQUEST['id']."' and `isActive`= 1";
            $result4 = mysqli_query($conn, $q4);
		     }else{
		          $q4 = "INSERT INTO `studied_tbl`(`currentBatch`, `studied`, `yearOfStartBS`, `monthBS`,responsibleName,responsibleOccupation,relationship,responsibleContactNumber,responsibleEmail,lateralEntry,universityName,collegeName,yearOfPassing,percentage,`personalID`, `isActive`) "
                        . "VALUES('" . $currentBatch . "','" . $studied . "','" . $yearOfStartBS . "','" . $monthBS . "','" . $responsibleName . "','" . $responsibleOccupation . "','" . $relationship . "','" . $responsibleContactNumber . "','" . $responsibleEmail . "','" . $lateralEntry . "','" . $universityName . "','" . $collegeName . "','" . $yearOfPassing . "','" . $percentage . "','" . $_REQUEST['id'] . "','1')";
                $result4 = mysqli_query($conn, $q4);
		     }
            if ($result4 > 0) {
                $Msg4['message'] = "success";
            } else {
                $Msg4['message'] = "failed";
            }
            echo json_encode($Msg4);
            break;	
			
		case 'editEducation':
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
		     $getEducation =  mysqli_query($conn,"SELECT * FROM `educational_tbl` WHERE  personalId='".$_REQUEST['id']."' AND isActive='1'");
		      if(mysqli_num_rows($getEducation) > 0){
            $q5 = "UPDATE `educational_tbl` SET `tenthPercentage`='".$_REQUEST['tenthPercentage']."',`tenthSchoolName`='".$_REQUEST['tenthSchoolName']."',`tenthBoard`='".$_REQUEST['tenthBoard']."',`tenthSchoolAddress`='".$_REQUEST['tenthSchoolAddress']."',`tenthDistrict`='".$_REQUEST['tenthDistrict']."',`tenthState`='".$_REQUEST['tenthState']."',`tenthCountry`='".$_REQUEST['tenthCountry']."',`tenthPassingYear`='".$_REQUEST['tenthPassingYear']."',`twelvethPercentage`='".$_REQUEST['twelvethPercentage']."',`twelvethSchoolName`='".$_REQUEST['twelvethSchoolName']."',`twelvethBoard`='".$_REQUEST['twelvethBoard']."',`twelvethSchoolAddress`='".$_REQUEST['twelvethSchoolAddress']."',`twelvethDistrict`='".$_REQUEST['twelvethDistrict']."',`twelvethState`='".$_REQUEST['twelvethState']."',`twelvethCountry`='".$_REQUEST['twelvethCountry']."',`twelvethPassingYear`='".$_REQUEST['twelvethPassingYear']."',`neetScore`='".$_REQUEST['neetScore']."',`neet_applicable`='".$_REQUEST['neet_applicable']."' WHERE  `personalId`='".$_REQUEST['id']."' and `isActive`= 1";
            $result5 = mysqli_query($conn, $q5);
		      }else{
		          $q5 = "INSERT INTO `educational_tbl`(`tenthPercentage`, `tenthSchoolName`, `tenthBoard`, `tenthSchoolAddress`, `tenthDistrict`, `tenthState`, `tenthCountry`, tenthPassingYear,`twelvethPercentage`, `twelvethSchoolName`, `twelvethBoard`, `twelvethSchoolAddress`, `twelvethDistrict`, `twelvethState`, `twelvethCountry`,twelvethPassingYear, `neetScore`, `personalId`, `isActive`,`neet_applicable`)"
                        . "VALUES('" . $tenthPercentage . "','" . $tenthSchoolName . "','" . $tenthBoard . "','" . $tenthSchoolAddress . "','" . $tenthDistrict . "','" . $tenthState . "','" . $tenthCountry . "','" . $tenthPassingYear . "','" . $twelvethPercentage . "','" . $twelvethSchoolName . "','" . $twelvethBoard . "','" . $twelvethSchoolAddress . "','" . $twelvethDistrict . "','" . $twelvethState . "','" . $twelvethCountry . "','" . $twelvethPassingYear . "','" . $neetScore . "','" . $_REQUEST['id'] . "','1','" . $_REQUEST['neet_applicable'] . "')"; 
                $result5 = mysqli_query($conn, $q5);
		      }
            if ($result5 > 0) {
                $Msg5['message'] = "success";
            } else {
                $Msg5['message'] = "failed";
            }
            echo json_encode($Msg5);
            break;
		
		case 'editMark':
		      $s1 = $_REQUEST['s1'];
            $m1 = $_REQUEST['m1'];
            $s2 = $_REQUEST['s2']; 
            $m2 = $_REQUEST['m2'];
            $s3 = $_REQUEST['s3'];
            $m3 = $_REQUEST['m3'];
            $s4 = $_REQUEST['s4'];
            $m4 = $_REQUEST['m4'];
            $s5 = $_REQUEST['s5'];
            $m5 = $_REQUEST['m5'];
            $s6 = $_REQUEST['s6'];
            $m6 = $_REQUEST['m6'];
            $ss1 = $_REQUEST['ss1'];
            $mm1 = $_REQUEST['mm1'];
            $ss2 = $_REQUEST['ss2'];
            $mm2 = $_REQUEST['mm2'];
            $ss3 = $_REQUEST['ss3'];
            $mm3 = $_REQUEST['mm3'];
            $ss4 = $_REQUEST['ss4'];
            $mm4 = $_REQUEST['mm4'];
            $ss5 = $_REQUEST['ss5'];
            $mm5 = $_REQUEST['mm5'];
            $ss6 = $_REQUEST['ss6'];
            $mm6 = $_REQUEST['mm6'];
            $getmark =  mysqli_query($conn,"SELECT * FROM `mark_tbl` WHERE  personalId='".$_REQUEST['id']."' AND isActive='1'");
            if(mysqli_num_rows($getmark) > 0){
            $q6 = "UPDATE `mark_tbl` SET `s1`='".$_REQUEST['s1']."',`m1`='".$_REQUEST['m1']."',`s2`='".$_REQUEST['s2']."',`m2`='".$_REQUEST['m2']."',`s3`='".$_REQUEST['s3']."',`m3`='".$_REQUEST['m3']."',`s4`='".$_REQUEST['s4']."',`m4`='".$_REQUEST['m4']."',`s5`='".$_REQUEST['s5']."',`m5`='".$_REQUEST['m5']."',`s6`='".$_REQUEST['s6']."',`m6`='".$_REQUEST['m6']."',`ss1`='".$_REQUEST['ss1']."',`mm1`='".$_REQUEST['mm1']."',`ss2`='".$_REQUEST['ss2']."',`mm2`='".$_REQUEST['mm2']."',`ss3`='".$_REQUEST['ss3']."',`mm3`='".$_REQUEST['mm3']."',`ss4`='".$_REQUEST['ss4']."',`mm4`='".$_REQUEST['mm4']."',`ss5`='".$_REQUEST['ss5']."',`mm5`='".$_REQUEST['mm5']."',`ss6`='".$_REQUEST['ss6']."',`mm6`='".$_REQUEST['mm6']."' WHERE `personalId`='".$_REQUEST['id']."' and `isActive`= 1";
            $result6 = mysqli_query($conn, $q6);
            }else{
                  $insertQuery6 = "INSERT INTO `mark_tbl`(`s1`, `m1`, `s2`, `m2`, `s3`, `m3`, `s4`, `m4`, `s5`, `m5`, `s6`, `m6`, `ss1`, `mm1`, `ss2`, `mm2`, `ss3`, `mm3`, `ss4`, `mm4`, `ss5`, `mm5`, `ss6`, `mm6`, `personalId`, `isActive`) "
                        . "VALUES('" . $s1 . "','" . $m1 . "','" . $s2 . "','" . $m2 . "','" . $s3 . "','" . $m3 . "','" . $s4 . "','" . $m4 . "','" . $s5 . "','" . $m5 . "','" . $s6 . "','" . $m6 . "','" . $ss1 . "','" . $mm1 . "','" . $ss2 . "','" . $mm2 . "','" . $ss3 . "','" . $mm3 . "','" . $ss4 . "','" . $mm4 . "','" . $ss5 . "','" . $mm5 . "','" . $ss6 . "','" . $mm6 . "','" . $_REQUEST['id'] . "','1')";
                $result6 = mysqli_query($conn, $insertQuery6);
            }
            if ($result6 > 0) {
                $Msg5['message'] = "success";
            } else {
                $Msg5['message'] = "failed";
            }
            echo json_encode($Msg5);
            break;
		
		case 'img1':
		
			$sslcMarksheet = rand(1,9999).$_FILES['sslcMarksheet']['name'];
            $sslcMarksheet_tmp = $_FILES['sslcMarksheet']['tmp_name'];
            move_uploaded_file($sslcMarksheet_tmp, "../../uploads/doc/" . $sslcMarksheet);
            
			$img1 =  mysqli_query($conn,"SELECT * FROM `document_tbl` WHERE  personalId='".$_REQUEST['id']."' AND isActive='1'");
            if(mysqli_num_rows($img1) > 0){
            $q7 = "UPDATE `document_tbl` SET `sslcMarksheet`='".$sslcMarksheet."' WHERE `personalId`='".$_REQUEST['id']."' and `isActive`= 1";
            $result7 = mysqli_query($conn, $q7);
            }else{
                 $insertQuery7 = "INSERT INTO `document_tbl`(`sslcMarksheet`, `elevenMarksheet`, `hscMarksheet`, `neetMarksheet`, `ugMarksheet`, `tc`, `migration`, `birth`, `communication`, `passport`, `photo`, `aadharCard`,aadharCardBack, `personalId`, `isActive`) "
                        . "VALUES('" . $sslcMarksheet . "','','','','','','','','','','','','','" . $_REQUEST['id'] . "','1')";
                $result7 = mysqli_query($conn, $insertQuery7);
            }
            if ($result7 > 0) {
                $Msg5['message'] = "success";
            } else {
                $Msg5['message'] = "failed";
            }
            echo json_encode($Msg5);
            break;
			
		case 'img2':
		
			$elevenMarksheet = rand(1,9999).$_FILES['elevenMarksheet']['name'];
            $elevenMarksheet_tmp = $_FILES['elevenMarksheet']['tmp_name'];
            move_uploaded_file($elevenMarksheet_tmp, "../../uploads/doc/" . $elevenMarksheet);
            
			$img2 =  mysqli_query($conn,"SELECT * FROM `document_tbl` WHERE  personalId='".$_REQUEST['id']."' AND isActive='1'");
            if(mysqli_num_rows($img2) > 0){
            $q7 = "UPDATE `document_tbl` SET `elevenMarksheet`='".$elevenMarksheet."' WHERE `personalId`='".$_REQUEST['id']."' and `isActive`= 1";
            $result7 = mysqli_query($conn, $q7);
            }else{
                $insertQuery7 = "INSERT INTO `document_tbl`(`sslcMarksheet`, `elevenMarksheet`, `hscMarksheet`, `neetMarksheet`, `ugMarksheet`, `tc`, `migration`, `birth`, `communication`, `passport`, `photo`, `aadharCard`,aadharCardBack, `personalId`, `isActive`) "
                        . "VALUES('','".$elevenMarksheet."','','','','','','','','','','','','" . $_REQUEST['id'] . "','1')";
                $result7 = mysqli_query($conn, $insertQuery7);
            }
            if ($result7 > 0) {
                $Msg5['message'] = "success";
            } else {
                $Msg5['message'] = "failed";
            }
            echo json_encode($Msg5);
            break;	
			
		case 'img3':
		
			$hscMarksheet = rand(1,9999).$_FILES['hscMarksheet']['name'];
            $hscMarksheet_tmp = $_FILES['hscMarksheet']['tmp_name'];
            move_uploaded_file($hscMarksheet_tmp, "../../uploads/doc/" . $hscMarksheet);
			$img3 =  mysqli_query($conn,"SELECT * FROM `document_tbl` WHERE  personalId='".$_REQUEST['id']."' AND isActive='1'");
            if(mysqli_num_rows($img3) > 0){
            $q7 = "UPDATE `document_tbl` SET `hscMarksheet`='".$hscMarksheet."' WHERE `personalId`='".$_REQUEST['id']."' and `isActive`= 1";
            $result7 = mysqli_query($conn, $q7);
            }else{
                 $insertQuery7 = "INSERT INTO `document_tbl`(`sslcMarksheet`, `elevenMarksheet`, `hscMarksheet`, `neetMarksheet`, `ugMarksheet`, `tc`, `migration`, `birth`, `communication`, `passport`, `photo`, `aadharCard`,aadharCardBack, `personalId`, `isActive`) "
                        . "VALUES('','','".$hscMarksheet."','','','','','','','','','','','" . $_REQUEST['id'] . "','1')";
                $result7 = mysqli_query($conn, $insertQuery7);
            }
            if ($result7 > 0) {
                $Msg5['message'] = "success";
            } else {
                $Msg5['message'] = "failed";
            }
            echo json_encode($Msg5);
            break;

		case 'img4':
		
			$neetMarksheet = rand(1,9999).$_FILES['neetMarksheet']['name'];
            $neetMarksheet_tmp = $_FILES['neetMarksheet']['tmp_name'];
            move_uploaded_file($neetMarksheet_tmp, "../../uploads/doc/" . $neetMarksheet);
				$img4 =  mysqli_query($conn,"SELECT * FROM `document_tbl` WHERE  personalId='".$_REQUEST['id']."' AND isActive='1'");
            if(mysqli_num_rows($img4) > 0){
            $q7 = "UPDATE `document_tbl` SET `neetMarksheet`='".$neetMarksheet."' WHERE `personalId`='".$_REQUEST['id']."' and `isActive`= 1";
            $result7 = mysqli_query($conn, $q7);
            }else{
                 $insertQuery7 = "INSERT INTO `document_tbl`(`sslcMarksheet`, `elevenMarksheet`, `hscMarksheet`, `neetMarksheet`, `ugMarksheet`, `tc`, `migration`, `birth`, `communication`, `passport`, `photo`, `aadharCard`,aadharCardBack, `personalId`, `isActive`) "
                        . "VALUES('','','','".$neetMarksheet."','','','','','','','','','','" . $_REQUEST['id'] . "','1')";
                $result7 = mysqli_query($conn, $insertQuery7);
            }
            if ($result7 > 0) {
                $Msg5['message'] = "success";
            } else {
                $Msg5['message'] = "failed";
            }
            echo json_encode($Msg5);
            break;
			
		case 'img5':
		
			$ugMarksheet = rand(1,9999).$_FILES['ugMarksheet']['name'];
            $ugMarksheet_tmp = $_FILES['ugMarksheet']['tmp_name'];
            move_uploaded_file($ugMarksheet_tmp, "../../uploads/doc/" . $ugMarksheet);
            
           $img5 =  mysqli_query($conn,"SELECT * FROM `document_tbl` WHERE  personalId='".$_REQUEST['id']."' AND isActive='1'");
            if(mysqli_num_rows($img5) > 0){
            $q7 = "UPDATE `document_tbl` SET `ugMarksheet`='".$ugMarksheet."' WHERE `personalId`='".$_REQUEST['id']."' and `isActive`= 1";
            $result7 = mysqli_query($conn, $q7);
            }else{
                $insertQuery7 = "INSERT INTO `document_tbl`(`sslcMarksheet`, `elevenMarksheet`, `hscMarksheet`, `neetMarksheet`, `ugMarksheet`, `tc`, `migration`, `birth`, `communication`, `passport`, `photo`, `aadharCard`,aadharCardBack, `personalId`, `isActive`) "
                        . "VALUES('','','','','".$ugMarksheet."','','','','','','','','','" . $_REQUEST['id'] . "','1')";
                $result7 = mysqli_query($conn, $insertQuery7);
            }
            if ($result7 > 0) {
                $Msg5['message'] = "success";
            } else {
                $Msg5['message'] = "failed";
            }
            echo json_encode($Msg5);
            break;

		case 'img6':
		
			$tc = rand(1,9999).$_FILES['tc']['name'];
            $tc_tmp = $_FILES['tc']['tmp_name'];
            move_uploaded_file($tc_tmp, "../../uploads/doc/" . $tc);
            
			 $img6 =  mysqli_query($conn,"SELECT * FROM `document_tbl` WHERE  personalId='".$_REQUEST['id']."' AND isActive='1'");
            if(mysqli_num_rows($img6) > 0){
            $q7 = "UPDATE `document_tbl` SET `tc`='".$tc."' WHERE `personalId`='".$_REQUEST['id']."' and `isActive`= 1";
            $result7 = mysqli_query($conn, $q7);
            }else{
                $insertQuery7 = "INSERT INTO `document_tbl`(`sslcMarksheet`, `elevenMarksheet`, `hscMarksheet`, `neetMarksheet`, `ugMarksheet`, `tc`, `migration`, `birth`, `communication`, `passport`, `photo`, `aadharCard`,aadharCardBack, `personalId`, `isActive`) "
                        . "VALUES('','','','','','".$tc."','','','','','','','','" . $_REQUEST['id'] . "','1')";
                $result7 = mysqli_query($conn, $insertQuery7);
            }
            if ($result7 > 0) {
                $Msg5['message'] = "success";
            } else {
                $Msg5['message'] = "failed";
            }
            echo json_encode($Msg5);
            break;
			
		case 'img7':
		
			$migration = rand(1,9999).$_FILES['migration']['name'];
            $migration_tmp = $_FILES['migration']['tmp_name'];
            move_uploaded_file($migration_tmp, "../../uploads/doc/" . $migration);
            
			 $img7 =  mysqli_query($conn,"SELECT * FROM `document_tbl` WHERE  personalId='".$_REQUEST['id']."' AND isActive='1'");
            if(mysqli_num_rows($img7) > 0){
            $q7 = "UPDATE `document_tbl` SET `migration`='".$migration."' WHERE `personalId`='".$_REQUEST['id']."' and `isActive`= 1";
            $result7 = mysqli_query($conn, $q7);
            }else{
                $insertQuery7 = "INSERT INTO `document_tbl`(`sslcMarksheet`, `elevenMarksheet`, `hscMarksheet`, `neetMarksheet`, `ugMarksheet`, `tc`, `migration`, `birth`, `communication`, `passport`, `photo`, `aadharCard`,aadharCardBack, `personalId`, `isActive`) "
                        . "VALUES('','','','','','','".$migration."','','','','','','','" . $_REQUEST['id'] . "','1')";
                $result7 = mysqli_query($conn, $insertQuery7);
            }
            if ($result7 > 0) {
                $Msg5['message'] = "success";
            } else {
                $Msg5['message'] = "failed";
            }
            echo json_encode($Msg5);
            break;
			
		case 'img8':
		
			$birth = rand(1,9999).$_FILES['birth']['name'];
            $birth_tmp = $_FILES['birth']['tmp_name'];
            move_uploaded_file($birth_tmp, "../../uploads/doc/" . $birth);
            $img8 =  mysqli_query($conn,"SELECT * FROM `document_tbl` WHERE  personalId='".$_REQUEST['id']."' AND isActive='1'");
            if(mysqli_num_rows($img8) > 0){
			
            $q7 = "UPDATE `document_tbl` SET `birth`='".$birth."' WHERE `personalId`='".$_REQUEST['id']."' and `isActive`= 1";
            $result7 = mysqli_query($conn, $q7);
            }else{
                $insertQuery7 = "INSERT INTO `document_tbl`(`sslcMarksheet`, `elevenMarksheet`, `hscMarksheet`, `neetMarksheet`, `ugMarksheet`, `tc`, `migration`, `birth`, `communication`, `passport`, `photo`, `aadharCard`,aadharCardBack, `personalId`, `isActive`) "
                        . "VALUES('','','','','','','','".$birth."','','','','','','" . $_REQUEST['id'] . "','1')";
                $result7 = mysqli_query($conn, $insertQuery7);
            }
            if ($result7 > 0) {
                $Msg5['message'] = "success";
            } else {
                $Msg5['message'] = "failed";
            }
            echo json_encode($Msg5);
            break;
			
		case 'img9':
		
			$communication = rand(1,9999).$_FILES['communication']['name'];
            $communication_tmp = $_FILES['communication']['tmp_name'];
            move_uploaded_file($communication_tmp, "../../uploads/doc/" . $communication);
             $img9 =  mysqli_query($conn,"SELECT * FROM `document_tbl` WHERE  personalId='".$_REQUEST['id']."' AND isActive='1'");
            if(mysqli_num_rows($img9) > 0){
			
            $q7 = "UPDATE `document_tbl` SET `communication`='".$communication."' WHERE `personalId`='".$_REQUEST['id']."' and `isActive`= 1";
            $result7 = mysqli_query($conn, $q7);
            }else{
                 $insertQuery7 = "INSERT INTO `document_tbl`(`sslcMarksheet`, `elevenMarksheet`, `hscMarksheet`, `neetMarksheet`, `ugMarksheet`, `tc`, `migration`, `birth`, `communication`, `passport`, `photo`, `aadharCard`,aadharCardBack, `personalId`, `isActive`) "
                        . "VALUES('','','','','','','','','".$communication."','','','','','" . $_REQUEST['id'] . "','1')";
                $result7 = mysqli_query($conn, $insertQuery7);
            }
            if ($result7 > 0) {
                $Msg5['message'] = "success";
            } else {
                $Msg5['message'] = "failed";
            }
            echo json_encode($Msg5);
            break;
			
		case 'img10':
		
			$passport = rand(1,9999).$_FILES['passport']['name'];
            $passport_tmp = $_FILES['passport']['tmp_name'];
            move_uploaded_file($passport_tmp, "../../uploads/doc/" . $passport);
            
			   $img10 =  mysqli_query($conn,"SELECT * FROM `document_tbl` WHERE  personalId='".$_REQUEST['id']."' AND isActive='1'");
            if(mysqli_num_rows($img10) > 0){
            $q7 = "UPDATE `document_tbl` SET `passport`='".$passport."' WHERE `personalId`='".$_REQUEST['id']."' and `isActive`= 1";
            $result7 = mysqli_query($conn, $q7);
            }else{
                 $insertQuery7 = "INSERT INTO `document_tbl`(`sslcMarksheet`, `elevenMarksheet`, `hscMarksheet`, `neetMarksheet`, `ugMarksheet`, `tc`, `migration`, `birth`, `communication`, `passport`, `photo`, `aadharCard`,aadharCardBack, `personalId`, `isActive`) "
                        . "VALUES('','','','','','','','','','".$passport."','','','','" . $_REQUEST['id'] . "','1')";
                $result7 = mysqli_query($conn, $insertQuery7);
            }
            if ($result7 > 0) {
                $Msg5['message'] = "success";
            } else {
                $Msg5['message'] = "failed";
            }
            echo json_encode($Msg5);
            break;
			
		case 'img11':
		
			$photo = rand(1,9999).$_FILES['photo']['name'];
            $photo_tmp = $_FILES['photo']['tmp_name'];
            move_uploaded_file($photo_tmp, "../../uploads/doc/" . $photo);
			   $img11 =  mysqli_query($conn,"SELECT * FROM `document_tbl` WHERE  personalId='".$_REQUEST['id']."' AND isActive='1'");
            if(mysqli_num_rows($img11) > 0){
            $q7 = "UPDATE `document_tbl` SET `photo`='".$photo."' WHERE `personalId`='".$_REQUEST['id']."' and `isActive`= 1";
            $result7 = mysqli_query($conn, $q7);
            }else{
                 $insertQuery7 = "INSERT INTO `document_tbl`(`sslcMarksheet`, `elevenMarksheet`, `hscMarksheet`, `neetMarksheet`, `ugMarksheet`, `tc`, `migration`, `birth`, `communication`, `passport`, `photo`, `aadharCard`,aadharCardBack, `personalId`, `isActive`) "
                        . "VALUES('','','','','','','','','','','".$photo."','','','" . $_REQUEST['id'] . "','1')";
                $result7 = mysqli_query($conn, $insertQuery7);
            }
            if ($result7 > 0) {
                $Msg5['message'] = "success";
            } else {
                $Msg5['message'] = "failed";
            }
            echo json_encode($Msg5);
            break;
			
		case 'img12':
		
			$aadharCard = rand(1,9999).$_FILES['aadharCard']['name'];
            $aadharCard_tmp = $_FILES['aadharCard']['tmp_name'];
            move_uploaded_file($aadharCard_tmp, "../../uploads/doc/" . $aadharCard);
              $img12 =  mysqli_query($conn,"SELECT * FROM `document_tbl` WHERE  personalId='".$_REQUEST['id']."' AND isActive='1'");
            if(mysqli_num_rows($img12) > 0){
			
            $q7 = "UPDATE `document_tbl` SET `aadharCard`='".$aadharCard."' WHERE `personalId`='".$_REQUEST['id']."' and `isActive`= 1";
            $result7 = mysqli_query($conn, $q7);
            }else{
                $insertQuery7 = "INSERT INTO `document_tbl`(`sslcMarksheet`, `elevenMarksheet`, `hscMarksheet`, `neetMarksheet`, `ugMarksheet`, `tc`, `migration`, `birth`, `communication`, `passport`, `photo`, `aadharCard`,aadharCardBack, `personalId`, `isActive`) "
                        . "VALUES('','','','','','','','','','','','".$aadharCard."','','" . $_REQUEST['id'] . "','1')";
                $result7 = mysqli_query($conn, $insertQuery7);
            }
            if ($result7 > 0) {
                $Msg5['message'] = "success";
            } else {
                $Msg5['message'] = "failed";
            }
            echo json_encode($Msg5);
            break;
            
        case 'img13':
		
			$aadharCardBack = rand(1,9999).$_FILES['aadharCardBack']['name'];
            $aadharCardBack_tmp = $_FILES['aadharCardBack']['tmp_name'];
            move_uploaded_file($aadharCardBack_tmp, "../../uploads/doc/" . $aadharCardBack);
             $img13 =  mysqli_query($conn,"SELECT * FROM `document_tbl` WHERE  personalId='".$_REQUEST['id']."' AND isActive='1'");
            if(mysqli_num_rows($img13) > 0){
			
            $q7 = "UPDATE `document_tbl` SET `aadharCardBack`='".$aadharCardBack."' WHERE `personalId`='".$_REQUEST['id']."' and `isActive`= 1";
            $result7 = mysqli_query($conn, $q7);
            }else{
                 $insertQuery7 = "INSERT INTO `document_tbl`(`sslcMarksheet`, `elevenMarksheet`, `hscMarksheet`, `neetMarksheet`, `ugMarksheet`, `tc`, `migration`, `birth`, `communication`, `passport`, `photo`, `aadharCard`,aadharCardBack, `personalId`, `isActive`) "
                        . "VALUES('','','','','','','','','','','','','".$aadharCardBack."','" . $_REQUEST['id'] . "','1')";
                $result7 = mysqli_query($conn, $insertQuery7);
            }
            if ($result7 > 0) {
                $Msg5['message'] = "success";
            } else {
                $Msg5['message'] = "failed";
            }
            echo json_encode($Msg5);
            break;
            
        case 'deleteStudent':
            $q2 = "UPDATE `personal_tbl` SET `isActive`='0' WHERE `id`='".$_REQUEST['id']."'";
            $result35 = mysqli_query($conn, $q2);
            if ($result35 > 0) {
                $dQry1 = mysqli_query($conn,"UPDATE information_tbl SET isActive = '0' WHERE personalID = '".$_REQUEST['id']."'");
                $dQry2 = mysqli_query($conn,"UPDATE hostel_tbl SET isActive = '0' WHERE personalId = '".$_REQUEST['id']."'");
                $dQry3 = mysqli_query($conn,"UPDATE studied_tbl SET isActive = '0' WHERE personalID = '".$_REQUEST['id']."'");
                $dQry4 = mysqli_query($conn,"UPDATE mark_tbl SET isActive = '0' WHERE personalId = '".$_REQUEST['id']."'");
                $dQry5 = mysqli_query($conn,"UPDATE educational_tbl SET isActive = '0' WHERE personalId = '".$_REQUEST['id']."'");
                $dQry6 = mysqli_query($conn,"UPDATE document_tbl SET isActive = '0' WHERE personalId = '".$_REQUEST['id']."'");
                $Msg1['message'] = "success";
            } else {
                $Msg1['message'] = "failed";
            }
            echo json_encode($Msg1);
            break;   
            
            
            // new code include from arun added start 08-02-2021
             case 'DeleteApplication':
            $qD6 = "UPDATE `personal_tbl` SET `isActive`='0' WHERE `id`='".$_REQUEST['id']."'";
            $resultD6 = mysqli_query($conn, $qD6);
            if ($resultD6 > 0) {
                $dQryD1 = mysqli_query($conn,"UPDATE information_tbl SET isActive = '0' WHERE personalID = '".$_REQUEST['id']."'");
                $dQryD2 = mysqli_query($conn,"UPDATE hostel_tbl SET isActive = '0' WHERE personalId = '".$_REQUEST['id']."'");
                $dQryD3 = mysqli_query($conn,"UPDATE studied_tbl SET isActive = '0' WHERE personalID = '".$_REQUEST['id']."'");
                $dQryD4 = mysqli_query($conn,"UPDATE mark_tbl SET isActive = '0' WHERE personalId = '".$_REQUEST['id']."'");
                $dQryD5 = mysqli_query($conn,"UPDATE educational_tbl SET isActive = '0' WHERE personalId = '".$_REQUEST['id']."'");
                $dQryD6 = mysqli_query($conn,"UPDATE document_tbl SET isActive = '0' WHERE personalId = '".$_REQUEST['id']."'");
                $MsgD['message'] = "success";
            } else {
                $MsgD['message'] = "failed";
            }
            echo json_encode($MsgD);
            break;   
             // new code include from arun added end 08-02-2021
			
        default :
            $response['message'] = 'Option not found!';
            echo json_encode($response);
            break;
    }
}
?>



