<?php
	include "../../../koneksi.php";

	$id = $_GET['id'];
	$judul = $_POST['judul'];
	$pembuka = $_POST['pembuka'];
	$isi = $_POST['isi'];

	$query = "UPDATE selayang_pandang SET judul='".$judul."', pembuka='".$pembuka."', isi='".$isi."' WHERE id='".$id."'";
	$sql = mysqli_query($koneksi, $query);

	if($sql) {
		header("location:selayang_pandang.php?pesan=berhasil");
	}else{
		header("location:selayang_pandang.php?pesan=");
	}
?>