<!DOCTYPE html>
<html>
<head>
	<title>IURAN KEGIATAN XI PPLG A</title>
	
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<link rel="stylesheet" href="styleIndex.css">

	<style>
        table {
            margin-left: auto;
            margin-right: auto;}
			th, td {
			border: 1px solid white;
			padding: 8px;
		}
		 </style>
</head>
<body>
<?php
  session_start();

  if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
  }

  $username = $_SESSION['username'];
?>
	
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">HALLO ADMIN !!</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index_admin.php">Data Siswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="iuran.php">Iuran Kegiatan</a>
        </li>
		
      </ul>
    </div>
	<div class="nav-item">
				<a class="btn btn-dark" href="logout.php">LOGOUT</a>
			</div>

  </div>
</nav>
<center><h2 style="color: white; margin-top: 50px; font-weight: bold; font-size: 3em;">DATA SISWA XI PPLG A</h2></center>


	
</style>
	<br/>
	<a href="tambah.php" style="text-decoration: none; padding: 8px 12px; border: 1px solid #fff; border-radius: 5px; font-weight: bold; margin-bottom: 20px; color: white;">+ TAMBAH SISWA</a>

	<br/>
	<br/>
	<table border="2" class="table table-bordered" style="width: 95%;">
		
		<tr>
			<th style= "background-color:#BCA37F;color:#fff;">NO</th>
			<th style= "background-color:#BCA37F;color:#fff;">NISN</th>
			<th style= "background-color:#BCA37F;color:#fff;">Nama</th>
			<th style= "background-color:#BCA37F;color:#fff;">Jenis Kelamin</th>
            <th style= "background-color:#BCA37F;color:#fff;">No Telepon</th>
			<th style= "background-color:#BCA37F;color:#fff;">Action</th>
		</tr>
		
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from siswa ORDER BY Nama_Siswa ASC");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['NISN']; ?></td>
				<td><?php echo $d['Nama_Siswa']; ?></td>
				<td><?php echo $d['Jenis_Kelamin']; ?></td>
                <td><?php echo $d['No_Hp']; ?></td>
				<td>
				<a href="edit.php?NISN=<?php echo $d['NISN'];?>" type="button" class="btn btn-warning">EDIT</a>
                <a href="hapus.php?NISN=<?php echo $d['NISN'];?>" onclick="return confirm('YAKIN MAU DIHAPUS?')">HAPUS</a>

				</td>
			</tr>
			<?php 
		}
		?>
	</table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>