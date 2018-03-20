<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Upload_Customer extends CI_Controller {
  public function __construct() {
        parent::__construct();

        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->helper("url");
        $this->load->library('session');
        $this->load->library('PHPExcel');
        $this->load->library('pagination');
        /*if (!$this->session->userdata('is_logged_in')) {
            $this->ctrl_logout();
            redirect(base_url(), 'refresh');
        }*/
    }
       public function index()
	{
		$this->load->view('upload_customer');
	}
        public function upload_view($upload_type)
	{
		 $upload_type['type']=$upload_type;
		//header("Location: upload_customer?type=$upload_type");
        $this->load->view("upload_customer",$upload_type);		
	}
        public function update_column_mapping() {     
        $this->load->model('Upload_Customer_Data');
		 $upload_type=$_POST['upload_type'];
        $file_reg_id = $this->Upload_Customer_Data->update_column_mapping_db($upload_type);
        $a = ($file_reg_id);
		$currentURL = current_url(); //http://myhost/main
		$params   = $_SERVER['QUERY_STRING']; //my_id=1,3
		$fullURL = $currentURL . '/'. $params;
		$match="Admin";
		$fullURL1 = substr($fullURL, 0, strpos($fullURL, "index"));
		 redirect($fullURL1.'View_Customer', 'refresh');
        //$this->load->view('index',$a,$upload_type);
	//$this->load->view('index1');
			// $this->upload_view($upload_type);
			/* $final_data = array(
            'redirect_path' => base_url("Dashboard")
        );*/
       // echo json_encode($final_data);
    }
     public function name_mapping() {
        $this->load->model('Upload_Customer_Data');
        $aa = $this->uri->segment(3);      
        $rows = array();
        $combo_mapping = $this->Upload_Customer_Data->destination_column_dropdown_name();      
        $rows = array();
        foreach ($combo_mapping->result() as $row) {
            $rows[] = $row;
          
            $datas = array_merge($rows);
        }
        echo json_encode($rows);
    }
       public function import() {
       
       if (isset($_POST["import"])) {
            $cust_type=$_POST['cust_type'];
            $filename = $_FILES["file"]["name"];
            $path = $_FILES['file']['name'];
             $ext = pathinfo($path, PATHINFO_EXTENSION);
            if ($ext == "csv") {
                //$upload_type = $_POST['upload_type'];

                $this->load->model('Upload_Customer_Data');
              //  $data['h'] = $this->Db_F2S->view_data();
               // $this->db->reconnect();
                $qu = $this->Upload_Customer_Data->register_file();
                $data1['input_id'] = $qu['input_id'];
                $data1['r'] = $qu['model'];
                $this->db->reconnect();

                if (($data1['r']) == 1) {
                    $map['map'] = $this->Upload_Customer_Data->column_mapping($data1['input_id']);
                }
                $a = array_merge($data1, $map, $qu);
              //  print_r($data1['r']);
              $this->load->view('upload_customer',$a);
                
            }
            if ($ext == "xls" || $ext == "xlsx") {
                $this->upload_excel();
            }       
        }   
    }
    /*function upload_excel() 
	{
        // "madhu";
        $file = $_FILES['file']['name'];
        $this->load->model('Upload_Customer_Data');     
        $qu = $this->Upload_Customer_Data->excel_register_file();
        $data1['input_id'] = $qu['input_id'];     
        $data1['r'] = $qu['model'];
	//	print_r( $qu['model']);
		$aa_j=$qu['json_data'];
		/*foreach($aa_j as $qu){
			echo $qu['email'];
			$qu_data=$this->db->query("select * from tbl_vendor where Email ='".$qu['email']."'or  Mobile='".$qu['email']."'");
			 $ip_rw=$qu_data->num_rows();
		
		
		if($ip_rw <=0){*
			//echo"xx";
        $this->db->reconnect();

       if (($data1['r']) == 1) {
            $map['map'] = $this->Upload_Customer_Data->column_mapping($data1['input_id']);
        $a = array_merge($data1, $map, $qu);
		//$this->load->view('upload_customer',$a);
	  /* }
		}
       else{
		 //  exit;
		//echo"aaa";
		//$this->load->view('index');
	}*
		}*/
	function upload_excel() {
        // "madhu";
		  $cust_type['cust_type']=$_POST['cust_type'];
		 // print_r($cust_type['cust_type']);
        $file = $_FILES['file']['name'];
        $this->load->model('Upload_Customer_Data');  
        $qu = $this->Upload_Customer_Data->excel_register_file();
        $data1['input_id'] = $qu['input_id'];     
        $data1['r'] = $qu['model'];
        $this->db->reconnect();

        if (($data1['r']) == 1) {
            $map['map'] = $this->Upload_Customer_Data->column_mapping($data1['input_id']);
        }
        
        $a = array_merge($data1, $map, $qu,$cust_type);    
        $this->load->view('upload_customer', $a,$cust_type);
    }

    
    
}