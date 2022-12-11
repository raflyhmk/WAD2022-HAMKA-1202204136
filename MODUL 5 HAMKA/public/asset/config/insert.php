<?php
session_start();

include 'connector.php';

if(isset($_POST['btn-simpan'])){
    // menangkap name variabel insert mobil
    $namaMobil = $_POST['namaMobil'];
    $namaPemilik = $_POST['namaPemilik'];
    $merk = $_POST['merk'];
    $tanggalBeli = $_POST['tanggalBeli'];
    $deskripsi = $_POST['deskripsi'];
    $foto = $_FILES['foto']['name'];
    $file_foto = $_FILES['foto']['tmp_name'];
    move_uploaded_file($file_foto, "../images/".$foto);
    $statusPembayaran = $_POST['statusPembayaran'];


    // insert mysql mobil
    $insertMobil=mysqli_query($koneksi,"insert into showroom_wad values('','$namaMobil','$namaPemilik','$merk', '$tanggalBeli', '$deskripsi', '$foto', '$statusPembayaran')");


    if($insertMobil){
        $_SESSION['sukses'] = 'data berhasil terinput';
        header("location:../pages/ListCar-hamka.php");
        
    }else{
        echo 'data gagal terinput';
    }
}


if(isset($_POST['register'])){
    // menangkap name variabel register
    $email = $_POST['email'];
    $name = $_POST['name'];
    $password = $_POST['password'];
    $confpassword = $_POST['confpassword'];
    $NoHp = $_POST['NoHp'];

    if($password != $konfirmasiPassword){
	    echo "<script>alert ('konfirmasi password mu salah'); document.location.href = '../pages/register-hamka.php'</script>";
    }
    $cekEmail = mysqli_query($koneksi, "select email from user_hamka where email = '$email'");
    $emailExist = mysqli_fetch_array($cekEmail, MYSQLI_NUM);

    if ($emailExist>0){
        echo "<script>alert ('email yang dimasukan sudah pernah digunakan sebelumnya'); document.location.href = '../pages/register-hamka.php'</script>";
    } else {
        $insertUsers=mysqli_query($koneksi,"insert into users values('','$name','$email','$password', '$NoHp')");
        if($insertUsers){
            echo "<script>alert ('proses registrasi kamu berhasil'); document.location.href = '../pages/login-hamka.php'</script>";
        }else{
        echo 'data gagal terinput';
        }    
    } 
}

?>