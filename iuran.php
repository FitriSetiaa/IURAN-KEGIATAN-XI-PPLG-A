<!DOCTYPE html>
<html>
<head>
    <title>IURAN KEGIATAN XI PPLG A</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="styleIuran.css">

    <style>
        table {
            margin-left: auto;
            margin-right: auto;
        }

        th, td {
            border: 1px solid white;
            padding: 8px;
        }

        .table th {
            background-color: #BCA37F;
            color: #fff;
        }

        .navbar {
            background-color: #f8f9fa;
            color: #333;
        }

        .navbar-brand {
            color: #333;
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
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Student data</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="iuran.php">Payment</a>
                    </li>
                </ul>
            </div>
            <form action="iuran.php" method="get">
                <label>Search :</label>
                <input type="text" name="cari">
                <button class="btn btn-outline-success" type="cari">Search</button>
            </form>
        </div>
        
    </nav>
 
    <center><h2 style="color: white; margin-top: 50px; font-weight: bold; font-size: 3em;">IURAN SISWA XI PPLG A</h2></center>
    <p style="color: white; text-align: center; font-size: 2em;"> >> Kegiatan Ke Bioskop <<</p>

    <table border="2" class="table table-bordered" style="width: 95%;">
        <tr>
        <th style= "background-color:#BCA37F;color:#fff;">NO</th>
            <th style= "background-color:#BCA37F;color:#fff;">NISN</th>
            <th style= "background-color:#BCA37F;color:#fff;">Nama</th>
            <th style= "background-color:#BCA37F;color:#fff;">Id pembayaran</th>
            <th style= "background-color:#BCA37F;color:#fff;">Minggu 1</th>
            <th style= "background-color:#BCA37F;color:#fff;">Minggu 2</th>
            <th style= "background-color:#BCA37F;color:#fff;">Minggu 3</th>
            <th style= "background-color:#BCA37F;color:#fff;">Minggu 4</th>
            <th style= "background-color:#BCA37F;color:#fff;">Jumlah Iuran</th>
            <th style= "background-color:#BCA37F;color:#fff;">Tenggat Waktu</th>
        </tr>
        <?php 
        include 'koneksi.php';
        $no = 1;
        if(isset($_GET['cari'])){
            $cari = $_GET['cari'];
            $data = mysqli_query($koneksi,"SELECT * FROM viuran WHERE Nama_Siswa LIKE '%".$cari."%' OR id_pembayaran LIKE '%".$cari."%' OR NISN LIKE '%".$cari."%' ORDER BY Nama_Siswa ASC");

        } else {
            $data = mysqli_query($koneksi,"select * from viuran ORDER BY Nama_Siswa ASC");		
        }
        while($d = mysqli_fetch_array($data)){
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['NISN']; ?></td>
                <td><?php echo $d['Nama_Siswa']; ?></td>
                <td><?php echo $d['id_pembayaran']; ?></td>
                <td><?php echo $d['Minggu_1']; ?></td>
                <td><?php echo $d['Minggu_2']; ?></td>
                <td><?php echo $d['Minggu_3']; ?></td>
                <td><?php echo $d['Minggu_4']; ?></td>
                <td><?php echo $d['jumlah']; ?></td>
                <td><?php echo $d['Tenggat_Waktu']; ?></td>
            </tr>
        <?php 
        }
        ?>
    </table>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
