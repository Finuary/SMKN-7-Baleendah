<?php
	include "../koneksi.php";
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$level = "Siswa";
	$foto = $_FILES['foto']['name'];

		$query = "INSERT INTO user VALUES('".$id."', '".$nama."', '".$email."', '".$password."', '".$level."', '".$foto."')";
		$sql = mysqli_query($koneksi, $query);
		if($sql) {
			header("location:register.php?pesan=berhasil");
		}else{
			header("location:register.php?pesan=");
		}
?>