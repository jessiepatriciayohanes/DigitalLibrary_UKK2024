<?php
    include '../../koneksi/koneksi.php';

    $id = $_POST['iduser'];
    $nis = mysqli_real_escape_string($koneksi, $_POST['nis']);
    $namalengkap = mysqli_real_escape_string($koneksi, $_POST['namalengkap']);
    $email = mysqli_real_escape_string($koneksi, $_POST['email']);
    $alamat = mysqli_real_escape_string($koneksi, $_POST['alamat']);
    $username = mysqli_real_escape_string($koneksi, $_POST['username']);
    $level = mysqli_real_escape_string($koneksi, $_POST['level']);

    $query = "UPDATE user SET username='$username', email='$email', nis='$nis', namalengkap='$namalengkap', alamat='$alamat', level='$level' WHERE IDuser='$id'";

    $result = mysqli_query($koneksi, $query);

    if($result){
        echo "Data Anggota berhasil diperbarui";
    } else {
        echo "Gagal memperbarui data: " . mysqli_error($koneksi);
    }

    header("Location: ../anggota.php");
    exit();
?>