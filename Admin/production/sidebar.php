
<body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index__2.php" class="site_title"><i class="fa fa-paw"></i> <span>My Style</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
                           <?php
              include("../../conn.php");
                $sql ="select * from admin";

                 $result= mysql_query($sql,$link);
               $row = mysql_fetch_row($result);
               

              ?>
            <div class="profile clearfix">
              <div class="profile_pic">
                 <img src="../../images/admin/<?php echo $row[4]; ?>" height="50" width="50"  class="img-circle profile_img"> </img>
              </div>

              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo $row[1]?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Slider <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="slider.php">Action</a></li>
                      <li><a href="add_slider.php">Add slider</a></li>
                      
                    </ul>
                  </li>
                  <li><a><i class="fa fa-home"></i> Products <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="products.php">Action</a></li>
                      <li><a href="add_product.php">Add product</a></li>
                      
                    </ul>
                  </li>
                   <li><a><i class="fa fa-home"></i>Categories<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="category.php">Action</a></li>
                      <li><a href="add_category.php">Add Categories</a></li>
                      
                    </ul>
                  </li>
                  <li><a><i class="fa fa-home"></i> Sub Categories<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="sub_cat.php">Action</a></li>
                      <li><a href="add_sub_cat.php">Add Sub Categories</a></li>
                      
                    </ul>
                  </li>
                  <li><a><i class="fa fa-home"></i>User<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="User.php">Action</a></li>
                      <li><a href="add_user.php">Add User</a></li>
                      
                    </ul>
                  </li>
                  <li><a><i class="fa fa-home"></i>Reviews<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="Reviews.php">Action</a></li>
               
                      
                    </ul>
                  </li>
                   <li><a><i class="fa fa-home"></i>Admin<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="admin.php">Action</a></li>
               
                      
                    </ul>
                     <li><a><i class="fa fa-home"></i>Cart<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="cart.php">Action</a></li>
               
                      
                    </ul>
                  </li>
                  <li><a><i class="fa fa-home"></i>order<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="order.php">Action</a></li>
               
                      
                    </ul>
                  </li>
                  </li>
                 
               
                 
                  </li>                  
                  
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="logout.php">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>