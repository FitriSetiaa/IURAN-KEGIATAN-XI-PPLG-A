<!DOCTYPE html>
<html>
<head>
    <title>IURAN KEGIATAN XI PPLG A</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="styleIndex.css">

    <style>
        table {
            margin: auto;
        }
        th, td {
            border: 1px solid white;
            padding: 8px;
            background-color: transparent;
            color: #fff;
        }
        th {
            font-weight: bold;
        }
        .navbar {
            background-color: #f8f9fa; /* Background color navbar */
            color: #333; /* Text color navbar */
        }
        .navbar-brand {
            color: #333; /* Text color brand */
            font-weight: bold;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">XI PPLG A</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
				<li class="nav-item">
                        <a class="nav-link" href="home.php">HI!</a>
                    </li>
                        <a class="nav-link" href="index.php">Student data</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" href="iuran.php">Payment</a>
                    </li>
                </ul>
            </div>
			<ul class="navbar-nav">
        <li class="nav-item">
		<a href="login.php" class="btn btn-outline-primary mr-3">Login Admin</a>
        </li>
      <ul class="



</a>

        </div>
    </nav>
    <center><h2 style="color: white; margin-top: 50px; font-weight: bold; font-size: 3em;">DATA SISWA XI PPLG A</h2></center>
    <br/><br/>
    <table border="2" class="table table-bordered" style="width: 95%;">
        <tr>
        <th style= "background-color:#BCA37F;color:#fff;">NO</th>
            <th style= "background-color:#BCA37F;color:#fff;">NISN</th>
            <th style= "background-color:#BCA37F;color:#fff;">Nama</th>
            <th style= "background-color:#BCA37F;color:#fff;">Jenis Kelamin</th>
            <th style= "background-color:#BCA37F;color:#fff;">No Telepon</th>
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
            </tr>
            <?php 
        }
        ?>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
