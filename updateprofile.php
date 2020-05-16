<?php

require_once("auth.php");

if(isset($_POST['update'])){
    $id = $_SESSION["masuk"];
    // input
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $telepon = $_POST['telepon'];
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];
    
    if($password1 == $password2){
        // query
        $query = pg_query($db, "UPDATE nitiperz SET
                    nama = '$nama', email = '$email', telepon = '$telepon', password = '$password1'
                    WHERE userID = '$id'");
    }else{
        echo("Password dan pengulangannya berbeda");
    }

    if($query){
        header("Location: profileuser.php");
    }else{
        echo("gagal regist");
    }

}
echo("tetew");
?>