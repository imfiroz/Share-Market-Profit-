<?php header('Access-Control-Allow-Origin: *'); ?>
<?php
	class Change_Pass extends CI_Model 
		{   var $table = 'tbl_vendor';
		 public function __construct()
                             {
                                parent::__construct();
                                $this->load->database();
                             }
			 function db_chk_email($email) {
        //echo $mob;
        // $this->db->where('User_Email_Id', $email);
        //product_parent_id='" . $c_id . "'
        $where = "(Email='" . $email . "')";
        $this->db->where($where);
        $email_id = $this->db->get($this->table);
        return $email_id;
    }
		 function db_change_pass($pass,$u_id) {
         $this->db->set('Password', $pass);
       // $this->db->set('branch_id', $branch);
        $this->db->where('Vendor_Id', $u_id);
        $this->db->update('tbl_vendor');
        return  $this->db->affected_rows();

    }
	

public function fun_Model_User_Login($username, $pwd, $ip, $browser, $referrer, $sessionID) {  
    /*   $where = "( Mobile='" . $username . "' or Email='" . $username . "')";		
        $this->db->where($where);
        $this->db->where('Password', $pwd);

        $query = $this->db->get('tbl_vendor');
        $OTP = "";
        //echo $usrID."/".$usrPassword;
        //   print_r($query);
        //$blnUsrChk = FALSE;
    echo $username;
    echo"sss";
    echo $pwd;*/
 $query =$this->db->query("SELECT * FROM tbl_vendor where Mobile ='" . $username . "' or Email='".$username."' and Password='" . $pwd . "'");
  $abc=$query->num_rows();
  $results = array();
    foreach ($query->result() as $row){
        $results[] = array(
                'Vendor_Id' => $row->Vendor_Id,
                'branch_id' => $row->branch_id,
                'company_id' => $row->company_id,
                'role_id' => $row->role_id,
                'rows'=>$abc
        );
     //  print_r($results);
    return $results; 
    
        } 
}
		function get_setting_data()
		{
			  $q = $this->db->get('tbl_settings');
				if ($q->num_rows() > 0) {
					//echo"aaa";
					         return   $q;
					/*foreach (($q->result()) as $row) {
						$data[] = $row;
					}
					return $data;*/
				}
				return FALSE;
		}
		 public function get_biller_data($biller) {
				 
				    //$vendor_id = $this->session->userdata('Vendor_Id');
        $q = $this->db->get_where('tbl_branch', array('branch_id' => $biller));
        if ($q->num_rows() > 0) {
            /*foreach (($q->result()) as $row) {
                $data[] = $row;
            }*/
			//print_r($data);
            return $q;
        }
        return FALSE;
    }
		}
?>