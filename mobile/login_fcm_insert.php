<?php

include("db.php");
$user_id=$_POST['user_id'];
$fcm_token=$_POST['fcm_token'];
///$fcm_date=$_POST['fcm_date'];

$query="INSERT INTO tbl_fcm(user_id, fcm_token) VALUES ('$user_id','$fcm_token')";
 
 $result = mysqli_query($conn,$query);

$last_id = mysqli_insert_id($conn);

if (mysqli_affected_rows($conn)==1) {
		        
				echo json_encode(array('status'=>'200','status_message'=>'success','content'=>$last_id));
			}
			else{
			
			 echo json_encode(array('status'=>'404','status_message'=>'Insertion Failed'));
			
			}


?>