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
	<div class="add-product-section">
		<h2>Update product</h2>
		<?php  $message = $this->session->flashdata("file_error")?>
		<?php echo $message; ?>

		<div class="form-section">
			<?php echo form_open_multipart(); ?>
			<table class="table table-striped table-hover "">
			<tbody>
			<tr>
				<?php $error =form_error("artist", "<small class='text-danger'>", '</small>');?>
				<td> <label> Artist<em>*</em></label> </td>
				<td>
					<input  name="artist" id="artist" type="text" value="<?php echo set_value('artist', $data->artist) ?>">
					<div> <?php echo $error; ?></div>
				</td>
			</tr>
			<tr>
				<td>
					<?php $error =form_error("title", "<small class='text-danger'>", '</small>');?>
					<label>Title<em>*</em></label></label>
				</td>
				<td>
					<input  name="title" id="title" type="text" value="<?php echo set_value('title', $data->title) ?>" >
					<div> <?php echo $error; ?></div>
				</td>
			</tr>
			<tr>
				<td>
					<?php $error =form_error("genre", "<small class='text-danger'>", '</small>');?>
					<label>Genre<em>*</em></label></label>
				</td>
				<td>
					<input  name="genre" id="genre" type="text"  value="<?php echo set_value('genre', $data->genre) ?>">
					<div> <?php echo $error; ?></div>
				</td>
			</tr>
			<tr>
				<td>
					<?php $error =form_error("quantity", "<small class='text-danger'>", '</small>');?>
					<label>Quantity<em>*</em></label></label>
				</td>
				<td>
					<input  name="quantity" id="quantity" type="text" value="<?php echo set_value('quantity', $data->q_ty) ?>" >
					<div> <?php echo $error; ?></div>
				</td>
			</tr>
			<tr>
				<td>
					<?php $error =form_error("price", "<small class='text-danger'>", '</small>');?>
					<label>Price<em>*</em></label></label>
				</td>
				<td>
					<input  name="price" id="price" type="text" value="<?php echo set_value('price', $data->price) ?>" >
					<div> <?php echo $error; ?></div>
				</td>
			</tr>
			<tr>
				<td>
					<?php $error =form_error("description", "<small class='text-danger'>", '</small>');?>
					<label>Product description<em>*</em></label></label>
				</td>
				<td>
					<textarea class="product-description" id="description" name="description" ><?php echo htmlspecialchars($data->description); ?></textarea>
					<div> <?php echo $error; ?></div>
				</td>
			</tr>
			<tr>
				<td>

					<label for="image">Image</label>
				</td>
				<td>
					<input name="file" type="file" class="form-control-file" id="image" aria-describedby="fileHelp" value="<?php set_value(base_url("uploads/".$data->image) )?>">

				</td>
			</tr>
			<tr>
				<td>
					<?php $error =form_error("status", "<small class='text-danger'>", '</small>');?>
					<label for="status">Status</label>
				</td>
				<td>
					<select name="status" id="status" value="<?php echo set_value('status', $data->status) ?>">
						<option value="in stock" <?php if ($data->status == 'in stock') echo 'selected="selected"'; ?>>in stock</option>
						<option value="sold" <?php if ($data->status == 'sold') echo ' selected="selected"'; ?>>sold</option>
						<option value="on hold" <?php if ($data->status == 'on hold') echo ' selected="selected"'; ?>>on hold</option>
					</select>
					<small> <?php echo $error; ?></small>
				</td>
			</tr>
			<tr>
				<td>
					<?php $error =form_error("feature", "<small class='text-danger'>", '</small>');?>
					<label for="feature">Feature</label>
				</td>
				<td>
					<select name="feature" id="feature" value="<?php echo set_value('feature', $data->feature) ?>">
						<option <?php if ($data->feature == 'recommended') echo 'selected="selected"'; ?>>recommended</option>
						<option <?php if ($data->feature == 'exclusive') echo 'selected="selected"'; ?>>exclusive</option>

					</select>
					<small> <?php echo $error; ?></small>
				</td>
			</tr>

			</tbody>
			</table>
			<div ></div>


			<div class="register-button">
				<button class="btn btn-success " name="add-product">Update</button>
			</div>
			</form>
		</div>
	</div>
</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
</body>

</html>
