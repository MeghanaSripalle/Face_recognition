<?php
session_start();
$studentusername = $_SESSION['studentusername'];
$studentpassword = $_SESSION['studentpassword'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "AttendanceSystem";

$conn = new mysqli($servername, $username,$password,$dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

function test_input_user($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>