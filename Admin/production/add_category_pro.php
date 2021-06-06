<?php 
include("../../conn.php");
$name=$_POST["name"]; 
$image= $_FILES["image"]["name"];

move_uploaded_file($_FILES['image']['tmp_name'],"../../images/".$image);
$result=mysql_query("insert into category (name,image) values('$name','$image' )",$link);
header("location:category.php");

?>