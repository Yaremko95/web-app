<?php


class Admin extends CI_Controller {

		public function __construct()
		{
		parent::__construct();
		}


		public  function index () {
				$name = $this->session->userdata('name');
				$this->load->view('admin/aside');
				$this->load->view('admin/admin_home');
			}

			public function add_product() {

				$this->form_validation->set_rules("artist", "Atist", "required");
				$this->form_validation->set_rules("title", "Title", "required");
				$this->form_validation->set_rules("genre", "Genre", "required");
				$this->form_validation->set_rules("quantity", "Quantity", "required");
				$this->form_validation->set_rules("price", "Price", "required");
				$this->form_validation->set_rules("description", "Description", "required");


				//$config['upload_path'] = './uploads/';
				$config['upload_path'] = $this->config->item('upload_path');
				$config['allowed_types']  = 'gif|jpg|png|jpeg';
				$config['max_size']  = 4048;
				$file_name="image".time();
				$config['file_name']=$file_name;
				$config['encrypt_name'] = TRUE;
				$this->upload->initialize($config);
				$field_name = "file";

					if ($this->form_validation->run() == TRUE) {
						if(!$this->upload->do_upload($field_name)) {
							$file_error =  $this->upload->display_errors();
							$this->session->set_flashdata("file_error", "<div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
  			'$file_error' <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
  			<span aria-hidden=\"true\">&times;</span></button></div>");

						} else {
							$this->load->model('Admin_model', 'admin');

							$this->admin->add_product();
							$this->session->set_flashdata("message", "<div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
  			Product has been added to the database<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
  			<span aria-hidden=\"true\">&times;</span></button></div>");
							redirect('admin/product_inventory');
						}
					}

				$this->load->view('admin/aside');
				$this->load->view('admin/add_product');
			}



			public function product_inventory() {
				$this->load->model('Admin_model', 'admin');
				$data=$this->admin->get_data();
				$this->load->view('admin/aside');
				$this->load->view('admin/product_inventory', array('data'=>$data));
			}



			public function update_item($item_id) {

				$this->load->model('Admin_model', 'admin');
				$data=$this->admin->get_product($item_id);

				$this->form_validation->set_rules("artist", "Atist", "required");
				$this->form_validation->set_rules("title", "Title", "required");
				$this->form_validation->set_rules("genre", "Genre", "required");
				$this->form_validation->set_rules("quantity", "Quantity", "required");
				$this->form_validation->set_rules("price", "Price", "required");
				$this->form_validation->set_rules("description", "Description", "required");
				$this->form_validation->set_rules("status", "Status", "required");

//				$config['upload_path'] = './uploads/';
//				$config['allowed_types']  = 'gif|jpg|png|jpeg';
//				$config['max_size']  = 2048;
//				$file_name="image".time();
//				$config['file_name']=$file_name;
//				$this->upload->initialize($config);
//				$field_name = "file";
				$config['upload_path'] = $this->config->item('upload_path');
				$config['allowed_types']  = 'gif|jpg|png|jpeg';
				$config['max_size']  = 4048;
				$file_name="image".time();
				$config['file_name']=$file_name;
				$config['encrypt_name'] = TRUE;
				$this->upload->initialize($config);
				$field_name = "file";

				if ($this->form_validation->run() == TRUE) {
					if(!$this->upload->do_upload($field_name)) {
						$file_error =  $this->upload->display_errors();
						$this->session->set_flashdata("file_error", "<div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
  			'$file_error' <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
  			<span aria-hidden=\"true\">&times;</span></button></div>");

					} else {
						$this->load->model('Admin_model', 'admin');
						$this->admin->update_product($item_id);
						redirect('admin/product_inventory');
					}
				}
				$this->load->view('admin/aside');
				$this->load->view('admin/update_item', array('data'=>$data));
			}

			public function delete_item($item_id) {

				$this->load->model('Admin_model', 'admin');
				$this->admin->delete_product($item_id);
				redirect('admin/product_inventory');


			}












		}
