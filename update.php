<?php
include('connection.php');
// session_start();
$id  = intval($_GET['id']);

if ($id  >  0) {
    //header('location: admin.php');
}

if (isset($_POST['update'])) {
   $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "UPDATE admintable
    SET name = '$name',
        gmail = '$email',
        password = '$password'
        WHERE id = $id
        LIMIT 1";

        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully!";
          //  header('location: admin.php');
        }else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }

  }else {
    //header('location: admin.php');
  }





 ?>
