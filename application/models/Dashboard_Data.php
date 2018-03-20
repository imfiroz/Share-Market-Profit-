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
                  function fetch_sidemenu()
				 {
					 //echo"eeee";
					/* $user = $this->db->query("SELECT t1.left_menu_name parent,t2.left_menu_name child,t2.fa_fa_icon,t2.onclick FROM tbl_left_menu t1 left join tbl_left_menu t2 on t2.parent_id=t1.left_menu_id where t1.parent_id=0 ");*/
					 $user = $this->db->query("SELECT t1.left_menu_name parent,t2.left_menu_name child,t2.fa_fa_icon,t2.onclick,t2.role_id  FROM tbl_left_menu t1 left join tbl_left_menu t2 on t2.parent_id=t1.left_menu_id where t1.parent_id=0 group BY parent,child");
                        return $user;
				 }
                  
}
?>
