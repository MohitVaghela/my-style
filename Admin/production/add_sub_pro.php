<?php
	include("../../conn.php");
	
	$name=$_POST['name'];
	$cat=$_POST['cat'];
	//echo $name;
	//echo $cat;
	 $result=mysql_query("insert into sub_cat (cat_id,name) values($cat,'$name')",$link);
	 header("location:sub_cat.php");
      
?>