<?php
	//mengaktifkan session pada php
	session_start();

	//menghubungkan php dengan koneksi database
	include '../koneksi.php';

	//menangkap data yang dikirim dari form login
	$email = $_POST['email'];
	$password = $_POST['password'];

	//menyeleksi data user dengan email dan password yang sesuai
	$login = mysqli_query($koneksi,"SELECT * FROM user WHERE email = '$email' AND password = '$password'");

	//menghitung jumlah data yang ditemukan
	$cek = mysqli_num_rows($login);

	//cek apakah email dan password di temukan pada database
	if($cek > 0){

		$data = mysqli_fetch_assoc($login);

		//cek jika user login sebagai admin
		if($data['level']=="Admin"){

		//buat session login dan email
		$_SESSION['id'] = $data['id'];
		$_SESSION['nama'] = $data['nama'];
		$_SESSION['foto'] = $data['foto'];
		$_SESSION['level'] = "Admin";
		//alihkan ke halaman dashboard admin
		header("location:../halaman_admin/halaman_admin.php");

		//cek jika user login sebagai pegawai
	}else if($data['level']=="Guru"){
		//buat session login dan email
		$_SESSION['id'] = $data['id'];
		$_SESSION['nama'] = $data['nama'];
		$_SESSION['foto'] = $data['foto'];
		$_SESSION['level'] = "Guru";
		//alihkan ke halaman dashboard pegawai
		header("location:../halaman_guru/halaman_guru.php");

		//cek jika user login sebagai pengurus
	}else if($data['level']=="Siswa"){
		//buat session login dan email
		$_SESSION['id'] = $data['id'];
		$_SESSION['nama'] = $data['nama'];
		$_SESSION['foto'] = $data['foto'];
		$_SESSION['level'] = "Siswa";
		//alihkan ke halaman dashboard pegawai
		header("location:../halaman_siswa/halaman_siswa.php");
	}else{
		//alihkan ke halaman login kembali
		header("location:login.php?pesan=");
	}
}else{
	header("location:login.php?pesan=gagal");
}
?>