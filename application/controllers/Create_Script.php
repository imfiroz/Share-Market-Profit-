<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Create_Script extends CI_Controller 
{
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
		$this->load->view('create_script');
	}
    public function ctrl_logout() 
	{
        $this->session->sess_destroy();
    }
    function get_b_cat() 
	{
      	// /$m = 394;
        $this->load->model('Create_Branch_Data');
        $product_data = $this->Create_Branch_Data->db_get_business_details();
        echo json_encode($product_data);
    }
    function get_sub_cat() 
	{
      	// /$m = 394;
        $this->load->model('Create_Branch_Data');
        $product_data = $this->Create_Branch_Data->db_get_business_sub_details();
        echo json_encode($product_data);
    }
    public function get_state_data() 
	{
        $this->load->model('Create_Branch_Data');
        $getCountry = $this->Create_Branch_Data->getState_Data();
        foreach ($getCountry->result() as $row) 
		{
            $data1[] = $row;
        }
        echo json_encode($data1);
    }
    public function get_company()
	{
        //echo $_POST['branch'];
        $this->load->model('Create_Branch_Data');
        $company_name = $this->Create_Branch_Data->get_company();
        foreach ( $company_name->result() as $row )
		{
            $data1[] = $row;
        }
        echo json_encode($data1);
    }
    public function get_city()
	{
        $city = $_POST['city'];
        $this->load->model('Create_Branch_Data');
        $get_state = $this->Create_Branch_Data->getCity($city);
        foreach ($get_state->result() as $row)
		{
            $data1[] = $row;
        }
        echo json_encode($data1);
    }
    function check_branch() 
    {       
		$code = $_POST['email'];
		$this->load->model('Create_Branch_Data');
		$code_data = $this->Create_Branch_Data->db_chk_name($code);
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
     public function get_count()
	 {
		$id = $_POST['email'];
		$this->load->model('Create_Script_Data');
		$getCountry = $this->Create_Script_Data->getcustcount12($id);                   
		echo json_encode($getCountry);
    }
    function check_script() 
	{            
	   $code = $_POST['code_data'];
	   $value_trad_typ = $_POST['value_trad_typ'];

		$this->load->model('Create_Script_Data');
		$code_data = $this->Create_Script_Data->db_chk_hsn($code,$value_trad_typ);
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
    function level_save_data()
	{
		$this->load->model('Create_Script_Data');
		$last_inserted_id = $this->Create_Script_Data->db_save_branch_data();    
		if($last_inserted_id==0){
			echo 0;
		}
       	else
		{
			echo 1;
			//*Generate Notification Here*//
			
			//Get Script Data
			
			//Find Treading Name and Treading Type
			
			//Create Notification 
			//$this->load->model('Create_Notification_Data');
            //$last_inserted_id = $this->Create_Notification_Data->db_save_branch_data();
		}   
    }
	function create_folder_function($last_inserted_id, $EventKey) 
	{
		$last_id = $last_inserted_id;
		$Event = $EventKey;
		$this->load->model('Create_Branch_Data');
		$base_path = $this->Create_Branch_Data->db_retrieve_base_path();
		$base_path1 = $base_path->path;
		$middle_path = $this->Create_Branch_Data->db_retrieve_base_path1($Event);
	   // print_r($middle_path);
		foreach ($middle_path->result() as $row) 
		{
			$db_col = $row->folder_path;
			$file_path = str_replace('kkkzzz', "$last_id", $db_col);
			$mode = "0777";
			// $dirpath ="Image_file_container/Customer/19/image";
			$dirpath = $base_path1 . "/" . $file_path . "/";
			is_dir($dirpath) || mkdir($dirpath,0777, true);
		}
	}
	function create_index_file($base_path2,$base_path3)
	{
		if ( file_exists($base_path2 . "/" . $base_path3) ) 
		{
			$myfile = fopen($base_path2 . "/" . $base_path3, 'r');
			$userName = fgets($myfile);
			$myfile1 = fopen($base_path2 . "/" . $base_path3, "w") or die("Unable to open file!");
			$txt = ++$userName;
			fwrite($myfile1, $txt);
			fclose($myfile);
			fclose($myfile1);
			return $txt;
		} 
		else
		{
			$myfile1 = fopen($base_path2 . "/" . $base_path3, 'w');
			$txt = 0;
			$txt1 = ++$txt;
			fwrite($myfile1, $txt1);
			fclose($myfile1);
			return $txt1;
		}
	}
	function global_save_folder_image($last_inserted_id, $event, $address_path, $arr, $text) 
	{
	// print_r($arr);
		$msg = "";
		$this->load->model('Create_Branch_Data');
		$base_path = $this->Create_Branch_Data->db_retrieve_base_path();
		$base_path2 = $base_path->index_file_path;
		$base_path3 = $base_path->index_file_name;
		$path = $this->Create_Branch_Data->db_retrieve_base_path_image($address_path, $event);
		$path1 = $path->folder_path;
		$path2 = str_replace('kkkzzz', "$last_inserted_id", $path1);
		$text_path = $this->Create_Branch_Data->db_retrieve_base_path_text($event, $text);
		$text_path1 = $text_path->folder_path;
		$text_path2 = str_replace('kkkzzz', "$last_inserted_id", $text_path1);
		$dirpath = $base_path2 . "/" . $path2;
		$dirpath1 = $base_path2 . "/" . $text_path2;
		$total = count(array_filter($arr));
		if ( $total > 0 ) 
		{
			$counter = 0;
			for (	$i = 0; $i < count($arr); $i++	)
			{
				$_FILES["image"]["size"][$i];
				$allowedExts = array("gif", "jpeg", "jpg", "png");
				if ($_FILES["image"]["name"][$i] <> "") 
				{
					$ext1 = ((explode(".", $_FILES["image"]["name"][$i])));
					$extension = end($ext1);
					if (	($_FILES["image"]["size"][$i] < 40000000) && in_array($extension, $allowedExts)	) 
					{
						$txt = $this->create_index_file($base_path2, $base_path3);
						$date = date('m.d.Y.hia');
						$tmp_name[$i] = $_FILES["image"]["tmp_name"][$i];
						$name1[$i] = $_FILES["image"]["name"][$i];
						$chars = $txt . "_" . $date . "_";
						$names[$i] = $chars . "_" . $last_inserted_id . "." . $name1[$i];
						$str[$i] = substr($name1[$i], 0, strpos($name1[$i], '.'));
						$name2[$i] = $chars . "_" . $last_inserted_id . "." . $str[$i] . ".txt";
						move_uploaded_file($tmp_name[$i], "$dirpath/$names[$i]");
						$img_txt[$i] = $_POST['img_txt'][$i];
						$ourFileName = "$dirpath1/$name2[$i]";
						$ourFileHandle = fopen($ourFileName, 'w') or die("can't open file");
						fwrite($ourFileHandle, $img_txt[$i]);
					}
				}
				$counter++;
				echo $msg = ($counter == 0) ? ("Files uploaded Successfully") : ($msg);
			}
		} 
		else
		{
			$txt = $this->create_index_file($base_path2, $base_path3);
			$date = date('m.d.Y.hia');
			$chars = $txt . "_" . $date . "_";
			$dir = "$base_path2/$event";
			$dh = opendir($dir);
			$name1 = "Hydrangeas";
			while (	false !== ($name1 = readdir($dh))	)
			{
				$files[] = $name1;
			}
			$images = preg_grep('/\.jpg$/i', $files);
			$names = $chars . "_" . $last_inserted_id . "." . $name1;
			$imagePath = "$base_path2/Hydrangeas.jpg";
			$newPath = "$dirpath/";
			$ext = $chars . $last_inserted_id . ".Hydrangeas" . '.jpg';
			$ext1 = $chars . $last_inserted_id . ".Hydrangeas" . '.txt';
			$newName = $newPath . $ext;
			//copy($imagePath , $newName);
			$ourFileName = "$dirpath1/$ext1";
			$ourFileHandle = fopen($ourFileName, 'w') or die("can't open file");
		}
	}
    public function check_email() 
	{ 
		$m="";
		$email = $_POST['email_data'];        
		$this->load->model('Create_Branch_Data');      
		$email_add = $this->Create_Branch_Data->db_chk_email($email);
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
	//trade
	public function get_data_to_show() 
	{	
		$this->load->model('Create_Script_Data');
		$getCountry = $this->Create_Script_Data->getTrade_Data();
		foreach (	$getCountry->result() as $row	)
		{
			$data1[] = $row;
		}
		echo json_encode($data1);
	}
	public function get_data_to_buy() 
	{	
		$this->load->model('Create_Script_Data');
		$getCountry = $this->Create_Script_Data->getbuy_Data();
		foreach ($getCountry->result() as $row)
		{
				$data1[] = $row;
		}
		echo json_encode($data1);
	}
}     	
?>