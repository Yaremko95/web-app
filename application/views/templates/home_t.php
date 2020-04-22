<!DOCTYPE html>
<html lang="zxx">

<head>
	<meta charset="UTF-8">

	<title>Retro Record Home</title>




	<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/home.css" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<body>
		<div class="head-offer">
			<div class="offer-list">
				<ul class="navigation offer">
					<li id="offer"><a href="" class="">
							<h4>Enjoy 10% off first order</h4>
							<p>Join our Mailing List</p>
						</a>
					</li>
					<li id="offer">
						<a href="" class="">
							<h4>We offer FREE UK RETURNS</h4>
							<p>Click here for more info</p>
						</a>
					</li>
					<li>
						<a href="" class="">
							<h4>EXCLUSIVES</h4>
							<p>SHOP NOW</p>
						</a>
					</li>
				</ul>
			</div>
		</div>



<!-- Header Info End -->
<!-- Header End -->
		<div class="new-function">

		</div>

<div class="carousel-section">
	<div id="carousel" class="carousel slide" data-ride="carousel" data-interval="2000">
		<ol class="carousel-indicators">
			<li data-target="#carousel" data-slide-to="0" class="active"></li>
			<li data-target="#carousel" data-slide-to="1"></li>
			<li data-target="#carousel" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class=" item carousel-item active">
				<a href="<?php echo base_url(); ?>index.php/items/item1" >
					<img class="d-block w-100" src="<?= asset_url('img/sl-1.jpg')?>" alt="First slide">
				</a>
			</div>
			<div class="item carousel-item">
				<img class="d-block w-100" src="<?= asset_url('img/sl-2.jpg')?>" alt="Second slide">
			</div>
			<div class="item carousel-item">
				<img class="d-block w-100" src="<?= asset_url('img/sl-3.jpg')?>" alt="Third slide">
			</div>
		</div>
		<a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</div>



	<div class="h_sec">
		<h3 class="section-header"><span> RECOMMENDED PRE-ORDERS</span></h3>
	</div>


		<div class="shop-items">
			<?php if(count($data)): ?>
				<?php foreach ($data as $item) { ?>
					<div class="shop-item">
						<div class="image">
						<a href="<?php echo base_url(); ?>index.php/items/item1">
								<img class="shop-item-image" src="<?php echo base_url("uploads/".$item->image) ?>" alt="Ariana Grande: thank u, next exclusive clear/pink lp"/>
							</a>
							<?php if($item->status=='sold'): ?>
							<p class="sold-btn">Sold out</p>
							<?php  else:  ?>

							<button  class="cart-btn" id="<?php echo $item->id;?>" data-butnid="<?php echo $item->id;?>" data-productid="<?php echo $item->id;?>" data-productartist="<?php echo $item->artist;?>"
									data-producttitle="<?php echo $item->title;?>" data-productprice="<?php echo $item->price;?>" data-productimage="<?php echo $item->image;?>"  value="add to cart" >
								<i class="fa fa-shopping-cart"></i>
								Add to cart
							</button>

							<?php endif; ?>
						</div>

						<a class="artist" href="#">
							<div class="shop-item-details">
								<span class="brand"><?php echo $item->artist; ?></span>
							</div>
						</a>

							<div class="title">
								<span class="format double-vinyl-lp"><?php echo $item->title; ?></span>
							</div>
							<div>
								<span class="price">€<?php echo $item->price; ?></span>
							</div>

					</div>


				<?php } ?>
			<?php endif; ?>
		</div>
		<div id="detail-cart" class="mini-cart-item">

		</div>

<div class="h_sec">
	<h3 class="section-header"><span>RECOMMENDED PRE-ORDERS</span></h3>
</div>



</div>
		<script type="text/javascript">
			 baseUrl = '<?php echo base_url(); ?>';
			// csrf_value = '<?php echo $this->security->get_csrf_hash(); ?>';
		</script>
		<script src="<?php echo base_url(); ?>asset/js/scrypt.js"></script>
<script src="<?php echo base_url(); ?>asset/js/jquery-3.3.1.min.js"></script>
<script src="<?php echo base_url(); ?>asset/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>asset/js/hceader-top.js"></script>

</body>

</html>
