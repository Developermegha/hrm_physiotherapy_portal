			<!-- start page content -->

			<div class="page-content-wrapper">

				<div class="page-content">

					<div class="page-bar">

						<div class="page-title-breadcrumb">

							<div class=" pull-left">

								<div class="page-title">Leaves Application</div>

							</div>

							<ol class="breadcrumb page-breadcrumb pull-right">

								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"

										href="#">Home</a>&nbsp;<i class="fa fa-angle-right"></i>

								</li>

								<li><a class="parent-item" href="#"></a>&nbsp;<i class="fa fa-angle-right"></i>

								</li>

								<li class="active">Leaves Application</li>

							</ol>

						</div>

					</div>

					<div class="row">

						<div class="col-sm-12">

							<div class="card-box">

                               <form action="<?php base_url('')?>add_leaveapplication" method="post" >

								<div class="card-head"> 

									<header>Leaves Information</header> 

									<button id="panel-button"

										class="mdl-button mdl-js-button mdl-button--icon pull-right"

										data-upgraded=",MaterialButton">

										<i class="material-icons">more_vert</i>

									</button>

									<ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"

										data-mdl-for="panel-button">

										<li class="mdl-menu__item"><i class="material-icons">assistant_photo</i>Action

										</li>

										<li class="mdl-menu__item"><i class="material-icons">print</i>Another action

										</li>

										<li class="mdl-menu__item"><i class="material-icons">favorite</i>Something else

											here</li>

									</ul>

								</div>

							<div class="card-body row">

						
						<div class="col-lg-6 p-t-20">	    
						<span><strong>Available leaves  are below </strong><br></span>		
						<?php if(!empty($leave_type) && $leave_type !=''){
								foreach($leave_type as $key => $value){ ?>
									<strong>Medical Leaves</strong> - <?php echo  $value->medical_leaves; ?>,
									<strong>Casual Leaves</strong> - <?php echo  $value->casual_leaves; ?>,
									<strong>Earned Leaves</strong> - <?php echo  $value->earned_leaves; ?>
									
									
									<?php }} else{ 
										foreach($leavetype as $key => $value){ ?>
									<strong><?php echo $value->leave_type ?></strong> - <?php echo  $value->leaves; ?>,
									
									
								
									<?php }}?>
						</div>
						<div class="col-lg-6 p-t-20">	    </div>
                        <div class="col-lg-6 p-t-20">
                            
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                <label class="mdl-textfield__label">From Date</label>
                                <input class="mdl-textfield__input" type="date" id="txtFirstName" name="from_date" style="margin-top: 30px;"><br>
                            </div>
                        </div>
                        <div class="col-lg-6 p-t-20">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                <input class="mdl-textfield__input" type="date" value="" id="txtFirstName" name="to_date" style="margin-top: 30px;">
                                <label class="mdl-textfield__label">To Date</label>
                            </div>
                        </div>
						<div class="col-lg-6 p-t-20">
                            <span>Leave </span>
                            <select name="leave" class="form-control" style="width:200;">   
                                <option disabled="" selected="">--Select Leave--</option>
                                <option value="half">Half</option>
                                <option value="full">Full</option>
                            </select>
                            
                        </div>
                        
                        
						<div class="col-lg-6 p-t-20">
							<span>Leave Types </span>
							
							<select name="leave_type" class="form-control" >
							<option disabled="" selected="">--Select Leave Types--</option>
							
								<?php
								// print_r($leave_type);
									if(!empty($leave_type) && $leave_type !=''){
								foreach($leave_type as $key => $value){ ?>
									<option value="Medical Leaves">Medical Leaves - <?php echo  $value->medical_leaves; ?></option>
									<option value="Casual Leaves"> Casual Leaves - <?php echo  $value->casual_leaves; ?></option>
									<option value="Earned Leaves"> Earned Leaves - <?php echo  $value->earned_leaves; ?></option>
									
									
									<?php }} else{ 
										foreach($leavetype as $key => $value){ ?>
									<option value="<?php echo $value->leave_type ?>"><?php echo $value->leave_type; ?> - <?php echo  $value->leaves; ?></option>
									
									
								
									<?php }}?>
								</select>
									
						</div>
						<div class="col-lg-6 p-t-20">
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
								<input class="mdl-textfield__input" type="text" value="" id="txtFirstName" name="reason">
								<label class="mdl-textfield__label">Reason</label> 
							</div>
						</div>
						<div class="col-lg-12 p-t-30">
							<div id="alert_id">

                                        </div>

                                        <div class="row">

                                            <div id="add_wait" style="display:none;width:69px;height:89px;position:absolute;top:50%;left:50%;padding:2px;">

                                                <img src='<?php echo base_url(); ?>assets/img/loading.gif' width="64" height="64" />

                                                <br>Loading..

                                            </div>

                                        </div>

                                        <div class="row" id="add_notes">

                                        </div>

                                       

                                    </div>

                                    <div class="col-lg-12 p-t-20 text-center">

					<button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-pink">Add</button> 

											<button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-default">Cancel</button>

									</div>
                              
                               
                              
                                    </div>

                               </form> 

							</div>

						</div>

					</div>
					
					
					</div>


				</div>

			</div>

			<!-- end page content -->
