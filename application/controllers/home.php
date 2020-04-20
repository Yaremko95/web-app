<?php


class Home extends CI_Controller {

	
	public function __construct() 
	{
		parent::__construct();




	}
	public function  products()
	{

		$this->load->model('Admin_model', 'admin');
		$data=$this->admin->get_data();

		$this->load->view('templates/header');
		$this->load->view('templates/home_t', array('data'=>$data));



	}


}
