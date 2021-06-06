<?php session_start (); 
$user = $_SESSION["user"];
?>
<!DOCTYPE HTML>
<html>
<head>
<title>New Shop a E-Commerce Online Shopping Category Flat Bootstrap Responsive Website Template | Single :: w3layouts</title>
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
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
 <!-- cart -->
<script src="js/simpleCart.min.js"></script>
<!-- cart -->
  <script defer src="js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<script src="js/imagezoom.js"></script>
<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>

  <!--mycart-->
  <!--start-rate-->
<script src="js/jstarbox.js"></script>
	<link rel="stylesheet" href="css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
		<script type="text/javascript">
			jQuery(function() {
			jQuery('.starbox').each(function() {
				var starbox = jQuery(this);
					starbox.starbox({
					average: starbox.attr('data-start-value'),
					changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
					ghosting: starbox.hasClass('ghosting'),
					autoUpdateAverage: starbox.hasClass('autoupdate'),
					buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
					stars: starbox.attr('data-star-count') || 5
					}).bind('starbox-value-changed', function(event, value) {
					if(starbox.hasClass('random')) {
					var val = Math.random();
					starbox.next().text(' '+val);
					return val;
					} 
				})
			});
		});
		</script>
<!--//End-rate-->
<link href="css/owl.carousel.css" rel="stylesheet">
<script src="js/owl.carousel.js"></script>
	<script>
		$(document).ready(function() {
		$("#owl-demo").owlCarousel({
			items : 1,
			lazyLoad : true,
			autoPlay : true,
			navigation : false,
			navigationText :  false,
			pagination : true,
		});
		});
	</script>

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
				<h3><a href="index.php">Home</a> / <span>Single</span></h3>
			</div>
		</div>
	<!--banner-->
						<?php
						include("conn.php");
							$id=$_GET["id"];
							$result = mysql_query("select * from products where id=$id",$link);	
							$row = mysql_fetch_row($result);
							?>


	<!--content-->
		<div class="content">
			<!--single-->
			<div class="single-wl3">
				<div class="container">
					<div class="single-grids">
						<div class="col-md-9 single-grid">
							<div clas="single-top">
								<div class="single-left">
									<div class="flexslider">
										<ul class="slides">
											<li data-thumb="images/i/<?php echo $row[7];?>">
												<div class="thumb-image"> <img src="images/i/<?php echo $row[7];?>" data-imagezoom="true" class="img-responsive"> </div>
											</li>
											<li data-thumb="images/i/<?php echo $row[8];?>">
												 <div class="thumb-image"> <img src="images/i/<?php echo $row[8];?>" data-imagezoom="true" class="img-responsive"> </div>
											</li>
										<!--	<li data-thumb="images/i/<?php echo $row[9];?>">
											   <div class="thumb-image"> <img src="images/i/<?php echo $row[9];?>" data-imagezoom="true" class="img-responsive"> </div>
											</li> -->
										 </ul>
									</div>
								</div>
								<div class="single-right simpleCart_shelfItem">
									<h4><?php echo $row[3]?></h4>
									<div class="block">
																			</div>
									<p class="price item_price"><?php echo $row[4]?> RS.</p>
									<div class="description">
										<p><span>Quick Overview : </span> <?php echo $row[6]?></p>
									</div>
									<div class="color-quality">
										<h6>Quality :</h6>
											<div class="quantity"> 
												<div class="quantity-select">                           
													<div class="entry value-minus1">&nbsp;</div>
													<div class="entry value1"><span>1</span></div>
													<div class="entry value-plus1 active">&nbsp;</div>
												</div>
											</div>
												<!--quantity-->
														<script>
														$('.value-plus1').on('click', function(){
															var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10)+1;
															divUpd.text(newVal);
														});

														$('.value-minus1').on('click', function(){
															var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10)-1;
															if(newVal>=1) divUpd.text(newVal);
														});
														</script>
													<!--quantity-->
									</div>
									<div class="women">
										<span class="size"><?php echo $row[5]?> </span>
										<?php
																	if($_SESSION["login"] == "yes")

										{
				     					?>
				 						<a href="cart.php?pro_id=<?php echo $row[0]?>" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
										<?php 
										}
										?>
									</div>
									
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						
						<div class="clearfix"> </div>
					</div>
					<!--Product Description-->
						
					<!--Product Description-->
				</div>
			</div>
			<!--single-->
			
			<div class="new-arrivals-w3agile">
					<div class="container">
						<h3 class="tittle1">New Arrivals</h3>
						<?php 
				$result1 = mysql_query("select * from products  where cat_id = $row[1] order by id DESC LIMIT 4",$link);
							$row1 = mysql_fetch_row($result1);
							
							while($row1)
							{
								 
								
						
			?>
						<div class="arrivals-grids">
							<div class="col-md-3 arrival-grid simpleCart_shelfItem">

								<div class="grid-arr">
									<div  class="grid-arrival">
										<figure>		
											<a href="single.php?id=<?php echo $row1[0];?>">
												<div class="grid-img">
													<img  src="images/i/<?php echo $row1[7];?>" class="img-responsive" alt="">
												</div>
												<div class="grid-img">
													<img  src="images/i/<?php echo $row1[8];?>" class="img-responsive"  alt="">
												</div>			
											</a>		
										</figure>	
									</div>
									<div class="ribben">
										<p>NEW</p>
									</div>
									
										<div class="women">
										<h6><a href="single.php?id=<?php echo $row1[0];?>"><?php echo $row1[3];?></a></h6>
										<span class="size"><?php echo $row1[5];?> </span>
										<p ><em class="item_price"><?php echo $row1[4];?></em></p>
										<?php
																	if($_SESSION["login"] == "yes")

										{
										?>
										<a href="cart.php?user=<?php echo $user?>&pro_id=<?php echo $row[0]?>" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
										<?php 
										}
										?>
									</div>
								</div>
								
							</div>
							<?php 
																	$row1 = mysql_fetch_row($result1);
																}

										?>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			<!--new-arrivals-->
		</div>
		<!--content-->
		<!---footer--->
					<?php
						include ("footer.php");
					?>
					<!---footer--->
					<!--copy-->
					
				<!--copy-->
				
</body>
</html>