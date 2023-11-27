<?php 
 
include 'koneksi.php';
$NISN = $_POST['NISN'];
$Nama_Siswa = $_POST['Nama_Siswa'];
$id_pembayaran = $_POST['id_pembayaran'];
$Minggu_1 = $_POST['Minggu_1'];
$Minggu_2 = $_POST['Minggu_2'];
$Minggu_3 = $_POST['Minggu_3'];
$Minggu_4 = $_POST['Minggu_4'];
$Jumlah_Iuran = $_POST['Jumlah_Iuran'];
$Tenggat_Waktu = $_POST['Tenggat_Waktu'];
 
mysqli_query($koneksi,"UPDATE iuran SET Nama_Siswa='$Nama_Siswa', id_pembayaran='$id_pembayaran', Minggu_1='$Minggu_1', Minggu_2='$Minggu_2', Minggu_3='$Minggu_3', Minggu_4='$Minggu_4', Jumlah_Iuran='$Jumlah_Iuran', Tenggat_Waktu='$Tenggat_Waktu' WHERE  NISN='$NISN'");
 
header("location:iuran.php?pesan=update");
 
?>