<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Posts extends Public_controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	
	public function __construct()
	{		
		parent::__construct();
	}
	
	public function index()
	{	
		$this->load->model('posts_model');
		$posts = $this->posts_model->get_all_posts();
		$data['posts'] = $posts;
		$this->load->view('show_posts', $data);
	}
	
	
}

/* End of file posts.php */