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
							<h2 class="tittle">Mail Us</h2>
							<div class="mail-grids">
								<div class="mail-top">
									<div class="col-md-4 mail-grid">
										<i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>
										<h5>Address</h5>
										<p>9th floor - Palace Building - 221B Walk of Fame - USA</p>
									</div>
									<div class="col-md-4 mail-grid">
										<i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>
										<h5>Phone</h5>
										<p>Telephone:  +1 800 603 6035</p>
									</div>
									<div class="col-md-4 mail-grid">
										<i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>
										<h5>E-mail</h5>
										<p>E-mail:<a href="mailto:example@mail.com"> example@mail.com</a></p>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="map-w3">
								</div>
								<div class="mail-bottom">
									<h4>Get In Touch With Us</h4>
									<form action="contact.php" method="post">
										<input type="text" name="Username" placeholder="enter your name "  required="">
										<input type="email"  name="Email" placeholder="emter your mail" required="">
										<div class="clearfix"></div>
										<input type="number"  name="Number" placeholder="enter contact numer" required="">
										<input type="text"  name = "Message" placeholder="enter your message"> 
										<div class="clearfix"></div>
										<input type="submit" value="Submit" >
										<input type="reset" value="Clear" >

									</form>
								</div>
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