<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data yang di kirim dari form
$id_mapel = $_POST['id_mapel'];
$nama_mapel = $_POST['nama_mapel'];
$jumlah_jp = $_POST['jumlah_jp'];
$guru = $_POST['guru'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into mapel values('$id_mapel','$nama_mapel','$jumlah_jp','$guru')");
 
// mengalihkan halaman kembali ke index.php
header("location:../mapel/tmapel.php");
 
?>