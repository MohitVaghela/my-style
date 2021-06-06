<?php
session_start();
include("conn.php");
$email=$_POST["Email"];
$pass=$_POST["Password"];
$result=mysql_query("select *from user where email='$email' and password='$pass'",$link);
$row=mysql_fetch_row($result);
$num=mysql_num_rows($result);


if($num == 1)
{
	$_SESSION["login"] = "yes";
	$_SESSION["username"]= $row[1];
	$_SESSION["user"]= $row[0];

	header("location:index.php");
}
else if ($num == 0)
{
  header("location:login.php?al=1");	
}



?>