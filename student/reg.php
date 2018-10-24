<!DOCTYPE html>
<?php
$conn=mysqli_connect("localhost","root","","library") or die("connection is not created");
 ?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Restration form</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="css_style.css">
</head>
<body>
    <div class="login-page">
                <form name="form1" action="" method="post">

                        <input type="text" class="form-control" placeholder="FirstName" name="firstname" required=""/>

                        <input type="text" class="form-control" placeholder="LastName" name="lastname" required=""/>

                        <input type="text" class="form-control" placeholder="Username" name="username" required=""/>

                        <input type="password" class="form-control" placeholder="Password" name="password" required=""/>

                        <input type="text" class="form-control" placeholder="email" name="email" required=""/>

                        <input type="text" class="form-control" placeholder="contact" name="contact" required=""/>

                        <input type="text" class="form-control" placeholder="SEM" name="sem" required=""/>
                        <input type="text" class="form-control" placeholder="enrollment" name="enrollment" required=""/>


                    <div class="col-lg-12  col-lg-push-3">
                        <input class="btn btn-default submit " type="submit" name="submit1" value="Register" style="background-color:#20B2AA; color:white;">
                    </div>
                        <p class="message">Already Registered? <a href="mylogin.php">Login</a> </p>

                </form>


            <?php
                 if(isset($_POST["submit1"]))
                 {
                 $firstname=$_POST["firstname"];
                    $lastname=$_POST["lastname"];
                     $username=$_POST["username"];
                     $password=$_POST["password"];
                     $email=$_POST["email"];
                      $contact=$_POST["contact"];
                      $sem=$_POST["sem"];
                      $enrollment=$_POST["enrollment"];



$insert="insert into u_reg(firstname,lastname,username,password,email,contact,sem,enrollment,status) values('$firstname','$lastname','$username','$password','$email','$contact','$sem','$enrollment','no')";
$run=mysqli_query($conn,$insert);
if($run){
  ?>
  <div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
  <strong>Registration Successfully.</strong> You will get email when your account is approved.
</div>

<?php

}
                 }

                 ?>

           </div>

           </body>
           </html>
