<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Stock_Feed extends CI_Controller 
{
 	public function __construct() 
    {
		parent::__construct();

		$this->load->helper("url");
		$this->load->library('session');
		if (!$this->session->userdata('is_logged_in'))
		{
		//	$this->ctrl_logout();
		//	redirect(base_url(), 'refresh');
		}
	}
    public function index()
	{
		$script_data = $this->fetch_script_data();
		$this->load->view('vw_stock_live',compact('script_data'));
		//echo 'Hello';
	}
	public function getstock_ltp($trading_type, $script_name)
	{
		$api_data = $this->get_token();
		
		$url = 'https://api.upstox.com/live/feed/now/'.$trading_type.'/'.$script_name.'/ltp';
		//$url = 'https://api.upstox.com/live/feed/now/NSE_EQ/RELINFRA/ltp';

		$header		= array();
		$header[] 	= 'Authorization: Bearer ' . $api_data->access_token ;
		$header[] 	= 'Content-Type: application/json';
		$header[] 	= 'x-api-key: ' . $api_data->api_key;	

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
		return $result->data->ltp;
	}
	public function get_token()
	{
		$this->load->model('Stock_Token_log');
		return $this->Stock_Token_log->get_api_token();
	}
	public function fetch_script_data()
	{
		$this->load->model('Stock_Token_log');
		return $this->Stock_Token_log->get_script_data();
	}
	public function real_time_automation()
	{
		$script_data = $this->fetch_script_data();
		//$ltp = array();
		foreach($script_data as $script):
			if($script->trading_type == 1):
				$trading_type = 'nse_eq';
			elseif($script->trading_type == 2):
				$trading_type = 'nse_fo';
			elseif($script->trading_type == 3):
				$trading_type = 'nse_btst';
			else:
				$trading_type = 'nse_co';
			endif;
			$curr_ltp = $this->getstock_ltp($trading_type, str_replace(' ', '', $script->Name));
			$ltp[] = $curr_ltp;
			//echo str_replace(' ', '', $script->Name).$trading_type;echo '<br>';
			
			//Generating Result
			$this->script_result($script,$curr_ltp);
		
		endforeach;
		echo json_encode($ltp);
	}
	public function script_result( $script , $ltp)
	{
			if( $ltp >= $script->Target1 && $ltp <= $script->Target2):
				$result =  'Target 1 Achived.';
			elseif( $ltp >= $script->Target2 ):
				$result =  'All Target Achived.';
			elseif( $ltp <= $script->Toploss):
				$result = 'Stop Loss.';
			else:
				$result = 'Open.';
			endif;
		
		//*Getting Log Data 
		$this->load->model('Stock_Token_log');
		$script_log_data = $this->Stock_Token_log->fetch_log($script->id);
			//*Updaing Script Log With Result
		if($script_log_data->result == 'Open.' && $result != 'Open.'):
			$result_added = $this->Stock_Token_log->update_script_log($script_log_data->id, $result);
		elseif($script_log_data->result == 'Target 1 Achived.'):
			$result_added = $this->Stock_Token_log->update_script_log($script_log_data->id, $result);
		endif;
		
		if($result_added):
		//*Send Notification
			//Find Treading Name and Treading Type
			if( $script->trading_type == 1 ):
				$trading_type =  'EQUITY';
			elseif(	$script->trading_type == 2 ):
				$trading_type =  'FUTURE & OPTION';
			elseif(	$script->trading_type == 3 ):
				$trading_type =  'BTST';
			elseif(	$script->trading_type == 4 ):
				$trading_type =  'COMMODITY';
			endif;

			$notification_txt = $script->Name ." (".$trading_type.") - ".$result; 

			//Create Notification
			$this->load->model('Create_Notification_Data');
			$last_inserted_id = $this->Create_Notification_Data->db_save_branch_data($notification_txt);
		endif;
		
	}
}