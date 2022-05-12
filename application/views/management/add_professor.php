			<!-- start page content -->
			<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Add Professor</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="#">Professor</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Add Professor</li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="card-box">
								<div class="card-head">
									<header>Basic Information</header>
								</div>
                                <form id="add_prof_form">
								<div class="card-body row">
									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" id="txtFirstName" name="prof_name">
											<label class="mdl-textfield__label">Professor Name</label>
										</div>
									</div>
                                    <div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" id="txtEmail" name="prof_email">
											<label class="mdl-textfield__label">Professor Email</label>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" id="txtmobile" name="prof_mobile">
											<label class="mdl-textfield__label">Professor Mobile</label>
										</div>
									</div>
								
									<div class="col-lg-12 p-t-20 text-center">
										<button type="submit"
											class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-pink">Submit</button>
										<button type="button"
											class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-default">Cancel</button>
									</div>
								</div>
                                </form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end page content -->
			<!-- start chat sidebar -->
			<!-- end chat sidebar -->
		</div>
		<!-- end page container -->
	<script>
        $("#add_prof_form").submit(function(){
           $.ajax({
                url: "<?php echo base_url('admin/add_prof_insert'); ?>", 
                data: $("#add_prof_form").serialize(),
                type: "POST", 
                dataType: 'json',
                success: function (data) {
                    if(data.success) {
                        alertify.success(data.msg);
                        setTimeout(function() {
                            window.location.href = '<?php echo base_url(); ?>admin/all_professors';
                        }, 2000);                        
                    } else {
                        alertify.success(data.msg);
                    }
                },
                error:function(e){
                    console.log(e);
                }
            }); 
            return false;
        });
    </script>
