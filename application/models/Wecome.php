<?php header('Access-Control-Allow-Origin: *'); ?>
<?php
	class Wecome extends CI_Model 
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
		}
?>