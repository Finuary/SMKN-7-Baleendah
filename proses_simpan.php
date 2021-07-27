<?php
	include "koneksi.php";
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$kritik_saran = $_POST['kritik_saran'];
	$komentar = $_POST['komentar'];

		$query = "INSERT INTO kritik_saran VALUES('".$id."', '".$nama."', '".$email."', '".$kritik_saran."', '".$komentar."')";
		$sql = mysqli_query($koneksi, $query);
		if($sql) {
			header("location:index.php?pesan=berhasil");
		}else{
			header("location:index.php?pesan=");
		}
?>