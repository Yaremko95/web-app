<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/home.css" type="text/css">
	  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <title>Hello, world!</title>
  </head>
  <body>
      
        <div class="jumbotron jumbotron-fluid d-flex align-items-end">
        <div class="jumbotron-content d-flex flex-column pl-4 ">
            <h1 class="display-4">Girl, Put Your Records On: The Perfect Work-From-Home Soundtrack</h1>
            <p class="lead">Records Are The Key To Fighting Isolation Silence And Maintaining Normalcy At Home</p>
        </div>
        </div>

                <div class="h_sec">
                    <h3 class="section-header" id="exclusives"><span>ALL</span></h3>
                </div>
		<div class="genre-section d-flex justify-content-between">

			<div>
				<input type="checkbox"class="common_selector genre" id="rock" value="rock" ><label for="rock">Rock</label>
			</div>
			<div>
				<input type="checkbox"class="common_selector genre" id="soundtrack" value="soundtrack" ><label for="soundtrack">soundtrack</label>
			</div>
			<div>
				<input type="checkbox"class="common_selector genre" id="pop" value="pop" ><label for="pop">pop</label>
			</div>
			<div>
				<input type="checkbox"class="common_selector genre" id="metal" value="metal" ><label for="metal">metal</label>
			</div>
			<div>
				<input type="checkbox"class="common_selector genre" id="jazz&classical" value="jazz&classical" ><label for="jazz&classical">jazz & classical</label>
			</div>
			<div>
				<input type="checkbox"class="common_selector genre" id="soul&rnb" value="soul&rnb" ><label for="soul&rnb">soul & rnb</label>
			</div>
			<div>
				<input type="checkbox"class="common_selector genre" id="dance&electronica" value="dance&electronica" ><label for="dance&electronica">dance & electronica</label>
			</div>
			<div>
				<input type="checkbox"class="common_selector genre" id="compilations" value="compilations" ><label for="compilations">compilations</label>
			</div>
			<div>
				<input type="checkbox"class="common_selector genre" id="country&folk" value="country&folk" ><label for="country&folk">country & folk</label>
			</div>
			<div>
				<input type="checkbox"class="common_selector genre" id="indie&alternative" value="indie&alternative" ><label for="indie&alternative">indie & alternative</label>
			</div>
			<div>
				<input type="checkbox"class="common_selector genre" id="punk" value="punk" ><label for="punk">punk</label>
			</div>
			<div>
				<input type="checkbox"class="common_selector genre" id="ska&reggae" value="ska&reggae" ><label for="ska&reggae">ska & reggae</label>
			</div>



		</div>
       
		<div class="filter-section d-flex justify-content-between">
			<div class="price ">
				<div class="d-flex align-items-center">
					<span class="mx-3">Price:</span>
					<input type="hidden" id="hidden_minimum_price" value="5" />
					<input type="hidden" id="hidden_maximum_price" value="200" />
					<span class="mr-4" id="price_show">5 - 200</span>
					<div class="" id="price_range"style="width: 5rem;"></div>
				</div>


			</div>
			<div class="d-flex">
				<div>
					<span><span class="mr-2" id="prod-number"></span>Products</span>
				</div>
				<div class="px-4" id="pagination_link" ></div>
			</div>
		</div>

              
                        <div id="shop-items" class="shop-items ">

                        </div>



                        <script src="<?php echo base_url(); ?>asset/js/scrypt.js"></script>
						<script src="<?php echo base_url(); ?>asset/js/jquery-3.3.1.min.js"></script>
						<script src="<?php echo base_url(); ?>asset/js/bootstrap.min.js"></script>
						<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
						<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

        <script type="text/javascript">
			 baseUrl = '<?php echo base_url(); ?>';
            // csrf_value = '<?php echo $this->security->get_csrf_hash(); ?>';

        </script>
            
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->


</body>
</html>
