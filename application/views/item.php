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
		color: color: #3a3a3a;
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

.cart-btn {
	position: static !important;
	transform: translateX(0) !important;
	font-size: 1.3rem !important;
	background-color: #2D473A !important;
	color: whitesmoke !important;
	font-weight: bold !important;
	padding: 10px 20px !important;
	box-shadow: 0 1px 5px rgba(0,0,0,.53);
}
	.cart-btn:hover {
		background-color: #AE860D !important;
	}
.pairings{
	background: rgb(63,48,5);
	background: linear-gradient(283deg, rgba(63,48,5,1) 0%, rgba(105,81,8,1) 35%, rgba(238,187,33,1) 100%);
}
	.pairings h4 {
		color: white;
		text-transform: uppercase;
		font-weight: bold;
	}
	.pairings span {
		color: whitesmoke;
	}
	.pairings .row .col .title-span {
		font-weight:bold;
		font-size: 1.2rem;
	}
	.pair-col {
		cursor: pointer;
		transition: all 0.1s linear;
	}
	.pair-col:hover {
		transform: translate(0px, -5px)
	}
</style>
<body>
		<div class="container-fluid item-container mb-2" style="margin-top: 145px; max-width:1405px">
			<div class="row  row-cols-1 row-cols-md-2 ">
				<div class="col d-flex justify-content-center ">
					<a href=""> <img class="img-thumbnail" style="border:3px solid  #AE860D" src="<?php echo $data->image;?>"/></a>

				</div>
				<div class="col pt-md-5">
					<div class="pt-md-5 title w-100 d-flex flex-column align-items-start">
						<h2 class="bolder"><?php echo $data->title?></h2>
						<h3><?php echo $data->artist?></h3>
					</div>
					<div class="pt-3 bolder price-color">
						<h2>€ <?php echo $data->price?></h2>
					</div>
					<div class="d-flex my-4">
						<button  class=" btn cart-btn big-btn rounded-0" id="<?php echo $data->id;?>" data-butnid="<?php echo $data->id;?>" data-productid="<?php echo $data->id;?>" data-productartist="<?php echo $data->artist;?>"
								 data-producttitle="<?php echo $data->title;?>" data-productprice="<?php echo $data->price;?>" data-productimage="<?php echo $data->image;?>"  value="add to cart" >
							<i class="fa fa-shopping-cart"></i>
							Add to cart
						</button>
					</div>
					<div style="border: 2px solid black !important;" class="border  d-flex flex-column align-items-center justify-content-center py-2 mb-4">
						<p style="font-size: 1.2rem" class="m-0">Purchase now and we’ll ship from our warehouse in 3-5 business days.</p>
					</div>


				</div>

			</div>


		</div>
		<div class="container-fluid pairings mt-5">
			<h4 class="py-5 text-center">Perfect Pairings</h4>

				<div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 justify-content-center">
					<?php if(count($get_by_genre)): ?>
						<?php $i=0; ?>
						<?php foreach (array_reverse($get_by_genre) as $item) { ?>
							<?php if($i<4 && $item->id != $data->id) { ?>
									<div class="pair-col col d-flex flex-column justify-content-center align-items-center mb-5">
										<a href="<?php echo base_url(); ?>index.php/home/item/<?php echo $item->id; ?>">
											<img class="img-thumbnail" style="max-height: 20rem" src="<?php echo $item->image; ?>"/></a>
										<span class="text-uppercase title-span"><?php echo $item->artist; ?></span>
										<span class="text-center" style="font-size: .9rem"><?php echo $item->title; ?></span>
										<span style="font-weight: bold; font-size: 1.1rem"><i>€ <?php echo $item->price; ?></i></span>
									</div>


								<?php $i++; ?>
							<?php } ?>

						<?php } ?>
					<?php endif; ?>


				</div>

		</div>

		<div class="container my-4">
			<div class="row">
				<div class="col row-cols-sm-1 row-cols-md-2 ">
					<div class="d-flex justify-content-center align-items-center">
						<img style="height: 3rem" src="https://cdn.shopify.com/s/files/1/0069/3465/9162/files/colored-record_200x.png?v=1563963072">
					</div>
					<p class="text-center" style="font-weight: bold; font-size:1.1rem">Join the club for more perks.</p>
					<p class="text-center">Vinyl Me, Please members receive our exclusive Records of the Month and special access to other limited titles. Starting at $25/month. </p>

				</div>
				<div class="col ">
					<div class="d-flex justify-content-center align-items-center">
						<img style="height: 3rem" src="https://cdn.shopify.com/s/files/1/0069/3465/9162/files/peace_200x.png?v=1563963246">
					</div>
					<p class="text-center" style="font-weight: bold; font-size:1.1rem">We’ll make it right.</p>
					<p class="text-center">Should the unspeakable happen and you receive a damaged record, we’ll do everything in our power to address it. Learn more about our Damage + Return policy here </p>

				</div>

			</div>
		</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
		<script type="text/javascript">
			baseUrl = '<?php echo base_url(); ?>';

		</script>

		<script src="<?php echo base_url(); ?>asset/js/scrypt.js"></script>
		<script src="<?php echo base_url(); ?>asset/js/jquery-3.3.1.min.js"></script>
		<script src="<?php echo base_url(); ?>asset/js/bootstrap.min.js"></script>
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</body>
</html>
