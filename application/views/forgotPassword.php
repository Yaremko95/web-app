
<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/user_style.css" type="text/css">





	<title>Login Page</title>
</head>
<style>
	.email-section {
		width: 40%;
	}
</style>
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
	<div class="email-section">
		<h3>Forgot your password?</h3>
		<?php  $message = $this->session->flashdata("message")?>
		<div class="alert alert-<?php echo $message ? 'warning' : 'info' ?> alert-dismissible" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<?php echo $message ? $message : 'Enter your email' ?>
		</div>
		<?php echo form_open(); ?>
		<?php $error =form_error("email", "<p class='text-danger'>", '</p>');?>
		<div class="form-group <?php echo $error ? 'has-error' : '' ?>">
			<label for="email">Please, enter your email </label>
			<input class="email-control" type="email" value="<?php echo set_value("email") ?>" name="email"/>
			<?php echo $error?>
		</div>
		<input class="btn" type="submit" value="Send" name="submit"/>
		<?php form_close()?>
	</div>


</div>
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>
