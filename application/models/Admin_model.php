<?php


class Admin_model extends CI_Model
{

	//gets all data from the product table
	public function  get_data() {
		$this->db->select('product.id, product.artist, product.title, product.genre, product.description, product.price, product.q_ty, product.image, status.status');
		$this->db->from('product');
		$this->db->join('status', 'product.status_id = status.id_status');
		$query = $this->db->get();
		return $query->result();
	}


	//insert input product data into array
	public function product_item_array() {

		$status=$this->input->post('status');
		$this->db->select('id_status');
		$this->db->from('status');
		$this->db->where('status', $status);
		$query = $this->db->get();
		$status_id=$query->row();

		$image =$this->upload->data();

		//insert data from add_product input
		$data = array(
			'artist' => $this->input->post('artist'),
			'title' => $this->input->post('title'),
			'genre' => $this->input->post('genre'),
			'q_ty' => $this->input->post('quantity'),
			'price' => $this->input->post('price'),
			'description' => $this->input->post('description'),
			'image' =>$image['file_name'],
			'status_id'=>(int)$status_id->id_status
		);
		return $data;
	}

	//add new product to product table
	public function add_product()
	{
		$data=$this->product_item_array();
		$this->db->insert('product', $data);
	}


	//get product item data in order to update
	public function get_product($item_id) {
		$this->db->select('product.id, product.artist, product.title, product.genre, product.description, product.price, product.q_ty, product.image, status.status');
		$this->db->from('product');
		$this->db->join('status', 'product.status_id = status.id_status');
		$this->db->where('id', $item_id);
		$query = $this->db->get();
		if($query->num_rows()>0) {
			return $query->row();
		}
	}

	//update product in database
	public function update_product($item_id) {
		$data=$this->product_item_array();
		$this->db->where('id', $item_id);
		$this->db->update('product', $data);

	}

	public function delete_product($item_id) {
		$this->db->delete('product', array('id' => $item_id));
	}

}


