
<?php
class View_Learning_Data extends CI_Model 
	{   var $table = 'tbl_branch';
            var $city = 'cities';
            public function __construct()
                 {
                    parent::__construct();
                    $this->load->database();
                 
       
    }
       function fetch_level_data() {  
       $user1 = $this->db->query("select * from  tbl_learning where is_active=1" );
         return $user1; 
        }
         function fetch_learning_data_to_update($c_id)
                 {
                //echo $c_id;
                            $user = $this->db->query("select * from tbl_learning where id=" . $c_id);
                            return $data = $user->result();
                 }
                  function update_learn_data($id) 
                 {
                    $id;
                    $data = array
                    (
                  
                    'description' => $this->input->post('Description'),
                    
                        
                );
                 //   print_r($data);
                    
                    $where1 = "(id='" . $id . "')";
                   $this->db->where($where1);
                    $this->db->update("tbl_learning", $data);
                    echo $this->db->affected_rows();  
                     
                        
                }
        }
        ?>