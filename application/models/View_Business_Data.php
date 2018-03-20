<?php
class View_Business_Data extends CI_Model 
	{     var $business_table = 'business_category';
         var $business_table1 = 'tbl_business_category';
             public function __construct()
                 {
                    parent::__construct();
                    $this->load->database();
                 }

            function update_business_data($id) 
                {
            
                $id;
                $data = array
                    (         
                    'name' => $this->input->post('customer_name'),
                    );
                $where1 = "(id='" . $id . "')";
                $this->db->where($where1);
                $this->db->update("business_category", $data);
                echo $this->db->affected_rows();
        
                }
            function fetch_business_data()
                { 
                $u_id=1;
                $user = $this->db->query("select * from  business_category where is_active=" . $u_id);
                return $user;
                 }
            function fetch_business_data_to_delete($c_id)
                {

                    $a=0;
                    $b=$c_id;
                    $where1 = "(id='" . $b . "')";       
                    $this->db->set('is_active',$a);       
                    $this->db->where($where1);
                    $this->db->update('business_category');
                    echo $this->db->affected_rows();


                }
                function getsub_cat_update() 
                 {
                  
                    $this->db->select('id,name');
                    $this->db->from('business_sub_category');
                    $this->db->order_by('name', 'asc');
                    $query = $this->db->get();
                    return $query;
                 }
                function fetch_business_data_to_update($c_id) {
                    // echo $c_id;
                     $user = $this->db->query("select * from business_category where id=" . $c_id);       
                    return $data = $user->result_array($user);
                 }
                 function db_retrieve_base_path_image($address_path, $event) {
                    $user = $this->db->query("SELECT folder_path FROM tbl_folder_creater where event='" . $event . "' and code='" . $address_path . "'");
                    return $aa = $user->row();
                    }
                 function db_chk_business($email) {
                        $where = "(name='" . $email . "')";
                        $this->db->where($where);
                        $email_id = $this->db->get($this->business_table);
                        return $email_id;
                     }
        } 
        
   ?>