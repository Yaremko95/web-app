<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link href=" <?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
	<link href=" <?php echo base_url();?>asset/css/register_style.css" rel="stylesheet">


	<title>Registration Page</title>
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
			<li class="active"><a  href="<?php echo base_url(); ?>index.php/auth/login">Login</a> <a href="#">/Register</a></li>
			<li><a href="#">Delivery address</a></li>
			<li><a href="#">Order history</a></li>
		</ul>
	</nav>

	<div class="back-to-shop">
		<a href="<?php echo base_url(); ?>index.php/home/products"><< Back to shop</a>
		<a href="<?php echo base_url(); ?>index.php/auth/login">Log in</a>
	</div>

	<div class="welcome-message">
		<h3> Check your email to activate your account</h3>

		<p>To complete the process please check your email for a validation request. Within the email you will find a link which you must click in order to activate your account.</p>

		<p>	If the email doesn't appear shortly, please be sure to check your spam / junk mail folder. Some anti-spam filters modify the email, so first copy any spam message to your inbox before clicking the link.</p>



	</div>

</div>
</body>
</html>
