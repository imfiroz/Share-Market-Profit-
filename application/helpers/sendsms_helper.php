<?php
function sendsms($number, $message_body, $return = '0') {

$sender = 'astricksl'; // Need to change

$smsGatewayUrl ='http://www.webpostservice.com/sendsms/sendsms.php';
//'http://www.webpostservice.com/sendsms/sendsms.php?username=astricksl&password=342961&type=TEXT&sender=REYANK&mobile=9967981538&message=xxxxxx';

$apikey = '62q3z3hs4941mve32s9kf10fa5074n7'; // Need to change

$textmessage = urlencode($message_body);

$api_element = '/api/web/send/';
//$mobileno='9967981538';
//$api_params = $api_element.'?apikey='.$apikey.'&username='.$sender.'&mobile='.$number.'&message='.$textmessage;
$api_params='?username='.$sender.'&password=342961&type=TEXT&sender=REYANK&mobile='.$number.'&message='.$textmessage;
$smsgatewaydata = $smsGatewayUrl.$api_params;
$url = $smsgatewaydata;
$ch = curl_init();
curl_setopt($ch, CURLOPT_POST, false);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); $output = curl_exec($ch);
curl_close($ch);
if(!$output){ $output = file_get_contents($smsgatewaydata); }

//if($return == '1'){ return $output; }else{ //echo "Sent"; }
//exit;
}
?>