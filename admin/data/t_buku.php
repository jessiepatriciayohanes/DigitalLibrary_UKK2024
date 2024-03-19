<?php
include '../../koneksi/koneksi.php';
 
$judul       = $_POST['judul'];
$kategori    = $_POST['kategori'];
$deskripsi   = $_POST['deskripsi'];
$penulis     = $_POST['penulis'];
$penerbit    = $_POST['penerbit'];
$tahunterbit = $_POST['tahunterbit'];
$foto        = $_FILES['foto']['name'];
$buku        = $_FILES['buku']['name'];
$file_foto   = $_FILES['foto']['tmp_name'];
$file_buku   = $_FILES['buku']['tmp_name'];
 
move_uploaded_file($file_foto, '../asset/sampul/' . $foto);
move_uploaded_file($file_buku, '../asset/buku/' . $buku);

mysqli_query($koneksi, "INSERT INTO buku (judul, kategori, deskripsi, penulis, penerbit, tahunterbit, foto, buku)
                        VALUES ('$judul', '$kategori', '$deskripsi', '$penulis', '$penerbit', '$tahunterbit', '$foto', '$buku')");

header("location:../buku.php");
?>