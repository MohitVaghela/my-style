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

    <title>REVIWES </title>

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
                          <th>Number</th>
                          <th>Email</th>
                          <th>Message</th>
                          <th>Delete</th>
                      
                        </tr>
                      </thead>
                      <tbody>
                        


                       <?php 
include ("../../conn.php");
$result = mysql_query("select  * from contact order by id DESC",$link);
$row = mysql_fetch_row($result);
$i = 1;
while($row)
{
?>

                        <tr>
                          <td><?php echo $i; ?></td>
                          <td><?php echo $row[1]?></td>
                          <td><?php echo $row[2]?></td>
                          <td><?php echo $row[3]?></td>
                          <td><?php echo $row[4]?></td>
                      
                    
    
                           <td><a class="glyphicon glyphicon-trash"></i></a></td>
                    

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