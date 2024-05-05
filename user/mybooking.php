<?php include ('layout/header.php'); ?>

 <section class="w3l-about-breadcrumb position-relative text-center">
    <div class="breadcrumb-bg breadcrumb-bg-about py-sm-5 py-4">
      <div class="container py-lg-5 py-3">
        <h2 class="title">My Bookings</h2>
        <!-- <ul class="breadcrumbs-custom-path mt-2">
          <li><a href="#url">Home</a></li>
          <li class="active"><span class="fa fa-angle-double-right mx-2" aria-hidden="true"></span> Services </li>
        </ul> -->
      </div>
    </div>
  </section>
  <div class="w3-services py-5">
    <div class="container py-lg-4">
     <!--  <div class="title-content text-left mb-lg-5 mb-4">
        <h6 class="sub-title">Our Services</h6>
        <h3 class="hny-title">Our Brands</h3>

      </div>
       
 -->
<div class="row w3-services-grids">
   <div class="row w3-services-grids" >
          <?php
        include('../connect.php');
        $select="SELECT * FROM booking inner join car_sale on booking.car_sale_id=car_sale.car_sale_id where customer_email='$mail'";
        $execute=mysqli_query($connect,$select);
        while ($fetch=mysqli_fetch_array($execute)) 

        {
        
        ?>

     
       
        <div class="col-lg-15 col-md-15causes-grid" style="border-style: solid;border-color:grey;border-width: 0.1px;">
          <div class="causes-grid-info">
            <a href=""><img src="sale_car_images/<?php echo $fetch['photo']?>" style="height:200px;width:200px" class="img-fuild" alt=""></a>
            <br>
            <a href="#" class="cause-title-wrap">
              <br>
              <h6 class="cause-title">Price : <?php echo $fetch['price']?>
              </h6><br>
              <h6 class="cause-title">Car Name : <?php echo $fetch['name']?>
              </h6><br>
              <h6 class="cause-title">Booking Date : <?php echo $fetch['booking_date']?>
              </h6><br>
              <h6 class="cause-title">Booking Status : <?php echo $fetch['booking_status']?>
              </h6><br>
              <h6 class="cause-title">Payment Status : <?php echo $fetch['payment_status']?>
              </h6>
            </a><div>
            <!-- <button style="background-color: red;color: white">Delete</button> -->
            </div>
            <br>

            
            <?php
            if($fetch['booking_status']=='Approved' and $fetch['payment_status']!='Token_Paid')
            {
            ?>
            <a href="cancel_booking.php?id=<?php echo $fetch['booking_id']?>">
              <button class="btn btn-danger">Cancel Booking</button>
            </a>
            <a href="pay_token.php?id=<?php echo $fetch['booking_id']?>">
              <button class="btn btn-success">Pay Now</button>
            </a>
               </div>
            <?php
          }
          ?>
            

          
       
        </div>
      
    
      
      </div>
      
  



   
     <?php
   }
   ?>
    </div>
  </div>

<?php include ('layout/footer.php'); ?>
