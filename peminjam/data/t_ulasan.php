<?php
include '../../koneksi/koneksi.php';
 
$IDulasan               = $_POST['IDulasan'];
$IDuser                 = $_POST['IDuser'];
$IDbuku                 = $_POST['IDbuku'];
$Ulasan                 = $_POST['Ulasan'];
$Rating                 = $_POST['Rating'];

mysqli_query($koneksi,"INSERT into ulasanbuku(IDulasan,IDuser,IDbuku,Ulasan,Rating) 
									values('$IDulasan','$IDuser','$IDbuku','$Ulasan','$Rating')");

header("location:../ulasan.php");
?>