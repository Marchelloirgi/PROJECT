<?php
include 'koneksi.php';
$id = (int) $_GET['id'];
//mengambil id yang ingin dihapus

    //jalankan query DELETE untuk menghapus data
    $query = "DELETE FROM kelas WHERE id_kelas=$id";
    $hasil_query = mysqli_query($koneksi, $query);

    $query = "DELETE FROM kelas WHERE id_kelas=$id";
    $hasil_query = mysqli_query($koneksi, $query);

    //periksa query, apakah ada kesalahan
    if(!$hasil_query) {
      die ("Gagal menghapus data: ".mysqli_error($koneksi). " - ".mysqli_error($koneksi));
    } else {
      echo "<script>alert('Data berhasil dihapus.');window.location='kelas.php';</script>";
    }