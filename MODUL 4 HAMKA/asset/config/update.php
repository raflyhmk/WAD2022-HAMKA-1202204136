<?php 
session_start();
// koneksi database
include 'connector.php';
 
if(isset($_POST['btn-edit'])){
    // menangkap data yang di kirim dari form edit mobil
    $id=$_POST['id_mobil'];
    $nama_mobil = $_POST['namaMobil'];
    $namaPemilik = $_POST['namaPemilik'];
    $merkMobil = $_POST['merkMobil'];
    $tanggalBeli = $_POST['tanggalBeli'];
    $deskripsi = $_POST['deskripsi'];
    // $foto = $_FILES['foto']['name'];
    // $file_foto = $_FILES['foto']['tmp_name'];
    // move_uploaded_file($file_foto, "../images/".$foto);
    $statusPembayaran = $_POST['statusPembayaran'];

    // update data ke database
    $update=mysqli_query($koneksi,"update showroom_wad set nama_mobil='$nama_mobil', pemilik_mobil='$namaPemilik', merk_mobil='$merkMobil', tanggal_beli='$tanggalBeli', deskripsi='$deskripsi', status_pembayaran='$statusPembayaran' where id_mobil='$id'");
    if($update){
        $_SESSION['edit'] = 'data berhasil teredit';
        header("location:../pages/ListCar-hamka.php");
    } else{
    echo 'data gagal di edit';
    }
}

if(isset($_POST['btn-update'])){
    // menangkap data yang di kirim dari form edit profile
    $id= $_POST['id'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $konfirmasiPassword = $_POST['konfirmasiPassword'];
    $no_hp = $_POST['no_hp'];
    $time = time();

    if($password != $konfirmasiPassword){
	    echo "<script>alert ('konfirmasi password mu salah'); document.location.href = '../pages/profile-hamka.php'</script>";
    } else {
        // update data ke database
    $updateUsers=mysqli_query($koneksi,"update users set nama='$nama', email='$email', password='$password', no_hp='$no_hp' where id='$id'");
        if($updateUsers){
            $_SESSION['edit'] = 'data berhasil teredit';
            header("location:../pages/profile-hamka.php");
        } else  {
            echo 'data gagal di edit';
        }
    }
    if(!empty($_POST['WarnaBG'])){
        setcookie('WarnaBG', $_POST['WarnaBG'], $time + 3600, '/');
    } 
}

 
?>