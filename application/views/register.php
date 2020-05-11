<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
 <link href=" <?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
	  <link href=" <?php echo base_url();?>asset/css/register_style.css" rel="stylesheet">


    <title>Registration Page</title>
  </head>

  <body>
  <div class="container">
	  <header>
		  <div class="logo">
			  <a href="<?php echo base_url(); ?>index.php/home/products"><img src="<?= asset_url('img/logo.png')?>" alt=""></a>
		  </div>
	  </header>
	  <nav class="nav-bar">
		  <ul class="header-nav">
			  <li class="active"><a  href="<?php echo base_url(); ?>index.php/auth/login">Login</a> <a href="#">/Register</a></li>
			  <li><a href="#">Delivery address</a></li>
			  <li><a href="#">Order history</a></li>
		  </ul>
	  </nav>

	  <div class="back-to-shop">
		  <a href="<?php echo base_url(); ?>index.php/home/products"><< Back to shop</a>
		  <a href="<?php echo base_url(); ?>index.php/auth/login">Log in</a>
	  </div>
      <div class="register-section">
		  <h2>New Customer</h2>
		  <div class="form-section">
			  <?php echo form_open(); ?>
			  <table class="register-table">
				<tbody>
					<tr>
						<?php $error =form_error("email", "<small class='text-danger'>", '</small>');?>
						<td> <label> Email<em>*</em></label> </td>
						<td>
							<input  name="email" id="email" type="text" value="<?php echo set_value("email") ?>">
							<?php echo $error; ?>
							<span id="email_result"></span>
						</td>
					</tr>
					<tr>
						<td>
							<?php $error =form_error("password", "<small class='text-danger'>", '</small>');?>
							<label> Password<em>*</em></label></label>
						</td>
						<td>
							<input  name="password" id="password" type="password">
							<?php echo $error; ?>

						</td>
					</tr>
					<tr>
						<td>
							<?php $error =form_error("password2", "<small class='text-danger'>", '</small>');?>
							<label> Confirm password<em>*</em></label></label>
						</td>
						<td>
							<input  name="password2" id="password" type="password" >
							<?php echo $error; ?>
						</td>
					</tr>
				</tbody>
			</table>
			  <div class="message-box">
				  <h4>Why are your details necessary?</h4>
				  <p>We need your email address to send confirmation of orders placed, orders shipped and updates on the status of orders.</p>
				  <p>We respect yout privacy</p>
			  </div>
			  <table class="delivery-details" >
				  <tbody>
					<tr>
						<td>
							<label>Title</label>
						</td>
						<td>
							<select>
								<option>Mr</option>
								<option>Mrs</option>
								<option>Mr</option>
								<option>Ms</option>
								<option>Dr</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>
							<?php $error =form_error("name", "<small class='text-danger'>", '</small>');?>
							<label> Name<em>*</em></label></label>
						</td>
						<td>
							<input  name="name" id="name" type="text" value="<?php echo set_value('name')?>">
							<?php echo $error; ?>
						</td>
					</tr>
				  <tr>
					  <td>
						  <?php $error =form_error("surname", "<small class='text-danger'>", '</small>');?>
							  <label> Surname<em>*</em></label></label>
					  </td>
					  <td>
						  <input  name="surname" id="surname" type="text" value="<?php echo set_value('surname')?>">
						  <?php echo $error; ?>
					  </td>
				  </tr>
				  <tr>
					  <td>
						  <?php $error =form_error("street", "<small class='text-danger'>", '</small>');?>
							  <label> Street<em>*</em></label></label>
					  </td>
					  <td>
						  <input  name="street" id="street" type="text" value="<?php echo set_value('street')?>">
						  <?php echo $error; ?>
					  </td>
				  </tr>
					<tr>
						<td>
							<?php $error =form_error("building", "<small class='text-danger'>", '</small>');?>
								<label> Building<em>*</em></label></label>
						</td>
						<td>
							<input  name="building" id="building" type="text" value="<?php echo set_value('building')?>">
							<?php echo $error; ?>
						</td>
					</tr>
				  <tr>
					  <td>
						  <?php $error =form_error("city", "<small class='text-danger'>", '</small>');?>
							  <label> City<em>*</em></label></label>
					  </td>
					  <td>
						  <input  name="city" id="city" type="text" value="<?php echo set_value('city')?>">
						  <?php echo $error; ?>
					  </td>
				  </tr>
				  <tr>
					  <td>
						  <?php $error =form_error("country", "<small class='text-danger'>", '</small>');?>
							  <label> Country<em>*</em></label></label>
					  </td>
					  <td>
						  <input  name="country" id="country" type="text" value="<?php echo set_value('surname')?>">
						  <?php echo $error; ?>
					  </td>
				  </tr>
				  <tr>
					  <td>
						  <?php $error =form_error("zip", "<small class='text-danger'>", '</small>');?>
							  <label> ZIP<em>*</em></label></label>
					  </td>
					  <td>
						  <input  name="zip" id="zip" type="text" value="<?php echo set_value('zip')?>">
						  <?php echo $error; ?>
					  </td>
				  </tr>
				  <tr>
					  <td>
						 <?php $error =form_error("phone", "<small class='text-danger'>", '</small>');?>
						  <label> Phone<em>*</em></label></label>
					  </td>
					  <td>
						  <input  name="phone" id="phone" type="text" value="<?php echo set_value('phone')?>">
						  <?php echo $error; ?>
					  </td>
				  </tr>
				  </tbody>
			  </table>
			  <div class="emaile-pref">
				  <h2>Email Preferences</h2>
				  <div class="rb-table">
					  <table>
						  <tbody>
							<tr>
								<td>
									<label>
										<input type="radio" checked="checked">Email you about the latest news
									</label>
								</td>
							</tr>
							<tr>
								<td>
									<label>
										<input type="radio" >Email you about discounts and promotions
									</label>
								</td>
							</tr>
							<tr>
								<td>
									<label>
										<input type="radio" >Only Email you regarding your orders
									</label>
								</td>
							</tr>
						  <tr>
							  <td>
								  By clicking I agree to the following
								  <a href="#">Privacy policy</a>
							  </td>
						  </tr>
						  </tbody>
					  </table>

				  </div>
			  </div>
			  <div class="register-button">
			  <button class="button " name="register">Register</button>
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
  <script src="<?php echo base_url(); ?>asset/js/jquery-3.3.1.min.js"></script>

  <script>
	  base_url = '<?php echo base_url(); ?>';
	  $(document).ready(function() {

		  $('#email').change(function () {

			  var email = $('#email').val();

			  if (email != '') {

				  $.ajax({
					  url: base_url + 'index.php/auth/email_availability',
					  method: "POST",
					  data: {email: email},
					  success: function (data) {

						  $('#email_result').html(data);
					  }

				  })
			  }
		  })
	  })


  </script>
  </body>

</html>
