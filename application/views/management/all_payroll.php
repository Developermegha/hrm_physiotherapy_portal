<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->


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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
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
								<div class="page-title">Payroll List</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="#">Payroll</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Payroll List</li>
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
									
								</ul>-->
								<div class="tab-content">
									<div class="tab-pane active fontawesome-demo" id="tab1">
										<div class="row">
											<div class="col-md-12">
												<div class="card card-box">
													<div class="card-head">
														<header>All Payroll </header>
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
																<div class="btn-group">
																<!--	<a href="<?php echo base_url()?>staff/add_Payroll" id="addRow"
																		class="btn btn-info">
																		Add Payroll  <i class="fa fa-plus"></i>
																	</a>-->
																</div>
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
																		<th> Emp ID </th>
																		<th> Month </th>
																		<th> Basic </th>
																		
																		<th>Net Salary</th>
																		<th>Pay Date</th>
																	
																		<th> Action </th>
																	</tr>
																</thead>
																<tbody>
                                                                   <?php if(is_array($payroll)) { $i = 1;  
                                                                   foreach($payroll as $payroll){
                                                                   ?>
                                                                       <tr class="odd gradeX">
                                    <td class="patient-img"><?php echo $i; ?></td>
                                    
                                    <td class="left"><?php echo $payroll->employee_id ;  ?></td>
                                    <td class="left"><?php echo $payroll->month;   ?></td>
                                    <td class="left"><?php echo $payroll->basic;   ?></td>
                                   
                                    <td class="left"><?php echo $payroll->net_salary;   ?></td>
                                    <td class="left"><?php echo $payroll->pay_date;   ?></td>
                                   
                                   
                                    <td>                                      
                                    
                                    </td>
                                    <td>
                                      <a href="<?php echo base_url('')?>staff/emp_salarry_slip/<?php  echo $id=$payroll->employee_id ?>" class="btn btn-primary btn-xs">
                                        <i class="fa fa-pencil"></i>
                                      </a>                                                                            
                                     
                                    </td>
                                  </tr>
                                                                   <?php  $i++;  } } else {  ?>
                                                                   
                                                                   <tr class="odd gradeX">
                                    <td class="patient-img"></td>
                                    
                                    <td class="left"></td>
                                    <td class="left"></td>
                                    <td class="left"></td>
                                    <td class="left"></td>
                                    <td class="left"></td>
                                    <td class="left"></td>
                                    <td class="left"></td>
                                    <td>                                      
                                    
                                    </td>
                                    <td>
                                     
                                    </td>
                                  </tr>
                                                               
                                                                   <?php  }  ?>
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
			</div>
			<!-- end page content -->
		</div>
		<!-- end page container -->
		<!-- start footer -->
		<div class="page-footer">
			<div class="page-footer-inner"> 2017 &copy; Smart University 
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
	<!-- end js include path -->
    <script>
        function download(i)
        {
            $.ajax({
                url: "<?php echo base_url('staff/createzip'); ?>", 
                data: {id:i},
                type: "POST", 
                dataType: 'json',
                success: function (data) {
                    console.log(data);
                    if(data.success == true)
                    {
                        $('#alert_id').empty();
                        $('#alert_id').append('<div class="alert alert-success"><i class="fa fa-check"></i><strong>Success! </strong>'+data.msg+'</div>');
                        window.location.href = '<?php echo base_url(); ?>admin';
                    }
                    else
                    {
                        $('#alert_id').empty();
                        $('#alert_id').append('<div class="alert alert-fill-alert"><i class="fa fa-exclamation-triangle"></i><strong>Sorry </strong>'+data.msg+'</div>');
                    }
                },
                error:function(e){
                    console.log(e);
                }
            }); 
        }
        
        function remove_notes(i)
        {
            $.confirm({
                title: 'Confirm!',
                content: 'Simple confirm!',
                buttons: {
                    confirm: function () {
                        $.ajax({
                            url: "<?php echo base_url('staff/remove_notes'); ?>", 
                            type: "POST", 
                            data: {id:i},
                            dataType: 'json',
                            success: function (data) {
                                console.log(data);
                                if(data.success == true)
                                {
                                    $.alert('Deleted!!');
                                    window.location.reload();
                                }
                                else
                                {
                                    $.alert('Something went wrong!');
                                }
                            },
                            error:function(e){
                                console.log(e);
                            }
                        }); 
                        
                    },
                    cancel: function () {
                        $.alert('Canceled!');
                    }                    
                }
            });
        }
    </script>
</body>


</html>