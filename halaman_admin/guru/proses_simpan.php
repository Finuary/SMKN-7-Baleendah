<?php
	include "../../koneksi.php";
	$id = $_POST['id'];
	$nis = $_POST['nip'];
	$nama = $_POST['nama'];
	$mata_pelajaran = $_POST['mata_pelajaran'];
	$alamat = $_POST['alamat'];
	$foto = $_FILES['foto']['name'];
	$tmp = $_FILES['foto']['tmp_name'];

	$fotobaru = date('dmYHis').$foto;
	$path = "../images/".$fotobaru;
	if(move_uploaded_file($tmp, $path)) {

		$query = "INSERT INTO guru VALUES('".$id."', '".$nis."', '".$nama."', '".$mata_pelajaran."', '".$alamat."', '".$fotobaru."')";
		$sql = mysqli_query($koneksi, $query);
		if($sql) {
			header("location:tambah_guru.php?pesan=berhasilsimpan");
		}else{
			header("location:tambah_guru.php?pesan=gagalsimpan");
		}
	}else{
		header("location:tambah_guru.php?pesan=ErrorFotoSimpan");
	}
?>