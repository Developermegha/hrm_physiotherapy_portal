<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->


<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<meta name="description" content="Responsive Admin Template" />
	<meta name="author" content="SmartUniversity" />
	<title>DMSF University </title>
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
	<!-- icons -->
	<link href="<?php echo base_url(); ?>assets/fonts/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url(); ?>assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url(); ?>assets/fonts/material-design-icons/material-icon.css" rel="stylesheet" type="text/css" />
	<!--bootstrap -->
	<link href="<?php echo base_url(); ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<!-- data tables -->
	<link href="<?php echo base_url(); ?>assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.css" rel="stylesheet"
		type="text/css" />
	<!-- Material Design Lite CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/material/material.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/material_style.css">
	<!-- Theme Styles -->
	<link href="<?php echo base_url(); ?>assets/css/theme/light/theme_style.css" rel="stylesheet" id="rt_style_components" type="text/css" />
	<link href="<?php echo base_url(); ?>assets/css/theme/light/style.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url(); ?>assets/css/plugins.min.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url(); ?>assets/css/responsive.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url(); ?>assets/css/theme/light/theme-color.css" rel="stylesheet" type="text/css" />
	<!-- favicon -->
	<link rel="shortcut icon" href="http://radixtouch.in/templates/admin/smart/source/assets/img/favicon.ico" />
</head>
<!-- END HEAD -->

<body
	class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-indigo">
	<div class="page-wrapper">
		<!-- start header -->
        <?php $this->load->view('staff/header'); ?>
		<!-- end header -->
		<!-- start color quick setting -->
		<!-- end color quick setting -->
		<!-- start page container -->
		<div class="page-container">
			<!-- start sidebar menu -->
            <?php $this->load->view('staff/sidebar'); ?>
			<!-- end sidebar menu -->
			<!-- start page content -->
			<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Classes List</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="#">Classes</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Classes List</li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="tabbable-line">
								<!-- <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="#tab1" data-toggle="tab"> List View </a>
                                    </li>
                                    <li>
                                        <a href="#tab2" data-toggle="tab"> Grid View </a>
                                    </li>
                                </ul> -->
								<!--<ul class="nav customtab nav-tabs" role="tablist">
									<li class="nav-item"><a href="#tab1" class="nav-link active" data-toggle="tab">List
											View</a></li>
									<li class="nav-item"><a href="#tab2" class="nav-link" data-toggle="tab">Grid
											View</a></li>
								</ul>--->
								<div class="tab-content">
									<div class="tab-pane active fontawesome-demo" id="tab1">
										<div class="row">
											<div class="col-md-12">
												<div class="card card-box">
													<div class="card-head">
														<header>All Classes</header>
														<div class="tools">
															<a class="fa fa-repeat btn-color box-refresh"
																href="javascript:;"></a>
															<a class="t-collapse btn-color fa fa-chevron-down"
																href="javascript:;"></a>
															<a class="t-close btn-color fa fa-times"
																href="javascript:;"></a>
														</div>
													</div>
													<div class="card-body ">
														<div class="row">
															<div class="col-md-6 col-sm-6 col-6">
																<!--<div class="btn-group">
																	<a href="add_professor.html" id="addRow"
																		class="btn btn-info">
																		Add New <i class="fa fa-plus"></i>
																	</a>
																</div>-->
															</div>
															<div class="col-md-6 col-sm-6 col-6">
																<!--<div class="btn-group pull-right">
																	<a class="btn deepPink-bgcolor  btn-outline dropdown-toggle"
																		data-toggle="dropdown">Tools
																		<i class="fa fa-angle-down"></i>
																	</a>
																	<ul class="dropdown-menu pull-right">
																		<li>
																			<a href="javascript:;">
																				<i class="fa fa-print"></i> Print </a>
																		</li>
																		<li>
																			<a href="javascript:;">
																				<i class="fa fa-file-pdf-o"></i> Save as
																				PDF </a>
																		</li>
																		<li>
																			<a href="javascript:;">
																				<i class="fa fa-file-excel-o"></i>
																				Export to Excel </a>
																		</li>
																	</ul>
																</div>-->
															</div>
														</div>
														<div class="table-scrollable">
															<table
																class="table table-striped table-bordered table-hover table-checkable order-column valign-middle"
																id="example4">
																<thead>
																	<tr>
																		<th></th>
																		<th> Course </th>
																		<th> Section </th>
																		<th> Batch </th>
																		<th> Start Time </th>
																		<th> End Time </th>
																		<th> Joining Class </th>
																	</tr>
																</thead>
																<tbody>
                                                                    <?php $i = 1; foreach($classes as $class) { ?>
                                                                    <tr class="odd gradeX">
                                                                        <td class="left"><?php echo $i++; ?></td>
																		<td class="left"><?php echo $class->course_name; ?></td>
																		<td class="left"><?php echo $class->section; ?></td>
																		<td><?php echo $class->batch; ?></td>
																		<td><?php echo $class->start_time; ?></td>
																		<td><?php echo $class->end_time; ?></td>
																		<td class="left">
                                                                            <button class="btn btn-success btn-xs">
                                                                                <a target="_blank" href="<?php echo $class->meeting_link; ?>">
                                                                                    Click to join
                                                                                </a>
                                                                            </button>
                                                                        </td>
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
									<div class="tab-pane" id="tab2">
										<div class="row">
											<div class="col-md-4">
												<div class="card card-box">
													<div class="card-body no-padding ">
														<div class="doctor-profile">
															<img src="<?php echo base_url(); ?>assets/img/prof/prof10.jpg" class="doctor-pic"
																alt="">
															<div class="profile-usertitle">
																<div class="doctor-name">Pooja Patel </div>
																<div class="name-center"> Mathematics </div>
															</div>
															<p>A-103, shyam gokul flats, Mahatma Road <br />Mumbai</p>
															<div>
																<p><i class="fa fa-phone"></i><a
																		href="tel:(123)456-7890"> (123)456-7890</a></p>
															</div>
															<div class="profile-userbuttons">
																<a href="professor_profile.html"
																	class="btn btn-circle deepPink-bgcolor btn-sm">Read
																	More</a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-4">
												<div class="card card-box">
													<div class="card-body no-padding ">
														<div class="doctor-profile">
															<img src="<?php echo base_url(); ?>assets/img/prof/prof1.jpg" class="doctor-pic"
																alt="">
															<div class="profile-usertitle">
																<div class="doctor-name">Rajesh </div>
																<div class="name-center"> Science </div>
															</div>
															<p>45, Krishna Tower, Near Bus Stop, Satellite, <br />Mumbai
															</p>
															<div>
																<p><i class="fa fa-phone"></i><a
																		href="tel:(123)456-7890"> (123)456-7890</a></p>
															</div>
															<div class="profile-userbuttons">
																<a href="professor_profile.html"
																	class="btn btn-circle deepPink-bgcolor btn-sm">Read
																	More</a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-4">
												<div class="card card-box">
													<div class="card-body no-padding ">
														<div class="doctor-profile">
															<img src="<?php echo base_url(); ?>assets/img/prof/prof2.jpg" class="doctor-pic"
																alt="">
															<div class="profile-usertitle">
																<div class="doctor-name">Sarah Smith </div>
																<div class="name-center"> Computer </div>
															</div>
															<p>456, Estern evenue, Courtage area, <br />New York</p>
															<div>
																<p><i class="fa fa-phone"></i><a
																		href="tel:(123)456-7890"> (123)456-7890</a></p>
															</div>
															<div class="profile-userbuttons">
																<a href="professor_profile.html"
																	class="btn btn-circle deepPink-bgcolor btn-sm">Read
																	More</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-4">
												<div class="card card-box">
													<div class="card-body no-padding ">
														<div class="doctor-profile">
															<img src="<?php echo base_url(); ?>assets/img/prof/prof3.jpg" class="doctor-pic"
																alt="">
															<div class="profile-usertitle">
																<div class="doctor-name">John Deo </div>
																<div class="name-center"> Engineering </div>
															</div>
															<p>A-103, shyam gokul flats, Mahatma Road <br />Mumbai</p>
															<div>
																<p><i class="fa fa-phone"></i><a
																		href="tel:(123)456-7890"> (123)456-7890</a></p>
															</div>
															<div class="profile-userbuttons">
																<a href="professor_profile.html"
																	class="btn btn-circle deepPink-bgcolor btn-sm">Read
																	More</a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-4">
												<div class="card card-box">
													<div class="card-body no-padding ">
														<div class="doctor-profile">
															<img src="<?php echo base_url(); ?>assets/img/prof/prof4.jpg" class="doctor-pic"
																alt="">
															<div class="profile-usertitle">
																<div class="doctor-name">Jay Soni </div>
																<div class="name-center"> Music </div>
															</div>
															<p>45, Krishna Tower, Near Bus Stop, Satellite, <br />Mumbai
															</p>
															<div>
																<p><i class="fa fa-phone"></i><a
																		href="tel:(123)456-7890"> (123)456-7890</a></p>
															</div>
															<div class="profile-userbuttons">
																<a href="professor_profile.html"
																	class="btn btn-circle deepPink-bgcolor btn-sm">Read
																	More</a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-4">
												<div class="card card-box">
													<div class="card-body no-padding ">
														<div class="doctor-profile">
															<img src="<?php echo base_url(); ?>assets/img/prof/prof5.jpg" class="doctor-pic"
																alt="">
															<div class="profile-usertitle">
																<div class="doctor-name">Jacob Ryan </div>
																<div class="name-center"> Commerce </div>
															</div>
															<p>456, Estern evenue, Courtage area, <br />New York</p>
															<div>
																<p><i class="fa fa-phone"></i><a
																		href="tel:(123)456-7890"> (123)456-7890</a></p>
															</div>
															<div class="profile-userbuttons">
																<a href="professor_profile.html"
																	class="btn btn-circle deepPink-bgcolor btn-sm">Read
																	More</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-4">
												<div class="card card-box">
													<div class="card-body no-padding ">
														<div class="doctor-profile">
															<img src="<?php echo base_url(); ?>assets/img/prof/prof6.jpg" class="doctor-pic"
																alt="">
															<div class="profile-usertitle">
																<div class="doctor-name">Megha Trivedi </div>
																<div class="name-center"> Mechanical </div>
															</div>
															<p>A-103, shyam gokul flats, Mahatma Road <br />Mumbai</p>
															<div>
																<p><i class="fa fa-phone"></i><a
																		href="tel:(123)456-7890"> (123)456-7890</a></p>
															</div>
															<div class="profile-userbuttons">
																<a href="professor_profile.html"
																	class="btn btn-circle deepPink-bgcolor btn-sm">Read
																	More</a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-4">
												<div class="card card-box">
													<div class="card-body no-padding ">
														<div class="doctor-profile">
															<img src="<?php echo base_url(); ?>assets/img/prof/prof1.jpg" class="doctor-pic"
																alt="">
															<div class="profile-usertitle">
																<div class="doctor-name">Rajesh </div>
																<div class="name-center"> Science </div>
															</div>
															<p>45, Krishna Tower, Near Bus Stop, Satellite, <br />Mumbai
															</p>
															<div>
																<p><i class="fa fa-phone"></i><a
																		href="tel:(123)456-7890"> (123)456-7890</a></p>
															</div>
															<div class="profile-userbuttons">
																<a href="professor_profile.html"
																	class="btn btn-circle deepPink-bgcolor btn-sm">Read
																	More</a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-4">
												<div class="card card-box">
													<div class="card-body no-padding ">
														<div class="doctor-profile">
															<img src="<?php echo base_url(); ?>assets/img/prof/prof2.jpg" class="doctor-pic"
																alt="">
															<div class="profile-usertitle">
																<div class="doctor-name">Sarah Smith </div>
																<div class="name-center"> Computer </div>
															</div>
															<p>456, Estern evenue, Courtage area, <br />New York</p>
															<div>
																<p><i class="fa fa-phone"></i><a
																		href="tel:(123)456-7890"> (123)456-7890</a></p>
															</div>
															<div class="profile-userbuttons">
																<a href="professor_profile.html"
																	class="btn btn-circle deepPink-bgcolor btn-sm">Read
																	More</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-4">
												<div class="card card-box">
													<div class="card-body no-padding ">
														<div class="doctor-profile">
															<img src="<?php echo base_url(); ?>assets/img/prof/prof10.jpg" class="doctor-pic"
																alt="">
															<div class="profile-usertitle">
																<div class="doctor-name">Pooja Patel </div>
																<div class="name-center"> Mathematics </div>
															</div>
															<p>A-103, shyam gokul flats, Mahatma Road <br />Mumbai</p>
															<div>
																<p><i class="fa fa-phone"></i><a
																		href="tel:(123)456-7890"> (123)456-7890</a></p>
															</div>
															<div class="profile-userbuttons">
																<a href="professor_profile.html"
																	class="btn btn-circle deepPink-bgcolor btn-sm">Read
																	More</a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-4">
												<div class="card card-box">
													<div class="card-body no-padding ">
														<div class="doctor-profile">
															<img src="<?php echo base_url(); ?>assets/img/prof/prof1.jpg" class="doctor-pic"
																alt="">
															<div class="profile-usertitle">
																<div class="doctor-name">Rajesh </div>
																<div class="name-center"> Science </div>
															</div>
															<p>45, Krishna Tower, Near Bus Stop, Satellite, <br />Mumbai
															</p>
															<div>
																<p><i class="fa fa-phone"></i><a
																		href="tel:(123)456-7890"> (123)456-7890</a></p>
															</div>
															<div class="profile-userbuttons">
																<a href="professor_profile.html"
																	class="btn btn-circle deepPink-bgcolor btn-sm">Read
																	More</a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-4">
												<div class="card card-box">
													<div class="card-body no-padding ">
														<div class="doctor-profile">
															<img src="<?php echo base_url(); ?>assets/img/prof/prof3.jpg" class="doctor-pic"
																alt="">
															<div class="profile-usertitle">
																<div class="doctor-name">John Deo </div>
																<div class="name-center"> Engineering </div>
															</div>
															<p>A-103, shyam gokul flats, Mahatma Road <br />Mumbai</p>
															<div>
																<p><i class="fa fa-phone"></i><a
																		href="tel:(123)456-7890"> (123)456-7890</a></p>
															</div>
															<div class="profile-userbuttons">
																<a href="professor_profile.html"
																	class="btn btn-circle deepPink-bgcolor btn-sm">Read
																	More</a>
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
				</div>
			</div>
			<!-- end page content -->
		</div>
		<!-- end page container -->
		<!-- start footer -->
		<div class="page-footer">
			<div class="page-footer-inner"> 2017 &copy; DMSF University 
			</div>
			<div class="scroll-to-top">
				<i class="icon-arrow-up"></i>
			</div>
		</div>
		<!-- end footer -->
	</div>
	<!-- start js include path -->
	<script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/popper/popper.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/jquery-blockui/jquery.blockui.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
	<!-- bootstrap -->
	<script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
	<!-- data tables -->
	<script src="<?php echo base_url(); ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/pages/table/table_data.js"></script>
	<!-- Common js-->
	<script src="<?php echo base_url(); ?>assets/js/app.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/layout.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/theme-color.js"></script>
	<!-- Material -->
	<script src="<?php echo base_url(); ?>assets/plugins/material/material.min.js"></script>
	<!-- end js include path -->
</body>


</html>