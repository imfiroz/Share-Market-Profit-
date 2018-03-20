
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends CI_Controller {
	 public function __construct() 
       {
            parent::__construct();

            $this->load->helper('form');
          //$this->load->model('Welcome');
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
		$this->load->view('index2');
		//$this->load->view('login');
	}
       
         function fetch_user_details() { //echo"zzz";
        $uid = $_POST['u_id'];
        $this->load->model('Dashboard_Data');
        $user_data = $this->Dashboard_Data->fetch_user_data($uid);
        foreach ($user_data->result() as $row) {
            $data1[] = $row;
        }


        echo json_encode($data1);
    }
   
     public function ctrl_logout() {
        $this->session->sess_destroy();
    }
    public function user_logout() {
                    $this->ctrl_logout();
                    $final_data = array(
                        'redirect_path' => base_url("Welcome/main_Screen/")
                            // 'data_arr'=>$data
                    );
                 echo json_encode($final_data);
    }
    function fetch_user_details_edit() { 
        $uid = $_POST['u_id'];
        $this->load->model('Dashboard_Data');
        $user_data = $this->Dashboard_Data->fetch_user_data($uid);
     
       }
       function fetch_image() { 
        $uid = $_POST['u_id'];    
        $this->load->helper('directory');    
        $dir = "Image_file_container/Vendor/".$uid."/image"; 
        $map = directory_map($dir); 
     // print_r ($map);
           echo json_encode($map);
       }      
        function get_side_menu1()
	{//echo"madhu";
	 $this->load->model('Dashboard_Data');
		  $user_data = $this->Dashboard_Data->fetch_sidemenu();
        foreach ($user_data->result() as $row) {
            $data1[] = $row;
        }
		 echo json_encode($data1);
	}
}