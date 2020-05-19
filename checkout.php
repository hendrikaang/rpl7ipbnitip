<?php require_once("auth.php"); 
//ambil userID
$userID =  $_SESSION['masuk'];

//ambil custID
$custID= $_GET['custid'];
$total= $_GET['total'];

//ambil nitiperz
$ambilNitiperz = pg_query($db, "SELECT * FROM nitiperz WHERE userID=$userID;");
$dataNitiperz = pg_fetch_assoc($ambilNitiperz);
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" href="checkout.css">
    <title>Nitip - Menu mitra</title>
  </head>
  <body>
    
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
      <img src="assets/nitip.png" class="navbar-brand" >
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link" href="cart.php">Keranjang</a>
          <a class="nav-item nav-link" href="#">Bantuan</a>
          <a class="nav-item nav-link" href="profileuser.php">Akun Saya</a>
        </div>
      </div>
    </div>
    </nav>
    <!-- Akhir navbar -->

    <!-- Menu mitra -->
    <div class="wrapper">
      <div class="upload-product">
        <form action="bayar.php" method="POST">
          <div class="title">Checkout</div>
          <div class="input-product-field">
              <div class="items">
                  <label for="barang" class="label-prod">Username :</label>
                   <?echo($dataNitiperz['nama']);?>
              </div>
              <div class="items">
                <label for="barang" class="label-prod">Telepon :</label>
                 <?echo($dataNitiperz['telepon']);?>
            </div>
              <div class="items">
                  <label for="harga" class="label-prod">Alamat <a target="_blank" href="https://www.google.com/maps">(google maps)</a></label>
                  <input id="harga" type="text" class="input-prod">
              </div>
              <div class="items">
                  Total = Rp <?echo($total);?><br>
                  Saldo = Rp <?echo($dataNitiperz['saldo']);?><br>
                  <?
                  if($dataNitiperz['saldo']<$total){
                    echo"<a href='topup.php'>isi saldo</a>";
                  }
                  ?>
              </div>
              <div class="items">
                  <label for="upload-file" class="label-prod"></label>
              </div>
              <div class="upload-btn">
                  <input type="submit" name="konfirmasi" value="konfirmasi"/>
              </div>
          </div>
        </form>
      </div>
  </div>
<footer>
   <div class="foot">
       <p>&copy; 2020 Nitip 4.0 | All Rights Reserved</p>
   </div>    
  
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>