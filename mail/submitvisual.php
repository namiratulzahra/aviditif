<?php
session_start();

include 'dbhandler.php';

$userid = $_SESSION["userid"];
$vizid = $_POST['vizid'];
$graftitle = $_POST['graftitle'];
$grafyear = $_POST['grafyear'];
$grafpubno = $_POST['grafpubno'];
$pubid = $_POST['pubid'];
$deskripsi = $_POST['deskripsi'];
$grafdata = $_POST['grafdata'];
$shareflag = $_POST['shareflag'];

$grafdataedit = nl2br($grafdata);

if (empty($graftitle)) {
	header("Location: ../signup.php?error=empty");
	exit();
} if (empty($deskripsi)) {
	header("Location: ../signup.php?error=empty");
	exit();
} else {
	$sql = "INSERT INTO grafik (graftitle, vizid, grafyear, grafpubno, grafdata, deskripsi, shareflag, userid, pubid) 
	VALUES ('$graftitle', '$vizid', '$grafyear', '$grafpubno', '$grafdataedit', '$deskripsi', '$shareflag', '$userid', '$pubid')";
	$result = mysqli_query($conn, $sql);
	header("Location: ../index.php");
}