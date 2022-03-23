<?php
$con=mysqli_connect("localhost","root","","db_registration");


?>





<!--

=========================================================
* Now UI Dashboard - v1.5.0
=========================================================

* Product Page: https://www.creative-tim.com/product/now-ui-dashboard
* Copyright 2019 Creative Tim (http://www.creative-tim.com)

* Designed by www.invisionapp.com Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Now UI Dashboard by Creative Tim
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
 <link href="../assets/css/view.css" rel="stylesheet" />
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
     <link href="../assets/css/hospital.css" rel="stylesheet" />
	
  <link href="../assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="dashboard.php" class="simple-text logo-mini">
          FH
        </a>
        <a href="http://localhost/my%20mini/dash/user/index.php" class="simple-text logo-normal">
         Fruits & Herbs
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li class="active ">
            <a href="./dashboard.php">
              <i class="now-ui-icons design_app"></i>
              <p>DASHBOARD</p>
            </a>
          </li>
         
          <li>
            <a href="./addd.php">
              <i class="now-ui-icons ui-1_simple-add"></i>
              <p>ADD</p>
            </a>
          </li>
          <li>
            <a href="./view.php">
              <i class="now-ui-icons ui-1_bell-53"></i>
              <p>VIEW</p>
            </a>
          </li>
          <li>
            <a href="./feedback.php">
              <i class="now-ui-icons users_single-02"></i>
              <p>FEEDBACK</p>
            </a>
          </li>
          <li>
           
          </li>
          <li>
            <a href="./viewitem.php">
              <i class="now-ui-icons shopping_delivery-fast"></i>
              <p>VIEW ITEM FOR SALE</p>
            </a>
          </li>
          <li class="active-pro">
            <a href="logout.php">
              <i class="now-ui-icons media-1_button-power"></i>
              <p>LOGOUT</p>
            </a>
          </li>
        </ul>
      </div>
    </div>