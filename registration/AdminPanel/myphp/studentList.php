<?php 

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

$draw = $_POST['draw'];
$row = $_POST['start'];
$rowperpage = $_POST['length']; // Rows display per page
$columnIndex = $_POST['order'][0]['column']; // Column index
$columnName = $_POST['columns'][$columnIndex]['data']; // Column name
$columnSortOrder = $_POST['order'][0]['dir']; // asc or desc
$searchValue = $_POST['search']['value']; // Search value

## Custom Field value
$consultant = $_POST['consultant'];
$batch = $_POST['batch'];
$filename = $_POST['filename'];
## Search 
$searchQuery = " ";
if($consultant != ''){
   $searchQuery .= " and (consultant = '".$consultant."' ) ";
}
if($batch != ''){
   $searchQuery .= " and (batch='".$batch."') ";
}
if($searchValue != ''){
   $searchQuery .= " and (consultant like '%".$searchValue."%') ";
}

## Total number of records without filtering
$sel = mysqli_query($link,"select count(*) as allcount from personal_tbl Where isActive = '1'  And 1  ");
$records = mysqli_fetch_assoc($sel);
$totalRecords = $records['allcount'];

## Total number of records with filtering
$sel = mysqli_query($link,"select count(*) as allcount from personal_tbl WHERE  isActive = '1' And 1 ".$searchQuery);
$records = mysqli_fetch_assoc($sel);
$totalRecordwithFilter = $records['allcount'];

## Fetch records
// $empQuery = "select * from employee WHERE 1 ".$searchQuery." order by ".$columnName." ".$columnSortOrder." limit ".$row.",".$rowperpage;
$studentQuery = "SELECT p.email,p.whatsappNumber,p.foto,p.id,p.regId,p.batch,p.consultant ,p.studentIdNumber,concat(p.fname,' ',p.lname) as name ,p.philippinesPhone,p.approval FROM personal_tbl p WHERE  p.isActive = '1' And 1 ".$searchQuery." order by ".$columnName." ".$columnSortOrder." limit ".$row.",".$rowperpage ;
$empRecords = mysqli_query($link, $studentQuery);
$data = array();
$i =1;


while ($row = mysqli_fetch_assoc($empRecords)) {
    
    

    // echo $filename;
     if($filename == 'CorrectionIndex.php'){
         $dataAr = OptionsCorrection($row);
     }else if($filename == 'CounselingIndex.php'){
         $dataAr = OptionsCounseling($row);
     }else if($filename == 'FinanceIndex.php'){
         $dataAr= OptionsFinance($row);
     }else if($filename == 'VerificationIndex.php'){
         $dataAr = OptionsVerification($row);
     }else if($filename == 'SubmissionIndex.php'){
   $dataAr = OptionsSubmission($row);
     }
     
     
    //  $data->action = 'testning';
    //  $data[]['action'] = 'tesst';
    //  echo $btn;
    

   $data[] = array(
       
     "id"=>$row['id'],
     'foto' => "<img width='50' height='60' src='../uploads/" . $row['foto'] . "'/>",
     "studentIdNumber"=>$row['studentIdNumber'],
     "name"=>$row['name'],
     "regId"=>$row['regId'],
     "whatsappNumber"=>$row['whatsappNumber'],
     'batch' => $row['batch'],
     'consultant' => $row['consultant'],
     "philippinesPhone"=>$row['philippinesPhone'],
     'approval' => $row['approval'],
     'action' => $dataAr
    // 'action' => OptionsCounseling($row),
    // 'action' =>'test'
     
   );
   
   
//   echo "<pre>";
//   print_r($data);
//   exit();
}

## Response
$response = array(
  "draw" => intval($draw),
  "iTotalRecords" => $totalRecords,
  "iTotalDisplayRecords" => $totalRecordwithFilter,
  "aaData" => $data
);

echo json_encode($response);



function OptionsCounseling($row) {
    $btn1 = '';
    $l = $row['approval'];
    $label = getLabelValue($l);

    if ($row['approval'] === '0') {
        $btn1 = '<label class="btn btn-sm btn-warning shadow-sm float-left font_class" disabled="true">'.$label.'</label><br>
                <a href="naviCounseling.php?id='.$row['id'].'" class="btn btn-sm btn-primary shadow-sm float-right font_class" >Details</a>';
                
    } else {
        $btn1 = '<label class="btn btn-sm btn-success shadow-sm float-left font_class" disabled="true">'.$label.'</label><br>
                <a href="student-details.php?id='.$row['id'].'&pageid=1" class="btn btn-sm btn-primary shadow-sm float-right font_class" >Details</a>';
    }
    return $btn1;
}


function OptionsFinance($rowValue) {
    $btn1 = '';
    $l = $rowValue['approval'];
    $label = getLabelValue($l);

    if ($rowValue['approval'] === '3') {
        $btn1 = '<td class="btnAction"><label class="btn btn-sm btn-warning shadow-sm float-left font_class" disabled="true">'.$label.'</label><br>
                <a href="naviFinance.php?id='.$rowValue['id'].'" class="btn btn-sm btn-primary shadow-sm float-right font_class" >Details</a></td>';
                // <a href="financePage.php?id=' + rowValue['id'] + '" class="btn btn-sm btn-primary shadow-sm float-right font_class" >Details</a></td>';
    } else {
        $btn1 = '<td class="btnAction"><label class="btn btn-sm btn-success shadow-sm float-left font_class" disabled="true">'.$label.'</label><br>
                <a href="student-details.php?id='.$rowValue['id'].'&pageid=4" class="btn btn-sm btn-primary shadow-sm float-right font_class" >Details</a></td>';
    }
    return $btn1;
}

function OptionsSubmission($rowValue) {
    $btn1 = '';
    $l = $rowValue['approval'];
    $label = getLabelValue($l);

    if ($rowValue['approval'] === '4') {
        $btn1 = '<td class="btnAction"><label class="btn btn-sm btn-warning shadow-sm float-left font_class" disabled="true">'.$label.'</label><br>
                <a href="naviSubmission.php?id='.$rowValue['id'].'" class="btn btn-sm btn-primary shadow-sm float-right font_class" >Details</a></td>';
        //  <a href="submissionPage.php?id=' + rowValue['id'] + '" class="btn btn-sm btn-primary shadow-sm float-right font_class" >Details</a></td>';
    } else {
        $btn1 = '<td class="btnAction"><label class="btn btn-sm btn-success shadow-sm float-left font_class" disabled="true">'.$label.'</label><br>
                <a href="student-details1.php?id='.$rowValue['id'].'&pageid=5" class="btn btn-sm btn-primary shadow-sm float-right font_class" >Details</a></td>';
    }
    return $btn1;
}

function OptionsCorrection($rowValue) {
    $btn1 = '';
    $l = $rowValue['approval'];
    $label = getLabelValue($l);

    
        $btn1 = '<td class="btnAction"><label class="btn btn-sm btn-warning shadow-sm float-left font_class" disabled="true">'.$label.'</label><br>
                <a href="naviCorrection.php?id='.$rowValue['id'].'" class="btn btn-sm btn-primary shadow-sm float-right font_class" >Details</a></td>';
    
    return $btn1;
}

function Options($sno, $rowValue) {
    $btn1 = '';

    if ($rowValue['approval'] === '1') {
        $btn1 = '<a href="student-details.php?id='.$rowValue['id'].'" class="btn btn-sm btn-primary shadow-sm float-left font_class" >View Details</a></td>';
    } else {
        $btn1 = '<td class="btnAction"><a href="add-consultant.php?id='.$rowValue['id'].'&regId='.$rowValue['regId'].'" class="btn btn-sm btn-success shadow-sm float-left font_class">Approve</a><br>
                <a href="student-details.php?id='.$rowValue['id'].'" class="btn btn-sm btn-primary shadow-sm float-right font_class" >View Details</a></td>';
    }
    return $btn1;
}

function OptionsVerification($rowValue) {
    $btn1 = '';
    $l = $rowValue['approval'];
    $label = getLabelValue($l);

    if ($rowValue['approval'] === '1') {
        $btn1 = '<td class="btnAction"><label class="btn btn-sm btn-warning shadow-sm float-left font_class" disabled="true">'.$label.'</label><br>
                <a href="naviVerification.php?id='.$rowValue['id'].'" class="btn btn-sm btn-primary shadow-sm float-right font_class" >Details</a></td>';
                // <a href="verificationPage.php?id=' + rowValue['id'] + '" class="btn btn-sm btn-primary shadow-sm float-right font_class" >Details</a></td>';
    } else {
        $btn1 = '<td class="btnAction"><label class="btn btn-sm btn-success shadow-sm float-left font_class" disabled="true">'.$label.'</label><br>
                <a href="student-details.php?id='.$rowValue['id'].'&pageid=2" class="btn btn-sm btn-primary shadow-sm float-right font_class" >Details</a></td>';
    }
    return $btn1;
}

 function getLabelValue($approval) {

        $labelValue = "";

        if ($approval === '0') {
            $labelValue = "Counseling Section";
        } else if ($approval === '-5') {
            $labelValue = "Hold in Counseling";
        } else if ($approval === '1') {
            $labelValue = "Approved in Counselling";
        } else if ($approval === '-1') {
            $labelValue = "Rejected in Counseling";
        } else if ($approval === '-6') {
            $labelValue = "Hold in Verification ";
        } else if ($approval === '2') {
            $labelValue = "Approved in Verification";
        } else if ($approval === '-2') {
            $labelValue = "Rejected in Verification";
        } else if ($approval === '3') {
            $labelValue = "Approved in Correction";
        } else if ($approval === '-7') {
            $labelValue = "Hold in Correction";
        } else if ($approval === '-3') {
            $labelValue = "Rejected in Correction";
        } else if ($approval === '4') {
            $labelValue = "Approved in Finance";
        } else if ($approval === '-4') {
            $labelValue = "Rejected in Finance";
        } else if ($approval === '-8') {
            $labelValue = "Hold in Finance";
        } else if ($approval === '5') {
            $labelValue = "Approved in Submission";
        } else if ($approval === '-9') {
            $labelValue = "Hold in Submission";
        } else if ($approval === '-10') {
            $labelValue = "Rejected in Submission";
        }
        return $labelValue;

}

?>
