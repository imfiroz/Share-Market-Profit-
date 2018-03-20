
<?php
class View_Vendor_Data extends CI_Model 
	{   var $table = 'tbl_vendor';
            var $city = 'cities';
            public function __construct()
                 {
                    parent::__construct();
                    $this->load->database();
                 }
     function update_vendor_data($id)
      {
        $id;
        $data = array
            (
            //  'role_id' => $this->input->post('role_id'),
            'Name' => $this->input->post('customer_name'),
            'Address' => $this->input->post('customer_address'),           
            'state' => $this->input->post('txt_state'),
            'city' => $this->input->post('txt_city'),
            'street' => $this->input->post('txt_street'),
            'pincode' => $this->input->post('txt_pincode'),
            'Adhar_Card' => $this->input->post('adhar_card'),          
            'Email' => $this->input->post('txt_mail'),
            'Mobile' => $this->input->post('txt_phone'),
        );
        $where1 = "(Vendor_Id='" . $id . "')";
        $this->db->where($where1);
        $this->db->update("tbl_vendor", $data);

        echo $this->db->affected_rows();
        
    }
      function fetch_vendor_data() {
        $u_id=0;
		$role_id=2;
         $v_id = $this->session->userdata('Vendor_Id');
        $user = $this->db->query(" select * from tbl_vendor where ceated_by_user_id=". $v_id." and `is_active`=" . $u_id." and role_id=".$role_id); 
       // select * from tbl_vendor where ceated_by_user_id=". $v_id." and `is_active`=" . $u_id)
        $aa = $user->result_array($user);
        echo json_encode($aa); 
        }
     function fetch_vendor_data_to_delete($c_id) 
            {

                $a=1;
                $b=$c_id;
                $where1 = "(Vendor_Id='" . $b . "')";       
                $this->db->set('is_active',$a);       
                $this->db->where($where1);
                $this->db->update('tbl_vendor');
                echo $this->db->affected_rows();


            }
       function fetch_vendor_data_to_update($c_id)
            {
                $user = $this->db->query("select Vendor_Id,Name,Mobile,Email,Address,street,pincode,state,city,gstin,Adhar_Card,Pan_Card from tbl_vendor where Vendor_Id=" . $c_id);
                return $data = $user->result_array($user);
            }
        function db_retrieve_base_path_image($address_path, $event) 
                {
                    $user = $this->db->query("SELECT folder_path FROM tbl_folder_creater where event='" . $event . "' and code='" . $address_path . "'");
                    return $aa = $user->row();
            }
            function getCity($c_id) {
                    //echo $c_id;
                    $where = "(state_id='" . $c_id . "')";
                    $this->db->where($where);
                    $get_state = $this->db->get($this->city);
                    //print_r($get_state);
                    return $get_state;
                }
                function getCity_update() 
                 {
                  
                    $this->db->select('id,name');
                    $this->db->from('cities');
                    $this->db->order_by('name', 'asc');
                    $query = $this->db->get();
                    return $query;
                 }
                 function getState_Data() {
                        $this->db->select('id,name');
                        $this->db->from('states');
                        $this->db->order_by('name', 'asc');
                        $query = $this->db->get();
                        return $query;
                        }
         function db_chk_email_of_customer($email) 
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
		 function db_chk_name($phone) 
		{	
		$role_id=2;
		 $where = "(Name='" . $email . "'and role_id='".$role_id."')";
		//	$where = "(Name='" . $phone . "'and role_id='".$role_id."')";
			$this->db->where($where);
			$mobile_id = $this->db->get($this->table);
			return $mobile_id;  
                                                     
		}

       }
        
 ?>