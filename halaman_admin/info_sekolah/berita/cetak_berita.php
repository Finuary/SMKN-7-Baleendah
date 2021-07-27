<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Halaman Admin</title>

  <script type="text/javascript" charset="utf8" src="../../assets/js/jquery.js"></script>
  <script type="text/javascript" charset="utf8" src="../../assets/js/jquery.dataTables.min.js"></script>

  <!-- Custom fonts for this template-->
  <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../../css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="../../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">
  <?php
      session_start();

          include ("../../../koneksi.php");

      if(!isset($_SESSION['level'])) {
      header("location:../../login/login.php?pesan=");
      exit;
    }
  ?>
  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Begin Page Content -->

<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800" align="center" style="font-size: 50px;">Admin</h1>
  <h1 class="h3 mb-4 text-gray-800" align="center" style="font-size: 40px;">Data Berita</h1>
      <div class="table-responsive">
        <table id="dataTable" class="table table-striped table-bordered data" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>NO</th>
              <th>PENULIS</th>
              <th>TANGGAL</th>
              <th>JUDUL</th>
              <th>FOTO</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>NO</th>
              <th>PENULIS</th>
              <th>TANGGAL</th>
              <th>JUDUL</th>
              <th>FOTO</th>
            </tr>
          </tfoot>
          <tbody>
            <?php 
              include "../../../koneksi.php";
              
              $id = $_GET['id'];
              $no = 0;
              $sql = mysqli_query($koneksi, "SELECT * FROM berita WHERE id = '$id' ORDER BY tgl_tulis DESC");

              while($data = mysqli_fetch_array($sql)) {
                $no++;
                echo "<tr>";
                echo "<td>$no</td>";
                echo "<td>".$data['penulis']."</td>";
                echo "<td>".$data['tgl_tulis']."</td>";
                echo "<td>".$data['judul']."</td>";
                echo "<td><img src='../../images/".$data['foto']."' width='100' height='100'></td>";
                echo "</tr>";
              } 
            ?>
          </tbody>
        </table>
      </div>
  </div>
</div>
      <!-- End of Main Content -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Bootstrap core JavaScript-->
  <script src="../../vendor/jquery/jquery.min.js"></script>
  <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../../js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="../../vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="../../vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <script>
    window.print();
  </script>

</body>

</html>