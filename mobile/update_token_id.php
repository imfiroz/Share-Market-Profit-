<?php

include("db.php");
	$user_id=$_POST['user_id'];
	$fcm_token=$_POST['fcm_token'];
	
	//$qry=$_POST['qry'];
	
	
	//echo "jjj";
	//$query="    UPDATE `tbl_unit_master` SET `code`='$code',`description`='$desc' where unit_master_id ='$id'";


	//$query="UPDATE`tbl_fcm` SET `fcm_token`=$fcm_token WHERE `user_id`= $user_id";
	$query="UPDATE`tbl_fcm` SET `fcm_token`='$fcm_token' WHERE user_id= '$user_id'";
	
	 //echo $query;
	$result = mysqli_query($conn,$query);
	//$qry_result=$conn->prepare($query);
	//$//qry_result->execute();
	//$data= $qry_result->rowCount();
	//$data = $qry_result->fetchAll(PDO::FETCH_ASSOC);
		// CHECKING IF RESULT IS NULL 
			if (mysqli_affected_rows($conn)>0) 
			{
				
				echo json_encode(array('status'=>'200','status_message'=>'success'));
			
		  		//$conn=closeDBConnect();
				
		    }

		    else{
				
				echo json_encode(array('status'=>'400','status_message'=>'Failed'));
			   	
			    //$conn=closeDBConnect();
		    	// echo json_encode($data);
		    	
		    } #e #end inner If
			
?>