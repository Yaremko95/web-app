



$(document).ready(function() {

	
	//filter
	filter_data(1);
	function filter_data(page)
	{

		var action = 'filter_products';
		var minimum_price = $('#hidden_minimum_price').val();
		var maximum_price = $('#hidden_maximum_price').val();
		var genre = get_filter('genre');

		$.ajax({
			url: baseUrl+'index.php/home/filter_products/'+ page,
			method:"POST",
			dataType:"JSON",
			data:{action:action, minimum_price:minimum_price, maximum_price:maximum_price, genre:genre},
			success:function(data)
			{
				//$('#shop-items').html(data);
				 $('#shop-items').html(data.product_list);
				 $('#pagination_link').html(data.pagination_link);

				$('.cart-btn').click(function (event) {

					var product_id = $(this).data("productid");
					var product_artist = $(this).data("productartist");
					var product_title = $(this).data("producttitle");
					var product_price = $(this).data("productprice");
					var image = $(this).data("productimage");
					var buttonId=$(this).data("btnid");
					var quantity = 1;
					$.ajax({
						url : baseUrl+'index.php/cart/add_to_cart',
						method : "POST",
						data : {product_id: product_id, product_artist: product_artist, product_title: product_title, product_price: product_price, quantity:quantity, image:image},
						success: function(data){
							$('.cart-btn').val(data.token);
							load_cart_data();
							showCart();

						},
					});
					//el.stopImmediatePropagation();

				})
	}
		})
	}

	function get_filter(class_name)
	{
		var filter = [];
		$('.'+class_name+':checked').each(function(){
			filter.push($(this).val());
		});
		console.log(filter);
		return filter;

	}
	$('.common_selector').click(function(){
		filter_data(1);
	});
	$(document).on('click', '.pagination li a', function(event){
		console.log('hello')
		event.preventDefault();
		var page = $(this).data('ci-pagination-page');
		filter_data(page);
	});
	$('#price_range').slider({
		range:true,
		min:0,
		max:100,
		values:[5,200],
		step:10,
		stop:function(event, ui)
		{
			$('#price_show').html(ui.values[0] + ' - ' + ui.values[1]);
			$('#hidden_minimum_price').val(ui.values[0]);
			$('#hidden_maximum_price').val(ui.values[1]);
			filter_data(1);
		}

	});

	

	// cart
	const cartOverlay = document.querySelector('.cart-overlay');
	const cart = document.querySelector('.cart');
	const cartBtn =document.querySelector('.cart-link');
	const closeCartBtn=document.querySelector('.close');


	function showCart() {
		cartOverlay.classList.add('transparentBCG');
		cart.classList.add('showCart');
	};

	$('.cart-link').click(function () {
		showCart();
	})
	$('.close').click(function () {
		cartOverlay.classList.remove('transparentBCG');
		cart.classList.remove('showCart');
	})


	load_cart_data();
	function load_cart_data()
	{
		$.ajax({
			url: baseUrl+'index.php/cart/load_cart',
			method:"POST",
			success:function(data)
			{
				$('#detail-cart').html(data);
			}

		});
	}




	$('.cart-btn').click(function (event) {
		
		var product_id = $(this).data("productid");
		var product_artist = $(this).data("productartist");
		var product_title = $(this).data("producttitle");
		var product_price = $(this).data("productprice");
		var image = $(this).data("productimage");
		var buttonId=$(this).data("btnid");
		var quantity = 1;
			$.ajax({
				url : baseUrl+'index.php/cart/add_to_cart',
				method : "POST",
				data : {product_id: product_id, product_artist: product_artist, product_title: product_title, product_price: product_price, quantity:quantity, image:image},
				success: function(data){
					$('.cart-btn').val(data.token);
					load_cart_data();
					showCart();

				},
			});
		//el.stopImmediatePropagation();

			})




	$(document).on('click','.romove_cart',function(){
		var row_id=$(this).attr("id");


		$.ajax({
			url : baseUrl+'index.php/cart/delete_product_from_cart',
			method : "POST",
			data : {row_id : row_id},
			success :function(data){

				load_cart_data();



			}
		});

	});

	$(document).on('click', '.plus-item', function(){
		var row_id=$(this).attr("plus-id");
		$.ajax({
			url : baseUrl+'index.php/cart/increase_qty',
			method : "POST",
			data : {row_id : row_id},
			success :function(data){
				load_cart_data();
			}
		});
	});

	$(document).on('click', '.minus-item', function(){
		var row_id=$(this).attr("minus-id");
		$.ajax({
			url : baseUrl+'index.php/cart/decrease_qty',
			method : "POST",
			data : {row_id : row_id},
			success :function(data){
				load_cart_data();
			}
		});
	});




});


