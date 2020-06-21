<html>
<head>
	<title>Rencara Register</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="ct/lg/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ct/lg/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ct/lg/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ct/lg/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ct/lg/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="ct/lg/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ct/lg/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ct/lg/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="ct/lg/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ct/lg/css/util.css">
	<link rel="stylesheet" type="text/css" href="ct/lg/css/main.css">
	<script src="ct/vendor/jquery/jquery.min.js"></script>
<!--===============================================================================================-->
</head>
<body>
<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
				<form class="login100-form validate-form flex-sb flex-w" action="<?php echo base_url('Regven/add'); ?>" method="post" enctype="multipart/form-data">
					<span class="login100-form-title p-b-53">
						<img style="width:50%;"src="https://store.rencara.com/ct/image/rcr2.png">
					</span>
				
										
					<div class="p-t-31 p-b-9"><span class="txt1">Username</span></div>
					<div class="wrap-input100" data-validate = "Username is required">
					<input class="input100" id="name" required type="text" name="u_v" onchange="checker()">
					<span class="focus-input100"></span>
					<input class="input100" type="hidden" name="idc" >
					<!--<input class="input100" type="hidden" name="id" >-->
					
					<script>
					function checker()
					{
					var x = document.getElementById("name");
					var iframe = document.getElementById('3');
					var y = "https://store.rencara.com/Regven/readu/";
					iframe.setAttribute('src',"https://store.rencara.com/Regven/readu/"+x.value);
					}
					</script>
					
					</div><iframe id ="3" height="20px" frameborder="0" scrolling="no" src=""></iframe>
					<div class="clearfix col-md-12"></div>
					
					<div class="p-t-31 p-b-9"><span class="txt1">Email</span></div>
					<div class="wrap-input100 validate-input" data-validate = "email is required">
					<input class="input100" type="email" required name="contact" >
					<span class="focus-input100"></span>
					</div>
					<div class="p-t-31 p-b-9"><span class="txt1">Address</span></div>
					<div class="wrap-input100 validate-input" data-validate = "Address is required">
					<input class="input100" type="text" name="alamat" >
					<span class="focus-input100"></span>
					</div>
					<div class="p-t-31 p-b-9"><span class="txt1">phone</span></div>
					<div class="wrap-input100" >
					<input class="input100" type="text" name="phone" maxlength="14">
					<span class="focus-input100"></span>
					</div>
					
					<div class="p-t-13 p-b-9"><span class="txt1">Password</span></div>
					<div class="wrap-input100 validate-input" data-validate = "Password is required">
					<input class="input100" type="password" name="p_v" >
					<span class="focus-input100"></span>
					</div>
					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn" type="submit" value="Login">
							Sign Up
						</button>
					</div>

					<div class="w-full text-center p-t-55">
						<span class="txt2">
							Already member ?
						</span>

						<a href="login" class="txt2 bo1">
							login 
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="ct/lg/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="ct/lg/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="ct/lg/vendor/bootstrap/js/popper.js"></script>
	<script src="ct/lg/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="ct/lg/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="ct/lg/vendor/daterangepicker/moment.min.js"></script>
	<script src="ct/lg/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="ct/lg/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="ct/lg/js/main.js"></script>

</body>
</html>