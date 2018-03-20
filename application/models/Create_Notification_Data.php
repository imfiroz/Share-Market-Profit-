<?php header('Access-Control-Allow-Origin: *'); ?>
<?php

class Create_Notification_Data extends CI_Model 
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
        date_default_timezone_set('Asia/Kolkata');  
        $date1 = date('Y-M-d h:i:s A', time());
        $notification=$this->input->post('txt_branch_name');
        $data = array
            (
            'Name' => $this->input->post('txt_branch_name'),
            'date'=> $date1,
            
        );
       // print_r($data);
        $this->db->insert('tbl_notification', $data);
         $branch = $this->db->insert_id();
			$query = $this->db->query('select Vendor_Id from  tbl_vendor');

	
	 foreach ($query->result() as $row) {
            
                       
                       
                      
    
			$q = $this->db->query('insert into tbl_customer_notification (customer_id,nofification_id) values ('.$row->Vendor_Id.','.$branch.')');
	
        }
		return $a = $this->db->insert_id();
	
        
    }

function send_sms($msg,$title,$key1)
{
echo $msg;
///echo $title;
//echo $key1;
$path_to_fcm='https://fcm.googleapis.com/fcm/send';
//$message=$_POST['message'];
//$title=$_POST['title'];

$message=$msg;
$title=$title;
//$key=$_POST['key'];

$key =$key1;//='eQ1XoNifYu4:APA91bE_UhOvYI5J5uvpllPOT_IdzGt7h74diGDhT6HZLqXH7Q027qOFpC5XnuY9hun4ZAFqt8eZ21u9Wdhs3as1z_Iu7wf29eT1d8U_dbqqwKnMWnFse1z6zpgRC7_GF4AVzUwWfymr';


//$key=//'fOAA4e5wyWs:APA91bHiMEG-spjVs2yhBVJh2pVpvYaknyxrD-r1Pgyc6BnXL3ukreOV4InNklycXsZ7P5DCoDRgHhwcj5d7ndwBQrVsIackjmokRZf_THY2gGJnHJ8I3Q9Zq--PRldBVPkHO60nNEVU';


$serverkey='AIzaSyDUZzueNBWK7AVVfWRODTOilOp4kP_Xzq0';

$headers = array(
            'Authorization: key=' . $serverkey,
            'Content-Type: application/json'
        );
        $fields = array(
            'to' => $key,
            'notification' => array('title'=>$title,'body'=>$message));
            
          //$payload=json_encode($fields);
         /* $ch = curl_init();
 
        // Set the url, number of POST vars, POST data
        curl_setopt($ch, CURLOPT_URL, $path_to_fcm);
 
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
        // Disabling SSL Certificate support temporarly
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOVE_V4);
 
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
  $result = curl_exec($ch);
  curl_close($ch);
 print_r($result );  */
         $ch = curl_init();
        curl_setopt( $ch,CURLOPT_URL, 'fcm.googleapis.com/fcm/send' );
        curl_setopt( $ch,CURLOPT_POST, true );
        curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
        curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
        curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
        curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $fields ) );
        $result = curl_exec($ch );
        curl_close( $ch );
        print_r( $result);     

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