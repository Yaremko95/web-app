<?php
class Common extends CI_Controller
{


	public function __construct()
	{
		parent::__construct();


	}

	public function unauthorized() {

		$this->load->view('unauthorized_view');

	}






		}



