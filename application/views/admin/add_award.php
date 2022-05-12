<div class="page-content-wrapper">

	<div class="page-content">

		<div class="page-bar">

			<div class="page-title-breadcrumb">

				<div class=" pull-left">

					<div class="page-title">Add Award</div>

				</div>

				<ol class="breadcrumb page-breadcrumb pull-right">

					<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"

							href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>

					</li>

					
					<li class="active">Add Award</li>

				</ol>

			</div>

		</div>

		<div class="row">

			<div class="col-sm-12">

				<div class="card-box">

					<form method="post" action ="<?php echo base_url('admin/saveaward')  ?>">

						<div class="card-body row">
                            <div class="col-lg-6 p-t-20 form-group">
                                <label for="exampleFormControlTextarea1">Recognize</label>
                                <textarea class="form-control" id="recognise" name="recognise" rows="3"></textarea>
                            </div>
                            <div class="col-lg-6 p-t-20 form-group">
                                <label for="exampleFormControlTextarea1">Achievement</label>
                                <textarea class="form-control" id="achievement" name="achievement" rows="3"></textarea>
                            </div>
                            <div class="col-lg-6 p-t-20">
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width is-upgraded" >
                                    <input class="mdl-textfield__input" type="text" id="prize" name="prize">
                                    <label class="mdl-textfield__label">Prize</label>
                                </div>
                            </div>
                        
                            <div class="col-lg-6 p-t-20">
                            <span>Staff </span>
                            <select name="staffid" class="form-control" style="width:200;">   
                            <option disabled="" selected="">--Select Staff--</option>
                                    <?php foreach ($allstaff as $key => $value) { ?>
                                        <option value="<?php echo $value->regno; ?>"><?php echo $value->firstname;?></option>
                                    <?php }?>
                                    
                                </select>
                            
                        </div>
                        
                            <div class="col-lg-12 p-t-20 text-center">
                                <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-pink">Submit</button>

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

</div>

	