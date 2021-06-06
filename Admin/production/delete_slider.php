<?php 
include ("../../conn.php");
$id=$_GET['id'];
$result = mysql_query("delete from slider where id=$id",$link);

header("location:slider.php");
?>