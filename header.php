<div class="header">
			<div class="header-top">
				<div class="container">
					 <div class="top-left">
						<a href="#"> Help  <i class="glyphicon glyphicon-phone" aria-hidden="true"></i>7801872236</a>
					</div>
					<div class="top-right">
					<ul>  
						<?php
							if($_SESSION["login"] == "yes")
							{
						?>

						<li><a href="checkout.php">Checkout</a></li>
						<?php } ?>	


						<li>
								<?php
								if($_SESSION["login"] == "yes")
								{
									$uname = $_SESSION["username"];
									echo "<a href='logout.php'>$uname(logout) </a>";
								}
								else
								{
									echo "<a href='login.php'>login</a>";
								}


								?>
							
						</li>
						<?php
								if($_SESSION["login"] != "yes")
								{
									?>
						<li><a href="registered.php"> Create Account </a></li>
					<?php } ?>
					</ul>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="heder-bottom">
				<div class="container">
					<div class="logo-nav">
						<div class="logo-nav-left">
							<h1><a href="index.php"> My style <span>Shop anywhere</span></a></h1>
						</div>
						<div class="logo-nav-left1">
							<nav class="navbar navbar-default">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header nav_2">
								<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div> 
							<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
								<ul class="nav navbar-nav">
									<li class="active"><a href="index.php" class="act">Home</a></li>	
									<!-- Mega Menu -->
									
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">Men <b class="caret"></b></a>
										<ul class="dropdown-menu columns-12">
											
												
													
														<a href="products.php" style="color: black; text-align: center;"><h4>All products</h6></a> <br>
														
														<?php
														include("conn.php");
														$result = mysql_query("select * from category",$link);
														$row = mysql_fetch_row($result);
														
														while($row)
														{ 
																echo "<li><a style='color: black; text-align:center;' href='products.php?cat_id=$row[0]'>$row[1]</a></li>";
																$row = mysql_fetch_row($result);
						 	
														}

													 ?>
												
												
												
												
												<div class="clearfix"></div>
											
										</ul>
									</li>
									
									<?php
							if($_SESSION["login"] == "yes")
							{
						?>

						<li><a href="my_order.php">My orders</a></li>
						<?php } ?>	

									<li><a href="mail.php">Mail Us</a></li>
								</ul>
							</div>
							</nav>
						</div>
						<div class="logo-nav-right">
							<ul class="cd-header-buttons">
								<li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
							</ul> <!-- cd-header-buttons -->
							<div id="cd-search" class="cd-search">
								<form action="products_search.php" method="get">
									<input name="search" type="text" placeholder="Search..."  autocomplete="off">
								</form>
							</div>	
						</div>
						<div class="header-right2">
							<div class="cart box_1">
								<a href="checkout.php">
									<h3> <div class="total">
										<span>
											
											<?php 
											if($_SESSION["login"] == "yes")
											{
												$user = $_SESSION["user"];
												$result = mysql_query("select *from cart where user_id = $user");
												$row= mysql_fetch_row($result);
												$num = mysql_num_rows($result);
												while ($row) 
												{
													$result2 = mysql_query("select *from products where id = $row[1]");
													$row2= mysql_fetch_row($result2);
													$total=$total+$row2[4];

													$row= mysql_fetch_row($result);
												} 

												echo $total;

											?> Rs

										</span> (<span><?php echo $num; ?></span> items)</div>
										<img src="images/bag.png" alt="" />
									</h3>
										<?php }?>
								</a>
								

								<div class="clearfix"> </div>

							</div>

						</div>
						<div class="clearfix"> </div>

					</div>
				</div>
			</div>
		</div>