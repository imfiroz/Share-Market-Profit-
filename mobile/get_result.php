
<?php

include("db.php");

$table=$_POST['tbl_domain'];
$query="SELECT tbl_script.Name scriptname ,tbl_script.trading_type,tbl_script_log.sell_text, tbl_transaction_type.name transactionname ,tbl_script_log.buy_text,tbl_script_log.target1,tbl_script_log.target2,tbl_script_log.target3,tbl_script_log.date,tbl_script_log.result,tbl_script_log.is_active,tbl_trading_master.master_id,tbl_trading_master.Name tradename from tbl_script_log,tbl_script,tbl_trading_master,tbl_transaction_type WHERE tbl_script_log.trading_id = tbl_trading_master.master_id AND tbl_script_log.script_id=tbl_script.id AND tbl_script_log.transaction_id = tbl_transaction_type.transaction_id AND tbl_script_log.is_active ='1' AND tbl_script.is_active = '1' order by tbl_script_log.date desc ";
	
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