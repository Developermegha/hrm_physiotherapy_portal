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
								<li><a class="parent-item" href="#">Import Bulk</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Import Bulk</li>
							</ol>
						</div>
					</div>
					<form method="post" action="<?php echo base_url()?>admin/import_payroll" enctype="multipart/form-data">
					<div class="row">
						<div class="col-sm-12">
							<div class="card-box">
								<div class="card-head">
									<header>Import Bulk</header>
								</div>
                                
								<div class="card-body row">
								
									
									 <div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="file" id="txtEmail" name="bulk_payroll">
											<label class="mdl-textfield__label">Import</label>
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
		