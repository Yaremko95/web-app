
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
			<li class=""><a  href="<?php echo base_url(); ?>index.php/auth/login">Login</a> <a href="#">/Register</a></li>
			<li><a href="#">Delivery address</a></li>
			<li><a href="#">Order history</a></li>
		</ul>
	</nav>
	<div class="password-section">
		<h3>Change  your password?</h3>
		<h5><?php echo $this->session->userdata('reset_email') ?></h5>

		<?php  $message = $this->session->flashdata("reset_message")?>
		<div class="alert alert-<?php echo $message ? 'warning' : 'info' ?> alert-dismissible" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<?php echo $message ? $message : 'Please, enter and confirm new password' ?>
		</div>
		<form method="post" action="<?php base_url('index.php/auth/changePassword'); ?>">
		<?php $error =form_error("new_password", "<p class='text-danger'>", '</p>');?>
		<div class="form-group <?php echo $error ? 'has-error' : '' ?>">
			<label for="new_password">New password</label>
			<input class="password-control" type="password" name="new_password"/>
			<?php echo $error?>
		</div>
		<?php $error =form_error("new_password2", "<p class='text-danger'>", '</p>');?>
		<div class="form-group <?php echo $error ? 'has-error' : '' ?>">
			<label for="new_password2">Confirm password</label>
			<input class="password-control" type="password" name="new_password2"/>
			<?php echo $error?>
		</div>
		<input class="btn" type="submit" value="Reset" name="submit"/>
		</form>

	</div>
</div>
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>

