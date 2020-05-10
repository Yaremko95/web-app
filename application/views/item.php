<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/home.css" type="text/css">
	<title>Hello, world!</title>
</head>
<style>
	.item-container {
		color: color: #3a3a3a;;
	}
	.item-container .row .col:nth-child(2) div:first-of-type {
		border-bottom: 5px solid  #adb5bd;
	}
	.price-color{
		color:  #AE860D;;
	}
.item-container h3{
	text-transform: uppercase;


}


</style>
<body>
		<div class="container-fluid item-container" style="margin-top: 145px; max-width:1405px">
			<div class="row  row-cols-1 row-cols-md-2 ">
				<div class="col d-flex justify-content-center ">

						<img class="img-thumbnail" src="<?php echo base_url("uploads/".$data->image) ?>"/>


				</div>
				<div class="col pt-md-5">
					<div class="pt-md-5 title w-100 d-flex flex-column align-items-start">
						<h2 class="bolder"><?php echo $data->title?></h2>
						<h3><?php echo $data->artist?></h3>
					</div>
					<div class="pt-3 bolder price-color">
						<h2>€ <?php echo $data->price?></h2>
					</div>

				</div>

			</div>

		</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
