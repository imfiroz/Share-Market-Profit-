<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Log_Master extends CI_Controller 
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
		$this->load->view('log_master');
	}
    public function ctrl_logout() 
	{
        $this->session->sess_destroy();
    }
    public function fetch_transaction_details()
	{
		$this->load->model('Log_Data');
		$user_data = $this->Log_Data->getlog_details();
		echo json_encode($user_data);
	}
	public function script() 
	{
		$this->load->model('Log_Data');
		$getCountry = $this->Log_Data->script();
		foreach ($getCountry->result() as $row)
		{
			$data1[] = $row;
		}
		return json_encode($data1);
		
	}
	public function trading() 
	{
		$this->load->model('Log_Data');
		$getCountry = $this->Log_Data->trading();

		echo json_encode($getCountry);
	}
	public function transaction() 
	{
		$this->load->model('Log_Data');
		$getCountry = $this->Log_Data->transaction();
		foreach ($getCountry->result() as $row)
			{
			$data1[] = $row;
			}
		echo json_encode($data1);
	}
	public function script1() 
	{
		$id = $_POST['city'];
		$this->load->model('Log_Data');
		$getCountry = $this->Log_Data->script1($id);
		foreach ($getCountry->result() as $row)
			{
			$data1[] = $row;
			}
		echo json_encode($data1);
	}
	function log_data()
	{
		$this->load->model('Log_Data');
		$last_inserted_id = $this->Log_Data->db_save_log_data();    
		if($last_inserted_id==0)
		{
			echo 0;
		}
       	else{echo 1;}  
    }
	function ajax_edit_log($c_id) 
	{
		$this->load->model('Log_Data');
		$user_data = $this->Log_Data->fetch_data_log($c_id);              
		echo json_encode($user_data);
	}
	function update_records($hsn_id)
	{	
		$this->load->model('Log_Data');
		$user_data = $this->Log_Data->update_re_data($hsn_id);
		if($user_data==0){
			echo 0;
		}
		else{
			echo 1;
		}
	 }
	function ajax_delete_details($c_id)
	{ 
		$this->load->model('Log_Data');
		$user_data = $this->Log_Data->delt_data($c_id); 
		if($user_data==0){
		echo 0;
		}
		else{
		echo 1;
		}
	}
	
	///****API Function ****//
	public function stock_data_live()
	{
		$API_KEY = "3tAI6YEbd48Hqw5zEV2YM9brEDNaps4V7dRcblQM";
		$Access_token = "b8b49c5ae286e1b51045fda448b9c4a4e01e1bd7";

		$url = 'https://api.upstox.com/live/feed/now/NSE_EQ/BHARATFIN/ltp';

		
		$header		= array();
		$header[] 	= 'Authorization: Bearer ' . $Access_token ;
		$header[] 	= 'Content-Type: application/json';
		$header[] 	= 'x-api-key: ' . $API_KEY;	

		$ch = curl_init($url);


		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);


		curl_setopt($ch, CURLOPT_HTTPHEADER, $header);	
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);    
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false); 
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);  
		//curl_setopt($curl, CURLOPT_TIMEOUT_MS, 2000);

		$server_output = curl_exec ($ch);
		curl_close ($ch);
		$result = json_decode($server_output);
		//echo '<pre>';
		//print_r($result);
		echo $ltp = json_encode($result->data->ltp);
		
		//echo $ltp = rand(429,445);
		echo '<br>';
		//$str = "Paneer Pakoda dish";
		//echo str_replace(' ','',$str);
		$this->load->model('View_Script_Data');
        $user_data = $this->View_Script_Data->fetch_Script_Data();
		$target_data = $user_data->result();
		//print_r($target_data);
		echo "Target 1 :" . $target_data[0]->Target1 ; 
		echo "<br>";
		echo "Target 2 :" . $target_data[0]->Target2 ;
		echo "<br>";
		echo "Stop Loss :" . $target_data[0]->Toploss ;
		echo "<br><br><br>";
		if (   $ltp >= $target_data[0]->Target1 && $ltp < $target_data[0]->Target2 ) :
			echo "Result 1 Target Achived" . $target_data[0]->Target1. " " . $ltp;
		elseif( $ltp >= $target_data[0]->Target2 ):
			echo "Result 2 Target Achived" . $target_data[0]->Target2 . " " . $ltp;	  
		elseif($ltp >= $target_data[0]->Toploss ):
			echo "Result Stop Loss";
		endif;
		
	}
	
	//End 
	
	
}
?>