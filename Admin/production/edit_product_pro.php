<?php 
include("../../conn.php");

$id = $_POST['id'];
$name=$_POST['name'];
	$cat=$_POST['cat'];
	$sub=$_POST['sub'];
	$price=$_POST['price'];
	$size= $_POST['size'];
	$desc=$_POST['desc'];
	$image1= $_FILES["image1"]["name"];
	$image2= $_FILES["image2"]["name"];
	


	if($image1 == "" && $image2 != "")
	{
		$result=mysql_query("update products set cat_id=$cat,sub_cat_id=$sub,name='$name',price=$price,size='$size',des='$desc',img2='$image2' where id=$id",$link);	
		//echo "update products set cat_id=$cat,sub_cat_id,name='$name',price=$price,size='$size',des='$desc',img2='$image2' where id=$id";
		move_uploaded_file($_FILES['image2']['tmp_name'],"../../images/i/".$image2);
	}
	elseif($image2 == "" && $image1 != "")
	{

		$result=mysql_query("update products set cat_id=$cat,sub_cat_id= $sub,name='$name',price=$price,size='$size',des='$desc',img1='$image1' where id=$id",$link);	
		//echo "update products set cat_id=$cat,sub_cat_id,name='$name',price=$price,size='$size',des='$desc',img1='$image1' where id=$id";
		move_uploaded_file($_FILES['image1']['tmp_name'],"../../images/i/".$image1);
		
	}
	elseif($image1 != "" && $image2 != "")
	{
		$result=mysql_query("update products set cat_id=$cat,sub_cat_id=$sub,name='$name',price=$price,size='$size',des='$desc',img='$image1',img2='$image2' where id=$id",$link);	
		//echo "update products set cat_id=$cat,sub_cat_id,name='$name',price=$price,size='$size',des='$desc',img='$image1',img2='$image2' where id=$id";
		move_uploaded_file($_FILES['image1']['tmp_name'],"../../images/i/".$image1);
		move_uploaded_file($_FILES['image2']['tmp_name'],"../../images/i/".$image2);	
	}
	else
	{
		$result=mysql_query("update products set cat_id=$cat, sub_cat_id = $sub, name='$name', price=$price, size='$size', des='$desc' where id=$id",$link);
		 //echo "update products set cat_id=$cat, sub_cat_id=$sub, name='$name', price=$price, size='$size', des='$desc' where id=$id";	
		
	}

header("location:products.php");

?>