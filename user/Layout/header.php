<?php
session_start();
$mail=$_SESSION['user'];
if (!$mail) {
  header('location:login.php');
}
?>


<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="zxx">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Car Rent a Auto Mobile </title>
  <!-- Template CSS -->
  <link href="//fonts.googleapis.com/css?family=Poppins:300,400,400i,500,600,700&display=swap" rel="stylesheet">
  <link href="//fonts.googleapis.com/css2?family=Limelight&display=swap" rel="stylesheet">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-starter.css">
  <!-- Template CSS -->
</head>

<body>
  <!--header-->
  <header id="site-header" class="fixed-top">
    <div class="container" style="background-color: grey">
      <nav class="navbar navbar-expand-lg navbar-light">
        <h1><a class="navbar-brand" href="#">
            <span>C</span>ar-Rent
          </a></h1>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="fa icon-expand fa-bars"></span>
          <span class="fa icon-close fa-times"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav" >
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="home.php">Home </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Owner 
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="width: 250px">
               <a class="dropdown-item" href="car_sell.php">Car Sell</a>
                <a class="dropdown-item" href="car_sell_status.php">Verify Customer Booking</a>
                <a class="dropdown-item" href="car_status.php">Booking Status</a>
                <a class="dropdown-item" href="all_car_details.php">All Car Details</a>
                <a class="dropdown-item" href="my_car_details.php">Manage Your Ads</a>
              </div>
            </li>
           
          <!--   <li class="nav-item">
              <a class="nav-link" href="car_sell.php">Car Sell</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="car_sell_status.php">Verify Customer Booking</a>
            </li> -->
              <li class="nav-item">
              <a class="nav-link" href="mybooking.php">My Booking Status</a>
            </li>

             
              <li class="nav-item">
              <a class="nav-link" href="myprofile.php">My Profile</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="complaints.php">Complaints</a>
            </li> -->
             <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Complaints 
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
               <a class="dropdown-item" href="complaints.php">Write Complaints</a>
                <a class="dropdown-item" href="replied_complaints.php">Replied Complaints</a>
              </div>
            </li>
              <li class="nav-item">
              <a class="nav-link" href="logout.php">Logout</a>
            </li>
          </ul>
          <ul class="navbar-nav search-right mt-lg-0 mt-2">
            <li class="nav-item mr-3" title="Search"><a href="#search" class="btn search-search">
                <span class="fa fa-search" aria-hidden="true"></span></a></li>
           
          </ul>

          <!-- //toggle switch for light and dark theme -->
          <!-- search popup -->
          <div id="search" class="pop-overlay">
            <div class="popup">
              <form action="#" method="GET" class="d-sm-flex">
                <input type="search" placeholder="Search.." name="search" required="required" autofocus>
                <button type="submit">Search</button>
                <a class="close" href="#url">&times;</a>
              </form>
            </div>
          </div>
          <!-- /search popup -->
        </div>
        <!-- toggle switch for light and dark theme -->
        <div class="mobile-position">
          <nav class="navigation">
            <div class="theme-switch-wrapper">
              <label class="theme-switch" for="checkbox">
                <input type="checkbox" id="checkbox">
                <div class="mode-container">
                  <i class="gg-sun"></i>
                  <i class="gg-moon"></i>
                </div>
              </label>
            </div>
          </nav>
        </div>
      </nav>
    </div>
  </header>