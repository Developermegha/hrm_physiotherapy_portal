			<!-- start page content -->
			<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Leaves Applications List</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<!-- <li><a class="parent-item" href="#">Leaves</a>&nbsp;<i class="fa fa-angle-right"></i> -->
								</li>
								<li class="active">Leaves Applications List</li>
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
												<div class="card card-box">
													<div class="card-head">
														<header>All Leaves Applications</header>
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
																	<a href="<?php echo base_url()?>admin/add_leave" id="addRow"
																		class="btn btn-info">
																		Add leaves Application <i class="fa fa-plus"></i>
																	</a>
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
																		<th> From Date </th>
																		<th> To Date </th>
																		<th> days </th>
																		<th>Reason</th>
																		<th>Apply On</th>
																		<th>Status</th>
																		<th> Action </th>
																	</tr>
																</thead>
																<tbody>
                                                                   <?php if(is_array($leaves_applications)) { $i = 1;  
                                                                   foreach($leaves_applications as $leaves){
                                                                   ?>
                                                                       <tr class="odd gradeX">
                                    <td class="patient-img"><?php echo $i; ?></td>
                                    
                                    <td class="left"><?php echo $leaves->employee_id ;  ?></td>
                                    <td class="left"><?php echo $leaves->start_date;   ?></td>
                                    <td class="left"><?php echo $leaves->end_date;   ?></td>
                                    <td class="left"><?php echo $leaves->days;   ?></td>
                                    <td class="left"><?php echo $leaves->reason;   ?></td>
                                    <td class="left"><?php echo $leaves->applied_on;   ?></td>
                                    
                                  <?php  if($leaves->application_status === "approved"){   ?>
                                    
                                    <td class="left" style="color: green;"><?php echo $leaves->application_status;   ?></td>
                                    
                                <?php    } elseif($leaves->application_status === "pending") {?>
                                    
                                    <td class="left" style="color: yellow;"><?php echo $leaves->application_status;   ?></td>
                                    
                                   <?php } else { ?>
                                   
                                    <td class="left" style="color: red;"><?php echo $leaves->application_status;   ?></td>
                                   
                                   <?php }?>
                                   
                                   
                                   
                                    
                                    
                                   <td>
                                        
                                       <?php  if($leaves->applied_on === "approved"){ ?>
                                        
                                    
                                      
                                      <?php  }  else {   ?>
                                      
                                        <a href="<?php echo base_url()?>/admin/leave_approve/<?php echo $leaves->id ;  ?>" class="btn btn-primary btn-xs">
                                        <i class="fa fa-pencil">Approve</i>
                                      </a>    
                                      
                                      &nbsp;
                                      <a href="<?php echo base_url()?>/admin/leave_reject/<?php echo $leaves->id ;  ?>" class="btn btn-danger btn-xs">
                                        <i class="fa fa-trash-o ">Reject</i> 
                                      </a>
                                      
                                     <!-- <a href="<?php echo base_url()?>/admin/delete_leave/<?php echo $leaves->id ;  ?>" class="btn btn-primary btn-xs">
                                        <i class="fa fa-trash">Delete</i>
                                      </a> -->
                                      
                                      <?php }?>
                                      
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
        
      
    </script>
	<script>
	$(document).ready(function() {
		$('.nav-item').removeClass('active open');
		if(window.location.pathname == '/hrm_physiotherapy_portal/admin/all_leave'){
			$(this).find('[href*="'+window.location.pathname+'"]').closest('.nav-item').addClass('active open');
		}
	
	});

</script>