<?php
include '../../koneksi/koneksi.php';

if (isset($_GET['iduser'])) {
    $id = $_GET['iduser'];

    $delete_query = mysqli_query($koneksi, "DELETE FROM user WHERE IDuser='$id'");

    if ($delete_query) {
        header("Location:../anggota.php");
        exit();
    } else {
        echo "Error deleting record: " . mysqli_error($koneksi);
    }
} else {
    header("Location: ../anggota.php");
    exit();
}
?>