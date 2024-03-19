<?php
include '../../koneksi/koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $judul = $_POST["judul"];
    $penulis = $_POST["penulis"];
    $penerbit = $_POST["penerbit"];
    $tahunterbit = $_POST["tahunterbit"];

    $query = "UPDATE buku SET judul='$judul', penulis='$penulis', penerbit='$penerbit', tahunterbit='$tahunterbit' WHERE idbuku='$idbuku'";

    if (mysqli_query($koneksi, $query)) {
        echo "Perubahan berhasil disimpan.";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
} else {
    echo "Akses tidak sah.";
}

header("Location: ../buku.php");
exit();
?>
