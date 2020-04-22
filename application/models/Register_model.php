<?php

class Register_model extends CI_Model {

	public function register_user () {

		$data = array (

			'email' => $this->input->post('email'),
			'password' =>md5($this->input->post('password')),
			'name' =>$this->input->post('name'),
			'surname' =>$this->input->post('surname'),
			'country' =>$this->input->post('country'),
			'city' =>$this->input->post('city'),
			'street' =>$this->input->post('street'),
			'building' =>$this->input->post('building'),
			'zip' =>$this->input->post('zip'),
			'phone' =>$this->input->post('phone'),
			'is_active' => 0,
			'role_id'=>2
		);
		$this->db->insert('users', $data);
		$token =bin2hex(openssl_random_pseudo_bytes(32, $cstrong));
		$user_token =array(
			'email' => $this->input->post('email'),
			'token'=>$token,
			'date_created' =>time()
		);
		$this->db->insert('user_token', $user_token);
		$this->sendEmail($token, 'verify');
	}


	public function sendEmail($token, $type) {
		$config = array(
			'protocol'=>'smtp',
			'smtp_host'=>'ssl://smtp.googlemail.com',
			'smtp_user'=>'tetianayaremko@gmail.com',
			'smtp_pass'=>'55aKenuh',
			'smtp_port'=> '465',
			'mailtype'=> 'html',
			'charset'=> 'iso-8859-1',
			'newline' =>"\r\n",
			'wordwrap' => TRUE
		);

		$this->load->library('email', $config);
		$this->email->from('tetianayaremko@gmail.com', 'Web app');
		$this->email->to($this->input->post('email'));
		if($type == 'verify') {
			$this->email->subject('Account verification');
			$this->email->message('Click here to verify account: <a href="' .
				base_url() . 'index.php/auth/verify?email=' . $this->input->post('email') .
				'&token=' . urlencode($token) . '">Activate</a>');
		}
		elseif ($type == 'forgot') {
			$this->email->subject('Reset password');
			$this->email->message('Click here to reset your password: <a href="' .
				base_url() . 'index.php/auth/resetpassword?email=' . $this->input->post('email') .
				'&token=' . urlencode($token) . '">Reset</a>');
		}

		//$this->email->send();
		if($this->email->send()) {
			return true;
		}else {
			echo $this->email->print_debugger();
			die;
		}


	}







}
