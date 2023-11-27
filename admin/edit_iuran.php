<!DOCTYPE html>
<html>
<head>
	<title>DATA IURAN SISWA XI PPLG A</title>
</head>
<body>
 
	<CENTER><h2>EDIT DATA IURAN XI PPLG A</h2></CENTER>
	<br/>
	<a href="iuran.php">KEMBALI</a>
	<link rel="stylesheet" href="styleEdit.css">

	<br/>
	<br/>
	
	<?php
	include 'koneksi.php';
	$id = $_GET['NISN'];
	$data = mysqli_query($koneksi,"select * from iuran WHERE NISN='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update_iuran.php">
			<table>
				<tr>
				<td>NISN</td>
					<td><input type="text" name="NISN" value="<?php echo $d['NISN']; ?>"></td>
				</tr>

				<tr>
					<td>Id Pembayaraan</td>
					<td><input type="text" name="id_pembayaran" value="<?php echo $d['id_pembayaran']; ?>"></td>
				</tr>
                <tr>
					<td>Minggu 1</td>
					<td><input type="text" name="Minggu_1" value="<?php echo $d['Minggu_1']; ?>"></td>
				</tr>
                <tr>
					<td>Minggu 2</td>
					<td><input type="text" name="Minggu_2" value="<?php echo $d['Minggu_2']; ?>"></td>
				</tr>
                <tr>
					<td>Minggu 3</td>
					<td><input type="text" name="Minggu_3" value="<?php echo $d['Minggu_3']; ?>"></td>
				</tr>
                <tr>
					<td>Minggu 4</td>
					<td><input type="text" name="Minggu_4" value="<?php echo $d['Minggu_4']; ?>"></td>
				</tr>

                <tr>
					<td>Tenggat Waktu</td>
					<td><input type="date" name="Tenggat_Waktu" value="<?php echo $d['Tenggat_Waktu']; ?>"></td>
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