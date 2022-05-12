			<!-- start page content -->
			<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Add Payroll</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="#">Payroll</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Add Payroll</li>
							</ol>
						</div>
					</div>
					<form method="post" action="<?php echo base_url()?>admin/add_payroll" >
					<div class="row">
						<div class="col-sm-12">
							<div class="card-box">
								<div class="card-head">
									<header>Basic Information</header>
								</div>
                                
								<div class="card-body row">
									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
										
											<label class="mdl-textfield__label" style="top: 0px;">Emp Name</label>
											
											
											<select  name="name" id="name" class="form-control" style="width:200;" onchange="getStaffRegNo()">
                                            
                                            <?php  
                                          //  print_r($all_employee);die; 
                                            foreach($all_employee as $emp){      ?>
                                            <option  value="<?php echo $emp->regno; ?>"><?php echo $emp->firstname; ?> </option>
                                            <?php } ?>
                                        </select>
											
										</div>
									</div>
									
									 <div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" id="emp_id" name="emp_id" value="">
											<label class="mdl-textfield__label">Emp  ID</label>
											
                                            
										</div>
									</div>
									
									
                                    <div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" id="txtEmail" name="department">
											<label class="mdl-textfield__label">Emp Department</label>
										</div>
									</div>
										<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" id="txtFirstName" name="branch">
											<label class="mdl-textfield__label">Emp Branch</label>
										</div>
									</div>
                                    <div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" id="txtEmail" name="designation">
											<label class="mdl-textfield__label">Emp  Designation</label>
										</div>
									</div>
										
                                   
								
								</div>

							</div>
						</div>
					</div>
						<div class="row">
						<div class="col-sm-12">
							<div class="card-box">
								<div class="card-head">
									<header>Sallary Information</header>
								</div>

								<div class="card-body row">
									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											
											<label class="mdl-textfield__label" style="top: 0px;">Month </label>
											
											
												<select name="month" class="form-control" style="width:200;">   
                                            <option disabled selected>--Select Batch--</option>
                                            <option>JAN </option>
                                            <option>FEb</option>
                                            <option>MAR</option>
                                            <option>APR</option>
                                             <option>MAY </option>
                                            <option>JUNE</option>
                                            <option>JULY</option>
                                            <option>AUG</option>
                                             <option>SEPT </option>
                                            <option>OCT</option>
                                            <option>NOV</option>
                                            <option>DEC</option>
                                        </select>
                                        
										</div>
									</div>
                                    <div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
										
											<label class="mdl-textfield__label" style="top: 0px;">Year</label>
												<select name="year" class="form-control" style="width:200;">   
                                            <option disabled selected>--Select Batch--</option>
                                            
                                            <option>2022</option>
                                            <option>2023</option>
                                            <option>2024</option>
                                           
                                        </select>
										</div>
									</div>
									
										<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" id="txtFirstName" name="absent_days">
											<label class="mdl-textfield__label">Absent/leaves  days</label>
										</div>
									</div>
									
										<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" id="txtFirstName" name="present_days">
											<label class="mdl-textfield__label">present days</label>
										</div>
									</div>
									
										<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" id="txtFirstName" name="basic_amount">
											<label class="mdl-textfield__label">Basic Amount</label>
										</div>
									</div>
                                    <div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" id="txtEmail" name="hra_amount">
											<label class="mdl-textfield__label">HRA Amount</label>
										</div>
									</div>
										<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" id="txtFirstName" name="ta_amount">
											<label class="mdl-textfield__label">TA Amount</label>
										</div>
									</div>
                                    <div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" id="txtEmail" name="ma_amount">
											<label class="mdl-textfield__label">MA Amount</label>
										</div>
									</div>
										<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" id="txtFirstName" name="lta_amount">
											<label class="mdl-textfield__label">LTA  Amount</label>
										</div>
									</div>
                                    <div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" id="txtEmail" name="conveyance_amount">
											<label class="mdl-textfield__label">CONVEYANCE Amount</label>
										</div>
									</div>
									
									
									
									
									 <div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" id="txtEmail" name="total_earning">
											<label class="mdl-textfield__label">Total Earning Amount</label>
										</div>
									</div>
									
									 <div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" id="txtEmail" name="pt_deduct">
											<label class="mdl-textfield__label">PT Deductions Amount</label>
										</div>
									</div>
									
									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" id="txtEmail" name="tds_deduct">
											<label class="mdl-textfield__label">TDS Deductions Amount</label>
										</div>
									</div>
									
									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" id="txtEmail" name="total_deduct">
											<label class="mdl-textfield__label">Total Deductions Deductions Amount</label>
										</div>
									</div>
									
										<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" id="txtEmail" name="net_pay">
											<label class="mdl-textfield__label">Net Pay </label>
										</div>
									</div>
									
									<div class="col-lg-12 p-t-20 text-center">
										<button type="submit"
											class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-pink">Submit</button>
										<button type="button"
											class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-default">Cancel</button>
									</div>
								</div>
                               
							</div>
						</div>
					</div>
					</form>
				</div>
			</div>
			<!-- end page content -->
			<!-- start chat sidebar -->
			<!-- end chat sidebar -->
		</div>
		<!-- end page container -->
	<script>
		function getStaffRegNo(){
			alert();
			$.ajax({
					url: "<?php echo base_url('admin/getStaffRegNo'); ?>", 
					data: {regno:$('#name').val()},
					type: "POST", 
					dataType: 'json',
					success: function (data) {
						console.log(data);
						if(data.success) {
							// alertify.success(data.msg);
							$('#emp_id').val(data.regno);
						} else {
							alertify.error(data.msg);
						}
					},
					error:function(e){
						console.log(e);
					}
				}); 
				
		}
	</script>
