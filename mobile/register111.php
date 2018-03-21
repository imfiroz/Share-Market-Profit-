<?php

include("db.php");
$name=$_POST['name'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];               
  
  $query="SELECT * FROM `tbl_vendor` where Mobile='$mobile' ";
  $result1 = mysqli_query($conn,$query );
  
  
if(mysqli_num_rows($result1) > 0){

 echo json_encode(array('status'=>'400','status_message'=>'Already exsist','content'=>array()));
 
 }
  else{
 $query="INSERT INTO `tbl_vendor`( `Name`, `Mobile`, `Email`) VALUES ('$name','$mobile','$email')";
 
 $result = mysqli_query($conn,$query);
 
 $last_id = mysqli_insert_id($conn);

if (mysqli_affected_rows($conn)==1) {
		        
				echo json_encode(array('status'=>'200','status_message'=>'success','content'=>$last_id));
			}
			else{
			
			 echo json_encode(array('status'=>'404','status_message'=>'Insertion Failed'));
			
			}
  }
			
			?>