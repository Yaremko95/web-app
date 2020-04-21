<?php

class Authorization
{

	public function check($params)
	{

		//lpad access control list
		require_once('acl.php');
		//get controller and action
		$ci =& get_instance();
		$controller = $ci->router->fetch_class();
		$action = $ci->router->fetch_method();
		//validate if that action is public(no session needed)
		if (!empty($allowAll[$controller][$action])) {
			return TRUE;
		}


		//get session information
		if (isset($_COOKIE) && ($_COOKIE['ci_session'])) {
			$ci_session = $ci->session->userdata;
			if (!empty($ci_session['logged_in'])) {
				$session = $ci_session['logged_in'];
				$session_role = $ci_session['role_id'];

			}
		}


		if (!isset($session) || !isset($session_role)) {
			redirect(base_url('index.php/auth/login'));
			//redirect(base_url('index.php/common/unauthorized'));
			return;

		} else {
			//check that user is able to access action
			if (empty($allowOnly[$session_role][$controller][$action])
				|| $allowOnly[$session_role][$controller][$action] != TRUE) {
				redirect(base_url('index.php/common/unauthorized'));
			}
		}
		return true;


	}


}










