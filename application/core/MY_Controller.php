<?php

/**
 * Base Controller
 */

class MY_Controller extends MX_Controller {
                      // or MX_Controller if you use HMVC, linked above
    function __construct()
    {
        parent::__construct();
        // Load shared resources here or in autoload.php
    }
}

/**
 * Back end Controller
 * 
 */ 
class Admin_Controller extends MY_Controller {

    function __construct()
    {
        parent::__construct();
        // Check login, load back end dependencies
       /* if(!$this->session->userdata('logged_in'))
        {
        	 redirect('/login/', 'refresh');
        }*/
    }
}

/**
 * Default Front-end Controller
 * 
 */ 
class Public_Controller extends MY_Controller {

    function __construct()
    {
        parent::__construct();
        // Load any front-end only dependencies
    }
}