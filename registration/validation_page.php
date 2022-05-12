<?php   
session_start();
session_start();
define('DB_SERVER1','localhost');
define('DB_USER1','dmsfplsm_dmsf2');
define('DB_PASS1' ,'dmsf2@123');
define('DB_NAME1', 'dmsfplsm_dmsf2');    
$link = mysqli_connect(DB_SERVER1,DB_USER1,DB_PASS1,DB_NAME1); 


 define('DB_SERVER2','localhost');
define('DB_USER2','dmsfplsm_dmsf_user'); 
define('DB_PASS2' ,'v5J=8%.^H,J3');
define('DB_NAME2', 'dmsfplsm_dmsf_db');    
$linkk = mysqli_connect(DB_SERVER2,DB_USER2,DB_PASS2,DB_NAME2); 

$records = mysqli_query($linkk, "SELECT id,consultant_name From consultant");



define('DB_SERVER','localhost');
define('DB_USER','dmsfplsm_account');
define('DB_PASS' ,'x0d$mc*7vC39');
define('DB_NAME', 'dmsfplsm_account-portal'); 
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME); 


if(isset($_POST['email'])) 
{
    $email = $_POST['email'];

    $recordss = mysqli_query($linkk, "SELECT email From student where email = '$email' ");         
    // echo $recordss->num_rows;
    if($recordss->num_rows !=0)
    {
        $res = array('error' => 0,'msg' => "Exist");
        echo json_encode($res);  
    }
    else
    {
        $res = array('success' => 1,'msg' => "continue");
        echo json_encode($res); 
    }
    
}
?>