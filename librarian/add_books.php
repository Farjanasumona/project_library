<?php
session_start();
if(!isset($_SESSION["librarian"])){
  ?>

<script type="text/javascript">
window.location="mylogin.php";

</script>

  <?php
}
  include"connection.php";
   include"header.php";
 ?>

        <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>Add Books Info</h3>
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

                                  <td><input type="text" class="form-control" placeholder="Books Name" name="booksname" required=""></td>
                                </tr>
                                <tr>

                                  <td>Books Image
                                    <input type="file" name="f1" required=""></td>
                                </tr>


                                <tr>
                                  <td><input type="text" class="form-control" placeholder="Books Author Name" name="bauthorname" required=""></td>
                                </tr>
                                <tr>
                                  <td><input type="text" class="form-control" placeholder="Publication Name" name="pname" required=""></td>
                                </tr>
                                <tr>
                                  <td><input type="text" class="form-control" placeholder="Books Purchase Date" name="bpurchasedt" required=""></td>
                                </tr>
                                <tr>
                                  <td><input type="text" class="form-control" placeholder="Books price" name="bprice" required=""></td>
                                </tr>
                                <tr>
                                  <td><input type="text" class="form-control" placeholder="Books quantity" name="bqty" required=""></td>
                                </tr>
                                <tr>
                                  <td><input type="text" class="form-control" placeholder="Available quantity" name="aqty" required=""></td>
                                </tr>
                                <tr>
                                  <td> <input type="submit" name="submit1" class="btn btn-default submit" value="insert books details" style=" background-color:#20B2AA; color:white"> </td>
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
if(isset($_POST["submit1"]))
{
$tm=md5(time());
$fnm=$_FILES["f1"]["name"];
$dst="./books_image/".$tm.$fnm;
$dst1="books_image/".$tm.$fnm;
move_uploaded_file($_FILES["f1"]["tmp_name"],$dst);
mysqli_query($link,"insert into add_books values('','$_POST[booksname]','$dst1','$_POST[bauthorname]','$_POST[pname]','$_POST[bpurchasedt]','$_POST[bprice]','$_POST[bqty]','$_POST[aqty]','$_SESSION[librarian]','no')");

?>

<script type="text/javascript">
alert("Books insert successfully");

</script>

<?php


}

         ?>
        <?php
         include"footer.php";
         ?>
