<?php
	include "../../../koneksi.php";
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$keterangan = $_POST['keterangan'];
	$foto = $_FILES['foto']['name'];
	$tmp = $_FILES['foto']['tmp_name'];

	$fotobaru = date('dmYHis').$foto;
	$path = "../../images/".$fotobaru;
	if(move_uploaded_file($tmp, $path)) {

		$query = "INSERT INTO jurusan VALUES('".$id."', '".$nama."', '".$keterangan."', '".$fotobaru."')";
		$sql = mysqli_query($koneksi, $query);
		if($sql) {
			header("location:jurusan.php?pesan=berhasilsimpan");
		}else{
			header("location:jurusan.php?pesan=gagalsimpan");
		}
	}else{
		header("location:jurusan.php?pesan=ErrorFoto");
	}
?>