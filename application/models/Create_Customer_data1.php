<?php header('Access-Control-Allow-Origin: *'); ?>
<?php

class Create_Customer_data extends CI_Model 
	{
		 var $table = 'tbl_vendor';
                 var $relation = 'tbl_vendor_customer_relation';
                 var $state = 'states';
                 var $city = 'cities';
                  public function __construct()
                 {
                    parent::__construct();
                    $this->load->database();
                 }
		function db_chk_email($email) 
		{		
			$where = "(Email='" . $email . "')";
			$this->db->where($where);
			$email_id = $this->db->get($this->table);
			return $email_id;                 
		}
                function db_chk_phone($phone) 
		{	
                    
			$where = "(Mobile='" . $phone . "')";
			$this->db->where($where);
			$mobile_id = $this->db->get($this->table);
			return $mobile_id;  
                      
                                 
		}
                 function db_chk_name($code) 
		{	
                    
			$where = "(Name='" . $code . "')";
			$this->db->where($where);
			$name = $this->db->get($this->table);
			return $name;  
                      
                                 
		}
                public function db_save_customer_data() 
                {
                    $v_id = $this->session->userdata('Vendor_Id');
                    $branch_id = $this->session->userdata('branch_id');
                    $company_id = $this->session->userdata('company_id'); 
                   // $v_id=150;
                 //   $branch_id=160;
                 //   $company_id=170;
                    $data = array
                    (                        	
                    'role_id' => $this->input->post('role_id'),
                    'Name' => $this->input->post('name'),                   
                    'Address' => $this->input->post('address'),   
                    'Email' => $this->input->post('email11'),
                    'Mobile' => $this->input->post('phone'),
                    'Password' => $this->input->post('password'),
                    'state' => $this->input->post('state'),
                    'city' => $this->input->post('city'),                    
                    'ceated_by_user_id' => $v_id,
                    'pincode' => $this->input->post('pincode'),
                    'company_id' => $company_id,
                    'branch_id' => $branch_id,
                    );
                    $this->db->insert($this->table, $data);
                    $cust_id = $this->db->insert_id();
                    $data1 = array
                        (
                        'Vendor_Id' => $v_id,
                        'Customer_Id' => $cust_id,
                         );
                    $this->db->insert($this->relation, $data1);
                    $relation = $this->db->insert_id();
                    return $cust_id;
                }
                function getState_Data()
                {
                    $this->db->select('id,name');
                    $this->db->from('states');
                    $this->db->order_by('name', 'asc');
                    $query = $this->db->get();
                    return $query;
                } 
                function getCity($c_id)
                {      
                   $where = "(state_id='" . $c_id . "')";
                   $this->db->where($where);
                   $get_state = $this->db->get($this->city);
                   return $get_state;
                }
                function db_retrieve_base_path() 
                {
                    $user = $this->db->query("SELECT * FROM tbl_path_temp_holding");
                    return $aa = $user->row();
                   // $this->db->close();
                }
                function db_retrieve_base_path1($c) 
                {
                    $img_path = $this->db->query("SELECT folder_creater_id,code,folder_path FROM `tbl_folder_creater` WHERE event='" . $c . "' order by folder_creater_id asc");
                    return $img_path;
                   // $this->db->close();
                }
                function db_retrieve_base_path_image($address_path, $event) 
                {
                    $user = $this->db->query("SELECT folder_path FROM tbl_folder_creater where event='" . $event . "' and code='" . $address_path . "'");
                    return $aa = $user->row();                   
                }
               function db_retrieve_base_path_text($event, $text) 
                {
                $user = $this->db->query("SELECT folder_path FROM tbl_folder_creater where event='" . $event . "' and code='" . $text . "'");
                return $aa = $user->row();       
                }
    }