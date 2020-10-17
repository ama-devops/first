<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body>
	<div class="container">
	
		<div class="head">

		<h2>Register<h/h2>
	
		</div>

		<form action="login.php" method="post">

			<div>

				<label for="username">Username : </label>
				<input type="text" name="username" required>
			
			</div>


			<div>
				<label for="password">Password : </label>
				<input type="password" name="password_1" required>
			</div>
		
			
			<button type="submit" name="login_user"> CLICK HERE</button>
		
			<p>New User?<a href="registration.php."><b>click here</b></a></p>
		</form>

	</div>




</body>
</html>
