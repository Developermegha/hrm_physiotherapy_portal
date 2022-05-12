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
        <link
            href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
            rel="stylesheet">
        <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <style>
            .font_class{
                font-size:10px;
            }
        </style>
    </head>

    <body id="page-top" onload="getStudentList();">
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
                                <h6 class="m-0 font-weight-bold text-primary">Student Information Table</h6>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable1" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>Student ID</th>
                                                <th>Passport No.</th>
                                                <th>Name</th>
                                                <th>Phone No.</th>
                                                <th>Email</th>
                                                <th>Batch</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
    <!--                                    <tbody>
                                            <tr>
                                                <td>001</td>
                                                <td>MRZ2096457</td>
                                                <td>Student Name -1</td>
                                                <td>9988229900</td>
                                                <td>student@gmail.com</td>
                                                <td>IMD - 15</td>
                                                <td class="btnAction">
                                                    <a href="add-consultant.html"
                                                        class="btn btn-sm btn-success shadow-sm">Approved</a>
                                                    <a href="student-details.html"
                                                        class="btn btn-sm btn-primary shadow-sm">View Details</a>
                                                </td>
                                            </tr>
                                        </tbody>-->
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
        <script src="vendor/datatables/jquery.dataTables.min.js"></script>
        <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
        <script src="js/demo/datatables-demo.js"></script>
        <script src="js/main.js"></script>
        <script src="myjs/studentListJs.js"></script>
    </body>

</html>