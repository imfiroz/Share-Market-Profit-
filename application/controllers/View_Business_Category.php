<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class View_Business_Category extends CI_Controller {
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
		$this->load->view('view_business_category');
	}
           public function ctrl_logout() {
        $this->session->sess_destroy();
    }
        function save_update_business($cust_id) {
        $this->load->model('View_Business_Data');
        $user_data = $this->View_Business_Data->update_business_data($cust_id);
     }
       function fetch_business_details_view() {

        $this->load->model('View_Business_Data');
        $user_data = $this->View_Business_Data->fetch_business_data();
        $rows1 = array();
        foreach ($user_data->result() as $row)
            {
            $rows1[] = array
                (
                "id" => $row-> id,
                "name" => $row->name,                
                  );
            }        	
        echo json_encode($rows1);
        
        
    }
    function ajax_delete_business($c_id) {       
        $this->load->model('View_Business_Data');
        $user_data = $this->View_Business_Data->fetch_business_data_to_delete($c_id);                 
    
    }
     public function get_city_update()
            {
                $this->load->model('View_Business_Data');
                $getCountry = $this->View_Business_Data->getsub_cat_update(); 
                foreach ($getCountry->result() as $row) {
                    $data1[] = $row;
                }
                echo json_encode($data1);
            }
            public function get_sub_data()
            {
                $this->load->model('View_Business_Data');
                $getCountry = $this->View_Business_Data->getState_Data();
                foreach ($getCountry->result() as $row) {
                    $data1[] = $row;
                }
                echo json_encode($data1);
            }
    function ajax_edit_business($c_id) {
  //  echo "aa";
      $this->load->model('View_Business_Data');
        $user_data = $this->View_Business_Data->fetch_business_data_to_update($c_id);
       $event = "Business_Category";
        $address_path = "Business_Category_image";
       $path = $this->View_Business_Data->db_retrieve_base_path_image($address_path, $event);
       $path1 = $path->folder_path;
        $file_path = str_replace('kkkzzz', "$c_id", $path1);
        $this->load->helper('directory'); 
        $dir = ("Image_file_container/$file_path"); 
        $map = directory_map($dir);
        //  print_r($map);
       if ($map == "") {
            // echo"aaa";
           echo json_encode(array("table" => $user_data, "im" => "no data", "path" => "0", "dir" => "0"));
        } else {
            $count_image = count($map);
           if ($count_image <= 0) {
                echo json_encode(array("table" => $user_data, "im" => "no data", "path" => "0", "dir" => "0"));
                //echo"bb";
            }
           if ($count_image >= 1) {


                foreach ($map as $image_id) {
                   if (strpos($image_id, 'txt') == false) {
                    //"img"=>$img, $img[]='<img width="50" height="50" src="'.base_url($dir."/".$image_id).'" alt="">';
                   $im[] = base_url($dir . "/" . $image_id);
                  //  echo $image_id;
                 $path_img[] = $image_id;
             $directory[] = $dir;
                        // 
                    } //

                }
                echo json_encode(array("table" => $user_data, "im" => $im, "path" => $path_img, "dir" => $directory));
            }
        }
     
      
    }
    function delete_img_from_folder($id) {
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
    function check_business() {
			 $m="";
        $email = $_POST['email'];
       
        $this->load->model('View_Business_Data');
      
        $email_add = $this->View_Business_Data->db_chk_business($email);
     

        $rowcount = $email_add->num_rows();
        if ($rowcount == 0) {
			$m=1;
            
			echo $m;
			
        } else {
			$m=0;
			echo $m;
          
        }
    }
}