<?php session_start();

if(!isset($_SESSION["login"]))
	header("location:index.php");
if($_SESSION["login"] == "no")
	{
		header("location:index.php");
	}

 ?>
<!DOCTYPE HTML>
<html>
<head>
<title>New ShopS a E-Commerce Online Shopping Category Flat Bootstrap Responsive Website Template | Checkout :: w3layouts</title>
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
			include ("header.php");
		?>
		<!--header-->
		<!--banner-->
		<div class="banner1">
			<div class="container">
				<h3><a href="index.php">Home</a> / <span>Checkout</span></h3>
			</div>
		</div>
	<!--banner-->
<?php 
					   $user = $_SESSION["user"];
					   $result = mysql_query("select * from cart where user_id = $user");
					   $row=mysql_fetch_row($result);
					   $total=mysql_num_rows($result);

?>
	<!--content-->
		<div class="content">
			<div class="cart-items">
				<div class="container">
					 <h2>My Shopping Bag (<?php echo $total?>)</h2>
						<script>$(document).ready(function(c) 
						{
							$('.close1').on('click', function(c)
							{
								$('.cart-header').fadeOut('slow', function(c)
								{
									$('.cart-header').remove();
								});
								});	  
							});
					   </script>

					   <?php
					   while($row)
					   {
					   	
					  $result2 = mysql_query("select * from products where id = $row[1]");
					   $row2=mysql_fetch_row($result2);
					   


					   ?>



					 <div class="cart-header">
						 <a href = "delete_cart.php?id=<?php echo $row[0]?>"><div class="close1"> </div></a>
						 <div class="cart-sec simpleCart_shelfItem">
								<div class="cart-item cyc">
									 <img src="images/i/<?php echo $row2[7]?>" class="img-responsive" alt="">
								</div>
							   <div class="cart-item-info">
								<h3><a href="#"> <?php echo $row2[3]?> </a></h3>
								<ul class="qty">
									<li><p>PRIZE:<?php echo $row2[4]?>RS</p></li>
									<li><p>SIZE:<?php echo $row2[5]?></p></li>
								</ul>
									 <div class="delivery">
									 <p>Quntity:<?php echo $row[2]?></p>
									 
									 <div class="clearfix"></div>
								</div>	
							   </div>
							   <div class="clearfix"></div>
													
						  </div>
					 </div>
					
					 <?php 
					 $row = mysql_fetch_row($result);
					}

					 ?>
						
				</div>
			</div>
	<!-- checkout -->	
		</div>
			<button type="button" ><a href="process.php">CHECKOUT</a></button>
					<!---footer--->

					<?php
						 include("footer.php");
					?>
					<!---footer--->
					<!--copy-->
					
				<!--copy-->
				
</body>
</html>