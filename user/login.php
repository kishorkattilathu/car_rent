<?php
session_start();
?>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<html>
  <head>

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
  .main-div
  {
    border: 2px solid black;
    height: 550px;
  }
</style>
  </head>
<body id="LoginForm">
<div class="container">
<h1 class="form-heading text-center">login Form</h1>
<div class="login-form">
<div class="main-div">
    <div class="panel">
   <h2>User Login</h2>
   <p>Please enter your email and password</p>
   </div>
    <form id="Login" method="post">

        <div class="form-group text-left">

            <label>Email</label>
            <input type="email" class="form-control" id="inputEmail" name="email" placeholder="">

        </div>

        <div class="form-group text-left">
            <label>Password</label>
            <input type="password" class="form-control" id="inputPassword" name="password" placeholder="">

        </div>

        <div class="forgot">

        <a href="signup.php">Forgot password? Sign up Again!</a>
</div>
        <button type="submit" name="button" class="btn btn-primary">Login</button>
        <br><br><br>
        <a href="../user/index.php"><img src=    "../admin/images/home_icon.png" style="height:50px;width:50px"></a>
    </form>
    </div>
</div></div></div>
<style type="text/css">
  
  body#LoginForm{ background-image:url("https://hdwallsource.com/img/2014/9/blur-26347-27038-hd-wallpapers.jpg"); background-repeat:no-repeat; background-position:center; background-size:cover; padding:10px;}

.form-heading { color:#fff; font-size:23px;}
.panel h2{ color:#444444; font-size:18px; margin:0 0 8px 0;}
.panel p { color:#777777; font-size:14px; margin-bottom:30px; line-height:24px;}
.login-form .form-control {
  background: #f7f7f7 none repeat scroll 0 0;
  border: 1px solid #d4d4d4;
  border-radius: 4px;
  font-size: 14px;
  height: 50px;
  line-height: 50px;
}
.main-div {
  background: #ffffff none repeat scroll 0 0;
  border-radius: 2px;
  margin: 10px auto 30px;
  max-width: 38%;
  padding: 50px 70px 70px 71px;
}

.login-form .form-group {
  margin-bottom:10px;
}
.login-form{ text-align:center;}
.forgot a {
  color: #777777;
  font-size: 14px;
  text-decoration: underline;
}
.login-form  .btn.btn-primary {
  background: #f0ad4e none repeat scroll 0 0;
  border-color: #f0ad4e;
  color: #ffffff;
  font-size: 14px;
  width: 100%;
  height: 50px;
  line-height: 50px;
  padding: 0;
}
.forgot {
  text-align: left; margin-bottom:30px;
}
.botto-text {
  color: #ffffff;
  font-size: 14px;
  margin: auto;
}
.login-form .btn.btn-primary.reset {
  background: #ff9900 none repeat scroll 0 0;
}
.back { text-align: left; margin-top:10px;}
.back a {color: #444444; font-size: 13px;text-decoration: none;}

</style>

</body>
</html>




<?php

include ('../connect.php');

if (isset($_POST['button'])) 
  {
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $select="SELECT * FROM user WHERE email='$email'and password='$pass'";
    $execute=mysqli_query($connect,$select);
    $count=mysqli_num_rows($execute);
    if ($count==1) 
    {
      echo "<script>alert('Log in Successfully')</script>";
      $_SESSION['user']=$email;
      echo "<script>window.location.href='home.php'</script>";  
    }
    else 
    {
      echo "<script>alert('Failed Please try again')</script>";
      echo "<script>window.location.href='login.php'</script>";  

    }
  }


?>
