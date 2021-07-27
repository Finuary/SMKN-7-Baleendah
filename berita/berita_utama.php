<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Ashekur Rahman">
    <meta name="description" content="">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>Appy | Single Blog Page</title>

    <link rel="stylesheet" type="text/css" href="../../assets/sweetalert/sweetalert2.all.min.css">
    <script type="text/javascript" src="../../assets/sweetalert/sweetalert2.all.min.js"></script>

    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="../images/apple-touch-icon.png">
    <link rel="shortcut icon" type="../image/ico" href="../images/foto.png" />
    <!-- Plugin-CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/linearicons.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">
    <link rel="stylesheet" href="../css/animate.css">
    <!-- Main-Stylesheets -->
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <script src="../js/vendor/modernizr-2.8.3.min.js"></script>
    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="single-post" data-spy="scroll" data-target=".mainmenu-area">
    <!-- Preloader-content -->
    <div class="preloader">
        <?php
                if(isset($_GET['pesan'])) {
                  if($_GET['pesan']=="berhasil") {
                    echo "<script>
                              swal('Berhasil', 'Data berhasil diubah!', 'success');
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
                                text: 'Data gagal diubah!',
                                type: 'warning',
                                });
                          </script>
                    ";
                  }
                }
            ?>
        <span><i class="lnr lnr-sun"></i></span>
    </div>
    <!-- MainMenu-Area -->
    <nav class="mainmenu-area" data-spy="affix" data-offset-top="200">
        <div class="container-fluid">
            <?php
                include "../koneksi.php";

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
                    
                    <p style="color: white;"><a class="navbar-brand" href="#home_page"><?php echo "<img src='../halaman_admin/images/".$data['foto']."' style='margin-top : -10px;'>"; ?></a><?php echo $data['nama']; ?></p>
                </div>
            </div>
            <?php } ?>
        </div>
    </nav>
    <!-- MainMenu-Area-End -->

    <header class="home-area overlay" id="home_page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <h1 class="white-color">Berita Tentang SMKN 7 Baleendah</h1>
                    <ul class="breadcrumb">
                        <li><a href="../index.php" style="color: white;">Home</a></li>
                        <li><a href="berita.php" style="color: white;">Blog</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <br><br><br><br>
    </header>
    <div class="section-padding">
        <div class="container">
            <div class="row">
                <?php
                        include "../koneksi.php";

                        $id = $_GET['id'];
                        $query = "SELECT * FROM berita WHERE id='".$id."'";
                        $sql = mysqli_query($koneksi, $query);
                        $data = mysqli_fetch_array($sql);
                    ?>
                <div class="col-xs-12">
                    <article class="post-single">
                        <figure class="post-media">
                            <?php echo "<img src='../halaman_admin/images/".$data['foto']."' style='height : 600px;'>"; ?>
                        </figure>
                        <div class="post-body">
                            <ul class="breadcrumb">
                                <li><a href="#"><?php echo $data['penulis']; ?></a></li>
                                <li><?php echo $data['tgl_tulis']; ?></li>
                            </ul>
                            <h2 class="dark-color"><?php echo $data['judul']; ?></h2>
                            <div class="space-20"></div>
                            <!-- <h4>Do sit amet, consectetur adipisicing elon proidaipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non nummodi tempora incidunt ut labore et dolore quaerat voluptatem.</h4> -->
                            <div class="space-30"></div>
                            <p><?php echo $data['isi']; ?></p>
                            <div class="space-50"></div>
                            <!-- <blockquote>“Corem ipsum dolocupidatat non proident, suntmodi tempora incidunt ut labore et dolore quaerat voluptatem.”</blockquote> -->
                            <!-- <div class="space-50"></div>
                            <p>Do sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore etiquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia of teh deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p> -->
                        </div>
                    </article>
                    <div class="space-100"></div>
                    <?php
                        include "../koneksi.php";
                        $query = mysqli_query($koneksi, "SELECT * FROM komentar");
                        $jmldata = mysqli_num_rows($query);
                    ?>
                    <div id="comments" class="comments-area">
                        <h3 class="comment-heading"><?php echo $jmldata." Comments"; ?></h3>
                        <ul class="comments-list">
                            <?php 
              include "../koneksi.php";
              
              $id = 0;
              $sql = mysqli_query($koneksi, "SELECT * FROM komentar");

              while($data = mysqli_fetch_array($sql)) {
                $id++;
                echo
                "<li>
                                <article class='comment'>
                                    <figure class='comment-pic'>
                                        <img alt='' src='images/comment-image.jpeg'>
                                    </figure>
                                    <div class='comment-content'>
                                        <div class='comment-header'>
                                            <h4>".$data['nama']."</h4>
                                            <h6>".$data['email']."</h6>
                                            <p class='comment-date'>Posted on September 3, 2012 at 10:18 am </p>
                                        </div>
                                        <p>".$data['isi']."</p>
                                        <ul class='breadcrumb'>
                                            <li><a href='#'>Reply</a></li>
                                            <li><a href='#'>Share</a></li>
                                        </ul>
                                    </div>
                                </article>
                            </li>";
                            } 
                            ?>
                                <!-- <ul>
                                    <li>
                                        <article class='comment'>
                                            <figure class='comment-pic'>
                                                <img alt='' src='images/comment-image.jpeg'>
                                            </figure>
                                            <div class='comment-content'>
                                                <div class='comment-header'>
                                                    <h4>Ashekur Rahman</h4>
                                                    <p class='comment-date'>Posted on September 3, 2012 at 10:18 am </p>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos pariatur fuga ullam placeat corrupti inventore.</p>
                                                <ul class='breadcrumb'>
                                                    <li><a href='#'>Reply</a></li>
                                                    <li><a href='#'>Share</a></li>
                                                </ul>
                                            </div>
                                        </article>
                                    </li>
                                </ul> -->
                        </ul>
                        <div class="comment-respond">
                            <h4>Post your comments</h4>
                            <form  method="post" action="proses-simpan.php" enctype="multipart/form-data" class="comment-from">
                                <div class="form-double">
                                    <div class="box">
                                        <input type="text" name="nama" class="form-control" placeholder="Nama..">
                                        <div class="space-30"></div>
                                    </div>
                                    <div class="box last">
                                        <input type="email" name="email" class="form-control" placeholder="Email..">
                                        <div class="space-30"></div>
                                    </div>
                                </div>
                                <input type="text" name="web" class="form-control" placeholder="Website URL..">
                                <div class="space-30"></div>
                                <textarea name="isi" id="isi" rows="5" class="form-control" placeholder="Komentar..."></textarea>
                                <div class="space-30"></div>
                                <button type="submit" class="bttn-white wow fadeInUp" data-wow-delay="0.8s" value="Kirim">Kirim</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Subscribe-Form -->
    <div class="subscribe-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                    <div class="subscribe-form text-center">
                        <h3 class="blue-color">Subscribe for More Features</h3>
                        <div class="space-20"></div>
                        <form id="mc-form">
                            <input type="email" class="control" placeholder="Enter your email" required="required" id="mc-email">
                            <button class="bttn-white active" type="submit"><span class="lnr lnr-location"></span> Subscribe</button>
                            <label class="mt10" for="mc-email"></label>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Subscribe-Form-Area -->
    <!-- Footer-Area -->
    <footer class="footer-area" id="contact_page">
        <div class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="page-title text-center">
                            <h5 class="title">Contact US</h5>
                            <h3 class="dark-color">Find Us By Bellow Details</h3>
                            <div class="space-60"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-4">
                        <div class="footer-box">
                            <div class="box-icon">
                                <span class="lnr lnr-map-marker"></span>
                            </div>
                            <p>8-54 Paya Lebar Square <br /> 60 Paya Lebar Roa SG, Singapore</p>
                        </div>
                        <div class="space-30 hidden visible-xs"></div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="footer-box">
                            <div class="box-icon">
                                <span class="lnr lnr-phone-handset"></span>
                            </div>
                            <p>+65 93901336 <br /> +65 93901337</p>
                        </div>
                        <div class="space-30 hidden visible-xs"></div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="footer-box">
                            <div class="box-icon">
                                <span class="lnr lnr-envelope"></span>
                            </div>
                            <p>yourmail@gmail.com <br /> anothermai@hotmail.com
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer-Bootom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-5">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            <span>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="lnr lnr-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></span>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <div class="space-30 hidden visible-xs"></div>
                    </div>
                    <div class="col-xs-12 col-md-7">
                        <div class="footer-menu">
                            <ul>
                                <li><a href="index.html#home_page">Home</a></li>
                                <li><a href="index.html#about_page">About</a></li>
                                <li><a href="index.html#features_page">Features</a></li>
                                <li><a href="index.html#gallery_page">Gallery</a></li>
                                <li><a href="index.html#price_page">Pricing</a></li>
                                <li><a href="index.html#questions_page">FAQ</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="index.html#contact_page">Contacts</a></li>
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
    <script src="../js/vendor/jquery-1.12.4.min.js"></script>
    <script src="../js/vendor/jquery-ui.js"></script>
    <script src="../js/vendor/bootstrap.min.js"></script>
    <!--Plugin-JS-->
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/contact-form.js"></script>
    <script src="../js/ajaxchimp.js"></script>
    <script src="../js/scrollUp.min.js"></script>
    <script src="../js/magnific-popup.min.js"></script>
    <script src="../js/wow.min.js"></script>
    <!--Main-active-JS-->
    <script src="../js/main.js"></script>
</body>

</html>
