
<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Create_Learning extends CI_Controller {
 public function __construct() 
       {
            parent::__construct();

            $this->load->helper('form');
            $this->load->library('form_validation');
            $this->load->helper("url");
            $this->load->library('session');
            $this->load->library('PHPExcel');
            $this->load->library('pagination');
            if (!$this->session->userdata('is_logged_in'))
            {
            $this->ctrl_logout();
            redirect(base_url(), 'refresh');
            }
       }
       public function index()
		{
			$this->load->view('create_learning');
		}
                public function ctrl_logout() {
        $this->session->sess_destroy();
    }
      function level_save_data()
                {
 
                       $this->load->model('Create_Learning_Data');
                        $last_inserted_id = $this->Create_Learning_Data->db_save_learn_data();   
                        if($last_inserted_id==""){
                            echo 1;
                        }
                        
                      
                       
                       
                }
}
?>