<?php

session_start();

if(isset($_SESSION['userame']))
{
	$_SESSION['msg'] = " PLEASE LOG IN FIRST";
	header("location: login.php");
}

if(isset($_GET['logout']))
{
	session_destroy();
	unset($_SESSION['username']);
	header("location: login.php");
	

}


?>

<!DOCTYPE html>
<html>
<head>
	<title>HOME PAGE</title>
</head>


<body>
	<h1> This Is The HOME PAGE </h1>
	<?php
	if(isset($_SESSION['success'])) : ?>
	
		<div>
			<h3>
			
				<?php
	
					echo $_SESSION['success'];
					unset($_SESSION['success']);
				?>	
			</h3>
		</div>
	 <?php endif ?>

<?php if(isset($_SESSION['username'])) : ?>
	<h3>WELCOME <strong> <?php echo $_SESSION['username']; ?> </strong></h3>

	<h1><button><a href="index.php?logout='1'"></a></button><h1>
<?php endif ?>

</body>
</html>
































