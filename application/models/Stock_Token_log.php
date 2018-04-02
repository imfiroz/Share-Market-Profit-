<?php

class Stock_Token_log extends CI_Model 
	{            
		 
		public function __construct()
		{
			date_default_timezone_set('Asia/Kolkata');
			parent::__construct();
			$this->load->database();
		}
		public function add_token($user_id, $access_token)
		{
			  
			$date = date('Y-M-d h:i:s A', time());
			$data = ['vendor_id' => $user_id, 'api_key' => '3tAI6YEbd48Hqw5zEV2YM9brEDNaps4V7dRcblQM', 'access_token' => $access_token, 'date' => $date, 'is_active' => 1];
			
			return $this->db
						->where("vendor_id", $user_id)
						->update("stock_api", $data);
		}
		public function get_api_token()
		{
			$query = $this->db->get('stock_api');
			return $query->row();
		}
		public function get_script_data()
		{
			$query = $this->db
						->where('is_active', '1')
						->get('tbl_script');
			//echo '<pre>';
			//print_r($query->result()); exit;
			return $query->result();
			
		}
		public function fetch_log($script_id)
		{
			//**Getting with script_id script log
			$query = $this->db
						->where('script_id', $script_id)
						->get('tbl_script_log');
		    return $query->row();
					 
		}
		function update_script_log($id, $result)
		{
			//*Updating Script log with result
			$date = date('Y-M-d h:i:s A', time());
			
			$this->db->where('id', $id)
						->update("tbl_script_log", ['date' => $date, 'result' => $result, 'is_active' => 1]);                   
			return $this->db->affected_rows();
		}
		function inactive_script($id)
		{
			//*Updating Script with is_active = 0
			$this->db->where('id', $id)
						->update("tbl_script", ['is_active' => 0]);                   
			return $this->db->affected_rows();
		}
		
	}