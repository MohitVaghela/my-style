<?php 
include("conn.php");
session_start();
											if($_SESSION["login"] == "yes")
											{
												$user = $_SESSION["user"];
												$result = mysql_query("select * from cart where user_id = $user");
												$row= mysql_fetch_row($result);
												$num = mysql_num_rows($result);
												$products="";
												$total = "0";
												while ($row) 
												{
													$result2 = mysql_query("select *from products where id = $row[1]");
													$row2= mysql_fetch_row($result2);
													$total=$total+$row2[4];

													$products=$row[1]."-".$products;

													$row= mysql_fetch_row($result);
												} 

												
											}

$products = rtrim($products,'-');
$date = strtotime("+3 day");
$tem = date('d-m-Y', $date);
//$tem = strtotime("+3 day", date());
//$tem = mktime(0, 0, 0 ,date("m"),date("d")+1,date("y"));
$date = date("d-m-y");
$order = mysql_query("insert into odr values(null,$user,'$products',$total,'$date','$tem')",$link);
//echo "insert into odr (user_id,pro_id,total) valuse($user,'$products',$total);";
$delete =mysql_query("delete from cart where user_id = $user",$link);
//echo $tem;

header("location:payment.php");
?>


											