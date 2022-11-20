<?php 
// koneksi database
include 'connector.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id_mobil'];
$nama_mobil = $_POST['namaMobil'];
$namaPemilik = $_POST['namaPemilik'];
$merkMobil = $_POST['merkMobil'];
$tanggalBeli = $_POST['tanggalBeli'];
$deskripsi = $_POST['deskripsi'];
$statusPembayaran = $_POST['statusPembayaran'];

 
// update data ke database
mysqli_query($koneksi,"update showroom_wad set nama_mobil='$nama_mobil', pemilik_mobil='$namaPemilik', merk_mobil='$merkMobil', tanggal_beli='$tanggalBeli', deskripsi='$deskripsi', status_pembayaran='$statusPembayaran' where id_mobil='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:../pages/ListCar-hamka.php");
 
?>