<?php




  include "connection.php";
  $id  =  intval($_GET['id']);


$sql = "DELETE from admintable WHERE id={$id}";
if($conn->query($sql) === TRUE){
  echo "deleted successfully ";
 header('location: admin.php');
}else {
  "Error :" . $conn->error;
}

 ?>
