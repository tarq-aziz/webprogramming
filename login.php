<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title> LOGIN  </title>

  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

</head>

<body>
  <div class="container">
  	<div class="row justify-content-center" style="margin:100px 0;">
  		<div class="col-md-4">
  			<h4>Admin Login</h4>
  			<p class="message"></p>
  			<form id="admin-login-form" action="admin_login.php" method="post">
  			  <div class="form-group">
  			    <label for="email">Email address</label>
  			    <input type="email" class="form-control" name="email" id="email"  placeholder="Enter email">
  			    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  			  </div>
  			  <div class="form-group">
  			    <label for="password">Password</label>
  			    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
  			  </div>
  			  <input type="submit" name="admin_login" value="login">
  			  <!-- <button type="button" class="btn btn-primary login-btn">Submit</button> -->
  			</form>
  		</div>
  	</div>
  </div>



</body>
</html>
