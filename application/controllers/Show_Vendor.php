<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Show_Vendor extends CI_Controller {
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
			$this->load->view('vendor_dashboard');
		}
                public function ctrl_logout() {
        $this->session->sess_destroy();
    }
      public function get_vendor_count_for_vendor() {
            $month=$_POST['month'];
            $year=$_POST['year'];
            $previous_month=$_POST['previous_month'];            
            $this->load->model('Show_Vendor_Data');
            $getCountry['data'] = $this->Show_Vendor_Data->getcount_for_vendor_according_date($month,$year,$previous_month);         
          echo json_encode($getCountry[data]);
    }
        public function get_vendor_product_count() {
            $this->load->model('Show_Vendor_Data');
            $getCountry = $this->Show_Vendor_Data->get_product_count();
            $rowcount = $getCountry->num_rows();
            echo $rowcount;      
    }
    public function get_total_vendor_product_count() {
            $this->load->model('Show_Vendor_Data');
            $getCountry = $this->Show_Vendor_Data->get_product_total_count();
            $rowcount = $getCountry->num_rows();
             echo $rowcount;
       
    }
    public function earnings_of_daily() {
            $today=$_POST['today'];
            $month=$_POST['month'];
            $year=$_POST['year'];
            $p_date=$_POST['p_date'];            
            $this->load->model('Show_Vendor_Data');
            $getCountry['data'] = $this->Show_Vendor_Data->getdaily_earning($today,$month,$year,$p_date);         
             echo json_encode($getCountry[data]);
    }
     public function Sales_of_daily() {
            $today=$_POST['today'];
            $month=$_POST['month'];
            $year=$_POST['year'];
            $p_date=$_POST['p_date'];            
            $this->load->model('Show_Vendor_Data');
            $getCountry['data'] = $this->Show_Vendor_Data->getdaily_sales($today,$month,$year,$p_date);         
            echo json_encode($getCountry[data]);
    }
    	 public function get_satisfaction() {
            $this->load->model('Show_Vendor_Data');
            $getCountry = $this->Show_Vendor_Data->getsatsifaction();
            echo $getCountry;
    
       
    }
     public function get_info_for_chart() {
            $this->load->model('Show_Vendor_Data');
            $getCountry = $this->Show_Vendor_Data->get_graph_info();
            $rows1 = array();
                foreach ($getCountry->result() as $row) {
                    $rows1[] = array
                        (                        
                        "sale" => $row->sale,
                        "name" => $row->name,						                    
                         );
                }        
                echo json_encode($rows1);             
       
    }
    public function get_trending_product() {
            $this->load->model('Show_Vendor_Data');
            $getCountry = $this->Show_Vendor_Data->get_trending_product_by_cat();
            $rows1 = array();
                foreach ($getCountry->result() as $row) {
                    $rows1[] = array
                        (                        
                        "count" => $row->count,
                        "category_name" => $row->category_name,	
                        "sale" => $row->total_sale,	
                         );
                }        
                echo json_encode($rows1);             
       
    }
     public function get_trending_product_total() {
            $this->load->model('Show_Vendor_Data');
            $getCountry = $this->Show_Vendor_Data->get_total_sale_value();
            echo $getCountry;
    
       
    }
    function fetch_feedback_messages() 
            {              
                $this->load->model('Show_Vendor_Data');
                $user_data = $this->Show_Vendor_Data->fetch_feedback_data();      
                $rows1 = array();
                foreach ($user_data->result() as $row) {
                    $rows1[] = array
                        (

                        "msg" => $row->msg,
                        "Name" => $row->Name,                      
                    );
                }        
                echo json_encode($rows1);             
        }
        public function get_vendors() 
                {
                        $this->load->model('Show_Vendor_Data');
                        $getCountry = $this->Show_Vendor_Data->getVendor_Data();
                       foreach ($getCountry->result() as $row)
                            {
                            $data1[] = $row;
                            }
                        echo json_encode($data1);
                }
}
?>
