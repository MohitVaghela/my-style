<?php 
include("../../conn.php");
$image= $_FILES["image"]["name"];
$id = $_POST['id'];
echo $id;
move_uploaded_file($_FILES['image']['tmp_name'],"../../images/slider/".$image);
$result=mysql_query("update slider set image='$image' where id=$id",$link);
header("location:slider.php");


?>