<?php

$conn = mysqli_connect("localhost", "root", "", "aviditif");

if (!$conn) {
	die("Connection failed: ".mysqli_connect_error());
}