<?php
	include "../../koneksi.php";

	$id = $_GET['id'];
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$level = $_POST['level'];

	if(isset($_POST['ubah_foto'])) {

		$foto = $_FILES['foto']['name'];
		$tmp = $_FILES['foto']['tmp_name'];
		$fotobaru = date('dmYHis').$foto;
		$path = "../images/".$fotobaru;

		if(move_uploaded_file($tmp, $path)) {
			$query = "SELECT * FROM user WHERE id='".$id."'";
			$sql = mysqli_query($koneksi, $query);
			$data = mysqli_fetch_array($sql);

			if(is_file("../images/".$data['foto']))
				unlink("../images/".$data['foto']);

			$query = "UPDATE user SET nama='".$nama."', email='".$email."', password='".$password."', level='".$level."', foto='".$fotobaru."' WHERE id='".$id."'";
			$sql = mysqli_query($koneksi, $query);

			if($sql) {
				header("location:tambah_user.php?pesan=berhasil");
			}else{
				echo "Maaf, terjadi kesalahan saat mencoba untuk menyimpan data ke database";
				echo "<br><a hrep='form_ubah.php'>Kembali ke Form</a>";
			}
		}else{
			header("location:tambah_user.php?pesan=ErrorFoto");
		}
	}else{
		$query = "UPDATE user SET nama='".$nama."', email='".$email."', password='".$password."', level='".$level."' WHERE id='".$id."'";
		$sql = mysqli_query($koneksi, $query);

		if($sql) {
			header("location:tambah_user.php?pesan=berhasil");
		}else{
			header("location:tambah_user.php?pesan=");
		}
	}
?>