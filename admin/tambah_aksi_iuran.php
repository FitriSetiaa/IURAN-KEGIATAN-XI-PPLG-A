<?php 
// koneksi database
include 'Koneksi.Php';
 
// menangkap data yang di kirim dari form
$NISN = $_POST['NISN'];
$Nama_Siswa = $_POST['Nama_Siswa'];
$id_pembayaraan = $_POST['id_pembayaraan'];
$Minggu_1 = $_POST['Minggu_1'];
$Minggu_2 = $_POST['Minggu_2'];
$Minggu_3 = $_POST['Minggu_3'];
$Minggu_4 = $_POST['Minggu_4'];
$jumlah = $_POST['jumlah'];
$Tenggat_Waktu = $_POST['Tenggat-Waktu'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into iuran values('','$NISN','$Nama_Siswa','$id_pembayaraan','$Minggu_1','$Minggu_2','$Minggu_3','$Minggu_4'$jumlah','$Tenggat_Waktu)");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>
