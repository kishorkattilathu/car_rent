<?php include ('layout/header.php'); ?>

 <section class="w3l-about-breadcrumb position-relative text-center">
    <div class="breadcrumb-bg breadcrumb-bg-about py-sm-5 py-4">
      <div class="container py-lg-5 py-3">
        <h2 class="title">Car Status</h2>
        <!-- <ul class="breadcrumbs-custom-path mt-2">
          <li><a href="#url">Home</a></li>
          <li class="active"><span class="fa fa-angle-double-right mx-2" aria-hidden="true"></span> Services </li>
        </ul> -->
      </div>
    </div>
  </section>
	<div class="w3-services py-5">
		<div class="container py-lg-4">
			<div class="title-content text-left mb-lg-5 mb-4">
				<h6 class="sub-title">Our Services</h6>
				<h3 class="hny-title">Your Car Status</h3>

			</div>
      




			<div class="row w3-services-grids">
				 <?php
       	include ('../connect.php');
       	$select="SELECT * FROM booking inner join car_sale on booking.car_sale_id=car_sale.car_sale_id inner join user on booking.customer_email=user.email WHERE owner_email='$mail'";
       	$execute=mysqli_query($connect,$select);
       	while ( $fetch=mysqli_fetch_array($execute)) 
       	{
       		
       	
       ?>
        		<div class="col-lg-4 col-md-6 causes-grid"style="border-style: solid;border-color:grey;border-width: 0.1px;">
					<div class="causes-grid-info">
						<a href=""><img src="sale_car_images/<?=$fetch['photo']?>" class="img-fuild" alt=""></a>
						<a href="#" class="cause-title-wrap"><br>
							<h6 class="cause-title">Customer Name:<?php echo $fetch['username']?></h6><br>
							<h6 class="cause-title">Email: <?php echo $fetch['email']?></h6><br>
							<h6 class="cause-title">Car Name:<?=$fetch['name']?></h6><br>
							<h6 class="cause-title">Booking Status:<?=$fetch['booking_status']?></h6><br>
							<h6 class="cause-title">Payment Status:<?=$fetch['payment_status']?></h6><br>
							
							<h6 class="cause-title">Price : ₹<?=$fetch['price']?>
							</h6>
						</a>
						

					</div>
				</div>
<?php
  					}
  				?>
				
			</div>
  				
		</div>
	</div>

<?php include ('layout/footer.php'); ?>
