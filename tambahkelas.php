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

include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_kelas = $_POST["nama_kelas"];
    $kompetensi_keahlian = $_POST["kompetensi_keahlian"];
    
    
    $sql = "INSERT INTO kelas (nama_kelas, kompetensi_keahlian) VALUES ('$nama_kelas','$kompetensi_keahlian')";
    mysqli_query($koneksi, $sql);

    header("location: kelas.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=a">
    <title>tambah</title>
</head>
<body>
    <h1>FORM KELAS</h1>

    <form method="post">
        <label>Nama Kelas</label>
        <input type="text" name="nama_kelas"></br>

        <label>Kompetensi Keahlian</label>
        <input type="text" name="kompetensi_keahlian"><br>

        <button type="submit">TAMBAH</button>
</form>
</body>
</html>
    
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

