<!DOCTYPE html>
<html>
<head>
	
	<title>login untuk melihat iuran</title>
	<link rel="stylesheet" type="text/css" href="styleLogin.css">
</head>
<body>
 
	<h1>LOGIN DULU YA!</h1>
 
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	
	?>
	<div class="kotak_login">
		<p class="tulisan_login">HALLO  </p>
 
		<form action="cek_login.php" method="post">
		    <div class="input-container">
			<input type="text" name="username" class="form_login" placeholder="Username" required="required">
 
			<input type="password" name="password" class="form_login" placeholder="Password" required="required">
 
			<input type="submit" class="tombol_login" value="LOGIN">
 
			<br/>
			<br/>
			<center>
				<a class="link" href="http://localhost/koneksi_database/index.php">kembali</a>
			</center>
		</form>
		
	</div>
	
 
 
</body>
</html>