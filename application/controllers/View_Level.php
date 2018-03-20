<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class View_Level extends CI_Controller {
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
		$this->load->view('view_level');
	}
         public function ctrl_logout() {
        $this->session->sess_destroy();
    }
     function fetch_branch_details()
            {
                $uid = $_POST['u_id'];     
                $this->load->model('View_Level_Data');
                $user_data = $this->View_Level_Data->fetch_level_data();
                 $rows1 = array();
                foreach ($user_data->result() as $row) {
                    $rows1[] = array
                        (

                        "branch_id" => $row->id,
                        "Name" => $row->Name,
                      //  "email" => $row->email,
                       // "Vat_no" => $row->Vat_no,
                      //  "pincode" => $row->pincode,
                       // "Sgst" => $row->Sgst,
                    );
                }        
                echo json_encode($rows1);         
            }
            function ajax_edit_branch($c_id)
            {    
                $this->load->model('View_Level_Data');
                $user_data = $this->View_Level_Data->fetch_level_data_to_update($c_id);
                $event = "Branch";
                $address_path = "branch_image";
                $path = $this->View_Level_Data->db_retrieve_base_path_image($address_path, $event);
                $path1 = $path->folder_path;
                $file_path = str_replace('kkkzzz', "$c_id", $path1);
                $this->load->helper('directory'); //load directory helper
                $dir = ("Image_file_container/$file_path"); // Your Path to folder
                $map = directory_map($dir);
                if ($map == "") {
                    echo json_encode(array("table" => $user_data, "im" => "no data", "path" => "0", "dir" => "0"));
                } else {
                    $count_image = count($map);
                    if ($count_image <= 0) {
                        echo json_encode(array("table" => $user_data, "im" => "no data", "path" => "0", "dir" => "0"));
                    }
                    if ($count_image >= 1) {


                        foreach ($map as $image_id) {

                            if (strpos($image_id, 'txt') == false) {


                                $im[] = base_url($dir . "/" . $image_id);
                                //  echo $image_id;
                                $path_img[] = $image_id;

                                $directory[] = $dir;
                                // 
                            } //
                            //   print_r($path_img); 
                        }
                        echo json_encode(array("table" => $user_data, "im" => $im, "path" => $path_img, "dir" => $directory));
                    }
                }
            }
              public function get_city_update()
            {
                $this->load->model('View_Branch_Data');
                $getCountry = $this->View_Branch_Data->getCity_update(); 
                foreach ($getCountry->result() as $row) {
                    $data1[] = $row;
                }
                echo json_encode($data1);
            }
            public function get_state_data()
            {
                $this->load->model('View_Branch_Data');
                $getCountry = $this->View_Branch_Data->getState_Data();
                foreach ($getCountry->result() as $row) {
                    $data1[] = $row;
                }
                echo json_encode($data1);
            }
            public function get_city()
            {
               $city = $_POST['city'];
               $this->load->model('View_Branch_Data');
               $get_state = $this->View_Branch_Data->getCity($city);
                foreach ($get_state->result() as $row) {
                    $data1[] = $row;
                }
                echo json_encode($data1);
               
             }
              function delete_img_from_folder($id)
                    {

                        $img = $_POST['img_name'];
                        $dir1 = $_POST['dir'];
                        $image_dir = str_replace('/', '\\', $dir1);
                        $dir = str_replace('image', 'txt', $dir1);
                        $str = str_replace('/', '\\', $dir);
                        $new_extension = "txt";
                        $aa = preg_replace('/\.[^.]+$/', '.' . $new_extension, $img);
                        $this->load->helper("file");
                        delete_files($aa);
                        unlink(FCPATH . $str . "\\" . $aa);
                        unlink(FCPATH . $image_dir . "\\" . $img);
                        $final_data = "1";
                        //  $this->ajax_edit_customer($id);
                        echo json_encode(array("ok" => $final_data));
                    }
                     function ajax_delete_branch($c_id)
            {       
        $this->load->model('View_Branch_Data');
       $qu=$this->db->query("delete from tbl_level where id=$c_id");
		echo $this->db->affected_rows();    
    
            }
              function save_update_branch($cust_id)
             {      
                $this->load->model('View_Level_Data');
                $user_data = $this->View_Level_Data->update_branch_data($cust_id);
            }
             function check_email_customer()
            {

           $m="";       
           $email = $_POST['email'];       
           $this->load->model('View_Branch_Data');       
           $email_add = $this->View_Branch_Data->db_chk_email_of_customer($email);
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
             function check_name()
            {

                    $m="";       
                    $email = $_POST['email'];       
                    $this->load->model('View_Branch_Data');       
                    $email_add = $this->View_Branch_Data->db_chk_name($email);
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
         }
    ?>