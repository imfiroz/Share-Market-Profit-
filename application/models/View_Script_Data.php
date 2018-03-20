<?php
class View_Script_Data extends CI_Model 
	{   var $table = 'tbl_branch';
	  var $log = 'tbl_log';		
            var $city = 'cities';
              var $table_script = 'tbl_script';    
            public function __construct()
                 {
                    parent::__construct();
                    $this->load->database();
                 }
	function fetch_Script_Data()
	{
        $u_id=0;
       $v_id = $this->session->userdata('Vendor_Id');      
       $user1 = $this->db->query("SELECT tbl_script.*,tbl_trading_master.Name as tradingtype,tbl_transaction_type.name as transaction_type from tbl_script left join tbl_trading_master on tbl_script.trading_type= tbl_trading_master.master_id left join tbl_transaction_type on tbl_script.transaction_type=tbl_transaction_type.transaction_id where tbl_script.is_active=1" );
      // print_r($user);
         return $user1;
    }
    function db_chk_hsn($code,$value_trad_typ) 
            {  
     
                $where = "(Name='" . $code ."'and trading_type='".$value_trad_typ."')";
                $this->db->where($where);
                $hsn_code = $this->db->get($this->table_script);
                return $hsn_code;
            }
                  function fetch_Notification_Data() {
        $u_id=0;
       $v_id = $this->session->userdata('Vendor_Id');      
       $user1 = $this->db->query("select * from tbl_script" );
      // print_r($user);
         return $user1;
    }
     function gettrading_Data() {
                        $this->db->select('master_id,Name');
                        $this->db->from('tbl_trading_master');
                        $this->db->order_by('Name', 'asc');
                        $query = $this->db->get();
                        return $query;
                        }
                         function gettransaction_Data() {
                        $this->db->select('transaction_id,name');
                        $this->db->from('tbl_transaction_type');
                        $this->db->order_by('name', 'asc');
                        $query = $this->db->get();
                        return $query;
                        }
	
	  function fetch_Script_data_to_update($c_id)
                 {
                //echo $c_id;
                            $user = $this->db->query("select * from tbl_script where id=" . $c_id);
                            return $data = $user->result_array($user);
                 }
				 
    function fetch_branch_data_to_update($c_id)
                 {
                //echo $c_id;
                            $user = $this->db->query("select branch_id,Name,GSTIN,Location,state,city,pincode,email,Vat_no from tbl_branch where branch_id=" . $c_id);
                            return $data = $user->result_array($user);
                 }
                  function db_retrieve_base_path_image($address_path, $event) 
                {
               //code
                       $user = $this->db->query("SELECT folder_path FROM tbl_folder_creater where event='" . $event . "' and code='" . $address_path . "'");
                       return $aa = $user->row();
               // $this->db->close();
                 }
                 function getCity_update() 
                 {
                  
                    $this->db->select('id,name');
                    $this->db->from('cities');
                    $this->db->order_by('name', 'asc');
                    $query = $this->db->get();
                    return $query;
                 }
                 function getState_Data() 
                 {
                    $this->db->select('id,name');
                    $this->db->from('states');
                    $this->db->order_by('name', 'asc');
                    $query = $this->db->get();
                    return $query;
                 } 
                  function getCity($city) 
                 {  
                   // echo $city;
                  $where = "(state_id='" . $city . "')";
                  $this->db->where($where);
                  $get_state = $this->db->get($this->city);
                   return $get_state;
                 }
                  function fetch_branch_data_to_delete($c_id)
                {       
                            $a=1;
                            $b=$c_id;
                            $where1 = "(branch_id='" . $b . "')";       
                            $this->db->set('is_active',$a);       
                            $this->db->where($where1);
                            $this->db->update('tbl_branch');
                            $this->db->affected_rows();
                 }
                 function update_branch_data($id) 
                 {
                    $id;
                    $data = array
                    (                 
                    'Name' => $this->input->post('branch_name'),
                    'trading_type' => $this->input->post('trading_type_id'),
                    'transaction_type' => $this->input->post('txt_trntype'),
                    'entry_price' => $this->input->post('entry_price'),
                         'Target1' => $this->input->post('Target1'),
                        'Target2' => $this->input->post('Target2'), 
                        'Toploss' => $this->input->post('Toploss'),
                          'Comment' => $this->input->post('Comment'),
                );
                    $where1 = "(id='" . $id . "')";
                   $this->db->where($where1);
                    $this->db->update("tbl_script", $data);
					$row=$this->db->affected_rows();
if($row>0)		{			
					 $data_company = array
                (
                
								'Name' => $this->input->post('branch_name'),
								 'trading_type' => $this->input->post('trading_type_id'),
								 'transaction_type' => $this->input->post('txt_trntype'),
								 'entry_price' => $this->input->post('entry_price'),
								 'Target1' => $this->input->post('Target1'),
								 'Target2' => $this->input->post('Target2'),
								'Toploss' => $this->input->post('Toploss'),
								'Comment' => $this->input->post('Comment'),
								'action_performed' =>"Update",								
								'script_log_id' => $id,
								
				);
           		$this->db->insert($this->log, $data_company);			
				 return $vendor_id;                                    
					}					
                }
                 function db_chk_email_of_customer($email)
                 {
                    $where = "(email='" . $email . "')";
                    $this->db->where($where);
                    $email_id = $this->db->get($this->table);
                    return $email_id;
                }
                 
                function db_chk_name($email1)
                 {
                    $v_id = $this->session->userdata('Vendor_Id');
                  //  Email='" . $email . "' AND role_id =. $email
                  //  event='" . $event . "' and code='" . $address_path . "'"
                    $where = "(Name='" . $email1 . "' AND created_by_userid=".$v_id.")";
                    $this->db->where($where);
                    $email_id = $this->db->get($this->table);
                    return $email_id;
                }
                 function getcustcount12($id){   
								 
				$email_id=$this->db->query("SELECT count(trading_type) as name from tbl_script where trading_type=".$id." and is_active=1");
				$earnings= $email_id->row()->name; 
                                return $earnings;
                }
                  function fetch_script_data_to_delete($c_id) 
            {

                $a=0;
                $b=$c_id;
                $where1 = "(id='" . $b . "')";       
                $this->db->set('is_active',$a);       
                $this->db->where($where1);
                $this->db->update('tbl_script');
				$row=$this->db->affected_rows();
				if($row>0)		{	
				$email_id=$this->db->query("SELECT  * from tbl_script where id=".$c_id);
					$Name= $email_id->row()->Name; 
					$trading_type= $email_id->row()->trading_type;
					$entry_price= $email_id->row()->entry_price;
					$transaction_type= $email_id->row()->transaction_type;
					$Target1= $email_id->row()->Target1;
						$Target2= $email_id->row()->Target2;
							$Toploss= $email_id->row()->Toploss;
								$Comment= $email_id->row()->Comment;
					 $data_company = array
                (
                
								'Name' =>$Name,
								 'trading_type' => $trading_type,
								 'transaction_type' => $transaction_type,
								 'entry_price' =>$entry_price,
								 'Target1' =>$Target1,
								 'Target2' =>$Target2,
								'Toploss' => $Toploss,
								'Comment' => $Comment,
								'action_performed' =>"Delete",								
								'script_log_id' => $c_id,
								
				);
           		$this->db->insert($this->log, $data_company);			
				 return 1;                                    
					}					
               // }
              //  echo $this->db->affected_rows();


            }
        }
    ?>    