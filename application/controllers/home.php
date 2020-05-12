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
		$this->load->view('templates/footer');



	}

	public function all_products() {

		$this->load->model('Admin_model', 'admin');
		$data=$this->admin->get_data();

		$this->load->view('templates/header');
		$this->load->view('all_products', array('data'=>$data));
		$this->load->view('templates/footer');
		

	}



	 function filter_products() {
		$this->load->model('Admin_model', 'admin');
		sleep(1);
		$minimum_price = $this->input->post('minimum_price');
		$maximum_price = $this->input->post('maximum_price');
		$genre = $this->input->post('genre');

		$this->load->library('pagination');
		$config = array();
		$config['base_url'] ='#';
		$config['total_rows'] = $this->admin->count_all($minimum_price, $maximum_price, $genre);
		$config['per_page'] = 12;
		$config['uri_segment'] = 3;
		$config['use_page_numbers'] = TRUE;
		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		$config['next_link'] = '&gt;';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['prev_link'] = '&lt;';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		$config['cur_tag_open'] = "<li class='active'><a href='#'>";
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['num_links'] = 3;
		$this->pagination->initialize($config);
		$page = $this->uri->segment(3);
		$start = ($page-1) * $config['per_page'];
		$output = array(
			'pagination_link'  => $this->pagination->create_links(),
		'product_list'   => $this->admin->fetch_data($config["per_page"], $start, $minimum_price, $maximum_price, $genre),
			'number_of_items'=>$config['total_rows'] );
		echo json_encode($output);
		//echo 'hello';
	}
	
	public function item($item_id) {
		$this->load->model('Admin_model', 'admin');
		$data=$this->admin->get_product($item_id);
		$get_by_genre=$this->admin->get_product_by_genre($item_id);

		$this->load->view('templates/header');
		$this->load->view('item', array('data'=>$data, 'get_by_genre'=>$get_by_genre));
		$this->load->view('templates/footer');

	}

}
