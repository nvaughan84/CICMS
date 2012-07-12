<?php 

class Cms_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
    
    function get_template($url)
    {
    	if($this->page_exists($url))
    	{
		    $query = $this->db->query("SELECT t.template FROM template t, items p WHERE p.slug='".$url."' AND t.page_id=p.id");
		
			if ($query->num_rows() > 0)
			{
			   $row = $query->row(); 
			
			   return $row->template;
			}
	    	return 'index';
    	}
    	else
    	{
    		return '404';
    	}
    }
    
    function page_exists($url)
    {
    	$query = $this->db->query("SELECT * FROM items WHERE slug='".$url."'");
	
		if ($query->num_rows() > 0)
		{		
		   return true;
		}
    	return false;
    }
}

?>