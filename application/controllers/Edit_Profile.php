<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Edit_Profile extends CI_Controller {
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
   $this->load->view('Edit_profile');
	}
       function fetch_customer_details()
            {
                $uid = $_POST['u_id'];     
                $this->load->model('Edit_Profile_Data');
                $user_data = $this->Edit_Profile_Data->fetch_customer_data($uid);
               
            }
             public function ctrl_logout() {
        $this->session->sess_destroy();
    }
             function check_email_customer()
            {

           $m="";       
           $email = $_POST['email'];       
           $this->load->model('Edit_Profile_Data');       
           $email_add = $this->Edit_Profile_Data->db_chk_email_of_customer($email);
               $rowcount = $email_add->num_rows();
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
            function save_update_cust($cust_id)
             {      
                $this->load->model('Edit_Profile_Data');
                $user_data = $this->Edit_Profile_Data->update_cust_data($cust_id);
            } 
             public function check_phone() 
            { 

                    $m="";
                    $phone = $_POST['phone_data'];        
                    $this->load->model('Edit_Profile_Data');      
                    $mobile_add = $this->Edit_Profile_Data->db_chk_phone($phone);
                     $rowcount = $mobile_add->num_rows();
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
}