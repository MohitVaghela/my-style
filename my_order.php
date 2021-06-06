<?php session_start(); 
$user = $_SESSION["user"];
?>
<!DOCTYPE HTML>
<html>
<head>
<title>New Shop a E-Commerce Online Shopping Category Flat Bootstrap Responsive Website Template | Contact :: w3layouts</title>
<!--css-->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet">
<!--css-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="New Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery.min.js"></script>
<link href='//fonts.googleapis.com/css?family=Cagliostro' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,800italic,800,700italic,700,600italic,600,400italic,300italic,300' rel='stylesheet' type='text/css'>
<!--search jQuery-->
	<script src="js/main.js"></script>
<!--search jQuery-->

 <!--mycart-->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
 <!-- cart -->
<script src="js/simpleCart.min.js"></script>
<!-- cart -->
  
</head>
<body>
	<!--header-->
		<?php
			include("header.php");
		?>


		<!--header-->

		<php>
		<!--banner-->
		<div class="banner1">
			<div class="container">
				<h3><a href="index.php">Home</a> / <span>orders</span></h3>
			</div>
		</div>
	<!--banner-->
       	 			<!--content-->
			<div class="content">
				<!--contact-->
					<div class="mail-w3ls">
						<div class="container">
							<h2 class="tittle">My Orders</h2>
							<div class="mail-grids">
								


								<table class="table table-striped">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Items</th>
                          <th>Total</th>
                          <th>order date </th>
                          
                          <th>Delivery date</th>
                          
                          <th>Delete</th>

                          
                        </tr>
                      </thead>
                      <tbody>
                        


                       <?php 

$result = mysql_query("select  *from odr where user_id = $user order by id DESC",$link);
$row = mysql_fetch_row($result);
$i = 1;
while($row)
{
						$ids = explode("-", $row[2]);
						$name = "";
						foreach ($ids as $v) 
						{
							$result2 = mysql_query("select name from products where id = $v");
							$row2= mysql_fetch_row($result2);						
							$name=$row2[0]."-".$name;
						}

?>

                        <tr>

                          <td scope="row"><?php echo $i;?></td>
                          <td><?php echo $name ?></td>
                         <td><?php echo $row[3]?></td>
                         <td><?php echo $row[4]?></td>
                         <td><?php echo $row[5]?></td>
                        
                        
                          


                          <td><a class="glyphicon glyphicon-trash" href="delete_odr.php?id=<?php echo $row[0]; ?>"></a></td>
                        </tr>
                        <?php 
                        $row = mysql_fetch_row($result);
                        $i++;
                      }
                        ?>


                      </tbody>
                    </table>



							</div>
						</div>
					</div>
				<!--contact-->
			</div>
		<!--content-->
		<!---footer--->
					<?php
						include("footer.php");
					?>
					<!---footer--->
					<!--copy-->
					
				<!--copy-->
</body>
</html>
<?php 
include("conn.php");



?>