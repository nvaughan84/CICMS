<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends Admin_controller {
	
	
	public function index()
	{
		$this->load->view('foo_message');
	}
	
	public function new_user()
	{
		$this->load->helper(array('form', 'url'));

		$this->load->library('form_validation');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('new_user');
		}
		else
		{
			$this->load->view('formsuccess');
		}
		;
	}
}

/* End of file welcome.php */
/* Location: ./application/modules/users/controllers/admin.php */