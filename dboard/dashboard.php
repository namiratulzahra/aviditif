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

    <link href="../css/viztype.css" rel="stylesheet" />
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="#" data-image="../img/sidebar-5.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

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
                    <a class="navbar-brand">Dashboard</a>
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
                <?php
                    include '../mail/showvisual.php';
                    $counter = 0;
                    while($row = mysqli_fetch_array($result)){

                        if($counter % 3 == 0) {echo "<div class='row'>";}

                        echo "
                        <div class='col-md-4'>
                            <div class='card'>
                                <div class='header'>
                                    <h4 class='title'><small>".$row['firstname']." ".$row['lastname']."</small></h4>
                                    <h5 class='title'><small>".$row['bidangdir']." - ".$row['dirname']."</small></h4>
                                    <hr style='margin-top:10px; margin-bottom: 15px;'>
                                    <h4 class='title'>".$row['graftitle']."</h4>
                                    <h5 align='left'><small><i class='fa fa-gg-circle text-warning'></i>&nbsp;<a class='text-warning'>".$row['pubbid']."</a> &mdash; ".$row['pubclass']."</small></h5>
                                </div>
                                <div class='content'>
                                    <div id='chartPreferences' class='".$row['vizclass']."'>
                                    </div>

                                    <div class='footer'>
                                        
                                        <hr style='margin-bottom: 10px;'>
                                        <div class='stats'>
                                            <p class='category'><b>Jenis Visualisasi:</b>&nbsp; ".$row['vizname']."</p>
                                            <p class='category'><b>Tahun:</b>&nbsp; ".$row['grafyear']."</p>
                                            <p class='category'><b>Publikasi No:</b>&nbsp; ".$row['grafpubno']."</p>
                                            <p class='category'><b>Download Data: </b><a href='../mail/showdata.php?id=".$row['grafid']."'>".$row['graftitle']." Tahun ".$row['grafyear']."</a></p>
                                            <hr style='margin-bottom: 10px; visibility:hidden;'>
                                            <p class='category'><b>Deskripsi:</b></p>
                                            <p class='category'><small>".$row['deskripsi']."</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>";

                        if($counter % 3 == 2) {echo "</div>";}

                        $counter++;
                    }
                ?>
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


</body>

    <!--   Core JS Files   -->
    <script src="../js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="../js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="../js/bootstrap-checkbox-radio-switch.js"></script>

	<!--  Charts Plugin -->
	<script src="../js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="../js/bootstrap-notify.js"></script>
    <link href="../css/alert-minimalist.css" rel="stylesheet" />
    
    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="../js/light-bootstrap-dashboard.js"></script>

	<script type="text/javascript">
    	$.notify({
            icon: 'glyphicon glyphicon-dashboard',
            title: 'Selamat datang di Aviditif User Dashboard!',
            message: 'Silahkan periksa atau edit hasil visualisasimu. Selain itu, kamu juga bisa melihat visualisasi lainnya di halaman ini.' ,
        },{
            type: 'minimalist',
            offset: 0,
            delay: 4000,
            offset: {
                x: 350,
                y: 0
            },
        });
	</script>

</html>
