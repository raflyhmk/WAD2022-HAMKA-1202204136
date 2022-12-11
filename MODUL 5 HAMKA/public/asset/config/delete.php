<?php 
session_start();

// koneksi database
include 'connector.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id_mobil'];
 
 
// menghapus data dari database
$hapus=mysqli_query($koneksi,"delete from showroom_wad where id_mobil='$id'");
 
// mengalihkan halaman kembali ke index.php
if($hapus){
	$_SESSION['hapus'] = 'data berhasil terhapus';
	header("location:../pages/ListCar-hamka.php");
}
else{
	echo 'data gagal dihapus';
}
 
?>