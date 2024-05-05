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
    form
    {
        margin-top: 10px;
        margin-bottom: 10px;
        border: 1px solid black;
        text-align: center;
        padding-bottom: 10px;
        padding-top: 10px;
    }
    .form-control
    {
        padding-left: 20px;

    }
    h2
    {
        text-align: center;
    }
  </style>
<?php
$id=$_GET['id'];
?>

<?php
    include('../connect.php');
    $select="SELECT * FROM car_sale inner join brand ON brand.brand_id=car_sale.brand_id WHERE car_sale_id='$id'";
    $execute=mysqli_query($connect,$select);
    $fetch=mysqli_fetch_array($execute);
?>

<div class="row">
         <div class="col-md-4 mx-auto">
            <div class="myform form ">
                <h2>Edit Car</h2>
               <form method="post" name="login" enctype="multipart/form-data">

                <?php
                // include('../connect.php');
                // $select="SELECT * FROM user where email='$mail'";
                // $execute=mysqli_query($connect,$select);
                // $fetch=mysqli_fetch_array($execute);
                ?>

                <!-- <input type="hidden" name="user_id" value="<?php echo $fetch['user_id']?>">
                <input type="hidden" name="user_email" value="<?php echo $fetch['email']?>"> -->



                  <div class="form-group">
                    <label>Choose Brand</label>
                    <br>
                   
                    <select name="brandid" class="form-control">
                    <option value="<?php echo $fetch['brand_id']?>"><?php echo $fetch['brand_name']?></option>
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

                     <input type="text" name="name" value="<?php echo $fetch['name']?>" 
                     class="form-control my-input" id="name" placeholder="Name" required="">
                  </div>
                  
                  <div class="form-group">

                    <label>Model</label>
                     <input type="text" name="model"  class="form-control my-input" value="<?php echo $fetch['model'] ?>" placeholder="Model" required="">
                  </div><div class="form-group">

                    <label>Number Plate</label>
                     <input type="text" name="plate"  class="form-control my-input" value="<?php echo $fetch['number_plate']?>" placeholder="Number Plate" required="">
                  </div>
                  <div class="form-group">

                    <label>Price</label>
                     <input type="text" name="price"  class="form-control my-input" value="<?php echo $fetch['price']?>" placeholder="Price" required="">
                  </div>
                  <div class="form-group">

                    <label>Year</label>
                     <input type="text" min="0" name="year" value="<?php echo $fetch['year']?>" class="form-control my-input" placeholder="Year" required="" >
                  </div>

                  
                  
                  <div class="form-group">
                    <label>Owner</label>

                     <select class="form-control" name="owner">
                      <option value="<?php echo $fetch['owner'] ?>"><?php echo $fetch['owner']?></option>
                      <option value="first">First</option>
                      <option value="second">Second</option>
                      <option value="other">Other</option>

                     </select>
                  </div>

                  <div class="form-group">

                    <label>ABS</label>
                     <select class="form-control" name="abs">
                      <option value="<?php echo $fetch['abs']?>"><?php echo $fetch['abs']?></option>
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>
                     </select>
                  </div>

                    <div class="form-group">
                    <label>Accidental</label>

                     <select class="form-control" name="accident">
                      <option value="<?php echo $fetch['accident'] ?>"><?php echo $fetch['accident']?></option>
                      <option value="No">No</option>
                      <option value="Yes">Yes</option>

                     </select>
                  </div>

                  <div class="form-group">
                    <label>Adjustable External Mirror</label>

                     <select class="form-control" name="mirror">
                        <option value="<?php echo $fetch['mirror']?>"><?php echo $fetch['mirror']?></option>
                        <option value="Powered">Powered</option>
                        <option value="Not Powered">Not Powered</option>
                     </select>
                  </div>

                  <div class="form-group">
                    <label>Adjustable Steering</label>
                    <select class="form-control" name="steering">
                      <option value="<?php echo $fetch['steering'] ?>"><?php echo $fetch['steering']?></option>
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>
                     </select>
                  </div>

                  <div class="form-group">
                    <label>Air Conditioning</label>
                      <select class="form-control" name="ac">
                      <option value="<?php echo $fetch['ac']?>"><?php echo $fetch['ac'] ?></option>
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>
                     </select>
                     
                  </div>

                  <div class="form-group">
                    <label>Total Airbags</label>
                    <br>

                    <select  class="form-control my-input" name="airbags">
                      <option value="<?php echo $fetch['airbag'] ?>"><?php echo $fetch['airbag'] ?></option>
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
                      <option value="<?php echo $fetch['wheels'] ?>"><?php echo $fetch['wheels']?></option>
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>
                     </select>
                  </div>


                  <div class="form-group">
                    <label>Anti Theft Device</label>

                     <select class="form-control" name="theft">
                      <option value="<?php echo $fetch['theft']?>"><?php echo $fetch['theft']?></option>
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>
                     </select>
                  </div>

                  


                      
                  <div class="">
                    <label>Old Image</label><br>
                    <img style="width:280px;height:150px;" src="<?php echo 'sale_car_images/'.$fetch['photo']?>" alt=""><br><br>

                    <label>New Image</label><br>
                     <input type="file" name="image" >
                  </div>

                  <br>
                  <div class="text-center ">
                     <button type="submit" name="button" class=" btn btn-success send-button tx-tfm">Update</button>
                  </div>
                 

                  
               </form>
            </div>
         </div>
      </div>




  <?php include('layout/footer.php'); ?>

  <?php 
  include ('../connect.php');
    if (isset ($_POST['button'])) 
    {
      $brand_id=$_POST['brandid'];
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
      $air_bags=$_POST['airbags'];
      $wheels=$_POST['wheels'];
      $theft=$_POST['theft'];

      $img_sql='';
      $image=!empty($_FILES['image']['name'])?$_FILES['image']['name']:'';
      if (!empty($image)) 
      {
        $explode=explode('.',$image);
        $time=Time();
        $extn=end($explode);
        $allowextn=array("jpeg","png","jpg");
        $photo=$time.'.'.$extn;
        if (in_array($extn,$allowextn)) 
        {
          move_uploaded_file($_FILES['image']['tmp_name'],'sale_car_images/'.$photo);
          $img_sql=",photo='$photo'";
        }
        else
        {
          echo "<script>alert('Wrong File Try again')</script>";
          echo "<script>window.location.href='my_car_details.php'</script>";
        }
        
      }
      $update="UPDATE car_sale SET brand_id='$brand_id',name='$name',model='$model',number_plate='$plate',
                price='$price',year='$year',owner='$owner',abs='$abs',accident='$accident',mirror='$mirror',
                steering='$steering',ac='$ac',airbag='$air_bags',wheels='$wheels',theft='$theft'".$img_sql."
                WHERE car_sale_id='$id'";
        $execute3=mysqli_query($connect,$update);
        if($execute3)
        {
          echo "<script>alert('Updated Successfully');</script>";
          echo "<script>window.location.href='my_car_details.php'</script>";
        }
        else
        {
          echo "<script>alert('Failed Please Try again')</script>";
          echo "<script>window.location.href='my_car_details.php'</script>";
        }

    }
  ?>