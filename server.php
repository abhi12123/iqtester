<?php
session_start();
$firstname='';
$lastname ='';
$username ='';
$email ='';
$password_1='';
$password='';
$gender = '';
$age ='';
$db=mysqli_connect('localhost','abhinav','abhi','iqtester');
if(isset($_POST['signup'])){
	$firstname = mysqli_real_escape_string($db, $_POST['firstname']);
	$lastname = mysqli_real_escape_string($db, $_POST['lastname']);
	$username = mysqli_real_escape_string($db, $_POST['username']);
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$password = mysqli_real_escape_string($db, $_POST['password']);
	$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
	$gender = mysqli_real_escape_string($db, $_POST['gender']);
	$age = mysqli_real_escape_string($db, $_POST['age']);
	
	if(empty($firstname) or empty($lastname) or empty($username) or empty($email) or empty($password) or empty($password_1) or empty($age) ){
		array_push($errors,"Some fields are empty");
	}
	else if($password_1 != $password){
		array_push($errors, "The two passwords do not match");
	}
	$user_check= "SELECT * FROM users WHERE uname='$username' OR email='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check);
    $user = mysqli_fetch_assoc($result);
  
    if ($user) { 
		if ($user['uname'] === $username) {
			array_push($errors, "Username already exists");
		}
		if ($user['email'] === $email) {
			array_push($errors, "email already exists");
		}
	}
	if (count($errors) == 0) {
		$password = md5($password_1);
		$query = "INSERT INTO users (fname,lname,uname,email,pword) VALUES('$firstname','$lastname','$username','$email', '$password')";
		mysqli_query($db, $query);
		$_SESSION['username'] = $username;
		$_SESSION['success'] = "You are now logged in";
		header('location: iqtester.php');
	}
}

if (isset($_POST['login'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM users WHERE uname='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: index.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}
?>