<?php
session_start();

include 'dbhandler.php';

$shareflag = $_SESSION["userid"];

$sql = "UPDATE grafik
        INNER JOIN  viztype     ON  grafik.vizid  =  viztype.vizid
        INNER JOIN  publikasi   ON  grafik.pubid  =  publikasi.pubid
        INNER JOIN  users       ON  grafik.userid =  users.userid
        INNER JOIN  direktorat  ON  users.dirid   =  direktorat.dirid";

$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

