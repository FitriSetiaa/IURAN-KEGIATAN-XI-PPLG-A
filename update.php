<?php 
 
include 'koneksi.php';
$NISN = $_POST['NISN'];
$Nama_Siswa = $_POST['Nama_Siswa'];
$Jenis_Kelamin = $_POST['Jenis_Kelamin'];
$No_Hp = $_POST['No_Hp'];
 
mysqli_query($koneksi,"UPDATE siswa SET Nama_Siswa='$Nama_Siswa', Jenis_Kelamin='$Jenis_Kelamin', No_Hp='$No_Hp' WHERE  NISN='$NISN'");
 
header("location:index.php?pesan=update");
 
?>