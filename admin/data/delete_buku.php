<?php
include '../../koneksi/koneksi.php';

if (isset($_GET['idbuku'])) {
    $id = $_GET['idbuku'];

    $delete_query = mysqli_query($koneksi, "DELETE FROM buku WHERE IDbuku='$id'");

    if ($delete_query) {
        header("Location:../buku.php");
        exit();
    } else {
        echo "Error deleting record: " . mysqli_error($koneksi);
    }
} else {
    header("Location: ../buku.php");
    exit();
}
?>
