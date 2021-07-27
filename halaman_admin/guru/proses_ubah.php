<?php
	include "../../koneksi.php";

	$id = $_GET['id'];
	$nip = $_POST['nip'];
	$nama = $_POST['nama'];
	$mata_pelajaran = $_POST['mata_pelajaran'];
	$alamat = $_POST['alamat'];

	if(isset($_POST['ubah_foto'])) {

		$foto = $_FILES['foto']['name'];
		$tmp = $_FILES['foto']['tmp_name'];
		$fotobaru = date('dmYHis').$foto;
		$path = "../images/".$fotobaru;

		if(move_uploaded_file($tmp, $path)) {
			$query = "SELECT * FROM guru WHERE id='".$id."'";
			$sql = mysqli_query($koneksi, $query);
			$data = mysqli_fetch_array($sql);

			if(is_file("../images/".$data['foto']))
				unlink("../images/".$data['foto']);

			$query = "UPDATE guru SET nip='".$nip."', nama='".$nama."', mata_pelajaran='".$mata_pelajaran."', alamat='".$alamat."', foto='".$fotobaru."' WHERE id='".$id."'";
			$sql = mysqli_query($koneksi, $query);

			if($sql) {
				header("location:tambah_guru.php?pesan=berhasil");
			}else{
				echo "Maaf, terjadi kesalahan saat mencoba untuk menyimpan data ke database";
				echo "<br><a hrep='form_ubah.php'>Kembali ke Form</a>";
			}
		}else{
			header("location:tambah_guru.php?pesan=ErrorFoto");
		}
	}else{
		$query = "UPDATE guru SET nip='".$nip."', nama='".$nama."', mata_pelajaran='".$mata_pelajaran."', alamat='".$alamat."' WHERE id='".$id."'";
		$sql = mysqli_query($koneksi, $query);

		if($sql) {
			header("location:tambah_guru.php?pesan=berhasil");
		}else{
			header("location:tambah_guru.php?pesan=");
		}
	}
?>