<?php

include("db.php");

$table=$_POST['table'];
$id =$_POST['id'];
//$col =$_POST['col'];


 $query="select * from $table where id =$id and is_active=1";
	
	//echo $query;
	$result = mysqli_query($conn,$query);
	$data=mysqli_fetch_all($result,MYSQLI_ASSOC);
	//$cou=mysqli_insert_id($result);
	//$last_id = mysqli_insert_id($conn);
	 if($data=="" || $data==null){
	    	echo json_encode(array('status'=>'400','status_message'=>'NO DATA FOUND','content'=>array()));
	  		
	    }

	    else{
	    
		
	    	echo json_encode(array('status'=>'200','status_message'=>'success','content'=>$data));
	    } #end inner If

?>