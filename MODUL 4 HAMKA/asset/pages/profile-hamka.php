<?php
session_start();  
include '../config/connector.php';

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />

    <!-- fonts google -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;700&display=swap"
      rel="stylesheet"
    />

    <!-- css style -->
    <link rel="stylesheet" href="../style/style.css?v=1" />
    <style>
      .bg-primary{
        background: <?php if(isset($_COOKIE['WarnaBG'])){ echo $_COOKIE['WarnaBG'];};?> !important;
      }
    </style>

    <title>Hello, world!</title>
  </head>
  <body>
    <!-- navbar -->
    <?php
    $getUser = mysqli_query($koneksi, "select * from users");
    while($dataUser = mysqli_fetch_array($getUser)){
    ?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
     
      <div class="container">
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link" href="../pages/home-hamka.php">Home</a>
            <a class="nav-link" href="../pages/ListCar-hamka.php">MyCar</a>
          </div>
        </div>
        <div class="d-flex">
          <a href="../pages/add-hamka.php">
          <button class="btn btn-outline-dark" type="submit" style="color: white;">add car</button></a>
          <div class="dropdown ms-4">
            <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
              <?php echo $dataUser['nama'];?>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <li><a class="dropdown-item" href="../pages/profile-hamka.php">Profile</a></li>
              <li><a class="dropdown-item" href="../config/logout.php">Logout</a></li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <!-- end navbar -->

    <!-- insert form -->
    <section id="insert">
      <div class="container insert">
        
        <h1 class="titleInsert" align="center">Profile</h1>
        <form enctype="multipart/form-data" method="POST" action="../config/update.php" class="form-input" name="form-edit">
          <?php
            if(isset($_SESSION['edit'])){
              ?>
              <div class="alert alert-primary alert-dismissible fade show"   role="alert">
               <?php echo $_SESSION['edit'];?>
               <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            <?php
              unset($_SESSION['gagal']);
            }
            ?>
            <input type="hidden" name="id" value="<?php echo $dataUser['id'];?>">
            
          <div class="mb-3">
            <label for="inputEmail" class="form-label">Email</label>
            <input
              type="email"
              class="form-control"
              value="<?php echo $dataUser['email'];?>"
              name="email"
            />
          </div>
          <div class="mb-3">
            <label for="inputNamaPemilik" class="form-label"
              >Nama</label
            >
            <input
              type="text"
              class="form-control"
              value="<?php echo $dataUser['nama'];?>"
              name="nama"
              required
            />
          </div>
          <div class="mb-3">
            <label for="inputMerk" class="form-label">Nomor handphone</label>
            <input
              type="text"
              class="form-control"
              value="<?php echo $dataUser['no_hp'];?>"
              name="no_hp"
              required
            />
          </div>
          <hr>
          <div class="mb-3">
            <label for="inputTanggalBeli" class="form-label"
              >Kata sandi</label
            >
            <input type="password" class="form-control" name="password" placeholder="masukan kata sandi..." required />
          </div>
          <div class="mb-3">
            <label for="inputMerk" class="form-label">Konfirmasi password</label>
           <input type="password" class="form-control" name="konfirmasiPassword" placeholder="Ulangi kata sandi..." required />
          </div>
          <div class="mb-3">
              <label for="startTime" class="form-label">Warna navbar</label>
              <select class="form-select" name="WarnaBG">
                <option selected disabled value="">Pilih warna untuk navbar</option>
                <option value='#0d6efd'>Biru</option>
                <option value='#A4BE7B'>Hijau</option>
                <option value='#9E7676'>Cokelat</option>
              </select>
            </div>
            
          <div class="mb-3 d-flex justify-content-center">
            <button type="submit" class="btn btn-primary" name="btn-update" >Update</button>
          </div>
        </form>
      </div>
    </section>
    <!-- end insert forrm -->
    <?php
    }
    ?>
    <div class="container mt-5 mb-3">
        <img src="../images/logo-ead 1.png" alt="logo" >    
        <span class="ms-3">hamka_1202204136</span>  
    </div> 

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>



    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
