<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Create_Product extends CI_Controller {
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
			$this->load->view('create_Product');
		}
                public function ctrl_logout() {
                 $this->session->sess_destroy();
                     }
                function check_Product_name() {
        // echo "aa";
        $email = $_POST['email'];

        $this->load->model('Create_Product_Data');
        //  if(isset($_POST['gst_no'])){
        $email_add = $this->Create_Product_Data->db_chk_product_name($email);
        //}

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
     public function get_parent_data_new() {
        $this->load->model('Create_Product_Data');
        $getparent = $this->Create_Product_Data->getParent_Data_new();
        foreach ($getparent->result() as $row) {
            $data1[] = $row;
        }
        echo json_encode($data1);
    }
    public function get_category_data() {
        //  echo"sss";
        $this->load->model('Create_Product_Data');
        $getCountry = $this->Create_Product_Data->getcategory_Data();
        // print_r($getCountry);
        foreach ($getCountry->result() as $row) {
            $data1[] = $row;
        }
        echo json_encode($data1);
    }
     public function get_parent_data() {
        $this->load->model('Create_Product_Data');
        $getCountry = $this->Create_Product_Data->getparent_Data();
  
        if($getCountry){
        $data['product_category_id'] = $getCountry;
        }
          echo json_encode($data);
    }
      public function get_city1() {
        $city = $_POST['city'];
        $this->load->model('Create_Product_Data');
        $get_state = $this->Create_Product_Data->getCity1($city);
        foreach ($get_state->result() as $row) {
            $data1[] = $row;
        }
        echo json_encode($data1);
    }
      public function get_product_type() {
        $city = $_POST['city'];
        $this->load->model('Create_Product_Data');
        $get_state = $this->Create_Product_Data->get_product_type($city);
        foreach ($get_state->result() as $row) {
            $data1[] = $row;
        }
        echo json_encode($data1);
    }
    
     public function get_city1_new() {
      //  echo"aa";
     $city = $_POST['city'];
        
        $this->load->model('Create_Product_Data');
        $get_state = $this->Create_Product_Data->getCity_new($city);
        foreach ($get_state->result() as $row) {
            $data1[] = $row;
        }
        echo json_encode($data1);
      
    }
    public function product_category_data() {
        $value = $_POST['value'];
        $this->load->model('Create_Product_Data');
        $data1 = "";
        $query = $this->Create_Product_Data->retrieve_subcat_data($value);
        // print_r($query);
        foreach ($query->result() as $row) {
            $data1[] = $row;
        }
        echo json_encode($data1);
    }
      public function product_category_data_hsn() {
        $value = $_POST['value'];
        $this->load->model('Create_Product_Data');
        $data1 = "";
        $query = $this->Create_Product_Data->retrieve_subcathsn_data($value);
        // print_r($query);
        foreach ($query->result() as $row) {
            $data1[] = $row;
        }
        echo json_encode($data1);
    }
     function product_save_data() {       
        $this->load->model('Create_Product_Data');
        $report_name = $this->Create_Product_Data->db_save_product_data();
        $report_name['product'] = $report_name['product'];
         $report_name['version'] = $report_name['version']; 
       $select_product_data['product_data']=$this->Create_Product_Data->db_select_product_data( $report_name['product']);
       $this->create_folder_function_version($report_name['product'],$report_name['version'],"Product");
     $this->global_save_folder_image_product($report_name['product'],"Product","Product_image",$_FILES["image"]["name"],"Product_txt",$report_name['version']); 
         
        $final_data = array(
            "product_id"=>$report_name['product'],
            "version_id"=>$report_name['version'],
            "product_tbl_data"=>$select_product_data['product_data'],
            ///'redirect_path' => base_url("welcome/main_Screen/")
        );
    
        echo json_encode($final_data);
		
    }
    function global_save_folder_image_product($last_inserted_id,$event,$address_path,$arr,$text,$version)
{
      
                            $msg = "";    
			  $this->load->model('Create_Product_Data');
			  $base_path = $this->Create_Product_Data->db_retrieve_base_path();
			  $base_path2=$base_path->index_file_path;
			  $base_path3=$base_path->index_file_name;
                           $path1="Product/".$last_inserted_id."/".$version."/image";
                           $path2="Product/".$last_inserted_id."/".$version."/text";
			//  $path = $this->Db_F2S->db_retrieve_base_path_image($address_path,$event);	  
                        //  $path1=$path->folder_path;
			//  $path2 = str_replace('kkkzzz', "$last_inserted_id", $path1);
			//  $text_path = $this->Db_F2S->db_retrieve_base_path_text($event,$text);
			//  $text_path1=$text_path->folder_path;
			 // $text_path2 = str_replace('kkkzzz', "$last_inserted_id", $text_path1);
			 $dirpath1=$base_path2."/".$path2;
                      $dirpath=$base_path2."/".$path1;
	 //$total = count($arr);
                        //  print_r($arr);
    
       $total= count(array_filter($arr));
    //  count($total);
	   if ($total > 0) 
	   {
            $counter = 0;
            for ($i = 0; $i < count($arr); $i++)
			{ 
					$_FILES["image"]["size"][$i];
					$allowedExts = array("gif", "jpeg", "jpg", "png");
					if ($_FILES["image"]["name"][$i] <> "")
				{
						$ext1 = ((explode(".", $_FILES["image"]["name"][$i])));
						$extension = end($ext1);
						   if (($_FILES["image"]["size"][$i] < 40000000) && in_array($extension, $allowedExts)) 				
							   {  
								   $txt=$this->create_index_file($base_path2,$base_path3);					
								   $date = date('m.d.Y.hia');
								   $tmp_name[$i] = $_FILES["image"]["tmp_name"][$i];						
								   $name1[$i] = $_FILES["image"]["name"][$i];
								   $chars = $txt . "_" . $date . "_";                 
								   $names[$i] = $chars . "_" . $last_inserted_id . "." . $name1[$i];
								   $str[$i] = substr($name1[$i], 0, strpos($name1[$i], '.'));
								   $name2[$i] = $chars . "_" . $last_inserted_id . "." . $str[$i] . ".txt";
								   move_uploaded_file($tmp_name[$i],"$dirpath/$names[$i]");
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
						 $txt=$this->create_index_file($base_path2,$base_path3);	
						 $date = date('m.d.Y.hia');
						 $chars= $txt. "_" .$date."_";
						 $dir = "$base_path2/$event";
						 $dh  = opendir($dir);
						 $name1="Hydrangeas";
					   while (false !== ($name1 = readdir($dh)))
						 {
						   $files[] = $name1;
						 }
						$images=preg_grep ('/\.jpg$/i', $files);
						$names = $chars . "_" . $last_inserted_id . "." . $name1;
						$imagePath = "$base_path2/Hydrangeas.jpg";
						$newPath = "$dirpath/";
						$ext = $chars.$last_inserted_id.".Hydrangeas".'.jpg';
						$ext1=$chars.$last_inserted_id.".Hydrangeas".'.txt';
						$newName  = $newPath.$ext;
						//copy($imagePath , $newName);
						$ourFileName = "$dirpath1/$ext1";
						$ourFileHandle = fopen($ourFileName, 'w') or die("can't open file");
				  
		}	
                
        }
    function create_folder_function($last_inserted_id,$EventKey)
{
	 $last_id=$last_inserted_id;
	 $Event=$EventKey;
	 $this->load->model('Create_Product_Data');
	 $base_path = $this->Create_Product_Data->db_retrieve_base_path();
	 $base_path1=$base_path->path;
	 $middle_path = $this->Create_Product_Data->db_retrieve_base_path1($Event);
   foreach ($middle_path->result() as $row)
   { 
      $db_col=$row->folder_path;
      $file_path = str_replace('kkkzzz', "$last_id", $db_col); 
	  $mode = "0777";	 
      $dirpath=$base_path1."/".$file_path."/" ;
      is_dir($dirpath) || mkdir($dirpath, $mode, true);		
   }
   
}
function global_save_folder_image($last_inserted_id,$event,$address_path,$arr,$text)
{
		   $msg = "";    
			  $this->load->model('Create_Product_Data');
			  $base_path = $this->Create_Product_Data->db_retrieve_base_path();
			  $base_path2=$base_path->index_file_path;
			  $base_path3=$base_path->index_file_name;
			  $path = $this->Create_Product_Data->db_retrieve_base_path_image($address_path,$event);	  
			  $path1=$path->folder_path;
			  $path2 = str_replace('kkkzzz',"$last_inserted_id", $path1);
			  $text_path = $this->Create_Product_Data->db_retrieve_base_path_text($event,$text);
			  $text_path1=$text_path->folder_path;
			  $text_path2 = str_replace('kkkzzz', "$last_inserted_id", $text_path1);
			  $dirpath=$base_path2."/".$path2;
			  $dirpath1=$base_path2."/".$text_path2;
	 //$total = count($arr);
	 $total= count(array_filter($arr));
	// echo count($total);
	   if ($total > 0) 
	   {
            $counter = 0;
            for ($i = 0; $i < count($arr); $i++)
			{ 
					$_FILES["image"]["size"][$i];
					$allowedExts = array("gif", "jpeg", "jpg", "png");
					if ($_FILES["image"]["name"][$i] <> "")
				{
						$ext1 = ((explode(".", $_FILES["image"]["name"][$i])));
						$extension = end($ext1);
						   if (($_FILES["image"]["size"][$i] < 40000000) && in_array($extension, $allowedExts)) 				
							   {  
								   $txt=$this->create_index_file($base_path2,$base_path3);					
								   $date = date('m.d.Y.hia');
								   $tmp_name[$i] = $_FILES["image"]["tmp_name"][$i];						
								   $name1[$i] = $_FILES["image"]["name"][$i];
								   $chars = $txt . "_" . $date . "_";                 
								   $names[$i] = $chars . "_" . $last_inserted_id . "." . $name1[$i];
								   $str[$i] = substr($name1[$i], 0, strpos($name1[$i], '.'));
								   $name2[$i] = $chars . "_" . $last_inserted_id . "." . $str[$i] . ".txt";
                                                               
								   move_uploaded_file($tmp_name[$i],"$dirpath/$names[$i]");
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
						 $txt=$this->create_index_file($base_path2,$base_path3);	
						 $date = date('m.d.Y.hia');
						 $chars= $txt. "_" .$date."_";
						 $dir = "$base_path2/$event";
						 $dh  = opendir($dir);
						 $name1="Hydrangeas";
					   while (false !== ($name1 = readdir($dh)))
						 {
						   $files[] = $name1;
						 }
						$images=preg_grep ('/\.jpg$/i', $files);
						$names = $chars . "_" . $last_inserted_id . "." . $name1;
						$imagePath = "$base_path2/Hydrangeas.jpg";
						$newPath = "$dirpath/";
						$ext = $chars.$last_inserted_id.".Hydrangeas".'.jpg';
						$ext1=$chars.$last_inserted_id.".Hydrangeas".'.txt';
						$newName  = $newPath.$ext;
						//copy($imagePath , $newName);
						$ourFileName = "$dirpath1/$ext1";
						$ourFileHandle = fopen($ourFileName, 'w') or die("can't open file");
				  
		}
         
}
function global_save_folder_image_old($last_inserted_id,$event,$address_path,$arr,$text)
{
		   $msg = "";    
			  $this->load->model('Create_Product_Data');
			  $base_path = $this->Create_Product_Data->db_retrieve_base_path();
			  $base_path2=$base_path->index_file_path;
			  $base_path3=$base_path->index_file_name;
			  $path = $this->Create_Product_Data->db_retrieve_base_path_image($address_path,$event);	  
			  $path1=$path->folder_path;
			  $path2 = str_replace('kkkzzz',"$last_inserted_id", $path1);
			  $text_path = $this->Create_Product_Data->db_retrieve_base_path_text($event,$text);
			  $text_path1=$text_path->folder_path;
			  $text_path2 = str_replace('kkkzzz', "$last_inserted_id", $text_path1);
			  $dirpath=$base_path2."/".$path2;
			  $dirpath1=$base_path2."/".$text_path2;
	 //$total = count($arr);
	 $total= count(array_filter($arr));
	// echo count($total);
	   if ($total > 0) 
	   {
            $counter = 0;
            for ($i = 0; $i < count($arr); $i++)
			{ 
					$_FILES["image"]["size"][$i];
					$allowedExts = array("gif", "jpeg", "jpg", "png");
					if ($_FILES["image"]["name"][$i] <> "")
				{
                                         //  print__r($arr);
                                    
						$ext1 = ((explode(".", $_FILES["image"]["name"][$i])));
						$extension = end($ext1);
						   if (($_FILES["image"]["size"][$i] < 40000000) && in_array($extension, $allowedExts)) 				
							   { 
                                                       
								   $txt=$this->create_index_file($base_path2,$base_path3);					
								   $date = date('m.d.Y.hia');
								   $tmp_name[$i] = $_FILES["image"]["tmp_name"][$i];						
								   $name1[$i] = $_FILES["image"]["name"][$i];
								   $chars = $txt . "_" . $date . "_";                 
								  $names[$i] = $chars . "_" . $last_inserted_id . "." . $name1[$i];
								   $str[$i] = substr($name1[$i], 0, strpos($name1[$i], '.'));
								   $name2[$i] = $chars . "_" . $last_inserted_id . "." . $str[$i] . ".txt";
                                                         echo   "$dirpath/$names[$i]";
								  move_uploaded_file($tmp_name[$i],"$dirpath/$names[$i]");
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
						 $txt=$this->create_index_file($base_path2,$base_path3);	
						 $date = date('m.d.Y.hia');
						 $chars= $txt. "_" .$date."_";
						 $dir = "$base_path2/$event";
						 $dh  = opendir($dir);
						 $name1="Hydrangeas";
					   while (false !== ($name1 = readdir($dh)))
						 {
						   $files[] = $name1;
						 }
						$images=preg_grep ('/\.jpg$/i', $files);
						$names = $chars . "_" . $last_inserted_id . "." . $name1;
						$imagePath = "$base_path2/Hydrangeas.jpg";
						$newPath = "$dirpath/";
						$ext = $chars.$last_inserted_id.".Hydrangeas".'.jpg';
						$ext1=$chars.$last_inserted_id.".Hydrangeas".'.txt';
						$newName  = $newPath.$ext;
						//copy($imagePath , $newName);
						$ourFileName = "$dirpath1/$ext1";
						$ourFileHandle = fopen($ourFileName, 'w') or die("can't open file");
				  
		}
         
}
function create_index_file($base_path2,$base_path3)
{
if (file_exists($base_path2."/".$base_path3))
					{//echo"ex";
				// $base_path2."/".$base_path3;
                        $myfile = fopen($base_path2."/".$base_path3, 'r');
                         $userName = fgets($myfile);
                        $myfile1 = fopen($base_path2."/".$base_path3, "w") or die("Unable to open file!");
                         $txt = ++$userName;
                        fwrite($myfile1, $txt);
                        fclose($myfile);
                        fclose($myfile1);
						return  $txt;
                    } 
				else
					{//echo"not ex";
			            $myfile1 = fopen($base_path2."/".$base_path3, 'w');
			            $txt=0;
			              $txt1 = ++$txt;
                        fwrite($myfile1, $txt1);
                        fclose($myfile1);
						
						return  $txt1;
						
                	}
}
  public function get_barcode_data() {
        
         
        $this->load->model('Create_Product_Data');
        $getCountry = $this->Create_Product_Data->get_barcode_Data();
       foreach ($getCountry->result() as $row) {
            $data1[] = $row;
        }
        echo json_encode($data1);
         
         
    }
      public function get_uom_data() {
        
         
        $this->load->model('Create_Product_Data');
        $getCountry = $this->Create_Product_Data->get_uom_Data();
       foreach ($getCountry->result() as $row) {
            $data1[] = $row;
        }
        echo json_encode($data1);
         
         
    }
     function check_Version_name() {
       //  echo "aa";
        $email = $_POST['email'];
        $this->load->model('Create_Product_Data');
        $email_add = $this->Create_Product_Data->db_chk_version_name($email);
       // }

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
    function version_save_data() 
    {
    $this->load->model('Create_Product_Data');       
    $report_name = $this->Create_Product_Data->db_version_save_data();
   $report_name['product'] = $report_name['product'];
   $report_name['version'] = $report_name['version']; 
   $this->create_folder_function_version($report_name['product'],$report_name['version'],"Product");
   $this->global_save_folder_image_version($report_name['product'],"Product","Product_image",$_FILES["image_version"]["name"],"Product_txt",$report_name['version']); 
    $user_data = $this->Create_Product_Data->fetch_version_data($report_name['product']);
       $rows1 = array();
        foreach ($user_data->result() as $row) {
            $rows1[] = array
                (              
                "product_id" => $row->product_id,
                "product_version_id" => $row->product_version_id,
                "Hsn_code" => $row->Hsn_code,
                "product_price" => $row->product_price,
                "Product_configuration" => $row->Product_configuration,
                "product_version_name" => $row->product_version_name,
            );              
        }   
        echo json_encode($rows1); 
	}
     function create_folder_function_version($last_inserted_id,$version_id,$EventKey)
{
      //  echo "aa";
	 $last_id=$last_inserted_id;
	 $Event=$EventKey;
         $folder_name =$version_id;
	 $this->load->model('Create_Product_Data');
	 $base_path = $this->Create_Product_Data->db_retrieve_base_path();
	 $base_path1=$base_path->path;
	 $middle_path = $this->Create_Product_Data->db_retrieve_base_path_version($Event);
          $code= $middle_path->code;
          $folder_path= $middle_path->folder_path;
          $file_path = str_replace('kkkzzz',"$last_id", $folder_path); 
             $mode = "0777";	 
      $dirpath=$base_path1."/".$file_path."/".$folder_name."/" ;
      is_dir($dirpath) || mkdir($dirpath, $mode, true);
      $dirpath_image=$base_path1."/".$file_path."/".$folder_name."/image";
       is_dir($dirpath_image) || mkdir($dirpath_image, $mode, true);
      $dirpath_text=$base_path1."/".$file_path."/".$folder_name."/text";
       is_dir($dirpath_text) || mkdir($dirpath_text, $mode, true);  
}
 function global_save_folder_image_version($last_inserted_id,$event,$address_path,$arr,$text,$version)
{
      
                            $msg = "";    
			  $this->load->model('Create_Product_Data');
			  $base_path = $this->Create_Product_Data->db_retrieve_base_path();
			  $base_path2=$base_path->index_file_path;
			  $base_path3=$base_path->index_file_name;
                           $path1="Product/".$last_inserted_id."/".$version."/image";
                           $path2="Product/".$last_inserted_id."/".$version."/text";
			//  $path = $this->Db_F2S->db_retrieve_base_path_image($address_path,$event);	  
                        //  $path1=$path->folder_path;
			//  $path2 = str_replace('kkkzzz', "$last_inserted_id", $path1);
			//  $text_path = $this->Db_F2S->db_retrieve_base_path_text($event,$text);
			//  $text_path1=$text_path->folder_path;
			 // $text_path2 = str_replace('kkkzzz', "$last_inserted_id", $text_path1);
			 $dirpath1=$base_path2."/".$path2;
                      $dirpath=$base_path2."/".$path1;
	 //$total = count($arr);
                        //  print_r($arr);
    
       $total= count(array_filter($arr));
    //  count($total);
	   if ($total > 0) 
	   {
            $counter = 0;
            for ($i = 0; $i < count($arr); $i++)
			{ 
					$_FILES["image_version"]["size"][$i];
					$allowedExts = array("gif", "jpeg", "jpg", "png");
					if ($_FILES["image_version"]["name"][$i] <> "")
				{
						$ext1 = ((explode(".", $_FILES["image_version"]["name"][$i])));
						$extension = end($ext1);
						   if (($_FILES["image_version"]["size"][$i] < 40000000) && in_array($extension, $allowedExts)) 				
							   {  
								   $txt=$this->create_index_file($base_path2,$base_path3);					
								   $date = date('m.d.Y.hia');
								   $tmp_name[$i] = $_FILES["image_version"]["tmp_name"][$i];						
								   $name1[$i] = $_FILES["image_version"]["name"][$i];
								   $chars = $txt . "_" . $date . "_";                 
								   $names[$i] = $chars . "_" . $last_inserted_id . "." . $name1[$i];
								   $str[$i] = substr($name1[$i], 0, strpos($name1[$i], '.'));
								   $name2[$i] = $chars . "_" . $last_inserted_id . "." . $str[$i] . ".txt";
								   move_uploaded_file($tmp_name[$i],"$dirpath/$names[$i]");
								   $img_txt[$i] = $_POST['image_version_txt'][$i];
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
						 $txt=$this->create_index_file($base_path2,$base_path3);	
						 $date = date('m.d.Y.hia');
						 $chars= $txt. "_" .$date."_";
						 $dir = "$base_path2/$event";
						 $dh  = opendir($dir);
						 $name1="Hydrangeas";
					   while (false !== ($name1 = readdir($dh)))
						 {
						   $files[] = $name1;
						 }
						$images=preg_grep ('/\.jpg$/i', $files);
						$names = $chars . "_" . $last_inserted_id . "." . $name1;
						$imagePath = "$base_path2/Hydrangeas.jpg";
						$newPath = "$dirpath/";
						$ext = $chars.$last_inserted_id.".Hydrangeas".'.jpg';
						$ext1=$chars.$last_inserted_id.".Hydrangeas".'.txt';
						$newName  = $newPath.$ext;
						//copy($imagePath , $newName);
						$ourFileName = "$dirpath1/$ext1";
						$ourFileHandle = fopen($ourFileName, 'w') or die("can't open file");
				  
		}	
                
        }

    function fetch_version_details() {
   $uid = $_POST['product_id'];  
      $this->load->model('Create_Product_Data');
      $user_data = $this->Create_Product_Data->fetch_version_data($uid);
       $rows1 = array();
        foreach ($user_data->result() as $row) {
            $rows1[] = array
                (              
                "product_id" => $row->product_id,
                "product_version_id" => $row->product_version_id,
                "Hsn_code" => $row->Hsn_code,
                "product_price" => $row->product_price,
                "Product_configuration" => $row->Product_configuration,
                "product_version_name" => $row->product_version_name,
            );              
        }   
        echo json_encode($rows1); 
      
           
    }
      public function get_barcode() {
        $this->load->model('Create_Product_Data');
        $getCountry = $this->Create_Product_Data->getbarcode_Data();
        foreach ($getCountry->result() as $row) {
            $data1[] = $row;
        }
        echo json_encode($data1);
    }
      function ajax_edit_version_old() { 
       // $c_id,$d_id
         $c_id = $_POST['id'];
         $d_id = $_POST['product_for_image'];
        $this->load->model('Create_Product_Data');
        $user_data = $this->Create_Product_Data->fetch_version_data_to_update($c_id);
      //  $event="Product";
     //   $address_path="product_image";
     //    $path = $this->Db_F2S->db_retrieve_base_path_image($address_path,$event);
      //   $path1=$path->folder_path;
      //   $file_path = str_replace('kkkzzz', "$c_id", $path1); 
        $this->load->helper('directory'); //load directory helper
         //  $dir = "Image_file_container/$file_path";
          // $c_id $dirpath_image=$base_path1."/".$file_path."/".$folder_name."/image";
     $dir="Image_file_container/Product/".$d_id."/".$c_id."/image";
         // Your Path to folder
       $map = directory_map($dir);
       
     if($map == ""){
            echo json_encode(array("table" => $user_data, "im" => "no data", "path" => "0", "dir" => "0"));
        }
        else{
          //  echo"aa";
        $count_image = count($map);
        
        
        if ($count_image <= 0) {
            echo json_encode(array("table" => $user_data, "im" => "no data", "path" => "0", "dir" => "0"));
            //echo"bb";
        }
       if ($count_image >= 1) {
             
//echo"aa";
            foreach ($map as $image_id) {
                
                if (strpos($image_id, 'txt') == false) {

                    //"img"=>$img, $img[]='<img width="50" height="50" src="'.base_url($dir."/".$image_id).'" alt="">';
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
	  function ajax_edit_version() { 
       // $c_id,$d_id
         $c_id = $_POST['id'];
         $d_id = $_POST['product_for_image'];
        $this->load->model('Create_Product_Data');
        $user_data = $this->Create_Product_Data->fetch_version_data_to_update($c_id);
      //  $event="Product";
     //   $address_path="product_image";
     //    $path = $this->Db_F2S->db_retrieve_base_path_image($address_path,$event);
      //   $path1=$path->folder_path;
      //   $file_path = str_replace('kkkzzz', "$c_id", $path1); 
        $this->load->helper('directory'); //load directory helper
         //  $dir = "Image_file_container/$file_path";
          // $c_id $dirpath_image=$base_path1."/".$file_path."/".$folder_name."/image";
     $dir="Image_file_container/Product/".$d_id."/".$c_id."/image";
  
       $map = directory_map($dir);
       
     if($map == ""){
            echo json_encode(array("table" => $user_data, "im" => "no data", "path" => "0", "dir" => "0"));
        }
        else{
          //  echo"aa";
        $count_image = count($map);
        
        
        if ($count_image <= 0) {
            echo json_encode(array("table" => $user_data, "im" => "no data", "path" => "0", "dir" => "0"));
            //echo"bb";
        }
       if ($count_image >= 1) {
             
//echo"aa";
            foreach ($map as $image_id) {
                
                if (strpos($image_id, 'txt') == false) {

                    //"img"=>$img, $img[]='<img width="50" height="50" src="'.base_url($dir."/".$image_id).'" alt="">';
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
    function save_update_version($cust_id) {
         // echo $cust_id;product_id
          $c_id = $_POST['product_id_val'];
        $this->load->model('Create_Product_Data');
        $user_data = $this->Create_Product_Data->update_version_data($cust_id);
        $user_data1 = $this->Create_Product_Data->fetch_version_data($c_id);
       $rows1 = array();
        foreach ($user_data1->result() as $row) {
            $rows1[] = array
                (              
                "product_id" => $row->product_id,
                "product_version_id" => $row->product_version_id,
                "Hsn_code" => $row->Hsn_code,
                "product_price" => $row->product_price,
                "Product_configuration" => $row->Product_configuration,
                "product_version_name" => $row->product_version_name,
            );              
        }   
        echo json_encode($rows1); 
      
    }
    function ajax_delete_version($c_id) {       
        $this->load->model('Create_Product_Data');
        $user_data = $this->Create_Product_Data->fetch_version_data_to_delete($c_id);                 
    
    }
     function version_save_data_new() {
//echo "bb";
 //   print_r ($_FILES["image_addversion"]["name"]);
       $this->load->model('Create_Product_Data');
      $report_name = $this->Create_Product_Data->db_version_save_new_data();
      $report_name['product'] = $report_name['product'];
      $report_name['version'] = $report_name['version'];  
        // $ca_id = $this->session->set_userdata('product_key', $report_name['product']);
    $this->create_folder_function_version($report_name['product'],$report_name['version'],"Product");
   $this->global_save_folder_image_version_add($report_name['product'],"Product","Product_image",$_FILES["image_addversion"]["name"],"Product_txt",$report_name['version']);
     $user_data = $this->Create_Product_Data->fetch_version_data($report_name['product']);
       $rows1 = array();
        foreach ($user_data->result() as $row) {
            $rows1[] = array
                (              
                "product_id" => $row->product_id,
                "product_version_id" => $row->product_version_id,
                "Hsn_code" => $row->Hsn_code,
                "product_price" => $row->product_price,
                "Product_configuration" => $row->Product_configuration,
                "product_version_name" => $row->product_version_name,
            );              
        }   
        echo json_encode($rows1); 
	
  
   
    }   
   function global_save_folder_image_version_add($last_inserted_id,$event,$address_path,$arr,$text,$version)
{
      // print_r($arr);  
                             $msg = "";    
			  $this->load->model('Create_Product_Data');
			  $base_path = $this->Create_Product_Data->db_retrieve_base_path();
			  $base_path2=$base_path->index_file_path;
			  $base_path3=$base_path->index_file_name;
                           $path1="Product/".$last_inserted_id."/".$version."/image";
                           $path2="Product/".$last_inserted_id."/".$version."/text";
			//  $path = $this->Db_F2S->db_retrieve_base_path_image($address_path,$event);	  
                        //  $path1=$path->folder_path;
			//  $path2 = str_replace('kkkzzz', "$last_inserted_id", $path1);
			//  $text_path = $this->Db_F2S->db_retrieve_base_path_text($event,$text);
			//  $text_path1=$text_path->folder_path;
			 // $text_path2 = str_replace('kkkzzz', "$last_inserted_id", $text_path1);
			 $dirpath1=$base_path2."/".$path2;
                         $dirpath=$base_path2."/".$path1;
	 //$total = count($arr);
                        //  print_r($arr);
    
         $total= count(array_filter($arr));
    //  count($total);
	   if ($total > 0) 
	   {
            $counter = 0;
            for ($i = 0; $i < count($arr); $i++)
			{ 
					$_FILES["image_addversion"]["size"][$i];
					$allowedExts = array("gif", "jpeg", "jpg", "png");
					if ($_FILES["image_addversion"]["name"][$i] <> "")
				{
						$ext1 = ((explode(".", $_FILES["image_addversion"]["name"][$i])));
						$extension = end($ext1);
						   if (($_FILES["image_addversion"]["size"][$i] < 40000000) && in_array($extension, $allowedExts)) 				
							   {  
								   $txt=$this->create_index_file($base_path2,$base_path3);					
								   $date = date('m.d.Y.hia');
								   $tmp_name[$i] = $_FILES["image_addversion"]["tmp_name"][$i];						
								   $name1[$i] = $_FILES["image_addversion"]["name"][$i];
								   $chars = $txt . "_" . $date . "_";                 
								   $names[$i] = $chars . "_" . $last_inserted_id . "." . $name1[$i];
								   $str[$i] = substr($name1[$i], 0, strpos($name1[$i], '.'));
								   $name2[$i] = $chars . "_" . $last_inserted_id . "." . $str[$i] . ".txt";
								   move_uploaded_file($tmp_name[$i],"$dirpath/$names[$i]");
								   $img_txt[$i] = $_POST['image_addversion_txt'][$i];
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
						 $txt=$this->create_index_file($base_path2,$base_path3);	
						 $date = date('m.d.Y.hia');
						 $chars= $txt. "_" .$date."_";
						 $dir = "$base_path2/$event";
						 $dh  = opendir($dir);
						 $name1="Hydrangeas";
					   while (false !== ($name1 = readdir($dh)))
						 {
						   $files[] = $name1;
						 }
						$images=preg_grep ('/\.jpg$/i', $files);
						$names = $chars . "_" . $last_inserted_id . "." . $name1;
						$imagePath = "$base_path2/Hydrangeas.jpg";
						$newPath = "$dirpath/";
						$ext = $chars.$last_inserted_id.".Hydrangeas".'.jpg';
						$ext1=$chars.$last_inserted_id.".Hydrangeas".'.txt';
						$newName  = $newPath.$ext;
						//copy($imagePath , $newName);
						$ourFileName = "$dirpath1/$ext1";
						$ourFileHandle = fopen($ourFileName, 'w') or die("can't open file");
				  
		}
}
function delete_image($id)
            {
			//	echo"aa";
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
                echo json_encode(array("ok" => $final_data));
				
            }		
       
public function get_size_data()
        {
            $this->load->model('Create_Product_Data');
            $data = $this->Create_Product_Data->getSize_Data();
            foreach ($data->result() as $row) 
                    {
                    $data1[] = $row;
                    }
            echo json_encode($data1);
       }
    



}