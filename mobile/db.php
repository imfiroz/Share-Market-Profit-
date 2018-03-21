<?php
$servername = "localhost";
$username = "sharemar_usr";
$password = "fj+iX7Q,}Z}A";
$dbname="sharemar_data";
$conn = new mysqli($servername, $username, $password,"$dbname");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>