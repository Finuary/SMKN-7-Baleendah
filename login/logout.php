<?php
	//mengaktifkan session php
	session_start();

	//meghapus semua session
	session_destroy();

	//mengalihkan halaman ke halaman login
	header("location:login.php?pesan=logout");
?>