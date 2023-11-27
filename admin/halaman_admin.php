<!DOCTYPE html>
<html>
<head>
	<title>Halaman admin</title>
</head>
<body>
	<?php 
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:login.php?pesan=gagal");
	} else {
		header("location:index.php");
	}
	
 
	?>
	<h1>Halaman Admin</h1>
 
	<p>Halo ! <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
	<a href="logout.php">LOGOUT</a>
 
	<br/>
	<br/>
 
	<a><a href="http://localhost/koneksi_database/admin/index.php">Membuat Login Multi Level Dengan PHP</a> - www.malasngoding.com</a>
</body>
</html>
