<?php
	

	$Nama_Depan = $_POST['Nama_Depan'];
	$Nama_Belakang = $_POST['Nama_Belakang'];
	$Username = $_POST['username'];
	$Kata_Sandi = $_POST['password'];
	$Status = $_POST['tipe_user'];
	$Tanggal_Lahir = $_POST['Tanggal_Lahir'];
	$Jenis_Kelamin = $_POST['Jenis_Kelamin'];

	include_once("koneksiDB_register.php");
	$result = mysqli_query($koneksi, "insert into login(Nama_Depan, Nama_Belakang, username, password, tipe_user, Tanggal_Lahir, Jenis_Kelamin) values(
		'$Nama_Depan', 
		'$Nama_Belakang', 
		'$Username',
		'$Kata_Sandi',
		'$Status',
		'$Tanggal_Lahir',
		'$Jenis_Kelamin')");
	echo "Menyimpan data BERHASIL HOREEEEEE <meta http-equiv=refresh content=3;url=../SPP/Pembayaran.php>";
?>