<?php



include("db.php");

function send_sms($msg,$title,$key1)
{

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
}

$sqlx="select tbl_customer_notification.customer_id , tbl_notification.Name , tbl_fcm.fcm_token 
from tbl_notification , tbl_customer_notification, tbl_fcm 
where tbl_fcm.user_id =tbl_customer_notification.customer_id and tbl_customer_notification.nofification_id =tbl_notification.id and tbl_customer_notification.read_id =0 and tbl_notification.is_active = 1 and tbl_customer_notification.mobile_notification=1";

$result = mysqli_query($conn,$sqlx);


	//$data=mysqli_fetch_all($result,MYSQLI_ASSOC);
	//echo JSON_ENCODE($data);
	
	// output data of each row
 while($row = $result->fetch_assoc()) {
		//echo"aaa|";
		//echo "ngendrsaa: " . $row["Name"].$row['customer_id'].$row['fcm_token']. "<br>";
		//echo "Sanket";
      // echo "id: " . $row["Name"]. " - Name: " . $row["customer_id"]. " " . $row["fcm_token"]. "<br>";

	//$txt = "Name=$row["Name"],Phone=$row['fcm_token'],Email=$row['customer_id']";
        //$myfile1 = file_put_contents('logsaurabh_1.txt', $txt.PHP_EOL , FILE_APPEND | LOCK_EX);
//send_sms($row["Name"],'share market profits',$row['fcm_token']);
send_sms('nagendra','share market profits','fSHaf_aIPjY:APA91bGCoduVOmOLK7YC1ZLtMnt3i_v7AFf1JtLDWDDPFZ77YwvIRJF516WKRGW6vVW1b0FZZv5n7zV8RNKFWShIYtKqhMFP9r-GlH-z8Trgb0xfTT3p3sCj8yxYDnTnnFtKYQzDhIiW');
}
 $sql1="update tbl_customer_notification set mobile_notification=1 where mobile_notification=0"; 
$result = mysqli_query($conn,$sql1);
    

?>