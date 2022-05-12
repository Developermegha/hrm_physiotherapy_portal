<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Davao Medical School Foundation-DMSF</title>
        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <link rel="stylesheet" href="assets/css/bootstrap-select.css" />
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/device.css">
    </head>
    <body>
        <div class="Wrapper">
            <div class="container-lg">
                <div class="row justify-content-center m-0">
                    <div class="col-lg-10 col-sm-12">
                        <div class="formWrap">
                            <div class="col-md-12 TitleWrap ">
                                <div class="row">
                                    <div class="col-md-3">
                                        <img src="uploads/logo.png" width="100%" />
                                    </div>
                                    <div class="col-md-9">
                                        <div class="">
                                            <h2>DMSF IMD student Database - Online Registration</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                            include_once './connection.php';
                            $link = connection();
                            
                            $getData = mysqli_query($link, "select p.*,i.passportNumber,s.currentBatch from personal_tbl p,information_tbl i, studied_tbl s where p.id = '".$_REQUEST['id']."' and p.isActive='1' and i.personalID='".$_REQUEST['id']."' and i.isActive='1' and s.personalID = '".$_REQUEST['id']."' and s.isActive = '1'");
                            $data = mysqli_fetch_array($getData);
                            ?>
                            <div class="row mt-5"> <div class="col-md-12 text-center"> <label><b>Your Registration is Successful...!</b></label></div></div>
                            <div class="row">
                                <div class="col-md-6 new-form-detail">
                                    <fieldset>
                                 <br>
                                
                                    <ul class="formListing">
                                        <li class="half">
                                            <div class="formField">
                                                <label><b>Acknowledgement Slip:</b></label>
                                                
                                            </div>
                                        </li>
                                        
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>Your Registration ID is:</label>
                                                <input type="text"  placeholder="Student Id Number" value="<?php echo $data['regId']; ?>" readonly="">
                                            </div>
                                        </li>
                                       
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>Name:</label>
                                                <input type="text"  placeholder="First Name" readonly="" value="<?php echo $data['fName'].' '.$data['lName']  ; ?>">
                                            </div>
                                        </li>
                                  
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>Student ID Number</label>
                                                <input type="text"  value="<?php echo $data['studentIdNumber']; ?>" readonly=""> 
                                            </div>
                                        </li>
                                       
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>Batch</label>
                                                <input type="text"  value="<?php echo $data['currentBatch']; ?>"  readonly="">
                                            </div>
                                        </li>
                                    
                                        <li class="thirds">
                                            <div class="formField">
                                                <label>Passport Number</label>
                                                <input type="text" value="<?php echo $data['passportNumber']; ?>"  readonly="">
                                            </div>
                                        </li>
                                    
                                        <li class="thirds">
                                            <label><sup style="color:red; font-size:14px;">*</sub>Save this slip for future reference.</label>
                                        </li>
                                      
                                    </ul>
                                </fieldset> 
                                </div>
                                 <div class="col-md-6 mt-10">
                                     <img src="uploads/<?php echo $data['foto']; ?>" style="border-radius: 30px; width:100px; height:100px;">
                                </div>
                            </div>
                            
                             <div class="row mb-5"> <div class="col-md-12 text-center">  
                                            <div class="ctaWrap">
                                                <button class="btn btn-outline-warning btn-print" onclick="window.print()">Print this page</button>
                                                <button type="button" class="btn btn-next" onclick="reload()" >OK</button>
                                            </div>
                                     </div>
							</div>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/bootstrap-select.min.js"></script>
        <script src="assets/js/main.js"></script>
        <script src="myjs/reg.js"></script>
        <script>
                                                    $('select').selectpicker();
        </script>
        <script>
            $(document).ready(function () {
                $(':radio[id=customRadio1]').change(function () {
                    $("#ifyes").removeClass("none");
                    $("#ifno").addClass("none");


                });
                $(':radio[id=customRadio2]').change(function () {
                    $("#ifno").removeClass("none");
                    $("#ifyes").addClass("none");

                });
            });
        </script>
    </body>
</html>
