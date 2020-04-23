<?php

class Cart extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function add_to_cart() {
		$prod_id=$this->input->post('product_id');
		$this->load->model('Cart_model', 'cmodel');
		if ($this->session->userdata("logged_in")) {
			$this->cmodel->add_to_user_cart($this->session->userdata('email'), $prod_id);
			//echo '<pre>'; echo $this->session->userdata('email'); echo $prod_id; echo '</pre>';

		}
		//	$this->cmodel->add_to_cart($prod_id);       ///changed
			$data=$this->cmodel->get_prod_data($prod_id);
			$cart = array(
				'id' => $data->id,
				'name' => $data->artist,
				'price' => $data->price,
				'qty' => 1,
				'title' => $data->title,
				'image' => $data->image,
			);
			$this->cart->insert($cart);



		echo $this->show_cart();
	}

	public function updated_db_cart(){
	////	$this->cart->destroy();                                       ///changed
		$this->load->model('Cart_model', 'cmodel');
		//$data=$this->cmodel->getAllFromCart();                         //changed

		if ($this->session->userdata("logged_in")) {
			//$this->cmodel->set_user_cart($this->session->userdata('email'), $data);
			$data=$this->cmodel->getAllFromUserCart($this->session->userdata('email'));

			$new_cart = array();
			foreach ($data as $item) {
				$prod_id = $item->prod_id;
				$data_db = $this->cmodel->get_prod_data($prod_id);
				$cart = array(
					'id' => $data_db->id,
					'name' => $data_db->artist,
					'price' => $data_db->price,
					'qty' => $item->qty,
					'title' => $data_db->title,
					'image' => $data_db->image,
				);
				array_push($new_cart, $cart);
			}
			$this->cart->destroy();
			$this->cart->insert($new_cart);
		}
	}


// show mini-cart
	 public function show_cart(){
		$this->updated_db_cart();
		$output = '';
		$no = 0;
		foreach ($this->cart->contents() as $items) {
			$no++;
			$output .='
						<div class="single-item-in-cart" data-cartitemid="'.$items['id'].'">
						<a><img class="mini-image" src="'.base_url('uploads/'.$items['image']).'" style="height: 90px;"/></a>

						</div>
							<div style="" class="description">
								<a style="text-transform:capitalize; margin:auto;" class="artist" href="">'.$items['name'].'</a>	
								<p style="font-size: 0.9rem; padding: 5px 0; line-height: 1; " class="mini-title">'.$items['title'].'</p>
									<p style="font-weight:bold; padding: 5px 0;"class="mini-total"<span>€'.number_format($items['price'], 2)*number_format($items['qty']).'</span></p>
								<button  id="'.$items['rowid'].'" class="romove_cart btn btn-danger btn-sm" style="background-color: white; color: #888888; text-align: left; margin: 0 -5px; border:none" type="button">Remove </button></td>
							</div>
								<div class="quantity" style="text-align: center;">
									<button type="button" plus-id="'.$items['rowid'].'" class="plus-item" style="background-color: white; border:none;"><i class="fa fa-chevron-up"></i></button>
									<span>'.number_format($items['qty']).'</span>
									<button type="button" minus-id="'.$items['rowid'].'" class="minus-item btn-sm"  style="background-color: white; border-width: 0;"><i class="fa fa-chevron-down"></i></button>
								</div>

            ';
		}
		 $output .= '

							<span class="sub-total" style="font-weight: bold; font-size: 0.9rem; margin-top: 20px; padding-right: 10px;">Total <span>€'.number_format($this->cart->total(), 2).'</span></span>

    				';
		return $output;

	}



//load mini-cart
	public function load_cart(){
		echo $this->show_cart();
	}


	public function delete_product_from_cart(){
		$prod_id=0;
		$data = array(
			'rowid' => $this->input->post('row_id'),
			'qty' => 0,
		);

		foreach ($this->cart->contents() as $content) {
			if($content['rowid']==$data['rowid']) {
				$prod_id=$content['id'];
			}
		}
		$this->load->model('Cart_model', 'cmodel');
		if ($this->session->userdata("logged_in")) {
			$this->cmodel->remove_from_user_cart($this->session->userdata('email'), $prod_id);
		}
//		else {
//			//$this->cmodel->remove_from_cart($prod_id);
//
//		}

		$this->cart->update($data);
		echo $this->show_cart();

	}


	public function increase_qty() {
		$row_id=$this->input->post('row_id');
		$qty=0;
		$prod_id=0;
		foreach ($this->cart->contents() as $content) {
			if($content['rowid']==$row_id) {
				$qty=$content['qty'] +1;
				$prod_id=$content['id'];
			}
		}
		$data = array(
			'rowid' => $this->input->post('row_id'),
			'qty' => $qty,
		);

		$this->load->model('Cart_model', 'cmodel');
		if ($this->session->userdata("logged_in")) {
			$this->cmodel->add_to_user_cart($this->session->userdata('email'), $prod_id);
		}
//		} else {
//			$this->cmodel->add_to_cart($prod_id);
//		}
			$this->cart->update($data);
			echo $this->show_cart();
	}


	public function decrease_qty() {
		$row_id=$this->input->post('row_id');
		$qty=0;
		$prod_id=0;
		foreach ($this->cart->contents() as $content) {
			if($content['rowid']==$row_id) {
				$qty=$content['qty'] -1;
				$prod_id=$content['id'];
			}
		}
		$data = array(
			'rowid' => $this->input->post('row_id'),
			'qty' => $qty,
		);
		$this->load->model('Cart_model', 'cmodel');
		if ($this->session->userdata("logged_in")) {
			$this->cmodel->minus_qty_user_cart($this->session->userdata('email'), $prod_id, $qty);
		}
//		else {
//			$this->cmodel->minus_qty($prod_id, $qty);
//		}
		$this->cart->update($data);
		echo $this->show_cart();
	}

	public function user_cart() {
		$this->load->model('Cart_model', 'cmodel');
		if(!$this->session->userdata('logged_in')) {
			redirect('auth/login');
		}
		$new_cart =array();
		$data=$this->cmodel->getAllFromUserCart($this->session->userdata('email'));
		foreach ($data as $item) {
			$prod_id = $item->prod_id;
			$data_db = $this->cmodel->get_prod_data($prod_id);
			$cart =(object) array(
				'id' => $data_db->id,
				'name' => $data_db->artist,
				'price' => $data_db->price,
				'qty' => $item->qty,
				'title' => $data_db->title,
				'image' => $data_db->image,
			);
			array_push($new_cart, $cart);
		}
		$total=$this->cart->total();



		$this->load->view('templates/header');
		$this->load->view('user_cart',  array('new_cart'=>$new_cart));

	}







}
