<?php


class Register_successful extends CI_Controller {


	public function __construct() 
	{
		
		parent::__construct();



	}
	public function  registration_complete()
	{
        //if(isset($_SESSION['registered']) && $_SESSION['registered'] == 1) {
        //    redirect("home/products", "refresh");
        //}
		$this->load->view('templates/header');
		$this->load->view('succes_reg');
	}
	

}
