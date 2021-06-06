<?php 
include("conn.php");
$name = $_POST["Username"];
$mail = $_POST["Email"];
$num = $_POST["Number"];

$msg = $_POST["Message"];

$res=mysql_query("insert into contact (username,number,email,message) values('$name',$num,'$mail','$msg' )",$link);
header("location:thank_you.php");
 


?>