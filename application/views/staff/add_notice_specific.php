<!DOCTYPE html>

<html lang="en">

<!-- BEGIN HEAD -->

<head>

	<meta charset="utf-8" />

	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta content="width=device-width, initial-scale=1" name="viewport" />

	<meta name="description" content="Responsive Admin Template" />

	<meta name="author" content="SmartUniversity" />

	<title>DMSF University </title>

	<!-- google font -->

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />

	<!-- icons -->

	<link href="<?php echo base_url(); ?>assets/fonts/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />

	<link href="<?php echo base_url(); ?>assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

	<link href="<?php echo base_url(); ?>assets/fonts/material-design-icons/material-icon.css" rel="stylesheet" type="text/css" />

	<!--bootstrap -->

	<link href="<?php echo base_url(); ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

	<!-- Material Design Lite CSS -->

	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/material/material.min.css">

	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/material_style.css">

	<!-- Theme Styles -->

	<link href="<?php echo base_url(); ?>assets/css/theme/light/theme_style.css" rel="stylesheet" id="rt_style_components" type="text/css" />

	<link href="<?php echo base_url(); ?>assets/css/theme/light/style.css" rel="stylesheet" type="text/css" />

	<link href="<?php echo base_url(); ?>assets/css/plugins.min.css" rel="stylesheet" type="text/css" />

	<link href="<?php echo base_url(); ?>assets/css/responsive.css" rel="stylesheet" type="text/css" />

	<link href="<?php echo base_url(); ?>assets/css/theme/light/theme-color.css" rel="stylesheet" type="text/css" />

	<!-- dropzone -->

	<link href="<?php echo base_url(); ?>assets/plugins/dropzone/dropzone.css" rel="stylesheet" media="screen">

	<!-- Date Time item CSS -->

	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/flatpicker/css/flatpickr.min.css" />

	<!-- favicon -->

	<link rel="shortcut icon" href="http://radixtouch.in/templates/admin/smart/source/assets/img/favicon.ico" />

    <!-- CSS -->

    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>

    <!-- Default theme -->

    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>

    <!-- Semantic UI theme -->

    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>

    <!-- Bootstrap theme -->

    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>

</head>

<!-- END HEAD -->



<body

	class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-indigo">

	<div class="page-wrapper">

		<!-- start header -->

        <?php $this->load->view('staff/header'); ?>

		<!-- end header -->

		<!-- start color quick setting -->

		<!-- end color quick setting -->

		<!-- start page container -->

		<div class="page-container">

			<!-- start sidebar menu -->

            <?php $this->load->view('staff/sidebar'); ?>

			<!-- end sidebar menu -->

			<!-- start page content -->

			<div class="page-content-wrapper">

				<div class="page-content">

					<div class="page-bar">

						<div class="page-title-breadcrumb">

							<div class=" pull-left">

								<div class="page-title">Add Specific Notice</div>

							</div>

							<ol class="breadcrumb page-breadcrumb pull-right">

								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"

										href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>

								</li>

								<li><a class="parent-item" href="#">Notice</a>&nbsp;<i class="fa fa-angle-right"></i>

								</li>

								<li class="active">Add Notice</li>

							</ol>

						</div>

					</div>

					<div class="row">

						<div class="col-sm-12">

							<div class="card-box">

                                <form id="notes_form">

                                    <div class="card-body row">

                                        

                                            <div class="col-lg-6 p-t-20">

                                        <span>BATCH</span>

										<select name="batch" class="form-control" style="width:200;">   

                                            <option disabled selected>--Select Batch--</option>

                                            <option>2020 </option>

                                            <option>2019</option>

                                            <option>2018</option>

                                            <option>2017</option>

                                        </select>

									</div>

									<div  class="col-lg-6 p-t-20">

                                        <span>SECTION</span>

										<select name="section" class="form-control" style="width:200;">

                                            <option disabled selected>--Select Section--</option>

                                            <option>A </option>

                                            <option>B</option>

                                            <option>C</option>

                                            <option>D</option>

											<option>E</option>

											<option>F</option>

                                        </select>

									</div>

									<div class="col-lg-6 p-t-20">

                                            <span>CONTENT</span>

                                            <textarea name="content" class="form-control"> 

                                            </textarea>
											

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

		<!-- start footer -->

		<div class="page-footer">

			<div class="page-footer-inner"> 2020 &copy; DMSF University

			</div>

			<div class="scroll-to-top">

				<i class="icon-arrow-up"></i>

			</div>

		</div>

		<!-- end footer -->

	</div>

	<!-- start js include path -->

	<script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>

	<script src="<?php echo base_url(); ?>assets/plugins/popper/popper.js"></script>

	<script src="<?php echo base_url(); ?>assets/plugins/jquery-blockui/jquery.blockui.min.js"></script>

	<script src="<?php echo base_url(); ?>assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

	<!-- bootstrap -->

	<script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>

	<!-- Common js-->

	<script src="<?php echo base_url(); ?>assets/js/app.js"></script>

	<script src="<?php echo base_url(); ?>assets/js/layout.js"></script>

	<script src="<?php echo base_url(); ?>assets/js/theme-color.js"></script>

	<!-- Material -->

	<script src="<?php echo base_url(); ?>assets/plugins/material/material.min.js"></script>

	<script src="<?php echo base_url(); ?>assets/js/pages/material-select/getmdl-select.js"></script>

	<script src="<?php echo base_url(); ?>assets/plugins/flatpicker/js/flatpicker.min.js"></script>

	<script src="<?php echo base_url(); ?>assets/js/pages/date-time/date-time.init.js"></script>

	<!-- dropzone -->

	<script src="<?php echo base_url(); ?>assets/plugins/dropzone/dropzone.js"></script>

	<script src="<?php echo base_url(); ?>assets/plugins/dropzone/dropzone-call.js"></script>

    <!-- Alert -->

    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

	<!-- end js include path -->

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

                url:"<?php echo base_url(); ?>admin/upload_files",

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

                url: "<?php echo base_url('staff/addNoticeSpecific'); ?>", 

                data: $("#notes_form").serialize(),

                type: "POST", 

                dataType: 'json',

                success: function (data) {

                    console.log(data);

                    if(data.success) {

                        alertify.success(data.msg);

                        setTimeout(function() {

                            window.location.href = '<?php echo base_url(); ?>staff/all_notice_specific';

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

</body>





</html>