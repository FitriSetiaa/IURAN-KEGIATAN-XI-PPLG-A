<!DOCTYPE html>
<html>
<head>
	
	<title>DATA SISWA XI PPLG A</title>
</head>
<body>
 
	<Center><h2>EDIT DATA SISWA XI PPLG A </h2></center>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<?php
	include 'koneksi.php';
	$id = $_GET['NISN'];
	$data = mysqli_query($koneksi,"select * from siswa WHERE NISN='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
				<tr>			
					<td>NISN</td>
					<td>
						<input type="hidden" name="NISN" value="<?php echo $d['NISN']; ?>">
						<input type="text" name="NISN" value="<?php echo $d['NISN']; ?>">
					</td>
				</tr>
				<tr>
					<td>Nama_Siswa</td>
					<td><input type="text" name="Nama_Siswa" value="<?php echo $d['Nama_Siswa']; ?>"></td>
				</tr>

				<tr>
					<td>Jenis Kelamin</td>
					<td><input type="text" name="Jenis_Kelamin" value="<?php echo $d['Jenis_Kelamin']; ?>"></td>
				</tr>
                <tr>
					<td>No Hp</td>
					<td><input type="text" name="No_Hp" value="<?php echo $d['No_Hp']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>