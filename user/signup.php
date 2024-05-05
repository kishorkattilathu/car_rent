<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style type="text/css">
  .send-button{
background: #54C7C3;
width:100%;
font-weight: 600;
color:#fff;
padding: 8px 25px;
}
input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
  -webkit-appearance: none; 
  margin: 0; 
}
.g-button{
color: #fff !important;
border: 1px solid #EA4335;
background: #ea4335 !important;
width:100%;
font-weight: 600;
color:#fff;
padding: 8px 25px;
}
.my-input{
box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
cursor: text;
padding: 8px 10px;
transition: border .1s linear;
}
.header-title{
margin: 5rem 0;
}
h1{
font-size: 31px;
line-height: 40px;
font-weight: 600;
color:#4c5357;
}
h2{
color: #5e8396;
font-size: 21px;
line-height: 32px;
font-weight: 400;
}
.login-or {
position: relative;
color: #aaa;
margin-top: 10px;
margin-bottom: 10px;
padding-top: 10px;
padding-bottom: 10px;
}
.span-or {
display: block;
position: absolute;
left: 50%;
top: -2px;
margin-left: -25px;
background-color: #fff;
width: 50px;
text-align: center;
}
.hr-or {
height: 1px;
margin-top: 0px !important;
margin-bottom: 0px !important;
}
@media screen and (max-width:480px){
h1{
font-size: 26px;
}
h2{
font-size: 20px;
}
}
</style>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<body>
   <div class="container">
      <div class="col-md-6 mx-auto text-center">
         <div class="header-title">
            <h1 class="wv-heading--title">
              Register Here
            </h1>
           
         </div>
      </div>
      <div class="row">
         <div class="col-md-4 mx-auto">
            <div class="myform form ">
               <form method="post" name="login">
                  <div class="form-group">
                    <label>Full Name</label>
                     <input type="text" name="name"  class="form-control my-input" id="name" placeholder="" required="">
                  </div>
                  <div class="form-group">
                    <label>Email</label>
                     <input type="email" name="email"  class="form-control my-input" id="email" placeholder="" required="">
                  </div>
                  <div class="form-group">
                    <label>Phone No.</label>
                     <input type="text" min="0" name="phone" id="phone"  class="form-control my-input" placeholder="">
                  </div>
                  <div class="form-group">
                    <label>Address</label>
                     <input type="text" min="0" name="address"  class="form-control my-input" placeholder="" required="">
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                     <input type="password" name="pass"  class="form-control my-input" placeholder="" required="">
                  </div>
                  <div class="form-group">
                    <label>Confirm Password</label>
                     <input type="password" name="con_pass"  class="form-control my-input" id="confirm" placeholder="" required="">
                  </div>
                  <div class="text-center ">
                     <button type="submit" name="button" class=" btn btn-block send-button tx-tfm">Create Your Free Account</button>
                  </div>
                      <br>
                    <div class="text-center">
                    <a href="login.php">Already Registered?</a>
                  </div><br>
                   <div class="text-center"><a href="../user/index.php"><img src="../admin/images/home_icon.png" style="height:50px;width:50px"></a></div>
                  
               </form>
            </div>
         </div>
      </div>
   </div>
</body>

<?php


include('../connect.php');

if (isset($_POST['button']))
    {
      $name=$_POST['name'];
      
      $email=$_POST['email'];
      

      $phone=$_POST['phone'];
    

      $add=$_POST['address'];
      
      $pass=$_POST['pass'];
      

      $con_pass=$_POST['con_pass'];
      

       if ($pass==$con_pass) 
  {
      $select="SELECT * FROM user WHERE email='$email'";
      $execute1=mysqli_query($connect,$select);
      $count=mysqli_num_rows($execute1);
      if ($count==0) 
    {
      $insert="INSERT INTO user (username,email,phone,address,password)values('$name','$email','$phone','$add','$pass')";
      $execute=mysqli_query($connect,$insert);
      if ($execute==1) 
      {
      echo "<script>alert('Successfully Registered')</script>";
      echo "<script>window.location.href='login.php'</script>";  
      }
      else
      {
      echo "<script>alert('Failed please try again..!')</script>";
      echo "<script>window.location.href('signup.php')</script>";
      }

    }
      else
      {
      echo "<script>alert('Failed file already exist..!')</script>";
      echo "<script>window.location.href('signup.php')</script>";
      }
  }

    else
    {
      echo "<script>alert('Failed Password does not match')</script>";
      echo "<script>window.location.href='signup.php'</script>";
    }

    }
   

?>

