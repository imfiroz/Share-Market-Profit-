<?php
include("db.php");
$fcm_token=$_POST["fcm_token"];
$id=$_POST["client_id"];

$sql="insert into fcm_info values ('".$fcm_token."','".$id."')";
mysqli_query($con,$sql);
mysqli_close($con);
print(json_encode("data inserted"));
?>