<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends MX_controller {
	
	public function __construct()
	{		
		parent::__construct();
	}
	
	public function index()
	{
		$this->load->view('login_page');
		
		$newdata = array(
                   'username'  => 'johndoe',
                   'logged_in' => TRUE
               );

		$this->session->set_userdata($newdata);
		
	}
	
	public function logout()
	{
		
	}
}

/* End of file login.php */
/* Location: ./application/modules/login/controllers/login.php */