<?php 
include ("../../conn.php");
$id=$_GET['id'];
$result = mysql_query("delete from category where id=$id",$link);

header("location:category.php");
?>