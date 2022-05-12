<?php
session_start();
//include '../../connection.php';

define('DB_SERVER','localhost');
define('DB_USER','dmsfplsm_dmsf_user');
define('DB_PASS' ,'v5J=8%.^H,J3');
define('DB_NAME', 'dmsfplsm_dmsf_db');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);

define('DB_SERVER1','localhost');
define('DB_USER1','dmsfplsm_dmsf2');
define('DB_PASS1' ,'dmsf2@123');
define('DB_NAME1', 'dmsfplsm_dmsf2');
$link = mysqli_connect(DB_SERVER1,DB_USER1,DB_PASS1,DB_NAME1);


 

//$link = connection();
//$linkk = connection(); 
error_reporting(E_PARSE);

if (isset($_REQUEST['option'])) {
    $option = $_REQUEST['option'];
    $batch = $_REQUEST['batch'];

    switch ($option) {

        case 'getStudentList':
            $studentList['list'] = array();
            
               $Querry = mysqli_query($link, "SELECT p.id,p.regId,p.foto,p.batch,p.consultant ,p.studentIdNumber,concat(p.fname,' ',p.lname) as name ,p.philippinesPhone,p.approval FROM personal_tbl p WHERE  p.isActive = '1'");
                while ($RowData = mysqli_fetch_array($Querry)) {
                    $singleRow = array();
                    $singleRow['id'] = $RowData['id'];
                    $singleRow['regId'] = $RowData['regId'];
                    $singleRow['studentIdNumber'] = $RowData['studentIdNumber'];
                    $singleRow['passportNumber'] = passwordnumber($RowData['id']);
                    $singleRow['foto'] = "<img width='50' height='60' src='../uploads/" . $RowData['foto'] . "'/>";
    
                    $singleRow['name'] = $RowData['name'];
                    $singleRow['philippinesPhone'] = $RowData['philippinesPhone'];
                    $singleRow['center'] = centerName($RowData['id']);
                    $singleRow['approval'] = $RowData['approval'];
                    // $singleRow['currentBatch'] = batchName($RowData['id']);
                   $singleRow['currentBatch'] =$RowData['batch'];
                    
                    array_push($studentList['list'], $singleRow);
                }    
         
            
            echo json_encode($studentList);
            break;

        case 'approved':
            $id = $_REQUEST['id'];
            $approveValue = $_REQUEST['approveValue'];
//            $consultantName = $_REQUEST['consultantName'];
              $remark = $_REQUEST['remark'];
              

 
               

            $qry1 = "UPDATE `personal_tbl` SET `approval`= '".$approveValue."' WHERE id = '" . $id . "' AND isActive = '1'";
            $Result = mysqli_query($link, $qry1);

            if ($Result > 0) {
//                $qry2 = "INSERT INTO `consultant_tbl`(`consultantName`, `remark`, `personalId`, `isActive`) "
//                        . "VALUES('" . $consultantName . "','" . $remark . "','" . $id . "','1')";
//                $Result2 = mysqli_query($link, $qry2);
				
				$staff = getLabelValue($approveValue);
				
                $q3 = "INSERT INTO `remark_tbl`( `remark`, `datee`, `staff`, `personalId`, `isActive`) VALUES "
                        . "('" . $remark . "','" . date('Y-m-d') . "','".$staff."','" . $id . "','1')";
                $Re3 = mysqli_query($link, $q3);
                
                // if($approveValue === "4"){
                //     $qr12 = mysqli_query($link,"INSERT INTO consultant_tbl(consultantName,remark,personalId,isActive)VALUES('".$."') ");
                // }
                
                $Msg['message'] = "success";
                $Msg['label'] = getLabelValue($approveValue);
            } else {
                $Msg['message'] = "failed";
            }
            echo json_encode($Msg);
            break;
 
  case 'approveregnoFunction':
            $id = $_REQUEST['id'];
            $approveValue = 'Correction';
//            $consultantName = $_REQUEST['consultantName'];
              $remark = $_REQUEST['remark'];
              $regno = $_REQUEST['regno'];


 $qryupdate = "UPDATE `student` SET `status`= '1' WHERE regNo = '" . $regno . "'";
            $Result = mysqli_query($con, $qryupdate); 
   
 
               

           
            if ($Result > 0) {
//                
				
				$staff = getLabelValue($approveValue);
				
               
                
                $Msg['message'] = "success";
                $Msg['label'] = getLabelValue($approveValue);
            } else {
                $Msg['message'] = "failed";
            }
            echo json_encode($Msg);
            break;
 
 
 
        
        case 'approveForFinance':
            $id = $_REQUEST['id'];
            $approveValue = $_REQUEST['approveValue'];
            $consultantName = $_REQUEST['consultantName'];
            $remark = $_REQUEST['remark'];


            $qry1 = "UPDATE `personal_tbl` SET `approval`= '".$approveValue."' WHERE id = '" . $id . "' AND isActive = '1'";
            $Result = mysqli_query($link, $qry1);

            if ($Result > 0) {
				$staff = getLabelValue($approveValue);
				
                $q3 = "INSERT INTO `remark_tbl`( `remark`, `datee`, `staff`, `personalId`, `isActive`) VALUES "
                        . "('" . $remark . "','" . date('Y-m-d') . "','".$staff."','" . $id . "','1')";
                $Re3 = mysqli_query($link, $q3);
                
                $qry2 = "INSERT INTO `consultant_tbl`(`consultantName`, `remark`, `personalId`, `isActive`) "
                        . "VALUES('" . $consultantName . "','','" . $id . "','1')";
                $Result2 = mysqli_query($link, $qry2);
                
                // $newRegId = getNewRegId($id); 
                
                // $qr4 = "UPDATE personal_tbl SET regId = '".$newRegId."' WHERE id = '".$id."'";
                // $Resu = mysqli_query($link, $qr4); 
                
                $Msg['message'] = "success";
                $Msg['label'] = getLabelValue($approveValue);
            } else {
                $Msg['message'] = "failed";
            }
            echo json_encode($Msg);
            break;
        
        case 'login':
            $q1 = "select * from admin_tbl where userType ='" . $_REQUEST['userType'] . "' and userName = '" . $_REQUEST['userName'] . "' and password = '" . $_REQUEST['password'] . "' and isActive = '1'";
            $result = mysqli_query($link, $q1);
            $adminList = array();
            $response['message'] = "Username or password is wrong";
            while ($row = mysqli_fetch_array($result)) {
                $adminList['id']=$row['id'];
                $adminList['userType']=$row['userType'];
                $adminList['message'] = "success";
                $_SESSION['id'] = $row['id'];
                $_SESSION['username'] = $row['userName']; 
            }
            echo json_encode($adminList);
            break;

        case 'addremark':

            $q4 = "INSERT INTO `remark_tbl`( `remark`, `datee`, `staff`, `personalId`, `isActive`) VALUES "
                    . "('" . $_REQUEST['remark'] . "','" . date('Y-m-d') . "','Admin','" . $_REQUEST['id'] . "','1')";
            $Re4 = mysqli_query($link, $q4);
            if ($Re4 > 0) {
                $Msg['message'] = "success";
            } else {
                $Msg['message'] = "failed";
            }
            echo json_encode($Msg);
            break;

        case 'getStudentListCounseling':
            $studentList['list'] = array();
            $Querry = mysqli_query($link, "SELECT p.id,p.regId,p.foto, p.studentIdNumber,i.passportNumber ,concat(p.fname,' ',p.lname) as name ,p.philippinesPhone,h.center,p.approval,s.currentBatch FROM personal_tbl p, studied_tbl s,information_tbl i,hostel_tbl h WHERE p.id = s.personalID AND p.id=i.personalId AND p.id = s.personalId AND p.id = h.personalId AND p.isActive = '1' AND s.isActive='1' AND i.isActive = '1' AND h.isActive=1");
            while ($RowData = mysqli_fetch_array($Querry)) {
                $singleRow = array();
                $singleRow['id'] = $RowData['id'];
                $singleRow['regId'] = $RowData['regId'];
                $singleRow['studentIdNumber'] = $RowData['studentIdNumber'];
                $singleRow['passportNumber'] = $RowData['passportNumber'];
                $singleRow['foto'] = "<img width='50' height='60' src='../uploads/" . $RowData['foto'] . "'/>";

                $singleRow['name'] = $RowData['name'];
                $singleRow['philippinesPhone'] = $RowData['philippinesPhone'];
                $singleRow['center'] = $RowData['center'];
                $singleRow['approval'] = $RowData['approval'];
                $singleRow['currentBatch'] = $RowData['currentBatch'];
                array_push($studentList['list'], $singleRow);
            }
            echo json_encode($studentList);
            break; 
            
         case 'addCertificate':
            $originalsArray = $_REQUEST['originalsArray'];
            $copyArray = $_REQUEST['copyArray'];

            $personalId = $_REQUEST['personalId'];

            for ($i = 0; $i < sizeof($originalsArray); $i++) {
                $oc = explode("/", $originalsArray[$i]['originals']);
                $original = $oc[0];
                $parti = $oc[1];
                $query4 = mysqli_query($link, "SELECT count(particular) as c FROM certificate_tbl WHERE personalId ='" . $_REQUEST['personalId'] . "' AND particular='" . $parti . "'  AND isActive='1'");
                $d4 = mysqli_fetch_array($query4);
                if ($d4['c'] < 1) {
                    $Result = mysqli_query($link, "insert into certificate_tbl(particular,original,personalId,isActive) values ('" . $parti . "','" . $original . "','" . $personalId . "','1') ");
                }
            }

            for ($j = 0; $j < sizeof($copyArray); $j++) {
                $cc = explode("/", $copyArray[$j]['copies']);
                $copy = $cc[0];
                $partic = $cc[1];
                $query5 = mysqli_query($link, "SELECT count(particular) as r FROM xerox_tbl WHERE personalId ='" . $_REQUEST['personalId'] . "' AND particular='" . $partic . "'  AND isActive='1'");
                $d5 = mysqli_fetch_array($query5);
                if ($d5['r'] < 1) {
                    $Result = mysqli_query($link, "insert into xerox_tbl(particular,copy,personalId,isActive) values ('" . $partic . "','" . $copy . "','" . $personalId . "','1') ");
                }
            }
            $response = "success";
            echo json_encode($response);
            break;

        case 'checkedCertificate':
            $CheckedProduct = array();
            $resultCheckProduct = mysqli_query($link, "SELECT * FROM `certificate_tbl` WHERE personalId ='" . $_REQUEST['personalId'] . "' AND isActive='1' AND original='1'");
            while ($rowCheck = mysqli_fetch_array($resultCheckProduct)) {
                $singleCheck = array();
                $singleCheck = $rowCheck['original'] . "/" . $rowCheck['particular'];
                array_push($CheckedProduct, $singleCheck);
            }
            echo json_encode($CheckedProduct);
            break;

        case 'checkedXeroxCertificateList':
            $CheckedProduct = array();
            $resultCheckProduct = mysqli_query($link, "SELECT * FROM `xerox_tbl` WHERE personalId ='" . $_REQUEST['personalId'] . "' AND isActive='1' AND copy='1'");
            while ($rowCheck = mysqli_fetch_array($resultCheckProduct)) {
                $singleCheck = array();
                $singleCheck = $rowCheck['copy'] . "/" . $rowCheck['particular'];
                array_push($CheckedProduct, $singleCheck);
            }
            echo json_encode($CheckedProduct);
            break;

        case 'orgCertificateRemove':
            $originalsArray = $_REQUEST['originalsArray'];
            $copyArray = $_REQUEST['copyArray'];

            $personalId = $_REQUEST['personalId'];

            for ($i = 0; $i < sizeof($originalsArray); $i++) {
                $oc = explode("/", $originalsArray[$i]);
                $original = $oc[0];
                $parti = $oc[1];
                
                $query5 = mysqli_query($link, "SELECT count(particular) as c1 FROM certificate_tbl WHERE personalId ='" . $_REQUEST['personalId'] . "' AND particular='" . $parti . "'  AND isActive='1'");
                $d5 = mysqli_fetch_array($query5);
                if ($d5['c1'] > 0) {
                    $Result = mysqli_query($link, "UPDATE certificate_tbl SET original='0' WHERE particular = '".$parti."' AND personalId='" . $_REQUEST['personalId'] . "' AND isActive='1'");
                }
            }
            
            for ($j = 0; $j < sizeof($copyArray); $j++) {
                $cc = explode("/", $copyArray[$j]);
                $copy = $cc[0];
                $partic = $cc[1];
                $query5 = mysqli_query($link, "SELECT count(particular) as r FROM xerox_tbl WHERE personalId ='" . $_REQUEST['personalId'] . "' AND particular='" . $partic . "'  AND isActive='1'");
                $d5 = mysqli_fetch_array($query5);
                if ($d5['r'] > 0) {
                    $Result = mysqli_query($link, "UPDATE xerox_tbl SET copy='0' WHERE particular = '".$partic."' AND personalId='" . $_REQUEST['personalId'] . "' AND isActive='1' ");
                }
            }
            
            $response = "removed";
            echo json_encode($response);
            break; 
            
        case 'check':
            $personalId = $_REQUEST['personalId'];

            $newRegId = getNewRegId($personalId);
            echo json_encode($newRegId);
            break;
            
        default :
            $response['message'] = 'Option not found!';
            echo json_encode($response);
            break;
    }
}

 function getLabelValue($approval) {

         $labelValue = "";

        if ($approval === '0') {
            $labelValue = "Counseling";
        } else if ($approval === '-5') {
            $labelValue = "Counseling";
        } else if ($approval === '1') {
            $labelValue = "Counseling";
        } else if ($approval === '-1') {
            $labelValue = "Counseling";
        } else if ($approval === '-6') {
            $labelValue = "Verification";
        } else if ($approval === '2') {
            $labelValue = "Verification";
        } else if ($approval === '-2') {
            $labelValue = "Verification";
        } else if ($approval === '3') {
            $labelValue = "Correction";
        } else if ($approval === '-7') {
            $labelValue = "Correction";
        } else if ($approval === '-3') {
            $labelValue = "Correction";
        } else if ($approval === '4') {
            $labelValue = "Finance";
        } else if ($approval === '-4') {
            $labelValue = "Finance";
        } else if ($approval === '-8') {
            $labelValue = "Finance";
        } else if ($approval === '5') {
            $labelValue = "Submission";
        } else if ($approval === '-9') {
            $labelValue = "Submission";
        } else if ($approval === '-10') {
            $labelValue = "Submission";
        }
        return $labelValue;

}

function getNewRegId($personalId) {
  //  $link = connection();

    $q1 = mysqli_query($link, "SELECT * FROM hostel_tbl WHERE personalId = '" . $personalId . "'");
    $d1 = mysqli_fetch_array($q1);
    
    $q2 = mysqli_query($link, "SELECT * FROM educational_tbl WHERE personalId = '" . $personalId . "' AND isActive='1'");
    $d2 = mysqli_fetch_array($q2);
    
    $prefix = "";

    if ($d1['center'] === "Chennai") {
        $prefix = "K";
         if ($d2['neetScore'] !== "") {
             $resultQuery = mysqli_query($link, "SELECT regId FROM `personal_tbl` WHERE regId LIKE 'K200%' AND IsActive='1'");
         }else{
             $resultQuery = mysqli_query($link, "SELECT regId FROM `personal_tbl` WHERE regId LIKE 'K201%' AND IsActive='1'");
         }
        
    } else {
        $prefix = "T";
        if ($d2['neetScore'] !== "") {
             $resultQuery = mysqli_query($link, "SELECT regId FROM `personal_tbl` WHERE regId LIKE 'T200%' AND IsActive='1'");
         }else{
             $resultQuery = mysqli_query($link, "SELECT regId FROM `personal_tbl` WHERE regId LIKE 'T201%' AND IsActive='1'");
         }
       
    }

    $lastDegitArray = array();
    while ($rowCode = mysqli_fetch_array($resultQuery)) {
        $lastDegitArray[] = (int) substr($rowCode['regId'], 3);
    }
    $lastDegit = 0;
    for ($i = 0; $i < sizeof($lastDegitArray); $i++) {
        if ($lastDegit < $lastDegitArray[$i]) {
            $lastDegit = $lastDegitArray[$i];
        }
    }
    $MemberID = '';

    if ($d2['neetScore'] !== "") {
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
    } else {
        if (strlen($lastDegit) === 1) {
            if ($lastDegit === 9) {
                $MemberID .= '10';
            } else {
                $MemberID .= '100';
            }
        } else if (strlen($lastDegit) === 2) {
            if ($lastDegit === 99) {
                $MemberID .= '1';
            } else {
                $MemberID .= '10';
            }
        } else if (strlen($lastDegit) === 3) {

            if ($lastDegit === 999) {
                $MemberID .= '';
            } else {
                $MemberID .= '1';
            }
        }
    }


    $regID = $prefix . '20' . $MemberID . ($lastDegit + 1);
    return $regID;
}


function passwordnumber($id) {
  //  $link = connection();

    $getCount1 = mysqli_query($link, "SELECT * FROM `information_tbl` WHERE personalID='".$id."' AND isActive='1'");
    while ($rowCount1 = mysqli_fetch_array($getCount1)) {
        $single1 = $rowCount1['passportNumber'];
    }
    return $single1;
}


function batchName($id) {
  //  $link = connection();

    $getCount2 = mysqli_query($link, "SELECT * FROM `studied_tbl` WHERE personalID='".$id."' AND isActive='1'");
    while ($rowCount2 = mysqli_fetch_array($getCount2)) {
        $single2 = $rowCount2['currentBatch'];
    }
    return $single2;
}


function centerName($id) {
 //   $link = connection();

    $getCount3 = mysqli_query($link, "SELECT * FROM `hostel_tbl` WHERE personalId='".$id."' AND isActive='1'");
    while ($rowCount3 = mysqli_fetch_array($getCount3)) {
        $single3 = $rowCount3['center'];
    }
    return $single3;
}

?>



