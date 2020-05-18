<?php require_once("auth.php"); ?>

<!DOCTYPE html>
<html>
    
<head>
    <title>Nitip</title>
    <link rel="stylesheet" href="nitip.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="home-navbar">
        <div class="logo"><img src="./assets/nitip.png"></div>
        <input type="text" class="form-control" type="text" placeholder="Mau cari apa?" name="search">
        <div class="input-group-text"><i class="fa fa-search"></i></div>
        <ul>
            <li><a href="uploadproduct.php"><i class=""></i>Upload Produk</a></li>
            <li><a href="profileuser.php"><i class=""></i>Akun Saya</a></li>
            <li><a href="logout.php"><i class=""></i>Logout</a></li>
        </ul> 
    </div>
    <div class="home-navbar">
        <div class="location-bar">
            <i class="material-icons" >&#xe55f;</i>  
            <input type="text" class="loc-search" type="text" placeholder="Lokasi" name="search">  
        </div>
        <div class="order-bar">
            <ul>
                <li><a href="#"><i class="fa fa-list-alt"></i>Order</a></li>
            </ul>
        </div>
    </div>
 
<div class="shopping-cart">
    <div class="container">
            <!-- First product box start here-->
            <div class="prod-info-main prod-wrap clearfix">
                <div class="row">
                    <div class="col-md-5 col-sm-12 col-xs-12">
                        <div class="product-image">
                            <img src="./assets/makanan1.jpg" class="img-responsive">
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-12 col-xs-12">
                        <div class="product-detail">
                            <h5 class="name"> <a href="#">Seblak</a>
                            <p><i class="material-icons">&#xe55f;</i>Bara</p></h5>
                            <p class="price-container"><span>Rp 12000</span></p>
                        </div>
                        <div class="description">
                            <p>A Short product description here </p>
                        </div>
                        <div class="product-info smart-form">
                            <div class="row">
                                <div class="col-md-12">
                                    <a href="#" class="btn btn-danger">Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>                
                </div>
            </div>
            <div class="prod-info-main prod-wrap clearfix">
                <div class="row">
                    <div class="col-md-5 col-sm-12 col-xs-12">
                        <div class="product-image">
                            <img src="./assets/makanan2.jpg" class="img-responsive">
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-12 col-xs-12">
                        <div class="product-detail">
                            <h5 class="name"> <a href="#">Perbobaan</a>
                            <p><i class="material-icons">&#xe55f;</i>Bateng</p></h5>
                            <p class="price-container"><span>Rp 20000</span></p>
                        </div>
                        <div class="description">
                            <p>A Short product description here </p>
                        </div>
                        <div class="product-info smart-form">
                            <div class="row">
                                <div class="col-md-12">
                                    <a href="#" class="btn btn-danger">Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>                
                </div>
            </div>
            <div class="prod-info-main prod-wrap clearfix">
                <div class="row">
                    <div class="col-md-5 col-sm-12 col-xs-12">
                        <div class="product-image">
                            <img src="./assets/makanan3.jpg" class="img-responsive">
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-12 col-xs-12">
                        <div class="product-detail">
                            <h5 class="name"> <a href="#">Es Campur</a>
                            <p><i class="material-icons">&#xe55f;</i>Bara</p></h5>
                            <p class="price-container"><span>Rp 12000</span></p>
                        </div>
                        <div class="description">
                            <p>A Short product description here </p>
                        </div>
                        <div class="product-info smart-form">
                            <div class="row">
                                <div class="col-md-12">
                                    <a href="#" class="btn btn-danger">Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>                
                </div>
            </div>
            <div class="prod-info-main prod-wrap clearfix">
                <div class="row">
                    <div class="col-md-5 col-sm-12 col-xs-12">
                        <div class="product-image">
                            <img src="./assets/makanan4.jpg" class="img-responsive">
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-12 col-xs-12">
                        <div class="product-detail">
                            <h5 class="name"> <a href="#">Seblak</a>
                            <p><i class="material-icons">&#xe55f;</i>Bara</p></h5>
                            <p class="price-container"><span>Rp 12000</span></p>
                        </div>
                        <div class="description">
                            <p>A Short product description here </p>
                        </div>
                        <div class="product-info smart-form">
                            <div class="row">
                                <div class="col-md-12">
                                    <a href="#" class="btn btn-danger">Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>                
                </div>
            </div>
        </div>
    </div>
</div>
    

        
</body>
</html>
