<?php
session_start();
$user = $_SESSION["user"];
	include("conn.php");
	$pro_id=$_GET["pro_id"];

	$result = mysql_query("select *from cart where user_id = $user AND pro_id = $pro_id");
	$num = mysql_num_rows($result);
	if($num >0)
	{
		$row= mysql_fetch_row($result);
		mysql_query("update cart set que=$row[2]+1 where id=$row[0]");
	}
	else
	{
	$qry="insert into cart(`pro_id`,`que`,`user_id`) values ('$pro_id',1,'$user')";
	mysql_query($qry,$link);	
	}


	
	
	header("location:checkout.php");
?>
