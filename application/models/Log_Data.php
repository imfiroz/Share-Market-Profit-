<?php header('Access-Control-Allow-Origin: *'); ?>
<?php
class Log_Data extends CI_Model 
	{             var $tbl_script_log = 'tbl_script_log';
                         public function __construct()
                             {
                                parent::__construct();
                                $this->load->database();
                             }
                function getlog_details()
				{ 
                     $query=$this->db->query("SELECT tbl_script_log.*,tbl_transaction_type.name as transaction_name,tbl_script.Name as script_name,tbl_trading_master.Name as trading_name from tbl_script_log left join tbl_transaction_type on tbl_script_log.transaction_id=tbl_transaction_type.transaction_id left join tbl_script on tbl_script_log.script_id=tbl_script.id left join tbl_trading_master on tbl_script_log.trading_id=tbl_trading_master.master_id where tbl_script_log.is_active=1");
                     return  $query->result();       
                }
                 function script()
                {
                    $this->db->select('id,Name,Target1,Target2');
                    $this->db->from('tbl_script');
                    $this->db->where('is_active',1);
                    $this->db->order_by('Name', 'asc');
                    $query = $this->db->get();
                    return $query;
                } 
                 function script1($id)
                {
                    $this->db->select('id,Name');
                    $this->db->from('tbl_script');
                    $this->db->where('trading_type',$id);
                    $this->db->where('is_active',1);
                    $this->db->order_by('Name', 'asc');
                    $query = $this->db->get();
                    return $query;
                } 
                  function trading()
                {
                    $this->db->select('	master_id,Name');
                    $this->db->from('tbl_trading_master');
                    $this->db->order_by('Name', 'asc');
                    $query = $this->db->get();
                    return $query->result();
                } 
                 function transaction()
                {
                    $this->db->select('transaction_id,name');
                    $this->db->from('tbl_transaction_type');
                    $this->db->order_by('name', 'asc');
                    $query = $this->db->get();
                    return $query;
                } 
                 public function db_save_log_data() {
                     date_default_timezone_set('Asia/Kolkata');  
                     $date1 = date('Y-M-d h:i:s A', time());
						$data = array
							(
                            'script_id' => $this->input->post('Script'),
                            'trading_id' => $this->input->post('Trading'),
                        'transaction_id' => $this->input->post('Transaction'),
                        'buy_text' => $this->input->post('buy_text'),
                     'sell_text' => $this->input->post('sell_text'),
                     'target1' => $this->input->post('Target1'),
                    'target2' => $this->input->post('Target2'),
                //   'target3' => $this->input->post('Target3'),
                 'result' => $this->input->post('Result'),
                 'date'=>$date1,
						);
				$this->db->insert($this->tbl_script_log, $data);				
				$vendor_id = $this->db->insert_id();											
				 return $vendor_id;
  
	
        
    }
           function fetch_data_log($c_id)
                 {
                   $user = $this->db->query("SELECT  * from tbl_script_log where tbl_script_log.id=" . $c_id); 
                   return $user->result();
                 } 
           function update_re_data($id)
                 {
                    $id;
                    $data = array
                        (
                        'trading_id' => $this->input->post('Trading_mod'),
                        'script_id' => $this->input->post('Script_mod'),
                        'transaction_id' => $this->input->post('Transaction_mod'),
                        'sell_text' => $this->input->post('sell_mod'),
                        'buy_text'=> $this->input->post('buy_mod'),
                         'target1' => $this->input->post('Target1_mod'),
                        'target2'=> $this->input->post('Target2_mod'),
                         'target3' => $this->input->post('Target3_mod'),
                        'result'=> $this->input->post('Result_mod'),                       
                    );
                    $where1 = "(id='" . $id . "')";
                    $this->db->where($where1);
                    $this->db->update("tbl_script_log", $data);                   
                 return $aff =$this->db->affected_rows();
                }
             function delt_data($c_id)
                 {       
                    $a=0;
                    $b=$c_id;
                    $where1 = "(id='" . $b . "')";       
                    $this->db->set('is_active',$a);       
                    $this->db->where($where1);
                    $this->db->update('tbl_script_log');
                  return $aff=  $this->db->affected_rows();
                 }
        }
        ?>