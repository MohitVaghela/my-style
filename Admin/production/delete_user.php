<?php 
include ("../../conn.php");
$id=$_GET['id'];
$result = mysql_query("delete from user where id=$id",$link);

header("location:user.php");
?>