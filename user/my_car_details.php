<?php include('layout/header.php'); ?>
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

  <style>
   th,table,td
   {
        border: 1px solid black;
        margin-right: 400px;
        margin-left: 400px;
        margin-top: 20px;
        margin-bottom: 10px;


   }
   #my_car
   {
        text-align: center;
   }
  </style>

<div id="my_car">
    <h2>My Car Details</h2>
    <table>
        <tr>
            <th>Sr No.</th>
            <th>Brand</th>
            <th>Car Name</th>
            <th>Number Plate</th>
            <th>Car Image</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <?php
            $i=1;
            include('../connect.php');
            $select="SELECT * FROM car_sale inner join brand ON brand.brand_id=car_sale.brand_id WHERE user_email='$mail' and car_sold!='sold'";
            $execute=mysqli_query($connect,$select);
            while($fetch=mysqli_fetch_array($execute))
            {
        ?>
        <tr>
            <td><?php echo $i;?> </td>
                <td><?php echo $fetch['brand_name'] ?></td>
            <td><?php echo $fetch['name']?></td>
            <td><?php echo $fetch['number_plate']?></td>
            <td><img style="height: 150px; width:200px;" src="<?php echo 'sale_car_images/'.$fetch['photo'] ?>" alt=""></td>
            <td><a href="Car_edit.php?id=<?php echo $fetch['car_sale_id']?>"><img style="height: 50px;width:50px;" src="assets/images/edit.png" alt=""></a></td>
            <td><a href="Car_delete.php?id=<?php echo $fetch['car_sale_id']?>"><img style="height: 50px;width:50px;" src="assets/images/delete.png" alt=""></a></td>
        </tr>

                <?php
            $i++;                
            }
                ?>
        
    </table>

</div>



<?php include('layout/footer.php'); ?>