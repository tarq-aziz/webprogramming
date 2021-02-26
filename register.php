
<!DOCTYPE html>


<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>REGISTER</title>

		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

	</head>
	<body>

		<div class="container">
			<div class="row justify-content-center" style="margin:100px 0;">
				<div class="col-md-4">
					<h4>Admin Register</h4>
					<p class="message"></p>
					<form id="admin-register-form" action="insert.php" method="post">
					  <div class="form-group">
					    <label for="name">Name</label>
					    <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name" required>
					  </div>
					  <div class="form-group">
					    <label for="email">Email address</label>
					    <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" required>
					    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
					  </div>
					  <div class="form-group">
					    <label for="password">Password</label>
					    <input type="password" class="form-control" name="password" id="password" placeholder="Password"required>
					  </div>
					  <div class="form-group">
					    <label for="cpassword">Confirm Password</label>
					    <input type="password" class="form-control" name="cpassword" id="cpassword" placeholder="Password" required>
					  </div>

						<!-- <input type="hidden" name="name" value="1">
					  <button type="button" class="btn btn-primary register-btn">Register</button> -->
						
					  <input type="submit" id="register" name="regi" value="submit">

					</form>
				</div>
			</div>
		</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
		<!-- <script type="text/javascript">

		$(function(){
	$('#register').click(function(e){

		var valid = this.form.checkValidity();

		if(valid){


		var name 	= $('#name').val();
		var email	= $('#email').val();
		var password 		= $('#password').val();
		var cpassword = $('#cpassword').val();



			e.preventDefault();

			$.ajax({
				type: 'POST',
				url: 'process.php',
				data: {name: name,email: email,password: password,cpassword: cpassword},
				success: function(data){
				Swal.fire({
							'title': 'Successful',
							'text': 'Successfully',
							'type': 'success'
							})

				},
				error: function(data){
					Swal.fire({
							'title': 'Errors',
							'text': 'There were errors while saving the data.',
							'type': 'error'
							})
				}
			});


		}else{

		}





	});


});

		</script> -->

	</body>
</html>
