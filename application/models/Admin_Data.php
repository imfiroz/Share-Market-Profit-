<?php header('Access-Control-Allow-Origin: *'); ?>
<?php

class Admin_Data extends CI_Model 
	{               var $table = 'tbl_vendor';
                        var $product_table = 'tbl_vendor_gst_product';
                        var $product_version_table = 'tbl_product_version';
                          var $relation = 'tbl_vendor_customer_relation';
                            var $company = 'tbl_company';
                            var $branch = 'tbl_branch';
                              var $state = 'states';
                              var $city = 'cities';
                               var $business =  'business_sub_category';
                              var $business_sub_cat =  'business_category';
                         public function __construct()
                             {
                                parent::__construct();
                                $this->load->database();
                             }
                              function db_get_hsn1_old($keyword) {

        // $m = $keyword;
        // $query = $this->db->query("SELECT Hsn_Id,Hsn_Code FROM  tbl_hsn WHERE Hsn_Code LIKE '%{$keyword}%'");
        $query = $this->db->query("SELECT business_category_id,Name FROM tbl_business_category WHERE Name LIKE '{$keyword}%'");
        return $query;
    }
	 function fetch_progress_bar_count($u_id) { //echo $u_id;
	// select count(*) countA, count(*) countB,count(*) countC from tbl_role
        $task = $this->db->query("select * from tbl_notification");

        return $task;
    }
	function fetch_progress_bar_count_query($que) {
        //print_r($que);
        //	foreach($que as $statement){
        //	 $statment = $statement . ";";
        $qu = $this->db->query($que);

        //}
        return($qu);
    }
    function db_chk_mobile_number($email) {
        //echo $mob;
        // $this->db->where('User_Email_Id', $email);
        //product_parent_id='" . $c_id . "'
        $where = "(Mobile='" . $email . "')";
        $this->db->where($where);
        $email_id = $this->db->get($this->table);
        return $email_id;
    }
       public function db_save_register_data_old_recent($data11) { 
        ////echo $file;
            $relation1;
         $business_code = $this->input->post('business11');    
       if( $business_code=="34"){
              $business_name = $this->input->post('business_name');
              $query = $this->db->query("select name from business_category  where name='" . $business_name . "'");
              $ven = $query->num_rows();
          
               if ($ven == 0) {
                                  
              $data_business = array
                      (       
                      'name' =>  $this->input->post('business_name'), 
                        'is_active' => 0, 
                       );
                  $this->db->insert($this->business_sub_cat, $data_business);
                  $relation1 = $this->db->insert_id();
                               
                               
                           
             $data = array
                (
                 
                'description' =>$this->input->post('txt_description') ,
                'business_category_id' => $relation1,
                'country' => $this->input->post('country'),     
                'role_id' => $this->input->post('role_id'),
                'Name' => $this->input->post('txt_name'),
                'Mobile' => $this->input->post('txt_phone'),
                'Address' => $this->input->post('txt_address'),
                'Email' => $this->input->post('txt_email'),
                'Adhar_Card' => $this->input->post('aadhar'),
                'Pan_Card' => $this->input->post('pan'),
                'Password' => $this->input->post('pass1'),
                'state' => $this->input->post('state'),
                'city' => $this->input->post('city'),
                'pincode' => $this->input->post('pincode'),
                'listing_keyword'=>$data,	
            );
           
            $this->db->insert($this->table, $data);
            $vendor_id = $this->db->insert_id();
            $data_company = array
                (
                'description' =>$this->input->post('txt_description') ,
                'business_category_id' =>$relation1,          
                'Name' => $this->input->post('txt_name'),
                'Mobile' => $this->input->post('txt_phone'),
                'email' => $this->input->post('txt_email'),
                'Aadhar_card' => $this->input->post('aadhar'),
                'pan_card' => $this->input->post('pan'),
                'password' => $this->input->post('pass1'),
                'country' => $this->input->post('country'),
                 'role_id' => $this->input->post('role_id'),
                 'state' => $this->input->post('state'),
                'city' => $this->input->post('city'),
                'GSTIN' => $this->input->post('gstin'),
                'created_by_userid' => $vendor_id,
                'belogs_to_user_id' => $vendor_id,
                'pincode' => $this->input->post('pincode'),
                'listing_keyword'=>$data,
            );
             $this->db->insert($this->company, $data_company);
            $company = $this->db->insert_id();
             $data_branch = array
                (
                'business_category_id' => $this->input->post('business11'),
            'description' =>$this->input->post('txt_description') ,
                'Name' => $this->input->post('txt_name'),
                'Mobile' => $this->input->post('txt_phone'),
                'role_id' => $this->input->post('role_id'),
                'email' => $this->input->post('txt_email'),
                'Aadhar_card' => $this->input->post('aadhar'),
                'pan_card' => $this->input->post('pan'),
               'country' => $this->input->post('country'),
                'state' => $this->input->post('state'),
                'company_id' => $company,
                'city' => $this->input->post('city'),
                'GSTIN' => $this->input->post('gstin'),
                'created_by_userid' => $vendor_id,
                'belogs_to_user_id' => $vendor_id,
                 'pincode' => $this->input->post('pincode'),
                 'listing_keyword'=>$data,
            );
              $this->db->insert($this->branch, $data_branch);
                $branch = $this->db->insert_id();
                $this->db->set('company_id', $company);
                $this->db->set('branch_id', $branch);
                $this->db->where('Vendor_Id', $vendor_id);
                $this->db->update('tbl_vendor');
                return $vendor_id;
         }  
         else{
            // echo"ddd";
             $value=0;
             return $value;
         }
         }
       else
        {
			//$date= date('y-m-d');
            $data = array
                (
                 'description' =>$this->input->post('txt_description') ,
                'listing_keyword'=>$data11,
                'business_category_id' => $this->input->post('business11'),
                'country' => $this->input->post('country'),
                'role_id' => $this->input->post('role_id'),
                'Name' => $this->input->post('txt_name'),
                'Mobile' => $this->input->post('txt_phone'),
                'Address' => $this->input->post('txt_address'),
                 'role_id' => $this->input->post('role_id'),
                'Email' => $this->input->post('txt_email'),
                'Adhar_Card' => $this->input->post('aadhar'),
                'Pan_Card' => $this->input->post('pan'),
                'Password' => $this->input->post('pass1'),
                'state' => $this->input->post('state'),
                'city' => $this->input->post('city'),
                'gstin' => $this->input->post('gstin'),
                'pincode' => $this->input->post('pincode'),
				
            );
            $this->db->insert($this->table, $data);
            $vendor_id = $this->db->insert_id();

           $data_company = array
                (
                'description' =>$this->input->post('txt_description') ,
               'listing_keyword'=>$data11,
                'business_category_id' => $this->input->post('business11'),
                 'country' => $this->input->post('country'),
                'Name' => $this->input->post('txt_name'),
                'Mobile' => $this->input->post('txt_phone'),              
                'email' => $this->input->post('txt_email'),
                'Aadhar_card' => $this->input->post('aadhar'),
                'pan_card' => $this->input->post('pan'),
                'password' => $this->input->post('pass1'),
                'state' => $this->input->post('state'),
                'city' => $this->input->post('city'),
                'GSTIN' => $this->input->post('gstin'),
                'created_by_userid' => $vendor_id,
                'belogs_to_user_id' => $vendor_id,
                'pincode' => $this->input->post('pincode'),
                'role_id' => $this->input->post('role_id')
            );
        //  print_r($data_company);
            $this->db->insert($this->company, $data_company);
           $company = $this->db->insert_id();

            $data_branch = array
                (
                  'description' =>$this->input->post('txt_description') ,
                'listing_keyword'=>$data11,
                'business_category_id' => $this->input->post('business11'),
              'country' => $this->input->post('country'),
                'Name' => $this->input->post('txt_name'),
                'Mobile' => $this->input->post('txt_phone'),           
                'email' => $this->input->post('txt_email'),
                'Aadhar_card' => $this->input->post('aadhar'),
                'pan_card' => $this->input->post('pan'),
                'password' => $this->input->post('pass1'),
                'state' => $this->input->post('state'),
                'company_id' => $company,
                'city' => $this->input->post('city'),
                'GSTIN' => $this->input->post('gstin'),
                'created_by_userid' => $vendor_id,
                'belogs_to_user_id' => $vendor_id,
                'pincode' => $this->input->post('pincode'),
                 'role_id' => $this->input->post('role_id'),
            );
        $this->db->insert($this->branch, $data_branch);
        $branch = $this->db->insert_id();
        $this->db->set('company_id', $company);
        $this->db->set('branch_id', $branch);
        $this->db->where('Vendor_Id', $vendor_id);
        $this->db->update('tbl_vendor'); 
        return $vendor_id;
         
           
      }       
      }
          public function db_save_register_data($data11) { 
       
      
       
			//$date= date('y-m-d');
            $data = array
                (
                 'description' =>$this->input->post('txt_description') ,
                'listing_keyword'=>$data11,
                'business_category_id' => $this->input->post('parent_id'),
                'country' => $this->input->post('country'),
                'role_id' => $this->input->post('role_id'),
                'Name' => $this->input->post('txt_name'),
                'Mobile' => $this->input->post('txt_phone'),
                'Address' => $this->input->post('txt_address'),
                 'role_id' => $this->input->post('role_id'),
                'Email' => $this->input->post('txt_email'),
                'Adhar_Card' => $this->input->post('aadhar'),
                'Pan_Card' => $this->input->post('pan'),
                'Password' => $this->input->post('pass1'),
                'state' => $this->input->post('state'),
                'city' => $this->input->post('city'),
                'gstin' => $this->input->post('gstin'),
                'pincode' => $this->input->post('pincode'),
				
            );
           
          $this->db->insert($this->table, $data);
            $vendor_id = $this->db->insert_id();

           $data_company = array
                (
                'description' =>$this->input->post('txt_description') ,
               'listing_keyword'=>$data11,
                'business_category_id' => $this->input->post('parent_id'),
                 'country' => $this->input->post('country'),
                'Name' => $this->input->post('txt_name'),
                'Mobile' => $this->input->post('txt_phone'),              
                'email' => $this->input->post('txt_email'),
                'Aadhar_card' => $this->input->post('aadhar'),
                'pan_card' => $this->input->post('pan'),
                'password' => $this->input->post('pass1'),
                'state' => $this->input->post('state'),
                'city' => $this->input->post('city'),
                'GSTIN' => $this->input->post('gstin'),
                'created_by_userid' => $vendor_id,
                'belogs_to_user_id' => $vendor_id,
                'pincode' => $this->input->post('pincode'),
                'role_id' => $this->input->post('role_id')
            );
        //  print_r($data_company);
            $this->db->insert($this->company, $data_company);
           $company = $this->db->insert_id();

            $data_branch = array
                (
                  'description' =>$this->input->post('txt_description') ,
                'listing_keyword'=>$data11,
                'business_category_id' => $this->input->post('parent_id'),
              'country' => $this->input->post('country'),
                'Name' => $this->input->post('txt_name'),
                'Mobile' => $this->input->post('txt_phone'),           
                'email' => $this->input->post('txt_email'),
                'Aadhar_card' => $this->input->post('aadhar'),
                'pan_card' => $this->input->post('pan'),
                'password' => $this->input->post('pass1'),
                'state' => $this->input->post('state'),
                'company_id' => $company,
                'city' => $this->input->post('city'),
                'GSTIN' => $this->input->post('gstin'),
                'created_by_userid' => $vendor_id,
                'belogs_to_user_id' => $vendor_id,
                'pincode' => $this->input->post('pincode'),
                 'role_id' => $this->input->post('role_id'),
            );
        $this->db->insert($this->branch, $data_branch);
        $branch = $this->db->insert_id();
        $this->db->set('company_id', $company);
        $this->db->set('branch_id', $branch);
        $this->db->where('Vendor_Id', $vendor_id);
        $this->db->update('tbl_vendor'); 
        return $vendor_id;
         
           
       
      }
        public function db_save_register_data_old() { //echo $file;
        //echo"madhu";
        $hsn_code = $this->input->post('txt_hsn1');
        $query = $this->db->query("select Name from tbl_business_category  where Name='" . $hsn_code . "'");
        $ven = $query->num_rows();
        if ($ven == 0) {
            $v = 0;
            return $v;
        } else {
            $data = array
                (
                'business_category_id' => $this->input->post('h_id1'),
                'role_id' => $this->input->post('role_id'),
                'Name' => $this->input->post('txt_name'),
                'Mobile' => $this->input->post('txt_phone'),
                'Address' => $this->input->post('txt_address'),
                //'Photo' => $file,
                'Email' => $this->input->post('txt_email'),
                'Adhar_Card' => $this->input->post('aadhar'),
                'Pan_Card' => $this->input->post('pan'),
                'Password' => $this->input->post('pass1'),
               // 'street' => $this->input->post('txt_street'),
                'state' => $this->input->post('state'),
                'city' => $this->input->post('city'),
                'gstin' => $this->input->post('gstin'),
            );
           // print_r($data);
            $this->db->insert($this->table, $data);
            $vendor_id = $this->db->insert_id();

            $data_company = array
                (
                'business_category_id' => $this->input->post('h_id1'),
                'Name' => $this->input->post('txt_name'),
                'Mobile' => $this->input->post('txt_phone'),
                //'street' => $this->input->post('txt_street'),
                'email' => $this->input->post('txt_email'),
                'Aadhar_card' => $this->input->post('aadhar'),
                'pan_card' => $this->input->post('pan'),
                'password' => $this->input->post('pass1'),
                //'Location' => $this->input->post('country'),
                // 'state' => $this->input->post('state'),
                //'city' => $this->input->post('city'),
                'GSTIN' => $this->input->post('gstin'),
                'created_by_userid' => $vendor_id,
                'belogs_to_user_id' => $vendor_id,
            );
            $this->db->insert($this->company, $data_company);
            $company = $this->db->insert_id();

            $data_branch = array
                (
                'business_category_id' => $this->input->post('h_id1'),
                'Name' => $this->input->post('txt_name'),
                'Mobile' => $this->input->post('txt_phone'),
               // 'street' => $this->input->post('txt_street'),
                'email' => $this->input->post('txt_email'),
                'Aadhar_card' => $this->input->post('aadhar'),
                'pan_card' => $this->input->post('pan'),
                //'password' => $this->input->post('pass1'),
                //'Location' => $this->input->post('country'),
                //'state' => $this->input->post('state'),
                'company_id' => $company,
                //'city' => $this->input->post('city'),
                'GSTIN' => $this->input->post('gstin'),
                'created_by_userid' => $vendor_id,
                'belogs_to_user_id' => $vendor_id,
            );
        }
        $this->db->insert($this->branch, $data_branch);
        $branch = $this->db->insert_id();
        $this->db->set('company_id', $company);
        $this->db->set('branch_id', $branch);
        $this->db->where('Vendor_Id', $vendor_id);
        $this->db->update('tbl_vendor');
        return $vendor_id;
        }
        function getCountry() {
        $this->db->select('id,name');
        $this->db->from('countries');
        $this->db->order_by('name','asc');
        $query = $this->db->get();
        return $query;
    }
      function getCity($c_id) {
        //echo $c_id;
        $where = "(state_id='" . $c_id . "')";
        $this->db->where($where);
        $get_state = $this->db->get($this->city);
        //print_r($get_state);
        return $get_state;
    }
    function getBusiness() {
       $active=1;
        $this->db->select('id,name');
        $this->db->from('business_category');
        $where = "(is_active='" . $active . "')";
        $this->db->where($where);
        $this->db->order_by('name','asc');
        $query = $this->db->get();
        return $query;
    }
    function getState($c_id) {
        //echo $c_id;
        $where = "(country_id='" . $c_id . "')";
        $this->db->where($where);
        $get_state = $this->db->get($this->state);
        //print_r($get_state);
        return $get_state;
    }
    function db_retrieve_base_path() {   

		$user = $this->db->query("SELECT * FROM tbl_path_temp_holding" );

		return $aa= $user->row();
		 $this->db->close();
		 
    }
     function db_retrieve_base_path1($c) {   
//echo($c) ;
		 $img_path = $this->db->query("SELECT folder_creater_id,code,folder_path FROM `tbl_folder_creater` WHERE event='" .$c."' order by folder_creater_id asc");
		return $img_path;
		 
		 $this->db->close();
    }
     function db_retrieve_base_path_image($address_path,$event) {   
	//code
		$user = $this->db->query("SELECT folder_path FROM tbl_folder_creater where event='".$event."' and code='".$address_path."'");

		return $aa= $user->row();
		// $this->db->close();
		 
    }
    function db_retrieve_base_path_text($event,$text) {   

		$user = $this->db->query("SELECT folder_path FROM tbl_folder_creater where event='".$event."' and code='".$text."'");
		return $aa= $user->row();
		// $this->db->close();
		 
    }
     function db_chk_email_of_customer($email) {
        $where = "(Email='" . $email . "')";
        $this->db->where($where);
        $email_id = $this->db->get($this->table);
        return $email_id;
    }
    function db_chk_name_of_customer($email) {
        $where = "(Name='" . $email . "')";
        $this->db->where($where);
        $email_id = $this->db->get($this->table);
        return $email_id;
    }
        function db_get_hsn1($keyword) {

        // $m = $keyword;
        // $query = $this->db->query("SELECT Hsn_Id,Hsn_Code FROM  tbl_hsn WHERE Hsn_Code LIKE '%{$keyword}%'");
        $query = $this->db->query("SELECT business_category_id,Name FROM tbl_business_category WHERE Name LIKE '{$keyword}%'");
        return $query;
    }
     function getBusiness_data($c_id)
                {      
                   $where = "(business_cat_id='" . $c_id . "')";
                   $this->db->where($where);
                   $get_state = $this->db->get($this->business);
                   return $get_state;
                }
                function getcount_old(){                         
			$this->db->where('is_approved',0);
			$email_id = $this->db->get($this->table);
			return $email_id;       
                }
				 function getcustcount(){                         			
				$email_id=$this->db->query("SELECT DISTINCT(Customer_id) from tbl_customer_agreement");
				return $email_id;       
                }
			 function getearnings_old(){ 
							$this->db->select('sum(pos_paid) as name');
                            $this->db->from('tbl_payments');                          
                            $earnings= $this->db->get()->row()->name;			 			
							return $earnings;       
                }
							 function getearnings(){ 
							$this->db->select('sum(	Final_Amount) as name');
                            $this->db->from(' tbl_customer_agreement');
							$this->db->where('is_payment',1);							
                            $earnings= $this->db->get()->row()->name;			 			
							return $earnings;       
                }
				 function getearnings_for_vendor(){ 
						$earnings=$this->query("select * from tbl_domain");		 			
							return $earnings;       
                }
				 function getsatsifaction(){ 
							$earnings=$this->db->query("select 
    COALESCE(CASE WHEN tbl_customer_notification.read_id = '0' THEN (select count(`customer_id`) from tbl_customer_notification where read_id=0 ) END,0) as r1  ,
     COALESCE(CASE WHEN tbl_customer_notification.read_id = '1' THEN (select count(`customer_id`) from tbl_customer_notification where read_id=1 ) END,0) as r2
    from
 
   tbl_customer_notification
    group  by `read_id`");
                           // $this->db->from('tbl_customer_notification');	
							//$this->db->where('tbl_customer_notification.read_id=0');								
                            //$earnings= $this->db->get()->row()->name;			 			
							return $earnings;       
                }
				function getrating_of_vendor($id){ 
							$this->db->select('Avg(rating) as name');
                            $this->db->from('tbl_ratings');
							$this->db->where('product_vendor_id',$id);							
                            $earnings= $this->db->get()->row()->name;			 			
							return $earnings;       
                }
				 function getsatsifaction_of_vendor($uid){ 				
							$this->db->select('count(order_status) as name');
                            $this->db->from('tbl_customer_agreement_transaction');	
							$this->db->where('product_vendor_id',$uid);				
                            $total= $this->db->get()->row()->name;			 			
							$this->db->select('count(order_status) as name');
                            $this->db->from('tbl_customer_agreement_transaction');	
							$this->db->where('product_vendor_id',$uid);
							$this->db->where('order_status',3);								
                            $delivered= $this->db->get()->row()->name;	
							$data=array("total"=> $total,"delivered"=> $delivered);
							return $data;																	
                }
					 function getearnings_of_vendor(){
						$v_id  = $this->session->userdata('Vendor_Id');							 
							$this->db->select('sum(Final_Value) as name');
                            $this->db->from(' tbl_customer_agreement_transaction');
							$this->db->where('is_payment',1);
							$this->db->where('Product_vendor_id',$v_id);							
                            $earnings= $this->db->get()->row()->name;			 			
							return $earnings;       
                }
				function get_graph_data_old(){
							$email_id=$this->db->query("SELECT tbl_customer_agreement.invoice_date,sum(tbl_customer_agreement.Final_Amount) sale,tbl_payment_way.name from tbl_customer_agreement left join tbl_payment_way
														on tbl_payment_way.payment_id=tbl_customer_agreement.sale_type group by tbl_customer_agreement.invoice_date,tbl_customer_agreement.sale_type");
							return $email_id;       
                }
				function get_graph_data(){
							$email_id=$this->db->query("select sum(tbl_customer_agreement.Final_amount) as totalsale,tbl_customer_agreement.invoice_date,tbl_payment_way.name,tbl_customer_agreement.sale_type from tbl_customer_agreement left join tbl_payment_way on tbl_payment_way.payment_id=tbl_customer_agreement.sale_type group by tbl_customer_agreement.sale_type,tbl_customer_agreement.invoice_date ");
							return $email_id;       
                }
				function get_graph_info(){
							$email_id=$this->db->query("SELECT sum(tbl_customer_agreement.Final_Amount) as sale,tbl_payment_way.name from tbl_customer_agreement left join tbl_payment_way on tbl_customer_agreement.sale_type= tbl_payment_way.payment_id group by tbl_customer_agreement.sale_type");
							return $email_id;       
                }
				function getcustcount11(){   
				$v_id  = $this->session->userdata('Vendor_Id');				 
				$email_id=$this->db->query("select * from 	tbl_notification where is_active=1");
				return $email_id;       
                }
				function getcustcount12($id){   
				//$v_id  = $this->session->userdata('Vendor_Id');				 
				$email_id=$this->db->query("select DISTINCT(customer_id) from tbl_customer_agreement_transaction where Product_vendor_id='".$id."'");
				return $email_id;       
                }
                 function getapproval(){
                     $v_id  = $this->session->userdata('Vendor_Id');
                        $this->db->where('Vendor_Id',$v_id);
			$this->db->where('is_approved',1);
			$email_id = $this->db->get($this->table);
			return $email_id;       
                }
                 function get_product_approval(){
                     $v_id  = $this->session->userdata('Vendor_Id');
                        $this->db->where('Vendor_Id',$v_id);
			$this->db->where('is_approved',0);
                        $this->db->where('is_active',0);
			$email_id = $this->db->get($this->product_version_table);
			return $email_id;       
                }
 function get_product_count_of_vendor($id){                   
            $this->db->where('Vendor_Id',$id);			
            $this->db->where('is_active',0);
			$email_id = $this->db->get($this->product_version_table);
			return $email_id;       
                }
                function fetch_vendors_data()
                 { 
       
                   $u_id=0;
                     $v_id=2;
                   $user = $this->db->query("select * from  tbl_vendor where is_active='" . $u_id."'and role_id='". $v_id."'and	is_approved='". $u_id."'");
                   return $user;
                 }
                  function fetch_vendors_data_product()
                 { 
               //   
               //     $v_id = $this->session->userdata('Vendor_Id');
                     $vendor_id  = $this->session->userdata('Vendor_Id');
                   $u_id=0;
                    $v_id=2;
                   $user = $this->db->query("select * from  tbl_product_version where is_active='" . $u_id."'and Vendor_Id='".$vendor_id."'and is_approved='". $u_id."'");
                   return $user;
                 }
				  function fetch_customers_count_data()
                 { 
               
                   $user = $this->db->query("SELECT tbl_customer.Name,tbl_customer.Mobile,tbl_customer.Address,tbl_customer.Email from tbl_customer left join tbl_customer_agreement on tbl_customer_agreement.Customer_id=tbl_customer.Customer_id group by tbl_customer_agreement.Customer_id");
                   return $user;
                 }
				 
				  function get_client_wk()
                 { 
					 $vendor_id  = $this->session->userdata('Vendor_Id');
                   $user = $this->db->query("SELECT  date(date) as dt,Count(*) as WeekCount FROM tbl_vendor  GROUP by  week( tbl_vendor.date)");
                   return $user;
                 }
				 
				  function fetch_customers_count_data_of_vendor()
                 { 
					 $vendor_id  = $this->session->userdata('Vendor_Id');
                   $user = $this->db->query("SELECT tbl_customer.Name,tbl_customer.Mobile,tbl_customer.Address,tbl_customer.Email from tbl_customer left join tbl_customer_agreement_transaction on tbl_customer_agreement_transaction.Customer_id=tbl_customer.Customer_id where tbl_customer_agreement_transaction.Product_vendor_id='". $vendor_id ."group by tbl_customer_agreement_transaction.Customer_id'");
                   return $user;
                 }
                  function update_vendor_data($id)
                 {
                    $id;
                    $data = array
                        (                     
                        'is_approved'=>1,
                    );
                    $where1 = "(Vendor_Id='" . $id . "')";
                    $this->db->where($where1);
                    $this->db->update("tbl_vendor", $data);                   
                    echo $this->db->affected_rows();
                }
                 function update_product_data($id)
                 {
                    $id;
                    $data = array
                        (                     
                        'is_approved'=>1,
                    );
                    $where1 = "(product_version_id='" . $id . "')";
                    $this->db->where($where1);
                    $this->db->update("tbl_product_version", $data);                   
                    echo $this->db->affected_rows();
                }
                  function get_product_count(){   
 $query=$this->db->query("select *  from tbl_vendor");				  
             //  $query=$this->db->query("select tbl_product_version.product_version_name,tbl_vendor.Name from tbl_product_version LEFT JOIN tbl_vendor on tbl_vendor.Vendor_Id=tbl_product_version.Vendor_id WHERE tbl_product_version.is_approved=0 and tbl_vendor.role_id<>5 and tbl_product_version.is_active=0");
				return $query;       
                }
				function getcount(){                         
			//$this->db->where('role_id',2);
			$this->db->where('is_active',1);
			$email_id = $this->db->get('tbl_script');
			return $email_id;       
                }
				function getcount_for_vendor(){ 
			$vendor_id  = $this->session->userdata('Vendor_Id');				
			$this->db->where('role_id',2);
			$this->db->where('ceated_by_user_id',$vendor_id);
			$this->db->where('is_approved',1);
			$email_id = $this->db->get($this->table);
			return $email_id;       
                }
                function fetch_products_data()
                 { 
               //    $v_id = $this->session->userdata('Vendor_Id');
                  // $u_id=0;
                     //$v_id=2;
                   $user = $this->db->query("select tbl_product_version.product_version_id,tbl_product_version.product_version_name,tbl_vendor.Name from tbl_product_version LEFT JOIN tbl_vendor on tbl_vendor.Vendor_Id=tbl_product_version.Vendor_id WHERE tbl_product_version.is_approved=0 and tbl_product_version.is_active=0 and tbl_vendor.role_id<>5 and tbl_vendor.is_active=0");
                   return $user;
                 }
				 
				 function get_News(){
					$v_id  = $this->session->userdata('Vendor_Id');					 
                      $query=$this->db->query("select * from  tbl_domain");
			return $query;       
                }
				 function get_product_total_count(){
					$v_id  = $this->session->userdata('Vendor_Id');					 
                      $query=$this->db->query("select * from  tbl_vendor");
			return $query;       
                }
				 function get_count_for_new_order(){
					//$v_id  = $this->session->userdata('Vendor_Id');					 
				//	$query=$this->db->query("select count(order_status) from  tbl_customer_agreement where order_status=1");
					$this->db->select('count(order_status) as name');
                            $this->db->from(' tbl_customer_agreement');
							$this->db->where('order_status',1);							
                            $earnings= $this->db->get()->row()->name;			 			
							return $earnings;     
					   
                }
				function get_count_for_pending_order(){
					$this->db->select('count(order_status) as name');
                            $this->db->from(' tbl_customer_agreement');
							$this->db->where('order_status',2);							
                            $earnings= $this->db->get()->row()->name;			 			
							return $earnings;     
                }
                
				function get_count_for_confirm_order(){
					$this->db->select('count(order_status) as name');
                            $this->db->from(' tbl_customer_agreement');
							$this->db->where('order_status',4);							
                            $earnings= $this->db->get()->row()->name;			 			
							return $earnings;     
                }
				function get_count_for_cancel_order(){
					$this->db->select('count(order_status) as name');
                            $this->db->from(' tbl_customer_agreement');
							$this->db->where('order_status',5);							
                            $earnings= $this->db->get()->row()->name;			 			
							return $earnings;     
                }
				function get_count_for_deliver_order(){
					$this->db->select('count(order_status) as name');
                            $this->db->from(' tbl_customer_agreement');
							$this->db->where('order_status',3);							
                            $earnings= $this->db->get()->row()->name;			 			
							return $earnings;     
                }
				 function fetch_feedback_data()
                 {                   
                   $user = $this->db->query("SELECT Name,Email FROM `tbl_vendor` order by date desc limit 0, 5");
                   return $user;
                 }
				  function fetch_feedback_data_of_vendor($uid)
                 {                   
                   $user = $this->db->query("SELECT tbl_feedback.msg,tbl_customer.Name from tbl_feedback left join tbl_customer on tbl_feedback.customer_id=tbl_customer.Customer_id where tbl_feedback.product_vendor_id=".$uid);
                   return $user;
                 }
				  function getState_Data()
                {	$v_id  = $this->session->userdata('Vendor_Id');
						$this->db->select('state');
                            $this->db->from(' tbl_vendor');
							$this->db->where('Vendor_Id',$v_id);							
                            $earnings= $this->db->get()->row()->state;	
							
                    $this->db->select('id,name');
                    $this->db->from('cities');
					$this->db->where('state_id',$earnings);		
                    $this->db->order_by('name', 'asc');
                    $query = $this->db->get();
                    return $query;
					
                } 
				 function getvendor_Data($city)
                {	
					$this->db->select('Vendor_Id,Name');
                    $this->db->from('tbl_vendor');
					$this->db->where('role_id',2);
					$this->db->where('city',$city);
                    $this->db->order_by('name', 'asc');
                    $query = $this->db->get();
                    return $query;
					
                }
			function fetch_product_data_of_vendor($uid) {    
       
        $m_id=0;
        $user = $this->db->query("select * from tbl_product_version where Vendor_id=" . $uid." and  is_active=" . $m_id);
        return $user;         
    }	
				function notify_vendor($uid){ 				
							$this->db->select('Mobile as name');
                            $this->db->from('tbl_vendor');	
							$this->db->where('Vendor_Id',$uid);				
                            $earnings= $this->db->get()->row()->name;			 			
							return $earnings; 
										
                }
 function update_product_data_of_vendor($id) {
        echo $id;
        $data = array
            (          
            'product_version_name' => $this->input->post('txt_product_name'),
            'Hsn_code' => $this->input->post('hsn'),
            'final_price_of_product' => $this->input->post('amount'),                                   	
        );
		//print_r( $data);
       $where1 = "(product_version_id='" . $id . "')";
     $this->db->where($where1);
       $this->db->update("tbl_product_version", $data);       
        echo $this->db->affected_rows();
        
    }	
  function fetch_product_data_to_delete($c_id) 
                    {

                        $a=1;
                        $b=$c_id;
                        $where1 = "(product_version_id='" . $b . "')";       
                        $this->db->set('is_active',$a);       
                        $this->db->where($where1);
                        $this->db->update('tbl_product_version');
                        echo $this->db->affected_rows();
                    }
                      function getCity_new($c_id) {
       $user = $this->db->query("SELECT * from tbl_product_category_new");
        return $user;
    }
        }