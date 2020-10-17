<?php

session_start();

//initializing variables

$username = "";
$email = "";
$password_1 = "";
$password_2 = "";

$errors = array();

//connect to the data base

$db = mysqli_connect('localhost','root','','practice') or die("could not connect to database");


//register user

$username = mysqli_real_escape_string($db, $_POST['$username']);
$email = mysqli_real_escape_string($db, $_POST['email']);

$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

// form validation


if(empty($username)) { array_push($errors, "username is required"); }

if(empty($email))  {array_push($errors, "email is required"); }

if(empty($password_1))  {array_push($errors, "password is required"); }

if($password_1 != $password_2) {array_push($errors, "Password do not match");}


//check db for existing user name with same username

$user_check_query = "SELECT * FROM user WHERE username = '$username' or email = '$email' LIMIT 1";


$results = mysqli_query($db, $user_check_query);
$user = mysqli_fetch_assoc($results);

if($user) {

	if($user['username'] === $username) {array_push($errors, "Username already exists");}
	if($user['email'] === $email) {array_push($errors, "email already been used");}

}


// Register the user if no error occur


if(count($errors) === 0)
{
	$password = md5($password_1); // encrypt passwod
	print $password;
	$query = "INSERT INTO user (username, email, password) VALUES('$username','$email','$password')";
	mysqli_query($db,$query);
	$_SESSION['username'] = $username;
	$_SESSION['success'] = "YOU ARE LOGGED IN";
	
	header('location: index.php');

}
//login user

if(isset($_POST['login_user'])) {

	$username = mysqli_real_escape_string($db, $_POST['username']);
	$password = mysqli_real_escape_string($db, $_POST['password_1']);
}

?>
