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

    <title>TP modul 2</title>
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
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
        <h1 class="titleWelcome text-uppercase fw-bold mb-4">
          Rent your car now
        </h1>
      </center>
      <div class="row justify-content-center">
        <div
          id="carouselExampleInterval"
          class="carousel slide ol-sm-12 col-lg-5 image-mobil mb-3"
          data-bs-ride="carousel"
        >
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="2000">
              <img
                src="./image/mobil1.jpg"
                alt="chevrolet camaro"
                width="100%"
                height="312px"
              />
            </div>
            <div class="carousel-item" data-bs-interval="2000">
              <img
                src="./image/mobil2.jpg"
                alt="daihatsu xenia"
                width="100%"
                height="312px"
              />
            </div>
            <div class="carousel-item" data-bs-interval="2000">
              <img
                src="./image/mobil3.jpg"
                alt="honda freed"
                width="100%"
                height="312px"
              />
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-lg-7 form-rent">
          <form method="POST" action="hamka_my_booking.php">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nama</label>
              <input
                type="text"
                class="form-control"
                id="exampleInputEmail1"
                aria-describedby="emailHelp"
                placeholder="masukan nama..."
                name="nama"
              />
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label"
                >Book date</label
              >
              <input
                type="date"
                class="form-control"
                id="exampleInputPassword1"
                name="check-in"
              />
            </div>
            <div class="mb-3">
              <label for="startTime" class="form-label">Start time</label>
              <input
                type="time"
                class="form-control"
                id="exampleInputPassword1"
                name="startTime"
              />
            </div>
            <div class="mb-3">
              <label for="duration" class="form-label">Duration (Days)</label>
              <input type="text" class="form-control" name="duration" />
            </div>
            <div class="mb-3">
              <label for="startTime" class="form-label">Car type</label>
              <select class="form-select" name="type">
                <option selected disabled>Pilih jenis mobil</option>
                <option value="chevrolet Camaro" name="chevroletCamaro">Chevrolet Camaro</option>
                <option value="Daihatsu Xenia" name="daihatsuXenia">Daihatsu Xenia</option>
                <option value="Honda Freed" name="hondaFreed">Honda Freed</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="startTime" class="form-label">Phone number</label>
              <input type="text" class="form-control" name="Phone" />
            </div>
            <div class="mb-3">
              <label for="startTime" class="form-label">Add service</label>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="checkbox"
                  name="services[]"
                  value="health protocol"
                  id="flexCheckDefault"
                />
                <label class="form-check-label" for="flexCheckDefault">
                  Health Protocol / Rp. 25.000
                </label>
              </div>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="checkbox"
                  name="services[]"
                  value="driver"
                  id="flexCheckChecked"
                />
                <label class="form-check-label" for="flexCheckChecked">
                  Driver / Rp. 100.000
                </label>
              </div>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="checkbox"
                  name="services[]"
                  value="fuel filled"
                  id="flexCheckChecked"
                />
                <label class="form-check-label" for="flexCheckChecked">
                  Fuel Filled / Rp. 250.000
                </label>
              </div>
            </div>
            <button
              type="submit"
              class="btn btn-primary"
              name="submit"
              value="submit"
            >
              Submit
            </button>
          </form>
        </div>
      </div>
    </div>
    <!-- end konten website -->

    <!-- footer -->
    <footer
      class="mt-3 pt-3 d-flex justify-content-center align-self-center p-2"
      style="background: #f8f9fa"
    >
      <h6 class="footer fw-normal">
        Copyright © 2022 Muhammad Rafly Hamka_1202204136_SI4402
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
