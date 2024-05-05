<?php include ('layout/header.php'); ?>




								    <div class="registration">
								
												<div class="signin-form profile">
													<h2>My Profile</h2><br><br>
													<div class="login-form">
														<?php
														include('../connect.php');
														$select="SELECT * FROM admin WHERE email='$mail'";
														$execute=mysqli_query($connect,$select);
														$fetch=mysqli_fetch_array($execute);
														?>
														<form  method="post">
															<input type="email" name="email" placeholder="E-mail" required="" value="<?php echo $fetch['email']?>" readonly>
															<input type="text" name="password" placeholder="Password" required="" value="<?php echo $fetch['password']?>" readonly>
															<input type="text" name="newpass" placeholder="New Password" required="">
															<div class="tp">
																<input type="submit" value="SUBMIT" name="button">
															</div>
														</form>
													</div>
													
													</div>
										</div>
										<!--copy rights start here-->
											
											<!--copy rights end here-->
						    </div>
						</div>
							<!-- /login -->
<!-- //pages_agile_info_w3l -->


<!-- js -->

        



<?php include ('layout/footer.php'); ?>

<?php
include('../connect.php');

if (isset($_POST['button'])) 
	{
		$newpass=$_POST['newpass'];
		$update="UPDATE admin SET password='$newpass' WHERE email='$mail'";
		$execute1=mysqli_query($connect,$update);
		if ($execute1) 
		{
			echo "<script>alert('Updated Successfully')</script>";
			echo "<script>window.location.href='signin.php'</script>";
		}
		else
		{
			echo "<script>alert('Update Failed !')</script>";
			echo "<script>window.location.href='home.php'</script>";


		}
	}





?>
