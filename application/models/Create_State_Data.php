
<?php header('Access-Control-Allow-Origin: *'); ?>
<?php
class Create_State_Data extends CI_Model 
	{
           var $state_table = 'tbl_state_master';
            var $relation = 'tbl_vendor_customer_relation';
             public function __construct()
                {
                        parent::__construct();
                        $this->load->database();
                }
            function db_chk_state($code)
             {   
				$v_id = $this->session->userdata('Vendor_Id');			 
                $where = "(state_code='" . $code . "'and ceated_by_user_id='".$v_id."')";
                $this->db->where($where);
                $data = $this->db->get($this->state_table);
                return $data;
             }
          public function db_state_data()
                  {
					$v_id = $this->session->userdata('Vendor_Id');
                    $branch_id = $this->session->userdata('branch_id');
                    $company_id = $this->session->userdata('company_id'); 
                    $data = array
                         (
                        'state_code' => $this->input->post('Code'),
                        'state_description'=>$this->input->post('code_decription'),
						'company_id' => $company_id,
						'branch_id' => $branch_id,
						'ceated_by_user_id' => $v_id,						
                         );
                    $this->db->insert($this->state_table, $data);
                    $relation = $this->db->insert_id();
                }
        }
