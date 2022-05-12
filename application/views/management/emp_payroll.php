<script src="https://cdn.datatables.net/fixedheader/3.2.2/js/dataTables.fixedHeader.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.2.2/css/fixedHeader.dataTables.min.css">
<!-- https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css -->
<!-- https://cdn.datatables.net/fixedcolumns/4.0.2/css/fixedColumns.dataTables.min.css -->
<style>/* Ensure that the demo table scrolls */
    th, td { white-space: nowrap; }
    div.dataTables_wrapper {
        width: 800px;
        margin: 0 auto;
    }
 
    th input {
        width: 90%;
    }</style>

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
																		Download Format<i class="fa fa-plus"></i>
																	</a>
																	
																</div>
															</div>
															<div class="col-md-6 col-sm-6 col-6">
															<!-- <div class="col-lg-6 col-sm-6 col-6">
														
																<select name="leave_type" class="form-control" style="width:200;">   
																<option disabled="" selected="">--Search By Month--</option>
																<option value="JAN">JAN </option>
																	<option value="FEB">FEb</option>
																	<option value="MAR">MAR</option>
																	<option value="APR">APR</option>
																	<option value="MAY">MAY </option>
																	<option>JUNE</option>
																	<option>JULY</option>
																	<option>AUG</option>
																	<option>SEPT </option>
																	<option>OCT</option>
																	<option>NOV</option>
																	<option>DEC</option>
																</select>
															
																
															
															</div>
                       -->
																<!-- <div class="btn-group pull-right">
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
																</div> -->
														
															</div>
														</div>
														<div class="table-scrollable">
	
															<table class="stripe row-border order-column" style="width:100%"
																id="payroll">
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
																			<!-- <a href="edit_staff.html"
																				class="btn btn-primary btn-xs">
																				<i class="fa fa-pencil"></i>
																			</a> -->
																			<a href="#" onclick="removePayroll(<?php echo $payroll->id; ?>)"
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
 
 <script>
		function removePayroll(i)
        {
            $.confirm({
                title: 'Confirm!',
                content: 'Are You sure to delete!',
                buttons: {
                    confirm: function () {
                        $.ajax({
                            url: "<?php echo base_url('management/removepayroll'); ?>", 
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
		$(document).ready(function() {
    // Setup - add a text input to each footer cell
    $('#payroll tfoot th').each( function (i) {
        var title = $('#payroll thead th').eq( $(this).index() ).text();
        $(this).html( '<input type="text" placeholder="'+title+'" data-index="'+i+'" />' );
    } );
  
    // DataTable
    var table = $('#payroll').DataTable( {
        scrollY:        "300px",
        scrollX:        true,
        scrollCollapse: true,
        paging:         false,
        fixedColumns:   true
    } );
 
    // Filter event handler
    $( table.table().container() ).on( 'keyup', 'tfoot input', function () {
        table
            .column( $(this).data('index') )
            .search( this.value )
            .draw();
    } );
} );
	
	</script>