<?php
	include("conn.php");

$id = $_GET["id"];
mysql_query("delete from cart where id = $id",$link);
header("location:checkout.php");

?>