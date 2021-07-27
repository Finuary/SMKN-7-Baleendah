<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Halaman Register</title>

  <!-- Custom fonts for this template-->
  <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body style="background-color: coral;">
  <?php
    session_start();
    if(isset($_SESSION["level"])) {
      header("location:../halaman_admin/halaman_admin.php");
      exit;
    }
   ?>
  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

    <div class="col-xl-9 col-lg-12 col-md-9">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="../images/foto.png" height="400" style="margin: 10px 0 0 40px;">
              </div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Silahkan Buat Akun mu!</h1>
              </div>
              <?php
                      if(isset($_GET['pesan'])) {
                      if($_GET['pesan'] == "berhasil") {
                        echo "<div class = 'alert alert-success'>Register berhasil!</div>";
                      }else if($_GET['pesan'] == ""){
                        echo "<div class='alert alert-danger'>Register gagal!</div>";
                      }
                    }
                  ?>
                  <!-- <?php
                      // include "../koneksi.php";
                      // if ($_POST['password']==$_POST['password1'] ) { 
                      // }else {
                      // echo "<script>alert('Password yang Anda Masukan Tidak Sama');history.go(-1)</script>";
                      // }
                  ?> -->
              <form class="user" action="proses_simpan.php" method="post">
                <!-- <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="First Name">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Last Name">
                  </div>
                </div> -->
                <div class="form-group">
                      <input type="nama" name="nama" class="form-control form-control-user" id="nama" placeholder="Nama" required="required">
                    </div>
                <div class="form-group">
                      <input type="email" name="email" class="form-control form-control-user" id="email" placeholder="Email" required="required">
                    </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                      <input type="password" name="password" class="form-control form-control-user" id="password" placeholder="Password" required="required">
                    </div>
                  <!-- <div class="col-sm-6">
                      <input type="password" name="password1" class="form-control form-control-user" id="password1" placeholder="Repeat Password" required="required">
                    </div> -->
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">
                      Register Account
                    </button>
                    <button type="cancel" class="btn btn-primary btn-user btn-block bg-danger" onclick="history.back();">
                      Cancel
                    </button>
                <!-- <hr> -->
                <!-- <a href="index.html" class="btn btn-google btn-user btn-block">
                  <i class="fab fa-google fa-fw"></i> Register with Google
                </a>
                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                  <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                </a> -->
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="forgot-password.php">Forgot Password?</a>
              </div>
              <div class="text-center">
                <a class="small" href="login.php">Already have an account? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../assets/js/sb-admin-2.min.js"></script>

</body>

</html>