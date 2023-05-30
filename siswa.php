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

$sql ="SELECT * FROM spp";
$result = mysqli_query($koneksi,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>spp</title>
</head>
<body>
    <h1>LIST SISWA</h1>

    <a href="tambahsiswa.php">Tambah Data</a>
        <br><br>
               <table border="1">
                         <tr>
                         <th>NO</th>
                          <th>NISN</th>
                          <th>NIS</th>
                          <th>NAMA</th>
                          <th>ID KELAS</th>
                          <th>ALAMAT</th>
                          <th>NO TELP</th>
                          <th>ID SPP</th>
                           <th>ACTION</th>   
                        </tr>
                        </thead>
                         <tbody>
                           <?php
                              // jalankan query untuk menampilkan semua data diurutkan berdasarkan id
                              $query = "SELECT * FROM siswa,kelas,spp where siswa.id_kelas=kelas.id_kelas AND siswa.id_spp=spp.id_spp ORDER BY nisn DESC";
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
                          <td><?php echo $row['nisn']; ?></td>
                           <td><?php echo $row['nis']; ?></td>
                            <td><?php echo $row['nama']; ?></td>
                             <td><?php echo $row['id_kelas']; ?></td>  
                              <td><?php echo $row['alamat']; ?></td>
                               <td><?php echo $row['no_telp']; ?></td>
                                <td><?php echo substr ($row['id_spp'], 0, 20); ?></td>
                          <td>
                          <a href="editsiswa.php?id=<?php echo $row["nisn"]; ?>">Edit</a>
                          <a href="hapussiswa.php?id=<?php echo $row["nisn"]; ?>">Hapus</a>
                        </tr>
                         <?php
                           $no++; //untuk nomor urut terus bertambah 1
                           }
                         ?>
            </td>
            </tr>
            </table>
</body>
</html>
 

 <!-- <div class="right">
 <h3 align="center">Buku Terpopuler</h3>
 <p>
 <ul>
 <li><a href="#">Web Design</a></li>
 <li><a href="#">Pemrograman</a></li>
 <li><a href="#">Database</a></li>
 </ul>
 </p>
 </div> 
 </div> -->
 
 <!-- <div class="footer">
 <p align="center">Coppright &copy; 2018 Belajar CSS Responsive </a></p> -->
 </div> 
 </div> 
</body>
</html>

