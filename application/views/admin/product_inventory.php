<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


	<!-- Bootstrap CSS -->
	<link href=" <?php echo base_url();?>asset/css/bootstrap.min.css" rel="stylesheet">



	<title>Registration Page</title>
</head>
<style>
.container	{
	margin-top: 50px;
	}
.col-lg-12 {
	padding: 0 10px;
	padding-bottom: 10px;
}


	th, td{
		font-size: 0.8rem;
		text-align: center;
	}
	.btn-danger{
		background-color: #610000;
	}
.btn-primary{
	background-color: #5d606c;
}
.btn-success{
	background-color: #41544a;
}
	.btn{
		border-width: 0;
	}
	img{
		height: 50px;
	}

</style>

<body>
<div class="container">
	<div class="back-to-shop">
		<a href="<?php echo base_url(); ?>index.php/home/products"><< Back to shop</a>
		<a href="<?php echo base_url(); ?>index.php/auth/logout">Log out</a>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<td><?php echo anchor('admin/add_product', 'Add new product', array('class'=>'btn btn-primary')); ?></td>

		</div>
	</div>

	<table class="table table-striped table-hover ">
		<thead>
		<tr>
			<th>ID</th>
			<th>Artist</th>
			<th>Title</th>
			<th>Genre</th>
			<th>Description</th>
			<th>Price</th>
			<th>Quantity</th>
			<th>Image</th>
			<th>Status</th>
			<th>Feature</th>
			<th>Update</th>
			<th>Delete</th>
		</tr>
		</thead>
		<tbody>

		<tr>
			<?php if(count($data)): ?>
			<?php foreach ($data as $item) { ?>
			<td><?php echo $item->id; ?></td>
			<td><?php echo $item->artist; ?></td>
			<td><?php echo $item->title; ?></td>
			<td><?php echo $item->genre; ?></td>
			<td><?php echo $item->description; ?></td>
			<td><?php echo $item->price; ?></td>
			<td><?php echo $item->q_ty; ?></td>
			<td><img src="<?php echo base_url("uploads/".$item->image) ?>"></td>
			<td><?php echo $item->status; ?></td>
			<td><?php echo $item->feature; ?></td>
			<td><?php echo anchor('admin/update_item/'.$item->id, 'Update', array('class'=>'btn btn-success')); ?></td>
			<td><?php echo anchor('admin/delete_item/'.$item->id, 'Delete', array('class'=>'btn btn-danger')); ?></td>
		</tr>
		<?php } ?>
		<?php else: ?>
		<tr>No records found</tr>
		<?php endif; ?>

		</tbody>
	</table>
</div>


<script src="<?php echo base_url();?>asset/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>asset/js/jquery-3.3.1.min.js"></script>

</body>
</html>
