<?php
include"connection.php";
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ONLINE LIBRARY MANAGEMENT SYSTEM</title>


    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/nprogress.css" rel="stylesheet">
    <link href="css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="#" class="site_title"><i class="fa fa-book"></i> <span>Library Management System</span></a>
                </div>

                <div class="clearfix"></div>


              <!-- menu profile quick info -->
              <div class="profile clearfix">
                  <div class="profile_pic">
                      <img src="images/5.PNG" alt="..." class="img-circle profile_img">
                  </div>
                  <div class="profile_info">
                      <span>Welcome,</span>

                      <h2>librarian</h2>
                  </div>
                  <div class="clearfix"></div>
              </div>
              <!-- /menu profile quick info -->

              <br/>

              <!-- sidebar menu -->
              <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                  <div class="menu_section">
                      <h3>General</h3>
                      <ul class="nav side-menu">
                        <li><a href="index.php"><i class="fa fa-home"></i>HOME<span class="fa fa-chevron-down"></span></a>

                        </li>

                          <li><a href="mylogin.php"><i class="fa fa-edit"></i>Login<span class="fa fa-chevron-down"></span></a>

                          </li>

                          <li><a href="profile.php"><i class="fa fa-desktop"></i>my profile<span class="fa fa-chevron-down"></span></a>

                          </li>

                          <li><a href="report.php"><i class="fa fa-edit"></i>feadback<span class="fa fa-chevron-down"></span></a>

                          </li>
                          <li><a href="loginal.php"><i class="fa fa-desktop"></i>All student info<span class="fa fa-chevron-down"></span></a>


                          </li>


                      </ul>
                  </div>


              </div>

          </div>
      </div>




            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <nav>
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>







                    </nav>
                </div>
            </div>
            <!-- /top navigation -->
