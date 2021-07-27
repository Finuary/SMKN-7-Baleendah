<?php
	include "../../../koneksi.php";

	$id = $_GET['id'];
	$judul = $_POST['judul'];
	$pembuka = $_POST['pembuka'];
	$isi = $_POST['isi'];

	$query = "UPDATE tentang_sekolah SET judul='".$judul."', pembuka='".$pembuka."', isi='".$isi."' WHERE id='".$id."'";
	$sql = mysqli_query($koneksi, $query);

	if($sql) {
		header("location:tentang_sekolah.php?pesan=berhasil");
	}else{
		header("location:tentang_sekolah.php?pesan=");
	}
?>