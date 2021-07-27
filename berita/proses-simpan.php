<?php
	include "../koneksi.php";
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$web = $_POST['web'];
	$isi = $_POST['isi'];

		$query = "INSERT INTO komentar VALUES('".$id."', '".$nama."', '".$email."','".$web."', '".$isi."')";
		$sql = mysqli_query($koneksi, $query);
		if($sql) {
			header("location:berita_utama.php?id=".$sql['id']."");
		}else{
			echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
			echo "<br><a href='berita_utama.php?id=".$sql['id']."'>Kembali ke Form</a>";
		}
?>