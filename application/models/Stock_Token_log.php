<?php

class Stock_Token_log extends CI_Model 
	{            
		 
		public function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
		public function add_token($user_id, $access_token)
		{
			date_default_timezone_set('Asia/Kolkata');  
			$date = date('Y-M-d h:i:s A', time());
			$this->db->insert('stock_api', ['vendor_id' => $user_id, 'api_key' => '3tAI6YEbd48Hqw5zEV2YM9brEDNaps4V7dRcblQM', 'access_token' => $access_token, 'date' => $date]);
		}
		
	}