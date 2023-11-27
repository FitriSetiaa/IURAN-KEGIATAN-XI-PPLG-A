<!DOCTYPE html>
<html>
<head>
</head>
<body>
 
	<center>
 
		<h2>DATA LAPORAN IURAN SISWA XI PLG A</h2>
 
	</center>
 
	<?php 
	include 'koneksi.php';
	?>
 
 <table border="1" style="width: 100%">
		<tr>
			<th width="5%">No</th>
			<th width="10%">NISN</th>
			<th width="27%">Nama</th>
            <th width="12%">Id Pembayaran</th>
            <th width="10%">Minggu 1</th>
            <th width="10%">Minggu 2</th>
            <th width="10%">Minggu 3</th>
            <th width="10%">Minggu 4</th>
            <th width="15%">Jumlah Iuran</th>
            <th width="15%">Tenggat Waktu</th>
		</tr>
		<?php 
		$no = 1;
		$sql = mysqli_query($koneksi,"select * from viuran ORDER BY Nama_Siswa ASC");
		while($data = mysqli_fetch_array($sql)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $data['NISN']; ?></td>
			<td><?php echo $data['Nama_Siswa']; ?></td>
			<td><?php echo $data['id_pembayaran']; ?></td>
            <td><?php echo $data['Minggu_1']; ?></td>
            <td><?php echo $data['Minggu_2']; ?></td>
            <td><?php echo $data['Minggu_3']; ?></td>
            <td><?php echo $data['Minggu_4']; ?></td>
            <td><?php echo $data['jumlah']; ?></td>
            <td><?php echo $data['Tenggat_Waktu']; ?></td>
            
            
		</tr>
		<?php 
		}
		?>
	</table>
 
	<script>
		window.print();
	</script>
 
</body>
</html>