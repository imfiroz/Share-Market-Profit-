<?php

include("db.php");

$customerid=$_POST['customer_id'];
$showall=$_POST['showall'];

if($showall ==0){
$query="SELECT tbl_notification.Name, tbl_notification.date ,tbl_notification.is_active, tbl_customer_notification.customer_id,tbl_customer_notification.read_id from tbl_notification inner join tbl_customer_notification on tbl_notification.id=tbl_customer_notification.nofification_id where tbl_notification.is_active ='1' and tbl_customer_notification.read_id='0'
and customer_id =$customerid order by tbl_notification.id desc ";
}
else{
	$query="SELECT tbl_notification.Name, tbl_notification.date ,tbl_notification.is_active, tbl_customer_notification.customer_id,tbl_customer_notification.read_id from tbl_notification inner join tbl_customer_notification on tbl_notification.id=tbl_customer_notification.nofification_id where tbl_notification.is_active ='1' 
and customer_id =$customerid order by tbl_notification.id desc  ";
}
		
		//echo $query;
	$result= mysqli_query($conn,$query);
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