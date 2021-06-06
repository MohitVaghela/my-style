<?php 
include("../../conn.php");
$name=$_POST['name'];
$image= $_FILES["image"]["name"];
$id = $_POST['id'];
//echo $id;

if($image == "")
{
	$result=mysql_query("update category set name='$name' where id=$id",$link);
}
else
{
	move_uploaded_file($_FILES['image']['tmp_name'],"../../images/slider/".$image);
$result=mysql_query("update category set image='$image' ,name='$name' where id=$id",$link);
}


header("location:category.php");

?>