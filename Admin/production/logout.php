<?php

session_start();
$_SESSION["log"] = "no";
header("location:index.php");
?>