<?php 
include("../../conn.php");
$image= $_FILES["image"]["name"];

move_uploaded_file($_FILES['image']['tmp_name'],"../../images/slider/".$image);
$result=mysql_query("insert into slider (image) values('$image' )",$link);
header("location:slider.php");

?>