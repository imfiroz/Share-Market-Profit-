<?php
class Stock_Live extends CI_Controller {
 
	public function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
	}

	public function index()
	{
		$url = "https://api.upstox.com/index/oauth/token";

		/*replace below values with actual one*/
		//$code = "be8de760fcb474b423c02553680767ff252838e0";
		$code = $_GET['code'];
		$api_key = "3tAI6YEbd48Hqw5zEV2YM9brEDNaps4V7dRcblQM";
		$api_secret = "jt781oygob";
		$redirect_uri = base_url() ."Stock_Live";
		//$redirect_url = "http://13.127.87.49/sharemarketprofit/Stock_Live";

		$data = array(
			"code" => $code,
			"grant_type" => "authorization_code",
			"redirect_uri" => $redirect_uri
		);

		$data_string = json_encode($data);

		/*POST request*/
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
		curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
		curl_setopt($ch, CURLOPT_USERPWD, $api_key . ":" . $api_secret);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(
			'Content-Type: application/json',
			'x-api-key: ' . $api_key,
			'Content-Length: ' . strlen($data_string)
		));

		$result = curl_exec($ch);
		$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		$err = curl_error($ch);
		curl_close($ch);

		/*if cURL fail echo error*/
		if ($httpcode == 0)
			{
			$data = array(
				"Status" => "Error",
				"Message" => $err
			);
			$data_string = json_encode($data);
			echo $data_string;
			return;
			}
		/*if Access Token Generated */
		if ( $_GET['code'] ):
			$access_token = json_decode($result);
			$this->load->model('Stock_Token_log');
			echo  $this->Stock_Token_log->add_token($access_token->access_token);
			echo "<script type=\"text/javascript\" charset=\"utf-8\">window.self.close()</script>";
		endif;
		
		
		
	}

}

