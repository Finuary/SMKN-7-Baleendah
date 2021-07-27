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
    <!-- Plugin-CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/linearicons.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
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
<body data-spy="scroll" data-target=".mainmenu-area">
    <!-- Preloader-content -->
    <div class="preloader">
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
                        <li><a href="" style="color: white;">Blog</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <br><br><br><br>
    </header>

    <div class="section-padding" id="berita">
        <div class="container">
            <div class="row">

    <?php 
        include "../koneksi.php";

        $batas = 9;
        $halaman = @$_GET['halaman'];
        if(empty($halaman)) {
            $posisi = 0;
            $halaman = 1;
        }else{
            $posisi = ($halaman - 1) * $batas;
        }
        $query = "SELECT * FROM berita ORDER BY tgl_tulis DESC LIMIT $posisi, $batas";
        $tampil = mysqli_query($koneksi, $query);
              $no = $posisi + 1;
              while($data=mysqli_fetch_array($tampil)) {
              echo "<div class='col-xs-12 col-sm-6 col-md-4'>
                    <article class='post-single'>
                        <figure class='post-media'>
                             
                                <img src='../halaman_admin/images/".$data['foto']."' style='width:300px; height:200px;'>
                            
                        </figure>
                        <div class='post-body'>
                            <div class='post-meta'>
                                <div class='post-tags'><a href=''>".$data['penulis']."</a></div>
                                <div class='post-date'>".$data['tgl_tulis']."</div>
                            </div>
                            <h4 class='dark-color'><a href='single.html'>".$data['judul']."</a></h4>
                            <a href='berita_utama.php?id=".$data['id']."' class='read-more'>View Article</a>
                        </div>
                    </article>
                </div>";
              $no++;
              }
              $query2 = mysqli_query($koneksi,"SELECT * FROM berita ORDER BY tgl_tulis DESC");
              $jmldata = mysqli_num_rows($query2);
              $jmlhalaman = ceil($jmldata / $batas);
              echo "<div class='row'>";
              echo "<div class='col-xs-12'>";
              echo "<div class='pagination'>";
              echo "<div class='nav-links'>";
              echo "<a href='' class='prev page-numbers'><i class='lnr lnr-chevron-left'></i></a>";
              for($i=1;$i<=$jmlhalaman;$i++)
                if($i != $halaman) {
                    
                    echo "<a href =\"berita.php?halaman=$i#berita\" class='page-numbers'>$i</a>";

                }else{
                    echo "&nbsp;&nbsp;&nbsp;&nbsp;$i&nbsp;&nbsp;&nbsp;&nbsp;";
                }
            echo "<a href='' class='next page-numbers'><i class='lnr lnr-chevron-right'></i></a>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
    ?>
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
                                <li class="active"><a href="index.html#home_page">Home</a></li>
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
