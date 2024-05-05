<?php include ('layout/header.php'); ?>
<?php
$id=$_GET['id'];
?>
								    <div class="registration">
								
												<div class="signin-form profile">
													<h2>Complaints Reply</h2><br><br>
													<div class="login-form">
														<?php
														include('../connect.php');
														$select="SELECT * FROM complaints WHERE comp_id='$id'";
														$execute=mysqli_query($connect,$select);
														$fetch=mysqli_fetch_array($execute);

														
														?>
														<form  method="post">
															<label>Customer Name:</label>
															<input type="text" name="name" value="<?php echo $fetch['comp_name']?>" readonly>
															<label>Customer Email:</label>
															<input type="text" name="email" value="<?php echo $fetch['comp_email']?>" readonly>
															<label>Subject:</label>
															<input type="text" name="sub" value="<?php echo $fetch['subject']?>" readonly>
															<label>Message:</label>
															<input type="text" name="msg" value="<?php echo $fetch['message']?>" readonly>
															<label>Reply</label>
															<input type="text" name="reply" value="" required="">

															
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
		$msg=$_POST['reply'];

		$update="UPDATE complaints set reply='$msg' WHERE comp_id='$id'";
		$execute1=mysqli_query($connect,$update);
		if ($execute1) 
		{
			echo "<script>alert('Replied Successfully')</script>";
			echo "<script>window.location.href='customer_complaints.php'</script>";
		}
		else
		{
			echo "<script>alert('Reply Failed Try Again !')</script>";
			echo "<script>window.location.href='reply-complaints.php'</script>";


		}
	}





?>
