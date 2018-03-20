
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class View_Learning extends CI_Controller {
 public function __construct() 
       {
            parent::__construct();

            $this->load->helper('form');
            $this->load->library('form_validation');
            $this->load->helper("url");
            $this->load->library('session');
          $this->load->library('PHPExcel');
            $this->load->library('pagination');
            if (!$this->session->userdata('is_logged_in'))
            {
           $this->ctrl_logout();
            redirect(base_url(), 'refresh');
            }
       }
       
       public function index()
	{
		$this->load->view('view_learning');
	}
         public function ctrl_logout() {
        $this->session->sess_destroy();
    }
     function fetch_learning_details()
            {
             //   $uid = $_POST['u_id'];     
                $this->load->model('View_Learning_Data');
                $user_data = $this->View_Learning_Data->fetch_level_data();
                 $rows1 = array();
                foreach ($user_data->result() as $row) {
                    $rows1[] = array
                        (

                        "id" => $row->id,
                        "description" => $row->	description,                    
                    );
                }        
                echo json_encode($rows1);         
            }
             function ajax_edit_learning($c_id)
            {    
                $this->load->model('View_Learning_Data');
                $user_data = $this->View_Learning_Data->fetch_learning_data_to_update($c_id);    
                echo json_encode($user_data);
            }
              function save_update_learning($cust_id)
             {      
                $this->load->model('View_Learning_Data');
                $user_data = $this->View_Learning_Data->update_learn_data($cust_id);
            }
               function ajax_delete_learning($c_id)
            {       
        $this->load->model('View_Learning_Data');
          $a=0;
                            $b=$c_id;
                            $where1 = "(id='" . $b . "')";       
                            $this->db->set('is_active',$a);       
                            $this->db->where($where1);
                            $this->db->update('tbl_learning');
                  echo   $abc = $this->db->affected_rows();
       
    
            }
}
?>