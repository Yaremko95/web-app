<?php
class Items extends CI_Controller {


	public function __construct()
	{
		parent::__construct();




	}
	public function  item1()
	{
		/*if($_SESSION['user_logged']==False) {

		redirect("home/products");
		}*/
		$this->load->view('templates/header');
		$this->load->view('templates/product1_item');
	}


}
