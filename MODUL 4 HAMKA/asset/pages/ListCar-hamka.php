<?php
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

    <title>Hello, world!</title>
    <style>
      .bg-primary{
        background: <?php if(isset($_COOKIE['WarnaBG'])){ echo $_COOKIE['WarnaBG'];};?> !important;
      }
    </style>
  </head>
  <body>
    <!-- navbar -->
    <?php
    $getUser = mysqli_query($koneksi, "select * from users");
    while($getName = mysqli_fetch_array($getUser)){
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
            <a class="nav-link" href="#">MyCar</a>
          </div>
        </div>
        <div class="d-flex">
          <a href="../pages/add-hamka.php">
          <button class="btn btn-outline-dark" type="submit" style="color: white;">add car</button></a>
          <div class="dropdown ms-4">
            <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
              <?php echo $getName['nama'];?>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <li><a class="dropdown-item" href="../pages/profile-hamka.php">Profile</a></li>
              <li><a class="dropdown-item" href="../config/logout.php">Logout</a></li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <?php
    }
    ?>
    <!-- end navbar -->

    <!-- list car -->
    <section id="insert">
      <div class="container insert">
        <h1 class="titleInsert">My Show Room</h1>
        <p class="descInsert">
          List Show Room Muhammad Rafly Hamka - 1202204136
        </p>


        <?php
        session_start();
            if(isset($_SESSION['sukses'])){
              ?>
              <div class="alert alert-success alert-dismissible fade show"   role="alert">
               <?php echo $_SESSION['sukses'];?>
               <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            <?php
              unset($_SESSION['gagal']);
            }
            ?>
            <?php
            if(isset($_SESSION['hapus'])){
              ?>
              <div class="alert alert-danger alert-dismissible fade show"   role="alert">
               <?php echo $_SESSION['hapus'];?>
               <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            <?php
              unset($_SESSION['gagal']);
            }
            ?>
            <?php
            if(isset($_SESSION['edit'])){
              ?>
              <div class="alert alert-primary alert-dismissible fade show"   role="alert">
               <?php echo $_SESSION['edit'];?>
               <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            <?php
              unset($_SESSION['edit']);
            }
            ?>
        
        <div class="row">
            <?php
                include '../config/connector.php';
                $listMobil = mysqli_query($koneksi, "select * from showroom_wad");  
                while($data = mysqli_fetch_array($listMobil)){
            ?>
            <div class="col-md-4 mb-4">
                <div class="card" style="width: 22rem;">
                <img src="../images/<?php echo $data['foto_mobil']?>" class="card-img-top m-auto mt-3" alt="gambar mobil" style="width:328px; height:195px;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $data['nama_mobil'];?></h5>
                        <p class="card-text"><?php echo substr($data['deskripsi'],0,90);?>...</p>
                        <a href="../pages/detail-hamka.php?id_mobil=<?php echo $data['id_mobil'];?>" class="btn btn-primary btn-edit me-4">Detail</a>
                        <a href="../config/delete.php?id_mobil=<?php echo $data['id_mobil'];?>" class="btn btn-danger btn-edit">Hapus</a>
                    </div>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
      </div>
    </section>
    <!-- end list car -->

    <div class="container">
      <div class="banyak">
        <h3 class="descBanyak mt-3" style="color: #757575; font-size: 16px; text-transform: capitalize;">jumlah mobil <?php echo mysqli_num_rows($listMobil);?></h3>
      </div>
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


