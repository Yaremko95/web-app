
$(document).ready(function() {

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


