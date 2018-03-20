<?php
function write_mysql_log($log_type, $log_by, $log_action, $log_description, $log_reas_id, $log_invoice_id, $log_merge_details){
  global $database;
    
  // Escape values
  $log_type    		= $database->escape_value($log_type);
  $log_by 			= $database->escape_value($log_by);
  $log_action 		= $database->escape_value($log_action);
  $log_description 	= $database->escape_value($log_description);
  $log_reas_id 		= $database->escape_value($log_reas_id);
  $log_invoice_id 	= $database->escape_value($log_invoice_id);
  $log_merge_details 	= $database->escape_value($log_merge_details);
  $log_timestamp 	= date('Y-m-d H:i:s');
 
  // Construct query
  $sql = "INSERT INTO app_log(log_type, log_action, log_description, log_by, log_reas_id, log_invoice_id, log_merge_details, log_timestamp) 
  		  VALUES('$log_type', '$log_action', '$log_description', '$log_by', '$log_reas_id', '$log_invoice_id', '$log_merge_details', '$log_timestamp')";
 
  // Execute query and save data
  $result = $database->query($sql);
 
  if($result) {
    return array(status => true);  
  }
  else {
    return array(status => false, message => 'Unable to write to the database');
  }
}
?>