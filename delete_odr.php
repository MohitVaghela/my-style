<?php 
include ("conn.php");
$id=$_GET['id'];
$result = mysql_query("delete from odr where id=$id",$link);

header("location:my_order.php");
?>