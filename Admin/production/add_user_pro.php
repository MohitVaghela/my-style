<?php
	include("../../conn.php");
	
	$name=$_POST['name'];
	$email=$_POST['email'];
	$num=$_POST['number'];
	$add=$_POST['add'];
	$pass= $_POST['pass'];
	
	$image= $_FILES["image"]["name"];


	
	move_uploaded_file($_FILES['image']['tmp_name'],"../../images/profile/".$image);

//echo  "insert into user values(null,'$name',$num,'$add','$image','$email,'$pass')";


	 $result=mysql_query("insert into user values(null,'$name',$num,'$add','$image','$email','$pass')",$link);
	 header("location:user.php");
      
?>