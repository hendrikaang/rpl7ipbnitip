<?php 
require_once("auth.php"); 
$id = $_SESSION["masuk"];
$query = pg_query($db, "SELECT * FROM nitiperz WHERE userid='$id'");
$data = pg_fetch_assoc($query);

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
    <link rel="stylesheet" href="profileuser.css">
    <title>Nitip - User profile</title>
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
          <a class="nav-item nav-link" href="#">Keranjang</a>
          <a class="nav-item nav-link" href="#">Bantuan</a>
          <a class="nav-item nav-link" href="#">Akun Saya</a>
        </div>
      </div>
    </div>
    </nav>
    <!-- Akhir navbar -->

    <!-- Kotak -->
    <div class="mitracard-container">
      
      <div class="upper-mitracontainer">
        
          <div class="image-container">
              <img src="./assets/1.jpg"/>
          </div>
      </div>
      <div class="lower-mitracontainer">
        <form id="update" class="form" action="updateprofile.php" method="POST">
          <div>
              <h4>Saldo </h4>
          </div>
          <div> <h5>Rp <?php echo($data['saldo']) ; ?></h5> </div>
          <div>
            <label>Username:</label><br>
            <input type="text" name="nama" id="username" value="<?php echo ($data['nama'])?>" />
          </div>
          <div>
            <label>Email:</label><br>
            <input type="email" name="email" id="Email" value="<?php echo ($data['email'])?>"/>
          </div>
          <div>
            <label>Telepon:</label><br>
            <input type="telepon" name="telepon" id="Telepon" value="<?php echo ($data['telepon'])?>"/>
          </div>
          <div>
            <label>Alamat:</label><br>
            <input type="text" name="alamat" id="Alamat" />
          </div>
          <div>
            <label>Password:</label><br>
            <input type="password" name="password1" id="Password1" value="<?php echo ($data['password'])?>" />
          </div>
          <div>
            <label>Ulangi Password:</label><br>
            <input type="password" name="password2" id="Password2" value="<?php echo ($data['password'])?>" />
          </div>
          <br>
          <div>
          <input type="submit" class="submit-btn" name="update" value="update"/>
          </div>
        </form>
      </div>


  </div>
    <!-- akhir kotak  -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>