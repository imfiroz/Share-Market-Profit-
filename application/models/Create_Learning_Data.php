
<?php header('Access-Control-Allow-Origin: *'); ?>
<?php

class Create_Learning_Data extends CI_Model 
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
                       public function db_save_learn_data() {

        $data = array
            (
            'description' => $this->input->post('description'),
           
            
        );
       // print_r($data);
        $this->db->insert('tbl_learning', $data);
        return $branch = $this->db->insert_id();
        
    }
        }
        ?>
?>