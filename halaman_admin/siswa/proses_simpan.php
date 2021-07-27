<?php
	include "../../koneksi.php";
	$id = $_POST['id'];
	$nis = $_POST['nis'];
	$nama = $_POST['nama'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$alamat = $_POST['alamat'];
	$jurusan = $_POST['jurusan'];
	$foto = $_FILES['foto']['name'];
	$tmp = $_FILES['foto']['tmp_name'];

	$fotobaru = date('dmYHis').$foto;
	$path = "../images/".$fotobaru;
	if(move_uploaded_file($tmp, $path)) {

		$query = "INSERT INTO siswa VALUES('".$id."', '".$nis."', '".$nama."', '".$jenis_kelamin."', '".$alamat."', '".$jurusan."', '".$fotobaru."')";
		$sql = mysqli_query($koneksi, $query);
		if($sql) {
			header("location:tambah_siswa.php?pesan=berhasilsimpan");
		}else{
			header("location:tambah_siswa.php?pesan=gagalsimpan");
		}
	}else{
		header("location:tambah_siswa.php?pesan=ErrorFotoSimpan");
	}
?>