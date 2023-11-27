<?php 
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
$result = mysqli_query($koneksi, $query);

if(mysqli_num_rows($result) == 1) {
    $_SESSION['username'] = $username;
    header("Location: http://localhost/koneksi_database/admin/index_admin.php");
} else {
    header("Location: http://localhost/koneksi_database/login.php?pesan=gagal");
}
?>