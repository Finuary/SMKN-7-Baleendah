<?php
	include "../../koneksi.php";

	$id = $_GET['id'];
	$nama = $_POST['nama'];
	$email = $_POST['email'];

	if(isset($_POST['ubah_foto'])) {

		$foto = $_FILES['foto']['name'];
		$tmp = $_FILES['foto']['tmp_name'];
		$fotobaru = date('dmYHis').$foto;
		$path = "../../halaman_admin/images/".$fotobaru;

		if(move_uploaded_file($tmp, $path)) {
			$query = "SELECT * FROM user WHERE id='".$id."'";
			$sql = mysqli_query($koneksi, $query);
			$data = mysqli_fetch_array($sql);

			if(is_file("../../halaman_admin/images/".$data['foto']))
				unlink("../../halaman_admin/images/".$data['foto']);

			$query = "UPDATE user SET nama='".$nama."', email='".$email."', foto='".$fotobaru."' WHERE id='".$id."'";
			$sql = mysqli_query($koneksi, $query);

			if($sql) {
				header("location:profil.php?pesan=berhasil");
			}else{
				echo "Maaf, terjadi kesalahan saat mencoba untuk menyimpan data ke database";
				echo "<br><a hrep='profil.php'>Kembali ke Form</a>";
			}
		}else{
			header("location:profil.php?pesan=ErrorFoto");
		}
	}else{
		$query = "UPDATE user SET nama='".$nama."', email='".$email."' WHERE id='".$id."'";
		$sql = mysqli_query($koneksi, $query);

		if($sql) {
			header("location:profil.php?pesan=berhasil");
		}else{
			header("location:profil.php?pesan=");
		}
	}
?>