<?php
    include '../../koneksi/koneksi.php';

    $id = $_POST['idbuku'];
    $judul = $_POST['judul'];
    $kategori = $_POST['kategori'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];
    $tahunterbit = $_POST['tahunterbit'];

    $foto = $_FILES['foto']['name'];
    $buku = $_FILES['buku']['name'];

    move_uploaded_file($_FILES['foto']['tmp_name'], "../../uploads/".$foto);
    move_uploaded_file($_FILES['buku']['tmp_name'], "../../uploads/".$buku);

    $query = "UPDATE buku SET judul='$judul', kategori='$kategori', penulis='$penulis', penerbit='$penerbit', tahunterbit='$tahunterbit', foto='$foto', buku='$buku' WHERE IDbuku='$id'";

    $result = mysqli_query($koneksi, $query);

    if($result){
        echo "Data buku berhasil diperbarui";
    } else {
        echo "Gagal memperbarui data: " . mysqli_error($koneksi);
    }

    header("Location: ../buku.php");
?>