<!DOCTYPE html>
<html>
<head>
	<title>Halaman admin</title>
</head>
<body>
<?php
session_start();
if(!isset($_SESSION['username'])) {
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Selamat datang, <?php echo $_SESSION['username']; ?></h1>
    <p>Ini adalah halaman admin</p>
    <a href="logout.php">Logout</a>
</body>
</html>
