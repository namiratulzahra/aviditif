<?php
	
session_start();

include 'dbhandler.php';

// Check for empty fields
if(empty($_POST['firstname'])    ||
   empty($_POST['lastname'])     ||
   empty($_POST['username'])     ||
   empty($_POST['email'])  		 ||
   empty($_POST['password'])  	 ||
   empty($_POST['dirid'])  		 ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))

	$dummy = $_POST['dummy'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$dirid = $_POST['dirid'];
	
	//hashing pass dengan bcrypt
	$hashpass = password_hash($password, PASSWORD_DEFAULT);

	$sql = "INSERT INTO users (firstname, lastname, username, email, password, dirid)
	VALUES ('$firstname', '$lastname', '$username', '$email', '$hashpass', '$dirid')";
	$result = mysqli_query($conn, $sql);
	header("Location: ../signin.php");
{
	echo "Error!";
}
	   
?>
