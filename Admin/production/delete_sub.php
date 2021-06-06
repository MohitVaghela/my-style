<?php 
include ("../../conn.php");
$id=$_GET['id'];
$result = mysql_query("delete from sub_cat where id=$id",$link);

header("location:sub_cat.php");
?>