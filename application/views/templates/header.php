<html>
    <head>
        <title>retro record</title>
		<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/home.css" type="text/css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/bootstrap.min.css" type="text/css">
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
	<div class="container">
		<div class="header-wrapper">
			<header class="header-section" >
				<div class="shipping-offer">
					<span>Free Spain Shipping on Orders of €50+ </span>
				</div>
				<div class="header-top">
					<div class="logo">
						<a href="<?php echo base_url(); ?>index.php/home/products"><img src="<?= asset_url('img/logo.png')?>" alt=""></a>
					</div>
					<div class="menu-right">
						<div class="cart-profile">
							<div class="toggle-account active-btn">
								<a href="<?php echo base_url(); ?>index.php/user/user_profile" >
									<i class="fa fa-user-circle-o"></i>
								</a>
							
							</div>


							<div class="cart-box" style="margin-left: 10px;">

								<a class="cart-link"  href="#"   >
									<i class="fa fa-shopping-cart" ></i>
									<span class="badge"></span>
								</a>
							</div>
							<div id="mini-cart" class="cart-overlay" >

								<div id="cart" class="cart">
									<button type="button" class="close position-absolute top-0 right-0" aria-label="Close" style="float: left;">
										<span aria-hidden="true">&times;</span>
									</button>
									<div  style="display: flex;  justify-content: space-between"> <span></span><a href="<?php echo base_url(); ?>index.php/cart/user_cart">View Basket &raquo;</a></div>

									<div class="products-center" style="width: 100%">
										<div id="detail-cart" class="mini-cart-item">

										</div>
									</div>


								</div>
							</div>


					</div>
						<div class="user-access">
							<a class="pr-2" href="<?php echo base_url(); ?>index.php/home/products">Home</a>
							<a class="pr-4" href="<?php echo base_url(); ?>index.php/home/all_products">All</a>
							<a class="pr-2" href="<?php echo base_url(); ?>index.php/auth/register">Register</a>
							<a class="pr-2" href="<?php echo base_url(); ?>index.php/auth/login" class="in">Log in</a>
							<a class="pr-4" href="<?php echo base_url(); ?>index.php/auth/logout" class="out">Log Out</a>
						</div>
					
					</div>
				</div>
				<!-- <nav>
						<ul id="navigation" class="navigation">

							<li >
								<a  href="">Metal</a>
							</li>
							<li >
								<a  href="">Pop</a>
							</li>
							<li>
								<a  href="">Soundtracks</a>
							</li>
							<li>
								<a  href="/">Jazz & Classical</a>
							</li>
							<li>
								<a  href="/">Soul & RNB</a>
							</li>
							<li>
								<a  href="">Hip Hop & Rap</a>
							</li>
							<li >
								<a  href="">Compilations</a>
							</li>
							<li id="cat_genres" class="cat_level_0">
								<a class="parent-cat parent-cat-0" href="/">Dance & Electronica</a>

							</li>
							<li id="cat_sale" class="cat_level_0">
								<a class="parent-cat parent-cat-0" href="">Ska + Reggae</a>

						</ul>
					</nav> -->

			</header>

		</div>


	</div>
	<script type="text/javascript">
		baseUrl = '<?php echo base_url(); ?>';
	</script>
<!--	<script src="--><?php //echo base_url(); ?><!--asset/js/scrypt.js"></script>-->

	<!-- Header Info Begin -->
	
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  

	</body>
</html>