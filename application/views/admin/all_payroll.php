
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
								
								<li class="active">Payroll List</li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="tabbable-line">
								
								<div class="tab-content">
									<div class="tab-pane active fontawesome-demo" id="tab1">
										<div class="row">
											<div class="col-md-12">
												<div class="card">
													<div class="card-head">
														<header></header>
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
																	<a href="<?php echo base_url()   ?>management/add_emp_payroll" id="addRow"
																		class="btn btn-info">
																		Add New <i class="fa fa-plus"></i>
																	</a>
																	
																	
																	<div class='col-sm-2 float-sm-right '>
																		<input id="inp_file_import" type="file" style="display: none;" />
																		<input id="btn_add_import" type="button" class="btn btn-info bg-gradient-success" value="Import Excel"></div>
																	&nbsp;&nbsp;&nbsp;&nbsp;
																	&nbsp;&nbsp;&nbsp;&nbsp;
																	&nbsp;&nbsp;&nbsp;&nbsp;
																	<a href="<?php echo base_url()   ?>payroll/Import_Payroll_format.xlsx" id="addRow"
																		class="btn btn-info">
																		Download Payroll Format<i class="fa fa-plus"></i>
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
																				<i class="fa fa-file-pdf-o"></i> Save as
																				PDF </a>
																		</li>
																		<li>
																			<a href="javascript:;">
																				<i class="fa fa-file-excel-o"></i>
																				Export to Excel </a>
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
																		<th>Sr</th>
																		<th> Name </th>
																		<th> Employee Id </th>
																		<th> designation </th>
																		<th> month </th>
																		<th> year </th>
																		<th>net_salary</th>
																		<th> Action </th>
																	</tr>
																</thead>
																<tbody>
																    
																    <?php
																	$i= 1;
																	foreach($emp_payroll as $payroll){
																	
																
																    ?>
																    
																	<tr class="odd gradeX"> 
																		
																		<td><?php echo $i++;?></td>
																		<td><?php echo $payroll->emp_name   ?></td>
																		<td><?php echo $payroll->employee_id   ?></td>
																		<td><?php echo $payroll->designation   ?></td>
																		<td><?php echo $payroll->month   ?></td>
																		<td><?php echo $payroll->year   ?></td>
																		<td><?php echo $payroll->net_salary   ?></td>
																	
																		<td>
																			<a href="edit_staff.html"
																				class="btn btn-primary btn-xs">
																				<i class="fa fa-pencil"></i>
																			</a>
																			<a href="javasctipt().html"
																				class="btn btn-danger btn-xs">
																				<i class="fa fa-trash-o "></i>
																			</a>
																		</td>
																	</tr>
																	
																	<?php }  ?>
																	
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
												<div class="card card-topline-aqua">
													<div class="card-body no-padding ">
														<div class="doctor-profile">
															<img src="<?php echo base_url(); ?>assets/img/std/std10.jpg" class="doctor-pic"
																alt="">
															<div class="profile-usertitle">
																<div class="doctor-name">Pooja Patel </div>
																<div class="name-center"> Librarian </div>
															</div>
															<p>A-103, shyam gokul flats, Mahatma Road <br />Mumbai</p>
															<div>
																<p><i class="fa fa-phone"></i><a
																		href="tel:(123)456-7890"> (123)456-7890</a></p>
															</div>
															<div class="profile-userbuttons">
																<a href="staff_profile.html"
																	class="btn btn-circle deepPink-bgcolor btn-sm">Read
																	More</a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-4">
												<div class="card card-topline-aqua">
													<div class="card-body no-padding ">
														<div class="doctor-profile">
															<img src="<?php echo base_url(); ?>assets/img/std/std1.jpg" class="doctor-pic"
																alt="">
															<div class="profile-usertitle">
																<div class="doctor-name">Rajesh </div>
																<div class="name-center"> Clerk </div>
															</div>
															<p>45, Krishna Tower, Near Bus Stop, Satellite, <br />Mumbai
															</p>
															<div>
																<p><i class="fa fa-phone"></i><a
																		href="tel:(123)456-7890"> (123)456-7890</a></p>
															</div>
															<div class="profile-userbuttons">
																<a href="staff_profile.html"
																	class="btn btn-circle deepPink-bgcolor btn-sm">Read
																	More</a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-4">
												<div class="card card-topline-aqua">
													<div class="card-body no-padding ">
														<div class="doctor-profile">
															<img src="<?php echo base_url(); ?>assets/img/std/std2.jpg" class="doctor-pic"
																alt="">
															<div class="profile-usertitle">
																<div class="doctor-name">Sarah Smith </div>
																<div class="name-center"> Librarian </div>
															</div>
															<p>456, Estern evenue, Courtage area, <br />New York</p>
															<div>
																<p><i class="fa fa-phone"></i><a
																		href="tel:(123)456-7890"> (123)456-7890</a></p>
															</div>
															<div class="profile-userbuttons">
																<a href="staff_profile.html"
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
												<div class="card card-topline-aqua">
													<div class="card-body no-padding ">
														<div class="doctor-profile">
															<img src="<?php echo base_url(); ?>assets/img/std/std3.jpg" class="doctor-pic"
																alt="">
															<div class="profile-usertitle">
																<div class="doctor-name">John Deo </div>
																<div class="name-center"> Peon </div>
															</div>
															<p>A-103, shyam gokul flats, Mahatma Road <br />Mumbai</p>
															<div>
																<p><i class="fa fa-phone"></i><a
																		href="tel:(123)456-7890"> (123)456-7890</a></p>
															</div>
															<div class="profile-userbuttons">
																<a href="staff_profile.html"
																	class="btn btn-circle deepPink-bgcolor btn-sm">Read
																	More</a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-4">
												<div class="card card-topline-aqua">
													<div class="card-body no-padding ">
														<div class="doctor-profile">
															<img src="<?php echo base_url(); ?>assets/img/std/std4.jpg" class="doctor-pic"
																alt="">
															<div class="profile-usertitle">
																<div class="doctor-name">Jay Soni </div>
																<div class="name-center"> Purchase Officer </div>
															</div>
															<p>45, Krishna Tower, Near Bus Stop, Satellite, <br />Mumbai
															</p>
															<div>
																<p><i class="fa fa-phone"></i><a
																		href="tel:(123)456-7890"> (123)456-7890</a></p>
															</div>
															<div class="profile-userbuttons">
																<a href="staff_profile.html"
																	class="btn btn-circle deepPink-bgcolor btn-sm">Read
																	More</a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-4">
												<div class="card card-topline-aqua">
													<div class="card-body no-padding ">
														<div class="doctor-profile">
															<img src="<?php echo base_url(); ?>assets/img/std/std5.jpg" class="doctor-pic"
																alt="">
															<div class="profile-usertitle">
																<div class="doctor-name">Jacob Ryan </div>
																<div class="name-center"> Receptionist </div>
															</div>
															<p>456, Estern evenue, Courtage area, <br />New York</p>
															<div>
																<p><i class="fa fa-phone"></i><a
																		href="tel:(123)456-7890"> (123)456-7890</a></p>
															</div>
															<div class="profile-userbuttons">
																<a href="staff_profile.html"
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
												<div class="card card-topline-aqua">
													<div class="card-body no-padding ">
														<div class="doctor-profile">
															<img src="<?php echo base_url(); ?>assets/img/std/std6.jpg" class="doctor-pic"
																alt="">
															<div class="profile-usertitle">
																<div class="doctor-name">Megha Trivedi </div>
																<div class="name-center">Librarian </div>
															</div>
															<p>A-103, shyam gokul flats, Mahatma Road <br />Mumbai</p>
															<div>
																<p><i class="fa fa-phone"></i><a
																		href="tel:(123)456-7890"> (123)456-7890</a></p>
															</div>
															<div class="profile-userbuttons">
																<a href="staff_profile.html"
																	class="btn btn-circle deepPink-bgcolor btn-sm">Read
																	More</a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-4">
												<div class="card card-topline-aqua">
													<div class="card-body no-padding ">
														<div class="doctor-profile">
															<img src="<?php echo base_url(); ?>assets/img/std/std1.jpg" class="doctor-pic"
																alt="">
															<div class="profile-usertitle">
																<div class="doctor-name">Rajesh </div>
																<div class="name-center"> Lab Assistent </div>
															</div>
															<p>45, Krishna Tower, Near Bus Stop, Satellite, <br />Mumbai
															</p>
															<div>
																<p><i class="fa fa-phone"></i><a
																		href="tel:(123)456-7890"> (123)456-7890</a></p>
															</div>
															<div class="profile-userbuttons">
																<a href="staff_profile.html"
																	class="btn btn-circle deepPink-bgcolor btn-sm">Read
																	More</a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-4">
												<div class="card card-topline-aqua">
													<div class="card-body no-padding ">
														<div class="doctor-profile">
															<img src="<?php echo base_url(); ?>assets/img/std/std2.jpg" class="doctor-pic"
																alt="">
															<div class="profile-usertitle">
																<div class="doctor-name">Sarah Smith </div>
																<div class="name-center"> Librarian </div>
															</div>
															<p>456, Estern evenue, Courtage area, <br />New York</p>
															<div>
																<p><i class="fa fa-phone"></i><a
																		href="tel:(123)456-7890"> (123)456-7890</a></p>
															</div>
															<div class="profile-userbuttons">
																<a href="staff_profile.html"
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
												<div class="card card-topline-aqua">
													<div class="card-body no-padding ">
														<div class="doctor-profile">
															<img src="<?php echo base_url(); ?>assets/img/std/std10.jpg" class="doctor-pic"
																alt="">
															<div class="profile-usertitle">
																<div class="doctor-name">Pooja Patel </div>
																<div class="name-center"> Driver </div>
															</div>
															<p>A-103, shyam gokul flats, Mahatma Road <br />Mumbai</p>
															<div>
																<p><i class="fa fa-phone"></i><a
																		href="tel:(123)456-7890"> (123)456-7890</a></p>
															</div>
															<div class="profile-userbuttons">
																<a href="staff_profile.html"
																	class="btn btn-circle deepPink-bgcolor btn-sm">Read
																	More</a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-4">
												<div class="card card-topline-aqua">
													<div class="card-body no-padding ">
														<div class="doctor-profile">
															<img src="<?php echo base_url(); ?>assets/img/std/std1.jpg" class="doctor-pic"
																alt="">
															<div class="profile-usertitle">
																<div class="doctor-name">Rajesh </div>
																<div class="name-center"> Clerk </div>
															</div>
															<p>45, Krishna Tower, Near Bus Stop, Satellite, <br />Mumbai
															</p>
															<div>
																<p><i class="fa fa-phone"></i><a
																		href="tel:(123)456-7890"> (123)456-7890</a></p>
															</div>
															<div class="profile-userbuttons">
																<a href="staff_profile.html"
																	class="btn btn-circle deepPink-bgcolor btn-sm">Read
																	More</a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-4">
												<div class="card card-topline-aqua">
													<div class="card-body no-padding ">
														<div class="doctor-profile">
															<img src="<?php echo base_url(); ?>assets/img/std/std3.jpg" class="doctor-pic"
																alt="">
															<div class="profile-usertitle">
																<div class="doctor-name">John Deo </div>
																<div class="name-center"> Peon </div>
															</div>
															<p>A-103, shyam gokul flats, Mahatma Road <br />Mumbai</p>
															<div>
																<p><i class="fa fa-phone"></i><a
																		href="tel:(123)456-7890"> (123)456-7890</a></p>
															</div>
															<div class="profile-userbuttons">
																<a href="staff_profile.html"
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
																	</div>
			<script>
	$(document).ready(function() {
		$('.nav-item').removeClass('active open');
		if(window.location.pathname == '/hrm_physiotherapy_portal/management/payroll'){
			$(this).find('[href*="'+window.location.pathname+'"]').closest('.nav-item').addClass('active open');
		}
	
	});

</script>
<script>
     $(document).on('click', '#btn_add_import', function() {
                $('#inp_file_import').click();
            });
            
            $(document).on('change', '#inp_file_import', function() {
                $("#add_wait").css("display", "block");
                
                var formData = new FormData();
                formData.append('uploadFile', $('#inp_file_import')[0].files[0]);
				console.log(formData);
                $.ajax({ 
                    url:"<?php echo base_url(); ?>management/importFile",
                    type: "POST",
                    data: formData, 
                    contentType: false,  
					// contentType: 'multipart/form-data',
                    cache: false,
                    processData:false, 
                    dataType:'json',
                    success:function(data) {
                        console.log(data);
                        $("#add_wait").css("display", "none");
                        if(data.success == true) 
                        {
                            alertify.success(data.msg);
							// alertify.error(data.msg);
                            setTimeout(function() {
								location.reload();

                            }, 2000);     
                            
                        } else {
							alertify.error(data.msg);
                            setTimeout(function() {
								location.reload();

                            }, 2000); 
                        }
                    },
                    error: function(err) 
                    {
                        console.log(err);
                    }
                });
            });
 </script>