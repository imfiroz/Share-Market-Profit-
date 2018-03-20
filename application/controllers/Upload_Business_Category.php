<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Upload_Business_Category extends CI_Controller {
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
		$this->load->view('upload_business_category');
	}
         public function ctrl_logout() {
        $this->session->sess_destroy();
    }
        public function upload_business()
                {
                    $this->load->view('upload_business_category');
                }
         public function import_business() {

       if (isset($_POST["import"])) {
            
            $filename = $_FILES["file"]["name"];
            $path = $_FILES['file']['name'];
            $ext = pathinfo($path, PATHINFO_EXTENSION);
            if ($ext == "csv") {                
                $this->load->model('Upload_Business_Data');             
                $qu = $this->Upload_Business_Data->register_file();
                $data1['input_id'] = $qu['input_id'];
                $data1['r'] = $qu['model'];
                $this->db->reconnect();

                if (($data1['r']) == 1) {
                    $map['map'] = $this->Upload_Business_Data->column_mapping($data1['input_id']);
                }
                $a = array_merge($data1, $map, $qu);              
                $this->load->view('upload_business_category',$a);
                
            }
            if ($ext == "xls" || $ext == "xlsx") {
                $this->upload_excel_business();
            }       
        }
    }
     function upload_excel_business() {        
        $file = $_FILES['file']['name'];
        $this->load->model('Upload_Business_Data');
        $qu = $this->Upload_Business_Data->excel_register_file();
        $data1['input_id'] = $qu['input_id'];
        $data1['r'] = $qu['model'];
        $this->db->reconnect();

        if (($data1['r']) == 1) {
            $map['map'] = $this->Upload_Business_Data->column_mapping($data1['input_id']);
        }       
        $a = array_merge($data1, $map, $qu);
        $this->load->view('upload_business_category', $a);
    }
     public function update_column_mapping_business() { 
        $this->import_business();     
        $this->load->model('Upload_Business_Data');
        $file_reg_id = $this->Upload_Business_Data->update_column_mapping_business_db();
        $a = ($file_reg_id);
        $this->load->view('upload_business_category', $a);
        $this->upload_business();      
    }
     public function name_mapping_chapter() {
        $this->load->model('Upload_Business_Data');
        $aa = $this->uri->segment(3);      
        $rows = array();
        $combo_mapping = $this->Upload_Business_Data->destination_column_dropdown_name();      
        $rows = array();
        foreach ($combo_mapping->result() as $row) {
            $rows[] = $row;
          
            $datas = array_merge($rows);
        }
        echo json_encode($rows);
    }
}