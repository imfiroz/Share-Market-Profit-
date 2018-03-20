<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	 	{
	 		parent::__construct();
			$this->load->helper('url');
                        $this->load->helper('sendsms_helper');
			 $this->load->library('session');
	 		
	 	}
		public function index()
	{
		$this->load->view('vw_login_erp');
	}
	function fetch_progress_bar($uid) {
        //echo"zzz";
        $this->load->model('Admin_Data');
        $query_task = $this->db->query("SELECT * from `tbl_notification` WHERE is_active=0");
		$one= $query_task->num_rows();
		$query_task1 = $this->db->query("SELECT * from `tbl_notification` WHERE is_active=1");
		$two= $query_task1->num_rows();
		$query_task2 = $this->db->query("SELECT * from `tbl_notification` ");
		$three= $query_task2->num_rows();
        $final_data = array(
					
                    'eq_1' => $two,
					 'eq_0' =>$one,
					 'all_data' => $three
                );
        //print_r($data_nm);

        echo json_encode($final_data);
    }
        public function admin_registration()
	{
		$this->load->view('admin_registration');
	}
	public function about()
	{
		$this->load->view('vw_aboutus');
	}
	public function features()
	{
		$this->load->view('vw_features');
	}
	public function dashbord()
	{
		$this->load->view('vw_dashboard');
	}
	public function workplace()
	{
		$this->load->view('vw_workplace');
	}
	public function cms()
	{
		$this->load->view('vw_contactmanagement');
	}
	public function sms()
	{
		$this->load->view('vw_salesordermanagement');
	}
	public function pms()
	{
		$this->load->view('vw_purchaseordermanagement');
	}
	public function bm()
	{
		$this->load->view('vw_bankmanagement');
	}
	public function im()
	{
		$this->load->view('vw_inventorymanagement');
	}
	public function acc()
	{
		$this->load->view('vw_accountingmanagement');
	}
	public function rp()
	{
		$this->load->view('vw_reporting');
	}
	public function em()
	{
		$this->load->view('vw_expensemanagement');
	}
	public function inv()
	{
		$this->load->view('vw_invoicing');
	}
	public function iplc()
	{
		$this->load->view('vw_individualprofile');
	}
	public function plans()
	{
		$this->load->view('vw_pricing');
	}
	public function blogs()
	{
		$this->load->view('vw_blog');
	}
	public function contact()
	{
		$this->load->view('vw_contact');
	}
	public function login()
	{
		$this->load->view('vw_login_erp');
	}
	public function faq()
	{
		$this->load->view('vw_faq');
	}
	public function foget()
	{
		$this->load->view('vw_fogetpass');
	}
	public function main_Screen()
	{
		$this->load->view('vw_login_erp');
	}
	
	public function reset_pass(){
		$mail= $_POST['email'];
		$this->load->database();
		$this->load->model('Change_Pass');
		$report_name= $this->Change_Pass->db_chk_email($mail);
		 $aa= $report_name->row();
		 $user=$aa->Vendor_Id;
		$num = $report_name->num_rows();
		if($num ==1){
			//echo"aaa";
			$from = "info@astrick.in";
			$headers = 'F2S'.'<'. $from .'>'. "\n";
			$headers .= "Content-type: text/plain; charset=UTF-8"; 
			 $subject="Reset Password";
			 $automessage="Hi please click following link to reset your password ";
			  $automessage .= base_url("Welcome/new_password/".$user);
			 
			 
			$to1=$mail;

			// @mail($to1,'New Registration',$message,$headers);

			@mail($to1 , $subject  ,  $automessage,  $headers);
				$note['note']="Please check your mail to reset password";
			$this->load->view('vw_fogetpass',$note);
			
		}else{
			$note['note']="This Email address is not register with us or wrong email address.";
		$this->load->view('index',$note);
		}
			/* */
	}
	function new_password(){
		$this->load->view('vw_ch_fogetpass');
	}
		public function reset_new_pass(){
			$note['note']="You have change password successfully please login.";
			$u_id= $_POST['u_id'];
		 $new_pass= $_POST['new_pass'];
		 $retype_pass= $_POST['retype_pass'];
		$this->load->database();
		$this->load->model('Change_Pass');
		$report_name= $this->Change_Pass->db_change_pass($new_pass,$u_id);
		$this->load->view('vw_login_erp',$note);
		}
		
public function user_login_check_main_old()
    {   
          // echo"aa";
       $username = $this->input->post('user_name');
       $pwd = $this->input->post('password');      
       $ip = $_SERVER['REMOTE_ADDR'];
        $browser = $_SERVER['HTTP_USER_AGENT'];
        $referrer = $_SERVER['HTTP_REFERER'];
        $sessionID = session_id();
$this->load->database();
       $this->load->model('Change_Pass');
      $bln_usr_exists_Chk = $this->Change_Pass->fun_Model_User_Login($username, $pwd, $ip, $browser, $referrer, $sessionID);
    if ($bln_usr_exists_Chk['InsertID'] <= 0) {
            $final_data = array(
                'redirect_path' => base_url("Welcome")
            );
            echo json_encode($final_data);
        } 
         if ($bln_usr_exists_Chk['InsertID'] == 1)
               {
				  
				                
               /* foreach ($bln_usr_exists_Chk['finalSelData']->result() as $row) 
                     {
                                $Vendor_Id = $row->Vendor_Id;
                                $role_id = $row->role_id;
                                $gstin = $row->gstin;
								$company_id = $row->company_id;		
								$branch_id = $row->branch_id;	        
                     }           //     
*/
				
					/*$data=array(
			"print_style"=>$print_style,
			"site_name"=>$site_name,
			"default_email"=>$default_email,
			"corn"=>$date_format,
			"state"=>$state,
			"barcode_img"=>$barcode_renderer,
			'default_biller'=>$biller
			);
			//print_r($data);
            $this->load->model('System_Settings_Data');
			
			$update_setting['update'] = $this->System_Settings_Data->db_update_settings($data);
			if($update_setting>=1){
				$up_data['update_success']="Update Settings sucessfully";
				$biller_data= $this->System_Settings_Data->get_biller_data($biller);
				
				$data['row']= $biller_data->row();
				// print_r($row);
				// echo $data['row']->Aadhar_card;
				$session_data = array('site_name' => $site_name ,'biller'=> $data,
			'state'=>$state,'barcode_renderer'=>$barcode_renderer,'barcode_renderer'=>$barcode_renderer,"print_style"=>$print_style
                );
					*/	
		/*	 $setting_data=$this->Change_Pass->get_setting_data();
			 $setting['setting_info']= $setting_data->row();
			  $setting['setting_info']->print_style;
			// print_r($setting_data);
			 $dataxx=array(
			"print_style"=>$setting['setting_info']->print_style,
			"site_name"=>$setting['setting_info']->site_name,
			"default_email"=>$setting['setting_info']->default_email,
			"corn"=>$setting['setting_info']->corn,
			"state"=>$setting['setting_info']->state,
			"barcode_img"=>$setting['setting_info']->barcode_img,
			'default_biller'=>$setting['setting_info']->default_biller
			);
		//	print_r($dataxx);
			$biller_data= $this->Change_Pass->get_biller_data($setting['setting_info']->default_biller);
			 $data['row']= $biller_data->row();
			// echo $data['row']->Aadhar_card;
                  $session_data = array('User_id' => $Vendor_Id ,'Vendor_Id'=> $Vendor_Id,
			'role_id'=>$role_id,'gstin'=>$gstin,'company_id'=>$company_id,'branch_id'=>$branch_id,	
			'un' => $username, 'sesID' => $sessionID, 'ip_add' => $ip, 'browser' => $browser, 'referrer' => $referrer, 'is_logged_in' => '1',
			'site_name' => $setting['setting_info']->site_name ,'biller'=> $data,
			'state'=>$setting['setting_info']->state,'barcode_renderer'=>$setting['setting_info']->barcode_img,"print_style"=>$setting['setting_info']->print_style
                );
                 $this->session->set_userdata($session_data);      
//print_r($session_data);				 
                 $output = array(
                                 'redirect_path' => base_url("Dashboard")
                                );
                 $final_data = array_merge($output);           
                 echo json_encode($final_data);     
			 */
           }
        else
            {
				
            $final_data = array(
                    'redirect_path' => base_url("Dashboard")
                );
                echo json_encode($final_data);
				
            }
    
     
    }
	public function user_login_check_main_old1()
    {   
       $username = $this->input->post('user_name');
       $pwd = $this->input->post('password');      
       $ip = $_SERVER['REMOTE_ADDR'];
        $browser = $_SERVER['HTTP_USER_AGENT'];
        $referrer = $_SERVER['HTTP_REFERER'];
        $sessionID = session_id();
$this->load->database();
       $this->load->model('Change_Pass');
      $bln_usr_exists_Chk = $this->Change_Pass->fun_Model_User_Login($username, $pwd, $ip, $browser, $referrer, $sessionID);
     //  print_r($bln_usr_exists_Chk['finalSelData']);
        
             // $bln_usr_exists_Chk['InsertID'];

    if ($bln_usr_exists_Chk['InsertID'] <= 0) {
        
            $final_data = array(
                'redirect_path' => base_url("Welcome")
            );
            echo json_encode($final_data);
        } 
         if ($bln_usr_exists_Chk['InsertID'] == 1)
               {              
                foreach ($bln_usr_exists_Chk['finalSelData']->result() as $row) 
                     {
								$business_sub_category_id = $row->business_sub_category_id;
                                $Vendor_Id = $row->Vendor_Id;
                                $role_id = $row->role_id;
                                $gstin = $row->gstin;
								$company_id = $row->company_id;		
								$branch_id = $row->branch_id;
								
															
                     }              

					/*
					$data=array(
			"print_style"=>$print_style,
			"site_name"=>$site_name,
			"default_email"=>$default_email,
			"corn"=>$date_format,
			"state"=>$state,
			"barcode_img"=>$barcode_renderer,
			'default_biller'=>$biller
			);
			//print_r($data);
            $this->load->model('System_Settings_Data');
			
			$update_setting['update'] = $this->System_Settings_Data->db_update_settings($data);
			if($update_setting>=1){
				$up_data['update_success']="Update Settings sucessfully";
				$biller_data= $this->System_Settings_Data->get_biller_data($biller);
				
				$data['row']= $biller_data->row();
				// print_r($row);
				// echo $data['row']->Aadhar_card;
				$session_data = array('site_name' => $site_name ,'biller'=> $data,
			'state'=>$state,'barcode_renderer'=>$barcode_renderer,'barcode_renderer'=>$barcode_renderer,"print_style"=>$print_style
                );
					*/		
			 $setting_data=$this->Change_Pass->get_setting_data();
			 $setting['setting_info']= $setting_data->row();
			  $setting['setting_info']->print_style;
			// print_r($setting_data);
			 $data=array(
			"print_style"=>$setting['setting_info']->print_style,
			"site_name"=>$setting['setting_info']->site_name,
			"default_email"=>$setting['setting_info']->default_email,
			"corn"=>$setting['setting_info']->corn,
			"state"=>$setting['setting_info']->state,
			"barcode_img"=>$setting['setting_info']->barcode_img,
			'default_biller'=>$setting['setting_info']->default_biller
			);
			$biller_data= $this->Change_Pass->get_biller_data($setting['setting_info']->default_biller);
			 $data['row']= $biller_data->row();
			// echo $data['row']->Aadhar_card;
                  $session_data = array('User_id' => $Vendor_Id ,'Vendor_Id'=> $Vendor_Id,'business_sub_category_id'=> $business_sub_category_id,
			'role_id'=>$role_id,'gstin'=>$gstin,'company_id'=>$company_id,'branch_id'=>$branch_id,	
			'un' => $username, 'sesID' => $sessionID, 'ip_add' => $ip, 'browser' => $browser, 'referrer' => $referrer, 'is_logged_in' => '1',
			'site_name' => $setting['setting_info']->site_name ,'biller'=> $data,
			'state'=>$setting['setting_info']->state,'barcode_renderer'=>$setting['setting_info']->barcode_img,"print_style"=>$setting['setting_info']->print_style
                );
                 $this->session->set_userdata($session_data);      			 
                $output = array(
                                 'redirect_path' => base_url("Dashboard")
                                );
                 $final_data = array_merge($output);           
                 echo json_encode($final_data);  
				 
           }
        else
            {
                $final_data = array(
                    'redirect_path' => base_url("Dashboard")
                );
                echo json_encode($final_data);
            }
    
     
    }
	public function user_login_check_main()
    {   

       $username = $this->input->post('user_name');
       $pwd = $this->input->post('password');      
       $ip = $_SERVER['REMOTE_ADDR'];
        $browser = $_SERVER['HTTP_USER_AGENT'];
        $referrer = $_SERVER['HTTP_REFERER'];
        $sessionID = session_id();
$this->load->database();
       $this->load->model('Change_Pass');
      $bln_usr_exists_Chk = $this->Change_Pass->fun_Model_User_Login($username, $pwd, $ip, $browser, $referrer, $sessionID);    
    if ($bln_usr_exists_Chk['InsertID'] <= 0) {
         //  echo"hii";
           // $final_data = array(
            //    'redirect_path' => base_url("Welcome")
          //  );
           // echo json_encode($final_data);
        echo 0;
        } 
      else{   if ($bln_usr_exists_Chk['InsertID'] == 1)
               { 
     
                foreach ($bln_usr_exists_Chk['finalSelData']->result() as $row) 
                     {
                                $Vendor_Id = $row->Vendor_Id;
                                $role_id = $row->role_id;
                                $gstin = $row->gstin;
				$company_id = $row->company_id;		
				$branch_id = $row->branch_id;
                                $business_sub_category_id = $row->business_sub_category_id;
				$business_category_id = $row->business_category_id;
                                $is_approved = $row->is_approved;
                                	
                     }           		
                 
			 $setting_data=$this->Change_Pass->get_setting_data();
			 $setting['setting_info']= $setting_data->row();
			 $setting['setting_info']->print_style;
			 $dataxx=array(
			"print_style"=>$setting['setting_info']->print_style,
			"site_name"=>$setting['setting_info']->site_name,
			"default_email"=>$setting['setting_info']->default_email,
			"corn"=>$setting['setting_info']->corn,
			"state"=>$setting['setting_info']->state,
			"barcode_img"=>$setting['setting_info']->barcode_img,
			'default_biller'=>$setting['setting_info']->default_biller
			);
                        
			$biller_data= $this->Change_Pass->get_biller_data($setting['setting_info']->default_biller);
			  $data['row']= $biller_data->row();			
                $session_data = array('User_id' => $Vendor_Id ,'Vendor_Id'=> $Vendor_Id,'business_sub_category_id'=> $business_sub_category_id,'business_category_id'=> $business_category_id,
			'role_id'=>$role_id,'gstin'=>$gstin,'company_id'=>$company_id,'branch_id'=>$branch_id,'is_approved'=>$is_approved,	
			'un' => $username, 'sesID' => $sessionID, 'ip_add' => $ip, 'browser' => $browser, 'referrer' => $referrer, 'is_logged_in' => '1',
			'site_name' => $setting['setting_info']->site_name ,'biller'=> $data,
			'state'=>$setting['setting_info']->state,'barcode_renderer'=>$setting['setting_info']->barcode_img,"print_style"=>$setting['setting_info']->print_style
                );
              
                 $this->session->set_userdata($session_data);      				 
                 $output = array(
                                 'redirect_path' => base_url("Dashboard")
                                );
                 $final_data = array_merge($output);           
                 echo json_encode($final_data); 
                 
           }
        else
            {
                $final_data = array(
                    'redirect_path' => base_url("Dashboard")
                );
                echo json_encode($final_data);
            }
      }    
    }
      public function get_hsn1() {
        // process posted form data
       $this->load->model('Admin_Data');
        $keyword = $this->input->post('term');
        $data['response'] = 'false'; //Set default response
        $query = $this->Admin_Data->db_get_hsn1($keyword); //Search DB
        $cities = array();
        foreach ($query->result_array() as $key):
            $a = array(
                'id' => trim($key['business_category_id']),
                'label' => trim($key['Name']),
                'value' => trim($key['Name'])
            );
            $cities[] = $a;
        endforeach;
//x`print_r($cities);
        echo json_encode($cities);
    }
    function check_name_customer()
            {

           $m="";       
           $email = $_POST['email'];       
           $this->load->model('Admin_Data');       
           $email_add = $this->Admin_Data->db_chk_name_of_customer($email);
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
              function check_email_customer()
            {

           $m="";       
           $email = $_POST['email'];       
           $this->load->model('Admin_Data');       
           $email_add = $this->Admin_Data->db_chk_email_of_customer($email);
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
             	function save_data()
	{ 
                    if($this->input->post()){
          $feature  = $this->input->post('multiselect');
        $this->load->model('Admin_Data');
          foreach($feature as $fkey => $fvalue ){
     $last_inserted_id1['get_value']= $this->Admin_Data->db_save_register_data($fvalue);
    $last_inserted_id= $last_inserted_id1['get_value'];
    }
                     }
    //   $last_inserted_id = $this->Admin_Data->db_save_register_data();  
      if($last_inserted_id==0){
             echo json_encode($last_inserted_id);
       }
      else {
       $phone_no= $this->input->post('txt_phone');
       $phone_no1=7715922533;
       $phone_no2=9891469865;
       $name= $this->input->post('txt_name');
       sendsms($phone_no,"Hi ".$name.", You are Successfully registered with Full2Store.");
       sendsms($phone_no1,"Hi ".$name." has Successfully registered with Full2Store.");
       sendsms($phone_no2,"Hi ".$name." has Successfully registered with Full2Store.");
       $this->create_folder_function($last_inserted_id, "Vendor");
       $this->global_save_folder_image($last_inserted_id, "Vendor","Vendor_image",$_FILES["image"]["name"], "Vendor_txt");
	$final_data = array(
                'redirect_path'=>base_url("Welcome/main_Screen")             
                             );
               echo json_encode($final_data);
      }
	}
         function create_folder_function($last_inserted_id, $EventKey) {
        $last_id = $last_inserted_id;
        $Event = $EventKey;
        $this->load->model('Admin_Data');
        $base_path = $this->Admin_Data->db_retrieve_base_path();
        $base_path1 = $base_path->path;
        $middle_path = $this->Admin_Data->db_retrieve_base_path1($Event);
        foreach ($middle_path->result() as $row) {
            $db_col = $row->folder_path;
            $file_path = str_replace('kkkzzz', "$last_id", $db_col);
            $mode = "0777";
            $dirpath = $base_path1 . "/" . $file_path . "/";
            is_dir($dirpath) || mkdir($dirpath, $mode, true);
        }
    }
      function create_index_file($base_path2,$base_path3) {
        if (file_exists($base_path2 . "/" . $base_path3)) {
            $myfile = fopen($base_path2 . "/" . $base_path3, 'r');
            $userName = fgets($myfile);
            $myfile1 = fopen($base_path2 . "/" . $base_path3, "w") or die("Unable to open file!");
            $txt = ++$userName;
            fwrite($myfile1, $txt);
            fclose($myfile);
            fclose($myfile1);
            return $txt;
        } else {
            $myfile1 = fopen($base_path2 . "/" . $base_path3, 'w');
            $txt = 0;
            $txt1 = ++$txt;
            fwrite($myfile1, $txt1);
            fclose($myfile1);
            return $txt1;
        }
    }
    function global_save_folder_image($last_inserted_id, $event, $address_path, $arr, $text) {
       // print_r($arr);
        $msg = "";
        $this->load->model('Admin_Data');
        $base_path = $this->Admin_Data->db_retrieve_base_path();
        $base_path2 = $base_path->index_file_path;
        $base_path3 = $base_path->index_file_name;
        $path = $this->Admin_Data->db_retrieve_base_path_image($address_path, $event);
        $path1 = $path->folder_path;
        $path2 = str_replace('kkkzzz', "$last_inserted_id", $path1);
        $text_path = $this->Admin_Data->db_retrieve_base_path_text($event, $text);
        $text_path1 = $text_path->folder_path;
        $text_path2 = str_replace('kkkzzz', "$last_inserted_id", $text_path1);
        $dirpath = $base_path2 . "/" . $path2;
        $dirpath1 = $base_path2 . "/" . $text_path2;
        $total = count(array_filter($arr));
        if ($total > 0) {
            $counter = 0;
            for ($i = 0; $i < count($arr); $i++) {
                $_FILES["image"]["size"][$i];
                $allowedExts = array("gif", "jpeg", "jpg", "png");
                if ($_FILES["image"]["name"][$i] <> "") {
                    $ext1 = ((explode(".", $_FILES["image"]["name"][$i])));
                    $extension = end($ext1);
                    if (($_FILES["image"]["size"][$i] < 40000000) && in_array($extension, $allowedExts)) {
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
        } else {
            $txt = $this->create_index_file($base_path2, $base_path3);
            $date = date('m.d.Y.hia');
            $chars = $txt . "_" . $date . "_";
            $dir = "$base_path2/$event";
            $dh = opendir($dir);
            $name1 = "Hydrangeas";
            while (false !== ($name1 = readdir($dh))) {
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
    } function check_mobile_number() {
		// echo "aa";
        $email = $_POST['email'];
      
        $this->load->model('Admin_Data');
        //  if(isset($_POST['gst_no'])){
        $email_add = $this->Admin_Data->db_chk_mobile_number($email);
        //}

       $rowcount = $email_add->num_rows();
       if ($rowcount == 0) {
            echo 1 ;
        } else {
           echo 0;
       }
    }
      public function get_country() {
          //  echo"aab";
      $this->load->model('Admin_Data');
       $getCountry = $this->Admin_Data->getCountry();
      foreach ($getCountry->result() as $row) {
           $data1[] = $row;       }
     echo json_encode($data1);
    }
       public function get_city() {
        $city = $_POST['city'];
        $this->load->model('Admin_Data');
    $get_state = $this->Admin_Data->getCity($city);
        foreach ($get_state->result() as $row) {
            $data1[] = $row;
        }
        echo json_encode($data1);
    }
    public function get_state() {
        $country_id = $_POST['country_id'];
        $this->load->model('Admin_Data');
        $get_state = $this->Admin_Data->getState($country_id);
        foreach ($get_state->result() as $row) {
            $data1[] = $row;
        }
        echo json_encode($data1);
    }
    public function get_business() {
          //  echo"aab";
      $this->load->model('Admin_Data');
       $getCountry = $this->Admin_Data->getBusiness();
      foreach ($getCountry->result() as $row) {
           $data1[] = $row;       }
     echo json_encode($data1);
    }
     public function get_business_data() 
                {
                        $city = $_POST['business'];
                        $this->load->model('Admin_Data');
                        $get_state = $this->Admin_Data->getBusiness_data($city);
                        foreach ($get_state->result() as $row) 
                            {
                            $data1[] = $row;
                            }
                        echo json_encode($data1);
                }
                public function get_vendor_count() {
            $this->load->model('Admin_Data');
            $getCountry = $this->Admin_Data->getcount();
            $rowcount = $getCountry->num_rows();
            //echo $getCountry;
     // $rowcount = $getCountry->num_rows();
      echo $rowcount;
       
    }
	  public function get_vendor_count_for_vendor() {
            $this->load->model('Admin_Data');
            $getCountry = $this->Admin_Data->getcount_for_vendor();
            $rowcount = $getCountry->num_rows();
          
      echo $rowcount;
       
    }
	 public function get_cutomer() {
            $this->load->model('Admin_Data');
            $getCountry = $this->Admin_Data->get_product_total_count();
          echo  $rowcount = $getCountry->num_rows();
    
       
    }
	
	 public function get_News() {
            $this->load->model('Admin_Data');
            $getCountry = $this->Admin_Data->get_News();
          echo  $rowcount = $getCountry->num_rows();
    
       
    }
	 public function get_customer_count() {
            $this->load->model('Admin_Data');
            $getCountry = $this->Admin_Data->getcustcount();
            $rowcount = $getCountry->num_rows();
            //echo $getCountry;
     // $rowcount = $getCountry->num_rows();
      echo $rowcount;
       
    }
	 public function get_earnings() {
            $this->load->model('Admin_Data');
            $getCountry = $this->Admin_Data->getearnings();
            echo $getCountry;
    
       
    }
	
	
	 public function get_earnings_for_vendor() {
		  $id=$_POST['email'];
            $this->load->model('Admin_Data');
            $getCountry = $this->Admin_Data->getearnings_for_vendor();
            echo $getCountry;
    
       
    }
		 public function get_satisfaction() {
            $this->load->model('Admin_Data');
            $getCountry = $this->Admin_Data->getsatsifaction();
			 foreach ($getCountry->result() as $row) {
                    $rows1[] = array
                        (

                        "r1" => $row->r1,
                        "r2" => $row->r2,
                       // "Mobile"=> $row->Mobile
                       // "Hsn_Description" => $row->Hsn_Description,
                       // "Igst" => $row->Igst,
                       // "Cgst" => $row->Cgst,
                      //  "Sgst" => $row->Sgst,
                    );
                }        
                echo json_encode($rows1);        
           // echo $getCountry;
    
       
    }
	public function get_rating_of_vendor() {
			$id=$_POST['email'];
            $this->load->model('Admin_Data');
            $getCountry = $this->Admin_Data->getrating_of_vendor($id);
            echo $getCountry;          
    }
	 public function get_earning_for_particular_vendor() {
            $this->load->model('Admin_Data');
            $getCountry = $this->Admin_Data->getearnings_of_vendor();
            echo $getCountry;
    
       
    }
	 public function get_customer_count11() {
            $this->load->model('Admin_Data');
            $getCountry = $this->Admin_Data->getcustcount11();
            $rowcount = $getCountry->num_rows();          
      echo $rowcount;
       
    }
	 public function get_customer_count12() {
		 $id=$_POST['email'];
            $this->load->model('Admin_Data');
            $getCountry = $this->Admin_Data->getcustcount12($id);
            $rowcount = $getCountry->num_rows();          
      echo $rowcount;
       
    }
      public function get_vendor_approval() {
            $this->load->model('Admin_Data');
            $getCountry = $this->Admin_Data->getapproval();
            $rowcount = $getCountry->num_rows();          
             echo $rowcount;
       
    }
      public function get_products_approval() {
            $this->load->model('Admin_Data');
            $getCountry = $this->Admin_Data->get_product_approval();
            $rowcount = $getCountry->num_rows();          
             echo $rowcount;
       
    }
	 public function get_products_of_vendor() {
		  $id=$_POST['email'];
            $this->load->model('Admin_Data');
            $getCountry = $this->Admin_Data->get_product_count_of_vendor($id);
            $rowcount = $getCountry->num_rows();          
             echo $rowcount;
       
    }
     function fetch_pending_vendors() 
            {              
                $this->load->model('Admin_Data');
                $user_data = $this->Admin_Data->fetch_vendors_data();      
                $rows1 = array();
                foreach ($user_data->result() as $row) {
                    $rows1[] = array
                        (

                        "Vendor_Id" => $row->Vendor_Id,
                        "Name" => $row->Name,
                        "Mobile"=> $row->Mobile
                       // "Hsn_Description" => $row->Hsn_Description,
                       // "Igst" => $row->Igst,
                       // "Cgst" => $row->Cgst,
                      //  "Sgst" => $row->Sgst,
                    );
                }        
                echo json_encode($rows1);             
        }
          function fetch_pending_vendors_products() 
            {              
                $this->load->model('Admin_Data');
                $user_data = $this->Admin_Data->fetch_vendors_data_product();      
                $rows1 = array();
                foreach ($user_data->result() as $row) {
                    $rows1[] = array
                        (

                        "product_version_name" => $row->product_version_name,
                        "product_version_id" => $row->product_version_id,
                      //  "Mobile"=> $row->Mobile
                       // "Hsn_Description" => $row->Hsn_Description,
                       // "Igst" => $row->Igst,
                       // "Cgst" => $row->Cgst,
                      //  "Sgst" => $row->Sgst,
                    );
                }        
                echo json_encode($rows1);             
        }
		function get_client_weekly(){
		  $this->load->model('Admin_Data');
                $user_data = $this->Admin_Data->get_client_wk();      
                $rows1 = array();
                foreach ($user_data->result() as $row) {
                    $rows1[] = array
                        (

                        "dt" => $row->dt,
                        "cou" => $row->WeekCount
						
                    );
                }        
                echo json_encode($rows1);          
	}
		 function fetch_customers_count() 
            {              
                $this->load->model('Admin_Data');
                $user_data = $this->Admin_Data->fetch_customers_count_data();      
                $rows1 = array();
                foreach ($user_data->result() as $row) {
                    $rows1[] = array
                        (

                        "Name" => $row->Name,
                        "Mobile" => $row->Mobile,
						 "Email" => $row->Email,
						"Address" => $row->	Address,
                      //  "Mobile"=> $row->Mobile
                       // "Hsn_Description" => $row->Hsn_Description,
                       // "Igst" => $row->Igst,
                       // "Cgst" => $row->Cgst,
                      //  "Sgst" => $row->Sgst,
                    );
                }        
                echo json_encode($rows1);             
        }
		 function fetch_customers_count_of_vendor() 
            {              
                $this->load->model('Admin_Data');
                $user_data = $this->Admin_Data->fetch_customers_count_data_of_vendor();      
                $rows1 = array();
                foreach ($user_data->result() as $row) {
                    $rows1[] = array
                        (

                        "Name" => $row->Name,
                        "Mobile" => $row->Mobile,
						"Email" => $row->Email,
						"Address" => $row->	Address,
                      //  "Mobile"=> $row->Mobile
                       // "Hsn_Description" => $row->Hsn_Description,
                       // "Igst" => $row->Igst,
                       // "Cgst" => $row->Cgst,
                      //  "Sgst" => $row->Sgst,
                    );
                }        
                echo json_encode($rows1);             
        }
        function fetch_pending_product() 
            {              
                $this->load->model('Admin_Data');
                $user_data = $this->Admin_Data->fetch_products_data();      
                $rows1 = array();
                foreach ($user_data->result() as $row) {
                    $rows1[] = array
                        (

                        "Name" => $row->Name,
                        "product_version_name" => $row->product_version_name,
                        "product_version_id" => $row->product_version_id,
                       // "Igst" => $row->Igst,
                       // "Cgst" => $row->Cgst,
                      //  "Sgst" => $row->Sgst,
                    );
                }        
                echo json_encode($rows1);             
        }
        function save_update_vendors($get_id)
            {	
              
                $this->load->model('Admin_Data');
                $user_data = $this->Admin_Data->update_vendor_data($get_id);
                $get_phone = $this->input->post('get_phone');
                $get_name = $this->input->post('get_name');                
                sendsms($get_phone, "Hi ".$get_name." You Are Successfully Approved");
             }
               function save_update_products($get_id)
            {	
                $this->load->model('Admin_Data');
                $user_data = $this->Admin_Data->update_product_data($get_id);
             }
               public function get_vendor_product_count() {
            $this->load->model('Admin_Data');
            $getCountry = $this->Admin_Data->get_product_count();
            $rowcount = $getCountry->num_rows();
            echo $rowcount;      
    }
	public function get_total_vendor_product_count() {
            $this->load->model('Admin_Data');
            $getCountry = $this->Admin_Data->get_product_total_count();
            $rowcount = $getCountry->num_rows();
             echo $rowcount;
       
    }
	 public function get_total_vendor_count() {
            $this->load->model('Admin_Data');
            $getCountry = $this->Admin_Data->getcount_of_vendor();
            $rowcount = $getCountry->num_rows();
            //echo $getCountry;
     // $rowcount = $getCountry->num_rows();
      echo $rowcount;
       
    }
	 public function get_data_for_chart() {
            $this->load->model('Admin_Data');
            $getCountry = $this->Admin_Data->get_graph_data();
            $rows1 = array();
                foreach ($getCountry->result() as $row) {
                    $rows1[] = array
                        (

                        "invoice_date" => $row->invoice_date,
                        "totalsale" => $row->totalsale,
						"name" => $row->name,						
                       "sale_type"=> $row->sale_type
                       // "Hsn_Description" => $row->Hsn_Description,
                       // "Igst" => $row->Igst,
                       // "Cgst" => $row->Cgst,
                      //  "Sgst" => $row->Sgst,
                    );
                }        
                echo json_encode($rows1);             
       
    }
	 public function get_info_for_chart() {
            $this->load->model('Admin_Data');
            $getCountry = $this->Admin_Data->get_graph_info();
            $rows1 = array();
                foreach ($getCountry->result() as $row) {
                    $rows1[] = array
                        (

                        
                        "sale" => $row->sale,
			"name" => $row->name,						
                      //  "Mobile"=> $row->Mobile
                       // "Hsn_Description" => $row->Hsn_Description,
                       // "Igst" => $row->Igst,
                       // "Cgst" => $row->Cgst,
                      //  "Sgst" => $row->Sgst,
                    );
                }        
                echo json_encode($rows1);             
       
    }
		public function get_count_for_new() {
            $this->load->model('Admin_Data');
            $getCountry = $this->Admin_Data->get_count_for_new_order();
          //  $rowcount = $getCountry->num_rows();
             echo $getCountry;
       
    }
		public function get_count_for_pending() {
            $this->load->model('Admin_Data');
            $getCountry = $this->Admin_Data->get_count_for_pending_order();
          //  $rowcount = $getCountry->num_rows();
             echo $getCountry;
       
    }
		public function get_count_for_confirm() {
            $this->load->model('Admin_Data');
            $getCountry = $this->Admin_Data->get_count_for_confirm_order();
           // $rowcount = $getCountry->num_rows();
             echo $getCountry;
       
    }
		public function get_count_for_cancel() {
            $this->load->model('Admin_Data');
            $getCountry = $this->Admin_Data->get_count_for_cancel_order();
           // $rowcount = $getCountry->num_rows();
            echo $getCountry;
       
    }
		public function get_count_for_delivered() {
            $this->load->model('Admin_Data');
            $getCountry = $this->Admin_Data->get_count_for_deliver_order();
          //  $rowcount = $getCountry->num_rows();
             echo $getCountry;
       
    }
	function fetch_feedback_messages() 
            {              
                $this->load->model('Admin_Data');
                $user_data = $this->Admin_Data->fetch_feedback_data();      
                $rows1 = array();
                foreach ($user_data->result() as $row) {
                    $rows1[] = array
                        (

                        "msg" => $row->Email,
                        "Name" => $row->Name,                      
                    );
                }   
				
                echo json_encode($rows1);             
        }
			function fetch_feedback_messages_of_vendor() 
            {      $uid = $_POST['email'];          
                $this->load->model('Admin_Data');
                $user_data = $this->Admin_Data->fetch_feedback_data_of_vendor($uid);      
                $rows1 = array();
                foreach ($user_data->result() as $row) {
                    $rows1[] = array
                        (

                        "msg" => $row->msg,
                        "Name" => $row->Name,                      
                    );
                }        
                echo json_encode($rows1);             
        }
		public function get_state_data() 
                {
                        $this->load->model('Admin_Data');
                        $getCountry = $this->Admin_Data->getState_Data();
                       foreach ($getCountry->result() as $row)
                            {
                            $data1[] = $row;
                            }
                        echo json_encode($data1);
                }
				public function get_vendors() 
                {	$city = $_POST['city'];
                        $this->load->model('Admin_Data');
                        $getCountry = $this->Admin_Data->getvendor_Data($city);
                       foreach ($getCountry->result() as $row)
                            {
                            $data1[] = $row;
                            }
                        echo json_encode($data1);
                }
				function fetch_product_details_vendor() { //
   // echo"zzz";
       $uid = $_POST['email'];
        $this->load->model('Admin_Data');
        $user_data = $this->Admin_Data->fetch_product_data_of_vendor($uid);     
      $rows1 = array();
        foreach ($user_data->result() as $row) {
            $rows1[] = array
                (
                "product_version_id" => $row->product_version_id,
                "product_id" => $row->product_id,
                "final_price_of_product" => $row->final_price_of_product,
                "product_version_name" => $row->product_version_name,
				"Hsn_code" => $row->Hsn_code,
                              
            );
        }     
        echo json_encode($rows1);
    }
	 public function get_satisfaction_of_vendor() {
			$uid = $_POST['email'];
            $this->load->model('Admin_Data');
            $getCountry['get_total'] = $this->Admin_Data->getsatsifaction_of_vendor($uid);
		echo json_encode($getCountry['get_total']);
		//	echo $getCountry['get_total']->total;
			  // echo $getCountry['get_total']->total;
    }
	 function save_update_product($product_id) {     
        $this->load->model('Admin_Data');
        $user_data = $this->Admin_Data->update_product_data_of_vendor($product_id);
    } 
	 function ajax_delete_product($c_id) {       
        $this->load->model('Admin_Data');
        $user_data = $this->Admin_Data->fetch_product_data_to_delete($c_id);                 
    
    }
     public function get_city1_new() {
      //  echo"aa";
     $city = $_POST['city'];
        
        $this->load->model('Admin_Data');
        $get_state = $this->Admin_Data->getCity_new($city);
        foreach ($get_state->result() as $row) {
            $data1[] = $row;
        }
        echo json_encode($data1);
      
    }
	 /*  	function notify_vendor()
	{ 
	
	  $Remaining = $_POST['Remaining'];
       $uid = $_POST['email'];
       $this->load->model('Admin_Data'); 
		$getCountry = $this->Admin_Data->notify_vendor($uid);      
		sendsms($getCountry,"Hi, Your".$Remaining."% orders are remaining);
     
      
	}*/
	 
}
