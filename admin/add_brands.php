<?php include ('layout/header.php'); ?>




								    <div class="registration">
								
												<div class="signin-form profile">
													<h2>Add Brands</h2><br><br>
													<div class="login-form">
														
														<form  method="post" enctype="multipart/form-data">
															<label>Brand Name</label>
															<input type="text" name="brandname"  required=""  >
															<label>Brand Image</label>
															<input type="file" name="image" placeholder="image" required="">
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
include('../connect.php');

if (isset($_POST['button'])) 
	{
		$brand=$_POST['brandname'];
		
		$Image=$_FILES['image']['name'];
		$image=explode('.', $Image);
		$exten=end($image);
		$allowextn=array("jpeg","jpg","png");
		$time=Time();
		$photo=$time.'.'.$exten;
		if (in_array($exten, $allowextn)) 
		{
			$select="SELECT * FROM brand WHERE brand_name='$brand'";
			$execute=mysqli_query($connect,$select);
			$count=mysqli_num_rows($execute);
			// print_r($count);
			// echo "printed";
			// die;
			if ($count==0)

			{
				move_uploaded_file($_FILES['image']['tmp_name'], 'Brands/'.$photo);
				$insert="INSERT INTO brand(brand_name,brand_image) values('$brand','$photo')";
				$execute1=mysqli_query($connect,$insert);
				// echo "execute1";
				if ($execute1==1)

				{
					echo "<script>alert('Successfully Uploaded')</script>";
					echo "<script>window.location.href='add_brands.php'</script>";
				}
				else
				{
					echo "<script>alert('Failed Try Again')</script>";
					echo "<script>window.location.href='add_brands.php'</script>";

				}
			}
			else
			{
					echo "<script>alert('File Already Exist')</script>";
					echo "<script>window.location.href='add_brands.php'</script>";

			}
		}
		else
		{
			echo "<script>alert('Failed Wrong file')</script>";
			echo "<script>window.location.href='add_brands.php'</script>";

		}
	}

?>

