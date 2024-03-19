<?php
include '../koneksi/koneksi.php';
 
$nis = $_POST['nis'];
$namalengkap = $_POST['namalengkap'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$username = $_POST['username'];
$password = md5($_POST['password']);
$level = $_POST['level'];

 
mysqli_query($koneksi,"INSERT into user(nis, namalengkap, email, alamat, username, password, level) 
									values('$nis','$namalengkap','$email','$alamat','$username','$password','$level')");
 
header("location:../index.php");
?>