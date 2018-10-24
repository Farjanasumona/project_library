<?php
session_start();
include"connection.php";
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Login Form</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css1_style.css">
  </head>
  <body class="login">


  <div class="login_wrapper">

      <section class="login_content">
          <form name="form1" action="" method="post">
              <h1>Student Login Form</h1>

              <div>
                  <input type="text" name="username" class="form-control" placeholder="Username" required=""/>
              </div>
              <div>
                  <input type="password" name="password" class="form-control" placeholder="Password" required=""/>
              </div>
              <div>

                  <input class="btn btn-default submit" type="submit" name="submit1" value="Login" style="background-color:#20B2AA; color:white;">

              </div>

              <div class="clearfix"></div>

              <div class="separator">
                  <p class="change_link">New to site?
                      <a href="reg.php"> Create Account </a>
                  </p>

                  <div class="clearfix"></div>
                  <br/>


              </div>
          </form>
      </section>
  </div>
<?php
if(isset($_POST["submit1"]))
{
  $count=0;
  $reg=mysqli_query($link,"select * from u_reg where username='$_POST[username]' && password='$_POST[password]' && status='yes'");
  $count=mysqli_num_rows($reg);
  if($count==0)
  {
?>
<div class="alert">
<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
<strong>Invalid!!.</strong> Username or Password.
</div>
<?php
}
else
  {
    $_SESSION["username"] = $_POST["username"];
?>
<script type="text/javascript">
window.location="profile.php";

</script>
<?php
  }
}
 ?>









  </body>
</html>
