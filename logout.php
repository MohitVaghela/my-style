<?php

session_start();
$_SESSION["login"] = "no";
header("location:index.php");
?>