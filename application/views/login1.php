<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/user_style.css" type="text/css">




	<title>Login Page</title>
</head>





<body>
<div class="container">
			<header>
				<div class="logo">
					<a href="<?php echo base_url(); ?>index.php/home/products"><img src="<?= asset_url('img/logo.png')?>" alt=""></a>
				</div>
			</header>
			<nav class="nav-bar">
				<ul class="header-nav">
					<li class="active"><a  href="#">Login/Register</a></li>
					<li><a href="#">Delivery address</a></li>
					<li><a href="#">Order history</a></li>
				</ul>
			</nav>
			<div class="auth-section">
					<div class="signup">
						<h3>Existing customer</h3>
							<?php  $error = $this->session->flashdata("error")?>

							<div class="alert alert-<?php echo $error ? 'warning' : 'info' ?> alert-dismissible" role="alert">
								<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>

								<?php echo $error ? $error : 'Enter your username and password' ?>
							</div>
							<?php echo form_open(); ?>
							<?php $error =form_error("email", "<p class='text-danger'>", '</p>');?>
							<div class="form-group <?php echo $error ? 'has-error' : '' ?>">
								<label for="email">Email</label>
								<input type="email" value="<?php echo set_value("email") ?>" name="email"/>
								<div class="input-error"> <?php echo $error; ?> </div>
							</div>
							<?php $error =form_error("password", "<p class='text-danger'>", '</p>');?>
							<div class="form-group">
								<label for="password">Password</label>
								<input type="password"   name="password"/>
								<div class="input-error"> <?php echo $error; ?> </div>
							</div>
							<input class="btn" type="submit" value="Login" name="submit"/>
							<a href="<?php echo base_url(); ?>index.php/auth/forgotPassword" class="forgot">Forgot your password?</a>


							</form>
					</div>
				<div class="reg">
					<h3>New Customer</h3>
					<p>Click Next to provide us with your details</p>
					<a href="<?php echo base_url(); ?>index.php/auth/register"><button class="btn">Next</button></a>
		</div>
	</div>



</body>
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>

</html>








