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
					<form id="adminfrm" method="POST" > 
						<div class="card-head">
							<header>Profile Information</header> 
							<button id="panel-button" class="mdl-button mdl-js-button mdl-button--icon pull-right" data-upgraded=",MaterialButton"><i class="material-icons">more_vert</i></button>
							<ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" data-mdl-for="panel-button">
								<li class="mdl-menu__item"><i class="material-icons">assistant_photo</i>Action</li>
								<li class="mdl-menu__item"><i class="material-icons">print</i>Another action</li>
								<li class="mdl-menu__item"><i class="material-icons">favorite</i>Something else here</li>
							</ul>
						</div>
						
						<div class="card-body row">
							<div class="col-lg-6 p-t-20">
								<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
									<input class="mdl-textfield__input" type="text" value="<?php echo $profile->username;   ?>" id="name" name="name">
									<label class="mdl-textfield__label">User Name</label>
								</div>
							</div>
							<div class="col-lg-6 p-t-20">
								<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
									<input class="mdl-textfield__input" type="text" value="<?php echo $profile->email;   ?>" id="email" name="email">
									<label class="mdl-textfield__label">Email</label>
								</div>
							</div>
							<div class="col-lg-6 p-t-20">
								<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
									<input class="mdl-textfield__input" type="text" value="<?php echo $profile->phone_no;  ?>" id="phone" name="phone">
									<label class="mdl-textfield__label">Phone</label>
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
							<button type="submit" name="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-pink">Update</button>
							<button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-default">Cancel</button>
						</div>
					</div>
					
				</form>
			</div>
		</div>
	</div>
	
</div>
<script>
	$(document).ready(function() {
		$('.nav-item').removeClass('active open');
		if(window.location.pathname == '/hrm_physiotherapy_portal/admin/profile'){
			$(this).find('[href*="'+window.location.pathname+'"]').closest('.nav-item').addClass('active open');
		}
	
	

				
	});
	$("#adminfrm").submit(function(){
				$.ajax({
					url: "<?php echo base_url('admin/updateProfile'); ?>", 
					data: $("#adminfrm").serialize(),
					type: "POST", 
					dataType: 'json',
					success: function (response) {
						var data1= JSON.parse(response);
						
						if(data1.success) {
							alertify.success(data.msg);
							setTimeout(function() {
								window.location.href = '<?php 
							echo base_url(); ?>admin/profile';
							 }, 2000); 
						} else {
							alertify.error(data1.msg);
						}
					},
					error:function(e){
						console.log(e);
					}
				}); 
		});



</script>