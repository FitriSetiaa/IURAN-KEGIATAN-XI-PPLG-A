<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$NISN = $_POST['NISN'];
$Nama_Siswa = $_POST['Nama_Siswa'];
$Jenis_Kelamin = $_POST['Jenis_Kelamin'];
$No_Telepon = $_POST['No_Telepon'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into mahasiswa values('','$NISN','$Nama_Siswa','$Jenis_Kelamin','$No_Telepon)");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>
