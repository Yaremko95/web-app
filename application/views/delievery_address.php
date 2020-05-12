
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
<style>
	.update-form {
		width: 43%;


	}
	.alert-m {
		width: 43%;
	}

	.update-form h3 {
		font-weight: bold;
	}
	.password-update h3 {
		font-weight: bold;
	}
	.password-update {
		border-top: 1px solid #ccc;

	}
	.password-update h3 {
		padding-top: 30px;
	}
	.password-update .button{
		float: right;
	}


	.update-form .form-group  input {
		width: 70%;
		font-size: 1.1em;
		line-height: 1.6;
		padding: .1em .2em;
		border: 1px solid #ccc;
		background: #fdfcfc;
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
			<li class="active"><a  href="<?php echo base_url(); ?>index.php/user/user_profile">Your details</a></li>
			<li><a href="#">Delivery address</a></li>
			<li><a href="#">Order history</a></li>
		</ul>
	</nav>
	<div class="back-to-shop">
		<a href="<?php echo base_url(); ?>index.php/home/products"><< Back to shop</a>
		<a href="<?php echo base_url(); ?>index.php/auth/logout">Log out</a>
	</div>

	<div class="update-form">
		<h3>Delivery address</h3>
		<?php  $d_message = $this->session->flashdata("d_message")?>
		<?php echo $d_message; ?>
		<?php echo form_open('user/delivery_address'); ?>

		<table>
			<tbody>
			<tr>
				<td>
					<label for="country">Country</label>
				</td>
				<?php $error =form_error("country", "<small class='text-danger'>", '</small>');?>
				<td> <input  name="country" id="country" type="text" value="<?php echo  $this->session->userdata('country'); ?>"/>
					<?php echo $error; ?>
				</td>
			</tr>
			<tr>
				<td>
					<label for="city">City</label>
				</td>
				<?php $error =form_error("city", "<small class='text-danger'>", '</small>');?>
				<td> <input  name="city" id="city" type="text" value="<?php echo  $this->session->userdata('city'); ?>"/>
					<?php echo $error; ?>
				</td>
			</tr>
			<tr>
				<td>
					<label for="street">Street</label>
				</td>
				<?php $error =form_error("street", "<small class='text-danger'>", '</small>');?>
				<td> <input  name="street" id="street" type="text" value="<?php echo  $this->session->userdata('street'); ?>"/>
					<?php echo $error; ?>
				</td>
			</tr>
			<tr>
				<td>
					<label for="building">Building</label>
				</td>
				<?php $error =form_error("building", "<small class='text-danger'>", '</small>');?>
				<td> <input  name="building" id="building" type="text" value="<?php echo  $this->session->userdata('building'); ?>"/>
					<?php echo $error; ?>
				</td>
			</tr>
			<tr>
				<td>
					<label for="zip">ZIP</label>
				</td>
				<?php $error =form_error("zip", "<small class='text-danger'>", '</small>');?>
				<td> <input  name="zip" id="zip" type="text" value="<?php echo  $this->session->userdata('zip'); ?>"/>
					<?php echo $error; ?>
				</td>
			</tr>

			<tr>
				<td>
					<label for="phone">Phone</label>
				</td>
				<?php $error =form_error("phone", "<small class='text-danger'>", '</small>');?>
				<td> <input  name="phone" id="phone" type="text" value="<?php echo  $this->session->userdata('phone'); ?>"/>
					<?php echo $error; ?>
				</td>
			</tr>

			</tbody>
		</table>
	</div>
	<div class="update-button">
		<button class="button " type="submit" >Update</button>
	</div>

</form>



</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
</body>

</html>
