<?php
	include("../../conn.php");
	
	$name=$_POST['name'];
	$cat=$_POST['cat'];
	$sub=$_POST['sub'];
	$price=$_POST['price'];
	$size= $_POST['size'];
	$des=$_POST['des'];
	$image1= $_FILES["image1"]["name"];
	$image2= $_FILES["image2"]["name"];

	
	move_uploaded_file($_FILES['image1']['tmp_name'],"../../images/i/".$image1);
	move_uploaded_file($_FILES['image2']['tmp_name'],"../../images/i/".$image2);

	 $result=mysql_query("insert into products values(null,$cat,$sub,'$name',$price,'$size','$des','$image1','$image2')",$link);
	 header("location:products.php");
      
?>