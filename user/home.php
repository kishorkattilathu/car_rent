<?php include ('layout/header.php'); ?>

 <section class="w3l-about-breadcrumb position-relative text-center">
    <div class="breadcrumb-bg breadcrumb-bg-about py-sm-5 py-4">
      <div class="container py-lg-5 py-3">
        <h2 class="title">Brands</h2>
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
				<h3 class="hny-title">Our Brands</h3>

			</div>
       


			<div class="row w3-services-grids">
          <?php
        include('../connect.php');
        $select="SELECT * FROM brand";
        $execute=mysqli_query($connect,$select);
        while ($fetch=mysqli_fetch_array($execute)) 

        {
        
        ?>
				<div class="col-lg-4 col-md-6 causes-grid" style="border-style: solid;border-color:grey;border-width: 0.1px">
					<div class="causes-grid-info">
						<a href="used_cars.php?id=<?=$fetch['brand_id']?>"><img src="../admin/Brands/<?=$fetch['brand_image']?>" class="img-fuild" alt=""></a>
						<a href="#" class="cause-title-wrap">
							<h4 class="cause-title"><?=$fetch['brand_name']?>
							</h4>
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
