<?php




class User extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
	}

	public  function user_profile() {

		if($this->session->userdata("role_id")=='1') {
			redirect('admin/index');
		};
		if(isset($_POST['update'])) {

			$this->form_validation->set_rules('new_email', 'Email', 'required|valid_email',
				array('required' => 'Please, enter new email in order to update', 'valid_email' => 'Email not valid'));
			$this->form_validation->set_rules('new_name', 'Name', 'required',
				array('required' => 'Please, enter new name in order to update', 'valid_email' => 'Email not valid'));
			$this->form_validation->set_rules('new_surname', 'Surname', 'required',
				array('required' => 'Please, enter new surname in order to update', 'valid_email' => 'Email not valid'));

			if ($this->form_validation->run() == true) {
				$this->load->model('auth_model', 'auth');
				$this->auth->updateEmail();
				$this->session->set_userdata($this->auth->get_data());
				$this->session->set_flashdata("message", "<div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
  			Your data has been updated!<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
  			<span aria-hidden=\"true\">&times;</span></button></div>");
				redirect('user/user_profile');

			}
		}
		elseif (isset($_POST['update-password'])) {
			$this->form_validation->set_rules('update_password', 'Password', 'trim|required|min_length[8]');
			$this->form_validation->set_rules('update_password2', 'Confirm password', 'trim|required|matches[update_password]|min_length[8]');
			if ($this->form_validation->run() == true) {
				$this->load->model('auth_model', 'auth');
				$this->auth->updatePassword();
				$this->session->set_userdata($this->auth->get_data());
				$this->session->set_flashdata("pass_message", "<div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
  			Your password has been updated!<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
  			<span aria-hidden=\"true\">&times;</span></button></div>");

				redirect("user/user_profile");
			}
		}
		$this->load->view('userProfile');


	}




}
