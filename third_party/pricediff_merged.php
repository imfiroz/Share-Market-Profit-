<?php
set_time_limit(0);
ini_set("display_errors", "Off");
include 'db.php';
	include 'applogs.php';

session_start();
if(isset($_SESSION['username'])){
	$username = $_SESSION['username'];
	$user_type = $database->query("SELECT * FROM tbl_users WHERE username = '$username'");
	$row_user = $database->fetch_array($user_type);
	}else{header("Location: index.php");}
	
$cat = $_GET['cat'];
$grade = $_GET['grade'];
$size = $_GET['size'];
$type = $_GET['type'];
$date = $_GET['date'];
$round = $_GET['round'];

if($_POST['Submit']){
	
$update = $_POST['update'];
$value = $_POST['value'];
	switch($update){
			case '1':
			$select = $database->query("SELECT * FROM tbl_stock_merge WHERE stock_grade = '$grade' AND stock_size = '$size' AND stock_cat = '$cat' 
										AND stock_date = '$date' AND stock_round = '$round'");	
			break;
			case '2':
			$select = $database->query("SELECT * FROM tbl_stock_merge WHERE stock_cat = '$cat' AND stock_date = '$date' AND stock_round = '$round'");
			echo "SELECT * FROM tbl_stock_merge WHERE stock_cat = '$cat' AND stock_date = '$date' AND stock_round = '$round'";
			break;
			case '3':
			$select = $database->query("SELECT * FROM tbl_stock_merge WHERE stock_size = '$size' AND stock_date = '$date' AND stock_round = '$round'");	
			break;
			case '4':
			$select = $database->query("SELECT * FROM tbl_stock_merge WHERE stock_date = '$date' AND stock_round = '$round'");	
			break;
		}	
		
		if($type == 'add'){
			$diff = 100 - $value;
			$diffper = $diff / 100;
			while($row_stock = $database->fetch_array($select)){
				$stock_id = $row_stock['stock_id'];
				$newrate = $row_stock['stock_rate'] / $diffper;		
				$query = "UPDATE tbl_stock_merge SET stock_newrate = '$newrate' WHERE stock_id = '$stock_id'";	
				if($deddn = $database->query($query)){
					
					$log_reas_id = $stock_id;
					$log_type = "Re-Assortment";
					$log_description = "Stock Rate Changed <strong>To: </strong>".$newrate." <strong>From: </strong>".$row_stock['stock_rate'];
					$log_action = 'Add Difference';
					$log_by = $_SESSION['username'];
					
					write_mysql_log($log_type, $log_by, $log_action, $log_description, $log_reas_id, $log_invoice_id, $log_merge_details);
					
					$msg = '<span style="color:#0C0;font-weight:500;">Successfully Updated<span><br>';
					}
			}
		}
		else{
			while($row_stock = $database->fetch_array($select)){
				$stock_id = $row_stock['stock_id'];
				$dedval = ($row_stock['stock_newrate'] * $value) / 100;		
				$newrate = $row_stock['stock_newrate'] - $dedval;
				$query = "UPDATE tbl_stock_merge SET stock_newrate = '$newrate' WHERE stock_id = '$stock_id'";
				if($deddn = $database->query($query)){
					$log_reas_id = $stock_id;
					$log_type = "Re-Assortment";
					$log_description = "Stock Rate Changed <strong>To: </strong>".$newrate." <strong>From: </strong>".$row_stock['stock_newrate'];
					$log_action = 'Remove Difference';
					$log_by = $_SESSION['username'];
					
					write_mysql_log($log_type, $log_by, $log_action, $log_description, $log_reas_id, $log_invoice_id, $log_merge_details);
					$msg = '<span style="color:#F00;font-weight:500;">'.round($dedval, 2)." Successfully Deducted<span><br>";
					}	
			}
		 }
		
	}
?>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
<style>
body{
	margin-top:0 !important;font-family: "Open Sans",Arial,Helvetica,Sans-Serif;
	}
table{font-size:10pt !important;}
input[type=submit] {
background-clip: border-box;
background-color: rgb(70, 23, 180);
border-color: transparent;
color: #FFF;
}
</style>
<form action="" method="post" id="form">
  <table width="500" border="00" cellspacing="0" cellpadding="0">
    <tr>
      <td height="47" colspan="2"><h3><?php echo ucfirst($type);?> Difference</h3><?php echo $msg;?></td>
    </tr>
    <tr>
      <td width="50%" height="34">Update Value (in %)</td>
      <td width="50%"><input type="text" name="value" id="value"> 
        &nbsp;%</td>
    </tr>
    <tr>
      <td>Select Update Type</td>
      <td><table border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td><label>
            <input type="radio" name="update" value="1" id="update_0">
            Update Selected </label></td>
        </tr>
        <tr>
          <td><label>
            <input type="radio" name="update" value="2" id="update_1">
            Update Selected Category</label></td>
        </tr>
        <tr>
          <td><label>
            <input type="radio" name="update" value="3" id="update_2">
            Update Selected Size</label></td>
        </tr>
        <tr>
          <td><label>
            <input type="radio" name="update" value="4" id="update_3">
            Update Whole Catelog</label></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td height="44">&nbsp;</td>
      <td><input type="submit" name="Submit" id="Submit" value="Submit"></td>
    </tr>
  </table>
</form>