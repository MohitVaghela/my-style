<?php 
session_start();
if($_SESSION["log"] == "no")
{
  header("location:index.php");
}


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ADD PRODUCTS</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    
    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

<?php echo include("sidebar.php")?>
        <!-- top navigation -->
    <?php echo include("topbar.php")?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              
              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                              <button class="btn btn-default" type="button">Go!</button>
                          </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                
                  <div class="x_content">

                    <form class="form-horizontal form-label-left" novalidate action="edit_product_pro.php" method="POST" enctype="multipart/form-data">
 <?php $id = $_GET['id'];

include ("../../conn.php");
$result = mysql_query("select  *from products where id=$id",$link);
$row = mysql_fetch_row($result);
 ?>
                   
                      

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input  class="form-control col-md-7 col-xs-12"  value="<?php echo $row[3]?>" name="name" placeholder="both name(s) e.g Jon Doe" required="required" type="text">
                        </div>
                      </div>
                      <input type="hidden" name="id" value="<?php echo $id; ?>">
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" name> Categories <span class="required"></span>
                        </label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                           <select class="form-control" name="cat">
                            <?php echo include("../../conn.php");
                        $result= mysql_query("select *from category",$link);
                        $row2= mysql_fetch_row($result);
                        while($row2)
                        {
                      ?>
                     
                            <option value="<?php echo $row2[0]?>" <?php if($row2[0] == $row[1]) {echo "selected"; } ?> ><?php echo $row2[1]?></option>

                          <?php $row2= mysql_fetch_row($result);
                        }
                          ?> 
                          </select>
 
                        </div>
                
                      </div>
                        <div class="clearfix"></div>
                          <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Sub Categories <span class="required"></span>
                        </label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                           <select class="form-control" name="sub" value="<?php echo $row[2]?>">
                            <?php echo include("../../conn.php");
                        $result= mysql_query("select *from sub_cat",$link);
                        $row2= mysql_fetch_row($result);
                        while($row2)
                        {
                      ?>
                     
                            <option value="<?php echo $row2[0]?>" <?php if($row2[0] == $row[2]) {echo "selected"; } ?> ><?php echo $row2[2]?></option>

                          <?php $row2= mysql_fetch_row($result);
                        }
                          ?> 
                          </select>
 
                        </div>
                
                      </div>
                        
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">price <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number"  name="price" required="required" value="<?php echo $row[4]?>" placeholder="enter price" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Size <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number"  name="size" required="required" value="<?php echo $row[5]?>" placeholder="enter size" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Description <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="desc" value="<?php echo $row[6]?>" class="optional form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                        <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Image 1<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input  class="form-control col-md-7 col-xs-12" type="file" name ="image1">
                        </div>
                      </div>
                        <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Image 2<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input  class="form-control col-md-7 col-xs-12"  type="file" name ="image2">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                       
                          <input type="submit" class="btn btn-success"></input>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- validator -->
    <script src="../vendors/validator/validator.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
	
  </body>
</html>