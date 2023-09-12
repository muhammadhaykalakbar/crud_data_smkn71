<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Siswa</title>
	<link rel="stylesheet" type="text/css" href="../css/style2.css">
	<style>
		body{
   			 font-family: sans-serif;
    		background: #d5f0f3;
			}
 
		h1{
		    text-align: center;
		    /*ketebalan font*/
		    font-weight: 300;
		    font-variant: small-caps;
		}
		 
		.tulisan_login{
		    text-align: center;
		    /*membuat semua huruf menjadi kapital*/
		    text-transform: uppercase;
		}
		 
		.kotak_login{
		    width: 350px;
		    background: white;
		    /*meletakkan form ke tengah*/
		    margin: 80px auto;
		    padding: 30px 20px;
		}
		 
		label{
		    font-size: 11pt;
		}
		 
		.form_login{
		    /*membuat lebar form penuh*/
		    box-sizing : border-box;
		    width: 100%;
		    padding: 10px;
		    font-size: 11pt;
		    margin-bottom: 20px;
		}
		 
		.tombol_login{
		    background: #46de4b;
		    color: white;
		    font-size: 11pt;
		    width: 100%;
		    border: none;
		    border-radius: 3px;
		    padding: 10px 20px;
		}
		 
		.link{
		    color: #232323;
		    text-decoration: none;
		    font-size: 10pt;
		}
	</style>
</head>
<body>
 
	<h1>LOGIN USER</h1>
 
	<div class="kotak_login">
		<p class="tulisan_login">Tambah Data Mahasiswa</p>

		<form method="POST" action="tambah_aksi.php">
 
			<label>ID</label>
			<input type="number" name="id" class="form_login" placeholder="id pelajar">
 
			<label>Nama</label>
			<input type="text" name="nama" class="form_login" placeholder="nama anda">

			<label>NIM</label>
			<input type="number" name="nim" class="form_login" placeholder="masukan nim">
 
			<label>Alamat</label>
			<input type="text" name="alamat" class="form_login" placeholder="alamat anda">
 
			<input type="submit" class="tombol_login" value="SIMPAN">
 
			<br/>
			<br/>
			<center>
				<a class="link" href="siswa.php">kembali</a>
			</center>
		</form>
		
	</div>
 
 
</body>
</html>	