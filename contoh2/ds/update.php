<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$alamat = $_POST['alamat'];
 
// update data ke database
mysqli_query($koneksi,"update mahasiswa set id='$id' , nama='$nama', nim='$nim', alamat='$alamat'");
 
// mengalihkan halaman kembali ke index.php
header("location:siswa.php");
 
?>