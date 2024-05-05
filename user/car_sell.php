<?php include('layout/header.php'); ?>


 <section class="w3l-about-breadcrumb position-relative text-center">
    <div class="breadcrumb-bg breadcrumb-bg-about py-sm-5 py-4">
      <div class="container py-lg-5 py-3">
        <h2 class="title"> MY Car Sale</h2>
        <!-- <ul class="breadcrumbs-custom-path mt-2">
          <li><a href="#url">Home</a></li>
          <li class="active"><span class="fa fa-angle-double-right mx-2" aria-hidden="true"></span> Services </li>
        </ul> -->
      </div>
    </div>
  </section>



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
             Sell Your Car
            </h1>
           
         </div>
      </div>


      <div class="row">
         <div class="col-md-4 mx-auto">
            <div class="myform form ">
               <form method="post" name="login" enctype="multipart/form-data">

                <?php
                include('../connect.php');
                $select="SELECT * FROM user where email='$mail'";
                $execute=mysqli_query($connect,$select);
                $fetch=mysqli_fetch_array($execute);
                ?>

                <input type="hidden" name="user_id" value="<?php echo $fetch['user_id']?>">
                <input type="hidden" name="user_email" value="<?php echo $fetch['email']?>">



                  <div class="form-group">
                    <label>Choose Brand</label>
                    <br>

                    <select name="brandid" class="form-control">

                    <?php
                        $select1="SELECT * FROM brand";
                        $execute1=mysqli_query($connect,$select1);
                        while ($fetch1=mysqli_fetch_array($execute1)) 
                    {
                      ?>  
                        <option value="<?php echo $fetch1['brand_id'];?>" ><?php echo $fetch1['brand_name']; ?></option>
                    <?php 
                    } 
                    ?>

                    </select>
                  </div>
                  <div class="form-group">
                    <label>Car Name</label>

                     <input type="text" name="name" value="" 
                     class="form-control my-input" id="name" placeholder="Name" required="">
                  </div>
                  
                  <div class="form-group">
                    <label>Model</label>

                     <input type="text" name="model"  class="form-control my-input" value="" placeholder="Model" required="">
                  </div><div class="form-group">
                    <label>Number Plate</label>

                     <input type="text" name="plate"  class="form-control my-input" value="" placeholder="Number Plate" required="">
                  </div>
                  <div class="form-group">
                    <label>Price</label>

                     <input type="text" name="price"  class="form-control my-input" value="" placeholder="Price" required="">
                  </div>
                  <div class="form-group">
                    <label>Year</label>

                     <input type="text" min="0" name="year" value="" class="form-control my-input" placeholder="Year" required="" >
                  </div>

                  
                  
                  <div class="form-group">
                    <label>Owner</label>

                     <select class="form-control" name="owner">
                      <option value="first">First</option>
                      <option value="second">Second</option>
                      <option value="other">Other</option>

                     </select>
                  </div>

                  <div class="form-group">
                    <label>ABS</label>

                     <select class="form-control" name="abs">
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>
                     </select>
                  </div>

                    <div class="form-group">
                    <label>Accidental</label>

                     <select class="form-control" name="accident">
                      <option value="No">No</option>
                      <option value="Yes">Yes</option>

                     </select>
                  </div>

                  <div class="form-group">
                    <label>Adjustable External Mirror</label>

                     <select class="form-control" name="mirror">
                        <option value="Powered">Powered</option>
                        <option value="Not Powered">Not Powered</option>
                     </select>
                  </div>

                  <div class="form-group">
                    <label>Adjustable Steering</label>


                    <select class="form-control" name="steering">
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>
                     </select>
                  </div>

                  <div class="form-group">
                    <label>Air Conditioning</label>

                      <select class="form-control" name="ac">
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>
                     </select>
                     
                  </div>

                  <div class="form-group">
                    <label>Total Airbags</label>
                    <br>

                    <select  class="form-control my-input" name="airbags">
                      <option value="1">1</option>
                       <option value="2">2</option>
                        <option value="3">3</option>
                         <option value="4">4</option>
                          <option value="5">5</option>
                           <option value="6">6</option>
                            <option value="none">none</option>
                             
                    </select>
                  </div>


                  <div class="form-group">
                    <label>Alloy Wheels</label>

                     <select class="form-control" name="wheels">
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>
                     </select>
                  </div>


                  <div class="form-group">
                    <label>Anti Theft Device</label>

                     <select class="form-control" name="theft">
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>
                     </select>
                  </div>

                  


                      
                  <div class="">
                    <label>Images</label><br>

                     <input type="file" name="image" >
                  </div>

                  <br>
                  <div class="text-center ">
                     <button type="submit" name="button" class=" btn btn-block send-button tx-tfm">Submit</button>
                  </div>
                 

                  
               </form>
            </div>
         </div>
      </div>

   </div>
</body>
<br><br><br>

<br><br><br>


<?php include('layout/footer.php'); ?>

<?php

include ('../connect.php');
  if (isset($_POST['button'])) 
  { 
    $user=$_POST['user_id'];
    $brandid=$_POST['brandid'];
    $email=$_POST['user_email'];
    $name=$_POST['name'];  
    $model=$_POST['model']; 
    $plate=$_POST['plate']; 
    $price=$_POST['price'];  
    $year=$_POST['year'];
    $owner=$_POST['owner'];
    $abs=$_POST['abs'];
    $accident=$_POST['accident'];
    $mirror=$_POST['mirror'];
    $steering=$_POST['steering'];
    $ac=$_POST['ac'];
    $airbags=$_POST['airbags'];
    $wheels=$_POST['wheels'];
    $theft=$_POST['theft'];
    $sold=$_POST['sold'];

    $image=$_FILES['image']['name'];
    // echo "<pre>"; print_r($image); echo "</pre>"; die('end of code');
    $Image=explode('.', $image);
    $extn=end($Image);
    // echo "<pre>"; print_r($extn); echo "</pre>"; die('end of code');
    $allowextn=array("jpeg","jpg","png");
    $time=Time();
    $photo=$time.'.'.$extn;
    // echo "<pre>"; print_r($photo); echo "</pre>"; die('end of code');
    if (in_array($extn, $allowextn))
    {

      $select3="SELECT * FROM car_sale WHERE number_plate='$plate'";
      $execute3=mysqli_query($connect,$select3);
      $count3=mysqli_num_rows($execute3);
      if ($count3==0) 
      
    {
      move_uploaded_file($_FILES['image']['tmp_name'], 'sale_car_images/'.$photo);
      $insert="INSERT INTO car_sale(user_id,brand_id,user_email,name,model,number_plate,price,year,owner,abs,accident,mirror,steering,ac,airbag,wheels,theft,photo,car_sold) 
      values('$user','$brandid','$email','$name','$model','$plate','$price','$year','$owner','$abs','$accident','$mirror','$steering','$ac','$airbags','$wheels','$theft','$photo','Pending')";
      $execute2=mysqli_query($connect,$insert);
      // echo "<pre>"; print_r($execute2); echo "</pre>"; die('end of code');




      if ($execute2) 
      {
         echo "<script>alert('Successfully details uploaded')</script>";
        echo "<script>window.location.href='car_sell.php'</script>";
      }
      else
      {
        echo "<script>alert('Failed Please Try Again')</script>";
        echo "<script>window.location.href='car_sell.php'</script>";
      }
    }
    else
    {
        echo "<script>alert('Already Uploaded This Ad')</script>";
        echo "<script>window.location.href='car_sell.php'</script>";

    }
    
  }
  else
    {
     echo "<script>alert('Wrong File Please Try Again')</script>";
     echo "<script>window.location.href='car_sell.php'</script>";
    }
}

?>