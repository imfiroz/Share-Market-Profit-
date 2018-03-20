<?php
set_time_limit(0);
ini_set("display_errors", "off");
include 'db.php';

	$log_type = $_GET['log_type'];
	$log_reas_id = $_GET['log_reas_id'];
	$log_merge_details = $_GET['log_merge_details'];
	$log_invoice_id = $_GET['log_invoice_id'];

	if($log_type == 'Stock Merge'){
	$where = "log_merge_details = '$log_merge_details'";
	}
	
	elseif($log_type == 'ReAssortment'){
	$where = "log_reas_id = '$log_reas_id'";
	}
	
	elseif($log_type == 'Invoice'){
	$where = "log_invoice_id = '$log_invoice_id'";
	}
	
	$sql = "SELECT * FROM app_log WHERE ".$where;
	
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
   <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>

<style>
.logtable {
	margin:0px;padding:0px;
	width:600px;
	border:1px solid #000000;
	
	-moz-border-radius-bottomleft:0px;
	-webkit-border-bottom-left-radius:0px;
	border-bottom-left-radius:0px;
	
	-moz-border-radius-bottomright:0px;
	-webkit-border-bottom-right-radius:0px;
	border-bottom-right-radius:0px;
	
	-moz-border-radius-topright:0px;
	-webkit-border-top-right-radius:0px;
	border-top-right-radius:0px;
	
	-moz-border-radius-topleft:0px;
	
	-webkit-border-top-left-radius:0px;
	border-top-left-radius:0px;
}.logtable table{
	width:100%;
	height:100%;
	margin:0px;padding:0px;
}.logtable tr:last-child td:last-child {
	-moz-border-radius-bottomright:0px;
	-webkit-border-bottom-right-radius:0px;
	border-bottom-right-radius:0px;
}
.logtable table tr:first-child td:first-child {
	-moz-border-radius-topleft:0px;
	-webkit-border-top-left-radius:0px;
	border-top-left-radius:0px;
}
.logtable table tr:first-child td:last-child {
	-moz-border-radius-topright:0px;
	-webkit-border-top-right-radius:0px;
	border-top-right-radius:0px;
}.logtable tr:last-child td:first-child{
	-moz-border-radius-bottomleft:0px;
	-webkit-border-bottom-left-radius:0px;
	border-bottom-left-radius:0px;
}.logtable tr:hover td{
	
}
.logtable tr:nth-child(odd){ background-color:#eaeaea; }
.logtable tr:nth-child(even)    { background-color:#ffffff; }.logtable td{
	vertical-align:middle;
	
	
	border:1px solid #000000;
	border-width:0px 1px 1px 0px;
	text-align:left;
	padding:6px;
	font-size:10pt;
	font-family: "Open Sans",Arial,Helvetica,Sans-Serif;
	font-weight:normal;
	color:#000000;
}.logtable tr:last-child td{
	border-width:0px 1px 0px 0px;
}.logtable tr td:last-child{
	border-width:0px 0px 1px 0px;
}.logtable tr:last-child td:last-child{
	border-width:0px 0px 0px 0px;
}
.logtable tr:first-child td{
		background:-o-linear-gradient(bottom, #e5e5e5 5%, #cccccc 100%);	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #e5e5e5), color-stop(1, #cccccc) );
	background:-moz-linear-gradient( center top, #e5e5e5 5%, #cccccc 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#e5e5e5", endColorstr="#cccccc");	background: -o-linear-gradient(top,#e5e5e5,cccccc);

	background-color:#e5e5e5;
	border:0px solid #000000;
	text-align:center;
	border-width:0px 0px 1px 1px;
	font-size:10pt;
	font-family: "Open Sans",Arial,Helvetica,Sans-Serif;
	font-weight:normal;
	color:#000000;
}
.logtable tr:first-child:hover td{
	background:-o-linear-gradient(bottom, #e5e5e5 5%, #cccccc 100%);	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #e5e5e5), color-stop(1, #cccccc) );
	background:-moz-linear-gradient( center top, #e5e5e5 5%, #cccccc 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#e5e5e5", endColorstr="#cccccc");	background: -o-linear-gradient(top,#e5e5e5,cccccc);

	background-color:#e5e5e5;
}
.logtable tr:first-child td:first-child{
	border-width:0px 0px 1px 0px;
}
.logtable tr:first-child td:last-child{
	border-width:0px 0px 1px 1px;
}
</style>
</head>

<body>
<table width="500" border="0" cellpadding="0" cellspacing="0" class="logtable">
  <tr>
    <td width="125" height="28">Action Made</td>
    <td width="125">Logged By</td>
    <td width="576">Description</td>
    <td width="100">Logged On</td>
  </tr>
  <?php $select = $database->query($sql);
  		while($row_log = $database->fetch_array($select)){?>
  <tr>
    <td width="125"><?php echo $row_log['log_action'];?></td>
    <td width="125"><?php echo $row_log['log_by'];?></td>
    <td><?php echo $row_log['log_description'];?></td>
    <td width="100"><?php echo $row_log['log_timestamp'];?></td>
  </tr>
  <?php }?>
</table>
</body>
</html>