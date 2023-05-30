<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <title> Website Responsive</title>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="main.css">
</head>
<body>
 <div class="container">
 <div class="header">
 <h1 align="center"> E- SPP SMK BAKTI NUSANTARA 666 </h1>
 </div>
 <div class="main">
 <div class="left">
 <h3 align="center">DASHBOARD</h3>
 <ul>
 <li><a href="admin.php">Dashboard</a></li>

 <h3 align="center">DATA</h3>
 <li><a href="spp.php">Data SPP</a></li>
 <li><a href="kelas.php">Data KELAS</a></li>

 <h3 align="center">PERSONAL</h3>
 <li><a href="user.php">Petugas</h3>
 <li><a href="siswa.php">Siswa</h3>
</ul>
<h3 align="center">FITUR</h3>
<ul>
 <li><a href="transaksi.php">Transaksi</a></li>
 <li><a href="laporan.php">Laporan</a></li>
</ul>
 <h3 align="center">Keluar</h3>
 <ul>
<li><a href="logout.php">Logout</a></li>
</ul>
 </div>
 <div class="middle">
 <?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user</title>
</head>
<body>
    <h1>PENGGUNA</h1>

    <a href="tambahuser.php">Tambah Pengguna</a>
        <br><br>
               <table border="1">
               <tr>
                          <th>NO</th>
                          <th>USERNAME</th>
                          <th>PASSWORD</th>
                          <th>NAMA PENGGUNA</th>
                          <th>LEVEL</th>
                          <th>ACTION</th>
                        </tr>
                        </thead>
                         <tbody>
                           <?php
                              // jalankan query untuk menampilkan semua data diurutkan berdasarkan id
                              $query = "SELECT * FROM petugas ORDER BY id_petugas ASC";
                              $result = mysqli_query($koneksi, $query);
                              //mengecek apakah ada error ketika menjalankan query
                              if(!$result){
                                die ("Query Error: ".mysqli_errno($koneksi).
                                   " - ".mysqli_error($koneksi));
                              }

                              //buat perulangan untuk element tabel dari data mahasiswa
                              $no = 1; //variabel untuk membuat nomor urut
                              // hasil query akan disimpan dalam variabel $data dalam bentuk array
                              // kemudian dicetak dengan perulangan while
                              while($row = mysqli_fetch_assoc($result))
                              {
                              ?>
                        <tr>  
                          <td><?php echo $no; ?></td>
                          <td><?php echo $row['username']; ?></td>
                           <td><?php echo $row['password']; ?></td>
                            <td><?php echo $row['nama_petugas']; ?></td>
                             <td><?php echo $row['level']; ?></td>   
                          <td>
                          <a href="edituser.php?id=<?php echo $row["id_petugas"]; ?>">Edit</a>
                          <a href="hapususer.php?id=<?php echo $row["id_petugas"]; ?>">Hapus</a>
                          </td>
                        </tr>
                         <?php
                           $no++; //untuk nomor urut terus bertambah 1
                           }
                         ?>
 

 <!-- <div class="right">
 <li><a href="#">Logout</a></li> -->
 
 </ul>
 </p>
 </div> 
 </div>
 
 <!-- <div class="footer">
 <p align="center">Coppright &copy; 2018 Belajar CSS Responsive </a></p> -->
 </div> 
 </div> 
</body>
</html>

