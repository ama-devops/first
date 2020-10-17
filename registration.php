<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body>
	<div class="container">
	
		<div class="head">

		<h1>Register</h1>
	
		</div>

		<form action="registration.php" method="POST">

			<div>

				<label for="username">Username : </label>
				<input type="text" name="username" required>
			
			</div>


			<div>
				<label for="email">Email : </label>
				<input type="email" name="email" required>

			</div>
			

			<div>
				<label for="password">Password : </label>
				<input type="password" name="password_1" required>
			</div>


			<div>
				<label for="password">Comfirm Password</label>
				<input type="password" name="password_2" required>
			</div>
		
			
			<button type="submit" name="reg_user">Sumit</button>
		
			<p>Already user?<a href="login.php"><b> click here</b></a></p>
		</form>

	</div>
</center>




</body>
</html>
