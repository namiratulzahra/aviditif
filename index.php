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

                <?php
                if (isset($_SESSION['userid'])) {
                    echo "<li class='hidden'>
                        <a href='#page-top'></a>
                    </li>
                    <li>
                        <a class='page-scroll' href='#about'>How It Works</a>
                    </li>                  
                    <li>
                        <a class='page-scroll' href='#portfolio'>Portfolio</a>
                    </li>
                    <li>
                        <a href='mail/signout.inc.php'>Sign Out</a>
                    </li>";
                } else {
                    echo "<li class='hidden'>
                        <a href='#page-top'></a>
                    </li>
                    <li>
                        <a class='page-scroll' href='#about'>How It Works</a>
                    </li>
                    <li>
                        <a class='page-scroll' href='#portfolio'>Portfolio</a>
                    </li>
                    <li>
                        <a class='page-scroll' href='#services'>Services</a>
                    </li>
                    <li>
                        <a class='page-scroll' href='#team'>Dev</a>
                    </li>
                    <li>
                        <a class='page-scroll' href='#contact'>Sign Up</a>
                    </li>";
                }
                ?>
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
                    echo "<a href='dboard/dashboard.php' class='page-scroll btn btn-xl'><i class='fa fa-tasks'></i> Dashboard</a>
                    <a>-----</a>
                    <a href='mail/signout.inc.php' class='btn btn-xl'><i class='fa fa-sign-out'></i> Sign Out</a>";
                } else {
                    echo "<a href='#contact' class='page-scroll btn btn-xl'><i class='fa fa-user-plus'></i> Create Your Account</a>
                    <a>-----</a>
                    <a href='signin.php' class='btn btn-xl'><i class='fa fa-sign-in'></i> Sign In</a>";
                }
                ?>
            </div>
        </div>
    </header>


    <!-- About Section -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">How To <a>Aviditif</a> ?</h2>
                    <h3 class="section-subheading text-muted">Ikuti langkah mudah berikut ini untuk memulai membangun visualisasi data impianmu!</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/1.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>STEP 1</h4>
                                    <h4 class="subheading">Daftarkan Dirimu!</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Buat akun barumu dengan mengklik tombol <br>"SIGN UP" pada pojok kanan atas (<i>header</i>). Masukkan data dirimu pada form yang tersedia.</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/2.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>STEP 2</h4>
                                    <h4 class="subheading">Pilih Visualisasi yang Kamu Inginkan</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted"><a><b>Aviditif</b></a> menyediakan berbagai macam visualisasi sesuai kebutuhan kamu. Bingung memilih visualisasi yang tepat? Tenang saja, informasi selalu tersedia untuk kamu!</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/3.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>STEP 3</h4>
                                    <h4 class="subheading">Masukkan Data</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Masukkan data sesuai dengan format yang tersedia. Atur sesuai dengan kebutuhanmu.</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/4.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>STEP 4</h4>
                                    <h4 class="subheading">Simpan dan Sebarkan!</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Selamat, kamu baru saja berpartisipasi membangun dunia yang lebih baik dengan visualisasi data! Kamu dapat menyimpan visualisasi tersebut, atau menyebarkannya kepada teman-temanmu.</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <h4>Rinse
                                    <br>and
                                    <br>Repeat!</h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


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
                            echo "<a type='button' class='btn btn-primary' href='builder/builder2_scatterplotmat.php#builder'><i class='fa fa-plus'></i> Build Visualization</a>";
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
                        <img src="img/portfolio/boxplot-preview.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Box Plot</h4>
                        <p class="text-muted">Box Plot</p>
                        <br>
<!--                    <a type="button" class="btn btn-primary" href="builder/builder1_poppyramid.php#builder"><i class="fa fa-plus"></i> Build Visualization</a>-->
                        
                        <?php
                        if (isset($_SESSION['userid'])) {
                            echo "<a type='button' class='btn btn-primary' href='builder/builder3_boxplot.php#builder'><i class='fa fa-plus'></i> Build Visualization</a>";
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
                        <img src="img/portfolio/chorddiagram-preview.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Chord Diagram</h4>
                        <p class="text-muted">Chord Diagram</p>
                        <br>    
                        <?php
                        if (isset($_SESSION['userid'])) {
                            echo "<a type='button' class='btn btn-primary' href='builder/builder4_chorddiagram.php#builder'><i class='fa fa-plus'></i> Build Visualization</a>";
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
                        <img src="img/portfolio/bulletchart-preview.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Bullet Chart</h4>
                        <p class="text-muted">Bar Chart</p>
                        <br>
                        <?php
                        if (isset($_SESSION['userid'])) {
                            echo "<a type='button' class='btn btn-primary' href='builder/builder5_bulletchart.php#builder'><i class='fa fa-plus'></i> Build Visualization</a>";
                        }
                        ?>
                    </div>
                </div>

                <!-- Graph 6 -->
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="<?php
                            if (isset($_SESSION['userid'])) {
                                echo "gallery.php#portfolio";
                            }
                        ?>" class="portfolio-link">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-arrow-right fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/dreams.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>..and many more!</h4>
                        <p class="text-hidden">.</p>
                        <br>
                        <?php
                        if (isset($_SESSION['userid'])) {
                            echo "<a type='button' class='btn btn-primary-gray' href='gallery.php#portfolio'><i class='fa fa-arrow-right'></i> More Visualization!</a>";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Services Section -->
    <?php
    if (isset($_SESSION['userid'])) {
    } else {
        echo "<section id='services'>
        <div class='container'>
            <div class='row'>
                <div class='col-lg-12 text-center'>
                    <h2 class='section-heading'>Services</h2>
                    <h3 class='section-subheading text-muted'>Mengapa kamu sebaiknya menggunakan <a><b>Aviditif</b></a> untuk membangun visualisasi datamu?</h3>
                </div>
            </div>
            <div class='row text-center'>
                <div class='col-md-4'>
                    <span class='fa-stack fa-4x'>
                        <i class='fa fa-circle fa-stack-2x text-primary'></i>
                        <i class='fa fa-group fa-stack-1x fa-inverse'></i>
                    </span>
                    <h4 class='service-heading'>Friendly User Interface</h4>
                    <p class='text-muted'>Memberikan user interface yang user friendly, lebih ringkas namun tepat sasaran, lebih informatif, dan tidak membingungkan.</p>
                </div>
                <div class='col-md-4'>
                    <span class='fa-stack fa-4x'>
                        <i class='fa fa-circle fa-stack-2x text-primary'></i>
                        <i class='fa fa-lightbulb-o fa-stack-1x fa-inverse'></i>
                    </span>
                    <h4 class='service-heading'>Visualization Builder and Helper</h4>
                    <p class='text-muted'>Memudahkan user dalam membuat suatu visualisasi data dengan teknik yang benar serta sesuai dengan tujuan dan jenis datanya dengan memberikan berbagai macam informasi.</p>
                </div>
                <div class='col-md-4'>
                    <span class='fa-stack fa-4x'>
                        <i class='fa fa-circle fa-stack-2x text-primary'></i>
                        <i class='fa fa-code-fork fa-stack-1x fa-inverse'></i>
                    </span>
                    <h4 class='service-heading'>Integrated and Standardized</h4>
                    <p class='text-muted'>Terintegrasi dengan sistem publikasi dan diseminasi data di BPS, sehingga ada standardisasi visualisasi pada publikasi data.</p>
                </div>
            </div>
        </div>
    </section>";
    }
    ?>


    <!-- Team Section -->
    <?php
    if (isset($_SESSION['userid'])) {
    } else {
        echo "<section id='team' class='bg-light-gray'>
        <div class='container'>
            <div class='row'>
                <div class='col-lg-12 text-center'>
                    <h2 class='section-heading'>Solo Developer</h2>
                    <h3 class='section-subheading text-muted'>Kenalan yuk dengan pendiri <a><b>Aviditif</b></a> ini.</h3>
                </div>
            </div>
            <div class='row'>
                <div class='col-sm-4'></div>
                <div class='col-sm-4'>
                    <div class='team-member'>
                        <img src='img/team/ava.jpg' class='img-responsive img-circle' alt=''>
                        <h4>Muhammad Arif Maulana</h4>
                        <p class='text-muted'>Graphic Designer, Front-End Programmer</p>
                        <ul class='list-inline social-buttons'>
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
                </div>
                <div class='col-sm-4'></div>
            </div>
            <div class='row'>
                <div class='col-lg-8 col-lg-offset-2 text-center'>
                    <p class='large text-muted'>Sistem aplikasi ini dibuat untuk memenuhi syarat kelulusan dari Sekolah Tinggi Ilmu Statitik. Harapan besar dari kami, semoga sistem aplikasi ini dapat dimanfaatkan secara luas di lingkungan BPS maupun instansi lainnya.</p>
                </div>
            </div>
        </div>
    </section>";
    }
    ?>

    <!-- Contact Section -->
    <?php
    if (isset($_SESSION['userid'])) {
    } else {
        echo "<section id='contact'>
        <div class='container'>
            <div class='row'>
                <div class='col-lg-12 text-center'>
                    <h2 class='section-heading'>Sign Up</h2>
                    <h3 class='section-subheading text-muted2'>Bergabung sekarang dan bangun visualisasimu! Beberapa fitur akan terbuka ketika kamu masuk dengan akunmu. Happy visualizing!</h3>
                </div>
            </div>
            <div class='row'>
                <div class='col-lg-12'>
                    <form name='sentMessage' id='contactForm' novalidate>
                        <div class='row'>
                            <div class='col-md-6'>
                                <div class='form-group'>
                                    <input type='text' class='form-control' autocomplete='off' placeholder='Nama Depan *' id='firstname' required data-validation-required-message='Please enter your first name.'>
                                    <p class='help-block text-danger'></p>
                                </div>
                            </div>
                            <div class='col-md-6'>
                                <div class='form-group'>
                                    <input type='text' class='form-control' autocomplete='off' placeholder='Nama Belakang *' id='lastname' required data-validation-required-message='Please enter your last name.'>
                                    <p class='help-block text-danger'></p>
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class='col-md-6'>
                                <div class='form-group'>
                                    <input type='email' class='form-control' autocomplete='off' placeholder='Email *' id='email' required data-validation-required-message='Please enter your email address.'>
                                    <p class='help-block text-danger'></p>
                                </div>
                            </div>
                            <div class='col-md-6'>
                                <div class='form-group'>
                                    <select id='dirid' class='form-control' style='height: 61px;'>
                                        <option value='0' class='selectedopt'>Direktorat</option>
                                        <optgroup label='———————————————————————————————————' class='baropt'></optgroup>
                                        <optgroup label='Bidang Metodologi dan Informasi Statistik'>
                                            <option value='1'>Direktorat Pengembangan Metodologi Sensus dan Survei</option>
                                            <option value='2'>Direktorat Diseminasi Statistik</option>
                                            <option value='3'>Direktorat Sistem Informasi Statistik</option>
                                        </optgroup>
                                        <optgroup label='———————————————————————————————————' class='baropt'></optgroup>
                                        <optgroup label='Bidang Statistik Sosial'>
                                            <option value='4'>Direktorat Statistik Kependudukan &amp; Ketenagakerjaan</option>
                                            <option value='5'>Direktorat Statistik Kesejahteraan Rakyat</option>
                                            <option value='6'>Direktorat Statistik Ketahanan Sosial</option>
                                        </optgroup>
                                        <optgroup label='———————————————————————————————————' class='baropt'></optgroup>
                                        <optgroup label='Bidang Statistik Produksi'>
                                            <option value='7'>Direktorat Statistik Tanaman Pangan, Hortikultura &amp; Perkebunan</option>
                                            <option value='8'>Direktorat Peternakan, Perikanan &amp; Kehutanan</option>
                                            <option value='9'>Direktorat Statistik Industri</option>
                                        </optgroup>
                                        <optgroup label='———————————————————————————————————' class='baropt'></optgroup>
                                        <optgroup label='Bidang Statistik Distribusi dan Jasa'>
                                            <option value='10'>Direktorat Statistik Harga</option>
                                            <option value='11'>Direktorat Statistik Distribusi</option>
                                            <option value='12'>Direktorat Statistik Keuangan, TI &amp; Pariwisata</option>
                                        </optgroup>
                                        <optgroup label='———————————————————————————————————' class='baropt'></optgroup>
                                        <optgroup label='Bidang Neraca dan Analisis Statistik'>
                                            <option value='13'>Direktorat Neraca Produksi</option>
                                            <option value='14'>Direktorat Neraca Pengeluaran</option>
                                            <option value='15'>Direktorat Analisis &amp; Pengembangan Statistik</option>
                                        </optgroup>
                                    </select>
                                    <p class='help-block text-danger'></p>
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class='col-md-6'>
                                <div class='form-group'>
                                    <input type='text' class='form-control' autocomplete='off' placeholder='Username *' id='username' required data-validation-required-message='Please enter your username.'>
                                    <p class='help-block text-danger'></p>
                                </div>
                            </div>
                            <div class='col-md-6'>
                                <div class='form-group'>
                                    <input type='password' class='form-control' placeholder='Password *' id='password' required data-validation-required-message='Please enter your password.'>
                                    <p class='help-block text-danger'></p>
                                </div>
                            </div>
                        </div>
                        <div class='clearfix'></div>
                        <div class='col-lg-12 text-center'>
                            <div id='success'></div>
                            <button type='submit' class='btn btn-xl'><i class='fa fa-check'></i> Sign Up!</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>";
    }
    ?>

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

    <!-- Portfolio Modal 2 -->
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
                                <?php
                                include 'graph/graph2_scatterplotmat.php';
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 3 -->
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
                                <?php
                                include 'graph/graph3_boxplot.php';
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 4 -->
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
                                <?php
                                include 'graph/graph4_chorddiagram.php';
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 5 -->
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
                                <?php
                                include 'graph/graph5_bulletchart.php';
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 6 -->
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
                                <?php
                                include 'graph/graph6_.php';
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/signup.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/agency.js"></script>

</body>

</html>
