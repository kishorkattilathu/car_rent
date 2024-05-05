<?php include ('layout/header.php'); ?>
<?php include('../connect.php');
 $id=$_GET['id'];
$select="SELECT * FROM brand WHERE brand_id='$id'";
$execute=mysqli_query($connect,$select);
$fetch=mysqli_fetch_array($execute);
$old=$fetch['brand_image'];
?>


<div class="registration">
								
												<div class="signin-form profile">
													<h2>Edit Brands</h2><br><br>
													<div class="login-form">
														
														<form  method="post" enctype="multipart/form-data">
															<label>Brand Name</label>
															<input type="text" name="brandname"  required="" value="<?php echo($fetch['brand_name'])?>" >
															<label>Brand Image</label><br>
															<img src="Brands/<?php echo($fetch['brand_image']);?>"><br>
															<label>Upload new Brand Image</label><br>
															<input type="file" name="image" placeholder="image">
															<br><br>
															<div class="tp">
																<input type="submit" value="SUBMIT" name="button">
															</div>
														</form>
													</div>
													
												</div>
									</div>
											
						    </div>
						</div>



<?php include ('layout/footer.php'); ?>


<?php

 if (isset($_POST['button'])) 
 {
 	$name=$_POST['brandname'];
 	$Image=$_FILES['image']['name'];
 	if($Image=='')
 	{
 		$new=$old;
 	}
 	else
 	{
 		$new=$Image;
 	}
 	$upload="UPDATE brand SET brand_name='$name',brand_image='$new' WHERE brand_id='$id'";
 	$execute1=mysqli_query($connect,$upload);
 	// echo "<pre>"; print_r($execute1); echo "</pre>"; die('end of code');
 	if ($execute1==1) 
 	{
 		move_uploaded_file($_FILES['image']['tmp_name'], 'Brands/'.$new);
 		echo "<script>alert('Successfully updated')</script>";
 		
 		echo "<script>window.location.href='manage_brands.php'</script>";	

 	}
 	else
 	{
 		echo "<script>alert('Failed updation')</script>";
 		echo "<script>window.location.href='manage_brands.php'</script>";	

 	}

 }

?>
