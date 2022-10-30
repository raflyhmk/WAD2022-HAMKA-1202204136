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
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap"
      rel="stylesheet"
    />

    <!-- css -->
    <link rel="stylesheet" href="style.css" />

    <title>TP Modul 2</title>
  </head>
  <body>
    <!-- navbar -->
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid m-auto">
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
          <div class="navbar-nav m-auto">
            <a class="nav-link" href="hamka_home.php">Home</a>
            <a class="nav-link" href="hamka_booking.php">Booking</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- end navbar -->

    <!-- konten website -->
    <div class="container mt-3 mb-2">
      <center>
        <h1 class="titleWelcome text-uppercase fw-bold">welcome to ead rent</h1>
        <p class="descWelcome fw-light">Find your best deal, here</p>
      </center>
      <div class="listMobil">
        <div class="row">
          <div class="col-sm-4 d-flex justify-content-center mb-3">
            <div class="card" style="width: 18rem">
              <img
                src="./image/mobil1.jpg"
                class="card-img-top"
                alt="chevrolet camaro"
                width="318px"
                height="212px"
              />
              <div class="card-body">
                <h5 class="card-title fw-bold">Chevrolet Camaro</h5>
                <p class="card-text">Rp. 4.500.000 / Day</p>
              </div>
              <ul class="list-group list-group-flush fw-bold">
                <li class="list-group-item d-flex justify-content-center">
                  7 Kursi
                </li>
                <li class="list-group-item d-flex justify-content-center">
                  1500 CC
                </li>
                <li class="list-group-item d-flex justify-content-center">
                  Manual
                </li>
              </ul>
              <div class="card-body book-now d-flex justify-content-center">
                <a href="hamka_booking.php" class="card-link"
                  ><button type="button" class="btn btn-primary">
                    Book Now!
                  </button></a
                >
              </div>
            </div>
          </div>
          <div class="col-sm-4 d-flex justify-content-center mb-3">
            <div class="card" style="width: 18rem">
              <img
                src="./image/mobil2.jpg"
                class="card-img-top"
                alt="daihatsu xenia"
                width="318px"
                height="212px"
              />
              <div class="card-body">
                <h5 class="card-title fw-bold">Daihatsu Xenia</h5>
                <p class="card-text">Rp. 1.500.000 / Day</p>
              </div>
              <ul class="list-group list-group-flush fw-bold">
                <li class="list-group-item d-flex justify-content-center">
                  5 Kursi
                </li>
                <li class="list-group-item d-flex justify-content-center">
                  1200 CC
                </li>
                <li class="list-group-item d-flex justify-content-center">
                  Manual
                </li>
              </ul>
              <div class="card-body book-now d-flex justify-content-center">
                <a href="hamka_booking.php" class="card-link"
                  ><button type="button" class="btn btn-primary">
                    Book Now!
                  </button></a
                >
              </div>
            </div>
          </div>
          <div class="col-sm-4 d-flex justify-content-center mb-3">
            <div class="card" style="width: 18rem">
              <img
                src="./image/mobil3.jpg"
                class="card-img-top"
                alt="honda freed"
                width="318px"
                height="212px"
              />
              <div class="card-body">
                <h5 class="card-title fw-bold">Honda Freed</h5>
                <p class="card-text">Rp. 2.500.000 / Day</p>
              </div>
              <ul class="list-group list-group-flush fw-bold">
                <li class="list-group-item d-flex justify-content-center">
                  5 Kursi
                </li>
                <li class="list-group-item d-flex justify-content-center">
                  1200 CC
                </li>
                <li class="list-group-item d-flex justify-content-center">
                  Manual
                </li>
              </ul>
              <div class="card-body book-now d-flex justify-content-center">
                <a href="hamka_booking.php" class="card-link"
                  ><button type="button" class="btn btn-primary">
                    Book Now!
                  </button></a
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end konten website -->

    <!-- footer -->
    <footer class="mt-3 pt-3 d-flex justify-content-center align-self-center p-2" style="background: #f8f9fa;">
      <h6 class="footer fw-normal">
        Copyright © 2022
       Muhammad Rafly Hamka_1202204136_SI4402
      </h6>
    </footer>
    <!-- end footer -->

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
