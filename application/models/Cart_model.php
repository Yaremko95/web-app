<?php




class Cart_model extends CI_Model
{
	public function get_prod_data ($prod_id) {
		$this->db->select('id, artist, title, price, q_ty, image');
		$this->db->from('product');
		$this->db->where('id', $prod_id);
		$query = $this->db->get();
		return $query->row();
	}

//	public function getAllFromCart() {
//	$this->db->select('prod_id, qty');
//	$this->db->from('prod_cart');
//	$query = $this->db->get();
//	return $query->result();
//	}
	public function getAllFromCart()
	{
		foreach ($this->cart->contents() as $items) {
			$cart = array(
				'id' => $items->id,
				'qty' => $items->qty,

			);
		}
	}




	public function getAllFromUserCart($email) {
		$this->db->select('prod_id, qty');
		$this->db->from('user_cart');
		$this->db->where('user_email', $email);
		$query = $this->db->get();
		return $query->result();
	}





	public function add_to_cart($prod_id) {

		$this->db->select('*');
		$this->db->from('prod_cart');
		$this->db->where('prod_id', $prod_id);
		$this->db->where('sess_id', session_id());
		$query = $this->db->get();
		$row=$query->result();

		if($query->num_rows()>0) {
			$session_id=session_id();
			$qty= $row[0]->qty+1;
			$this->db->query("UPDATE prod_cart set qty='$qty'  where prod_id='$prod_id' and sess_id='$session_id'");

		} else {
//			$data = array(
//				'prod_id' => $prod_id,
//				'sess_id'=>session_id(),
//				'qty'=>1
//			);
//			$this->db->insert('prod_cart', $data);

		}
	}

	public function add_to_user_cart($email, $prod_id) {
		$this->db->select('*');
		$this->db->from('user_cart');
		$this->db->where('prod_id', $prod_id);
		$this->db->where('user_email', $email);


		$query = $this->db->get();
		$row=$query->result();
		if($query->num_rows()>0) {
			$qty= $row[0]->qty+1;
			$this->db->query("UPDATE user_cart set qty='$qty'  where prod_id='$prod_id'");
		}
		else {
			$data = array(
				'prod_id' => $prod_id,
				'user_email'=>$email,
				'qty'=>1
			);
			$this->db->insert('user_cart', $data);
		}
	}



	public function remove_from_cart($prod_id) {

		$this->db->select('*');
		$this->db->from('prod_cart');
		$this->db->where('prod_id', $prod_id);
		$this->db->where('sess_id', session_id());
		$query = $this->db->get();
		$row=$query->result();

		if($query->num_rows()>0) {
			$session_id=session_id();
			$this->db->delete('prod_cart', array('prod_id' => $prod_id, 'sess_id'=>$session_id));
		}
	}
	public function remove_from_user_cart($email, $prod_id) {

		$this->db->select('*');
		$this->db->from('user_cart');
		$this->db->where('prod_id', $prod_id);
		$this->db->where('user_email', $email);
		$query = $this->db->get();
		$row=$query->result();

		if($query->num_rows()>0) {
			$this->db->delete('user_cart', array('prod_id' => $prod_id, 'user_email'=>$email));
		}
	}


	public function minus_qty($prod_id, $qty) {
		$this->db->select('*');
		$this->db->from('prod_cart');
		$this->db->where('prod_id', $prod_id);
		$this->db->where('sess_id', session_id());
		$query = $this->db->get();
		$row=$query->result();

		if($query->num_rows()>0) {
			$session_id = session_id();
			$this->db->query("UPDATE prod_cart set qty='$qty'  where prod_id='$prod_id' and sess_id='$session_id'");
		}

	}

	public function minus_qty_user_cart($email, $prod_id, $qty) {
		$this->db->select('*');
		$this->db->from('user_cart');
		$this->db->where('prod_id', $prod_id);
		$this->db->where('user_email', $email);
		$query = $this->db->get();
		$row=$query->result();

		if($query->num_rows()>0) {

			$this->db->query("UPDATE user_cart set qty='$qty'  where prod_id='$prod_id' and user_email='$email'");
		}

	}


	public function set_user_cart($email, $data) {
		foreach ($data as $item) {
			if($this->exists_in_user_cart($item->prod_id, $email)) {
				$this->db->query("UPDATE user_cart set qty='$item->qty'  where prod_id='$item->prod_id'");
			} else {
				$user_cart= array(
					'user_email'=>$email,
					'prod_id'=>$item->prod_id,
					'qty'=>$item->qty
				);
				$this->db->insert('user_cart', $user_cart);
			}

		}


	}
	public function exists_in_user_cart($prod_id, $email) {
		$this->db->select('*');
		$this->db->from('user_cart');
		$this->db->where('prod_id', $prod_id);
		$this->db->where('user_email', $email);
		$query = $this->db->get();

			if($query->num_rows()>0) {
				return true;
			} else{
				return false;
			}
		}





}
