<?php
session_start();
if(!isset($_SESSION["librarian"])){
  ?>

<script type="text/javascript">
window.location="mylogin.php";

</script>

  <?php
}
   include"header.php";
   include"connection.php";
 ?>

        <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>All student information</h3>
                    </div>

                    <div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                            <div class="input-group">
                                
                            </div>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>
                <div class="row" style="min-height:500px">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">


                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <?php
                                $res=mysqli_query($link,"select * from u_reg");
                                echo "<table class='table table-bordered'>";
                                echo "<tr>";
                                echo "<th>"; echo "Firstname"; echo "</th>";
                                echo "<th>"; echo "Lastname"; echo "</th>";
                                echo "<th>"; echo "Username"; echo "</th>";
                                echo "<th>"; echo "Email"; echo "</th>";
                                echo "<th>"; echo "Contact"; echo "</th>";
                                echo "<th>"; echo "Sem"; echo "</th>";
                                  echo "<th>"; echo "Status"; echo "</th>";
                                  echo "<th>"; echo "Approve"; echo "</th>";
                                  echo "<th>"; echo "Not Approve"; echo "</th>";
echo "</tr>";
                                while ($row=mysqli_fetch_array($res))
                                 {
                                   echo "<tr>";
                                   echo "<td>"; echo $row["firstname"]; echo "</td>";
                                   echo "<td>"; echo $row["lastname"]; echo "</td>";
                                   echo "<td>"; echo $row["username"]; echo "</td>";
                                   echo "<td>"; echo $row["email"]; echo "</td>";
                                   echo "<td>"; echo $row["contact"]; echo "</td>";
                                   echo "<td>"; echo $row["sem"]; echo "</td>";
                                    echo "<td>"; echo $row["status"]; echo "</td>";
                                    echo "<td>"; ?> <a href="approve.php?id= <?php echo $row["u_id"];?>">Approve</a>  <?php echo "</td>";
                                    echo "<td>"; ?> <a href="notapprove.php?id=<?php echo $row["u_id"];?>">Not Approve</a>  <?php echo "</td>";

                                     echo "</tr>";

                                }

                                echo "</table>";
                                 ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->
        <?php
         include"footer.php";
         ?>
