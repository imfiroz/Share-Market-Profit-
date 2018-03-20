<?php
class View_Notification_Data extends CI_Model 
	{   var $table = 'tbl_branch';
            var $city = 'cities';
            public function __construct()
                 {
                    parent::__construct();
                    $this->load->database();
                 }
				  function fetch_level_data() {
        $u_id=0;
       $v_id = $this->session->userdata('Vendor_Id');      
       $user1 = $this->db->query("select * from tbl_level" );
      // print_r($user);
         return $user1;
    }
                  function fetch_Notification_Data() {
        $u_id=0;
       $v_id = $this->session->userdata('Vendor_Id');      
       $user1 = $this->db->query("select * from tbl_notification order by id desc " );
      // print_r($user);
         return $user1;
    }
	
	  function fetch_notification_data_to_update($c_id)
                 {
                //echo $c_id;
                            $user = $this->db->query("select * from tbl_notification where id=" . $c_id);
                            return $data = $user->result_array($user);
                 }
				 
    function fetch_branch_data_to_update($c_id)
                 {
                //echo $c_id;
                            $user = $this->db->query("select branch_id,Name,GSTIN,Location,state,city,pincode,email,Vat_no from tbl_branch where branch_id=" . $c_id);
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
                  function fetch_branch_data_to_delete($c_id)
                {       
                            $a=1;
                            $b=$c_id;
                            $where1 = "(branch_id='" . $b . "')";       
                            $this->db->set('is_active',$a);       
                            $this->db->where($where1);
                            $this->db->update('tbl_branch');
                            $this->db->affected_rows();
                 }
                 function update_branch_data($id) 
                 {
                    $id;
                    $data = array
                    (
                  
                    'Name' => $this->input->post('branch_name'),
                    
                        
                );
                 //   print_r($data);
                    
                    $where1 = "(id='" . $id . "')";
                   $this->db->where($where1);
                    $this->db->update("tbl_notification", $data);
                    echo $this->db->affected_rows();  
                     
                        
                }
                 function db_chk_email_of_customer($email)
                 {
                    $where = "(email='" . $email . "')";
                    $this->db->where($where);
                    $email_id = $this->db->get($this->table);
                    return $email_id;
                }
                 
                function db_chk_name($email1)
                 {
                    $v_id = $this->session->userdata('Vendor_Id');
                  //  Email='" . $email . "' AND role_id =. $email
                  //  event='" . $event . "' and code='" . $address_path . "'"
                    $where = "(Name='" . $email1 . "' AND created_by_userid=".$v_id.")";
                    $this->db->where($where);
                    $email_id = $this->db->get($this->table);
                    return $email_id;
                }
        }
    ?>    