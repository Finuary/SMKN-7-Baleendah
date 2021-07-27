<?php
	include "../../../koneksi.php";

	$id = $_GET['id'];
	$telp = $_POST['telp'];
	$email = $_POST['email'];
	$alamat = $_POST['alamat'];

	$query = "UPDATE kontak SET telp='".$telp."', email='".$email."', alamat='".$alamat."' WHERE id='".$id."'";
	$sql = mysqli_query($koneksi, $query);

	if($sql) {
		header("location:kontak.php?pesan=berhasil");
	}else{
		header("location:kontak.php?pesan=");
	}
?>