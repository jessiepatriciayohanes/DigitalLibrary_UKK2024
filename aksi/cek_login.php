<?php 
session_start();
 
include '../koneksi/koneksi.php';
 
$username = $_POST['username'];
$password = md5($_POST['password']);
 

$login = mysqli_query($koneksi,"SELECT * from user where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);
 
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	if($data['level']=="admin"){

		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";
		header("location:../admin/index_adm.php");

	}else if($data['level']=="petugas"){
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "petugas";
		header("location:../petugas/index_pts.php");
 
	}else if($data['level']=="peminjam"){
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "peminjam";
		header("location:../peminjam/index_pmj.php");
 
	}else{

		header("location:../index.php?pesan=gagal");
	}	
}else{
	header("location:../index.php?pesan=gagal");
}
 
?>