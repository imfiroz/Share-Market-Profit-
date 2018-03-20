<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Stock_Feed extends CI_Controller 
{
 	public function __construct() 
    {
            parent::__construct();

            
            $this->load->helper("url");
            $this->load->library('session');
            if (!$this->session->userdata('is_logged_in'))
            {
           		$this->ctrl_logout();
            	redirect(base_url(), 'refresh');
            }
    }
    public function index()
	{
		echo 'Stock Feed';
		//$this->load->view('view_script');
	}
	
}