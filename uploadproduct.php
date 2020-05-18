<!DOCTYPE html>
<html>
<head>
    <title>Upload Product</title>
    <link rel="stylesheet" href="uploadproduct.css">  
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    
<body>
        <div class="home-navbar">
            <div class="logo"><img src="./assets/nitip.png"></div> 
           
               <ul>
                   <li><a href="#"><i class=""></i>Keranjang</a></li>
                   <li><a href="#"><i class=""></i>Bantuan</a></li>
                   <li><a href="#"><i class=""></i>Akun Saya</a></li>
               </ul>   
       </div>
       <div class="wrapper">
           <div class="upload-product">
               <div class="title">Upload Your Product Here</div>
               <div class="input-product-field">
                  <form id="uploadbarang" class="form" action="uploadproduct2.php" method="POST">
                   <div class="items">
                       <label for="barang" class="label-prod">Nama Produk</label>
                       <input id="barang" type="text" class="input-prod" name="nama" >
                   </div>
                   <div class="items">
                       <label for="harga" class="label-prod">Harga Produk</label>
                       <input id="harga" type="text" class="input-prod" name="harga" >
                   </div>
                   <div class="items">
                       <label for="deskripsi" class="label-prod">Deskripsi Produk</label>
                       <input id="deskripsi" class="text-area" name="deskripsi">
                   </div>
                   <div class="items">
                       <label for="upload-file" class="label-prod">Upload File</label>
                       <input id="upload-file" type="file" accept="image/*" class="input-prod">
                   </div>
                   <div>
                        <input type="submit" class="upload-btn" name="upload" value="upload"/>
                    </div>
                  </form>
               </div>
           </div>
       </div>
    <footer>
        <div class="foot">
            <p>&copy; 2020 Nitip 4.0 | All Rights Reserved</p>
        </div>    
    </footer>
</body>
</html>