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
                        <h3>Send message to student</h3>
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

                              <form  name="form1" class="col-lg-6" action="" method="post" enctype="multipart/form-data">


                              <table class="table table-bordered">
                                <tr>

                                  <td>
                                    <select class="form-control" name="dusername">
                                      <?php
                                      $res=mysqli_query($link,"select * from u_reg");
                                      while ($row=mysqli_fetch_array($res)) {
                                        ?><option value="<?php echo $row["username"]; ?>">
                                          <?php echo $row["username"] ."(". $row["enrollment"].")";?>
                                        </option><?php
                                      }
                                       ?>
                                    </select>
                                  </td>
                                </tr>

                                <tr>
                                  <td>
                                    <input type="text" class="form-control" name="title" placeholder="Enter Title">
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    message <br>
                                    <textarea name="msg" rows="8" cols="80" class="form-control"></textarea>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <input type="submit" name="submit1" value="send message" style="background-color: #20B2AA; color:white;">
                                  </td>
                                </tr>



                              </table>
                            </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->
        <?php
        if(isset($_POST["submit1"])){
          mysqli_query($link,"insert into messages values('','$_SESSION[librarian]','$_POST[dusername]','$_POST[title]','$_POST[msg]','n')");
            ?>
            <script type="text/javascript">
            alert("message send successfully");

            </script>




            <?php

        }
         ?>
        <?php
         include"footer.php";
         ?>
