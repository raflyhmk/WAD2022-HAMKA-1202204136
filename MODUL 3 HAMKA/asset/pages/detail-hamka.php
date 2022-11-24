<?php
$id = $_GET['id_mobil'];
include '../config/connector.php';
$listMobil = mysqli_query($koneksi, "select * from showroom_wad where id_mobil = '$id'");
$data = mysqli_fetch_array($listMobil);
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
    <link rel="stylesheet" href="../style/style.css" />

    <title>Hello, world!</title>
  </head>
  <body>
    <!-- navbar -->
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
            <a class="nav-link" href="../index.php">Home</a>
            <a class="nav-link" href="../pages/ListCar-hamka.php">MyCar</a>
          </div>
        </div>
        <div class="d-flex">
          <a href="./add-hamka.php">
          <button class="btn btn-outline-dark" type="submit" style="color: white;">add car</button></a>
      </div>
      </div>
    </nav>
    <!-- end navbar -->

    <!-- list car -->
    <section id="insert">
      <div class="container insert">
         <?php
        session_start();
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
        <h1 class="titleInsert">Edit</h1>
        <p class="descInsert">
          Edit mobil <?php echo $data['nama_mobil']?>
          
        </p>
        <div class="row">
            <div class="col-md-5">
                <img
                src="../images/<?php echo $data['foto_mobil']?>"
                alt="<?php echo $data['nama_mobil']?>"
                width="100%"
                height="312px"
              />
            </div>
            <div class="col-md-7 form-input mt-0">
            <form enctype="multipart/form-data" method="POST" action="../config/update.php">
              <div class="mb-3">
                <input type="hidden" name="id_mobil" value=<?php echo $data['id_mobil'];?>>
                <label for="inputNamaMobil" class="form-label">Nama Mobil</label>
                <input
                  type="text"
                  class="form-control"
                  value="<?php echo $data['nama_mobil'];?>"
                  name="namaMobil"
                />
              </div>
              <div class="mb-3">
                <label for="inputNamaPemilik" class="form-label">Nama Pemilik</label>
                <input
                  type="text"
                  class="form-control"
                  value="<?php echo $data['pemilik_mobil'];?>"
                  name="namaPemilik"
                />
              </div>
              <div class="mb-3">
                <label for="inputMerkMobil" class="form-label">Merk Mobil</label>
                <input
                  type="text"
                  class="form-control"
                  value="<?php echo $data['merk_mobil'];?>"
                  name="merkMobil"
                />
              </div>
              <div class="mb-3">
                <label for="inputMerkMobil" class="form-label">Tanggal Beli</label>
                <input
                  type="date"
                  class="form-control"
                  value="<?php echo date('Y-m-d',strtotime($data["tanggal_beli"])) ?>"
                  name="tanggalBeli"
                />
              </div>
              <div class="mb-3">
                <label for="inputDeskripsi" class="form-label">Deskripsi</label>
                <textarea
                class="form-control"
                name="deskripsi"
              ><?php echo $data['deskripsi'];?></textarea>
              </div>
              <div class="mb-3">
                <label for="formFile" class="form-label">Foto</label>
                <input class="form-control" type="file" id="formFile" name="foto" disabled/>
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
                    <?php if($data['status_pembayaran']=='lunas') echo 'checked'?>
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
                    <?php if($data['status_pembayaran']=='belum lunas') echo 'checked'?>
                  />
                  <label class="form-check-label" for="belum lunas" style="font-weight:300;font-size:16px;">Belum Lunas</label>
                </div>
              </div>
              <div class="mb-3">
                <button type="submit" class="btn btn-primary btn-edit" name="btn-edit">Edit</button>
              </div>
            </form>
            </div>
        </div>
<?php

?>
      </div>
    </section>
    <!-- end list car -->

    

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
