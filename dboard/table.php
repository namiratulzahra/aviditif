<?php
session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="../img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Aviditif - User Dashboard</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
    <link href="../vendor/bootstrap/css/bootstrap.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="../css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="../css/light-bootstrap-dashboard.css" rel="stylesheet"/>

    <!--     Fonts and icons     -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="../font/Roboto.css" rel='stylesheet' type='text/css'>
    <link href="../css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="#" data-image="../img/sidebar-5.jpg">

    <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="../index.php" class="simple-text">
                    AVIDITIF DASHBOARD
                </a>
            </div>

            <div class="logo">
                <div class="content">
                    <div align="center" class="author">
                        <a href="user.php" style="color:white;">
                        <?php
                        if (isset($_SESSION['userid'])) {
                            echo "<h4 class='title' style='margin-top: 10px;'><small style='color:#bbb;'>", $_SESSION['username'], "</small><hr style='height:8pt; margin:0px; visibility:hidden;'>", $_SESSION['firstname'], " ", $_SESSION['lastname'], "</h4>";
                        } else {
                            echo "ERROR";
                        }
                        ?>
                        </a>
                    </div>
                    <h5 class="description text-center"> <small style="color:#bbb;"><?php echo $_SESSION['bidangdir'] ?></small><br><small style="color:#bbb;"><?php echo $_SESSION['dirname'] ?></small> </h5>
                </div>
            </div>

            <ul class="nav">
                <li>
                    <a href="dashboard.php">
                        <i class="pe-7s-keypad"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="table.php">
                        <i class="pe-7s-note2"></i>
                        <p>Table List</p>
                    </a>
                </li>
                <li>
                    <a href="../gallery.php#portfolio">
                        <i class="pe-7s-graph1"></i>
                        <p>Build Visualization</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand">Table List</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="../index.php">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="../mail/signout.inc.php">
                                Sign out
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Riwayat Visualisasi</h4>
                                <p class="category">Yang Telah Dibangun (Diurut Berdasarkan Waktu)</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>Share</th>
                                        <th>Jenis Visualisasi</th>
                                    	<th>Judul</th>
                                    	<th>Tahun</th>
                                    	<th>No. Publikasi</th>
                                    	<th>Bidang Publikasi</th>
                                        <th style="width: 140px;">Jenis Publikasi</th>
                                        <th style="width: 316px;">Deskripsi</th>
                                    </thead>
                                    <tbody>
                                        <form action="../mail/updatedata.php" method="POST">
                                        <?php
                                            include '../mail/tabledata.php';

                                            while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
                                            
                                            $checked ='';
                                            if($row['shareflag']==1) {
                                                $checked ="checked='checked'"; 
                                            }
                                            echo "
                                            <tr>
                                                <td>
                                                    <label class='checkbox'>
                                                        <span class='icons'>
                                                            <span class='first-icon fa fa-square-o'></span>
                                                            <span class='second-icon fa fa-check-square-o'></span>
                                                        </span>
                                                        <input type='checkbox' data-toggle='checkbox' ".$checked.">
                                                    </label>
                                                </td>
                                                <td><small>".$row['vizname']."</small></td>
                                                <td><b><small>".$row['graftitle']."<small></b></td>
                                                <td><small>".$row['grafyear']."<small></td>
                                                <td><small>".$row['grafpubno']."<small></td>
                                                <td><small>".$row['pubbid']."<small></td>
                                                <td><small>".$row['pubclass']."<small></td>
                                                <td><small>".$row['deskripsi']."<small></td>
                                            </tr>";  //$row['index'] the index here is a field name
                                            }
                                        ?>
                                        </form>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

        <footer class="footer">
            <div class="container-fluid">
                <p class="copyright pull-right">
                    Copyright &copy; 2016 <b>Muhammad Arif Maulana</b>, All Rights Reserved.
                </p>
            </div>
        </footer>


    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="../js/jquery.js" type="text/javascript"></script>
    <script src="../js/bootstrap.min.js" type="text/javascript"></script>

    <!--  Checkbox, Radio & Switch Plugins -->
    <script src="../js/bootstrap-checkbox-radio-switch.js"></script>

    <!--  Charts Plugin -->
    <script src="../js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="../js/bootstrap-notify.js"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <script src="../js/light-bootstrap-dashboard.js"></script>
</html>
