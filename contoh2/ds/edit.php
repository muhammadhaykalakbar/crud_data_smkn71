<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/style2.css">
</head>
<body>
 
	<?php
	include '../koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from mahasiswa where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>

		<div class="kotak_login">
		<p class="tulisan_login">Edit Data Mahasiswa</p>

		<form method="post" action="update.php">
			<label>ID</label>
			<input type="number" name="id" class="form_login" placeholder="id pelajar" value="<?php echo $d['id']; ?>">
 
			<label>Nama </label>
			<input type="text" name="nama" class="form_login" placeholder="nama anda" value="<?php echo $d['nama']; ?>">

			<label>NIM</label>
			<input type="number" name="nim" class="form_login" placeholder="masukan nim" value="<?php echo $d['nim']; ?>">
 
			<label>Alamat</label>
			<input type="text" name="alamat" class="form_login" placeholder="alamat anda" value="<?php echo $d['alamat']; ?>">
 
			<input type="submit" class="tombol_login" value="SIMPAN">
 
			<br/>
			<br/>
			<center>
				<a class="link" href="siswa.php">kembali</a>
			</center>
		</form>
		
	</div>
 
		<?php 
	}
	?>
 
 
</body>
</html>
		
</body>
</html>