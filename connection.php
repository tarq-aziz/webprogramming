<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cartoon";


$conn = new mysqli($servername,  $username, $password, $dbname);

if ($conn->connect_error) {
  die("connection Failled: " . $conn->connect_error);
}

 ?>
