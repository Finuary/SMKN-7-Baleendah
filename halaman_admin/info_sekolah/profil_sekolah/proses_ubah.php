<?php
	include "../../../koneksi.php";

	$id = $_GET['id'];
	$judul = $_POST['judul'];
	$nama_sekolah = $_POST['nama_sekolah'];
	$npsn_sekolah = $_POST['npsn_sekolah'];
	$alamat_sekolah = $_POST['alamat_sekolah'];
	$telp_sekolah = $_POST['telp_sekolah'];
	$email_sekolah = $_POST['email_sekolah'];
	$jurusan_sekolah = $_POST['jurusan_sekolah'];

	$query = "UPDATE profil_sekolah SET judul='".$judul."', nama_sekolah='".$nama_sekolah."', npsn_sekolah='".$npsn_sekolah."', alamat_sekolah='".$alamat_sekolah."', telp_sekolah='".$telp_sekolah."', email_sekolah='".$email_sekolah."', jurusan_sekolah='".$jurusan_sekolah."' WHERE id='".$id."'";
	$sql = mysqli_query($koneksi, $query);

	if($sql) {
		header("location:profil_sekolah.php?pesan=berhasil");
	}else{
		header("location:profil_sekolah.php?pesan=");
	}
?>