
<?php header('Access-Control-Allow-Origin: *'); ?>
<?php

class Create_Level_Data extends CI_Model 
	{
		 var $table = 'tbl_branch';
                 var $relation = 'tbl_vendor_customer_relation';
                 var $state = 'states';
                 var $city = 'cities';
                public function __construct()
                    {
                       parent::__construct();
                       $this->load->database();
                    }
                    function db_get_business_details() {
        $u_id= $this->session->userdata('Vendor_Id');
        $user = $this->db->query("select business_category.id, business_category.name from business_category inner join tbl_vendor on tbl_vendor.business_category_id=business_category.id where tbl_vendor.Vendor_Id=" . $u_id);
          return $user->result();
    }
      function  db_get_business_sub_details() {
        $u_id= $this->session->userdata('Vendor_Id');
        $user = $this->db->query("select business_sub_category.id, business_sub_category.name from business_sub_category inner join tbl_vendor on tbl_vendor.business_sub_category_id=business_sub_category.id where tbl_vendor.Vendor_Id=" . $u_id);
          return $user->result();
    }
  // select business_sub_category.id, business_sub_category.name from business_sub_category inner join tbl_vendor on tbl_vendor.business_sub_category_id=business_sub_category.id where tbl_vendor.Vendor_Id=" . $u_id
     function getState_Data() {
      $this->db->select('id,name');
      $this->db->from('states');
      $this->db->order_by('name', 'asc');
      $query = $this->db->get();
      return $query;
      } 
      function get_company() {
 //  $company = $_POST['company'];  
    $company = $this->session->userdata('company_id');
    $qu = $this->db->query("SELECT * from tbl_company where company_id=" . $company); 
    // return $qu->result();
    return $qu;

    
    }
    function getCity($c_id) {
        //echo $c_id;
        $where = "(state_id='" . $c_id . "')";

        $this->db->where($where);
        $get_state = $this->db->get($this->city);
        //print_r($get_state);
        return $get_state;
    }
    function db_chk_name($code) 
		{	
                    
			$where = "(Name='" . $code . "')";
			$this->db->where($where);
			$name = $this->db->get($this->table);
			return $name;  
                      
                                 
		}
                 public function db_save_branch_data() {

        
        $data = array
            (
            'Name' => $this->input->post('txt_branch_name'),
           
            
        );
       // print_r($data);
        $this->db->insert('tbl_level', $data);
        return $branch = $this->db->insert_id();
        
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
                function db_chk_email($email) 
		{		
			$where = "(email='" . $email . "')";
			$this->db->where($where);
			$email_id = $this->db->get($this->table);
			return $email_id;                 
		}
        }     
   ?>     