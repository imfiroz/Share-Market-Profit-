<?php
class View_Customer_Data extends CI_Model 
	{   var $table = 'tbl_vendor';
            var $city = 'cities';
            public function __construct()
                 {
                    parent::__construct();
                    $this->load->database();
                 }
            function db_chk_name($email)
                 {
                
                     $v_id = $this->session->userdata('Vendor_Id');
                      $where = "(Name='" . $email . "'and ceated_by_user_id='".$v_id."')";
                   // $where = "(Name='" . $email . "')";
                    $this->db->where($where);
                    $email_id = $this->db->get($this->table);
                    return $email_id;
                }
				 function db_chk_email_of_customer($email)
                 {
                    $where = "(Email='" . $email . "')";
                    $this->db->where($where);
                    $email_id = $this->db->get($this->table);
                    return $email_id;
                }
            function fetch_customer_data() 
                {
                    //$v_id = $this->session->userdata('Vendor_Id');
                    $product_id=0;
					$role_id=3;                
		    $user = $this->db->query("select * from tbl_vendor where role_id not in(1)   order by Vendor_Id desc");
                    $aa = $user->result_array($user);
                    echo json_encode($aa);
                }
                function fetch_customer_data_to_delete($c_id)
                {       
                            $a=1;
                            $b=$c_id;
                            $where1 = "(Vendor_Id='" . $b . "')";       
                            $this->db->set('is_active',$a);       
                            $this->db->where($where1);
                            $this->db->update('tbl_vendor');
                            echo $this->db->affected_rows();
                 }
                 function fetch_customer_data_to_update($c_id)
                 {
                //echo $c_id;
                            $user = $this->db->query("select Vendor_Id,Name,Mobile,Address,Email,street,pincode,state,city from tbl_vendor where Vendor_Id=" . $c_id);
                            return $data = $user->result_array($user);
                 }
                function db_retrieve_base_path_image($address_path, $event) 
                {
               //code
                       $user = $this->db->query("SELECT folder_path FROM tbl_folder_creater where event='" . $event . "' and code='" . $address_path . "'");
                       return $aa = $user->row();
               // $this->db->close();
                 }
                 function getCity_update() 
                 {
                  
                    $this->db->select('id,name');
                    $this->db->from('cities');
                    $this->db->order_by('name', 'asc');
                    $query = $this->db->get();
                    return $query;
                 }
                 function getState_Data() 
                 {
                    $this->db->select('id,name');
                    $this->db->from('states');
                    $this->db->order_by('name', 'asc');
                    $query = $this->db->get();
                    return $query;
                 } 
                 function getCity($city) 
                 {  
                   // echo $city;
                  $where = "(state_id='" . $city . "')";
                  $this->db->where($where);
                  $get_state = $this->db->get($this->city);
                   return $get_state;
                 }
                 function update_cust_data($id) 
                 {
                    $id;
                    $data = array
                    (
                  
                    'Name' => $this->input->post('customer_name'),
                     'Mobile' => $this->input->post('phone'),
                    'state' => $this->input->post('txt_state'),
                    'city' => $this->input->post('txt_city'),         
                    'pincode' => $this->input->post('txt_pincode'),
                    'Email' => $this->input->post('txt_mail'),
                );
                 //   print_r($data);
                    
                    $where1 = "(Vendor_Id='" . $id . "')";
                   $this->db->where($where1);
                    $this->db->update("tbl_vendor", $data);
                    echo $this->db->affected_rows();  
                     
                        
                }
                  function db_chk_phone($phone) 
		{	
                    
			$where = "(Mobile='" . $phone . "')";
			$this->db->where($where);
			$mobile_id = $this->db->get($this->table);
			return $mobile_id;  
                      
                                 
		}
                 function getcustcount(){ 
                     $this->db->select('count(DISTINCT(Customer_id)) as name');
                            $this->db->from(' tbl_customer_agreement');												
                            $earnings= $this->db->get()->row()->name;			 			
                            return $earnings;     
				  
                }
                 
        }
?>