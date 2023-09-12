<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/style2.css">
</head>
<body>
 
	<?php
	include '../koneksi.php';
	$id = $_GET['id_mapel'];
	$data = mysqli_query($koneksi,"select * from mapel where id_mapel='$id'");
	while($d = mysqli_fetch_array($data)){
		?>

		<div class="kotak_login">
		<p class="tulisan_login">Edit Data Mapel</p>

		<form method="post" action="update.php">
			<label>ID Mapel</label>
			<input type="text" name="id_mapel" class="form_login" placeholder="id pelajar" value="<?php echo $d['id_mapel']; ?>">
 
			<label>Nama Mapel</label>
			<input type="text" name="nama_mapel" class="form_login" placeholder="nama anda" value="<?php echo $d['nama_mapel']; ?>">

			<label>Jumlah JP</label>
			<input type="number" name="jumlah_jp" class="form_login" placeholder="masukan nim" value="<?php echo $d['jumlah_jp']; ?>">
 
			<label>Guru</label>
			<input type="text" name="guru" class="form_login" placeholder="alamat anda" value="<?php echo $d['guru']; ?>">
 
			<input type="submit" class="tombol_login" value="SIMPAN">
 
			<br/>
			<br/>
			<center>
				<a class="link" href="tmapel.php">kembali</a>
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