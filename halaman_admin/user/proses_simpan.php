<?php
	include "../../koneksi.php";
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$level = $_POST['level'];
	$foto = $_FILES['foto']['name'];
	$tmp = $_FILES['foto']['tmp_name'];

	$fotobaru = date('dmYHis').$foto;
	$path = "../images/".$fotobaru;
	if(move_uploaded_file($tmp, $path)) {

		$query = "INSERT INTO user VALUES('".$id."', '".$nama."', '".$email."', '".$password."', '".$level."', '".$fotobaru."')";
		$sql = mysqli_query($koneksi, $query);
		if($sql) {
			header("location:tambah_user.php?pesan=berhasilsimpan");
		}else{
			header("location:tambah_user.php?pesan=gagalsimpan");
		}
	}else{
		header("location:tambah_user.php?pesan=ErrorFotoSimpan");
	}
?>