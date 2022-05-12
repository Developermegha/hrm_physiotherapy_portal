
			<!-- start page content -->
			<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Notice List</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="#">Notice</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Notice List</li>
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
														<header>All General Notice</header>														
													</div>
													<div class="card-body ">
														<div class="row">
															<div class="col-md-6 col-sm-6 col-6">
																<div class="btn-group">
																	<a href="<?php echo base_url(); ?>staff/add_notice_general" id="addRow"
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
																		<th> Content </th>
																		<th> Action </th>
																	</tr>
																</thead>
																<tbody>
                                                                    <?php if(!empty($notices)){ $i = 1;  foreach($notices as $not){?>
																	<tr class="odd gradeX">
																		<td class="patient-img"><?php echo $i; ?></td>
																		<td><?php echo $not->content; ?></td>
                                                                        
																		<td>
																			                                                                        
																			<a onclick="remove_notice(<?php echo $not->id; ?>)" class="btn btn-danger btn-xs">
																				<i class="fa fa-trash-o "></i>
																			</a>
																		</td>
																	</tr>
                                                                    <?php $i++;  } }?>
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
	<script> 
        function remove_notice(i)
        {
            $.confirm({
                title: 'Confirm!',
                content: 'Are You sure to delete!',
                buttons: {
                    confirm: function () {
                        $.ajax({
                            url: "<?php echo base_url('staff/remove_notice'); ?>", 
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
