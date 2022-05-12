<?php 
//  function connection() {
//      $link = mysqli_connect("localhost", "dmsfplsm_dmsf_user", "v5J=8%.^H,J3", "dmsfplsm_dmsf_db");
//   //  $link1 = mysqli_connect("localhost", "dmsfplsm_dmsf2", "dmsf2@123", "dmsfplsm_dmsf2");
//      return $link;
      
//  }

 define('DB_SERVER','localhost');
define('DB_USER','dmsfplsm_dmsf_user');
define('DB_PASS' ,'v5J=8%.^H,J3');
define('DB_NAME', 'dmsfplsm_dmsf_db');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);

 define('DB_SERVER1','localhost');
define('DB_USER1','dmsfplsm_dmsf2');
define('DB_PASS1' ,'dmsf2@123');
define('DB_NAME1', 'dmsfplsm_dmsf2');
$conn = mysqli_connect(DB_SERVER1,DB_USER1,DB_PASS1,DB_NAME1);


  
 


	if (isset($_POST['submit'])) {
	    
	   if($_POST['$roll_no']=!'')
	   {
	          $_POST['roll_no'];
	      
	      
	       
	     $id = $_POST['id'];
    $regNo = $_POST['regNo'];
    $roll_no = $_POST['roll_no'];
    $password = $_POST['password'];
    $section = $_POST['section'];  
   // $link = connection();
    $edit = mysqli_query($con,"update student set password='$password', roll_no='$roll_no',section='$section' where id='$id'");
	

	
    if($edit)
    { 
        
       
      
    //  $link1 = connection();
    $edit1 = mysqli_query($conn,"update personal_tbl set RollNo='$roll_no' where studentIdNumber='$regNo'");
	
   if($edit1){ 
       
       // mysqli_close($db); // Close connection
        header("location:editinfocorrection.php"); // redirects to all records page
        exit;
   }
        
       
    }
       	
    
      
	   }
	   
	   elseif($_POST['$roll_no']==''){
	     
	          
	      
	      
	       
	     $id = $_POST['id'];
    $regNo = $_POST['regNo'];
    $roll_no = $_POST['roll_no'];
    $password = $_POST['password'];
    $section = $_POST['section'];  
   // $link = connection();
    $edit = mysqli_query($con,"update student set password='$password', roll_no='$roll_no',section='$section' where id='$id'");
	

	
    if($edit)
    { 
        
       // mysqli_close($db); // Close connection
        header("location:editinfocorrection.php"); // redirects to all records page
        exit;
   
        
       
    }
       	
    
      
	     
	       
	   }
	   
	  

    
}

header( 'Location: editinfocorrection.php' ) ;

 


?>