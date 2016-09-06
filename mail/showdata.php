<?php

session_start();

include 'dbhandler.php';

$id = $_GET['id'];

$sql = "UPDATE grafik SET grafdata = REPLACE(grafdata, '. ', '.\r\n')";

$sql = "SELECT grafdata FROM grafik
        WHERE grafid = '$id'";  

$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

echo $row['grafdata'];

?>