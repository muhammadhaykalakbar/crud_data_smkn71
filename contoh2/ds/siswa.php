<!DOCTYPE html>
<html>
<head> 
    <title>SMKN 71 JAKARTA</title>
    <link rel="stylesheet" href="../css/style.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    <div class="header">
        <div class="jarak">
            <h2>SELAMAT DATANG DI SMKN 71 JAKARTA</h2>
        </div>
    </div>
    <div class="menu">
        <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="ds/siswa.php">Siswa</a></li>
            <li><a href="../mapel/tmapel.php">Mapel</a></li>
            <li><a href="../contact/tcontact.php">Contact</a></li>
        </ul>
 </div>
    <div class="content">
        <div class="jarak">
            <!-- kiri -->
            <div class="kiri">
                <!-- blog -->
                <div class="border">
                    <div class="jarak">
 
 <br>
    <h2>CRUD DATA MAHASISWA </h2>
    <br/>
    <a href="tambah.php" class="icon-button">
        <i class="fas fa-plus" herf="tambah.php"> TAMBAH DATA</i>
    </a>
    <br/>
    <br/>
    <table class="table1">
        <tr>
            
            <th>ID</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Alamat</th>
            <th colspan="2">Opsi</th>

        </tr>
    <?php
        include '../koneksi.php'; 
        $batas = 3;
        $halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
        $halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;    
 
        $previous = $halaman - 1;
        $next = $halaman + 1;
        
              
        $data = mysqli_query($koneksi,"select * from mahasiswa");
        $jumlah_data = mysqli_num_rows($data);
        $total_halaman = ceil($jumlah_data / $batas);
        $data = mysqli_query($koneksi,"select * from mahasiswa limit $halaman_awal, $batas");
        $nomor = $halaman_awal+1;
        while($d = mysqli_fetch_array($data)){  
    
        // $data = mysqli_query($koneksi,"select * from mahasiswa");
        // while($d = mysqli_fetch_array($data)){
    ?>
            <tr>
               
                <td><?php echo $d['id']; ?></td>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['nim']; ?></td>
                <td><?php echo $d['alamat']; ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $d['id']; ?>"onclick="return confirm ('Yakin mau diedit?');" class="btn btn-outline-success">
                    <i class="fas fa-pen"></i> </a></td>
                    <td><a href="hapus.php?id=<?php echo $d['id']; ?>"onclick="return confirm ('Yakin mau dihapus?');" class="btn btn-outline-danger">
                        <i class="fas fa-eraser"></i></a>
                    </td>
                </td>
            </tr>
            <?php 
        }
        ?>
</center>
    </table>
    <br>
    <nav>
            <ul class="pagination justify-content-center">
                <li class="page-item">
                    <a class="page-link" <?php if($halaman > 1){ echo "href='?halaman=$previous'"; } ?>>Previous</a>
                </li>
                <?php 
                for($x=1;$x<=$total_halaman;$x++){
                    ?> 
                    <li class="page-item"><a class="page-link" href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
                    <?php
                }
                ?>              
                <li class="page-item">
                    <a  class="page-link" <?php if($halaman < $total_halaman) { echo "href='?halaman=$next'"; } ?>>Next</a>
                </li>
            </ul>
        </nav>
    </div>
                </div>
                <!-- end blog -->
            </div>
            <!-- kiri -->
            <!-- kanan -->
            <br>
            <div class="kanan">
                <div class="jarak">
                    <h3>CATEGORY</h3>
                    <hr/>
                    <p><a href="#" class="undecor">HTML</a></p>
                    <p><a href="#" class="undecor">CSS</a></p>
                    <p><a href="#" class="undecor">BOOTSTRAP</a></p>
                    <p><a href="#" class="undecor">PHP</a></p>
                    <p><a href="#" class="undecor">MYSQL</a></p>
                    <p><a href="#" class="undecor">Jquery</a></p>
                    <p><a href="#" class="undecor">Ajax</a></p>
                </div>
            </div>
            <!-- kanan -->
        </div>
    </div>
      <!-- <div class="footer">
        <div class="jarak">
            <p>copyright © 2017. Your all reserved</p>
        </div>
    </div>  -->
</body>
</html>
</body>
</html>