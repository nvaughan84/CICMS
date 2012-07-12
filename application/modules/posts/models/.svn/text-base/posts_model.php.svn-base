<?php

class Posts_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	
	public function get_all_posts($post_type='')
	{
		$query = $this->db->query('SELECT * FROM items WHERE type="post"');
		return $query->result();
	}
	
	
	
}