<?php 
// koneksi database
include 'connector.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id_mobil'];
 
 
// menghapus data dari database
$hapus=mysqli_query($koneksi,"delete from showroom_wad where id_mobil='$id'");
 
// mengalihkan halaman kembali ke index.php
if($hapus){
	header("location:../pages/ListCar-hamka.php");;
}
else{
	echo "<h3 align='center'>Terjadi Kesalahan. <a href='tagihan.php'>Coba Lagi</a></h3>";
}
 
?>