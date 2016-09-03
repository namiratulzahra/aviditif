<?php

include 'dbhandler.php';

$sql = "SELECT * FROM grafik
        INNER JOIN  viztype     ON  grafik.vizid  =  viztype.vizid
        INNER JOIN  publikasi   ON  grafik.pubid  =  publikasi.pubid
        INNER JOIN  users       ON  grafik.userid =  users.userid
        INNER JOIN  direktorat  ON  users.dirid   =  direktorat.dirid
        WHERE grafik.shareflag = '1'";

$result = mysqli_query($conn, $sql);

?>