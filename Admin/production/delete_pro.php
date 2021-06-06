<?php 
include ("../../conn.php");
$id=$_GET['id'];
$result = mysql_query("delete from products where id=$id",$link);

header("location:products.php");
?>