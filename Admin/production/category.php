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

    <title>CATEGORIES </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
   <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <?php include ("topbar.php");?>
        <!-- top navigation -->
        <!-- /top navigation -->
        <?php include ("sidebar.php");?>
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

                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>Number</th>
                          <th>Name</th>
                          <th>Image</th>
                          <th>Delete</th>
                          <th>Edit</th>
                        </tr>
                      </thead>
                      <tbody>
                        


                       <?php 
include ("../../conn.php");
$result = mysql_query("select  *from category order by id DESC",$link);
$row = mysql_fetch_row($result);
$i = 1;
while($row)
{
?>

                        <tr>
                          <td><?php echo $i; ?></td>
                          <td><?php echo $row[1]?></td>
                      
                    
                          <td ><img src="../../images/<?php echo $row[2]?>" height="50" width="50"></img></td>
    
                                                   <td><a class="glyphicon glyphicon-trash" href="delete_category.php?id=<?php echo $row[0]; ?>"></a></td>
                          <td><a class="glyphicon glyphicon-pencil" href="edit_cat.php?id=<?php echo $row[0]; ?>"><i cl></a></li></td>
 

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

              <div class="clearfix"></div>

           
              <div class="clearfix"></div>

              
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
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  </body>
</html>