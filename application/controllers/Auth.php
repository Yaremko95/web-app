<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{

	function __construct()
	{
		parent::__construct();

	}

	public function logged_in_check()
	{
		if ($this->session->userdata("logged_in")) {
			redirect("user/user_profile");
		}
	}

	public function logout()
	{

		$this->session->unset_userdata("logged_in");
		$this->session->sess_destroy();
		$this->cart->destroy();
		redirect("auth/login");
	}

	public function login()
	{

		$this->logged_in_check();


		$this->form_validation->set_rules("email", "Email", "trim|required|valid_email");
		$this->form_validation->set_rules("password", "Password", "trim|required");
		if ($this->form_validation->run() == true) {

			$this->load->model('auth_model', 'auth');
			$this->load->model('Cart_model', 'cmodel');
			$status = $this->auth->validate();
			if ($status == ERR_INVALID_EMAIL) {
				$this->session->set_flashdata("error", "Email is not valid");
			} elseif ($status == ERR_INVALID_PASSWORD) {
				$this->session->set_flashdata("error", "Password is not valid");
			} elseif ($status == ERR_EMAIL_NOT_ACTIVE) {
				$this->session->set_flashdata("error", "Email is not active");
			} else {

				$user_role = $this->auth->user_role();
				$data=(object)array( $this->cart->contents());
				echo '<pre>'; echo $data; echo '</pre>';
				die();
				$this->cmodel->set_user_cart($this->session->userdata('email'), array('new_cart'=>$data));
				$this->session->set_userdata("role_id", $user_role);
				$this->session->set_userdata($this->auth->get_data());
				$this->session->set_userdata("logged_in", true);




					if($user_role==1) {
						redirect("admin/index");
					}
					redirect("home/products");


			}
		}
			$this->load->view('login1');

	}


	public function register()
	{
		$this->logged_in_check();
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]',
			array('is_unique' => 'This email has already registered'));
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[8]');
		$this->form_validation->set_rules('password2', 'Confirm password', 'required|matches[password]|min_length[8]');
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('surname', 'Surname', 'required');
		$this->form_validation->set_rules('country', 'Country field', 'required');
		$this->form_validation->set_rules('city', 'City field', 'required');
		$this->form_validation->set_rules('street', 'Street field', 'required');
		$this->form_validation->set_rules('zip', 'ZIP field', 'required');
		$this->form_validation->set_rules('building', 'Building field', 'required');
		$this->form_validation->set_rules('phone', 'Phone field', 'required');

		if ($this->form_validation->run() == TRUE) {
			$this->load->model('Register_model', 'reg');
			$this->reg->register_user();
			redirect("register_successful/registration_complete", "refresh");

		}

			$this->load->view('register');

	}

	public function verify () {
		//require_once(APPPATH.'libraries/random.php');

		$email=$this->input->get('email');
		$token= $this->input->get('token');
		$user = $this->db-> get_where('users', array('email'=>$email))->row_array();

		if($user) {
			$user_token=$this->db->get_where('user_token', array('token'=>$token))->row_array();
			if($user_token) {
				$this->db->set('is_active', 1);
				$this->db->where('email', $email);
				$this->db->update('users');
				$this->db->delete('user_token', array('email'=>$email));
				$this->session->set_flashdata("error", "Your account has been activated");
				redirect("auth/login");
		  	}else {
				$this->session->set_flashdata("error", "Token doesn't exist");
				redirect("auth/login");
			}
		}else {
			$this->session->set_flashdata("error", "Email does not exist");
			redirect("auth/login");

		}

	}

	public function forgotPassword () {
		//require_once(APPPATH.'libraries/random.php');
		$this->form_validation->set_rules("email", "Email", "trim|required");
		if($this->form_validation->run() == false) {
			$this->load->view('forgotPassword');
		}else {
			$email = $this->input->post('email');
			$user=$this->db->get_where('users', array('email'=>$email, 'is_active'=>1))->row_array();
			if($user) {
				$token = bin2hex(openssl_random_pseudo_bytes(32, $cstrong));
				$user_token=array(
					'email'=>$email,
					'token'=>$token,
					'date_created'=>time()
				);
				$this->db->insert('user_token', $user_token);
				$this->load->model('Register_model', 'reg');
				$this->reg->sendEmail($token, 'forgot');
				$this->session->set_flashdata("message", "Check your email to reset your password");
				redirect("auth/forgotPassword");

			}else{
				$this->session->set_flashdata("message", "Email doesn't exist or is not activated");
				redirect("auth/forgotPassword");
			}
		}
	}




	public function resetPassword() {
		//require_once(APPPATH.'libraries/random.php');
		$email =$this->input->get('email');
		$token =$this->input->get('token');
		$user = $this->db->get_where('users', array('email'=>$email))->row_array();
		if($user) {
			$user_token=$this->db->get_where('user_token', array('token'=>$token))->row_array();
			if($user_token) {
				$this->session->set_userdata('reset_email', $email);
				$this->changePassword();
			}else {
				$this->session->set_flashdata("error", "Token problem");
				redirect("auth/login");
			}
		} else{
			$this->session->set_flashdata("error", "Reset password failed!");
			redirect("auth/login");
		}
	}


	public function changePassword() {
		if(!$this->session->userdata('reset_email')) {
			redirect('auth/login');
		}
		$this->form_validation->set_rules('new_password', 'Password', 'trim|required|min_length[8]');
		$this->form_validation->set_rules('new_password2', 'Confirm password', 'trim|required|matches[new_password]|min_length[8]');
		if($this->form_validation->run() == false) {
			$this->load->view('passReset');
		} else {
			$password= md5($this->input->post('new_password'));
			$email=$this->session->userdata('reset_email');
			$this->db->query("UPDATE users set password='$password'  where email='$email'");
			$this->session->unset_userdata('reset_email');
			$this->session->set_flashdata("error", "Your password has been reset");
			redirect("auth/login");

		}

	}














}

