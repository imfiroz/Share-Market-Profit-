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
	

public function fun_Model_User_Login($usrID, $usrPassword, $ip, $browser, $referrer, $sessionID) {    //$this->load->database();
          $where = "( Mobile='" . $usrID . "' or Email='" . $usrID . "')";
		//  echo $usrPassword;
		//echo  $qu=("select * from tbl_vendor");

        $this->db->where($where);
        $this->db->where('Password', $usrPassword);
        //$this->db->where('role_id','2');
        $query = $this->db->get('tbl_vendor');
        $OTP = "";
        //echo $usrID."/".$usrPassword;
        //   print_r($query);
        //$blnUsrChk = FALSE; 
         $insert_id = $query->num_rows();
		return array(
    'InsertID' => $insert_id,
    'finalSelData' => ($query),
);
        //return(array('InsertID' => $insert_id, 'finalSelData' => $query));
      //  $this->db->close();
    
        }   
		}
?>