<?php


require('connection.php');
  $id = intval($_GET['id']);

  if($id == 0){
    header('location: admin.php');
  }

  $sql = "SELECT * FROM admintable WHERE id = {$id} ";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc(); // create associative array and put all data in.



?>
  <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      	<meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>EDIT ADMINS</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    </head>
    <body>


      <div class="container">
  			<div class="row justify-content-center" style="margin:100px 0;">
  				<div class="col-md-4">
  					<h4>EDIT ADMINS</h4>
  					<p class="message"></p>
  					<form id="admin-register-form" action="update.php" method="post">
  					  <div class="form-group">
  					    <label for="name">Name</label>
  					    <input type="text" class="form-control" name="name" value="<?php echo $row['name']; ?>" id="name" placeholder="Enter Name" required>
  					  </div>
  					  <div class="form-group">
  					    <label for="email">Email address</label>
  					    <input type="email" class="form-control" name="email" value="<?php echo $row['gmail']; ?>" id="email" placeholder="Enter email" required>
  					    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  					  </div>
  					  <div class="form-group">
  					    <label for="password">Password</label>
  					    <input type="password" class="form-control" name="password" value="<?php echo $row['password']; ?>" id="password" placeholder="Password"required>
  					  </div>

  						<!-- <input type="hidden" name="name" value="1">
  					  <button type="button" class="btn btn-primary register-btn">Register</button> -->

  					  <input type="submit" id="register" name="update" value="update">

  					</form>
  				</div>
  			</div>
  		</div>


    </body>
  </html>
