<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Halaman Admin</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link rel="stylesheet" type="text/css" href="../assets/sweetalert/sweetalert2.all.min.css">
  <script type="text/javascript" src="../assets/sweetalert/sweetalert2.all.min.js"></script>
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <script src="../assets/tinymce/js/tinymce/tinymce.min.js"></script>
  <script type="text/javascript">
    tinymce.init({selector: 'textarea.tinymce'});
  </script>

  <script type="text/javascript">
    window.setTimeout("waktu()", 1000);
    function waktu() {
      var tanggal = new Date();
      setTimeout("waktu()", 1000);
      document.getElementById("jam").innerHTML = tanggal.getHours()+":"+tanggal.getMinutes()+":"+tanggal.getSeconds();
    }
  </script>

  <script language="JavaScript">
    var tanggallengkap = new String();
    var namahari = ("Minggu Senin Selasa Rabu Kamis Jumat Sabtu");
    namahari = namahari.split(" ");
    var namabulan = ("Januari Februari Maret April Mei Juni Juli Agustus September Oktober November Desember");
    namabulan = namabulan.split(" ");
    var tgl = new Date();
    var hari = tgl.getDay();
    var tanggal = tgl.getDate();
    var bulan = tgl.getMonth();
    var tahun = tgl.getFullYear();
    tanggallengkap = namahari[hari] + ", "+tanggal + " " + namabulan[bulan] + " " + tahun;
  </script>

</head>

<body id="page-top">
  <?php
    session_start();

    // cek apakah yang mengakses halaman ini sudha login
    if(!isset($_SESSION["level"])) {
      header("location:../login/login.php?pesan=");
      exit;
    }
  ?>

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
          <img src="../images/foto.png" height="50">
        </div>
        <div class="sidebar-brand-text mx-3">SMKN 7 BALEENDAH</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Admin
      </div>

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link collapsed" href="" data-toggle="collapses" data-target="#collapsesOne" aria-expanded="true" aria-controls="collapseOnes">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Info Sekolah</span></a>
          <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Info Sekolah</h6>
            <a class="collapse-item" href="info_sekolah/selayang_pandang/selayang_pandang.php">Selayang Pandang</a>
            <a class="collapse-item" href="info_sekolah/profil_sekolah/profil_sekolah.php">Profil Sekolah</a>
            <a class="collapse-item" href="info_sekolah/tentang_sekolah/tentang_sekolah.php">Tentang Sekolah</a>
            <a class="collapse-item" href="info_sekolah/jurusan/jurusan.php">Jurusan</a>
            <a class="collapse-item" href="info_sekolah/berita/berita.php">Berita</a>
            <a class="collapse-item" href="info_sekolah/kontak/kontak.php">Kontak</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="siswa/tambah_siswa.php" data-toggle="collapses" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fa fa-users"></i>
          <span>Data Siswa</span>
        </a>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="info_sekolah/berita/berita.php" data-toggle="collapses" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fa fa-edit"></i>
          <span>Berita</span>
        </a>
      </li>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="guru/tambah_guru.php" data-toggle="collapses" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fa fa-users"></i>
          <span>Data Guru</span>
        </a>
      </li>

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="user/tambah_user.php" data-toggle="collapses" data-target="#collapsePagess" aria-expanded="true" aria-controls="collapsePagess">
          <i class="fa fa-users"></i>
          <span>User</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="../login/logout.php">
          <i class="fas fa-fw fa-sign-out-alt"></i>
          <span>Logout</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <script lang="JavaScript">document.write(tanggallengkap);</script>&nbsp;&nbsp;-&nbsp;&nbsp;
          <div id="jam"></div>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['nama']; ?></span>
                <?php echo "<img class='img-profile rounded-circle' src='images/".$_SESSION['foto']."'>"; ?>
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="../login/logout.php" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->

    <div class="container-fluid">
      <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Ubah Dashboard</h1>

          <div class="row">
            <div class="col-lg">
              <?php
                include "../koneksi.php";

                $query = "SELECT * FROM dashboard";
                $sql = mysqli_query($koneksi, $query);
                $data = mysqli_fetch_array($sql);
              ?>

              <?php
                if(isset($_GET['pesan'])) {
                  if($_GET['pesan']=="berhasil") {
                    echo "<script>
                              swal('Berhasil', 'Dashboard berhasil diubah!', 'success');
                          </script>
                    ";
                  }else if($_GET['pesan']=="ErrorFoto") {
                    echo "<script>
                              swal({
                                title: 'Foto Gagal di Update',
                                text: 'Silahkan Coba Ganti Foto Anda!',
                                type: 'warning',
                                });
                          </script>
                    ";
                  }else{
                    echo "<script>
                              swal({
                                title: 'Oops!',
                                text: 'Dashboard gagal diubah!',
                                type: 'warning',
                                });
                          </script>
                    ";
                  }
                }
            ?>

      <form method="post" action="proses_ubah.php?id=<?php echo $data['id']; ?>" enctype="multipart/form-data">
            <label for="foto">Foto</label>
              <div>
                  <div>
                    <?php echo "<img src='images/".$data['foto']."' width='80' height='100'>"; ?>
                  </div>
                  <br>
                  <input type="checkbox" name="ubah_foto" value="true">Ceklis jika ingin mengubah foto<br>
                  <input type="file" name="foto" id="foto">
              </div>
            <label for="nama">Nama</label>
              <div class="input-group">
                  <input type="text" name="nama" value="<?php echo $data['nama']; ?>" class="form-control" id="nama">
              </div>
            <label for="judul">Judul</label>
              <div class="input-group">
                  <input type="text" name="judul" value="<?php echo $data['judul']; ?>" class="form-control" id="judul">
              </div>
              <label for="keterangan">Keterangan</label>
              <div class="input">
                <textarea class="tinymce" name="keterangan" id="keterangan" rows="20"><?php echo $data['keterangan']; ?></textarea>
              </div>
              <br>            
      </div>
        </div>
        <div>
          <a href=""><button type="button" class="btn btn-danger">Batal</button></a>
          <button type="submit" class="btn btn-primary" value="Ubah">Ubah</button>
        </div>
      </form>
    </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; M.Finuary Renggalih <?= date('Y'); ?></span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Apakah mau logout?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">??</span>
          </button>
        </div>
        <div class="modal-body">Apakah anda ingin logout.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="../login/logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>