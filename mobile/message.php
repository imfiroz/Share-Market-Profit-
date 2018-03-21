<?php
function getDBConnect(){
	$dbms = 'mysql';
	//$host = 'localhost'; 
	$host = 'sharemarketprofits.cxehmpglmuob.ap-south-1.rds.amazonaws.com';
	$db = 'sharemar_data';
	//$user = 'sharemar_usr';
	//$pass = 'fj+iX7Q,}Z}A';
	$user = 'sharemarket_data';
	$pass = '12345678';
	$dsn = "$dbms:host=$host;dbname=$db";
	$cn=new PDO($dsn, $user, $pass);

	return $cn;
}

function closeDBConnect(){
	return null;
}

sendallfcm();
function sendallfcm()
{
	$conn=getDBConnect();
	
	$query="select tbl_customer_notification.id , tbl_customer_notification.customer_id , tbl_notification.Name , tbl_fcm.fcm_token from tbl_notification , tbl_customer_notification, tbl_fcm where tbl_fcm.user_id =tbl_customer_notification.customer_id and tbl_customer_notification.nofification_id =tbl_notification.id 
	and tbl_customer_notification.read_id =0 and tbl_notification.is_active = 1 and tbl_customer_notification.mobile_read=0";

	$qry_result=$conn->prepare($query);
	$qry_result->execute();
	
	//$row["Name"],'share market profits',$row['fcm_token']
	$data = $qry_result->fetchAll(PDO::FETCH_ASSOC);
	
	//echo $data;

	foreach ($data as $key => $value) 
	{
		 $id=$value['id'];
		 $msg=$value['Name'];
		 $token=$value['fcm_token'];
		 $title='Share Market Profits';
		
		send_sms($msg,'share market profits',$token);
		
		$query1="update tbl_customer_notification set mobile_read=1 where tbl_customer_notification.id=$id";
		$qry_result1=$conn->prepare($query1);
		$qry_result1->execute();
	
		
		//////exit();
	}
}

function send_sms($msg,$title,$key1)
{
	
//	echo $msg;
	//echo $title;
	//echo $key1;
$path_to_fcm='https://fcm.googleapis.com/fcm/send';
//$message=$_POST['message'];
//$title=$_POST['title'];

$message=$msg;
$title=$title;
//$key=$_POST['key'];

$key =$key1;//='eQ1XoNifYu4:APA91bE_UhOvYI5J5uvpllPOT_IdzGt7h74diGDhT6HZLqXH7Q027qOFpC5XnuY9hun4ZAFqt8eZ21u9Wdhs3as1z_Iu7wf29eT1d8U_dbqqwKnMWnFse1z6zpgRC7_GF4AVzUwWfymr';


//$key=//'fOAA4e5wyWs:APA91bHiMEG-spjVs2yhBVJh2pVpvYaknyxrD-r1Pgyc6BnXL3ukreOV4InNklycXsZ7P5DCoDRgHhwcj5d7ndwBQrVsIackjmokRZf_THY2gGJnHJ8I3Q9Zq--PRldBVPkHO60nNEVU';


$serverkey='AAAAT2pc7lw:APA91bHAVqT6sVvlj26HMk7-6PeOd6_IUZLg9m4UAkUXSbVVIGmXnYszm7Y6RVMoFA69kqHaJ63p_i3u-tobDHJzn4AQB-TRFWMfM_cesmr0hiF4J-NmWGeWfvmZNQQiLlTK-FnEfvH-';

 

 $headers = array(
            'Authorization: key=' . $serverkey,
            'Content-Type: application/json'
        );

 $fields = array(
            'to' => $key,
            'notification' => array('title'=>$title,'body'=>$message));
        

$payload=json_encode($fields);



 $ch = curl_init();
 
        // Set the url, number of POST vars, POST data
        curl_setopt($ch, CURLOPT_URL, $path_to_fcm);
 
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
        // Disabling SSL Certificate support temporarly
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
 
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
  $result = curl_exec($ch);
 curl_close($ch);
 
 echo "success";
}
?>