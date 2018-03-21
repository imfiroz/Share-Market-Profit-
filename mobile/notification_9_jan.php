<?php
include("db.php");

 // $table=$_POST['table'];
 // $id=$_POST['id'];
 // $col =$_POST['read_id'];
  
 
	  
	  
	  
	  
  
  $query="UPDATE tbl_customer_notification SET `read_id`='1' ";
  $result = mysqli_query($conn,$query);
  
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

  
  
  
  