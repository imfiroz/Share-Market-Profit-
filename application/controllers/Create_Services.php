<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Create_Services extends CI_Controller {
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
		   $query = $this->db->select('id,Name as text')
						//->limit(10)
						->get("tbl_script");
			$json['data'] = $query->result_array();
			
			 $query = $this->db->select('id,Name as text')
						->limit(10)
						->get("tbl_level");
			$json['data1'] = $query->result_array();
			
			
            $this->load->view('create_services',$json);
			}
			function get_level_data()
			{
				 $s_id=$_POST['s_id'];
				  $query = $this->db->select('level_id')
						->where('script_id='.$s_id)
						->get("tbl_script_level");
			$json= $query->result_array();
			echo json_encode($json);
			}
			function update_service(){
				 $script_id=$_POST['script_id'];
					   $lavel_id=$_POST['lavel_id'];
				$this->db->query("delete from tbl_script_level where level_id=$lavel_id and script_id=$script_id");
			$this->db->affected_rows();
			}
			function insert_service()
			{
				  $lavel_id=$_POST['lavel_id'];
				  $script_id=$_POST['script_id'];
				   $level_id_update=$_POST['level_id_update'];
				   $level_id=($_POST['level_id'])?$_POST['level_id']:0;
			$cats = explode(",", $level_id);
		foreach($cats as $cat) {
			 $cat = trim($cat);
			 //echo "insert IGNORE into tbl_script_level(script_id,level_id) values($script_id,$cat)";
			//echo (" INSERT INTO tbl_script_level (`script_id`, `level_id`) SELECT * FROM (SELECT '$script_id', '$cat') 
			// AS tmp WHERE NOT EXISTS ( SELECT `script_id` FROM tbl_script_level WHERE `script_id` = '$script_id' and `level_id`=$cat )");
			 
			$this->db->query("INSERT INTO tbl_script_level (`script_id`, `level_id`) SELECT * FROM (SELECT $script_id AS question_id, $cat AS subject_id) AS tmp WHERE NOT EXISTS ( SELECT `script_id`,`level_id` FROM tbl_script_level
			 WHERE script_id =$script_id AND level_id = $cat )");
			// $this->db->query("insert IGNORE into tbl_script_level(script_id,level_id) values($script_id,$cat)");
		echo  $this->db->insert_id();
			//echo $categories .= "<category>" . $cat . "</category>\n";
		}
				
			}
        public function ctrl_logout() {
        $this->session->sess_destroy();
    }
        function check_hsn() 
        {            
           $code = $_POST['code_data'];
            $this->load->model('Create_Hsn_Data');
            $code_data = $this->Create_Hsn_Data->db_chk_hsn($code);
            $rowcount = $code_data->num_rows();
			if ($rowcount == 0)
				{
					$m=1;
					echo $m;			
				} 
			else 
				{
					$m=0;
					echo $m;      
				}
		
        }
		function search()
		{
			$json = [];


		//$this->load->database();

		
		
		$json = [];


		//$this->load->database();

		
		if(!empty($this->input->get("q"))){
			$this->db->like('Name', $this->input->get("q"));
			$query = $this->db->select('id,Name as text')
						->limit(10)
						->get("tbl_script");
			$json = $query->result();
		}

		
		echo json_encode($json);
		
		}
        function hsn_user_data() 
        {
            $this->load->model('Create_Hsn_Data');
            $report_name = $this->Create_Hsn_Data->db_save_hsn_data();
            $final_data = array(
                'redirect_path' => base_url("Create_Hsn")
            );
            echo json_encode($final_data);
        }
        
   
}