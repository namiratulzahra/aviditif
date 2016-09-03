<?php

session_start();

include 'dbhandler.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username='$username'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$hash_pwd = $row['password'];
$hash = password_verify($password, $hash_pwd);

if ($hash) {
	$sql = "SELECT * FROM users INNER JOIN direktorat ON users.dirid=direktorat.dirid WHERE username='$username' AND password='$hash_pwd'";
	$result = mysqli_query($conn, $sql);

	if (!$row = mysqli_fetch_assoc($result)) {
		echo "Your username or password is incorrect!";
	} else {	
		$_SESSION['userid'] = $row['userid'];
		$_SESSION['username'] = $row['username'];
		$_SESSION['firstname'] = $row['firstname'];
		$_SESSION['lastname'] = $row['lastname'];
		$_SESSION['email'] = $row['email'];
		$_SESSION['dirid'] = $row['dirid'];
		$_SESSION['dirname'] = $row['dirname'];
		$_SESSION['bidangdir'] = $row['bidangdir'];
	}

	header("Location: ../index.php");
} else {
	echo "try again, handsome!";
}

?>
