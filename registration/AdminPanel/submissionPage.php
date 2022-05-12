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
        <?php
        include '../connection.php';
        $link = connection();
        ?>
        
           <style>
            
            .studentDtl .leftpanelData .imgWrap img {
    border: 1px solid #088dcd;
    border-radius: 100%;
    padding: 3px;
    width: 100px;
    height: 100px;
}
        </style>
    </head>

    <body id="page-top" onload="checkedCertificateList(<?php echo $_REQUEST['id'];?>); checkedXeroxCertificateList(<?php echo $_REQUEST['id'];?>)" >
        <div id="wrapper">
            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="SubmissionIndex.php">
                    <div class="sidebar-brand-text mx-3">DMSF</div>
                </a>
                <hr class="sidebar-divider my-0">
                <li class="nav-item active">
                    <a class="nav-link" href="SubmissionIndex.php">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Dashboard</span></a>
                </li>
                <hr class="sidebar-divider">
                <!--<li class="nav-item">-->
                <!--    <a class="nav-link" href="student-list.php">-->
                <!--        <i class="fas fa-fw fa-table"></i>-->
                <!--        <span>Students Table</span></a>-->
                <!--</li>-->
                <!--<div class="text-center d-none d-md-inline">-->
                <!--    <button class="rounded-circle border-0" id="sidebarToggle"></button>-->
                <!--</div>-->
            </ul>
            <div id="content-wrapper" class="d-flex flex-column">
                <div id="content">
                    <?php
                    include './top_header.php';
                    ?>
                    <?php
                    $id = $_REQUEST['id'];
                    // $fetchQry = mysqli_query($link, "SELECT * FROM personal_tbl p, studied_tbl s,information_tbl i,hostel_tbl h,educational_tbl e,mark_tbl m WHERE m.personalId='" . $_REQUEST['id'] . "' AND p.id = '" . $_REQUEST['id'] . "' AND s.personalID='" . $_REQUEST['id'] . "' AND i.personalId = '" . $_REQUEST['id'] . "' AND h.personalId='" . $_REQUEST['id'] . "' AND e.personalId='" . $_REQUEST['id'] . "' AND p.isActive = '1' AND s.isActive='1' AND i.isActive = '1' AND h.isActive = '1' AND e.isActive='1' AND m.isActive='1'");
                    $fetchQry = mysqli_query($link, "SELECT * FROM `personal_tbl` WHERE id ='" . $_REQUEST['id'] . "' AND isActive='1' ");
                    $reQry = mysqli_query($link, "SELECT * FROM remark_tbl WHERE personalId = '" . $_REQUEST['id'] . "' AND isActive = '1'");
                    $data = mysqli_fetch_array($fetchQry);
                    $rema = mysqli_fetch_array($reQry);
                    
                    $queryContact   =  mysqli_query($link,"SELECT * FROM `information_tbl` WHERE personalID ='" . $_REQUEST['id'] . "' AND isActive='1'");
                    $data1   =  mysqli_fetch_array($queryContact);
                    
                   $queryHostel  =  mysqli_query($link,"SELECT * FROM `hostel_tbl` WHERE personalId='" . $_REQUEST['id'] . "' AND isActive='1'");
                    $data2  =  mysqli_fetch_array($queryHostel);
                           
                           
                       
                    $queryCourse1  =  mysqli_query($link,"SELECT * FROM `studied_tbl` WHERE personalID='" . $_REQUEST['id'] . "' AND isActive='1'");
                    $data5  =  mysqli_fetch_array($queryCourse1);
                    
                    
                
                    $querymarks  =  mysqli_query($link,"SELECT * FROM `mark_tbl` WHERE personalId='" . $_REQUEST['id'] . "' AND isActive='1'");
                    $data4  =  mysqli_fetch_array($querymarks);
                                                                
                                             
                    $queryCourse  =  mysqli_query($link,"SELECT * FROM `educational_tbl` WHERE personalId='" . $_REQUEST['id'] . "' AND isActive='1'");
                    $data3  =  mysqli_fetch_array($queryCourse);
                                                                   
                                                          
                    ?>
                    <div class="container-fluid">
                        <div class="card shadow mb-4">
                            <div class="card-body studentDtl">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="leftpanelData">
                                            <div class="bgimg bg-gradient-primary"></div>
                                            <div class="imgWrap">
                                                <img src="../uploads/<?php echo $data['foto']; ?>" class="img-fluid">
                                            </div>
                                            <div class="dataWrap">
                                                <h2><?php echo strtoupper($data['fName'] . " " . $data['mName'] . " " . $data['lName']); ?></h2>
                                                <div class="divider"></div>
                                                <p><span>Contact No : </span> <?php echo $data['philippinesPhone']; ?></p>
                                                <p><span>EMail Id : </span> <?php echo $data['email']; ?></p>
                                                <div class="divider"></div>
                                                <p><span>Batch : </span> <?php echo $data5['currentBatch']; ?></p>
												<div class="divider"></div>
												<p><span>Counseling : Approved</span> </p>
												<p><span>Verification : Approved</span> </p>
												<p><span>Correction : Approved</span> </p>
												<p><span>Finance : Approved</span> </p>
												<p><span>Submission : In Submission Section</span> </p>
                                               <!-- <p><span>Remark : </span> <?php echo $rema['remark']; ?></p>-->
                                               

                                                            <a href="#" title="" data-toggle="modal" data-target="#glassAnimals" class="but-add-remark" ><i class="fa fa-plus" aria-hidden="true"></i> Certificates </a>&nbsp;
                                                             <a href="print_checklist.php?id=<?php echo $_REQUEST['id']?>" target="_blank" title="Print"  class="btn btn-primary" ><i class="fa fa-print" aria-hidden="true"></i> Print </a>

                                                <div class="modal fade" id="glassAnimals" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Certificate List</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">

                                                                <input type="hidden" id="personalId" value="<?php echo $_REQUEST['id']; ?>">                                                                  
                                                                <table class="table table-bordered">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>SNO</th>
                                                                            <th>Particulars</th>
                                                                            <th>Original</th>
                                                                            <th>Xerox</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>1</td>
                                                                            <td>Admission Form</td>
                                                                            <td><input type="checkbox" class="orgCertificate" name="org[]" value="1/Admission Form" ></td>
                                                                            <td><input type="checkbox" class="copyCertificate" name="copy[]" value="1/Admission Form"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>2</td>
                                                                            <td>Passport(ORI)</td>
                                                                            <td><input type="checkbox" class="orgCertificate" name="org[]" value="1/Passport"></td>
                                                                            <td><input type="checkbox" class="copyCertificate" name="copy[]" value="1/Passport"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>3</td>
                                                                            <td>10th Mark theet</td>
                                                                            <td><input type="checkbox" class="orgCertificate" name="org[]" value="1/10th Mark theet"></td>
                                                                            <td><input type="checkbox" class="copyCertificate" name="copy[]" value="1/10th Mark theet"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>4</td>
                                                                            <td>11th Mark Sheet</td>
                                                                            <td><input type="checkbox" class="orgCertificate" name="org[]" value="1/11th Mark Sheet"></td>
                                                                            <td><input type="checkbox" class="copyCertificate" name="copy[]" value="1/11th Mark Sheet"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>5</td>
                                                                            <td>12th Mark Sheet</td>
                                                                            <td><input type="checkbox" class="orgCertificate" name="org[]" value="1/12th Mark Sheet"></td>
                                                                            <td><input type="checkbox" class="copyCertificate" name="copy[]" value="1/12th Mark Sheet"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>6</td>
                                                                            <td>10th Passing Certificate</td>
                                                                            <td><input type="checkbox" class="orgCertificate" name="org[]" value="1/10th Passing Certificate"></td>
                                                                            <td><input type="checkbox" class="copyCertificate" name="copy[]" value="1/10th Passing Certificate"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>7</td>
                                                                            <td>12th Passing Certificate</td>
                                                                            <td><input type="checkbox" class="orgCertificate" name="org[]" value="1/12th Passing Certificate"></td>
                                                                            <td><input type="checkbox" class="copyCertificate" name="copy[]" value="1/12th Passing Certificate"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>8</td>
                                                                            <td>Transfer Certificate or L.C</td>
                                                                            <td><input type="checkbox" class="orgCertificate" name="org[]" value="1/Transfer Certificate or L.C"></td>
                                                                            <td><input type="checkbox" class="copyCertificate" name="copy[]" value="1/Transfer Certificate or L.C"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>9</td>
                                                                            <td>Community Certificate</td>
                                                                            <td><input type="checkbox" class="orgCertificate" name="org[]" value="1/Community Certificate"></td>
                                                                            <td><input type="checkbox" class="copyCertificate" name="copy[]" value="1/Community Certificate"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>10</td>
                                                                            <td>Birth Certificate</td>
                                                                            <td><input type="checkbox" class="orgCertificate" name="org[]" value="1/Birth Certificate"></td>
                                                                            <td><input type="checkbox" class="copyCertificate" name="copy[]" value="1/Birth Certificate"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>11</td>
                                                                            <td>Migration Certificate</td>
                                                                            <td><input type="checkbox" class="orgCertificate" name="org[]" value="1/Migration Certificate"></td>
                                                                            <td><input type="checkbox" class="copyCertificate" name="copy[]" value="1/Migration Certificate"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>12</td>
                                                                            <td>Recent Photograph(10 Copies)</td>
                                                                            <td><input type="checkbox" class="orgCertificate" name="org[]" value="1/Recent Photograph(10 Copies)"></td>
                                                                            <td><input type="checkbox" class="copyCertificate" name="copy[]" value="1/Recent Photograph(10 Copies)"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>13</td>
                                                                            <td>NEET Admit Card</td>
                                                                            <td><input type="checkbox" class="orgCertificate" name="org[]" value="1/NEET Admit Card"></td>
                                                                            <td><input type="checkbox" class="copyCertificate" name="copy[]" value="1/NEET Admit Card"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>14</td>
                                                                            <td>NEET Score Card</td>
                                                                            <td><input type="checkbox" class="orgCertificate" name="org[]" value="1/NEET Score Card"></td>
                                                                            <td><input type="checkbox" class="copyCertificate" name="copy[]" value="1/NEET Score Card"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>15</td>
                                                                            <td>Aadhar Card</td>
                                                                            <td><input type="checkbox" class="orgCertificate" name="org[]" value="1/Aadhar Card"></td>
                                                                            <td><input type="checkbox" class="copyCertificate" name="copy[]" value="1/Aadhar Card"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>16</td>
                                                                            <td>PAN Card(For Student)</td>
                                                                            <td><input type="checkbox" class="orgCertificate" name="org[]" value="1/PAN Card(For Student)"></td>
                                                                            <td><input type="checkbox" class="copyCertificate" name="copy[]" value="1/PAN Card(For Student)"></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>

                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                               
                                                                <button type="button" onclick="addCertificate()" class="btn btn-success">Save</button>
                                                                <button type="button" onclick="orgCertificateRemove()" class="btn btn-primary">Remove</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="divider"></div>
                                                <a href="#" title="Reject" data-toggle="modal" data-target="#rejectModal" class="btn btn-sm btn-danger shadow-sm float-left font_class margin-right-10" ><i class="fa fa-trash" aria-hidden="true"></i> Reject </a>
                                                <div class="modal fade" id="rejectModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Are you sure want to reject this document?</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <ul class="remark-detail">
                                                                    <li>
                                                                        <input type="hidden" id="id" value="<?php echo $_REQUEST['id']; ?>">
                                                                        <div class="form-group">
                                                                            <label> Student Name</label>
                                                                            <input type="text" class="form-control"
                                                                                   value="<?php echo strtoupper($data['fName'] . " " . $data['mName'] . " " . $data['lName']); ?>"  readonly="">
                                                                        </div>
                                                                    </li>
																	<li>
                                                                        <div class="form-group">
                                                                            <label>Remark</label>
                                                                            <textarea type="text" class="form-control" id="rmk16"
                                                                                      placeholder="Remark Here..."></textarea>
                                                                        </div>
                                                                    </li>
                                                                </ul>

                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                <button type="button" onclick="approveFunction('-10','16')" class="btn btn-danger">Submit</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="#" title="Hold" data-toggle="modal" data-target="#holdModal" class="btn btn-sm btn-warning shadow-sm float-left font_class margin-right-10" ><i class="fa fa-box-open" aria-hidden="true"></i> Hold </a>
                                                <div class="modal fade" id="holdModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Are you sure want to hold this document?</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <ul class="remark-detail">
                                                                    <li>
                                                                        <input type="hidden" id="id" value="<?php echo $_REQUEST['id']; ?>">
                                                                        <div class="form-group">
                                                                            <label> Student Name</label>
                                                                            <input type="text" class="form-control"
                                                                                   value="<?php echo strtoupper($data['fName'] . " " . $data['mName'] . " " . $data['lName']); ?>"  readonly="">
                                                                        </div>
                                                                    </li>
																	<li>
                                                                        <div class="form-group">
                                                                            <label>Remark</label>
                                                                            <textarea type="text" class="form-control" id="rmk15"
                                                                                      placeholder="Remark Here..."></textarea>
                                                                        </div>
                                                                    </li>
                                                                </ul>

                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                <button type="button" onclick="approveFunction('-9','15')" class="btn btn-warning">Submit</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="#" title="Approved" data-toggle="modal" data-target="#approveModal" class="btn btn-sm btn-success shadow-sm float-left font_class margin-right-10" ><i class="fa fa-check-circle" aria-hidden="true"></i> Approved </a>
                                                <div class="modal fade" id="approveModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Are you sure want to approve this document?</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <ul class="remark-detail">
                                                                    <li>
                                                                        <input type="hidden" id="sid" value="<?php echo $_REQUEST['id']; ?>">
                                                                        <div class="form-group">
                                                                            <label> Student Name</label>
                                                                            <input type="text" class="form-control"
                                                                                   value="<?php echo strtoupper($data['fName'] . " " . $data['mName'] . " " . $data['lName']); ?>"  readonly="">
                                                                        </div>
                                                                    </li>
																	<li>
                                                                        <div class="form-group">
                                                                            <label>Remark</label>
                                                                            <textarea type="text" class="form-control" id="rmk14"
                                                                                      placeholder="Remark Here..."></textarea>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                <button type="button" onclick="approveFunction('5','14')" class="btn btn-success">Submit</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-8">
                                        <div class="tile" id="tile-1">
                                            <div class="mobileTbasvar">
                                                <ul class="nav nav-tabs nav-justified" role="tablist">
                                                    <div class="slider"></div>
                                                    <li class="nav-item">
                                                        <a class="nav-link active" id="personal-tab" data-toggle="tab"
                                                           href="#personal" role="tab" aria-controls="personal"
                                                           aria-selected="true">Personal Details</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="contact-tab" data-toggle="tab"
                                                           href="#contact" role="tab" aria-controls="contact"
                                                           aria-selected="false">Contact Details</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="hostel-tab" data-toggle="tab" href="#hostel"
                                                           role="tab" aria-controls="hostel" aria-selected="false">Hostel
                                                            Details</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="course-tab" data-toggle="tab" href="#course"
                                                           role="tab" aria-controls="course"
                                                           aria-selected="false"></i>Course Details</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="education-tab" data-toggle="tab" href="#education"
                                                           role="tab" aria-controls="education"
                                                           aria-selected="false"></i>Educational</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="document-tab" data-toggle="tab" href="#document"
                                                           role="tab" aria-controls="document"
                                                           aria-selected="false"></i>Document</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="remark-tab" data-toggle="tab" href="#remark"
                                                           role="tab" aria-controls="remark"
                                                           aria-selected="false"></i>Remark History</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="tab-content">
                                                
                                               <div class="tab-pane fade show active" id="personal" role="tabpanel"
                                                     aria-labelledby="personal-tab">
                                                    <div class="dataWrap">
                                                        <ul>
                                                            <li>
                                                                <div class="dataLabel">
                                                                    <label>Student Id Number</label>
                                                                </div>
                                                                <div class="dataInfo">
                                                                    <p><?php echo $data['studentIdNumber']; ?></p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="dataLabel">
                                                                    <label>Registration Number</label>
                                                                </div>
                                                                <div class="dataInfo">
                                                                    <p><?php echo $data['regId']; ?></p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="dataLabel">
                                                                    <label>Student Passport Number</label>
                                                                </div>
                                                                <div class="dataInfo">
                                                                    <p><?php echo $data1['passportNumber']; ?></p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="dataLabel">
                                                                    <label>Student Name</label>
                                                                </div>
                                                                <div class="dataInfo">
                                                                    <p><?php echo strtoupper($data['fName'] . " " . $data['mName'] . " " . $data['lName']); ?></p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="dataLabel">
                                                                    <label>Phone Number</label>
                                                                </div>
                                                                <div class="dataInfo">
                                                                    <p><?php echo $data['philippinesPhone']; ?></p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="dataLabel">
                                                                    <label>Telegram Number</label>
                                                                </div>
                                                                <div class="dataInfo">
                                                                    <p> <?php echo $data['telegramNumber']; ?></p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="dataLabel">
                                                                    <label>Whatsapp Number</label>
                                                                </div>
                                                                <div class="dataInfo">
                                                                    <p><?php echo $data['whatsappNumber']; ?></p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="dataLabel">
                                                                    <label>Email</label>
                                                                </div>
                                                                <div class="dataInfo">
                                                                    <p><?php echo $data['email']; ?></p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="dataLabel">
                                                                    <label>Blood Group</label>
                                                                </div>
                                                                <div class="dataInfo">
                                                                    <p><?php echo strtoupper($data['bloodGroup']); ?></p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="dataLabel">
                                                                    <label>Nationality </label>
                                                                </div>
                                                                <div class="dataInfo">
                                                                    <p><?php echo strtoupper($data['nationality']); ?></p>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="contact" role="tabpanel"
                                                     aria-labelledby="contact-tab">
                                                    <div class="dataWrap">
                                                        <ul>
                                                            <li>
                                                                <div class="dataLabel">
                                                                    <label>Temporary Address in home country</label>
                                                                </div>
                                                                <div class="dataInfo">
                                                                    <p><?php echo strtoupper($data1['temporaryAddress']); ?></p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="dataLabel">
                                                                    <label>Country</label>
                                                                </div>
                                                                <div class="dataInfo">
                                                                    <p><?php echo strtoupper($data1['tCountry']); ?></p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="dataLabel">
                                                                    <label>State</label>
                                                                </div>
                                                                <div class="dataInfo">
                                                                    <p><?php echo strtoupper($data1['tState']); ?></p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="dataLabel">
                                                                    <label>District</label>
                                                                </div>
                                                                <div class="dataInfo">
                                                                    <p><?php echo strtoupper($data1['tDistrict']); ?></p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="dataLabel">
                                                                    <label>City</label>
                                                                </div>
                                                                <div class="dataInfo">
                                                                    <p><?php echo strtoupper($data1['tCity']); ?></p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="dataLabel">
                                                                    <label>Pincode</label>
                                                                </div>
                                                                <div class="dataInfo">
                                                                    <p><?php echo $data1['tPincode']; ?></p>
                                                                </div>
                                                            </li>

                                                            <li>
                                                                <div class="dataLabel">
                                                                    <label>Permanent Address in Home Country</label>
                                                                </div>
                                                                <div class="dataInfo">
                                                                    <p><?php echo strtoupper($data1['permanentAddress']); ?></p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="dataLabel">
                                                                    <label>Country</label>
                                                                </div>
                                                                <div class="dataInfo">
                                                                    <p><?php echo strtoupper($data1['pCountry']); ?></p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="dataLabel">
                                                                    <label>State</label>
                                                                </div>
                                                                <div class="dataInfo">
                                                                    <p><?php echo strtoupper($data1['pState']); ?></p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="dataLabel">
                                                                    <label>District</label>
                                                                </div>
                                                                <div class="dataInfo">
                                                                    <p><?php echo strtoupper($data1['pDistrict']); ?></p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="dataLabel">
                                                                    <label>City</label>
                                                                </div>
                                                                <div class="dataInfo">
                                                                    <p><?php echo strtoupper($data1['pCity']); ?></p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="dataLabel">
                                                                    <label>Pincode</label>
                                                                </div>
                                                                <div class="dataInfo">
                                                                    <p><?php echo $data1['pPincode']; ?></p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                        </ul>
                                                        <div class="table-responsive contacttable">
                                                            <table width="100%">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Details</th>
                                                                        <th>Father</th>
                                                                        <th>Mother</th>
                                                                        <!--<th>Guardian</th>-->
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <th>Name</th>
                                                                        <td><?php echo strtoupper($data1['fatherName']); ?></td>
                                                                        <td><?php echo strtoupper($data1['motherName']); ?></td>
                                                                        <!--<td>-</td>-->
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Email</th>
                                                                        <td><?php echo $data1['fatherEmail']; ?></td>
                                                                        <td><?php echo $data1['motherEmail']; ?></td>
                                                                        <!--<td>-</td>-->
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Phone No</th>
                                                                        <td><?php echo $data1['fatherMobile']; ?></td>
                                                                        <td><?php echo $data1['motherMobile']; ?></td>
                                                                        <!--<td>-</td>-->
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Address</th>
                                                                        <td><?php echo strtoupper($data1['permanentAddress']); ?></td>
                                                                        <td><?php echo strtoupper($data1['permanentAddress']); ?></td>
                                                                        <!--<td></td>-->
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Occupation</th>
                                                                        <td><?php echo strtoupper($data1['fatherOccupation']); ?></td>
                                                                        <td><?php echo strtoupper($data1['motherOccupation']); ?></td>
                                                                        <!--<td>-</td>-->
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                               <div class="tab-pane fade" id="hostel" role="tabpanel"
                                                     aria-labelledby="hostel-tab">
                                                    <div class="dataWrap">
                                                        <ul>


                                                            <li>
                                                                <div class="dataLabel">
                                                                    <label>Accommodation</label>
                                                                </div>
                                                                <div class="dataInfo">
                                                                    <p><?php echo strtoupper($data2['accommodation']); ?></p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="dataLabel">
                                                                    <label>Center</label>
                                                                </div>
                                                                <div class="dataInfo">
                                                                    <p><?php echo strtoupper($data2['center']); ?></p>
                                                                </div>
                                                            </li>                                                              
                                                        </ul>
                                                    </div>
                                                </div>
                                               <div class="tab-pane fade" id="course" role="tabpanel"
                                                     aria-labelledby="course-tab">
                                                    <div class="dataWrap">
                                                        <ul>
                                                            <li>
                                                                <div class="dataLabel">
                                                                    <label>CURRENT BATCH</label>
                                                                </div>
                                                                <div class="dataInfo">
                                                                    <p><?php echo $data5['currentBatch']; ?></p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="dataLabel">
                                                                    <label>DIRECT TO PHILIPPINES OR STUDIED B.S IN
                                                                        INDIA</label>
                                                                </div>
                                                                <div class="dataInfo">
                                                                    <p><?php echo $data5['studied']; ?></p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="dataLabel">
                                                                    <label>YEAR AND MONTH OF START OF B.S COURSE</label>
                                                                </div>
                                                                <div class="dataInfo">
                                                                    <p><?php echo $data5['yearOfStartBS'] . ' ' . $data5['monthBS']; ?></p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="dataLabel">
                                                                    <label>Responsible Person for Fee</label>
                                                                </div>
                                                                <div class="dataInfo">
                                                                    <p><?php echo strtoupper($data5['responsibleName']); ?></p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="dataLabel">
                                                                    <label>Occupation</label>
                                                                </div>
                                                                <div class="dataInfo">
                                                                    <p><?php echo strtoupper($data5['responsibleOccupation']); ?></p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="dataLabel">
                                                                    <label>Relationship</label>
                                                                </div>
                                                                <div class="dataInfo">
                                                                    <p><?php echo strtoupper($data5['relationship']); ?></p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="dataLabel">
                                                                    <label>Contact Number</label>
                                                                </div>
                                                                <div class="dataInfo">
                                                                    <p><?php echo $data5['responsibleContactNumber']; ?></p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="dataLabel">
                                                                    <label>Responsible Email</label>
                                                                </div>
                                                                <div class="dataInfo">
                                                                    <p><?php echo $data5['responsibleEmail']; ?></p>
                                                                </div>
                                                            </li>
                                                            <?php if ($data5['lateralEntry'] === "yes") { ?>
                                                                <li>
                                                                    <div class="dataLabel">
                                                                        <label>University Name</label>
                                                                    </div>
                                                                    <div class="dataInfo">
                                                                        <p><?php echo strtoupper($data5['universityName']); ?></p>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="dataLabel">
                                                                        <label>College Name</label>
                                                                    </div>
                                                                    <div class="dataInfo">
                                                                        <p><?php echo strtoupper($data5['collegeName']); ?></p>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="dataLabel">
                                                                        <label>year Of Passing</label>
                                                                    </div>
                                                                    <div class="dataInfo">
                                                                        <p><?php echo $data5['yearOfPassing']; ?></p>
                                                                    </div>
                                                                </li>
                                                                
                                                                
                                                                
                                                                <li>
                                                                    <div class="dataLabel">
                                                                        <label>Percentage</label>
                                                                    </div>
                                                                    <div class="dataInfo">
                                                                        <p><?php echo $data5['percentage']; ?></p>
                                                                    </div>
                                                                </li>
                                                            <?php } ?>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="education" role="tabpanel"
                                                     aria-labelledby="education-tab">
                                                    <div class="dataWrap remarkHistoryWrap">
                                                        <div class="table-responsive">
                                                            <table>
                                                                <tr>
                                                                    <th>Name</th>
                                                                    <th>SSLC</th>
                                                                    <th>HSC</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>Percentage</td>
                                                                    <td><?php echo $data3['tenthPercentage'] . '%'; ?></td>
                                                                    <td><?php echo $data3['twelvethPercentage'] . '%'; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>School Name</td>
                                                                    <td><?php echo strtoupper($data3['tenthSchoolName']); ?></td>
                                                                    <td><?php echo strtoupper($data3['twelvethSchoolName']); ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Board</td>
                                                                    <td><?php echo strtoupper($data3['tenthBoard']); ?></td>
                                                                    <td><?php echo strtoupper($data3['twelvethBoard']); ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>School Address</td>
                                                                    <td><?php echo strtoupper($data3['tenthSchoolAddress']); ?></td>
                                                                    <td><?php echo strtoupper($data3['twelvethSchoolAddress']); ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>District</td>
                                                                    <td><?php echo strtoupper($data3['tenthDistrict']); ?></td>
                                                                    <td><?php echo strtoupper($data3['twelvethDistrict']); ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>State</td>
                                                                    <td><?php echo strtoupper($data3['tenthState']); ?></td>
                                                                    <td><?php echo strtoupper($data3['twelvethState']); ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Country</td>
                                                                    <td><?php echo strtoupper($data3['tenthCountry']); ?></td>
                                                                    <td><?php echo strtoupper($data3['twelvethCountry']); ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Neet Score</td>
                                                                    <td>-</td>
                                                                    <td><?php echo $data3['neetScore']; ?></td>
                                                                </tr>
                                                               
                                                                <tr>
                                                                    <td><?php echo strtoupper($data4['s1']); ?></td>
                                                                    <td><?php echo $data4['m1']; ?></td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><?php echo strtoupper($data4['s2']); ?></td>
                                                                    <td><?php echo $data4['m2']; ?></td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><?php echo strtoupper($data4['s3']); ?></td>
                                                                    <td><?php echo $data4['m3']; ?></td>
                                                                    <td></td>
                                                                </tr>
                                                                <?php if ($data4['s4'] !== " ") { ?>
                                                                    <tr>
                                                                        <td><?php echo strtoupper($data4['s4']); ?></td>
                                                                        <td><?php echo $data4['m4']; ?></td>
                                                                        <td></td>
                                                                    </tr>
                                                                <?php } if ($data4['s5'] !== " ") { ?>
                                                                    <tr>
                                                                        <td><?php echo strtoupper($data4['s5']); ?></td>
                                                                        <td><?php echo $data4['m5']; ?></td>
                                                                        <td></td>
                                                                    </tr>
                                                                <?php } if ($data4['s6'] !== " ") { ?>
                                                                    <tr>
                                                                        <td><?php echo strtoupper($data4['s6']); ?></td>
                                                                        <td><?php echo $data4['m6']; ?></td>
                                                                        <td></td>
                                                                    </tr>
                                                                <?php } ?>




                                                                <tr>
                                                                    <td><?php echo strtoupper($data4['ss1']); ?></td>
                                                                    <td>-</td>
                                                                    <td><?php echo $data4['mm1']; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><?php echo strtoupper($data4['ss2']); ?></td>
                                                                    <td>-</td>
                                                                    <td><?php echo $data4['mm2']; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><?php echo strtoupper($data4['ss3']); ?></td>
                                                                    <td>-</td>
                                                                    <td><?php echo $data4['mm3']; ?></td>
                                                                </tr>
                                                                <?php if ($data4['ss4'] !== " ") { ?>
                                                                    <tr>
                                                                        <td><?php echo strtoupper($data4['ss4']); ?></td>
                                                                        <td>-</td>
                                                                        <td><?php echo $data4['mm4']; ?></td>
                                                                    </tr>
                                                                <?php } if ($data4['ss5'] !== " ") { ?>
                                                                    <tr>
                                                                        <td><?php echo strtoupper($data4['ss5']); ?></td>
                                                                        <td>-</td>
                                                                        <td><?php echo $data4['mm5']; ?></td>
                                                                    </tr>
                                                                <?php } if ($data4['ss6'] !== " ") { ?>
                                                                    <tr>
                                                                        <td><?php echo strtoupper($data4['ss6']); ?></td>
                                                                        <td>-</td>
                                                                        <td><?php echo $data4['mm6']; ?></td>
                                                                    </tr>
                                                                <?php } ?>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                
                                                <div class="tab-pane fade" id="document" role="tabpanel"
                                                     aria-labelledby="document-tab">
                                                    <div class="dataWrap remarkHistoryWrap">
                                                        <ul>
                                                            <?php
                                                            $reQry3 = mysqli_query($link, "SELECT * FROM document_tbl WHERE personalId = '" . $_REQUEST['id'] . "' AND isActive = '1'");
                                                            $r3 = mysqli_fetch_array($reQry3);
                                                            
                                                             $path = "../uploads/doc/".$r3['sslcMarksheet'];
                                                            $extension1 = pathinfo($path, PATHINFO_EXTENSION);
                                                            $pathelev = "../uploads/doc/".$r3['elevenMarksheet'];
                                                            $extension2 = pathinfo($pathelev, PATHINFO_EXTENSION);
                                                            $pathhsc = "../uploads/doc/".$r3['hscMarksheet'];
                                                            $extension3 = pathinfo($pathhsc, PATHINFO_EXTENSION);
                                                            $pathaad = "../uploads/doc/".$r3['aadharCard'];
                                                            $extension4 = pathinfo($pathaad, PATHINFO_EXTENSION);
                                                            $pathaadback = "../uploads/doc/".$r3['aadharCardBack'];
                                                            $extension5 = pathinfo($pathaadback, PATHINFO_EXTENSION);
                                                            $pathneet = "../uploads/doc/".$r3['neetMarksheet'];
                                                            $extension6 = pathinfo($pathneet, PATHINFO_EXTENSION);
                                                            $pathugMark = "../uploads/doc/".$r3['ugMarksheet'];
                                                            $extension7 = pathinfo($pathugMark, PATHINFO_EXTENSION);
                                                            $pathtc = "../uploads/doc/".$r3['tc'];
                                                            $extension8 = pathinfo($pathtc, PATHINFO_EXTENSION);
                                                            $pathmigration = "../uploads/doc/".$r3['migration'];
                                                            $extension9 = pathinfo($pathmigration, PATHINFO_EXTENSION);
                                                            $pathbirth = "../uploads/doc/".$r3['birth'];
                                                            $extension10 = pathinfo($pathbirth, PATHINFO_EXTENSION);
                                                            $pathcomm = "../uploads/doc/".$r3['communication'];
                                                            $extension11 = pathinfo($pathcomm, PATHINFO_EXTENSION);
                                                            $pathpass = "../uploads/doc/".$r3['passport'];
                                                            $extension12 = pathinfo($pathpass, PATHINFO_EXTENSION);
                                                            $pathpoth = "../uploads/doc/".$r3['photo'];
                                                            $extension13 = pathinfo($pathpoth, PATHINFO_EXTENSION);
                                                            
                                                         
                                                         
                                                              
                                                
                                                                ?>
                                                                
                                                                <li>
                                                                    <div class="dataLabel">
                                                                        <label>SSLC Mark Sheet</label>
                                                                    </div>
                                                                    <div class="dataInfo">
                                                                        <?php 
                                                                         if($extension1 == 'pdf'){
                                                                                $image = "../uploads/doc/Adobe1.png";
                                                                        ?>      <a href="../uploads/doc/<?php echo $r3["sslcMarksheet"]; ?>" target="_blank" title="view" ><img src="<?php echo $image; ?>" height="70" width="60" /></a>
                                                                        <?php  }else{
                                                                            $image ="../uploads/doc/".$r3['sslcMarksheet'];
                                                                        ?>       <a href="" target="_blank" title="view" data-toggle="modal" data-target="#img1"  ><img src="<?php echo $image; ?>" height="70" width="60" /></a>
                                                                        <?php } ?>
                                                           
                                                                 
                                                                    </div>
                                                                    <div class="modal fade" id="img1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog modal-lg" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title" id="exampleModalLabel">SSLC Marksheet</h5>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <img src="../uploads/doc/<?php echo $r3['sslcMarksheet']; ?>" width="100%"/>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <li>
                                                                    <div class="dataLabel">
                                                                        <label>11th Std.Mark Sheet</label>
                                                                    </div>
                                                                    <div class="dataInfo">
                                                                            <?php 
                                                                         if($extension2 == 'pdf'){
                                                                                $image = "../uploads/doc/Adobe1.png";
                                                                        ?>      <a href="../uploads/doc/<?php echo $r3["elevenMarksheet"]; ?>" target="_blank" title="view" ><img src="<?php echo $image; ?>" height="70" width="60" /></a>
                                                                        <?php  }else{
                                                                            $image ="../uploads/doc/".$r3['elevenMarksheet'];
                                                                        ?>       <a href="" target="_blank" title="view" data-toggle="modal" data-target="#img1"  ><img src="<?php echo $image; ?>" height="70" width="60" /></a>
                                                                        <?php } ?>
                                                           
                                                                    </div>
                                                                    <div class="modal fade" id="img2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog modal-lg" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title" id="exampleModalLabel">11th STD Marksheet</h5>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <img src="../uploads/doc/<?php echo $r3['elevenMarksheet']; ?>" width="100%"/>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="dataLabel">
                                                                        <label>Hsc Mark Sheet</label>
                                                                    </div>
                                                                    <div class="dataInfo">
                                                                          <?php 
                                                                         if($extension3 == 'pdf'){
                                                                                $image = "../uploads/doc/Adobe1.png";
                                                                        ?>      <a href="../uploads/doc/<?php echo $r3["hscMarksheet"]; ?>" target="_blank" title="view" ><img src="<?php echo $image; ?>" height="70" width="60" /></a>
                                                                        <?php  }else{
                                                                            $image ="../uploads/doc/".$r3['hscMarksheet'];
                                                                        ?>       <a href="" target="_blank" title="view" data-toggle="modal" data-target="#img1"  ><img src="<?php echo $image; ?>" height="70" width="60" /></a>
                                                                        <?php } ?>
                                                                    </div>
                                                                    <div class="modal fade" id="img3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog modal-lg" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title" id="exampleModalLabel">HSC Marksheet</h5>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <img src="../uploads/doc/<?php echo $r3['hscMarksheet']; ?>" width="100%"/>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="dataLabel">
                                                                        <label>Neet Mark Sheet</label>
                                                                    </div>
                                                                    <div class="dataInfo">
                                                                        
                                                                        
                                                                            <?php 
                                                                         if($extension6 == 'pdf'){
                                                                                $image = "../uploads/doc/Adobe1.png";
                                                                        ?>      <a href="../uploads/doc/<?php echo $r3["neetMarksheet"]; ?>" target="_blank" title="view" ><img src="<?php echo $image; ?>" height="70" width="60" /></a>
                                                                        <?php  }else{
                                                                            $image ="../uploads/doc/".$r3['neetMarksheet'];
                                                                        ?>       <a href="" target="_blank" title="view" data-toggle="modal" data-target="#img1"  ><img src="<?php echo $image; ?>" height="70" width="60" /></a>
                                                                        <?php } ?>
                                                                    
                                                                    </div>
                                                                    <div class="modal fade" id="img4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog modal-lg" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title" id="exampleModalLabel">Neet Marksheet</h5>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <img src="../uploads/doc/<?php echo $r3['neetMarksheet']; ?>" width="100%"/>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="dataLabel">
                                                                        <label>UG Mark Sheet</label>
                                                                    </div>
                                                                    <div class="dataInfo">
                                                                        
                                                                            <?php 
                                                                         if($extension7 == 'pdf'){
                                                                                $image = "../uploads/doc/Adobe1.png";
                                                                        ?>      <a href="../uploads/doc/<?php echo $r3["ugMarksheet"]; ?>" target="_blank" title="view" ><img src="<?php echo $image; ?>" height="70" width="60" /></a>
                                                                        <?php  }else{
                                                                            $image ="../uploads/doc/".$r3['ugMarksheet'];
                                                                        ?>       <a href="" target="_blank" title="view" data-toggle="modal" data-target="#img1"  ><img src="<?php echo $image; ?>" height="70" width="60" /></a>
                                                                        <?php } ?>
                                                                    </div>
                                                                    <div class="modal fade" id="img5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog modal-lg" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title" id="exampleModalLabel">UG Marksheet</h5>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <img src="../uploads/doc/<?php echo $r3['ugMarksheet']; ?>" width="100%"/>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="dataLabel">
                                                                        <label>TC</label>
                                                                    </div>
                                                                    <div class="dataInfo">
                                                                        
                                                                        
                                                                              <?php 
                                                                         if($extension8 == 'pdf'){
                                                                                $image = "../uploads/doc/Adobe1.png";
                                                                        ?>      <a href="../uploads/doc/<?php echo $r3["tc"]; ?>" target="_blank" title="view" ><img src="<?php echo $image; ?>" height="70" width="60" /></a>
                                                                        <?php  }else{
                                                                            $image ="../uploads/doc/".$r3['tc'];
                                                                        ?>       <a href="" target="_blank" title="view" data-toggle="modal" data-target="#img1"  ><img src="<?php echo $image; ?>" height="70" width="60" /></a>
                                                                        <?php } ?>
                                                                    </div>
                                                                    <div class="modal fade" id="img6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog modal-lg" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title" id="exampleModalLabel">TC</h5>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <img src="../uploads/doc/<?php echo $r3['tc']; ?>" width="100%"/>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="dataLabel">
                                                                        <label>Migration</label>
                                                                    </div>
                                                                    <div class="dataInfo">
                                                                        
                                                                        
                                                                              <?php 
                                                                         if($extension9 == 'pdf'){
                                                                                $image = "../uploads/doc/Adobe1.png";
                                                                        ?>      <a href="../uploads/doc/<?php echo $r3["migration"]; ?>" target="_blank" title="view" ><img src="<?php echo $image; ?>" height="70" width="60" /></a>
                                                                        <?php  }else{
                                                                            $image ="../uploads/doc/".$r3['migration'];
                                                                        ?>       <a href="" target="_blank" title="view" data-toggle="modal" data-target="#img1"  ><img src="<?php echo $image; ?>" height="70" width="60" /></a>
                                                                        <?php } ?>
                                                                    </div>
                                                                    <div class="modal fade" id="img7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog modal-lg" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title" id="exampleModalLabel">Migration</h5>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <img src="../uploads/doc/<?php echo $r3['migration']; ?>" width="100%"/>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="dataLabel">
                                                                        <label>Birth Certificate</label>
                                                                    </div>
                                                                    <div class="dataInfo">
                                                                        
                                                                        
                                                                              <?php 
                                                                         if($extension10 == 'pdf'){
                                                                                $image = "../uploads/doc/Adobe1.png";
                                                                        ?>      <a href="../uploads/doc/<?php echo $r3["birth"]; ?>" target="_blank" title="view" ><img src="<?php echo $image; ?>" height="70" width="60" /></a>
                                                                        <?php  }else{
                                                                            $image ="../uploads/doc/".$r3['birth'];
                                                                        ?>       <a href="" target="_blank" title="view" data-toggle="modal" data-target="#img1"  ><img src="<?php echo $image; ?>" height="70" width="60" /></a>
                                                                        <?php } ?>
                                                                    </div>
                                                                    <div class="modal fade" id="img8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog modal-lg" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title" id="exampleModalLabel">Birth Certificate</h5>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <img src="../uploads/doc/<?php echo $r3['birth']; ?>" width="100%"/>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="dataLabel">
                                                                        <label>Communication Certificate</label>
                                                                    </div>
                                                                    <div class="dataInfo">
                                                                        
                                                                        
                                                                              <?php 
                                                                         if($extension11 == 'pdf'){
                                                                                $image = "../uploads/doc/Adobe1.png";
                                                                        ?>      <a href="../uploads/doc/<?php echo $r3["communication"]; ?>" target="_blank" title="view" ><img src="<?php echo $image; ?>" height="70" width="60" /></a>
                                                                        <?php  }else{
                                                                            $image ="../uploads/doc/".$r3['communication'];
                                                                        ?>       <a href="" target="_blank" title="view" data-toggle="modal" data-target="#img1"  ><img src="<?php echo $image; ?>" height="70" width="60" /></a>
                                                                        <?php } ?>
                                                                   
                                                                    </div>
                                                                    <div class="modal fade" id="img9" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog modal-lg" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title" id="exampleModalLabel">Communication Certificate</h5>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <img src="../uploads/doc/<?php echo $r3['communication']; ?>" width="100%"/>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="dataLabel">
                                                                        <label>Passport</label>
                                                                    </div>
                                                                    <div class="dataInfo">
                                                                        
                                                                          <?php 
                                                                         if($extension12 == 'pdf'){
                                                                                $image = "../uploads/doc/Adobe1.png";
                                                                        ?>      <a href="../uploads/doc/<?php echo $r3["passport"]; ?>" target="_blank" title="view" ><img src="<?php echo $image; ?>" height="70" width="60" /></a>
                                                                        <?php  }else{
                                                                            $image ="../uploads/doc/".$r3['passport'];
                                                                        ?>       <a href="" target="_blank" title="view" data-toggle="modal" data-target="#img1"  ><img src="<?php echo $image; ?>" height="70" width="60" /></a>
                                                                        <?php } ?>
                                                                    </div>
                                                                    <div class="modal fade" id="img10" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog modal-lg" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title" id="exampleModalLabel">Passport</h5>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <img src="../uploads/doc/<?php echo $r3['passport']; ?>" width="100%"/>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="dataLabel">
                                                                        <label>Photo</label>
                                                                    </div>
                                                                    <div class="dataInfo">
                                                                     
                                                                              <?php 
                                                                         if($extension13 == 'pdf'){
                                                                                $image = "../uploads/doc/Adobe1.png";
                                                                        ?>      <a href="../uploads/doc/<?php echo $r3["photo"]; ?>" target="_blank" title="view" ><img src="<?php echo $image; ?>" height="70" width="60" /></a>
                                                                        <?php  }else{
                                                                            $image ="../uploads/doc/".$r3['photo'];
                                                                        ?>       <a href="" target="_blank" title="view" data-toggle="modal" data-target="#img1"  ><img src="<?php echo $image; ?>" height="70" width="60" /></a>
                                                                        <?php } ?>
                                                                   
                                                                    </div>
                                                                    <div class="modal fade" id="img11" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog modal-lg" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title" id="exampleModalLabel">Photo</h5>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <img src="../uploads/doc/<?php echo $r3['photo']; ?>" width="100%"/>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="dataLabel">
                                                                        <label>Aadhar Card</label>
                                                                    </div>
                                                                    <div class="dataInfo">
                                                                               <?php 
                                                                         if($extension4 == 'pdf'){
                                                                                $image = "../uploads/doc/Adobe1.png";
                                                                        ?>      <a href="../uploads/doc/<?php echo $r3["aadharCard"]; ?>" target="_blank" title="view" ><img src="<?php echo $image; ?>" height="70" width="60" /></a>
                                                                        <?php  }else{
                                                                            $image ="../uploads/doc/".$r3['aadharCard'];
                                                                        ?>       <a href="" target="_blank" title="view" data-toggle="modal" data-target="#img1"  ><img src="<?php echo $image; ?>" height="70" width="60" /></a>
                                                                        <?php } ?>
                                                                   
                                                                    </div>
                                                                    <div class="modal fade" id="img12" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog modal-lg" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title" id="exampleModalLabel">Aadhar Card</h5>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <img src="../uploads/doc/<?php echo $r3['aadharCard']; ?>" width="100%"/>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                
                                                                <li>
                                                                    <div class="dataLabel">
                                                                        <label>Aadhar Card Backside</label>
                                                                    </div>
                                                                    <div class="dataInfo">
                                                                        <?php 
                                                                         if($extension5 == 'pdf'){
                                                                                $image = "../uploads/doc/Adobe1.png";
                                                                        ?>      <a href="../uploads/doc/<?php echo $r3["aadharCardBack"]; ?>" target="_blank" title="view" ><img src="<?php echo $image; ?>" height="70" width="60" /></a>
                                                                        <?php  }else{
                                                                            $image ="../uploads/doc/".$r3['aadharCardBack'];
                                                                        ?>       <a href="" target="_blank" title="view" data-toggle="modal" data-target="#img1"  ><img src="<?php echo $image; ?>" height="70" width="60" /></a>
                                                                        <?php } ?>
                                                                    </div>
                                                                    <div class="modal fade" id="img13" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog modal-lg" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title" id="exampleModalLabel">Aadhar Card Backside</h5>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <img src="../uploads/doc/<?php echo $r3['aadharCardBack']; ?>" width="100%"/>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>           
                                                                
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="remark" role="tabpanel"
                                                     aria-labelledby="remark-tab">
                                                    <div class="dataWrap remarkHistoryWrap">
                                                        <div class="table-responsive">
                                                            <table>
                                                                <thead>
                                                                    <tr>
                                                                        <th>Date</th>
                                                                        <th>Remark</th>
                                                                        <th>Staff</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php
                                                                    $reQry1 = mysqli_query($link, "SELECT * FROM remark_tbl WHERE personalId = '" . $_REQUEST['id'] . "' AND isActive = '1'");
                                                                    while ($r = mysqli_fetch_array($reQry1)) {
                                                                        ?>
                                                                        <tr>
                                                                            <td><?php echo $r['datee']; ?></td>
                                                                            <td><?php echo $r['remark']; ?></td>
                                                                            <td><?php echo $r['staff']; ?></td>
                                                                        </tr>
                                                                    <?php } ?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
        <script src="myjs/studentListJs.js"></script>
        <script src="js/main.js"></script>
        <script>
                                                                    $("#tile-1 .nav-tabs a").click(function () {
                                                                        var position = $(this).parent().position();
                                                                        var width = $(this).parent().width();
                                                                        $("#tile-1 .slider").css({"left": +position.left, "width": width});
                                                                    });
                                                                    var actWidth = $("#tile-1 .nav-tabs").find(".active").parent("li").width();
                                                                    var actPosition = $("#tile-1 .nav-tabs .active").position();
                                                                    $("#tile-1 .slider").css({"left": +actPosition.left, "width": actWidth});
        </script>
    </body>

</html>