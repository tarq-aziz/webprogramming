<?php

require "connection.php";
//include "insert.php";
$email = $_POST['email'];
$pass = $_POST['password'];

$stmt = $conn->prepare("SELECT * FROM admintable where gmail = ?");

$stmt->bind_param("s", $email);
$stmt->execute();
$stmt_result = $stmt->get_result();


if ($stmt_result->num_rows > 0 ){

  $data = $stmt_result->fetch_assoc();

  if ($data['password'] == $pass) {
        echo "login successfully";
        header('location: admin.php');
        }else {
          echo '<h2>!Invalid email or password</h2><br>';

          header('location: Login.php');

        }
  }else {
    echo "<h2>rigister first</h2>";
    header('location: register.php');

}

 ?>
