<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Sumon Rahman">
    <meta name="description" content="">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>SMKN 7 BALEENDAH</title>
    <!-- Place favicon.ico in the root directory -->
    <link rel="stylesheet" type="text/css" href="assets/sweetalert/sweetalert2.all.min.css">
    <script type="text/javascript" src="assets/sweetalert/sweetalert2.all.min.js"></script>

    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="shortcut icon" type="image/ico" href="images/foto.png">
    <!-- Plugin-CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/linearicons.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/animate.css">
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- Main-Stylesheets -->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body data-spy="scroll" data-target=".mainmenu-area">
    <!-- Preloader-content -->
    <div class="preloader">
        <?php
                if(isset($_GET['pesan'])) {
                  if($_GET['pesan']=="berhasil") {
                    echo "<script>
                              swal('Berhasil', 'Data berhasil dikirim!', 'success');
                          </script>
                    ";
                  }else if ($_GET['pesan']=="ErrorFoto") {
                    echo "<script>
                              swal({
                                title: 'Foto gagal diubah!',
                                text: 'Silahkan coba ganti foto anda!',
                                type: 'warning',
                                });
                          </script>
                    ";
                  }else{
                    echo "<script>
                              swal({
                                title: 'Oops!',
                                text: 'Data gagal dikirim!',
                                type: 'warning',
                                });
                          </script>
                    ";
                  }
                }
            ?>
        <span><img src="images/foto.png"></span>
    </div>
    <!-- MainMenu-Area -->
    <nav class="mainmenu-area" data-spy="affix" data-offset-top="200">
        <div class="container-fluid">
            <?php
                include "koneksi.php";

                $query = "SELECT * FROM dashboard";
                $sql = mysqli_query($koneksi, $query);
                while($data = mysqli_fetch_array($sql))
                {
            ?>
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary_menu">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div>
                    
                    <p style="color: white;"><a class="navbar-brand" href="#home_page"><?php echo "<img src='halaman_admin/images/".$data['foto']."' style='margin-top : -10px;'>"; ?></a><?php echo $data['nama']; ?></p>
                </div>
            </div>
            <div class="collapse navbar-collapse" id="primary_menu">
                <ul class="nav navbar-nav mainmenu" style="text-align: right;">
                    <li><a href="#selayang_page">Selayang Pandang</a></li>
                    <li><a href="#profil_page">Profil Sekolah</a></li>
                    <li><a href="#about_page">Tentang Sekolah</a></li>
                    <li><a href="#berita_page">Berita</a></li>
                    <li><a href="#contact_page">Kontak</a></li>
                </ul>
                <div class="right-button hidden-xs">
                    <a href="login/register.php">Sign Up</a>
                </div>
            </div>
            <?php } ?>
        </div>
    </nav>
    <!-- MainMenu-Area-End -->
    <!-- Home-Area -->
    <header class="home-area overlay" id="home_page">
        <div class="container">
            <?php
                include "koneksi.php";

                $query = "SELECT * FROM dashboard";
                $sql = mysqli_query($koneksi, $query);
                while($data = mysqli_fetch_array($sql))
                {
            ?>
            <div class="row">
                <div class="col-xs-12 hidden-sm col-md-5">
                    <figure class="mobile-image wow fadeInUp" data-wow-delay="0.2s">
                        <?php echo "<img src='halaman_admin/images/".$data['foto']."'>"; ?>
                    </figure>
                </div>
                <div class="col-xs-12 col-md-7">
                    <div class="space-80 hidden-xs"></div>
                    <h1 class="wow fadeInUp" data-wow-delay="0.4s"><?php echo $data['nama']; ?></h1>
                    <div class="space-20"></div>
                    <div class="desc wow fadeInUp" data-wow-delay="0.6s">
                        <p><?php echo $data['keterangan']; ?></p>
                    </div>
                    <div class="space-20 hidden-xs"></div>
                    <a href="login/login.php" class="bttn-white wow fadeInUp" data-wow-delay="0.8s">Login</a>
                </div>
            </div>
            <?php } ?>
        </div>
    </header>
    <!-- Home-Area-End -->
    <!-- selayang-Area -->
    <section class="section-padding" id="selayang_page">
        <div class="container" style="width: 70%;">
            <?php
                include "koneksi.php";

                $query = "SELECT * FROM selayang_pandang";
                $sql = mysqli_query($koneksi, $query);
                while($data = mysqli_fetch_array($sql))
                {
            ?>
            <h2 align="center" class="wow fadeInUp" data-wow-delay="0.4s"><?php echo $data['judul']; ?></h2><br>
           <h3 align="center" class="wow fadeInUp" data-wow-delay="0.4s"><?php echo $data['pembuka']; ?></h3>
                <p class="desc wow fadeInUp" data-wow-delay="0.6s"><?php echo $data['isi']; ?></p>
            <?php } ?>
        </div>
    </section>
    <!-- selayang-Area-End -->
    <!-- profil-Area -->
    <section class="feature-area section-padding-top" id="profil_page">
        <div class="container">
            <?php
                include "koneksi.php";

                $query = "SELECT * FROM profil_sekolah";
                $sql = mysqli_query($koneksi, $query);
                while($data = mysqli_fetch_array($sql))
                {
            ?>
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                    <div class="page-title text-center">
                        <h5 class="title"><?php echo $data['judul']; ?></h5>
                        <div class="space-10"></div>
                        <h3><?php echo $data['nama_sekolah']; ?></h3>
                        <div class="space-60"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="service-box wow fadeInUp" data-wow-delay="0.2s">
                        <div class="box-icon">
                             <img src="images/logo4.png" style="height: 40px;">
                        </div>
                        <h4>Nama Sekolah :</h4>
                        <p><?php echo $data['nama_sekolah']; ?></p>
                    </div>
                    <div class="space-60"></div>
                    <div class="service-box wow fadeInUp" data-wow-delay="0.4s">
                        <div class="box-icon">
                            <img src="images/logo4.png" style="height: 40px;">
                        </div>
                        <h4>NPSN :</h4>
                        <p><?php echo $data['npsn_sekolah']; ?></p>
                    </div>
                    <div class="space-60"></div>
                    <div class="service-box wow fadeInUp" data-wow-delay="0.6s">
                        <div class="box-icon">
                            <img src="images/logo4.png" style="height: 40px;">
                        </div>
                        <h4>Alamat Sekolah :</h4>
                        <p><?php echo $data['alamat_sekolah']; ?></p>
                    </div>
                    <div class="space-60"></div>
                </div>
                <div class="hidden-xs hidden-sm col-md-4">
                    <figure class="mobile-image"><br><br>
                        <center><img src="images/logo4.png" style="height: 100px;"></center><br>
                        <img src="images/a.jpg" alt="Feature Photo">
                    </figure>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="service-box wow fadeInUp" data-wow-delay="0.2s">
                        <div class="box-icon">
                            <img src="images/logo4.png" style="height: 40px;">
                        </div>
                        <h4>Telepon :</h4>
                        <p><?php echo $data['telp_sekolah']; ?></p>
                    </div>
                    <div class="space-60"></div>
                    <div class="service-box wow fadeInUp" data-wow-delay="0.4s">
                        <div class="box-icon">
                            <img src="images/logo4.png" style="height: 40px;">
                        </div>
                        <h4>Email :</h4>
                        <p><?php echo $data['email_sekolah']; ?></p>
                    </div>
                    <div class="space-60"></div>
                    <div class="service-box wow fadeInUp" data-wow-delay="0.6s">
                        <div class="box-icon">
                           <img src="images/logo4.png" style="height: 40px;">
                        </div>
                        <h4>Jurusan :</h4>
                        <p><?php echo $data['jurusan_sekolah']; ?></p>
                    </div>
                    <div class="space-60"></div>
                </div>
            </div>
            <?php } ?>
        </div>
    </section>
    <!-- profil-Area-End -->
    <!-- About-Area -->
    <section class="section-padding" id="about_page">
        <div class="container">
            <?php
                include "koneksi.php";

                $query = "SELECT * FROM tentang_sekolah";
                $sql = mysqli_query($koneksi, $query);
                while($data = mysqli_fetch_array($sql))
                {
            ?>
            <div class="row">
                <div class="col-xs-12 col-md-10 col-md-offset-1">
                    <div class="page-title text-center">
                        <img src="images/logo4.png" alt="About Logo" style="height: 200px;">
                        <div class="space-20"></div>
                        <div class="wow fadeInUp" data-wow-delay="0.4s">
                            <h5 class="title"><?php echo $data['judul']; ?></h5>
                        </div>
                        <div class="space-30"></div>
                        <div class="desc wow fadeInUp" data-wow-delay="0.6s">
                        <h3 class="blue-color"><?php echo $data['pembuka']; ?></h3>
                        </div>
                        <div class="space-20"></div>
                        <p class="desc wow fadeInUp" data-wow-delay="0.8s"><?php echo $data['isi']; ?></p>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </section>
    <section class="progress-area gray-bg" id="progress_page">
        <div class="container">
            <?php
                include "koneksi.php";

                $query = "SELECT * FROM jurusan WHERE id='1'";
                $sql = mysqli_query($koneksi, $query);
                while($data = mysqli_fetch_array($sql))
                {
            ?>
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <div class="page-title section-padding">
                        <h5 class="title wow fadeInUp" data-wow-delay="0.2s">JURUSAN</h5>
                        <div class="space-10"></div>
                        <h3 class="dark-color wow fadeInUp" data-wow-delay="0.4s"><?php echo $data['nama']; ?></h3>
                        <div class="space-20"></div>
                        <div class="desc wow fadeInUp" data-wow-delay="0.6s">
                            <p><?php echo $data['keterangan']; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6">
                    <figure class="mobile-image">
                        <?php echo "<img src='halaman_admin/images/".$data['foto']."' style='margin-top: 100px;'>"; ?>
                    </figure>
                </div>
            </div>
        <?php } ?>
        </div>
        <br>
        <br>
        <br>
        <div class="container">
            <?php
                include "koneksi.php";

                $query = "SELECT * FROM jurusan WHERE id='2'";
                $sql = mysqli_query($koneksi, $query);
                while($data = mysqli_fetch_array($sql))
                {
            ?>
            <div class="col-xs-12 col-md-6">
                <figure class="mobile-image">
                    <?php echo "<img src='halaman_admin/images/".$data['foto']."' style='margin-top: 100px;'>"; ?>
                </figure>
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <div class="page-title section-padding">
                        <h5 class="title wow fadeInUp" data-wow-delay="0.2s">JURUSAN</h5>
                        <div class="space-10"></div>
                        <h3 class="dark-color wow fadeInUp" data-wow-delay="0.4s"><?php echo $data['nama']; ?></h3>
                        <div class="space-20"></div>
                        <div class="desc wow fadeInUp" data-wow-delay="0.6s">
                            <p><?php echo $data['keterangan']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
        </div>
        <br>
        <br>
        <br>
        <div class="container">
            <?php
                include "koneksi.php";

                $query = "SELECT * FROM jurusan WHERE id='3'";
                $sql = mysqli_query($koneksi, $query);
                while($data = mysqli_fetch_array($sql))
                {
            ?>
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <div class="page-title section-padding">
                        <h5 class="title wow fadeInUp" data-wow-delay="0.2s">JURUSAN</h5>
                        <div class="space-10"></div>
                        <h3 class="dark-color wow fadeInUp" data-wow-delay="0.4s"><?php echo $data['nama']; ?></h3>
                        <div class="space-20"></div>
                        <div class="desc wow fadeInUp" data-wow-delay="0.6s">
                            <p><?php echo $data['keterangan']; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6">
                    <figure class="mobile-image">
                    <?php echo "<img src='halaman_admin/images/".$data['foto']."' style='margin-top: 100px;'>"; ?>
                    </figure>
                </div>
            </div>
        <?php } ?>
        </div>
        <br>
        <br>
        <br>
        <div class="container">
            <?php
                include "koneksi.php";

                $query = "SELECT * FROM jurusan WHERE id='4'";
                $sql = mysqli_query($koneksi, $query);
                while($data = mysqli_fetch_array($sql))
                {
            ?>
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <figure class="mobile-image">
                    <?php echo "<img src='halaman_admin/images/".$data['foto']."' style='margin-top: 100px;'>"; ?>
                    </figure>
                </div>
                <div class="col-xs-12 col-md-6">
                    <div class="page-title section-padding">
                        <h5 class="title wow fadeInUp" data-wow-delay="0.2s">JURUSAN</h5>
                        <div class="space-10"></div>
                        <h3 class="dark-color wow fadeInUp" data-wow-delay="0.4s"><?php echo $data['nama']; ?></h3>
                        <div class="space-20"></div>
                        <div class="desc wow fadeInUp" data-wow-delay="0.6s">
                            <p><?php echo $data['keterangan']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
        </div>
        <br>
        <br>
        <br>
        <div class="container">
            <?php
                include "koneksi.php";

                $query = "SELECT * FROM jurusan WHERE id='5'";
                $sql = mysqli_query($koneksi, $query);
                while($data = mysqli_fetch_array($sql))
                {
            ?>
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <div class="page-title section-padding">
                        <h5 class="title wow fadeInUp" data-wow-delay="0.2s">JURUSAN</h5>
                        <div class="space-10"></div>
                        <h3 class="dark-color wow fadeInUp" data-wow-delay="0.4s"><?php echo $data['nama']; ?></h3>
                        <div class="space-20"></div>
                        <div class="desc wow fadeInUp" data-wow-delay="0.6s">
                            <p><?php echo $data['keterangan']; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6">
                    <figure class="mobile-image">
                    <?php echo "<img src='halaman_admin/images/".$data['foto']."' style='margin-top: 100px;'>"; ?>
                    </figure>
                </div>
            </div>
        <?php } ?>
        </div>
    </section>
    <!-- About-Area-End -->
        <!-- Berita-Area -->
    <section id="berita_page" class="questions-area section-padding">
        <div class="container">
            
            <div class="row">
                <div class="col-xs-12">
                    <div class="page-title text-center">
                        <h5 class="title">Berita</h5>
                        <h3 class="seconder-color">SMKN 7 Baleendah</h3>
                        <div class="space-60"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="team-slide">
                        <?php
                            include "koneksi.php";

                            $query = "SELECT * FROM berita ORDER BY tgl_tulis DESC";
                            $sql = mysqli_query($koneksi, $query);
                            while($data = mysqli_fetch_array($sql))
                            {
                        ?>
                        <div class="">
                            <article class="post-single">
                                <figure class="post-media">
                                    <?php 
                                        echo "<img src='halaman_admin/images/".$data['foto']."' style='width: 350px; height: 300px;'>";
                                    ?>
                                </figure>
                                <div class="post-body">
                                    <div class="post-meta">
                                        <div class="post-tags"><a href="#"><?php echo $data['penulis']; ?></a></div>
                                        <div class="post-date"><?php echo $data['tgl_tulis']; ?></div>
                                    </div>
                                    <h4 class="dark-color"><a href="single.html"><?php echo $data['judul']; ?></a></h4>
                                    <a href="berita/berita.php" class="read-more">Lihat Berita</a>
                                </div>
                            </article>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Berita-Area-End -->
    <!-- Footer-Area -->
    <footer class="footer-area" id="contact_page">
        <div class="section-padding">
            <div class="container">
                <?php
                    include "koneksi.php";

                    $query = "SELECT * FROM kontak";
                    $sql = mysqli_query($koneksi, $query);
                    while($data = mysqli_fetch_array($sql))
                    {
                ?>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="page-title text-center">
                            <h5 class="title">Hubungi Kami</h5>
                            <h3 class="seconder-color">Temukan Kami di Bawah Sini</h3>
                            <div class="space-60"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-4">
                        <div class="footer-box">
                            <div class="box-icon">
                                <span class="lnr lnr-phone-handset"></span>
                            </div>
                            <p><?php echo $data['telp']; ?></p>
                        </div>
                        <div class="space-30 hidden visible-xs"></div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="footer-box">
                            <div class="box-icon">
                                <span class="lnr lnr-envelope"></span>
                            </div>
                            <p><?php echo $data['email']; ?>
                            </p>                        
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="footer-box">
                            <div class="box-icon">
                                <span class="lnr lnr-map-marker"></span>
                            </div>
                            <p><?php echo $data['alamat']; ?></p>
                        </div>
                        <div class="space-30 hidden visible-xs"></div>
                    </div>
                </div>
                <?php } ?>
                <br><br>
                <div class="comment-respond">
                            <h4 class="seconder-color" style="color: coral;">Kritik dan Saran</h4>
                            <form  method="post" action="proses_simpan.php" enctype="multipart/form-data">
                                <div class="form-double">
                                    <div class="box">
                                        <input type="text" name="nama" class="form-control" placeholder="Nama.." style="color: coral;">
                                        <div class="space-30"></div>
                                    </div>
                                    <div class="box last">
                                        <input type="email" name="email" class="form-control" placeholder="Email.." style="color: coral;">
                                        <div class="space-30"></div>
                                    </div>
                                </div>
                                <input type="text" name="kritik_saran" class="form-control" placeholder="Kritik atau Saran.." style="color: coral;">
                                <div class="space-30"></div>
                                <textarea name="komentar" id="komentar" rows="5" class="form-control" placeholder="Komentar..." style="color: coral;"></textarea>
                                <div class="space-30"></div>
                                <button type="submit" class="bttn-white wow fadeInUp" data-wow-delay="0.8s" value="Kirim">Kirim</button>
                            </form>
                        </div>
            </div>
        </div>
        <!-- Footer-Bootom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-5">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            <span>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="lnr lnr-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">mfr17_</a></span>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <div class="space-30 hidden visible-xs"></div>
                    </div>
                    <div class="col-xs-12 col-md-7">
                        <div class="footer-menu">
                            <ul>
                                <li><a href="#">Selayang Pandang</a></li>
                                <li><a href="#">Profil Sekolah</a></li>
                                <li><a href="#">Tenang Sekolah</a></li>
                                <li><a href="#">Berita</a></li>
                                <li><a href="#">Kontak</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer-Bootom-End -->
    </footer>
    <!-- Footer-Area-End -->
    <!--Vendor-JS-->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/vendor/jquery-ui.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <!--Plugin-JS-->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/contact-form.js"></script>
    <script src="js/ajaxchimp.js"></script>
    <script src="js/scrollUp.min.js"></script>
    <script src="js/magnific-popup.min.js"></script>
    <script src="js/wow.min.js"></script>
    <!--Main-active-JS-->
    <script src="js/main.js"></script>
</body>

</html>
