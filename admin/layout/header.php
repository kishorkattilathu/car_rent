<?php
session_start();
$mail=$_SESSION['valid'];
if (!$mail) {
	header('location:signin.php');
}

?>




<!DOCTYPE html>
<html lang="zxx">
<head>
<title>Car Rent Management</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Esteem Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/component.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/export.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/flipclock.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/circles.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style_grid.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
</head>
<body>
<!-- banner -->
<div class="wthree_agile_admin_info">
		  <!-- /w3_agileits_top_nav-->
		  <!-- /nav-->
		  <div class="w3_agileits_top_nav">
			<ul id="gn-menu" class="gn-menu-main">
			  		 <!-- /nav_agile_w3l -->
				<li class="gn-trigger">
					<a class="gn-icon gn-icon-menu"><i class="fa fa-bars" aria-hidden="true"></i><span>Menu</span></a>
					<nav class="gn-menu-wrapper">
						<div class="gn-scroller scrollbar1">
							<ul class="gn-menu agile_menu_drop">
								<li><a href="home.php"> <i class="fa fa-tachometer"></i> My Profile</a></li>
								<li>
									<!-- <a href="home.php"><i class="fa fa-cogs" aria-hidden="true"></i>My Profile<i class="fa fa-angle-down" aria-hidden="true"></i></a>  -->
									
										<li class="mini_list_agile"><a href="add_brands.php"><i class="fa fa-caret-right" aria-hidden="true"></i>Add Brands</a></li>
										<li class="mini_list_w3"><a href="manage_brands.php"> <i class="fa fa-caret-right" aria-hidden="true"></i>Manage Brands</a></li>
									
								</li>
								
									
									<ul class="gn-submenu">
										<li class="mini_list_agile"><a href="customer_complaints.php"><i class="fa fa-file-text-o" aria-hidden="true"></i>Pending Complaints</a></li>
										<li class="mini_list_w3"><a href="complaints_replied.php"><i class="fa fa-caret-right" aria-hidden="true"></i>Complaints Replied</a></li>
									</ul>
								
								<li>
									<a href="users_payment.php"> <i class="fa fa-table" aria-hidden="true"></i>All Users 		Payment</a>
								</li>
								<a href="users_list.php"><i class="fa fa-list" aria-hidden="true"></i>Total Users<i  aria-hidden="true"> </i></a> 
								     	
										<li class="mini_list_agile"><a href="total_bookings.php"><i class="fa fa-caret-right" aria-hidden="true"></i> Total Bookings</a></li>
									
							
								
								
										 <ul class="gn-submenu">
						
									  
											   <li class="mini_list_w3"><a href="signout.php"> <i class="fa fa-caret-right" aria-hidden="true"></i> Sign Out</a></li>
											   
	
										
										</ul>
								</li>
								
							</ul>
						</div><!-- /gn-scroller -->
					</nav>
				</li>
				<!-- //nav_agile_w3l -->
				<li class="second logo"><h1><a href="#"><i class="fa fa-graduation-cap" aria-hidden="true"></i>Car Rent </a></h1></li>
					<li class="second admin-pic">
				       
				</li>
				
				

							

			</ul>
			<!-- //nav -->
			
		</div>
		<div class="clearfix"></div>
		<!-- //w3_agileits_top_nav-->
		<!-- /inner_content-->
				<div class="inner_content">
				    <!-- /inner_content_w3_agile_info-->
					<div class="inner_content_w3_agile_info">
					    </div>
					<!-- //inner_content_w3_agile_info-->
				</div>
		<!-- //inner_content-->
	</div>
<!-- banner -->
