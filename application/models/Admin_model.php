<?php


class Admin_model extends CI_Model
{

	//gets all data from the product table
	public function  get_data() {
		$this->db->select('product.id, product.artist, product.title, product.genre, product.description, product.price, product.q_ty, product.image, status.status, product.feature');
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

		//$image =$this->upload->data();
		$image= $this->config->item('upload_prefix'). $this->upload->data('file_name');

		//insert data from add_product input
		$data = array(
			'artist' => $this->input->post('artist'),
			'title' => $this->input->post('title'),
			'genre' => $this->input->post('genre'),
			'q_ty' => $this->input->post('quantity'),
			'price' => $this->input->post('price'),
			'description' => $this->input->post('description'),
			'image' =>$image,
			'feature' =>$this->input->post('feature'),
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
		$this->db->select('product.id, product.artist, product.title, product.genre, product.description, product.price, product.q_ty, product.image, status.status, product.feature');
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

	function make_query($minimum_price, $maximum_price, $genre)
	{
				$query = "
		  SELECT * FROM product
		  WHERE status_id = '2' 
		  ";

				if(isset($minimum_price, $maximum_price) && !empty($minimum_price) &&  !empty($maximum_price))
				{
					$query .= "
			AND price BETWEEN '".$minimum_price."' AND '".$maximum_price."'
		   ";
				}

				if(isset($genre))
				{
					$brand_filter = implode("','", $genre);
					$query .= "
    AND genre IN('".$brand_filter."')
   ";
				}

				return $query;


	}

	function count_all($minimum_price, $maximum_price, $genre)
	{
		$query = $this->make_query($minimum_price, $maximum_price, $genre);
		$data = $this->db->query($query);
		return $data->num_rows();
	}
	function fetch_data($limit, $start, $minimum_price, $maximum_price, $genre) {
		$query = $this->make_query($minimum_price, $maximum_price, $genre);

		$query .= ' LIMIT '.$start.', ' . $limit. ';';

		$data = $this->db->query($query);

		$output = '';
		if($data->num_rows() > 0)
		{
			foreach(array_reverse($data->result_array()) as $row)
			{
				$output .= '<div class="shop-item">
			<div class="image">
					';
			if($row['feature']=="exclusive") {
				$output.='
				<span class="badge rounded-0">Exclusive</span>';
			}
			$output .='	
			<a href="'.base_url('index.php/home/item/'.$row['id']).'">
			<img class="shop-item-image" src="'.$row['image'].'" alt=""/>
					
				</a>
				';
				if($row['status_id']=="1") {
					$output .='	
				<p class="sold-btn">Sold out</p>';
				} else {
					$output .='	<button  class="cart-btn" id="'.$row['id'].'" data-butnid="'.$row['id'].'" data-productid="'.$row['id'].'" data-productartist="'.$row['id'].'"
						data-producttitle="'.$row['title'].'" data-productprice="'.$row['price'].'" data-productimage="'.$row['image'].'"  value="add to cart" >
					<i class="fa fa-shopping-cart"></i>
					Add to cart
					</button>';
				}

				$output .='
					
					</div>

					<a class="artist" href="#">
						<div class="shop-item-details">
							<span class="brand">'.$row['artist'].'</span>
						</div>
					</a>

						<div class="title">
							<span class="format double-vinyl-lp">'.$row['title'].'</span>
						</div>
						<div>
							<span class="price">€'.$row['price'].'</span>
						</div>

				</div>
    ';
			}
		}
		else
		{
			$output = '<h3>No Data Found</h3>';
		}
		return $output;
	}

	public function get_product_by_genre($prod_id) {
		$this->db->select('genre');
		$this->db->from('product');
		$this->db->where('id', $prod_id);
		$query = $this->db->get();
		$genre = $query->row();

		$this->db->select('*');
		$this->db->from('product');
		$this->db->where('genre', $genre->genre);
		$row = $this->db->get();
		return $row->result();
	}


}


