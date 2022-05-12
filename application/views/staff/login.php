<!DOCTYPE html>
<html>


<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<meta name="description" content="Responsive Admin Template" />
	<meta name="author" content="RedstarHospital" />
	<title>Smart University | Bootstrap Responsive Admin Template</title>
	<!-- google font -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet"
		type="text/css" />
	<!-- icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="<?php echo base_url(); ?>assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/iconic/css/material-design-iconic-font.min.css">
	<!-- bootstrap -->
	<link href="<?php echo base_url(); ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<!-- style -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/pages/extra_pages.css">
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

<body>
	<div class="limiter">
		<div class="container-login100 page-background">
			<div class="wrap-login100">
				<form class="login100-form validate-form" id="login_form">
					<span class="login100-form-logo">
						<img alt="" src="<?php echo base_url(); ?>assets/img/logo-2.png">
					</span>
					<span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>
					<div class="wrap-input100 validate-input" data-validate="Enter username">
						<input class="input100" type="text" name="username" placeholder="Username">
						<!--<span class="focus-input100" data-placeholder="&#xf2c0;"></span>-->
					</div>
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<!--<span class="focus-input100" data-placeholder="&#xf191;"></span>-->
					</div>
					<!--<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label>
					</div>-->
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>
					<!--<div class="text-center p-t-30">
						<a class="txt1" href="forgot_password.html">
							Forgot Password?
						</a>
					</div>-->
				</form>
			</div>
		</div>
	</div>
	<!-- start js include path -->
	<script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
	<!-- bootstrap -->
	<script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/pages/extra-pages/pages.js"></script>
    <!-- Alert -->
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
	<!-- end js include path -->
    <script>
       $("#login_form").submit(function(){
           $.ajax({
                url: "<?php echo base_url('staff/staff_login'); ?>", 
                data: $("#login_form").serialize(),
                type: "POST", 
                dataType: 'json',
                success: function (data) {
                    if(data.success) {
                        alertify.success('Login successfull');
                        setTimeout(function() {
                            window.location.href = '<?php echo base_url(); ?>staff';
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