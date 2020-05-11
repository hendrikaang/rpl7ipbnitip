<?php

session_start();
if(!isset($_SESSION["masuk"])) header("Location: login.php");

?>