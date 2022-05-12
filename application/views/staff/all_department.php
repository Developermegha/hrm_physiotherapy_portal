<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->


<!-- Mirrored from radixtouch.in/templates/admin/smart/source/light/all_department.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Nov 2020 14:51:09 GMT -->
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<meta name="description" content="Responsive Admin Template" />
	<meta name="author" content="SmartUniversity" />
	<title>Smart University | Bootstrap Responsive Admin Template</title>
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
								<div class="page-title">Department List</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="#">Department</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Department List</li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12 col-md-12 col-xl-12">
							<div class="card-box">
								<div class="card-head">
									<header>Department List</header>
									<button id="sdntmenu" class="mdl-button mdl-js-button mdl-button--icon pull-right"
										data-upgraded=",MaterialButton">
										<i class="material-icons">more_vert</i>
									</button>
									<ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
										data-mdl-for="sdntmenu">
										<li class="mdl-menu__item"><i class="material-icons">assistant_photo</i>Action
										</li>
										<li class="mdl-menu__item"><i class="material-icons">print</i>Another action
										</li>
										<li class="mdl-menu__item"><i class="material-icons">favorite</i>Something else
											here</li>
									</ul>
								</div>
								<div class="card-body ">
									<div class="row">
										<div class="col-md-6 col-sm-6 col-6">
											<div class="btn-group">
												<a href="add_professor.html" id="addRow" class="btn btn-info">
													Add New <i class="fa fa-plus"></i>
												</a>
											</div>
										</div>
										<div class="col-md-6 col-sm-6 col-6">
											<div class="btn-group pull-right">
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
															<i class="fa fa-file-pdf-o"></i> Save as PDF </a>
													</li>
													<li>
														<a href="javascript:;">
															<i class="fa fa-file-excel-o"></i> Export to Excel </a>
													</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="table-scrollable">
										<table
											class="table table-striped table-bordered table-hover table-checkable order-column valign-middle"
											id="example4">
											<thead>
												<tr>
													<th>#</th>
													<th>Dept. Name</th>
													<th>Head OF Dept.</th>
													<th>Phone</th>
													<th>Email</th>
													<th>Starting Year</th>
													<th>Student capacity</th>
													<th>Edit</th>
												</tr>
											</thead>
											<tbody>
												<tr class="odd">
													<td>1</td>
													<td>Mechanical Engg.</td>
													<td>Sanjay Chohan</td>
													<td>+123 4567890</td>
													<td>test@example.com</td>
													<td>1998</td>
													<td>150</td>
													<td><a href="javascript:void(0)" class="" data-toggle="tooltip"
															title="Edit">
															<i class="fa fa-check"></i></a> <a href="javascript:void(0)"
															class="text-inverse" title="Delete" data-toggle="tooltip">
															<i class="fa fa-trash"></i></a>
													</td>
												</tr>
												<tr class="even">
													<td>2</td>
													<td>Civil Engg.</td>
													<td>Sanjana Patil</td>
													<td>+123 4567890</td>
													<td>test@example.com</td>
													<td>1998</td>
													<td>130</td>
													<td><a href="javascript:void(0)" class="" data-toggle="tooltip"
															title="Edit">
															<i class="fa fa-check"></i></a> <a href="javascript:void(0)"
															class="text-inverse" title="Delete" data-toggle="tooltip">
															<i class="fa fa-trash"></i></a>
													</td>
												</tr>
												<tr class="odd">
													<td>3</td>
													<td>Electrical Engg.</td>
													<td>Pooja Sarma</td>
													<td>+123 4567890</td>
													<td>test@example.com</td>
													<td>1998</td>
													<td>160</td>
													<td><a href="javascript:void(0)" class="" data-toggle="tooltip"
															title="Edit">
															<i class="fa fa-check"></i></a> <a href="javascript:void(0)"
															class="text-inverse" title="Delete" data-toggle="tooltip">
															<i class="fa fa-trash"></i></a>
													</td>
												</tr>
												<tr class="even">
													<td>4</td>
													<td>M.C.A.</td>
													<td>Sanjay Chohan</td>
													<td>+123 4567890</td>
													<td>test@example.com</td>
													<td>1998</td>
													<td>150</td>
													<td><a href="javascript:void(0)" class="" data-toggle="tooltip"
															title="Edit">
															<i class="fa fa-check"></i></a> <a href="javascript:void(0)"
															class="text-inverse" title="Delete" data-toggle="tooltip">
															<i class="fa fa-trash"></i></a>
													</td>
												</tr>
												<tr class="odd">
													<td>5</td>
													<td>Computer Engg.</td>
													<td>Rajesh Malhotra</td>
													<td>+123 4567890</td>
													<td>test@example.com</td>
													<td>2000</td>
													<td>60</td>
													<td><a href="javascript:void(0)" class="" data-toggle="tooltip"
															title="Edit">
															<i class="fa fa-check"></i></a> <a href="javascript:void(0)"
															class="text-inverse" title="Delete" data-toggle="tooltip">
															<i class="fa fa-trash"></i></a>
													</td>
												</tr>
												<tr class="even">
													<td>6</td>
													<td>M.B.A.</td>
													<td>Poonam Talati</td>
													<td>+123 4567890</td>
													<td>test@example.com</td>
													<td>2004</td>
													<td>250</td>
													<td><a href="javascript:void(0)" class="" data-toggle="tooltip"
															title="Edit">
															<i class="fa fa-check"></i></a> <a href="javascript:void(0)"
															class="text-inverse" title="Delete" data-toggle="tooltip">
															<i class="fa fa-trash"></i></a>
													</td>
												</tr>
												<tr class="odd">
													<td>7</td>
													<td>Mechanical Engg.</td>
													<td>Sanjay Chohan</td>
													<td>+123 4567890</td>
													<td>test@example.com</td>
													<td>1998</td>
													<td>150</td>
													<td><a href="javascript:void(0)" class="" data-toggle="tooltip"
															title="Edit">
															<i class="fa fa-check"></i></a> <a href="javascript:void(0)"
															class="text-inverse" title="Delete" data-toggle="tooltip">
															<i class="fa fa-trash"></i></a>
													</td>
												</tr>
												<tr class="even">
													<td>8</td>
													<td>Civil Engg.</td>
													<td>Sanjana Patil</td>
													<td>+123 4567890</td>
													<td>test@example.com</td>
													<td>1998</td>
													<td>130</td>
													<td><a href="javascript:void(0)" class="" data-toggle="tooltip"
															title="Edit">
															<i class="fa fa-check"></i></a> <a href="javascript:void(0)"
															class="text-inverse" title="Delete" data-toggle="tooltip">
															<i class="fa fa-trash"></i></a>
													</td>
												</tr>
												<tr class="odd">
													<td>9</td>
													<td>Electrical Engg.</td>
													<td>Pooja Sarma</td>
													<td>+123 4567890</td>
													<td>test@example.com</td>
													<td>1998</td>
													<td>160</td>
													<td><a href="javascript:void(0)" class="" data-toggle="tooltip"
															title="Edit">
															<i class="fa fa-check"></i></a> <a href="javascript:void(0)"
															class="text-inverse" title="Delete" data-toggle="tooltip">
															<i class="fa fa-trash"></i></a>
													</td>
												</tr>
												<tr class="even">
													<td>10</td>
													<td>M.C.A.</td>
													<td>Sanjay Chohan</td>
													<td>+123 4567890</td>
													<td>test@example.com</td>
													<td>1998</td>
													<td>150</td>
													<td><a href="javascript:void(0)" class="" data-toggle="tooltip"
															title="Edit">
															<i class="fa fa-check"></i></a> <a href="javascript:void(0)"
															class="text-inverse" title="Delete" data-toggle="tooltip">
															<i class="fa fa-trash"></i></a>
													</td>
												</tr>
												<tr class="odd">
													<td>11</td>
													<td>Computer Engg.</td>
													<td>Rajesh Malhotra</td>
													<td>+123 4567890</td>
													<td>test@example.com</td>
													<td>2000</td>
													<td>60</td>
													<td><a href="javascript:void(0)" class="" data-toggle="tooltip"
															title="Edit">
															<i class="fa fa-check"></i></a> <a href="javascript:void(0)"
															class="text-inverse" title="Delete" data-toggle="tooltip">
															<i class="fa fa-trash"></i></a>
													</td>
												</tr>
												<tr class="even">
													<td>12</td>
													<td>M.B.A.</td>
													<td>Poonam Talati</td>
													<td>+123 4567890</td>
													<td>test@example.com</td>
													<td>2004</td>
													<td>250</td>
													<td><a href="javascript:void(0)" class="" data-toggle="tooltip"
															title="Edit">
															<i class="fa fa-check"></i></a> <a href="javascript:void(0)"
															class="text-inverse" title="Delete" data-toggle="tooltip">
															<i class="fa fa-trash"></i></a>
													</td>
												</tr>
												<tr class="odd">
													<td>13</td>
													<td>Mechanical Engg.</td>
													<td>Sanjay Chohan</td>
													<td>+123 4567890</td>
													<td>test@example.com</td>
													<td>1998</td>
													<td>150</td>
													<td><a href="javascript:void(0)" class="" data-toggle="tooltip"
															title="Edit">
															<i class="fa fa-check"></i></a> <a href="javascript:void(0)"
															class="text-inverse" title="Delete" data-toggle="tooltip">
															<i class="fa fa-trash"></i></a>
													</td>
												</tr>
												<tr class="even">
													<td>14</td>
													<td>Civil Engg.</td>
													<td>Sanjana Patil</td>
													<td>+123 4567890</td>
													<td>test@example.com</td>
													<td>1998</td>
													<td>130</td>
													<td><a href="javascript:void(0)" class="" data-toggle="tooltip"
															title="Edit">
															<i class="fa fa-check"></i></a> <a href="javascript:void(0)"
															class="text-inverse" title="Delete" data-toggle="tooltip">
															<i class="fa fa-trash"></i></a>
													</td>
												</tr>
												<tr class="odd">
													<td>15</td>
													<td>Electrical Engg.</td>
													<td>Pooja Sarma</td>
													<td>+123 4567890</td>
													<td>test@example.com</td>
													<td>1998</td>
													<td>160</td>
													<td><a href="javascript:void(0)" class="" data-toggle="tooltip"
															title="Edit">
															<i class="fa fa-check"></i></a> <a href="javascript:void(0)"
															class="text-inverse" title="Delete" data-toggle="tooltip">
															<i class="fa fa-trash"></i></a>
													</td>
												</tr>
												<tr class="even">
													<td>16</td>
													<td>M.C.A.</td>
													<td>Sanjay Chohan</td>
													<td>+123 4567890</td>
													<td>test@example.com</td>
													<td>1998</td>
													<td>150</td>
													<td><a href="javascript:void(0)" class="" data-toggle="tooltip"
															title="Edit">
															<i class="fa fa-check"></i></a> <a href="javascript:void(0)"
															class="text-inverse" title="Delete" data-toggle="tooltip">
															<i class="fa fa-trash"></i></a>
													</td>
												</tr>
												<tr class="odd">
													<td>17</td>
													<td>Computer Engg.</td>
													<td>Rajesh Malhotra</td>
													<td>+123 4567890</td>
													<td>test@example.com</td>
													<td>2000</td>
													<td>60</td>
													<td><a href="javascript:void(0)" class="" data-toggle="tooltip"
															title="Edit">
															<i class="fa fa-check"></i></a> <a href="javascript:void(0)"
															class="text-inverse" title="Delete" data-toggle="tooltip">
															<i class="fa fa-trash"></i></a>
													</td>
												</tr>
												<tr class="even">
													<td>18</td>
													<td>M.B.A.</td>
													<td>Poonam Talati</td>
													<td>+123 4567890</td>
													<td>test@example.com</td>
													<td>2004</td>
													<td>250</td>
													<td><a href="javascript:void(0)" class="" data-toggle="tooltip"
															title="Edit">
															<i class="fa fa-check"></i></a> <a href="javascript:void(0)"
															class="text-inverse" title="Delete" data-toggle="tooltip">
															<i class="fa fa-trash"></i></a>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end page content -->
			<!-- start chat sidebar -->
			<div class="chat-sidebar-container" data-close-on-body-click="false">
				<div class="chat-sidebar">
					<ul class="nav nav-tabs">
						<li class="nav-item">
							<a href="#quick_sidebar_tab_1" class="nav-link active tab-icon" data-toggle="tab"> <i
									class="material-icons">chat</i>Chat
								<span class="badge badge-danger">4</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="#quick_sidebar_tab_3" class="nav-link tab-icon" data-toggle="tab"> <i
									class="material-icons">settings</i>
								Settings
							</a>
						</li>
					</ul>
					<div class="tab-content">
						<!-- Start User Chat -->
						<div class="tab-pane active chat-sidebar-chat in active show" role="tabpanel"
							id="quick_sidebar_tab_1">
							<div class="chat-sidebar-list">
								<div class="chat-sidebar-chat-users slimscroll-style" data-rail-color="#ddd"
									data-wrapper-class="chat-sidebar-list">
									<div class="chat-header">
										<h5 class="list-heading">Online</h5>
									</div>
									<ul class="media-list list-items">
										<li class="media"><img class="media-object" src="<?php echo base_url(); ?>assets/img/prof/prof3.jpg"
												width="35" height="35" alt="...">
											<i class="online dot"></i>
											<div class="media-body">
												<h5 class="media-heading">John Deo</h5>
												<div class="media-heading-sub">Spine Surgeon</div>
											</div>
										</li>
										<li class="media">
											<div class="media-status">
												<span class="badge badge-success">5</span>
											</div> <img class="media-object" src="<?php echo base_url(); ?>assets/img/prof/prof1.jpg"
												width="35" height="35" alt="...">
											<i class="busy dot"></i>
											<div class="media-body">
												<h5 class="media-heading">Rajesh</h5>
												<div class="media-heading-sub">Director</div>
											</div>
										</li>
										<li class="media"><img class="media-object" src="<?php echo base_url(); ?>assets/img/prof/prof5.jpg"
												width="35" height="35" alt="...">
											<i class="away dot"></i>
											<div class="media-body">
												<h5 class="media-heading">Jacob Ryan</h5>
												<div class="media-heading-sub">Ortho Surgeon</div>
											</div>
										</li>
										<li class="media">
											<div class="media-status">
												<span class="badge badge-danger">8</span>
											</div> <img class="media-object" src="<?php echo base_url(); ?>assets/img/prof/prof4.jpg"
												width="35" height="35" alt="...">
											<i class="online dot"></i>
											<div class="media-body">
												<h5 class="media-heading">Kehn Anderson</h5>
												<div class="media-heading-sub">CEO</div>
											</div>
										</li>
										<li class="media"><img class="media-object" src="<?php echo base_url(); ?>assets/img/prof/prof2.jpg"
												width="35" height="35" alt="...">
											<i class="busy dot"></i>
											<div class="media-body">
												<h5 class="media-heading">Sarah Smith</h5>
												<div class="media-heading-sub">Anaesthetics</div>
											</div>
										</li>
										<li class="media"><img class="media-object" src="<?php echo base_url(); ?>assets/img/prof/prof7.jpg"
												width="35" height="35" alt="...">
											<i class="online dot"></i>
											<div class="media-body">
												<h5 class="media-heading">Vlad Cardella</h5>
												<div class="media-heading-sub">Cardiologist</div>
											</div>
										</li>
									</ul>
									<div class="chat-header">
										<h5 class="list-heading">Offline</h5>
									</div>
									<ul class="media-list list-items">
										<li class="media">
											<div class="media-status">
												<span class="badge badge-warning">4</span>
											</div> <img class="media-object" src="<?php echo base_url(); ?>assets/img/prof/prof6.jpg"
												width="35" height="35" alt="...">
											<i class="offline dot"></i>
											<div class="media-body">
												<h5 class="media-heading">Jennifer Maklen</h5>
												<div class="media-heading-sub">Nurse</div>
												<div class="media-heading-small">Last seen 01:20 AM</div>
											</div>
										</li>
										<li class="media"><img class="media-object" src="<?php echo base_url(); ?>assets/img/prof/prof8.jpg"
												width="35" height="35" alt="...">
											<i class="offline dot"></i>
											<div class="media-body">
												<h5 class="media-heading">Lina Smith</h5>
												<div class="media-heading-sub">Ortho Surgeon</div>
												<div class="media-heading-small">Last seen 11:14 PM</div>
											</div>
										</li>
										<li class="media">
											<div class="media-status">
												<span class="badge badge-success">9</span>
											</div> <img class="media-object" src="<?php echo base_url(); ?>assets/img/prof/prof9.jpg"
												width="35" height="35" alt="...">
											<i class="offline dot"></i>
											<div class="media-body">
												<h5 class="media-heading">Jeff Adam</h5>
												<div class="media-heading-sub">Compounder</div>
												<div class="media-heading-small">Last seen 3:31 PM</div>
											</div>
										</li>
										<li class="media"><img class="media-object" src="<?php echo base_url(); ?>assets/img/prof/prof10.jpg"
												width="35" height="35" alt="...">
											<i class="offline dot"></i>
											<div class="media-body">
												<h5 class="media-heading">Anjelina Cardella</h5>
												<div class="media-heading-sub">Physiotherapist</div>
												<div class="media-heading-small">Last seen 7:45 PM</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- End User Chat -->
						<!-- Start Setting Panel -->
						<div class="tab-pane chat-sidebar-settings" role="tabpanel" id="quick_sidebar_tab_3">
							<div class="chat-sidebar-settings-list slimscroll-style">
								<div class="chat-header">
									<h5 class="list-heading">Layout Settings</h5>
								</div>
								<div class="chatpane inner-content ">
									<div class="settings-list">
										<div class="setting-item">
											<div class="setting-text">Sidebar Position</div>
											<div class="setting-set">
												<select
													class="sidebar-pos-option form-control input-inline input-sm input-small ">
													<option value="left" selected="selected">Left</option>
													<option value="right">Right</option>
												</select>
											</div>
										</div>
										<div class="setting-item">
											<div class="setting-text">Header</div>
											<div class="setting-set">
												<select
													class="page-header-option form-control input-inline input-sm input-small ">
													<option value="fixed" selected="selected">Fixed</option>
													<option value="default">Default</option>
												</select>
											</div>
										</div>
										<div class="setting-item">
											<div class="setting-text">Footer</div>
											<div class="setting-set">
												<select
													class="page-footer-option form-control input-inline input-sm input-small ">
													<option value="fixed">Fixed</option>
													<option value="default" selected="selected">Default</option>
												</select>
											</div>
										</div>
									</div>
									<div class="chat-header">
										<h5 class="list-heading">Account Settings</h5>
									</div>
									<div class="settings-list">
										<div class="setting-item">
											<div class="setting-text">Notifications</div>
											<div class="setting-set">
												<div class="switch">
													<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
														for="switch-1">
														<input type="checkbox" id="switch-1" class="mdl-switch__input"
															checked>
													</label>
												</div>
											</div>
										</div>
										<div class="setting-item">
											<div class="setting-text">Show Online</div>
											<div class="setting-set">
												<div class="switch">
													<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
														for="switch-7">
														<input type="checkbox" id="switch-7" class="mdl-switch__input"
															checked>
													</label>
												</div>
											</div>
										</div>
										<div class="setting-item">
											<div class="setting-text">Status</div>
											<div class="setting-set">
												<div class="switch">
													<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
														for="switch-2">
														<input type="checkbox" id="switch-2" class="mdl-switch__input"
															checked>
													</label>
												</div>
											</div>
										</div>
										<div class="setting-item">
											<div class="setting-text">2 Steps Verification</div>
											<div class="setting-set">
												<div class="switch">
													<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
														for="switch-3">
														<input type="checkbox" id="switch-3" class="mdl-switch__input"
															checked>
													</label>
												</div>
											</div>
										</div>
									</div>
									<div class="chat-header">
										<h5 class="list-heading">General Settings</h5>
									</div>
									<div class="settings-list">
										<div class="setting-item">
											<div class="setting-text">Location</div>
											<div class="setting-set">
												<div class="switch">
													<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
														for="switch-4">
														<input type="checkbox" id="switch-4" class="mdl-switch__input"
															checked>
													</label>
												</div>
											</div>
										</div>
										<div class="setting-item">
											<div class="setting-text">Save Histry</div>
											<div class="setting-set">
												<div class="switch">
													<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
														for="switch-5">
														<input type="checkbox" id="switch-5" class="mdl-switch__input"
															checked>
													</label>
												</div>
											</div>
										</div>
										<div class="setting-item">
											<div class="setting-text">Auto Updates</div>
											<div class="setting-set">
												<div class="switch">
													<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
														for="switch-6">
														<input type="checkbox" id="switch-6" class="mdl-switch__input"
															checked>
													</label>
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
			<!-- end chat sidebar -->
		</div>
		<!-- end page container -->
		<!-- start footer -->
		<div class="page-footer">
			<div class="page-footer-inner"> 2017 &copy; Smart University Theme By
				<a href="mailto:redstartheme@gmail.com" target="_top" class="makerCss">Redstar Theme</a>
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


<!-- Mirrored from radixtouch.in/templates/admin/smart/source/light/all_department.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Nov 2020 14:51:09 GMT -->
</html>