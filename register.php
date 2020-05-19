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
        // query tabel nitiperz
        $query1 = pg_query($db, "INSERT INTO nitiperz(nama, email, password, telepon)
                            VALUES('$nama', '$email', '$password1', '$telepon');");
        $ambilNitiperz = pg_query($db, "SELECT * FROM nitiperz WHERE nama=$nama AND email=$email;");
        $data = pg_fetch_assoc($ambilNitiperz);
        $userID = $data['userid'];
        // query tabel mitra
        $query2 = pg_query($db, "INSERT INTO mitra(userID, jammulai, jamselesai) 
                            VALUES($userID, '00:00:00', '00:00:00');");
        // query tabel customer
        $query3 = pg_query($db, "INSERT INTO customer(userID) VALUES($userID);");
    }else{
        echo("Password dan pengulangannya berbeda");
    }

    if($query){
        header("Location: login-register.html");
    }else{
        echo("gagal regist");
    }

}
echo("tetew");
?>