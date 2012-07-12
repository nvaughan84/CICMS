<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cms extends MX_Controller {

	public $test;
	
	public function index()
	{
		$this->load->view('welcome_message');
	}
	
	public function get_page($url)
	{	
		//get theme		
		$theme = $this->get_theme();
		//get page template		
		$this->load->model('Cms_model');
		$template = $this->Cms_model->get_template($url);
		
		$data['template_directory'] = $this->template_directory($theme);
		$data['test'] = 'test';
		$this->load->view('themes/'.$theme.'/'.$template, $data);
		
		
		
		
	}
	
	public function get_theme()
	{
		return 'default';
	}
	
	
	public function template_directory($theme)
	{
		return base_url().'application/views/themes/'.$theme.'/';
	}
	
	
}

/* End of file cms.php */
/* Location: ./application/controllers/cms.php */