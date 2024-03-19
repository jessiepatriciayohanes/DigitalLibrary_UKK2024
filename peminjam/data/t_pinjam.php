<?php
include '../../koneksi/koneksi.php';
 
$IDbuku                 = $_POST['IDbuku'];
$IDuser                 = $_POST['IDuser'];
$nama                   = $_POST['nama'];
$tgl_peminjaman         = $_POST['tgl_peminjaman'];
$tgl_pengembalian       = $_POST['tgl_pengembalian'];
$status_peminjaman      = $_POST['status_peminjaman'];
 
mysqli_query($koneksi,"INSERT into peminjaman(IDbuku,IDuser,nama,tgl_peminjaman,tgl_pengembalian,status_peminjaman) 
									values('$IDbuku','$IDuser','$nama','$tgl_peminjaman','$tgl_pengembalian','$status_peminjaman')");
 
header("location:../buku.php");
?>