<!DOCTYPE html>
<html lang="en">
<head>
<style>
        /* Styling untuk form */
        .form-container {
            width: 400px;
            margin: 0 auto;
            padding: 50px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #AAC8A7;
        }

        .form-container label {
            display: block;
            margin-bottom: 10px;
        }

        .form-container input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .form-container input[type="submit"] {
            background-color: #39A7FF;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        .form-container input[type="submit"]:hover {
            background-color: #2B3499;
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
    <title> DATA IURAN SISWA XI PPLG A</title>
</head>
<body>
<li><a href="iuran.php">kembali</a></li>
    <?php
include 'Koneksi.php';

if (isset($_POST['NISN']) && isset($_POST['Nama_Siswa']) && isset($_POST['id_pembayaran']) && isset($_POST['Minggu_1'])&& isset($_POST['Minggu_2'])&& isset($_POST['Minggu_3'])&& isset($_POST['Minggu_4'])&& isset($_POST['Jumlah_Iuran'])&& isset($_POST['Tenggat_Waktu'])) {
    $NISN = $_POST['NISN'];
    $Nama_Siswa = $_POST['Nama_Siswa'];
    $id_pembayaran = $_POST['id_pembayaran'];
	$Minggu_1= $_POST['Minggu_1'];
    $Minggu_2= $_POST['Minggu_2'];
    $Minggu_3= $_POST['Minggu_3'];
    $Minggu_4= $_POST['Minggu_4'];
    $Jumlah_Iuran= $_POST['Jumlah_Iuran'];
    $Tenggat_Waktu= $_POST['Tenggat_Waktu'];

    $query = "INSERT INTO iuran (NISN,Nama_Siswa,id_pembayaran,Minggu_1,Minggu_2,Minggu_3,Minggu_4,Jumlah_Iuran,Tenggat_Waktu) VALUES ('$NISN', '$Nama_Siswa', '$id_pembayaran','$Minggu_1','$Minggu_2','$Minggu_3','$Minggu_4','$Jumlah_Iuran','$Tenggat_Waktu')";

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
                <CENTER><h2>TAMBAH DATA IURAN XI PPLG A</h2></CENTER>
                <form action="tambah_iuran.php" method="post">
                    <label for="NISN">NISN:</label>
                    <td><select name="NISN">
                <option value="">-----</option>
           <?php
                include 'koneksi.php';
                $query = mysqli_query($koneksi, "SELECT NISN,Nama_Siswa FROM siswa") or die (mysqli_error($koneksi));

                while($data = mysqli_fetch_array($query)){
              echo "<option value=$data[NISN]>$data[Nama_Siswa]>$data[NISN]</option>";
                }                          
                ?>
              </select></td>
                    <label for="Nama_siswa">Nama:</label>
                    <input type="text" id="Nama_Siswa" name="Nama_Siswa"><br>
                    <label for="id_pembayaran">ID Pembayaraan:</label>
                    <input type="text" id="id_pembayaran" name="id_pembayaran"><br>
					<label for="Minggu_1">Minggu 1:</label>
                    <input type="text" id="Minggu_1" name="Minggu_1"><br>
                    <label for="Minggu_2">Minggu 2:</label>
                    <input type="text" id="Minggu_2" name="Minggu_2"><br>
                    <label for="Minggu_3">Minggu 3:</label>
                    <input type="text" id="Minggu_3" name="Minggu_3"><br>
                    <label for="Minggu_4">Minggu 4:</label>
                    <input type="text" id="Minggu_4" name="Minggu_4"><br>
                    <label for="Jumlah_Iuran">Jumlah Iuran:</label>
                    <input type="text" id="Jumlah_Iuran" name="Jumlah_Iuran"><br>
                    <label for="Tenggat_Waktu">Tenggat Waktu:</label>
                    <input type="date" id="Tenggat_Waktu" name="Tenggat_Waktu"><br>
                    <input type="submit" value="Tambah">
                    <button type="submit" onclick="history.back()" value="Kembali ke halaman sebelumnya">Kembali</button>

                </form>
            </div>
        </div>
    </div>
</body>
</html>