<?php

include 'dbhandler.php';

$userid = $_SESSION["userid"];

$sql = "SELECT * FROM grafik
        INNER JOIN viztype ON grafik.vizid=viztype.vizid
        INNER JOIN publikasi ON grafik.pubid=publikasi.pubid
        WHERE userid='$userid'";

$result = mysqli_query($conn, $sql);