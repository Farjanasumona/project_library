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
                        <h3>Issue Books</h3>
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
                              <form name="form1" action="" method="post">
                                <table>
                                  <tr>
                                    <td>
                                      <select name="enr" class="form-control selectpiker">
                                        <?php
                                        $res=mysqli_query($link,"select enrollment from u_reg where status='yes'");
                                        while ($row=mysqli_fetch_array($res)) {
                                          echo "<option>";
                                          echo $row["enrollment"];
                                          echo "</option>";
                                        }


                                         ?>
                                      </select>
                                    </td>
                                    <td>
                                      <input type="submit" value="search" name="submit1" class="form-control btn btn-default" style="margin-top:5px;">
                                    </td>
                                  </tr>
                                </table>

                                <?php
                                if(isset($_POST["submit1"])){

                                  $res5=mysqli_query($link,"select * from u_reg where enrollment='$_POST[enr]'");
                                  while ($row5=mysqli_fetch_array($res5)) {

                                  $firstname=$row5["firstname"];
                                  $lastname=$row5["lastname"];
                                  $username=$row5["username"];
                                  $email=$row5["email"];
                                  $contact=$row5["contact"];
                                  $sem=$row5["sem"];
                                  $enrollment=$row5["enrollment"];
                                  $_SESSION["enrollment"]=$enrollment;
                                  $_SESSION["studentusername"]=$username;

                                  }
                          ?>
                          <table class="table table-bordered">
                            <tr>

                              <td><input type="text" class="form-control" placeholder="enrollmentno" name="enrollment" value="<?php echo $enrollment; ?>" disabled></td>
                            </tr>
                            <tr>

                              <td><input type="text" class="form-control" placeholder="student name" name="studentname" value="<?php echo $firstname.' '.$lastname; ?>" required></td>
                            </tr>
                            <tr>

                              <td><input type="text" class="form-control" placeholder="student sem" name="studentsem"  value="<?php echo $sem; ?>" required></td>
                            </tr>
                            <tr>

                              <td><input type="text" class="form-control" placeholder="student contact" name="studentcontact" value="<?php echo $contact; ?>" required></td>
                            </tr>
                            <tr>

                              <td><input type="text" class="form-control" placeholder="student email" name="studentemail"  value=" <?php echo $email ?>" required></td>
                            </tr>
                            <tr>
                              <td>
                                <select class="form-control selectpiker" name="booksname">
                                  <?php
                                  $res = mysqli_query($link,"select books_name from add_books");
                                  while ($row=mysqli_fetch_array($res)) {
                                    echo "<option>";
                                    echo $row["books_name"];
                                    echo "</option>";
                                  }
                                   ?>

                                </select>

                              </td>
                            </tr>
                            <tr>

                              <td><input type="text" class="form-control" placeholder="books issue date" name="booksissuedate" value="<?php echo date("d-m-Y"); ?>" required></td>
                            </tr>
                            <tr>

                              <td><input type="text" class="form-control" placeholder="student username" name="studentusername" value="<?php echo $username; ?>" disabled></td>
                            </tr>

                            <tr>

                              <td><input type="submit"  value="issue books" class="form-control btn btn-default" name="submit2" style="background-color:#20B2AA; color:white"></td>
                            </tr>
                        </table>

                          <?php
                                }
                                 ?>
                              </form>
                              <?php
                              if(isset($_POST["submit2"]))
                              {
                                $qty=0;
                                $res=mysqli_query($link,"select * from add_books where books_name='$_POST[booksname]'");
                                while ($row=mysqli_fetch_array($res)) {
                                  $qty=$row["available_qty"];
                                  }

                                  if($qty==0)
                                  {
                                  ?>

                                  <div class="alert alert-danger col-lg-6 col-lg-push-3">
                                    <strong style="...">This books are not available in stock </strong>

                                  </div>
                                  <?php

                                    }
                                    else {

                                mysqli_query($link,"insert into issue_books value('','$_SESSION[enrollment]','$_POST[studentname]','$_POST[studentsem]','$_POST[studentcontact]','$_POST[studentemail]','$_POST[booksname]','$_POST[booksissuedate]','','$_SESSION[studentusername]')");
                                mysqli_query($link,"update add_books set available_qty=available_qty-1 where books_name='$_POST[booksname]'");
                                mysqli_query($link,"update add_books set issue_status='yes' where books_name='$_POST[booksname]'");
                               ?>
                               <script type="text/javascript">
                               alert("books issued successfully");
                               window.location.href=window.location.href;

                               </script>

                               <?php
                             }
                              }
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
