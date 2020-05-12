<?php


	//Access control list for the application
	$allowAll=array();
	$allowOnly=array();

	$allowAll['auth']['login']=true;
	$allowAll['auth']['register']=true;
	$allowAll['auth']['forgotPassword']=true;
	$allowAll['auth']['logout']=true;
	$allowAll['auth']['resetpassword']=true;
	$allowAll['auth']['changepassword']=true;
	$allowAll['auth']['verify'] =true;
	$allowAll['auth']['email_availability'] =true;

	$allowAll['home']['products']=true;
	$allowAll['home']['all_products']=true;
	$allowAll['home']['filter_products']=true;
	$allowAll['home']['item']=true;
	$allowAll['cart']['add_to_cart']=true;
	$allowAll['cart']['show_cart']=true;
	$allowAll['cart']['load_cart']=true;
	$allowAll['cart']['delete_product_from_cart']=true;
	$allowAll['cart']['increase_qty']=true;
	$allowAll['cart']['decrease_qty']=true;
	$allowAll['auth']['registration_success']=true;
	$allowAll['common']['unauthorized']=true;




	$allowOnly['1']['admin']['index']=true;
	$allowOnly['1']['admin']['add_product']=true;
	$allowOnly['1']['admin']['update_item']=true;
	$allowOnly['1']['admin']['product_inventory']=true;
	$allowOnly['1']['admin']['delete_item']=true;

	$allowOnly['2']['user']['user_profile']=true;
	$allowOnly['2']['user']['delivery_address']=true;
	$allowOnly['2']['cart']['user_cart']=true;



	//$allowOnly['2']['home']['products']=true;
