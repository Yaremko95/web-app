<html>
    <head>
        <title>retro record</title>
		<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/home.css" type="text/css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/bootstrap.min.css" type="text/css">
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
	<div class="container">
		<div class="header-wrapper">
			<header class="header-section" >
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
								<!--
								<ul class="active-nav" style="display: block;">
									<li class="profile">
										<a href="/profile.html" title="Profile">
											Profile
										</a>
									</li>

									<li class="orders">
										<a href="/orders.html" title="Order History">
											Order History
										</a>
									</li>

									<li class="logout">
										<form method="post" action="/">
											<button type="submit" title="Log Out" name="logout">
												Log Out
											</button>
										</form>
									</li>
								</ul> -->
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
							<a href="<?php echo base_url(); ?>index.php/auth/register">Register</a>
							<a href="<?php echo base_url(); ?>index.php/auth/login" class="in">Log in</a>
							<a href="<?php echo base_url(); ?>index.php/auth/logout" class="out">Log Out</a>
						</div>
						<div class="about-menu">
							<a href="">About</a>
						</div>
						<div class="contact-menu">
							<a href="">Contact</a>
						</div>
					</div>
				</div>
				<nav>
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
					</nav>

			</header>

		</div>


	</div>
	<script type="text/javascript">
		baseUrl = '<?php echo base_url(); ?>';
	</script>
<!--	<script src="--><?php //echo base_url(); ?><!--asset/js/scrypt.js"></script>-->

	<!-- Header Info Begin -->

	<script src="<?php echo base_url(); ?>asset/js/jquery-3.3.1.min.js"></script>
	<script src="<?php echo base_url(); ?>asset/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>asset/js/jquery.js"></script>
	<script src="<?php echo base_url(); ?>asset/js/jquery-ui.js"></script>

	</body>
</html>



