<?php 


define('DB_SERVER','localhost');
define('DB_USER','dmsfplsm_account');
define('DB_PASS' ,'x0d$mc*7vC39');
define('DB_NAME', 'dmsfplsm_account-portal'); 
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME); 

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
$sql = 'SELECT * FROM `tw_consultants`';
 $query=mysqli_query($con, $sql);
 
 $sql_bt = 'SELECT * FROM `tw_batches` where flg= 1';
 $batchquery=mysqli_query($con, $sql_bt);
?><!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Davao Medical School Foundation Inc</title>
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link
            href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
            rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

        <style>
            .font_class{
                font-size:10px;
            }
        </style>
    </head>

    <body id="page-top" >
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
                
                 <li class="nav-item active">
                    <a class="nav-link" href="editinfocorrection.php">
                        <i class=""></i>
                        <span>Edit Info</span></a>
                </li>
                <hr class="sidebar-divider">
                
            </ul>
            <div id="content-wrapper" class="d-flex flex-column">
                <div id="content">
                    <?php
                    include './top_header.php';
                    include '../connection.php';
                    ?>
                    <div class="container-fluid">
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                           
                        </div>
                        <div class="row">
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    No of Students Registered</div>
                                                <?php
                                                $link = connection();
                                                $getData = mysqli_query($link, "SELECT count(*) as c FROM `personal_tbl` WHERE isActive = '1'");
                                                $data = mysqli_fetch_array($getData);
                                                ?>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $data['c']; ?></div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-success shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                    No of Students Approved</div>
                                                <?php
                                                $link = connection();
                                                $getData = mysqli_query($link, "SELECT count(*) as c FROM `personal_tbl` WHERE approval='1' and isActive = '1'");
                                                $data = mysqli_fetch_array($getData);
                                                ?>

                                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $data['c']; ?></div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-info shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Unapproved
                                                </div>
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col-auto">
                                                        <?php
                                                        $link = connection();
                                                        $getData = mysqli_query($link, "SELECT count(*) as c FROM `personal_tbl` WHERE approval='0' and isActive = '1'");
                                                        $data = mysqli_fetch_array($getData);
                                                        ?>
                                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $data['c']; ?></div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

 
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Student Information Table</h6>
                            </div>
                            <table class="col-12 table-custom-filters">
                                           
                                            <tr>
                                                
                                                <td  class="col-sm-3">
                                                    <label>Consultant </label>
                                                    <select name="consultant" id="consultant" class="form-control" style="width:200;" required >
                                                    <!--<option></option>-->
                                                    <option disabled selected>--Select Consultant--</option>
                                                    <?php while($rows=mysqli_fetch_array($query)){ ?>
                                                    
                                                        <option  value="<?php echo $rows['name']; ?>"><?php echo $rows['name']; ?> </option>
                                                    <?php } ?>
                                                </select>
                                                </td>
                                               
                                                <td class="col-sm-3"><label>Batch</label>
                                                <select name="batch" id="batch" class="form-control" style="width:200;" required >
                                                    <option disabled selected>--Select Batch--</option>
                                                    <?php while($batchrow = mysqli_fetch_array($batchquery)){?>
                                                    
                                                        <option  value="<?php echo $batchrow['name']; ?>"><?php echo $batchrow['name']; ?> </option>
                                                    <?php } ?>
                                                </select>
                                                </td>
                                                </tr>
                                                
                                                    
                                            </tr>
                                          
                                                <!--<tr>-->
                                                <!--    <td class="filter-btn text-right" id="resetFilterSearch" colspan="4">-->
                                                <!--    <button type="button" class="btn btn-primary" id="applyFilter">Search</button>-->
                                                <!--    <button type="button" class="btn btn-default" id="clearFilter">Clear</button>-->
                                                <!--    </td>-->
                                                <!--</tr>-->
                                    </table>
                                    <div class="clearfix"></div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="studentList" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>Image</th>
                                                <th>Student ID</th>
                                                <th>Name</th>
                                                <th>Registration ID</th>
                                                <th>Phone No.</th>
                                                <!--<th>Center</th>-->
                                                <th>Batch</th>
                                                <th>Consultant</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                    </table>
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
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
        <script src="js/main.js"></script>
        <script src="vendor/datatables/jquery.dataTables.min.js"></script>
        <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
        <script src="js/demo/datatables-demo.js"></script>
        <script src="myjs/studentListJs.js"></script>
        <script>
            $(document).ready(function(){
                var url = window.location.pathname;
                var filename = url.substring(url.lastIndexOf('/')+1);
                
  var dataTable = $('#studentList').DataTable({
    'processing': true,
    'serverSide': true,
    'serverMethod': 'post',
    //'searching': false, // Remove default Search Control
    'ajax': {
       'url':'./myphp/studentList.php',
       'data': function(data){
          // Read values
          var consultant = $('#consultant').val();
          var batch = $('#batch').val();

          // Append to data
          data.consultant = consultant;
          data.batch = batch;
            data.filename = filename;
       }
    },
    'columns': [
       { data: 'id' }, 
       {data:'foto'},
       { data: 'regId' },
       { data: 'name' },
       { data: 'studentIdNumber' },
       {data:'whatsappNumber'},
       { data: 'batch' },
       { data: 'consultant' },
         { data: 'action' },
    ]
  });
  
   $('#consultant').change(function(){
    dataTable.draw();
  });

  $('#batch').change(function(){
    dataTable.draw();
  });

 
});
        </script>
    </body>

</html>