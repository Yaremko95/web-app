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
	<div class="h_sec">
		<h3 class="section-header"><span>Cart</span></h3>
	</div>
	<div class="cart_table table-responsive text-nowrap">

		<div class="table">
			<table class="table table-striped">
				<thead>
				<tr>
					<th align="center" scope="col">Product</th>
					<th align="center" scope="col"></th>
					<th align="center" scope="col">Price</th>
					<th  scope="col">Quantity</th>
				</tr>
				</thead>
				<tbody>
				<?php if(count($new_cart)): ?>
				<?php foreach ($new_cart as $row=>$item) { ?>

				<tr>
					<td class="user-cart-item-details " width="10%" >
						<div class="user-cart-imag"><img style="height: 80px;" class="" src="<?php echo base_url("uploads/".$item->image) ?>" /></div>
					</td>
						<td valign="middle" align="left"  width="70%" >
							<p class="name"><?php echo $item->name;?> </p>
							<p class="t-title"><?php echo $item->title;?></p>
							<p>ID (<?php echo $item->id;?>)</p>
						</td>

					<td valign="middle" width="10%"><span></span> €<?php echo $item->price;?></td>
					<td valign="middle" width="10%"><?php echo $item->qty;?></td>
				</tr>
					<?php } ?>

				<?php endif; ?>
				</tbody>
			</table>
		</div>
	</div>













</body>
</html>
