<?php
include 'connector.php';

// menangkap name variabel
$namaMobil = $_POST['namaMobil'];
$namaPemilik = $_POST['namaPemilik'];
$merk = $_POST['merk'];
$tanggalBeli = $_POST['tanggalBeli'];
$deskripsi = $_POST['deskripsi'];
$foto = $_FILES['foto']['name'];
$file_foto = $_FILES['foto']['tmp_name'];
move_uploaded_file($file_foto, "../images/".$foto);
$statusPembayaran = $_POST['statusPembayaran'];

// insert mysql
mysqli_query($koneksi,"insert into showroom_wad values('','$namaMobil','$namaPemilik','$merk', '$tanggalBeli', '$deskripsi', '$foto', '$statusPembayaran')");


header("location:../index.php");
?>