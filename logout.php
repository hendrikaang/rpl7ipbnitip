<?php

require_once("config.php");
session_start();
session_unset("masuk");
header("Location: index.php");

?>