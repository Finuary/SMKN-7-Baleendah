<?php
	include "../../../koneksi.php";
	$id = $_POST['id'];
	$penulis = $_POST['penulis'];
	$tgl_tulis = $_POST['tgl_tulis'];
	$judul = $_POST['judul'];
	$isi = $_POST['isi'];
	$foto = $_FILES['foto']['name'];
	$tmp = $_FILES['foto']['tmp_name'];

	$fotobaru = date('dmYHis').$foto;
	$path = "../../images/".$fotobaru;
	if(move_uploaded_file($tmp, $path)) {

		$query = "INSERT INTO berita VALUES('".$id."', '".$penulis."', '".$tgl_tulis."', '".$judul."', '".$isi."', '".$fotobaru."')";
		$sql = mysqli_query($koneksi, $query);
		if($sql) {
			header("location:berita.php?pesan=berhasilsimpan");
		}else{
			header("location:berita.php?pesan=gagalsimpan");
		}
	}else{
		header("location:berita.php?pesan=ErrorFotoSimpan");
	}
?>