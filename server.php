<?php
session_start();
$firstname='';
$lastname ='';
$username ='';
$email ='';
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
	$gender = mysqli_real_escape_string($db, $_POST['gender']);
	$age = mysqli_real_escape_string($db, $_POST['age']);
}
$query = "INSERT INTO users (fname, lname, uname, email, pword, gender, age) VALUES('$firstname', '$lastname', '$username', '$email', '$password', '$gender', '$age')";
mysqli_query($db, $query);
?>