<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data yang di kirim dari form
$id_mapel = $_POST['id_mapel'];
$nama_mapel = $_POST['nama_mapel'];
$jumlah_jp = $_POST['jumlah_jp'];
$guru = $_POST['guru'];
 
// update data ke database
mysqli_query($koneksi,"update mapel set id_mapel='$id_mapel' , nama_mapel='$nama_mapel', jumlah_jp='$jumlah_jp', guru='$guru' where id_mapel='$id_mapel'");
 
// mengalihkan halaman kembali ke index.php
header("location:tmapel.php");
 
?>