<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="icon" type="image/png" href="img/favicon.ico">
    <title>Aviditif - Aplikasi Visualisasi Data Interaktif</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="font/Montserrat.css" rel="stylesheet" type="text/css">
    <link href="font/KaushanScript.css" rel='stylesheet' type='text/css'>
    <link href="font/DroidSerif.css" rel='stylesheet' type='text/css'>
    <link href="font/Roboto.css" rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link href="css/agency.css" rel="stylesheet">

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>

                <a class='navbar-brand page-scroll' href='#page-top'>
                    <?php
                    if (isset($_SESSION['userid'])) {
                        echo "<h4 href='#portfolio' style='margin-top: 1px;'> Welcome, ", $_SESSION['firstname'], " ", $_SESSION['lastname'], "</h4>";
                    } else {
                        echo "12|<b>7231</b>";
                    }
                    ?>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.php">Home</a>
                    </li>
                    <li>
                        <a class='page-scroll' href='#portfolio'>Portfolio</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="mail/signout.inc.php">Sign Out</a>
                    </li>
                </ul>
            </div>

            
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>


    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-heading">Aviditif</div>
                <div class="intro-lead-in text-muted2">Sistem Aplikasi Visualisasi Data Interaktif</div>

                <?php
                if (isset($_SESSION['userid'])) {
                    echo "<a href='#' class='page-scroll btn btn-xl'><i class='fa fa-tasks'></i> Dashboard</a>
                    <a>-----</a>
                    <a href='mail/signout.inc.php' class='page-scroll btn btn-xl'><i class='fa fa-sign-out'></i> Sign Out</a>";
                } else {
                    echo "<a href='#contact' class='page-scroll btn btn-xl'><i class='fa fa-user-plus'></i> Create Your Account</a>
                    <a>-----</a>
                    <a href='signin.php' class='page-scroll btn btn-xl'><i class='fa fa-sign-in'></i> Sign In</a>";
                }
                ?>
            </div>
        </div>
    </header>


    <!-- Portfolio Grid Section -->
    <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Graph Portfolio</h2>
                    <h3 class="section-subheading text-muted" style="margin-bottom: 5px;">Pilih jenis visualisasi yang kamu inginkan sesuai dengan jenis datamu.</h3>
                    <h3 class="section-subheading text-muted" style="margin-top: 5px;">Tidak yakin visualisasi yang tepat? Klik grafiknya, dan dapatkan informasi lebih lanjut!</h3>
                </div>
            </div>
            <div class="row">
            
                <!-- Graph 1: Population Pyramid -->
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-search fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/poppyramid-preview.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Population Pyramid</h4>
                        <p class="text-muted">Bar Chart</p>
                        <br>
                        <?php
                        if (isset($_SESSION['userid'])) {
                            echo "<a type='button' class='btn btn-primary' href='builder/builder1_poppyramid.php#builder'><i class='fa fa-plus'></i> Build Visualization</a>";
                        }
                        ?>
                    </div>
                </div>

                <!-- Graph 2 -->
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-search fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/scatterplot-preview.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Scatterplot Matrix</h4>
                        <p class="text-muted">Scatterplot</p>
                        <br>
                        <?php
                        if (isset($_SESSION['userid'])) {
                            echo "<a type='button' class='btn btn-primary' href='builder/builder1_poppyramid.php#builder'><i class='fa fa-plus'></i> Build Visualization</a>";
                        }
                        ?>
                    </div>
                </div>

                <!-- Graph 3 -->
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-search fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/bulletchart-preview.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Bullet Chart</h4>
                        <p class="text-muted">Bar Chart</p>
                        <br>
<!--                    <a type="button" class="btn btn-primary" href="builder/builder1_poppyramid.php#builder"><i class="fa fa-plus"></i> Build Visualization</a>-->
                        
                        <?php
                        if (isset($_SESSION['userid'])) {
                            echo "<a type='button' class='btn btn-primary' href='builder/builder1_poppyramid.php#builder'><i class='fa fa-plus'></i> Build Visualization</a>";
                        }
                        ?>
                    </div>
                </div>

                <!-- Graph 4 -->
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-search fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/zoomabletreemap-preview.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Zoomable Treemap</h4>
                        <p class="text-muted">Treemap</p>
                        <br>
<!--                    <a type="button" class="btn btn-primary" href="builder/builder1_poppyramid.php#builder"><i class="fa fa-plus"></i> Build Visualization</a>-->
                        
                        <?php
                        if (isset($_SESSION['userid'])) {
                            echo "<a type='button' class='btn btn-primary' href='builder/builder1_poppyramid.php#builder'><i class='fa fa-plus'></i> Build Visualization</a>";
                        }
                        ?>
                    </div>
                </div>

                <!-- Graph 5 -->
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-search fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/motionchart-preview.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Motion Chart</h4>
                        <p class="text-muted">Bubble Chart</p>
                        <br>
<!--                    <a type="button" class="btn btn-primary" href="builder/builder1_poppyramid.php#builder"><i class="fa fa-plus"></i> Build Visualization</a>-->
                        
                        <?php
                        if (isset($_SESSION['userid'])) {
                            echo "<a type='button' class='btn btn-primary' href='builder/builder1_poppyramid.php#builder'><i class='fa fa-plus'></i> Build Visualization</a>";
                        }
                        ?>
                    </div>
                </div>

                <!-- Graph 6 -->
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-search fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/motionchart-preview.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Motion Chart</h4>
                        <p class="text-muted">Bubble Chart</p>
                        <br>
<!--                    <a type="button" class="btn btn-primary" href="builder/builder1_poppyramid.php#builder"><i class="fa fa-plus"></i> Build Visualization</a>-->
                        
                        <?php
                        if (isset($_SESSION['userid'])) {
                            echo "<a type='button' class='btn btn-primary' href='builder/builder1_poppyramid.php#builder'><i class='fa fa-plus'></i> Build Visualization</a>";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; 2016 Muhammad Arif Maulana <br> All Rights Reserved</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href='https://github.com/namiratulzahra'><i class='fa fa-github'></i></a>
                        </li>
                        <li><a href='https://www.facebook.com/muh.arif.maulana'><i class='fa fa-facebook'></i></a>
                        </li>
                        <li><a href='https://marifmaulana.tumblr.com'><i class='fa fa-tumblr'></i></a>
                        </li>
                        <li><a href='mailto:marifmaulana@live.com'><i class='fa fa-envelope'></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#">Privacy Policy</a>
                        </li>
                        <li><a href="#">Terms of Use</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->

    <!-- Graph Modal 1: Population Pyramid -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <?php
                            include 'graph/graph1_poppyramid.php';
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Graph Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <h2>Project Heading</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-responsive img-centered" src="img/portfolio/startup-framework-preview.png" alt="">
                                <p><a href="http://designmodo.com/startup/?u=787">Startup Framework</a> is a website builder for professionals. Startup Framework contains components and complex blocks (PSD+HTML Bootstrap themes and templates) which can easily be integrated into almost any design. All of these components are made in the same style, and can easily be integrated into projects, allowing you to create hundreds of solutions for your future projects.</p>
                                <p>You can preview Startup Framework <a href="http://designmodo.com/startup/?u=787">here</a>.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Graph Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-responsive img-centered" src="img/portfolio/treehouse-preview.png" alt="">
                                <p>Treehouse is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. This is bright and spacious design perfect for people or startup companies looking to showcase their apps or other projects.</p>
                                <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/treehouse-free-psd-web-template/">FreebiesXpress.com</a>.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Graph Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-responsive img-centered" src="img/portfolio/golden-preview.png" alt="">
                                <p>Start Bootstrap's Agency theme is based on Golden, a free PSD website template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Golden is a modern and clean one page web template that was made exclusively for Best PSD Freebies. This template has a great portfolio, timeline, and meet your team sections that can be easily modified to fit your needs.</p>
                                <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/golden-free-one-page-web-template/">FreebiesXpress.com</a>.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Graph Modal 5 -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-responsive img-centered" src="img/portfolio/escape-preview.png" alt="">
                                <p>Escape is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Escape is a one page web template that was designed with agencies in mind. This template is ideal for those looking for a simple one page solution to describe your business and offer your services.</p>
                                <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/escape-one-page-psd-web-template/">FreebiesXpress.com</a>.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Graph Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-responsive img-centered" src="img/portfolio/dreams-preview.png" alt="">
                                <p>Dreams is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Dreams is a modern one page web template designed for almost any purpose. It’s a beautiful template that’s designed with the Bootstrap framework in mind.</p>
                                <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/dreams-free-one-page-web-template/">FreebiesXpress.com</a>.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/signup.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/agency.min.js"></script>

</body>

</html>
