<?php


   $Nama_Depan = $_POST['Nama_Depan'];
   $Nama_Belakang = $_POST['Nama_Belakang'];
   $Tanggal_Lahir = $_POST['Tanggal_Lahir'];
   $Jenis_Kelamin = $_POST['Jenis_Kelamin'];
   $Alamat = $_POST['Alamat'];
   $Agama = $_POST['Agama'];
   $Nama_Ayah = $_POST['Nama_Ayah'];
   $Nama_Ibu = $_POST['Nama_Ibu'];
   $Pekerjaan_Ayah = $_POST['Pekerjaan_Ayah'];
   $Pekerjaan_Ibu = $_POST['Pekerjaan_Ibu'];
   $Email_Ayah = $_POST['Email_Ayah'];
   $Email_Ibu = $_POST['Email_Ibu'];

   include_once("koneksiDB.php");
   $result = mysql_query($mysql, "insert into siswa_baru_2020(Nama_Depan, Nama_Belakang, Tanggal_Lahir, Jenis_Kelamin, Alamat, Agama, Nama_Ayah, Nama_Ibu, Pekerjaan_Ayah, Pekerjaan_Ibu, Email_Ayah, Email_Ibu) values(
   	    'Nama_Depan',
   	    'Nama_Belakang',
   	    'Tanggal_Lahir',
   	    'Jenis_Kelamin'
   	    'Alamat',
   	    'Agama',
   	    'Nama_Ayah',
   	    'Nama_Ibu',
   	    'Email_Ayah',
   	    'Email_Ibu')");
    echo "Menyimpan data BERHASIL<meta htt-equiv=refresh content=3;url=pendaftaran.php";
?>