 <?php
 include "connection1.php";
    session_start();

     ?>
    <!DOCTYPE html>
    <html>
    <head>
      <title></title>
      <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >
    </head>
    <body>
        <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
              <a class="navbar-brand active">LIBRARY MANAGEMENT SYSTEM</a>
          </div>
        <ul class="nav navbar-nav">
            <li><a href="index.php">HOME</a></li>
            <?php
            if(isset($_SESSION['username']))
              {
                ?>
                <li><a href="search_books.php">BOOKS</a></li>
                <?php

              }

              else {
                ?>
                <li><a href="display_books.php">BOOKS</a></li>
                <?php

              }

             ?>
            <li><a href="profile.php">MY-PROFILE</a></li>
            <li><a href="report.php">FEEDBACK</a></li>

         </ul>

  <?php

        if(isset($_SESSION['username']))
          {
            $sql="SELECT COUNT(read1) as total FROM messages where read1='no' and dusername='$_SESSION[username]'";
            $res=mysqli_query($db,$sql);
            $row=mysqli_fetch_assoc($res);


         ?>
        <ul class="nav navbar-nav navbar-right">
          <li><a><p style="color:#ff1503;font-size: 20px;" id="demo"></p></a></li>
          <li><a href="message_from_librarian.php"><span  class="glyphicon glyphicon-envelope"></span><span class="badge bg-green"><?php echo $row["total"]; ?></span></a></li>
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Log-Out</a></li>
          </ul>

          <!--_________________-timer___________________________-->



          <?php

       }
       /*-----------------------------------------------*/
        else
       {
         ?>
          <ul class="nav navbar-nav navbar-right">
          <li><a href="reg.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="mylogin.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
         <?php
          }
           ?>
           </div>
        </nav>

    </body>
    </html>
