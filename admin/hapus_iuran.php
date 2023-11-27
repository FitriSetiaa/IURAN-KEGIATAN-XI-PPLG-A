<?php
include ('koneksi.php');

if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];

    $delete_query = "DELETE FROM iuran WHERE id_pembayaran = '$id'";
    $koneksi->query($delete_query);
    header("Location: iuran.php");
}
?>