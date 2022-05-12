<?php 
function connection() {
    $link = mysqli_connect("localhost", "dmsfplsm_dmsf_user", "v5J=8%.^H,J3", "dmsfplsm_dmsf_db");
    return $link;
}




	if (isset($_POST['submit'])) {
	   
	   
	$id = $_POST['id'];
    $regNo = $_POST['regNo'];
    $roll_no = $_POST['roll_no'];
    $password = $_POST['password'];
    $section = $_POST['section']; 
   $link = connection();
   $edit = mysqli_query($link,"update student set password='$password', roll_no='$roll_no',section='$section' where id='$id'");
	
    if($edit)
    {
       
        
        
        
        mysqli_close($db); // Close connection
        header("location:editinfocorrection.php"); // redirects to all records page
        exit;
    }
    else
    {
        echo mysqli_error();
    }    	
    
}

header( 'Location: editinfocorrection.php' ) ;

 


?>