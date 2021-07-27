<?php
	include "../../koneksi.php";

	$id = $_GET['id'];
	$nis = $_POST['nis'];
	$nama = $_POST['nama'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$alamat = $_POST['alamat'];
	$jurusan = $_POST['jurusan'];

	if(isset($_POST['ubah_foto'])) {

		$foto = $_FILES['foto']['name'];
		$tmp = $_FILES['foto']['tmp_name'];
		$fotobaru = date('dmYHis').$foto;
		$path = "../images/".$fotobaru;

		if(move_uploaded_file($tmp, $path)) {
			$query = "SELECT * FROM siswa WHERE id='".$id."'";
			$sql = mysqli_query($koneksi, $query);
			$data = mysqli_fetch_array($sql);

			if(is_file("../images/".$data['foto']))
				unlink("../images/".$data['foto']);

			$query = "UPDATE siswa SET nis='".$nis."', nama='".$nama."', jenis_kelamin='".$jenis_kelamin."', alamat='".$alamat."', jurusan='".$jurusan."', foto='".$fotobaru."' WHERE id='".$id."'";
			$sql = mysqli_query($koneksi, $query);

			if($sql) {
				header("location:tambah_siswa.php?pesan=berhasil");
			}else{
				echo "Maaf, terjadi kesalahan saat mencoba untuk menyimpan data ke database";
				echo "<br><a hrep='form_ubah.php'>Kembali ke Form</a>";
			}
		}else{
			header("location:tambah_siswa.php?pesan=ErrorFoto");
		}
	}else{
		$query = "UPDATE siswa SET nis='".$nis."', nama='".$nama."', jenis_kelamin='".$jenis_kelamin."', alamat='".$alamat."', jurusan='".$jurusan."' WHERE id='".$id."'";
		$sql = mysqli_query($koneksi, $query);

		if($sql) {
			header("location:tambah_siswa.php?pesan=berhasil");
		}else{
			header("location:tambah_siswa.php?pesan=");
		}
	}
?>