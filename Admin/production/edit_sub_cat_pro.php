<?php 
include("../../conn.php");

$id = $_POST['id'];
$name = $_POST['name'];
$cat= $_POST['cat'];


$result=mysql_query("update sub_cat set name='$name' ,cat_id=$cat where id=$id",$link);
header("location:sub_cat.php");

?>