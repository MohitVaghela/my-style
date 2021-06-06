<?php
session_start();
if($_SESSION["login"] == "yes")
	{
		header("location:index.php");
	}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>New Shop a E-Commerce Online Shopping Category Flat Bootstrap Responsive Website Template | Login :: w3layouts</title>
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
		<!--banner-->
		
	<!--banner-->

	<!--content-->
		<div class="content">
				<!--login-->
			<div class="login">
				<div class="main-agileits">
					<div class="form-w3agile">
						<h3>Login To New Shop</h3>
						<form action="login_pro.php" method="post">
							<div class="key">
								<i class="fa fa-envelope" aria-hidden="true"></i>
								<input  type="text"  name="Email" placeholder="Enter your email" required="">
								<div class="clearfix"></div>
							</div>
							<div class="key">
								<i class="fa fa-lock" aria-hidden="true"></i>
								<input  type="password"  name="Password" placeholder="Enter your password" required="">
								<div class="clearfix"></div>
							</div>
							<input type="submit" value="Login">
						</form>
					</div>
					<div class="forg">
						<a href="#" class="forg-left">Forgot Password</a>
						<a href="registered.php" class="forg-right">Register</a>
					<div class="clearfix"></div>
					</div>
				</div>
			</div>
				<!--login-->
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
if(isset($_GET['al']))
{
	if($_GET['al']==1)
	{
		echo '<script>alert("invalid username or password");window.location = "login.php";</script>';
		// echo '<script>var element = document.getElementById("demo").innerHTML="Login successful"</script>';
		// echo '<script>element.classList.add("red");</script>';
	}
	
	
	
}
?>