<?php
	include "../../../koneksi.php";

	$id = $_GET['id'];
	$query = "SELECT * FROM kritik_saran WHERE id='".$id."'";
	$sql = mysqli_query($koneksi, $query);
	$data = mysqli_fetch_array($sql);

	if(is_file("../images/".$data['foto']))
		unlink("../images/".$data['foto']);

	$query2 = "DELETE FROM kritik_saran WHERE id='".$id."'";
	$sql2 = mysqli_query($koneksi, $query2);
	if($sql2) {
		header("location:kontak.php?pesan=berhasilhapus");
	}else{
		header("location:kontak.php?pesan=gagalhapus");
	}
?>