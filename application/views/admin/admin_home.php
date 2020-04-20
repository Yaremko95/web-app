<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


	<!-- Bootstrap CSS -->
	<link href=" <?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">




	<title>Registration Page</title>
</head>
<style>
	.table{
		width: 50%;
	}
	textarea, input, select{
		width: 100%;

	}

	.add-product-table tr, td {
		padding: 0;
		margin: 0;
	}
	.add-product-table input, select, textarea {

		margin-bottom: 10px ;
		margin-top: -10px;
	}
	.add-product-table select {
		height: 30px;
	}


</style>
<body>

<div class="container">


	<div class="back-to-shop">
		<a href="<?php echo base_url(); ?>index.php/home/products"><< Back to shop</a>
		<a href="<?php echo base_url(); ?>index.php/auth/logout">Log out</a>
	</div>
</div>
</body>
</html>
