<?php header('Access-Control-Allow-Origin: *'); ?>
<?php

//error_reporting(0);
//class Left_menu_db extends CI_Model {
//error_reporting(0);
class Dashboard_Data extends CI_Model {
     public function __construct()
                 {
                    parent::__construct();
                    $this->load->database();
                 }
                 function fetch_user_data($u_id)
                 { //echo $u_id;
                        $user = $this->db->query("select * from tbl_vendor where 
                                Vendor_Id='" . $u_id . "'");
                        return $user;
                 }
                  
}
?>
