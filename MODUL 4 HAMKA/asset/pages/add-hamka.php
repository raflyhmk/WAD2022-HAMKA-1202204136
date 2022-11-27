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
      .btn-light:hover {
        background: none !important;
        color: #fff !important;
      }
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
            <a class="nav-link" href="../pages/ListCar-hamka.php">MyCar</a>
          </div>
        </div>
        <div class="d-flex">
          <a href=".pages/add-hamka.php">
          <button class="btn btn-outline-dark" type="submit" style="color: white;">add car</button></a>
      </div>
      </div>
    </nav>
    <?php
    }
    ?>
    <!-- end navbar -->

    <!-- insert form -->
    <section id="insert">
      <div class="container insert">
        <h1 class="titleInsert">Tambah mobil</h1>
        <p class="descInsert">Tambah Mobil baru anda ke list show room</p>
        <hr>
        <form enctype="multipart/form-data" method="POST" action="../config/insert.php" class="form-input" >
          <div class="mb-3">
            <label for="inputNamaMobil" class="form-label">Nama mobil</label>
            <input
              type="text"
              class="form-control"
              placeholder="masukan nama mobil..."
              name="namaMobil"
              required
            />
          </div>
          <div class="mb-3">
            <label for="inputNamaPemilik" class="form-label"
              >Nama Pemilik</label
            >
            <input
              type="text"
              class="form-control"
              placeholder="Nama - NIM"
              name="namaPemilik"
              required
            />
          </div>
          <div class="mb-3">
            <label for="inputMerk" class="form-label">Merk</label>
            <input
              type="text"
              class="form-control"
              placeholder="Masukan merk mobil..."
              name="merk"
              required
            />
          </div>
          <div class="mb-3">
            <label for="inputTanggalBeli" class="form-label"
              >Tanggal Beli</label
            >
            <input type="date" class="form-control" name="tanggalBeli" required />
          </div>
          <div class="mb-3">
            <label for="inputMerk" class="form-label">Deskripsi</label>
            <textarea
              class="form-control"
              placeholder="Masukan deskripsi mobil disini..."
              name="deskripsi"
              required
            ></textarea>
          </div>
          <div class="mb-3">
            <label for="formFile" class="form-label">Foto</label>
            <input class="form-control" type="file" id="formFile" name="foto" required/>
          </div>

          <div class="mb-3">
            <label for="statusPembayaran" class="form-label"
              >Status Pembayaran</label
            >
            <div class="w-100"></div>
            <div class="form-check form-check-inline">
              <input
                class="form-check-input"
                type="radio"
                name="statusPembayaran"
                id="lunas"
                value="lunas"
                required
              />
              <label class="form-check-label" for="lunas" style="font-weight:300; font-size:16px;">Lunas</label>
            </div>
            <div class="form-check form-check-inline">
              <input
                class="form-check-input"
                type="radio"
                name="statusPembayaran"
                id="belum lunas"
                value="belum lunas"
                required
              />
              <label class="form-check-label" for="belum lunas" style="font-weight:300;font-size:16px;">Belum Lunas</label>
            </div>
          </div>

          <div class="mb-3">
            <button type="submit" class="btn btn-primary" name="btn-simpan">Selesai</button>
          </div>
        </form>
      </div>
    </section>
    <!-- end insert forrm -->

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
