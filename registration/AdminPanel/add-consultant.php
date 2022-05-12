<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Davao Medical School Foundation Inc</title>
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link
            href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
            rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    </head>

    <body id="page-top">
        <div id="wrapper">
            <?php
            include './side_menu.php';
            ?>
            <div id="content-wrapper" class="d-flex flex-column">
                <div id="content">
                    <?php
                    include './top_header.php';
                    ?>
                    <div class="container-fluid">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Add Consultant</h6>
                            </div>
                            <div class="card-body">
                                <div class="formWrap">
                                    <div class="row">
                                        <div class="col-sm-5">
                                            
                                                <ul>
                                                    <li>
                                                        <div class="form-group">
                                                            <label> Registration Number</label>
                                                            <input type="text" class="form-control" id="regId"
                                                                   value="<?php echo $_REQUEST['regId'];?>" readonly="">
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-group">
                                                            <label> Consultant Name</label>
                                                            <input type="text" class="form-control" id="consultantName"
                                                                   placeholder="Enter Consultant Name">
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-group">
                                                            <label>Remark</label>
                                                            <textarea type="text" class="form-control" id="remark"
                                                                      placeholder="Remark Here..."></textarea>
                                                        </div>
                                                    </li>
                                                    <input type="hidden" value="<?php echo $_REQUEST['id'];?>" id="sid">
                                                    <li>
                                                        <button type="button" class="btn btn-sm btn-primary" onclick="approveFunction(sid.value);">Add</button>
                                                    </li>
                                                </ul>
                                           
                                        </div>
                                    </div>
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
    </body>

</html><?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

