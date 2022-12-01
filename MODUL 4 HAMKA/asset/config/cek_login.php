<?php
session_start();

include 'connector.php';

$email = $_POST['email'];
$password = $_POST['password'];

$login = mysqli_query($koneksi, "select email, password from users where email='$email' and password='$password' ");

$cek = mysqli_num_rows($login);

if($cek > 0){
   $_SESSION['email'] = $email;
    $time = time();
    if(!empty($_POST['remember'])){
        $checkbox = $_POST['remember'];
        setcookie("email", $email, $time + 3600);
        setcookie("password", $password, $time + 3600, '/');
        setcookie("checkbox", $checkbox, $time + 3600, '/');
    }
    echo "<script>alert ('anda berhasil login'); document.location.href = '../pages/home-hamka.php'</script>";
}else{
    echo "<script>alert ('gagal login'); document.location.href = '../pages/login.php'</script>";
}
