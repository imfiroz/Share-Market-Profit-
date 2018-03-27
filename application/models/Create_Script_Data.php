
<?php header('Access-Control-Allow-Origin: *'); ?>
<?php

class Create_Script_Data extends CI_Model 
	{
		 var $table = 'tbl_branch';
		  var $log = 'tbl_log';		  
                  var $table_script = 'tbl_script';                
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
	
	 public function save_script_log($script_id)
	 {
		 //*Inserting Script Log 
		date_default_timezone_set('Asia/Kolkata'); 
		$date = date('Y-M-d h:i:s A', time());
		$data = array
		(
			'script_id' => $script_id,
			'trading_id' => $this->input->post('trading_type'),
			'transaction_id' => $this->input->post('transaction_type'),
			'buy_text' => $this->input->post('txt_price'),
			'target1' => $this->input->post('Target1'),
			'target2' => $this->input->post('Target2'),
			'sell_text' => $this->input->post('Toploss'),
			'result' => 'Open.',
			'is_active' => 0,
			'date' => $date,
		);
		$this->db->insert('tbl_script_log', $data);
	 }
		
     public function db_save_branch_data() {
			date_default_timezone_set('Asia/Kolkata'); 
			 //$date1 = date('Y-M-D h:i:s A', time());
			$date1 = date('Y-M-d h:i:s A', time());
				$data = array
					(
						  'Name' => $this->input->post('txt_branch_name'),
						 'trading_type' => $this->input->post('trading_type'),
						 'transaction_type' => $this->input->post('transaction_type'),
						 'entry_price' => $this->input->post('txt_price'),
						 'Target1' => $this->input->post('Target1'),
						 'Target2' => $this->input->post('Target2'),
						'Toploss' => $this->input->post('Toploss'),
						'Comment' => $this->input->post('Comment'),
						'date' => $date1,
						'date_time' => $date1,
				);
		$this->db->insert($this->table_script, $data);						
		$vendor_id = $this->db->insert_id();							
 $data_company = array
		(

						'Name' => $this->input->post('txt_branch_name'),
						 'trading_type' => $this->input->post('trading_type'),
						 'transaction_type' => $this->input->post('transaction_type'),
						 'entry_price' => $this->input->post('txt_price'),
						 'Target1' => $this->input->post('Target1'),
						 'Target2' => $this->input->post('Target2'),
						'Toploss' => $this->input->post('Toploss'),
						'Comment' => $this->input->post('Comment'),
						'action_performed' =>"Insert",								
						'script_log_id' => $vendor_id,

		);
		$this->db->insert($this->log, $data_company);			
		 return $vendor_id;
       //   $branch = $this->db->insert_id();
    /*    $query = $this->db->query('SELECT * FROM tbl_level');
        $results = $query->result_array();
	  foreach ($query->result() as $row) {       
        }
*/
	
        
    }
    function getcustcount12($id){   
								 
				$email_id=$this->db->query("SELECT count(trading_type) as name from tbl_script where trading_type=".$id." and is_active=1");
				$earnings= $email_id->row()->name; 
                                return $earnings;
                }
function db_chk_hsn($code,$value_trad_typ) 
            {               
                $where = "(Name='" . $code ."'and trading_type='".$value_trad_typ."')";
                $this->db->where($where);
                $hsn_code = $this->db->get($this->table_script);
                return $hsn_code;
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
                	 function getTrade_Data()
                {	
					$this->db->select('master_id,Name');
                                        $this->db->from('tbl_trading_master');									
                                        $this->db->order_by('Name', 'asc');
                                        $query = $this->db->get();
                                        return $query;
					
                }
                 function getbuy_Data()
                {	
					$this->db->select('transaction_id,name');
                                        $this->db->from('tbl_transaction_type');									
                                        $this->db->order_by('name', 'asc');
                                        $query = $this->db->get();
                                        return $query;
					
                }
        }     
   ?>     