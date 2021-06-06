<?php
	include("conn.php");
	$image = $_FILES['image']['name'];
	$name=$_POST['Username'];
	$num=$_POST['number'];
	$address=$_POST['address'];
	$email=$_POST['Email'];
	$pass=$_POST['Password'];
	move_uploaded_file($_FILES['image']['tmp_name'],"images/profile/".$image);
	 $result=mysql_query("insert into user (name,number,address,image,email,password) values('$name',$num,'$address','$image','$email','$pass' )",$link);
	 header("location:thank_you.php");
      
?>