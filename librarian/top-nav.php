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
            if(isset($_SESSION['librarian']))
              {
                ?>
                <li><a href="display_books.php">BOOKS</a></li>
                <?php

              }

              else {
                ?>
                <li><a href="display_books1.php">BOOKS</a></li>
                <?php

              }

             ?>
            <li><a href="profile.php">MY-PROFILE</a></li>
            <li><a href="report.php">FEEDBACK</a></li>

         </ul>

  <?php

        if(isset($_SESSION['librarian']))
          {


         ?>
        <ul class="nav navbar-nav navbar-right">
          <li><a><p style="color:#ff1503;font-size: 20px;" id="demo"></p></a></li>
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
        <li><a href="mylogin.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
         <?php
          }
           ?>
           </div>
        </nav>

    </body>
    </html>
