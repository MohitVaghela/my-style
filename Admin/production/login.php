<?php 
session_start();
include("../../conn.php");

$email=$_POST["Username"];
$pass=$_POST["Password"];
$sql = "select *from admin where Email= '$email' and Password= '$pass'";

$result = mysql_query($sql,$link);

$num=mysql_num_rows($result);

if($num == 1)
{
  $_SESSION["log"] = "yes" ;
  //echo "yes";
  header("location:index__2.php");
}
else 
{
  $_SESSION["log"] = "no";
  //echo "no";
header("location :index.php");
}






?>


