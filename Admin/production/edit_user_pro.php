
<?php 
include("../../conn.php");
$name = $_POST['name'];
$num= $_POST['num'];
$add = $_POST['add'];
$email = $_POST['email'];
$image= $_FILES["image"]["name"];
$id = $_POST['id'];
$pass = $_POST['pass'];

if ($image == "")
{
	move_uploaded_file($_FILES['image']['tmp_name'],"../../images/profile/".$image);

	$result=mysql_query("update user set name='$name',number = $num , address='$add',email = '$email',password = '$pass'  where id=$id",$link);
}
else
{
	$result=mysql_query("update user set name='$name',number = $num , address='$add',image= '$image',email = '$email',password = '$pass'  where id=$id",$link);
}
//echo "update user set name='$name',number = $num , address='$add',image= '$image',email = '$email',password = '$pass'  where id=$id";
header("location:user.php");

?>