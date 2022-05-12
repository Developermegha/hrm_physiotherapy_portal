
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
																	<a href="<?php echo base_url()   ?>staff/add_emp_payroll" id="addRow"
																		class="btn btn-info">
																		Add New <i class="fa fa-plus"></i>
																	</a>
																	
																	
															
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
																		<td><?php echo $payroll->employee_id;   ?></td>
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