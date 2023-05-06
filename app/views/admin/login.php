
<!------ Include the above in your HEAD tag ---------->

<?php 
//require_once 'app/models/Captcha.php';
$character  = CAPTCHA_STR;
$chalength =  CAPTCHA_LEN;
$captchas =  $this->model('Captcha');
$captcha = new $captchas($chalength,$character);

$imageData = $captcha->generateCaptcha();

function showLoginForm($error = '') {
	//     // display error message if provided
		if (!empty($error)) {
		   echo '<p class="error">' . $error . '</p>';
		 }    
	   
	  }
?>


<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
   <!--Made with love by Mutiullah Samim -->
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="login.css?v11">
</head>
<body>
	
<div class="container p-5">

	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Sign In</h3>
				<div class="d-flex justify-content-end social_icon">
					<span><i class="fab fa-facebook-square"></i></span>
					<span><i class="fab fa-google-plus-square"></i></span>
					<span><i class="fab fa-twitter-square"></i></span>
				</div>
			</div>
			<div class="card-body">
			<?php 	 if(isset($data['admin'])){ showLoginForm($data['admin']['msg']);} ?>
				<form method="post" action="admin/index.php">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="username" name="username" id="username">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="password" name="password" id="password">
					</div>

                    <div class="input-group form-group" >
					<div class="input-group-prepend">

					<span class="input-group-text"><i class="fas fa-key"></i></span>
					</div>
						
					<!-- <label for="captcha">CAPTCHA:</label> -->
                        <input class="input-group-text" class="form-control"  type="text" id="captcha" name="captcha" placeholder="captcha">
		              <?php echo '<img src="data:image/png;base64,' . base64_encode($imageData) . '">';?>
					</div>


					<div class="row align-items-center remember">
						<input type="checkbox">Remember Me
					</div>
					<div class="form-group">
						<input type="submit" name="login" value="Login" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Don't have an account?<a href="#">Sign Up</a>
				</div>
				<div class="d-flex justify-content-center">
					<a href="#">Forgot your password?</a>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</html>