<?php header('Access-Control-Allow-Origin: *'); ?>
<?php

class Create_Customer_Data extends CI_Model 
	{
		 var $table = 'tbl_vendor';
                 var $relation = 'tbl_vendor_customer_relation';
                 var $state = 'states';
                 var $city = 'cities';
                  var $tbl_fcm = 'tbl_fcm';
                 
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
                     $v_id = $this->session->userdata('Vendor_Id');
                      $where = "(Name='" . $code . "'and ceated_by_user_id='".$v_id."')";
			//$where = "(Name='" . $code . "')";
			$this->db->where($where);
			$name = $this->db->get($this->table);
			return $name;  
                      
                                 
		}
                public function db_save_customer_data() 
                {
                   			
                    $data = array
                    (                        	

                    'Name' => $this->input->post('name'),                   
                    'Address' => $this->input->post('address'),   
                    'Email' => $this->input->post('email11'),
                    'Mobile' => $this->input->post('phone'),
                   
                    );
                   
                   
                    $this->db->insert($this->table, $data);
                    $cust_id = $this->db->insert_id();
                    $data1 = array
                        (
                      
                        'user_id' => $cust_id,
                         );
                    $this->db->insert($this->tbl_fcm, $data1);
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