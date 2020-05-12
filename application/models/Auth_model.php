<?php

class Auth_model extends CI_Model {

	private $_data=array();


	public function validate() {
		$email =$this->security->xss_clean($this->input->post('email'));
		$password =$this->security->xss_clean(md5($this->input->post('password')));
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('email', $email);
		$query = $this->db->get();

		if($query->num_rows()==1) {
			$row=$query->result();

			if ($row[0]->is_active=='1') {

				if ($row[0]->password == $password) {
					unset($row['password']);
					$this->_data = array(
						'email' => $row[0]->email,
						'name'=> $row[0]->name,
						'surname'=> $row[0]->surname,
						'country'=> $row[0]->country,
						'city'=> $row[0]->city,
						'street'=> $row[0]->street,
						'zip'=> $row[0]->zip,
						'building'=> $row[0]->building,
						'phone'=> $row[0]->phone,
						'is_active' =>$row[0]->is_active,
						'role_id'=> $row[0]->role_id
					);
					return ERR_NONE;
				}
				return ERR_INVALID_PASSWORD;
			}
			return ERR_EMAIL_NOT_ACTIVE;

		} else {
			return  ERR_INVALID_EMAIL;
		}
	}


	public function get_data()
	{
		return $this->_data;
	}



	public function user_role() {
		if($this->_data['role_id']=='1') {
			return 1;
		}
		return 2;
	}

public function updateDelivery() {
	$country = $this->security->xss_clean($this->input->post('country'));
	$city = $this->security->xss_clean($this->input->post('city'));
	$street = $this->security->xss_clean($this->input->post('street'));
	$zip = $this->security->xss_clean($this->input->post('zip'));
	$building = $this->security->xss_clean($this->input->post('building'));
	$phone = $this->security->xss_clean($this->input->post('phone'));

	$session_email = $this->session->userdata('email');
	$user = $this->db->get_where('users', array('email' => $session_email));
	if ($user) {
		$this->db->query("UPDATE users set country='$country'  where email='$session_email'");
		$this->db->query("UPDATE users set city='$city'  where email='$session_email'");
		$this->db->query("UPDATE users set street='$street'  where email='$session_email'");
		$this->db->query("UPDATE users set zip='$zip'  where email='$session_email'");
		$this->db->query("UPDATE users set building='$building'  where email='$session_email'");
		$this->db->query("UPDATE users set phone='$phone'  where email='$session_email'");
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('email', $session_email);
		$query = $this->db->get();
		if ($query->num_rows() == 1) {
			$row = $query->result();

			$this->_data = array(
				'email' => $row[0]->email,
				'name'=> $row[0]->name,
				'surname'=> $row[0]->surname,
				'country'=> $row[0]->country,
				'city'=> $row[0]->city,
				'street'=> $row[0]->street,
				'zip'=> $row[0]->zip,
				'building'=> $row[0]->building,
				'phone'=> $row[0]->phone,
				'is_active' =>$row[0]->is_active,
				'role_id'=> $row[0]->role_id
			);
		}
	}
}

	public function updateEmail()
	{
		$new_email = $this->security->xss_clean($this->input->post('new_email'));
		$new_name = $this->security->xss_clean($this->input->post('new_name'));
		$new_surname = $this->security->xss_clean($this->input->post('new_surname'));

		$session_email = $this->session->userdata('email');
		$user = $this->db->get_where('users', array('email' => $session_email));
		if ($user) {
			$this->db->query("UPDATE users set email='$new_email'  where email='$session_email'");
			$this->db->query("UPDATE users set name='$new_name'  where email='$session_email'");
			$this->db->query("UPDATE users set surname='$new_surname'  where email='$session_email'");
			$this->db->select('*');
			$this->db->from('users');
			$this->db->where('email', $new_email);
			$query = $this->db->get();
			if ($query->num_rows() == 1) {
				$row = $query->result();

				$this->_data = array(
					'email' => $row[0]->email,
					'name'=> $row[0]->name,
					'surname'=> $row[0]->surname,
					'country'=> $row[0]->country,
					'city'=> $row[0]->city,
					'street'=> $row[0]->street,
					'zip'=> $row[0]->zip,
					'building'=> $row[0]->building,
					'phone'=> $row[0]->phone,
					'is_active' =>$row[0]->is_active,
					'role_id'=> $row[0]->role_id
				);
			}
		}
	}


	public function updatePassword() {
		$password = md5($this->input->post('update_password'));
		$session_email = $this->session->userdata('email');
		$user = $this->db->get_where('users', array('email' => $session_email));
		if ($user) {
			$this->db->query("UPDATE users set password='$password'  where email='$session_email'");
			$this->db->select('*');
			$this->db->from('users');
			$this->db->where('email', $session_email);
			$query = $this->db->get();
			if ($query->num_rows() == 1) {
				$row = $query->result();
				$this->_data = array(
					'email' => $row[0]->email,
					'name'=> $row[0]->name,
					'surname'=> $row[0]->surname,
					'country'=> $row[0]->country,
					'city'=> $row[0]->city,
					'street'=> $row[0]->street,
					'zip'=> $row[0]->zip,
					'building'=> $row[0]->building,
					'phone'=> $row[0]->phone,
					'is_active' =>$row[0]->is_active,
					'role_id'=> $row[0]->role_id

				);
			}
		}
	}



}
