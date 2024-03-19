<?php
include '../../koneksi/koneksi.php';

$id                     = mysqli_real_escape_string($koneksi, $_POST['idpeminjaman']);
$IDbuku                 = mysqli_real_escape_string($koneksi, $_POST['IDbuku']);
$IDuser                 = mysqli_real_escape_string($koneksi, $_POST['IDuser']);
$nama                   = mysqli_real_escape_string($koneksi, $_POST['nama']);
$tgl_peminjaman         = mysqli_real_escape_string($koneksi, $_POST['tgl_peminjaman']);
$tgl_pengembalian       = mysqli_real_escape_string($koneksi, $_POST['tgl_pengembalian']);
$status_peminjaman      = mysqli_real_escape_string($koneksi, $_POST['status_peminjaman']);

$query = "UPDATE peminjaman SET IDbuku='$IDbuku', IDuser='$IDuser', nama='$nama', tgl_peminjaman='$tgl_peminjaman', tgl_pengembalian='$tgl_pengembalian', status_peminjaman='$status_peminjaman' WHERE IDpeminjaman='$id'";

$result = mysqli_query($koneksi, $query);

if($result){
    echo "Peminjaman buku berhasil diperbarui";
} else {
    echo "Gagal memperbarui data: " . mysqli_error($koneksi);
}

header("Location: ../peminjam.php");
exit();
?>