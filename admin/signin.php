
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
<title>Sign in</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Esteem Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/snow.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/component.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style_grid.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
</head>
<body>
			<!-- /pages_agile_info_w3l -->

						<div class="pages_agile_info_w3l">
							<!-- /login -->
							   <div class="over_lay_agile_pages_w3ls">
								    <div class="registration">
								
												<div class="signin-form profile">
													<h2>Sign in Form</h2>
													<div class="login-form">
														<form  method="post">
															<input type="email" name="email" placeholder="E-mail" required="">
															<input type="password" name="password" placeholder="Password" required="">
															<div class="tp">
																<input type="submit" value="SIGN IN" name="button">
															</div>
														</form>
													</div>
													<div class="login-social-grids">
														<ul>
															<li><a href="#"><i class="fa fa-facebook"></i></a></li>
															<li><a href="#"><i class="fa fa-twitter"></i></a></li>
															<li><a href="#"><i class="fa fa-rss"></i></a></li>
														</ul>
													</div>
													<!-- <p><a href="signup.php"> Don't have an account?</a></p> -->
													
													 <h6><a href="../user/index.php">Back To Home</a><h6>
												</div>
										</div>
										
						    </div>
						</div>
							<!-- /login -->
<!-- //pages_agile_info_w3l -->


<!-- js -->

          <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
		  <script src="js/modernizr.custom.js"></script>
		
		   <script src="js/classie.js"></script>
		  <script src="js/gnmenu.js"></script>
		  <script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		 </script>
	
<!-- //js -->

<script src="js/screenfull.js"></script>
		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}

			

			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});	
		});
		</script>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<script src="js/snow.js"></script>
 <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>


</body>
</html>
<?php
/*include ('../connect.php');

if (isset($_POST['button'])) {
	$email=$_POST['email'];
	$password=$_POST['password'];
	$select="SELECT * FROM admin WHERE email='$email' AND password='$password'";
	$execute=mysqli_query($connect,$select);
	$count=mysqli_num_rows($execute);
	if($count>0)
	{
		echo "<script>alert('welcome..!')</script>";
			echo "<script>window.location.href='home.php'</script>";
	}
	else
	{
	echo "<script>alert('Try Again')</script>";
			echo "<script>window.location.href='signin.php'</script>";
	}
}
*/


include('../connect.php');
if (isset($_POST['button'])) {
	$email=$_POST['email'];
	$password=$_POST['password'];
	$select="SELECT * FROM admin WHERE email='$email' and password='$password'";
	$execute=mysqli_query($connect,$select);
	$count=mysqli_num_rows($execute);
	if ($count>0) {
		echo "<script>alert('Login Successfully!')</script>";
		$_SESSION['valid']=$email;
		echo "<script>window.location.href='home.php'</script>";
	}
	else{
		echo "<script>alert('Failed,Please try again !')</script>";
		echo "<script>window.location.href='signin.php'</script>";
		}

}




?>