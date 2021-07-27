<?php
	include "../koneksi.php";

	$id = $_GET['id'];
	$nama = $_POST['nama'];
	$judul = $_POST['judul'];
	$keterangan = $_POST['keterangan'];

	if(isset($_POST['ubah_foto'])) {

		$foto = $_FILES['foto']['name'];
		$tmp = $_FILES['foto']['tmp_name'];
		$fotobaru = date('dmYHis').$foto;
		$path = "images/".$fotobaru;

		if(move_uploaded_file($tmp, $path)) {
			$query = "SELECT * FROM dashboard WHERE id='".$id."'";
			$sql = mysqli_query($koneksi, $query);
			$data = mysqli_fetch_array($sql);

			if(is_file("images/".$data['foto']))
				unlink("images/".$data['foto']);

			$query = "UPDATE dashboard SET nama='".$nama."', judul='".$judul."', keterangan='".$keterangan."', foto='".$fotobaru."' WHERE id='".$id."'";
			$sql = mysqli_query($koneksi, $query);

			if($sql) {
				header("location:halaman_admin.php?pesan=berhasil");
			}else{
				echo "Maaf, terjadi kesalahan saat mencoba untuk menyimpan data ke database";
				echo "<br><a hrep='halaman_admin.php'>Kembali ke Form</a>";
			}
		}else{
			header("location:halaman_admin.php?pesan=ErrorFoto");
		}
	}else{
		$query = "UPDATE dashboard SET nama='".$nama."', judul='".$judul."', keterangan='".$keterangan."' WHERE id='".$id."'";
		$sql = mysqli_query($koneksi, $query);

		if($sql) {
			header("location:halaman_admin.php?pesan=berhasil");
		}else{
			header("location:halaman_admin.php?pesan=");
		}
	}
?>