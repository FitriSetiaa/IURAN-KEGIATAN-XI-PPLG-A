<?php
include 'koneksi.php';

// Ambil kata kunci pencarian
$keyword = $_POST["keyword"] ?? '';

// Buat query SQL untuk mencari data
$query = "SELECT * FROM viuran WHERE NISN LIKE '%$keyword%' OR Nama_Siswa LIKE '%$keyword%' OR id_pembayaran LIKE '%$keyword%'";

// Eksekusi query SQL
$result = mysqli_query($koneksi, $query);

// Tampilkan hasil pencarian
while ($row = mysqli_fetch_array($result)) {
    echo $row["NISN"] . " - " . $row["Nama_Siswa"] . " - " . $row["id_pembayaran"] . "<br>";
}
?>
