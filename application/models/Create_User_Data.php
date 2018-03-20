
<?php header('Access-Control-Allow-Origin: *'); ?>
<?php

class Create_User_Data extends CI_Model 
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
                     public function db_save_user_data() {
//echo "aa";
        $role_id = 4;
        $v_id = $this->session->userdata('Vendor_Id');    
       $companywqw =$this->input->post('branch11');
       if( $companywqw==0){
           $AJK=0;
       }else{
       $this->db->select('company_id');
    $this->db->from('tbl_branch');
    $this->db->where('branch_id',$companywqw);
   $AJK= $this->db->get()->row()->company_id;  
       }
      $data = array
            (
           
            'gstin' => $this->input->post('txt_gstin_no'),
            'Name' => $this->input->post('txt_user_name'),
            'Mobile' => $this->input->post('txt_phone'),
           'role_id' => $role_id,
            'Password' => $this->input->post('txt_password'),
            'branch_id' => $this->input->post('branch11'),
            'business_category_id' => $this->input->post('business_cat_id'),
            'ceated_by_user_id' => $v_id,
            'company_id' =>$AJK,
            
        );
        $this->db->insert($this->table, $data);
        $relation = $this->db->insert_id();
        $data1 = array
            (
            'Vendor_Id' => $v_id,
            'Customer_Id' => $relation,
        );

        $this->db->insert($this->relation, $data1);
        return $relation;
     
     
    }
     function db_retrieve_base_path() {
        $user = $this->db->query("SELECT * FROM tbl_path_temp_holding");
        return $aa = $user->row();
        $this->db->close();
    }
     function db_retrieve_base_path1($c) {
//echo($c) ;
        $img_path = $this->db->query("SELECT folder_creater_id,code,folder_path FROM `tbl_folder_creater` WHERE event='" . $c . "' order by folder_creater_id asc");
        return $img_path;
        $this->db->close();
    }
     function db_retrieve_base_path_image($address_path, $event) {
        //code
        $user = $this->db->query("SELECT folder_path FROM tbl_folder_creater where event='" . $event . "' and code='" . $address_path . "'");

        return $aa = $user->row();
        // $this->db->close();
    }
     function db_retrieve_base_path_text($event, $text) 
	{
        $user = $this->db->query("SELECT folder_path FROM tbl_folder_creater where event='" . $event . "' and code='" . $text . "'");
        return $aa = $user->row();
        // $this->db->close();
    }
     function db_get_business_details_old() {
        $u_id= $this->session->userdata('Vendor_Id');;
        $user = $this->db->query("select tbl_business_category.business_category_id, tbl_business_category.Name from tbl_business_category inner join tbl_vendor on tbl_vendor.business_category_id=tbl_business_category.business_category_id where tbl_vendor.Vendor_Id=" . $u_id);

        //return $user->result();
          return $user->result();
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
     function db_chk_mobile_number($email) {
        //echo $mob;
        // $this->db->where('User_Email_Id', $email);
        //product_parent_id='" . $c_id . "'
        $where = "(Mobile='" . $email . "')";
        $this->db->where($where);
        $email_id = $this->db->get($this->table);
        return $email_id;
    }
     function db_chk_name($email) {
        //echo $mob;
        // $this->db->where('User_Email_Id', $email);
        //product_parent_id='" . $c_id . "'
         $v_id = $this->session->userdata('Vendor_Id');    
        $where = "(Name='" . $email . "'and ceated_by_user_id='".$v_id."')";
        $this->db->where($where);
        $email_id = $this->db->get($this->table);
        return $email_id;
    }
     function getbranch_Data() {
      $v_id = $this->session->userdata('Vendor_Id');
      $this->db->select('branch_id,Name');
      $this->db->from('tbl_branch');
      $where = "(created_by_userid='" . $v_id . "'and is_active=0)";    
      $this->db->where($where);
      $this->db->order_by('Name', 'asc');
      $query = $this->db->get();
      return $query;
    
      } 
        }
