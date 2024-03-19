<?php
include '../../koneksi/koneksi.php';

$id = $_GET['IDpeminjaman'];
$query = mysqli_query($koneksi, "DELETE FROM peminjaman WHERE IDpeminjaman =$id");
header("Location: ../peminjam.php");
?>

    