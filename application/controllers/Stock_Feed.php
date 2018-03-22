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
           		$this->ctrl_logout();
            	redirect(base_url(), 'refresh');
            }
    }
    public function index()
	{
		$this->load->view('vw_stock_live');
	}
	public function getstock_ltp($trading_type, $name)
	{
		$API_KEY = "3tAI6YEbd48Hqw5zEV2YM9brEDNaps4V7dRcblQM";
		$Access_token = "800d7dceee2cf14535ba2d42582c16e7e48c824c";

		$url = 'https://api.upstox.com/live/feed/now/nse_eq/RELINFRA/ltp';

		$data		= array();

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
		echo '<pre>';
		print_r($result);
	}
	public function get_token()
	{
		$this->load->model('Stock_Token_log');
		$api_data = $this->Stock_Token_log->get_api_token();
		print_r($api_data);
	}
}