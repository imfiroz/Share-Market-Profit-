<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class View_Customer extends CI_Controller {
 public function __construct() 
       {
            parent::__construct();

            $this->load->helper('form');
            $this->load->library('form_validation');
            $this->load->helper("url");
            $this->load->library('session');
         // $this->load->library('PHPExcel');
            $this->load->library('pagination');
            if (!$this->session->userdata('is_logged_in'))
            {
           $this->ctrl_logout();
            redirect(base_url(), 'refresh');
            }
       }
       
     public function index()
	{
		$this->load->view('view_customer');
	}
     public function ctrl_logout() {
        $this->session->sess_destroy();
    }
	function check_name()
            {

           $m="";       
           $email = $_POST['email'];       
           $this->load->model('View_Customer_Data');       
           $email_add = $this->View_Customer_Data->db_chk_name($email);
               $rowcount = $email_add->num_rows();
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
      function check_email_customer()
            {

           $m="";       
           $email = $_POST['email'];       
           $this->load->model('View_Customer_Data');       
           $email_add = $this->View_Customer_Data->db_chk_email_of_customer($email);
               $rowcount = $email_add->num_rows();
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
       function fetch_customer_details()
            {
                  
                $this->load->model('View_Customer_Data');
                $user_data = $this->View_Customer_Data->fetch_customer_data();
            }
       function ajax_delete_customer($c_id)
            {       
        $this->load->model('View_Customer_Data');
        //$user_data = $this->View_Customer_Data->fetch_customer_data_to_delete($c_id);                 
      $this->load->model('View_Branch_Data');
		$qu=$this->db->query("delete from tbl_vendor where Vendor_Id=$c_id");
		echo $this->db->affected_rows();
            }
			function fetch_chapter_details_excel()
     {
		$v_id = $this->session->userdata('Vendor_Id');
                    $u_id=0;
                  //  $user = $this->db->select ("tbl_chapter_master where is_active='" . $u_id."'and ceated_by_user_id='".$v_id."'");
		 
		 
			 $this->db->select("Name,Mobile,Address,Email", FALSE)
             ->from('tbl_vendor');
             
		     $q = $this->db->get();
			 //print_r($q);
            if ($q->num_rows() > 0) {
				
                foreach (($q->result()) as $row) {
                    $data[] = $row;
                }
				
            } else {
                $data = NULL;
            }

            if (!empty($data)) {
				//print_r($data);

                $this->load->library('Excel');
                $this->excel->setActiveSheetIndex(0);
                $this->excel->getActiveSheet()->setTitle('Customer');
                // $this->excel->getActiveSheet()->setTitle(lang('products_report'));
                $this->excel->getActiveSheet()->SetCellValue('A1', 'Name');
                $this->excel->getActiveSheet()->SetCellValue('B1', 'Mobile');
				  $this->excel->getActiveSheet()->SetCellValue('C1', 'Address');
                $this->excel->getActiveSheet()->SetCellValue('D1', 'Email');
               
				//  $this->excel->getActiveSheet()->SetCellValue('H1', lang('gstin'));

                $row = 2;
                $sQty = 0;
                $pQty = 0;
                $sAmt = 0;
                $pAmt = 0;
                $bQty = 0;
                $bAmt = 0;
                $pl = 0;
                foreach ($data as $data_row) {
					//echo"aaa";
                    $this->excel->getActiveSheet()->SetCellValue('A' . $row, $data_row->Name);
                    $this->excel->getActiveSheet()->SetCellValue('B' . $row, $data_row->Mobile);
					  $this->excel->getActiveSheet()->SetCellValue('C' . $row, $data_row->Address);
                    $this->excel->getActiveSheet()->SetCellValue('D' . $row, $data_row->Email);
                   
					  //    $this->excel->getActiveSheet()->SetCellValue('H' . $row, $data_row->cf1);
                 
                    $row++;
                }
              

                 $this->excel->getActiveSheet()->getColumnDimension('A')->setWidth(35);
                $this->excel->getActiveSheet()->getColumnDimension('B')->setWidth(35);
				   $this->excel->getActiveSheet()->getColumnDimension('C')->setWidth(35);
                $this->excel->getActiveSheet()->getColumnDimension('D')->setWidth(35);
               
					  
                $this->excel->getDefaultStyle()->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
                $this->excel->getActiveSheet()->getStyle('C2:G' . $row)->getAlignment()->setWrapText(true);
                $filename = 'cust_data';
               $this->load->helper('excel');
                return create_excel($this->excel, $filename);

            }
			
	 }
       function ajax_edit_customer($c_id)
            {    
                $this->load->model('View_Customer_Data');
                $user_data = $this->View_Customer_Data->fetch_customer_data_to_update($c_id);
                $event = "Customer";
                $address_path = "customer_image";
                $path = $this->View_Customer_Data->db_retrieve_base_path_image($address_path, $event);
                $path1 = $path->folder_path;
                $file_path = str_replace('kkkzzz', "$c_id", $path1);
                $this->load->helper('directory'); //load directory helper
                $dir = ("Image_file_container/$file_path"); // Your Path to folder
                $map = directory_map($dir);
         
                if ($map == "") {
                    echo json_encode(array("table" => $user_data, "im" => "no data", "path" => "0", "dir" => "0"));
                } else {
                   $count_image = count($map);
                    if ($count_image <= 0) {
                        echo json_encode(array("table" => $user_data, "im" => "no data", "path" => "0", "dir" => "0"));
                    }
                    if ($count_image >= 1) {


                        foreach ($map as $image_id) {

                            if (strpos($image_id, 'txt') == false) {


                                $im[] = base_url($dir . "/" . $image_id);
                                //  echo $image_id;
                                $path_img[] = $image_id;

                                $directory[] = $dir;
                                // 
                            } //
                            //   print_r($path_img); 
                        }
                        echo json_encode(array("table" => $user_data, "im" => $im, "path" => $path_img, "dir" => $directory));
                    }
                    
                }
            }
            function delete_img_from_folder($id)
            {

                $img = $_POST['img_name'];
                $dir1 = $_POST['dir'];
                $image_dir = str_replace('/', '\\', $dir1);
                $dir = str_replace('image', 'txt', $dir1);
                $str = str_replace('/', '\\', $dir);
                $new_extension = "txt";
                $aa = preg_replace('/\.[^.]+$/', '.' . $new_extension, $img);
                $this->load->helper("file");
                delete_files($aa);
                unlink(FCPATH . $str . "\\" . $aa);
                unlink(FCPATH . $image_dir . "\\" . $img);
                $final_data = "1";
                //  $this->ajax_edit_customer($id);
                echo json_encode(array("ok" => $final_data));
            }
            public function get_city_update()
            {
                $this->load->model('View_Customer_Data');
                $getCountry = $this->View_Customer_Data->getCity_update(); 
                foreach ($getCountry->result() as $row) {
                    $data1[] = $row;
                }
                echo json_encode($data1);
            }
            public function get_state_data()
            {
                $this->load->model('View_Customer_Data');
                $getCountry = $this->View_Customer_Data->getState_Data();
                foreach ($getCountry->result() as $row) {
                    $data1[] = $row;
                }
                echo json_encode($data1);
            }
            public function get_city()
            {
               $city = $_POST['city'];
               $this->load->model('View_Customer_Data');
               $get_state = $this->View_Customer_Data->getCity($city);
                foreach ($get_state->result() as $row) {
                    $data1[] = $row;
                }
                echo json_encode($data1);
               
             }
            function save_update_cust($cust_id)
             {      
                $this->load->model('View_Customer_Data');
                $user_data = $this->View_Customer_Data->update_cust_data($cust_id);
            } 
             public function check_phone() 
            { 

                    $m="";
                    $phone = $_POST['phone_data'];        
                    $this->load->model('View_Customer_Data');      
                    $mobile_add = $this->View_Customer_Data->db_chk_phone($phone);
                     $rowcount = $mobile_add->num_rows();
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
            public function get_customer_count() {
            $this->load->model('View_Customer_Data');
            $getCountry = $this->View_Customer_Data->getcustcount();                   
            echo json_encode($getCountry);
       
    }
    public function get_wishlist_count() {
            $this->load->model('View_Customer_Data');
            $getCountry = $this->View_Customer_Data->getcustcount();                   
            echo json_encode($getCountry);
       
    }
   /* public function download_sales_Reports_data() {
         $this->load->library('Excel');
         $this->excel->setActiveSheetIndex(0);
                $this->excel->getActiveSheet()->setTitle('Customer Details');
                $this->excel->getActiveSheet()->SetCellValue('A1', 'Name');
                $this->excel->getActiveSheet()->SetCellValue('B1', 'Mobile ');
                $this->excel->getActiveSheet()->SetCellValue('C1', 'Email');
                $row = 2;               
               $arrData= $this->input->post("abcdef");
               $someArray = json_decode($arrData, true);
               foreach ($someArray as $key => $value) {
                 $name= $value["Name"] ;
                  $invoice_date= $value["Mobile"] ;
                   $vendor_name= $value["Email"] ; 
                  $this->excel->getActiveSheet()->SetCellValue('A' . $row,$name);
                   $this->excel->getActiveSheet()->SetCellValue('B' . $row,$invoice_date);
                    $this->excel->getActiveSheet()->SetCellValue('C' . $row,$vendor_name);
                  $row++;
                 }   
                $this->excel->getActiveSheet()->getColumnDimension('A')->setWidth(35);
                 $this->excel->getActiveSheet()->getColumnDimension('B')->setWidth(35);
                  $this->excel->getActiveSheet()->getColumnDimension('C')->setWidth(35); 
                $this->excel->getDefaultStyle()->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
                $this->excel->getActiveSheet()->getStyle('C2:G' . $row)->getAlignment()->setWrapText(true);             
                $filename = 'Customer Details';
                $this->load->helper('excel');
                return create_excel($this->excel, $filename);
              
     }*/
}