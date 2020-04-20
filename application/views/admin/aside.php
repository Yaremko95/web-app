<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/admin_style.css" type="text/css">

	<!-- Bootstrap CSS -->
	<link href=" <?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">



	<title>Registration Page</title>
</head>
<style>
	.main-sidebar {
		background-color: #17241d;
	}
	p{
		color: #CCCCCC;
	}
</style>
<body>




<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<!-- Brand Logo -->
	<div class="brand-link">
		<img src="<?php echo base_url(); ?>asset/img/AdminLTELogo.png" alt="AdminLTE Logo" class="admin-image" style="opacity: .8">
		<span class="brand-text">Admin Retro Record</span>
	</div>

	<!-- Sidebar -->
	<div class="sidebar">
		<!-- Sidebar user (optional) -->
		<div class="user-panel mt-3 pb-3 mb-3 d-flex">

			<div class="info">
				<h4 class="d-block"><?php echo $this->session->userdata('name'); echo ' '; echo $this->session->userdata('surname'); ?></h4>
				<p><?php echo $this->session->userdata('email') ?></p>
			</div>
		</div>

		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<!-- Add icons to the links using the .nav-icon class
					 with font-awesome or any other icon font library -->


				<li class="nav-item has-treeview">
					<a href="#" class="nav-link">
						<p>
							Users
							<i class=" fa fa-angle-left" style="font-size:24px"></i>

						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="../layout/top-nav.html" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>User details</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="../layout/top-nav-sidebar.html" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Update database</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="../layout/boxed.html" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Add/Delete users</p>
							</a>
						</li>
					</ul>
				</li>
				<li class="nav-item has-treeview">
					<a href="<?php echo base_url(); ?>index.php/admin/product_inventory" class="nav-link">

						<p>
							Products

						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="<?php echo base_url(); ?>index.php/admin/add_product" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Add product</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="../charts/flot.html" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Update describtion</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="../charts/inline.html" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>update price</p>
							</a>
						</li>
					</ul>
				</li>

			</ul>

		</nav>
		<!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
</aside>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
</body>

</html>
