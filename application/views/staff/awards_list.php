			<!-- start page content -->
			<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Awards  List</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li class="active">Awards List</li>
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
														<header>All Awards</header>
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
																	<a href="<?php echo base_url()?>staff/add_award" id="addRow"
																		class="btn btn-info">
																		Add Awards  <i class="fa fa-plus"></i>
																	</a>
																</div>
															</div>
															<div class="col-md-6 col-sm-6 col-6">
																
															</div>
														</div>
														<div class="table-scrollable">
															<table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle" id="example4">
																<thead>
																	<tr>
																		<th></th>
																		<th> Emp ID </th>
																		<th>Recognize</th>
                                                                        <th> Achievement</th>
                                                                        <th> Prize</th>
                                                                        <th>Status</th>
																	</tr>
																</thead>
																<tbody>
                                                                    <?php if(is_array($allawards)) { $i = 1;  
                                                                    foreach($allawards as $leaves){
                                                                        ?>
                                                                        <tr class="odd gradeX">
                                                                            <td class="patient-img"><?php echo $i; ?></td>
                                                                            <td class="left"><?php echo $leaves->employee_id ;  ?></td>
                                                                            <td class="left"><?php echo $leaves->recognize;   ?></td>
                                                                            <td class="left"><?php echo $leaves->achievement;   ?></td>
                                                                            <td class="left"><?php echo $leaves->prize;   ?></td>
                                                                    <?php echo ($leaves->status == 1) ? '<td class="left" style="color: green;">Active</td>' : '<td class="left" style="color: green;">Inactive</td>';   ?>
                                                                            <td><a onclick="remove_award(<?php echo  $leaves->id; ?>)" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></a></td>
                                                                        </tr>
                                                                        <?php  $i++;  } } else {  ?>
                                                                            <tr class="odd gradeX">
                                                                                <td class="patient-img"></td>
                                                                                <td class="left"></td><td class="left"></td>
                                                                                <td class="left"></td>
                                                                                <td class="left"></td>
                                                                                <td class="left"></td>
                                                                                <td class="left"></td>
                                                                                <td class="left"></td>
                                                                                <td>                                      </td>
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
        function remove_award(i)
        {
            $.confirm({
                title: 'Confirm!',
                content: 'Are You sure to delete!',
                buttons: {
                    confirm: function () {
                        $.ajax({
                            url: "<?php echo base_url('staff/remove_award'); ?>", 
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
