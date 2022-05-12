<?php
define('DB_SERVER1','localhost');
define('DB_USER1','dmsfplsm_dmsf2');
define('DB_PASS1' ,'dmsf2@123');
define('DB_NAME1', 'dmsfplsm_dmsf2');    
$link = mysqli_connect(DB_SERVER1,DB_USER1,DB_PASS1,DB_NAME1); 

 



define('DB_SERVER','localhost');
define('DB_USER','dmsfplsm_account');
define('DB_PASS' ,'x0d$mc*7vC39');
define('DB_NAME', 'dmsfplsm_account-portal'); 
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME); 

error_reporting(E_PARSE);

if (isset($_REQUEST['option'])) {
    $option = $_REQUEST['option'];
    switch ($option) {
        case'reg':
            $studentIdNumber = $_REQUEST['studentIdNumber'];
            $philippinesPhone = $_REQUEST['philippinesPhone'];
            $fName = $_REQUEST['fName'];
            $mName = $_REQUEST['mName'];
            $lName = $_REQUEST['lName'];
            $telegramNumber = $_REQUEST['telegramNumber'];
            $whatsappNumber = $_REQUEST['whatsappNumber'];
            $email = $_REQUEST['email'];
            $gender = $_REQUEST['gender'];
            $dob = $_REQUEST['dob'];
            $foto = rand(1,9999).$_FILES['foto']['name'];
            $foto_tmp = $_FILES['foto']['tmp_name'];
            move_uploaded_file($foto_tmp, "../uploads/" . $foto);
            $bloodGroup = $_REQUEST['bloodGroup'];
            $nationality = $_REQUEST['nationality'];

//            $sPassportNumber = $_REQUEST['sPassportNumber'];

            $fatherName = $_REQUEST['fatherName'];
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


            $hostelOrHome = $_REQUEST['hostelOrHome'];
            $center = $_REQUEST['center'];

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

            $sslcMarksheet = rand(1,9999).$_FILES['sslcMarksheet']['name'];
            $sslcMarksheet_tmp = $_FILES['sslcMarksheet']['tmp_name'];
            move_uploaded_file($sslcMarksheet_tmp, "../uploads/doc/" . $sslcMarksheet);

            $elevenMarksheet = rand(1,9999).$_FILES['elevenMarksheet']['name'];
            $elevenMarksheet_tmp = $_FILES['elevenMarksheet']['tmp_name'];
            move_uploaded_file($elevenMarksheet_tmp, "../uploads/doc/" . $elevenMarksheet);

            $hscMarksheet = rand(1,9999).$_FILES['hscMarksheet']['name'];
            $hscMarksheet_tmp = $_FILES['hscMarksheet']['tmp_name'];
            move_uploaded_file($hscMarksheet_tmp, "../uploads/doc/" . $hscMarksheet);

            $ugMarksheet = rand(1,9999).$_FILES['ugMarksheet']['name'];
            $ugMarksheet_tmp = $_FILES['ugMarksheet']['tmp_name'];
            move_uploaded_file($ugMarksheet_tmp, "../uploads/doc/" . $ugMarksheet);

            $neetMarksheet = rand(1,9999).$_FILES['neetMarksheet']['name'];
            $neetMarksheet_tmp = $_FILES['neetMarksheet']['tmp_name'];
            move_uploaded_file($neetMarksheet_tmp, "../uploads/doc/" . $neetMarksheet);

            $tc = rand(1,9999).$_FILES['tc']['name'];
            $tc_tmp = $_FILES['tc']['tmp_name'];
            move_uploaded_file($tc_tmp, "../uploads/doc/" . $tc);

            $migration = rand(1,9999).$_FILES['migration']['name'];
            $migration_tmp = $_FILES['migration']['tmp_name'];
            move_uploaded_file($migration_tmp, "../uploads/doc/" . $migration);

            $birth = rand(1,9999).$_FILES['birth']['name'];
            $birth_tmp = $_FILES['birth']['tmp_name'];
            move_uploaded_file($birth_tmp, "../uploads/doc/" . $birth);

            $communication = rand(1,9999).$_FILES['communication']['name'];
            $communication_tmp = $_FILES['communication']['tmp_name'];
            move_uploaded_file($communication_tmp, "../uploads/doc/" . $communication);

            $passport = rand(1,9999).$_FILES['passport']['name'];
            $passport_tmp = $_FILES['passport']['tmp_name'];
            move_uploaded_file($passport_tmp, "../uploads/doc/" . $passport);

            $photo = rand(1,9999).$_FILES['photo']['name'];
            $photo_tmp = $_FILES['photo']['tmp_name'];
            move_uploaded_file($photo_tmp, "../uploads/doc/" . $photo);

            $aadharCard = rand(1,9999).$_FILES['aadharCard']['name'];
            $aadharCard_tmp = $_FILES['aadharCard']['tmp_name'];
            move_uploaded_file($aadharCard_tmp, "../uploads/doc/" . $aadharCard);
            
            $aadharCardBack = rand(1,9999).$_FILES['aadharCardBack']['name'];
            $aadharCardBack_tmp = $_FILES['aadharCardBack']['tmp_name'];
            move_uploaded_file($aadharCardBack_tmp, "../uploads/doc/" . $aadharCardBack);


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

            $regId = getRegId();
             $AppId = getAppId();
            $insertQuery1 = "INSERT INTO `personal_tbl`(`regId`, `studentIdNumber`, `philippinesPhone`, `fName`, `mName`, `lName`, `telegramNumber`, `whatsappNumber`, `email`,`gender`,`dob`, `foto`, `bloodGroup`, `nationality`, `approval`, `isActive`) "
                    . "VALUES('" . $regId . "','" . $studentIdNumber . "','" . $philippinesPhone . "','" . $fName . "','" . $mName . "','" . $lName . "','" . $telegramNumber . "','" . $whatsappNumber . "','" . $email . "','" . $gender . "','" . $dob . "','" . $foto . "','" . $bloodGroup . "','" . $nationality . "','0','1')";
            $result1 = mysqli_query($link, $insertQuery1);

            if ($result1 > 0) {
                $personalId = mysqli_insert_id($link);
                $insertQuery2 = "INSERT INTO `information_tbl`(`fatherName`, `fatherMobile`, `fatherEmail`, `motherName`, `motherMobile`, `motherEmail`, `fatherOccupation`, `motherOccupation`, `temporaryAddress`, `tCountry`, `tState`, `tDistrict`, `tCity`, `tPincode`, `permanentAddress`, `pCountry`, `pState`, `pDistrict`, `pCity`, `pPincode`, `passportNumber`, `dateOfIssue`, `placeOfIssue`, `dateOfExpiry`,`personalID`, `isActive`) "
                        . "VALUES('" . $fatherName . "','" . $fatherMobile . "','" . $fatherEmail . "','" . $motherName . "','" . $motherMobile . "','" . $motherEmail . "','" . $fatherOccupation . "','" . $motherOccupation . "','" . $temporaryAddress . "','" . $tCountry . "','" . $tState . "','" . $tDistrict . "','" . $tCity . "','" . $tPincode . "','" . $permanentAddress . "','" . $pCountry . "','" . $pState . "','" . $pDistrict . "','" . $pCity . "','" . $pPincode . "','" . $passportNumber . "','" . $dateOfIssue . "','" . $placeOfIssue . "','" . $dateOfExpiry . "','" . $personalId . "','1') ";
                $result2 = mysqli_query($link, $insertQuery2);

                $insertQuery3 = "INSERT INTO `hostel_tbl`(`accommodation`, `center`,`personalId`, `isActive`) "
                        . "VALUES('" . $hostelOrHome . "','" . $center . "','" . $personalId . "','1')";
                $result3 = mysqli_query($link, $insertQuery3);

                $insertQuery4 = "INSERT INTO `studied_tbl`(`currentBatch`, `studied`, `yearOfStartBS`, `monthBS`,responsibleName,responsibleOccupation,relationship,responsibleContactNumber,responsibleEmail,lateralEntry,universityName,collegeName,yearOfPassing,percentage,`personalID`, `isActive`) "
                        . "VALUES('" . $currentBatch . "','" . $studied . "','" . $yearOfStartBS . "','" . $monthBS . "','" . $responsibleName . "','" . $responsibleOccupation . "','" . $relationship . "','" . $responsibleContactNumber . "','" . $responsibleEmail . "','" . $lateralEntry . "','" . $universityName . "','" . $collegeName . "','" . $yearOfPassing . "','" . $percentage . "','" . $personalId . "','1')";
                $result4 = mysqli_query($link, $insertQuery4);

                $insertQuery7 = "INSERT INTO `document_tbl`(`sslcMarksheet`, `elevenMarksheet`, `hscMarksheet`, `neetMarksheet`, `ugMarksheet`, `tc`, `migration`, `birth`, `communication`, `passport`, `photo`, `aadharCard`,aadharCardBack, `personalId`, `isActive`) "
                        . "VALUES('" . $sslcMarksheet . "','" . $elevenMarksheet . "','" . $hscMarksheet . "','" . $neetMarksheet . "','" . $ugMarksheet . "','" . $tc . "','" . $migration . "','" . $birth . "','" . $communication . "','" . $passport . "','" . $photo . "','" . $aadharCard . "','".$aadharCardBack."','" . $personalId . "','1')";
                $result7 = mysqli_query($link, $insertQuery7);

                $insertQuery5 = "INSERT INTO `educational_tbl`(`tenthPercentage`, `tenthSchoolName`, `tenthBoard`, `tenthSchoolAddress`, `tenthDistrict`, `tenthState`, `tenthCountry`, tenthPassingYear,`twelvethPercentage`, `twelvethSchoolName`, `twelvethBoard`, `twelvethSchoolAddress`, `twelvethDistrict`, `twelvethState`, `twelvethCountry`,twelvethPassingYear, `neetScore`, `personalId`, `isActive`, `neet_applicable`)" 
                        . "VALUES('" . $tenthPercentage . "','" . $tenthSchoolName . "','" . $tenthBoard . "','" . $tenthSchoolAddress . "','" . $tenthDistrict . "','" . $tenthState . "','" . $tenthCountry . "','" . $tenthPassingYear . "','" . $twelvethPercentage . "','" . $twelvethSchoolName . "','" . $twelvethBoard . "','" . $twelvethSchoolAddress . "','" . $twelvethDistrict . "','" . $twelvethState . "','" . $twelvethCountry . "','" . $twelvethPassingYear . "','" . $neetScore . "','" . $personalId . "','1','" . $neet_applicable . "')"; 
                $result5 = mysqli_query($link, $insertQuery5); 

                $insertQuery6 = "INSERT INTO `mark_tbl`(`s1`, `m1`, `s2`, `m2`, `s3`, `m3`, `s4`, `m4`, `s5`, `m5`, `s6`, `m6`, `ss1`, `mm1`, `ss2`, `mm2`, `ss3`, `mm3`, `ss4`, `mm4`, `ss5`, `mm5`, `ss6`, `mm6`, `personalId`, `isActive`) "
                        . "VALUES('" . $s1 . "','" . $m1 . "','" . $s2 . "','" . $m2 . "','" . $s3 . "','" . $m3 . "','" . $s4 . "','" . $m4 . "','" . $s5 . "','" . $m5 . "','" . $s6 . "','" . $m6 . "','" . $ss1 . "','" . $mm1 . "','" . $ss2 . "','" . $mm2 . "','" . $ss3 . "','" . $mm3 . "','" . $ss4 . "','" . $mm4 . "','" . $ss5 . "','" . $mm5 . "','" . $ss6 . "','" . $mm6 . "','" . $personalId . "','1')";
                $result6 = mysqli_query($link, $insertQuery6);
                
                 date_default_timezone_set("Asia/Calcutta");   //India time (GMT+5:30) 
                $createdate=date("Y-m-d H:i:s"); 
                 
                $insertQuery8 = "INSERT INTO `tw_students`(`id`, `app_id`, `first_name`, `last_name`, `middle_name`, `gender`, `email`, `password`, `confirm`, `active`, `blocked`, `welcome`, `mobile`, `father_name`, `home_mobile`, `dob`, `address`, `city`, `state`, `zip`, `class_id`, `course`, `batch`, `rollno`, `college`, `counselled_by`, `profile_picture`, `blood_group`, `created`, `updated`, `flg`, `receipt_no`, `learn_type`, `consultant`, `mother_name`, `mother_mobile`, `school_name`, `chemistry_mark`, `physics_mark`, `biology_mark`, `neet_mark`, `neet_eligible`, `admission_date`, `_10th`, `_12th`, `id_proof`, `photo_proof`, `_11th`, `other_copies`, `community`, `tc`, `passport`, `bankstatement`, `stud_type_hostel`, `visa`, `visa_date`, `visa_valid_till`, `visa_remarks`, `travel_date`, `travel_remarks`, `passport_no`, `passport_issued`, `passport_expiry`, `interview_date`, `interview_place`, `interview_status`, `received_docs`, `is_custom_rollno`, `user`, `registered`, `registered_date`, `registered_phone`, `otp`, `whatsapp_no`, `paid`, `paid_date`, `old_rollno`, `prev_rollno`, `profile`, `visa_no`, `visa_category`, `visa_expiry_date`, `fee_list`, `center`, `section`) VALUES ('','',$fName,$lName,'','',$email,'','','','','',$whatsappNumber,$fatherName,$fatherMobile,'','','','','','',1,7,$studentIdNumber,'','','','',$createdate,$createdate,1,'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')" ;
                $result8 = mysqli_query($con, $insertQuery8);   
                

                $contentMsg['message'] = "success";
                $contentMsg['id'] = $personalId;
            } else {
                $contentMsg['message'] = "failed";
            }

            //            Mail Sent 
            $to = $email;
            $email_subject = "DMSF - Thank you for registering with us.";
            $email_body = "Acknowledgement Slip";
            $email_body .= "Your Registration reference ID is ".$regId;
            $email_body .= "Name ".$fName.' '.$mName.' '.$lName;
            $email_body .= "Batch ".$currentBatch;
            $email_body .= "Student ID Number ".$studentIdNumber;
            $email_body .= "Passport Number".$passportNumber;
            $headers = "From:sisesoftitsolutions@gmail.com";
            mail($to, $email_subject, $email_body, $headers);

            echo json_encode($contentMsg);
            break;

        case 'getID':
           // $link = connection();
            $resultQuery = mysqli_query($link, "SELECT regId FROM `personal_tbl` WHERE IsActive='1'");
            $lastDegitArray = array();
            while ($rowCode = mysqli_fetch_array($resultQuery)) {
                $lastDegitArray[] = (int) substr($rowCode['regId'], 5);
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
            $regID = 'DMSF' . $MemberID . ($lastDegit + 1);

            echo json_encode($regID);
            break;
			
		case 'id_validate':
				
				$getIdQry = mysqli_query($link,"SELECT * FROM personal_tbl WHERE studentIdNumber = '".$_REQUEST['idNum']."' AND isActive='1'");
				if(mysqli_num_rows($getIdQry) > 0){
					$msg['m'] = "already"; 
				}else{
					$msg['m'] = "ok";
				}
			echo json_encode($msg);
			break;

        default :
            $response['message'] = 'Option not found!';
            echo json_encode($response);
            break;
    }
}

function getRegId() {
  //  $link = connection();
    $resultQuery = mysqli_query($link, "SELECT regId FROM `personal_tbl` WHERE IsActive='1'");
    $lastDegitArray = array();
    while ($rowCode = mysqli_fetch_array($resultQuery)) {
        $lastDegitArray[] = (int) substr($rowCode['regId'], 5);
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
    $regID = 'DMSF' . $MemberID . ($lastDegit + 1);
    return $regID;
}


function getAppId() {
  
                            $getDataaa = mysqli_query($con, "select max(id) from tw_applications");  
                             $data = mysqli_fetch_array($getDataaa);
 $row1=$data[0];  
 

    
        $idPostfix = $row1+1;
        $appID = 'APP'.STR_PAD($idPostfix,4,"0",STR_PAD_LEFT); 
    
}



?>
