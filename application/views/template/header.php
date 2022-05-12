<?php 
if($this->uri->segment('1') == 'admin'){
	$action ="admin";
}elseif($this->uri->segment('1') == 'staff'){
	$action ="staff";
}else{
	$action ="management";
}
?>
						
<!DOCTYPE html>
<html lang="en">
	<!-- BEGIN HEAD -->
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta content="width=device-width, initial-scale=1" name="viewport" />
		<meta name="description" content="Responsive Admin Template" />
		<meta name="author" content="SmartUniversity" />
		<title>St. Andrews college of Physiotherapy </title>
		
		<!-- google font -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
		<!-- icons -->
		<link href="<?php echo base_url(); ?>assets/fonts/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/fonts/material-design-icons/material-icon.css" rel="stylesheet" type="text/css" />
		<!--bootstrap -->
		<link href="<?php echo base_url(); ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<!-- Material Design Lite CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/material/material.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/material_style.css">
		<!-- Theme Styles -->
		<link href="<?php echo base_url(); ?>assets/css/theme/light/theme_style.css" rel="stylesheet" id="rt_style_components" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/css/theme/light/style.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/css/plugins.min.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/css/responsive.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url(); ?>assets/css/theme/light/theme-color.css" rel="stylesheet" type="text/css" />
		<!-- dropzone -->
		<link href="<?php echo base_url(); ?>assets/plugins/dropzone/dropzone.css" rel="stylesheet" media="screen">
		<!-- Date Time item CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/flatpicker/css/flatpickr.min.css" />
		<!-- favicon -->
		<link rel="shortcut icon" href="http://radixtouch.in/templates/admin/smart/source/assets/img/favicon.ico" />
		<!-- CSS -->
		<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
		<!-- Default theme -->
		<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
		<!-- Semantic UI theme -->
		<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
		<!-- Bootstrap theme -->
		<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
		<script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
		

	</head>
	
	<!-- END HEAD -->
	<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-indigo">
		<div class="page-wrapper">
			<!-- start header -->
			<div class="page-header navbar navbar-fixed-top">
   <div class="page-header-inner ">
      <!-- logo start -->
      <div class="page-logo">
         <a href="<?php echo base_url($action.'/login'); ?>">
		 <span>SACP</span>
             <!-- <img src="<?php echo base_url(); ?>assets/img/logo1.png" style="width: 190px; margin-left: -20px;" alt="St. Andrews college of Physiotherapy"> -->
          </a>
      </div>
      <!-- logo end -->
      <ul class="nav navbar-nav navbar-left in">
         <li><a href="#" class="menu-toggler sidebar-toggler"><i class="icon-menu"></i></a></li>
      </ul>
      <!-- start mobile menu -->
      <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse"
         data-target=".navbar-collapse">
      <span></span>
      </a>
      <!-- end mobile menu -->
      <!-- start header menu -->
      <div class="top-menu">
         <ul class="nav navbar-nav pull-right">
            <li><a href="javascript:;" class="fullscreen-btn"><i class="fa fa-arrows-alt"></i></a></li>
            <li class="dropdown dropdown-user">
               <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                  data-close-others="true">
               <img alt="" class="img-circle " src="<?php echo base_url(); ?>assets/img/dp.jpg" />
               <span class="username username-hide-on-mobile"> <?php echo (($_SESSION['username'] !='') ? $_SESSION['username'] : ''); ?> </span>
               <i class="fa fa-angle-down"></i>
               </a>
               <ul class="dropdown-menu dropdown-menu-default">
                  <!-- <li>
                     <a href="user_profile.html">
                     <i class="icon-user"></i> Profile </a>
                  </li>
                 -->
                  <li>
                     <a href="<?php echo base_url($action.'/logout'); ?>">
                     <i class="icon-logout"></i> Log Out </a>
                  </li>
               </ul>
            </li>
         </ul>
      </div>
   </div>
</div>
<div class="page-container">
    
			<div class="sidebar-container">
				<div class="sidemenu-container navbar-collapse collapse fixed-menu">
					<div id="remove-scroll" class="left-sidemenu">
						<ul class="sidemenu  page-header-fixed slimscroll-style" data-keep-expanded="false"
							data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
							<li class="sidebar-toggler-wrapper hide">
								<div class="sidebar-toggler">
									<span></span>
								</div>
							</li>
							<li class="sidebar-user-panel">
								<div class="user-panel">
									<div class="pull-left image">
										<img  src="<?php echo base_url(); ?>assets/img/dp.jpg"  class="img-circle user-img-circle"
											alt="User Image" />
											
									</div>
									<div class="pull-left info">
										<p> <?php   echo (($_SESSION['username'] !='') ? $_SESSION['username'] : '');  ?> </p>
										<a href="#"><i class="fa fa-circle user-online"></i><span class="txtOnline">
												Online</span></a>
									</div>
								</div>
							</li>
							
							<li class="nav-item">
								<a href="<?php echo base_url($action)?>/profile" class="nav-link nav-toggle"> <i class="material-icons">school</i>
									<span class="title">Profile</span> <span class="arrow"></span>
								</a>
                               
							</li> 
							<?php if($action == 'admin'){ ?>
							<li class="nav-item active open">
								<a href="<?php echo base_url($action)?>/all_professors" class="nav-link nav-toggle"> <i class="material-icons">school</i>
									<span class="title">All Staff</span> <span class="arrow"></span>
								</a>
                               
							</li> 
								<?php } ?>
							<li class="nav-item active open">
								<a href="<?php echo base_url($action); ?>/all_notice_general" class="nav-link nav-toggle"> <i class="material-icons">school</i>
									<span class="title">Notice</span> <span class="arrow"></span>
								</a>
                               
							</li> 
						
							<li class="nav-item">
								<a href="<?php echo base_url($action)?>/payroll" class="nav-link nav-toggle"> <i class="material-icons">school</i>
									<span class="title"> Payroll Management </span> <span class="arrow"></span>
								</a>
                               
							</li> 
							<li class="nav-item">
								<a href="<?php echo base_url($action)?>/all_leave" class="nav-link nav-toggle"> <i class="material-icons">school</i>
									<span class="title">Leave Management </span> <span class="arrow"></span>
								</a>
                               
							</li> 
							
							<li class="nav-item">
								<a href="<?php echo base_url($action)?>/award_list" class="nav-link nav-toggle"> <i class="material-icons">school</i>
									<span class="title">Awards List </span> <span class="arrow"></span>
								</a>
                               
							</li> 
								<?php if($action != 'staff'){?>
							<li class="nav-item">
								<a href="<?php echo base_url($action)?>/holidays" class="nav-link nav-toggle"> <i class="material-icons">school</i>
									<span class="title">Holiday List </span> <span class="arrow"></span>
								</a>
                               
							</li> 
							<?php } ?>
						
						</ul>
					</div>
				</div>
			</div>