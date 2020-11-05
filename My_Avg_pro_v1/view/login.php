<!DOCTYPE html>
<html lang="en">
<head>
	<title>Avanger_login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/png" href="data/favicon.ico"/>

<!--CSSs -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="data/cap.css">
<link rel="stylesheet" type="text/css" href="data/util.css">
<link rel="stylesheet" type="text/css" href="data/main.css">
<link rel="stylesheet" type="text/css" href="data/icon-font.min.css">



<style type="text/css">
.shado{
box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); /*add by google-D */
}

</style>
</head>
<body>
	<div class="limiter">
		<div class="container-login100 ">
			<div class="wrap-login100 shado">
				<div class="login100-form-title" style="background-image: url(data/bg-01.jpg);">
					<span class="login100-form-title-1">
						Sign In
					</span>
				</div>

				<form class="login100-form validate-form" action="../controller/controller.php" method="post" onsubmit="return checkform(this);">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="uname" placeholder="Enter username">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="pass" placeholder="Enter password">
						<span class="focus-input100"></span>
					</div>

					<div class="flex-sb-m w-full p-b-30">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>

						<div>
							<a href="#" class="txt1">
								Forgot Password?
							</a>
						</div>
					</div>
					
					<div class="flex-sb-m w-full p-b-30">
							<div class="capbox">
							<div id="CaptchaDiv"></div>
							<div class="capbox-inner">
							Type the number:<br>
							<input type="hidden" id="txtCaptcha">
							<input type="text" name="CaptchaInput" id="CaptchaInput" size="15">
							</div>
							</div>
					</div>

					<div class="container-login100-form-btn">
						<input  type="submit" name="button" value="login" class="login100-form-btn">
					</div>
					<span style="color: #ff0000;font-family: Poppins-Regular; padding-top: 5px;">
						<?php  
							//reset session
							 session_start(); 
						     if ( $_SESSION["error"] == " ") {
						         echo "";
						     }else{
						        echo $_SESSION["error"];
						     }
						    ?>
					</span>
				</form>

			</div>

		</div>
	</div>
	

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="data/cap.js"></script>
<script src="data/main.js"></script>

<?php
//reset session
session_unset();
session_destroy();

session_start(); 
$_SESSION['error'] = " ";
?>
</body>
</html>
