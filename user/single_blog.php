<?php include('layout/header.php'); ?>

<style type="text/css">
  th,td{
    padding: 30px;
  }
</style>
<?php 
include('../connect.php');
 $sale_id=$_GET['id'];
$select="SELECT * FROM car_sale inner join brand on brand.brand_id=car_sale.brand_id where car_sale_id ='$sale_id' ";
$execute=mysqli_query($connect,$select);
$fetch=mysqli_fetch_array($execute);
?>


    <!-- about breadcrumb -->
   <section class="w3l-about-breadcrumb position-relative text-center">
    <div class="breadcrumb-bg breadcrumb-bg-about py-sm-5 py-4">
      <div class="container py-lg-5 py-3">
        <h2 class="title"><?=$fetch['brand_name']?> </h2>
        <ul class="breadcrumbs-custom-path mt-2">
          <li><a href="#url">Home</a></li>
          <li class="active"><span class="fa fa-angle-double-right mx-2" aria-hidden="true"></span> Blog Single </li>
        </ul>
      </div>
    </div>
  </section>
  <!-- //about breadcrumb -->
  <!--/blog-section-->

 <section class="w3l-contact-11 mt-4">
      <div class="title-content text-center">
        <h3 class="hny-title"><?=$fetch['name']?></h3>
      </div>
    <div class="form-41-mian py-5">
      <div class="container py-lg-4">
        <div class="row align-form-map">
                <div class="contact-left pr-lg-4">
                  <img src="sale_car_images/<?=$fetch['photo']?>" style="height: 500px;width: 1000px" alt=" " class="img-fluid">
                </div>
            
        </div>
          
      </div>
    </div>
    
       
       






<section class="w3l-contact-11">
    <div class="form-41-mian py-5">
      <div class="container py-lg-4">
        <div class="row align-form-map">
        <div class="col-lg-6 contact-left pr-lg-4">
          <div class="partners">
            <div class="cont-details">
            <div class="title-content text-left">
              <!-- <h6 class="sub-title">Contact Us</h6>
              <h3 class="hny-title">Get In Touch</h3> -->
            </div>
             <table border="1px">
                <thead>
                  <tr>
                    <th>Name</th>
                     <td><?=$fetch['name']?></td>
                   </tr>
                   <tr>
                      <th>Model</th>
                       <td><?=$fetch['model']?></td>
                   </tr>
                   <tr>
                      <th>Number-Plate</th>
                       <td><?=$fetch['number_plate']?></td>
                   </tr>

                  <tr>
                    <th>Price</th>
                    <td><?=$fetch['price']?></td>
                  </tr>
                  <tr>
                    <th>Year</th>
                    <td><?=$fetch['year']?></td>
                  </tr>
                  <tr>
                    <th>Owner</th>
                    <td><?=$fetch['owner']?></td>
                  </tr>
                  <tr>
                    <th>ABS</th>
                    <td><?=$fetch['abs']?></td>
                  </tr>
                  <tr>
                    <th>Accidental</th>
                    <td><?=$fetch['accident']?></td>
                  </tr>
                  <tr>
                    <th>Powered Mirror</th>
                    <td><?=$fetch['mirror']?></td>
                  </tr>
                  <tr>
                    <th>AC</th>
                    <td><?=$fetch['ac']?></td>
                  </tr>
                  <tr>
                    <th>Adjustable Steering</th>
                    <td><?=$fetch['steering']?></td>
                  </tr>
                  <tr>
                    <th>Airbags</th>
                    <td><?=$fetch['airbag']?></td>
                  </tr>
                  <tr>
                    <th>Alloy Wheels</th>
                    <td><?=$fetch['wheels']?></td>
                  </tr>
                  <tr>
                    <th>Anti-Theft-Device</th>
                    <td><?=$fetch['theft']?></td>
                  </tr>
                  </thead>
              </table>
            </div>
          </div>
          </div>
        <div class="col-lg-6 form-inner-cont"style="border-style: solid;border-color:grey;border-width: 0.1px;height:895px">
          <div class="title-content text-left"><br><br>
            <h3 class="hny-title mb-lg-5 mb-4" align="center">Book Now</h3>
          </div>

          <?php
            include ('../connect.php');
            $select1="SELECT * FROM user where email='$mail'";
            $execute1=mysqli_query($connect,$select1);
            $fetch1=mysqli_fetch_array($execute1);
          
          $select2="SELECT * FROM car_sale inner join user on user.user_id=car_sale.user_id where car_sale_id ='$sale_id'";
          $execute2=mysqli_query($connect,$select2);
          $fetch2=mysqli_fetch_array($execute2);
          ?>

          <form method="post" class="signin-form">
            <input type="hidden" name="ownerid" value="<?=$fetch2['user_id']?>">
            <input type="hidden" name="customerid" value="<?=$fetch1['user_id']?>">
            <input type="hidden" name="carsaleid" value="<?=$fetch2['car_sale_id']?>">
            <input type="hidden" name="owneremail" value="<?=$fetch2['user_email']?>">
          <div class="form-input">
            <label><b>Your Name</b></label>
            <input type="text" name="yourname" id="name" placeholder="Your Name" value="<?php echo $fetch1['username']?>" />
          </div>
          <label><b>Owner Name</b></label>
          <div class="form-input">
            <input type="text" name="ownername" id="name" placeholder="Owner Name" readonly="" value="<?php echo $fetch2['username']?>" />
          </div>
          <div class="row con-two">
          <div class="col-lg-6 form-input">
             <label><b>Your email</b></label>
            <input type="email" name="email" id="email" placeholder="Email" required="" value="<?php echo $fetch1['email']?>" />
          </div>
          <div class="col-lg-6 form-input">
             <label><b>Booking Date</b></label>
            <input type="date" name="date" placeholder="Date" class="contact-input" />
          </div>
             
          </div>
          <div class="form-input">
            <label><b>Number-Plate:</b></label>
            <input type="text" name="plate" id="plate" placeholder="Plate" value="<?=$fetch2['number_plate']?>" />
          </div><div class="form-input">
            <label><b>Price</b></label>
            <input type="text" name="price" id="price" placeholder="Price" value="<?=$fetch['price']?>" />
          </div>
         
          <div class="submit-button ">
             <button type="submit" class="btn btn-style" name="button" style="width: 550px">Submit</button>
            </div>
          </form>
        </div>
        </div>
      </div>
      </div>
     
    </section>




  <section class="w3l-blog-single">
    <div class="container py-lg-5 py-md-4">
          <div style="margin: 8px auto; display: block; text-align:center;">

          </div>
      
      <div style="margin: 8px auto; display: block; text-align:center;">

        <!---728x90--->
         
      </div>
      <div class="d-grid grid-colunm-2 mt-lg-5 mt-4">
              <!-- left side blog post content -->
              <div class="single-left">
                <div class="single-left1">
                  <div class="blg-img">
                   
                 
                  </div>
                
                
                </div>
             
            </div>
      </div>
    </div>
  </section>
  <!--//blog-section-->




<?php include('layout/footer.php'); ?>


 <?php
if (isset($_POST['button'])) 
  {
    $ownerid=$_POST['ownerid'];
    $customerid=$_POST['customerid'];
    $carsaleid=$_POST['carsaleid'];
    $owneremail=$_POST['owneremail'];
    $email=$_POST['email'];
    $date=$_POST['date'];
    $price=$_POST['price'];
    $plate=$_POST['plate'];
    
// echo "<pre>"; print_r($plate); echo "</pre>"; die('end of code');

  $select4="SELECT * FROM booking where number_plate='$plate'";
  $execute4=mysqli_query($connect,$select4);
  $count=mysqli_num_rows($execute4);
  if ($count==0) {
  
  

    $insert="INSERT INTO booking(owner_id,customer_id,car_sale_id,owner_email,customer_email,booking_date ,price,number_plate,booking_status,payment_status)values('$ownerid','$customerid','$carsaleid','$owneremail','$email','$date','$price','$plate','Pending','Pending')";
    $execute3=mysqli_query($connect,$insert);
    if ($execute3) 
          {
              echo "<script>alert('booking done waiting for confirmation..!')</script>";
              echo "<script>window.location.href='mybooking.php'</script>";
          }
          else
          {
              echo "<script>alert('Failed please try again..!')</script>";
              echo "<script>window.location.href='home.php'</script>";
              
          }

        }
        else
        {
              echo "<script>alert('Already Booked..!')</script>";
              echo "<script>window.location.href='home.php'</script>";

        }



  }
?> 