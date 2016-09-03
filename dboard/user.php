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
                    <a class="navbar-brand">User Profile</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
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
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Profile Details</h4>
                            </div>
                            <div class="content">
                                <form action="../mail/update.inc.php" method="POST">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input type="text" class="form-control" readonly="true" placeholder="Username" value="<?php echo $_SESSION['username'] ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Alamat Email</label>
                                                <input type="email" name="email" class="form-control" readonly="true" placeholder="Email" value="<?php echo $_SESSION['email'] ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nama Depan</label>
                                                <input type="text" name="firstname" class="form-control" readonly="true" placeholder="First Name" value="<?php echo $_SESSION['firstname'] ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nama Belakang</label>
                                                <input type="text" name="lastname" class="form-control" readonly="true" placeholder="Last Name" value="<?php echo $_SESSION['lastname'] ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Bidang</label>
                                                <input type="text" class="form-control" readonly="true" placeholder="Bidang" value="<?php echo $_SESSION['bidangdir'] ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Direktorat</label>
                                                <input type="text" class="form-control" readonly="true" placeholder="Direktorat" value="<?php echo $_SESSION['dirname'] ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <br>
                                    <!-- <button type="submit" name="update" class="btn btn-warning btn-fill pull-right">Update Profile</button> -->
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-user">
                            <div class="image">
                                <img src="../img/cardbg.jpg" alt="..."/>
                            </div>
                            <div class="content">
                                <div class="author">
                                    <a href="#">
                                    <img class="avatar border-gray" src="../img/faces/face-0.jpg" alt="..."/>
                                    <br>
                                    <?php
                                    if (isset($_SESSION['userid'])) {
                                        echo "<h4 class='title'> ", $_SESSION['firstname'], " ", $_SESSION['lastname'], "<br>
                                            <small>", $_SESSION['username'], "</small></h4>";
                                    } else {
                                        echo "ERROR";
                                    }
                                    ?>
                                    </a>
                                </div>

                                <br>
                                <h6 class="description text-center"> <small><?php echo $_SESSION['bidangdir'] ?></small> </h6>
                                <h6 class="description text-center"> <small><?php echo $_SESSION['dirname'] ?></small> </h6>
                            </div>
                            <hr>
                            <div class="text-center">
                                <button href="#" class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-twitter"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-google-plus-square"></i></button>

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
    <script src="../js/jquery-1.10.2.js" type="text/javascript"></script>
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
