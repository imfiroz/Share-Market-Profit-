<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Categoury_Filter extends CI_Controller {
 public function __construct() 
       {
            parent::__construct();

            $this->load->helper('form');
            $this->load->library('form_validation');
            $this->load->helper("url");
            $this->load->library('session');
         //   $this->load->library('PHPExcel');
            $this->load->library('pagination');
            if (!$this->session->userdata('is_logged_in'))
            {
            $this->ctrl_logout();
            redirect(base_url(), 'refresh');
            }
       }
	   public function display_filter_data()
	   {
		    $id=$this->input->post('ids');
		    $this->load->model('Create_Product_Data');
			$get_state = $this->Create_Product_Data->get_all_product_version($id);
		  echo json_encode($get_state);
	   }
       public function index()
	{
		// $city = ;
        
        $this->load->model('Create_Product_Data');
        $get_state['filter'] = $this->Create_Product_Data->getCity_new();
		//print_r($get_state);
       
		//print_r($data1);
      // echo json_encode($data1);
	  $this->load->view('categoury_wise_filter');
            //$this->load->view('categoury_wise_filter',  $get_state);
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
		function get_checkbox()
	{
		   $this->load->model('Create_Product_Data');
        $getparent = $this->Create_Product_Data->get_checkbox_data($this->input->post(ids));
		  foreach ($getparent->result() as $row) {
            $data1[] = $row;
        }
        echo json_encode($data1);
	}
	 function save_update_product($product_id) {     
        $this->load->model('Admin_Data');
        $user_data = $this->Admin_Data->update_product_data_of_category($product_id);
    } 
	 function ajax_delete_product($c_id) {       
        $this->load->model('Admin_Data');
        $user_data = $this->Admin_Data->fetch_product_data_to_delete($c_id);                 
    
    }
		  function fetch_category_details_excel()
   
     {		 $id=$this->input->post('disply_ids1'); 
       $count=$this->input->post('disply_count'); 
                if($count>1){
                     $q=$this->db->query("SELECT product_version_name,Quantity_available,final_price_of_product FROM `tbl_product_version` WHERE Product_Category in($id) and is_active=0;");				
                }  
                else{
                     $q=$this->db->query("SELECT product_version_name,Quantity_available,final_price_of_product FROM `tbl_product_version` WHERE is_active=0 and Product_Category=".$id);
                }
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
                $this->excel->getActiveSheet()->setTitle('categorywise product details');
                $this->excel->getActiveSheet()->SetCellValue('A1', 'Product Name');
                $this->excel->getActiveSheet()->SetCellValue('B1', 'Quantity Available');
                $this->excel->getActiveSheet()->SetCellValue('C1', 'Price');               
                $row = 2;
                $sQty = 0;
                $pQty = 0;
                $sAmt = 0;
                $pAmt = 0;
                $bQty = 0;
                $bAmt = 0;
                $pl = 0;
                foreach ($data as $data_row) {
                    $this->excel->getActiveSheet()->SetCellValue('A' . $row, $data_row->product_version_name);
                    $this->excel->getActiveSheet()->SetCellValue('B' . $row, $data_row->Quantity_available); 
                    $this->excel->getActiveSheet()->SetCellValue('C' . $row, $data_row->final_price_of_product);                       
                    $row++;
                }
              
               
                 $this->excel->getActiveSheet()->getColumnDimension('A')->setWidth(35);
                $this->excel->getActiveSheet()->getColumnDimension('B')->setWidth(35);
                  $this->excel->getActiveSheet()->getColumnDimension('C')->setWidth(35);
               
					  
                $this->excel->getDefaultStyle()->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
                $this->excel->getActiveSheet()->getStyle('C2:G' . $row)->getAlignment()->setWrapText(true);             
                $filename = 'category wise products';
                $this->load->helper('excel');
                return create_excel($this->excel, $filename);

            }
		
	 }
          public function download_excel(){
                     $q=$this->db->query("SELECT Name,Mobile,Address,Email FROM `tbl_customer`");
                
            if ($q->num_rows() > 0) {
				
                foreach (($q->result()) as $row) {
                    $data[] = $row;
                   // print_r($data);
                 
                }
            } else {
                $data = NULL;
            }

            if (!empty($data)) {
		$this->load->library('Excel');
		$this->excel->setActiveSheetIndex(0);
                $this->excel->getActiveSheet()->setTitle('customer details');
                $this->excel->getActiveSheet()->SetCellValue('A1', 'Name');
                $this->excel->getActiveSheet()->SetCellValue('B1', 'Mobile');
                $this->excel->getActiveSheet()->SetCellValue('C1', 'Address');
                $this->excel->getActiveSheet()->SetCellValue('D1', 'Email'); 
                $row = 2;
                $sQty = 0;
                $pQty = 0;
                $sAmt = 0;
                $pAmt = 0;
                $bQty = 0;
                $bAmt = 0;
                $pl = 0;
                foreach ($data as $data_row) {
                    $this->excel->getActiveSheet()->SetCellValue('A' . $row, $data_row->Name);
                    $this->excel->getActiveSheet()->SetCellValue('B' . $row, $data_row->Mobile); 
                    $this->excel->getActiveSheet()->SetCellValue('C' . $row, $data_row->Address); 
                    $this->excel->getActiveSheet()->SetCellValue('D' . $row, $data_row->Email); 
                    $row++;
                }
              
               
                 $this->excel->getActiveSheet()->getColumnDimension('A')->setWidth(35);
                $this->excel->getActiveSheet()->getColumnDimension('B')->setWidth(35);
                  $this->excel->getActiveSheet()->getColumnDimension('C')->setWidth(35);
                   $this->excel->getActiveSheet()->getColumnDimension('D')->setWidth(35);
               
					  
                $this->excel->getDefaultStyle()->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
              //  $objPHPExcel->setActiveSheetIndex(2);
                $this->excel->getActiveSheet()->getStyle('C2:G' . $row)->getAlignment()->setWrapText(true);             
                $filename = 'Customer Details';
                $this->load->helper('excel');
                return create_excel($this->excel, $filename);

            }
		
	 }
             function fetch_customer_details_for_excel()
   
     {	
              
             $q=$this->db->query("SELECT Name,Mobile,pincode,Email FROM `tbl_customer`");
                
            if ($q->num_rows() > 0) {
				
                foreach (($q->result()) as $row) {
                    $data[] = $row;
                //    print_r($data);
                 
                }
            } else {
                 redirect(base_url('View_Customer'), 'refresh'); 
            }

            if (!empty($data)) {
		$this->load->library('Excel');
		$this->excel->setActiveSheetIndex(0);
                $this->excel->getActiveSheet()->setTitle('customer details');
                $this->excel->getActiveSheet()->SetCellValue('A1', 'Name');
                $this->excel->getActiveSheet()->SetCellValue('B1', 'Mobile');
                $this->excel->getActiveSheet()->SetCellValue('C1', 'Email');
                $this->excel->getActiveSheet()->SetCellValue('D1', 'Pincode'); 
                $row = 2;
                $sQty = 0;
                $pQty = 0;
                $sAmt = 0;
                $pAmt = 0;
                $bQty = 0;
                $bAmt = 0;
                $pl = 0;
                foreach ($data as $data_row) {
                    $this->excel->getActiveSheet()->SetCellValue('A' . $row, $data_row->Name);
                    $this->excel->getActiveSheet()->SetCellValue('B' . $row, $data_row->Mobile); 
                    $this->excel->getActiveSheet()->SetCellValue('C' . $row, $data_row->Email); 
                    $this->excel->getActiveSheet()->SetCellValue('D' . $row, $data_row->pincode); 
                    $row++;
                }
              
               
                 $this->excel->getActiveSheet()->getColumnDimension('A')->setWidth(35);
                $this->excel->getActiveSheet()->getColumnDimension('B')->setWidth(35);
                  $this->excel->getActiveSheet()->getColumnDimension('C')->setWidth(35);
                   $this->excel->getActiveSheet()->getColumnDimension('D')->setWidth(35);
               
					  
                $this->excel->getDefaultStyle()->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
                $this->excel->getActiveSheet()->getStyle('C2:G' . $row)->getAlignment()->setWrapText(true);             
                $filename = 'Customer Details';
                $this->load->helper('excel');
                return create_excel($this->excel, $filename);

            }
		
	 }
                              public function fetch_data_to_download(){
                           $q=$this->db->query("SELECT tbl_feedback.msg,tbl_ratings.rating,tbl_customer.Name,tbl_product_version.product_version_name from tbl_feedback left join tbl_ratings on tbl_feedback.rating_id=tbl_ratings.rating_id left join tbl_customer on tbl_feedback.customer_id=tbl_customer.Customer_id left join tbl_product_version on tbl_product_version.product_version_id=tbl_feedback.product_id");               
                            if ($q->num_rows() > 0) {
                                foreach (($q->result()) as $row) {
                                    $data[] = $row;                                    
                                }
                            } else {
                                $data = NULL;
                            }
                              if (!empty($data)) {
		$this->load->library('Excel');
		$this->excel->setActiveSheetIndex(0);
                $this->excel->getActiveSheet()->setTitle('customer feedbacks');
                $this->excel->getActiveSheet()->SetCellValue('A1', 'Comments');
                $this->excel->getActiveSheet()->SetCellValue('B1', 'Customer Name');
                $this->excel->getActiveSheet()->SetCellValue('C1', 'Product Name');
               $this->excel->getActiveSheet()->SetCellValue('D1', 'Ratings'); 
                $row = 2;
                $sQty = 0;
                $pQty = 0;
                $sAmt = 0;
                $pAmt = 0;
                $bQty = 0;
                $bAmt = 0;
                $pl = 0;
                foreach ($data as $data_row) {
                 
                    $this->excel->getActiveSheet()->SetCellValue('A' . $row, $data_row->msg);
                   $this->excel->getActiveSheet()->SetCellValue('B' . $row, $data_row->Name); 
                 $this->excel->getActiveSheet()->SetCellValue('C' . $row, $data_row->product_version_name); 
                $this->excel->getActiveSheet()->SetCellValue('D' . $row, $data_row->rating); 
                    $row++;
                }
              
               
                 $this->excel->getActiveSheet()->getColumnDimension('A')->setWidth(35);
                $this->excel->getActiveSheet()->getColumnDimension('B')->setWidth(35);
                $this->excel->getActiveSheet()->getColumnDimension('C')->setWidth(35);
                $this->excel->getActiveSheet()->getColumnDimension('D')->setWidth(35);
               
					  
                $this->excel->getDefaultStyle()->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
                $this->excel->getActiveSheet()->getStyle('C2:G' . $row)->getAlignment()->setWrapText(true);             
                $filename = 'Customer_Feedback';
                $this->load->helper('excel');
                return create_excel($this->excel, $filename);

            }
		
	 }  
	  public function fetch_data_to_download_specific()
          {
               $vendor_id = $_POST['vendor_id'];
               $customer_id = $_POST['customer_id'];
               if($customer_id=="all")
               {
                      $q=$this->db->query("SELECT tbl_feedback.msg,tbl_ratings.rating,tbl_customer.Name,tbl_product_version.product_version_name from tbl_feedback left join tbl_ratings on tbl_feedback.rating_id=tbl_ratings.rating_id left join tbl_customer on tbl_feedback.customer_id=tbl_customer.Customer_id left join tbl_product_version on tbl_product_version.product_version_id=tbl_feedback.product_id where tbl_feedback.product_vendor_id=".$vendor_id);               
               }
               else
               { 
                    $q=$this->db->query("SELECT tbl_feedback.msg,tbl_ratings.rating,tbl_customer.Name,tbl_product_version.product_version_name from tbl_feedback left join tbl_ratings on tbl_feedback.rating_id=tbl_ratings.rating_id left join tbl_customer on tbl_feedback.customer_id=tbl_customer.Customer_id left join tbl_product_version on tbl_product_version.product_version_id=tbl_feedback.product_id where tbl_feedback.product_vendor_id=".$vendor_id." and tbl_feedback.customer_id=".$customer_id);               
               }   
                if ($q->num_rows() > 0) {
                                foreach (($q->result()) as $row) {
                                    $data[] = $row;                                    
                                }
                            } else {
                                $data = NULL;
                            }
                              if (!empty($data)) {
		$this->load->library('Excel');
		$this->excel->setActiveSheetIndex(0);
                $this->excel->getActiveSheet()->setTitle('customer feedbacks');
                $this->excel->getActiveSheet()->SetCellValue('A1', 'Comments');
                $this->excel->getActiveSheet()->SetCellValue('B1', 'Customer Name');
                $this->excel->getActiveSheet()->SetCellValue('C1', 'Product Name');
               $this->excel->getActiveSheet()->SetCellValue('D1', 'Ratings'); 
                $row = 2;
                $sQty = 0;
                $pQty = 0;
                $sAmt = 0;
                $pAmt = 0;
                $bQty = 0;
                $bAmt = 0;
                $pl = 0;
                foreach ($data as $data_row) 
                {
                 
                    $this->excel->getActiveSheet()->SetCellValue('A' . $row, $data_row->msg);                 
                   $this->excel->getActiveSheet()->SetCellValue('B' . $row, $data_row->Name); 
                 $this->excel->getActiveSheet()->SetCellValue('C' . $row, $data_row->product_version_name); 
                $this->excel->getActiveSheet()->SetCellValue('D' . $row, $data_row->rating); 
                    $row++;
                }
              
               
                 $this->excel->getActiveSheet()->getColumnDimension('A')->setWidth(35);
                $this->excel->getActiveSheet()->getColumnDimension('B')->setWidth(35);
                $this->excel->getActiveSheet()->getColumnDimension('C')->setWidth(35);
                $this->excel->getActiveSheet()->getColumnDimension('D')->setWidth(35);
               
					  
                $this->excel->getDefaultStyle()->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
                $this->excel->getActiveSheet()->getStyle('C2:G' . $row)->getAlignment()->setWrapText(true);             
                $filename = 'Customer_Feedback';
                $this->load->helper('excel');
                return create_excel($this->excel, $filename);

            }
		
	 }  
                  public function fetch_data_to_download_all_vendor_products(){
                           $q=$this->db->query("select tbl_vendor_gst_product.Product_Name,tbl_vendor_gst_product.Product_Description,tbl_vendor_gst_product.Hsn_Code,tbl_vendor_gst_product.Cost_1,tbl_vendor_gst_product.Igst_Pr,tbl_vendor_gst_product.Cgst_Pr,tbl_vendor_gst_product.Sgst_Pr,tbl_vendor_gst_product.Discount_Type from tbl_vendor_gst_product where tbl_vendor_gst_product.is_active=0");               
                            if ($q->num_rows() > 0) {
                                foreach (($q->result()) as $row) {
                                    $data[] = $row;                                    
                                }
                            } else {
                               redirect(base_url('View_Product'), 'refresh');
                            }
                              if (!empty($data)) {
		$this->load->library('Excel');
		$this->excel->setActiveSheetIndex(0);
                $this->excel->getActiveSheet()->setTitle('Vendor Products');
                $this->excel->getActiveSheet()->SetCellValue('A1', 'Product name');
                $this->excel->getActiveSheet()->SetCellValue('B1', 'Description');
                $this->excel->getActiveSheet()->SetCellValue('C1', 'Hsn Code');
                $this->excel->getActiveSheet()->SetCellValue('D1', 'Cost'); 
                $this->excel->getActiveSheet()->SetCellValue('E1', 'Igst');
                $this->excel->getActiveSheet()->SetCellValue('F1', 'Cgst');
                $this->excel->getActiveSheet()->SetCellValue('G1', 'Sgst');
                $this->excel->getActiveSheet()->SetCellValue('H1', 'Discount Type');
                $row = 2;
                $sQty = 0;
                $pQty = 0;
                $sAmt = 0;
                $pAmt = 0;
                $bQty = 0;
                $bAmt = 0;
                $pl = 0;
                foreach ($data as $data_row) {
                 
                    $this->excel->getActiveSheet()->SetCellValue('A' . $row, $data_row->Product_Name);
                   $this->excel->getActiveSheet()->SetCellValue('B' . $row, $data_row->Product_Description); 
                 $this->excel->getActiveSheet()->SetCellValue('C' . $row, $data_row->Hsn_Code); 
                $this->excel->getActiveSheet()->SetCellValue('D' . $row, $data_row->Cost_1); 
                 $this->excel->getActiveSheet()->SetCellValue('E' . $row, $data_row->Igst_Pr); 
                  $this->excel->getActiveSheet()->SetCellValue('F' . $row, $data_row->Cgst_Pr); 
                   $this->excel->getActiveSheet()->SetCellValue('G' . $row, $data_row->Sgst_Pr); 
                    $this->excel->getActiveSheet()->SetCellValue('H' . $row, $data_row->Discount_Type); 

                    $row++;
                }
              
               
                 $this->excel->getActiveSheet()->getColumnDimension('A')->setWidth(35);
                $this->excel->getActiveSheet()->getColumnDimension('B')->setWidth(35);
                $this->excel->getActiveSheet()->getColumnDimension('C')->setWidth(35);
                $this->excel->getActiveSheet()->getColumnDimension('D')->setWidth(35);
                  $this->excel->getActiveSheet()->getColumnDimension('E')->setWidth(35);
                    $this->excel->getActiveSheet()->getColumnDimension('F')->setWidth(35);
                      $this->excel->getActiveSheet()->getColumnDimension('G')->setWidth(35);
                        $this->excel->getActiveSheet()->getColumnDimension('H')->setWidth(35);
               
					  
                $this->excel->getDefaultStyle()->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
                $this->excel->getActiveSheet()->getStyle('C2:G' . $row)->getAlignment()->setWrapText(true);             
                $filename = 'Vendor_Products';
                $this->load->helper('excel');
                return create_excel($this->excel, $filename);

            }
		
	 }  
           public function fetch_data_to_download_specific_vendor_products(){
                 $vendor_id = $_POST['vendor_id'];
                           $q=$this->db->query("select tbl_vendor_gst_product.Product_Name,tbl_vendor_gst_product.Product_Description,tbl_vendor_gst_product.Hsn_Code,tbl_vendor_gst_product.Cost_1,tbl_vendor_gst_product.Igst_Pr,tbl_vendor_gst_product.Cgst_Pr,tbl_vendor_gst_product.Sgst_Pr,tbl_vendor_gst_product.Discount_Type from tbl_vendor_gst_product where tbl_vendor_gst_product.is_active=0 and tbl_vendor_gst_product.Vendor_Id=".$vendor_id);               
                            if ($q->num_rows() > 0) {
                                foreach (($q->result()) as $row) {
                                    $data[] = $row;                                    
                                }
                            } else {
                          
              redirect(base_url('View_Product'), 'refresh');
          // redirect('/');
                               // $data = NULL;
                            }
                              if (!empty($data)) {
		$this->load->library('Excel');
		$this->excel->setActiveSheetIndex(0);
                $this->excel->getActiveSheet()->setTitle('Vendor Products');
                $this->excel->getActiveSheet()->SetCellValue('A1', 'Product name');
                $this->excel->getActiveSheet()->SetCellValue('B1', 'Description');
                $this->excel->getActiveSheet()->SetCellValue('C1', 'Hsn Code');
                $this->excel->getActiveSheet()->SetCellValue('D1', 'Cost'); 
                $this->excel->getActiveSheet()->SetCellValue('E1', 'Igst');
                $this->excel->getActiveSheet()->SetCellValue('F1', 'Cgst');
                $this->excel->getActiveSheet()->SetCellValue('G1', 'Sgst');
                $this->excel->getActiveSheet()->SetCellValue('H1', 'Discount Type');
                $row = 2;
                $sQty = 0;
                $pQty = 0;
                $sAmt = 0;
                $pAmt = 0;
                $bQty = 0;
                $bAmt = 0;
                $pl = 0;
                foreach ($data as $data_row) {
                 
                    $this->excel->getActiveSheet()->SetCellValue('A' . $row, $data_row->Product_Name);
                   $this->excel->getActiveSheet()->SetCellValue('B' . $row, $data_row->Product_Description); 
                 $this->excel->getActiveSheet()->SetCellValue('C' . $row, $data_row->Hsn_Code); 
                $this->excel->getActiveSheet()->SetCellValue('D' . $row, $data_row->Cost_1); 
                 $this->excel->getActiveSheet()->SetCellValue('E' . $row, $data_row->Igst_Pr); 
                  $this->excel->getActiveSheet()->SetCellValue('F' . $row, $data_row->Cgst_Pr); 
                   $this->excel->getActiveSheet()->SetCellValue('G' . $row, $data_row->Sgst_Pr); 
                    $this->excel->getActiveSheet()->SetCellValue('H' . $row, $data_row->Discount_Type); 

                    $row++;
                }
              
               
                 $this->excel->getActiveSheet()->getColumnDimension('A')->setWidth(35);
                $this->excel->getActiveSheet()->getColumnDimension('B')->setWidth(35);
                $this->excel->getActiveSheet()->getColumnDimension('C')->setWidth(35);
                $this->excel->getActiveSheet()->getColumnDimension('D')->setWidth(35);
                  $this->excel->getActiveSheet()->getColumnDimension('E')->setWidth(35);
                    $this->excel->getActiveSheet()->getColumnDimension('F')->setWidth(35);
                      $this->excel->getActiveSheet()->getColumnDimension('G')->setWidth(35);
                        $this->excel->getActiveSheet()->getColumnDimension('H')->setWidth(35);
               
					  
                $this->excel->getDefaultStyle()->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
                $this->excel->getActiveSheet()->getStyle('C2:G' . $row)->getAlignment()->setWrapText(true);             
                $filename = 'Vendor_Products';
                $this->load->helper('excel');
                return create_excel($this->excel, $filename);
            }		
	 }
         
	             function fetch_data_to_download_customer_of_specific_vendor()
   
     {	
               $vendor_id = $_POST['vendor_id'];
             $q=$this->db->query("SELECT tbl_customer.Name,tbl_customer.Mobile,tbl_customer.Address from tbl_customer left join tbl_customer_agreement on tbl_customer.Customer_id=tbl_customer_agreement.Customer_id where tbl_customer_agreement.Sender_Vendor_Id=".$vendor_id." group by tbl_customer_agreement.Customer_id");
                
            if ($q->num_rows() > 0) {
				
                foreach (($q->result()) as $row) {
                    $data[] = $row;
                //    print_r($data);
                 
                }
            } else {
                 redirect(base_url('View_Customer/index'), 'refresh'); 
            }

            if (!empty($data)) {
		$this->load->library('Excel');
		$this->excel->setActiveSheetIndex(0);
                $this->excel->getActiveSheet()->setTitle('customer details');
                $this->excel->getActiveSheet()->SetCellValue('A1', 'Name');
                $this->excel->getActiveSheet()->SetCellValue('B1', 'Mobile');
                $this->excel->getActiveSheet()->SetCellValue('C1', 'Address');
               
                $row = 2;
                $sQty = 0;
                $pQty = 0;
                $sAmt = 0;
                $pAmt = 0;
                $bQty = 0;
                $bAmt = 0;
                $pl = 0;
                foreach ($data as $data_row) {
                    $this->excel->getActiveSheet()->SetCellValue('A' . $row, $data_row->Name);
                    $this->excel->getActiveSheet()->SetCellValue('B' . $row, $data_row->Mobile); 
                    $this->excel->getActiveSheet()->SetCellValue('C' . $row, $data_row->Address); 
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

            }
		
	 }
                                       public function fetch_earndata_to_download(){
                           $q=$this->db->query("SELECT tbl_customer_agreement.Invoice_Number,tbl_customer_agreement.invoice_date,tbl_customer_agreement.Final_Amount,tbl_customer.Name as cname,tbl_vendor.Name as vname from tbl_customer_agreement left join tbl_customer on tbl_customer_agreement.Customer_id=tbl_customer.Customer_id left join tbl_vendor on tbl_customer_agreement.Sender_Vendor_Id=tbl_vendor.Vendor_Id where tbl_vendor.role_id=2 group by tbl_customer_agreement.invoice_date DESC");               
                            if ($q->num_rows() > 0) {
                                foreach (($q->result()) as $row) {
                                    $data[] = $row;                                    
                                }
                            } else {
                                $data = NULL;
                            }
                              if (!empty($data)) {
		$this->load->library('Excel');
		$this->excel->setActiveSheetIndex(0);
                $this->excel->getActiveSheet()->setTitle('Total Earnings');
                $this->excel->getActiveSheet()->SetCellValue('A1', 'Invoice Number');
                $this->excel->getActiveSheet()->SetCellValue('B1', 'Invoice Date');
                $this->excel->getActiveSheet()->SetCellValue('C1', 'Final Amount');
               $this->excel->getActiveSheet()->SetCellValue('D1', 'Customer Name'); 
                $this->excel->getActiveSheet()->SetCellValue('E1', 'Vendor Name'); 
                $row = 2;
                $sQty = 0;
                $pQty = 0;
                $sAmt = 0;
                $pAmt = 0;
                $bQty = 0;
                $bAmt = 0;
                $pl = 0;
                foreach ($data as $data_row) {
                 
                    $this->excel->getActiveSheet()->SetCellValue('A' . $row, $data_row->Invoice_Number);
                   $this->excel->getActiveSheet()->SetCellValue('B' . $row, $data_row->invoice_date); 
                 $this->excel->getActiveSheet()->SetCellValue('C' . $row, $data_row->Final_Amount); 
                $this->excel->getActiveSheet()->SetCellValue('D' . $row, $data_row->cname); 
                 $this->excel->getActiveSheet()->SetCellValue('E' . $row, $data_row->vname); 
                    $row++;
                }
              
               
                 $this->excel->getActiveSheet()->getColumnDimension('A')->setWidth(35);
                $this->excel->getActiveSheet()->getColumnDimension('B')->setWidth(35);
                $this->excel->getActiveSheet()->getColumnDimension('C')->setWidth(35);
                $this->excel->getActiveSheet()->getColumnDimension('D')->setWidth(35);
                 $this->excel->getActiveSheet()->getColumnDimension('E')->setWidth(35);
               
					  
                $this->excel->getDefaultStyle()->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
                $this->excel->getActiveSheet()->getStyle('C2:G' . $row)->getAlignment()->setWrapText(true);             
                $filename = 'Total Earnings';
                $this->load->helper('excel');
                return create_excel($this->excel, $filename);

            }
		
	 } 
         	             function fetch_data_to_download_customer()
   
     {	
              
             $q=$this->db->query("SELECT Name,Mobile,Address FROM `tbl_customer`");
                
            if ($q->num_rows() > 0) {
				
                foreach (($q->result()) as $row) {
                    $data[] = $row;
                //    print_r($data);
                 
                }
            } else {
                 redirect(base_url('View_Customer_Details'), 'refresh'); 
            }

            if (!empty($data)) {
		$this->load->library('Excel');
		$this->excel->setActiveSheetIndex(0);
                $this->excel->getActiveSheet()->setTitle('customer details');
                $this->excel->getActiveSheet()->SetCellValue('A1', 'Name');
                $this->excel->getActiveSheet()->SetCellValue('B1', 'Mobile');
                $this->excel->getActiveSheet()->SetCellValue('C1', 'Address');
               
                $row = 2;
                $sQty = 0;
                $pQty = 0;
                $sAmt = 0;
                $pAmt = 0;
                $bQty = 0;
                $bAmt = 0;
                $pl = 0;
                foreach ($data as $data_row) {
                    $this->excel->getActiveSheet()->SetCellValue('A' . $row, $data_row->Name);
                    $this->excel->getActiveSheet()->SetCellValue('B' . $row, $data_row->Mobile); 
                    $this->excel->getActiveSheet()->SetCellValue('C' . $row, $data_row->Address); 
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

            }
		
	 }
              public function fetch_products_excel(){
                           $q=$this->db->query("select tbl_product_version.product_version_name,tbl_product_version.Product_configuration,tbl_product_version.final_price_of_product,tbl_vendor.Name as vendor_name from tbl_product_version left join tbl_vendor on tbl_product_version.Vendor_id=tbl_vendor.Vendor_Id where tbl_product_version.is_active=0");               
                            if ($q->num_rows() > 0) {
                                foreach (($q->result()) as $row) {
                                    $data[] = $row;                                    
                                }
                            } else {
                               redirect(base_url('View_Product'), 'refresh');
                            }
                              if (!empty($data)) {
		$this->load->library('Excel');
		$this->excel->setActiveSheetIndex(0);
                $this->excel->getActiveSheet()->setTitle('Products');
                $this->excel->getActiveSheet()->SetCellValue('A1', 'Product name');
                $this->excel->getActiveSheet()->SetCellValue('B1', 'Description');
                $this->excel->getActiveSheet()->SetCellValue('C1', 'Price');
                $this->excel->getActiveSheet()->SetCellValue('D1', 'Vendor Name');             
                $row = 2;
                $sQty = 0;
                $pQty = 0;
                $sAmt = 0;
                $pAmt = 0;
                $bQty = 0;
                $bAmt = 0;
                $pl = 0;
                foreach ($data as $data_row) {
                 
                    $this->excel->getActiveSheet()->SetCellValue('A' . $row, $data_row->product_version_name);
                   $this->excel->getActiveSheet()->SetCellValue('B' . $row, $data_row->Product_configuration); 
                 $this->excel->getActiveSheet()->SetCellValue('C' . $row, $data_row->final_price_of_product); 
                $this->excel->getActiveSheet()->SetCellValue('D' . $row, $data_row->vendor_name);                  
                    $row++;
                }
              
               
                 $this->excel->getActiveSheet()->getColumnDimension('A')->setWidth(35);
                $this->excel->getActiveSheet()->getColumnDimension('B')->setWidth(35);
                $this->excel->getActiveSheet()->getColumnDimension('C')->setWidth(35);
                $this->excel->getActiveSheet()->getColumnDimension('D')->setWidth(35);                 
					  
                $this->excel->getDefaultStyle()->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
                $this->excel->getActiveSheet()->getStyle('C2:G' . $row)->getAlignment()->setWrapText(true);             
                $filename = 'Products';
                $this->load->helper('excel');
                return create_excel($this->excel, $filename);

            }
		
	 }  
                    public function fetch_vendor_data_excel(){
               
                           $q=$this->db->query("select tbl_vendor.Name,tbl_vendor.description,tbl_vendor.Mobile,tbl_vendor.Email,tbl_vendor.Pan_Card,tbl_vendor.Adhar_Card,tbl_vendor.gstin,cities.name as city_name,states.name as state_name from tbl_vendor left join cities on tbl_vendor.city=cities.id left join states on tbl_vendor.state = states.id where tbl_vendor.role_id=2");               
                            if ($q->num_rows() > 0) {
                                foreach (($q->result()) as $row) {
                                    $data[] = $row;                                    
                                }
                            } else {
                          
              redirect(base_url('View_Vendor_Details'), 'refresh');
          // redirect('/');
                               // $data = NULL;
                            }
                              if (!empty($data)) {
		$this->load->library('Excel');
		$this->excel->setActiveSheetIndex(0);
                $this->excel->getActiveSheet()->setTitle('Vendor Details');
                $this->excel->getActiveSheet()->SetCellValue('A1', 'Name');
                $this->excel->getActiveSheet()->SetCellValue('B1', 'Description');
                $this->excel->getActiveSheet()->SetCellValue('C1', 'Mobile');
                $this->excel->getActiveSheet()->SetCellValue('D1', 'Email'); 
                $this->excel->getActiveSheet()->SetCellValue('E1', 'Pan_Card');
                $this->excel->getActiveSheet()->SetCellValue('F1', 'Adhar_Card');
                $this->excel->getActiveSheet()->SetCellValue('G1', 'Gstin');
                $this->excel->getActiveSheet()->SetCellValue('H1', 'City Name');
                $this->excel->getActiveSheet()->SetCellValue('I1', 'State Name');
                $row = 2;
                $sQty = 0;
                $pQty = 0;
                $sAmt = 0;
                $pAmt = 0;
                $bQty = 0;
                $bAmt = 0;
                $pl = 0;
                foreach ($data as $data_row) {
                 
                    $this->excel->getActiveSheet()->SetCellValue('A' . $row, $data_row->Name);
                   $this->excel->getActiveSheet()->SetCellValue('B' . $row, $data_row->description); 
                 $this->excel->getActiveSheet()->SetCellValue('C' . $row, $data_row->Mobile); 
                $this->excel->getActiveSheet()->SetCellValue('D' . $row, $data_row->Email); 
                 $this->excel->getActiveSheet()->SetCellValue('E' . $row, $data_row->Pan_Card); 
                  $this->excel->getActiveSheet()->SetCellValue('F' . $row, $data_row->Adhar_Card); 
                   $this->excel->getActiveSheet()->SetCellValue('G' . $row, $data_row->gstin); 
                    $this->excel->getActiveSheet()->SetCellValue('H' . $row, $data_row->city_name); 
                     $this->excel->getActiveSheet()->SetCellValue('I' . $row, $data_row->state_name); 

                    $row++;
                }
              
               
                 $this->excel->getActiveSheet()->getColumnDimension('A')->setWidth(35);
                $this->excel->getActiveSheet()->getColumnDimension('B')->setWidth(35);
                $this->excel->getActiveSheet()->getColumnDimension('C')->setWidth(35);
                $this->excel->getActiveSheet()->getColumnDimension('D')->setWidth(35);
                  $this->excel->getActiveSheet()->getColumnDimension('E')->setWidth(35);
                    $this->excel->getActiveSheet()->getColumnDimension('F')->setWidth(35);
                      $this->excel->getActiveSheet()->getColumnDimension('G')->setWidth(35);
                        $this->excel->getActiveSheet()->getColumnDimension('H')->setWidth(35);
                        $this->excel->getActiveSheet()->getColumnDimension('I')->setWidth(35);
               
					  
                $this->excel->getDefaultStyle()->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
                $this->excel->getActiveSheet()->getStyle('C2:G' . $row)->getAlignment()->setWrapText(true);             
                $filename = 'Vendor_Details';
                $this->load->helper('excel');
                return create_excel($this->excel, $filename);
            }		
	 }
          public function abc() {
         $this->load->library('Excel');
         $this->excel->setActiveSheetIndex(0);
                $this->excel->getActiveSheet()->setTitle('Order Details');
                $this->excel->getActiveSheet()->SetCellValue('A1', 'Invoice Number');
                $this->excel->getActiveSheet()->SetCellValue('B1', 'Invoice Date');
                $this->excel->getActiveSheet()->SetCellValue('C1', 'Vendor Name');
                $this->excel->getActiveSheet()->SetCellValue('D1', 'Customer Name'); 
                $this->excel->getActiveSheet()->SetCellValue('E1', 'Final Amount');
                $this->excel->getActiveSheet()->SetCellValue('F1', 'Status');      
                $row = 2;               
               $arrData= $this->input->post("abcdef");
               $someArray = json_decode($arrData, true);
               foreach ($someArray as $key => $value) {
                 $name= $value["Invoice_Number"] ;
                  $invoice_date= $value["invoice_date"] ;
                   $vendor_name= $value["vendor_name"] ; $cust_name= $value["cust_name"] ;
                    $Final_Amount= $value["Final_Amount"] ;
                       $status= $value["status"] ;
                  $this->excel->getActiveSheet()->SetCellValue('A' . $row,$name);
                   $this->excel->getActiveSheet()->SetCellValue('B' . $row,$invoice_date);
                    $this->excel->getActiveSheet()->SetCellValue('C' . $row,$vendor_name);
                     $this->excel->getActiveSheet()->SetCellValue('D' . $row,$cust_name);
                      $this->excel->getActiveSheet()->SetCellValue('E' . $row,$Final_Amount);
                       $this->excel->getActiveSheet()->SetCellValue('F' . $row,$status);                     
                  $row++;
                 }   
                $this->excel->getActiveSheet()->getColumnDimension('A')->setWidth(35);
                 $this->excel->getActiveSheet()->getColumnDimension('B')->setWidth(35);
                  $this->excel->getActiveSheet()->getColumnDimension('C')->setWidth(35); 
                  $this->excel->getActiveSheet()->getColumnDimension('D')->setWidth(35);
                  $this->excel->getActiveSheet()->getColumnDimension('E')->setWidth(35);
                   $this->excel->getActiveSheet()->getColumnDimension('F')->setWidth(35);
                  
                  
                $this->excel->getDefaultStyle()->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
                $this->excel->getActiveSheet()->getStyle('C2:G' . $row)->getAlignment()->setWrapText(true);             
                $filename = 'Order_Details';
                $this->load->helper('excel');
                return create_excel($this->excel, $filename);
              
     }
      public function visitor() {
         $this->load->library('Excel');
         $this->excel->setActiveSheetIndex(0);
                $this->excel->getActiveSheet()->setTitle('Visitor Details');
                $this->excel->getActiveSheet()->SetCellValue('A1', 'Name');
                $this->excel->getActiveSheet()->SetCellValue('B1', 'Mobile');
                $this->excel->getActiveSheet()->SetCellValue('C1', 'Address');
                $this->excel->getActiveSheet()->SetCellValue('D1', 'Email');     
                $row = 2;               
               $arrData= $this->input->post("abcdef");
               $someArray = json_decode($arrData, true);
               foreach ($someArray as $key => $value) {
                 $name= $value["Name"] ;
                  $Mobile= $value["Mobile"] ;
                   $Address= $value["Address"] ; $Email= $value["Email"] ;

                  $this->excel->getActiveSheet()->SetCellValue('A' . $row,$name);
                   $this->excel->getActiveSheet()->SetCellValue('B' . $row,$Mobile);
                    $this->excel->getActiveSheet()->SetCellValue('C' . $row,$Address);
                     $this->excel->getActiveSheet()->SetCellValue('D' . $row,$Email);                                    
                  $row++;
                 }   
                $this->excel->getActiveSheet()->getColumnDimension('A')->setWidth(35);
                 $this->excel->getActiveSheet()->getColumnDimension('B')->setWidth(35);
                  $this->excel->getActiveSheet()->getColumnDimension('C')->setWidth(35); 
                  $this->excel->getActiveSheet()->getColumnDimension('D')->setWidth(35);                              
                $this->excel->getDefaultStyle()->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
                $this->excel->getActiveSheet()->getStyle('C2:G' . $row)->getAlignment()->setWrapText(true);             
                $filename = 'Visitors Details';
                $this->load->helper('excel');
                return create_excel($this->excel, $filename);
              
     } 
      public function download_order_Reports() {
         $this->load->library('Excel');
         $this->excel->setActiveSheetIndex(0);
                $this->excel->getActiveSheet()->setTitle('Order Details');
                $this->excel->getActiveSheet()->SetCellValue('A1', 'Bill No');
                $this->excel->getActiveSheet()->SetCellValue('B1', 'Invoice Date');
                $this->excel->getActiveSheet()->SetCellValue('C1', 'Vendor Name');
                $this->excel->getActiveSheet()->SetCellValue('D1', 'Customer Name'); 
                $this->excel->getActiveSheet()->SetCellValue('E1', 'FinalAmount');
                $this->excel->getActiveSheet()->SetCellValue('F1', '	Status');      
                $row = 2;               
               $arrData= $this->input->post("abcdef");
               $someArray = json_decode($arrData, true);
               foreach ($someArray as $key => $value) {
                 $name= $value["Invoice_Number"] ;
                  $invoice_date= $value["invoice_date"] ;
                   $vendor_name= $value["vendor_name"] ; $cust_name= $value["cust_name"] ;
                    $Final_Amount= $value["Final_Amount"] ;
                       $status= $value["status"] ;
                  $this->excel->getActiveSheet()->SetCellValue('A' . $row,$name);
                   $this->excel->getActiveSheet()->SetCellValue('B' . $row,$invoice_date);
                    $this->excel->getActiveSheet()->SetCellValue('C' . $row,$vendor_name);
                     $this->excel->getActiveSheet()->SetCellValue('D' . $row,$cust_name);
                      $this->excel->getActiveSheet()->SetCellValue('E' . $row,$Final_Amount);
                       $this->excel->getActiveSheet()->SetCellValue('F' . $row,$status);                     
                  $row++;
                 }   
                $this->excel->getActiveSheet()->getColumnDimension('A')->setWidth(35);
                 $this->excel->getActiveSheet()->getColumnDimension('B')->setWidth(35);
                  $this->excel->getActiveSheet()->getColumnDimension('C')->setWidth(35); 
                  $this->excel->getActiveSheet()->getColumnDimension('D')->setWidth(35);
                  $this->excel->getActiveSheet()->getColumnDimension('E')->setWidth(35);
                   $this->excel->getActiveSheet()->getColumnDimension('F')->setWidth(35);
                  
                  
                $this->excel->getDefaultStyle()->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
                $this->excel->getActiveSheet()->getStyle('C2:G' . $row)->getAlignment()->setWrapText(true);             
                $filename = 'Order_Details';
                $this->load->helper('excel');
                return create_excel($this->excel, $filename);
              
     }
     
      public function download_sales_Reports() {
         $this->load->library('Excel');
         $this->excel->setActiveSheetIndex(0);
                $this->excel->getActiveSheet()->setTitle('Sales Report');
                $this->excel->getActiveSheet()->SetCellValue('A1', 'Bill No');
                $this->excel->getActiveSheet()->SetCellValue('B1', 'Invoice Date');
                $this->excel->getActiveSheet()->SetCellValue('C1', 'Vendor Name');
                $this->excel->getActiveSheet()->SetCellValue('D1', 'Customer Name'); 
                $this->excel->getActiveSheet()->SetCellValue('E1', 'FinalAmount');
                $this->excel->getActiveSheet()->SetCellValue('F1', 'Status');      
                $row = 2;               
               $arrData= $this->input->post("abcdef");
               $someArray = json_decode($arrData, true);
               foreach ($someArray as $key => $value) {
                 $name= $value["Invoice_Number"] ;
                  $invoice_date= $value["invoice_date"] ;
                   $vendor_name= $value["vendor_name"] ; $cust_name= $value["cust_name"] ;
                    $Final_Amount= $value["Final_Amount"] ;
                       $status= $value["status"] ;
                  $this->excel->getActiveSheet()->SetCellValue('A' . $row,$name);
                   $this->excel->getActiveSheet()->SetCellValue('B' . $row,$invoice_date);
                    $this->excel->getActiveSheet()->SetCellValue('C' . $row,$vendor_name);
                     $this->excel->getActiveSheet()->SetCellValue('D' . $row,$cust_name);
                      $this->excel->getActiveSheet()->SetCellValue('E' . $row,$Final_Amount);
                       $this->excel->getActiveSheet()->SetCellValue('F' . $row,$status);                     
                  $row++;
                 }   
                $this->excel->getActiveSheet()->getColumnDimension('A')->setWidth(35);
                 $this->excel->getActiveSheet()->getColumnDimension('B')->setWidth(35);
                  $this->excel->getActiveSheet()->getColumnDimension('C')->setWidth(35); 
                  $this->excel->getActiveSheet()->getColumnDimension('D')->setWidth(35);
                  $this->excel->getActiveSheet()->getColumnDimension('E')->setWidth(35);
                   $this->excel->getActiveSheet()->getColumnDimension('F')->setWidth(35);
                  
                  
                $this->excel->getDefaultStyle()->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
                $this->excel->getActiveSheet()->getStyle('C2:G' . $row)->getAlignment()->setWrapText(true);             
                $filename = 'Sales Report';
                $this->load->helper('excel');
                return create_excel($this->excel, $filename);
              
     }
       public function download_sales_Reports_data() {
         $this->load->library('Excel');
         $this->excel->setActiveSheetIndex(0);
                $this->excel->getActiveSheet()->setTitle('Customer Details');
                $this->excel->getActiveSheet()->SetCellValue('A1', 'Name');
                $this->excel->getActiveSheet()->SetCellValue('B1', 'Mobile ');
                $this->excel->getActiveSheet()->SetCellValue('C1', 'Join Date');
                $row = 3;               
               $arrData= $this->input->post("abcdef");
             // print_r($arrData);
               $someArray = json_decode($arrData, true);
               foreach ($someArray as $key => $value) {
                 $name= $value["Name"] ;
                  $invoice_date= $value["Mobile"] ;
                  $vendor_name= $value["Email"] ; 
				  $vendor_join_dt= $value["date"] ;
                  $this->excel->getActiveSheet()->SetCellValue('A' . $row,$name);
                  $this->excel->getActiveSheet()->SetCellValue('B' . $row,$invoice_date);
                  $this->excel->getActiveSheet()->SetCellValue('C' . $row,$vendor_join_dt);
                  $row++;
                 }   
                $this->excel->getActiveSheet()->getColumnDimension('A')->setWidth(35);
                 $this->excel->getActiveSheet()->getColumnDimension('B')->setWidth(35);
                 $this->excel->getActiveSheet()->getColumnDimension('C')->setWidth(35); 
                $this->excel->getDefaultStyle()->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
                $this->excel->getActiveSheet()->getStyle('C2:G' . $row)->getAlignment()->setWrapText(true);             
                $filename = 'Customer_Details.xls';
                header('Content-Type: application/vnd.ms-excel'); //mime type
header('Content-Disposition: attachment;filename="'.$filename.'"'); //tell browser what's the file name
header('Cache-Control: max-age=0'); //no cache
            
//save it to Excel5 format (excel 2003 .XLS file), change this to 'Excel2007' (and adjust the filename extension, also the header mime type)
//if you want to save it as .XLSX Excel 2007 format
$objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');  
//force user to download the Excel file without writing it to server's HD
$objWriter->save('php://output');
             //  $this->load->helper('excel');
             //   return create_excel($this->excel, $filename);
              
     }
  // 
}