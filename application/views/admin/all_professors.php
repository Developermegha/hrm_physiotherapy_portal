
			<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Professors List</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="#">Professors</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Professors List</li>
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
														<header>All Professors</header>
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
																	<a href="<?php echo base_url(); ?>admin/add_professor" id="addRow"
																		class="btn btn-info">
																		Add New <i class="fa fa-plus"></i>
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
																		<th> First Name </th>
																		<th> Last Name </th>
																		<th> Email </th>
																		<th>Status</th>
																		<th> Action </th>
																	</tr>
																</thead>
																<tbody>
                                                                    <?php if(!empty($all_prof)){ $i = 1;  foreach($all_prof as $prof){ ?>
																	<tr class="odd gradeX">
                                                                        <td class="patient-img"><?php echo $i; ?></td>
																		<td><?php echo $prof->firstname; ?></td>
                                                                        <td><?php echo $prof->lastname; ?></td>
                                                                        <td><?php echo $prof->email; ?></td>
																		<td><?php echo ($prof->status == 1 ) ? 'Approve' : 'Reject'; ?></td>

																		<td>
																			<!-- <a href="<?php echo base_url(); ?>admin/edit_professor/<?php echo $prof->id; ?>"
																				class="btn btn-primary btn-xs">
																			Approve
																			</a> -->
																			<?php if($prof->status == 1){
																				$var = 'btn btn-danger';
																			}else{
																				$var = 'btn btn-primary';
																			}
																			?>
																			<button onclick="change_Status(<?php echo $prof->id; ?>,<?php echo $prof->status ;?>)" class="<?php echo $var; ?> btn-xs">
																			<?php echo ($prof->status == 1 ) ? 'Reject' : 'Approve'; ?>
																			</button>
																		</td>
																	</tr>
                                                                    <?php $i++; } } ?>
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
        function change_Status(i,status)
        {
			var st;
			if(status ==1 ){
				st = 0;
			}else{
				st =1;
			}
            $.confirm({
                title: 'Confirm!',
                content: 'Simple confirm!',
                buttons: {
                    confirm: function () {
                        $.ajax({
                            url: "<?php echo base_url('admin/change_status'); ?>", 
                            type: "POST", 
                            data: {id:i,status:st},
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
	<script>
	$(document).ready(function() {
		$('.nav-item').removeClass('active open');
		if(window.location.pathname == '/hrm_physiotherapy_portal/admin/all_professors'){
			$(this).find('[href*="'+window.location.pathname+'"]').closest('.nav-item').addClass('active open');
		}
	
	});

</script>
