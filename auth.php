<?php

require_once("config.php");
session_start();
if(!isset($_SESSION["masuk"])) header("Location: login-register.html");

?>