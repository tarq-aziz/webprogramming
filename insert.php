<?php
  //session_start();

  require "connection.php";
$data = $_POST;
if (isset($_POST['regi'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $cpass = ($_POST['cpassword']);





    if ($pass < 3 && $cpass < 3) {
    print "password shoud be more than 3 charachter";

          if ($data['password'] !== $data['cpassword']) {

         die('Password and Confirm password should match!');

          }

    }else{


        $sql=mysqli_query($conn,"SELECT * FROM admintable where gmail='$email'");
        if(mysqli_num_rows($sql)>0)
        {
            echo "Email Id Already Exists";

        	exit();

        }else{

          $sql = "INSERT INTO admintable (name, gmail, password)
          VALUES ('$name', '$email', '$pass')";

          if ($conn->query($sql) == TRUE) {
            echo "New record created successfully";
            header('localhost: login.php');
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }

        }







    }



}

  $conn->close();


 ?>
