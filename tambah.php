<!DOCTYPE html>
<html lang="en">
<head>
<style>
        /* Styling untuk form */
        .form-container {
            width: 300px;
            margin: 0 auto;
            padding: 45px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        .form-container label {
            display: block;
            margin-bottom: 5px;
        }

        .form-container input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .form-container input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 30px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        .form-container input[type="submit"]:hover {
            background-color: #45a049;
        }

        /* Styling untuk tata letak */
        .container {
            display: flex;
            justify-content: space-between;
        }

        .container .left {
            width: 70%; /* Lebar tabel */
        }

        .container .right {
            width: 30%; /* Lebar formulir */
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA SISWA XI PPLG A</title>
</head>
<body>
<li><a href="index.php"> ~kembali ke data siswa</a></li>
    <?php
include 'Koneksi.php';

if (isset($_POST['NISN']) && isset($_POST['Nama_Siswa']) && isset($_POST['Jenis_Kelamin']) && isset($_POST['No_Hp'])) {
    $NISN = $_POST['NISN'];
    $Nama_Siswa = $_POST['Nama_Siswa'];
    $Jenis_Kelamin = $_POST['Jenis_Kelamin'];
	$No_Hp= $_POST['No_Hp'];

    $query = "INSERT INTO siswa (NISN,Nama_Siswa,Jenis_Kelamin,No_Hp) VALUES ('$NISN', '$Nama_Siswa', '$Jenis_Kelamin','$No_Hp')";

    if (mysqli_query($koneksi, $query)) {
        echo "Data berhasil ditambahkan.";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
}

mysqli_close($koneksi);
?>
<div class="right">
            <div class="form-container">
                <center><h2>DATA SISWA XI PPLG A</h2></center>
                <form action="tambah.php" method="post">
                    <label for="NISN">NISN:</label>
                    <input type="text" id="NISN" name="NISN"><br>
                    <label for="Nama_siswa">Nama:</label>
                    <input type="text" id="Nama_Siswa" name="Nama_Siswa"><br>
                    <label for="Jenis_Kelamin">Jenis Kelamin:</label>
                    <select name="Jenis_Kelamin" id="Jenis_Kelamin">
					<option value="Perempuan">Perempuan</option>
                    <option value="Laki-Laki">Laki-Laki</option> </select>
                    <label for="No_Hp">No Telepon:</label>
                    <input type="text" id="No_Hp" name="No_Hp"><br>
                    <center><input type="submit" value="Tambah"></center>
                </form>
            </div>
        </div>
    </div>
</body>
</html>



