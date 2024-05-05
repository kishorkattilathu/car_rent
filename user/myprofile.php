<?php include ('layout/header.php'); ?>

<br><br>

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
              MY PROFILE
            </h1>
           
         </div>
      </div>

<?php
	include ('../connect.php');
	$select="SELECT * FROM user  WHERE email='$mail'";
	$execute=mysqli_query($connect,$select);
	while ($fetch=mysqli_fetch_array($execute)) {
		
?>
      <div class="row">
         <div class="col-md-4 mx-auto">
            <div class="myform form ">
               <form method="post" name="login">
                  <div class="form-group">
                    <label>Name</label>
                     <input type="text" name="name" value="<?php echo $fetch['username'] ?>" 
                     class="form-control my-input" id="name" placeholder="Name" required="">
                  </div>
                  <div class="form-group">
                    <label>Email</label>

                     <input type="email" name="email" value="<?php echo $fetch['email'] ?>"  class="form-control my-input" id="email" placeholder="Email" required="" readonly >
                  </div>
                  <div class="form-group">
                    <label>Phone NO.</label>

                     <input type="text" min="0" name="phone" id="phone" value="<?php echo $fetch['phone'] ?>"  class="form-control my-input" placeholder="Phone" >
                  </div>
                  <div class="form-group">
                    <label>Address</label>

                     <input type="text" min="0" name="address" value="<?php echo $fetch['address'] ?>" class="form-control my-input" placeholder="Address" required="" >
                  </div>
                  <div class="form-group">
                    <label>Password</label>

                     <input type="text" name="pass"  class="form-control my-input" value="<?php echo $fetch['password'] ?>" placeholder="Password" required="">
                  </div>
                  
                  <div class="text-center ">
                     <button type="submit" name="button" class=" btn btn-block send-button tx-tfm">Submit</button>
                  </div>
                 

                  
               </form>
            </div>
         </div>
      </div>
  <?php } ?>
   </div>
</body>
<br><br><br>


<?php include ('layout/footer.php'); ?>

<?php
include ('../connect.php');

  if (isset($_POST['button'])) 
    {
	     $user=$_POST['name'];
       $phone=$_POST['phone'];
       $address=$_POST['address'];
       $password=$_POST['pass'];

       $update="UPDATE user SET username='$user',phone='$phone',address='$address',password='$password' WHERE email='$mail'";
       $execute1=mysqli_query($connect,$update);
       if ($execute1) 
       {
         echo "<script>alert('Successfully Updated')</script>";
         echo "<script>window.location.href='myprofile.php'</script>";
       }
       else
       {
         echo "<script>alert('Failed Please try again')</script>";
         echo "<script>window.location.href='myprofile.php'</script>";

       }
    }
?>
