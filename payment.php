<?php session_start(); ?>
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
			include("conn.php");
		?>


		<!--header-->

		<php>
		<!--banner-->
		<div class="banner1">
			<div class="container">
				<h3><a href="index.php">Home</a> / <span>Mail Us</span></h3>
			</div>
		</div>
	<!--banner-->
		<!--content-->
			<div class="content">
				<!--contact-->
					<div class="mail-w3ls">
						<div class="container">
							<h2 class="tittle">your order is confirmed  by cash on deliervy</h2>

							<div class="mail-grids">
								<div class="mail-top">


<div class="col-md-4 mail-grid ">
								<i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>
								<h5>Items</h5>
								<p>
									
									<?php
										$user = $_SESSION["user"];
										$pro = mysql_query("select pro_id, total from odr where user_id = $user order by id DESC");

										$p= mysql_fetch_row($pro);
										$total = $p[1];
										$ids = explode("-", $p[0]);

												foreach ($ids as $v) 
												{
													$result2 = mysql_query("select name from products where id = $v");
													$row2= mysql_fetch_row($result2);
													
													echo "<h3>".$row2[0]."</h3>";
													echo "<br>"; 
													$p= mysql_fetch_row($pro);
											}
										
									?>

								</p>
							</div>

							<div class="col-md-4 mail-grid ">
								<i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>
								<h5>Address</h5>
								<p>
									
									<?php
										$result = mysql_query("select * from user where id = $user");
												$row= mysql_fetch_row($result);
												echo "<h3>".$row[3]."</h3>";

									?>

								</p>
							</div>

							
														<div class="col-md-4 mail-grid">
								<i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>
								<h5 class="">Total</h5>
								<?php
								$pro = mysql_query("select pro_id, total from odr where user_id = $user order by id DESC");

										$p= mysql_fetch_row($pro);
										$total = $p[1];
										 
								$ids = explode("-", $p[0]);

												foreach ($ids as $v) 
												{
													$result2 = mysql_query("select price from products where id = $v");
													$row2= mysql_fetch_row($result2);
													
													echo "<h3>".$row2[0]."</h3>";
													echo "<br>"; 
													$p= mysql_fetch_row($pro);
											}

								?>
								<p><?php echo "<h3>".$total." Rs</h3>"; ?> 
</p>
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

