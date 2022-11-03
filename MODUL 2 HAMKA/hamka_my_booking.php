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
            <a class="nav-link" href="hamka_my_booking.php">Booking</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- end navbar -->

    <!-- konten website -->
    <?php 
    $nama = $_POST['nama'];
    $checkIn =$_POST['check-in'];
    $duration = $_POST['duration'];
    $checkOut = date('Y-m-d', strtotime( $checkIn. +$duration. 'days'));
    $type = $_POST['type'];
    $sewaMobil=0;
    if($type=="chevrolet Camaro"){
      $sewaMobil=4500000;
    }
    if($type=="Daihatsu Xenia"){
      $sewaMobil=1500000;
    }
    if($type=="Honda Freed"){
      $sewaMobil=2500000;
    }

    $phone = $_POST['Phone'];
    if(isset($_POST['services'])){
      $layanan = $_POST['services'];
      $count = count($layanan);
      $hargaServices = 0;
      for ($i=0; $i < $count; $i++) { 
        if($layanan[$i]=="health protocol"){
          $hargaServices = $hargaServices += 25000;
        }
        if($layanan[$i]=="driver"){
          $hargaServices = $hargaServices += 100000;
        }
        if($layanan[$i]=="fuel filled"){
          $hargaServices = $hargaServices += 250000;
        }
      }
    }

    $price = $sewaMobil * $duration + $hargaServices;
    
    
    ?>
   <div class="container-fluid mt-3 mb-2">
    <center>
        <h1 class="titleThanks text-uppercase fw-bold">thank you muhammad rafly hamka_1202204136</h1>
        <p class="descThanks fw-light">please double check your reservation details</p>
      </center>
      <table class="table">
  <thead style="font-size: 16px;" class="text-center">
    <tr>
      <th scope="col">Booking number</th>
      <th scope="col">Name</th>
      <th scope="col">Check-in</th>
      <th scope="col">Check-out</th>
      <th scope="col">Car type</th>
      <th scope="col">Phone number</th>
      <th scope="col">Service(s)</th>
      <th scope="col">Price</th>
    </tr>
  </thead>
  <tbody style="font-size: 14px;" class="text-center">
    <tr>
      <td scope="row"><?php echo rand()?></td>
      <td><?php echo $nama ?></td>
      <td><?php echo date('d F Y', strtotime($checkIn)) ?></td>
      <td><?php echo date('d F Y', strtotime($checkOut)) ?></td>
      <td><?php 
      echo $type ?></td>
      <td><?php echo $phone ?></td>
      <td><ul>
        <?php 
          if(!empty($_POST['services'])){
            foreach ($_POST['services'] as $services) {
            echo "<li>".$services."</li>";
          }
          
          }else{
            echo "no services";
          }
        ?>
      </ul></td>
      <td><?php echo "Rp. ", number_format($price,2,".",",") ?></td>
    </tr>
  </tbody>
</table>
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
