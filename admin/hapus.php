<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$NISN = $_GET['NISN'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"DELETE from siswa where NISN='$NISN'");
 
// mengalihkan halaman kembali ke index.php
header("location:index_admin.php");
 
?>