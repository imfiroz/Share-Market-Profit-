<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Create_Hsn extends CI_Controller {
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
            $this->load->view('create_HSN');
	}
        public function ctrl_logout() {
        $this->session->sess_destroy();
    }
        function check_hsn() 
        {            
           $code = $_POST['code_data'];
            $this->load->model('Create_Hsn_Data');
            $code_data = $this->Create_Hsn_Data->db_chk_hsn($code);
            $rowcount = $code_data->num_rows();
			if ($rowcount == 0)
				{
					$m=1;
					echo $m;			
				} 
			else 
				{
					$m=0;
					echo $m;      
				}
		
        }
        function hsn_user_data() 
        {
            $this->load->model('Create_Hsn_Data');
            $report_name = $this->Create_Hsn_Data->db_save_hsn_data();
            $final_data = array(
                'redirect_path' => base_url("Create_Hsn")
            );
            echo json_encode($final_data);
        }
        
   
}