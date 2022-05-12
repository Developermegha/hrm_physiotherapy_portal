<div class="page-content-wrapper">
	<div class="page-content">
		<div class="page-bar">
			<div class="page-title-breadcrumb">
				<div class=" pull-left">
					<div class="page-title">Profile</div>
				</div>
				<ol class="breadcrumb page-breadcrumb pull-right">
					<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i></li>
					<li><a class="parent-item" href="#"></a>&nbsp;<i class="fa fa-angle-right"></i></li>
					<li class="active">Profile</li>
				</ol>
			</div>
		</div>
		
		<div class="row">
			<div class="col-sm-12">
				<div class="card-box">
					<form id="notes_form">
						<div class="card-head">
							<header>Profile Information</header> 
							<button id="panel-button" class="mdl-button mdl-js-button mdl-button--icon pull-right" data-upgraded=",MaterialButton">
								<i class="material-icons">more_vert</i>
							</button>
							<ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" data-mdl-for="panel-button">
								<li class="mdl-menu__item"><i class="material-icons">assistant_photo</i>Action </li>
								<li class="mdl-menu__item"><i class="material-icons">print</i>Another action </li>
								<li class="mdl-menu__item"><i class="material-icons">favorite</i>Something else here</li>
							</ul>
						</div>
						<?php  if(is_array($profile)) 
						{
							foreach($profile as $prf ) { 
								?>
								<div class="card-body row">
									<div class="col-lg-6 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" value="<?php echo $prf->firstname;   ?>" id="txtFirstName" name="name">
											<label class="mdl-textfield__label">Staff Name</label>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" value="<?php echo $prf->email;   ?>" id="txtFirstName" name="email">
											<label class="mdl-textfield__label">Email</label>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" value="<?php echo $prf->mobile;  ?>" id="txtFirstName" name="password">
											<label class="mdl-textfield__label">mobile</label>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" value="<?php echo $prf->place_of_birth  ?>" id="txtFirstName" name="course">
											<label class="mdl-textfield__label">place of birth</label> 
										</div>
									</div>
									<div class="col-lg-12 p-t-30">
										<div id="alert_id"></div>
										<div class="row">
											<div id="add_wait" style="display:none;width:69px;height:89px;position:absolute;top:50%;left:50%;padding:2px;">
											<img src='<?php echo base_url(); ?>assets/img/loading.gif' width="64" height="64" />
											<br>Loading..
										</div>
									</div>
									<div class="row" id="add_notes"></div>
								</div>
							</div>
							<div class="col-lg-12 p-t-20 text-center">
								<button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-pink">Update</button>
								<button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-default">Cancel</button>
							</div>
							<?php }  } else {   ?>
								<div class="card-body row">
									<div class="col-lg-6 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" value="" id="txtFirstName" name="name">
											<label class="mdl-textfield__label">Staff Name</label>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" value="" id="txtFirstName" name="email">
											<label class="mdl-textfield__label">Email</label>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" value="" id="txtFirstName" name="password">
											<label class="mdl-textfield__label">mobile</label>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" value="" id="txtFirstName" name="course">
											<label class="mdl-textfield__label">place of birth</label> 
										</div>
									</div>
									<div class="col-lg-12 p-t-30">
										<div id="alert_id"></div>
										<div class="row">
											<div id="add_wait" style="display:none;width:69px;height:89px;position:absolute;top:50%;left:50%;padding:2px;">
											<img src='<?php echo base_url(); ?>assets/img/loading.gif' width="64" height="64" />
											<br>Loading..
										</div>
									</div>
									<div class="row" id="add_notes"></div>
								</div>
							</div>
							<div class="col-lg-12 p-t-20 text-center">
								<button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-pink">Update</button>
								<button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-default">Cancel</button>
							</div>
							<?php }?>
						</form>
						
					<?php   
					if(is_array($qulification_info))
					{ 
						foreach($qulification_info as $info ) {  ?>
						<div class="row">
							<div class="col-sm-12">
								<div class="card-box">
									<form id="notes_form" method="post" action="<?php echo base_url()?>/staff/add_qulification_info">
									<div class="card-head">
										<header>Qualification Information</header>
										<button id="panel-button" class="mdl-button mdl-js-button mdl-button--icon pull-right" data-upgraded=",MaterialButton">
											<i class="material-icons">more_vert</i>
										</button>
										<ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" data-mdl-for="panel-button">
											<li class="mdl-menu__item"><i class="material-icons">assistant_photo</i>Action </li>
											<li class="mdl-menu__item"><i class="material-icons">print</i>Another action </li>
											<li class="mdl-menu__item"><i class="material-icons">favorite</i>Something else here</li>
										</ul>
									</div>
									<div class="card-body row">
										<div class="col-lg-3 p-t-20">
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
												<input class="mdl-textfield__input" type="text" value="<?php echo $info->ssc;   ?>" id="txtFirstName" name="ssc_school">
												<label class="mdl-textfield__label">SECONDARY SCHOOL</label>
											</div>
										</div>
										<div class="col-lg-3 p-t-20">
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
												<input class="mdl-textfield__input" type="text" value="<?php echo $info->ssc_board;   ?>" id="txtFirstName" name="ssc_board">
												<label class="mdl-textfield__label">BOARD</label>
											</div>
										</div>
										<div class="col-lg-3 p-t-20">
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
												<input class="mdl-textfield__input" type="text" value="<?php echo $info->ssc_state;   ?>" id="txtFirstName" name="ssc_state">
												<label class="mdl-textfield__label">STATE </label> 
											</div>
										</div>
										<div class="col-lg-3 p-t-20">
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
												<input class="mdl-textfield__input" type="text" value="<?php echo $info->ssc_place;   ?>" id="txtFirstName" name="ssc_place">
												<label class="mdl-textfield__label">PLACE </label>
											</div>
										</div>
										<div class="col-lg-2 p-t-20">
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
												<input class="mdl-textfield__input" type="text" value="<?php echo $info->ssc_marks_obtained;   ?>" id="txtFirstName" name="ssc_marks_obtained">
												<label class="mdl-textfield__label">MARKS OBTAINED	 </label>
											</div>
										</div>
										<div class="col-lg-2 p-t-20">
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
												<input class="mdl-textfield__input" type="text" value="<?php echo $info->ssc_percentage;   ?>" id="txtFirstName" name="ssc_percentage">
												<label class="mdl-textfield__label">PERCENTAGE/GRADE	</label>
											</div>
										
										</div>
										<div class="col-lg-4 p-t-20">
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width"></div>
										</div>
										<div class="col-lg-4 p-t-20">
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width"></div>
										</div>
										<div class="col-lg-3 p-t-20">
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
												<input class="mdl-textfield__input" type="text" value="<?php echo $info->hsc;   ?>" id="txtFirstName" name="hsc">
												<label class="mdl-textfield__label">HIGHER SECONDARY SCHOOL</label>
											</div>
										</div>
										<div class="col-lg-3 p-t-20">
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
												<input class="mdl-textfield__input" type="text" value="<?php echo $info->hsc_board;   ?>" id="txtFirstName" name="hsc_board">
												<label class="mdl-textfield__label">BOARD</label>
											</div>
										</div>
										<div class="col-lg-3 p-t-20">
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
												<input class="mdl-textfield__input" type="text" value="<?php echo $info->hsc_state;   ?>" id="txtFirstName" name="hsc_state">
												<label class="mdl-textfield__label">STATE </label>
											</div>
										</div>
										<div class="col-lg-3 p-t-20">
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
												<input class="mdl-textfield__input" type="text" value="<?php echo $info->hsc_place  ?>" id="txtFirstName" name="hsc_place">
												<label class="mdl-textfield__label">PLACE </label>
											</div>
										</div>
										<div class="col-lg-2 p-t-20">
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
												<input class="mdl-textfield__input" type="text" value="<?php echo $info->hsc_marks_obtained  ?>" id="txtFirstName" name="hsc_marks_obtained">
												<label class="mdl-textfield__label">MARKS OBTAINED	 </label>
											</div>
										</div>
										<div class="col-lg-2 p-t-20">
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
												<input class="mdl-textfield__input" type="text" value="<?php echo $info->hsc_percentage  ?>" id="txtFirstName" name="hsc_percentage">
												<label class="mdl-textfield__label">PERCENTAGE/GRADE	</label>
											</div>
										</div>
										<div class="col-lg-4 p-t-20">
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width"></div>
										</div>
										<div class="col-lg-4 p-t-20">
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width"></div>
										</div>
										<div class="col-lg-3 p-t-20">
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
												<input class="mdl-textfield__input" type="text" value="<?php echo $info->others;  ?>" id="txtFirstName" name="others">
												<label class="mdl-textfield__label">Others</label>
											</div>
										</div>
										<div class="col-lg-12 p-t-30">
											<div id="alert_id"></div>
											<div class="row">
												<div id="add_wait" style="display:none;width:69px;height:89px;position:absolute;top:50%;left:50%;padding:2px;">
												<img src='<?php echo base_url(); ?>assets/img/loading.gif' width="64" height="64" />
												<br>Loading..
											</div>
										</div>
										<div class="row" id="add_notes"></div>
										
									</div>
									<div class="col-lg-12 p-t-20 text-center">
										<button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-pink">Update</button>
										<button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-default">Cancel</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>   
				<?php	} }  else{ ?> 
					<div class="row">
						<div class="col-sm-12">
							<div class="card-box">
								<form id="notes_form" method="post" action="<?php echo base_url()?>/staff/add_qulification_info">
								<div class="card-head">
									<header>Qualification Information</header>
									<button id="panel-button" class="mdl-button mdl-js-button mdl-button--icon pull-right" data-upgraded=",MaterialButton">
										<i class="material-icons">more_vert</i>
									</button>
									<ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" data-mdl-for="panel-button"> 
										<li class="mdl-menu__item"><i class="material-icons">assistant_photo</i>Action </li>
										<li class="mdl-menu__item"><i class="material-icons">print</i>Another action</li>
										<li class="mdl-menu__item"><i class="material-icons">favorite</i>Something else here</li>
									</ul>
								</div>
								<div class="card-body row">
									<div class="col-lg-3 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" value=""  id="txtFirstName" name="ssc_school">
											<label class="mdl-textfield__label">SECONDARY SCHOOL</label>
										</div>
									</div>
									<div class="col-lg-3 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" value="" id="txtFirstName" name="ssc_board">
											<label class="mdl-textfield__label">BOARD</label>
										</div>
									</div>
									<div class="col-lg-3 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" value="" id="txtFirstName" name="ssc_state">
											<label class="mdl-textfield__label">STATE </label>
										</div>
									</div>
									<div class="col-lg-3 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" value="" id="txtFirstName" name="ssc_place">
											<label class="mdl-textfield__label">PLACE </label>
										</div>
									</div>
									<div class="col-lg-2 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" value="" id="txtFirstName" name="ssc_marks_obtained">
											<label class="mdl-textfield__label">MARKS OBTAINED	 </label>
										</div>
									</div>
									<div class="col-lg-2 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" value="" id="txtFirstName" name="ssc_percentage">
											<label class="mdl-textfield__label">PERCENTAGE/GRADE	</label>
										</div>
									</div>
									<div class="col-lg-4 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width"></div>
									</div>
									<div class="col-lg-4 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width"></div>
									</div>
									<div class="col-lg-3 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" value=""  id="txtFirstName" name="hsc">
											<label class="mdl-textfield__label">HIGHER SECONDARY SCHOOL</label>
										</div>
									</div>
									<div class="col-lg-3 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" value="" id="txtFirstName" name="hsc_board">
											<label class="mdl-textfield__label">BOARD</label> 
										</div>
									</div>
									<div class="col-lg-3 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" value="" id="txtFirstName" name="hsc_state">
											<label class="mdl-textfield__label">STATE </label>
										</div>
									</div>
									<div class="col-lg-3 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" value="" id="txtFirstName" name="hsc_place">
											<label class="mdl-textfield__label">PLACE </label>
										</div>
									</div>
									<div class="col-lg-2 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" value="" id="txtFirstName" name="hsc_marks_obtained">
											<label class="mdl-textfield__label">MARKS OBTAINED	 </label>
										</div>
									</div>
									<div class="col-lg-2 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" value="" id="txtFirstName" name="hsc_percentage">
											<label class="mdl-textfield__label">PERCENTAGE/GRADE	</label>
										</div>
									</div>
									<div class="col-lg-4 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width"></div>
									</div>
									<div class="col-lg-4 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width"></div>
									</div>
									<div class="col-lg-3 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" value="" id="txtFirstName" name="others">
											<label class="mdl-textfield__label">Others</label>
										</div>
									</div>
									<div class="col-lg-12 p-t-30">
										<div id="alert_id"></div>
										<div class="row">
											<div id="add_wait" style="display:none;width:69px;height:89px;position:absolute;top:50%;left:50%;padding:2px;">
											<img src='<?php echo base_url(); ?>assets/img/loading.gif' width="64" height="64" />
											<br>Loading..
										</div>
									</div>
									<div class="row" id="add_notes"></div>
								</div>
								<div class="col-lg-12 p-t-20 text-center">
									<button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-pink">Submit</button>
									<button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-default">Cancel</button> 
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<?php   } ?>
			
			<?php		if(is_array($proff_qulification_info))
			{ 
				foreach($proff_qulification_info as $proffinfo ) {  ?>
				<div class="row">
					<div class="col-sm-12">
						<div class="card-box">
							<form id="notes_form" method="post" action="<?php echo base_url('');?>/staff/add_prof_qulification">
							<div class="card-head">
								<header>PROFESSIONAL QUALIFICATION</header> 
								<button id="panel-button" class="mdl-button mdl-js-button mdl-button--icon pull-right" data-upgraded=",MaterialButton"> 
									<i class="material-icons">more_vert</i>
								</button>
								<ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" data-mdl-for="panel-button"> 
									<li class="mdl-menu__item"><i class="material-icons">assistant_photo</i>Action </li>
									<li class="mdl-menu__item"><i class="material-icons">print</i>Another action </li>
									<li class="mdl-menu__item"><i class="material-icons">favorite</i>Something else here</li>
								</ul>
							</div>
							
							<div class="card-body row">
								<div class="col-lg-3 p-t-20">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
										<input class="mdl-textfield__input" type="text" value="bsc_nursing"  id="txtFirstName" name="bsc_nursing">
										<label class="mdl-textfield__label">B.SC. NURSING</label></div>
									</div>
									<div class="col-lg-3 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" value="<?php echo $proffinfo->bsc_collage;   ?>" id="txtFirstName" name="bsc_nursing_collage">
											<label class="mdl-textfield__label">COLLEGE</label>
										</div>
									</div>
									<div class="col-lg-3 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" value="<?php echo $proffinfo->bsc_university;   ?>" id="txtFirstName" name="bsc_nursing_university">
											<label class="mdl-textfield__label">UNIVERSITY</label> 
										</div>
									</div>
									<div class="col-lg-3 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" value="<?php echo $proffinfo->bsc_yearofpassing;   ?>" id="txtFirstName" name="bsc_nursing_yop"> 
											<label class="mdl-textfield__label">YEAR OF PASSING</label>  
										</div>
									</div>
									<div class="col-lg-3 p-t-20"> 
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width"> 
											<input class="mdl-textfield__input" type="text" value="<?php echo $proffinfo->bsc_marksobtained;   ?>" id="txtFirstName" name="bsc_nursing_marksobtained"> 
											<label class="mdl-textfield__label">MARKS OBTAINED	</label> 
										</div>
									</div>
									<div class="col-lg-3 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" value="<?php echo $proffinfo->bsc_percentage;?>" id="txtFirstName" name="bsc_nursing_percentage">
											<label class="mdl-textfield__label">PERCENTAGE	</label>  
										</div>
									</div>
									<div class="col-lg-3 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<label class="mdl-textfield__label"></label> 
										</div>
									</div>
									<div class="col-lg-3 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<label class="mdl-textfield__label"></label>  
										</div>
									</div>
									
									<div class="col-lg-3 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width"> 
											<input class="mdl-textfield__input" type="text" value="msc_nursing"  id="txtFirstName" name="msc_nursing">
											<label class="mdl-textfield__label">M.SC. NURSING	</label>
										</div>
									</div>
									<div class="col-lg-3 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" value="<?php echo $proffinfo->msc_collage;?>" id="txtFirstName" name="msc_nursing_collage">
											<label class="mdl-textfield__label">COLLEGE</label>
										</div>
									</div>
									<div class="col-lg-3 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" value="<?php echo $proffinfo->msc_university;?>" id="txtFirstName" name="msc_nursing_university">
											<label class="mdl-textfield__label">UNIVERSITY</label>
										</div>
									</div>
									<div class="col-lg-3 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" value="<?php echo $proffinfo->msc_yearofpassing;?>" id="txtFirstName" name="msc_nursing_yop">
											<label class="mdl-textfield__label">YEAR OF PASSING</label> 
										</div>
									</div>
									<div class="col-lg-3 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" value="<?php echo $proffinfo->msc_marksobtained;?>" id="txtFirstName" name="msc_nursing_marksobtained">
											<label class="mdl-textfield__label">MARKS OBTAINED	</label>  
										</div>
									</div>
									<div class="col-lg-3 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width"> 
											<input class="mdl-textfield__input" type="text" value="<?php echo $proffinfo->msc_percentage;?>" id="txtFirstName" name="msc_nursing_percentage"> 
											<label class="mdl-textfield__label">PERCENTAGE	</label> 
										</div>
									</div>
									<div class="col-lg-3 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<label class="mdl-textfield__label"></label> 
										</div>
									</div>
									<div class="col-lg-3 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width"> 
											<label class="mdl-textfield__label"></label> 
										</div>
									</div>
									<div class="col-lg-3 p-t-20"> 
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width"> 
											<input class="mdl-textfield__input" type="text" value="P.H.D"  id="txtFirstName" name="phd"> 
											<label class="mdl-textfield__label">P.HD.</label> 
										</div>
									</div>
									<div class="col-lg-3 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" value="<?php echo $proffinfo->phd_collage;?>" id="txtFirstName" name="phd_collage">
											<label class="mdl-textfield__label">COLLEGE</label>
										</div>
									</div>
									<div class="col-lg-3 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width"> 
											<input class="mdl-textfield__input" type="text" value="<?php echo $proffinfo->phd_university;?>" id="txtFirstName" name="phd_university">
											<label class="mdl-textfield__label">UNIVERSITY</label>
										</div>
									</div>
									<div class="col-lg-3 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" value="<?php echo $proffinfo->phd_yearofpassing;?>" id="txtFirstName" name="phd_yop">
											<label class="mdl-textfield__label">YEAR OF PASSING</label>  
										</div>
									</div>
									<div class="col-lg-3 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" value="<?php echo $proffinfo->phd_marksobtained;?>" id="txtFirstName" name="phd_marksobtained"> 
											<label class="mdl-textfield__label">MARKS OBTAINED	</label> 
										</div>
									</div>
									<div class="col-lg-3 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" value="<?php echo $proffinfo->phd_percentage;?>" id="txtFirstName" name="phd_percentage"> 
											<label class="mdl-textfield__label">PERCENTAGE	</label> 
										</div>
									</div>
									<div class="col-lg-3 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<label class="mdl-textfield__label"></label> 
										</div>
									</div>
									<div class="col-lg-3 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<label class="mdl-textfield__label"></label> 
										</div>
									</div>
									<div class="col-lg-3 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" value="<?php echo $proffinfo->additional_qulification;  ?>"  id="txtFirstName" name="additional_qulification">
											<label class="mdl-textfield__label">ADDITIONAL QUALIFICATION</label> 
										</div>
									</div>
									<div class="col-lg-12 p-t-30">
										<div id="alert_id"></div>
										<div class="row">
											<div id="add_wait" style="display:none;width:69px;height:89px;position:absolute;top:50%;left:50%;padding:2px;"> 
											<img src='<?php echo base_url(); ?>assets/img/loading.gif' width="64" height="64" />
											<br>Loading..
										</div>
									</div>
									<div class="row" id="add_notes"></div>
								</div>
								<div class="col-lg-12 p-t-20 text-center">
									<button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-pink">Update</button>
									<button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-default">Cancel</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<?php }  }  else { ?>
				<div class="row">
					<div class="col-sm-12">
						<div class="card-box">
							<form id="notes_form" method="post" action="<?php echo base_url('');?>/staff/add_prof_qulification">
							<div class="card-head">
								<header>PROFESSIONAL QUALIFICATION</header> 
								<button id="panel-button" class="mdl-button mdl-js-button mdl-button--icon pull-right" data-upgraded=",MaterialButton">
									<i class="material-icons">more_vert</i>
								</button>
								<ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" data-mdl-for="panel-button"> 
									<li class="mdl-menu__item"><i class="material-icons">assistant_photo</i>Action</li>
									<li class="mdl-menu__item"><i class="material-icons">print</i>Another action</li>
									<li class="mdl-menu__item"><i class="material-icons">favorite</i>Something else here</li>
								</ul>
							</div>
							<div class="card-body row">
								<div class="col-lg-3 p-t-20">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
										<input class="mdl-textfield__input" type="text" value="bsc_nursing" id="txtFirstName" name="bsc_nursing">
										<label class="mdl-textfield__label">B.SC. NURSING</label>
									</div>
								</div>
								<div class="col-lg-3 p-t-20">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
										<input class="mdl-textfield__input" type="text" value="" id="txtFirstName" name="bsc_nursing_collage">
										<label class="mdl-textfield__label">COLLEGE</label>
									</div>
								</div>
								<div class="col-lg-3 p-t-20">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
										<input class="mdl-textfield__input" type="text" value="" id="txtFirstName" name="bsc_nursing_university">
										<label class="mdl-textfield__label">UNIVERSITY</label>
									</div>
								</div>
								<div class="col-lg-3 p-t-20">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
										<input class="mdl-textfield__input" type="text" value="" id="txtFirstName" name="bsc_nursing_yop">
										<label class="mdl-textfield__label">YEAR OF PASSING</label> 
									</div>
								</div>
								<div class="col-lg-3 p-t-20">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
										<input class="mdl-textfield__input" type="text" value="" id="txtFirstName" name="bsc_nursing_marksobtained">
										<label class="mdl-textfield__label">MARKS OBTAINED	</label> 
									</div>
								</div>
								<div class="col-lg-3 p-t-20">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
										<input class="mdl-textfield__input" type="text" value="" id="txtFirstName" name="bsc_nursing_percentage">
										<label class="mdl-textfield__label">PERCENTAGE	</label> 
									</div>
								</div>
								<div class="col-lg-3 p-t-20">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
										<label class="mdl-textfield__label"></label> 
									</div>
								</div>
								<div class="col-lg-3 p-t-20">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
										<label class="mdl-textfield__label"></label> 
									</div>
								</div>
								<div class="col-lg-3 p-t-20">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
										<input class="mdl-textfield__input" type="text" value="msc_nursing" id="txtFirstName" name="msc_nursing">
										<label class="mdl-textfield__label">M.SC. NURSING	</label>
									</div>
								</div>
								<div class="col-lg-3 p-t-20">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
										<input class="mdl-textfield__input" type="text" value="" id="txtFirstName" name="msc_nursing_collage">
										<label class="mdl-textfield__label">COLLEGE</label>
									</div>
								</div>
								<div class="col-lg-3 p-t-20">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
										<input class="mdl-textfield__input" type="text" value="" id="txtFirstName" name="msc_nursing_university">
										<label class="mdl-textfield__label">UNIVERSITY</label>
									</div>
								</div>
								<div class="col-lg-3 p-t-20">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
										<input class="mdl-textfield__input" type="text" value="" id="txtFirstName" name="msc_nursing_yop">
										<label class="mdl-textfield__label">YEAR OF PASSING</label> 
									</div>
								</div>
								<div class="col-lg-3 p-t-20">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
										<input class="mdl-textfield__input" type="text" value="" id="txtFirstName" name="msc_nursing_marksobtained">
										<label class="mdl-textfield__label">MARKS OBTAINED	</label> 
									</div>
								</div>
								<div class="col-lg-3 p-t-20">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
										<input class="mdl-textfield__input" type="text" value="" id="txtFirstName" name="msc_nursing_percentage">
										<label class="mdl-textfield__label">PERCENTAGE	</label> 
									</div>
								</div>
								<div class="col-lg-3 p-t-20">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
										<label class="mdl-textfield__label"></label> 
									</div>
								</div>
								<div class="col-lg-3 p-t-20">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
										<label class="mdl-textfield__label"></label> 
									</div>
								</div>
								
								<div class="col-lg-3 p-t-20">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
										<input class="mdl-textfield__input" type="text" value="P.H.D"  id="txtFirstName" name="phd">
										<label class="mdl-textfield__label">P.HD.</label>
									</div>
								</div>
								<div class="col-lg-3 p-t-20">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
										<input class="mdl-textfield__input" type="text" value="" id="txtFirstName" name="phd_collage">
										<label class="mdl-textfield__label">COLLEGE</label>
									</div>
								</div>
								<div class="col-lg-3 p-t-20">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
										<input class="mdl-textfield__input" type="text" value="" id="txtFirstName" name="phd_university">
										<label class="mdl-textfield__label">UNIVERSITY</label>
									</div>
								</div>
								<div class="col-lg-3 p-t-20">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
										<input class="mdl-textfield__input" type="text" value="" id="txtFirstName" name="phd_yop">
										<label class="mdl-textfield__label">YEAR OF PASSING</label> 
									</div>
								</div>
								<div class="col-lg-3 p-t-20">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
										<input class="mdl-textfield__input" type="text" value="" id="txtFirstName" name="phd_marksobtained">
										<label class="mdl-textfield__label">MARKS OBTAINED	</label> 
									</div>
								</div>
								<div class="col-lg-3 p-t-20">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
										<input class="mdl-textfield__input" type="text" value="" id="txtFirstName" name="phd_percentage">
										<label class="mdl-textfield__label">PERCENTAGE	</label> 
									</div>
								</div>
								<div class="col-lg-3 p-t-20">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
										<label class="mdl-textfield__label"></label> 
									</div>
								</div>
								<div class="col-lg-3 p-t-20">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
										<label class="mdl-textfield__label"></label> 
									</div>
								</div>
								<div class="col-lg-3 p-t-20">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
										<input class="mdl-textfield__input" type="text" value="" id="txtFirstName" name="additional_qulification">
										<label class="mdl-textfield__label">ADDITIONAL QUALIFICATION</label> 
									</div>
								</div>
								<div class="col-lg-12 p-t-30">
									<div id="alert_id"></div>
									<div class="row">
										<div id="add_wait" style="display:none;width:69px;height:89px;position:absolute;top:50%;left:50%;padding:2px;">
										<img src='<?php echo base_url(); ?>assets/img/loading.gif' width="64" height="64" />
										<br>Loading..
									</div>
								</div>
								<div class="row" id="add_notes"></div>
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
		<?php } ?>
	
		
		<div class="row">
			<div class="col-sm-12">
				<div class="card-box">
					<div class="card-head">
						<header>DETAILS OF LAST EMPLOYMENT</header>
					</div> 
					<?php 
					if ($this->session->has_userdata('Payment_Info')):
					?>
					
					<div class='alert alert-warning'><p><?php echo $this->session->userdata('Payment_Info');?></p>
				</div>
				<?php endif;?>
				<div class="col-lg-12">
					<table class="table table-hover">
						<tr>
							<th>NAME OF THE COLLEGE/HOSPITAL/COMPANY/INSTITUTE/NURSING HOME</th>
							<th>PRIVATE/ CENTRAL GOVT/STATE GOVT./OTHERS</th>
							<th>DURATION OF EMPLOYMENT</th>
							<th>DESIGNATION</th>
							<th>REASON FOR LEAVING THE PREVIOUS ORGANIZATION</th>
						</tr>
						<!-- <?php foreach ($uploadedHistory as $row): ?>
							<tr>
								<th><?= $row['paid_date']?></th>
								<th><?= $row['amount']?></th>
								<th><?= $row['payment_mode']?></th>
								<th><?= $row['payment_mode']?></th>
								<th><?= $row['payment_mode']?></th>
								<th><a href="<?= base_url($row['proof_file_path'])?>">Download File</a></th> 
							</tr>
							<?php endforeach; ?> -->
					</table>
				</div>
				
				<form method="post" action="<?php echo base_url('')?>/staff/emplyment_details">
				<div id="student_info_form1" class="card-body">
					<div class=' row'>
						<div class='col-lg-4 p-t-20'>
							<div class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width'>
								<label class='mdl-textfield__label' style='top: 0px;'>NAME OF THE COLLEGE/HOSPITAL/COMPANY/INSTITUTE/NURSING HOME</label> 
								<input class='mdl-textfield__input' type='text' name='place_name[]'  required>
							</div>
						</div>
						<div class='col-lg-4 p-t-20'>
							<div class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width'>
								<label class='mdl-textfield__label' style='top: 0px;'> PRIVATE/ CENTRAL GOVT/STATE GOVT./OTHERS</label>
								<input class='mdl-textfield__input' type='text'  name='sector[]'  required>
							</div>
						</div> 
						<div class='col-lg-4 p-t-20'>
							<div class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width'>
								<label class='mdl-textfield__label' style='top: 0px;'>DURATION OF EMPLOYMENT</label>
								<input class='mdl-textfield__input' type='text'  name='duration[]'  required>
							</div>
						</div>
						<div class='col-lg-4 p-t-20'>
							<div class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width'>
								<label class='mdl-textfield__label' style='top: 0px;'> DESIGNATION</label>
								<input class='mdl-textfield__input' type='text'  name='designation[]'  required>
							</div>
						</div>
						<div class='col-lg-4 p-t-20'>
							<div class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width'>
								<label class='mdl-textfield__label' style='top: 0px;'> REASON FOR LEAVING THE PREVIOUS ORGANIZATION</label>
								<input class='mdl-textfield__input' type='text'  name='reason_leaving[]'  required>
							</div>
						</div>
						
						<div class='col-lg-2 p-t-20'>
							<div class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width'>
								<label class='mdl-textfield__label' style='top: 0px;'> Action</label>
								<div class='btn-group' role='group' aria-label='Basic example'>
									<button type='button' class='btn btn-success payhisAdd1'>+</button>
									<button type='button' class='btn btn-danger payhisDel1'>-</button>
								</div>
							</div>
						</div>	
					</div>
				</div>
				<input class="btn btn-primary" type="submit" />
			</form>
		</div>
		
		
		<div class="card-box">
			<div class="card-head">
				<header>PRESENT EMPLOYMENT DETAILS:</header>
			</div> 
			<?php 
			if ($this->session->has_userdata('Payment_Info')):
			?>
			<div class='alert alert-warning'><p><?php echo $this->session->userdata('Payment_Info');?></p></div>
			<?php endif;?>
			<div class="col-lg-12">
				<table class="table table-hover">
					<tr>
						<th>DATE OF JOINING</th>
						<th>DESIGNATION</th>
						<th>TEMPORARY/PERMANENT</th>
						<th>APPOIN TMENT LETTER NO.</th>
						<th>MUHS APPROVAL LETTER NO.</th>
					</tr>
					<!--<?php foreach ($uploadedHistory as $row): ?>
						<tr>
							<th><?= $row['paid_date']?></th>
							<th><?= $row['amount']?></th>
							<th><?= $row['payment_mode']?></th>
							<th><?= $row['payment_mode']?></th>
							<th><?= $row['payment_mode']?></th>
							<th><a href="<?= base_url($row['proof_file_path'])?>">Download File</a></th> 
						</tr>
						<?php endforeach; ?>-->
				</table>
			</div>
			<div id="student_info_form2" class="card-body">
				<div class=' row'>
					<div class='col-lg-4 p-t-20'>
						<div class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width'>
							<label class='mdl-textfield__label' style='top: 0px;'>DATE OF JOINING		</label> 
							<input class='mdl-textfield__input' type='text' name='date[]' value='' required>
						</div>
					</div>
					<div class='col-lg-4 p-t-20'>
						<div class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width'>
							<label class='mdl-textfield__label' style='top: 0px;'> DESIGNATION</label>
							<input class='mdl-textfield__input' type='text'  name='amount[]' value='' required>
						</div>
					</div>
					<div class='col-lg-4 p-t-20'>
						<div class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width'>
							<label class='mdl-textfield__label' style='top: 0px;'>TEMPORARY/PERMANENT </label>
							<input class='mdl-textfield__input' type='text'  name='amount[]' value='' required>
						</div>
					</div>
					<div class='col-lg-4 p-t-20'>
						<div class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width'>
							<label class='mdl-textfield__label' style='top: 0px;'> APPOIN TMENT LETTER NO.</label>
							<input class='mdl-textfield__input' type='text'  name='proof[]' value='' required>
						</div>
					</div>
					<div class='col-lg-4 p-t-20'>
						<div class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width'>
							<label class='mdl-textfield__label' style='top: 0px;'> MUHS APPROVAL LETTER NO.	</label>
							<input class='mdl-textfield__input' type='text'  name='proof[]' value='' required>
						</div>
					</div>
					<div class='col-lg-3 p-t-20'>
						<div class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width'>
							<label class='mdl-textfield__label' style='top: 0px;'> Action</label>
							<div class='btn-group' role='group' aria-label='Basic example'>
								<button type='button' class='btn btn-success payhisAdd2'>+</button>
								<button type='button' class='btn btn-danger payhisDel2'>-</button>
							</div>
						</div>
					</div>	
				</div>
			</div>
			<input class="btn btn-primary" type="submit" />
		</form>
		
	</div>
	<div class="card-box">
		<div class="card-head">
			<header>PROFESSION GROWTH:</header>
		</div> 
		<?php 
		if ($this->session->has_userdata('Payment_Info')):
		?>
		<div class='alert alert-warning'><p><?php echo $this->session->userdata('Payment_Info');?></p></div>
		
		<?php endif;?>
		<div class="col-lg-12">
			<h4>CONFERENCES ATTENDED:		</h4>
			<table class="table table-hover">
				<tr>
					<th>STATE LEVEL</th>
					<th>NATIONAL LEVEL</th>
					<th>INTERNATIONAL</th>
				</tr>
				<!--<?php foreach ($uploadedHistory as $row): ?>
					<tr>
						<th><?= $row['paid_date']?></th>
						<th><?= $row['amount']?></th>
						<th><?= $row['payment_mode']?></th>
						<th><a href="<?= base_url($row['proof_file_path'])?>">Download File</a></th> 
					</tr>
					<?php endforeach ?>-->
				</table>
			</div>
			
			<div id="student_info_form3" class="card-body">
				<div class=' row'>
					<div class='col-lg-3 p-t-20'>
						<div class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width'>
							<label class='mdl-textfield__label' style='top: 0px;'>STATE LEVEL</label> 
							<input class='mdl-textfield__input' type='text' name='date[]' value='' required>
						</div>
					</div>
					<div class='col-lg-3 p-t-20'>
						<div class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width'>
							<label class='mdl-textfield__label' style='top: 0px;'> NATIONAL LEVEL</label>
							<input class='mdl-textfield__input' type='text'  name='amount[]' value='' required>
						</div>
					</div>
					<div class='col-lg-3 p-t-20'>
						<div class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width'>
							<label class='mdl-textfield__label' style='top: 0px;'>INTERNATIONAL </label>
							<input class='mdl-textfield__input' type='text'  name='amount[]' value='' required>
						</div>
					</div>
					<div class='col-lg-3 p-t-20'>
						<div class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width'>
							<label class='mdl-textfield__label' style='top: 0px;'> Action</label>
							<div class='btn-group' role='group' aria-label='Basic example'>
								<button type='button' class='btn btn-success payhisAdd3'>+</button>
								<button type='button' class='btn btn-danger payhisDel3'>-</button>
							</div>
						</div>
					</div>	
				</div>
			</div>
			<input class="btn btn-primary" type="submit" />
		</form>
		<br>
		
		<h4>CONFERENCES CONDUCTED:</h4>
		<table class="table table-hover">
			<tr>
				<th>STATE LEVEL</th>
				<th>NATIONAL LEVEL</th>
				<th>INTERNATIONAL</th>
			</tr>
			<!--<?php foreach ($uploadedHistory as $row): ?>
				<tr>
					<th><?= $row['paid_date']?></th>
					<th><?= $row['amount']?></th>
					<th><?= $row['payment_mode']?></th>
					<th><a href="<?= base_url($row['proof_file_path'])?>">Download File</a></th> 
				</tr>
				<?php endforeach ?>-->
			</table>
			
			<div id="student_info_form4" class="card-body">
				<div class=' row'>
					<div class='col-lg-3 p-t-20'>
						<div class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width'>
							<label class='mdl-textfield__label' style='top: 0px;'>STATE LEVEL</label> 
							<input class='mdl-textfield__input' type='text' name='date[]' value='' required>
						</div>
					</div>
					<div class='col-lg-3 p-t-20'>
						<div class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width'>
							<label class='mdl-textfield__label' style='top: 0px;'> NATIONAL LEVEL</label>
							<input class='mdl-textfield__input' type='text'  name='amount[]' value='' required>
						</div>
					</div>
					<div class='col-lg-3 p-t-20'>
						<div class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width'>
							<label class='mdl-textfield__label' style='top: 0px;'>INTERNATIONAL </label>
							<input class='mdl-textfield__input' type='text'  name='amount[]' value='' required>
						</div>
					</div>
					<div class='col-lg-3 p-t-20'>
						<div class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width'>
							<label class='mdl-textfield__label' style='top: 0px;'> Action</label>
							<div class='btn-group' role='group' aria-label='Basic example'>
								<button type='button' class='btn btn-success payhisAdd4'>+</button>
								<button type='button' class='btn btn-danger payhisDel4'>-</button>
							</div>
						</div>
					</div>	
				</div>
			</div>
			<input class="btn btn-primary" type="submit" />
			<br>
			
			<h4>WORKSHOPS ATTENDED:</h4>
			<table class="table table-hover">
				<tr>
					<th>STATE LEVEL</th>
					<th>NATIONAL LEVEL</th>
					<th>INTERNATIONAL</th>
					
				</tr>
				<!--<?php foreach ($uploadedHistory as $row): ?>
					<tr>
						<th><?= $row['paid_date']?></th>
						<th><?= $row['amount']?></th>
						<th><?= $row['payment_mode']?></th>
						<th><a href="<?= base_url($row['proof_file_path'])?>">Download File</a></th> 
					</tr>
					<?php endforeach ?>-->
				</table>
				
				<div id="student_info_form5" class="card-body">
					<div class=' row'>
						<div class='col-lg-3 p-t-20'>
							<div class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width'>
								<label class='mdl-textfield__label' style='top: 0px;'>STATE LEVEL</label> 
								<input class='mdl-textfield__input' type='text' name='date[]' value='' required>
							</div>
						</div>
						<div class='col-lg-3 p-t-20'>
							<div class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width'>
								<label class='mdl-textfield__label' style='top: 0px;'> NATIONAL LEVEL</label>
								<input class='mdl-textfield__input' type='text'  name='amount[]' value='' required>
							</div>
						</div>
						<div class='col-lg-3 p-t-20'>
							<div class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width'>
								<label class='mdl-textfield__label' style='top: 0px;'>INTERNATIONAL </label>
								<input class='mdl-textfield__input' type='text'  name='amount[]' value='' required>
							</div>
						</div>
						<div class='col-lg-3 p-t-20'>
							<div class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width'>
								<label class='mdl-textfield__label' style='top: 0px;'> Action</label>
								<div class='btn-group' role='group' aria-label='Basic example'>
									<button type='button' class='btn btn-success payhisAdd5'>+</button>
									<button type='button' class='btn btn-danger payhisDel5'>-</button>
								</div>
							</div>
						</div>	
					</div>
				</div>
				<input class="btn btn-primary" type="submit" />
				<br>
				<br>
				
				<h4>WORKSHOP  CONDUCTED:</h4>
				<table class="table table-hover">
					<tr>
						<th>STATE LEVEL</th>
						<th>NATIONAL LEVEL</th>
						<th>INTERNATIONAL</th>
					</tr>
					<!--<?php foreach ($uploadedHistory as $row): ?>
						<tr>
							<th><?= $row['paid_date']?></th>
							<th><?= $row['amount']?></th>
							<th><?= $row['payment_mode']?></th>
							<th><a href="<?= base_url($row['proof_file_path'])?>">Download File</a></th> 
						</tr>
						<?php endforeach ?>-->
					</table>
					
					<div id="student_info_form6" class="card-body">
						<div class=' row'>
							<div class='col-lg-3 p-t-20'>
								<div class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width'>
									<label class='mdl-textfield__label' style='top: 0px;'>STATE LEVEL</label> 
									<input class='mdl-textfield__input' type='text' name='date[]' value='' required>
								</div>
							</div>
							<div class='col-lg-3 p-t-20'>
								<div class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width'> 
									<label class='mdl-textfield__label' style='top: 0px;'> NATIONAL LEVEL</label>
									<input class='mdl-textfield__input' type='text'  name='amount[]' value='' required>
								</div>
							</div>
							<div class='col-lg-3 p-t-20'>
								<div class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width'>
									<label class='mdl-textfield__label' style='top: 0px;'>INTERNATIONAL </label>
									<input class='mdl-textfield__input' type='text'  name='amount[]' value='' required>
								</div>
							</div>
							<div class='col-lg-3 p-t-20'>
								<div class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width'>
									<label class='mdl-textfield__label' style='top: 0px;'> Action</label>
									<div class='btn-group' role='group' aria-label='Basic example'>
										<button type='button' class='btn btn-success payhisAdd6'>+</button>
										<button type='button' class='btn btn-danger payhisDel6'>-</button>
									</div>
								</div>
							</div>	
						</div>
					</div>
					<input class="btn btn-primary" type="submit" />
					
	</div>
				
				
				<div class="card-box">
					<div class="card-head">
						<header>RESEARCHES CONDUCTEED AS -</header>
					</div> 
					<?php 
					if ($this->session->has_userdata('Payment_Info')):
					?>
					
					<div class='alert alert-warning'><p><?php echo $this->session->userdata('Payment_Info');?></p></div>
					<?php endif;?>
					<div class="col-lg-12">
						<table class="table table-hover">
							<tr>
								<th>FIRST AUTHOR</th>
								<th>SECOND AUTHOR</th>
								<th>THIRD AUTHOR</th>
							</tr>
							<!--<?php foreach ($uploadedHistory as $row): ?>
								<tr>
									<th><?= $row['paid_date']?></th>
									<th><?= $row['amount']?></th>
									<th><?= $row['payment_mode']?></th>
									<th><a href="<?= base_url($row['proof_file_path'])?>">Download File</a></th> 
								</tr>
								<?php endforeach; ?>-->
							</table>
						</div>
						
						<div id="student_info_form7" class="card-body">
							<div class=' row'>
								<div class='col-lg-3 p-t-20'>
									<div class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width'>
										<label class='mdl-textfield__label' style='top: 0px;'>FIRST AUTHOR		</label> 
										<input class='mdl-textfield__input' type='text' name='date[]' value='' required>
									</div>
								</div>
								<div class='col-lg-3 p-t-20'>
									<div class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width'>
										<label class='mdl-textfield__label' style='top: 0px;'> SECOND AUTHOR</label>
										<input class='mdl-textfield__input' type='text'  name='amount[]' value='' required>
										
									</div>
								</div>
								<div class='col-lg-3 p-t-20'>
									<div class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width'>
										<label class='mdl-textfield__label' style='top: 0px;'>THIRD AUTHOR</label>
										<input class='mdl-textfield__input' type='text'  name='amount[]' value='' required>
									</div>
								</div>
								<div class='col-lg-3 p-t-20'>
									<div class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width'>
										<label class='mdl-textfield__label' style='top: 0px;'> Action</label>
										<div class='btn-group' role='group' aria-label='Basic example'>
											<button type='button' class='btn btn-success payhisAdd7'>+</button>
											<button type='button' class='btn btn-danger payhisDel7'>-</button>
										</div>
									</div>
								</div>	
							</div>
						</div>
						<input class="btn btn-primary" type="submit" />
						
					</form>
					
				</div>
				<div class="card-box">
					<div class="card-head">
						<header>GUIDED STUDENTS IN RESEARCH AT COLLEGE/ OF OTHER INSTITUTES:</header>
					</div> 
					<?php 
					if ($this->session->has_userdata('Payment_Info')):
					?>
					
					<div class='alert alert-warning'><p><?php echo $this->session->userdata('Payment_Info');?></p></div>
					<?php endif;?>
					<div class="col-lg-12">
						<table class="table table-hover">
							<tr>
								<th>UNDERGRADUATES</th>
								<th>POSTGRADUATE</th>
								<th>PH.D</th>
							</tr>
							<!--<?php foreach ($uploadedHistory as $row): ?>
								<tr>
									<th><?= $row['paid_date']?></th>
									<th><?= $row['amount']?></th>
									<th><?= $row['payment_mode']?></th>
									<th><a href="<?= base_url($row['proof_file_path'])?>">Download File</a></th> 
								</tr>
								<?php endforeach; ?>-->
							</table>
						</div>
						
						<div id="student_info_form8" class="card-body">
							<div class=' row'>
								<div class='col-lg-3 p-t-20'>
									<div class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width'>
										<label class='mdl-textfield__label' style='top: 0px;'>UNDERGRADUATES</label> 
										<input class='mdl-textfield__input' type='text' name='date[]' value='' required>
									</div>
								</div>
								<div class='col-lg-3 p-t-20'>
									<div class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width'>
										<label class='mdl-textfield__label' style='top: 0px;'>POSTGRADUATE</label>
										<input class='mdl-textfield__input' type='text'  name='amount[]' value='' required>
									</div>
								</div>
								<div class='col-lg-3 p-t-20'>
									<div class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width'>
										<label class='mdl-textfield__label' style='top: 0px;'>PH.D</label>
										<input class='mdl-textfield__input' type='text'  name='amount[]' value='' required>
									</div>
								</div>
								<div class='col-lg-3 p-t-20'>
									<div class='mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width'>
										<label class='mdl-textfield__label' style='top: 0px;'> Action</label>
										<div class='btn-group' role='group' aria-label='Basic example'>
											<button type='button' class='btn btn-success payhisAdd8'>+</button>
											<button type='button' class='btn btn-danger payhisDel8'>-</button>
										</div>
									</div>
								</div>	
							</div>
						</div>
						<input class="btn btn-primary" type="submit" />
					</form>
					
				</div>
			</div>
		</div>
	</div>
	
</div>
</div>

<script>
	$(document).on('click', '#btn_add_file_add_notes', function() {
		//alert("Clicked");
		$('#inp_file_add_notes').click();
	});
	
	var add_image_count = 1;
	$(document).on('change', '#inp_file_add_notes', function() {
            $("#add_wait").css("display", "block");

            var formData = new FormData();

            formData.append('file', $('#inp_file_add_notes')[0].files[0]); 

            $.ajax({ 

                url:"<?php echo base_url(); ?>staff/upload_files",

                //base_url() = http://localhost/tutorial/codeigniter

                method:"POST",

                data: formData, 

                contentType: false,  

                cache: false,

                processData:false, 

                dataType:'json',

                success:function(data) { 

                    console.log(data);

                    if(data.success == true) {

                        $("#add_wait").css("display", "none");

                        $('#alert_id').empty();

                        $('#add_notes').append('<div style="padding:10px; " id="add_image_'+add_image_count+'" class="col-md-2"><div class="card"><div class="card-body"><input type="hidden" name="files[]" value="'+data.id+'"><a target="_blank" href="'+data.url+'">File</a></div><div class="card-header"><i style="cursor: pointer;" onclick="deletefile('+add_image_count+')" class="fa fa-trash"></i></div></div></div>');

                        add_image_count++;

                    } else {

                        $('#alert_id').append('<div class="alert alert-danger alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'+data.msg+'</div>');

                    }

                    // $('#uploaded_image').html(data); 

                },

                error: function(err) {

                    // $("#add_wait").css("display", "none");

                    console.log(err);

                }

            });

        });

        

        function deletefile(i) 

        {

            $('#add_image_'+i).remove();

        }

        

        $("#notes_form").submit(function(){

           $.ajax({

                url: "<?php echo base_url('staff/update_profile'); ?>", 

                data: $("#notes_form").serialize(),

                type: "POST", 

                dataType: 'json',

                success: function (data) {

                    console.log(data);

                    if(data.success) {

                        alertify.success(data.msg);

                        setTimeout(function() {

                            window.location.href = '<?php echo base_url(); ?>staff/profile';

                        }, 2000); 

                    } else {

                        alertify.error(data.msg);

                    }

                },

                error:function(e){

                    console.log(e);

                }

            }); 

            return false;

        });

        

        

    </script>
    
    
    <script>
$("#student_info_form").on("click",'.payhisAdd',function(){

$.get("<?php echo base_url('staff/paymentHistoryFormDom'); ?>", function(data, status){

$('#student_info_form').append(data);
});
});
$("#student_info_form").on("click",".payhisDel",function(){
$(this).parent().parent().parent().parent().remove();
})
</script>

 <script>
$("#student_info_form1").on("click",'.payhisAdd1',function(){

$.get("<?php echo base_url('staff/paymentHistoryFormDom1'); ?>", function(data, status){

$('#student_info_form1').append(data);
});
});
$("#student_info_form1").on("click",".payhisDel1",function(){
$(this).parent().parent().parent().parent().remove();
})
</script>


 <script>
$("#student_info_form2").on("click",'.payhisAdd2',function(){

$.get("<?php echo base_url('staff/paymentHistoryFormDom2'); ?>", function(data, status){

$('#student_info_form2').append(data);
});
});
$("#student_info_form2").on("click",".payhisDel2",function(){
$(this).parent().parent().parent().parent().remove();
})
</script>


<script>
$("#student_info_form3").on("click",'.payhisAdd3',function(){

$.get("<?php echo base_url('staff/paymentHistoryFormDom3'); ?>", function(data, status){

$('#student_info_form3').append(data);
});
});
$("#student_info_form3").on("click",".payhisDel3",function(){
$(this).parent().parent().parent().parent().remove();
})
</script>


<script>
$("#student_info_form4").on("click",'.payhisAdd4',function(){

$.get("<?php echo base_url('staff/paymentHistoryFormDom4'); ?>", function(data, status){

$('#student_info_form4').append(data);
});
});
$("#student_info_form4").on("click",".payhisDel4",function(){
$(this).parent().parent().parent().parent().remove();
})
</script>


<script>
$("#student_info_form5").on("click",'.payhisAdd5',function(){

$.get("<?php echo base_url('staff/paymentHistoryFormDom5'); ?>", function(data, status){

$('#student_info_form5').append(data);
});
});
$("#student_info_form5").on("click",".payhisDel5",function(){
$(this).parent().parent().parent().parent().remove();
})
</script>

<script>
$("#student_info_form6").on("click",'.payhisAdd6',function(){

$.get("<?php echo base_url('staff/paymentHistoryFormDom6'); ?>", function(data, status){

$('#student_info_form6').append(data);
});
});
$("#student_info_form6").on("click",".payhisDel6",function(){
$(this).parent().parent().parent().parent().remove();
})
</script> 

<script>
$("#student_info_form7").on("click",'.payhisAdd7',function(){

$.get("<?php echo base_url('staff/paymentHistoryFormDom7'); ?>", function(data, status){

$('#student_info_form7').append(data);
});
});
$("#student_info_form7").on("click",".payhisDel7",function(){
$(this).parent().parent().parent().parent().remove();
})
</script>

<script>
$("#student_info_form8").on("click",'.payhisAdd8',function(){

$.get("<?php echo base_url('staff/paymentHistoryFormDom8'); ?>", function(data, status){

$('#student_info_form8').append(data);
});
});
$("#student_info_form8").on("click",".payhisDel8",function(){
$(this).parent().parent().parent().parent().remove();
})
</script>


