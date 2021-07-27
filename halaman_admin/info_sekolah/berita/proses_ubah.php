<?php
	include "../../../koneksi.php";

	$id = $_GET['id'];
	$penulis = $_POST['penulis'];
	$tgl_tulis = $_POST['tgl_tulis'];
	$judul = $_POST['judul'];
	$isi = $_POST['isi'];

	if(isset($_POST['ubah_foto'])) {

		$foto = $_FILES['foto']['name'];
		$tmp = $_FILES['foto']['tmp_name'];
		$fotobaru = date('dmYHis').$foto;
		$path = "../../images/".$fotobaru;

		if(move_uploaded_file($tmp, $path)) {
			$query = "SELECT * FROM berita WHERE id='".$id."'";
			$sql = mysqli_query($koneksi, $query);
			$data = mysqli_fetch_array($sql);

			if(is_file("../../images/".$data['foto']))
				unlink("../../images/".$data['foto']);

			$query = "UPDATE berita SET penulis='".$penulis."', tgl_tulis='".$tgl_tulis."', judul='".$judul."', isi='".$isi."', foto='".$fotobaru."' WHERE id='".$id."'";
			$sql = mysqli_query($koneksi, $query);

			if($sql) {
				header("location:berita.php?pesan=berhasil");
			}else{
				echo "Maaf, terjadi kesalahan saat mencoba untuk menyimpan data ke database";
				echo "<br><a hrep='form_ubah.php'>Kembali ke Form</a>";
			}
		}else{
			header("location:berita.php?pesan=ErrorFoto");
		}
	}else{
		$query = "UPDATE berita SET penulis='".$penulis."', tgl_tulis='".$tgl_tulis."', judul='".$judul."', isi='".$isi."' WHERE id='".$id."'";
		$sql = mysqli_query($koneksi, $query);

		if($sql) {
			header("location:berita.php?pesan=berhasil");
		}else{
			header("location:berita.php?pesan=");
		}
	}
?>