<?php

require_once("config.php");

if(isset($_POST['register'])){
    // input
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $telepon = $_POST['telepon'];
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];

    if($password1 == $password2){
        // query
        $query = pg_query("INSERT INTO nitiperz(nama, email, password, telepon)
                            VALUES('$nama', '$email', '$password1', '$telepon')");
    }

    if($query){
        header("Location: login.html")
    }
}

