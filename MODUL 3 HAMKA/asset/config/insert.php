<?php
session_start();

include 'connector.php';

// menangkap name variabel
$namaMobil = $_POST['namaMobil'];
$namaPemilik = $_POST['namaPemilik'];
$merk = $_POST['merk'];
$tanggalBeli = $_POST['tanggal_Beli'];
$deskripsi = $_POST['deskripsi'];
$foto = $_FILES['foto']['name'];
$file_foto = $_FILES['foto']['tmp_name'];
move_uploaded_file($file_foto, "../images/".$foto);
$statusPembayaran = $_POST['statusPembayaran'];

// insert mysql
$insert=mysqli_query($koneksi,"insert into showroom_wad values('','$namaMobil','$namaPemilik','$merk', '$tanggalBeli', '$deskripsi', '$foto', '$statusPembayaran')");

if($insert){
    $_SESSION['sukses'] = 'data berhasil terinput';
    header("location:../pages/ListCar-hamka.php");
    
}else{
    echo 'data gagal terinput';
}

?>